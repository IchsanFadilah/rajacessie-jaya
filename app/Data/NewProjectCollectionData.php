<?php
declare(strict_types=1);

namespace App\Data;

use App\Models\Tag;
use Spatie\LaravelData\Data;


class NewProjectCollectionData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $slug,
        public int $new_project_count
    ) {}

    public static function fromModel(Tag $tag): self
    {
        return new self(
            $tag->id,
            (String) $tag->name,
            (String) $tag->slug,
            $tag->new_projects_count
        );
    }
}
