<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $fillable = [
        'NIK',
        'nama_pasien',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'gejala_penyakit'
    ];
}
