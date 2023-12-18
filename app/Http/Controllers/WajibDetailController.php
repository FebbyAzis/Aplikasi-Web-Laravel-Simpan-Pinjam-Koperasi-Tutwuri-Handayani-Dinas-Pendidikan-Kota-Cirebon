<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\WajibDetail;

class WajibDetailController extends Controller
{
    public function store(Request $request)
    {
        
        $save = new WajibDetail;
        $save->simpanan_wajib_id = $request->simpanan_wajib_id;
        $save->anggota_id = $request->anggota_id; 
        $save->bulan = $request->bulan;
        $save->simpanan_wajib = str_replace('.','',$request->simpanan_wajib);
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }
}
