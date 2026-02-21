<?php
$pageTitle = 'Krist - Delivery Information';
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
            <h1 class="text-4xl font-bold mb-6 font-display">Delivery Information</h1>

            <div class="prose dark:prose-invert max-w-none space-y-8 text-slate-600 dark:text-slate-400">

                <section>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Domestic Shipping (US)</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b-2 border-slate-200 dark:border-slate-700">
                                    <th class="py-3 px-4 text-slate-900 dark:text-white font-bold">Shipping Method</th>
                                    <th class="py-3 px-4 text-slate-900 dark:text-white font-bold">Estimated Delivery
                                    </th>
                                    <th class="py-3 px-4 text-slate-900 dark:text-white font-bold text-right">Cost</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <tr>
                                    <td class="py-4 px-4 font-medium">Standard Shipping</td>
                                    <td class="py-4 px-4">3 - 5 Business Days</td>
                                    <td class="py-4 px-4 text-right">$5.99 (Free over $150)</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 font-medium">Expedited Shipping</td>
                                    <td class="py-4 px-4">2 Business Days</td>
                                    <td class="py-4 px-4 text-right">$15.00</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 font-medium">Next Day Air</td>
                                    <td class="py-4 px-4">1 Business Day</td>
                                    <td class="py-4 px-4 text-right">$25.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">International Shipping</h3>
                    <p class="mb-4">
                        We currently ship to over 50 countries worldwide. International shipping rates are calculated
                        dynamically at checkout based on the weight of your order and the destination country.
                    </p>
                    <p>
                        Please note that international shipments may be subject to customs duties, taxes, and import
                        fees levied by the destination country. These charges are the responsibility of the recipient.
                    </p>
                </section>

                <section>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Order Tracking</h3>
                    <p>
                        Once your order has shipped, you will receive a confirmation email with a tracking number and a
                        link to track your package. You can also track your order status by logging into your Krist
                        account and visiting the "My Orders" section.
                    </p>
                </section>

                <section>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Missing or Lost Packages</h3>
                    <p>
                        If your tracking information shows that your package was delivered but you cannot find it,
                        please verify the shipping address on your order confirmation. Check around your property, with
                        neighbors, and with your local post office. If you are still unable to locate your package after
                        48 hours, please contact our support team.
                    </p>
                </section>

            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'Delivery Information', active: true }
            ]);
        });
    </script>
</body>

</html>