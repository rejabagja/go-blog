<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Post::class; // model yang akan difactory

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)), // generate min 2 kata; max 8
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(), 
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2),
        ];
    }
}
