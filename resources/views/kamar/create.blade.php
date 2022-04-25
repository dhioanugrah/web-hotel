@extends('layouts.admin',['title'=>'Tambah Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{route('kamar.store')}}" method="post" class="card card-primary" enctype="multipart/form-data">
            <div class="card-header">          
                <i class="fas fa-plus-circle"></i>Tambah
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama_kamar" class="form-control{{ $errors->has('nama_kamar') ? ' is-invalid':'' }}" />
                    @error('nama_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto_kamar" class="form-control{{ $errors->has('foto_kamar') ? ' is-invalid':'' }}" />
                    @error('foto_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jum_kamar" class="form-control{{ $errors->has('jum_kamar') ? ' is-invalid':'' }}" />
                    @error('jum_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Harga Per Malam</label>
                    <input type="number" name="harga_kamar" class="form-control{{ $errors->has('harga_kamar') ? ' is-invalid':'' }}" />
                    @error('harga_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
 
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    Simpan 
                </button>
            </div>
        </form>
        
    </div>
</div>
@endsection