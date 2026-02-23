<?php
$pageTitle = 'Krist - Login Successful';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex">
    <div class="hidden lg:flex lg:w-1/2 auth-image relative items-end p-12">
        <div class="relative z-10">
            <h2 class="text-white text-4xl font-bold mb-2">You're All Set!</h2>
            <p class="text-white/70 text-lg">Time to explore fashion</p>
        </div>
        <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent"></div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md text-center" data-aos="zoom-in">
            <div
                class="w-24 h-24 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-8">
                <span class="material-symbols-outlined text-5xl text-green-600"
                    style="font-variation-settings:'FILL' 1">check_circle</span>
            </div>
            <h1 class="text-3xl font-bold mb-3 dark:text-white">Login Successful</h1>
            <p class="text-slate-500 mb-8">Your session has been restored successfully. You will be redirected shortly.
            </p>
            <a href="index.php"
                class="inline-block w-full py-3 bg-primary text-white rounded-lg font-semibold hover:bg-slate-800 transition-colors text-center">Go
                to Homepage</a>
            <p class="mt-4 text-sm text-slate-400">Redirecting in <span id="countdown">3</span>s...</p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/components.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let c = 3; const i = setInterval(() => { c--; document.getElementById('countdown').textContent = c; if (c <= 0) { clearInterval(i); window.location.href = 'index.php'; } }, 1000);
        });
    </script>
</body>

</html>