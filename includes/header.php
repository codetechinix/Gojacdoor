<!-- includes/header.php -->
<?php
$activePage = isset($activePage) ? $activePage : '';
?>
<!-- Global Preloader -->
<div id="globalPreloader"
    class="fixed inset-0 flex flex-col items-center justify-center bg-white dark:bg-slate-900 transition-all duration-700 ease-in-out"
    style="z-index: 999999;">
    <div class="overflow-hidden pb-2 mb-6 text-center">
        <span
            class="text-4xl md:text-5xl tracking-tighter text-primary dark:text-white inline-block premium-reveal font-sans">
            <span class="font-bold">Gojac</span><span class="font-normal">doors</span>
        </span>
    </div>
    <div class="w-48 h-1 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden relative" style="width: 12rem;">
        <div
            class="absolute top-0 h-full bg-primary dark:bg-white rounded-full w-full origin-left animate-[loadingBar_2s_cubic-bezier(0.4,0,0.2,1)_infinite_alternate]">
        </div>
    </div>
</div>
<header id="site-header"
    class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 transition-all duration-300">
    <div class="container mx-auto px-4 md:px-12 flex items-center justify-between h-[90px]">

        <!-- Mobile Menu Toggle (Left on mobile, hidden on desktop) -->
        <button onclick="toggleMobileMenu()" id="mobileMenuToggle"
            class="md:hidden text-slate-800 dark:text-slate-100 flex-shrink-0 w-1/4 flex justify-start">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="mobileMenuIcon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Logo (Center on mobile, Left on desktop) -->
        <div class="w-2/4 md:w-1/4 flex justify-center md:justify-start flex-shrink-0">
            <a href="/index.php" class="flex items-center space-x-2">
                <span
                    class="text-3xl font-extrabold tracking-tighter text-slate-900 dark:text-white flex items-center group-hover:opacity-80 transition-opacity uppercase">
                    Krist
                </span>
            </a>
        </div>

        <!-- Center Nav (Desktop Only) -->
        <nav class="hidden md:flex items-center justify-center space-x-12 w-2/4 z-10">
            <a class="relative group font-medium transition-colors tracking-wide text-[15px] <?= $activePage === 'home' ? 'text-slate-900 dark:text-white' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' ?>"
                href="/index.php">
                Home
                <span
                    class="absolute -bottom-1 left-1/2 -translate-x-1/2 h-0.5 w-full bg-slate-900 dark:bg-white transition-all duration-300 <?= $activePage === 'home' ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0 group-hover:opacity-100 group-hover:scale-x-100' ?>"></span>
            </a>

            <div class="group relative flex items-center h-full">
                <button
                    class="relative group/btn font-medium hover:text-slate-900 dark:hover:text-white transition-colors flex items-center tracking-wide text-[15px] <?= $activePage === 'shop' ? 'text-slate-900 dark:text-white' : 'text-slate-500 dark:text-slate-400' ?>">
                    Shop
                    <span
                        class="ml-2 px-1.5 py-0.5 rounded-sm bg-red-600 text-white text-[9px] font-bold tracking-tight uppercase absolute -top-3.5 -right-6 shadow-sm">Sale</span>
                    <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span
                        class="absolute -bottom-1 left-1/2 -translate-x-1/2 h-0.5 w-full bg-slate-900 dark:bg-white transition-all duration-300 <?= $activePage === 'shop' ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0 group-hover/btn:opacity-100 group-hover/btn:scale-x-100' ?>"></span>
                </button>
                <div
                    class="absolute left-0 top-full w-56 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-b-xl shadow-xl hidden group-hover:block z-50 p-3 mt-0 transform origin-top transition-all antialiased">
                    <a href="/shop.php?cat=men"
                        class="group/link flex items-center justify-between px-4 py-2.5 text-sm text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-md transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Men</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=women"
                        class="group/link flex items-center justify-between px-4 py-2.5 text-sm text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-md transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Women</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=kids"
                        class="group/link flex items-center justify-between px-4 py-2.5 text-sm text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-md transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Kids</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <div class="h-px bg-slate-100 dark:bg-slate-800 my-2 mx-4"></div>
                    <a href="/shop.php?cat=footwear"
                        class="group/link flex items-center justify-between px-4 py-2.5 text-sm text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-md transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Footwear</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                    <a href="/shop.php?cat=accessories"
                        class="group/link flex items-center justify-between px-4 py-2.5 text-sm text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-md transition-all duration-300">
                        <span
                            class="font-medium transform transition-transform duration-300 group-hover/link:translate-x-1">Accessories</span>
                        <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <a class="relative group font-medium transition-colors tracking-wide text-[15px] <?= $activePage === 'about-us' ? 'text-slate-900 dark:text-white' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' ?>"
                href="/pages/about-us.php">
                Our Story
                <span
                    class="absolute -bottom-1 left-1/2 -translate-x-1/2 h-0.5 w-full bg-slate-900 dark:bg-white transition-all duration-300 <?= $activePage === 'about' ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0 group-hover:opacity-100 group-hover:scale-x-100' ?>"></span>
            </a>

            <a class="relative group font-medium transition-colors tracking-wide text-[15px] <?= $activePage === 'blog' ? 'text-slate-900 dark:text-white' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' ?>"
                href="/blog.php">
                Blog
                <span
                    class="absolute -bottom-1 left-1/2 -translate-x-1/2 h-0.5 w-full bg-slate-900 dark:bg-white transition-all duration-300 <?= $activePage === 'blog' ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0 group-hover:opacity-100 group-hover:scale-x-100' ?>"></span>
            </a>
        </nav>

        <!-- Right Icons (Right on desktop and mobile) -->
        <div class="w-1/4 flex items-center justify-end space-x-6 flex-shrink-0 relative">
            <button id="themeToggle"
                class="hidden text-slate-800 dark:text-slate-200 hover:text-slate-500 dark:hover:text-white transition-colors duration-300">
                <div class="h-6 w-6 relative" id="themeIconContainer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                </div>
            </button>
            <button id="searchToggle" onclick="toggleSearchOverlay()"
                class="hidden md:block text-slate-800 dark:text-slate-200 hover:text-slate-500 dark:hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
            <a href="/account/wishlist.php"
                class="hidden md:block text-slate-800 dark:text-slate-200 hover:text-slate-500 dark:hover:text-white transition-colors duration-300 relative">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <span id="wishlistBadge"
                    class="absolute -top-1.5 -right-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"
                    style="display: none;">0</span>
            </a>
            <div class="relative cursor-pointer transition-colors duration-300 text-slate-800 dark:text-slate-200 hover:text-slate-500 dark:hover:text-white flex items-center gap-2"
                onclick="toggleMiniCart()">
                <div class="relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span id="cartBadge"
                        class="cart-badge absolute -top-1.5 -right-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"
                        style="display: none;">0</span>
                </div>
            </div>
            <a href="/auth/login.php"
                class="group bg-slate-900 border border-transparent hover:bg-transparent hover:text-slate-900 hover:border-slate-900 dark:bg-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white dark:hover:border-white text-white px-7 py-2.5 rounded-full font-semibold transition-all duration-300 hidden lg:flex items-center space-x-2 shadow-sm uppercase tracking-wide text-sm">
                <span>Login</span>
            </a>
        </div>
    </div>
    <!-- Mobile Slide-out Menu Backdrop -->
    <div id="mobileMenuBackdrop"
        class="fixed inset-0 bg-black/60 z-[60] hidden md:hidden transition-opacity opacity-0 backdrop-blur-sm"
        onclick="toggleMobileMenu()"></div>

    <!-- Mobile Slide-out Menu Panel -->
    <div id="mobileMenu"
        class="fixed top-0 left-0 w-4/5 max-w-[320px] h-full bg-white dark:bg-slate-900 z-[70] transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col shadow-2xl">
        <div
            class="p-6 flex items-center justify-between border-b border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50">
            <span class="text-xl font-bold tracking-wide text-slate-900 dark:text-white uppercase">Menu</span>
            <button onclick="toggleMobileMenu()"
                class="text-slate-400 hover:text-slate-900 dark:hover:text-white bg-white dark:bg-slate-800 rounded-full p-2 shadow-sm border border-slate-100 dark:border-slate-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto w-full">
            <div class="p-6 space-y-5">
                <a href="/index.php"
                    class="block text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Home</a>
                <div class="relative">
                    <button onclick="toggleMobileShopMenu()"
                        class="w-full flex items-center justify-between text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">
                        Shop
                        <svg id="mobileShopChevron" class="w-5 h-5 transition-transform text-slate-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="mobileShopMenu"
                        class="hidden pl-4 py-3 space-y-4 border-l-2 border-slate-100 dark:border-slate-800 mt-3">
                        <a href="/shop.php?cat=men"
                            class="block text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:translate-x-1 transition-all">Men</a>
                        <a href="/shop.php?cat=women"
                            class="block text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:translate-x-1 transition-all">Women</a>
                        <a href="/shop.php?cat=kids"
                            class="block text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:translate-x-1 transition-all">Kids</a>
                        <a href="/shop.php?cat=footwear"
                            class="block text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:translate-x-1 transition-all">Footwear</a>
                        <a href="/shop.php?cat=accessories"
                            class="block text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:translate-x-1 transition-all">Accessories</a>
                    </div>
                </div>
                <a href="/pages/about-us.php"
                    class="block text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Our
                    Story</a>
                <a href="/blog.php"
                    class="block text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Blog</a>
                <a href="/pages/contact.php"
                    class="block text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Contact
                    Us</a>
            </div>

            <div class="p-6 border-t border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/20 mt-4">
                <a href="/auth/login.php"
                    class="flex items-center justify-center w-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 py-3 rounded-lg font-bold tracking-wide uppercase text-sm hover:opacity-90 transition-opacity mb-4 shadow-md">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Login / Register
                </a>
                <p class="font-bold text-slate-900 dark:text-white mb-2 text-sm uppercase tracking-wide">Need Help?</p>
                <div class="space-y-1">
                    <a href="tel:+18001234567"
                        class="text-slate-500 dark:text-slate-400 text-sm flex items-center hover:text-slate-900 dark:hover:text-white transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        +1 (800) 123-4567
                    </a>
                    <a href="mailto:support@gojacdoors.com"
                        class="text-slate-500 dark:text-slate-400 text-sm flex items-center hover:text-slate-900 dark:hover:text-white transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        support@gojacdoors.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Sticky Bottom Navigation -->
<div
    class="md:hidden fixed bottom-0 left-0 w-full bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 z-40 pb-safe shadow-[0_-4px_20px_rgba(0,0,0,0.05)]">
    <div class="grid grid-cols-5 h-16 items-center px-2">
        <a href="/index.php"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors <?= $activePage === 'home' ? 'text-slate-900 dark:text-white' : '' ?>">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Home</span>
        </a>
        <button onclick="toggleMobileMenu()"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Menu</span>
        </button>
        <button onclick="toggleSearchOverlay()"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Search</span>
        </button>
        <a href="/account/personal-info.php"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors <?= $activePage === 'account' ? 'text-slate-900 dark:text-white' : '' ?>">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Account</span>
        </a>
        <div class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white relative cursor-pointer transition-colors"
            onclick="toggleMiniCart()">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <span
                class="cart-badge absolute top-0.5 right-3.5 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[9px] w-[15px] h-[15px] rounded-full flex items-center justify-center font-bold"
                style="display:none;">0</span>
            <span class="text-[10px] font-medium tracking-wide">Cart</span>
        </div>
    </div>
</div>

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