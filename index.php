<?php
$pageTitle = 'Gojacdoors - Premium Fashion E-Commerce';
$activePage = 'home';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans transition-colors duration-300 overflow-x-hidden">

    <?php include 'includes/header.php'; ?>

    <!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
    <main
        class="relative bg-[#f8f6f0] dark:bg-slate-900 h-[650px] md:h-[700px] lg:h-[calc(100vh-130px)] overflow-hidden group">
        <div class="swiper heroSwiper w-full h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full z-0">
                        <img alt="Women's fashion collection" class="object-cover object-top w-full h-full"
                            src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=800&q=90" />
                        <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8 relative z-10">
                        <div class="relative hero-text-content mt-12 md:mt-0">
                            <p
                                class="text-[10px] md:text-xs font-bold tracking-[0.25em] uppercase mb-5 text-white/80 flex items-center gap-3">
                                <span class="w-8 h-[2px] bg-white/80 inline-block"></span>
                                EST. 2024 • Premium Quality
                            </p>
                            <h1
                                class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-black text-white leading-[1.05] mb-6 uppercase tracking-tight hero-title">
                                Women's <br />Collection
                            </h1>
                            <p
                                class="text-base md:text-lg text-white/80 mb-10 max-w-lg leading-relaxed font-medium hero-subtitle">
                                Discover our curated selection of premium fashion pieces designed for the modern woman.
                            </p>
                            <a href="/shop.php"
                                class="inline-flex items-center justify-center bg-white text-slate-900 border-2 border-transparent hover:border-white hover:bg-transparent hover:text-white px-10 md:px-12 py-4 rounded-full text-sm font-bold tracking-widest uppercase transition-all duration-300 group/cta hero-cta">
                                Explore Now
                                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/cta:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full z-0">
                        <img alt="Men's fashion essentials" class="object-cover object-[center_30%] w-full h-full"
                            src="https://images.unsplash.com/photo-1516257984-b1b4d707412e?q=90&w=800" />
                        <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8 relative z-10">
                        <div class="relative hero-text-content mt-12 md:mt-0">
                            <p
                                class="text-[10px] md:text-xs font-bold tracking-[0.25em] uppercase mb-5 text-white/80 flex items-center gap-3">
                                <span class="w-8 h-[2px] bg-white/80 inline-block"></span>
                                Timeless Comfort
                            </p>
                            <h1
                                class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-black text-white leading-[1.05] mb-6 uppercase tracking-tight hero-title">
                                Men's <br />Essentials
                            </h1>
                            <p
                                class="text-base md:text-lg text-white/80 mb-10 max-w-lg leading-relaxed font-medium hero-subtitle">
                                Elevate your everyday style with our handpicked men's essentials built for comfort and
                                class.
                            </p>
                            <a href="/shop.php?cat=men"
                                class="inline-flex items-center justify-center bg-white text-slate-900 border-2 border-transparent hover:border-white hover:bg-transparent hover:text-white px-10 md:px-12 py-4 rounded-full text-sm font-bold tracking-widest uppercase transition-all duration-300 group/cta hero-cta">
                                Shop Collection
                                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/cta:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full z-0">
                        <img alt="New arrivals collection" class="object-cover object-[center_30%] w-full h-full"
                            src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=90&w=800" />
                        <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8 relative z-10">
                        <div class="relative hero-text-content mt-12 md:mt-0">
                            <p
                                class="text-[10px] md:text-xs font-bold tracking-[0.25em] uppercase mb-5 text-white/80 flex items-center gap-3">
                                <span class="w-8 h-[2px] bg-white/80 inline-block"></span>
                                Fresh Drops
                            </p>
                            <h1
                                class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-black text-white leading-[1.05] mb-6 uppercase tracking-tight hero-title">
                                New <br />Arrivals
                            </h1>
                            <p
                                class="text-base md:text-lg text-white/80 mb-10 max-w-lg leading-relaxed font-medium hero-subtitle">
                                Be the first to explore our latest drops — fresh styles updated every week.
                            </p>
                            <a href="/shop.php"
                                class="inline-flex items-center justify-center bg-white text-slate-900 border-2 border-transparent hover:border-white hover:bg-transparent hover:text-white px-10 md:px-12 py-4 rounded-full text-sm font-bold tracking-widest uppercase transition-all duration-300 group/cta hero-cta">
                                Discover More
                                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/cta:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation Arrows -->
            <div
                class="swiper-button-prev opacity-0 group-hover:opacity-100 w-12! h-12! md:w-14! md:h-14! rounded-full! bg-white! dark:bg-slate-900! shadow-lg! border! border-slate-200! dark:border-slate-700! text-slate-900! dark:text-white! after:text-sm! left-4! md:left-8! hover:scale-110! hover:bg-slate-900! hover:border-slate-900! hover:text-white! dark:hover:bg-white! dark:hover:border-white! dark:hover:text-slate-900! transition-all! duration-300!">
            </div>
            <div
                class="swiper-button-next opacity-0 group-hover:opacity-100 w-12! h-12! md:w-14! md:h-14! rounded-full! bg-white! dark:bg-slate-900! shadow-lg! border! border-slate-200! dark:border-slate-700! text-slate-900! dark:text-white! after:text-sm! right-4! md:right-8! hover:scale-110! hover:bg-slate-900! hover:border-slate-900! hover:text-white! dark:hover:bg-white! dark:hover:border-white! dark:hover:text-slate-900! transition-all! duration-300!">
            </div>
            <!-- Pagination Dots -->
            <div class="swiper-pagination bottom-8!"></div>
        </div>
    </main>

    <!-- ═══════════════════════════ CATEGORIES ═════════════════════════════ -->
    <section class="py-16 md:py-24 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-between items-end mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white">Shop by Categories</h2>
                <div class="flex space-x-2">
                    <button id="catPrev"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </button>
                    <button id="catNext"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper categoriesSwiper overflow-hidden">
                <div class="swiper-wrapper" id="categoriesGrid"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ BESTSELLERS ════════════════════════════ -->
    <section class="py-16 md:py-24 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Our Bestseller</h2>
                <p class="text-slate-500 max-w-lg mx-auto">Discover our most popular products loved by thousands of
                    customers worldwide.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12" id="bestsellersGrid"></div>
            <div class="text-center">
                <a href="/shop.php"
                    class="inline-flex items-center justify-center bg-slate-900 border-2 border-slate-900 dark:border-white dark:bg-white text-white dark:text-slate-900 hover:bg-transparent dark:hover:bg-transparent hover:text-slate-900 dark:hover:text-white px-8 py-3 rounded-full font-bold uppercase tracking-widest text-sm transition-all group">
                    View All Products
                    <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ DEALS ══════════════════════════════════ -->
    <section class="py-16 md:py-24 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Deals of the Month</h2>
                <p class="text-slate-500">Limited time offers on premium collections</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="relative rounded-2xl overflow-hidden aspect-4/3 group" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600&auto=format&fit=crop"
                        alt="Deal"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div
                        class="absolute inset-0 bg-linear-to-r from-black/80 md:from-black/70 to-transparent flex items-center">
                        <div class="p-6 sm:p-8 md:p-12 lg:p-16 text-white w-full">
                            <span
                                class="bg-red-500 text-xs px-4 py-1.5 rounded-full font-bold mb-3 md:mb-5 inline-block tracking-widest">HOT
                                DEAL</span>
                            <h3 class="text-3xl sm:text-4xl md:text-5xl font-black mb-2 md:mb-3">Summer Sale</h3>
                            <p
                                class="text-white/90 font-medium mb-6 md:mb-8 text-sm md:text-lg max-w-[80%] md:max-w-full">
                                Up to 50% off on summer collection</p>
                            <div class="flex space-x-2 md:space-x-3 mb-6 md:mb-8">
                                <div
                                    class="bg-white/20 backdrop-blur-md rounded-xl px-2.5 py-2 md:px-4 md:py-3 text-center border border-white/20 shadow-lg min-w-[50px] md:min-w-[70px]">
                                    <span class="text-xl md:text-3xl font-bold block countdown-days">00</span><span
                                        class="text-[9px] md:text-[10px] uppercase font-bold tracking-wider mt-1 block">Days</span>
                                </div>
                                <div
                                    class="bg-white/20 backdrop-blur-md rounded-xl px-2.5 py-2 md:px-4 md:py-3 text-center border border-white/20 shadow-lg min-w-[50px] md:min-w-[70px]">
                                    <span class="text-xl md:text-3xl font-bold block countdown-hours">00</span><span
                                        class="text-[9px] md:text-[10px] uppercase font-bold tracking-wider mt-1 block">Hours</span>
                                </div>
                                <div
                                    class="bg-white/20 backdrop-blur-md rounded-xl px-2.5 py-2 md:px-4 md:py-3 text-center border border-white/20 shadow-lg min-w-[50px] md:min-w-[70px]">
                                    <span class="text-xl md:text-3xl font-bold block countdown-mins">00</span><span
                                        class="text-[9px] md:text-[10px] uppercase font-bold tracking-wider mt-1 block">Mins</span>
                                </div>
                                <div
                                    class="bg-white/20 backdrop-blur-md rounded-xl px-2.5 py-2 md:px-4 md:py-3 text-center border border-white/20 shadow-lg min-w-[50px] md:min-w-[70px]">
                                    <span class="text-xl md:text-3xl font-bold block countdown-secs">00</span><span
                                        class="text-[9px] md:text-[10px] uppercase font-bold tracking-wider mt-1 block">Secs</span>
                                </div>
                            </div>
                            <a href="/shop.php"
                                class="bg-white text-slate-900 border-2 border-transparent hover:border-white hover:bg-transparent hover:text-white px-6 md:px-8 py-2.5 md:py-3.5 rounded-full font-bold uppercase tracking-widest text-xs md:text-sm transition-colors inline-block shadow-lg">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden aspect-4/3 group shadow-xl" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1516257984-b1b4d707412e?q=80&w=600&auto=format&fit=crop"
                        alt="New Arrivals"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div
                        class="absolute inset-0 bg-linear-to-r from-black/80 md:from-black/70 to-transparent flex items-center">
                        <div class="p-6 sm:p-8 md:p-12 lg:p-16 text-white w-full">
                            <span
                                class="bg-primary text-xs px-4 py-1.5 rounded-full font-bold mb-3 md:mb-5 inline-block tracking-widest">NEW
                                ARRIVAL</span>
                            <h3 class="text-4xl md:text-5xl font-black mb-3">Winter Collection</h3>
                            <p class="text-white/90 font-medium mb-8 text-lg">Exclusive new winter arrivals</p>
                            <a href="/shop.php"
                                class="bg-white text-slate-900 border-2 border-transparent hover:border-white hover:bg-transparent hover:text-white px-8 py-3.5 rounded-full font-bold uppercase tracking-widest text-sm transition-colors inline-block shadow-lg">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ COUNTER UP ═════════════════════════════ -->
    <section
        class="py-12 md:py-16 mt-4 md:mt-8 bg-gray-100/8 dark:bg-slate-900 border-y border-transparent dark:border-slate-800">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                <!-- Counter 1 -->
                <div class="text-center p-6 pt-12 rounded-3xl bg-white dark:bg-slate-800 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700 relative mt-6"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-full flex items-center justify-center absolute -top-8 left-1/2 -translate-x-1/2 border-[6px] border-white dark:border-slate-900">
                        <div
                            class="w-full h-full bg-primary/10 dark:bg-slate-700 rounded-full flex items-center justify-center text-primary dark:text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-1 mb-2">
                        <span class="counter-value font-black text-5xl text-slate-900 dark:text-white tracking-tight"
                            data-target="50">0</span>
                        <span class="font-black text-4xl text-slate-900 dark:text-white">K+</span>
                    </div>
                    <p class="text-sm md:text-base text-slate-500 font-bold uppercase tracking-widest">Happy Customers
                    </p>
                </div>
                <!-- Counter 2 -->
                <div class="text-center p-6 pt-12 rounded-3xl bg-white dark:bg-slate-800 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700 relative mt-6"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-full flex items-center justify-center absolute -top-8 left-1/2 -translate-x-1/2 border-[6px] border-white dark:border-slate-900">
                        <div
                            class="w-full h-full bg-primary/10 dark:bg-slate-700 rounded-full flex items-center justify-center text-primary dark:text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-1 mb-2">
                        <span class="counter-value font-black text-5xl text-slate-900 dark:text-white tracking-tight"
                            data-target="100">0</span>
                        <span class="font-black text-4xl text-slate-900 dark:text-white">%</span>
                    </div>
                    <p class="text-sm md:text-base text-slate-500 font-bold uppercase tracking-widest">Premium Quality
                    </p>
                </div>
                <!-- Counter 3 -->
                <div class="text-center p-6 pt-12 rounded-3xl bg-white dark:bg-slate-800 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700 relative mt-6"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-full flex items-center justify-center absolute -top-8 left-1/2 -translate-x-1/2 border-[6px] border-white dark:border-slate-900">
                        <div
                            class="w-full h-full bg-primary/10 dark:bg-slate-700 rounded-full flex items-center justify-center text-primary dark:text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-1 mb-2">
                        <span class="counter-value font-black text-5xl text-slate-900 dark:text-white tracking-tight"
                            data-target="15">0</span>
                        <span class="font-black text-4xl text-slate-900 dark:text-white">+</span>
                    </div>
                    <p class="text-sm md:text-base text-slate-500 font-bold uppercase tracking-widest">Retail Stores
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ TESTIMONIALS ═══════════════════════════ -->
    <section class="py-16 md:py-24 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                <div class="text-left">
                    <h2 class="text-3xl font-bold dark:text-white mb-3">What Our Customers Say</h2>
                    <p class="text-slate-500 max-w-lg">Real experiences from our valued community.</p>
                </div>
                <div class="hidden md:flex space-x-2 mt-6 md:mt-0">
                    <button id="testPrev"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </button>
                    <button id="testNext"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper testimonialsSwiper overflow-hidden">
                <div id="testimonialsContainer" class="swiper-wrapper">

                    <!-- Testimonial 1 -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Absolutely love the quality of these clothes. The fit is perfect and they feel so
                                premium. Will definitely be ordering more!"
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=0F172A&color=fff"
                                    alt="Sarah Jenkins" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Sarah Jenkins</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Fast shipping and excellent customer service. The items arrived beautifully packaged.
                                Highly recommend Gojacdoors to everyone."
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Marcus+King&background=DC2626&color=fff"
                                    alt="Marcus King" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Marcus King</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-gray-300 dark:text-slate-600" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Great selection of trendy items. The website is easy to navigate and I found exactly
                                what I was looking for. Will shop here again."
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Elena+Rodriguez&background=2563EB&color=fff"
                                    alt="Elena Rodriguez" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Elena Rodriguez</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 (Cloned 1) -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Absolutely love the quality of these clothes. The fit is perfect and they feel so
                                premium. Will definitely be ordering more!"
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=0F172A&color=fff"
                                    alt="Sarah Jenkins" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Sarah Jenkins</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 (Cloned 2) -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Fast shipping and excellent customer service. The items arrived beautifully packaged.
                                Highly recommend Gojacdoors to everyone."
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Marcus+King&background=DC2626&color=fff"
                                    alt="Marcus King" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Marcus King</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 6 (Cloned 3) -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="h-full relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700">
                            <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5"
                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path
                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
                                </path>
                            </svg>
                            <div class="flex mb-6 space-x-1 relative z-10">
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-[#F3C43B]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-gray-300 dark:text-slate-600" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 grow">
                                "Great selection of trendy items. The website is easy to navigate and I found exactly
                                what I was looking for. Will shop here again."
                            </p>
                            <div
                                class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                                <img src="https://ui-avatars.com/api/?name=Elena+Rodriguez&background=2563EB&color=fff"
                                    alt="Elena Rodriguez" class="w-14 h-14 rounded-full object-cover">
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-base">Elena Rodriguez</h4>
                                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified
                                        Buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ INSTAGRAM ══════════════════════════════ -->
    <section class="py-20 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Our Instagram Stories</h2>
                <p class="text-slate-500">Follow us @Gojacdoors</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-xl overflow-hidden group relative" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=600&auto=format&fit=crop"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600&auto=format&fit=crop"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group relative" data-aos="zoom-in"
                    data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1519238350819-21dc31845112?q=80&w=600&auto=format&fit=crop"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group relative" data-aos="zoom-in"
                    data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1509319117193-57bab727e09d?q=80&w=600&auto=format&fit=crop"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Pop-up -->
    <div id="promoPopup" style="z-index: 120;"
        class="fixed inset-0 flex items-center justify-center bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-700 ease-out">
        <div
            class="relative w-[95%] max-w-4xl bg-white dark:bg-slate-900 rounded-3xl shadow-[0_25px_60px_-15px_rgba(0,0,0,0.5)] translate-y-12 scale-95 transition-all duration-700 ease-[cubic-bezier(0.25,1,0.5,1)] flex flex-row overflow-hidden border border-slate-100/50 dark:border-slate-800">
            <!-- Close Button -->
            <button onclick="closePromoPopup()"
                class="absolute top-4 right-4 z-20 bg-white/50 backdrop-blur-md dark:bg-slate-800/80 text-slate-800 dark:text-slate-200 rounded-full p-2.5 hover:bg-slate-100 dark:hover:bg-slate-700 transition duration-300 shadow-sm"
                aria-label="Close">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Image Header/Sidebar -->
            <div class="w-2/5 md:w-5/12 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?q=80&w=800&auto=format&fit=crop"
                    alt="Promotional fashion sale"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-2000">
                <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/20 to-transparent"></div>
                <div class="absolute bottom-4 left-4 md:bottom-6 md:left-8">
                    <span
                        class="inline-block px-2.5 py-0.5 md:px-3 md:py-1 bg-white/20 backdrop-blur-md text-white border border-white/30 text-[8px] md:text-[10px] font-bold tracking-widest uppercase rounded-full mb-2 md:mb-3">Limited
                        Offer</span>
                    <h3 class="text-white text-lg md:text-2xl font-bold tracking-tight leading-tight hidden sm:block">
                        Autumn Collection</h3>
                </div>
            </div>

            <!-- Content -->
            <div
                class="w-3/5 md:w-7/12 p-8 md:p-16 flex flex-col justify-center align-start relative bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] bg-slate-50 dark:bg-slate-900">
                <h2
                    class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white leading-[1.15] tracking-tight">
                    <span class="bg-clip-text text-transparent bg-linear-to-r from-primary to-orange-500">Don’t miss
                        out</span><br><span class="hidden sm:inline">on our exclusive deals.</span>
                </h2>
                <p
                    class="mt-3 md:mt-5 text-slate-500 dark:text-slate-400 leading-relaxed text-xs sm:text-sm md:text-lg max-w-md font-medium">
                    Unlock premium fashion at unbeatable prices. Shop the collection now before inventory runs out.
                </p>
                <div class="mt-6 md:mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-3 md:gap-4">
                    <a href="/shop.php" onclick="closePromoPopup()"
                        class="w-full sm:w-auto inline-flex items-center justify-center bg-primary text-white hover:bg-slate-900 dark:hover:bg-white dark:hover:text-slate-900 rounded-full px-6 py-3 md:px-12 md:py-4 text-[10px] md:text-sm font-bold tracking-widest uppercase transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                        Claim 20% Off
                    </a>
                    <button onclick="closePromoPopup()"
                        class="text-slate-400 hover:text-slate-800 dark:hover:text-white text-[10px] md:text-sm font-medium tracking-wide transition-colors py-1.5 md:py-2 px-2 md:px-4 underline underline-offset-4 hidden sm:block">
                        No thanks
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>