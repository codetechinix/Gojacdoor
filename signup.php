<?php
$pageTitle = 'Krist - Sign Up';
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
            <h2 class="text-white text-4xl font-bold mb-2">Join Krist Today</h2>
            <p class="text-white/70 text-lg">Unlock exclusive fashion deals</p>
        </div>
        <div
            class="fixed top-0 left-0 w-full h-[60vh] bg-linear-to-t from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 -z-10">
        </div>
    </div>
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-screen overflow-y-auto no-scrollbar py-12" data-aos="fade-left">
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
            <h1 class="text-3xl font-bold mb-2 dark:text-white">Create Account</h1>
            <p class="text-slate-500 mb-8">Please enter your details</p>
            <form id="signupForm" class="space-y-5" novalidate>
                <div class="space-y-4">
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <input id="firstName" type="text"
                            class="w-full pl-10 pr-4 py-3 border border-slate-300 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow text-sm"
                            placeholder="First Name" required minlength="2" />
                    </div>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 w-5 h-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <input id="lastName" type="text"
                            class="w-full pl-10 pr-4 py-3 border border-slate-300 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary outline-none transition-shadow text-sm"
                            placeholder="Last Name" required minlength="2" />
                    </div>
                </div>
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
                        <input id="signupEmail" type="email"
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
                        <input id="signupPass" type="password"
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
                    <ul class="text-xs text-slate-500 mt-2 space-y-1 pl-1">
                        <li id="req-len" class="flex items-center"><span
                                class="material-symbols-outlined text-[14px] mr-1">close</span> At least 8 characters
                        </li>
                        <li id="req-num" class="flex items-center"><span
                                class="material-symbols-outlined text-[14px] mr-1">close</span> Contains a number</li>
                    </ul>
                </div>
                <div class="flex items-start py-2">
                    <input id="terms" type="checkbox"
                        class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary mt-1 mr-3" required />
                    <label for="terms" class="text-sm text-slate-600 dark:text-slate-400">I agree to the <a href="#"
                            class="text-primary hover:underline font-medium">Terms & Conditions</a> and <a href="#"
                            class="text-primary hover:underline font-medium">Privacy Policy</a></label>
                </div>
                <button type="submit"
                    class="w-full py-3 bg-primary text-white rounded-md font-semibold hover:bg-primary-dark transition-colors focus:ring-2 focus:ring-primary focus:ring-offset-2">Create
                    Account</button>
            </form>
            <p class="mt-8 text-center text-sm text-slate-500">Already have an account? <a href="login.php"
                    class="font-semibold text-primary dark:text-white hover:underline">Log In</a></p>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./src/components.js"></script>
    <script src="./src/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pass = document.getElementById('signupPass');
            const email = document.getElementById('signupEmail');
            const fname = document.getElementById('firstName');
            const lname = document.getElementById('lastName');
            const terms = document.getElementById('terms');

            setupPasswordToggle(document.getElementById('toggleSignupPass'), pass);
            setupCapsLockDetection([email, pass, fname, lname]);

            // Password strength meter
            pass.addEventListener('input', () => {
                const v = pass.value;
                const rLen = document.getElementById('req-len');
                const rNum = document.getElementById('req-num');

                if (v.length >= 8) { rLen.classList.replace('text-slate-500', 'text-green-500'); rLen.querySelector('span').textContent = 'check'; }
                else { rLen.classList.replace('text-green-500', 'text-slate-500'); rLen.querySelector('span').textContent = 'close'; }

                if (/\d/.test(v)) { rNum.classList.replace('text-slate-500', 'text-green-500'); rNum.querySelector('span').textContent = 'check'; }
                else { rNum.classList.replace('text-green-500', 'text-slate-500'); rNum.querySelector('span').textContent = 'close'; }
            });

            document.getElementById('signupForm').addEventListener('submit', (e) => {
                e.preventDefault();
                let valid = true;
                if (!fname.value.trim()) { showFieldError(fname, 'First name required'); valid = false; }
                if (!lname.value.trim()) { showFieldError(lname, 'Last name required'); valid = false; }
                if (!V.email(email.value.trim())) { showFieldError(email, 'Valid email required'); valid = false; }
                if (pass.value.length < 8 || !/\d/.test(pass.value)) { showFieldError(pass, 'Password does not meet requirements'); valid = false; }
                if (!terms.checked) { showToast('You must agree to the T&Cs', 'error'); valid = false; }

                if (valid) {
                    showToast('Account created successfully!', 'success');
                    setTimeout(() => window.location.href = 'index.php', 1500);
                }
            });
        });
    </script>
</body>

</html>