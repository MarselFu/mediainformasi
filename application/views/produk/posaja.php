<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Pos Aja</title>
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

<?php include APPPATH . 'views/includes/header.php'; ?>
  <main id="main">

   <!-- ======= Early Layanan Kurir Dan Logistik Dalam Negeri ======= -->
   <section id="about">
      <div class="container" data-aos="fade-up">
      <div style="background-color: #fff; 
                box-shadow: 0 10px 20px rgba(0,0,0,0.1), 0 6px 6px rgba(0,0,0,0.1); 
                margin-top: 20px; 
                padding: 20px; 
                border-radius: 8px; 
                transition: transform 0.3s, box-shadow 0.3s;
                cursor: pointer;"
         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2), 0 15px 12px rgba(0,0,0,0.1);'"
         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1), 0 6px 6px rgba(0,0,0,0.1);'">
      <header class="section-header" id="tombol" style="text-align: center;">
        <h3>Layanan Aplikasi Pos Aja</h3>
      </header>
        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/posaja.png" alt="Pos Aja"></div>
              <h4 class="title"><a href="">Aplikasi Pos Aja</a></h4>
              <ul class="description">
                <p>Aplikasi yang dapat di download di <a href="https://apps.apple.com/id/app/posaja/id1545882949" target='_blank'> App Store</a> dan <a href="https://play.google.com/store/apps/details?id=com.posindonesia.cob&hl=en&gl=US" target='_blank'> Play Store</a>, untuk memudahkan masyarakat dalam kirim paket.</p>
               <iframe src= "https://www.youtube.com/embed/7MjIZdDMWWQ?si=9f0GhtMZ_TlCUoZh" title="YouTube video player" frameborder="0" style="border:0; width: 100%; height: 230px;" allowfullscreen></iframe><br>
                <p>Pada aplikasi ini terdapat fitur, diantaranya:</p>
                <ul>
                  <p>1. Layanan Kirim Paket (Domestik)</p>
                  <p>2. Pick Up Gratis & COD</p>
                  <p>3. Cek Tarif & Lacak Paket</p>                  
              </ul>
            </div>
            </div>
          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/posaja-animasi.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div>
        </div>

      </div>
    </section><!-- End Layanan Kurir dan Logistik Dalam Negeri -->

  <?php include APPPATH . 'views/includes/footer.php'; ?>

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