<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'author_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(4)) . '</p>',
            'published_at' => $this->faker->dateTimeThisDecade()
        ];
    }
}
