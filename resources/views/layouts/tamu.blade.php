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
        <img src="images/banner.jpg" class="img img-fluid w-100">
    </div>
    <!-- <div class="container content">
        @yield('content')
    </div> -->
    

    <div class="container  mt-2" id="panel_tentang_kami">
  <div class="d-flex justify-content-center">
    <div class="row">
     <div class="col-sm-12 p-5">
      <h2 class="text-center">TENTANG KAMI</h2>
      <p> <b>Hotel Anaya</b> terkenal dengan keramahan kelas dunia, desain hotel yang mengagumkan dan standar layanan yang tak tertandingi di Bali dan Jakarta, AYANA adalah resort bintang lima yang pertama di Pantai Waecicu, Pulau Flores, hanya dengan satu jam penerbangan dari Pulau Bali yang sangat indah.
        AYANA Komodo Resort, Waecicu Beach memiliki 13 suites dan 192 kamar tamu yang premium. Terinspirasi dengan cahaya, kenyamanan dan ruang terbuka, setiap kamar yang kontemporer menawarkan pemandangan laut yang menawan dengan jendela besar untuk menikmati cahaya keemasan dari matahari yang terbenam di belakang Pulau Kukusan.
        
        Berlokasi di salah satu pulau berbukit dan indah dari kepulauan Indonesia, terdapat beragam agama, bahasa dan pemandangan yang luar biasa yang berpadu dengan laut berwarna biru kristal dan pantai dengan pasir putih yang asli.
    </p>
   </div>
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