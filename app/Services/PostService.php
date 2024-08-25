<?php

namespace App\Services;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class PostService
{
    public static function create(array $data): Post
    {
        return Post::create($data);
    }

    public static function update(Post $post, array $data): Post
    {
        $post->update($data);

        return $post;
    }

    public static function delete($id): Post
    {
//        $id = 7;
        $post = Post::findOrFail($id);

        return $post->delete();
    }
}

