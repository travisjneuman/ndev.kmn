# Kersten M. Neuman Portfolio

Single-page portfolio website for Kersten M. Neuman, a Customer Service Professional based in Grand Rapids, Michigan.

**Live:** https://kersten.neuman.dev

---

## Table of Contents

1. [Quick Start](#quick-start)
2. [Project Overview](#project-overview)
3. [File Structure](#file-structure)
4. [Technical Architecture](#technical-architecture)
5. [HTML Structure](#html-structure)
6. [CSS Architecture](#css-architecture)
7. [JavaScript Functionality](#javascript-functionality)
8. [Design System](#design-system)
9. [Accessibility Features](#accessibility-features)
10. [SEO & Social Sharing](#seo--social-sharing)
11. [Performance](#performance)
12. [Browser Support](#browser-support)
13. [Deployment](#deployment)
14. [Customization Guide](#customization-guide)
15. [Maintenance](#maintenance)

---

## Quick Start

```bash
# Start local server (Python)
python -m http.server 8000

# Or with Node.js
npx serve .

# Visit http://localhost:8000
```

No build step. No dependencies to install. Pure static files.

---

## Project Overview

### Purpose

This is a professional portfolio website designed to:
- Establish online presence for Kersten M. Neuman
- Provide immediate access to LinkedIn profile
- Enable direct email contact
- Present a clean, professional first impression

### Design Philosophy

- **Single-page layout** - Everything visible without scrolling
- **Minimal interaction** - Two clear call-to-action buttons
- **Mobile-first** - Works perfectly on all devices
- **Accessibility-focused** - WCAG 2.1 AA compliant
- **Performance-optimized** - Fast loading, no unnecessary assets

### What This Site Is NOT

- Not a multi-page website with navigation
- Not a contact form (uses direct email instead)
- Not a blog or content-heavy site
- Not a complex web application

---

## File Structure

```
ndev.kmn/
├── index.html              # Single-page portfolio (108 lines)
├── README.md               # This documentation file
├── CLAUDE.md               # AI assistant instructions
├── .gitignore              # Git ignore rules
│
├── css/                    # Stylesheets
│   ├── main.css            # Custom styles (337 lines)
│   ├── bootstrap.css       # Bootstrap 4 framework
│   └── linearicons.css     # Icon font styles
│
├── js/                     # JavaScript
│   ├── main.js             # Custom scripts (24 lines)
│   └── vendor/             # Third-party libraries
│       ├── jquery-2.2.4.min.js
│       ├── bootstrap.min.js
│       └── popper.min.js (loaded via CDN)
│
├── fonts/                  # Icon fonts
│   ├── Linearicons-Free.ttf
│   ├── Linearicons-Free.woff
│   └── Linearicons-Free.woff2
│
├── img/                    # Images
│   ├── banner-bg.jpg       # Hero background image
│   ├── favicon/            # Favicon files
│   │   ├── favicon.ico
│   │   ├── favicon.svg
│   │   ├── favicon-96x96.png
│   │   ├── apple-touch-icon.png
│   │   ├── web-app-manifest-192x192.png
│   │   ├── web-app-manifest-512x512.png
│   │   └── site.webmanifest
│   ├── logo/               # Brand assets
│   │   └── logo.png
│   └── social/             # Social sharing images
│       └── og-image.png    # OpenGraph image (1200x630)
│
└── .archive/               # Archived unused files (for review/deletion)
    ├── README.md           # Archive contents explanation
    ├── scss/               # Unused SCSS source files
    ├── font-awesome/       # Unused Font Awesome
    └── [100+ other unused files]
```

### File Purposes

| File | Lines | Purpose |
|------|-------|---------|
| `index.html` | 108 | Complete single-page website |
| `css/main.css` | 337 | All custom styling |
| `js/main.js` | 24 | Mobile viewport height fix only |
| `css/bootstrap.css` | ~10,000 | Bootstrap 4 framework |
| `css/linearicons.css` | ~500 | Icon font definitions |

---

## Technical Architecture

### Technology Stack

| Layer | Technology | Version | Purpose |
|-------|------------|---------|---------|
| Markup | HTML5 | - | Semantic structure |
| Styling | CSS3 | - | Visual presentation |
| Framework | Bootstrap | 4.x | Grid system, utilities |
| JavaScript | jQuery | 2.2.4 | DOM manipulation |
| Icons | Linearicons | Free | Arrow icons |
| Fonts | Poppins | - | Typography (Google Fonts) |

### Dependencies

**Local Files:**
- `css/bootstrap.css` - Bootstrap 4 compiled CSS
- `css/linearicons.css` - Icon font stylesheet
- `js/vendor/jquery-2.2.4.min.js` - jQuery library
- `js/vendor/bootstrap.min.js` - Bootstrap JavaScript

**CDN Resources:**
- `Poppins` font from Google Fonts
- `Popper.js` for Bootstrap tooltips/popovers (loaded but not used)

### Architecture Decisions

1. **No Build Process**
   - Pure static files
   - No webpack, Vite, or bundlers
   - No npm dependencies
   - Edit and deploy directly

2. **No Backend**
   - Static hosting only (Cloudflare Pages)
   - Email via mailto: link (no PHP/server processing)
   - No database or API

3. **Bootstrap 4 (Not 5)**
   - Original template used Bootstrap 4
   - jQuery dependency acceptable for this simple site
   - No need to upgrade for a maintenance-mode project

---

## HTML Structure

### Document Outline

```html
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Meta tags -->
    <!-- Favicons -->
    <!-- Open Graph / Twitter Cards -->
    <!-- Fonts -->
    <!-- CSS -->
</head>
<body>
    <!-- Skip link (accessibility) -->
    <main id="main-content" class="single-page">
        <section class="banner-area">
            <!-- Overlay -->
            <!-- Content container -->
            <!-- Footer (integrated) -->
        </section>
    </main>
    <!-- JavaScript -->
</body>
</html>
```

### Semantic Elements

| Element | Purpose |
|---------|---------|
| `<html lang="en">` | Document language for screen readers |
| `<main>` | Primary content landmark |
| `<section>` | Hero/banner section |
| `<footer>` | Copyright information |
| `<h1>` | Single heading (name) |
| `<p>` | Tagline/description |
| `<a>` | Call-to-action buttons |

### Content Hierarchy

```
<main> (single-page)
└── <section> (banner-area)
    ├── <div> (overlay-bg)
    ├── <div> (container)
    │   └── <div> (banner-content)
    │       ├── <h1> "Kersten M. Neuman"
    │       ├── <p> "Customer Service Professional..."
    │       └── <div> (banner-buttons)
    │           ├── <a> LinkedIn button
    │           └── <a> Email button
    └── <footer>
        └── <p> Copyright text
```

---

## CSS Architecture

### CSS Custom Properties (Variables)

Located at the top of `css/main.css`:

```css
:root {
  /* Colors */
  --color-primary: #8560f6;           /* Purple accent */
  --color-primary-dark: #6a4dd0;      /* Darker purple (unused) */
  --color-primary-rgb: 133, 96, 246;  /* RGB for rgba() */
  --color-text: #777777;              /* Body text gray */
  --color-heading: #222222;           /* Heading dark */
  --color-white: #ffffff;             /* White */

  /* Typography */
  --font-family: "Poppins", -apple-system, BlinkMacSystemFont,
                 "Segoe UI", Roboto, sans-serif;

  /* Animation */
  --transition: all 0.3s ease;
}
```

### Layout System

**Single-Page Flexbox Layout:**

```css
.single-page {
  height: 100vh;
  height: calc(var(--vh, 1vh) * 100); /* Mobile Safari fix */
  display: flex;
  flex-direction: column;
}

.banner-area {
  flex: 1;                    /* Takes all available space */
  display: flex;
  flex-direction: column;
}

.banner-area > .container {
  flex: 1;                    /* Content area grows */
  display: flex;
  align-items: center;        /* Vertical centering */
  justify-content: center;    /* Horizontal centering */
}

.footer-area {
  /* Fixed height footer at bottom */
  padding: 20px 0;
}
```

**Visual Diagram:**

```
┌─────────────────────────────────────┐
│            .single-page             │ ← 100vh
│  ┌───────────────────────────────┐  │
│  │        .banner-area           │  │
│  │  ┌─────────────────────────┐  │  │
│  │  │                         │  │  │
│  │  │    .banner-content      │  │  │ ← flex: 1 (grows)
│  │  │    (centered content)   │  │  │
│  │  │                         │  │  │
│  │  └─────────────────────────┘  │  │
│  │  ┌─────────────────────────┐  │  │
│  │  │      .footer-area       │  │  │ ← fixed height
│  │  └─────────────────────────┘  │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
```

### CSS File Organization

```css
/* =================================== */
/*  CSS Custom Properties              */
/* =================================== */

/* =================================== */
/*  Base Styles                        */
/* =================================== */

/* =================================== */
/*  Typography                         */
/* =================================== */

/* =================================== */
/*  Utility Classes                    */
/* =================================== */

/* =================================== */
/*  Accessibility                      */
/* =================================== */

/* =================================== */
/*  Single Page Layout                 */
/* =================================== */

/* =================================== */
/*  Banner Content                     */
/* =================================== */

/* =================================== */
/*  Buttons                            */
/* =================================== */

/* =================================== */
/*  Footer                             */
/* =================================== */

/* =================================== */
/*  Responsive                         */
/* =================================== */

/* =================================== */
/*  Print Styles                       */
/* =================================== */
```

### Responsive Breakpoints

| Breakpoint | Target | Changes |
|------------|--------|---------|
| `max-width: 767px` | Mobile | Smaller h1 (36px), stacked buttons |
| `max-width: 480px` | Small mobile | Even smaller h1 (28px) |

**Mobile Styles:**

```css
@media (max-width: 767px) {
  .banner-content h1 {
    font-size: 36px;          /* Down from 60px */
  }
  .banner-buttons {
    flex-direction: column;   /* Stack buttons */
    align-items: center;
  }
  .primary-btn {
    width: 200px;             /* Fixed width for uniformity */
  }
}

@media (max-width: 480px) {
  .banner-content h1 {
    font-size: 28px;          /* Even smaller */
  }
}
```

### Button Styling

```css
.primary-btn {
  line-height: 40px;
  padding: 0 30px;
  border-radius: 20px;              /* Pill shape */
  background: transparent;
  border: 1px solid var(--color-white);
  color: var(--color-heading);
  font-weight: 500;
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: 0.5px;
  transition: var(--transition);
}

.primary-btn:hover {
  transform: translateY(-2px);      /* Lift effect */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  background: rgba(255, 255, 255, 0.1);
}

.primary-btn:hover .mr-10 {
  margin-right: 20px;               /* Arrow slides right */
}
```

---

## JavaScript Functionality

### Purpose

The JavaScript file (`js/main.js`) has exactly ONE purpose: fixing the mobile Safari 100vh bug.

### The Mobile 100vh Problem

On mobile browsers (especially iOS Safari), `100vh` includes the browser chrome (address bar, bottom toolbar). This causes content to be cut off when these UI elements are visible.

### The Solution

```javascript
$(document).ready(function() {
  'use strict';

  // Calculate actual viewport height
  function setMobileViewportHeight() {
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
  }

  // Set on load
  setMobileViewportHeight();

  // Update on resize (debounced to prevent performance issues)
  var resizeTimeout;
  $(window).on('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(setMobileViewportHeight, 150);
  });
});
```

### How It Works

1. Calculates 1% of actual viewport height: `window.innerHeight * 0.01`
2. Sets CSS custom property: `--vh: 0.01 * actualHeight`
3. CSS uses: `height: calc(var(--vh, 1vh) * 100)`
4. Fallback: If `--vh` isn't set, uses standard `1vh`

### Additional JavaScript

The copyright year is updated inline in the HTML:

```html
<script>
  document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
```

---

## Design System

### Color Palette

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| Primary | `#8560f6` | `133, 96, 246` | Overlay, accents, theme color |
| Primary Dark | `#6a4dd0` | - | Available but unused |
| Text | `#777777` | - | Body text |
| Heading | `#222222` | - | Headlines (used in print) |
| White | `#ffffff` | - | Text on overlay |

### Typography

**Font Stack:**
```css
font-family: "Poppins", -apple-system, BlinkMacSystemFont,
             "Segoe UI", Roboto, sans-serif;
```

**Font Weights Used:**
- 100: Hero name (h1)
- 300: Body text, tagline
- 500: Buttons, headings

**Font Sizes:**

| Element | Desktop | Mobile | Small Mobile |
|---------|---------|--------|--------------|
| h1 | 60px | 36px | 28px |
| Tagline | 18px | 16px | 16px |
| Buttons | 13px | 13px | 13px |
| Footer | 13px | 13px | 13px |

### Iconography

Using Linearicons Free icon font. Only one icon is used:

```html
<span class="lnr lnr-arrow-right" aria-hidden="true"></span>
```

The icon is hidden from screen readers (`aria-hidden="true"`) since it's decorative.

### Spacing

| Property | Value | Usage |
|----------|-------|-------|
| Button padding | `0 30px` | Horizontal button padding |
| Button gap | `15px` | Space between buttons |
| Footer padding | `20px 0` | Vertical footer padding |
| Heading margin | `20px` bottom | Space after h1 |
| Tagline margin | `30px` bottom | Space after tagline |

---

## Accessibility Features

### Skip Link

```html
<a href="#main-content" class="sr-only sr-only-focusable">
  Skip to main content
</a>
```

Hidden by default, visible on keyboard focus. Allows keyboard users to skip repetitive navigation (though minimal in this case).

### Screen Reader Text

```css
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
```

### Focus Indicators

```css
:focus-visible {
  outline: 2px solid var(--color-primary);
  outline-offset: 2px;
}

.primary-btn:focus-visible {
  outline: 2px solid var(--color-white);
  outline-offset: 2px;
}
```

### ARIA Labels

```html
<section class="banner-area" aria-label="Introduction">

<a href="..." aria-label="View Kersten's LinkedIn Profile">

<a href="..." aria-label="Send email to Kersten">

<span class="lnr lnr-arrow-right" aria-hidden="true"></span>
```

### Document Language

```html
<html lang="en" class="no-js">
```

### Color Contrast

- White text (`#ffffff`) on purple overlay (`rgba(133, 96, 246, 0.85)`)
- Contrast ratio: Passes WCAG AA for normal text

### Print Styles

```css
@media print {
  .banner-area { background: none !important; }
  .overlay-bg { display: none; }
  .text-white { color: var(--color-heading) !important; }
  .primary-btn { border-color: var(--color-heading); }
  .primary-btn span { color: var(--color-heading); }
}
```

---

## SEO & Social Sharing

### Meta Tags

```html
<meta name="description" content="Kersten M. Neuman - Customer Service
  Professional based in Grand Rapids, Michigan. Dedicated to delivering
  exceptional customer experiences.">

<meta name="keywords" content="Kersten Neuman, customer service,
  Grand Rapids, Michigan, professional, customer experience">

<meta name="author" content="Kersten M. Neuman">
```

### Open Graph (Facebook, LinkedIn)

```html
<meta property="og:type" content="website">
<meta property="og:url" content="https://kersten.neuman.dev/">
<meta property="og:title" content="Kersten M. Neuman | Customer Service Professional">
<meta property="og:description" content="Customer Service Professional based in
  Grand Rapids, Michigan. Dedicated to delivering exceptional customer experiences.">
<meta property="og:image" content="https://kersten.neuman.dev/img/social/og-image.png">
```

### Twitter Cards

```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://kersten.neuman.dev/">
<meta name="twitter:title" content="Kersten M. Neuman | Customer Service Professional">
<meta name="twitter:description" content="Customer Service Professional based in
  Grand Rapids, Michigan. Dedicated to delivering exceptional customer experiences.">
<meta name="twitter:image" content="https://kersten.neuman.dev/img/social/og-image.png">
```

### Social Image Requirements

The `og-image.png` should be:
- **Size:** 1200x630 pixels (recommended)
- **Format:** PNG or JPG
- **Location:** `/img/social/og-image.png`

### Favicon Setup

Modern favicon configuration supporting all platforms:

```html
<link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg">
<link rel="shortcut icon" href="/img/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
<meta name="apple-mobile-web-app-title" content="KM">
<link rel="manifest" href="/img/favicon/site.webmanifest">
<meta name="theme-color" content="#8560f6">
```

---

## Performance

### Current Optimizations

1. **Minimal JavaScript** - Only 24 lines of custom JS
2. **No unused CSS loaded** - Font Awesome removed
3. **Preconnect to Google Fonts** - Reduces DNS lookup time
4. **Single HTTP requests** - No dynamic loading
5. **No images in critical path** - Background loads after content

### Resource Loading Order

1. CSS files (render-blocking)
2. Google Fonts (async with preconnect)
3. JavaScript (at end of body)
4. Background image (CSS, non-blocking)

### File Sizes (Approximate)

| File | Size | Notes |
|------|------|-------|
| index.html | ~4 KB | Minified would be ~3 KB |
| main.css | ~10 KB | Could be minified |
| bootstrap.css | ~150 KB | Unminified |
| jquery | ~85 KB | Minified |
| banner-bg.jpg | ~200 KB | Could be optimized |

### Lighthouse Targets

| Metric | Target |
|--------|--------|
| Performance | 95+ |
| Accessibility | 100 |
| Best Practices | 100 |
| SEO | 100 |

### Potential Optimizations (Not Implemented)

- Minify CSS/JS
- Optimize/compress banner-bg.jpg
- Use Bootstrap 5 (removes jQuery dependency)
- Inline critical CSS
- Use system fonts instead of Google Fonts

---

## Browser Support

### Officially Supported

| Browser | Version |
|---------|---------|
| Chrome | Latest |
| Firefox | Latest |
| Safari | Latest |
| Edge | Latest |

### Features Used

| Feature | Support |
|---------|---------|
| CSS Custom Properties | All modern browsers |
| Flexbox | All modern browsers |
| CSS calc() | All modern browsers |
| viewport units (vh) | All modern browsers |

### Known Issues

- **iOS Safari:** 100vh includes browser chrome - fixed with JS
- **IE11:** Not supported (CSS Custom Properties)

---

## Deployment

### Cloudflare Pages (Current)

1. Push to `origin/master`
2. Cloudflare Pages auto-deploys
3. Available at https://kersten.neuman.dev

### Manual Deployment

Upload these files/folders to any static host:
- `index.html`
- `css/`
- `js/`
- `fonts/`
- `img/`

### Alternative Hosts

- **Netlify:** Drag and drop folder
- **Vercel:** Connect Git repo
- **GitHub Pages:** Enable in repo settings
- **AWS S3:** Static website hosting
- **Any web server:** Apache, Nginx, etc.

---

## Customization Guide

### Changing the Name

Edit `index.html`:
```html
<h1 class="text-white">Your Name Here</h1>
```

Also update:
- `<title>` tag
- `<meta name="description">`
- `<meta name="author">`
- All Open Graph and Twitter Card tags
- Footer copyright text

### Changing the Tagline

Edit `index.html`:
```html
<p class="text-white">Your Title Here<br>Based in Your Location.</p>
```

### Changing Colors

Edit `css/main.css` CSS variables:
```css
:root {
  --color-primary: #your-color;
  --color-primary-rgb: r, g, b;  /* For rgba() */
}
```

Also update:
- `<meta name="theme-color">` in HTML
- Favicon if brand color is used

### Changing the LinkedIn URL

Edit `index.html`:
```html
<a href="https://www.linkedin.com/in/your-profile/">
```

### Changing the Email

Edit `index.html`:
```html
<a href="mailto:your@email.com">
```

### Changing the Background Image

Replace `img/banner-bg.jpg` with your image. Recommended:
- Minimum 1920x1080 pixels
- Dark enough for white text overlay
- Compressed for web

### Adding More Buttons

Add another `<a>` inside `.banner-buttons`:
```html
<a href="..." class="primary-btn d-inline-flex align-items-center"
   aria-label="Description">
    <span class="mr-10">Button Text</span>
    <span class="lnr lnr-arrow-right" aria-hidden="true"></span>
</a>
```

---

## Maintenance

### Regular Tasks

- Update copyright year (automatic via JS)
- Check links still work
- Update content if career changes
- Renew domain/hosting

### If Breaking Changes Needed

1. Test locally first (`python -m http.server 8000`)
2. Check all responsive breakpoints
3. Verify accessibility (keyboard navigation, screen reader)
4. Test in multiple browsers
5. Deploy to staging if available
6. Push to production

### Archive Folder

The `.archive/` folder contains ~100 unused files from the original template. These can be:
- Deleted permanently (saves space)
- Kept for reference
- Restored if features needed later

See `.archive/README.md` for contents.

---

## History

### December 2025 Modernization

Major cleanup and simplification:
- Converted multi-section page to single-page layout
- Removed broken PHP contact form
- Added mailto email link
- Removed logo header
- Updated to modern favicon setup
- Added OpenGraph/Twitter Cards
- Archived 100+ unused files
- Removed Font Awesome (unused)
- Cleaned CSS (removed unused styles)
- Simplified JavaScript (removed form handling)

### Original State

- Multi-section scrolling page
- PHP contact form (broken on Cloudflare)
- 26 favicon files in root
- 40+ unused template images
- Font Awesome loaded but unused
- SCSS source files (never compiled)
- Multiple unused JavaScript plugins

---

## License

All rights reserved. Personal portfolio website.

---

*Last updated: December 2025*
