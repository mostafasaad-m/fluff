/**
 * FLUFF Sleepwear Theme Scripts
 * Crafted for FLUFF Sleepwear (vitaldc.com)
 */

document.addEventListener('DOMContentLoaded', function() {
    // --- Hero Artisanal Slick Carousel ---
    if (typeof jQuery !== 'undefined' && typeof jQuery.fn.slick !== 'undefined') {
        const $heroSlider = jQuery('#fluffHeroSlider');
        if ($heroSlider.length) {
            $heroSlider.slick({
                dots: true,
                arrows: true,
                prevArrow: jQuery('.fluff-slick-prev'),
                nextArrow: jQuery('.fluff-slick-next'),
                infinite: true,
                speed: 750,
                fade: true,
                cssEase: 'cubic-bezier(0.4, 0, 0.2, 1)',
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: true,
                pauseOnFocus: false,
                adaptiveHeight: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                touchThreshold: 10
            });
        }
    }

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
    const openMenuBtns = document.querySelectorAll('[data-action="open-menu"], [aria-label="Open Menu"]');
    const closeMenuBtns = document.querySelectorAll('[data-action="close-menu"]');

    function openMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }
    }

    function closeMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');
        }
    }

    openMenuBtns.forEach(btn => btn.addEventListener('click', function(e) {
        e.preventDefault();
        openMobileMenu();
    }));

    closeMenuBtns.forEach(btn => btn.addEventListener('click', function(e) {
        e.preventDefault();
        closeMobileMenu();
    }));

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

    // --- FLUFF Single Product Variation Swatches Controller ---
    const fluffSwatches = document.querySelectorAll('.fluff-swatch-pill');
    const sizeDisplay = document.getElementById('fluffSelectedSizeName');
    const stockFeedback = document.getElementById('fluffStockFeedback');

    function activateFluffSize(btn) {
        if (!btn || btn.classList.contains('is-outofstock') || btn.hasAttribute('disabled')) {
            return;
        }

        const size = btn.getAttribute('data-size');
        const varId = btn.getAttribute('data-variation-id');

        // Update UI state
        fluffSwatches.forEach(s => s.classList.remove('is-selected'));
        btn.classList.add('is-selected');

        if (sizeDisplay) {
            sizeDisplay.innerText = size;
        }

        if (stockFeedback) {
            stockFeedback.innerHTML = `<span class="w-2.5 h-2.5 rounded-full bg-[#25D366] animate-pulse"></span><span class="text-[#25D366]">Size ${size} is in stock & ready for Cairo Express delivery.</span>`;
        }

        // Connect with WooCommerce variations form
        const wcForm = document.querySelector('form.variations_form');
        if (wcForm) {
            const selects = wcForm.querySelectorAll('select[name*="size"], select');
            selects.forEach(sel => {
                let matched = false;
                for (let i = 0; i < sel.options.length; i++) {
                    if (sel.options[i].value.toUpperCase() === size.toUpperCase()) {
                        sel.selectedIndex = i;
                        matched = true;
                        break;
                    }
                }
                if (matched) {
                    if (typeof jQuery !== 'undefined') {
                        jQuery(sel).trigger('change');
                    } else {
                        sel.dispatchEvent(new Event('change', { bubbles: true }));
                    }
                }
            });

            if (varId) {
                const varInput = wcForm.querySelector('input.variation_id, input[name="variation_id"]');
                if (varInput) {
                    varInput.value = varId;
                }
            }
        }
    }

    fluffSwatches.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            activateFluffSize(this);
        });
    });

    // Automatically trigger initial selected size on load
    const initialSelected = document.querySelector('.fluff-swatch-pill.is-instock.is-selected') || document.querySelector('.fluff-swatch-pill.is-instock');
    if (initialSelected) {
        setTimeout(function() {
            activateFluffSize(initialSelected);
        }, 150);
    }

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

// --- Global Client-Side Micro-Interactions & Notifications ---
function showToast(message) {
    const toast = document.getElementById('toastNotification');
    const text = document.getElementById('toastMessage');
    if (!toast) return;
    if (text) text.innerText = message;
    toast.classList.remove('-translate-y-12', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');
    setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('-translate-y-12', 'opacity-0');
    }, 2400);
}

function toggleWishlist(btn, productName) {
    const icon = btn.querySelector('.material-symbols-outlined');
    if (!icon) return;
    const isFilled = icon.innerText.trim() === 'favorite';
    if (isFilled) {
        icon.innerText = 'favorite_border';
        btn.classList.remove('text-primary');
        btn.classList.add('text-charcoal-muted');
        showToast('Removed ' + productName);
    } else {
        icon.innerText = 'favorite';
        icon.style.fontVariationSettings = "'FILL' 1";
        btn.classList.remove('text-charcoal-muted');
        btn.classList.add('text-primary');
        showToast('Saved ' + productName + ' to Wishlist');
    }
}

function addToCart(productName) {
    showToast('Added ' + productName + ' to Bag');
    // Bump badge count if present
    const badges = document.querySelectorAll('.fluff-cart-count-badge');
    badges.forEach(b => {
        let count = parseInt(b.innerText.trim(), 10);
        if (!isNaN(count)) {
            b.innerText = count + 1;
        }
    });
}

function handleNewsletter(e) {
    if (e && e.preventDefault) e.preventDefault();
    const form = e ? e.target : null;
    const input = (form && form.querySelector) 
        ? form.querySelector('input[type="email"]') 
        : (document.getElementById('emailInput') || document.getElementById('emailInputFooter'));
    
    if (input && input.value) {
        showToast('Welcome to FLUFF Club! Your 10% code: FLUFF10');
        input.value = '';
    }
}

