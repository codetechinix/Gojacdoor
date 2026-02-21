<!-- includes/header.php -->
<?php
$activePage = isset($activePage) ? $activePage : '';
?>
<header id="site-header"
    class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 transition-all duration-300">
    <div class="container mx-auto px-4 md:px-8 flex items-center justify-between h-20">
        <a href="index.php" class="flex items-center space-x-2">
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
                href="index.php">Home</a>
            <div class="group relative">
                <button
                    class="font-medium hover:text-primary transition-colors flex items-center group text-slate-600 dark:text-slate-400">
                    Shop
                    <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="mega-menu absolute left-1/2 -translate-x-1/2 top-full w-[900px] bg-white dark:bg-slate-900 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] dark:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.5)] rounded-2xl border border-slate-200 dark:border-slate-800 p-10 flex gap-8 z-50 mt-2">

                    <div class="flex-1 space-y-8">
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Men
                            </h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">T-Shirts</a>
                                </li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Casual
                                        Shirts</a></li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Formal
                                        Shirts</a></li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Jackets</a>
                                </li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Blazers &
                                        Coats</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">
                                Indian & Festive Wear</h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Kurtas & Kurta
                                        Sets</a></li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Sherwanis</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-px bg-slate-100 dark:bg-slate-800"></div>

                    <div class="flex-1 space-y-8">
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">
                                Women</h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Kurtas &
                                        Suits</a></li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Sarees</a>
                                </li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Ethnic
                                        Wear</a></li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Lehenga
                                        Cholis</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">
                                Western Wear</h3>
                            <ul class="space-y-3 text-sm text-slate-500">
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Dresses</a>
                                </li>
                                <li><a href="shop.php" class="hover:text-primary transition-colors block">Jumpsuits</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-px bg-slate-100 dark:bg-slate-800"></div>

                    <div class="flex-1">
                        <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">
                            Footwear</h3>
                        <ul class="space-y-3 text-sm text-slate-500">
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Flats</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Casual Shoes</a>
                            </li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Heels</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Boots</a></li>
                        </ul>
                    </div>

                    <div class="w-px bg-slate-100 dark:bg-slate-800"></div>

                    <div class="flex-1">
                        <h3 class="font-bold text-primary dark:text-white mb-4 uppercase text-sm tracking-wider">Kids
                        </h3>
                        <ul class="space-y-3 text-sm text-slate-500">
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">T-Shirts</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Shirts</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Jeans</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition-colors block">Trousers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400"
                href="#">Our Story</a>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400"
                href="#">Blog</a>
            <a class="font-medium hover:text-primary/70 transition-colors text-slate-600 dark:text-slate-400"
                href="#">Contact Us</a>
        </nav>
        <div class="flex items-center space-x-4 md:space-x-5">
            <button id="themeToggle"
                class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors hover:scale-110">
                <div class="h-6 w-6" id="themeIconContainer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                </div>
            </button>
            <button class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
            <a href="wishlist.php"
                class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors relative hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <span
                    class="absolute -top-1 -right-1 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">2</span>
            </a>
            <div class="relative cursor-pointer hover:scale-110 transition-transform" onclick="toggleMiniCart()">
                <div class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <span id="cartBadge"
                    class="cart-badge absolute -top-2 -right-2 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold hidden">0</span>
            </div>
            <a href="login.php"
                class="bg-primary text-white px-7 py-2.5 rounded-lg font-semibold hover:opacity-90 hover:shadow-lg transition-all hidden lg:block border border-transparent">Login</a>
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
        class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 p-6 space-y-4 shadow-lg absolute w-full left-0">
        <a href="index.php" class="block py-2 font-medium">Home</a>
        <a href="shop.php" class="block py-2 font-medium">Shop</a>
        <a href="search-results.php" class="block py-2 font-medium">Search</a>
        <a href="personal-info.php" class="block py-2 font-medium">My Account</a>
        <a href="login.php" class="block py-2 bg-primary text-white text-center rounded-lg font-medium">Login</a>
    </div>
</header>