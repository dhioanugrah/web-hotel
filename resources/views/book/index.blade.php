@extends('layouts.admin',['title'=>'Booking'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-book"></i>Booking</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row mb-2">
                <div class="col-8">
                    <a href="{{route('book.create')}}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>Tambah
                    </a>
                </div>
                <form action="" class="form-inline">
                    <div class=" input-group ml-auto col-15">
                        <input type="search" name="search" class="form-control"
                            placeholder="Cari Nama Atau Tgl Check In">

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Go !</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Tipe Kamar</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    @forelse($book as $booking)

                    <td>{{ $no++ }}</td>
                    <td>{{ $booking->nama_pemesan }}</td>
                    <td>{{ $booking->data->nama_kamar }}</td>
                    <td>{{ $booking->time_from }}</td>
                    <td>{{ $booking->time_to }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('book.show', $booking->id) }}" class="btn btn-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('book.edit', $booking->id) }}" class="btn btn-info">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form onclick="return confirm('are you sure ? ')" class="d-inline"
                            action="{{ route('book.destroy', $booking->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">{{ __('Data Empty') }}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- Content Row -->

@endsection