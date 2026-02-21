# Changelog

All notable changes to the Krist E-commerce Template will be documented in this file.

## [Unreleased]

### Added

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
