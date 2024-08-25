<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comments\CommentsResource;
use App\Models\Comment;
use App\Services\CommentsServices;
use Illuminate\Http\Response;

class CommentsController extends Controller
{
    public function index()
    {
        return CommentsResource::collection(Comment::all())->resolve();
    }

    public function show(Comment $comment)
    {
        return CommentsResource::make($comment)->resolve();
    }

    public function store()
    {
        return CommentsServices::create();
    }

    public function update($comment): array
    {
        return CommentsServices::update($comment);
    }

    public function destroy()
    {
        CommentsServices::delete();
        return response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}
