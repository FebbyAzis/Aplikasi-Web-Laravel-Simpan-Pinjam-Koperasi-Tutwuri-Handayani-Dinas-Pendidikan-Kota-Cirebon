<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Anggota;

class DataAnggotaController extends Controller
{
    public function index()
    {
        $user = auth()->id();
        $anggota = Anggota::where('users_id', $user)->get();
        // dd($anggota);
        // $users = Users::where('role', 2)->get();
        // $anggotaOptions = Anggota::pluck('users_id', $user)->get();
        // dd($anggotaOptions);
        // dd($anggota);
        return view('user.anggota.index', compact('user','anggota'));
    }

   
}
