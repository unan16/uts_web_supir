<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatPerjalanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'supir_id',
        'tujuan',
        'tanggal_berangkat',
        'jam_berangkat',
        'keterangan',
    ];

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
