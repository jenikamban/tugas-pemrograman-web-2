<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['nama','merk','harga','stok','warna'])]
class tas extends Model
{
    /** @use HasFactory<\Database\Factories\TasFactory> */
    use HasFactory;
    //protected $fillable = ['nama','merk','harga','stok','warna'];
   // protected $guarded = ['id'];
}
