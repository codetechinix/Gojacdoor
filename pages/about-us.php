<?php
$pageTitle = 'Krist - About Us';
$activePage = '';
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body
    class="bg-slate-50 dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans min-h-screen flex flex-col">
    <?php include '../includes/header.php'; ?>

    <main class="grow container mx-auto px-4 md:px-8 py-12 max-w-4xl">
        <div id="breadcrumb" class="mb-8"></div>

        <div class="bg-white dark:bg-slate-900 rounded-2xl p-8 md:p-12 shadow-modern dark:shadow-modern-dark border border-slate-100 dark:border-slate-800"
            data-aos="fade-up">
            <h1 class="text-4xl font-bold mb-6 font-display">Our Story</h1>

            <div class="prose dark:prose-invert max-w-none space-y-6 text-slate-600 dark:text-slate-400">
                <p class="text-lg leading-relaxed">
                    Founded in 2020, Krist was born out of a simple belief: fashion should be accessible, high-quality,
                    and deeply expressive. What started as a small capsule collection in a cramped Los Angeles studio
                    has blossomed into a global brand reaching customers across 50 countries.
                </p>

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC6gS7i2l8oV17Q9T813xYZc1Yv0-p9C9lQ5hI7V1bO7OaCg5eU12QyqR0-I7x-W52HnC0qT4_rM9_t8W7D8_QY_B2aA_rN-J9x7iA12V2O4aX9dJdZ6x2QzLqA9T6eY-wE6m1Lw4Z2t_9F9IqQQkKq5VwWp6wH6C-I-L-9U1C9KqZ4K"
                    alt="Krist Team" class="w-full h-[400px] object-cover rounded-xl my-8">

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Our Mission</h3>
                <p>
                    We are on a mission to empower individuals to feel confident in their own skin by providing
                    carefully curated, expertly crafted apparel that bridges the gap between contemporary trends and
                    timeless elegance. We believe that what you wear is how you present yourself to the world, and we
                    want to help you make a statement.
                </p>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Sustainable Practices</h3>
                <p>
                    We know that the fashion industry has an impact on the planet, which is why we are committed to
                    moving towards fully sustainable sourcing by 2030. Currently, 40% of our collections are made from
                    recycled or sustainably sourced materials. We work closely with ethically certified factories to
                    ensure fair wages and safe working conditions.
                </p>

                <div class="bg-primary/5 border-l-4 border-primary p-6 rounded-r-lg my-8">
                    <p class="text-lg font-medium text-slate-900 dark:text-white italic m-0">
                        "Fashion is not something that exists in dresses only. Fashion is in the sky, in the street,
                        fashion has to do with ideas, the way we live, what is happening."
                    </p>
                </div>

                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-8 mb-4">Meet The Team</h3>
                <p>
                    Our diverse team of designers, tailors, and customer experience specialists is dedicated to bringing
                    you the best. With a shared passion for design and an eye for detail, the Krist team works
                    tirelessly behind the scenes to continually elevate the brand experience.
                </p>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('breadcrumb').innerHTML = renderBreadcrumb([
                { label: 'About Us', active: true }
            ]);
        });
    </script>
</body>

</html>