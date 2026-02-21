<?php
$pageTitle = 'Krist - Privacy Policy';
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
            <h1 class="text-4xl font-bold mb-2 font-display">Privacy Policy</h1>
            <p class="text-sm text-slate-500 mb-8">Last Updated: October 26, 2023</p>

            <div class="prose dark:prose-invert max-w-none space-y-6 text-slate-600 dark:text-slate-400">
                <p>
                    At Krist, we respect your personal data. This Privacy Policy explains how we collect, use, disclose,
                    and safeguard your information when you visit our website or make a purchase.
                </p>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">1. Information We Collect</h3>
                <p>
                    We collect information that you manually provide to us, such as when you create an account, place an
                    order, or subscribe to our newsletter. This includes your name, email address, shipping address, and
                    payment details.
                </p>
                <p>
                    We also automatically collect certain information when you visit our site, including your IP
                    address, browser type, operating system, and browsing behavior on our platform.
                </p>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">2. How We Use Your Information
                </h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>To process and fulfill your orders, including sending order confirmations and tracking updates.
                    </li>
                    <li>To communicate with you about your account, respond to inquiries, and provide customer support.
                    </li>
                    <li>To send you promotional materials, newsletters, and marketing communications (you can opt-out at
                        any time).</li>
                    <li>To improve our website, personalize your shopping experience, and analyze site usage.</li>
                    <li>To detect and prevent fraudulent transactions and ensure the security of our platform.</li>
                </ul>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">3. Sharing Your Information</h3>
                <p>
                    We do not sell your personal information to third parties. We may share your information with
                    trusted third-party service providers who assist us in operating our website, conducting our
                    business, or servicing you, provided that those parties agree to keep this information confidential.
                    These include payment processors and shipping carriers.
                </p>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">4. Cookies</h3>
                <p>
                    Our website uses cookies and similar tracking technologies to enhance your browsing experience,
                    analyze site functionality, and assist with our marketing efforts. You can choose to disable cookies
                    through your browser settings, but this may affect certain features of the site.
                </p>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">5. Data Security</h3>
                <p>
                    We implement a variety of security measures to maintain the safety of your personal information.
                    Your payment data is encrypted via Secure Socket Layer (SSL) technology and is not stored on our
                    servers.
                </p>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-8 mb-3">6. Contact Us</h3>
                <p>
                    If you have any questions or concerns about this Privacy Policy, please contact us at <a
                        href="mailto:privacy@krist.example.com"
                        class="text-primary hover:underline">privacy@krist.example.com</a>.
                </p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Privacy Policy', active: true }
            ]);
        });
    </script>
</body>

</html>