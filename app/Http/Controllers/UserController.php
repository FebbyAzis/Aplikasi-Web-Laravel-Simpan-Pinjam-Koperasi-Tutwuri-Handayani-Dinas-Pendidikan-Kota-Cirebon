<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Users;
use App\Models\ManasukaDetail;
use App\Models\SimpananManasuka;
use App\Models\Penarikan;
use App\Models\PinjReg;
use App\Models\AngsuranReguler;
use App\Models\PinjamanReguler;
use App\Models\UtangBarangDetail;
use App\Models\AngsuranUtangBarang;
use App\Models\UtangP3Detail;
use App\Models\AngsuranUtangP3;
use App\Models\SimpananPokok;
use App\Models\WajibDetail;

class UserController extends Controller
{
    public function pinjaman_reguler()
    {
        $user = auth()->id();
        $PR = PinjamanReguler::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        return view('user.pinjaman_reguler.index', compact('user', 'PR'));
    }

    public function pinjaman_reguler_detail($id)
    {
        $user = auth()->id();
        $PR = PinjamanReguler::find($id);
        $angreg = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $angs = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->sum('jasa');
        return view('user.pinjaman_reguler.show', compact('user', 'PR', 'angreg', 'angs', 'jasa'));
    }

    public function utang_barang()
    {
        $user = auth()->id();
        $UB = UtangBarangDetail::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        return view('user.utang_barang.index', compact('user', 'UB'));
    }

    public function utang_barang_detail($id)
    {
        $user = auth()->id();
        $UB = UtangBarangDetail::find($id);
        $angub = AngsuranUtangBarang::where('utang_barang_detail_id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $angs = AngsuranUtangBarang::where('utang_barang_detail_id', $id)->where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranUtangBarang::where('utang_barang_detail_id', $id)->where('status', 1)->sum('jasa');
        return view('user.utang_barang.show', compact('user', 'UB', 'angub', 'angs', 'jasa'));
    }

    public function utang_p3()
    {
        $user = auth()->id();
        $P = UtangP3Detail::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        return view('user.utang_p3.index', compact('user', 'P'));
    }

    public function utang_p3_detail($id)
    {
        $user = auth()->id();
        $P3 = UtangP3Detail::find($id);
        $angp3 = AngsuranUtangP3::where('utang_p3_detail_id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $angs = AngsuranUtangP3::where('utang_p3_detail_id', $id)->where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranUtangP3::where('utang_p3_detail_id', $id)->where('status', 1)->sum('jasa');
        return view('user.utang_p3.show', compact('user', 'P3', 'angp3', 'angs', 'jasa'));
    }

    public function simpanan_pokok()
    {
        $user = auth()->id();
        $SP = SimpananPokok::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        return view('user.simpanan_pokok.index', compact('user', 'SP'));
    }

    public function simpanan_wajib()
    {
        $user = auth()->id();
        $SW = WajibDetail::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        return view('user.simpanan_wajib.index', compact('user', 'SW'));
    }

    public function simpanan_manasuka()
    {
        $user = auth()->id();
        $SM = ManasukaDetail::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        $PS = Penarikan::orderBy('id', 'desc')->where('anggota_id', $user)->where('status', 1)->get();
        $SMT = ManasukaDetail::where('anggota_id', $user)->where('status', 1)->sum('simpanan_manasuka');
        $PST = Penarikan::where('anggota_id', $user)->where('status', 1)->sum('jumlah_penarikan');
        return view('user.simpanan_manasuka.index', compact('user', 'SM', 'PS', 'SMT', 'PST'));
    }
   
}
