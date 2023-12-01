<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UtangP3Detail;
use App\Models\Anggota;

class AngsuranUtangP3 extends Model
{
    use HasFactory;

    protected $table = 'angsuran_utang_p3';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
   
    public function utang_p3_detail(): BelongsTo
    {
        return $this->belongsTo(UtangP3Detail::class);
    }
}
