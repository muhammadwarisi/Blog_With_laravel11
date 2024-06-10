<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'title' => fake()->sentence(6),
            'author' => fake()->name(),
            'slug' => Str::slug(fake()->sentence()),
            'gambar' => $this->faker->image(public_path('img/banner'), 400, 300, null, false),
            'body' => fake()->text()
        ];
    }
}
