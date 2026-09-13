import os
import sys
import time
import argparse
import urllib.request
import urllib.error
from concurrent.futures import ThreadPoolExecutor, as_completed

import re
import shutil

USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'

def get_extension_from_url(url):
    """Extract file extension from URL or default to .jpg."""
    clean_url = url.split('?')[0].split('#')[0]
    ext = os.path.splitext(clean_url)[1].lower()
    if ext in ['.jpg', '.jpeg', '.png', '.webp', '.gif']:
        return ext
    return '.jpg'

def download_single_image(item):
    line_idx, sku, img_idx, url, output_dir, organize_folders, retries, timeout, force = item
    
    ext = get_extension_from_url(url)
    clean_sku = re.sub(r'[\\/*?:"<>|]', '', str(sku)).strip() if sku else None
    sku_identifier = clean_sku if clean_sku else f"item_{line_idx:03d}"
    
    filename = f"{sku_identifier}_{img_idx}{ext}"
    
    if organize_folders:
        folder_path = os.path.join(output_dir, sku_identifier)
        os.makedirs(folder_path, exist_ok=True)
        file_path = os.path.join(folder_path, filename)
    else:
        file_path = os.path.join(output_dir, filename)

    # Skip if file already downloaded and non-empty unless force is requested
    if not force and os.path.exists(file_path) and os.path.getsize(file_path) > 0:
        return True, file_path, "skipped (exists)", url

    req = urllib.request.Request(url, headers={'User-Agent': USER_AGENT})
    
    for attempt in range(retries):
        try:
            with urllib.request.urlopen(req, timeout=timeout) as response, open(file_path, 'wb') as out_file:
                out_file.write(response.read())
            return True, file_path, "downloaded", url
        except Exception as e:
            if attempt == retries - 1:
                if os.path.exists(file_path):
                    try:
                        os.remove(file_path)
                    except OSError:
                        pass
                return False, file_path, str(e), url
            time.sleep(1 * (attempt + 1))

def main():
    parser = argparse.ArgumentParser(description="Mass download images from links.txt using SKU for renaming")
    parser.add_argument("--file", "-f", default="links.txt", help="Input text file containing URLs and SKUs (default: links.txt)")
    parser.add_argument("--output", "-o", default="downloaded_images", help="Output directory for downloaded images (default: downloaded_images)")
    parser.add_argument("--threads", "-t", type=int, default=16, help="Number of concurrent download threads (default: 16)")
    parser.add_argument("--flat", action="store_true", help="Save images directly into output directory instead of SKU subfolders")
    parser.add_argument("--force", action="store_true", help="Re-download existing files")
    parser.add_argument("--retries", type=int, default=3, help="Max retries per URL on error (default: 3)")
    parser.add_argument("--timeout", type=int, default=15, help="Socket timeout in seconds (default: 15)")

    args = parser.parse_args()

    if not os.path.exists(args.file):
        print(f"Error: Input file '{args.file}' not found.")
        sys.exit(1)

    os.makedirs(args.output, exist_ok=True)

    print(f"Parsing '{args.file}' for SKUs and image URLs...")
    tasks = []
    
    with open(args.file, 'r', encoding='utf-8') as f:
        for line_idx, line in enumerate(f, 1):
            tokens = [t.strip() for t in line.strip().split() if t.strip()]
            if not tokens:
                continue

            sku = None
            img_urls = []

            for token in tokens:
                if token.startswith('http://') or token.startswith('https://'):
                    # Ignore product webpage links (e.g., trendyol.com/...), keep image links
                    if not ('trendyol.com/' in token and not token.endswith(('.jpg', '.jpeg', '.png', '.webp'))):
                        img_urls.append(token)
                else:
                    clean_token = re.sub(r'[\\/*?:"<>|]', '', token).strip()
                    if clean_token and sku is None:
                        sku = clean_token

            for img_idx, url in enumerate(img_urls, 1):
                tasks.append((line_idx, sku, img_idx, url, args.output, not args.flat, args.retries, args.timeout, args.force))

    total_urls = len(tasks)
    print(f"Found {total_urls} image URLs across lines in '{args.file}'.")
    if total_urls == 0:
        print("No image URLs found to download.")
        return

    print(f"Starting mass download using {args.threads} threads...")
    print(f"Output directory: {os.path.abspath(args.output)}")
    print("-" * 60)

    start_time = time.time()
    success_count = 0
    skipped_count = 0
    failed_count = 0

    with ThreadPoolExecutor(max_workers=args.threads) as executor:
        futures = {executor.submit(download_single_image, task): task for task in tasks}
        
        for i, future in enumerate(as_completed(futures), 1):
            success, file_path, status, url = future.result()
            if success:
                if status == "skipped (exists)":
                    skipped_count += 1
                else:
                    success_count += 1
            else:
                failed_count += 1
                print(f"\n[FAIL] {url} -> {status}")

            pct = (i / total_urls) * 100
            sys.stdout.write(f"\rProgress: [{i}/{total_urls}] {pct:.1f}% | Downloaded: {success_count} | Skipped: {skipped_count} | Failed: {failed_count}")
            sys.stdout.flush()

    elapsed = time.time() - start_time
    print(f"\n" + "-" * 60)
    print(f"Finished in {elapsed:.2f} seconds.")
    print(f"Total: {total_urls} | Downloaded: {success_count} | Skipped: {skipped_count} | Failed: {failed_count}")

    # Zip output directory
    zip_dest = f"{args.output}.zip"
    print(f"\nCreating zip archive '{zip_dest}'...")
    try:
        shutil.make_archive(args.output, 'zip', args.output)
        print(f"Archive successfully created: {os.path.abspath(zip_dest)}")
    except Exception as e:
        print(f"Warning: Could not create zip archive: {e}")

if __name__ == "__main__":
    main()
