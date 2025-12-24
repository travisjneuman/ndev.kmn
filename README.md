# Kersten M. Neuman Portfolio

Single-page portfolio website for Kersten M. Neuman, a Customer Service Professional based in Grand Rapids, Michigan.

## Quick Start

```bash
# Start local server (Python)
python -m http.server 8000

# Or with Node.js
npx serve .

# Visit http://localhost:8000
```

## Project Structure

```
ndev.kmn/
├── index.html          # Single-page portfolio
├── css/
│   ├── main.css        # Custom styles (~370 lines)
│   ├── bootstrap.css   # Bootstrap 4 framework
│   ├── font-awesome.min.css
│   └── linearicons.css
├── js/
│   ├── main.js         # Minimal JS (~25 lines)
│   └── vendor/         # jQuery, Bootstrap, Popper
├── img/                # Images
├── fonts/              # Icon fonts
└── [favicon files]     # App icons for various platforms
```

## Features

- **Single-page layout** - No scrolling required, everything visible at once
- **LinkedIn + Email buttons** - Direct contact options
- **Accessibility compliant** - WCAG 2.1, skip links, focus states
- **Mobile-first responsive** - Works on all screen sizes
- **No backend required** - Pure static HTML/CSS/JS

## Technology Stack

| Category | Technology |
|----------|------------|
| Framework | Bootstrap 4 |
| JavaScript | jQuery 2.2.4 (minimal usage) |
| Icons | Font Awesome, Linearicons |
| Layout | Flexbox, CSS Custom Properties |

## Customization

### Colors

Edit CSS custom properties in `css/main.css`:

```css
:root {
  --color-primary: #8560f6;
  --color-primary-rgb: 133, 96, 246;
  --color-text: #777777;
  --color-heading: #222222;
}
```

### Content

Edit `index.html` to update:
- Name and title in hero section
- LinkedIn profile URL
- Email address (mailto link)
- Copyright text in footer

## Deployment

1. Upload all files to any static hosting (Cloudflare Pages, Netlify, GitHub Pages, etc.)
2. No server-side configuration needed
3. Works from any CDN or static file server

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

All rights reserved. This is a personal portfolio website.

---

*Last updated: December 2024*
