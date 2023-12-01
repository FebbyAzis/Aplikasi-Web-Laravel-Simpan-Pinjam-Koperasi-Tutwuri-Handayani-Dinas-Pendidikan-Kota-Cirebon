<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Anggota;
use App\Models\SimpananWajib;

class WajibDetail extends Model
{
    use HasFactory;

    protected $table = 'wajib_detail';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function simpanan_wajib(): BelongsTo
    {
        return $this->belongsTo(SimpananWajib::class);
    }
}
