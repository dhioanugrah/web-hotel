@extends('layouts.admin',['title'=>'Edit Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{route('data.update',['data'=>$item->id])}}" method="post" class="card card-primary"
            enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <div class="card-header">
                <i class="fas fa-plus-circle"></i>Edit
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama_kamar"
                        class="form-control{{ $errors->has('nama_kamar') ? ' is-invalid':'' }}"
                        value="{{$item->nama_kamar}}" />
                    @error('nama_kamar')
                    <div class=" invalid-feedback">{{$message}}
                    </div>
                    @enderror
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="jum_kamar"
                            class="form-control{{ $errors->has('jum_kamar') ? ' is-invalid':'' }}"
                            value="{{$item->jum_kamar}}" />
                        @error('jum_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>fasilitas Kamar </label>
                        <input type="text" name="fasilitas_kamar"
                            class="form-control{{ $errors->has('fasilitas_kamar') ? ' is-invalid':'' }}"
                            value="{{$item->fasilitas_kamar}}" />
                        @error('fasilitas_kamar')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>fasilitas umum</label>
                        <input type="text" name="fasilitas_umum"
                            class="form-control{{ $errors->has('fasilitas_umum') ? ' is-invalid':'' }}"
                            value="{{$item->fasilitas_umum}}" />
                        @error('fasilitas_umum')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                </div>


                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">
                        Update
                    </button>
                </div>
        </form>

    </div>
</div>
@endsection