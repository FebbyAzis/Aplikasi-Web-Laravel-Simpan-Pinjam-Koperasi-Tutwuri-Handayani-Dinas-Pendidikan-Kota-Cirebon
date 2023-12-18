<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penarikan;

class PenarikanController extends Controller
{
    public function store(Request $request)
    {
        $save = new Penarikan;
        $save->simpanan_manasuka_id = $request->simpanan_manasuka_id; 
        $save->anggota_id = $request->anggota_id; 
        $save->jumlah_penarikan = str_replace('.','',$request->jumlah_penarikan);
        $save->save(); 
        return redirect()->back()->with('y', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $simp = Penarikan::find($id);
        // dd($data);
        Penarikan::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('u', 'Data berhasil dihapus!');
    }
}
