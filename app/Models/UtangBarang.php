<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Anggota;
use App\Models\UtangBarangDetail;

class UtangBarang extends Model
{
    use HasFactory;
    protected $table = 'utang_barang';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function utang_barang_detail(): HasMany
    {
        return $this->hasMany(UtangBarangDetail::class);
    }
}
