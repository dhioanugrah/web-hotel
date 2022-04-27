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

    <div class="container-fluid p-0">
        <img src="images/bg.jpg" class="img img-fluid w-100">
    </div>
    <form method="get" action="{{route('pesan.create')}}"
        class=" bg-white py-2 px-1 form-pesan border shadow text-center">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-block btn-secondary">Pesan</button>
        </div>
    </form>

    <!-- <div class="container content">
        @yield('content')
    </div> -->
    <div class="container content">
        <h1 class="text-center my-4">Kamar</h1>

        <div class="row kamar ">
            <div class="col-md-4">
                <img src="images/kamar_suite.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md-3">
                <h2>Deluxe Room</h2>
                <span>
                    Fasilitas :
                </span><br>
                <span>- Coffe maker</span><br>
                <span>- AC</span><br>
                <span>- LED TV 32 inch</span>
                <p>
                    Rp. 400. 000 / malam
                </p>
                <p>
                    <button type="button" class="btn btn-default pull-right"><a href="{{route('pesan.create')}}">Pesan
                            Sekarang</a></button>
                </p>
            </div>
        </div>

        <div class="row kamar ">
            <div class="col-md-4">
                <img src="images/kamar_standar.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md">
                <h2>Ekonomi Room</h2>
                <span>
                    Fasilitas :
                </span><br>
                <span>- Coffe maker</span><br>
                <span>- AC</span><br>
                <span>- LED TV 32 inch</span>
                <p>
                    Rp. 400. 000 / malam
                </p>
                <p>
                    <button type="button" class="btn btn-default pull-right"><a href="{{route('pesan.create')}}">Pesan
                            Sekarang</a></button>
                </p>
            </div>
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