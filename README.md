# Persian Slug Generator for Laravel

[![Latest Version](https://img.shields.io/packagist/v/denason/persian-slug.svg?style=flat-square)](https://packagist.org/packages/denason/persian-slug)
[![Tests](https://img.shields.io/github/workflow/status/denason/persian-slug/run-tests?style=flat-square)](https://github.com/denason/persian-slug/actions)
[![License](https://img.shields.io/github/license/denason/persian-slug.svg?style=flat-square)](LICENSE.md)

A lightweight and efficient package to generate SEO-friendly **Persian slugs** for Laravel applications.  
It supports Persian characters, converts Arabic to Persian, optionally converts numbers, and works seamlessly with or without Laravel's built-in slug feature.

---

## ✨ Features

- ✅ Convert Persian text to SEO-friendly slugs.
- 🔁 Automatically convert Arabic letters (like ك, ي) to Persian (ک, ی).
- 🔢 Optionally convert Persian/Arabic numbers to English.
- 📦 Usable as a helper function (`slug_fa()`) or via the `SlugGenerator` class.
- ⚙️ Optional support for Laravel's native slug generator.
- ✅ Fully tested and production-ready.

---

## 📦 Installation

```bash
composer require denason/persian-slug
