<?php

use Denason\PersianSlug\SlugGenerator;

if (! function_exists('slug_fa')) {

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
    function slug_fa(
        string $text,
        string $separator = '-',
        bool $convertNumber = true,
        bool $useLaravelSlug = false,

    ): string {
        return SlugGenerator::make($text, $separator, $convertNumber, $useLaravelSlug);
    }
}
