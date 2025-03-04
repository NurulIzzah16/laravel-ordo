<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan'];
    public function manufacture(): HasOne
    {
        return $this->hasOne(Manufacture::class);
    }
}
