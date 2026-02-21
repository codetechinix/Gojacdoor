<?php
$pageTitle = 'Krist - Blog';
$activePage = 'blog';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <style>
        .masonry-grid {
            column-count: 1;
            column-gap: 2rem;
        }

        @media (min-width: 768px) {
            .masonry-grid {
                column-count: 2;
            }
        }

        @media (min-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-display">Our Blog</h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">Latest news, fashion trends, styling tips, and updates
                from the Krist team.</p>
        </div>

        <!-- Filter Categories (Static for demo) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
            <button
                class="px-6 py-2 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-medium">All</button>
            <button
                class="px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Fashion</button>
            <button
                class="px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Lifestyle</button>
            <button
                class="px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">Trends</button>
            <button
                class="px-6 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">D.I.Y.</button>
        </div>

        <!-- Masonry Grid -->
        <div class="masonry-grid" data-aos="fade-up" data-aos-delay="200">
            <!-- Post 1 -->
            <article
                class="masonry-item bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-modern dark:shadow-modern-dark group border border-slate-100 dark:border-slate-800">
                <a href="blog-detail.php" class="block overflow-hidden relative aspect-4/3">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC6gS7i2l8oV17Q9T813xYZc1Yv0-p9C9lQ5hI7V1bO7OaCg5eU12QyqR0-I7x-W52HnC0qT4_rM9_t8W7D8_QY_B2aA_rN-J9x7iA12V2O4aX9dJdZ6x2QzLqA9T6eY-wE6m1Lw4Z2t_9F9IqQQkKq5VwWp6wH6C-I-L-9U1C9KqZ4K"
                        alt="Blog Image"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div
                        class="absolute top-4 left-4 bg-white dark:bg-slate-900 text-slate-900 dark:text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md shadow-sm">
                        Fashion</div>
                </a>
                <div class="p-6">
                    <div class="flex items-center text-sm text-slate-500 mb-3 space-x-4">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg> Oct 24, 2023</span>
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg> By Admin</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors line-clamp-2"><a
                            href="blog-detail.php">10 Essential Wardrobe Staples Every Woman Needs</a></h3>
                    <p class="text-slate-600 dark:text-slate-400 line-clamp-3 mb-4">Building a versatile wardrobe
                        doesn't require a closet full of clothes. Start with these ten timeless essentials that can be
                        mixed and matched for any occasion.</p>
                    <a href="blog-detail.php"
                        class="inline-flex items-center text-primary font-bold hover:text-primary-dark transition-colors">Read
                        More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a>
                </div>
            </article>

            <!-- Post 2 -->
            <article
                class="masonry-item bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-modern dark:shadow-modern-dark group border border-slate-100 dark:border-slate-800">
                <a href="blog-detail.php" class="block overflow-hidden relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1434389678278-be4d41a6b8e6?q=80&w=2670&auto=format&fit=crop"
                        alt="Blog Image"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div
                        class="absolute top-4 left-4 bg-white dark:bg-slate-900 text-slate-900 dark:text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md shadow-sm">
                        Lifestyle</div>
                </a>
                <div class="p-6">
                    <div class="flex items-center text-sm text-slate-500 mb-3 space-x-4">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg> Oct 18, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors line-clamp-2"><a
                            href="blog-detail.php">The Rise of Sustainable Fashion</a></h3>
                    <p class="text-slate-600 dark:text-slate-400 line-clamp-3 mb-4">Discover how eco-friendly materials
                        and ethical manufacturing processes are reshaping the industry.</p>
                    <a href="blog-detail.php"
                        class="inline-flex items-center text-primary font-bold hover:text-primary-dark transition-colors">Read
                        More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a>
                </div>
            </article>

            <!-- Post 3 -->
            <article
                class="masonry-item bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-modern dark:shadow-modern-dark group border border-slate-100 dark:border-slate-800">
                <a href="blog-detail.php" class="block overflow-hidden relative aspect-video">
                    <img src="https://images.unsplash.com/photo-1550614000-4b95d4662247?q=80&w=2670&auto=format&fit=crop"
                        alt="Blog Image"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div
                        class="absolute top-4 left-4 bg-white dark:bg-slate-900 text-slate-900 dark:text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md shadow-sm">
                        Trends</div>
                </a>
                <div class="p-6">
                    <div class="flex items-center text-sm text-slate-500 mb-3 space-x-4">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg> Oct 12, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors line-clamp-2"><a
                            href="blog-detail.php">Color Trends for the Upcoming Season</a></h3>
                    <p class="text-slate-600 dark:text-slate-400 line-clamp-3 mb-4">From earthy tones to vibrant neon
                        accents, explore the color palettes that will dominate upcoming collections.</p>
                    <a href="blog-detail.php"
                        class="inline-flex items-center text-primary font-bold hover:text-primary-dark transition-colors">Read
                        More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a>
                </div>
            </article>

            <!-- Post 4 -->
            <article
                class="masonry-item bg-primary text-white rounded-2xl p-8 shadow-modern dark:shadow-modern-dark group border border-primary-light">
                <div class="flex items-center text-sm text-white/80 mb-4 space-x-4">
                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg> Oct 05, 2023</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 font-display"><a href="blog-detail.php"
                        class="hover:underline">"Style is a way to say who you are without having to speak."</a></h3>
                <p class="text-white/80 italic mb-6">- Rachel Zoe</p>
                <a href="blog-detail.php"
                    class="inline-flex items-center text-white font-bold hover:text-slate-200 transition-colors">Read
                    Discussion <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a>
            </article>

            <!-- Post 5 -->
            <article
                class="masonry-item bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-modern dark:shadow-modern-dark group border border-slate-100 dark:border-slate-800">
                <a href="blog-detail.php" class="block overflow-hidden relative aspect-4/5">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2670&auto=format&fit=crop"
                        alt="Blog Image"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 hover:opacity-90">
                </a>
            </article>

            <!-- Post 6 -->
            <article
                class="masonry-item bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-modern dark:shadow-modern-dark group border border-slate-100 dark:border-slate-800 p-6 object-cover bg-center"
                style="background-image: linear-gradient(rgba(15,23,42,0.7), rgba(15,23,42,0.9)), url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=2520&auto=format&fit=crop');">
                <div class="relative z-10 text-white">
                    <div
                        class="absolute top-0 right-0 bg-primary text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md shadow-sm">
                        D.I.Y.</div>
                    <div class="flex items-center text-sm text-slate-300 mb-3 space-x-4 mt-8">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg> Sep 28, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors line-clamp-2"><a
                            href="blog-detail.php">How to Upcycle Your Old Jeans</a></h3>
                    <p class="text-slate-300 line-clamp-3 mb-4">Don't throw away those old jeans just yet! Here are 5
                        creative ways to turn them into something brand new.</p>
                    <a href="blog-detail.php"
                        class="inline-flex items-center text-primary font-bold hover:text-white transition-colors">Read
                        More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></a>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12" data-aos="fade-up">
            <nav class="flex items-center gap-2">
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-medium shadow-md">1</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors font-medium">2</a>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors font-medium">3</a>
                <span class="px-2 text-slate-500">...</span>
                <a href="#"
                    class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </nav>
        </div>

    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Blog', active: true }
            ]);
        });
    </script>
</body>

</html>