<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status_pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftar_id',
        'verifikator_id',
        'tanggal',
        'status_pendaftar'
    ];

    /**
     * Get the user that owns the Status_pendaftaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pendaftarans(): BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'pendaftar_id', 'id');
    }
}
