<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all())->resolve();
    }

    public function show(Post $post)
    {
        return PostResource::make($post)->resolve();
    }

    public function store()
    {
        $data = [
            'id' => 3,
            'title' => 'my new post'
        ];
        $post = PostService::create($data);
        return $post;
    }

    public function update(Post $post): array
    {
//        $id = 2;
//        $post = Post::find($id);

        $data = [
            'title' => 'my new post'
        ];
//        $post->update($data); // обновить только то что указано, остально не тронит
//        return $post;

        return PostService::update($data, $post);
    }

    public function destroy()
    {
//        $id = 3;
//        $post = Post::findOrFail($id);
//        $post->delete();
        return PostService::delete()->response(
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
