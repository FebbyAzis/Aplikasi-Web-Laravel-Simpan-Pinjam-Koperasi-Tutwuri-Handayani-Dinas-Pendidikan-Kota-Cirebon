<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Users;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'desc')->get();
        $users = Users::where('role', 2)->get();
        $anggotaOptions = Anggota::pluck('users_id')->toArray();
        // dd($anggotaOptions);
        // dd($anggota);
        return view('admin.anggota.index', compact('anggota', 'users', 'anggotaOptions'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'no_anggota' => 'required',
            'no_identitas' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required', // Validasi untuk file foto
        ]);

        $save = new Anggota;
        $save->users_id = $request->users_id; 
        $save->no_anggota = $request->no_anggota;
        $save->no_identitas =  $request->no_identitas;
        $save->nama =  $request->nama;
        $save->jenis_kelamin =  $request->jenis_kelamin;
        $save->tempat_lahir =  $request->tempat_lahir;
        $save->tgl_lahir =  $request->tgl_lahir;
        $save->no_tlp =  $request->no_tlp;
        $save->alamat =  $request->alamat;
        $save->status =  $request->status;
        // $save->foto = $request->foto;
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
    
        $this->validate($request, [
            'no_anggota' => 'required',
            'no_identitas' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required', // Validasi untuk file foto
        ]);

        Anggota::where('id', $id)->update([
            'no_anggota' => $request->no_anggota,
            'no_identitas' => $request->no_identitas,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
           
        ]);

        return redirect()->back()->with('Success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        
    }

    

    public function show($id)
    {
        $anggota = Anggota::find($id);
        // dd($data);
        $users = Users::where('role', 2, $id)->get();
        return view('admin.anggota.show', compact('anggota', 'users'));
    }

    public function anggotaDelete(Request $request, $id)
    {
        Anggota::where('id', $id)->update(['statused' => 0]);
        return redirect()->back();
    }
}
