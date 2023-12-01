<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjReg;
use App\Models\Anggota;
use App\Models\PinjamanReguler;
use App\Models\AngsuranReguler;

class PinjRegController extends Controller
{
    public function index()
    {
        $pinjreg = PinjReg::where('status', 1)->orderBy('id', 'desc')->get();
        $angg = Anggota::where('status', 1)->get();
        $pinjregOptions = PinjReg::pluck('anggota_id')->toArray();
        return view('admin.pinjaman_reguler.index', compact('pinjreg', 'angg', 'pinjregOptions')); 
    }

    public function store(Request $request)
    {
        $save = new PinjReg;
        $save->anggota_id = $request->anggota_id; 
        // $save->simpanan_pokok = $request->simpanan_pokok;
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pinjreg = PinjReg::find($id);
        // dd($data);
        $pinjamanReg = PinjamanReguler::where('status', 1)->orderBy('id', 'desc')->get();
        $angreg = AngsuranReguler::where('status', 1)->orderBy('id', 'desc')->get();
        $btn = PinjamanReguler::latest()->first();
        
        $disabled = true;
        return view('admin.pinjaman_reguler.show', compact('pinjreg', 'pinjamanReg', 'angreg', 'btn', 'disabled'));
    }
}
