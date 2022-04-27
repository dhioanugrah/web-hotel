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

    <!-- <div class="container content">
        @yield('content')
    </div> -->
    <div class="container content">
        <h1 class="text-center my-4">Silahkan di Screen Shot atau Print untuk bukti</h1>
        <form action="" method="post" class="card card-primary col-12" enctype="multipart/form-data">

            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>

                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Tipe Kamar</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Jumlah Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        @forelse($cetak as $booking)

                        <td>{{ $no++ }}</td>
                        <td>{{ $booking->nama_pemesan }}</td>
                        <td>{{ $booking->data->nama_kamar }}</td>
                        <td>{{ $booking->time_from }}</td>
                        <td>{{ $booking->time_to }}</td>
                        <td>{{ $booking->jum_kamar }}</td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">{{ __('Data Empty') }}</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

                <div class=" col-1 ml-auto pt-4">
                    <a href="{{ route('pesan.index') }}" class="btn btn-secondary">
                        <i class="fa fa-back">Home</i>
                    </a>
                </div>
            </div>


        </form>
        @yield('modal')

        <!-- jQuery -->
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>