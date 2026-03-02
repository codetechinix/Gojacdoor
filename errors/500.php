<?php
$pageTitle = 'Gojacdoors - Server Error';
$activePage = '';
http_response_code(500);
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        /* Stuttering gear animation */
        .gear-wrap {
            position: relative;
            width: 130px;
            height: 130px;
        }

        .gear-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: gearStutter 2s ease-in-out infinite;
            filter: drop-shadow(0 0 15px rgba(100, 116, 139, 0.2));
        }

        .gear-icon-2 {
            position: absolute;
            top: 10px;
            right: 5px;
            opacity: 0.4;
            animation: gearReverse 2.5s ease-in-out infinite;
        }

        @keyframes gearStutter {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            10% {
                transform: translate(-50%, -50%) rotate(30deg);
            }

            15% {
                transform: translate(-50%, -50%) rotate(25deg);
            }

            25% {
                transform: translate(-50%, -50%) rotate(60deg);
            }

            30% {
                transform: translate(-50%, -50%) rotate(55deg);
            }

            50% {
                transform: translate(-50%, -50%) rotate(120deg);
            }

            55% {
                transform: translate(-50%, -50%) rotate(115deg);
            }

            70% {
                transform: translate(-50%, -50%) rotate(200deg);
            }

            75% {
                transform: translate(-50%, -50%) rotate(195deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes gearReverse {
            0% {
                transform: rotate(0deg);
            }

            15% {
                transform: rotate(-35deg);
            }

            20% {
                transform: rotate(-30deg);
            }

            50% {
                transform: rotate(-130deg);
            }

            55% {
                transform: rotate(-125deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }

        /* Shaking digits */
        .shake-char {
            display: inline-block;
            animation: charShake 0.5s ease-in-out infinite alternate;
        }

        .shake-char:nth-child(2) {
            animation-delay: 0.1s;
        }

        .shake-char:nth-child(3) {
            animation-delay: 0.2s;
        }

        @keyframes charShake {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-4px);
            }
        }

        /* Floating dots */
        .err-dot {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .ed1 {
            width: 8px;
            height: 8px;
            top: 12%;
            left: 15%;
            animation: dotFloat 7s ease-in-out infinite;
        }

        .ed2 {
            width: 12px;
            height: 12px;
            top: 65%;
            right: 12%;
            animation: dotFloat 9s ease-in-out infinite 1s;
        }

        .ed3 {
            width: 6px;
            height: 6px;
            bottom: 18%;
            left: 25%;
            animation: dotFloat 11s ease-in-out infinite 2s;
        }

        .ed4 {
            width: 10px;
            height: 10px;
            top: 35%;
            right: 30%;
            animation: dotFloat 8s ease-in-out infinite 0.5s;
        }

        .ed5 {
            width: 5px;
            height: 5px;
            top: 80%;
            left: 60%;
            animation: dotFloat 10s ease-in-out infinite 1.5s;
        }

        @keyframes dotFloat {

            0%,
            100% {
                transform: translateY(0) scale(1);
                opacity: 0.15;
            }

            50% {
                transform: translateY(-20px) scale(1.5);
                opacity: 0.35;
            }
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="grow relative overflow-hidden flex items-center justify-center py-20">
        <!-- Floating dots — neutral -->
        <div class="err-dot ed1 bg-slate-400/20"></div>
        <div class="err-dot ed2 bg-slate-400/20"></div>
        <div class="err-dot ed3 bg-slate-400/20"></div>
        <div class="err-dot ed4 bg-slate-400/20"></div>
        <div class="err-dot ed5 bg-slate-400/20"></div>

        <div class="text-center relative z-10 px-4 max-w-xl mx-auto">
            <!-- Animated gears -->
            <div class="gear-wrap mx-auto mb-6">
                <svg class="gear-icon w-20 h-20 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <svg class="gear-icon-2 w-12 h-12 text-slate-500 dark:text-slate-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>

            <h2 class="text-6xl md:text-7xl font-extrabold text-slate-900 dark:text-white mb-2">
                <span class="shake-char">5</span><span class="shake-char">0</span><span class="shake-char">0</span>
            </h2>
            <div class="w-16 h-1 bg-gradient-to-r from-slate-400 to-slate-600 rounded-full mx-auto my-4"></div>
            <h1 class="text-2xl md:text-3xl font-bold mb-3">Something Went Wrong</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg leading-relaxed mb-8">
                Our servers are having a moment. We're already working on fixing this. Please try again in a few
                moments.
            </p>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/javascript:location.reload()"
                    class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm">
                    Try Again
                </a>
                <a href="/"
                    class="inline-block px-10 py-4 text-sm font-semibold tracking-wider uppercase border-2 border-slate-900 dark:border-white text-slate-900 dark:text-white hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-slate-900 transition-all duration-300 rounded-sm">
                    Back to Home
                </a>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>