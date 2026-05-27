<?php

namespace Database\Factories;

use App\Models\Tas;
use App\Models\BrandTas;
use App\Models\KoleksiTas;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasFactory extends Factory
{
    protected $model = Tas::class;

    public function definition(): array
    {
        return [
            'nama'          => $this->faker->word(),
            'merk'          => $this->faker->company(),
            'harga'         => $this->faker->numberBetween(50000, 500000),
            'warna'         => $this->faker->safeColorName(),
            'jumlah'        => $this->faker->numberBetween(1, 100),
            'brand_tas_id'  => BrandTas::factory(),
            'koleksi_tas_id'=> KoleksiTas::factory(), 
        ];
    }
}
