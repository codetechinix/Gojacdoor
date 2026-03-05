<?php
$pageTitle = 'Gojacdoors - About Us';
$activePage = '';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include '../includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12 max-w-4xl">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="bg-white dark:bg-slate-900 rounded-2xl p-8 md:p-12 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800"
            data-aos="fade-up">
            <h1 class="text-4xl font-bold mb-6 font-display">Our Story</h1>

            <div class="prose dark:prose-invert max-w-none space-y-6 text-slate-600 dark:text-slate-400">
                <p class="text-lg leading-relaxed">
                    Founded in 2020, Gojacdoors was born out of a simple belief: fashion should be accessible,
                    high-quality,
                    and deeply expressive. What started as a small capsule collection in a cramped Los Angeles studio
                    has blossomed into a global brand reaching customers across 50 countries.
                </p>

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC6gS7i2l8oV17Q9T813xYZc1Yv0-p9C9lQ5hI7V1bO7OaCg5eU12QyqR0-I7x-W52HnC0qT4_rM9_t8W7D8_QY_B2aA_rN-J9x7iA12V2O4aX9dJdZ6x2QzLqA9T6eY-wE6m1Lw4Z2t_9F9IqQQkKq5VwWp6wH6C-I-L-9U1C9KqZ4K"
                    alt="Gojacdoors Team" class="w-full h-[400px] object-cover rounded-xl my-8">

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Our Mission</h3>
                <p>
                    We are on a mission to empower individuals to feel confident in their own skin by providing
                    carefully curated, expertly crafted apparel that bridges the gap between contemporary trends and
                    timeless elegance. We believe that what you wear is how you present yourself to the world, and we
                    want to help you make a statement.
                </p>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Sustainable Practices</h3>
                <p>
                    We know that the fashion industry has an impact on the planet, which is why we are committed to
                    moving towards fully sustainable sourcing by 2030. Currently, 40% of our collections are made from
                    recycled or sustainably sourced materials. We work closely with ethically certified factories to
                    ensure fair wages and safe working conditions.
                </p>

                <div class="bg-primary/5 border-l-4 border-primary p-6 rounded-r-lg my-8">
                    <p class="text-lg font-medium text-slate-900 dark:text-white italic m-0">
                        "Fashion is not something that exists in dresses only. Fashion is in the sky, in the street,
                        fashion has to do with ideas, the way we live, what is happening."
                    </p>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Meet The Team</h3>
                <p>
                    Our diverse team of designers, tailors, and customer experience specialists is dedicated to bringing
                    you the best. With a shared passion for design and an eye for detail, the Gojacdoors team works
                    tirelessly behind the scenes to continually elevate the brand experience.
                </p>

                <!-- Share Section -->
                <div
                    class="mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-6">
                    <p class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-widest">Share this
                        page</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#" data-share="whatsapp"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-[#25D366] hover:text-white transition-all duration-300"
                            aria-label="Share on WhatsApp">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.4-8.6-44.6-27.5-16.5-14.7-27.6-32.8-30.8-38.4-3.2-5.6-.3-8.6 2.5-11.4 2.5-2.5 5.5-6.5 8.3-9.7 2.8-3.2 3.7-5.5 5.6-9.2 1.9-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.1 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>
                        <a href="#" data-share="x"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on X">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="#" data-share="facebook"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300"
                            aria-label="Share on Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" data-share="instagram"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-linear-to-tr hover:from-[#f9ce34] hover:via-[#ee2a7b] hover:to-[#6228d7] hover:text-white transition-all duration-300"
                            aria-label="Share on Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.8 9.9 67.6 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                        <a href="#" data-share="tiktok"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.32c7.87 33.32 31.05 60.36 63.82 72.73a118 118 0 0 0 57.09 14.16z" />
                            </svg>
                        </a>
                        <a href="#" data-share="copy"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all duration-300"
                            aria-label="Copy Link">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>