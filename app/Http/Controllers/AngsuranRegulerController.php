<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AngsuranReguler;

class AngsuranRegulerController extends Controller
{
    public function store(Request $request)
    {
        $save = new AngsuranReguler;
        $save->pinjaman_reguler_id = $request->pinjaman_reguler_id; 
        $save->nominal_angsuran = str_replace('.','',$request->nominal_angsuran);
        $save->jasa = str_replace('.','',$request->jasa);
        $save->bulan = $request->bulan;  
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }
}
