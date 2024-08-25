<?php

namespace App\Services;

use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;

class TagServices
{
    /**
     * Create a new class instance.
     */
    public static function create(array $data): Tag
    {
        return Tag::create($data);
    }

    public static function update(Tag $tag, array $data): Tag
    {
        return $tag->update($data);
    }

    public static function delete()
    {
        $id = 5;
        $tag = Tag::findOrFail($id);

        return $tag->delete();
    }
}
