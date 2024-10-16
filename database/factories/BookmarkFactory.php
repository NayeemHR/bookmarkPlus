<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'url' => $this->faker->url,
            'type' => $this->faker->randomElement(['Video', 'Article', 'Podcast', 'Blog', 'Course', 'Book', 'Tool', 'Other']),
            'status' => $this->faker->randomElement(['New', 'In Progress', 'Completed', 'Archived']),
            'notes' => $this->faker->paragraph,
        ];
    }
}
