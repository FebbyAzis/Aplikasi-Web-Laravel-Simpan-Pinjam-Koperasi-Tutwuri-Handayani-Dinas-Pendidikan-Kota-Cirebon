<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Users;

class FotoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required', // Validasi untuk file foto
        ]);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $save = new Users;
        $save->foto = $nama_file;
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
    
        $this->validate($request, [
            'foto' => 'required', // Validasi untuk file foto
        ]);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        Users::where('id', $id)->update([
            'foto' => $nama_file,
           
        ]);

        return redirect()->back()->with('Success', 'Data berhasil diubah');
    }

    public function show(Request $request, $id)
    {
    
        Users::where('id', $id)->update(['foto' => 1]);
        return redirect()->back();
    }

    // public function destroy($id)
    // {
    //     Angsuran::where('id', $id)->delete('foto');
    //     return redirect()->back();
    // }
}
