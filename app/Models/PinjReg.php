<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PinjamanReguler;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PinjReg extends Model
{
    use HasFactory;
    protected $table = 'pinj_reg';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function pinjaman_reguler(): HasMany
    {
        return $this->hasMany(PinjamanReguler::class);
    }
}
