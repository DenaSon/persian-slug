<?php
namespace Denason\PersianSlug;

class SlugGenerator implements SlugGeneratorInterface
{
    /**
     * Generate a Persian-friendly SEO slug from the given string.
     *
     * @param string $text The input text to slugify.
     * @param string $separator The character used to separate slug parts. Default is '-'.
     * @param bool $convertNumber Whether to convert Persian and Arabic numbers to English. Default is true.
     * @param bool $useLaravelSlug Whether to use Laravel's Str::slug function. Default is false.
     *
     * @return string The generated slug.
     */
    public static function make(
        string $text,
        string $separator = '-',
        bool $convertNumber = true,
        bool $useLaravelSlug = false,
        string $language = 'fa'
    ): string {
        if ($convertNumber) {
            $text = self::convertPersianArabicNumbers($text);
        }

        if ($useLaravelSlug) {
            return \Illuminate\Support\Str::slug($text, $separator, $language);
        }

        $text = self::sanitizeText($text);
        $text = preg_replace('/[\s\-]+/', $separator, $text);
        $text = trim($text, $separator);
        $text = mb_strtolower($text, 'UTF-8');

        return $text;
    }

    protected static function convertPersianArabicNumbers(string $text): string
    {
        $persian = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        $arabic  = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
        $english = ['0','1','2','3','4','5','6','7','8','9'];

        return str_replace(array_merge($persian, $arabic), $english, $text);
    }

    protected static function sanitizeText(string $text): string
    {
        return preg_replace('/[^آ-یa-zA-Z0-9۰-۹٠-٩\-_\s]+/u', '', $text);
    }
}
