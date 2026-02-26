<?php
$pageTitle = 'Krist - My Orders';
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
                <h2 class="text-2xl font-bold mb-6">Order History</h2>

                <div class="space-y-6">
                    <!-- Order Card -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800 overflow-hidden relative">
                        <div
                            class="flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-4 mb-4">
                            <div>
                                <p class="font-bold text-lg mb-1">Order #ORD-2023-0981</p>
                                <p class="text-xs text-slate-500">Placed on Oct 24, 2023</p>
                            </div>
                            <div class="mt-4 md:mt-0 flex gap-4 items-center">
                                <span
                                    class="bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Processing</span>
                                <p class="font-bold text-primary dark:text-white">$120.00</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 py-2">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0XqfpSJY2aHwGAeV_Jr5RJWZ0dENi0m20KVUWvAUV14S3x0PPF_I983qcvFeNJDCWPa6I3IlQpXs0GxHj0oi3PJ1jjHpc3s83ZqX3JdRiyFVmMbKaOjJipcaOW8kHYGrcuDHhsbpbxByv_3u7IctEwQv_Y7A6pcKlylUctIQg9XwNPItE_dFiA70znSDSjDRxyjm_TZ4Q0aYbLNmlb_Ns0jWw12JNXA6NHI9YNSAGJ1ypYclrRRbaRK5PzU0jAycXdUh676vB8_o"
                                class="w-16 h-20 object-cover rounded-md bg-slate-50">
                            <div class="flex-1">
                                <h4 class="font-bold text-sm mb-1 line-clamp-1">Floral Embroidered Maxi Dress</h4>
                                <p class="text-xs text-slate-500">Color: Red | Size: M</p>
                                <p class="text-xs font-semibold mt-1">Qty: 1</p>
                            </div>
                            <button onclick="showToast('Loading order details...')"
                                class="px-4 py-2 text-primary border border-primary rounded-md text-sm font-semibold hover:bg-primary hover:text-white transition-colors">View
                                Details</button>
                        </div>
                    </div>

                    <!-- Order Card -->
                    <!-- Order Card -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-lg p-6 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800 overflow-hidden relative">
                        <div
                            class="flex flex-col md:flex-row md:items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-4 mb-4">
                            <div>
                                <p class="font-bold text-lg mb-1">Order #ORD-2023-0853</p>
                                <p class="text-xs text-slate-500">Placed on Sep 12, 2023</p>
                            </div>
                            <div class="mt-4 md:mt-0 flex gap-4 items-center">
                                <span
                                    class="bg-emerald-50 text-emerald-600 dark:bg-emerald-900/30 dark:text-emerald-400 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Delivered</span>
                                <p class="font-bold text-primary dark:text-white">$149.00</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 py-2">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4V_sF4mFDjtJz_OhG5JHN-qRZKi1Jm5ii5VpYG-1SO99PhCtd2cdn3IXct5q9VD38NZcOnREnkL7M5aZ1ufa3rHg8Td_E5ocjAiMf5p6dAbXHGZCdsxfeY_XU2nTX-t2VjIRZsYi7hjII6dlvsEiDPIyW-FYRqljYgu1S7UY6aBXuP5uMigEOscbkQt4jTHeJPENfW2lOBB6PIyy8pG6XjyfhrB3AQD-JIDHnDcQ05ZjQ4V2CJClAIFM809duJrRYn8JozQ3OQQc"
                                class="w-16 h-20 object-cover rounded-md bg-slate-50">
                            <div class="flex-1">
                                <h4 class="font-bold text-sm mb-1 line-clamp-1">Brown Leather Jacket</h4>
                                <p class="text-xs text-slate-500">Color: Brown | Size: L</p>
                                <p class="text-xs font-semibold mt-1">Qty: 1</p>
                            </div>
                            <button onclick="showToast('Loading order details...')"
                                class="px-4 py-2 text-primary border border-primary rounded-md text-sm font-semibold hover:bg-primary hover:text-white transition-colors">View
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>