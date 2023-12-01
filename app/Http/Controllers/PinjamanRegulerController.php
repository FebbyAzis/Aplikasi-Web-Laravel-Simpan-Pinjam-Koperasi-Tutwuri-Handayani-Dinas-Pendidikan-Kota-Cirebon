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
        $save->nominal_pinjaman = str_replace('.','',$request->nominal_pinjaman);
        $save->lama = $request->lama; 
        $save->bunga = $request->bunga; 
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $p = PinjamanReguler::find($id);
        $pp = AngsuranReguler::latest('bulan')->get();
        $angs = AngsuranReguler::where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranReguler::where('status', 1)->sum('jasa');
        $disabled = true;
        // dd($data);
        $angreg = AngsuranReguler::where('status', 1)->orderBy('id', 'desc')->get();
        $btn = PinjamanReguler::latest('status_pinjaman')->get();
        return view('admin.pinjaman_reguler.show_detail', compact('angreg', 'p', 'pp', 'angs', 'jasa', 'disabled', 'btn'));
    }
}
