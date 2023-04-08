<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerfikasiController extends Controller
{
    public function index()
    {
        return view('verifikator.index');
    }
}
