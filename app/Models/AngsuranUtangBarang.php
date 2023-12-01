<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UtangBarangDetail;
use App\Models\Anggota;

class AngsuranUtangBarang extends Model
{
    use HasFactory;

    protected $table = 'angsuran_utang_barang';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
   
    public function utang_barang_detail(): BelongsTo
    {
        return $this->belongsTo(UtangBarangDetail::class);
    }
}
