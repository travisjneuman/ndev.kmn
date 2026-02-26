<p align="center">
  <a href="https://kersten.neuman.dev"><img src="img/logo/logo.png" alt="KMN" width="120"></a>
</p>

<h1 align="center">Kersten M. Neuman</h1>

<p align="center">
  <strong>Customer Service Professional — Grand Rapids, MI</strong>
</p>

<p align="center">
  <a href="https://kersten.neuman.dev"><img src="https://img.shields.io/badge/Live_Site-kersten.neuman.dev-8560f6?style=for-the-badge&logo=googlechrome&logoColor=white" alt="Live Site"></a>
  <a href="https://pages.cloudflare.com"><img src="https://img.shields.io/badge/Cloudflare_Pages-Deployed-f38020?style=for-the-badge&logo=cloudflarepages&logoColor=white" alt="Cloudflare Pages"></a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/Dependencies-0-brightgreen?style=flat-square" alt="Zero Dependencies">
  <img src="https://img.shields.io/badge/Build_Step-None-brightgreen?style=flat-square" alt="No Build Step">
  <img src="https://img.shields.io/badge/Fonts-Self_Hosted-8560f6?style=flat-square" alt="Self-Hosted Fonts">
  <img src="https://img.shields.io/badge/Third_Party_Requests-0-brightgreen?style=flat-square" alt="Zero Third-Party Requests">
  <a href="https://github.com/travisjneuman/ndev.kmn/generate"><img src="https://img.shields.io/badge/Use_This_Template-2ea44f?style=flat-square&logo=github&logoColor=white" alt="Use This Template"></a>
</p>

---

Single-page portfolio that loads fast, respects privacy, and just works. No frameworks, no CDNs, no tracking, no build tools. One HTML file, one CSS file, three font files, and a gorgeous full-viewport hero.

## The Stack (All of It)

```
index.html    ← the whole site
css/main.css  ← every style
fonts/        ← Poppins (3 weights, woff2, latin subset)
img/          ← WebP hero + JPG fallback + favicons + OG image
```

That's it. Seriously. `python -m http.server 8000` and you're running.

## Color Palette

<p>
  <img src="https://img.shields.io/badge/%E2%96%88%E2%96%88%E2%96%88%E2%96%88-8560f6?style=for-the-badge&labelColor=8560f6" alt="#8560f6">
  <img src="https://img.shields.io/badge/%E2%96%88%E2%96%88%E2%96%88%E2%96%88-777777?style=for-the-badge&labelColor=777777" alt="#777777">
  <img src="https://img.shields.io/badge/%E2%96%88%E2%96%88%E2%96%88%E2%96%88-222222?style=for-the-badge&labelColor=222222" alt="#222222">
  <img src="https://img.shields.io/badge/%E2%96%88%E2%96%88%E2%96%88%E2%96%88-ffffff?style=for-the-badge&labelColor=ffffff" alt="#ffffff">
</p>

| Token | Hex | Role |
|-------|-----|------|
| `--color-primary` | `#8560f6` | Overlay, accents, buttons, theme |
| `--color-text` | `#777777` | Body copy |
| `--color-heading` | `#222222` | Headlines (print) |
| `--color-white` | `#ffffff` | Text on overlay |

## What You Get

- **Zero dependencies** — no npm install, no node_modules, no package.json
- **Self-hosted Poppins** — no Google Fonts API calls, no GDPR headaches (~23KB total)
- **WebP + JPG hero** — 637KB primary, 946KB fallback, JS detection for progressive enhancement
- **Full SEO suite** — JSON-LD Person schema, OpenGraph, Twitter Cards, canonical URL, sitemap, robots.txt
- **Accessible** — skip-to-content, semantic HTML, ARIA labels, focus-visible, `prefers-reduced-motion`
- **Staggered animations** — GPU-accelerated fade-in on load, glow hover on buttons
- **Print styles** — because someone will Ctrl+P this

## Use as a Template

This repo is a **GitHub template** — click the green **"Use this template"** button to create your own zero-dependency portfolio in seconds. Then customize the content, swap the hero image, update the color palette, and deploy to any static host.

See the [Customization](#customization) section below for what to change.

## Quick Start

```bash
# Python
python -m http.server 8000

# Node
npx serve .

# Then visit http://localhost:8000
```

## Deployment

Auto-deploys from `master` via Cloudflare Pages. Works on any static host — upload the files and go.

## Customization

**Brand color:** edit `--color-primary` and `--color-primary-rgb` in `css/main.css`, update `<meta name="theme-color">` in `index.html`, and `theme_color` in `img/favicon/site.webmanifest`.

**Hero image:** replace both `img/banner-bg.webp` and `img/banner-bg.jpg`. Both formats needed for browser compat.

**Contact info:** edit the `href` attributes on the LinkedIn and Email buttons in `index.html`.

## Typography

**Poppins** — self-hosted, Latin subset only.

| Weight | Where |
|--------|-------|
| 100 (Thin) | Hero name |
| 300 (Light) | Body text, tagline |
| 500 (Medium) | Buttons, headings |

## License

All rights reserved. Personal portfolio website.
