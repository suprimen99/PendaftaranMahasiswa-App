@extends('layouts.main')
@section('title', 'Edit User')
@section('content')
<h1>Edit data Pengguna</h1>

<div class="mt-2 col-lg-6">
    <form action="/edituser/{{ $data->id }}" method="POST">
        @csrf
        @method('put')
        <div class="mt-2">
            <label for="username" class="form-label" >Username</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ $data->username }}" required>
        </div>
        <div class="mt-3">
            <label for="role_id" class="form-label">Pilih Role</label>
            <select name="role_id" id="Role" class="form-control">
                <option >pilih role</option>
                <option value="1" {{ $data->role_id == '1' ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $data->role_id == '2' ? 'selected' : '' }}>verifikator</option>
                <option value="3" {{ $data->role_id == '3' ? 'selected' : '' }}>rektor</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="phone" class="label-control">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $data->phone }}" required>
        </div>
        <div class="mt-2">
            <label for="address" class="form-label">Alamat</label>
           <textarea name="address" id="address" class="form-control" required>{{ $data->address }}</textarea>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>
</div>
@endsection

