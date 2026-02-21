<?php
$pageTitle = 'Krist - Forgot Password';
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
            <h2 class="text-white text-4xl font-bold mb-2">Reset Password</h2>
            <p class="text-white/70 text-lg">Secure your account</p>
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
            <h1 class="text-3xl font-bold mb-2 dark:text-white">Forgot Password</h1>
            <p class="text-slate-500 mb-8">Please enter your email address to receive a verification code.</p>
            <form id="forgotForm" class="space-y-6" novalidate>
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
                        <input id="forgotEmail" type="email"
                            class="w-full pl-10 pr-4 py-3 border border-slate-300 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow text-sm"
                            placeholder="you@example.com" required autofocus />
                    </div>
                </div>
                <button type="submit"
                    class="w-full py-3 bg-primary text-white rounded-md font-semibold hover:bg-slate-800 transition-colors focus:ring-2 focus:ring-primary focus:ring-offset-2">Send
                    Code</button>
            </form>
            <p class="mt-8 text-center text-sm text-slate-500">Remember your password? <a href="login.php"
                    class="font-semibold text-primary dark:text-white hover:underline">Log in here</a></p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./src/components.js"></script>
    <script src="./src/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('forgotForm').addEventListener('submit', (e) => {
                e.preventDefault();
                const email = document.getElementById('forgotEmail');
                if (!V.email(email.value.trim())) { showFieldError(email, 'Please enter a valid email address'); }
                else { showToast('Verification code sent!', 'success'); setTimeout(() => window.location.href = 'enter-otp.php', 1500); }
            });
        });
    </script>
</body>

</html>