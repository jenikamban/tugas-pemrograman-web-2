<?php

namespace Database\Factories;

use App\Models\BrandTas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BrandTas>
 */
class BrandTasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
        'nama_brand' => $this->faker->company,
        'negara_asal' => $this->faker->country,
        'tahun_berdiri' => $this->faker->year,
    ];
}

}

