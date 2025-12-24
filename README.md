# Kersten M. Neuman Portfolio

Single-page portfolio website for Kersten M. Neuman, a Customer Service Professional based in Grand Rapids, Michigan.

**Live:** https://kersten.neuman.dev

## Quick Start

```bash
# Start local server
python -m http.server 8000
# or
npx serve .

# Visit http://localhost:8000
```

No build step. No dependencies. Pure static files.

## Project Structure

```
ndev.kmn/
├── index.html              # Single-page portfolio (~95 lines)
├── css/
│   ├── main.css            # Custom styles (~370 lines)
│   ├── bootstrap.css       # Bootstrap 4
│   └── [icon CSS files]
├── js/
│   ├── main.js             # Minimal JS (~25 lines)
│   └── vendor/             # jQuery, Bootstrap, Popper
├── img/
│   ├── banner-bg.jpg       # Hero background
│   ├── favicon/            # Favicon files
│   └── logo/               # Logo (not currently displayed)
└── fonts/                  # Icon fonts
```

## Features

- **Single-page layout** - Full viewport, no scrolling
- **LinkedIn + Email buttons** - Direct contact options
- **Accessibility** - WCAG 2.1 AA compliant
- **Responsive** - Mobile, tablet, desktop
- **No backend** - Pure static, deploy anywhere

## Tech Stack

| Category | Technology |
|----------|------------|
| Layout | Bootstrap 4, Flexbox |
| Styling | CSS Custom Properties |
| JavaScript | jQuery 2.2.4 (minimal) |
| Icons | Linearicons |
| Fonts | Poppins (Google Fonts) |

## Customization

### Colors

Edit CSS variables in `css/main.css`:

```css
:root {
  --color-primary: #8560f6;
  --color-primary-rgb: 133, 96, 246;
}
```

### Content

Edit `index.html` to update:
- Name and title
- LinkedIn URL
- Email address (mailto link)
- Copyright text

## Deployment

Push to `origin/master` → Cloudflare Pages auto-deploys.

Or upload to any static host (Netlify, Vercel, GitHub Pages, etc.).

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Documentation

See `CLAUDE.md` for:
- Full project history
- Future enhancement ideas
- Technical handoff notes

## License

All rights reserved. Personal portfolio website.

---

*Last updated: December 2024*
