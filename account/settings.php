<?php
$pageTitle = 'Krist - Account Settings';
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
            <div class="md:col-span-3 space-y-8">
                <h2 class="text-2xl font-bold mb-6">Settings</h2>

                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl p-8 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800">
                    <h3 class="font-bold text-lg mb-4">Change Password</h3>
                    <form class="space-y-6 max-w-lg">
                        <div>
                            <label class="block text-sm font-medium mb-2">Current Password</label>
                            <input type="password"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">New Password</label>
                            <input type="password"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Confirm New Password</label>
                            <input type="password"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-full focus:ring-slate-900 focus:border-slate-900 p-3 bg-slate-50">
                        </div>
                        <button type="button"
                            class="bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-6 py-3 rounded-xl font-bold hover:bg-primary dark:hover:bg-primary transition-colors">
                            Update Password
                        </button>
                    </form>
                </div>

                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl p-8 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800">
                    <h3 class="font-bold text-lg mb-4 text-red-500">Danger Zone</h3>
                    <p class="text-slate-500 mb-6 text-sm">Once you delete your account, there is no going back. Please
                        be certain.</p>
                    <button type="button"
                        class="border-2 border-red-100 dark:border-red-900/30 text-red-500 hover:bg-red-500 hover:text-white px-6 py-3 rounded-xl font-bold transition-all">
                        Delete Account
                    </button>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>