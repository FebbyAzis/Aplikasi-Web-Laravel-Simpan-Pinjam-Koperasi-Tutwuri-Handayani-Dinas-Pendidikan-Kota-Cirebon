<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UtangBarang;
use App\Models\Anggota;

class UtangBarangDetail extends Model
{
    use HasFactory;

    protected $table = 'utang_barang_detail';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function utang_barang(): BelongsTo
    {
        return $this->belongsTo(UtangBarang::class);
    }
}
