@extends('layouts.main')
@section('title', 'Tambah User')
@section('content')
<h1>Tambah data Pengguna</h1>

<div class="mt-2 col-lg-6">
    <form action="tambahuser" method="POST">
        @csrf
        <div class="mt-2">
            <label for="username" class="form-label" >Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="mt-3">
            <label for="role_id" class="form-label">Pilih Role</label>
            <select name="role_id" id="Role" class="form-control">
                <option >pilih role</option>
                <option value="1">Admin</option>
                <option value="2">verifikator</option>
                <option value="3">rektor</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="phone" class="label-control">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="mt-2">
            <label for="address" class="form-label">Alamat</label>
           <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>
</div>
@endsection

