<?php
$pageTitle = 'Krist - Saved Cards';
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

    <main class="grow max-w-7xl mx-auto w-full px-4 md:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="md:col-span-1">
                <div id="account-sidebar"></div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-3">
                <div
                    class="flex items-center justify-between mb-8 pb-6 border-b border-slate-200 dark:border-slate-800">
                    <h2 class="text-2xl font-bold">Saved Cards</h2>
                    <button
                        class="bg-slate-900 dark:bg-white text-white dark:text-primary px-6 py-2.5 rounded-xl font-bold text-sm hover:shadow-lg transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">add</span> Add Card
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Credit Card -->
                    <div
                        class="aspect-[1.58] bg-linear-to-tr from-slate-900 to-slate-700 text-white rounded-2xl p-6 shadow-xl relative overflow-hidden flex flex-col justify-between group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-2xl -translate-y-10 translate-x-10">
                        </div>

                        <div class="flex justify-between items-start relative z-10">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
                                alt="Mastercard" class="h-8">
                            <button
                                class="w-8 h-8 rounded-full bg-white/10 hover:bg-red-500 hover:text-white flex items-center justify-center transition-colors opacity-0 group-hover:opacity-100"><span
                                    class="material-symbols-outlined text-sm">delete</span></button>
                        </div>

                        <div class="relative z-10">
                            <p class="font-mono text-xl tracking-widest mb-2 opacity-90">**** **** **** 4532</p>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-[10px] uppercase tracking-wider opacity-60 mb-1">Card Holder</p>
                                    <p class="font-bold text-sm uppercase tracking-widest">John Doe</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-wider opacity-60 mb-1">Expires</p>
                                    <p class="font-bold text-sm tracking-widest">12/28</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Credit Card -->
                    <div
                        class="aspect-[1.58] bg-linear-to-tr from-blue-900 to-blue-700 text-white rounded-2xl p-6 shadow-xl relative overflow-hidden flex flex-col justify-between group">
                        <div
                            class="absolute top-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -translate-y-10 -translate-x-10">
                        </div>

                        <div class="flex justify-between items-start relative z-10">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa"
                                class="h-5 mix-blend-screen opacity-90">
                            <button
                                class="w-8 h-8 rounded-full bg-white/10 hover:bg-red-500 hover:text-white flex items-center justify-center transition-colors opacity-0 group-hover:opacity-100"><span
                                    class="material-symbols-outlined text-sm">delete</span></button>
                        </div>

                        <div class="relative z-10">
                            <p class="font-mono text-xl tracking-widest mb-2 opacity-90">**** **** **** 9211</p>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-[10px] uppercase tracking-wider opacity-60 mb-1">Card Holder</p>
                                    <p class="font-bold text-sm uppercase tracking-widest">John Doe</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-wider opacity-60 mb-1">Expires</p>
                                    <p class="font-bold text-sm tracking-widest">08/26</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>