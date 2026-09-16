import csv
import io
import re
import json

# Read compare_data.py to get wc_rows and final_rows
import compare_data

wc_rows = compare_data.wc_rows
final_rows = compare_data.final_rows

# Map WC rows by SKU and Trendyol URL
wc_by_sku = {}
wc_by_url = {}
for r in wc_rows:
    s = r.get('SKU', '').strip()
    u = r.get('Meta: _Product_Link', '').strip()
    if s:
        wc_by_sku[s] = r
    if u:
        wc_by_url[u] = r

def parse_specs(specs_str):
    lines = specs_str.replace('\\n', '\n').split('\n')
    specs = {}
    for line in lines:
        line = line.strip().lstrip('•').strip()
        if ':' in line:
            k, v = line.split(':', 1)
            clean_k = k.strip().lower()
            specs[clean_k] = v.strip()
    return specs

clean_products = []

for f in final_rows:
    sku = f['SKU'].strip()
    url = f.get('Meta: _trendyol', '').strip()
    name = f['Name'].strip()
    short_desc = f['Short Description'].strip()
    long_desc = f['Long Description'].strip()
    specs_raw = f['Specs'].strip()
    tags = f['Tags'].strip()
    homepage = f['Homepage'].strip()
    price_str = f['Regular Price'].replace(',', '').strip()
    price = float(price_str)
    
    # Matching WC export row
    wc_match = wc_by_sku.get(sku)
    if not wc_match and url:
        t_slug = url.split('/')[-1].split('?')[0]
        for w_u, w_r in wc_by_url.items():
            if t_slug in w_u:
                wc_match = w_r
                break
    
    images = wc_match.get('Images', '') if wc_match else ''
    categories = wc_match.get('Categories', '') if wc_match else 'Women Sleepwear, Pajama-Pants-Set'
    if not categories or categories == 'Uncategorized':
        categories = 'Women Sleepwear, Pajama-Pants-Set'
        
    wc_id = wc_match.get('ID', '') if wc_match else ''
    wc_sku = wc_match.get('SKU', '') if wc_match else sku
    
    specs = parse_specs(specs_raw)
    
    # Stock per size
    sizes_stock = {}
    for sz in ['xs', 's', 'm', 'l', 'xl']:
        val = float(f.get(sz, 0))
        sizes_stock[sz.upper()] = int(val)
        
    clean_products.append({
        'sku': sku,
        'wc_sku': wc_sku,
        'wc_id': wc_id,
        'name': name,
        'short_description': short_desc,
        'description': long_desc,
        'specs_raw': specs_raw,
        'specs': specs,
        'tags': tags,
        'homepage': homepage,
        'price': price,
        'images': images,
        'categories': categories,
        'trendyol_url': url,
        'stock': sizes_stock
    })

print(f"Parsed {len(clean_products)} clean products.")

# 1. Output WooCommerce CSV Import format
csv_headers = [
    "Type", "SKU", "Name", "Published", "Is featured?", "Visibility in catalog",
    "Short description", "Description", "Tax status", "Tax class",
    "In stock?", "Stock", "Backorders allowed?", "Sold individually?",
    "Allow customer reviews?", "Regular price", "Categories", "Tags",
    "Images", "Parent", "Attribute 1 name", "Attribute 1 value(s)",
    "Attribute 1 visible", "Attribute 1 global",
    "Meta: _fluff_homepage_view",
    "Meta: _fluff_spec_fabric",
    "Meta: _fluff_spec_set",
    "Meta: _fluff_spec_fit",
    "Meta: _fluff_spec_top",
    "Meta: _fluff_spec_bottom",
    "Meta: _fluff_spec_details",
    "Meta: _fluff_spec_season",
    "Meta: _fluff_spec_care",
    "Meta: _trendyol",
    "Meta: _Product_Link"
]

csv_output_rows = []

for p in clean_products:
    parent_sku = p['wc_sku'] if p['wc_sku'] else p['sku']
    specs = p['specs']
    
    # Parent row
    csv_output_rows.append({
        "Type": "variable",
        "SKU": parent_sku,
        "Name": p['name'],
        "Published": "1",
        "Is featured?": "0",
        "Visibility in catalog": "visible",
        "Short description": p['short_description'],
        "Description": p['description'],
        "Tax status": "taxable",
        "Tax class": "",
        "In stock?": "1",
        "Stock": "",
        "Backorders allowed?": "0",
        "Sold individually?": "0",
        "Allow customer reviews?": "1",
        "Regular price": f"{p['price']:.2f}",
        "Categories": p['categories'],
        "Tags": p['tags'],
        "Images": p['images'],
        "Parent": "",
        "Attribute 1 name": "Size",
        "Attribute 1 value(s)": "XS, S, M, L, XL",
        "Attribute 1 visible": "1",
        "Attribute 1 global": "1",
        "Meta: _fluff_homepage_view": p['homepage'],
        "Meta: _fluff_spec_fabric": specs.get('fabric', ''),
        "Meta: _fluff_spec_set": specs.get('set', ''),
        "Meta: _fluff_spec_fit": specs.get('fit', ''),
        "Meta: _fluff_spec_top": specs.get('top', ''),
        "Meta: _fluff_spec_bottom": specs.get('bottom', ''),
        "Meta: _fluff_spec_details": specs.get('details', ''),
        "Meta: _fluff_spec_season": specs.get('season', ''),
        "Meta: _fluff_spec_care": specs.get('care', ''),
        "Meta: _trendyol": p['trendyol_url'],
        "Meta: _Product_Link": p['trendyol_url']
    })
    
    # Child variation rows (XS, S, M, L, XL)
    for sz, qty in p['stock'].items():
        var_sku = f"{parent_sku}-{sz}"
        is_instock = "1" if qty > 0 else "0"
        csv_output_rows.append({
            "Type": "variation",
            "SKU": var_sku,
            "Name": f"{p['name']} - {sz}",
            "Published": "1",
            "Is featured?": "0",
            "Visibility in catalog": "visible",
            "Short description": "",
            "Description": "",
            "Tax status": "taxable",
            "Tax class": "parent",
            "In stock?": is_instock,
            "Stock": str(qty),
            "Backorders allowed?": "0",
            "Sold individually?": "0",
            "Allow customer reviews?": "0",
            "Regular price": f"{p['price']:.2f}",
            "Categories": "",
            "Tags": "",
            "Images": "",
            "Parent": parent_sku,
            "Attribute 1 name": "Size",
            "Attribute 1 value(s)": sz,
            "Attribute 1 visible": "",
            "Attribute 1 global": "1",
            "Meta: _fluff_homepage_view": "",
            "Meta: _fluff_spec_fabric": "",
            "Meta: _fluff_spec_set": "",
            "Meta: _fluff_spec_fit": "",
            "Meta: _fluff_spec_top": "",
            "Meta: _fluff_spec_bottom": "",
            "Meta: _fluff_spec_details": "",
            "Meta: _fluff_spec_season": "",
            "Meta: _fluff_spec_care": "",
            "Meta: _trendyol": "",
            "Meta: _Product_Link": ""
        })

with open("wc-products-variations-import.csv", "w", newline="", encoding="utf-8-sig") as f_out:
    writer = csv.DictWriter(f_out, fieldnames=csv_headers)
    writer.writeheader()
    for row in csv_output_rows:
        writer.writerow(row)

print(f"Generated wc-products-variations-import.csv with {len(csv_output_rows)} rows (20 parents + 100 variations).")

# Also save JSON for PHP script
with open("fluff_products_data.json", "w", encoding="utf-8") as f_json:
    json.dump(clean_products, f_json, indent=2)

print("Saved fluff_products_data.json")
