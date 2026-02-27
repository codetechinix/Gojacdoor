<?php
$pageTitle = 'Krist - Forgot Password';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex">
    <div class="hidden lg:flex lg:w-1/2 auth-image relative items-end p-12 overflow-hidden bg-slate-900">
        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop"
            class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity"
            alt="Fashion Background">
        <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
        <div class="relative z-10 w-full max-w-lg mb-8">
            <h2 class="text-white text-5xl font-black mb-4 uppercase tracking-tight">Recovery<br />Access</h2>
            <p class="text-white/80 text-lg font-medium">Reset your credentials to continue your premium shopping
                experience.</p>
        </div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md" data-aos="fade-left">
            <a href="/index.php" class="flex items-center space-x-2 mb-10 group">
                <span
                    class="text-3xl font-black tracking-tighter uppercase text-slate-900 dark:text-white flex items-center group-hover:opacity-80 transition-opacity">
                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Gojacdoors
                </span>
            </a>
            <h1 class="text-3xl font-bold mb-2 text-slate-900 dark:text-white">Forgot Password</h1>
            <p class="text-slate-500 mb-8 font-medium">Please enter your email address to receive a verification code.
            </p>
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
                    class="w-full py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white">Send
                    Code</button>
            </form>
            <p class="mt-8 text-center text-sm text-slate-500">Remember your password? <a href="/auth/login.php"
                    class="font-extrabold uppercase tracking-wider text-xs text-slate-900 dark:text-white hover:underline">Log
                    in here</a></p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/assets/js/modules/components.js"></script>
    <script src="/assets/js/core/main.js"></script>
</body>

</html>