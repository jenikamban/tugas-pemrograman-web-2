<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandTasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_brand' => $this->faker->company(),
            'negara_asal' => $this->faker->country(),
            'tahun_didirikan' => $this->faker->numberBetween(1980, 2025),
        ];
    }
}
