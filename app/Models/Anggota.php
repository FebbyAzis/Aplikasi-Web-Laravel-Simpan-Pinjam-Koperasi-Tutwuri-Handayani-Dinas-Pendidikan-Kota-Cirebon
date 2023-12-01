<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\SimpananPokok;
use App\Models\SimpananWajib;
use App\Models\SimpananManasuka;
use App\Models\ManasukaDetail;
use App\Models\WajibDetail;
use App\Models\PinjReg;
use App\Models\PinjamanReguler;
use App\Models\UtangBarang;
use App\Models\UtangP3;
use App\Models\UtangP3Detail;
use App\Models\AngsuranReguler;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }

    public function simpanan_pokok(): HasOne
    {
        return $this->hasOne(SimpananPokok::class);
    }
    public function simpanan_wajib(): HasOne
    {
        return $this->hasOne(SimpananWajib::class);
    }
    public function simpanan_manasuka(): HasOne
    {
        return $this->hasOne(SimpananManasuka::class);
    }
    public function manasuka_detail(): HasMany
    {
        return $this->hasMany(ManasukaDetail::class);
    }
    public function wjiab_detail(): HasMany
    {
        return $this->hasMany(WajibDetail::class);
    }
    public function pinjaman_reguler(): HasMany
    {
        return $this->hasMany(PinjamanReguler::class);
    }
    public function angsuran_reguler(): HasMany
    {
        return $this->hasMany(AngsuranReguler::class);
    }
    public function pinj_reg(): HasOne
    {
        return $this->hasOne(PinjReg::class);
    }
    public function utang_barang(): HasOne
    {
        return $this->hasOne(UtangBarang::class);
    }
    public function utang_p3(): HasOne
    {
        return $this->hasOne(UtangP3::class);
    }
    public function utang_p3_detail(): HasMany
    {
        return $this->hasMany(UtangP3Detail::class);
    }
}
