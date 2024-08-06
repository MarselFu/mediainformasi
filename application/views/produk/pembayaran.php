<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan Pembayaran</title>
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

   <!-- ======= Early Layanan Pos Pay ======= -->
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
        <h3>Layanan Pospay</h3>
      </header>
        <div class="row about-container" id="div">

        <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/pospay.png" alt="Pos Aja"></div>
              <h4 class="title"><a href="">Aplikasi Pospay</a></h4>
              <ul class="description">
                <p>Aplikasi yang dapat di download di <a href="https://apps.apple.com/id/app/pospay/id1542001621" target='_blank'> App Store</a> dan <a href="https://play.google.com/store/apps/details?id=com.posindonesia.giropos&hl=en&gl=US" target='_blank'> Play Store</a>, untuk memudahkan masyarakat dalam kirim paket.</p>
               <iframe src="https://www.youtube.com/embed/2rWtAa3CrMc?si=gD6nGnG12LTFZNNq" title="YouTube video player" frameborder="0" style="border:0; width: 100%; height: 230px;" allowfullscreen></iframe><br>
                <p>Apa yang membedakan Pospay dengan aplikasi-aplikasi lain, ini yg kamu perlu ketahui :</p>
                <ul>
                  <p>1. Tidak ada biaya administrasi. It's free, period.</p>
                  <p>2. Bebas dari bunga uang.</p>
                  <p>3. Selain di Kantorpos, Penarikan uang bisa di Indomaret dan ATM BCA.</p> 
                  <p>4. Uang bisa di transfer ke Bank BNI 46, BNI Syariah, Bank BTN , Bank BCA, Bank Mandiri.</p>
                  <p>5. Pemindahbukuan antar rekening giro tanpa biaya admin, dengan fitur QR Code proses jadi lebih mudah.</p>
                  <p>6. Kirim uang ke sanak famili yang tidak punya no rekening bank bisa menggunakan fitur wesel instan. Penerima bisa cairkan langsung ke Kantorpos.</p>                 
              </ul>
            </div>
            </div>
          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div>
        </div>

      </div>
    </section><!-- End Layanan Pos Pay -->
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
        <h3>GIROPOS</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">GIROPOS</a></h4>
              <h4 class="title"><a href="">SOLUSI TRANSAKSI KEUANGAN ANDA.</a></h4><br>
              <ul class="desc">
                <p>Giropos adalah platform layanan keuangan berbasis rekening dan merupakan layanan keuangan legacy yang dimiliki oleh PT Pos Indonesia (Persero).  
                   Giropos sudah hadir dan melayani masyarakat sejak puluhan tahun yang lalu. Selain itu, Layanan Giropos digunakan juga untuk mendukung
                  program-program Pemerintah berupa penyaluran dana ke berbagai wilayah di Indonesia.</p>
                <p>Seiring dengan perkembangan dan kemajuan teknologi informasi, Giropos kini hadir denganplatform digitaluntuk memberikan solusi bagi masyarakat 
                   dalam melakukan transaksi keuangan dengan aman, nyaman, dan mudah diakses.</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">MANFAAT DAN KEUNGGULAN GIROPOS</a></h4><br>
              <ul class="desc">
                <p>Giropos adalah layanan keuangan berbasis rekening yang dapat melakukan proses Penyetoran, Penyimpanan, 
                   Pemindahbukuan, Pembayaran dan transaksi lainnya serta penarikan yang dapat dilakukan setiap saat dengan menggunakan Cekpos, Bilyet Giropos, 
                   sarana perintah Pembayaran lainnya atau dengan Pemindahbukuan.</p>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">APA ITU REKENING GIROPOS</a></h4><br>
              <ul class="desc">
                <p>1. Menyimpan uang lebih mudah.</p>
                <p>2. Aman, nyaman dan mudah diakses (setoran dan pencairan layanan Giropos dapat diakses melalui Kantorpos seluruh Indonesia).</p>
                <p>3. Terhubung dengan jaringan Perbankan.</p>
                <p>4. Memberikan solusi untuk semua kebutuhan transaksi keuangan Anda.</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">SETORAN/TOP UP REKENING GIROPOS</a></h4><br>
              <ul class="desc">
                <p>Anda bisa melakukan setoran/top uprekening Giropos melalui :</p>
                <ul>
                  <p>1.Loket Kantorpos (4.500 outlet se-Indonesia).</p>
                  <p>2. Transfer melalui Jaringan Perbankan*.</p>
               </ul>  
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">AYO BUKA REKENING GIROPOS</a></h4><br>
              <ul class="desc">
                <p>1. Rekening Giropos Reguler:</p>
                <ul>
                  <p>Untuk membuka rekening Giropos Reguler, silahkan datang ke Kantorpos terdekat. Nikmati layanan Giropos secara lengkap.</p>
               </ul><br>
              <p>2. Rekening Giropos Lite dan Lite Plus</p>   
                <ul>
                  <p>Download dan Install melalui Aplikasi Pospay melalui <a href="https://apps.apple.com/id/app/pospay/id1542001621" target='_blank'> App Store</a> dan <a href="https://play.google.com/store/apps/details?id=com.posindonesia.giropos&hl=en&gl=US" target='_blank'> Play Store</a>.</p>
               </ul><br>
              <p>Untuk menikmati layanan Giropos secara lengkap Anda dapat melakukan upgradelayanan ke Giropos Reguler dengan mendatangi Kantorpos terdekat.</p> 
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">JENIS REKENING GIROPOS</a></h4><br>
              <ul class="desc">
                <p>1. Rekening Personal, yaitu Rekening yang dimiliki oleh individu/perorangan dengan fasilitas transaksi menggunakan buku Giropos, Kartu Giropos dan layanan mobile application.</p>
                <p>2. Rekening Bisnis/Korporat, yaitu Rekening yang dibuka atas nama perusahaan/ lembaga/Institusi/pemerintahan/badan hukum dengan 
                   fasilitas transaksi menggunakan rekening koran, Kartu Giropos, bilyet giro/cek, mobile application, atau Cash Management System.</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">KATEGORI REKENING GIROPOS PERSONAL</a></h4><br>
              <ul class="desc">
                <p>A. Rekening Giropos Lite, yaitu Rekening yang dimiliki oleh individu/perorangan dengan ketentuan sebagai berikut :</p>
                <ul>
                  <p>1. Belum dilakukan proses KYC namun terbatas pada validasi data nomor handphonedan emailsecara elektronik.</p>
                  <p>2. Terhadap Rekening Giropos Litediberikan pembatasan jumlah saldo maksimal sebesar Rp2.000.000,00 (dua juta rupiah).</p>
                  <p>3. Pemegang Rekening Giropos Litehanya dapat melakukan pengisian saldo dan proses pembayaran.</p>
                  <p>4. Pemegang Rekening Giropos Litedapat melakukan peningkatan menjadi Rekening Giropos Liteplusdengan cara melakukan pengisian data identitas diri lengkap secara elektronik padaModern Channel Perusahaan.</p>
                  <p>5. Pemegang Rekening Giropos Litedapat melakukan peningkatan menjadi Rekening Giropos Reguler dengan cara melakukan verifikasi dan otentikasi di Kantorpos atau Delivery ChannelPerusahaan lainnya yang tersedia.</p>
               </ul><br>
              <p>B. Rekening Giropos Liteplus, yaitu Rekening yang dimiliki oleh individu/perorangan dengan ketentuan sebagai berikut :</p>   
                <ul>
                <p>1. Proses KYC dilakukan dengan validasi data identitas diri lengkap secara elektronik.</p>
                <p>2. Terhadap Rekening Giropos Liteplusdiberikan pembatasan jumlah saldo maksimal sebesar Rp10.000.000,00 (sepuluh juta rupiah).</p>
                <p>3. Pemegang Rekening Giropos Liteplusdapat melakukan penyetoran, penarikan, pemindah bukuan, penyimpanan, pengiriman uang dan proses pembayaran yang terintegrasi dengan sistem bisnis jasa keuangan lainnya.</p>
                <p>4. Pemegang Rekening Giropos Liteplusdapat melakukan peningkatan menjadi Rekening Giropos Reguler dengan cara melakukan verifikasi dan otentikasi di Kantorpos atau Delivery Channel Perusahaan lainnya yang tersedia.</p>
               </ul><br>
               <p>C. Rekening Giropos Reguler, yaitu Rekening yang dimiliki oleh individu atau korporat dengan ketentuan sebagai berikut :</p>   
                <ul>
                <p>1. Proses KYC telah dilakukan verifikasi dan otentikasi secara fisik atau virtual:</p>
                  <ul>
                    <p>a. Secara fisik di Konter.</p>
                    <p>b. ecara virtual melalui Modern Channelyang dapat menjamin proses verifikasi dan otentikasi dapat dilakukan seperti namun tidak terbatas pada Video Call Authentication, Electronic Authenticationatau layanan lainnya.</p>
                  </ul><br>  
                <p>2. Terhadap Rekening Giropos Reguler tidak diberikan pembatasan jumlah saldo maksimal.</p>
                <p>Pemegang Rekening Giropos Reguler dapat melakukan penyetoran, penarikan, pemindahbukuan, penyimpanan, pengiriman uang dan proses pembayaran yang terintegrasi dengan sistem bisnis jasa keuangan lainnya.</p>
               </ul><br> 
              <p>Untuk menikmati layanan Giropos secara lengkap Anda dapat melakukan upgradelayanan ke Giropos Reguler dengan mendatangi Kantorpos terdekat.</p> 
              <ul>
                <p>1. Pengajuan Pembukaan Rekening dapat dilakukan dengan cara datang ke Kantorpos atau dengan mengakses delivery channellain yang disediakan oleh Perusahaan.</p>
                <p>2. Persyaratan Pembukaan Rekening Giropos melalui Mobile Application  dengan cara Nasabah mengisi Formulir Pengajuan Pembukaan  Rekening giropos secara Elektronik.</p>
                <p>3. Untuk Pembukaan Rekening Giropos melalui Konter, secara sistem akan dibuatkan Rekening Giropos  kategori Reguler.</p>
                <p>4. Untuk Pembukaan Rekening Giropos melalui Mobile Application, secara sistem akan dibuatkan Rekening Giropos kategori Lite.</p>
                <p>5. Kebenaran data Nasabah wajib dilakukan verifikasi dan validasi sesuai dengan prinsip KYC dan AML.</p>
                <p>6. Pembukaan Rekening yang sifatnya massal seperti pada kegiatan penyaluran dana, payroll dan lain-lain dapat dilakukan dengan syarat adanya verifikasi dan validasi data calon Nasabah. Pada pelaksanannya akan diatur dengan peraturan tersendiri.</p>
                <p>7. Persyaratan Pembukaan Rekening :</p>
                 <ul>
                  <li>Mengisi Formulir Pengajuan Pembukaan Rekening.</li>
                  <li>Melampirkan Kartu Identitas.</li>
                  <li>Menandatanganispecimentanda tangan.</li>
                  <li>Untuk pembukaan Rekening Bisnis/Korporat wajib dilampiri dengan dokumen seperti: Akta Perusahaan, Surat Izin Usaha Perusahaan (SIUP), Tanda Daftar Perusahaan (TDP) dan formulir pengajuan pembukaan rekening yang ditandatangani oleh pejabat yang berwenang. </li><br>
                  <p>Surat Izin Usaha Perusahaan (SIUP), Tanda Daftar Perusahaan (TDP) dan formulir pengajuan pembukaan rekening yang ditandatangani oleh pejabat yang berwenang. </p>
                 </ul><br> 
               </ul><br> 
              </ul>  
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">PROSES UPGRADE REKENING GIROPOS</a></h4><br>
              <ul class="desc">
                <p>1. Nasabah dapat melakukan upgrade Kategori Rekening Giropos  dari Rekening Giropos Lite ke Rekening 
                   Giropos Lite Plus dengan cara melakukan e-KYC melalui Mobile Application dengan menggunggah foto selfie dan identitas diri Nasabah.</p>
                <p>2. Nasabah dapat melakukan upgrade Kategori Rekening Giropos  dari Rekening Giropos Lite ke Rekening Giropos Reguler dengan cara datang ke Kantorpos terdekat untuk melengkapi data dan identitas diri.</p>
                <p>3. Mengisi formulir pembukaan rekening Giropos secara lengkap, menunjukan  dan menyerahkan foto copy Identitas Diri.</p>
                <p>4. Dalam hal Aplikasi sudah memberlakukan fitur e-KYC maka pelaksanaan point 1 dan 2 dapat ditiadakan.</p>
              </ul>
            </div> 
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">INFO LEBIH LANJUT</a></h4><br>
              <ul class="desc">
                <p>Kunjungi Kantorpos Cabang Utama/Kantorpos Cabang terdekat di Kota Anda.</p>
              </ul>
            </div>  
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End About Section -->
    
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