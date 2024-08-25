<?php

namespace App\Console\Commands;

use App\Events\Post\StoredPostEvent;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Console\Command;
class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $post = Post::factory()->create();
        StoredPostEvent::dispatch($post);

        // hasOne
        // hasMany
        // belongsTo
        // belongsToMany

//        $profile = Profile::first();
//        $user = User::first();
//        $post = Post::first();
//        $comment = Comment::first();
//
//        dd($profile->likedPosts);


        //attach
//        $post->tags()->attach(1);
        // detach
//        $post->tags()->detach(1);
        // sync
        // syncWithoutDetaching
        // toggle
        // updateExistingPivot

//        dd($comment->comments);


//        $post = Post::find(1); //прочитать получаем объект, докидывает все атрибуты от родителя
//        dd($post);
//        dd(Post::first());
//        dd(Post::firstWhere("title", "my post1"));
//        dd(Post::where("title", "my post1")->get());

//        $posts = Post::find(2);
//        $posts->update([ // обновление
//            'title' => 'new title',
//        ]);

//        $posts = Post::find(7);
//        $posts->delete(); //удаление

//        $post = Post::handle();
//        $comment = Comment::first();
//        $user = User::with('profile')->first();
//        $user = User::with('profile')->get();
//        $profile = Profile::first();
//        dd($profile->user);
//
//        dd($post->profile);
    }
}
