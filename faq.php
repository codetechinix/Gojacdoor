<?php
$pageTitle = 'Krist - FAQ';
$activePage = '';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12 max-w-4xl">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="bg-white dark:bg-slate-900 rounded-2xl p-8 md:p-12 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800"
            data-aos="fade-up">
            <h1 class="text-4xl font-bold mb-2 font-display text-center">Frequently Asked Questions</h1>
            <p class="text-lg text-slate-500 mb-12 text-center">Find answers to common questions about our products,
                shipping, and returns.</p>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-bold text-lg text-slate-900 dark:text-white bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center"
                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                        What forms of payment do you accept?
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="px-6 py-4 text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>We accept Visa, MasterCard, American Express, PayPal, and Apple Pay. Ensure that your billing
                            address matches the address on your credit card statement.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-bold text-lg text-slate-900 dark:text-white bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center"
                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                        How long will it take to receive my order?
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="px-6 py-4 text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 hidden bg-white dark:bg-slate-900">
                        <p>Standard shipping typically takes 3-5 business days within the contiguous United States.
                            Expedited options are available at checkout. International orders may take 7-14 business
                            days depending on customs.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-bold text-lg text-slate-900 dark:text-white bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center"
                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                        What is your return policy?
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="px-6 py-4 text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 hidden bg-white dark:bg-slate-900">
                        <p>We offer a 30-day money-back guarantee. If you are not completely satisfied with your
                            purchase, you may return it in its original condition (unworn, unwashed, with tags attached)
                            within 30 days of delivery for a full refund or exchange.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-bold text-lg text-slate-900 dark:text-white bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center"
                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                        Do you ship internationally?
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="px-6 py-4 text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 hidden bg-white dark:bg-slate-900">
                        <p>Yes, we ship to over 50 countries globally. Shipping rates and delivery times for
                            international orders vary by destination and are calculated at checkout. Please note that
                            customs duties and taxes are the responsibility of the customer.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <button
                        class="w-full px-6 py-4 text-left font-bold text-lg text-slate-900 dark:text-white bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center"
                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                        How can I track my order?
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="px-6 py-4 text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 hidden bg-white dark:bg-slate-900">
                        <p>Once your order has been dispatched, you will receive an email confirmation containing your
                            shipping tracking number and a link to trace your package. You can also log into your
                            account to track your order.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-slate-500 mb-4">Still have questions?</p>
                <a href="contact.php"
                    class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-md font-bold hover:bg-primary-dark transition-colors shadow-lg shadow-primary/30">
                    Contact Support
                </a>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'FAQ', active: true }
            ]);
        });
    </script>
</body>

</html>