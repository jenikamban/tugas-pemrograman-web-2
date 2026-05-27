<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama',
    'merk',
    'harga',
    'warna',
    'jumlah',
])]
class Tas extends Model
{
    use HasFactory;
}
