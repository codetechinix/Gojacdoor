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
    <?php include 'includes/header.php'; ?>

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 md:px-8 py-8" id="productContainer">
        <!-- Breadcrumb will be rendered here via JS -->
        <div id="productBreadcrumb" class="mb-10"></div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            <!-- Image Gallery -->
            <div class="space-y-4">
                <div class="glass bg-white/50 dark:bg-slate-900/50 rounded-2xl overflow-hidden aspect-4/5 flex items-center justify-center p-8 shadow-modern dark:shadow-modern-dark border border-white/40 dark:border-white/10"
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
                        class="text-3xl font-bold bg-linear-to-r from-primary to-primary-light dark:from-white dark:to-slate-300 bg-clip-text text-transparent"></span>
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
                        class="flex-1 bg-linear-to-r from-primary to-primary-light text-white font-bold rounded-md hover:shadow-primary/50 hover:shadow-lg hover:-translate-y-0.5 transition-all h-14 text-lg">
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

        <!-- Tabs -->
        <div class="mb-24" data-aos="fade-up">
            <div id="tabContainer"
                class="flex gap-10 border-b border-slate-200 dark:border-slate-800 mb-8 overflow-x-auto whitespace-nowrap">
                <button onclick="switchTab('tab-descriptions')" data-tab="tab-descriptions"
                    class="tab-btn pb-4 text-sm font-bold text-primary border-b-2 border-primary uppercase tracking-wider transition-colors">Descriptions</button>
                <button onclick="switchTab('tab-additional')" data-tab="tab-additional"
                    class="tab-btn pb-4 text-sm font-bold text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 uppercase tracking-wider transition-colors border-b-2 border-transparent">Additional
                    Information</button>
                <button onclick="switchTab('tab-reviews')" data-tab="tab-reviews"
                    class="tab-btn pb-4 text-sm font-bold text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 uppercase tracking-wider transition-colors border-b-2 border-transparent">Reviews</button>
            </div>
            <div
                class="glass p-8 rounded-xl border border-white/40 dark:border-white/10 shadow-modern dark:shadow-modern-dark bg-white/50 dark:bg-slate-900/50">

                <!-- Descriptions Tab -->
                <div id="tab-descriptions"
                    class="tab-content block space-y-6 text-slate-600 dark:text-slate-400 leading-relaxed">
                    <p>Elevate your everyday wardrobe with this meticulously crafted piece, combining contemporary style
                        with unparalleled comfort. Designed using premium materials, it ensures longevity while
                        maintaining its pristine look wash after wash.</p>
                    <p>Whether you're dressing up for a special occasion or keeping it casual, its versatile design
                        makes it the perfect choice. The attention to detail is evident in every stitch, offering a
                        tailored fit that flatters all body types.</p>
                    <ul class="list-disc pl-5 mt-4 space-y-2">
                        <li>Premium blended fabric for exceptional breathability</li>
                        <li>Wrinkle-resistant finish for easy maintenance</li>
                        <li>Reinforced stitching at stress points for enhanced durability</li>
                        <li>Eco-friendly manufacturing processes</li>
                    </ul>
                </div>

                <!-- Additional Info Tab -->
                <div id="tab-additional" class="tab-content hidden space-y-6">
                    <div
                        class="grid grid-cols-[140px_1fr] text-sm items-center border-b border-slate-100 dark:border-slate-800 pb-4">
                        <span class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">Category</span>
                        <span id="productCategory" class="text-slate-600 dark:text-slate-400 capitalize"></span>
                    </div>
                    <div
                        class="grid grid-cols-[140px_1fr] text-sm items-center border-b border-slate-100 dark:border-slate-800 pb-4">
                        <span class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">SKU</span>
                        <span class="text-slate-600 dark:text-slate-400">KRIST-<span id="productSku"></span></span>
                    </div>
                    <div class="grid grid-cols-[140px_1fr] text-sm items-center">
                        <span class="font-bold text-slate-900 dark:text-white uppercase tracking-wider">Material</span>
                        <span class="text-slate-600 dark:text-slate-400">100% Organic Cotton</span>
                    </div>
                </div>

                <!-- Reviews Tab -->
                <div id="tab-reviews" class="tab-content hidden space-y-8">
                    <div
                        class="flex items-center justify-between mb-8 border-b border-slate-200 dark:border-slate-700 pb-4">
                        <h3 class="text-xl font-bold dark:text-white">Customer Reviews</h3>
                        <button onclick="toggleReviewModal()"
                            class="bg-primary text-white px-5 py-2 rounded-md font-semibold text-sm hover:bg-slate-800 transition-colors">Write
                            a Review</button>
                    </div>
                    <div class="space-y-6">
                        <!-- Review 1 -->
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-slate-200 dark:bg-slate-700 rounded-full flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                                JD</div>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold dark:text-white">John Doe</h4>
                                    <span class="text-xs text-slate-400">2 days ago</span>
                                </div>
                                <div class="flex text-yellow-400 mb-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Absolutely love
                                    the quality. Fits perfectly and looks exactly like the pictures. Shipping was also
                                    incredibly fast.</p>
                            </div>
                        </div>
                    </div>
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
                    class="w-full bg-primary text-white font-bold py-3 text-center rounded-lg hover:bg-slate-800 transition-all">Submit
                    Review</button>
            </form>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script>
        let currentProduct = null;
        let currentQty = 1;

        document.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const id = parseInt(params.get('id')) || 1;
            currentProduct = PRODUCTS.find(p => p.id === id) || PRODUCTS[0];

            // Breadcrumb
            document.getElementById('productBreadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Shop', href: 'shop.php' },
                { label: currentProduct.name, active: true }
            ]);

            // Image
            document.getElementById('mainProductImage').src = currentProduct.image;

            // Text blocks
            document.getElementById('productBrand').textContent = currentProduct.brand;
            document.getElementById('productName').textContent = currentProduct.name;
            document.getElementById('productPrice').textContent = '$' + currentProduct.price.toFixed(2);
            if (currentProduct.oldPrice) {
                document.getElementById('productOldPrice').textContent = '$' + currentProduct.oldPrice.toFixed(2);
            }
            document.getElementById('productCategory').textContent = currentProduct.category;
            document.getElementById('productSku').textContent = currentProduct.id.toString().padStart(6, '0');

            // Ratings
            document.getElementById('productRating').innerHTML = renderStars(currentProduct.rating);
            document.getElementById('productReviewCount').textContent = `${currentProduct.rating} (${currentProduct.reviews} Reviews)`;

            // Sizes
            const sizesHtml = currentProduct.size.map((s, i) => `
        <button class="w-12 h-12 flex items-center justify-center rounded-md text-sm font-bold transition-all ${i === 0 ? 'bg-primary text-white shadow-lg shadow-primary/30' : 'bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:border-primary'}">${s}</button>
    `).join('');
            document.getElementById('productSizes').innerHTML = sizesHtml;

            // Wishlist initial state
            const isWished = wishlist.includes(currentProduct.id);
            const wishIcon = document.querySelector('#wishlistBtn .wish-icon');
            if (wishIcon) {
                wishIcon.innerHTML = isWished ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>' : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>';
                wishIcon.setAttribute('fill', isWished ? 'currentColor' : 'none');
            }

            // In Stock / Out of Stock logic
            if (currentProduct.inStock === false) {
                const tag = document.getElementById('productStockTag');
                if (tag) {
                    tag.textContent = 'Sold Out';
                    tag.className = 'bg-slate-200 dark:bg-slate-700 text-slate-600 dark:text-slate-400 text-xs px-2.5 py-1 rounded-full font-bold uppercase tracking-wider';
                }
                const btn = document.getElementById('addToCartBtn');
                if (btn) {
                    btn.textContent = 'Out of Stock';
                    btn.disabled = true;
                    btn.classList.add('opacity-50', 'cursor-not-allowed');
                    btn.classList.remove('hover:shadow-primary/50', 'hover:-translate-y-0.5');
                }
            }

            // Render Thumbnails
            const galleryHtml = [currentProduct.image, currentProduct.image, currentProduct.image, currentProduct.image].map((img, idx) => `
                <button class="glass bg-white/50 dark:bg-slate-900/50 rounded-xl overflow-hidden aspect-square flex items-center justify-center p-2 shadow-sm border ${idx === 0 ? 'border-primary' : 'border-slate-200 dark:border-slate-700'} hover:border-primary transition-all gallery-thumb">
                    <img src="/${img}" class="max-h-full object-contain mix-blend-multiply dark:mix-blend-normal ${idx === 0 ? 'opacity-100' : 'opacity-70'} hover:opacity-100 transition-opacity" />
                </button>
            `).join('');
            document.getElementById('imageGallery').innerHTML = galleryHtml;

            // Thumbnail Click active state
            document.getElementById('imageGallery').addEventListener('click', (e) => {
                const btn = e.target.closest('button');
                if (!btn) return;

                const mainImg = document.getElementById('mainProductImage');
                const newSrc = btn.querySelector('img').src;

                if (mainImg.src === newSrc) return;

                // Animate out
                mainImg.classList.add('opacity-0', 'scale-95');

                setTimeout(() => {
                    mainImg.src = newSrc;
                    // Animate in
                    mainImg.classList.remove('opacity-0', 'scale-95');
                }, 300);

                document.querySelectorAll('.gallery-thumb').forEach(b => {
                    b.classList.remove('border-primary');
                    b.classList.add('border-slate-200', 'dark:border-slate-700');
                    b.querySelector('img').classList.remove('opacity-100');
                    b.querySelector('img').classList.add('opacity-70');
                });
                btn.classList.add('border-primary');
                btn.classList.remove('border-slate-200', 'dark:border-slate-700');
                btn.querySelector('img').classList.add('opacity-100');
                btn.querySelector('img').classList.remove('opacity-70');
            });

            // Initialize Interactive Stars
            initStars();

            // Actions
            document.getElementById('addToCartBtn').addEventListener('click', (e) => {
                if (currentProduct.inStock === false) return;
                addToCart(currentProduct.id, currentQty);
                toggleMiniCart(); // Open cart automatically
            });

            document.getElementById('wishlistBtn').addEventListener('click', function () {
                toggleWishlist(currentProduct.id);
                const isNowWished = wishlist.includes(currentProduct.id);
                const icon = this.querySelector('.wish-icon');
                if (icon) {
                    icon.innerHTML = isNowWished ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>' : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>';
                    icon.setAttribute('fill', isNowWished ? 'currentColor' : 'none');
                }
            });
        });

        function changeQty(delta) {
            currentQty = Math.max(1, currentQty + delta);
            document.getElementById('productQty').textContent = currentQty;
        }

        function switchTab(tabId) {
            // Hide all tab content
            document.querySelectorAll('.tab-content').forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('block');
            });
            // Show new tab
            const target = document.getElementById(tabId);
            if (target) {
                target.classList.remove('hidden');
                target.classList.add('block');
            }

            // Update buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('text-primary', 'border-primary');
                btn.classList.add('text-slate-400', 'border-transparent');

                if (btn.dataset.tab === tabId) {
                    btn.classList.add('text-primary', 'border-primary');
                    btn.classList.remove('text-slate-400', 'border-transparent');
                }
            });
        }

        // Review Modal Logic
        function toggleReviewModal() {
            const modal = document.getElementById('reviewModal');
            const content = document.getElementById('reviewModalContent');
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => {
                    content.classList.remove('scale-95', 'opacity-0');
                    content.classList.add('scale-100', 'opacity-100');
                }, 10);
            } else {
                content.classList.remove('scale-100', 'opacity-100');
                content.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }, 300);
            }
        }

        function submitReview(e) {
            e.preventDefault();
            toggleReviewModal();
            if (typeof showToast === 'function') showToast('Thank you! Your review has been submitted.', 'success');
        }

        // Interactive Stars
        let selectedRating = 0;
        function initStars() {
            const stars = document.querySelectorAll('.interactive-stars .star');
            if (!stars.length) return;
            stars.forEach((star, index) => {
                star.addEventListener('mouseover', () => highlightStars(index));
                star.addEventListener('mouseout', () => highlightStars(selectedRating - 1));
                star.addEventListener('click', () => { selectedRating = index + 1; highlightStars(index); });
            });
        }
        function highlightStars(index) {
            const stars = document.querySelectorAll('.interactive-stars .star');
            stars.forEach((star, i) => {
                if (i <= index) { star.classList.add('text-yellow-400'); star.classList.remove('text-slate-300'); }
                else { star.classList.add('text-slate-300'); star.classList.remove('text-yellow-400'); }
            });
        }
    </script>
</body>

</html>