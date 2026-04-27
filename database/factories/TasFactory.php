<?php

namespace Database\Factories;

use App\Models\tas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<tas>
 */
class TasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'merk' => fake()->name(),
            'harga' => fake()->numerify(),
            'warna' => fake()->name(),
            'jumlah' => fake()->numerify(),
            
        ];
    }
}
