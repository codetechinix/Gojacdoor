<?php
$pageTitle = 'Gojacdoors - Product Details';
$activePage = 'shop';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans transition-colors duration-300 overflow-x-hidden">
    <?php include 'includes/header.php'; ?>
    <main class="grow max-w-7xl mx-auto w-full px-4 md:px-8 pt-2 md:pt-4 pb-24 md:pb-12" id="productContainer">
        <!-- Breadcrumb will be rendered here via JS -->
        <div id="productBreadcrumb" class="mb-6"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 mb-20 items-start">
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
                    <span id="productReviewCount" class="text-slate-500 dark:text-slate-400 text-sm"></span>
                </div>

                <div class="flex items-baseline gap-4 mb-8">
                    <span id="productPrice" class="text-3xl font-bold text-primary dark:text-white"></span>
                    <span id="productOldPrice" class="text-slate-400 line-through font-medium text-lg"></span>
                </div>

                <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8 text-lg">
                    Experience premium quality and exceptional design with this exclusive item. Crafted to elevate your
                    everyday style, ensuring both comfort and durability seamlessly.
                </p>

                <div class="mb-10">
                    <span class="block text-sm font-semibold mb-3 tracking-wide uppercase text-slate-500">Size</span>
                    <div id="productSizes" class="flex flex-wrap gap-3">
                        <!-- Sizes rendered via JS -->
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-2 sm:gap-4 mt-8">
                    <div
                        class="flex items-center border border-slate-200 dark:border-slate-700 rounded-lg h-14 bg-white dark:bg-slate-900 shadow-sm w-28 md:w-32 shrink-0 overflow-hidden">
                        <button
                            class="px-3 md:px-4 text-slate-500 hover:text-primary transition-colors h-full flex items-center justify-center transform active:scale-95"
                            onclick="changeQty(-1)"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4">
                                </path>
                            </svg></button>
                        <span id="productQty"
                            class="flex-1 text-center font-bold text-base md:text-lg dark:text-white">1</span>
                        <button
                            class="px-3 md:px-4 text-slate-500 hover:text-primary transition-colors h-full flex items-center justify-center transform active:scale-95"
                            onclick="changeQty(1)"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4">
                                </path>
                            </svg></button>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-4 flex-1">
                        <button id="addToCartBtn"
                            class="flex-1 py-4 text-[10px] md:text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 shadow-sm h-14 opacity-50 cursor-not-allowed">Sold
                            Out</button>
                        <button id="compareBtn"
                            class="w-14 h-14 flex items-center justify-center border border-slate-200 dark:border-slate-700 rounded-full hover:border-primary hover:text-primary transition-all bg-white dark:bg-slate-900 shadow-sm group active:scale-95 shrink-0"
                            title="Add to Compare">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 group-hover:scale-110 transition-transform">
                                <path fill-rule="evenodd"
                                    d="M15.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H7.5a.75.75 0 0 1 0-1.5h11.69l-3.22-3.22a.75.75 0 0 1 0-1.06Zm-7.94 9a.75.75 0 0 1 0 1.06l-3.22 3.22H16.5a.75.75 0 0 1 0 1.5H4.81l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
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
                            <!-- Review List -->
                            <div id="productReviewsList" class="space-y-6">
                                <!-- reviews injected via js -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Related Products (New) -->
        <div id="relatedProductsSection" class="mb-24">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
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

            <div class="swiper relatedSwiper overflow-hidden relative">
                <div class="swiper-wrapper" id="relatedProductsContainer">
                    <!-- Products injected via JS -->
                </div>
            </div>
        </div>
    </main>


    <?php include 'includes/footer.php'; ?>

    <!-- Review Modal (Moved for full-screen overlay) -->
    <div id="reviewModal"
        class="fixed inset-0 z-[200] hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4 py-8">
        <div id="reviewModalContent"
            class="bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden scale-95 opacity-0 transition-all duration-300 transform">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <h3 class="text-xl font-bold dark:text-white">Write a Review</h3>
                <button onclick="toggleReviewModal()" class="text-slate-400 hover:text-slate-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="p-8">
                <form id="productReviewForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-slate-500 uppercase tracking-wider">Your
                                Name</label>
                            <input type="text" id="reviewAuthor" required
                                class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all dark:text-white"
                                placeholder="Enter your name">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-semibold mb-2 text-slate-500 uppercase tracking-wider">Rating</label>
                            <div class="flex text-slate-300 gap-1 interactive-rating py-2">
                                <button type="button" data-rating="1"
                                    class="star-btn transition-colors hover:text-yellow-400 group"><svg
                                        class="w-8 h-8 pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg></button>
                                <button type="button" data-rating="2"
                                    class="star-btn transition-colors hover:text-yellow-400 group"><svg
                                        class="w-8 h-8 pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg></button>
                                <button type="button" data-rating="3"
                                    class="star-btn transition-colors hover:text-yellow-400 group"><svg
                                        class="w-8 h-8 pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg></button>
                                <button type="button" data-rating="4"
                                    class="star-btn transition-colors hover:text-yellow-400 group"><svg
                                        class="w-8 h-8 pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg></button>
                                <button type="button" data-rating="5"
                                    class="star-btn transition-colors hover:text-yellow-400 group"><svg
                                        class="w-8 h-8 pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg></button>
                            </div>
                            <input type="hidden" id="reviewRating" value="5">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-slate-500 uppercase tracking-wider">Your
                            Review</label>
                        <textarea id="reviewText" required
                            class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 h-40 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all dark:text-white resize-none"
                            placeholder="Tell us what you think about this product..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-4 px-10 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white shadow-lg">
                        Post Review
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>