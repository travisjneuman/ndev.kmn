# Kersten M. Neuman Portfolio

Single-page portfolio website for Kersten M. Neuman, a Customer Service Professional based in Grand Rapids, Michigan.

**Live:** https://kersten.neuman.dev

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

## File Structure

```
ndev.kmn/
├── index.html              # Single-page portfolio
├── README.md               # This file
├── robots.txt              # Search engine directives
├── sitemap.xml             # Sitemap
├── .gitignore
├── css/
│   └── main.css            # All styles + @font-face declarations
├── fonts/
│   ├── poppins-100-latin.woff2
│   ├── poppins-300-latin.woff2
│   └── poppins-500-latin.woff2
└── img/
    ├── banner-bg.webp      # Hero background (637KB, primary)
    ├── banner-bg.jpg       # Hero background (946KB, fallback)
    ├── favicon/            # Favicon files + site.webmanifest
    ├── logo/               # Brand assets
    └── social/             # OpenGraph image (1200x630)
```

---

## Design System

### Colors

| Name | Hex | Usage |
|------|-----|-------|
| Primary | `#8560f6` | Overlay, accents, theme color |
| Text | `#777777` | Body text |
| Heading | `#222222` | Headlines (print) |
| White | `#ffffff` | Text on overlay |

### Typography

**Font:** Poppins (self-hosted, Latin subset)

| Weight | Usage |
|--------|-------|
| 100 | Hero name (h1) |
| 300 | Body text, tagline |
| 500 | Buttons, headings |

### Responsive Breakpoints

| Breakpoint | Changes |
|------------|---------|
| `max-width: 767px` | Smaller h1 (36px), stacked buttons |
| `max-width: 480px` | Smallest h1 (28px) |

---

## Customization

### Changing Colors

Edit CSS variables in `css/main.css`:
```css
:root {
  --color-primary: #your-color;
  --color-primary-rgb: r, g, b;
}
```

Also update `<meta name="theme-color">` in `index.html` and `theme_color`/`background_color` in `img/favicon/site.webmanifest`.

### Changing the Background Image

Replace both `img/banner-bg.webp` and `img/banner-bg.jpg`:

```bash
npx sharp-cli -i your-image.png -o img/banner-bg.webp -f webp --quality 80
npx sharp-cli -i your-image.png -o img/banner-bg.jpg -f jpeg --quality 75
```

Both WebP and JPG versions are required for browser compatibility.

### Changing Contact Info

- **LinkedIn URL:** Edit the `href` on the LinkedIn `<a>` tag in `index.html`
- **Email:** Edit the `mailto:` href on the Email `<a>` tag in `index.html`

---

## Deployment

Hosted on Cloudflare Pages with auto-deploy from `origin/master`.

Can also be deployed to Netlify, Vercel, GitHub Pages, or any static host. Upload `index.html`, `css/`, `fonts/`, `img/`, `robots.txt`, and `sitemap.xml`.

---

## Accessibility

- Skip-to-content link
- Semantic HTML (`<main>`, `<section>`, `<footer>`)
- ARIA labels on interactive elements
- Focus-visible states
- `prefers-reduced-motion` support
- Print styles
- WCAG 2.1 AA color contrast

---

## SEO

- JSON-LD Person structured data
- OpenGraph + Twitter Card meta tags
- Canonical URL
- robots.txt + sitemap.xml
- Self-hosted fonts (no third-party requests)

---

## License

All rights reserved. Personal portfolio website.
