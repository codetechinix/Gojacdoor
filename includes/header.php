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

<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        animation: marquee 20s linear infinite;
        white-space: nowrap;
    }
</style>

<!-- Top Announcement Banner -->
<div
    class="bg-slate-950 dark:bg-black text-[11px] font-bold tracking-widest uppercase py-2.5 px-4 max-w-full relative z-[10] text-slate-300 grid grid-cols-1 items-center gap-y-2 text-center">
    <div class="flex-1 overflow-hidden pr-4 lg:pr-12">
        <p
            class="animate-marquee inline-block text-[10px] font-bold tracking-[0.2em] uppercase text-left w-full text-white">
            3 DAYS FREE TRIAL - ENJOY YOUR SHOPPING <span class="mx-8 text-slate-500">&bull;</span> SIGN UP FOR 10% OFF
            YOUR FIRST ORDER <span class="mx-8 text-slate-500">&bull;</span> FREE SHIPPING ON ORDERS OVER $1000
        </p>
    </div> <!-- Language and Currency dropdown removed per request -->
</div>

<header id="mainHeader"
    class="bg-white dark:bg-slate-900 border-b-2 border-slate-100 dark:border-slate-800 transition-colors duration-500 sticky top-0 z-40 shadow-sm w-full max-w-full">
    <div class="container mx-auto px-4 md:px-12 flex items-center justify-between h-[90px]">

        <!-- Mobile Menu Toggle (Left on mobile, hidden on desktop) -->
        <button onclick="toggleMobileMenu()" id="mobileMenuToggle"
            class="md:hidden text-slate-800 dark:text-slate-100 shrink-0 w-1/4 flex justify-start">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="mobileMenuIcon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Logo (Center on mobile, Left on desktop) -->
        <div class="w-2/4 md:flex-1 md:w-1/4 flex justify-center md:justify-start shrink-0 md:pr-4">
            <a href="/index.php" class="flex items-center space-x-2">
                <span
                    class="text-3xl font-extrabold tracking-tighter text-slate-900 dark:text-white flex items-center group-hover:opacity-80 transition-opacity uppercase">
                    Gojacdoors
                </span>
            </a>
        </div>

        <!-- Center Navigation (Hidden on mobile) -->
        <nav class="hidden md:flex items-center justify-center space-x-10 w-2/4 z-10">
            <a class="relative group font-medium transition-colors tracking-wide text-[15px] <?= $activePage === 'home' ? 'text-slate-900 dark:text-white' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' ?>"
                href="/index.php">
                Home
                <span
                    class="absolute -bottom-1 left-1/2 -translate-x-1/2 h-0.5 w-full bg-slate-900 dark:bg-white transition-all duration-300 <?= $activePage === 'home' ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0 group-hover:opacity-100 group-hover:scale-x-100' ?>"></span>
            </a>

            <div class="group relative flex items-center">
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
        <div class="w-1/4 md:flex-1 md:w-1/4 flex items-center justify-end space-x-4 shrink-0 relative">

            <button id="searchToggle" type="button" onclick="toggleSearchOverlay()"
                class="block text-slate-800 dark:text-slate-200 hover:text-slate-500 dark:hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
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
            <a href="https://wa.me/1234567890" target="_blank"
                class="group bg-slate-900 border-2 border-slate-900 hover:bg-transparent hover:text-slate-900 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white text-white px-7 py-2.5 rounded-full font-bold uppercase tracking-widest text-sm transition-all duration-300 hidden lg:flex items-center space-x-2 shadow-sm">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>

    <!-- Command Palette Search Modal (Iteration 2) -->
    <div id="searchOverlay"
        class="fixed inset-0 w-full h-full bg-black/60 backdrop-blur-md transition-all duration-500 opacity-0 scale-95 invisible flex justify-center items-start pt-12 md:pt-24 px-4 sm:px-6 z-[100] pointer-events-none"
        onclick="toggleSearchOverlay()">

        <div class="w-full max-w-4xl bg-white dark:bg-slate-900 rounded-3xl shadow-2xl overflow-hidden flex flex-col border border-slate-200 dark:border-slate-800"
            onclick="event.stopPropagation()">
            <!-- Search Input Header -->
            <form action="/search.php" method="GET"
                class="relative w-full border-b border-slate-100 dark:border-slate-800/60 bg-white dark:bg-slate-900 flex items-center px-4 md:px-8 py-5 md:py-6 group">
                <svg class="w-6 h-6 md:w-8 md:h-8 text-slate-400 dark:text-slate-500 mr-4 shrink-0 transition-colors group-focus-within:text-primary dark:group-focus-within:text-white"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input id="searchOverlayInput" name="q" type="text" placeholder="Search products, categories..."
                    class="w-full text-xl md:text-2xl lg:text-3xl font-medium bg-transparent text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 outline-none focus:ring-0 leading-none"
                    autocomplete="off" />
                <button type="button" onclick="toggleSearchOverlay()"
                    class="ml-4 p-2 text-slate-400 hover:text-slate-900 dark:text-slate-500 dark:hover:text-white bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 rounded-lg transition-colors shrink-0 text-xs font-bold uppercase tracking-wider hidden md:block">
                    ESC
                </button>
                <button type="button" onclick="toggleSearchOverlay()"
                    class="ml-2 p-2 text-slate-400 hover:text-slate-900 dark:text-slate-500 dark:hover:text-white shrink-0 md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </form>

            <!-- Suggestions Grid Layout -->
            <div
                class="p-4 md:p-8 bg-slate-50 dark:bg-slate-900/50 flex flex-col md:flex-row gap-8 max-h-[70vh] overflow-y-auto w-full">

                <!-- Discover Left Column -->
                <div class="w-full md:flex-1 shrink-0">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400 mb-4">
                        Discover</h4>
                    <div class="flex flex-wrap gap-2">
                        <a href="/search.php?q=minimalist"
                            class="text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700/50 rounded-lg px-4 py-2 hover:border-slate-900 hover:text-slate-900 dark:hover:border-white dark:hover:text-white transition-colors shadow-sm">Minimalist</a>
                        <a href="/search.php?q=summer+sale"
                            class="text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700/50 rounded-lg px-4 py-2 hover:border-slate-900 hover:text-slate-900 dark:hover:border-white dark:hover:text-white transition-colors shadow-sm">Summer
                            Sale</a>
                        <a href="/search.php?q=oversized+tee"
                            class="text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700/50 rounded-lg px-4 py-2 hover:border-slate-900 hover:text-slate-900 dark:hover:border-white dark:hover:text-white transition-colors shadow-sm">Oversized
                            Tee</a>
                        <a href="/search.php?q=new+arrivals"
                            class="text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700/50 rounded-lg px-4 py-2 hover:border-slate-900 hover:text-slate-900 dark:hover:border-white dark:hover:text-white transition-colors shadow-sm">New
                            Arrivals</a>
                    </div>
                </div>

                <!-- Products Right Column -->
                <div class="w-full md:flex-[2]">
                    <h4
                        class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400 mb-4 flex items-center justify-between">
                        Suggested For You
                        <a href="/shop.php"
                            class="text-primary dark:text-white hover:underline lowercase tracking-normal font-medium flex items-center">View
                            all <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7-7">
                                </path>
                            </svg></a>
                    </h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Product 1 -->
                        <a href="/product-detail.php?id=1"
                            class="group flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700/50 hover:shadow-md hover:border-slate-300 dark:hover:border-slate-600 transition-all">
                            <div class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-slate-100 dark:bg-slate-900">
                                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=150&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    alt="Product">
                            </div>
                            <div>
                                <h5
                                    class="font-bold text-sm text-slate-900 dark:text-white leading-tight mb-1 group-hover:text-primary transition-colors">
                                    Deep Neck Ribbon Sweater</h5>
                                <p class="text-primary font-bold text-sm">$90.00</p>
                            </div>
                        </a>
                        <!-- Product 2 -->
                        <a href="/product-detail.php?id=2"
                            class="group flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700/50 hover:shadow-md hover:border-slate-300 dark:hover:border-slate-600 transition-all">
                            <div
                                class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-slate-100 dark:bg-slate-900 relative">
                                <span
                                    class="absolute top-1 left-1 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[8px] uppercase tracking-wider font-bold px-1.5 py-0.5 rounded-sm z-10">New</span>
                                <img src="https://images.unsplash.com/photo-1516257984-b1b4d707412e?q=80&w=150&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    alt="Product">
                            </div>
                            <div>
                                <h5
                                    class="font-bold text-sm text-slate-900 dark:text-white leading-tight mb-1 group-hover:text-primary transition-colors">
                                    Long sleeve oversized sweater</h5>
                                <p class="text-primary font-bold text-sm">$50.00</p>
                            </div>
                        </a>
                        <!-- Product 3 -->
                        <a href="/product-detail.php?id=3"
                            class="group flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700/50 hover:shadow-md hover:border-slate-300 dark:hover:border-slate-600 transition-all">
                            <div class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-slate-100 dark:bg-slate-900">
                                <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?q=80&w=150&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    alt="Product">
                            </div>
                            <div>
                                <h5
                                    class="font-bold text-sm text-slate-900 dark:text-white leading-tight mb-1 group-hover:text-primary transition-colors">
                                    Leather bucket tote bag</h5>
                                <p class="text-primary font-bold text-sm">$350.29</p>
                            </div>
                        </a>
                        <!-- Product 4 -->
                        <a href="/product-detail.php?id=4"
                            class="group flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700/50 hover:shadow-md hover:border-slate-300 dark:hover:border-slate-600 transition-all">
                            <div
                                class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-slate-100 dark:bg-slate-900 relative">
                                <span
                                    class="absolute bottom-1 left-1/2 -translate-x-1/2 w-[85%] text-center bg-white/95 text-red-500 text-[8px] uppercase tracking-wider font-bold px-1 py-0.5 rounded-sm z-10 shadow-sm truncate">Sale</span>
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=150&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    alt="Product">
                            </div>
                            <div>
                                <h5
                                    class="font-bold text-sm text-slate-900 dark:text-white leading-tight mb-1 group-hover:text-primary transition-colors">
                                    Rib knitted jumper</h5>
                                <p class="text-primary font-bold text-sm">$50.00</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- Mobile Slide-out Menu Backdrop -->
<div id="mobileMenuBackdrop"
    class="fixed inset-0 bg-black/60 z-100 hidden md:hidden transition-opacity opacity-0 backdrop-blur-sm"
    onclick="toggleMobileMenu()"></div>

<!-- Mobile Slide-out Menu Panel -->
<div id="mobileMenu"
    class="fixed top-0 left-0 w-4/5 max-w-[320px] h-full bg-white dark:bg-slate-900 z-110 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col shadow-2xl">
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
            <button onclick="toggleSearchOverlay(); toggleMobileMenu();"
                class="block w-full text-left text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Search</button>
            <button onclick="toggleMiniCart(); toggleMobileMenu();"
                class="block w-full text-left text-lg font-medium text-slate-900 dark:text-white hover:text-slate-500 transition-colors">Cart</button>
        </div>
    </div>

    <div class="p-6 border-t border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/20 mt-auto shrink-0">
        <a href="https://wa.me/1234567890" target="_blank"
            class="flex items-center justify-center w-full bg-slate-900 border-2 border-slate-900 hover:bg-transparent hover:text-slate-900 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white text-white py-3 rounded-full font-bold tracking-widest uppercase text-sm transition-all duration-300 mb-4 shadow-md">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
            Chat on WhatsApp
        </a>
        <p class="font-bold text-slate-900 dark:text-white mb-2 text-sm uppercase tracking-wide">Need Help?</p>
        <div class="space-y-1 mb-8">
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

<!-- Search Backdrop UnderHeader -->
<div id="searchBackdrop"
    class="fixed inset-0 bg-black/60 backdrop-blur-sm opacity-0 invisible transition-all duration-300 z-90"
    onclick="toggleSearchOverlay()"></div>

<!-- Mobile Sticky Bottom Navigation -->
<div
    class="md:hidden fixed bottom-0 left-0 w-full bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 z-40 pb-safe shadow-[0_-4px_20px_rgba(0,0,0,0.05)]">
    <div class="grid grid-cols-4 h-16 items-center px-2">
        <a href="/index.php"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors <?= $activePage === 'home' ? 'text-slate-900 dark:text-white' : '' ?>">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Home</span>
        </a>
        <a href="/shop.php"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors <?= $activePage === 'shop' ? 'text-slate-900 dark:text-white' : '' ?>">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Shop</span>
        </a>
        <div class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white cursor-pointer transition-colors"
            onclick="toggleMiniCart()">
            <div class="relative">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span
                    class="cart-badge absolute -top-1.5 -right-2 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"
                    style="display: none;">0</span>
            </div>
            <span class="text-[10px] font-medium tracking-wide">Cart</span>
        </div>
        <button onclick="toggleMobileMenu()"
            class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <span class="text-[10px] font-medium tracking-wide">Menu</span>
        </button>
    </div>
</div>