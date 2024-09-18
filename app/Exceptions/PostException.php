<?php

namespace App\Exceptions;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PostException extends Exception
{

    public function __construct(private Post $post, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     */
    public function report(): void
    {
        Log::channel('posts')->info('post {post_id} alredy exists', ['post_id' => $this->post->id]);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render(Request $request): Response
    {
        return response([
            'message' => $this->message,
            'post_id' => $this->post->id,
        ], $this->code);
    }

    public static function checkIfPostExists(Post $post)
    {
        $post = Post::where('title', $title)->first();
        if ($post) {
            return response();
        }
        if ($post->wasRecentlyCreated) {
            return response();
        }

        if (!$post->wasRecentlyCreated) {
            throw new self($post, 'This post alredy exists from method', Response::HTTP_OK);
        }
    }
}
