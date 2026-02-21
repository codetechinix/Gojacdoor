<?php
$pageTitle = 'Krist - Shop';
$activePage = 'shop';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans">
    <?php include 'includes/header.php'; ?>
    <div class="container mx-auto px-4 md:px-8 py-8">
        <div id="breadcrumb"></div>
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <aside class="w-full lg:w-72 shrink-0" data-aos="fade-right">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-100 dark:border-slate-800 p-6 space-y-6 sticky top-28">
                    <h3 class="font-bold text-lg">Filters</h3>
                    <!-- Category Filter -->
                    <div><button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2"><span>Category</span><span
                                class="material-symbols-outlined text-lg filter-icon">expand_less</span></button>
                        <div class="filter-content open space-y-2 mt-2">
                            <label class="flex items-center text-sm"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-2"
                                    data-filter="cat" value="men" /> Men</label>
                            <label class="flex items-center text-sm"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-2"
                                    data-filter="cat" value="women" /> Women</label>
                            <label class="flex items-center text-sm"><input type="checkbox"
                                    class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-2"
                                    data-filter="cat" value="kids" /> Kids</label>
                        </div>
                    </div>
                    <!-- Price Filter -->
                    <div><button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2"><span>Price
                                Range</span><span
                                class="material-symbols-outlined text-lg filter-icon">expand_less</span></button>
                        <div class="filter-content open space-y-3 mt-2">
                            <input type="range" id="priceRange" min="0" max="200" value="200"
                                class="w-full accent-primary" />
                            <div class="flex justify-between text-xs text-slate-500"><span>$0</span><span
                                    id="priceLabel">$200</span></div>
                        </div>
                    </div>
                    <!-- Size Filter -->
                    <div><button onclick="toggleFilter(this)"
                            class="w-full flex justify-between items-center font-semibold text-sm py-2"><span>Size</span><span
                                class="material-symbols-outlined text-lg filter-icon">expand_less</span></button>
                        <div class="filter-content open flex flex-wrap gap-2 mt-2">
                            <button
                                class="size-btn px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-md text-xs hover:bg-primary hover:text-white hover:border-primary transition-colors"
                                data-size="S">S</button>
                            <button
                                class="size-btn px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-md text-xs hover:bg-primary hover:text-white hover:border-primary transition-colors"
                                data-size="M">M</button>
                            <button
                                class="size-btn px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-md text-xs hover:bg-primary hover:text-white hover:border-primary transition-colors"
                                data-size="L">L</button>
                            <button
                                class="size-btn px-3 py-1.5 border border-slate-200 dark:border-slate-700 rounded-md text-xs hover:bg-primary hover:text-white hover:border-primary transition-colors"
                                data-size="XL">XL</button>
                        </div>
                    </div>
                    <button onclick="applyFilters()"
                        class="w-full py-2.5 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-slate-800 transition-colors">Apply
                        Filters</button>
                </div>
            </aside>
            <!-- Product Grid -->
            <main class="flex-1">
                <div class="flex justify-between items-center mb-6" data-aos="fade-up">
                    <p class="text-sm text-slate-500"><span id="productCount">0</span> Products Found</p>
                    <select id="sortSelect"
                        class="border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2 text-sm bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none"
                        onchange="applyFilters()">
                        <option value="default">Sort by: Default</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6" id="productGrid"></div>
            </main>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([{ label: 'Shop', active: true }]);
            const priceRange = document.getElementById('priceRange');
            priceRange.addEventListener('input', () => document.getElementById('priceLabel').textContent = '$' + priceRange.value);

            // Check URL params for category
            const params = new URLSearchParams(window.location.search);
            const cat = params.get('cat');
            if (cat) document.querySelectorAll(`[data-filter="cat"][value="${cat}"]`).forEach(c => c.checked = true);

            applyFilters();
        });

        function applyFilters() {
            const cats = [...document.querySelectorAll('[data-filter="cat"]:checked')].map(c => c.value);
            const maxPrice = parseInt(document.getElementById('priceRange').value);
            const sort = document.getElementById('sortSelect').value;

            let filtered = PRODUCTS.filter(p => {
                if (cats.length && !cats.includes(p.category)) return false;
                if (p.price > maxPrice) return false;
                return true;
            });

            if (sort === 'price-asc') filtered.sort((a, b) => a.price - b.price);
            else if (sort === 'price-desc') filtered.sort((a, b) => b.price - a.price);
            else if (sort === 'rating') filtered.sort((a, b) => b.rating - a.rating);

            document.getElementById('productCount').textContent = filtered.length;
            document.getElementById('productGrid').innerHTML = filtered.length ? filtered.map((p, i) => renderProductCard(p, i * 50)).join('') : '<div class="col-span-full text-center py-20"><span class="material-symbols-outlined text-6xl text-slate-300 block mb-4">inventory_2</span><p class="text-slate-500">No products found</p></div>';

            if (typeof AOS !== 'undefined') AOS.refresh();
        }
    </script>
</body>

</html>