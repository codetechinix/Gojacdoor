<?php
$pageTitle = 'Krist - Personal Information';
$activePage = 'profile'; // Can be 'personal-info' or something
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
                    class="bg-white dark:bg-slate-900 rounded-2xl p-8 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800">
                    <h2 class="text-2xl font-bold mb-6">Personal Information</h2>
                    <p class="text-slate-500 mb-8 pb-6 border-b border-slate-100 dark:border-slate-800">Manage your
                        personal details and account settings.</p>

                    <form class="space-y-6 max-w-2xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">First Name</label>
                                <input type="text"
                                    class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50"
                                    value="John" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Last Name</label>
                                <input type="text"
                                    class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50"
                                    value="Doe" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address</label>
                            <input type="email"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50"
                                value="john.doe@example.com" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50"
                                value="+1 234 567 8900" />
                        </div>

                        <div class="pt-6">
                            <button type="button"
                                class="bg-gradient-to-r from-primary to-primary-light text-white px-8 py-3 rounded-xl font-semibold shadow-lg shadow-primary/30 hover:shadow-primary/50 hover:-translate-y-0.5 transition-all w-full md:w-auto">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>