<?php
$pageTitle = 'Krist - Enter OTP';
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
            <h2 class="text-white text-4xl font-bold mb-2">Verify Identity</h2>
            <p class="text-white/70 text-lg">One more step to go</p>
        </div>
        <div
            class="fixed top-0 left-0 w-full h-[60vh] bg-linear-to-t from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 -z-10">
        </div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md text-center" data-aos="fade-left">
            <a href="/index.php" class="flex items-center justify-center space-x-2 mb-10 group">
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
            <div
                class="w-20 h-20 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-primary dark:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold mb-2 dark:text-white">Enter OTP</h1>
            <p class="text-slate-500 mb-8">We have share a code to your registered email address</p>
            <form id="otpForm" class="space-y-6" novalidate>
                <div class="flex justify-center space-x-3">
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" autofocus />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                    <input class="otp-input" type="text" inputmode="numeric" maxlength="1" />
                </div>
                <button type="submit"
                    class="w-full py-3 bg-primary text-white rounded-md font-semibold hover:bg-slate-800 transition-colors focus:ring-2 focus:ring-primary focus:ring-offset-2">Verify</button>
            </form>
            <p class="mt-6 text-sm text-slate-500">Didn't receive code? <button
                    onclick="showToast('OTP resent!','success')"
                    class="font-semibold text-primary dark:text-white hover:underline">Resend OTP</button></p>
            <div class="mt-4 text-sm text-slate-400"><span id="timer">02:00</span></div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="/./assets/js/components.js"></script>
    <script src="/./assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setupOTPInputs();
            let t = 120; const ti = setInterval(() => { t--; const m = String(Math.floor(t / 60)).padStart(2, '0'), s = String(t % 60).padStart(2, '0'); document.getElementById('timer').textContent = m + ':' + s; if (t <= 0) clearInterval(ti); }, 1000);
            document.getElementById('otpForm').addEventListener('submit', e => {
                e.preventDefault();
                const vals = [...document.querySelectorAll('.otp-input')].map(i => i.value).join('');
                if (vals.length < 5) { showToast('Please enter complete OTP', 'error'); }
                else { showToast('Verified successfully!', 'success'); setTimeout(() => window.location.href = '/auth/login-success.php', 1500); }
            });
        });
    </script>
</body>

</html>