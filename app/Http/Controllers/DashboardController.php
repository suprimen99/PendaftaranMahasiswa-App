<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();

        $siswa = Siswa::count();

        $data_siswa = Siswa::all();
        $data_siswa = Siswa::paginate(5);
        return view('Admin.index',compact('user', 'siswa', 'data_siswa') );
    }




}
