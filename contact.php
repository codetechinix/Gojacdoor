<?php
$pageTitle = 'Krist - Contact Us';
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

    <main class="grow container mx-auto px-4 md:px-8 py-12 max-w-6xl">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Info -->
            <div class="lg:col-span-1 space-y-8" data-aos="fade-right">
                <div>
                    <h1 class="text-4xl font-bold mb-4 font-display">Get in Touch</h1>
                    <p class="text-slate-500">We'd love to hear from you. Our friendly team is always here to chat.</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Email Us</h3>
                            <p class="text-slate-500 text-sm mb-2">Our friendly team is here to help.</p>
                            <a href="mailto:hello@krist.example.com"
                                class="font-medium text-slate-900 dark:text-white hover:text-primary transition-colors">hello@krist.example.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Office</h3>
                            <p class="text-slate-500 text-sm mb-2">Come say hello at our headquarters.</p>
                            <p class="font-medium text-slate-900 dark:text-white">3891 Ranchview Dr.
                                Richardson,<br />California 62639</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Phone</h3>
                            <p class="text-slate-500 text-sm mb-2">Mon-Fri from 8am to 5pm.</p>
                            <a href="tel:+17045550127"
                                class="font-medium text-slate-900 dark:text-white hover:text-primary transition-colors">+1
                                (704) 555-0127</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-2xl p-8 md:p-12 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800"
                data-aos="fade-left">
                <h2 class="text-2xl font-bold mb-6">Send us a message</h2>
                <form onsubmit="handleContact(event)" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label
                                class="block text-sm font-medium mb-2 text-slate-700 dark:text-slate-300 pointer-events-none">First
                                Name</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50 text-slate-900 dark:text-white"
                                required placeholder="John" />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium mb-2 text-slate-700 dark:text-slate-300 pointer-events-none">Last
                                Name</label>
                            <input type="text"
                                class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50 text-slate-900 dark:text-white"
                                required placeholder="Doe" />
                        </div>
                    </div>

                    <div>
                        <label
                            class="block text-sm font-medium mb-2 text-slate-700 dark:text-slate-300 pointer-events-none">Email
                            Address</label>
                        <input type="email"
                            class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50 text-slate-900 dark:text-white"
                            required placeholder="john@example.com" />
                    </div>

                    <div>
                        <label
                            class="block text-sm font-medium mb-2 text-slate-700 dark:text-slate-300 pointer-events-none">Subject</label>
                        <select
                            class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50 text-slate-900 dark:text-white"
                            required>
                            <option value="">Select a topic...</option>
                            <option value="order">Order Inquiry</option>
                            <option value="returns">Returns & Exchanges</option>
                            <option value="product">Product Information</option>
                            <option value="wholesale">Wholesale</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label
                            class="block text-sm font-medium mb-2 text-slate-700 dark:text-slate-300 pointer-events-none">Message</label>
                        <textarea rows="5"
                            class="w-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 rounded-xl focus:ring-primary focus:border-primary p-3 bg-slate-50 text-slate-900 dark:text-white"
                            required placeholder="Leave us a message..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary hover:bg-slate-800 text-white font-bold py-4 rounded-md transition-colors shadow-lg shadow-primary/30">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Contact Us', active: true }
            ]);
        });

        function handleContact(e) {
            e.preventDefault();
            if (typeof showToast !== 'undefined') {
                showToast('Thank you for contacting us! We will get back to you shortly.');
                e.target.reset();
            }
        }
    </script>
</body>

</html>