<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\UtangP3;
use App\Models\Anggota;

class UtangP3Detail extends Model
{
    use HasFactory;

    protected $table = 'utang_p3_detail';

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class);
    }

    public function utang_p3(): BelongsTo
    {
        return $this->belongsTo(UtangP3::class);
    }
}
