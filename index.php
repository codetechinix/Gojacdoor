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

    <!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
    <main class="bg-[#F3F4F6] dark:bg-slate-900/50 min-h-[600px] flex items-center overflow-hidden relative">
        <div class="container mx-auto px-4 md:px-8 grid lg:grid-cols-2 items-center gap-12 py-12">
            <div class="z-10 relative" data-aos="fade-right">
                <h3 class="text-lg md:text-xl font-medium mb-2 text-slate-600 dark:text-slate-400">Classic Exclusive
                </h3>
                <h1 class="text-5xl md:text-7xl font-bold text-primary dark:text-white leading-tight mb-4">
                    Women's <br /> Collection
                </h1>
                <p class="text-xl md:text-2xl text-slate-500 dark:text-slate-400 mb-8 font-light">UPTO 40% OFF</p>
                <a href="shop.php"
                    class="bg-primary text-white px-10 py-4 inline-flex items-center space-x-3 hover:bg-slate-800 transition-all rounded-md shadow-lg group">
                    <span class="font-semibold uppercase tracking-wider text-sm">Shop Now</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <div class="absolute -bottom-24 -left-12 opacity-[0.03] select-none pointer-events-none">
                    <span class="text-[250px] font-black italic uppercase">BEST</span>
                </div>
            </div>
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left" data-aos-delay="200">
                <div class="relative max-w-md w-full">
                    <div
                        class="absolute inset-0 border-8 border-white/50 dark:border-slate-800/50 -rotate-3 translate-x-4 translate-y-4 rounded-lg transition-transform hover:rotate-0 hover:translate-x-0 hover:translate-y-0 duration-500">
                    </div>
                    <img alt="Fashion model in red coat"
                        class="relative rounded-lg shadow-2xl z-10 w-full object-cover transition-transform hover:scale-[1.02] duration-500"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0XqfpSJY2aHwGAeV_Jr5RJWZ0dENi0m20KVUWvAUV14S3x0PPF_I983qcvFeNJDCWPa6I3IlQpXs0GxHj0oi3PJ1jjHpc3s83ZqX3JdRiyFVmMbKaOjJipcaOW8kHYGrcuDHhsbpbxByv_3u7IctEwQv_Y7A6pcKlylUctIQg9XwNPItE_dFiA70znSDSjDRxyjm_TZ4Q0aYbLNmlb_Ns0jWw12JNXA6NHI9YNSAGJ1ypYclrRRbaRK5PzU0jAycXdUh676vB8_o" />
                </div>
            </div>
        </div>
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
                        class="w-10 h-10 bg-primary text-white flex items-center justify-center rounded-full hover:bg-slate-800 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" id="categoriesGrid"></div>
        </div>
    </section>

    <!-- ═══════════════════════════ BESTSELLERS ════════════════════════════ -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900/50">
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
    <section class="py-20 bg-background-light dark:bg-background-dark">
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
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">What Our Customers Say</h2>
                <p class="text-slate-500 max-w-lg mx-auto">Real experiences from our valued community.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="glass p-8 rounded-2xl border border-white/40 dark:border-white/10 shadow-modern dark:shadow-modern-dark bg-white/50 dark:bg-slate-900/50" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 italic">"Absolutely love the quality of these clothes. The fit is perfect and they feel so premium. Will definitely be ordering more!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center font-bold text-lg">SJ</div>
                        <div>
                            <h4 class="font-bold dark:text-white">Sarah Jenkins</h4>
                            <p class="text-sm text-slate-500">Verified Buyer</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="glass p-8 rounded-2xl border border-white/40 dark:border-white/10 shadow-modern dark:shadow-modern-dark bg-white/50 dark:bg-slate-900/50" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 italic">"Fast shipping and excellent customer service. The items arrived beautifully packaged. Highly recommend Krist to everyone."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center font-bold text-lg">MK</div>
                        <div>
                            <h4 class="font-bold dark:text-white">Marcus King</h4>
                            <p class="text-sm text-slate-500">Verified Buyer</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="glass p-8 rounded-2xl border border-white/40 dark:border-white/10 shadow-modern dark:shadow-modern-dark bg-white/50 dark:bg-slate-900/50" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-slate-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 italic">"Great selection of trendy items. The website is easy to navigate and I found exactly what I was looking for. Will shop here again."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center font-bold text-lg">ER</div>
                        <div>
                            <h4 class="font-bold dark:text-white">Elena Rodriguez</h4>
                            <p class="text-sm text-slate-500">Verified Buyer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════ INSTAGRAM ══════════════════════════════ -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900/50">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold dark:text-white mb-3">Our Instagram Stories</h2>
                <p class="text-slate-500">Follow us @kristfashion</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                </div>
                <div class="aspect-square rounded-xl overflow-hidden group" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm6dR6oF2uuYLGQFK4zjq2_oxErZ3IbPvvbbx0eKcLb0d_vZ4qAu3GuSHcVBFIjSLruwci0TDlEkzKk9HpFmO8X20FX1GLzwnnFYE4Qaw9KGIcSBSJG0j52U2LF5RuEfz-2_N3Ny9aeSuF1iIZUHNOO0vTrsPqg-qAaM_Ufx6rAW1Zjb7daNG-IQQ6MQ-EAYhod0ExJ0q4uPTGJxb7c6mBe0yWvUDmM-MmLgbWRC7LcqO0ESiYgp3DBFeo6M-7VrjrHJajaD1Zc4Q"
                        alt="Instagram"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const categories = [
                { name: 'Casual Wear', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7MV9mBQiIPmdGVf9kGPylWM9nUbVmldo1qPJINe5aHFGJMEl0CEqwSTFTGkskDFxkX1_zXhmXAWe2zQyiqViArK1c1mOgTC1Or_bLbk99nTyUoX5rYRNYT-bBoLF3euQH6H1RzAf4YFhNGzy7bfu8slIi2VBNZtrfxSzzvbyzlH4ietFDE0LSPpD05UOeoe3AXsZyawwVp66roI8mKzBrZgFbycCRFAHtrJfTrDMwJCj0gB_PIXQSP8pL2HWcjNQcfBCSYdEIgH0' },
                { name: 'Western Wear', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8wC_Nn8VlP5LTjeJlFmiDQS298wwtD6G6BAhKdLzNMSUyQu9kgKdU8jB9PCsn1-tsFCzF0aBc5vtywRUt0f98MajcKbu5OuxcANF9MAFBdFL5Dzzd1YT1tDYj2UE6BPp6S326v0DHhrav-tQYw5LQZReDH-35lxzJtyMAi-P2CttH4f9rhnOGPOFlmkKBGHBaoe__IZZujINgwEH-k9zUDR21nXTtTXWDTK-Gv_6tn-KKVFW9dZdBoTea5ih5jmLNper2xDJ1yaQ' },
                { name: 'Ethnic Wear', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc' },
                { name: 'Kids Wear', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCm6dR6oF2uuYLGQFK4zjq2_oxErZ3IbPvvbbx0eKcLb0d_vZ4qAu3GuSHcVBFIjSLruwci0TDlEkzKk9HpFmO8X20FX1GLzwnnFYE4Qaw9KGIcSBSJG0j52U2LF5RuEfz-2_N3Ny9aeSuF1iIZUHNOO0vTrsPqg-qAaM_Ufx6rAW1Zjb7daNG-IQQ6MQ-EAYhod0ExJ0q4uPTGJxb7c6mBe0yWvUDmM-MmLgbWRC7LcqO0ESiYgp3DBFeo6M-7VrjrHJajaD1Zc4Q' },
            ];
            document.getElementById('categoriesGrid').innerHTML = categories.map((c, i) => `
            <a href="shop.php" class="group relative overflow-hidden rounded-xl aspect-[4/5] bg-slate-100" data-aos="zoom-in" data-aos-delay="${(i + 1) * 100}">
                <img alt="${c.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="${c.img}"/>
                <div class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5">
                    <div class="bg-white dark:bg-slate-900 py-3 rounded-md text-center font-semibold text-sm shadow-lg">${c.name}</div>
                </div>
            </a>
        `).join('');

            document.getElementById('bestsellersGrid').innerHTML = PRODUCTS.slice(0, 8).map((p, i) => renderProductCard(p, (i + 1) * 50)).join('');
        });
    </script>
</body>

</html>