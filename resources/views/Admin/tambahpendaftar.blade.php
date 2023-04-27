@extends('layouts.main')
@section('title', 'Tambah Pendaftar')
@section('content')

<h1>Tambah Data Pendaftar</h1>



<div class="mt-5">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div id="form-identitas-pasien-lama">
          <div class="row mb-3">
            <label for="defaultSelect" class="col-sm-2 col-form-label">Nama Siswa lama</label>
            <div class="col-sm-10">
                <select id="defaultSelect" class="form-select" name="pasien_id">
                    <option value="">Masukan Nama Siswa Lama</option>
                            <option value=""></option>
                </select>
                <span class="text-danger text-sm mt-1"></span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
            <div class="col-md">
              <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="radio" name="kategori" value="Lama">
                <label class="form-check-label" for="inlineRadio1">Siswa lama</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kategori" value="Baru" onclick="showForm()" {{ old('kategori') == 'Baru' ? 'checked' : '' }}/>
                <label class="form-check-label" for="inlineRadio2">Siswa baru</label>
              </div>
              <span class="text-danger text-sm mt-1">{{$errors->first('kategori')}}</span>
            </div>
        </div>
        <div  id="form-identitas-pasien-baru">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama pasien Baru</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="basic-default-name" value="{{ old('nama')}}"/>
                <span class="text-danger text-sm mt-1">{{$errors->first('nama')}}</span>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Umur pasien Baru</label>
            <div class="col-sm-10">
                <input type="number" name="umur" class="form-control" id="basic-default-name" value="{{ old('umur')}}"/>
                <span class="text-danger text-sm mt-1">{{$errors->first('umur')}}</span>
            </div>
          </div>
          <div class="row mb-3">
              <label for="defaultSelect" class="col-sm-2 col-form-label">Jenis kelamin Siswa baru</label>
              <div class="col-sm-10">
                  <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                      <option value="">Masukan jenis kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  <span class="text-danger text-sm mt-1">{{$errors->first('jenis_kelamin')}}</span>
              </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat siswa baru</label>
              <div class="col-sm-10">
                  <input type="text" name="alamat" class="form-control" id="basic-default-name" value="{{ old('alamat')}}"/>
                  <span class="text-danger text-sm mt-1">{{$errors->first('alamat')}}</span>
              </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">No telpon siswa baru</label>
              <div class="col-sm-10">
                  <input type="number" name="no_telpon" class="form-control" id="basic-default-name" value="{{ old('no_telpon')}}"/>
                  <span class="text-danger text-sm mt-1">{{$errors->first('no_telpon')}}</span>
              </div>
          </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>


@endsection
