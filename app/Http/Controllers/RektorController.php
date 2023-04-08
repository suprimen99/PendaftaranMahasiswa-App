<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RektorController extends Controller
{
    public function index()
    {
        return view('Rektor.index');
    }
}
