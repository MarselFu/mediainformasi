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
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="<?= base_url('index.php/homepage') ?>" ><img src="<?= base_url() ?>/aset/img/logoposind.png" alt="" class="img-fluid" style="width: 50px; height: 50px;"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('index.php/homepage') ?>">Home</a></li>
          <li class="dropdown">
            <a class="nav-link">Produk <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?= base_url('index.php/produk/produk1') ?>">Produk1 </a></li>
            <li><a href="<?= base_url('index.php/produk/produk2') ?>">Produk 2</a></li>
              <!-- Add more dropdown items if needed -->
            </ul>
          </li>
          <li class="dropdown">
            <a class="nav-link">Tentang <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="<?= base_url('index.php/tentang/tentang1') ?>">Fasilitas Layanan</a></li>
            <li><a href="<?= base_url('index.php/produk/produk2') ?>">Produk 2</a></li>
              <!-- Add more dropdown items if needed -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
         <!--  <li><a class="nav-link active" href="<?= base_url() ?>Auth/index">Admin</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">
  </section><!-- End Hero Section -->

  <main id="main">

   <!-- ======= About Section ======= -->
   <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header" id="tombol">
          <h3>Apa saja sih fasilitas layanan yang ada di Pos KC Banjar ?</h3>
        </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              <br><strong>Layanan Pos Kantor Cabang (KC) Banjar</strong> adalah bagian dari jaringan PT Pos Indonesia yang berlokasi di Banjar. 
              Kantor ini menyediakan berbagai layanan pos dan logistik untuk memenuhi kebutuhan masyarakat di wilayah Banjar dan sekitarnya.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-envelope"></i></div>
              <h4 class="title"><a href="">Pengiriman Surat dan Paket</a></h4>
              <p class="description">Kantor Pos KC Banjar menyediakan layanan pengiriman surat dan paket baik untuk tujuan domestik maupun internasional. 
                                     Layanan ini mencakup pengiriman surat biasa, surat kilat, paket reguler, dan paket kilat khusus.</p>
            
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-cash"></i></div>
              <h4 class="title"><a href="">Layanan Keuangan</a></h4>
              <p class="description">Kantor Pos KC Banjar juga menyediakan berbagai 
                                     layanan keuangan seperti pembayaran tagihan listrik, air, telepon, dan layanan keuangan lainnya seperti Western Union, giro pos, dan remitansi.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="3s00">
              <div class="icon"><i class="bi bi-mailbox"></i></div>
              <h4 class="title"><a href="">Layanan PO Box</a></h4>
              <p class="description">Kantor Pos KC Banjar menyediakan layanan kotak pos (PO Box) untuk masyarakat yang membutuhkan alamat pos tetap.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="3s00">
              <div class="icon"><i class="bi bi-cart"></i></div>
              <h4 class="title"><a href="">Layanan E-commerce</a></h4>
              <p class="description">Kantor Pos KC Banjar juga bekerja sama dengan berbagai platform e-commerce untuk menyediakan 
                                     berbagai layanan pengiriman barang yang cepat dan efisien.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="3s00">
              <div class="icon"><i class="bi bi-truck"></i></div>
              <h4 class="title"><a href="">Layanan Kurir Khusus</a></h4>
              <p class="description">Kantor Pos KC Banjar menyediakan layanan kurir khusus yang menjamin 
                                     keamanan dan kecepatan pengiriman dokumen atau barang berharga.</p>
            </div>
          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="<?= base_url() ?>/aset/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/aset/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/aset/js/main.js"></script>

  <!-- Script React JS -->
  <script type="text/babel">
    function Hello() {
      return <a href="https://www.posindonesia.co.id/id" target="_blank">Cek disini</a>;
    }

    ReactDOM.render(<Hello />, document.getElementById('mydiv'))
  </script>

</body>

</html>