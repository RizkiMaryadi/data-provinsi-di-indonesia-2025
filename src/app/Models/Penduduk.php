<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = ['kota_id', 'nama', 'usia'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}

