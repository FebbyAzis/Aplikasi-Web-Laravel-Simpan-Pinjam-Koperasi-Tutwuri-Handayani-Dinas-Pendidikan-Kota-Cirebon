<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class DashboardUserController extends Controller
{
    public function index()
    {
        $angg = Anggota::where('status', 1)->count();
        return view('user.dashboard', compact('angg'));
    }
    
}
