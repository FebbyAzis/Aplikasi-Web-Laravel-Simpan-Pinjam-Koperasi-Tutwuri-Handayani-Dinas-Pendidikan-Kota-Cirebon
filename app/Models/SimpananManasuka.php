<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Anggota;
use App\Models\ManasukaDetail;
use App\Models\Penarikan;

class SimpananManasuka extends Model
{
    use HasFactory;

    protected $table = 'simpanan_manasuka';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function manasuka_detail(): HasMany
    {
        return $this->hasMany(ManasukaDetail::class);
    }

    public function penarikan(): HasMany
    {
        return $this->hasMany(Penarikan::class);
    }
}
