@extends('layouts.admin',['title'=>'Edit Booking'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-book"></i>Booking</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{route('book.update',['book'=>$book->id])}}" method="post" class="card card-primary"
            enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="card-header">
                <i class="fas fa-plus-circle"></i>Silahkan Pilih Proses Sesuai Yang Ada
            </div>

            <div class="form-group">
                <label for="status">{{ __('Status') }}</label>
                <select class="form-control" name="status" id="status" value="{{$book->status}}">
                    <option value="0" {{ $book->status == 0 ? 'selected' : null }} >Created</option>
                    <option value="1" {{ $book->status == 1 ? 'selected' : null }} >Completed</option>
                    <option value="2" {{ $book->status == 2 ? 'selected' : null }} >Concelled</option>
                </select>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    Edit
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