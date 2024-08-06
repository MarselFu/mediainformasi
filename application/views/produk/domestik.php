<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Domestic</title>
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
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100" 
              style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/sameday.png" alt="Pos Sameday"  style="width: 50px; height: auto;"></div>
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
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/nextday.png" alt="Pos Nextday" style="width: 50px; height: auto;"></div>
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

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/reguler.png" alt="Pos Reguler" style="width: 50px; height: auto;"></div>
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

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/jumbo.png" alt="Pos Jumbo" style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">Pos Jumbo</a></h4>
              <ul class="description">
                <li>Layanan Pengiriman paket/barang non standar dengan standar waktu penyerahan point to point  dalam jaringan nasional</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/ekonomi.png" alt="Pos Ekonomi" style="width: 50px; height: auto;"></div>
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
              <h4 class="title"><a href="">A. Ketentuan Umum</a></h4><br>
              <ul class="desc">
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
                    <p>d. Kerugian atau kerusakan sebagai akibat oksidasi, kontaminasi polusi dan reaksi nuklir.</p>
                    <p>e. Kerugian atau kerusakan akibat force majeure seperti: bencana alam, kebakaran, perang, huru- hara, aksi melawan pemerintah, pemberontakan, perebutan kekuasaan atau penyitaan oleh penguasa setempat.</p>
                    <p>f. Kerugian tidak langsung atau keuntungan yang tidak jadi diperoleh, yang disebabkan oleh kekeliruan dalam penyelenggaraan pos (Undang Undang Republik Indonesia No. 38 tahun 2009).</p>
                   </ul>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">B. Kiriman Terlarang</a></h4><br>
              <ul class="desc">
                <p>1. Kiriman yang dapat membahayakan kiriman lainnya, lingkungan atau keselamatan orang, 
                   karena sifat dan pembungkusannya sehingga tidak dapat dikirimkan sebagai kiriman domestik.</p>
                <p>2. Kiriman-kiriman yang dimaksud pada ayat (1) meliputi:</p>
                   <ul>
                    <p>a. Narkotika, psikotropika, dan obat-obat terlarang lainnya.</p>
                    <p>b. Kiriman yang mudah meledak atau amunisi,</p>
                    <p>c. Kiriman yang mudah terbakar,</p>
                    <p>d. Senjata-senjata, senjata api asli ataupun replikasnya termasuk suku cadangnya;</p>
                    <p>e. Kiriman yang mudah rusak dan dapat mencemari lingkungan,</p>
                    <p>f. Kiriman yang melanggar kesusilaan,</p>
                    <p>g. Kiriman yang sifat dan pembungkusnya dapat membahayakan keselamatan orang, dapat mengotori dan merusak kiriman lain.</p>
                    <p>h. Binatang hidup kecuali lebah, lintah, ulat sutera, parasit, serangga. dan serangga pembasmi serangga perusak yang dikirim oleh badan yang diakui resmi sesuai dengan ketentuan perundangan.</p>
                    <p>i. Kiriman yang mudah busuk, bahan biologis yang mudah busuk dan mudah menularkan penyakit,</p>
                    <p>j. Barang palsu dan atau dipalsukan, banderol-banderol/ stiker pajak palsu.</p>
                    <p>k. Barang yang dilarang masuk oleh negara tujuan sesuai dengan peraturan negara setempat.</p>
                    <p>l. Barang cetakan yang tidak mencantumkan penerbit atau tulisan yang bersifat menghasut, memfitnah, upaya sabotase terhadap pihak tertentu atau pemerintah yang sah;</p>
                    <p>m. Jasad manusia sebagian atau utuh.</p>
                    <p>n. Kiriman lainnya yang menurut peraturan perundang-undangan dinyatakan dilarang.</p>
                  </ul><br>
                <p>3. Kiriman-kiriman yang dilarang pengirimannya berdasarkan regulasi pihak penerbangan meliputi:</p>    
                   <ul>
                    <p>a. Kiriman yang dapat meledak atau menyala atau kiriman yang dapat terbakar sendiri seperti: peluru, bahan peledak, mercon, atau sejenisnya serta segala macam korek api dan gas pengisiannya.</p>
                    <p>b. Bahan yang rentan terhadap oksidasi misalnya bubuk pemutih, peroksida dan bahan sejenis lainnya,</p>
                    <p>c. Senjata api, senjata angin atau airsoft gun,</p>
                    <p>d. Uang kertas dan uang logam serta instrumen bank yang bernilai uang seperti cek, giro bilyet, kartu kredit/ debit yang sudah diaktivasi,</p>
                    <p>e. Air atau benda cair lainnya,</p>
                    <p>f. Kiriman lainnya yang menurut pihak penerbangan dinyatakan dilarang.</p>
                   </ul> 
              </ul>
            </div>

           
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">C. KATEGORI, BERAT DAN UKURAN KIRIMAN</a></h4><br>
              <ul class="desc">
                <p>1. Kategori Kiriman terdiri dari kiriman Surat dan Kiriman Paket.</p>
                <p>2. Klasifikasi tingkat berat menjadi 2 (dua) yaitu:</p>
                  <ul>
                    <p>a. Kiriman Surat > 0-gram sampai dengan 2.000 gram.</p>
                    <p>b. Kiriman Paket > 0-gram sampai dengan 50.000 gram.</p>
                  </ul><br>  
                  <p>3. Klasifikasi yang membedakan Surat dengan Kiriman Paket adalah pendekatan jenis kiriman yang dikirim, yaitu:</p>
                  <ul>
                    <p>a. Kiriman Surat adalah berupa komunikasi tertulis dengan atau tanpa sampul yang ditujukan 
                       kepada individu atau badan dengan alamat tertentu, yang dalam penyampaiannya dilakukan sepenuhnya secara fisik.</p>
                    <p>b. Kiriman paket adalah kegiatan layanan pengembalian, penerimaan dan/ atau pengantaran barang.</p>
                  </ul><br>  
                  <p>4. Ukuran kiriman:</p>
                  <ul>
                    <p>a. Minimal sebagai berikut:</p>
                    <ul>
                      <p>1) Panjang = 15.2 cm</p>
                      <p>2) Lebar = 9 cm</p>
                      <p>3) Tinggi = 0.2 cm</p>
                    </ul><br>
                    <p>b. Maksimal berbentuk kotak/ gulungan sebagai berikut:</p>
                    <ul>
                      <p>1) Via Udara:</p>
                        <ul>
                          <p>Panjang + 2(Lebar + Tinggi) ≤ 400 cm,</p>
                          <p>Dengan sisi terpanjang maksimal 150 cm.</p>
                        </ul><br>
                      <p>1) Via Udara:</p>
                        <ul>
                          <p>Panjang + 2(Lebar + Tinggi) ≤ 600 cm,</p>
                          <p>Dengan sisi terpanjang maksimal 200 cm.</p>
                  </ul><br>  
                  </ul>
                  </ul> 
                    <p>5. Perhitungan volumetric dilakukan apabila salah satu sisi melebihi ukuran sebagai berikut:</p>
                  <ul>
                    <p>a. Panjang = 35 cm</p>
                    <p>b. Lebar = 25 cm</p>
                    <p>c. Tinggi = 20 cm</p>
                  </ul>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">D. KIRIMAN POS MELALUI ONLINE BOOKING</a></h4><br>
              <ul class="desc">
                <p>1. Pelanggan melakukan login aplikasi online booking system.</p>
                <p>2. Pelanggan melakukan order dengan mengisi data pengiriman.</p>
                <p>3. Pelanggan mendapatkan informasi ongkos kirim</p>
                <p>4. Pelanggan menyetujui syarat dan ketentuan yang berlaku melalui aplikasi online booking system.</p>
                <p>5. Pelanggan memilih metode pembayaran yang tersedia di aplikasi online booking system.</p>
                <p>6. Pelanggan dapat melakuan cetak shipping label sendiri.</p>
                <p>7. Pelanggan dapat melakukan pengumpulan kiriman sesuai metode yang tersedia (pickup/ drop off)</p>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">E. GANTI RUGI</a></h4><br>
              <ul class="desc">
                <p>1. Hak Atas Tuntutan Ganti Rugi</p>
                  <ul>
                    <p>a. Tuntutan Ganti Rugi merupakan hak pengirim atau penerima atas dasar kuasa pengirim.</p>
                    <p>b. Tuntutan Ganti Rugi hanya dapat diajukan terhadap kiriman kurir dan logistik sebagai berikut:</p>
                      <ul>
                        <p>i. Keterlambatan</p>
                        <p>ii. Kerusakan</p>
                        <p>iii. Rusak sebagian</p>
                        <p>iv. Rusak seluruhnya</p>
                        <p>v. Hilang</p>
                        <p>vi. Hilang sebagian</p>
                      </ul><br>
                    <p>c. Pengajuan pengaduan harus diajukan sebagai berikut:</p>
                      <ul>
                        <p>i. Keterlambatan, kerusakan, rusak sebagian, rusak seluruhnya dan hilang sebagian selambat-lambatnya 90 (Sembilan puluh) hari kalender sejak barang kiriman diterima oleh penerima.</p>
                        <p>ii. Hilang selambat-lambatnya 15 (lima belas) hari kalender sejak tanggal penetapan hilang oleh kantorpos.</p>
                      </ul><br>
                    <p> d. Tuntutan Ganti Rugi dapat diajukan pengirim atau kuasanya dengan melampirkan:</p>  
                      <ul>
                          <p>i. Asli surat pengajuan ganti rugi atau surat tuntutan klaim yang menyebutkan nilai tuntutan serta menerangkan dengan jelas kronologis terjadinya kerugian.</p>
                          <p>ii. Asli atau scan resi</p>
                          <p>iii. Mengisi formulir pengajuan ganti rugi</p>
                          <p>iv. Mengisi formulir kerugian</p>
                          <p>v. Surat keterangan dari pihak berwenang, untuk kerugian akibat kecelakaan.</p>
                          <p>vi. Cetakan atau print out dari customer care system kantorpos yang dibubuhi cap stempel.</p>
                          <p>vii. Copy faktur atau invoice pembelian barang kiriman (khusus untuk barang baru).</p>
                          <p>viii. Foto-foto terkait dengan terjadinya kerugian.</p>
                        </ul><br>
                    <p>e. Surat penetapan hilang diberikan oleh kepala kantorpos dimana Pengirim/ Penerima mengajukan pengaduan atas kiriman yang dikirim melalui kantorpos.</p>
                    <p>f. Pembayaran Ganti Rugi dibayarkan paling lambat 6 (enam) hari kerja sejak tuntutan ganti rugi diterima, dengan pengaturan sebagai berikut:</p>
                      <ul>
                          <p>i. Hari pertama penerimaan klaim pengajuan ganti rugi dari pengirim/ penerima.</p>
                          <p>ii. Hari kedua sampai dengan hari keempat, melengkapi data pendukung internal untuk pengabsahan bukti pengajuan.</p>
                          <p>iii. Maksimal hari kelima pemberitahuan kepada pengirim/ penerima.</p>
                          <p>iv. Maksimal hari keenam pembayaran klaim ganti rugi kepada pengirim/ penerima.</p>
                        </ul><br>
                    <p>g. Maksimal pembayaran ganti rugi dibayarkan langsung oleh kantorpos setempat dimana pengajuan klaim diajukan.</p>
                  </ul><br>
                <p>2. Hilangnya Hak Ganti Rugi</p>
                <p>Perusahaan tidak berkewajiban memberikan ganti rugi terhadap hal-hal sebagai berikut</p>  
                  <ul>
                      <p>a. Kepada pengirim yang telah menyerahkan haknya atas ganti rugi kepada penerima berdasarkan surat kuasa pengalihan hak.</p>
                      <p>b.Tuntutan ganti rugi diajukan melampaui batas waktu yang ditetapkan oleh perusahaan.</p>
                      <p>c. Isi kiriman yang tidak sesuai dengan resi/ formulir.</p>
                      <p>d. Kiriman berisi barang yang dilarang pengirimannya.</p>
                      <p>e. Kiriman dibuka, diperiksa dan/ atau disita oleh pejabat yang berwenang sesuai dengan ketentuan perundang-undangan.</p>
                      <p>f. Jika peristiwa keterlambatan/ kerusakan/ hilang kiriman merupakan force majeure.</p>
                  </ul><br>
                <p>3. Nilai jaminan ganti rugi</p>
                  <ul>
                  <p>a. Nilai jaminan ganti rugi atau nilai pertanggungan ditetapkan sebagai berikut:</p>
                  <p>Pengiriman kurir dan logistik ritel:</p>    
                  <p>Nilai pertanggungan lebih dari Rp. 0,00 (nol rupiah) sampai dengan Rp. 1.000.000.000,00 (satu miliar rupiah) per barang kiriman atau Rp. 10.000.000.000,00 (sepuluh miliar rupiah) per satu alat angkut.</p>  
                  <p>b. Nilai pertanggungan khusus untuk akta otentik yang diterbitkan oleh suatu instansi atau institusi atau Lembaga tertentu, antara lain ijazah, Surat Izin Mengemudi (SIM), 
                     Buku Pemilik Kendaraan Bermotor (BPKB), Surat Tanda Nomor Kendaraan (STNK), atau dokumen lainnya ditetapkan sebesar biaya pengurusan atau pembuatannya maksimum 
                     sebesar Rp. 6.000.000,00 (enam juta rupiah) per satu Akta Otentik.</p>  
                  <p>c. Nilai Pertanggungan khusus untuk barang-barang antik atau barang-barang seni ditetapkan maksimum sebesar RP. 6.000.000,00 (enam juta rupiah) per satu barang.s</p>  
                  <p>d. Ganti Rugi maksimum per satu barang kiriman dan per satu alat angkut.</p>
                  </ul><br>
                <p>4. Bea Jaminan Ganti Rugi</p>
                  <ul>
                    <p>a. Jaminan ganti rugi berdasarkan bea jaminan ganti rugi yang dipungut dari pengirim dengan besarannya sebesar 0.24% (nol koma duapuluh empat perseratus) 
                       dari nilai jaminan ganti rugi dengan ketentuan minimal bea jaminan ganti rugi peritem isi kiriman sebesar RP. 500,00 (limaratus rupiah).</p>
                    <p>b. Bea jaminan ganti rugi sudah termasuk PPN 1,1% (sepuluh perseratus).</p>
                  </ul><br>
                <p>5. Ganti Rugi</p>    
                  <ul>
                    <p>a. Ganti rugi standar perusahaan terhadap kiriman kurir dan logistik yang tidak membayar bea jaminan ganti rugi</p>
                    <p>b. Ganti rugi yang dilindungi perusahaan asuransi dengan nilai jaminan ganti rugi terhadap kiriman kurir dan logistik</p>
                    <p>c. Penetapan Hilang atau rusak sebagian merupakan kewenangan kepala kantorpos yang tertuang dalam surat keterangan pada formulir 
                       pertimbangan kepala kantorpos, termasuk menentukan besar (persentase) kerusakan kiriman kurir dan logistik.</p>
                  </ul><br>      
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">F. TARIF PENGIRIMAN</a></h4><br>
              <ul class="desc">
                <p>1. Tarif ditetapkan berdasarkan kantor tujuan, tingkat berat aktual dan/ atau volumetrik untuk 1 (satu) kali pengiriman bagi kiriman dengan berat dimulai dari 0 gram.</p>
                <p>2. Penentuan besaran tarif dilakukan dengan 2 (dua) metode:</p>
                  <ul>
                    <p>a. Mempergunakan berat kiriman actual (actual weight).</p>
                    <p>b. Mempergunakan perhitungan volumetrik untuk kotak/ gulungan yang dikonversikan menjadi berat dengan rumusan sebagai berikut:</p>
                    <p>((Panjang x Lebar x Tinggi)/6000) x 1 kg</p>
                  </ul><br>  
                <p>3. Berdasarkan perbandingan penentuan berat kiriman sebagaimana dimaksud pada ayat (3), maka penentuan tarif dihitung berdasarkan tarif yang tertinggi.</p>
                <p>4. Diberikan toleransi berat kiriman sebesar 300-gram dengan perhitungan berat 1300-gram, 2300-gram, 3300-gram dan seterusnya sampai dengan 50.300-gram dikenakan tarif 1000-gram, 2000-gram, 3000-gram dan seterusnya sampai dengan 50.000-gram.</p>
                <p>5. Tarif yang dikenakan berlaku untuk 1 (satu) kali pengiriman.</p>
                <p>6. Setiap Kiriman berisi barang merupakan kiriman Paket yang akan dikenakan PPN 1.1% sesuai dengan ketentuan perpajakan yang berlaku.</p>  
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">G. PERTANYAAN ATAU KELUHAN</a></h4><br>
              <ul class="desc">
              <p>Apabila pelanggan memiliki pertanyaan atau keluhan atas pengiriman barang, pelanggan dapat menyalurkannya melalui:</p>
              <p>1) Contact Centre 1500161</p>
              <p>2) Email: halopos@posindonesia.co.id</p>
              <p>3) Chat: Livechat di website posindonesia.co.id</p>
              <p>4) Social Media Resmi PT Pos Indonesia (Persero)</p>
              <p>Twitter (X) : @PosIndonesia</p>
              <p>Instagram : posindonesia.ig</p>
              <p>Facebook : Pos Indonesia</p>
              <p>Website : posindonesia.co.id</p>
              <p>5) Customer Service Kantor Pos terdekat</p>
              </ul>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">H. KETENTUAN LAIN-LAIN</a></h4><br>
              <ul class="desc">
              <p>PT Pos Indonesia (Persero) dapat mengubah, merevisi, memodifikasi Syarat dan Ketentuan sewaktu-waktu sesuai dengan kebutuhan bisnis yang diperlukan oleh PT Pos Indonesia (persero).</p>
              </ul>
            </div>        
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