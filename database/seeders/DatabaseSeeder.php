<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'email' => 'user@mail.com',
        ], [
            'name' => 'user',
            'password' => Hash::make(123456)
        ]);


        $this->call([
            RoleSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
        ]);
    }
}
