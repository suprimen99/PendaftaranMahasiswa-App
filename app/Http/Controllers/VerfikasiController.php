<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\Siswa;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class VerfikasiController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::all();
        return view('verifikator.index', compact('data_siswa'));
    }

    public function createVerif($id)
    {
        dd($id);
        $idPendaftaran = Pendaftar::findOrFail($id);
        dd($idPendaftaran);
        // return view('verifikator.create_verif', compact('idPendaftaran'));
    }

    public function simpanVerif(Request $request, $id)
    {
        dd($request->all);
    }
}
