<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Anggota;
use App\Models\AngsuranReguler;
use App\Models\PinjReg;

class PinjamanReguler extends Model
{
    use HasFactory;

    protected $table = 'pinjaman_reguler';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function angsuran_reguler(): HasMany
    {
        return $this->hasMany(AngsuranReguler::class);
    }

    public function pinj_reg(): BelongsTo
    {
        return $this->belongsTo(PinjReg::class);
    }
}
