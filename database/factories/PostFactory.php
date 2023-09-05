<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\PDatabase\Eloquent\Factories\Factory<\App\Models\Post>
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
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(2, 10)),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
