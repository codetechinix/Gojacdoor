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
                class="px-8 py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white">Search</button>
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
</body>

</html>