<?php
$pageTitle = 'Krist - Checkout';
$activePage = 'shop';
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
        <div id="checkout-stepper-container" class="mb-10"></div>

        <div class="flex flex-col lg:flex-row gap-12">
            <div class="flex-1 space-y-8">
                <div
                    class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800">
                    <h2 class="text-xl font-bold mb-6">Delivery Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">First Name</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Last Name</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50" />
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium mb-2">Address</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">City</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Postal Code</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50" />
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800">
                    <h2 class="text-xl font-bold mb-6">Payment Method</h2>
                    <div class="space-y-4">
                        <label
                            class="flex items-center p-4 border border-primary bg-primary/5 rounded-xl cursor-pointer">
                            <input type="radio" name="payment" class="text-primary focus:ring-primary mr-4 w-5 h-5"
                                checked>
                            <span class="font-medium mr-auto">Credit / Debit Card</span>
                            <div class="flex space-x-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png"
                                    class="h-4 object-contain" alt="Visa">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                    class="h-4 object-contain" alt="MC">
                            </div>
                        </label>
                        <label
                            class="flex items-center p-4 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl cursor-pointer transition-colors">
                            <input type="radio" name="payment" class="text-primary focus:ring-primary mr-4 w-5 h-5">
                            <span class="font-medium">PayPal</span>
                        </label>
                        <label
                            class="flex items-center p-4 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl cursor-pointer transition-colors">
                            <input type="radio" name="payment" class="text-primary focus:ring-primary mr-4 w-5 h-5">
                            <span class="font-medium">Cash on Delivery</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-[450px]">
                <div
                    class="bg-white dark:bg-slate-900 p-8 rounded-2xl shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800 sticky top-28">
                    <h2 class="text-xl font-bold mb-6">Order Summary</h2>
                    <div id="checkoutCartItems" class="space-y-4 mb-6 max-h-[300px] overflow-y-auto pr-2">
                        <!-- Javascript will render items here -->
                    </div>

                    <div class="space-y-4 pt-6 border-t border-slate-100 dark:border-slate-800">
                        <div class="flex justify-between items-center text-slate-600 dark:text-slate-400">
                            <span>Subtotal</span>
                            <span id="checkoutSubtotal" class="font-medium text-slate-900 dark:text-white">$0.00</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-600 dark:text-slate-400">
                            <span>Delivery</span>
                            <span class="font-medium text-slate-900 dark:text-white">Free</span>
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-lg font-bold">Total</span>
                            <span id="checkoutTotal"
                                class="text-2xl font-bold text-primary dark:text-white">$0.00</span>
                        </div>
                        <button
                            class="w-full bg-linear-to-r from-primary to-primary-light text-white py-4 rounded-md font-bold shadow-lg shadow-primary/30 hover:shadow-primary/50 hover:-translate-y-0.5 transition-all text-lg">
                            Place Order
                        </button>
                        <p class="text-center text-xs text-slate-500 mt-4 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg> Secure checkout
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('checkout-stepper-container').innerHTML = renderCheckoutStepper(2);
            renderCheckoutItems();
        });

        function renderCheckoutItems() {
            const container = document.getElementById('checkoutCartItems');
            if (!container) return;
            if (cart.length === 0) {
                container.innerHTML = '<p class="text-slate-500 italic">Your cart is empty.</p>';
                return;
            }
            container.innerHTML = cart.map(item => {
                const p = PRODUCTS.find(pr => pr.id === item.id);
                if (!p) return '';
                return `
        <div class="flex items-center space-x-4">
            <img src="${p.image}" class="w-16 h-20 object-cover rounded-md bg-slate-50">
            <div class="flex-1">
                <h4 class="font-semibold text-sm line-clamp-1">${p.name}</h4>
                <p class="text-xs text-slate-500">Qty: ${item.qty}</p>
            </div>
            <div class="font-bold text-sm">$${(p.price * item.qty).toFixed(2)}</div>
        </div>`;
            }).join('');

            const total = getCartTotal().toFixed(2);
            document.getElementById('checkoutSubtotal').textContent = '$' + total;
            document.getElementById('checkoutTotal').textContent = '$' + total;
        }
    </script>
</body>

</html>