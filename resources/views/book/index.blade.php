@extends('layouts.admin',['title'=>'Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <a href="{{route('book.create')}}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>Tambah Pemesanan
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Tipe Kamar</th>
                        <th>Time From</th>
                        <th>Time To</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    @forelse($book as $booking)
                    <tr data-entry-id="{{ $booking->id }}">

                        <td>{{ $no++ }}</td>
                        <td>{{ $booking->nama_pemesan }}</td>
                        <td>{{ $booking->data->nama_kamar }}</td>
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