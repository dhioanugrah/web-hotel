@extends('layouts.admin',['title'=>'Tambah Booking'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-book"></i>Booking</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{route('book.store')}}" method="post" class="card card-primary" enctype="multipart/form-data">
            <div class="card-header">
                <i class="fas fa-plus-circle"></i>Tambah
            </div>
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_pemesan">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="form-control" />
                    @error('nama_pemesan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" />
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="phone">No Handphone</label>
                    <input type="number" name="phone" class="form-control" />
                    @error('phone')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_tamu">Nama tamu</label>
                    <input type="text" name="nama_tamu" class="form-control" />
                    @error('nama_tamu')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class=<div class="form-group">
                    <label for="data">Tipe kamar</label>
                    <select class="form-control" name="data_id" id="data_id">
                        @foreach($data_id as $id => $data_id)
                        <option value="{{ $id }}">{{ $data_id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="time_from">{{ __('Time From') }}</label>
                    <input type="date" class="form-control datetimepicker" id="time_from" name="time_from"
                        value="{{ old('time_from', $time_from) }}" />
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="time_to">{{ __('Time to') }}</label>
                    <input type="date" class="form-control datetimepicker" id="time_to" name="time_to"
                        value="{{ old('time_to', $time_to) }}" />
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="jum_kamar">jumlah kamar</label>
                    <input type="text" name="jum_kamar" class="form-control" />
                    @error('jum_kamar')
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

@push('script-alt')
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
</script>
<script>
    $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
            sideBySide: true,
            icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
            },
            stepping: 10
        });
</script>
@endpush