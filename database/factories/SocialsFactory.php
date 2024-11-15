<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socials>
 */
class SocialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'github' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'fiverr' => $this->faker->url(),
        ];
    }
}
