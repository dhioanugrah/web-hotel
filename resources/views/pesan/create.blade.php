<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="hold-transition">
    <!-- As a link -->
    @include('layouts.inc_tamu.navbar')

    <!-- <div class="container content">
        @yield('content')
    </div> -->
    <div class="row">
        <div class="col-10">
            <h1 class="text-center my-4">Silahkan isi data untuk pesan</h1>
            <form action="{{route('pesan.store')}}" method="post"
                class="card card-primary my-5 ml-xl-5 my-lg-5 mx-5 pb-5 " enctype="multipart/form-data">

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
                        <label for="time_from">Check In</label>
                        <input type="date" class="form-control datetimepicker" id="time_from" name="time_from"
                            value="{{ old('time_from', $time_from) }}" />
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="time_to">Check Out</label>
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
                        Pesan
                    </button>
                </div>
            </form>

        </div>
    </div>
    @yield('modal')

    <footer class="footer">
        <div class="container">
            <span class="text-muted"><strong>Copyright &copy; Dhio Anugrah.</strong> </span>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>