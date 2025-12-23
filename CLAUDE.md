# CLAUDE.md - Kersten Neuman Portfolio

> Static portfolio website for Kersten Neuman (customer service professional)
> **Global rules from `~/.claude/` apply automatically.**

---

## Project Identity

**Type:** Static HTML/CSS website
**Framework:** Bootstrap 4 + jQuery
**Status:** Maintenance
**Priority:** P3 (complete and lock)
**Purpose:** Professional portfolio/CV site

---

## Tech Stack

| Category | Technology |
|----------|------------|
| Frontend | HTML5, CSS3, jQuery |
| Framework | Bootstrap 4 |
| Styling | SCSS → CSS |
| Backend | PHP (mail form only) |
| Plugins | Owl Carousel, Magnific Popup, Nice Select |

---

## Directory Structure

```
ndev.kmn/
├── index.html           # Main homepage
├── generic.html         # Generic page template
├── elements.html        # UI elements showcase
├── mail.php             # Contact form handler
├── css/                 # Compiled stylesheets
│   ├── main.css         # Custom styles
│   ├── bootstrap.css    # Bootstrap framework
│   └── [plugin CSS]
├── scss/                # SCSS source files
│   ├── main.scss        # Custom styles source
│   └── bootstrap/       # Bootstrap source
├── js/                  # JavaScript files
│   ├── main.js          # Custom scripts
│   └── [jQuery plugins]
├── img/                 # Images
└── KerstenNeuman2018.pdf  # Resume
```

---

## Development

```bash
# Local server (no build step needed)
python3 -m http.server 8000

# Or with Node
npx serve .

# Visit: http://localhost:8000
```

**Note:** PHP required for mail.php contact form

---

## Key Features

- Responsive Bootstrap layout
- Hero banner with call-to-action
- Image gallery/carousel
- Contact form with email
- PWA manifest support

---

## Key Files

| File | Purpose |
|------|---------|
| `index.html` | Homepage content |
| `css/main.css` | Primary styling |
| `scss/main.scss` | SCSS source |
| `mail.php` | Contact form processor |

---

## Styling Workflow

If modifying styles:
1. Edit `scss/main.scss`
2. Compile SCSS to CSS
3. Test in browser

---

## Completion Plan

This project should be:
1. Content reviewed and updated
2. Styling finalized
3. Locked and documented for portfolio

---

## Related Skills

| Task | Skill |
|------|-------|
| Static site work | `generic-static-code-reviewer` |
| Design patterns | `generic-static-design-system` |

---

## Quick Start

| I want to... | Command |
|--------------|---------|
| Start any task | `/start-task [description]` |
| Check project status | `/gsd:progress` |
| Start new multi-phase work | `/gsd:new-project` |

---

*Global workflow rules loaded from `~/.claude/`*
*See `~/.claude/rules/checklists/static-sites.md` for static site patterns*
