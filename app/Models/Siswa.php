<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    /**
     * Get the user associated with the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pendaftar(): HasOne
    {
        return $this->hasOne(User::class, 'siswa_id', 'id');
    }
}
