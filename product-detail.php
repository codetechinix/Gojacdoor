<?php
$pageTitle = 'Krist - Product Details';
$activePage = 'shop';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php include 'includes/header.php'; ?>

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 md:px-8 pb-8 pt-2 md:pt-4" id="productContainer">
        <!-- Breadcrumb will be rendered here via JS -->
        <div id="productBreadcrumb" class="mb-6"></div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            <!-- Image Gallery -->
            <div class="space-y-4">
                <div class="glass bg-white/50 dark:bg-slate-700/50 rounded-2xl overflow-hidden aspect-4/5 flex items-center justify-center p-8 shadow-modern dark:shadow-modern-dark border border-white/40 dark:border-white/10"
                    data-aos="fade-right">
                    <img id="mainProductImage" src="" alt="Product"
                        class="max-h-full object-contain mix-blend-multiply dark:mix-blend-normal hover:scale-105 transition-transform duration-500" />
                </div>
                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-4" id="imageGallery" data-aos="fade-up" data-aos-delay="100">
                    <!-- thumbnails rendered via js -->
                </div>
            </div>

            <!-- Product Info -->
            <div class="flex flex-col" data-aos="fade-left">
                <div class="flex justify-between items-start mb-2">
                    <span id="productBrand" class="text-slate-500 font-bold uppercase tracking-wider text-xs"></span>
                    <span id="productStockTag"
                        class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs px-2.5 py-1 rounded-full font-bold">In
                        Stock</span>
                </div>

                <h1 id="productName" class="text-4xl font-bold mb-4 font-display"></h1>

                <div class="flex items-center gap-4 mb-6">
                    <div id="productRating" class="flex text-yellow-400">
                        <!-- Rating stars -->
                    </div>
                    <span id="productReviewCount" class="text-slate-500 text-sm"></span>
                </div>

                <div class="flex items-baseline gap-4 mb-8">
                    <span id="productPrice"
                        class="text-3xl font-bold dark:text-white bg-linear-to-r from-primary to-primary-light dark:from-white dark:to-slate-300 bg-clip-text text-transparent"></span>
                    <span id="productOldPrice" class="text-slate-400 line-through font-medium text-lg"></span>
                </div>

                <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8 text-lg">
                    Experience premium quality and exceptional design with this exclusive item. Crafted to elevate your
                    everyday style, ensuring both comfort and durability seamlessly.
                </p>

                <div class="mb-6">
                    <span class="block text-sm font-semibold mb-3 tracking-wide uppercase text-slate-500">Color</span>
                    <div class="flex gap-3">
                        <button
                            class="w-8 h-8 rounded-full bg-slate-900 dark:bg-slate-100 ring-2 ring-offset-2 ring-primary dark:ring-offset-background-dark transition-all hover:scale-110"></button>
                        <button
                            class="w-8 h-8 rounded-full bg-slate-300 dark:bg-slate-700 transition-all hover:scale-110"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-900 transition-all hover:scale-110"></button>
                    </div>
                </div>

                <div class="mb-10">
                    <span class="block text-sm font-semibold mb-3 tracking-wide uppercase text-slate-500">Size</span>
                    <div id="productSizes" class="flex flex-wrap gap-3">
                        <!-- Sizes rendered via JS -->
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div
                        class="flex items-center border border-slate-200 dark:border-slate-700 rounded-md h-14 bg-white dark:bg-slate-900 shadow-sm">
                        <button
                            class="px-5 text-slate-500 hover:text-primary transition-colors h-full flex items-center justify-center transform hover:scale-110"
                            onclick="changeQty(-1)"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                                </path>
                            </svg></button>
                        <span id="productQty" class="w-8 text-center font-bold text-lg">1</span>
                        <button
                            class="px-5 text-slate-500 hover:text-primary transition-colors h-full flex items-center justify-center transform hover:scale-110"
                            onclick="changeQty(1)"><svg class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg></button>
                    </div>
                    <button id="addToCartBtn"
                        class="flex-1 py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white shadow-sm hover:shadow-md hover:-translate-y-0.5 h-14">
                        Add to Cart
                    </button>
                    <button id="wishlistBtn"
                        class="w-14 h-14 flex items-center justify-center border border-slate-200 dark:border-slate-700 rounded-md hover:border-primary hover:text-primary transition-colors bg-white dark:bg-slate-900 shadow-sm group">
                        <svg class="w-6 h-6 wish-icon group-hover:scale-110 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Accordion Details / Tabs -->
        <div class="mb-16" data-aos="fade-up" data-tab-group="product-tabs">
            <div>
                <!-- Tabs Navigation -->
                <div id="tabContainer"
                    class="flex gap-8 border-b border-slate-200 dark:border-slate-800 mb-8 overflow-x-auto whitespace-nowrap scrollbar-hide">
                    <button onclick="switchTab('product-tabs', 'descriptions')" data-tab="descriptions"
                        class="tab-btn pb-4 text-sm font-bold text-slate-900 border-b-2 border-slate-900 dark:text-white dark:border-white uppercase tracking-wider transition-colors active">Descriptions</button>
                    <button onclick="switchTab('product-tabs', 'additional')" data-tab="additional"
                        class="tab-btn pb-4 text-sm font-bold text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 uppercase tracking-wider transition-colors border-b-2 border-transparent">Additional
                        Information</button>
                    <button onclick="switchTab('product-tabs', 'reviews')" data-tab="reviews"
                        class="tab-btn pb-4 text-sm font-bold text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 uppercase tracking-wider transition-colors border-b-2 border-transparent">Reviews</button>
                </div>

                <div
                    class="glass p-6 md:p-8 rounded-xl border border-white/40 dark:border-white/10 shadow-modern dark:shadow-modern-dark bg-white/50 dark:bg-slate-900/50">
                    <!-- Descriptions Tab -->
                    <div id="panel-descriptions" class="tab-panel active block animate-fade-in">
                        <div class="text-slate-600 dark:text-slate-400 space-y-4 text-sm leading-relaxed">
                            <p>Elevate your everyday wardrobe with this meticulously crafted piece, combining
                                contemporary style with unparalleled comfort. Designed using premium materials, it
                                ensures longevity while maintaining its pristine look wash after wash.</p>
                            <p>Whether you're dressing up for a special occasion or keeping it casual, its versatile
                                design makes it the perfect choice. The attention to detail is evident in every stitch,
                                offering a tailored fit that flatters all body types.</p>
                            <ul class="list-disc pl-5 mt-4 space-y-2">
                                <li>Premium blended fabric for exceptional breathability</li>
                                <li>Wrinkle-resistant finish for easy maintenance</li>
                                <li>Reinforced stitching at stress points for enhanced durability</li>
                                <li>Eco-friendly manufacturing processes</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Additional Info Tab -->
                    <div id="panel-additional" class="tab-panel hidden animate-fade-in">
                        <div class="space-y-4">
                            <div
                                class="grid grid-cols-[140px_1fr] text-sm items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                                <span
                                    class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">Category</span>
                                <span id="productCategory" class="text-slate-600 dark:text-slate-400 capitalize"></span>
                            </div>
                            <div
                                class="grid grid-cols-[140px_1fr] text-sm items-center border-b border-slate-100 dark:border-slate-800 pb-3">
                                <span
                                    class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">SKU</span>
                                <span class="text-slate-600 dark:text-slate-400">KRIST-<span
                                        id="productSku"></span></span>
                            </div>
                            <div class="grid grid-cols-[140px_1fr] text-sm items-center">
                                <span
                                    class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">Material</span>
                                <span class="text-slate-600 dark:text-slate-400">100% Organic Cotton</span>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div id="panel-reviews" class="tab-panel hidden animate-fade-in">
                        <div class="space-y-8">
                            <div
                                class="flex flex-col sm:flex-row items-center justify-between border-b border-slate-200 dark:border-slate-700 pb-4 gap-4">
                                <h3 class="font-bold dark:text-white text-lg">Customer Reviews</h3>
                                <button onclick="toggleReviewModal()"
                                    class="w-full sm:w-auto py-3 px-8 text-xs tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white">Write
                                    a Review</button>
                            </div>
                            <div class="space-y-6">
                                <!-- Review 1 -->
                                <div class="flex gap-4">
                                    <div
                                        class="w-10 h-10 bg-slate-200 dark:bg-slate-700 rounded-full flex-shrink-0 flex items-center justify-center font-bold text-slate-500 text-sm">
                                        JD
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="font-bold dark:text-white text-sm">John Doe</h4>
                                            <span class="text-xs text-slate-400">2 days ago</span>
                                        </div>
                                        <div class="flex text-yellow-400 mb-2">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Absolutely
                                            love the quality. Fits perfectly and looks exactly like the pictures.
                                            Shipping was also incredibly fast.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Related Products (New) -->
        <div class="mb-24" data-aos="fade-up">
            <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
                <h2 class="text-3xl font-bold dark:text-white">Related Products</h2>
                <div class="hidden md:flex space-x-2">
                    <button id="relatedPrev"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </button>
                    <button id="relatedNext"
                        class="w-10 h-10 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white flex items-center justify-center rounded-full hover:bg-slate-900 dark:hover:bg-white hover:text-white dark:hover:text-slate-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="swiper relatedSwiper overflow-visible! relative">
                <div class="swiper-wrapper" id="relatedProductsContainer">
                    <!-- Products injected via JS -->
                </div>
            </div>
        </div>
    </main>

    <!-- Review Modal -->
    <div id="reviewModal" class="fixed inset-0 z-100 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="toggleReviewModal()"></div>
        <div class="bg-white dark:bg-slate-900 w-full max-w-lg rounded-2xl shadow-2xl relative z-10 p-8 transform transition-transform scale-95 opacity-0 duration-300"
            id="reviewModalContent">
            <button onclick="toggleReviewModal()"
                class="absolute top-4 right-4 text-slate-400 hover:text-slate-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <h3 class="text-2xl font-bold mb-6">Write a Review</h3>
            <form onsubmit="submitReview(event)">
                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-3">Rating</label>
                    <div class="flex text-slate-300 space-x-2 interactive-stars cursor-pointer transition-colors">
                        <svg class="w-8 h-8 star transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-8 h-8 star transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-8 h-8 star transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-8 h-8 star transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-8 h-8 star transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Your Name</label>
                    <input type="text"
                        class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary outline-none"
                        required />
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Review</label>
                    <textarea
                        class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-3 h-32 resize-none focus:ring-1 focus:ring-primary focus:border-primary outline-none"
                        required></textarea>
                </div>
                <button type="submit"
                    class="w-full py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white mt-2">Submit
                    Review</button>
            </form>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>

</html>