<?php

namespace App\Services;

use App\Models\Comment;

class CommentsServices
{
    /**
     * Create a new class instance.
     */
    public static function create(array $data): Comment
    {
        return Comment::create($data);
    }

    public static function update(Comment $comment, array $data): Comment
    {
        return $comment->update($data);
    }

    public static function delete($id): Comment
    {
        $comment = Comment::find($id);

        return $comment->delete();
    }
}
