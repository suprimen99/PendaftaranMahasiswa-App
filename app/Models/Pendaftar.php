<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    protected $table = 'pendaftars';
    use HasFactory;


    protected $fillable = [
        'id',
        'siswa_id',
        'tanggal_pendaftaran'
    ];

    /**
     * Get all of the comments for the Pendaftaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function siswas(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function pendaftarans(): HasMany
    {
        return $this->hasMany(Status_pendaftaran::class, 'pendaftar_id', 'id');
    }
}
