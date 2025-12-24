# CLAUDE.md - Kersten Neuman Portfolio

> Single-page portfolio website for Kersten M. Neuman (customer service professional)
> **Global rules from `~/.claude/` apply automatically.**

---

## Project Identity

| Field | Value |
|-------|-------|
| **Type** | Static HTML/CSS/JS (no backend) |
| **Framework** | Bootstrap 4 + jQuery 2.2.4 (minimal) |
| **Status** | Complete |
| **Priority** | P3 (maintenance mode) |
| **Live URL** | https://kersten.neuman.dev |
| **Purpose** | Professional portfolio/landing page |

---

## Current State (December 2025)

This is a **single-page portfolio** with:
- Full-viewport hero section (no scrolling needed)
- Two contact buttons: LinkedIn + Email (mailto)
- Integrated footer at bottom of viewport
- OpenGraph/Twitter Card social sharing
- Modern favicon setup
- WebP background with JPG fallback (4K, 637KB primary)
- No backend dependencies (pure static)

### File Counts

| File | Lines | Purpose |
|------|-------|---------|
| `index.html` | 115 | Single-page layout + WebP detection |
| `css/main.css` | 341 | Custom styles with CSS variables |
| `js/main.js` | 24 | Mobile viewport fix only |

### What Was Removed/Archived

- Contact form section (was failing on Cloudflare)
- mail.php (PHP not supported on static host)
- Header with logo (cleaner single-page look)
- 26 old favicon files (replaced with modern set)
- Font Awesome CSS (unused, only Linearicons used)
- SCSS source files (archived)
- ~100 unused template files (moved to `.archive/`)
- ~2,300 lines of unused CSS

---

## Tech Stack

| Category | Technology |
|----------|------------|
| Markup | HTML5, Semantic elements |
| Styling | CSS3, CSS Custom Properties |
| Layout | Flexbox, Bootstrap 4 grid |
| JavaScript | jQuery 2.2.4 (minimal usage) |
| Icons | Linearicons Free |
| Fonts | Poppins (Google Fonts) |
| Hosting | Cloudflare Pages (static) |

---

## Directory Structure

```
ndev.kmn/
├── index.html              # Single-page portfolio (115 lines)
├── README.md               # Comprehensive documentation
├── CLAUDE.md               # This file
├── .gitignore
│
├── css/
│   ├── main.css            # Custom styles (341 lines)
│   ├── bootstrap.css       # Bootstrap 4
│   └── linearicons.css     # Icon font
│
├── js/
│   ├── main.js             # Minimal JS (24 lines)
│   └── vendor/             # jQuery, Bootstrap, Popper
│
├── fonts/                  # Linearicons font files
│
├── img/
│   ├── banner-bg.webp      # Hero background (637KB, primary)
│   ├── banner-bg.jpg       # Hero background (946KB, fallback)
│   ├── favicon/            # Modern favicon set
│   │   ├── favicon.svg
│   │   ├── favicon.ico
│   │   ├── favicon-96x96.png
│   │   ├── apple-touch-icon.png
│   │   ├── site.webmanifest
│   │   └── web-app-manifest-*.png
│   ├── logo/
│   │   └── logo.png        # Brand logo (not displayed)
│   └── social/
│       └── og-image.png    # OpenGraph image (1200x630)
│
└── .archive/               # Archived unused files
    ├── README.md           # Archive contents
    ├── banner-bg.png       # Original 12MB background
    └── docs/KerstenNeuman2018.pdf  # Old resume
```

---

## Development

```bash
# Start local server
python -m http.server 8000
# or
npx serve .

# Visit http://localhost:8000
```

No build step. No dependencies to install. Pure static files.

---

## Deployment

The site is hosted on Cloudflare Pages. To deploy:
1. Push to `origin/master`
2. Cloudflare auto-deploys from GitHub

No server configuration needed - it's all static files.

---

## CSS Theming

Colors are defined via CSS custom properties in `main.css`:

```css
:root {
  --color-primary: #8560f6;
  --color-primary-rgb: 133, 96, 246;
  --color-text: #777777;
  --color-heading: #222222;
  --color-white: #ffffff;
  --font-family: "Poppins", sans-serif;
}
```

To change the brand color, update `--color-primary` and `--color-primary-rgb`.
Also update `<meta name="theme-color">` in index.html.

---

## Accessibility

The site meets WCAG 2.1 AA standards:
- Skip-to-content link
- Semantic HTML structure (`<main>`, `<section>`, `<footer>`)
- ARIA labels on interactive elements
- Focus-visible states
- Sufficient color contrast
- Screen reader friendly
- Print styles

---

## SEO & Social Sharing

**Implemented:**
- Meta description and keywords
- OpenGraph tags (Facebook, LinkedIn)
- Twitter Card tags
- og-image.png for social previews
- Modern favicon set with site.webmanifest
- Theme color for mobile browsers

---

## Future Enhancement Ideas

### Quick Wins (Low Effort)

| Enhancement | Effort | Impact |
|-------------|--------|--------|
| Add structured data (JSON-LD) | 30 min | SEO improvement |
| Remove jQuery entirely | 1 hour | Eliminate dependency |
| Add subtle fade-in animation | 30 min | Polish |
| Self-host Poppins font | 30 min | Privacy, speed |

### Content Additions (Requires User Input)

| Enhancement | Notes |
|-------------|-------|
| Professional headshot | Would add personal touch to hero |
| Brief bio paragraph | 2-3 sentences about experience |
| Downloadable resume | Update from 2018 version |
| LinkedIn recommendations | Social proof |

### Technical Improvements

| Enhancement | Benefit |
|-------------|---------|
| Remove jQuery | Currently only used for 1 function (could be vanilla JS) |
| Inline critical CSS | Faster first paint |
| Add preload hints | Faster font/image loading |
| Add analytics | Plausible or Fathom (privacy-respecting) |

### Design Enhancements

| Enhancement | Description |
|-------------|-------------|
| Icon buttons | Use LinkedIn/email icons instead of arrows |
| Dark mode | Toggle based on system preference |
| Subtle animations | CSS fade-in on page load |

---

## Session History

### December 2025 - Major Modernization

**Initial State:**
- 423-line index.html with 60% commented code
- 2,698-line CSS with 40% unused
- Broken contact form (sending to wrong email)
- Security vulnerabilities

**Changes Made (Phase 1):**
1. Fixed critical security issues in mail.php
2. Removed ~250 lines of dead HTML
3. Reduced CSS by 81%
4. Added accessibility features (WCAG 2.1)
5. Documented JavaScript with JSDoc

**Changes Made (Phase 2):**
1. Removed contact form entirely (was failing on Cloudflare)
2. Converted to single-page layout (no scrolling)
3. Added mailto email link next to LinkedIn
4. Integrated footer into hero section
5. Removed header/logo for cleaner look
6. Updated to modern favicon set
7. Deleted mail.php (no backend needed)

**Changes Made (Phase 3):**
1. Added OpenGraph and Twitter Card meta tags
2. Added og-image.png for social sharing
3. Removed unused Font Awesome CSS
4. Archived ~100 unused files to `.archive/`
5. Created comprehensive README.md documentation
6. Updated CLAUDE.md for handoff

**Changes Made (Phase 4):**
1. Optimized 12MB PNG background image
2. Converted to 637KB WebP (95% reduction)
3. Created 946KB JPG fallback for Safari <14
4. Added WebP detection script in `<head>`
5. Added `.webp` CSS class for progressive enhancement
6. Archived original 12MB PNG

**Final State:**
- Pure static site (HTML/CSS/JS only)
- Single viewport, no scrolling
- LinkedIn + Email contact options
- Full social sharing support
- WebP image with JPG fallback
- ~480 total lines of custom code

---

## Handoff Notes

**For the next engineer:**

1. **No backend** - This is pure static. Deploy anywhere (Netlify, Vercel, GitHub Pages, Cloudflare Pages).

2. **jQuery is vestigial** - It's only used for one function (mobile viewport fix). Could easily be removed.

3. **Bootstrap is heavy** - Only using grid and some utilities. Could be replaced with ~50 lines of custom CSS if desired.

4. **Logo exists but unused** - `img/logo/logo.png` is available if header is wanted back.

5. **Fonts load from Google** - Poppins is loaded via Google Fonts. Could be self-hosted for privacy.

6. **Contact goes to Gmail** - The mailto link uses `kerstennn@gmail.com`.

7. **Archive folder** - The `.archive/` folder contains the original 12MB PNG and an old 2018 resume. Can be deleted (~13MB savings) or kept for reference.

8. **Background images** - Both WebP and JPG versions are required. WebP is primary (637KB), JPG is fallback for old Safari (946KB). Original 12MB PNG is in `.archive/`.

---

## Related Documentation

| Document | Purpose |
|----------|---------|
| `README.md` | Comprehensive developer documentation |
| `.archive/README.md` | Archive contents explanation |
| `~/.claude/rules/checklists/static-sites.md` | Static site patterns |

---

*Last updated: December 2025*
*Status: Complete - ready for handoff*
