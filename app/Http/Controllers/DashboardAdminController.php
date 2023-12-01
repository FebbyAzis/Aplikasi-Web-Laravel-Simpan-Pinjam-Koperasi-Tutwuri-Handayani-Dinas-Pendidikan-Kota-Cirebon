<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Users;
use App\Models\SimpananPokok;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $angg = Anggota::where('status', 1)->count();
        $simP = SimpananPokok::where('status', 1)->sum('simpanan_pokok');
        return view('admin.dashboard', compact('angg', 'simP'));
    }

    public function update(Request $request, $id)
    {
    
        Anggota::where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function show($id)
    {
        $anggota = Anggota::find($id);
        // dd($data);
        Anggota::where('id', $id)->update(['statused' => 0]);
        return redirect()->back();
    }

    public function app()
    {
        $user = auth()->id();
        $users = Users::where('foto', $user);
        // $angg = Anggota::where('status', 1)->count();
        return view('admin.layouts.app', compact('user', 'users'));
    }

}
