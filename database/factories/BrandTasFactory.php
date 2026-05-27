<?php

namespace Database\Factories;

use App\Models\BrandTas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\BrandTas>
 */
class BrandTasFactory extends Factory
{
    protected $model = BrandTas::class;

    public function definition(): array
    {
        return [
            'nama_brand'   => $this->faker->company(),
            'negara_asal'  => $this->faker->country(),
            'tahun_berdiri'=> $this->faker->year(),
        ];
    }
}
