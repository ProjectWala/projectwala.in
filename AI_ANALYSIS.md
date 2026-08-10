# Project Wala - Quick Analysis for AI

## Overview
- **Tech Stack**: PHP (Plain), HTML5, CSS3, JavaScript (Vanilla/jQuery), Bootstrap 5, VueJS (via CDN in specific components).
- **Architecture**: Multi-page application (MPA) with server-side routing via PHP files.
- **Purpose**: An educational platform offering project solutions, training, and crash courses for various engineering branches (CSE, ECE, Mechanical).

## Project Structure
- `index.php`: Main landing page showcasing offerings, stats, and project categories.
- `assets/`: Contains static resources (Bootstrap files, custom CSS, JS scripts, fonts, and images).
- `partials/`: Reusable UI components (header, footer, menu, meta tags, linked CSS/JS).
  - `links_css.php` / `links_scripts.php`: Centralized asset management.
  - `menu.php` / `footer.php`: Global navigation and footer.
- `courses/` & `tutorials/`: Directories containing specific content pages.
- Individual PHP files (e.g., `courses-list.php`, `aboutus.php`): Different pages of the application.

## Key Features & Libraries
- **Styling**: Bootstrap 5 for responsive layout, custom CSS (`styles.css`, `main.css`).
- **Animations**: AOS (Animate On Scroll), purecounter (for stats incrementing), Lottie Web Components.
- **Frontend Interactivity**: GLightbox, Swiper, Isotope for layouts/galleries.
- **Dynamic Paths**: PHP variables are used to resolve absolute paths dynamically (e.g., `$base_path` in `partials/links_css.php` handles localhost vs production environments).

## AI Assistant Instructions
1. **Routing & New Pages**: When adding a new page, create a `.php` file in the root or appropriate subdirectory and include the required `partials` (menu, footer, links_css, links_scripts).
2. **Assets**: Place custom styles in `assets/css/` and custom scripts in `assets/js/`. Do not modify vendor files directly.
3. **Environment**: The project relies on XAMPP/Apache to parse PHP files. Local testing is done via `localhost`.
4. **VueJS Usage**: Since Vue is used via CDN, components are typically written directly in the DOM or separate `.js` files attached to specific pages, avoiding Node-based build tools (no Webpack/Vite). Use ES modules sparingly unless browser support is guaranteed or handled by the included polyfills.
