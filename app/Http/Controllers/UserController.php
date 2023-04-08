<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Useradd()
    {
        return view('Admin.TambahUser');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'role_id' => 'required'
        ]);
        $request['password'] = Hash::make($request->password);
        $User = new User();
        $User->username = $request->input('username');
        $User->password = $request->input('password');
        $User->phone = $request->input('phone');
        $User->address = $request->input('address');
        $User->role_id = $request->input('role_id');
        $User->save();
        return redirect('datauser')->with('success','User Baru Berhasil Ditambahakan!!');
        // $User = User::Create($request->all());


        // $data = $request->all([
        //     'username' => 'required|unique:users|max:255',
        //     'password' => 'required|max:255',
        //     'phone' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'role_id' => 'required'
        // ]);
        // return User::create([
        //     'username' => $data['username'],
        //     'password' => $data['password'],
        //     'phone' => $data['phone'],
        //     'address' => $data['address'],
        //     'role_id' => $data['role_id'],
        // ]);
    }

    public function datauser()
    {
        $data_user = User::all();
        return view('Admin.datapengguna',compact('data_user'));
    }

    public function edituser($id){
        $data= User::find($id);
        return view('Admin.EditUser',compact('data'));
    }

    public function updateuser(Request $request, $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
        ]);

        $data = User::where('id', $id)->first();
        $data->update($request->all());
        return redirect('datauser')->with('success', 'User Berhasil DiUpdate!!');
    }

    public function delete($id)
    {
        $category = User::where('id',$id)->first();
        $category->delete();
        return redirect('datauser')->with('success', 'User Berhasil Di Hapus!!');
    }
}
