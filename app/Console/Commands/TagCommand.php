<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class TagCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tag';

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
//        Tag::create([
//            "content" => "This is a comment",
//        ]);
//
        dd(Tag::find(1));

//        Tag::find(1)->update([
//            'content' => 'new content',
//        ]);

//        Tag::find(1)->delete();
    }
}
