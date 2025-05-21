<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_sim',
        'alamat',
        'telepon',
        'tanggal_lahir',
    ];

    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class);
    }

    public function riwayatPerjalanans()
    {
        return $this->hasMany(RiwayatPerjalanan::class);
    }
}
