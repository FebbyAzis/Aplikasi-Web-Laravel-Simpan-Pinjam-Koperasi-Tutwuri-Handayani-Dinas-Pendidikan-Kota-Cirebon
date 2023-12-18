<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtangBarang;
use App\Models\UtangBarangDetail;
use App\Models\Anggota;

class UtangBarangController extends Controller
{
        public function index()
        {
            $utbar = UtangBarang::where('status', 1)->orderBy('id', 'desc')->get();
            $angg = Anggota::where('status', 1)->get();
            $utbarOptions = UtangBarang::pluck('anggota_id')->toArray();
            return view('admin.utang_barang.index', compact('utbar', 'angg', 'utbarOptions'));
        }
        public function store(Request $request)
        {
            $save = new UtangBarang;
            $save->anggota_id = $request->anggota_id; 
            // $save->simpanan_pokok = $request->simpanan_pokok;
            $save->save(); 
            return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
        }

        public function show($id)
        {
            $utbar = UtangBarang::find($id);
            // dd($data);
            $utbarD = UtangBarangDetail::where('status', 1)->orderBy('id', 'desc')->get();
            $disabled = true;
            $btn = UtangBarangDetail::latest()->first();
            $totalUtangBarang = UtangBarangDetail::where('status', 1)->sum('nominal_utang');
            
            return view('admin.utang_barang.show', compact('utbar', 'utbarD', 'btn', 'disabled', 'totalUtangBarang'));
        }
}