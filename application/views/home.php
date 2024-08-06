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
  
<?php include APPPATH . 'views/includes/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url() ?>/aset/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>LAYANAN<br>POS KC BANJAR </h2>
       <!-- =======  <div>
          <a href="Auth" class="btn-services scrollto">AYO GUNAKANAN LAYANAN KAMI</a>
          <br>
        </div>
      </div> ======= -->

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header" id="tombol">
          <h3>Kontak Kami</h3>
        </div>

        <div class="row" id="div">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15827.281315144724!2d108.5424385!3d-7.3740249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f621243aa7157%3A0x295fc45c8eea123d!2sKantor%20Pos%20Banjar!5e0!3m2!1sen!2sid!4v1718532796745!5m2!1sen!2sid"  frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="bi bi-geo-alt"></i>
                <p>Jl. Kantor Pos, Hegarsari, Kec. Pataruman, Kota Banjar, Jawa Barat 46322</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-envelope"></i>
                <p>info@lapordesa.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="bi bi-phone"></i>
                <p>(0265) 742312</p>
              </div>
            </div>

            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-info footer-links">
            <h3>POS KC BANJAR</h3>
            <p><strong>Layanan Pos Kantor Cabang (KC) Banjar</strong> adalah bagian dari jaringan PT Pos Indonesia yang berlokasi di Banjar. 
            Kantor ini menyediakan berbagai layanan pos dan logistik untuk memenuhi kebutuhan masyarakat di wilayah Banjar dan sekitarnya.</p>
            <br>
            <h4>WEBSITE POSIND</h4>
            <ul>
              <li>
                <div id="mydiv"></div>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Berita Terkini</h4>
            <ul>
              <li><a href="https://www.kompas.com/edu/read/2024/06/13/105514871/beasiswa-ulbi-gelombang-2-dibuka-lulus-bisa-kerja-di-pt-pos-indonesia" target="_blank">Beasiswa ULBI Gelombang 2 telah dibuka, Lulus Bisa Bekerja Di PT POS Indonesia</a></li>
              <li><a href="https://www.posindonesia.co.id/en/articles/detail/dirut-pos-indonesia-layanan-pos-indonesia-beri-kemudahan-untuk-umkm" target="_blank">Layanan Pos Indonesia Beri Kemudahan untuk UMKM</a></li>
              <li><a href="https://www.posindonesia.co.id/en/articles/detail/posind-raih-3-pengahargaan-pada-malam-penganugerahan-bcomss-2024" target="_blank">PosIND Raih 3 Pengahargaan Pada Malam Penganugerahan BCOMSS 2024</a></li>
              <li><a href="https://www.posindonesia.co.id/id/articles/detail/pos-indonesia-luncurkan-program-ramah-lingkungan-bertajuk-posind-goes-green" target="_blank">Pos Indonesia Luncurkan Program Ramah Lingkungan Bertajuk “PosIND Goes Green”</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
            Jl. Kantor Pos, Hegarsari,<br>
            Kec. Pataruman, Kota Banjar<br>
            Jawa Barat 46322<br>
            <strong>Phone :</strong> (0265) 742312<br>
            <strong>Email :</strong> info@lapordesa.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>POS KC BANJAR</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
        Designed by <a href="https://bootstrapmade.com/"> Zian Asti Dwiyanti</a> |  <a href='#' title='Website' target='_blank'>Website</a>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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