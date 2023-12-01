<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Anggota;
use App\Models\WajibDetail;

class SimpananWajib extends Model
{
    use HasFactory;
    
    protected $table = 'simpanan_wajib';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function wjiab_detail(): HasMany
    {
        return $this->hasMany(WajibDetail::class);
    }
}
