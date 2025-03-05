<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan', 'merek', 'tahun'];
    public function manufacture(): HasOne
    {
        return $this->hasOne(Manufacture::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'car_id');
    }
}
