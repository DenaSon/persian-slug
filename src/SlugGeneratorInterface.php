<?php

namespace Denason\PersianSlug;

interface SlugGeneratorInterface {
    public static function make(string $text, string $separator = '-', bool $convertNumber = true): string;
}
