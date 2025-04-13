<?php

namespace Denason\PersianSlug\Traits;

use Illuminate\Support\Str;
use Denason\PersianSlug\SlugGenerator;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function ($model) {
            $model->generateSlugOnCreate();
        });

        static::updating(function ($model) {
            $model->generateSlugOnUpdate();
        });
    }

    protected function generateSlugOnCreate()
    {
        $slugField = $this->getSlugField();
        $sourceField = $this->getSlugSourceField();

        if (empty($this->$slugField)) {
            $slug = SlugGenerator::make($this->$sourceField);
            $this->$slugField = $this->makeUniqueSlug($slug, $slugField);
        }
    }

    protected function generateSlugOnUpdate()
    {
        $slugField = $this->getSlugField();
        $sourceField = $this->getSlugSourceField();

        if ($this->isDirty($sourceField)) {
            $slug = SlugGenerator::make($this->$sourceField);
            $this->$slugField = $this->makeUniqueSlug($slug, $slugField);
        }
    }

    protected function getSlugField(): string
    {
        return property_exists($this, 'slugField') ? $this->slugField : 'slug';
    }

    protected function getSlugSourceField(): string
    {
        return property_exists($this, 'slugSource') ? $this->slugSource : 'title';
    }

    protected function makeUniqueSlug(string $slug, string $slugField): string
    {
        $originalSlug = $slug;
        $i = 1;

        while (static::where($slugField, $slug)->exists()) {
            $slug = $originalSlug . '-' . $i++;
        }

        return $slug;
    }
}
