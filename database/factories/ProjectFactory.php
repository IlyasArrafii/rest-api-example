<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->uuid(),
            'project_name' => fake()->userName(),
            'slug' => fake()->slug(),
            'author' => fake()->userName(),
            'categories' => fake()->text(),
            'descriptions' => fake()->paragraph(),
        ];
    }
}
