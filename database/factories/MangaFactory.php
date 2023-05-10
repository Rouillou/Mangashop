<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manga>
 */
class MangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'categorie' => $this->faker->word,
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1, 20)
        ];
    }
}
