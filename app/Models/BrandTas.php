<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable([
    'nama_brand',
    'negara_asal',
    'tahun_berdiri'
])]
class BrandTas extends Model
{
    use HasFactory;

    public function koleksiTas()
    {
        return $this->hasMany(KoleksiTas::class);
    }
}