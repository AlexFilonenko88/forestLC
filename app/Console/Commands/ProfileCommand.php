<?php

namespace App\Console\Commands;

use App\Models\Profile;
use Illuminate\Console\Command;

class ProfileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profile';

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
//        Profile::create([
//            "content" => "This is a comment",
//        ]);
//
        Profile::find(1);

//        Profile::find(1)->update([
//            'content' => 'new content',
//        ]);

//        Profile::find(1)->delete();
    }
}
