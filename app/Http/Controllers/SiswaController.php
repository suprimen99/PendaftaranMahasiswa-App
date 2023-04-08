<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function siswa()
    {


        return view('Admin.TambahSiswa');
    }

    public function store(Request $request)
    {
        // dd(($request->all()));
        $validated = $request->validate([
            'nama' => 'required|max:255' ,
            'alamat' => 'required|max:255',
            'umur' => 'required|max:255',
            'Nilai' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'no_telpon' => 'required|max:255'
        ]);
        $siswa = Siswa::Create($request->all());

        return redirect('dashboard')->with('message', 'Tambah Siswa Berhasil!!');
    }
}
