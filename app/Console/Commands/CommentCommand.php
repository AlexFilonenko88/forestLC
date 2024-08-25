<?php

namespace App\Console\Commands;

use App\Models\Comment;
use Illuminate\Console\Command;

class CommentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment';

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
        Comment::create([
           "content" => "This is a comment",
        ]);
//
//        $post = Post::find(1);

//        Comment::find(1)->update([
//            'content' => 'new content',
//        ]);

//        Comment::find(1)->delete();
    }
}
