@extends('layouts.main')
@section('title', 'Tambah Siswa')
@section('content')
<h1>Tambah Data Siswa</h1>



<div class="mt-5 col-lg-6">
    <form action="tambah-siswa" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="umur">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="Nilai">Nilai</label>
                <input type="text" name="Nilai" id="Nilai" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="no_telpon">No Telpon</label>
                <input type="text" name="no_telpon" id="no_telpon" class="form-control">
            </div>

            <div class="col-lg-12">
                <label for="defaultSelect" class=" col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                        <option>Masukan jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-12">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit" >Daftar</button>
        </div>
    </form>
</div>
@endsection

