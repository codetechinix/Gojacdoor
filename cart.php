<?php
$pageTitle = 'Krist - Shopping Cart';
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
                        <div class="flex justify-between">
                            <span class="text-slate-500">Shipping</span>
                            <span class="font-bold">Calculated at next step</span>
                        </div>
                        <div class="h-px w-full bg-slate-100 dark:bg-slate-700 my-4"></div>
                        <div class="flex justify-between text-lg">
                            <span class="font-bold">Total</span>
                            <span class="font-bold text-primary" id="orderTotal">$0.00</span>
                        </div>
                    </div>
                    <a href="/checkout.php"
                        class="w-full block text-center py-4 bg-primary text-white rounded-xl font-bold hover:bg-slate-800 transition-colors">Proceed
                        to Checkout</a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            renderCartPage();
        });

        function renderCartPage() {
            const container = document.getElementById('cartItemsContainer');
            const subtotalEl = document.getElementById('orderSubtotal');
            const totalEl = document.getElementById('orderTotal');
            if (!container) return;

            if (cart.length === 0) {
                container.innerHTML = '<div class="p-12 text-center text-slate-500">Your cart is empty. Start shopping!</div>';
                subtotalEl.textContent = '$0.00';
                totalEl.textContent = '$0.00';
                return;
            }

            container.innerHTML = cart.map(item => {
                const p = PRODUCTS.find(pr => pr.id === item.id);
                if (!p) return '';
                return `
                <div class="p-6 grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                    <div class="col-span-1 sm:col-span-6 flex items-center space-x-4">
                        <img src="/${p.image}" alt="${p.name}" class="w-20 h-24 object-cover rounded-lg"/>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white line-clamp-1">${p.name}</h4>
                            <p class="text-sm text-slate-500 mb-2">${p.brand}</p>
                            <button onclick="removeFromCart(${p.id}); renderCartPage(); renderMiniCartItems();" class="text-sm text-red-500 hover:text-red-700 font-medium flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg> Remove
                            </button>
                        </div>
                    </div>
                    <div class="col-span-1 sm:col-span-2 sm:text-center font-bold">
                        <span class="sm:hidden text-sm text-slate-500 font-normal mr-2">Price:</span>$${p.price.toFixed(2)}
                    </div>
                    <div class="col-span-1 sm:col-span-2 flex sm:justify-center">
                        <div class="flex items-center space-x-3 bg-slate-50 dark:bg-slate-900 rounded-lg p-1 border border-slate-200 dark:border-slate-700">
                            <button onclick="updateCartQty(${p.id}, ${item.qty - 1}); renderCartPage(); renderMiniCartItems();" class="w-8 h-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-800 rounded shadow-sm text-slate-600 dark:text-slate-300 font-bold">−</button>
                            <span class="font-bold w-4 text-center">${item.qty}</span>
                            <button onclick="updateCartQty(${p.id}, ${item.qty + 1}); renderCartPage(); renderMiniCartItems();" class="w-8 h-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-800 rounded shadow-sm text-slate-600 dark:text-slate-300 font-bold">+</button>
                        </div>
                    </div>
                    <div class="col-span-1 sm:col-span-2 sm:text-right font-bold text-primary">
                        <span class="sm:hidden text-sm text-slate-500 font-normal mr-2">Subtotal:</span>$${(p.price * item.qty).toFixed(2)}
                    </div>
                </div>`;
            }).join('');

            const total = getCartTotal().toFixed(2);
            subtotalEl.textContent = '$' + total;
            totalEl.textContent = '$' + total;
        }
    </script>
</body>

</html>