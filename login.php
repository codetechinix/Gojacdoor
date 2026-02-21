<?php
$pageTitle = 'Krist - Login';
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
            <h2 class="text-white text-4xl font-bold mb-2">Welcome to Krist</h2>
            <p class="text-white/70 text-lg">Discover the latest fashion trends</p>
        </div>
        <div
            class="fixed top-0 left-0 w-full h-[60vh] bg-linear-to-t from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 -z-10">
        </div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md" data-aos="fade-left">
            <a href="index.php" class="flex items-center space-x-2 mb-10 group">
                <span
                    class="text-3xl font-bold tracking-tighter text-primary dark:text-white flex items-center group-hover:opacity-80 transition-opacity">
                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Krist
                </span>
            </a>
            <h1 class="text-3xl font-bold mb-2 dark:text-white">Welcome 👋</h1>
            <p class="text-slate-500 mb-8">Please login here</p>
            <form id="loginForm" class="space-y-5" novalidate>
                <div>
                    <label class="block text-sm font-medium mb-1.5 text-slate-700 dark:text-slate-300">Email
                        Address</label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <input id="loginEmail" type="email"
                            class="w-full pl-10 pr-4 py-3 border border-slate-300 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow text-sm"
                            placeholder="you@example.com" required />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1.5 text-slate-700 dark:text-slate-300">Password</label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <input id="loginPass" type="password"
                            class="w-full pl-10 pr-12 py-3 border border-slate-300 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow text-sm"
                            placeholder="••••••••" required minlength="8" />
                        <button type="button" id="togglePass"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm"><input type="checkbox"
                            class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mr-2" /> Remember
                        me</label>
                    <a href="forgot-password.php"
                        class="text-sm font-medium text-primary dark:text-slate-300 hover:underline">Forgot
                        Password?</a>
                </div>
                <button type="submit"
                    class="w-full py-3 bg-primary text-white rounded-md font-semibold hover:bg-slate-800 transition-colors focus:ring-2 focus:ring-primary focus:ring-offset-2">Sign
                    In</button>
            </form>
            <p class="mt-8 text-center text-sm text-slate-500">Don't have an account? <a href="signup.php"
                    class="font-semibold text-primary dark:text-white hover:underline">Sign up</a></p>
            <p class="mt-6 text-center text-xs text-slate-400">© 2024 Krist Inc. All rights reserved.</p>
        </div>
    </div>

    <!-- Shared Body Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./src/components.js"></script>
    <script src="./src/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const emailInput = document.getElementById('loginEmail');
            const passInput = document.getElementById('loginPass');

            setupCapsLockDetection([emailInput, passInput]);
            setupPasswordToggle(document.getElementById('togglePass'), passInput);

            document.getElementById('loginForm').addEventListener('submit', (e) => {
                e.preventDefault();
                let valid = true;
                if (!V.email(emailInput.value.trim())) { showFieldError(emailInput, 'Please enter a valid email address'); valid = false; }
                if (!V.minLen(passInput.value, 8)) { showFieldError(passInput, 'Password must be at least 8 characters'); valid = false; }

                if (valid) {
                    showToast('Login successful!', 'success');
                    setTimeout(() => window.location.href = 'index.php', 1500);
                } else {
                    showToast('Please fix the errors', 'error');
                }
            });
        });
    </script>
</body>

</html>