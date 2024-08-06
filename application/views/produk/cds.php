<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CDS ( Custom Declaration System )</title>
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
        <h3>Layanan Kurir dan Logistik dalam Negeri</h3>
      </header>
        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/sameday.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Sameday</a></h4>
              <ul class="description">
                <li>Pengiriman dan penerimaan paket dilakukan dihari yang sama</li>
                <li>Maksimal 9 Jam Sampai (Sameday Service)</li>
                <li>Kiriman di Kota yang sama (City Courier)</li>
                <li>Maksimal berat paket 10 Kg</li>
                <li>Tersedia di aplikasi PosAja!</li>
                <li>Free Pick Up Paket Bisa</li>
                <li> COD (Cash On Delivery)</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/nextday.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Nextday</a></h4>
              <ul class="description">
                <li>Layanan pengiriman paket besok sampai</li>
                <li>Pengiriman dan penerimaan paket H+1 (Next Day)</li>
                <li>Kiriman di antar kota provinsi</li>
                <li>Maksimal berat paket 30 Kg</li>
                <li>Tersedia di aplikasi PosAja!</li>
                <li>Free Pick Up Paket</li>
                <li> COD (Cash On Delivery)</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/reguler.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Reguler</a></h4>
              <ul class="description">
                <li>Layanan Reguler pengiriman paket Nasional</li>
                <li>Pengiriman dan penerimaan H+2 s.d H+4 sampai</li>
                <li>Kiriman di Antar Kota dan Kabupaten</li>
                <li>Tersedia di aplikasi PosAja!</li>
                <li>Maksimal berat paket 50 Kg</li>
                <li>Free Pick Up Paket</li>
                <li>COD (Cash On Delivery)</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/jumbo.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Jumbo</a></h4>
              <ul class="description">
                <li>Layanan Pengiriman paket/barang non standar dengan standar waktu penyerahan point to point  dalam jaringan nasional</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/ekonomi.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Ekonomi</a></h4>
              <ul class="description">
                <li>Layanan Pos Universal (LPU) berupa pengiriman surat/dokumen biasa, kartupos, sekogram, dan paket pos biasa dengan standar waktu penyerahan point to point dalam jaringan nasional</li>
              </ul>
            </div>
            </div>
          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div>
        </div>

      </div>
    </section><!-- End Layanan Kurir dan Logistik Dalam Negeri -->
    <!-- Sekat -->
  <div style="height: 20x;"></div> 

      <!-- ======= About Section ======= -->
   <section id="about" style="margin-top: 20px;">
      <div class="container" data-aos="fade-up">
      <div style="background-color: #fff; 
                box-shadow: 0 10px 20px rgba(0,0,0,0.1), 0 6px 6px rgba(0,0,0,0.1); 
                margin-top: 20px; 
                padding: 20px; 
                border-radius: 8px; 
                transition: transform 0.3s, box-shadow 0.3s;
                cursor: pointer;
                margin-top: -120px;"
         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2), 0 15px 12px rgba(0,0,0,0.1);'"
         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1), 0 6px 6px rgba(0,0,0,0.1);'">
      <header class="section-header" style="text-align: center;">
        <h3>Syarat dan Ketentuan Kiriman Domestik</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">A. Ketentuan Umum</a></h4>
              <ul class="description2">
                <p>1. Setiap pengirim berhak mendapatkan bukti pengiriman.</p>
                <p>2. PT Pos Indonesia (Persero) bertanggung jawab terhadap kiriman bila 
                   pengirim telah membayar lunas semua biaya pengiriman dan biaya lainnya (jika ada).</p>
                <p>3. Selama belum diserahkan kepada penerima, hak atas kiriman masih berada di tangan pengirim, 
                   oleh karena itu tuntutan ganti rugi atas kehilangan/kerusakan kiriman hanya dapat diajukan oleh pengirim.</p>
                <p>4. Pernyataan tertulis pengirim tentang isi kiriman pada form order, harus sama dengan isi kiriman sebenarnya. 
                   Dalam hal terdapat ketidaksesuaian maka pengirim bertanggung jawab sepenuhnya atas segala dampak yang timbul akibat 
                   pelanggaran hukum yang dilakukan, termasuk jika mengakibatkan kerusakan atau kehilangan kiriman lainnya.</p>
                <p>5. PT Pos Indonesia (Persero) berhak membuka dan/atau memeriksa kiriman di hadapan pengirim untuk meyakini kebenaran informasi terkait isi kiriman.</p>
                <p>6. Pembungkus adalah kewajiban pengirim berupa wadah dan komponen lain atau material yang diperlukan untuk mewadahi barang agar tetap sesuai fungsinya, 
                   harus dapat melindungi isi kiriman dari setiap getaran atau benturan selama angkutan, baik yang terjadi antara isi 
                   dengan kotak pembungkusnya atau antar kotak pembungkus kiriman satu dengan yang lainnya.</p>
                <p>7. Biaya pengemasan kiriman menjadi tanggung jawab pengirim.</p>
                <p>8. PT Pos Indonesia (Persero) hanya bertanggung jawab terhadap kerusakan fisik isi kiriman yang disebabkan oleh proses operasional, 
                   dan tidak bertanggung jawab serta tidak memberikan ganti rugi atas kiriman yang diakibatkan oleh:</p>
                   <ul>
                    <p>a. Kerugian atau kerusakan yang disebabkan unsur kesengajaan oleh pengirim.</p>
                    <p>b. Pelanggaran terhadap aturan Dangerous Goods, Prohibited Items dan Restricted Items.</p>
                    <p>c. Isi kiriman sebenarnya yang tidak sesuai dengan pernyataan pengirim.</p>
                    <p>a. Kerugian atau kerusakan yang disebabkan unsur kesengajaan oleh pengirim.</p>
                    <p>a. Kerugian atau kerusakan yang disebabkan unsur kesengajaan oleh pengirim.</p>
                    <p>a. Kerugian atau kerusakan yang disebabkan unsur kesengajaan oleh pengirim.</p>
                   </ul>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/nextday.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Nextday</a></h4>
              <ul class="description">
                <li>Layanan pengiriman paket besok sampai</li>
                <li>Pengiriman dan penerimaan paket H+1 (Next Day)</li>
                <li>Kiriman di antar kota provinsi</li>
                <li>Maksimal berat paket 30 Kg</li>
                <li>Tersedia di aplikasi PosAja!</li>
                <li>Free Pick Up Paket</li>
                <li> COD (Cash On Delivery)</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/reguler.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Reguler</a></h4>
              <ul class="description">
                <li>Layanan Reguler pengiriman paket Nasional</li>
                <li>Pengiriman dan penerimaan H+2 s.d H+4 sampai</li>
                <li>Kiriman di Antar Kota dan Kabupaten</li>
                <li>Tersedia di aplikasi PosAja!</li>
                <li>Maksimal berat paket 50 Kg</li>
                <li>Free Pick Up Paket</li>
                <li>COD (Cash On Delivery)</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/jumbo.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Jumbo</a></h4>
              <ul class="description">
                <li>Layanan Pengiriman paket/barang non standar dengan standar waktu penyerahan point to point  dalam jaringan nasional</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/ekonomi.png" alt="Pos Sameday"></div>
              <h4 class="title"><a href="">Pos Ekonomi</a></h4>
              <ul class="description">
                <li>Layanan Pos Universal (LPU) berupa pengiriman surat/dokumen biasa, kartupos, sekogram, dan paket pos biasa dengan standar waktu penyerahan point to point dalam jaringan nasional</li>
              </ul>
            </div>
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
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