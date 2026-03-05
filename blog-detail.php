<?php
$pageTitle = 'Gojacdoors - Blog Post';
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
        <div class="container mx-auto px-4 md:px-8 max-w-7xl grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
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
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="font-bold text-slate-900 dark:text-white mr-2">Share:</span>

                        <!-- WhatsApp -->
                        <a href="#" data-share="whatsapp"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-[#25D366] hover:text-white transition-all duration-300"
                            aria-label="Share on WhatsApp">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.4-8.6-44.6-27.5-16.5-14.7-27.6-32.8-30.8-38.4-3.2-5.6-.3-8.6 2.5-11.4 2.5-2.5 5.5-6.5 8.3-9.7 2.8-3.2 3.7-5.5 5.6-9.2 1.9-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.1 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>

                        <!-- X (Twitter) -->
                        <a href="#" data-share="x"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on X">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a href="#" data-share="facebook"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-[#1877F2] hover:text-white transition-all duration-300"
                            aria-label="Share on Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="#" data-share="instagram"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-linear-to-tr hover:from-[#f9ce34] hover:via-[#ee2a7b] hover:to-[#6228d7] hover:text-white transition-all duration-300"
                            aria-label="Share on Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.8 9.9 67.6 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="#" data-share="tiktok"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.32c7.87 33.32 31.05 60.36 63.82 72.73a118 118 0 0 0 57.09 14.16z" />
                            </svg>
                        </a>

                        <!-- Copy Link -->
                        <a href="#" data-share="copy"
                            class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-primary hover:text-white transition-all duration-300"
                            aria-label="Copy Link">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Comments Section -->
                <section class="border-t border-slate-200 dark:border-slate-800 pt-16" data-aos="fade-up">
                    <h3 class="text-3xl font-bold mb-10 font-display"><span id="commentCount">0</span> Comments</h3>

                    <!-- Dynamic Comments Container -->
                    <div id="commentList" class="space-y-12 mb-16">
                        <!-- Comments will be injected here by JS -->
                    </div>

                    <!-- Leave a Comment Form -->
                    <div id="commentFormContainer"
                        class="bg-white dark:bg-slate-900 p-8 md:p-10 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm mt-12 transition-all duration-300">
                        <div id="replyToIndicator"
                            class="hidden mb-6 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700 items-center justify-between">
                            <p class="text-sm text-slate-600 dark:text-slate-300 font-medium italic">Replying to <span
                                    id="replyToName" class="font-bold text-primary"></span></p>
                            <button type="button" onclick="cancelReply()"
                                class="text-xs font-bold text-red-500 uppercase tracking-wider hover:text-red-700 transition-colors">Cancel
                                Reply</button>
                        </div>

                        <h3 id="formTitle" class="text-2xl font-bold mb-4 font-display">Leave a Reply</h3>
                        <p class="text-slate-500 mb-6 text-sm">Your email address will not be published. Required fields
                            are marked *</p>

                        <form id="commentForm" class="space-y-6">
                            <input type="hidden" id="replyToId" value="">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                        for="commentName">Name *</label>
                                    <input type="text" id="commentName" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                        for="commentEmail">Email *</label>
                                    <input type="email" id="commentEmail" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2"
                                    for="commentText">Comment *</label>
                                <textarea id="commentText" rows="6" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none resize-y"></textarea>
                            </div>

                            <div class="flex items-center">
                                <input id="commentSaveInfo" type="checkbox"
                                    class="w-4 h-4 text-primary bg-slate-50 border-slate-300 rounded focus:ring-primary dark:focus:ring-primary dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                                <label for="commentSaveInfo"
                                    class="ml-2 text-sm font-medium text-slate-600 dark:text-slate-400">Save my name and
                                    email in this browser for the next time I comment.</label>
                            </div>

                            <button type="submit"
                                class="inline-flex items-center justify-center px-8 py-4 bg-slate-900 border-2 border-slate-900 hover:bg-transparent hover:text-slate-900 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white text-white rounded-full font-bold tracking-widest uppercase text-sm transition-all duration-300 mt-4 shadow-md">
                                Post Comment
                            </button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-1 space-y-12 sticky top-28 self-start">

                <!-- Search Widget -->
                <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-6 font-display">Search</h3>
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
                <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-6 font-display">Categories</h3>
                    <ul class="space-y-4">
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
                <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-8 font-display">Recent Posts</h3>
                    <div class="space-y-8">
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
                <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm"
                    data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-6 font-display">Popular Tags</h3>
                    <div class="flex flex-wrap gap-3">
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

            // Initialize Comments
            if (typeof initComments === 'function') {
                initComments();
            }
        });
    </script>
</body>

</html>