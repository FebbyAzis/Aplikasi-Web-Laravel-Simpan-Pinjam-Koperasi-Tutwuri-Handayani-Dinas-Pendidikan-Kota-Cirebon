<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AngsuranUtangP3;

class AngsuranUtangP3Controller extends Controller
{
    public function store(Request $request)
    {
        $save = new AngsuranUtangP3;
        $save->utang_p3_detail_id = $request->utang_p3_detail_id; 
        $save->nominal_angsuran = str_replace('.','',$request->nominal_angsuran);
        $save->jasa = str_replace('.','',$request->jasa);
        $save->bulan = $request->bulan;  
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function hapusAngsuranUtangP3($id)
    {
        $WD = AngsuranUtangP3::find($id);
        AngsuranUtangP3::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }
}
