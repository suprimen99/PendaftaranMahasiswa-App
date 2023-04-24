@extends('layouts.main')
@section('title', 'Verifikator')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Status pendafataran</h5>
            <div class="card-body">
                <form action="{{route('simpan.verifkasi', $idPendaftaran->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status_pendaftar" class="form-control" id="basic-default-name" value="{{ old('status_pendaftar')}}"/>
                            <span class="text-danger text-sm mt-1">{{$errors->first('status_pendaftar')}}</span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
