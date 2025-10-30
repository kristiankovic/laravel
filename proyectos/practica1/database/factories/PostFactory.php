<?php

namespace Database\Factories;

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
            'category_post' => $this->faker->sentence(),
            'title_post'    => $this->faker->text(100),
            'content_post'  => $this->faker->word(),
            'published_at'  => $this->faker->dateTime()
        ];
    }
}
