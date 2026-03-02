<?php
$pageTitle = 'Gojacdoors - Shopping Cart';
$activePage = 'cart';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="grow max-w-7xl mx-auto w-full px-4 md:px-8 py-12">
        <h2 class="text-3xl font-bold mb-8">Shopping Cart</h2>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 overflow-hidden">
                    <div
                        class="p-6 border-b border-slate-100 dark:border-slate-700 hidden sm:grid grid-cols-12 gap-4 text-sm font-semibold text-slate-500 uppercase">
                        <div class="col-span-6">Product</div>
                        <div class="col-span-2 text-center">Price</div>
                        <div class="col-span-2 text-center">Quantity</div>
                        <div class="col-span-2 text-right">Subtotal</div>
                    </div>
                    <div id="cartItemsContainer" class="divide-y divide-slate-100 dark:divide-slate-700">
                        <!-- Javascript will render cart items here -->
                    </div>
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <a href="/shop.php" class="text-primary font-medium hover:underline flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                        </svg>
                        Continue Shopping
                    </a>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 p-6 sticky top-24">
                    <h3 class="text-xl font-bold mb-6">Order Summary</h3>
                    <div class="space-y-4 text-sm mb-6">
                        <div class="flex justify-between">
                            <span class="text-slate-500">Subtotal</span>
                            <span class="font-bold" id="orderSubtotal">$0.00</span>
                        </div>
                        <div id="cartDiscountRow" class="justify-between text-green-600 font-medium hidden">
                            <span class="flex items-center gap-1">Discount (<span id="cartDiscountLabel"></span>)</span>
                            <span id="cartDiscountAmount">-$0.00</span>
                        </div>
                        <div class="h-px w-full bg-slate-100 dark:bg-slate-700 my-4"></div>
                        <div class="flex justify-between text-lg">
                            <span class="font-bold">Total</span>
                            <span class="font-bold text-primary" id="orderTotal">$0.00</span>
                        </div>
                    </div>
                    <button onclick="checkoutToWhatsApp()"
                        class="w-full block text-center py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white mt-4">Checkout
                        On Whatsapp</button>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>