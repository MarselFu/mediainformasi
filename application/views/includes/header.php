<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pelayanan Pos KC Banjar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/aset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/aset/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/aset/css/style.css" rel="stylesheet">

  <!-- Script jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#tombol").click(function() {
        $("#div").fadeToggle("slow");
      });
    });
  </script>

  <!-- Script React JS -->
  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  <!-- =======================================================
  * Template Name: NewBiz - v4.5.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; transition: all 0.5s; background: #fff; box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3); height: 80px; display: flex; align-items: center; justify-content: space-between;">
    <div class="logo" style="flex-grow: 0; margin-right: auto; padding-left: 40px;"> <!-- Adjust the padding-left as needed -->
        <a href="<?= base_url('index.php/homepage') ?>" style="display: flex; align-items: center;">
            <img src="<?= base_url() ?>/aset/img/logoposind.png" alt="" style="height: 60px; max-height: 100%;">
        </a>
    </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('index.php/homepage') ?>">Home</a></li>
          <li class="dropdown">
    <a class="nav-link">Produk Kami<i class="bi bi-chevron-down"></i></a>
    <ul>
      <!-- Early Of Jasa Pengiriman -->
    <li class="dropdown">
    <a href=""><i class="bi bi-chevron-left"></i>Jasa Pengiriman</a>
    <ul>
    <!-- Early of Domestik -->
    <li class="dropdown">    
    <a href="<?= base_url('index.php/produk/domestik') ?>"><i></i>DOMESTIC</a>
        <!-- End of Domestik -->
     <!-- Early of International -->
     <li class="dropdown">    
    <a href="<?= base_url('index.php/produk/internasional') ?>"><i></i>INTERNATIONAL</a>
            <!-- End of International -->
    </ul>    
        <!-- End Of Jasa Pengiriman -->
        <!-- Early Of Inovasi Pengiriman  -->
         <li class="dropdown">
        <a href=""><i class="bi bi-chevron-left"></i>Inovasi Pengiriman</a>
    <ul>
        <li><a href="<?= base_url('index.php/produk/posaja') ?>">PosAja!</a></li>
        <li><a href="https://booking.posindonesia.co.id/" target="_blank">CDS (Custom Declaration System)</a></li>
    </ul>
        </li>
        <!-- End Of Inovasi Pengiriman  -->
       <!-- Early Of Jasa Keuangan -->
    <li class="dropdown">
    <a href=""><i class="bi bi-chevron-left"></i>Jasa Keuangan</a>
    <ul>
    <!-- Early Of Pembayaran -->
    <li class="dropdown">    
    <a href="<?= base_url('index.php/produk/pembayaran') ?>"><i></i>Pembayaran</a>
    <!-- End Of Pembayaran -->
    <!-- Early Of Remitansi -->
    <li class="dropdown">    
    <a href="<?= base_url('index.php/produk/remitansi') ?>"><i></i>Remitansi</a>   
    <!-- End Of Remitansi -->
    <!-- Early Of Lainnya -->
    <li class="dropdown">    
    <a href="<?= base_url('index.php/produk/lainnya') ?>"><i></i>Lainnya</a>  
    <!-- End Of Lainnya -->
    </ul>    
    <!-- End Of Jasa Keuangan -->
    </ul>
</li>
          <li class="dropdown">
            <a class="nav-link">Tentang Kami <i class="bi bi-chevron-down"></i></a>
            <ul>
      <!-- Early Of Profil Perusahaan -->
            <li class="dropdown">
        <a href=""><i class="bi bi-chevron-left"></i>Profil Perushaan</a>
    <ul>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Sejarah PosIND</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Makna Logo PosIND</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Visi, Misi, Tujuan Dan Tata Nilai</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Struktur Organisasi Perusahaan</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Kantor Regional</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Penghargaan</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Museum Pos Indonesia</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Badan Afiliasi</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Program Kemitraan & Bina Lingkungan</a></li>
    </ul>
        </li>
          <!-- End Of Profil Perusahaan -->
            <!-- Early Of Profil Perusahaan -->
            <li class="dropdown">
        <a href=""><i class="bi bi-chevron-left"></i>Direksi Dan Komisaris</a>
    <ul>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Dewan Komisaris</a></li>
        <li><a href="<?= base_url('index.php/produk/kurirservice') ?>">Dewan Direksi</a></li>
    </ul>
        </li>
          <!-- Early Of Profil Perusahaan --> 
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
         <!--  <li><a class="nav-link active" href="<?= base_url() ?>Auth/index">Admin</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->
  
</body>