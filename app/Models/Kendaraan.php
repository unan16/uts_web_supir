<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'supir_id',
        'plat_nomor',
        'merk',
        'jenis',
        'tahun',
    ];

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
