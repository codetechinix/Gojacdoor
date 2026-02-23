<!-- includes/sidebar.php -->
<?php
$activePage = isset($activePage) ? $activePage : '';
$links = [
    ['href' => '/account/personal-info.php', 'icon' => 'person', 'label' => 'My Profile', 'key' => 'profile'],
    ['href' => '/account/manage-addresses.php', 'icon' => 'location_on', 'label' => 'Manage Addresses', 'key' => 'addresses'],
    ['href' => '/account/wishlist.php', 'icon' => 'favorite', 'label' => 'My Wishlist', 'key' => 'wishlist'],
    ['href' => '/account/saved-cards.php', 'icon' => 'credit_card', 'label' => 'Saved Cards', 'key' => 'saved-cards'],
    ['href' => '/account/orders.php', 'icon' => 'shopping_bag', 'label' => 'My Orders', 'key' => 'orders'],
    ['href' => '/account/notifications.php', 'icon' => 'notifications', 'label' => 'Notifications', 'key' => 'notifications'],
    ['href' => '/account/settings.php', 'icon' => 'settings', 'label' => 'Settings', 'key' => 'settings'],
];
?>
<div
    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
    <div class="p-6 border-b border-slate-100 dark:border-slate-800">
        <div class="flex items-center space-x-4">
            <div
                class="w-14 h-14 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold">
                JD</div>
            <div>
                <h3 class="font-bold text-slate-900 dark:text-white">John Doe</h3>
                <p class="text-sm text-slate-500">john.doe@example.com</p>
            </div>
        </div>
    </div>
    <nav class="p-2">
        <?php foreach ($links as $l): ?>
            <a href="<?= $l['href'] ?>"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium transition-colors <?= $activePage === $l['key'] ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800' ?>">
                <span class="material-symbols-outlined text-xl">
                    <?= $l['icon'] ?>
                </span>
                <span>
                    <?= $l['label'] ?>
                </span>
            </a>
        <?php endforeach; ?>
        <button onclick="handleLogout()"
            class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors mt-2">
            <span class="material-symbols-outlined text-xl">logout</span>
            <span>Logout</span>
        </button>
    </nav>
</div>