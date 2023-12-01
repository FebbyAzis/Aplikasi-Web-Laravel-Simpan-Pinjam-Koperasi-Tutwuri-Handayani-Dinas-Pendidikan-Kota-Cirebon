<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PinjamanReguler;
use App\Models\Anggota;


class AngsuranReguler extends Model
{
    use HasFactory;

    protected $table = 'angsuran_pinjaman_reguler';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
   
    public function pinjaman_reguler(): BelongsTo
    {
        return $this->belongsTo(PinjamanReguler::class);
    }
}
