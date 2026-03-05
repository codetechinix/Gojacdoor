<?php
$pageTitle = 'Gojacdoors - Our Projects';
$activePage = 'projects';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 font-sans transition-colors duration-300 overflow-x-hidden">
    <?php include '../includes/header.php'; ?>

    <main class="transition-colors duration-500 min-h-screen">
        <!-- Hero Section -->
        <section class="relative h-[45vh] md:h-[55vh] flex items-center justify-center overflow-hidden bg-slate-900">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1511285227749-e58849c6933c?q=80&w=1920&auto=format&fit=crop"
                    class="w-full h-full object-cover opacity-50" alt="Projects Hero">
                <div class="absolute inset-0 bg-linear-to-b from-slate-950/20 via-slate-950/60 to-slate-950"></div>
            </div>
            <div class="container mx-auto px-4 md:px-12 py-20 md:py-32 relative z-10 text-center" data-aos="zoom-out">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] md:text-xs font-bold uppercase tracking-[0.3em] mb-6">Portfolio</span>
                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tighter mb-6 uppercase italic">
                    Our <span class="text-transparent border-text-white">Masterpieces</span>
                </h1>
                <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto font-medium tracking-wide">
                    Experience the perfect blend of security and elegance through our curated selection of door
                    installations.
                </p>
            </div>
        </section>

        <!-- Project Gallery -->
        <section class="py-20 md:py-32 bg-slate-50 dark:bg-slate-950 relative">
            <div class="container mx-auto px-4 md:px-12">
                <!-- Filters -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-20 gap-8">
                    <div class="text-center md:text-left" data-aos="fade-right">
                        <h2
                            class="text-4xl md:text-6xl font-black text-slate-900 dark:text-white tracking-tighter uppercase italic leading-none mb-2">
                            Curated <span class="text-primary italic">Works</span>
                        </h2>
                        <p class="text-slate-500 dark:text-slate-400 font-medium uppercase tracking-widest text-[10px]">
                            Filter by environment</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-3 p-1.5 bg-white dark:bg-slate-900 rounded-full shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-800"
                        data-aos="fade-left">
                        <button
                            class="filter-btn active px-8 py-3 rounded-full text-xs font-black uppercase tracking-widest transition-all duration-300"
                            data-filter="all">All</button>
                        <button
                            class="filter-btn px-8 py-3 rounded-full text-xs font-black uppercase tracking-widest transition-all duration-300 text-slate-400 hover:text-slate-900 dark:hover:text-white"
                            data-filter="commercial">Commercial</button>
                        <button
                            class="filter-btn px-8 py-3 rounded-full text-xs font-black uppercase tracking-widest transition-all duration-300 text-slate-400 hover:text-slate-900 dark:hover:text-white"
                            data-filter="residential">Residential</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12" id="projectsGrid">
                    <!-- Project 1 -->
                    <div class="project-item residential group relative overflow-hidden rounded-[2.5rem] bg-white dark:bg-slate-900 p-4 border border-slate-100 dark:border-slate-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
                        data-aos="fade-up">
                        <div class="aspect-4/5 overflow-hidden rounded-4xl relative">
                            <img src="https://images.unsplash.com/photo-1515320348231-5dc0709ee06f?q=80&w=800&auto=format&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Modern Villa Entry">
                            <div class="absolute top-6 left-6 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Entrance</span>
                                <span
                                    class="px-3 py-1 bg-primary rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Mahogany</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-end">
                            <div>
                                <h4
                                    class="text-2xl font-black text-slate-900 dark:text-white tracking-tight uppercase italic leading-none mb-1">
                                    Villa Modern</h4>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    Hilltop Residence, Lagos</p>
                            </div>
                            <button
                                class="view-project-btn w-12 h-12 rounded-full border-2 border-slate-900 dark:border-white flex items-center justify-center group/btn hover:bg-slate-900 dark:hover:bg-white transition-all duration-300"
                                data-project='{"title": "Villa Modern Entrance", "location": "Hilltop Residence, Lagos", "client": "Private Resident", "material": "High-Grade Mahogany", "hardware": "Smart Hub Biometric", "description": "A bespoke 8ft mahogany pivot door installed in a luxury hilltop residence, featuring reinforced core and smart locking integration. The wood was curated for its deep grain patterns.", "images": ["https://images.unsplash.com/photo-1515320348231-5dc0709ee06f?q=80&w=1200", "https://images.unsplash.com/photo-1511285227749-e58849c6933c?q=80&w=1200"]}'>
                                <svg class="w-5 h-5 text-slate-900 dark:text-white group-hover/btn:text-white dark:group-hover/btn:text-slate-900"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-item commercial group relative overflow-hidden rounded-[2.5rem] bg-white dark:bg-slate-900 p-4 border border-slate-100 dark:border-slate-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="aspect-4/5 overflow-hidden rounded-4xl relative">
                            <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?q=80&w=800&auto=format&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Industrial Loft Sliders">
                            <div class="absolute top-6 left-6 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Sliding</span>
                                <span
                                    class="px-3 py-1 bg-slate-900 rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Industrial</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-end">
                            <div>
                                <h4
                                    class="text-2xl font-black text-slate-900 dark:text-white tracking-tight uppercase italic leading-none mb-1">
                                    Loft Sliders</h4>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    Tech Hub HQ, Abuja</p>
                            </div>
                            <button
                                class="view-project-btn w-12 h-12 rounded-full border-2 border-slate-900 dark:border-white flex items-center justify-center group/btn hover:bg-slate-900 dark:hover:bg-white transition-all duration-300"
                                data-project='{"title": "Tech Hub Loft Sliders", "location": "Tech Hub HQ, Abuja", "client": "ScaleTech Global", "material": "Powder-coated Steel & Tempered Glass", "hardware": "Soft-close Industrial Rail", "description": "Custom industrial glass and steel sliding dividers designed for an open-concept office space. These doors provide sound insulation without losing the visual flow of the workspace.", "images": ["https://images.unsplash.com/photo-1481277542470-605612bd2d61?q=80&w=1200"]}'>
                                <svg class="w-5 h-5 text-slate-900 dark:text-white group-hover/btn:text-white dark:group-hover/btn:text-slate-900"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-item residential group relative overflow-hidden rounded-[2.5rem] bg-white dark:bg-slate-900 p-4 border border-slate-100 dark:border-slate-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="aspect-4/5 overflow-hidden rounded-4xl relative">
                            <img src="https://images.unsplash.com/photo-1533158326339-7f3cf2404354?q=80&w=800&auto=format&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Classic Interior Haven">
                            <div class="absolute top-6 left-6 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Interior</span>
                                <span
                                    class="px-3 py-1 bg-primary rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Oak</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-end">
                            <div>
                                <h4
                                    class="text-2xl font-black text-slate-900 dark:text-white tracking-tight uppercase italic leading-none mb-1">
                                    Classic Oaks</h4>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    Victorian Estates, VI</p>
                            </div>
                            <button
                                class="view-project-btn w-12 h-12 rounded-full border-2 border-slate-900 dark:border-white flex items-center justify-center group/btn hover:bg-slate-900 dark:hover:bg-white transition-all duration-300"
                                data-project='{"title": "Classic Oak Interiors", "location": "Victorian Estates, Victoria Island", "client": "Heritage Homes", "material": "Solid White Oak", "hardware": "Antique Brass Handles", "description": "Installation of 12 internal white primed oak doors featuring custom antique brass handles. The project required perfect matching of existing historical woodwork.", "images": ["https://images.unsplash.com/photo-1533158326339-7f3cf2404354?q=80&w=1200"]}'>
                                <svg class="w-5 h-5 text-slate-900 dark:text-white group-hover/btn:text-white dark:group-hover/btn:text-slate-900"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Project 4 (Wide) -->
                    <div class="project-item commercial md:col-span-2 group relative overflow-hidden rounded-[2.5rem] bg-white dark:bg-slate-900 p-4 border border-slate-100 dark:border-slate-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
                        data-aos="fade-up">
                        <div class="aspect-video md:aspect-21/9 overflow-hidden rounded-4xl relative">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Gojac HQ Security Entrance">
                            <div class="absolute top-6 left-6 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Security</span>
                                <span
                                    class="px-3 py-1 bg-red-600 rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Reinforced
                                    Steel</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-end">
                            <div>
                                <h4
                                    class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white tracking-tight uppercase italic leading-none mb-1">
                                    Gojac HQ Fortress</h4>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    Main Plaza, Lekki</p>
                            </div>
                            <button
                                class="view-project-btn w-12 h-12 rounded-full border-2 border-slate-900 dark:border-white flex items-center justify-center group/btn hover:bg-slate-900 dark:hover:bg-white transition-all duration-300"
                                data-project='{"title": "Gojac HQ Security Fortress", "location": "Main Plaza, Lekki", "client": "Gojac Global", "material": "Ballistic-rated Steel & Safety Glass", "hardware": "Triple-stage Biometric Lock", "description": "A high-security reinforced steel entrance system with biometric integration. Designed for maximum security while maintaining a minimalist and modern facade.", "images": ["https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200"]}'>
                                <svg class="w-5 h-5 text-slate-900 dark:text-white group-hover/btn:text-white dark:group-hover/btn:text-slate-900"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="project-item residential group relative overflow-hidden rounded-[2.5rem] bg-white dark:bg-slate-900 p-4 border border-slate-100 dark:border-slate-800 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
                        data-aos="fade-up">
                        <div class="aspect-4/5 overflow-hidden rounded-4xl relative">
                            <img src="https://images.unsplash.com/photo-1490122417551-6ee9691429d0?q=80&w=800&auto=format&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Geometric Pivot Door">
                            <div class="absolute top-6 left-6 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Pivot</span>
                                <span
                                    class="px-3 py-1 bg-primary rounded-full text-[10px] font-bold text-white uppercase tracking-wider">Walnut</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-end">
                            <div>
                                <h4
                                    class="text-2xl font-black text-slate-900 dark:text-white tracking-tight uppercase italic leading-none mb-1">
                                    The Pivot Art</h4>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    Banana Island</p>
                            </div>
                            <button
                                class="view-project-btn w-12 h-12 rounded-full border-2 border-slate-900 dark:border-white flex items-center justify-center group/btn hover:bg-slate-900 dark:hover:bg-white transition-all duration-300"
                                data-project='{"title": "The Geometric Walnut Pivot", "location": "Banana Island, Lagos", "client": "Private Collector", "material": "Imported American Walnut", "hardware": "Floor-spring Pivot Hinge", "description": "A stunning walnut pivot door with geometric glass inserts, creating a play of light and shadow in the grand foyer. This door weighs over 150kg but operates with the touch of a finger.", "images": ["https://images.unsplash.com/photo-1490122417551-6ee9691429d0?q=80&w=1200"]}'>
                                <svg class="w-5 h-5 text-slate-900 dark:text-white group-hover/btn:text-white dark:group-hover/btn:text-slate-900"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 md:py-32 relative overflow-hidden">
            <div class="absolute inset-0 bg-slate-950">
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1920&auto=format&fit=crop"
                    class="w-full h-full object-cover opacity-20 filter grayscale" alt="Footer CTA BG">
                <div class="absolute inset-0 bg-linear-to-b from-slate-950/20 via-slate-950/70 to-slate-950"></div>
            </div>
            <div class="container mx-auto px-4 md:px-12 relative z-10">
                <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] md:text-xs font-bold uppercase tracking-[0.3em] mb-6">Let's
                        Connect</span>
                    <h2
                        class="text-4xl md:text-6xl lg:text-7xl font-black text-white tracking-tighter uppercase italic mb-8 leading-none">
                        Ready to <span class="text-transparent border-text-white">Transform</span> Your
                        Space?
                    </h2>
                    <p class="text-slate-300 text-lg md:text-xl mb-12 font-medium max-w-2xl mx-auto">Get in touch with
                        our design team for
                        a consultation on your next architectural masterpiece.</p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                        <a href="/pages/contact.php"
                            class="w-full sm:w-auto px-10 py-4 md:py-5 bg-white text-slate-900 rounded-full font-black uppercase tracking-widest text-xs md:text-sm hover:-translate-y-1 hover:shadow-2xl hover:bg-primary hover:text-white transition-all duration-300 flex items-center justify-center gap-3">
                            <span>Start a Consultation</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="/shop.php"
                            class="w-full sm:w-auto px-10 py-4 md:py-5 border-2 border-white/20 text-white rounded-full font-black uppercase tracking-widest text-xs md:text-sm hover:-translate-y-1 hover:shadow-2xl hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-md flex items-center justify-center gap-3">
                            <span>Explore Products</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Project Details Modal -->
    <div id="projectModal"
        class="fixed inset-0 z-9999 opacity-0 pointer-events-none transition-all duration-500 flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-lg modal-close"></div>
        <div class="relative bg-white dark:bg-slate-900 w-full max-w-6xl max-h-[90vh] rounded-[3rem] overflow-hidden shadow-2xl translate-y-20 transition-transform duration-500 border border-white/10"
            id="modalContent">
            <button
                class="absolute top-8 right-8 z-20 w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all modal-close">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <div class="grid grid-cols-1 lg:grid-cols-2 h-full overflow-y-auto lg:overflow-hidden lg:max-h-[80vh]">
                <div class="relative h-[400px] lg:h-full bg-slate-100">
                    <img id="modalMainImg" src="" class="w-full h-full object-cover" alt="Main Project Image">
                    <div class="absolute bottom-8 left-8 flex gap-3" id="modalThumbnails">
                        <!-- Thumbs injected by JS -->
                    </div>
                </div>
                <div class="p-8 md:p-16 flex flex-col justify-center overflow-y-auto">
                    <span id="modalLocation"
                        class="text-primary text-xs font-black uppercase tracking-[0.3em] mb-4 block">Location</span>
                    <h3 id="modalTitle"
                        class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white tracking-tighter uppercase italic leading-[0.9] mb-8">
                        Project Title</h3>

                    <div class="grid grid-cols-2 gap-8 mb-12 py-8 border-y border-slate-100 dark:border-slate-800">
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-1">Material</p>
                            <p id="modalMaterial" class="text-sm font-bold text-slate-900 dark:text-white uppercase">
                                Mahogany</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-1">Hardware</p>
                            <p id="modalHardware" class="text-sm font-bold text-slate-900 dark:text-white uppercase">
                                Biometric Hub</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-1">Client</p>
                            <p id="modalClient" class="text-sm font-bold text-slate-900 dark:text-white uppercase">
                                Private</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-1">Status</p>
                            <p class="text-sm font-bold text-green-500 uppercase flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                Completed
                            </p>
                        </div>
                    </div>

                    <p id="modalDesc" class="text-slate-600 dark:text-slate-400 leading-relaxed mb-10 text-lg">
                        Detailed project description goes here...
                    </p>

                    <a href="/pages/contact.php"
                        class="w-full py-4 md:py-5 bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-center rounded-full font-black uppercase tracking-widest text-xs md:text-sm hover:-translate-y-1 hover:shadow-2xl hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300 flex items-center justify-center gap-3">
                        <span>Inquire About Similar Design</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles injected for Filter and Border-Text -->
    <style>
        .border-text-white {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.4);
            color: transparent;
        }

        .filter-btn.active {
            background-color: #0F172A;
            color: white;
        }

        .dark .filter-btn.active {
            background-color: white;
            color: #0F172A;
        }

        .project-item.hidden {
            display: none;
        }
    </style>

    <?php include '../includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof initProjects === 'function') initProjects();
        });
    </script>
</body>

</html>