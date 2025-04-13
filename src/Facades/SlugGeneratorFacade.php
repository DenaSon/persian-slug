<?php

namespace Denason\PersianSlug\Facades;

use Denason\PersianSlug\SlugGenerator;
use Illuminate\Support\Facades\Facade;

class SlugGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return SlugGenerator::class;

    }
}
