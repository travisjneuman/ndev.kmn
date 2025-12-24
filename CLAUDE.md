# CLAUDE.md - Kersten Neuman Portfolio

> Static portfolio website for Kersten Neuman (customer service professional)
> **Global rules from `~/.claude/` apply automatically.**

---

## Project Identity

**Type:** Static HTML/CSS website
**Framework:** Bootstrap 4 + jQuery 2.2.4
**Status:** Complete (Modernized December 2024)
**Priority:** P3 (locked for archive)
**Purpose:** Professional portfolio/CV site

---

## Recent Modernization (December 2024)

| Change | Before | After |
|--------|--------|-------|
| index.html | 423 lines (60% commented) | 173 lines (clean) |
| main.css | 2,698 lines | 517 lines (81% reduction) |
| main.js | 84 lines (3 nested ready blocks) | 167 lines (documented, single ready) |
| mail.php | Insecure (demo@spondonit.com) | Secure (kerstennn@gmail.com) |

### Security Improvements
- Fixed email recipient (was sending to template demo email)
- Added input validation and sanitization
- Implemented honeypot bot protection
- Fixed email header injection vulnerability
- Added proper error handling

### Accessibility Improvements
- Changed `lang="zxx"` to `lang="en"`
- Added skip-to-content link
- Added ARIA labels throughout
- Added screen reader text for form labels
- Added focus-visible states

### Code Quality
- Removed ~250 lines of commented template code
- Removed unused CSS (carousel, gallery, testimonial sections)
- Added CSS custom properties for theming
- Documented JavaScript with JSDoc comments
- Removed unused plugin dependencies

---

## Tech Stack

| Category | Technology |
|----------|------------|
| Frontend | HTML5, CSS3, jQuery 2.2.4 |
| Framework | Bootstrap 4 |
| Backend | PHP (contact form only) |
| Icons | Font Awesome, Linearicons |

---

## Directory Structure

```
ndev.kmn/
├── index.html           # Main homepage (clean, accessible)
├── mail.php             # Secure contact form handler
├── README.md            # Developer documentation
├── CLAUDE.md            # This file
├── css/
│   ├── main.css         # Custom styles (517 lines, CSS vars)
│   ├── bootstrap.css    # Bootstrap 4 framework
│   ├── font-awesome.min.css
│   └── linearicons.css
├── js/
│   ├── main.js          # Custom scripts (documented)
│   └── vendor/          # jQuery, Bootstrap JS
├── img/                 # Images (including banner-bg.jpg)
├── fonts/               # Icon fonts
└── [favicon files]      # PWA icons for all platforms
```

---

## Development

```bash
# Local server (no build step needed)
python -m http.server 8000

# Or with Node
npx serve .

# Visit: http://localhost:8000
```

**Note:** PHP required for mail.php contact form to function

---

## Key Features

- Full-screen hero banner with CTA
- Accessible contact form with validation
- Responsive design (mobile, tablet, desktop)
- PWA manifest support
- WCAG 2.1 accessibility compliant

---

## Key Files

| File | Purpose |
|------|---------|
| `index.html` | Clean, accessible homepage |
| `css/main.css` | Minimal, themed CSS |
| `js/main.js` | Form handling, viewport calc |
| `mail.php` | Secure email handler |
| `README.md` | Setup documentation |

---

## CSS Theming

Colors can be customized via CSS custom properties:

```css
:root {
  --color-primary: #8560f6;
  --color-text: #777777;
  --color-heading: #222222;
}
```

---

## Contact Form

Sends to: `kerstennn@gmail.com`

Features:
- Client-side validation (JS)
- Server-side validation (PHP)
- Honeypot spam protection
- Email header injection prevention
- AJAX submission with feedback

---

## Future Enhancements (Optional)

If resuming work:
- Update resume PDF (currently 2018)
- Add testimonials section
- Add project portfolio showcase
- Consider migrating to modern JS (remove jQuery)

---

## Related Documentation

- `README.md` - Developer setup guide
- `~/.claude/rules/checklists/static-sites.md` - Static site patterns

---

*Modernized: December 2024*
*Status: Complete and locked*
