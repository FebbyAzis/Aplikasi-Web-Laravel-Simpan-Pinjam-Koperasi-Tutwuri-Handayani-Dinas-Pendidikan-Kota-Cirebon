<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManasukaDetail;

class ManasukaDetailController extends Controller
{
    public function store(Request $request)
    {
        
        $save = new ManasukaDetail;
        $save->simpanan_manasuka_id = $request->simpanan_manasuka_id; 
        $save->anggota_id = $request->anggota_id; 
        $save->simpanan_manasuka = str_replace('.','',$request->simpanan_manasuka);
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $simp = ManasukaDetail::find($id);
        // dd($data);
        ManasukaDetail::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }
}
