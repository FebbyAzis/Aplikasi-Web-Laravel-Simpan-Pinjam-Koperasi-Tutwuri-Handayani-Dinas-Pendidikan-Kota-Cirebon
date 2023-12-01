<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Anggota;
use App\Models\UtangP3Detail;

class UtangP3 extends Model
{
    use HasFactory;
    protected $table = 'utang_p3';
    
    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function utang_p3_detail(): HasMany
    {
        return $this->hasMany(UtangP3Detail::class);
    }
}
