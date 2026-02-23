<?php
$pageTitle = 'Krist - Page Not Found';
$activePage = '';
http_response_code(404);
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        /* Floating background shapes */
        .err-shape {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .err-shape-1 {
            width: 400px;
            height: 400px;
            top: -100px;
            left: -100px;
            animation: errFloat 20s ease-in-out infinite;
        }

        .err-shape-2 {
            width: 300px;
            height: 300px;
            bottom: -80px;
            right: -60px;
            animation: errFloat 15s ease-in-out infinite reverse;
        }

        .err-shape-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 70%;
            animation: errFloat 18s ease-in-out infinite 2s;
        }

        .err-shape-4 {
            width: 120px;
            height: 120px;
            border-radius: 30%;
            top: 20%;
            right: 15%;
            animation: errFloat 12s ease-in-out infinite 1s;
            transform: rotate(45deg);
        }

        @keyframes errFloat {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(30px, -40px) rotate(5deg);
            }

            50% {
                transform: translate(-20px, 20px) rotate(-3deg);
            }

            75% {
                transform: translate(15px, 30px) rotate(4deg);
            }
        }

        /* Glitch effect — monochrome */
        .err-code {
            font-size: clamp(8rem, 20vw, 14rem);
            font-weight: 800;
            line-height: 1;
            position: relative;
            display: inline-block;
            animation: errPulse 3s ease-in-out infinite;
        }

        .err-code::before,
        .err-code::after {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .err-code::before {
            color: #64748b;
            animation: errGlitch1 3s ease-in-out infinite;
            clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
        }

        .err-code::after {
            color: #94a3b8;
            animation: errGlitch2 3s ease-in-out infinite;
            clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
        }

        @keyframes errGlitch1 {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(-3px, 3px);
            }

            40% {
                transform: translate(3px, -2px);
            }

            60% {
                transform: translate(-2px, -3px);
            }

            80% {
                transform: translate(2px, 2px);
            }
        }

        @keyframes errGlitch2 {

            0%,
            100% {
                transform: translate(0);
            }

            20% {
                transform: translate(3px, -2px);
            }

            40% {
                transform: translate(-2px, 3px);
            }

            60% {
                transform: translate(3px, 2px);
            }

            80% {
                transform: translate(-3px, -2px);
            }
        }

        @keyframes errPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }
        }

        /* Animated underline — monochrome */
        .err-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #334155, #94a3b8);
            border-radius: 4px;
            margin: 0 auto;
            animation: errLineGrow 2s ease-in-out infinite;
        }

        @keyframes errLineGrow {

            0%,
            100% {
                width: 80px;
            }

            50% {
                width: 140px;
            }
        }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="grow relative overflow-hidden flex items-center justify-center py-20">
        <!-- Floating shapes — neutral grays -->
        <div class="err-shape err-shape-1 bg-slate-400/5 dark:bg-slate-500/5"></div>
        <div class="err-shape err-shape-2 bg-slate-500/5 dark:bg-slate-400/5"></div>
        <div class="err-shape err-shape-3 bg-gray-400/5 dark:bg-gray-500/5"></div>
        <div class="err-shape err-shape-4 bg-gray-500/5 dark:bg-gray-400/5"></div>

        <div class="text-center relative z-10 px-4 max-w-xl mx-auto">
            <div class="err-code text-slate-900 dark:text-white">404</div>
            <div class="err-line"></div>

            <h1 class="text-2xl md:text-3xl font-bold mt-6 mb-3">Page Not Found</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg leading-relaxed mb-8">
                Oops! The page you're looking for doesn't exist or has been moved. Try searching or head back home.
            </p>

            <!-- Search bar -->
            <form action="/search-results" method="GET"
                class="flex max-w-md mx-auto mb-8 rounded-sm overflow-hidden border border-slate-200 dark:border-slate-700">
                <input type="text" name="q" placeholder="Search for products, pages..."
                    class="flex-1 px-5 py-4 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm outline-none border-none font-sans"
                    autocomplete="off" />
                <button type="submit"
                    class="px-8 py-4 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 cursor-pointer">Search</button>
            </form>

            <!-- Buttons -->
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/"
                    class="inline-block bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-10 py-4 text-sm font-semibold tracking-wider uppercase hover:bg-slate-700 dark:hover:bg-slate-200 transition-all duration-300 rounded-sm">
                    Back to Home
                </a>
                <a href="javascript:history.back()"
                    class="inline-block px-10 py-4 text-sm font-semibold tracking-wider uppercase border-2 border-slate-900 dark:border-white text-slate-900 dark:text-white hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-slate-900 transition-all duration-300 rounded-sm">
                    Go Back
                </a>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>