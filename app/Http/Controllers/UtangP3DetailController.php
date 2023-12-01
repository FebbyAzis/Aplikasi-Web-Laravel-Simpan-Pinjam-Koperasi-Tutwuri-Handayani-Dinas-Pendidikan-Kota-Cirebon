<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtangP3Detail;
use App\Models\AngsuranUtangP3;

class UtangP3DetailController extends Controller
{
    public function store(Request $request)
    {
        $save = new UtangP3Detail;
        $save->utang_p3_id = $request->utang_p3_id; 
        $save->anggota_id = $request->anggota_id; 
        $save->nominal_utang = str_replace('.','',$request->nominal_utang);
        $save->lama = $request->lama; 
        $save->bunga = $request->bunga; 
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $p = UtangP3Detail::find($id);
        // dd($p);
        $pp = AngsuranUtangP3::latest('bulan')->get();
        $angs = AngsuranUtangP3::where('status', 1)->sum('nominal_angsuran');
        $jasa = AngsuranUtangP3::where('status', 1)->sum('jasa');
        $disabled = true;
        // dd($data);
        $angreg = AngsuranUtangP3::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.pinjaman_reguler.show_detail', compact('angreg', 'p', 'pp', 'angs', 'jasa', 'disabled'));
    }    
}
