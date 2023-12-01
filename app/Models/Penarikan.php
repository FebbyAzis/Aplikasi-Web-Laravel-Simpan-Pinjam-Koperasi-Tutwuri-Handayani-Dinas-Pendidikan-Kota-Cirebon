<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Anggota;
use App\Models\SimpananManasuka;

class Penarikan extends Model
{
    use HasFactory;
    protected $table = 'penarikan_simpanan';

    public function simpanan_manasuka(): BelongsTo
    {
        return $this->belongsTo(SimpananManasuka::class);
    }

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
}
