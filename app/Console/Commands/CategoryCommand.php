<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class CategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category';

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
//        Category::create([
//            "content" => "This is a comment",
//        ]);
//
        Category::find(1);

//        Category::find(1)->update([
//            'content' => 'new content',
//        ]);

//        Category::find(1)->delete();
    }
}
