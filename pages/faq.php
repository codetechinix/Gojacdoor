<?php
$pageTitle = 'Gojacdoors - FAQ';
$activePage = 'faq';
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
                <!-- Share Section -->
                <div
                    class="mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-6">
                    <p class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-widest">Share this
                        page</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#" data-share="whatsapp"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-[#25D366] hover:text-white transition-all duration-300"
                            aria-label="Share on WhatsApp">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.4-8.6-44.6-27.5-16.5-14.7-27.6-32.8-30.8-38.4-3.2-5.6-.3-8.6 2.5-11.4 2.5-2.5 5.5-6.5 8.3-9.7 2.8-3.2 3.7-5.5 5.6-9.2 1.9-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.1 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>
                        <a href="#" data-share="x"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on X">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="#" data-share="facebook"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300"
                            aria-label="Share on Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" data-share="instagram"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-linear-to-tr hover:from-[#f9ce34] hover:via-[#ee2a7b] hover:to-[#6228d7] hover:text-white transition-all duration-300"
                            aria-label="Share on Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.8 9.9 67.6 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                        <a href="#" data-share="tiktok"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-black hover:text-white transition-all duration-300"
                            aria-label="Share on TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.32c7.87 33.32 31.05 60.36 63.82 72.73a118 118 0 0 0 57.09 14.16z" />
                            </svg>
                        </a>
                        <a href="#" data-share="copy"
                            class="w-10 h-10 rounded-full bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all duration-300"
                            aria-label="Copy Link">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof initFAQ === 'function') initFAQ();
        });
    </script>
</body>

</html>