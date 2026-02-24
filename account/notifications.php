<?php
$pageTitle = 'Krist - Notifications';
$activePage = 'profile';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="grow max-w-7xl mx-auto w-full px-4 md:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="md:col-span-1">
                <div id="account-sidebar"></div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-3">
                <h2 class="text-2xl font-bold mb-6">Notifications</h2>

                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800 p-8">

                    <div class="flex items-start gap-4 pb-6 border-b border-slate-100 dark:border-slate-800">
                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">local_shipping</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Order Delivered Successfully</h4>
                            <p class="text-sm text-slate-500 mb-2">Your recent order #ORD-2023-0853 has been delivered.
                                We hope you enjoy your purchase!</p>
                            <span class="text-xs font-semibold text-slate-400">2 hours ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 py-6 border-b border-slate-100 dark:border-slate-800">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">sell</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">New Holiday Sale!</h4>
                            <p class="text-sm text-slate-500 mb-2">Get up to 40% off on all winter collections. Valid
                                until the end of the month.</p>
                            <span class="text-xs font-semibold text-slate-400">1 day ago</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 pt-6">
                        <div
                            class="w-12 h-12 bg-amber-50 text-amber-500 dark:bg-amber-900/30 dark:text-amber-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined">credit_card</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Payment Received</h4>
                            <p class="text-sm text-slate-500 mb-2">We have successfully processed your payment for
                                $120.00. Thank you for shopping with us.</p>
                            <span class="text-xs font-semibold text-slate-400">3 days ago</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof renderAccountSidebar === 'function') {
                renderAccountSidebar('notifications');
            }
        });
    </script>
</body>

</html>