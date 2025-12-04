<?php

namespace App\Data;

use App\Models\Cessie;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CessieData extends Data
{
    public function __construct(
        public string $name,
        public string $short_desc,
        public string $slug,
        public string $code,
        public string|Optional|null $description,
        public string $alamat,
        public string $region,
        public int $luas,
        public string $thumb_url,
        public Optional|array $gallery = new Optional(),
    ) {}

    public static function fromModel(Cessie $product, bool $withGallery = false): self
    {
        return new self(
            $product->name,
            $product->tags()->where('type', 'collection')->pluck('name')->implode(', '),
            $product->slug,
            $product->code,
            $product->description,
            $product->alamat,
            $product->region,
            $product->luas,
            $product->getFirstMediaUrl('thumb'),
            gallery: $withGallery ? $product->getMedia('gallery')->map(fn ($media) => $media->getUrl())->toArray() : new Optional(),
        );
    }
}
