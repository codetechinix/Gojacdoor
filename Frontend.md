# Frontend Architecture

This document serves as the living source of truth for the Gojacdoors frontend architecture. It is designed to be easily updated as the project evolves into a full WooCommerce theme.

## 🛠️ Technology Stack

- **Structure:** HTML5 & PHP Includes (for component reusability)
- **Styling:** Tailwind CSS (v3/v4 hybrid) compiling via `output.css`
- **Interactivity:** Vanilla JavaScript (`assets/js/modules/components.js`)
- **Icons:** Inline SVG paths for maximum performance (no icon fonts required)

## 📚 Libraries & Dependencies

- **SwiperJS:** (`v11.x`) Used exclusively for the Hero Image Slider and Product Image Galleries.
- **AOS (Animate On Scroll):** (`v2.3.1`) Used for triggering CSS reveal animations as the user scrolls down the page.
- **Tailwind CLI:** Builds the `input.css` file into the heavily optimized `output.css` based on class usage.

## 🌟 Core Features & Modules

### 1. Global Preloader

- **Implementation:** `includes/header.php`
- **Behavior:** Features a solid white (or slate-900 in dark mode) background overlay that strictly hides the DOM until the page resolves.
- **Animation:** Uses custom CSS keyframes (`lettersReveal`, `textShimmer`, and `loadingBar`) to animate the "Gojacdoors" brand logo and a "walking" loading bar across the screen before instantly fading out (`1.5s` delay after load) and releasing the scroll lock.

### 2. Theming System (Dark Mode)

- **Implementation:** `localStorage` & `classList.toggle('dark')`
- **Behavior:** The site fully supports both Light and Dark mode using Tailwind's `dark:` variant class suffix, creating a seamless and premium visual experience. A unified toggle button (`#themeToggle`) controls the shift and persists the user preference.

### 3. Dynamic Navigation Header

- **Implementation:** `includes/header.php`
- **Behavior:** Fully responsive sticky header. On desktop, employs a hover-intent mega-menu structure using group hover utilities (`group-hover:block` and `-bottom-1.5` scale markers for active page indicators). On mobile, collapses into a comprehensive side drawer.

### 4. Interactive Components (Cart, Search, Wishlist)

- **Implementation:** `assets/js/modules/components.js`
- **Behavior:**
  - **Search Overlay:** An immersive, fullscreen blurred backdrop search module.
  - **Mini Cart:** A sleek side-drawer sliding in from the right edge.
  - Both lock the background scroll (`overflow: hidden`) while active.

### 5. Skeleton Loaders

- **Implementation:** `assets/js/modules/components.js` & `index.php` / `shop.php`
- **Behavior:** Simulates real data-fetching latency by rendering pulse animations for product cards ("Best Sellers"). Elevates perceived performance before transitioning out for the real content.

### 6. Dynamic Hero Slider

- **Implementation:** `index.php`
- **Behavior:** SwiperJS instance configured with `effect: 'fade'` to cross-fade elegantly between high-resolution promotional marketing images and strong Call-To-Action blocks.

## 📝 How to Update This Document

As new frontend features (e.g., dynamic product variations, WhatsApp checkout buttons) are added, create a new heading under **Core Features & Modules** detailing the _Implementation_ file and the _Behavior_ flow. Update the _Libraries_ section if additional third-party dependencies (like specialized gallery tools or form validators) are introduced.
