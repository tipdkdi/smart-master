<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiKategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
        'alias',
        'keterangan',
    ];

    public function pegawai()
    {
        return $this->hasMany('App\Models\Pegawai');
    }
}
