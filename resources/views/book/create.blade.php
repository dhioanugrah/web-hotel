@extends('layouts.admin',['title'=>'Tambah Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{route('book.store')}}" method="post" class="card card-primary" enctype="multipart/form-data">

            @csrf
            <div class="card-header">
                <i class="fas fa-plus-circle"></i>Tambah
            </div>
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" class="form-control" value="{{$book->nama_pemesan}}" />
                @error('nama_pemesan')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$book->email}}" />
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">No Handphone</label>
                <input type="number" name="phone" class="form-control" value="{{$book->phone}}" />
                @error('phone')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_tamu">Nama tamu</label>
                <input type="text" name="nama_tamu" class="form-control" value="{{$book->nama_tamu}}" />
                @error('nama_tamu')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class=<div class="form-group">
                <label for="data">Tipe kamar</label>
                <select class="form-control" name="data_id" id="data">
                    @foreach($data as $id => $data)
                    <option value="{{ $id }}">{{ $data }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="time_from">Time From</label>
                <input type="text" class="form-control datetimepicker" id="time_from" name="time_from"
                    value="{{ old('time_from', $timeFrom) }}" />
            </div>
            <div class="form-group">
                <label for="time_to">Time From</label>
                <input type="text" class="form-control datetimepicker" id="time_to" name="time_to"
                    value="{{ old('time_to', $timeTo) }}" />
            </div>
            <div class="form-group">
                <label for="jum_kamar">jumlah kamar</label>
                <input type="text" name="jum_kamar" class="form-control" value="{{$book->jum_kamar}}" />
                @error('jum_kamar')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class=<div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="0">Created</option>
                    <option value="1">Completed</option>
                    <option value="2">Concelled</option>
                </select>
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