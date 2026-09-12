/**
 * FLUFF Sleepwear Theme JavaScript
 * Designed & Developed by Mostafa Saad (vitaldc.com)
 */

document.addEventListener('DOMContentLoaded', function() {
    // --- Cart Drawer Toggles ---
    const cartDrawer = document.getElementById('fluffCartDrawer');
    const openCartBtns = document.querySelectorAll('[data-action="open-cart"], .open-cart-btn');
    const closeCartBtns = document.querySelectorAll('[data-action="close-cart"], .close-cart-btn');

    function openCart() {
        if (cartDrawer) {
            cartDrawer.classList.remove('translate-x-full', 'pointer-events-none', 'hidden');
            cartDrawer.classList.add('translate-x-0', 'pointer-events-auto');
            document.body.classList.add('overflow-hidden');
        }
    }

    function closeCart() {
        if (cartDrawer) {
            cartDrawer.classList.add('translate-x-full', 'pointer-events-none');
            cartDrawer.classList.remove('translate-x-0', 'pointer-events-auto');
            document.body.classList.remove('overflow-hidden');
        }
    }

    openCartBtns.forEach(btn => btn.addEventListener('click', function(e) {
        e.preventDefault();
        openCart();
    }));

    closeCartBtns.forEach(btn => btn.addEventListener('click', function(e) {
        e.preventDefault();
        closeCart();
    }));

    // --- Search Modal Toggles ---
    const searchModal = document.getElementById('fluffSearchModal');
    const openSearchBtns = document.querySelectorAll('[aria-label="Search"], [data-action="open-search"]');
    const closeSearchBtns = document.querySelectorAll('[data-action="close-search"]');

    openSearchBtns.forEach(btn => btn.addEventListener('click', function(e) {
        if (searchModal) {
            e.preventDefault();
            searchModal.classList.remove('hidden');
        }
    }));

    closeSearchBtns.forEach(btn => btn.addEventListener('click', function(e) {
        if (searchModal) {
            e.preventDefault();
            searchModal.classList.add('hidden');
        }
    }));

    // --- Mobile Menu Toggle ---
    const mobileMenu = document.getElementById('fluffMobileMenu');
    const openMenuBtn = document.querySelector('[aria-label="Open Menu"]');
    const closeMenuBtn = document.querySelector('[data-action="close-menu"]');

    if (openMenuBtn && mobileMenu) {
        openMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.remove('hidden');
        });
    }
    if (closeMenuBtn && mobileMenu) {
        closeMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.add('hidden');
        });
    }

    // --- Filter Drawer Accordion Panel ---
    const filterBtn = document.getElementById('openFilterBtn');
    const filterDrawer = document.getElementById('filterDrawer');
    if (filterBtn && filterDrawer) {
        filterBtn.addEventListener('click', function(e) {
            e.preventDefault();
            filterDrawer.classList.toggle('hidden');
        });
    }

    // --- Single Product Image Gallery Switcher ---
    const mainProductImg = document.getElementById('main-product-img');
    const galleryThumbs = document.querySelectorAll('.gallery-thumb');

    galleryThumbs.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const newSrc = this.getAttribute('data-full-img') || this.src;
            if (mainProductImg && newSrc) {
                mainProductImg.src = newSrc;
                galleryThumbs.forEach(t => t.classList.remove('ring-2', 'ring-primary'));
                this.classList.add('ring-2', 'ring-primary');
            }
        });
    });

    // --- Product Swatches Selector (Size / Color) ---
    const swatchBtns = document.querySelectorAll('.swatch-btn');
    swatchBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const group = this.closest('.swatch-group');
            if (group) {
                group.querySelectorAll('.swatch-btn').forEach(b => {
                    b.classList.remove('bg-primary', 'text-on-primary', 'border-primary');
                    b.classList.add('bg-surface-container', 'text-on-surface');
                });
                this.classList.add('bg-primary', 'text-on-primary', 'border-primary');
                this.classList.remove('bg-surface-container', 'text-on-surface');

                // Update hidden input if present in variation form
                const hiddenInput = group.querySelector('input[type="hidden"]');
                if (hiddenInput) {
                    hiddenInput.value = this.getAttribute('data-value') || this.textContent.trim();
                }
            }
        });
    });

    // --- Accordion Toggles ---
    const accordionToggles = document.querySelectorAll('.accordion-toggle');
    accordionToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetEl = document.getElementById(targetId);
            const icon = this.querySelector('.accordion-icon');
            if (targetEl) {
                targetEl.classList.toggle('hidden');
                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            }
        });
    });

    // --- Sizing Modal Trigger ---
    const sizingModal = document.getElementById('fluffSizingModal');
    const openSizingBtns = document.querySelectorAll('[data-action="open-sizing"]');
    const closeSizingBtns = document.querySelectorAll('[data-action="close-sizing"]');

    openSizingBtns.forEach(btn => btn.addEventListener('click', function(e) {
        if (sizingModal) {
            e.preventDefault();
            sizingModal.classList.remove('hidden');
        }
    }));
    closeSizingBtns.forEach(btn => btn.addEventListener('click', function(e) {
        if (sizingModal) {
            e.preventDefault();
            sizingModal.classList.add('hidden');
        }
    }));
});
