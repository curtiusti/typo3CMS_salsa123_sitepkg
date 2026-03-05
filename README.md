# TYPO3 Sitepackage — Fictitious Salsa School

A custom TYPO3 sitepackage built as part of a university assignment, covering the full cycle of CMS installation, configuration, and front-end integration — without the use of any pre-made templates.

🔗 [TYPO3 Official Website](https://typo3.org/)

---

## Overview

This project involved setting up TYPO3 CMS from scratch and developing a fully custom sitepackage for a fictional salsa school website. All Fluid HTML templates, TypoScript configuration and front-end styling were written manually.

The site is no longer live, but screenshots of the local version are available below.

---

## Tech Stack

| Layer | Technology |
|---|---|
| CMS | TYPO3 v13.4 |
| Templating | Fluid HTML |
| CMS Configuration | TypoScript |
| Styling | TailwindCSS (built locally, production-ready CSS) |
| Map Integration | OpenStreetMap via TYPO3 extension |
| Internationalisation | TYPO3 backend (DE / EN) |

---

## Features

### 🧭 Three-level Navigation
A fully custom navigation built with TypoScript, Fluid HTML and TailwindCSS, featuring:
- Main menu and submenus
- Hoverable third-level dropdown menus
- Meta navigation with **German / English language switcher**

> The language toggle is implemented as a custom Fluid partial, wired to TYPO3's built-in language handling.

*[screenshot — navbar]*
*[screenshot — third level hover]*

---

### 🗺️ OpenStreetMap Integration
Embedded on the *About Us* page via a TYPO3 extension, configured through TypoScript to display the school's location without relying on proprietary mapping APIs.

*[screenshot — OSM]*

---

### 🖼️ Custom Image Display
All image rendering is handled through custom Fluid templates, giving full control over layout and presentation across different page types.

*[screenshot — image display]*

---

## Project Structure

```
packages/salsa_sitepackage/
├── Configuration/
│   └── TypoScript/          # Menu, page layout, extension config
├── Resources/
│   ├── Private/
│   │   ├── Templates/       # Page-level Fluid templates
│   │   ├── Layouts/         # Base layouts
│   │   └── Partials/        # Reusable components (navbar, footer, lang switcher…)
│   └── Public/
│       ├── Css/             # TailwindCSS production build
│       └── JavaScript/
├── ext_emconf.php
└── ext_localconf.php
```

---

## What I Learned

- Structuring a TYPO3 sitepackage from an empty scaffold
- Writing TypoScript for menu generation and page configuration
- Building reusable UI components with Fluid HTML partials
- Integrating a TailwindCSS workflow in a CMS environment
- Handling multilingual content and routing in TYPO3's backend
- Configuring third-party extensions (OSM) via TypoScript

---

## Context

University project — *Medieninformatik Online*, Hochschule Emden/Leer
