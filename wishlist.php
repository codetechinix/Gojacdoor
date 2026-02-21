<?php
$pageTitle = 'Krist - Wishlist';
$activePage = 'profile';
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
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="md:col-span-1">
                <div id="account-sidebar"></div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-3">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold">My Wishlist</h2>
                    <span id="wishlistCount"
                        class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-3 py-1 rounded-full text-sm font-bold">0
                        Items</span>
                </div>

                <div id="wishlistGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Javascript will render wishlist items here -->
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof renderAccountSidebar === 'function') {
                renderAccountSidebar('wishlist');
            }
            renderWishlistPage();
        });

        function renderWishlistPage() {
            const container = document.getElementById('wishlistGrid');
            const countEl = document.getElementById('wishlistCount');
            if (!container) return;

            countEl.textContent = `${wishlist.length} Items`;

            if (wishlist.length === 0) {
                container.innerHTML = '<div class="col-span-full py-12 text-center text-slate-500 bg-white dark:bg-slate-900 rounded-2xl border border-dashed border-slate-300 dark:border-slate-700">Your wishlist is empty. Start exploring and add items you love!</div>';
                return;
            }

            const wishedProducts = PRODUCTS.filter(p => wishlist.includes(p.id));
            container.innerHTML = wishedProducts.map(p => renderProductCard(p)).join('');
        }
    </script>
</body>

</html>