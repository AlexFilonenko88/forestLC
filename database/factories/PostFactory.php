<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" =>  fake()->realTextBetween(7),
            "description" => fake()->realTextBetween(200, 700),
//            "body" => fake()->realTextBetween(9),
            "published_at" => fake()->dateTime,
            "views" => fake()->numberBetween(100, 1000),
            "status" => fake()->numberBetween(1, 3),
            "profile_id" => Profile::first()->id,
            "image_path" => fake()->imageUrl,
//            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
