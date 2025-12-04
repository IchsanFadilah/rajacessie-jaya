<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Tags\Tag as TagsTag;

class Tag extends TagsTag
{
    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function auctions(): MorphToMany
    {
        return $this->morphedByMany(Auction::class, 'taggable');
    }

    public function projects(): MorphToMany
    {
        return $this->morphedByMany(Project::class, 'taggable');
    }

    public function sales(): MorphToMany
    {
        return $this->morphedByMany(Sale::class, 'taggable');
    }

    public function cessies(): MorphToMany
    {
        return $this->morphedByMany(Cessie::class, 'taggable');
    }
}
