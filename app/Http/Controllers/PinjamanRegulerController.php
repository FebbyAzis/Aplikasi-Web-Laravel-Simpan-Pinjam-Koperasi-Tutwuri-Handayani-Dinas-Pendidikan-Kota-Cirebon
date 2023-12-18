<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamanReguler;
use App\Models\Anggota;
use App\Models\AngsuranReguler;
use App\Models\PinjReg;

class PinjamanRegulerController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $save = new PinjamanReguler;
        $save->pinjreg_id = $request->pinjreg_id; 
        $save->anggota_id = $request->anggota_id; 
        $save->nominal_utang = str_replace('.','',$request->nominal_utang);
        $save->lama = $request->lama; 
        $save->bunga = $request->bunga; 
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $p = PinjamanReguler::find($id);
        $pp = AngsuranReguler::latest('bulan')->get();
        $angs = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->sum('jasa');
        $disabled = true;
        // dd($data);
        $angreg = AngsuranReguler::where('pinjaman_reguler_id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $btn = PinjamanReguler::latest('status_pinjaman')->get();
        $nominal_utang = PinjamanReguler::where('id', $id)->get('nominal_utang');
        $bunga = PinjamanReguler::where('bunga', $id)->get('bunga');
        $lama = PinjamanReguler::where('lama', $id)->get('lama');
        
        return view('admin.pinjaman_reguler.show_detail', compact('angreg', 'p', 'pp', 'angs', 'jasa', 'disabled', 'btn',
        'nominal_utang', 'bunga', 'lama'));
    }

    public function lunas($id)
    {
        $p = PinjamanReguler::find($id);
        PinjamanReguler::where('id', $id)->update(['status_pinjaman' => 0]);
        return redirect()->back()->with('Successss', 'Status pinjaman berhasil diubah!');
    }

    public function hapusPinjamanReguler($id)
    {
        $WD = PinjamanReguler::find($id);
        PinjamanReguler::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }
}
