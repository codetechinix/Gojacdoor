<?php
$pageTitle = "Coming Soon | GoJacDoors";
$pageDesc = "Something amazing is in the works! GoJacDoors is preparing to launch a premium collection of beautifully crafted luxury doors. Stay tuned for our grand opening.";
require_once 'includes/header.php';
?>

<!-- Minimalist Header Override (Hide normal nav on this specific page) -->
<style>
    /* Hide the primary navigation and top-bar specifically on the Coming Soon page to maximize focus */
    body>header {
        display: none !important;
    }

    body>footer {
        display: none !important;
    }

    /* Dedicated background and glassmorphism styling solely for the coming soon splash */
    .coming-soon-bg {
        background-color: #0f172a;
        /* Slate 900 base */
        background-image:
            radial-gradient(at 0% 0%, hsla(253, 16%, 7%, 1) 0, transparent 50%),
            radial-gradient(at 50% 0%, hsla(225, 39%, 30%, 0.2) 0, transparent 50%),
            radial-gradient(at 100% 0%, hsla(339, 49%, 30%, 0.15) 0, transparent 50%);
        background-attachment: fixed;
    }

    .glass-panel {
        background: rgba(15, 23, 42, 0.4);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
</style>

<main
    class="coming-soon-bg min-h-screen flex items-center justify-center relative overflow-hidden font-sans antialiased text-slate-300">

    <!-- Decorative abstract glowing orbs behind the main panel -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/20 rounded-full mix-blend-screen filter blur-[100px] opacity-50 animate-pulse"
        style="animation-duration: 4s;"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full mix-blend-screen filter blur-[100px] opacity-50 animate-pulse"
        style="animation-duration: 6s;"></div>

    <!-- Main Content Wrapper -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col items-center">

        <!-- Logo -->
        <a href="index.php" class="mb-12 inline-block transform hover:scale-105 transition-transform duration-300">
            <span class="text-3xl tracking-tight font-light text-white"><span class="font-bold">GOJAC</span>DOORS</span>
        </a>

        <!-- Glassmorphic Card -->
        <div class="glass-panel rounded-2xl p-8 md:p-14 max-w-2xl w-full text-center fade-in">

            <div
                class="inline-block mb-4 px-4 py-1.5 rounded-full bg-slate-800/50 border border-slate-700/50 text-xs font-semibold tracking-widest text-primary uppercase shadow-inner">
                Opening Soon
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 tracking-tight leading-tight">
                Crafting <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Elegance.</span><br />
                Arriving Shortly.
            </h1>

            <p class="text-lg md:text-xl text-slate-400 mb-10 leading-relaxed max-w-lg mx-auto">
                We are curating an exclusive collection of premium, handcrafted luxury doors designed to elevate any
                architectural space.
            </p>

            <!-- Newsletter Form -->
            <form class="max-w-md mx-auto relative group">
                <input type="email" placeholder="Enter your email to get notified..."
                    class="w-full bg-slate-900/50 border border-slate-700 text-white px-6 py-4 rounded-full outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-slate-500 shadow-inner"
                    required>
                <button type="submit"
                    class="absolute right-2 top-2 bottom-2 bg-primary hover:bg-primary/90 text-white px-6 font-medium rounded-full transition-colors flex items-center shadow-lg">
                    Notify Me
                </button>
            </form>

            <p class="text-sm text-slate-500 mt-4 flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8V7a4 4 0 00-8 0v4h8z">
                    </path>
                </svg>
                No spam. We promise.
            </p>
        </div>

        <!-- Social Links Footer (floating) -->
        <div class="mt-16 flex items-center justify-center space-x-6 text-slate-500">
            <a href="#" class="hover:text-white hover:scale-110 transition-all duration-300">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="hover:text-white hover:scale-110 transition-all duration-300">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="hover:text-white hover:scale-110 transition-all duration-300">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
        </div>

    </div>
</main>

<script>
    // Simple custom form submission handler to simulate success state without reloading
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();
        const btn = this.querySelector('button');
        const originalText = btn.innerText;
        btn.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Please wait...';
        btn.disabled = true;

        setTimeout(() => {
            btn.innerHTML = 'Subscribed!';
            btn.classList.replace('bg-primary', 'bg-emerald-500');
            btn.classList.replace('hover:bg-primary/90', 'hover:bg-emerald-600');
            this.querySelector('input').value = '';

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.replace('bg-emerald-500', 'bg-primary');
                btn.classList.replace('hover:bg-emerald-600', 'hover:bg-primary/90');
                btn.disabled = false;
            }, 3000);
        }, 1500);
    });
</script>

<?php
// Suppress standard footer to maintain clean standalone splash UI
// require_once 'includes/footer.php'; 
?>
<!-- Essential basic script inclusions for base functionality if needed -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    if (typeof AOS !== 'undefined') {
        AOS.init({ once: true, offset: 50, duration: 800 });
    }
</script>
</body>

</html>