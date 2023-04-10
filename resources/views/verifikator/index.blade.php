@extends('layouts.main')
@section('title', 'Verifikator')
@section('content')

    <h1>Pendaftar</h1>

    <div class="mt-2">
        <table class="table">
            <thead>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>ALamat</th>
                <th>Nilai</th>
                <th>No Telpon</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($data_Siswa as $items )

                <tr>
                    <td>{{ $items->nama }}</td>
                    <td>{{ $items->umur }}</td>
                    <td>{{ $items->jenis_kelamin }}</td>
                    <td>{{ $items->alamat }}</td>
                    <td>{{ $items->no_telpon }}</td>
                    <td>{{ $items->Nilai }}</td>
                    <td>{{ $items->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
