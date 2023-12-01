<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtangP3;
use App\Models\UtangP3Detail;
use App\Models\Anggota;

class UtangP3Controller extends Controller
{
    
        public function index()
            {
                $utp3 = UtangP3::where('status', 1)->orderBy('id', 'desc')->get();
                $angg = Anggota::where('status', 1)->get();
                $utp3Options = UtangP3::pluck('anggota_id')->toArray();
                return view('admin.utang_p3.index', compact('utp3', 'angg', 'utp3Options'));
            }

    public function store(Request $request)
        {
            $save = new utangP3;
            $save->anggota_id = $request->anggota_id; 
            // $save->simpanan_pokok = $request->simpanan_pokok;
            $save->save(); 
            return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
        }

    public function show($id)
    {
        $utp3 = UtangP3::find($id);
        $utp3D = UtangP3Detail::where('status', 1)->get();
        return view('admin.utang_p3.show', compact('utp3', 'utp3D'));
    }
    
}
