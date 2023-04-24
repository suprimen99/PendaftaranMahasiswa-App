<?php

namespace App\Models;

use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
     * Get all of the comments for the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function siswas(): HasMany
    {
        return $this->hasMany(Pendaftaran::class, 'siswa_id', 'id');
    }
}
