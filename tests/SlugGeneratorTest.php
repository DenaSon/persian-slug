<?php

use Denason\PersianSlug\SlugGenerator;
use PHPUnit\Framework\TestCase;

class SlugGeneratorTest extends TestCase
{
    public function test_slug_is_generated_correctly()
    {
        $result = SlugGenerator::make('سلام دنیا');
        $this->assertEquals('سلام-دنیا', $result);
    }

    public function test_slug_with_english_and_persian()
    {
        $result = SlugGenerator::make('Laravel در قلب من');
        $this->assertEquals('laravel-در-قلب-من', $result);
    }

    public function test_slug_with_numbers_conversion()
    {
        $result = SlugGenerator::make('۱۲۳ تست', '-', true);
        $this->assertEquals('123-تست', $result);
    }

    public function test_slug_with_custom_separator()
    {
        $result = SlugGenerator::make('تست جداکننده', '_');
        $this->assertEquals('تست_جداکننده', $result);
    }

    public function test_slug_without_number_conversion()
    {
        $result = SlugGenerator::make('۱۲۳ تست', '-', false);
        $this->assertEquals('۱۲۳-تست', $result);
    }


    public function test_slug_with_laravel_str_slug_enabled()
    {
        $text = 'سلام دنیا ۱۲۳';

        $slug = SlugGenerator::make($text, '-', true, true);

        $this->assertNotEmpty($slug);
        $this->assertMatchesRegularExpression('/^[a-z0-9\-]+$/', $slug);
    }


    public function test_slug_fa_function_returns_expected_slug()
    {
        $slug = slug_fa('سلام دنیا ۱۲۳');
        $this->assertEquals('سلام-دنیا-123', $slug);
    }

    public function test_slug_fa_with_laravel_slug_enabled()
    {
        $slug = slug_fa('سلام دنیا ۱۲۳', '-', true, true);
        $this->assertEquals('slam-dnya-123', $slug); // بسته به Str::slug
    }

    public function test_slug_fa_without_number_conversion()
    {
        $slug = slug_fa('سلام دنیا ۱۲۳', '-', false);
        $this->assertEquals('سلام-دنیا-۱۲۳', $slug);
    }



}
