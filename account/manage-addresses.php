<?php
$pageTitle = 'Krist - Manage Addresses';
$activePage = 'profile';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include '../includes/header.php'; ?>

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 md:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="md:col-span-1">
                <div id="account-sidebar"></div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-3">
                <div
                    class="flex items-center justify-between mb-8 pb-6 border-b border-slate-200 dark:border-slate-800">
                    <h2 class="text-2xl font-bold">Manage Addresses</h2>
                    <button
                        class="bg-slate-900 dark:bg-white text-white dark:text-primary px-6 py-2.5 rounded-md font-bold text-sm hover:shadow-lg hover:bg-slate-800 dark:hover:bg-slate-100 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg> Add New
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Address Card -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-modern dark:shadow-modern-dark border-2 border-primary relative">
                        <div class="absolute top-4 right-4 flex gap-2">
                            <button onclick="showToast('Edit address modal would open here.', 'info')"
                                class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-primary flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </button>
                            <button onclick="showToast('Address deleted successfully!', 'error')"
                                class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-red-500 flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <span
                            class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide mb-4 inline-block">Default</span>

                        <h3 class="font-bold text-lg mb-1">John Doe</h3>
                        <p class="text-slate-500 text-sm mb-4">+1 (234) 567-8900</p>

                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                            3891 Ranchview Dr.<br />
                            Richardson, California 62639<br />
                            United States
                        </p>
                    </div>

                    <!-- Address Card -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800 relative">
                        <div class="absolute top-4 right-4 flex gap-2">
                            <button onclick="showToast('Edit address modal would open here.', 'info')"
                                class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-primary flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </button>
                            <button onclick="showToast('Address deleted successfully!', 'error')"
                                class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-red-500 flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <span
                            class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide mb-4 inline-block">Office</span>

                        <h3 class="font-bold text-lg mb-1">John Doe</h3>
                        <p class="text-slate-500 text-sm mb-4">+1 (234) 111-2222</p>

                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                            4140 Parker Rd.<br />
                            Allentown, New Mexico 31134<br />
                            United States
                        </p>

                        <button class="text-sm font-bold text-primary hover:underline">Set as Default</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>