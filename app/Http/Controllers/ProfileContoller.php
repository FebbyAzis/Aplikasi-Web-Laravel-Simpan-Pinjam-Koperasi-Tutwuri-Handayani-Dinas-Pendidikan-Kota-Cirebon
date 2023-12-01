<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class ProfileContoller extends Controller
{
    public function index()
    {
        $users = auth()->id();
        $angg = Anggota::where('users_id', $users)->get();
        // dd($angg);
        // if (!$angg) {
        //     return redirect()->route('home')->with('error', 'Pengguna tidak ditemukan');
        // }
    
        // if (!$angg->anggota) {
        //     return redirect()->route('home')->with('info', 'Pengguna terdaftar, tetapi tidak ada data anggota yang terkait');
        // }
    
        // $anggota = $angg->anggota;
        return view('user.profile.index', compact('users', 'angg'));
    }

    public function show($id)
    {
        $simp = SimpananPokok::find($id);
        // dd($data);
        SimpananPokok::where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }
}
