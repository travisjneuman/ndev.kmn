# Kersten M. Neuman Portfolio

Professional portfolio website for Kersten M. Neuman, a Customer Service Professional based in Grand Rapids, Michigan.

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
├── index.html          # Main homepage
├── mail.php            # Contact form handler
├── css/
│   ├── main.css        # Custom styles
│   ├── bootstrap.css   # Bootstrap 4 framework
│   ├── font-awesome.min.css
│   └── linearicons.css
├── js/
│   ├── main.js         # Custom JavaScript
│   └── vendor/         # Third-party libraries
├── img/                # Images
├── fonts/              # Icon fonts
└── [favicon files]     # App icons for various platforms
```

## Features

- Responsive hero section with professional introduction
- Secure contact form with validation
- Accessibility compliant (WCAG 2.1)
- Mobile-first responsive design
- PWA manifest for mobile installation

## Technology Stack

| Category | Technology |
|----------|------------|
| Framework | Bootstrap 4 |
| JavaScript | jQuery 2.2.4 |
| Backend | PHP (mail only) |
| Icons | Font Awesome, Linearicons |

## Contact Form Setup

The contact form requires PHP mail functionality. Configure your server's mail settings:

1. Ensure PHP `mail()` function is enabled
2. Update `mail.php` with the correct recipient email
3. Add your domain to the allowed referers list in `mail.php`

### Security Features

- Input validation and sanitization
- Email header injection prevention
- Honeypot field for bot detection
- Referer validation

## Customization

### Colors

Edit CSS custom properties in `css/main.css`:

```css
:root {
  --color-primary: #8560f6;
  --color-text: #777777;
  --color-heading: #222222;
}
```

### Content

Edit `index.html` to update:
- Name and title in hero section
- LinkedIn profile URL
- Contact form section text

## Deployment

1. Upload all files to your web server
2. Ensure PHP is enabled for `mail.php`
3. Configure SMTP if required by your host
4. Update domain in `mail.php` allowed_domains array

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

All rights reserved. This is a personal portfolio website.

---

*Last updated: December 2024*
