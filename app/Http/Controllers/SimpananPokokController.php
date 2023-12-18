<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\SimpananPokok;

class SimpananPokokController extends Controller
{
    public function index()
    {
        $simp = SimpananPokok::where('status', 1)->orderBy('id', 'desc')->get();
        $angg = Anggota::where('status', 1)->get();
        $simpOptions = SimpananPokok::where('status', 1)->pluck('anggota_id')->toArray();
        $simptotal = SimpananPokok::where('status', 1)->sum('simpanan_pokok');
        return view('admin.simpanan_pokok.index', compact('simp', 'angg', 'simpOptions', 'simptotal'));
    }

    public function store(Request $request)
    {

        $save = new SimpananPokok;
        $save->anggota_id = $request->anggota_id; 
        $save->simpanan_pokok = $request->simpanan_pokok;
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $simp = SimpananPokok::find($id);
        // dd($data);
        SimpananPokok::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }
}
