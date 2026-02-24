<?php
$pageTitle = 'Krist - Blog Post';
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

    <main class="grow py-12">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Left Column: Main Content & Comments -->
            <div class="lg:col-span-2">
                <!-- Hero Section -->
                <div class="mb-12">
                    <div id="breadcrumb" class="mb-8"></div>

                    <div class="mb-8" data-aos="fade-up">
                        <div class="flex items-center gap-3 mb-6">
                            <span
                                class="bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md">Fashion</span>
                            <span class="text-slate-500 text-sm flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg> Oct 24, 2023</span>
                        </div>

                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-display leading-tight">10
                            Essential
                            Wardrobe Staples Every Woman Needs</h1>

                        <div class="flex items-center mt-8">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=0D8ABC&color=fff"
                                alt="Author" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">By Admin User</p>
                                <p class="text-xs text-slate-500">Managing Editor</p>
                            </div>
                        </div>
                    </div>

                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC6gS7i2l8oV17Q9T813xYZc1Yv0-p9C9lQ5hI7V1bO7OaCg5eU12QyqR0-I7x-W52HnC0qT4_rM9_t8W7D8_QY_B2aA_rN-J9x7iA12V2O4aX9dJdZ6x2QzLqA9T6eY-wE6m1Lw4Z2t_9F9IqQQkKq5VwWp6wH6C-I-L-9U1C9KqZ4K"
                        alt="Hero Image" class="w-full aspect-video object-cover rounded-2xl shadow-xl"
                        data-aos="fade-up" data-aos-delay="100">
                </div>

                <!-- Content -->
                <article
                    class="prose prose-lg dark:prose-invert prose-headings:font-display prose-a:text-primary hover:prose-a:text-primary-dark max-w-none mb-12"
                    data-aos="fade-up" data-aos-delay="200">
                    <p class="lead text-xl text-slate-500 dark:text-slate-400 mb-8 italic">
                        Building a versatile wardrobe doesn't require a closet full of clothes. It requires the right
                        pieces.
                        Start with these ten timeless essentials that can be mixed and matched for literally any
                        occasion.
                    </p>

                    <p>We've all been there: staring at a closet bursting with clothes, yet feeling like there is
                        absolutely
                        nothing to wear. The solution isn't necessarily buying more clothes, but rather buying the
                        <em>right</em> clothes. A capsule wardrobe built on solid foundations makes getting dressed
                        easier and
                        more enjoyable.
                    </p>

                    <h3>1. The Classic White Tee</h3>
                    <p>Do not underestimate the power of a perfectly fitted white t-shirt. Whether layered under a
                        blazer for
                        the office or paired with vintage denim for a weekend brunch, it is the ultimate blank canvas.
                        Look for
                        a cotton-modal blend for softness and durability.</p>

                    <h3>2. Perfect Fitting Jeans</h3>
                    <p>Finding the perfect pair of jeans is a journey, but once you find them, never let them go.
                        Currently,
                        straight-leg or vintage-wash relaxed fits are reigning supreme, offering both comfort and style.
                        They
                        easily transition from day to night depending on your footwear.</p>

                    <blockquote>
                        "Fashion fades, style is eternal." - Yves Saint Laurent
                    </blockquote>

                    <h3>3. The Tailored Blazer</h3>
                    <p>A structured blazer instantly elevates any outfit. Throw it over a slip dress, a t-shirt and
                        jeans, or
                        tailored trousers. Black, navy, or a subtle plaid are safe bets that will never go out of style.
                    </p>

                    <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=2600&auto=format&fit=crop"
                        alt="Tailored Blazer" class="rounded-xl my-8 shadow-md">

                    <h3>4. The Little Black Dress (LBD)</h3>
                    <p>The LBD is legendary for a reason. It's the ultimate fallback for cocktail parties, dinner dates,
                        or
                        formal events. The key is finding a silhouette that flatters your body type—whether it's a slip
                        dress,
                        wrap dress, or a structured sheath.</p>

                    <h3>Conclusion</h3>
                    <p>Investing in these staples ensures you always have a foundation to build upon. Remember, trends
                        come and
                        go, but classic pieces are the building blocks of an elegant, enduring personal style.</p>
                </article>

                <!-- Tags and Share -->
                <div class="pt-8 mb-16 border-t border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6"
                    data-aos="fade-up">
                    <div class="flex items-center gap-2">
                        <span class="font-bold text-slate-900 dark:text-white mr-2">Tags:</span>
                        <a href="#"
                            class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-full text-sm hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">Fashion</a>
                        <a href="#"
                            class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-full text-sm hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">Style</a>
                        <a href="#"
                            class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-full text-sm hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">Essentials</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="font-bold text-slate-900 dark:text-white">Share:</span>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-primary hover:text-white transition-colors"
                            aria-label="Share on Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-primary hover:text-white transition-colors"
                            aria-label="Share on Twitter">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Comments Section -->
                <section class="border-t border-slate-200 dark:border-slate-800 pt-12" data-aos="fade-up">
                    <h3 class="text-2xl font-bold mb-8 font-display">3 Comments</h3>

                    <!-- Existing Comments -->
                    <div class="space-y-8 mb-12">
                        <!-- Comment 1 -->
                        <div class="flex gap-4">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=random" alt="Sarah"
                                class="w-12 h-12 rounded-full shrink-0">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h4 class="font-bold text-slate-900 dark:text-white">Sarah Jenkins</h4>
                                    <span class="text-sm text-slate-500">Oct 25, 2023</span>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 mb-2">This is exactly what I needed! I've
                                    been trying to build a capsule wardrobe and the blazer tip is spot on. Do you have
                                    any recommendations for sustainable brands?</p>
                                <button
                                    class="text-sm font-medium text-primary hover:text-primary-dark transition-colors">Reply</button>
                            </div>
                        </div>

                        <!-- Comment 2 (Reply) -->
                        <div class="flex gap-4 ml-8 md:ml-16">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=0D8ABC&color=fff"
                                alt="Admin" class="w-12 h-12 rounded-full shrink-0">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h4 class="font-bold text-slate-900 dark:text-white">Admin User <span
                                            class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full ml-2 align-middle">Author</span>
                                    </h4>
                                    <span class="text-sm text-slate-500">Oct 25, 2023</span>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 mb-2">Hi Sarah! We actually have a whole
                                    post coming up dedicated to our favorite sustainable brands. Stay tuned!</p>
                                <button
                                    class="text-sm font-medium text-primary hover:text-primary-dark transition-colors">Reply</button>
                            </div>
                        </div>

                        <!-- Comment 3 -->
                        <div class="flex gap-4">
                            <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=random" alt="Michael"
                                class="w-12 h-12 rounded-full shrink-0">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h4 class="font-bold text-slate-900 dark:text-white">Michael Chen</h4>
                                    <span class="text-sm text-slate-500">Oct 26, 2023</span>
                                </div>
                                <p class="text-slate-600 dark:text-slate-400 mb-2">Great read. I think a good pair of
                                    leather boots should definitely be on this list as well!</p>
                                <button
                                    class="text-sm font-medium text-primary hover:text-primary-dark transition-colors">Reply</button>
                            </div>
                        </div>
                    </div>

                    <!-- Leave a Comment Form -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 md:p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-2xl font-bold mb-6 font-display">Leave a Reply</h3>
                        <p class="text-slate-500 mb-6 text-sm">Your email address will not be published. Required fields
                            are marked *</p>

                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                        for="name">Name *</label>
                                    <input type="text" id="name" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                        for="email">Email *</label>
                                    <input type="email" id="email" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                    for="comment">Comment *</label>
                                <textarea id="comment" rows="6" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none resize-y"></textarea>
                            </div>

                            <div class="flex items-center">
                                <input id="save-info" type="checkbox"
                                    class="w-4 h-4 text-primary bg-slate-50 border-slate-300 rounded focus:ring-primary dark:focus:ring-primary dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                                <label for="save-info"
                                    class="ml-2 text-sm font-medium text-slate-600 dark:text-slate-400">Save my name and
                                    email in this browser for the next time I comment.</label>
                            </div>

                            <button type="submit"
                                class="inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-primary rounded-xl hover:bg-primary-dark hover:shadow-lg hover:-translate-y-1">
                                Post Comment
                            </button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-1 space-y-10">

                <!-- Search Widget -->
                <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4 font-display">Search</h3>
                    <div class="relative">
                        <input type="text" placeholder="Search articles..."
                            class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none">
                        <button
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4 font-display">Categories</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#"
                                class="flex justify-between items-center group text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                <span class="group-hover:translate-x-1 transition-transform">Fashion</span>
                                <span class="bg-slate-100 dark:bg-slate-800 text-xs py-1 px-2 rounded-md">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex justify-between items-center group text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                <span class="group-hover:translate-x-1 transition-transform">Style Guides</span>
                                <span class="bg-slate-100 dark:bg-slate-800 text-xs py-1 px-2 rounded-md">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex justify-between items-center group text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                <span class="group-hover:translate-x-1 transition-transform">Trends</span>
                                <span class="bg-slate-100 dark:bg-slate-800 text-xs py-1 px-2 rounded-md">15</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex justify-between items-center group text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                <span class="group-hover:translate-x-1 transition-transform">Editorials</span>
                                <span class="bg-slate-100 dark:bg-slate-800 text-xs py-1 px-2 rounded-md">5</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-6 font-display">Recent Posts</h3>
                    <div class="space-y-6">
                        <a href="#" class="flex items-center gap-4 group">
                            <img src="https://images.unsplash.com/photo-1434389678278-be4d41a6b8e6?w=200&q=80"
                                alt="Recent"
                                class="w-20 h-20 rounded-lg object-cover group-hover:opacity-80 transition-opacity">
                            <div>
                                <h4
                                    class="font-bold text-slate-900 dark:text-white line-clamp-2 group-hover:text-primary transition-colors mb-1">
                                    The Rise of Sustainable Fashion</h4>
                                <span class="text-xs text-slate-500">Oct 20, 2023</span>
                            </div>
                        </a>
                        <a href="#" class="flex items-center gap-4 group">
                            <img src="https://images.unsplash.com/photo-1528698827591-e19bdd7bc73d?w=200&q=80"
                                alt="Recent"
                                class="w-20 h-20 rounded-lg object-cover group-hover:opacity-80 transition-opacity">
                            <div>
                                <h4
                                    class="font-bold text-slate-900 dark:text-white line-clamp-2 group-hover:text-primary transition-colors mb-1">
                                    Color Trends for the Upcoming Season</h4>
                                <span class="text-xs text-slate-500">Oct 15, 2023</span>
                            </div>
                        </a>
                        <a href="#" class="flex items-center gap-4 group">
                            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=200&q=80"
                                alt="Recent"
                                class="w-20 h-20 rounded-lg object-cover group-hover:opacity-80 transition-opacity">
                            <div>
                                <h4
                                    class="font-bold text-slate-900 dark:text-white line-clamp-2 group-hover:text-primary transition-colors mb-1">
                                    Winter Lookbook: Layering Basics</h4>
                                <span class="text-xs text-slate-500">Oct 10, 2023</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Popular Tags Widget -->
                <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4 font-display">Popular Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-1.5 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg text-sm border border-slate-200 dark:border-slate-700 hover:border-primary hover:text-primary transition-colors">Denim</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg text-sm border border-slate-200 dark:border-slate-700 hover:border-primary hover:text-primary transition-colors">Bags</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg text-sm border border-slate-200 dark:border-slate-700 hover:border-primary hover:text-primary transition-colors">Shoes</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg text-sm border border-slate-200 dark:border-slate-700 hover:border-primary hover:text-primary transition-colors">Summer</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg text-sm border border-slate-200 dark:border-slate-700 hover:border-primary hover:text-primary transition-colors">Lookbook</a>
                    </div>
                </div>

            </aside>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Blog', url: 'blog.php' },
                { label: '10 Essential Wardrobe Staples', active: true }
            ]);
        });
    </script>
</body>

</html>