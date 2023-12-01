<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Anggota;

class ManasukaDetail extends Model
{
    use HasFactory;

    protected $table = 'manasuka_detail';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }
}
