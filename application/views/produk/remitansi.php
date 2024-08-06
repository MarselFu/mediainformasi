<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan Remitansi</title>
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

      <!-- ======= start of dalam negeri ======= -->
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
        <h3>Remitansi Dalam Negeri</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Dalam Negeri</a></h4>
              <h4 class="title"><a href="">Rekening bisa, tunai apa lagi … !</a></h4><br>
              <ul class="desc">
                <p>Remitansi (remittance) atau yang dikenal dengan Weselpos adalah layanan pengiriman dan penerimaan uang yang memberikan 
                   solusi terhadap kecepatan, ketepatan dan keamanan kiriman uang baik untuk Domestik (Nasional) maupun Luar Negeri (Internasional).</p>
                <p>Ada dua jenis layanan Weselpos yaitu Layanan Domestik (Nasional) dan Layanan Luar Negeri (Internasional).</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">Layanan Domestik (Nasional)</a></h4><br>
              <ul class="desc">
                <p><strong>1. Weselpos Instan</strong></p>
                <p>Layanan Weselpos dengan waktu tempuh real time, pembayaran menggunakan PIN dan NTP yang dikirimkan langsung  oleh  Pengirim kepada Penerima, 
                   Pengirim bisa mengirimkannya via aplikasi Pospay atau dapat datang ke kantorpos, weselpos instan dapat di cairkan di semua Kantorpos.</p>
                <p>Tarif Weselpos Instan : Range tarif Rp23.000 sd. Rp50.000 tergantung dari besaran uang yang dikirim</p>
                <iframe src="https://www.youtube.com/embed/JcRBqaG6AF4?si=BOP5xYA7dw1-ODTs" title="YouTube video player"  frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p><strong>2. Weselpos Prima</strong></p> 
                <p>Layanan Weselpos yang menggunakan surat pemberitahuan (RS-2) yang diantar oleh petugas KANTOPOS tujuan kepada Penerima, dapat dicairkan hanya di Kantopos yang ditunjuk dalam surat pemberitahuan.</p>
                <p>Tarif Weselpos Prima : Range tarif Rp.14.000 sd. Rp45.000 tergantung dari besaran uang yang dikirim</p> 
                <p><strong>3. Weselpos Cash to Account (Setoran Tunai)</strong></p>
                <p>Pengiriman uang secara tunai melalui KANTORPOS dengan tujuan semua rekening Bank secara real time melalui jaringan ATM BERSAMA dan ATM PRIMA, satu kali pengiriman sampai dengan Rp25.000.000.00.</p>
                <p>Tarif Weselpos C2A : Range tarif Rp23.000 sd. Rp50.000 tergantung dari besaran uang yang dikirim</p>
                <p><strong>4. Weselpos Korporat/Kemitraan</strong></p>
                <p>Layanan Weselpos hasil kerja sama dengan pihak lain, dilakukan dengan suatu perjanjian kerjasama dengan tarif dan layanan sesuai kesepakatan dengan mitra. Informasi kiriman disampaikan dengan surat 
                   pemberitahuan (RS-2) yang diantar oleh petugas KANTOPOS tujuan kepada Penerima atau nomor referensi kiriman yang langsung disampaikan oleh mitra kepada Penerima (setara Weselpos Instan).</p>
                <p>Tarif Weselpos Korporat : Negotiable</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">Keunggulan</a></h4><br>
              <ul class="desc">
                <p><strong>1. Jangkauan luas</strong></p>
                <p>Dengan jaringan KANTOPOS yang tersebar di seluruh Indonesia, setiap orang dapat dengan mudah melakukan transaksi remitansi baik pengiriman maupun pencairan.</p>
                <p><strong>2. Cepat dan mudah</strong></p>
                <p>Begitu menerima informasi kiriman berupa surat pemberitahuan (RS-2), nomor referensi atau NTP dan PIN, Anda bisa datang ke KANTOPOS terdekat. Isi formulir pencairan, 
                   tunjukan/sebutkan informasi kiriman, dan tunjukkan bukti diri yang sah. Uang kiriman langsung dapat Anda terima.</p>
                <p>KANTORPOS juga menerima setoran tunai ke semua rekening bank secara real time melalui jaringan ATM BERSAMA dan ATM PRIMA.</p>
                <p><strong>3. Aman dan handal</strong></p>
                <p>Dalam menjalankan layanan remitansi, Pos Indonesia menerapkan prinsip-prinsip yang berlaku secara internasional untuk meningkatkan keamanan transaksi. Hal ini dilakukan untuk memberikan kepastian bahwa 
                   kiriman uang diserahkan kepada orang yang benar-benar berhak menerima dan mencegah dari upaya tindakan pelanggaran hukum.</p>
                <p>PT Pos Indonesia patuh terhadap ketentuan APU (Anti Pencucian Uang), PPT (Pencegahan Pendanaan Terorisme), TKM (Transaksi Keuangan Mencurigakan), dan anti fraud (anti penipuan).</p>
                <p><strong>INFO LEBIH LANJUT</strong></p>
                <p>Kunjungi Kantorpos Cabang Utama/Kantorpos Cabang terdekat di Kota Anda.</p>
              </ul>
            </div>
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End dalam negeri -->
    <!-- Sekat -->
    <div style="height: 20x;"></div> 
      <!-- ======= start of dalam negeri ======= -->
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
        <h3>Remitansi luar Negeri</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Wesel Luar Negeri</a></h4>
              <h4 class="title"><a href="">REMITTANCE atau WESELPOS </a></h4><br>
              <h4 class="title"><a href="">Ada kiriman uang? Cairkan di POS! </a></h4><br>
              <ul class="desc">
                <p>Remitansi (remittance) atau yang dikenal dengan Weselpos adalah layanan pengiriman dan penerimaan uang yang memberikan 
                   solusi terhadap kecepatan, ketepatan dan keamanan kiriman uang baik untuk Domestik (Nasional) maupun Luar Negeri (Internasional).</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">International Remittance (Pengiriman uang dari dan ke luar negeri)</a></h4><br>
              <ul class="desc">
                <p><strong>1. Jangkauan luas</strong></p>
                <p>Dengan jaringan Kantorpos yang tersebar di seluruh Indonesia, setiap orang dapat dengan mudah melakukan transaksi remitansi baik pengiriman maupun pencairan.</p>
                <br><p><strong>2. Cepat dan mudah</strong></p> 
                <p>Begitu menerima informasi nomor PIN/MTCN dari pengirim di Luar Negeri, pada menit itu juga Anda bisa datang ke KantorPos terdekat. Isi formulir, 
                   sebutkan nomor PIN/MTCN dan tunjukkan bukti diri yang sah. Uang kiriman langsung dapat Anda terima.</p>
                <p><strong>3. 3. Semua ada</strong></p>
                <p>Melalui perusahaan atau layanan apa pun uang dikirim dari negara tujuan, semua dapat diterima dan dicairkan di KANTORPOS. Saat ini layanan remitansi Internasional yang bekerja sama dengan PT Pos Indonesia adalah:</p>
                 <ul>
                   <li>WESTERN UNION</li>
                   <li>MONEYGRAM</li>
                   <li>TRANSFAST</li>
                   <li>RIA MONEY TRANSFER</li>
                   <li>Mitra-mitra dari BCA melalui FIRECASH</li>
                   <li>Mitra-mitra BNI melalui Wesel PIN BNI.</li>
                </ul><br> 
                <p><strong>4. Aman dan handal</strong></p>
                <p>Dalam menjalankan layanan remitansi, Pos Indonesia menerapkan prinsip-prinsip yang berlaku secara Internasional untuk meningkatkan keamanan transaksi. Hal ini dilakukan untuk 
                   memberikan kepastian bahwa kiriman uang diserahkan kepada orang yang benar-benar berhak menerima dan mencegah dari upaya tindakan pelanggaran hukum.</p>
                <p><strong>5. Tidak ada biaya tambahan apa pun</strong></p>
                <p>Berapa uang yang dikirim dari Luar Negeri, sebesar itu pulalah yang akan Anda terima. Tidak ada biaya tambahan, tidak ada potongan apa pun. Uang Anda diterima utuh. Jika Anda mau, 
                   uang yang Anda terima dapat juga disetorkan ke rekening Bank Anda melalui layanan <strong>Cash to Account.</strong></p>   
              </ul>
            </div>
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End dalam negeri -->
    
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