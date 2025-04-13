# Persian Slug Generator for Laravel

A lightweight and SEO-friendly Persian slug generator for Laravel. Convert Persian, Arabic, and English strings into URL-friendly slugs with ease.

---

## Features

- ✅ Converts Persian, Arabic, and English text to SEO-friendly slugs
- 🔢 Replaces Persian and Arabic numbers with English equivalents
- 🔀 Optional support for Laravel's `Str::slug()`
- 🧱 Blade directive `@slugfa('متن')` for generating slugs in views
- 🧪 Well-tested with PHPUnit
- 🧬 Includes `HasSlug` trait for automatic slug generation in Eloquent models

---

## Installation

```bash
composer require denason/persian-slug
```

If you're using Laravel < 5.5, register the service provider manually in `config/app.php`:

```php
Denason\PersianSlug\PersianSlugServiceProvider::class,
```

---

## Usage

### 1. Using the Helper Function

```php
slug_fa('سلام دنیا ۱۲۳'); // Output: سلام-دنیا-123
```

### 2. Using the Static Method

```php
use Denason\PersianSlug\SlugGenerator;

SlugGenerator::make('سلام دنیا ۱۲۳'); // Output: سلام-دنیا-123
```

Optional Parameters:

```php
SlugGenerator::make(
    string $text,
    string $separator = '-',
    bool $convertNumber = true,
    bool $useLaravelSlug = false
): string
```

### 3. Blade Directive

Use the Blade directive inside your views:

```blade
@slugfa('متن تست برای اسلاگ سئو فارسی')
<!-- Output: متن-تست-برای-اسلاگ-سئو-فارسی -->
```

### 4. Using `HasSlug` Trait in Models

Automatically generate slugs when saving Eloquent models:

```php
use Denason\PersianSlug\Concerns\HasSlug;

class Post extends Model
{
    use HasSlug;

    protected $slugSource = 'title';      // Field to slugify
    protected $slugField  = 'slug';        // Field to store slug
}
```

This will auto-generate a unique slug based on the `title` attribute when saving the model.



## Requirements

- PHP 8.0 or higher
- Laravel 9, 10, 11, or 12

---

## License

MIT © [Mohammad Asadi](https://github.com/denason)

---

## Contributions

Pull requests are welcome! For major changes, please open an issue first to discuss what you would like to change.

---

## Credits

Crafted with ❤️ by [Mohammad Asadi](https://github.com/denason), Iran 🇮🇷

---

## Links

- 📦 Packagist: [denason/persian-slug](https://packagist.org/packages/denason/persian-slug)
- 💻 GitHub: [github.com/denason/persian-slug](https://github.com/denason/persian-slug)
- 🌐 Website: [denason.ir](https://denason.ir)

