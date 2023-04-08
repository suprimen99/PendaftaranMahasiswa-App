<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'Nilai',
        'jenis_kelamin',
        'no_telpon'

    ];
}
