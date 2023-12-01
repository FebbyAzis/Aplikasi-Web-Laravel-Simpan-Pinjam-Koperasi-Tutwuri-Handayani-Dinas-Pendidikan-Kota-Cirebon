<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtangBarangDetail;
use App\Models\UtangBarang;
use App\Models\AngsuranUtangBarang;

class UtangBarangDetailController extends Controller
{
    public function store(Request $request)
    {
        $save = new UtangBarangDetail;
        $save->utang_barang_id = $request->utang_barang_id; 
        $save->nominal_utang = str_replace('.','',$request->nominal_utang);
        $save->lama = $request->lama; 
        $save->bunga = $request->bunga; 
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $p = UtangBarangDetail::find($id);
        // dd($p);
        $pp = AngsuranUtangBarang::latest('bulan')->get();
        $angs = AngsuranUtangBarang::where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranUtangBarang::where('status', 1)->sum('jasa');
        $disabled = true;
        // dd($data);
        $angreg = AngsuranUtangBarang::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.pinjaman_reguler.show_detail', compact('angreg', 'p', 'pp', 'angs', 'jasa', 'disabled'));
    }
}
