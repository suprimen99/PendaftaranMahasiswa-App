@extends('layouts.main')
@section('title', 'Data Penguna')
@section('content')
<div>
    <div class="mt-3">
        <h3>Data User</h3>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="mt3">
        <a href="User-add" class="btn btn-success">Tambah</a>
    </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($data_user as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="edituser/{{ $item->id }}" class="btn btn-primary">Edit</a>
                            <a href="delete-user/{{$item->id}}" onclick="return confirm('Yakin Ingin Menghapus {{ $item->username }}?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        {{ $data_user->links() }}
    <div>
<div>

@endsection
