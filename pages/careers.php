<?php
$pageTitle = 'Krist - Careers';
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
            <h1 class="text-4xl font-bold mb-4 font-display">Careers at Krist</h1>
            <p class="text-lg text-slate-500 mb-10">Join our team of passionate creators and innovators.</p>

            <div class="prose dark:prose-invert max-w-none space-y-6 text-slate-600 dark:text-slate-400">
                <p>
                    We are always looking for talented individuals who share our passion for fashion, sustainability,
                    and exceptional customer experiences. At Krist, you'll find a collaborative, fast-paced environment
                    where your ideas can make a real impact.
                </p>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Why Work With Us?</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Competitive salary and comprehensive benefits package.</li>
                    <li>Generous employee discount on all Krist apparel.</li>
                    <li>Flexible working arrangements and remote options for eligible roles.</li>
                    <li>Continuous learning and development opportunities.</li>
                    <li>A diverse and inclusive workplace culture.</li>
                </ul>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-10 mb-6">Open Positions</h3>

                <div class="space-y-4">
                    <!-- Job Listing -->
                    <div
                        class="border border-slate-200 dark:border-slate-700 rounded-xl p-6 hover:border-primary dark:hover:border-primary transition-colors group">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div>
                                <h4
                                    class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    Senior Fashion Designer</h4>
                                <div class="flex items-center gap-4 text-sm mt-2 text-slate-500">
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg> Los Angeles, CA</span>
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg> Full Time</span>
                                </div>
                            </div>
                            <button
                                class="bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary hover:text-white transition-colors">Apply
                                Now</button>
                        </div>
                    </div>

                    <!-- Job Listing -->
                    <div
                        class="border border-slate-200 dark:border-slate-700 rounded-xl p-6 hover:border-primary dark:hover:border-primary transition-colors group">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div>
                                <h4
                                    class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                    E-commerce Manager</h4>
                                <div class="flex items-center gap-4 text-sm mt-2 text-slate-500">
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg> Remote</span>
                                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg> Full Time</span>
                                </div>
                            </div>
                            <button
                                class="bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary hover:text-white transition-colors">Apply
                                Now</button>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-8 p-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl text-center border border-slate-200 dark:border-slate-700">
                    <p class="mb-4">Don't see a role that fits? Send us your resume anyway!</p>
                    <a href="mailto:careers@krist.example.com"
                        class="text-primary font-bold hover:underline">careers@krist.example.com</a>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Careers', active: true }
            ]);
        });
    </script>
</body>

</html>