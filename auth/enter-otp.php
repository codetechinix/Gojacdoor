<?php
$pageTitle = 'Krist - Enter OTP';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex">
    <div class="hidden lg:flex lg:w-1/2 auth-image relative items-end p-12 overflow-hidden bg-slate-900">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=2070&auto=format&fit=crop"
            class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity"
            alt="Fashion Background">
        <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
        <div class="relative z-10 w-full max-w-lg mb-8">
            <h2 class="text-white text-5xl font-black mb-4 uppercase tracking-tight">Identity<br />Verified</h2>
            <p class="text-white/80 text-lg font-medium">Protecting your access to the ultimate wardrobe.</p>
        </div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md text-center" data-aos="fade-left">
            <a href="/index.php" class="flex items-center justify-center space-x-2 mb-10 group">
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
            <div
                class="w-20 h-20 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-slate-900 dark:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold mb-2 text-slate-900 dark:text-white">Enter OTP</h1>
            <p class="text-slate-500 mb-8 font-medium">We have shared a code to your registered email address</p>
            <form id="otpForm" class="space-y-6" novalidate>
                <div class="flex justify-center space-x-3">
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" autofocus />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                </div>
                <button type="submit"
                    class="w-full py-4 text-sm tracking-widest uppercase bg-slate-900 border-2 border-slate-900 text-white rounded-full font-bold hover:bg-transparent hover:text-slate-900 transition-all duration-300 focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 dark:bg-white dark:border-white dark:text-slate-900 dark:hover:bg-transparent dark:hover:text-white">Verify</button>
            </form>
            <p class="mt-6 text-sm text-slate-500">Didn't receive code? <button
                    onclick="showToast('OTP resent!','success')"
                    class="font-extrabold uppercase tracking-wider text-xs text-slate-900 dark:text-white hover:underline">Resend
                    OTP</button></p>
            <div class="mt-4 text-sm font-bold text-slate-900 dark:text-white"><span id="timer">02:00</span></div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="/assets/js/modules/components.js"></script>
    <script src="/assets/js/core/main.js"></script>
</body>

</html>