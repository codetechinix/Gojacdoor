<!-- includes/header.php -->
<?php
$activePage = isset($activePage) ? $activePage : '';
?>
<header id="site-header"
    class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 transition-all duration-300">
    <div class="container mx-auto px-4 md:px-8 flex items-center justify-between h-20">
        <a href="/index.php" class="flex items-center space-x-2">
            <span
                class="text-3xl font-bold tracking-tighter text-primary dark:text-white flex items-center group-hover:opacity-80 transition-opacity">
                <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Krist
            </span>
        </a>
        <nav class="hidden md:flex items-center space-x-8 z-10">
            <a class="font-medium hover:text-primary/70 transition-colors <?= $activePage === 'home' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400' ?>"
                href="/index.php">Home</a>
            <div class="group relative flex items-center h-full">
                <button
                    class="font-medium hover:text-primary transition-colors flex items-center text-slate-600 dark:text-slate-400">
                    Shop
                    <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 top-full w-56 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl shadow-xl hidden group-hover:block z-50 p-2 mt-1">
                    <a href="/shop.php?cat=men"
                        class="group/link flex items-center justify-between px-4 py-3 text-sm text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Men</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 transition-all duration-300 group-hover/link:opacity-100 group-hover/link:translate-x-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=women"
                        class="group/link flex items-center justify-between px-4 py-3 text-sm text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Women</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 transition-all duration-300 group-hover/link:opacity-100 group-hover/link:translate-x-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=kids"
                        class="group/link flex items-center justify-between px-4 py-3 text-sm text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Kids</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 transition-all duration-300 group-hover/link:opacity-100 group-hover/link:translate-x-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <div class="h-px bg-slate-100 dark:bg-slate-800 my-1 mx-2"></div>
                    <a href="/shop.php?cat=footwear"
                        class="group/link flex items-center justify-between px-4 py-3 text-sm text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Footwear</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 transition-all duration-300 group-hover/link:opacity-100 group-hover/link:translate-x-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=accessories"
                        class="group/link flex items-center justify-between px-4 py-3 text-sm text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Accessories</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 transition-all duration-300 group-hover/link:opacity-100 group-hover/link:translate-x-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <a class="font-medium hover:text-primary transition-colors <?= $activePage === 'about' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400' ?>"
                href="/pages/about-us.php">Our Story</a>
            <a class="font-medium hover:text-primary transition-colors <?= $activePage === 'blog' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400' ?>"
                href="/blog.php">Blog</a>
            <a class="font-medium hover:text-primary transition-colors <?= $activePage === 'contact' ? 'text-primary dark:text-white' : 'text-slate-600 dark:text-slate-400' ?>"
                href="/pages/contact.php">Contact Us</a>
        </nav>
        <div class="flex items-center space-x-4 md:space-x-5">
            <button id="themeToggle"
                class="d-none text-slate-600 dark:text-slate-300 hover:text-primary transition-colors hover:scale-110">
                <div class="h-6 w-6" id="themeIconContainer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                </div>
            </button>
            <button id="searchToggle" onclick="toggleSearchOverlay()"
                class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
            <a href="/account/wishlist.php"
                class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors relative hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <span id="wishlistBadge"
                    class="absolute -top-1 -right-1 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"
                    style="display: none;">0</span>
            </a>
            <div class="relative cursor-pointer hover:scale-110 transition-transform" onclick="toggleMiniCart()">
                <div class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <span id="cartBadge"
                    class="cart-badge absolute -top-1 -right-1 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"
                    style="display: none;">0</span>
            </div>
            <a href="/auth/login.php"
                class="group bg-primary text-white px-6 py-2.5 rounded-lg font-medium hover:bg-slate-800 transition-all duration-300 hidden lg:flex items-center space-x-2 shadow-sm hover:shadow-md border border-transparent">
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-y-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span>Login</span>
            </a>
            <button onclick="toggleMobileMenu()" id="mobileMenuToggle"
                class="md:hidden text-slate-600 dark:text-slate-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" id="mobileMenuIcon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 p-6 space-y-4 shadow-lg absolute w-full left-0 z-40 transform origin-top transition-all duration-300">
        <a href="/index.php" class="block py-2 font-medium hover:text-primary transition-colors">Home</a>
        <div class="relative">
            <button onclick="toggleMobileShopMenu()"
                class="w-full flex items-center justify-between py-2 font-medium hover:text-primary transition-colors">
                Shop
                <svg id="mobileShopChevron" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobileShopMenu"
                class="hidden pl-4 py-2 space-y-3 border-l-2 border-slate-100 dark:border-slate-800 mt-2">
                <a href="/shop.php?cat=men"
                    class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">Men</a>
                <a href="/shop.php?cat=women"
                    class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">Women</a>
                <a href="/shop.php?cat=kids"
                    class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">Kids</a>
                <a href="/shop.php?cat=footwear"
                    class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">Footwear</a>
                <a href="/shop.php?cat=accessories"
                    class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">Accessories</a>
            </div>
        </div>
        <a href="/pages/about-us.php" class="block py-2 font-medium hover:text-primary transition-colors">Our Story</a>
        <a href="/blog.php" class="block py-2 font-medium hover:text-primary transition-colors">Blog</a>
        <a href="/pages/contact.php" class="block py-2 font-medium hover:text-primary transition-colors">Contact Us</a>
        <div class="h-px w-full bg-slate-100 dark:bg-slate-800 my-4"></div>
        <a href="/account/personal-info.php"
            class="block py-2 font-medium text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">My
            Account</a>
        <a href="/auth/login.php"
            class="block py-3 mt-4 bg-primary text-white text-center rounded-lg font-medium hover:bg-slate-800 transition-colors shadow-sm">Login</a>
    </div>
</header>

<!-- Search Overlay -->
<div id="searchOverlay" class="fixed inset-0 hidden" style="z-index:9999; pointer-events:none">
    <!-- Backdrop -->
    <div id="searchBackdrop"
        class="absolute inset-0 bg-black/50 backdrop-blur-sm opacity-0 transition-opacity duration-300"
        onclick="toggleSearchOverlay()" style="pointer-events:auto"></div>
    <!-- Search Panel -->
    <div id="searchPanel"
        class="relative bg-white dark:bg-slate-900 shadow-2xl border-b border-slate-200 dark:border-slate-700 transform -translate-y-full transition-transform duration-300 ease-out"
        style="pointer-events:auto">
        <div class="container mx-auto px-4 md:px-8 py-8 md:py-12">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white tracking-wide uppercase">Search</h3>
                <button onclick="toggleSearchOverlay()"
                    class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <form action="/search" method="GET" class="relative">
                <input id="searchOverlayInput" name="q" type="text"
                    placeholder="Search for products, categories, brands..."
                    class="w-full text-lg md:text-2xl bg-transparent border-b-2 border-slate-200 dark:border-slate-700 focus:border-primary dark:focus:border-white py-4 pr-14 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 outline-none transition-colors duration-300"
                    autocomplete="off" />
                <button type="submit"
                    class="absolute right-0 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary dark:hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
            <div class="mt-6 flex flex-wrap gap-2">
                <span
                    class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mr-2 self-center">Popular:</span>
                <a href="/search?q=shirts"
                    class="px-4 py-1.5 text-sm border border-slate-200 dark:border-slate-700 rounded-full text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">Shirts</a>
                <a href="/search?q=dresses"
                    class="px-4 py-1.5 text-sm border border-slate-200 dark:border-slate-700 rounded-full text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">Dresses</a>
                <a href="/search?q=jackets"
                    class="px-4 py-1.5 text-sm border border-slate-200 dark:border-slate-700 rounded-full text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">Jackets</a>
                <a href="/search?q=shoes"
                    class="px-4 py-1.5 text-sm border border-slate-200 dark:border-slate-700 rounded-full text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">Shoes</a>
                <a href="/search?q=accessories"
                    class="px-4 py-1.5 text-sm border border-slate-200 dark:border-slate-700 rounded-full text-slate-600 dark:text-slate-400 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">Accessories</a>
            </div>
        </div>
    </div>
</div>