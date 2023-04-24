@extends('layouts.main')
@section('title', 'Verifikator')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>umur</th>
                        <th>Nilai</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_siswa as $item)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->Nilai }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{route('create.verifkasi', $item->id)}}" class="btn btn-success btn-sm">Verifikasi</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
