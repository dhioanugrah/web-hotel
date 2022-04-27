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

    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="hold-transition">
    <!-- As a link -->
    @include('layouts.inc_tamu.navbar')

    <!-- <div class="container content">
        @yield('content')
    </div> -->
    <div class="container content">
        <h1 class="text-center my-4">Cetak Bukti Reservasi</h1>
        <form action="{{route('book.store')}}" method="get" class="card card-primary col-7"
            enctype="multipart/form-data">

            <div class="card-body">
                <div class="form-group">
                    <label for="nama_pemesan">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" />
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
            </div>

            <div class="card col-3 ml-auto">
                <a href="" onclick="this.href='/cetak/'+document.getElementById('nama_pemesan').value + 
                '/' + document.getElementById('email').value" class="btn btn-primary">Cetak Bukti</a>
            </div>
        </form>
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