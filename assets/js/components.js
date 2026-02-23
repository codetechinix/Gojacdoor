/**
 * ========================================================
 * Krist E-Commerce – Shared UI Components
 * Dynamically renders header, footer, sidebar, mini-cart
 * ========================================================
 */

/* ── Product Data Store ───────────────────────────────── */
const PRODUCTS = [
    { id: 1, name: 'Printed Cotton T-Shirt', brand: 'Allen Solly', price: 38.00, oldPrice: 48.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0', rating: 4.5, reviews: 56, category: 'men', size: ['S', 'M', 'L', 'XL'], color: 'black' },
    { id: 2, name: 'Women Textured Handheld Bag', brand: 'Louis Philippe', price: 78.00, oldPrice: 98.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ', rating: 4.8, reviews: 120, category: 'women', size: ['One Size'], color: 'brown', inStock: false },
    { id: 3, name: 'Polo Collar T-Shirt', brand: 'Adidas', price: 42.00, oldPrice: null, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc', rating: 4.2, reviews: 34, category: 'men', size: ['M', 'L', 'XL'], color: 'blue' },
    { id: 4, name: 'Men adi-dash Running Shoes', brand: 'Trendyol', price: 65.00, oldPrice: 80.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCm6dR6oF2uuYLGQFK4zjq2_oxErZ3IbPvvbbx0eKcLb0d_vZ4qAu3GuSHcVBFIjSLruwci0TDlEkzKk9HpFmO8X20FX1GLzwnnFYE4Qaw9KGIcSBSJG0j52U2LF5RuEfz-2_N3Ny9aeSuF1iIZUHNOO0vTrsPqg-qAaM_Ufx6rAW1Zjb7daNG-IQQ6MQ-EAYhod0ExJ0q4uPTGJxb7c6mBe0yWvUDmM-MmLgbWRC7LcqO0ESiYgp3DBFeo6M-7VrjrHJajaD1Zc4Q', rating: 4.6, reviews: 88, category: 'men', size: ['8', '9', '10', '11'], color: 'white' },
    { id: 5, name: 'Floral Embroidered Maxi Dress', brand: 'Zyla', price: 55.00, oldPrice: 70.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB0XqfpSJY2aHwGAeV_Jr5RJWZ0dENi0m20KVUWvAUV14S3x0PPF_I983qcvFeNJDCWPa6I3IlQpXs0GxHj0oi3PJ1jjHpc3s83ZqX3JdRiyFVmMbKaOjJipcaOW8kHYGrcuDHhsbpbxByv_3u7IctEwQv_Y7A6pcKlylUctIQg9XwNPItE_dFiA70znSDSjDRxyjm_TZ4Q0aYbLNmlb_Ns0jWw12JNXA6NHI9YNSAGJ1ypYclrRRbaRK5PzU0jAycXdUh676vB8_o', rating: 4.9, reviews: 200, category: 'women', size: ['S', 'M', 'L'], color: 'red' },
    { id: 6, name: 'Girls Pink Moana Printed Dress', brand: 'YK Disney', price: 28.00, oldPrice: 35.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0', rating: 4.3, reviews: 45, category: 'kids', size: ['3-4Y', '5-6Y', '7-8Y'], color: 'pink' },
    { id: 7, name: 'Tailored Cotton Casual Shirt', brand: 'US Polo', price: 52.00, oldPrice: null, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ', rating: 4.1, reviews: 29, category: 'men', size: ['S', 'M', 'L', 'XL', 'XXL'], color: 'white' },
    { id: 8, name: 'Brown Leather Jacket', brand: 'Gucci', price: 149.00, oldPrice: 189.00, image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc', rating: 4.7, reviews: 156, category: 'men', size: ['M', 'L', 'XL'], color: 'brown' },
];

/* ── Cart State ───────────────────────────────────────── */
let cart = JSON.parse(localStorage.getItem('krist_cart') || '[]');
let wishlist = JSON.parse(localStorage.getItem('krist_wishlist') || '[]');

function saveCart() { localStorage.setItem('krist_cart', JSON.stringify(cart)); updateCartBadge(); }
function saveWishlist() { localStorage.setItem('krist_wishlist', JSON.stringify(wishlist)); updateWishlistBadge(); }

function updateWishlistBadge() {
    const badge = document.getElementById('wishlistBadge');
    if (badge) {
        badge.textContent = wishlist.length;
        if (wishlist.length > 0) {
            badge.style.display = 'flex';
        } else {
            badge.style.display = 'none';
        }
    }
}

function addToCart(productId, qty = 1) {
    const existing = cart.find(i => i.id === productId);
    if (existing) { existing.qty += qty; }
    else { cart.push({ id: productId, qty }); }
    saveCart();
    showToast('Added to cart!', 'success');
}

function removeFromCart(productId) {
    cart = cart.filter(i => i.id !== productId);
    saveCart();
}

function updateCartQty(productId, qty) {
    const item = cart.find(i => i.id === productId);
    if (item) { item.qty = Math.max(1, qty); saveCart(); }
}

function getCartTotal() {
    return cart.reduce((sum, item) => {
        const p = PRODUCTS.find(pr => pr.id === item.id);
        return sum + (p ? p.price * item.qty : 0);
    }, 0);
}

function toggleWishlist(productId) {
    const idx = wishlist.indexOf(productId);
    if (idx > -1) { wishlist.splice(idx, 1); showToast('Removed from wishlist', 'info'); }
    else { wishlist.push(productId); showToast('Added to wishlist!', 'success'); }
    saveWishlist();
    if (typeof renderWishlistPage === 'function') {
        renderWishlistPage();
    }
}

function updateCartBadge() {
    document.querySelectorAll('.cart-badge').forEach(el => {
        const count = cart.reduce((s, i) => s + i.qty, 0);
        el.textContent = count;
        el.style.display = count > 0 ? 'flex' : 'none';
    });
}

/* ── Utility Functions ────────────────────────────────── */
function showToast(message, type = 'success') {
    if (typeof Toastify === 'undefined') return alert(message);
    const colors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        info: 'bg-primary'
    };
    Toastify({
        text: message,
        duration: 3000,
        gravity: "bottom",
        position: "center",
        className: `${colors[type] || colors.info} text-white font-medium rounded-md px-6 py-3 shadow-xl flex items-center`,
        stopOnFocus: true
    }).showToast();
}

/* ── Render Header ────────────────────────────────────── */
function renderHeader(activePage = '') {
    const headerEl = document.getElementById('site-header');
    if (!headerEl) return;
    headerEl.innerHTML = `
    <div class="container mx-auto px-4 md:px-8 flex items-center justify-between h-20">
        <a href="index.php" class="flex items-center space-x-2 group">
            <span class="text-3xl font-bold tracking-tighter text-primary dark:text-white flex items-center group-hover:opacity-80 transition-opacity">
                <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Krist
            </span>
        </a>
        <nav class="hidden md:flex items-center space-x-8">
            <a class="font-medium hover:text-primary/70 transition-colors ${activePage === 'home' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400'}" href="index.php">Home</a>
            <div class="group relative">
                <button class="flex items-center font-medium hover:text-primary/70 transition-colors py-8 ${activePage === 'shop' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400'}">
                    Shop
                    <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="mega-menu absolute left-1/2 -translate-x-1/2 top-full w-[900px] bg-white dark:bg-slate-900 shadow-2xl rounded-b-md border border-slate-100 dark:border-slate-800 p-10 grid-cols-4 gap-8 z-50">
                    <div class="space-y-8">
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Men</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=men">T-Shirts</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=men">Casual Shirts</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=men">Formal Shirts</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=men">Jackets</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=men">Blazers & Coats</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Indian & Festive Wear</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Kurtas & Kurta Sets</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Sherwanis</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-px bg-slate-200 dark:bg-slate-700 hidden md:block"></div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Women</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Kurtas & Suits</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Sarees</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Ethnic Wear</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Lehenga Cholis</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Western Wear</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Dresses</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=women">Jumpsuits</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-px bg-slate-200 dark:bg-slate-700 hidden md:block"></div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Footwear</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Flats</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Casual Shoes</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Heels</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php">Boots</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Kids</h3>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=kids">T-Shirts</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=kids">Shirts</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=kids">Jeans</a></li>
                                <li><a class="hover:text-primary dark:hover:text-white transition-colors" href="shop.php?cat=kids">Trousers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400" href="our-story.php">Our Story</a>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400" href="blog.php">Blog</a>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400" href="contact.php">Contact Us</a>
        </nav>
        <div class="flex items-center space-x-6">
            <a href="search-results.php" class="hover:text-primary/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></a>
            <a href="wishlist.php" class="hover:text-primary/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></a>
            <div class="relative">
                <button onclick="toggleMiniCart()" class="hover:text-primary/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg></button>
                <span class="cart-badge absolute -top-2 -right-2 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">0</span>
            </div>
            <a href="login.php" class="bg-primary text-white px-8 py-2.5 rounded-md font-medium hover:bg-slate-800 transition-colors hidden lg:block">Login</a>
            <button onclick="toggleMobileMenu()" class="md:hidden"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 p-6 space-y-4">
        <a href="index.php" class="block py-2 font-medium">Home</a>
        <a href="shop.php" class="block py-2 font-medium">Shop</a>
        <a href="search-results.php" class="block py-2 font-medium">Search</a>
        <a href="personal-info.php" class="block py-2 font-medium">My Account</a>
        <a href="login.php" class="block py-2 bg-primary text-white text-center rounded-md font-medium">Login</a>
    </div>`;
    updateCartBadge();
}

/* ── Render Footer ────────────────────────────────────── */
function renderFooter() {
    const footerEl = document.getElementById('site-footer');
    if (!footerEl) return;
    footerEl.innerHTML = `
    <div class="container mx-auto px-4 md:px-8">
        <!-- Benefits Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16 -mt-10">
            <div class="bg-white dark:bg-slate-800 rounded-md p-6 shadow-lg flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-10 h-10 text-primary dark:text-white shrink-0 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                <div>
                    <h4 class="font-bold text-sm text-slate-900 dark:text-white">Free Shipping</h4>
                    <p class="text-xs text-slate-500 mt-1">For orders above $150</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md p-6 shadow-lg flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="200">
                <svg class="w-10 h-10 text-primary dark:text-white shrink-0 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <h4 class="font-bold text-sm text-slate-900 dark:text-white">Money Guarantee</h4>
                    <p class="text-xs text-slate-500 mt-1">Within 30 days exchange</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md p-6 shadow-lg flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="300">
                <svg class="w-10 h-10 text-primary dark:text-white shrink-0 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <div>
                    <h4 class="font-bold text-sm text-slate-900 dark:text-white">Online Support</h4>
                    <p class="text-xs text-slate-500 mt-1">24 hours a day, 7 days</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md p-6 shadow-lg flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="400">
                <svg class="w-10 h-10 text-primary dark:text-white shrink-0 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <div>
                    <h4 class="font-bold text-sm text-slate-900 dark:text-white">Flexible Payment</h4>
                    <p class="text-xs text-slate-500 mt-1">Multiple credit cards</p>
                </div>
            </div>
        </div>
        <!-- Footer Content -->
        <div class="grid md:grid-cols-4 gap-12 mb-16 mt-8">
            <div class="space-y-6">
                <a href="index.php" class="flex items-center space-x-2 group">
                    <span class="text-3xl font-bold tracking-tighter flex items-center group-hover:opacity-80 transition-opacity">
                        <svg class="w-8 h-8 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Krist
                    </span>
                </a>
                <div class="space-y-4 text-slate-400 text-sm">
                    <p class="flex items-center"><svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>(704) 555-0127</p>
                    <p class="flex items-center"><svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>krist@example.com</p>
                    <p class="flex items-center"><svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>3891 Ranchview Dr. Richardson,<br/>California 62639</p>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-6">Information</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a class="hover:text-white transition-colors" href="personal-info.php">My Account</a></li>
                    <li><a class="hover:text-white transition-colors" href="login.php">Login</a></li>
                    <li><a class="hover:text-white transition-colors" href="cart.php">My Cart</a></li>
                    <li><a class="hover:text-white transition-colors" href="wishlist.php">My Wishlist</a></li>
                    <li><a class="hover:text-white transition-colors" href="checkout.php">Checkout</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6">Service</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a class="hover:text-white transition-colors" href="our-story.php">About Us</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Careers</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Delivery Information</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Privacy Policy</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6">Subscribe</h4>
                <p class="text-sm text-slate-400 mb-6">Enter your email below to be the first to know about new collections and product launches.</p>
                <form onsubmit="handleSubscribe(event)" class="relative" novalidate>
                    <input id="footerEmail" class="w-full bg-transparent border border-slate-700 rounded-md py-3 px-4 text-white text-sm focus:outline-none focus:ring-2 focus:ring-slate-500 transition-colors" placeholder="Your Email" type="email" required/>
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></button>
                </form>
            </div>
        </div>
        <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-sm text-slate-500">
            <div class="flex space-x-4">
                <img alt="Visa" class="h-6 opacity-60 hover:opacity-100 grayscale transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoZp53i66R8hWUliVGOmM7PP0RbCKCrJ6aMhixNxE8RKtwExCINuL-2Xrb3UEeYogRX4JW6lzy9D8amRO-hya4xemTXb3oVBm8s26tS3DjNQTqTimyuxl00ALf-3Wo0zNsD_X415eV_2rCXtv051WS0l36gM6aZWr7yrHylvJG0p_lLQSvnWhAeUv7lxL36twYPvYIHDL0gT4UQm5_WmHaByfCaR2ffCbT4oyCOyY2RNdtdBCkaOU3i2O97CGD6RIxRQd6WsQOwig"/>
                <img alt="Mastercard" class="h-6 opacity-60 hover:opacity-100 grayscale transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0cFzRQApclEOeHBc1aQXH84GXk8zLwoH6BgKFa1R9CeRnVkHbPFJkMUQ6QUW8MARPVmXGKeYwmRzSASc5b4bFGZxFky_s-Y_-T62uqV7hBy5J7GBr3eD8qT9-T-zxqoxw4eF1Q6t4zA_1JCVirHjhAFAqhQBMNKpWekZB08ZJkvjKhP9BX8Tntr_gOIqm29_3n1RPVqPTQsw3E7afxCRfjxgQ8m-CTkwvHBerHS5rybrwTctcZ18T9K5388XFvt3QagB0MvHliKI"/>
                <img alt="Google Pay" class="h-6 opacity-60 hover:opacity-100 grayscale transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8qdfosOyzgWUGngrES8W90OPuUQEXIVTdWH6aDjicWHlYnTEexL_0RdyyneFMlZrq--sjCfL7YNrJ5WExd9tW55nr96VUO7IQKj8wdB_W3iy92-2KhXj2NgPOlYhz9gFPkZ9gzMDCiZXZKR7v_2V9kfubLn8sUAumhTQ-Hpb4ToSqw7axMoF3Lvh4ZxBLRrJndVqVSiK9WyMIk0xQBaUTR60iyi-L3UmT2DOL4GDMOKRS9zNCs06L9yI1esFc1m6p1sCo-EJ37qU"/>
                <img alt="Paypal" class="h-6 opacity-60 hover:opacity-100 grayscale transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrPpgMCfwVv79qKTdmXrGJNWPgmxK1EWZROlDNarbG7hi982--C56ffeeLFBoXiFFkgxhiHDVvYVrxAfaCObe3Fp3-HnQZ8XPHk-5X0rmsgISNjswPbSZ6wCBZYjADb2XVs_bBG1NoDiHVM0gBKhWjRo3YLuTguaQuKCRQDWm4e9Zr9kDgPehmsowK4P8-6Xl7-_dxTDmih0OHBZWuaKNR9XmVnUy5ztdItHAbatvmUkqSiSF0qGBV6p5Hk-8X160-DHaMXuPkCKc"/>
            </div>
            <p>©2024 Krist All Rights reserved</p>
            <div class="flex space-x-6">
                <a class="hover:text-white" href="#"><span class="material-symbols-outlined text-lg">facebook</span></a>
                <a class="hover:text-white" href="#"><span class="material-symbols-outlined text-lg">photo_camera</span></a>
                <a class="hover:text-white" href="#"><span class="material-symbols-outlined text-lg">alternate_email</span></a>
            </div>
        </div>
    </div>`;
}

/* ── Account Sidebar ──────────────────────────────────── */
function renderAccountSidebar(activePage = '') {
    const sidebarEl = document.getElementById('account-sidebar');
    if (!sidebarEl) return;
    const links = [
        { href: 'personal-info.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>', label: 'My Profile', key: 'profile' },
        { href: 'personal-info.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>', label: 'Personal Information', key: 'personal-info' },
        { href: 'orders.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>', label: 'My Orders', key: 'orders' },
        { href: 'wishlist.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>', label: 'My Wishlist', key: 'wishlist' },
        { href: 'manage-addresses.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>', label: 'Manage Addresses', key: 'addresses' },
        { href: 'saved-cards.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>', label: 'Saved Cards', key: 'saved-cards' },
        { href: 'notifications.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>', label: 'Notifications', key: 'notifications' },
        { href: 'settings.php', icon: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>', label: 'Settings', key: 'settings' },
    ];
    sidebarEl.innerHTML = `
    <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
        <div class="p-6 border-b border-slate-100 dark:border-slate-800">
            <div class="flex items-center space-x-4">
                <div class="w-14 h-14 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold">JD</div>
                <div>
                    <h3 class="font-bold text-slate-900 dark:text-white">John Doe</h3>
                    <p class="text-sm text-slate-500">john.doe@example.com</p>
                </div>
            </div>
        </div>
        <nav class="p-2">
            ${links.map(l => `
            <a href="${l.href}" class="flex items-center space-x-3 px-4 py-3 rounded-md text-sm font-medium transition-colors ${activePage === l.key ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800'}">
                ${l.icon}
                <span>${l.label}</span>
            </a>`).join('')}
            <button onclick="handleLogout()" class="w-full flex items-center space-x-3 px-4 py-3 rounded-md text-sm font-medium text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors mt-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span>Logout</span>
            </button>
        </nav>
    </div>`;
}

/* ── Mini Cart Drawer ─────────────────────────────────── */
function renderMiniCart() {
    const existing = document.getElementById('miniCartDrawer');
    if (existing) return;
    const drawer = document.createElement('div');
    drawer.id = 'miniCartDrawer';
    drawer.className = 'fixed inset-0 z-[200] pointer-events-none';
    drawer.innerHTML = `
    <div id="miniCartOverlay" class="absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-300" onclick="toggleMiniCart()"></div>
    <div id="miniCartPanel" class="absolute right-0 top-0 h-full w-full max-w-md bg-white dark:bg-slate-900 shadow-2xl translate-x-full transition-transform duration-300 flex flex-col">
        <div class="flex items-center justify-between p-6 border-b border-slate-100 dark:border-slate-800">
            <h2 class="text-xl font-bold text-slate-900 dark:text-white">Shopping Cart</h2>
            <button onclick="toggleMiniCart()" class="text-slate-400 hover:text-slate-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
        </div>
        <div id="miniCartItems" class="flex-1 overflow-y-auto p-6 space-y-6"></div>
        <div class="border-t border-slate-100 dark:border-slate-800 p-6">
            <div class="flex justify-between mb-4 font-bold text-lg"><span>Subtotal</span><span id="miniCartTotal">$0.00</span></div>
            <a href="cart.php" class="block w-full text-center py-3 border-2 border-primary text-primary dark:text-white rounded-md font-medium hover:bg-primary hover:text-white transition-colors mb-3">View Cart</a>
            <a href="checkout.php" class="block w-full text-center py-3 bg-primary text-white rounded-md font-medium hover:bg-slate-800 transition-colors">Checkout</a>
        </div>
    </div>`;
    document.body.appendChild(drawer);
}

function toggleMiniCart() {
    const drawer = document.getElementById('miniCartDrawer');
    const overlay = document.getElementById('miniCartOverlay');
    const panel = document.getElementById('miniCartPanel');
    const isOpen = !drawer.classList.contains('pointer-events-none');
    if (isOpen) {
        drawer.classList.add('pointer-events-none');
        overlay.classList.add('opacity-0');
        panel.classList.add('translate-x-full');
    } else {
        drawer.classList.remove('pointer-events-none');
        overlay.classList.remove('opacity-0');
        panel.classList.remove('translate-x-full');
        renderMiniCartItems();
    }
}

function renderMiniCartItems() {
    const container = document.getElementById('miniCartItems');
    const totalEl = document.getElementById('miniCartTotal');
    if (!container) return;
    if (cart.length === 0) {
        container.innerHTML = '<div class="text-center py-12"><svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg><p class="text-slate-500">Your cart is empty</p></div>';
        totalEl.textContent = '$0.00';
        return;
    }
    container.innerHTML = cart.map(item => {
        const p = PRODUCTS.find(pr => pr.id === item.id);
        if (!p) return '';
        return `
        <div class="flex space-x-4">
            <img src="${p.image}" alt="${p.name}" class="w-20 h-24 object-cover rounded-md"/>
            <div class="flex-1">
                <h4 class="font-semibold text-sm text-slate-900 dark:text-white">${p.name}</h4>
                <p class="text-xs text-slate-500">${p.brand}</p>
                <div class="flex items-center space-x-3 mt-2">
                    <button onclick="updateCartQty(${p.id}, ${item.qty - 1}); renderMiniCartItems();" class="w-7 h-7 border border-slate-200 dark:border-slate-700 rounded flex items-center justify-center text-xs hover:bg-slate-100 dark:hover:bg-slate-800">−</button>
                    <span class="text-sm font-medium">${item.qty}</span>
                    <button onclick="updateCartQty(${p.id}, ${item.qty + 1}); renderMiniCartItems();" class="w-7 h-7 border border-slate-200 dark:border-slate-700 rounded flex items-center justify-center text-xs hover:bg-slate-100 dark:hover:bg-slate-800">+</button>
                </div>
            </div>
            <div class="text-right flex flex-col items-end justify-between">
                <button onclick="removeFromCart(${p.id}); renderMiniCartItems();" class="text-red-500 hover:text-red-700 mt-1"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                <p class="font-bold text-sm">$${(p.price * item.qty).toFixed(2)}</p>
            </div>
        </div>`;
    }).join('');
    totalEl.textContent = '$' + getCartTotal().toFixed(2);
}

/* ── Dark Mode Toggle ─────────────────────────────────── */
function renderDarkModeToggle() {
    const btn = document.getElementById('themeToggle');
    const container = document.getElementById('themeIconContainer');
    if (!btn || !container) return;

    const sunSvg = `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>`;
    const moonSvg = `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>`;

    // Set initial icon state
    container.innerHTML = document.documentElement.classList.contains('dark') ? sunSvg : moonSvg;

    btn.addEventListener('click', () => {
        const html = document.documentElement;
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            html.classList.add('light');
        } else {
            html.classList.remove('light');
            html.classList.add('dark');
        }
        container.innerHTML = html.classList.contains('dark') ? sunSvg : moonSvg;
        localStorage.setItem('krist_dark', html.classList.contains('dark'));
    });
}

function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    if (menu) menu.classList.toggle('hidden');
}

/* ── Search Overlay ───────────────────────────────────── */
function toggleSearchOverlay() {
    const overlay = document.getElementById('searchOverlay');
    const backdrop = document.getElementById('searchBackdrop');
    const panel = document.getElementById('searchPanel');
    const input = document.getElementById('searchOverlayInput');
    if (!overlay) return;

    const isOpen = !overlay.classList.contains('hidden');

    if (isOpen) {
        // Close
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        panel.classList.add('-translate-y-full');
        document.body.style.overflow = '';
        setTimeout(() => overlay.classList.add('hidden'), 300);
    } else {
        // Open
        overlay.classList.remove('hidden');
        requestAnimationFrame(() => {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            panel.classList.remove('-translate-y-full');
            if (input) input.focus();
        });
        document.body.style.overflow = 'hidden';
    }
}

// Close search overlay on Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        const overlay = document.getElementById('searchOverlay');
        if (overlay && !overlay.classList.contains('hidden')) {
            toggleSearchOverlay();
        }
    }
});

function toggleMobileShopMenu() {
    const menu = document.getElementById('mobileShopMenu');
    const chevron = document.getElementById('mobileShopChevron');
    if (menu) menu.classList.toggle('hidden');
    if (chevron) chevron.classList.toggle('rotate-180');
}

function handleSubscribe(e) {
    e.preventDefault();
    const input = document.getElementById('footerEmail');
    if (!input) return;
    const val = input.value.trim();
    if (!val || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
        showToast('Please enter a valid email', 'error');
        return;
    }
    showToast('Subscribed successfully!', 'success');
    input.value = '';
}

function handleLogout() {
    showToast('Logged out successfully', 'info');
    setTimeout(() => window.location.href = 'login.php', 1000);
}

/* ── Product Card Renderer ────────────────────────────── */

function renderProductCard(product, delay = 0) {
    const isWished = wishlist.includes(product.id);
    const isSoldOut = product.inStock === false;
    return `
    <div class="group bg-white dark:bg-slate-900 rounded-md overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-800" data-aos="fade-up" data-aos-delay="${delay}">
        <div class="relative overflow-hidden aspect-[3/4]">
            <a href="product-detail.php?id=${product.id}">
                <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 ${isSoldOut ? 'opacity-50 grayscale' : ''}"/>
            </a>
            ${product.oldPrice && !isSoldOut ? `<span class="absolute top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-medium">-${Math.round((1 - product.price / product.oldPrice) * 100)}%</span>` : ''}
            ${isSoldOut ? `<span class="absolute top-3 left-3 bg-slate-800 dark:bg-slate-700 text-white text-[10px] px-3 py-1 rounded-full font-bold tracking-wider uppercase shadow-sm">Sold Out</span>` : ''}
            <div class="absolute top-3 right-3 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                <button onclick="toggleWishlist(${product.id}); this.closest('.group').querySelector('.wish-icon').innerHTML = wishlist.includes(${product.id}) ? '<path stroke-linecap=\\'round\\' stroke-linejoin=\\'round\\' stroke-width=\\'2\\' d=\\'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\\'></path>' : '<path stroke-linecap=\\'round\\' stroke-linejoin=\\'round\\' stroke-width=\\'2\\' d=\\'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\\'></path>'; this.closest('.group').querySelector('.wish-icon').setAttribute('fill', wishlist.includes(${product.id}) ? 'currentColor' : 'none');" class="w-9 h-9 bg-white dark:bg-slate-800 rounded-full flex items-center justify-center shadow-md hover:bg-primary hover:text-white transition-colors" title="Wishlist">
                    <svg class="w-5 h-5 wish-icon" fill="${isWished ? 'currentColor' : 'none'}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
                <button onclick="openQuickView(${product.id})" class="w-9 h-9 bg-white dark:bg-slate-800 rounded-full flex items-center justify-center shadow-md hover:bg-primary hover:text-white transition-colors" title="Quick View">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </button>
            </div>
            <div class="product-card-add-btn">
                <button onclick="${isSoldOut ? '' : `addToCart(${product.id})`}" class="w-full flex items-center justify-center gap-2 bg-white py-3 text-sm font-semibold tracking-wide hover:bg-primary hover:text-white text-slate-900 transition-all duration-300 rounded-sm shadow-md uppercase ${isSoldOut ? 'opacity-50 cursor-not-allowed' : ''}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    ${isSoldOut ? 'Sold Out' : 'Add to Cart'}
                </button>
            </div>
        </div>
        <div class="p-4">
            <a href="product-detail.php?id=${product.id}" class="block">
                <p class="text-[11px] text-slate-400 dark:text-slate-500 mb-1 font-medium tracking-wide uppercase">${product.brand} &bull; <span class="text-primary">${product.category}</span></p>
                <h3 class="font-semibold text-sm text-slate-900 dark:text-white mb-2 line-clamp-1 group-hover:text-primary transition-colors">${product.name}</h3>
                <div class="flex items-center space-x-1 mb-2">${renderStars(product.rating)}<span class="text-xs text-slate-500 ml-1">(${product.reviews})</span></div>
            </a>
            <div class="flex items-center space-x-2">
                <span class="font-bold text-primary dark:text-white">$${product.price.toFixed(2)}</span>
                ${product.oldPrice ? `<span class="text-sm text-slate-400 line-through">$${product.oldPrice.toFixed(2)}</span>` : ''}
            </div>
        </div>
    </div>`;
}

function openQuickView(productId) {
    if (typeof PRODUCTS === 'undefined') return;
    const product = PRODUCTS.find(p => p.id === productId);
    if (!product) return;

    let modal = document.getElementById('quickViewModal');
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'quickViewModal';
        modal.className = 'fixed inset-0 z-[150] hidden items-center justify-center p-4 sm:p-6';
        document.body.appendChild(modal);
    }
    modal.innerHTML = renderQuickViewModal(product);
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';

    // Store current quick view product ID for quantity updates
    modal.dataset.productId = productId;
}

function closeQuickView() {
    const modal = document.getElementById('quickViewModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }
}

function changeQuickViewQty(delta) {
    const input = document.getElementById('quickViewQty');
    if (input) {
        let val = parseInt(input.value) + delta;
        if (val < 1) val = 1;
        input.value = val;
    }
}

function addToCartFromQuickView() {
    const modal = document.getElementById('quickViewModal');
    if (!modal) return;
    const productId = parseInt(modal.dataset.productId);
    const qtyInput = document.getElementById('quickViewQty');
    const qty = qtyInput ? parseInt(qtyInput.value) : 1;

    // Check if a size is selected if sizes are available
    const sizeSelect = document.getElementById('quickViewSize');
    if (sizeSelect && !sizeSelect.value) {
        showToast('Please select a size', 'error');
        return;
    }

    addToCart(productId, qty);
    closeQuickView();
}

function renderQuickViewModal(product) {
    const isSoldOut = product.inStock === false;
    // Default sizes if none provided in the product object
    const sizes = product.sizes || ['S', 'M', 'L', 'XL'];

    return `
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeQuickView()"></div>
    
    <!-- Modal Content -->
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-4xl overflow-hidden animate-fade-in-up flex flex-col md:flex-row max-h-[90vh]">
        
        <!-- Close Button -->
        <button onclick="closeQuickView()" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 dark:bg-black/50 hover:bg-white dark:hover:bg-slate-800 backdrop-blur-md rounded-full flex items-center justify-center text-slate-800 dark:text-white transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- Image Seciton -->
        <div class="w-full md:w-1/2 bg-[#F3F3F3] dark:bg-slate-800/50 relative">
            <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover max-h-[40vh] md:max-h-none" />
            ${isSoldOut ? `<span class="absolute top-6 left-6 bg-slate-900 text-white text-xs px-3 py-1.5 rounded-full font-bold uppercase tracking-wider">Sold Out</span>` : ''}
        </div>

        <!-- Details Section -->
        <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col justify-center overflow-y-auto">
            <p class="text-sm text-slate-500 mb-2 tracking-widest uppercase font-medium outline-offset-4">${product.brand}</p>
            <h2 class="text-2xl md:text-3xl font-display font-bold text-slate-900 dark:text-white mb-4 line-clamp-2">${product.name}</h2>
            
            <div class="flex items-center space-x-4 mb-6">
                <div class="flex items-center">
                    ${renderStars(product.rating)}
                </div>
                <span class="text-sm text-slate-500">(${product.reviews} Reviews)</span>
            </div>

            <div class="flex items-center space-x-3 mb-8">
                <span class="text-2xl md:text-3xl font-bold text-primary dark:text-white">$${product.price.toFixed(2)}</span>
                ${product.oldPrice ? `<span class="text-lg text-slate-400 line-through">$${product.oldPrice.toFixed(2)}</span>` : ''}
            </div>

            <!-- Options -->
            <div class="space-y-6 mb-8">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <label class="font-semibold text-slate-900 dark:text-white">Selected Size</label>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary dark:hover:text-white underline">Size Guide</a>
                    </div>
                    <!-- Hidden select to hold value, visualized by buttons below -->
                    <select id="quickViewSize" class="hidden">
                        <option value="">Select Size</option>
                        ${sizes.map(s => `<option value="${s}">${s}</option>`).join('')}
                    </select>
                    <div class="flex flex-wrap gap-3">
                        ${sizes.map(s => `
                        <button type="button" onclick="document.getElementById('quickViewSize').value='${s}'; this.parentElement.querySelectorAll('button').forEach(b=>b.classList.remove('ring-2', 'ring-primary', 'dark:ring-white', 'border-transparent')); this.classList.add('ring-2', 'ring-primary', 'dark:ring-white', 'border-transparent');" class="w-12 h-12 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center font-medium hover:border-primary dark:hover:border-white transition-colors dark:text-slate-300">
                            ${s}
                        </button>`).join('')}
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center space-x-4 mt-auto">
                <div class="flex items-center border border-slate-200 dark:border-slate-700 rounded-md h-12 w-32">
                    <button onclick="changeQuickViewQty(-1)" class="w-10 h-full flex items-center justify-center text-slate-500 hover:text-primary dark:hover:text-white transition-colors">−</button>
                    <input type="number" id="quickViewQty" value="1" min="1" class="w-12 h-full text-center font-semibold bg-transparent border-none focus:ring-0 dark:text-white" readonly />
                    <button onclick="changeQuickViewQty(1)" class="w-10 h-full flex items-center justify-center text-slate-500 hover:text-primary dark:hover:text-white transition-colors">+</button>
                </div>
                
                <button onclick="${isSoldOut ? '' : 'addToCartFromQuickView()'}" class="flex-1 h-12 bg-primary text-white font-bold rounded-md hover:bg-slate-800 transition-colors flex items-center justify-center space-x-2 ${isSoldOut ? 'opacity-50 cursor-not-allowed' : ''}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    <span>${isSoldOut ? 'Sold Out' : 'Add to Cart'}</span>
                </button>
            </div>
            
        </div>
    </div>
    
    <style>
        .animate-fade-in-up {
            animation: fadeInUp 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
    </style>`;
}

function renderStars(rating) {
    let html = '';
    const fullStar = '<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>';
    const halfStar = '<svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path><path fill="currentColor" d="M12 15.4V6.1l1.71 4.04 4.38.36-3.32 2.88.94 4.28L12 15.4z"></path></svg>';
    const emptyStar = '<svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>';

    for (let i = 1; i <= 5; i++) {
        if (i <= Math.floor(rating)) html += fullStar;
        else if (i - 0.5 <= rating) html += halfStar;
        else html += emptyStar;
    }
    return html;
}

/* ── Checkout Stepper ─────────────────────────────────── */
function renderCheckoutStepper(currentStep = 1) {
    const steps = ['Shopping Cart', 'Checkout', 'Payment', 'Confirmation'];
    return `
    <div class="flex items-center justify-center space-x-2 md:space-x-4 mb-12" data-aos="fade-down">
        ${steps.map((s, i) => `
        <div class="flex items-center">
            <div class="flex items-center space-x-2">
                <span class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold ${i + 1 <= currentStep ? 'bg-primary text-white' : 'bg-slate-200 dark:bg-slate-700 text-slate-500'}">${i + 1}</span>
                <span class="hidden sm:inline text-sm font-medium ${i + 1 <= currentStep ? 'text-primary dark:text-white' : 'text-slate-400'}">${s}</span>
            </div>
            ${i < steps.length - 1 ? `<div class="w-8 md:w-16 h-0.5 mx-2 ${i + 1 < currentStep ? 'bg-primary' : 'bg-slate-200 dark:bg-slate-700'}"></div>` : ''}
        </div>`).join('')}
    </div>`;
}

/* ── Breadcrumb ───────────────────────────────────────── */
function renderBreadcrumb(items) {
    return `
    <nav class="flex items-center space-x-2 text-sm text-slate-500 mb-8" data-aos="fade-right">
        <a href="index.php" class="hover:text-primary dark:hover:text-white transition-colors">Home</a>
        ${items.map(item => `<svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg><a href="${item.href || '#'}" class="hover:text-primary dark:hover:text-white transition-colors ${item.active ? 'text-primary dark:text-white font-medium' : ''}">${item.label}</a>`).join('')}
    </nav>`;
}

/* ── Floating Buttons ─────────────────────────────────── */
function renderFloatingButtons() {
    const container = document.createElement('div');
    container.className = 'fixed bottom-6 right-6 z-50 flex flex-col space-y-3';

    // Theme Toggle
    const themeBtn = document.createElement('button');
    themeBtn.className = 'w-12 h-12 bg-white dark:bg-slate-800 text-slate-700 dark:text-white rounded-full shadow-lg flex items-center justify-center hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors border border-slate-200 dark:border-slate-700';
    themeBtn.setAttribute('aria-label', 'Toggle Dark Mode');
    themeBtn.id = 'floatingThemeToggle';

    const sunSvg = `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>`;
    const moonSvg = `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>`;

    themeBtn.innerHTML = document.documentElement.classList.contains('dark') ? sunSvg : moonSvg;

    themeBtn.addEventListener('click', () => {
        const html = document.documentElement;
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            html.classList.add('light');
        } else {
            html.classList.remove('light');
            html.classList.add('dark');
        }
        themeBtn.innerHTML = html.classList.contains('dark') ? sunSvg : moonSvg;
        localStorage.setItem('krist_dark', html.classList.contains('dark'));

        // Update header icon if it exists
        const headerIcon = document.getElementById('themeIconContainer');
        if (headerIcon) {
            headerIcon.innerHTML = themeBtn.innerHTML;
        }
    });

    // Scroll to Top
    const topBtn = document.createElement('button');
    topBtn.className = 'w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:bg-slate-800 transition-all duration-300 opacity-0 invisible translate-y-4';
    topBtn.setAttribute('aria-label', 'Back to top');
    topBtn.innerHTML = `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>`;

    topBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            topBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            topBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            topBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
            topBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    container.appendChild(themeBtn);
    container.appendChild(topBtn);
    document.body.appendChild(container);
}

/* ── Init on Every Page ───────────────────────────────── */
function initKrist() {
    // Restore dark mode
    const isDark = localStorage.getItem('krist_dark') === 'true';
    if (isDark) {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
    }
    renderMiniCart();
    renderDarkModeToggle();
    renderFloatingButtons();
    updateCartBadge();
    updateWishlistBadge();
    // Init AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 800, once: true, offset: 50 });
    }
}

document.addEventListener('DOMContentLoaded', initKrist);
