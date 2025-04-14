<?php

namespace Denason\PersianSlug;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PersianSlugServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SlugGenerator::class, function () {
            return new SlugGenerator();
        });

        $this->app->bind(SlugGeneratorInterface::class, SlugGenerator::class);

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/persianSlug.php' => config_path('persian-slug.php'),
        ], 'persian-slug-config');

    }
}
