<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikator extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'alamat',
        'umur',
        'Nilai',
        'jenis_kelamin',
        'no_telpon',
        'user_id'

    ];
}
