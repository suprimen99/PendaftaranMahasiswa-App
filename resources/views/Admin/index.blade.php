@extends('layouts.main')
@section('title', 'Admin')
@section('content')
<h1>welcome, {{ Auth::user()->username }}</h1>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
<div class="row">
    <div class="col-lg-4 mt-3">
        <div class="card user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people-fill"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="desc">User</div>
                    <div class="count">{{ $user }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-3">
        <div class="card siswa">
            <div class="row">
                <div class="col-6"><i class="bi bi-person-vcard"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="desc">Siswa</div>
                    <div class="count">{{ $siswa }}</div>
                </div>
            </div>
        </div>
    </div>

</div class="mt-3">
    <h3>#Data Mahasiswa</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Nilai</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach ($data_siswa as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->Nilai }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="Edit-siswa/{{ $item->id }}" class="btn btn-success">Edit</a>
                        <a href="delete-siswa/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
<div>

</div>
@endsection

