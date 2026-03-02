<?php
$pageTitle = 'Gojacdoors - Search Results';
$activePage = 'shop';

$searchQuery = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main id="searchMain" data-query="<?= $searchQuery ?>" class="grow container mx-auto px-4 md:px-8 py-8">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="mb-10" data-aos="fade-up">
            <h1 class="text-3xl font-bold mb-2 font-display">Search Results for: <span class="text-primary">"
                    <?= $searchQuery ?>"
                </span></h1>
            <p class="text-slate-500">Showing <span id="productCount">0</span> results found</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <aside class="w-full lg:w-72 shrink-0" data-aos="fade-right">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-100 dark:border-slate-800 p-6 space-y-6 sticky top-28 shadow-sm">
                    <h3 class="font-bold text-lg">Filters</h3>
                    <!-- Category Filter -->
                    <div>
                        <button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2 group">
                            <span>Category</span>
                            <svg class="w-5 h-5 filter-icon text-slate-400 group-hover:text-primary transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="filter-content open space-y-2 mt-2">
                            <label class="flex items-center text-sm cursor-pointer group"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-3"
                                    data-filter="cat" value="men" /> <span
                                    class="group-hover:text-primary transition-colors">Men</span></label>
                            <label class="flex items-center text-sm cursor-pointer group"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-3"
                                    data-filter="cat" value="women" /> <span
                                    class="group-hover:text-primary transition-colors">Women</span></label>
                            <label class="flex items-center text-sm cursor-pointer group"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-3"
                                    data-filter="cat" value="kids" /> <span
                                    class="group-hover:text-primary transition-colors">Kids</span></label>
                        </div>
                    </div>
                    <!-- Price Filter -->
                    <div class="border-t border-slate-100 dark:border-slate-800 pt-4">
                        <button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2 group">
                            <span>Price Range</span>
                            <svg class="w-5 h-5 filter-icon text-slate-400 group-hover:text-primary transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="filter-content open space-y-4 mt-4">
                            <input type="range" id="priceRange" min="0" max="200" value="200"
                                class="w-full accent-primary" />
                            <div
                                class="flex justify-between items-center text-sm font-medium text-slate-600 dark:text-slate-400">
                                <span>$0</span>
                                <span id="priceLabel"
                                    class="bg-primary/10 text-primary px-3 py-1 rounded-full">$200</span>
                            </div>
                        </div>
                    </div>
                    <!-- Size Filter -->
                    <div class="border-t border-slate-100 dark:border-slate-800 pt-4">
                        <button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2 group">
                            <span>Size</span>
                            <svg class="w-5 h-5 filter-icon text-slate-400 group-hover:text-primary transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="filter-content open flex flex-wrap gap-2 mt-3">
                            <button
                                class="size-btn px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-md text-sm font-medium hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"
                                data-size="S">S</button>
                            <button
                                class="size-btn px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-md text-sm font-medium hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"
                                data-size="M">M</button>
                            <button
                                class="size-btn px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-md text-sm font-medium hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"
                                data-size="L">L</button>
                            <button
                                class="size-btn px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-md text-sm font-medium hover:bg-primary hover:text-white hover:border-primary transition-all duration-300"
                                data-size="XL">XL</button>
                        </div>
                    </div>
                    <button onclick="applySearchFilters()"
                        class="w-full py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white mt-4 shadow-sm hover:shadow-md hover:-translate-y-0.5">Apply
                        Filters</button>
                </div>
            </aside>

            <!-- Product Grid -->
            <div class="flex-1">
                <div class="flex justify-end items-center mb-6" data-aos="fade-up">
                    <select id="sortSelect"
                        class="border border-slate-200 dark:border-slate-700 rounded-md px-4 py-2 text-sm bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none text-slate-700 dark:text-slate-300 shadow-sm transition-shadow"
                        onchange="applySearchFilters()">
                        <option value="default">Sort by: Default</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-6" id="productGrid">
                    <!-- Products rendered via JS -->
                </div>
                <!-- Pagination Container -->
                <div id="paginationContainer" class="flex justify-center mt-12 mb-12" data-aos="fade-up"></div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>


</body>

</html>