@extends('layouts.admin',['title'=>'Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <a href="{{route('kamar.create')}}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>Tambah
                </a>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama_kamar}}</td>
                    <td>Rp.{{$item->harga_kamar}}</td>
                    <td>{{$item->jum_kamar}}</td>
                    <td>
                        <a href="{{route('kamar.edit',['kamar'=>$item->id])}}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{route('kamar.destroy',['kamar'=>$item->id])}}" class="btn btn-danger badge-danger" data-toggle="modal" data-target="#kamarDelete">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-body pb-0">

    </div>
</div>

@endsection

@section('modal')
  <!-- Modal -->
  <div class="kamar fade" id="kamarDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
@endsection