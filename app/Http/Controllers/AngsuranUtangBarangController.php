<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AngsuranUtangBarang;

class AngsuranUtangBarangController extends Controller
{
    public function store(Request $request)
    {
        $save = new AngsuranUtangBarang;
        $save->utang_barang_detail_id = $request->utang_barang_detail_id; 
        $save->nominal_angsuran = str_replace('.','',$request->nominal_angsuran);
        $save->jasa = str_replace('.','',$request->jasa);
        $save->bulan = $request->bulan;  
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function hapusAngsuranUtangBarang($id)
    {
        $WD = AngsuranUtangBarang::find($id);
        AngsuranUtangBarang::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }
}
