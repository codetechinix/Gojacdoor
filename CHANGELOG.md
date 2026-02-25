# Changelog

All notable changes to the Krist E-commerce Template will be documented in this file.

## [Unreleased]

### [2026-02-25T07:20:00+01:00] Revone Theme UI Upgrades

#### Added

- **Mobile Sticky Navigation (`includes/header.php`):** Implemented a new sticky mobile bottom-bar navigation with Home, Menu, Search, Account, and Cart icons.
- **Mobile Side Menu (`includes/header.php`, `assets/js/modules/components.js`):** Engineered a smooth slide-out sidebar menu for mobile featuring navigation links and an integrated Login/Register button.

#### Changed

- **Navbar Overhaul (`includes/header.php`):** Centered navigation links on desktop and added a bright red `SALE` badge to the 'Shop' link.
- **Hero Slider Redesign (`index.php`):** Upgraded typography to bold, uppercase text matching the Revone aesthetic. Added an "EST. 2024" pre-title badge and transformed the primary call-to-action into a stark, interactive pill-shaped button.
- **Benefits Footer (`includes/footer.php`):** Replaced the light-mode features strip with a high-contrast, dark-mode advantages grid (Free Shipping, Guarantee, Support, Payment) above the main footer block.

### [2026-02-25T05:15:00+01:00] Global Script & Styles Extraction

#### Changed

- **Global JavaScript Extraction:** Completely stripped inline `<script>` tags across over 30 `.php` files (including `index.php`, `shop.php`, `cart.php`, `checkout.php`, and subdirectories). Extracted repetitive routing, filtering, rendering, and logic hooks into centralized, auto-initializing functions within `assets/js/modules/components.js`.
- **Global CSS Extraction:** Moved inline preloader blurring constraints and `style="..."` overrides from HTML headers into Tailwind-driven classes inside `assets/css/input.css` globally.
- **Improved Include Paths:** Repaired path anomalies wherein subdirectory roots (like `/account/` and `/pages/`) could not natively resolve global headers, linking them strictly via `../includes/`.### [2026-02-24T15:45:00+01:00] Architecture Docs & Component Refinements

#### Added

- **Architecture Documentation (`Frontend.md`, `Backend.md`):** Authored clear, structural documentation describing the current capabilities, stack, libraries (SwiperJS, AOS, Tailwind v4 hybrid), and core modules (Preloader, Slider) scaling rules. The `Backend.md` definitively analyzes Core PHP against WooCommerce for a WhatsApp catalog deployment, concluding WooCommerce logic coupled with the existing frontend is highly optimal for business owner utility.

#### Changed

- **Global Preloader Refinements (`includes/header.php`, `assets/js/modules/components.js`):**
  - **Styles:** Replaced the semi-transparent frosted blur overlay with a completely opaque solid background (`bg-white dark:bg-slate-900`) solving page-bleed.
  - **Animations:** Patched an upstream Tailwind glitch where the "walking" loading bar width compiled to 0px. Adding standard inline limits (`12rem`) resolved the visibility immediately.
  - **Timing:** Extended the vanish exit animation to `1.5s` post-load. This allows the premium progression sequence to be smoothly apparent even on lightning-speed connections.
- **Scroll-To-Top Component (`assets/js/modules/components.js`):** Patched dark mode text and edge contrasts (`dark:bg-slate-800 dark:text-white`).
- **Footer Dark Mode Support (`includes/footer.php`):** Implemented `dark:bg-slate-800` onto the primary container preventing blinding white-bar artifacts when users toggle dark themes against the standard `bg-primary` base.
- **JavaScript Modularization:** Restructured the raw `assets/js/` directory to professional standards. Moved the global initialization scripts into `assets/js/core/main.js` and isolated the UI/Shared components into `assets/js/modules/components.js`. Updated all HTML, PHP, and Markdown reference paths globally.
- **JSDoc Implementations:** Authored comprehensive JSDoc block comments across all JavaScript functions in both `main.js` and `components.js` to enforce strict parameter and return type typing for easier maintenance.
- **Tailwind Native Variables (`input.css`):** Extracted lingering hardcoded hex colors (`#1e293b`, `#e2e8f0`, `#1a1a1a`) mapped to `.otp-input`, `.tab-btn.active`, and `.skeleton` loaders, replacing them with dynamic, tokenized Tailwind v4 variables (`var(--color-slate-800)`, `var(--color-primary)`, etc.) to guarantee 100% theme fluidity.

### [2026-02-24T05:58:00+01:00] Render Deployment & Blog UI Enhancements

#### Added

- **Premium Blog Imagery (`blog.php`):** Replaced broken placeholder images with high-quality, permanent URLs from Unsplash, covering categories like Fashion, Lifestyle, Trends, and D.I.Y.

#### Changed

- **Blog Detail Layout (`blog-detail.php`):** Transformed the single-column article view into a professional dual-column layout on desktop (`lg:grid-cols-3`). The main article now spans the left two columns while a new persistent right sidebar handles secondary navigation.
- **Blog Detail Sidebar (`blog-detail.php`):** Introduced a new right-hand sidebar featuring a search widget, category aggregations, recent posts with cover thumbnails, and popular tags.
- **Blog Detail Comments (`blog-detail.php`):** Appended a full interactive comments section below the article content. It features threaded replies with user avatars and a complete, styled form for leaving new replies.
- **Blog Layout (`blog.php`):** Converted the masonry column flow into a structured CSS Grid (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`) to perfectly align articles into three distinct columns and rows. Built-in responsive breakpoints ensure a smooth mobile experience.
- **Blog Pagination (`blog.php`):** Added premium interactive hover animations (`hover:-translate-y-1`, `hover:shadow-md`) to the page numbers and navigation arrows to clearly indicate active and hover states.
- **Blog UI Hover Effects (`blog.php`):** Enhanced the article cards with premium interactions, including a `-translate-y-1` floating uplift, deeper/softer drop shadows, a glassy `backdrop-[blur-sm]` tag overlay, and animated "Read More" arrows.
- **Docker Build Optimization (`Dockerfile`):** Sped up the Render deployment process drastically by switching from `RUN chown -R` to `COPY --chown` and replacing source-compiled PHP extensions with precompiled binaries via `install-php-extensions`.

#### Fixed

- **Apache Render Redirect Loop (Port 10000):** Fixed a critical deployment issue where Apache's `.php` extension stripping and directory trailing-slash redirects were incorrectly appending the internal Docker physical port (`:10000`) to the public URL. Moved the `ServerName` directive to the global `apache2.conf` context and explicitly forced `https://%{HTTP_HOST}` on external `RewriteRule` redirects in `render-apache.conf`.

### [2026-02-22T17:00:00+01:00] Render Docker Configuration

#### Added

- Created `Dockerfile` configuring `php:8.2-apache`:
  - Enabled required Apache modules (`rewrite`, `headers`, `expires`, `deflate`).
  - Disabled `DirectorySlash` and removed directory match blockers to structurally allow clean URL rewrites against valid grouped directories like `/pages` and `/auth`.
  - **Deprecated `.htaccess`**: Migrated all routing and security rules into `render-apache.conf` and explicitly set `AllowOverride None` in the `Dockerfile` to guarantee maximum performance and bypass Render virtual-host override restrictions.
- Created `.dockerignore` to streamline lightweight production image builds.
- Created `render.yaml` infrastructure-as-code blueprint to instantly provision Render.com deployment.

#### Removed

- Deleted `vercel.json` and `.vercelignore` serverless configuration artifacts due to persistent PHP Edge Builder compatibility and static asset routing constraints.

### [2026-02-22T16:45:00+01:00] Vercel Deployment Configuration

#### Added

- **Vercel Serverless Config (`vercel.json`)**: Configured the project for Vercel deployment using the `vercel-php@0.6.1` builder. Translated Apache `.htaccess` rules directly into Vercel routing, creating clean URLs (hiding `.php` extensions) and securing the `/includes` and `/errors` directories with 403 Forbidden responses. Explicitly mapped 404, 403, and 500 error handlers to the custom PHP error pages.
- **Vercel Ignore List (`.vercelignore`)**: Created an ignore file to prevent pushing heavy development items (`node_modules/`, `.git/`, Tailwind configurations) to the serverless lambda environments, improving deployment speed and minimizing function sizes.

### [2026-02-22T14:13:00+01:00] Search Overlay, Cart Badge & Category Card Enhancements

#### Added

- **Search Overlay (`includes/header.php`, `assets/js/modules/components.js`):** Implemented a premium full-width search panel that slides down from the header with a blurred dark backdrop (`bg-black/50 backdrop-blur-sm`). Includes a large input field, magnifying glass submit button, and popular search tags (Shirts, Dresses, Jackets, Shoes, Accessories). Supports Escape key to close and locks body scroll while open. Form submits to `search.php?q=...`.
- **`toggleSearchOverlay()` function (`assets/js/modules/components.js`):** Added open/close animation logic using `translate-y` on the panel and `opacity` on the backdrop, with `requestAnimationFrame` for smooth transitions.

#### Changed

- **Search Icon (`includes/header.php`):** Added `onclick="toggleSearchOverlay()"` to the previously non-functional navbar search button.
- **Cart Badge Alignment (`includes/header.php`):** Updated cart badge to exactly match the wishlist badge: `w-4 h-4`, `-top-1 -right-1`, `text-[10px]`, `flex items-center justify-center`. Switched from `hidden` class to `style="display: none"` to avoid Tailwind `flex`/`hidden` conflict.
- **Category Card Animations (`index.php`):** Added `hover:-translate-y-2 hover:shadow-2xl` lift effect, staggered `data-aos="fade-up"` entrance delays (`i * 100`), `rounded-lg` corners, and made the entire card image clickable via anchor wrapping. Button text is now `uppercase` with `duration-300` transition.
- **Footer Top Padding (`includes/footer.php`):** Increased from `pt-16` to `pt-20` for more breathing room between the benefits bar and footer content.
- **Cache-Busting (`includes/footer.php`):** Added `?v=2.1` query string to `components.js` script tag to force browsers to fetch the latest version.

#### Fixed

- **Search Overlay Z-Index (`includes/header.php`):** Set inline `style="z-index:9999"` to guarantee the overlay renders above the hero slider and all other page elements. Tailwind's `z-9999` class was not in the compiled output.

### [2026-02-22T10:50:00+01:00] Error Pages, Benefits Bar & Footer Refinements

#### Added

- **Custom Error Pages (`errors/404.php`, `errors/403.php`, `errors/500.php`):** Created fully branded error pages with inline CSS animations (glitch text on 404, pulsing shield on 403, stuttering gears on 500). Each error page includes the site header/footer and uses a monochrome color palette (black, gray, white only).
- **`.htaccess` Error Routing:** Configured `ErrorDocument` directives for 404, 403, and 500 errors pointing to the new custom error pages. Added rules to prevent `errors/` and `includes/` directories from being affected by clean URL rewrites.

#### Changed

- **Benefits Bar Redesign (`includes/footer.php`):**
  - Switched from Material Icons to Heroicons (inline SVGs) for the four benefit items.
  - Implemented a CSS grid layout (`grid-cols-4`) with equal-width columns.
  - Added visible ash-gray vertical separators between items using inline `border-left: 1px solid #cbd5e1` (Tailwind responsive `border-l` classes were not compiling).
  - Increased icon-to-text gap from `gap-5` (20px) to `gap-7` (28px) for better readability.
  - Added `border-t` / `border-b` with `border-slate-300` on the section for clear horizontal boundaries.
- **Footer Layout (`includes/footer.php`):**
  - Replaced the diamond Material icon logo with the lightning bolt SVG to match the header branding.
  - Increased top padding from `pt-16` to `pt-20` for more breathing room between the benefits bar and footer content.
  - Added `margin-top:-1px` to prevent a double-border artifact at the benefits-to-footer transition.
  - Removed the `mb-10` white gap between benefits bar and footer for a seamless dark transition.
- **Asset Path Normalization (`includes/head.php`, `includes/footer.php`):** Changed CSS and JS paths from relative (`./assets/`) to root-relative (`/assets/`) so they load correctly from subdirectories like `errors/`.

#### Fixed

- **Error Page Button Styling:** Updated buttons on all three error pages to match homepage CTA style (`rounded-sm`, `tracking-wider uppercase`, `px-10 py-4`, `duration-300`).
- **Error Page Color Consistency:** Removed all colored accents (indigo, pink, amber, red) from error page animations, replacing with slate gray tones for monochrome consistency.

### [2026-02-21T18:00:00+01:00] Homepage Revamp (Stitch Inspiration)

- **Global Background Colors (`index.php`):** Swapped out Tailwind background utility classes across Hero, Categories, Bestsellers, Deals, Testimonials, and Instagram sections for cleaner, more premium contrast (e.g. `bg-[#F3F3F3]`, `bg-white`, `bg-gray-50`).
- **Shop by Categories Grid (`index.php`):** Standardized visual card heights to `400px`, added a dark bottom gradient overlay, and appended a floating white button containing the category title.
- **Product Cards Enhancements (`components.js`):** Engineered a new sliding 'Add to Cart' button (animating upward from the bottom of the card on hover) and added a 'Quick View' button (sliding inward from the right).
- **Quick View Modal (`components.js`):** Scripted a dynamic JavaScript modal function (`openQuickView()`) featuring product image, info, size selectors, quantity stepper, and ATC actions, heavily streamlining the purchasing flow.
- **Testimonials Redesign (`index.php`):** Migrated from glassmorphism overlay to isolated, solid-background grey cards. Re-aligned profile avatars and text alongside newly colored flat yellow star SVGs.
- **Pre-Footer Areas (`index.php` & `components.js`):** Implemented an Instagram-icon hover overlay within the grid, and reformatted the 'Benefits' bar into a crisp flex-row layout.

### [2026-02-21T16:02:57+01:00] Enhanced Shop Dropdown

- **Header Dropdown (`header.php`):** Converted the 'Shop' text links into premium `.group/link` elements with animated SVG arrows sliding in on hover.
- **Layout Shift Fix:** Corrected a 120px interaction drift where the dropdown bounding box didn't match the UI button by applying `h-full` symmetrically. Injected custom CSS logic mapping into `input.css` / `output.css` to force Dropdown expansion bypassing compilation errors.

### [2026-02-21T13:52:34+01:00] Frontend UI & Theming Updates

- **Header & Navigation:** Made Cart and Wishlist badge counters dynamic (`components.js`), updated mega menu layout and styling.
- **Homepage (`index.php`):** Swapped static hero for dynamic slider, implemented horizontal scrolling (`snap-x`) for Categories and Testimonials.
- **Product Detail (`product-detail.php`):** Added a thumbnail image gallery, a review modal with interactive stars, and dynamic "Sold Out" badge logic layout.
- **Checkout & Contact (`checkout.php`, `contact.php`, `footer.php`):** Added embedded Google Map to the contact page, and premium vector payment provider logos to the checkout and footer sections.
- **Tailwind Refactoring:** Fixed multiple IDE syntax lints including `shrink-0` and `z-100`.

### [2026-01-31T00:00:00+00:00] Base Template Changes

- **Floating Actions:** Global floating "Toggle Theme" and "Back to Top" buttons (`src/components.js`, `renderFloatingButtons()`).
- **Testimonials Section:** A dynamic 3-column testimonial section to the homepage (`index.php`).
- **Search Page:** A robust `search.php` template for displaying product query results, mirroring the `shop.php` sidebar filtering layout.
- **Information Pages:**
  - `about-us.php`: Company story, mission, and team.
  - `delivery-information.php`: Shipping rates and tracking policies.
  - `privacy-policy.php`: Data collection and usage terms.
  - `terms-conditions.php`: Service and purchase agreements.
  - `careers.php`: Open positions and company benefits.
  - `faq.php`: Accordion-style Frequently Asked Questions.
  - `contact.php`: Contact form and company location details.
- **Blog Section:**
  - `blog.php`: Features a responsive CSS-column masonry layout for post cards.
  - `blog-detail.php`: Features clean typography optimized for reading.
- **Documentation:**
  - `README.md`: Project overview and phase documentation.
  - `CHANGELOG.md`: Version history and modification tracking.

### Changed

- **Design System Standardization:**
  - Replaced the pink primary styling with a sophisticated black, white, and gray minimalist palette across all components.
  - Enforced a `rounded-md` standard for buttons, inputs, and interactive elements.
  - Applied sharp corner styling (`rounded-none` or `rounded-sm`) to large structural containers and soft corners (`rounded-lg` or `rounded-2xl`) to product/account cards for hierarchy.
- **Iconography Overhaul:** Completely removed the dependency on Google Material Symbols. All icons (navigation, footer, actions, product cards) are now inline SVG Heroicons.
- **Header & Navigation:**
  - The main header and mega menu now feature solid backgrounds globally instead of transparency for improved readability.
  - Replaced existing Material Symbols (logo diamond, search, wishlist, cart, account, menu toggle).
- **Authentication Pages (`login.php`, `signup.php`, `forgot-password.php`, `enter-otp.php`):**
  - Refactored entire HTML structure to properly utilize the base component classes inside `theme.css`.
  - Modernized layouts and fixed gradient bugs.
- **Dynamic JS Components (`src/components.js`):**
  - `renderMiniCart`, `renderProductCard`, `renderCheckoutStepper`, `renderBreadcrumb`: Replaced all Material Symbols with Heroicons and standardized radii.
  - `showToast`: Modernized styling with Tailwind classes (success, error, info).
- **Product Detail (`product-detail.php`):**
  - Converted descriptive sections into functional, Javascript-driven tabs (`switchTab`).
  - Standardized quantity and wishlist buttons using Heroicons.
- **Account & Checkout Pages (`manage-addresses.php`, `orders.php`, `checkout.php`):**
  - Replaced icons in address cards and order histories.
  - Standardized button classes and card radii.
  - Attached stubbed toast notifications to action buttons (edit, delete, view details, checkout).
- **Footer (`includes/footer.php`):**
  - Cleaned up link structures to point directly to the newly created `.php` information pages.
  - Updated contact icons and simplified social media links to SVG paths.

### Fixed

- **Tailwind Linting Errors:** Resolved multiple instances of `flex hidden` conflicts, deprecated padding/margin patterns, aspect ratio syntax (`aspect-[4/3]` -> `aspect-4/3`), flex properties (`flex-grow` -> `grow`), and gradient directions (`bg-gradient-to-r` -> `bg-linear-to-r`).
- **Dark Mode Persistence:** Standardized the theme toggle logic in `components.js` to correctly persist the `krist_dark` preference to `localStorage`.
- **Resource Loading:** Fixed the broken Google Fonts import structure in `head.php`.

### Removed

- **Material Symbols:** Removed the Google Fonts CSS link for Material Symbols (`<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined..." />`) as it is no longer used, improving performance.
