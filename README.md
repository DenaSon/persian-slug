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
```

> Minimum Laravel version: **9.x**

---

## 🚀 Usage

### ✅ Using Helper Function

```php
slug_fa('سلام دنیا'); // salam-donya
```

### With optional parameters:

```php
slug_fa('سلام ۱۲۳', separator: '_', convertNumber: true); // salam_123
```

#### Parameters:

| Name             | Type     | Default | Description                                       |
|------------------|----------|---------|---------------------------------------------------|
| `$text`          | string   | —       | The input string to convert                      |
| `$separator`     | string   | `-`     | Character to separate words in the slug          |
| `$convertNumber` | bool     | `true`  | Whether to convert Persian/Arabic numbers to English |
| `$useLaravelSlug`| bool     | `false` | Use Laravel's slug engine (if available)         |

---

### ✅ Using the Class

```php
use Denason\PersianSlug\SlugGenerator;

SlugGenerator::make('یادگیری لاراول'); // yadgiri-laravel
```

---

## 🔧 Configuration

No configuration required!  
You can directly use the helper or class anywhere in your Laravel app.

---

## ✅ Tests

```bash
php artisan test
```

All features of the package are covered with unit tests.

---

## 📄 License

Released under the [MIT License](LICENSE).

---

## 👤 Author

Developed by [محمد اسدی](https://github.com/denason)  
For more tools and updates, visit: [denason.ir](https://denason.ir)

---

## 💡 Tip

If you like this package, consider giving it a ⭐ on GitHub. Your support means a lot!

