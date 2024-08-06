<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan Lainnya</title>
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

       <!-- ======= start of Penyaluran dana ======= -->
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
        <h3>Penyaluran Dana</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Solusi untuk penampungan dan pendistribusian dana yang tersebar di seluruh pelosok Indonesia</a></h4><br>
              <ul class="desc">
              <iframe src="https://www.youtube.com/embed/vwYvDA0P9js?si=BAqsiAa7knqUBNsF" title="YouTube video player" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
              <br><p>Giropos merupakan solusi untuk penampungan dan pendistribusian dana yang tersebar di seluruh pelosok Indonesia. Layanan ini sebagai sarana transaksi antar rekening, baik dari satu rekening ke satu rekening 
                     maupun ke banyak rekening lainnya dan setoran tunai ke dalam rekening. Pengambilan uang dilakukan dengan Cekpos dan atau Slip Penarikan.</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">Keunggulan</a></h4><br>
              <ul class="desc">
                <p>1. Layanan transaksi keuangan yang berbasis rekening koran sebagai alternatif layanan perbankan dengan jangkauan yang sangat luas dan tersebar di seluruh Indonesia serta terhubung secara 
                   real time online untuk penerimaan setoran, penarikan (pembayaran dengan Cek) dan pemindahbukuan menggunakan teknologi berbasis core banking system.</p>
                <p>2. Layanan Giropos bersifat komprehensif dan dapat digunakan oleh individu atau institusi dengan jaringan yang luas karena dapat dilayani oleh seluruh Kantorpos online.</p>
                <p>3. Fasilitas Website (PC Banking) untuk keperluan cek saldo dan pemindahbukuan bagi pemegang rekening Giropos institusi.</p>
              </ul>
            </div>
            
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End penyaluran dana -->

           <!-- ======= start of Asuransi======= -->
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
        <h3>Asuransi</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <ul class="desc">
            <p>POS Indonesia bekerjasama dengan Heksa Insurance, mempersembahkan layanan Produk Asuransi untuk memberikan perlindungan bagi para Pelanggan Pos Indonesia</p>
            <p><strong>Beberapa Ragam Layanan Produk :</strong></p>
             <ul>
             <p>1. Asuransi HeksaLink</p> 
              <ul>
               <li>Jenis Produk : Regular Unit Link ;</li>
               <li>Manfaat Bagi Nasabah: Manfaat perlindungan jiwa (melindungi hingga usia 99 tahun dengan nilai uang pertanggungan s/d 120 x premi + Hasil Pengembangan Dana Investasi) ;</li>
               <li>Manfaat hidup: Hasil Pengembangan Dana Investasi ;</li>
               <li>Premi mulai dari :</li>
                 <ul>
                  <li>Rp 200.000/bulan</li>
                  <li>Rp 600.000/triwulan</li>
                  <li>Rp 1.200.000/enam bulan</li>
                  <li>Rp 2.000.000/tahun</li>
                 </ul><br>
              </ul>    
             <p>2. Asuransi Heksalink Prima Investa</p> 
              <ul>
               <li>Jenis Produk: Single Unit Link ;</li>
               <li>Manfaat Bagi Nasabah: Manfaat perlindungan jiwa (melindungi hingga usia 99 tahun dengan nilai uang pertanggungan max 200% premi dasar (mininum Uang Pertanggungan Rp. 15.000.000) + Hasil Pengembangan Dana Investasi ) ;</li>
               <li>Manfaat hidup: Hasil Pengembangan Dana Investasi ;</li>
               <li>Premi: Rp 5.000.000 (sekaligus)</li>
              </ul><br>
             </ul>
             <ul>    
             <p>3. Asuransi Mikro Perisai Diri</p> 
              <ul>
               <li>Jenis Produk: Personal Accident & Term Life ;</li>
               <li>Manfaat Bagi Nasabah: Manfaat Meninggal (Perlindungan Jiwa selama 30 hari) ;</li>
               <li>Pilihan Premi: Rp 5.000 dan Rp 10.000.</li>
              </ul><br>
             </ul> 
             <p>PT Pos Indonesia (Persero) telah bekerja sama dengan PT Avrist Assurance untuk Pendistribusian Produk Asuransi Mikro Propos Demam  Berdarah Dengue (ProDBD). Adapun produk - produk yang dihasilkan adalah sebagai berikut :</p>
             <ul>
             <p>1. Mikro Rencana Aman</p> 
              <ul>
               <li>Jenis Produk : Traditional - Asuransi Dwiguna</li>
               <li>Manfaat Bagi Nasabah : Manfaat Perlindungan Jiwa (Uang Pertanggungan jika Tertanggung tutup usia); Manfaat Hidup (Pengembalian Premi di akhir masa Perlindungan)</li>
               <li>Premi : 50.000, 75.000, 100.000</li>
              </ul><br>
             </ul>
             <ul>
             <p>2. Propos Demam Berdarah Dengue (ProDBD)</p> 
              <ul>
               <li>Jenis Produk : Asuransi Kesehatan Syariah</li>
               <li>Manfaat Bagi Nasabah : Manfaat Tutup Usia (Uang Pertanggungan jika Tertanggung tutup usia akibat penyakit Demam Berdarah); Manfaat Demam Berdarah (Santunan Rumah Sakit, maksimal rawat inap 10 hari)</li>
               <li>Premi : 15.000, 20.000, 25.000</li>
               <li>Masa Tunggu : 10 hari</li>
              </ul><br>
             </ul>
            </ul>
            </div>
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End asuransi -->

       <!-- ======= start of kemitraan bank ======= -->
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
        <h3>Kemitraan Bank</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Ayo Menabung di Kantor Pos</a></h4><br>
              <ul class="desc">
              <p>Ayo menabung dengan layanan perbankan yang tersedia di Kantorpos.</p>
              <p><strong>Layanan ini meliputi :</strong></p>
              <p><strong>1. Tabungan (Saving)</strong></p>
                <p>Layanan simpan yang dimiliki oleh Bank di mana Pos berperan dalam kegiatan di front office.</p>
                <br><p><strong>2. Kredit</strong></p> 
                <p>Penyaluran Kredit untuk pensiunan oleh Mitra Kredit Pensiun (Bank dan Koperasi).</p> 
             <p><strong>Mitra Kerja :</strong></p>  
                <p><strong>1. Tabungan</strong></p>
                <p>Layanan simpan yang dimiliki oleh Bank di mana Pos berperan dalam kegiatan di front office.</p>
                <iframe src="https://www.youtube.com/embed/oQLTESCYhvM?si=bQUJn4H4vLAJkSym" title="YouTube video player" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p><strong>2. Penyaluran Kredit</strong></p> 
                <p>Mitra Kredit Pensiun (bank dan koperasi)</p> 
                <p><strong>3. Pengiriman</strong></p>
                <p>WeselPOS PIN (Bank BNI).</p>
              </ul>
            </div>
            </div>
          <!-- <div class="col-lg-6 background order-lg-2" data-aos="zoom-in" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
            <img src="<?= base_url() ?>/aset/img/domestik.png" class="img-fluid" alt="" style="flex: 1; width: 100%; height: 50%;">
          </div> -->
        </div>

      </div>
    </section><!-- End kemitraan bank -->
    
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