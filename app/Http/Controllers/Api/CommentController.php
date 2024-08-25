<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Http\Resources\Comments\CommentsResource;
use App\Models\Comment;
use App\Services\CommentsServices;
use Illuminate\Http\Response;

class CommentController
{
    public function index()
    {
        return CommentsResource::collection(Comment::all())->resolve();
    }

    public function show(Comment $comment)
    {
        return CommentsResource::make($comment)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $comment = CommentsServices::create($data);
        return CommentsResource::make($comment)->resolve();
    }

    public function update(Comment $comment, UpdateRequest $request)
    {
        $data = $request->validated();
        $comment = CommentsServices::update($comment, $data);
        return CommentsResource::make($comment)->resolve();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return CommentsServices::delete($comment)->response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}

