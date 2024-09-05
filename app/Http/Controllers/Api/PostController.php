<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Api\Post\IndexRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();

        $posts = Post::filter($data)->get();

        return PostResource::collection($posts->get())->resolve();
    }

    public function show(Post $post)
    {
        return PostResource::make($post)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $post = PostService::create($data);
        return PostResource::make($post)->resolve();
    }

    public function update(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();
        $post = PostService::update($post, $data);
        return PostResource::make($post)->resolve();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return PostService::delete($post)->response(
            [
                'message' => 'post deleted'
            ],
            Response::HTTP_OK
        );
    }
}
// Конвенция laravel
// обработка
// бизнес логика
// возврат ответа
