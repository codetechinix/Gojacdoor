<?php
$pageTitle = 'Krist - Search Results';
$activePage = 'shop';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans">
    <?php include 'includes/header.php'; ?>
    <div class="container mx-auto px-4 md:px-8 py-10" min-h-screen>
        <div class="mb-8" data-aos="fade-down">
            <h1 class="text-3xl font-bold mb-2">Search Results</h1>
            <p class="text-slate-500">Showing results for "<span id="searchTerm"
                    class="text-primary dark:text-white font-semibold"></span>"</p>
        </div>

        <div class="flex flex-col md:flex-row gap-6 mb-8" data-aos="fade-up">
            <div class="relative flex-1">
                <span
                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input id="searchInput" type="text"
                    class="w-full pl-12 pr-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow"
                    placeholder="Search for products, brands..." />
            </div>
            <button onclick="performSearch()"
                class="px-8 py-3 bg-primary text-white rounded-lg font-semibold hover:bg-slate-800 transition-colors">Search</button>
        </div>

        <div class="flex justify-between items-center mb-6">
            <p class="text-sm text-slate-500"><span id="resultCount">0</span> Products Found</p>
            <select id="sortSelect"
                class="border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2 text-sm bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none"
                onchange="performSearch()">
                <option value="relevance">Sort by: Relevance</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
                <option value="rating">Rating</option>
            </select>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6" id="searchGrid"></div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const q = params.get('q') || 'Shirts';
            document.getElementById('searchInput').value = q;
            document.getElementById('searchTerm').textContent = q;
            performSearch();

            document.getElementById('searchInput').addEventListener('keypress', e => {
                if (e.key === 'Enter') performSearch();
            });
        });

        function performSearch() {
            const q = document.getElementById('searchInput').value.toLowerCase();
            document.getElementById('searchTerm').textContent = q;

            window.history.replaceState({}, '', '?q=' + encodeURIComponent(q));

            const sort = document.getElementById('sortSelect').value;

            let results = PRODUCTS.filter(p =>
                p.name.toLowerCase().includes(q) ||
                p.brand.toLowerCase().includes(q) ||
                p.category.toLowerCase().includes(q)
            );

            if (sort === 'price-asc') results.sort((a, b) => a.price - b.price);
            else if (sort === 'price-desc') results.sort((a, b) => b.price - a.price);
            else if (sort === 'rating') results.sort((a, b) => b.rating - a.rating);

            document.getElementById('resultCount').textContent = results.length;

            const grid = document.getElementById('searchGrid');
            if (results.length > 0) {
                grid.innerHTML = results.map((p, i) => renderProductCard(p, i * 50)).join('');
            } else {
                grid.innerHTML = `
        <div class="col-span-full text-center py-20">
            <span class="material-symbols-outlined text-6xl text-slate-300 block mb-4">search_off</span>
            <h3 class="text-xl font-bold mb-2">No results found</h3>
            <p class="text-slate-500">We couldn't find anything matching "${q}". Try different keywords.</p>
        </div>`;
            }

            if (typeof AOS !== 'undefined') AOS.refresh();
        }
    </script>
</body>

</html>