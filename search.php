<?php
$pageTitle = 'Krist - Search Results';
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

    <main class="grow container mx-auto px-4 md:px-8 py-8">
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
                    <button onclick="applyFilters()"
                        class="w-full py-3 bg-primary text-white rounded-md text-sm font-semibold hover:bg-slate-800 transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 mt-4">Apply
                        Filters</button>
                </div>
            </aside>

            <!-- Product Grid -->
            <div class="flex-1">
                <div class="flex justify-end items-center mb-6" data-aos="fade-up">
                    <select id="sortSelect"
                        class="border border-slate-200 dark:border-slate-700 rounded-md px-4 py-2 text-sm bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none text-slate-700 dark:text-slate-300 shadow-sm transition-shadow"
                        onchange="applyFilters()">
                        <option value="default">Sort by: Default</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6" id="productGrid">
                    <!-- Products rendered via JS -->
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        const searchQuery = "<?= $searchQuery ?>".toLowerCase();

        document.addEventListener('DOMContentLoaded', () => {
            // Breadcrumb
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Search Results', active: true }
            ]);

            const priceRange = document.getElementById('priceRange');
            priceRange.addEventListener('input', () => document.getElementById('priceLabel').textContent = '$' + priceRange.value);

            // Size button selection
            document.querySelectorAll('.size-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    this.classList.toggle('bg-primary');
                    this.classList.toggle('text-white');
                    this.classList.toggle('border-primary');
                });
            });

            applyFilters();
        });

        function toggleFilter(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('.filter-icon');
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        function applyFilters() {
            const cats = [...document.querySelectorAll('[data-filter="cat"]:checked')].map(c => c.value);
            const maxPrice = parseInt(document.getElementById('priceRange').value);
            const sort = document.getElementById('sortSelect').value;

            const selectedSizes = [...document.querySelectorAll('.size-btn.bg-primary')].map(b => b.dataset.size);

            let filtered = PRODUCTS.filter(p => {
                // Must match search query
                if (searchQuery && !p.name.toLowerCase().includes(searchQuery)) return false;
                // Match categories
                if (cats.length && !cats.includes(p.category)) return false;
                // Match price
                if (p.price > maxPrice) return false;
                // Match sizes if any selected
                if (selectedSizes.length > 0 && !p.size.some(s => selectedSizes.includes(s))) return false;

                return true;
            });

            // Sorting
            if (sort === 'price-asc') filtered.sort((a, b) => a.price - b.price);
            else if (sort === 'price-desc') filtered.sort((a, b) => b.price - a.price);
            else if (sort === 'rating') filtered.sort((a, b) => b.rating - a.rating);

            document.getElementById('productCount').textContent = filtered.length;

            const grid = document.getElementById('productGrid');
            if (filtered.length > 0) {
                grid.innerHTML = filtered.map((p, i) => renderProductCard(p, i * 50)).join('');
            } else {
                grid.innerHTML = `
                    <div class="col-span-full text-center py-20 bg-white dark:bg-slate-900 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm" data-aos="fade-up">
                        <svg class="w-16 h-16 mx-auto text-slate-300 dark:text-slate-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <h3 class="text-xl font-bold dark:text-white mb-2">No Results Found</h3>
                        <p class="text-slate-500 mb-6 max-w-md mx-auto">We couldn't find any products matching your search criteria. Try adjusting your filters or search terms.</p>
                        <button onclick="document.querySelectorAll('input[type=checkbox]').forEach(c=>c.checked=false); document.getElementById('priceRange').value=200; document.getElementById('priceLabel').textContent='$200'; document.querySelectorAll('.size-btn').forEach(b=>{b.classList.remove('bg-primary','text-white','border-primary')}); applyFilters();" class="bg-primary text-white px-6 py-2.5 rounded-md font-semibold hover:bg-slate-800 transition-colors">Clear Filters</button>
                    </div>
                `;
            }

            if (typeof AOS !== 'undefined') AOS.refresh();
        }
    </script>
</body>

</html>