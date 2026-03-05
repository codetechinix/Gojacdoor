<?php
$pageTitle = 'Gojacdoors - Access Forbidden';
$activePage = '';
http_response_code(403);
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        /* Pulse ring effect — monochrome */
        .shield-wrap {
            position: relative;
            width: 140px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .shield-wrap::before,
        .shield-wrap::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            border: 2px solid rgba(100, 116, 139, 0.3);
            animation: shieldPulse 2.5s ease-out infinite;
        }

        .shield-wrap::before {
            width: 100%;
            height: 100%;
        }

        .shield-wrap::after {
            width: 130%;
            height: 130%;
            animation-delay: 0.5s;
        }

        @keyframes shieldPulse {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(1.4);
                opacity: 0;
            }
        }

        .shield-icon {
            animation: shieldBounce 3s ease-in-out infinite;
            filter: drop-shadow(0 0 20px rgba(100, 116, 139, 0.2));
        }

        @keyframes shieldBounce {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }
        }

        /* Floating particles */
        .err-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            pointer-events: none;
        }

        .ep1 {
            top: 15%;
            left: 10%;
            animation: errDrift 8s ease-in-out infinite;
        }

        .ep2 {
            top: 70%;
            left: 80%;
            animation: errDrift 12s ease-in-out infinite reverse;
            width: 6px;
            height: 6px;
        }

        .ep3 {
            top: 30%;
            right: 20%;
            animation: errDrift 10s ease-in-out infinite 1s;
        }

        .ep4 {
            bottom: 20%;
            left: 30%;
            animation: errDrift 9s ease-in-out infinite 2s;
            width: 5px;
            height: 5px;
        }

        .ep5 {
            top: 50%;
            right: 10%;
            animation: errDrift 11s ease-in-out infinite 0.5s;
        }

        @keyframes errDrift {

            0%,
            100% {
                transform: translate(0, 0);
                opacity: 0.3;
            }

            25% {
                transform: translate(20px, -30px);
                opacity: 0.8;
            }

            50% {
                transform: translate(-15px, 10px);
                opacity: 0.4;
            }

            75% {
                transform: translate(25px, 20px);
                opacity: 0.7;
            }
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="grow relative overflow-hidden flex items-center justify-center py-20">
        <!-- Floating particles — neutral -->
        <div class="err-particle ep1 bg-slate-500/20"></div>
        <div class="err-particle ep2 bg-slate-500/20"></div>
        <div class="err-particle ep3 bg-slate-500/20"></div>
        <div class="err-particle ep4 bg-slate-500/20"></div>
        <div class="err-particle ep5 bg-slate-500/20"></div>

        <div class="text-center relative z-10 px-4 max-w-xl mx-auto">
            <!-- Pulsing shield icon -->
            <div class="shield-wrap mx-auto mb-8">
                <svg class="shield-icon w-[72px] h-[72px] text-slate-600 dark:text-slate-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 15v.01M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>

            <h2 class="text-6xl md:text-7xl font-extrabold text-slate-900 dark:text-white mb-2">403</h2>
            <div class="w-16 h-1 bg-gradient-to-r from-slate-400 to-slate-600 rounded-full mx-auto my-4"></div>
            <h1 class="text-2xl md:text-3xl font-bold mb-3">Access Forbidden</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg leading-relaxed mb-8">
                You don't have permission to access this resource. If you believe this is an error, please contact
                support or try logging in.
            </p>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/login"
                    class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm">
                    Log In
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