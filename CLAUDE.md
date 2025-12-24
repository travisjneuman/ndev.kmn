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

## Current State (December 2024)

This is a **single-page portfolio** with:
- Full-viewport hero section (no scrolling needed)
- Two contact buttons: LinkedIn + Email (mailto)
- Integrated footer at bottom of viewport
- No backend dependencies (pure static)

### File Counts
| File | Lines | Purpose |
|------|-------|---------|
| `index.html` | 95 | Single-page layout |
| `css/main.css` | 367 | Custom styles with CSS variables |
| `js/main.js` | 24 | Mobile viewport fix only |

### What Was Removed
- Contact form section (was failing on Cloudflare)
- mail.php (PHP not supported on static host)
- Header with logo (cleaner single-page look)
- 26 old favicon files (replaced with modern set)
- ~2,300 lines of unused CSS

---

## Tech Stack

| Category | Technology |
|----------|------------|
| Markup | HTML5 |
| Styling | CSS3, CSS Custom Properties |
| Layout | Flexbox, Bootstrap 4 grid |
| JavaScript | jQuery 2.2.4 (minimal usage) |
| Icons | Linearicons |
| Hosting | Cloudflare Pages (static) |

---

## Directory Structure

```
ndev.kmn/
├── index.html              # Single-page portfolio
├── README.md               # Developer documentation
├── CLAUDE.md               # This file
├── css/
│   ├── main.css            # Custom styles (367 lines)
│   ├── bootstrap.css       # Bootstrap 4
│   ├── font-awesome.min.css
│   └── linearicons.css
├── js/
│   ├── main.js             # Minimal JS (24 lines)
│   └── vendor/             # jQuery, Bootstrap, Popper
├── img/
│   ├── banner-bg.jpg       # Hero background
│   ├── favicon/            # Modern favicon set
│   │   ├── favicon.svg
│   │   ├── favicon.ico
│   │   ├── favicon-96x96.png
│   │   ├── apple-touch-icon.png
│   │   ├── site.webmanifest
│   │   └── web-app-manifest-*.png
│   └── logo/
│       └── logo.png        # Brand logo (not displayed)
└── fonts/                  # Icon fonts
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

---

## Accessibility

The site meets WCAG 2.1 AA standards:
- Skip-to-content link
- Semantic HTML structure
- ARIA labels on interactive elements
- Focus-visible states
- Sufficient color contrast
- Screen reader friendly

---

## Future Enhancement Ideas

### Quick Wins (Low Effort)

| Enhancement | Effort | Impact |
|-------------|--------|--------|
| Add OpenGraph meta tags | 15 min | Better social sharing |
| Add structured data (JSON-LD) | 30 min | SEO improvement |
| Remove jQuery entirely | 1 hour | Eliminate dependency |
| Add subtle fade-in animation | 30 min | Polish |

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
| Particle background | Subtle animated background (optional) |

---

## Session History

### December 2024 - Major Modernization

**Initial State:**
- 423-line index.html with 60% commented code
- 2,698-line CSS with 40% unused
- Broken contact form (sending to wrong email)
- Security vulnerabilities

**Changes Made:**
1. Fixed critical security issues in mail.php
2. Removed ~250 lines of dead HTML
3. Reduced CSS by 81% (2,698 → 517 lines)
4. Added accessibility features (WCAG 2.1)
5. Documented JavaScript with JSDoc

**Second Pass:**
1. Removed contact form entirely (was failing on Cloudflare)
2. Converted to single-page layout (no scrolling)
3. Added mailto email link next to LinkedIn
4. Integrated footer into hero section
5. Removed header/logo for cleaner look
6. Updated to modern favicon set
7. Deleted mail.php (no backend needed)
8. Reduced CSS further (517 → 367 lines)
9. Reduced JS (156 → 24 lines)

**Final State:**
- Pure static site (HTML/CSS/JS only)
- Single viewport, no scrolling
- LinkedIn + Email contact options
- ~500 total lines of custom code

---

## Git History (Key Commits)

```
7b31126 chore: update favicons and add new logo
28c8425 style: remove logo header for cleaner single-page look
c90e572 refactor: convert to single-page layout with mailto link
934c13b fix: address code review findings
9ccbfff refactor: modernize portfolio with security fixes and 90% code reduction
```

---

## Handoff Notes

**For the next engineer:**

1. **No backend** - This is pure static. Deploy anywhere (Netlify, Vercel, GitHub Pages, Cloudflare Pages).

2. **jQuery is vestigial** - It's only used for one function (mobile viewport fix). Could easily be removed.

3. **Bootstrap is heavy** - Only using grid and some utilities. Could be replaced with ~50 lines of custom CSS if desired.

4. **Logo exists but unused** - `img/logo/logo.png` is available if header is wanted back.

5. **Fonts load from Google** - Poppins is loaded via Google Fonts. Could be self-hosted for privacy.

6. **Contact goes to Gmail** - The mailto link uses `kerstennn@gmail.com`.

---

## Related Documentation

| Document | Purpose |
|----------|---------|
| `README.md` | Quick start for developers |
| `~/.claude/rules/checklists/static-sites.md` | Static site patterns |

---

*Last updated: December 2024*
*Status: Complete - ready for handoff*
