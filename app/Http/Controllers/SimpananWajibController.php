<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;  
Use App\Models\Anggota;
Use App\Models\SimpananWajib;
Use App\Models\WajibDetail;

class SimpananWajibController extends Controller
{
    public function index(Request $request)
    {
        $now = Carbon::now();
        $angg = Anggota::where('status', 1)->get();
        $simw = SimpananWajib::where('status', 1)->orderBy('id', 'desc')->get();
        $simwOptions = SimpananWajib::where('status', 1)->pluck('anggota_id')->toArray();
        return view('admin.simpanan_wajib.index', compact('angg', 'simw', 'simwOptions'));
    }

    public function store(Request $request)
    { 
        $save = new SimpananWajib;
        $save->anggota_id = $request->anggota_id; 
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $simw = SimpananWajib::find($id);
        // dd($data);
        $WD = WajibDetail::where('status', 1)->orderBy('id', 'desc')->get();
        $WDD = WajibDetail::latest('simpanan_wajib', $simw)->get();
        // dd($WDD);
        return view('admin.simpanan_wajib.show', compact('simw', 'WD', 'WDD'));
    }

//     public function calculate($anggotaId)
// {
//     $totalData = Anggota::where('simpanan_berikutnya', $anggotaId)->count();
//     return (string)$totalData;
// }
}

