<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nav>
 */
class NavFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nav_logo' => $this->faker->imageUrl(),
            'hero_bg' => $this->faker->imageUrl(),
            'hero_title' => $this->faker->sentence(),
            'hero_tagline' => $this->faker->sentence(),
        ];
    }
}
