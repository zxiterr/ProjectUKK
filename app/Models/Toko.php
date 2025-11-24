<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_toko',
        'pemilik',
        'deskripsi',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'toko_id');
    }
}
