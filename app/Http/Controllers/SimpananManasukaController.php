<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\SimpananManasuka;
use App\Models\ManasukaDetail;
use App\Models\Penarikan;

class SimpananManasukaController extends Controller
{
    public function index()
    {
        $angg = Anggota::where('status', 1)->get();
        $simpM = SimpananManasuka::where('status', 1)->orderBy('id', 'desc')->get();
        $simpMOptions = SimpananManasuka::where('status', 1)->pluck('anggota_id')->toArray();
        $MD = ManasukaDetail::orderBy('id', 'desc')->get();
        return view('admin.simpanan_manasuka.index', compact('angg', 'simpM', 'simpMOptions', 'MD'));
    }

    public function store(Request $request)
    {
        $save = new SimpananManasuka;
        $save->anggota_id = $request->anggota_id; 
        // $save->simpanan_pokok = $request->simpanan_pokok;
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $simpM = SimpananManasuka::find($id);
        // dd($data);
        $MD = ManasukaDetail::where('status', 1)->orderBy('id', 'desc')->get();
        $penarikan = Penarikan::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.simpanan_manasuka.show', compact('simpM', 'MD', 'penarikan'));
    }

    public function update(Request $request, $id)
    {
    
        $this->validate($request, [
            'simpanan_manasuka' => 'required',
        ]);

        ManasukaDetail::where('id', $id)->update([
            'simpanan_manasuka' => str_replace('.','',$request->simpanan_manasuka),
        ]);

        return redirect()->back()->with('Success', 'Data berhasil diubah');
    }
}
