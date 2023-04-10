<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Verifikator;
use Illuminate\Http\Request;

class VerfikasiController extends Controller
{
    public function index()
    {
        $data_Siswa = Siswa::all();
        return view('verifikator.index',compact('data_Siswa'));
    }

    public function tambah()
    {
        # code...
    }
}
