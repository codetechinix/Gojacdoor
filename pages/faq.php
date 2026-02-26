<?php
$pageTitle = 'Krist - FAQ';
$activePage = '';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
    <style>
        /* Smooth accordion */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease;
            padding: 0 1.5rem;
        }

        .faq-answer.open {
            max-height: 300px;
            padding: 1rem 1.5rem 1.25rem;
        }

        .faq-chevron {
            transition: transform 0.3s ease;
        }

        .faq-chevron.rotated {
            transform: rotate(180deg);
        }

        /* Tab active indicator */
        .faq-tab {
            position: relative;
            transition: all 0.3s ease;
        }

        .faq-tab::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #0f172a;
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .dark .faq-tab::after {
            background: #fff;
        }

        .faq-tab.active::after {
            width: 100%;
        }

        .faq-tab.active {
            color: #0f172a;
            font-weight: 700;
        }

        .dark .faq-tab.active {
            color: #fff;
        }

        /* Search highlight */
        .faq-item.hidden-by-search {
            display: none;
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include '../includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12 max-w-4xl">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="bg-white dark:bg-slate-900 rounded-2xl p-8 md:p-12 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800"
            data-aos="fade-up">

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-2 font-display">Frequently Asked Questions</h1>
                <p class="text-lg text-slate-500">Find answers to common questions about our products, shipping, and
                    returns.</p>
            </div>

            <!-- Search -->
            <div class="relative max-w-md mx-auto mb-10">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input id="faqSearch" type="text"
                    class="w-full pl-12 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                    placeholder="Search questions..." />
            </div>

            <!-- Category Tabs -->
            <div class="flex flex-wrap justify-center gap-2 mb-10 border-b border-slate-100 dark:border-slate-800 pb-4"
                id="faqTabs">
                <button
                    class="faq-tab active px-5 py-2.5 text-sm rounded-lg text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                    data-category="all">All</button>
                <button
                    class="faq-tab px-5 py-2.5 text-sm rounded-lg text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                    data-category="shopping">Shopping</button>
                <button
                    class="faq-tab px-5 py-2.5 text-sm rounded-lg text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                    data-category="shipping">Shipping</button>
                <button
                    class="faq-tab px-5 py-2.5 text-sm rounded-lg text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                    data-category="returns">Returns</button>
                <button
                    class="faq-tab px-5 py-2.5 text-sm rounded-lg text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors"
                    data-category="account">Account</button>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-4" id="faqList">

                <!-- Shopping -->
                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="shopping" data-aos="fade-up" data-aos-delay="50">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>What forms of payment do you accept?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>We accept Visa, MasterCard, American Express, PayPal, and Apple Pay. All transactions are
                            encrypted and processed securely. Ensure that your billing address matches the address on
                            your credit card statement.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="shopping" data-aos="fade-up" data-aos-delay="100">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>Can I modify or cancel my order after placing it?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>You can modify or cancel your order within 1 hour of placing it. After that, orders enter our
                            fulfillment pipeline and cannot be changed. Please contact support immediately if you need
                            assistance.</p>
                    </div>
                </div>

                <!-- Shipping -->
                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="shipping" data-aos="fade-up" data-aos-delay="150">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>How long will it take to receive my order?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Standard shipping typically takes 3–5 business days within the contiguous United States.
                            Expedited options (next-day, 2-day) are available at checkout. International orders may take
                            7–14 business days depending on customs processing.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="shipping" data-aos="fade-up" data-aos-delay="200">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>Do you ship internationally?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Yes, we ship to over 50 countries globally. Shipping rates and delivery times for
                            international orders vary by destination and are calculated at checkout. Please note that
                            customs duties and taxes are the responsibility of the customer.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="shipping" data-aos="fade-up" data-aos-delay="250">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>How can I track my order?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Once your order has been dispatched, you will receive an email confirmation containing your
                            shipping tracking number and a link to trace your package. You can also log into your
                            account to track your order in real time.</p>
                    </div>
                </div>

                <!-- Returns -->
                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="returns" data-aos="fade-up" data-aos-delay="300">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>What is your return policy?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>We offer a 30-day money-back guarantee. If you are not completely satisfied with your
                            purchase, you may return it in its original condition (unworn, unwashed, with tags attached)
                            within 30 days of delivery for a full refund or exchange.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="returns" data-aos="fade-up" data-aos-delay="350">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>How do I initiate a return or exchange?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>To start a return, log into your account and navigate to your Orders page. Select the item
                            you want to return and follow the on-screen instructions. You'll receive a prepaid shipping
                            label via email. For exchanges, select the new size or color during the return process.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="returns" data-aos="fade-up" data-aos-delay="400">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>When will I receive my refund?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Once we receive and inspect your returned item, refunds are processed within 3–5 business
                            days. The refund will be applied to your original payment method. Please allow an additional
                            5–10 days for the refund to appear on your statement, depending on your bank.</p>
                    </div>
                </div>

                <!-- Account -->
                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="account" data-aos="fade-up" data-aos-delay="450">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>How do I create an account?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Click the "Login" button in the top navigation bar, then select "Create Account". Fill in
                            your name, email, and password. You can also sign up during checkout. Having an account lets
                            you track orders, save addresses, and manage your wishlist.</p>
                    </div>
                </div>

                <div class="faq-item border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden"
                    data-category="account" data-aos="fade-up" data-aos-delay="500">
                    <button
                        class="faq-toggle w-full px-6 py-4 text-left font-semibold text-slate-900 dark:text-white bg-slate-50/50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors flex justify-between items-center gap-4">
                        <span>I forgot my password. How do I reset it?</span>
                        <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-answer text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900">
                        <p>Go to the Login page and click "Forgot Password". Enter the email address associated with
                            your account, and we'll send you a secure link to reset your password. The link expires
                            after 24 hours for security purposes.</p>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="mt-12 text-center">
                <p class="text-slate-500 mb-4">Still have questions?</p>
                <a href="/pages/contact.php"
                    class="inline-flex items-center px-8 py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Contact Support
                </a>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>