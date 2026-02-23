# Gojacdoors: Technical Documentation & Refactoring History

This document outlines the technical specifications and the comprehensive refactoring history for the Gojacdoors e-commerce storefront.

## Phase 1: Global UI & Design Standardization

- **Color Palette Update:** Reverted from the pink primary color to a sophisticated black, white, and gray palette for a more premium, modern feel.
- **Iconography Migration:** Systematically removed all dependencies on Google Material Symbols and replaced them with inline SVG Heroicons across the entire project (header, footer, product cards, account pages, etc.). This reduced external requests and improved rendering consistency.
- **Button Standardization:** Updated all buttons and input fields to use a consistent `rounded-md` border radius, moving away from a mix of pill-shaped and sharp corners. Applied consistent hover states and shadow effects.
- **Navigation Enhancements:**
  - Applied solid, opaque backgrounds to the header and mega menu for better readability against complex backgrounds.
  - Updated header icons (search, wishlist, cart, user) to Heroicons.
  - Refactored the mobile menu toggle logic and icons.
  - Upgraded the "Shop" desktop navigation into an interactive CSS-only dropdown `.group/link` structure with animated hover elements and solved underlying layout shift bugs.
- **Homepage UI Revamp:**
  - Standardized background utility classes (e.g. `bg-gray-50`, `bg-[#F3F3F3]`) to replicate the Stitch-inspired flat, premium flat design tone.
  - Restructured the 'Categories' grid to enforce a 400px fixed height array, featuring an internal CSS gradient sweep `bg-linear-to-t from-black/60 to-transparent` to ensure absolute-positioned UI contrast over variable product photos.
  - Flattened 'Testimonials' cards, removing transparent glassmorphism borders in favor of opaque styling, Left-aligned avatar blocks for improved reading cadence.
- **Product Card Architecture:**
  - Extended `components.js` `renderProductCard` templates adding a dual Y-axis structural transformation system via `.group-hover:translate-y-0` for 'Add to Cart' overlays anchored to the bottom.
  - Injected an X-axis structural transform via `.group-hover:translate-x-0` for auxiliary actions (Wishlist and Quick View) anchored to the top right.
- **Quick View JS Modal System:**
  - Engineered client-side Quick View Logic utilizing the DOM memory array `PRODUCTS`. `openQuickView` injects an animated full-screen z-150 backdrop modal displaying specific sizes, price logic, and an independent add-to-cart mechanism isolated from the primary grid array.
- **Authentication Pages Refactor:** Rebuilt `login.php`, `signup.php`, `forgot-password.php`, and `enter-otp.php` to utilize the new component classes defined in `theme.css`. Removed inline styles and hardcoded gradients.
- **Homepage (`index.php`) Polish:**
  - Updated the hero section CTA button styling.
  - Added a functional "View All Products" button to the new arrivals section.
  - Made the category navigation arrows functional, allowing scrolling through the category list.
  - Resolved multiple Tailwind CSS linting errors (e.g., deprecated aspect ratio classes, incorrect gradient direction syntaxes).
- **Dynamic Components (`components.js`):**
  - Replaced Material Symbols with Heroicons within dynamically generated UI elements like the mini cart, category sidebars, and product cards.
  - Standardized the border-radius of dynamic elements to match the new `rounded-md` standard.
- **Floating Global Actions:** Implemented a fixed `renderFloatingButtons()` function to provide a persistent, floating "Theme Toggle" (Light/Dark mode) and a "Back to Top" button on all pages.
- **Footer Refinement:** Replaced outdated footer icons with cleaner Heroicons and modernized the `showToast` notification function to use Tailwind's utility classes for a seamless look.
- **Product Detail Page (`product-detail.php`):**
  - Replaced Material Symbols for quantity adjustment (+/-) and the wishlist heart.
  - Implemented fully functional tab switching (Description, Additional Information, Reviews) using a new `switchTab(tabId)` JavaScript function.
  - Addressed Tailwind linting warnings specific to the product layout.
- **Social Proof Enhancement:** Added a new, responsive 3-column "Testimonials" section to the homepage (`index.php`) below the product grid.
- **Search Functionality:** Created a new `search.php` page, mirroring the layout of `shop.php`, designed to process URL parameters and display corresponding search results.

## Phase 2: Refine Account Pages

- **Addresses (`manage-addresses.php`):**
  - Updated all button and card radiuses to the new `rounded-md` and `rounded-lg` standards.
  - Replaced Material Symbols with Heroicons for "Add Address", "Edit", and "Delete" actions.
  - Attached stubbed event listeners to the edit and delete buttons that trigger the new `showToast` UI.
- **Orders (`orders.php`):**
  - Standardized card and button border radiuses.
  - Replaced image wrapper classes to ensure consistent `rounded-md` corners.
  - Updated the status tags (e.g., 'Processing', 'Delivered') to use more appropriate Semantic color classes (e.g., `bg-emerald-50 text-emerald-600`).
  - Added a functional stub to the "View Details" buttons.
- **Personal Info, Settings & Saved Cards:**
  - Addressed multiple Tailwind CSS linting errors, specifically focusing on flex properties (changing deprecated `flex-grow` to `grow`).

## Phase 3: New Information Pages

Created several new, robust information pages to provide a complete e-commerce experience. All pages utilize the established `theme.css` components and responsive layouts.

- `about-us.php`: A comprehensive "Our Story" page featuring a hero image, mission statement, sustainability practices, and a team section styling.
- `blog.php`: A sleek, responsive blog listing page utilizing a CSS Column-based masonry layout for dynamic content presentation.
- `blog-detail.php`: A clean, readable article template with a hero image, rich text formatting (using Tailwind Typography plugin principles), and related tags.
- `contact.php`: A modern contact page featuring dual-column layout with contact information blocks (using Heroicons) and a styled, functional contact form (stubbed via JS).
- `faq.php`: A Frequently Asked Questions page using an accordion-style layout for easy navigation of common inquiries.
- `privacy-policy.php`, `terms-conditions.php`, `delivery-information.php`, `careers.php`: Standardized text-heavy content pages with clear typography and structured sections.

## Codebase Maintenance

- **Tailwind Linting Resolution:** Systematically resolved dozens of Tailwind CSS linting errors across the entire project. This included fixing deprecated flex properties (`flex-grow` to `grow`, `flex-shrink-0` to `shrink-0`), correcting gradient direction syntaxes (`bg-gradient-to-r` to `bg-linear-to-r`), and addressing conflicting utility classes (e.g., `flex hidden`).
- **Dependency Cleanup:** Removed unnecessary external requests, including unused Google Fonts and the Material Symbols CDN links, improving page load performance.

## Branching Strategy

The project utilizes a two-branch workflow to ensure stability:

- **`staging`**: The primary development branch. All new features, bug fixes, and updates are committed and pushed here first.
- **`main`**: The production-ready branch. Changes from `staging` are merged into `main` only after final review and approval.
