<?php
$pageTitle = 'Krist - Premium Fashion E-Commerce';
$activePage = 'home';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans transition-colors duration-300">

    <?php include 'includes/header.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
    <main class="relative bg-[#F5F5F5] dark:bg-neutral-900 h-[600px] md:h-[650px] overflow-hidden">
        <div class="swiper heroSwiper w-full h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                        <div class="relative z-10 hero-text-content">
                            <h1
                                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-slate-900 dark:text-white leading-[1.1] mb-6 hero-title">
                                Women's <br />Collection
                            </h1>
                            <p
                                class="text-base md:text-lg text-slate-500 dark:text-slate-400 mb-10 max-w-md leading-relaxed hero-subtitle">
                                Discover our curated selection of premium fashion pieces designed for the modern woman.
                            </p>
                            <a href="shop.php"
                                class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm hero-cta">
                                Shop now
                            </a>
                        </div>
                        <div class="relative hidden lg:flex justify-end items-end h-full hero-image-wrap">
                            <img alt="Women's fashion collection"
                                class="object-cover object-top h-[90%] w-auto max-w-[520px] hero-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0XqfpSJY2aHwGAeV_Jr5RJWZ0dENi0m20KVUWvAUV14S3x0PPF_I983qcvFeNJDCWPa6I3IlQpXs0GxHj0oi3PJ1jjHpc3s83ZqX3JdRiyFVmMbKaOjJipcaOW8kHYGrcuDHhsbpbxByv_3u7IctEwQv_Y7A6pcKlylUctIQg9XwNPItE_dFiA70znSDSjDRxyjm_TZ4Q0aYbLNmlb_Ns0jWw12JNXA6NHI9YNSAGJ1ypYclrRRbaRK5PzU0jAycXdUh676vB8_o" />
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                        <div class="relative z-10 hero-text-content">
                            <h1
                                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-slate-900 dark:text-white leading-[1.1] mb-6 hero-title">
                                Men's <br />Essentials
                            </h1>
                            <p
                                class="text-base md:text-lg text-slate-500 dark:text-slate-400 mb-10 max-w-md leading-relaxed hero-subtitle">
                                Elevate your everyday style with our handpicked men's essentials built for comfort and
                                class.
                            </p>
                            <a href="shop.php?cat=men"
                                class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm hero-cta">
                                Shop now
                            </a>
                        </div>
                        <div class="relative hidden lg:flex justify-end items-end h-full hero-image-wrap">
                            <img alt="Men's fashion essentials"
                                class="object-cover object-top h-[90%] w-auto max-w-[520px] hero-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc" />
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div
                        class="container mx-auto px-6 md:px-12 lg:px-16 h-full grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                        <div class="relative z-10 hero-text-content">
                            <h1
                                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-slate-900 dark:text-white leading-[1.1] mb-6 hero-title">
                                New <br />Arrivals
                            </h1>
                            <p
                                class="text-base md:text-lg text-slate-500 dark:text-slate-400 mb-10 max-w-md leading-relaxed hero-subtitle">
                                Be the first to explore our latest drops — fresh styles updated every week.
                            </p>
                            <a href="shop.php"
                                class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm hero-cta">
                                Shop now
                            </a>
                        </div>
                        <div class="relative hidden lg:flex justify-end items-end h-full hero-image-wrap">
                            <img alt="New arrivals collection"
                                class="object-cover object-top h-[90%] w-auto max-w-[520px] hero-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation Arrows -->
            <div
                class="swiper-button-prev !w-11 !h-11 !rounded-full !bg-white/80 dark:!bg-slate-800/80 !shadow-md !backdrop-blur-sm !border !border-slate-200 dark:!border-slate-700 !text-slate-700 dark:!text-white after:!text-sm !left-4 md:!left-8 hover:!bg-white dark:hover:!bg-slate-700 !transition-all !duration-300">
            </div>
            <div
                class="swiper-button-next !w-11 !h-11 !rounded-full !bg-white/80 dark:!bg-slate-800/80 !shadow-md !backdrop-blur-sm !border !border-slate-200 dark:!border-slate-700 !text-slate-700 dark:!text-white after:!text-sm !right-4 md:!right-8 hover:!bg-white dark:hover:!bg-slate-700 !transition-all !duration-300">
            </div>
            <!-- Pagination Dots -->
            <div class="swiper-pagination !bottom-8"></div>
        </div>
        <style>
            .heroSwiper .swiper-slide-active .hero-title {
                animation: heroFadeUp .8s cubic-bezier(.16, 1, .3, 1) .1s both;
            }

            .heroSwiper .swiper-slide-active .hero-subtitle {
                animation: heroFadeUp .8s cubic-bezier(.16, 1, .3, 1) .3s both;
            }

            .heroSwiper .swiper-slide-active .hero-cta {
                animation: heroFadeUp .8s cubic-bezier(.16, 1, .3, 1) .5s both;
            }

            .heroSwiper .swiper-slide-active .hero-image {
                animation: heroZoomIn 1.2s cubic-bezier(.16, 1, .3, 1) .2s both;
            }

            @keyframes heroFadeUp {
                from {
                    opacity: 0;
                    transform: translateY(40px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            @keyframes heroZoomIn {
                from {
                    opacity: 0;
                    transform: scale(1.08)
                }

                to {
                    opacity: 1;
                    transform: scale(1)
                }
            }

            .heroSwiper .swiper-slide:not(.swiper-slide-active) .hero-title,
            .heroSwiper .swiper-slide:not(.swiper-slide-active) .hero-subtitle,
            .heroSwiper .swiper-slide:not(.swiper-slide-active) .hero-cta,
            .heroSwiper .swiper-slide:not(.swiper-slide-active) .hero-image {
                opacity: 0;
            }

            .heroSwiper .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background: #94a3b8;
                opacity: .4;
                transition: all .3s ease;
            }

            .heroSwiper .swiper-pagination-bullet-active {
                opacity: 1;
                background: #0f172a;
                width: 28px;
                border-radius: 5px;
            }

            .dark .heroSwiper .swiper-pagination-bullet-active {
                background: #fff;
            }
        </style>
    </main>

    <!-- ═══════════════════════════ CATEGORIES ═════════════════════════════ -->
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-between items-end mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white">Shop by Categories</h2>
                <div class="flex space-x-2">
                    <button id="catPrev"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 flex items-center justify-center rounded-full hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </button>
                    <button id="catNext"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 flex items-center justify-center rounded-full hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex overflow-x-auto gap-6 snap-x snap-mandatory scrollbar-hide pb-4" id="categoriesGrid"></div>
            <style>
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }

                .scrollbar-hide {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            </style>
        </div>
    </section>

    <!-- ═══════════════════════════ BESTSELLERS ════════════════════════════ -->
    <section class="py-20 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Our Bestseller</h2>
                <p class="text-slate-500 max-w-lg mx-auto">Discover our most popular products loved by thousands of
                    customers worldwide.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12" id="bestsellersGrid"></div>
            <div class="text-center">
                <a href="shop.php"
                    class="inline-flex items-center justify-center border-2 border-slate-200 dark:border-slate-700 hover:border-primary dark:hover:border-primary text-slate-900 dark:text-white hover:text-primary dark:hover:text-primary px-8 py-3 rounded-md font-semibold transition-all group">
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
    <section class="py-20 bg-gray-50 dark:bg-neutral-900">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Deals of the Month</h2>
                <p class="text-slate-500">Limited time offers on premium collections</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="relative rounded-2xl overflow-hidden aspect-4/3 group" data-aos="fade-right">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ"
                        alt="Deal"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent flex items-center">
                        <div class="p-10 text-white">
                            <span class="bg-red-500 text-xs px-3 py-1 rounded-full font-bold mb-4 inline-block">HOT
                                DEAL</span>
                            <h3 class="text-3xl font-bold mb-2">Summer Sale</h3>
                            <p class="text-white/80 mb-6">Up to 50% off on summer collection</p>
                            <div class="flex space-x-3 mb-6">
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 text-center"><span
                                        class="text-2xl font-bold block">07</span><span class="text-xs">Days</span>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 text-center"><span
                                        class="text-2xl font-bold block">18</span><span class="text-xs">Hours</span>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 text-center"><span
                                        class="text-2xl font-bold block">45</span><span class="text-xs">Mins</span>
                                </div>
                            </div>
                            <a href="shop.php"
                                class="bg-white text-primary px-8 py-3 rounded-md font-semibold text-sm hover:bg-slate-100 transition-colors inline-block focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden aspect-4/3 group" data-aos="fade-left">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc"
                        alt="New Arrivals"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent flex items-center">
                        <div class="p-10 text-white">
                            <span class="bg-primary text-xs px-3 py-1 rounded-full font-bold mb-4 inline-block">NEW
                                ARRIVAL</span>
                            <h3 class="text-3xl font-bold mb-2">Winter Collection</h3>
                            <p class="text-white/80 mb-6">Exclusive new winter arrivals</p>
                            <a href="shop.php"
                                class="bg-white text-primary px-8 py-3 rounded-md font-semibold text-sm hover:bg-slate-100 transition-colors inline-block focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ TESTIMONIALS ═══════════════════════════ -->
    <section class="py-20 bg-white dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                <div class="text-left">
                    <h2 class="text-3xl font-bold dark:text-white mb-3">What Our Customers Say</h2>
                    <p class="text-slate-500 max-w-lg">Real experiences from our valued community.</p>
                </div>
                <div class="hidden md:flex space-x-2 mt-6 md:mt-0">
                    <button id="testPrev"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 flex items-center justify-center rounded-full hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </button>
                    <button id="testNext"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 flex items-center justify-center rounded-full hover:bg-primary hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="testimonialsContainer" class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <!-- Testimonial 1 -->
                <div class="relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700"
                    data-aos="fade-up" data-aos-delay="100">
                    <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5" fill="currentColor"
                        viewBox="0 0 32 32" aria-hidden="true">
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
                    <p class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 flex-grow">
                        "Absolutely love the quality of these clothes. The fit is perfect and they feel so premium. Will
                        definitely be ordering more!"
                    </p>
                    <div
                        class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=0F172A&color=fff"
                            alt="Sarah Jenkins" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white text-base">Sarah Jenkins</h4>
                            <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified Buyer
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700"
                    data-aos="fade-up" data-aos-delay="200">
                    <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5" fill="currentColor"
                        viewBox="0 0 32 32" aria-hidden="true">
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
                    <p class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 flex-grow">
                        "Fast shipping and excellent customer service. The items arrived beautifully packaged. Highly
                        recommend Krist to everyone."
                    </p>
                    <div
                        class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                        <img src="https://ui-avatars.com/api/?name=Marcus+King&background=DC2626&color=fff"
                            alt="Marcus King" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white text-base">Marcus King</h4>
                            <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified Buyer
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700"
                    data-aos="fade-up" data-aos-delay="300">
                    <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5" fill="currentColor"
                        viewBox="0 0 32 32" aria-hidden="true">
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
                        <svg class="w-5 h-5 text-gray-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 flex-grow">
                        "Great selection of trendy items. The website is easy to navigate and I found exactly what I was
                        looking for. Will shop here again."
                    </p>
                    <div
                        class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                        <img src="https://ui-avatars.com/api/?name=Elena+Rodriguez&background=2563EB&color=fff"
                            alt="Elena Rodriguez" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white text-base">Elena Rodriguez</h4>
                            <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified Buyer
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="relative flex flex-col bg-white dark:bg-slate-800 p-8 md:p-10 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-100 dark:border-slate-700"
                    data-aos="fade-up" data-aos-delay="300">
                    <svg class="absolute top-8 right-8 w-16 h-16 text-primary/5 dark:text-white/5" fill="currentColor"
                        viewBox="0 0 32 32" aria-hidden="true">
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
                        <svg class="w-5 h-5 text-gray-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-lg leading-relaxed mb-8 relative z-10 flex-grow">
                        "Great selection of trendy items. The website is easy to navigate and I found exactly what I was
                        looking for. Will shop here again."
                    </p>
                    <div
                        class="flex items-center gap-4 mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 relative z-10">
                        <img src="https://ui-avatars.com/api/?name=Elena+Rodriguez&background=2563EB&color=fff"
                            alt="Elena Rodriguez" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white text-base">Elena Rodriguez</h4>
                            <p class="text-xs font-semibold text-primary uppercase tracking-wider mt-1">Verified Buyer
                            </p>
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
                <p class="text-slate-500">Follow us @kristfashion</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-xl overflow-hidden grouprelative" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0"
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
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ"
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
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc"
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
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm6dR6oF2uuYLGQFK4zjq2_oxErZ3IbPvvbbx0eKcLb0d_vZ4qAu3GuSHcVBFIjSLruwci0TDlEkzKk9HpFmO8X20FX1GLzwnnFYE4Qaw9KGIcSBSJG0j52U2LF5RuEfz-2_N3Ny9aeSuF1iIZUHNOO0vTrsPqg-qAaM_Ufx6rAW1Zjb7daNG-IQQ6MQ-EAYhod0ExJ0q4uPTGJxb7c6mBe0yWvUDmM-MmLgbWRC7LcqO0ESiYgp3DBFeo6M-7VrjrHJajaD1Zc4Q"
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

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ once: true, offset: 50 });

            // Initialize Hero Swiper
            new Swiper(".heroSwiper", {
                loop: true,
                effect: "fade",
                fadeEffect: { crossFade: true },
                speed: 800,
                grabCursor: false,
                autoplay: { delay: 6000, disableOnInteraction: false },
                navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
                pagination: { el: ".swiper-pagination", clickable: true },
            });

            // Initialize Data
            const categoriesContent = [
                { id: 'men', name: 'Men', image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc', items: 124 },
                { id: 'women', name: 'Women', image: 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=640&h=800&fit=crop&q=80', items: 86 },
                { id: 'kids', name: 'Kids', image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0', items: 54 },
                { id: 'accessories', name: 'Accessories', image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ', items: 42 },
                { id: 'footwear', name: 'Footwear', image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCm6dR6oF2uuYLGQFK4zjq2_oxErZ3IbPvvbbx0eKcLb0d_vZ4qAu3GuSHcVBFIjSLruwci0TDlEkzKk9HpFmO8X20FX1GLzwnnFYE4Qaw9KGIcSBSJG0j52U2LF5RuEfz-2_N3Ny9aeSuF1iIZUHNOO0vTrsPqg-qAaM_Ufx6rAW1Zjb7daNG-IQQ6MQ-EAYhod0ExJ0q4uPTGJxb7c6mBe0yWvUDmM-MmLgbWRC7LcqO0ESiYgp3DBFeo6M-7VrjrHJajaD1Zc4Q', items: 78 }
            ];

            const catGrid = document.getElementById('categoriesGrid');
            if (catGrid) {
                catGrid.innerHTML = categoriesContent.map((cat, i) => `
                    <div class="group relative flex-none w-[280px] md:w-[320px] h-[400px] rounded-lg overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 bg-gray-100 dark:bg-neutral-800 snap-center shrink-0 cursor-pointer" data-aos="fade-up" data-aos-delay="${i * 100}">
                        <a href="shop.php?cat=${cat.id}" class="block w-full h-full">
                            <img src="${cat.image}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="${cat.name}"/>
                        </a>
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5">
                            <a href="shop.php?cat=${cat.id}" class="block w-full text-center bg-white py-3 text-sm font-semibold tracking-wide hover:bg-primary hover:text-white dark:text-slate-900 transition-all duration-300 rounded-sm shadow-md uppercase">
                                ${cat.name}
                            </a>
                        </div>
                    </div>
                `).join('');
            }

            const bestGrid = document.getElementById('bestsellersGrid');
            if (bestGrid && typeof PRODUCTS !== 'undefined') {
                bestGrid.innerHTML = PRODUCTS.slice(0, 4).map((p, i) => renderProductCard(p, i * 100)).join('');
            }

            // Category scrolling
            document.getElementById('catPrev')?.addEventListener('click', () => catGrid?.scrollBy({ left: -344, behavior: 'smooth' }));
            document.getElementById('catNext')?.addEventListener('click', () => catGrid?.scrollBy({ left: 344, behavior: 'smooth' }));

            // Testimonial scrolling
            const testContainer = document.getElementById('testimonialsContainer');
            document.getElementById('testPrev')?.addEventListener('click', () => testContainer?.scrollBy({ left: -350, behavior: 'smooth' }));
            document.getElementById('testNext')?.addEventListener('click', () => testContainer?.scrollBy({ left: 350, behavior: 'smooth' }));
        });
    </script>
</body>

</html>