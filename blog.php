<?php
$pageTitle = 'Gojacdoors - Blog';
$activePage = 'blog';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>

</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="text-center mb-16 relative" data-aos="fade-up">
            <div
                class="absolute inset-0 -top-24 -z-10 bg-[radial-gradient(ellipse_at_top,var(--tw-gradient-stops))] from-slate-100 dark:from-slate-800/50 via-transparent to-transparent opacity-70 border-b border-transparent">
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-display">Our Blog</h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">Latest news, fashion trends, styling
                tips, and updates
                from the Gojacdoors team.</p>
        </div>

        <!-- Filter Categories -->
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
            <button data-filter="all"
                class="filter-btn active px-6 py-2 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-medium transition-colors">All</button>
            <button data-filter="fashion"
                class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Fashion</button>
            <button data-filter="lifestyle"
                class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Lifestyle</button>
            <button data-filter="trends"
                class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Trends</button>
            <button data-filter="diy"
                class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">D.I.Y.</button>
        </div>

        <!-- CSS Grid Layout -->
        <div id="blogGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up"
            data-aos-delay="200">
            <!-- Dynamic Blog Content Loaded Here -->
        </div>

        <!-- Pagination -->
        <div id="blogPaginationContainer" class="flex justify-center mt-12" data-aos="fade-up">
            <!-- Dynamic Pagination Loaded Here -->
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                if (typeof initBlogPage === 'function') {
                    initBlogPage();
                }
            });
        </script>

    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>