<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan Internasional</title>
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

   <!-- ======= Early Layanan Kurir Dan Logistik Internasional ======= -->
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
        <h3>Layanan Kurir dan Logistik Internasional</h3>
      </header>
        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100" 
              style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/sameday.png" alt="Pos Sameday"  style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">EMS</a></h4>
              <ul class="description">
                <li>Pengiriman dan penerimaan paket H+3 s.d H+5 Sampai</li>
                <li>Kiriman di 232 Negara Tujuan</li>
                <li>Maksimal berat paket 30 Kg</li>
                <li>Free Pick Up Paket</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/nextday.png" alt="Pos Nextday" style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">Pos Ekspor</a></h4>
              <ul class="description">
              <li>Pengiriman dan penerimaan paket H+4 s.d H+8 Sampai</li>
                <li>Kiriman di 232 Negara Tujuan</li>
                <li>Maksimal berat paket 30 Kg s.d 300 Kg</li>
                <li>Free Pick Up Paket</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/reguler.png" alt="Pos Reguler" style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">Paket Pos Cepat Internasional</a></h4>
              <ul class="description">
                <li>Pengiriman dan penerimaan paket H+6 s.d H+10 Sampai</li>
                <li>Kiriman di 201 Negara Tujuan</li>
                <li>Maksimal berat paket 2Kg s.d 30 Kg</li>
                <li>Free Pick Up Paket</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/jumbo.png" alt="Pos Jumbo" style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">Pos Registered Internasional</a></h4>
              <ul class="description">
                <li>Pengiriman dan penerimaan paket H+6 s.d H+10 Sampai</li>
                <li>Kiriman di 205 Negara Tujuan</li>
                <li>Maksimal berat paket 2Kg</li>
                <li>Free Pick Up Paket</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" 
            style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.19); margin-bottom: 20px;">
              <div class="icon"><img src="<?= base_url() ?>/aset/img/ekonomi.png" alt="Pos Ekonomi" style="width: 50px; height: auto;"></div>
              <h4 class="title"><a href="">e-Packet</a></h4>
              <ul class="description">
                <li>Pengiriman dan penerimaan paket H+6 s.d H+10 Sampai</li>
                <li>Kiriman di 57 Negara Tujuan</li>
                <li>Maksimal berat paket 2Kg</li>
                <li>Free Pick Up Paket</li>
                <li>Bisa di lacak</li>
                <li>Ada Asuransi</li>
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

      <!-- =======Syarat dan Ketentuan Layanan======= -->
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
        <h3>Syarat dan Ketentuan Layanan</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">1. Syarat dan Ketentuan Jasa Pelayanan</a></h4><br>
              <ul class="desc">
                <li>Setiap pengirim berhak mendapatkan bukti pengiriman berupa resi atau struk pengiriman.</li>
                <li>PT Pos Indonesia (Persero) bertanggung jawab terhadap kiriman yang dikirim bila pengirim telah membayar 
                    lunas semua biaya pengiriman dan biaya lainnya (kecuali bila ada kesepakatan tertentu, termasuk pembayaran 
                    kredit bagi pelanggan dengan Perjanjian Kerja Sama).</li>
                <li>Selama belum diserahkan kepada penerima, hak atas kiriman masih berada di tangan  pengirim, oleh 
                    karena itu tuntutan ganti rugi atas kehilangan/kerusakan kiriman hanya dapat diajukan oleh pengirim.</li>
                <li>Pernyataan tertulis pengirim tentang isi kiriman pada Formulir pengiriman, harus sama dengan isi kiriman 
                    sebenarnya. Bila tidak sesuai, maka pengirim bertanggung jawab sepenuhnya atas segala dampak yang timbul 
                    akibat pelanggaran hukum yang dilakukannya.</li>
                <li>PT Pos Indonesia (Persero) berhak membuka dan/atau memeriksa kiriman di hadapan pengirim untuk meyakini kebenaran informasi terkait isi kiriman.</li>
                <li>PT Pos Indonesia (Persero) hanya bertanggung jawab terhadap kerusakan fisik isi kiriman, dan tidak bertanggung jawab serta tidak memberikan ganti rugi atas kiriman yang diakibatkan oleh:</li><br>
                  <ul>
                    <p>1. Kerugian atau kerusakan yang disebabkan unsur kesengajaan oleh pengirim.</p>
                    <p>2. Pelanggaran terhadap aturan Dangerous Goods, Prohibited Items dan Restricted Items.</p>
                    <p>3. Isi kiriman yang tidak sesuai dengan pernyataan tertulis pada Bukti / Formulir Pengiriman.</p>
                    <p>4. Semua risiko teknis yang terjadi selama dalam pengangkutan, yang menyebabkan barang yang dikirim tidak 
                       berfungsi atau berubah fungsinya baik yang menyangkut mesin atau sejenisnya maupun barang-barang 
                       elektronik seperti halnya : handphone, kamera, radio/tape dan lain-lain yang sejenis.</p>
                    <p>5. Kerugian atau kerusakan sebagai akibat oksidasi, kontaminasi polusi dan reaksi nuklir.</p>
                    <p>6. Kerugian atau kerusakan akibat force majeure seperti: bencana alam, kebakaran, perang, huru- hara, aksi melawan pemerintah, pemberontakan, perebutan kekuasaan atau penyitaan oleh penguasa setempat.</p>
                    <p>7. Kerugian tidak langsung atau keuntungan yang tidak jadi diperoleh, yang disebabkan oleh kekeliruan dalam penyelenggaraan pos (Undang Undang Republik Indonesia No. 38 tahun 2009).</p>
                </ul>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">2. Ketentuan Jaminan Ganti Rugi</a></h4><br>
              <ul class="desc">
               <p>RUANG LINGKUP</p>
                  <ul>
                    <p>1. Layanan Jaminan Ganti Rugi berlaku untuk kiriman dengan identifikasi barcode produk Express Mail Service (EMS), Paket Internasional, Layanan Tercatat (R) Internasional dan ePACKET.</p>
                    <p>2. Layanan Jaminan Ganti Rugi merupakan:</p>
                      <ul>
                        <p>i. Layanan tambahan yang ditawarkan kepada pengguna jasa pos untuk kiriman internasional dengan nilai barang sampai dengan US $ 100.</p>
                        <p>ii. Layanan yang DIWAJIBKAN untuk kiriman dengan nilai di atas US $ 100 dan kiriman dokumen berharga.</p>
                      </ul><br>  
                    <p>3. Jaminan Ganti Rugi diberikan terhadap kerugian yang diderita oleh Pengirim, sebagai akibat risiko 
                       keterlambatan untuk kiriman EMS, dan risiko kehilangan dan kerusakan untuk kiriman EMS, Paket Internasional dan Surat Tercatat Internasional.</p>  
                    <p>4. Jaminan ganti rugi tidak dimaksudkan untuk kerugian tidak langsung yang timbul akibat resiko 
                       keterlambatan penyerahan, kehilangan ataupun kerusakan kiriman yang diderita oleh pengirim</p>
                  </ul><br>  

                <p>SYARAT JAMINAN GANTI RUGI</p>
                   <ul>
                    <p>1. Kiriman Internasional yang pengirimannya tidak dilarang sesuai dengan peraturan yang berlaku.</p>
                    <p>2. Memenuhi persyaratan layanan yang telah ditetapkan oleh Pos Indonesia.</p>
                    <p>3. Pengirim telah membayar biaya pengiriman dan bea Jaminan Ganti Rugi.</p>
                    <p>4. Pengirim menuliskan nilai barang pada formulir pengiriman pada saat transaksi di loket.</p>
                    <p>5. Apabila ganti rugi kehilangan telah dibayarkan kepada Pengirim, tetapi ternyata kiriman telah diterima oleh Penerima di negara tujuan, maka Pengirim harus mengembalikan ganti rugi yang telah diterima.</p>
                    <p>6. Apabila ganti rugi kehilangan telah dibayarkan kepada Pengirim, tetapi ternyata ditemukan kembali oleh Pos Indonesia, maka kiriman tersebut menjadi milik Pos Indonesia.</p>
                  </ul><br>

                <p>HAK ATAS TUNTUTAN GANTI RUGI</p>    
                   <ul>
                      <p>1. Tuntutan ganti rugi merupakan hak pengirim. (Note: Tuntutan ganti rugi dapat diajukan oleh penerima, 
                        dalam hal pengirim telah memberikan pernyataan pelepasan hak atas kiriman kepada penerima).</p>
                      <p>2. Tuntutan ganti rugi hanya dapat diajukan terhadap kondisi Terlambat (khusus untuk kiriman EMS), rusak atau hilang</p>
                      <p>3. Tuntutan ganti rugi atas kerusakan dan kehilangan Kiriman Internasional outgoing dapat diajukan paling lambat:</p>
                        <ul>
                          <li>2 (dua) bulan untuk EMS, dihitung sejak tanggal pengiriman.</li>
                          <li>3 (tiga) bulan untuk Paket Cepat Internasional dan Surat Tercatat Internasional, dihitung sejak tanggal pengiriman.</li>
                          <li>4 (empat) bulan untuk Paket Biasa , dihitung sejak tanggal pengiriman.</li>
                        </ul><br>                      
                      <p>4. Tuntutan ganti rugi atas keterlambatan kiriman EMS outgoing dapat diajukan paling lambat 7 (tujuh) hari sejak kiriman diterima oleh penerima di negara tujuan.</p>
                   </ul><br>

                <p>HILANGNYA HAK GANTI RUGI</p>
                  <ul>
                    <p>Pos Indonesia tidak berkewajiban memberikan Ganti Rugi terhadap hal-hal sebagai berikut:</p>
                      <ul>
                        <p>1. Tuntutan ganti rugi diajukan melampaui batas waktu yang ditetapkan oleh Pos Indonesia.</p>
                        <p>2. Pengirim memberikan informasi yang tidak benar tentang isi kiriman Internasional.</p>
                        <p>3. Kiriman internasional berisi barang yang dilarang pengirimannya melalui pos.</p>
                        <p>4. Kiriman internasional disita oleh Pejabat yang berwenang sesuai dengan ketentuan perundang-undangan negara asal/tujuan.</p>
                        <p>5. Keterlambatan/kerusakan/kehilangan kiriman internasional yang disebabkan oleh peristiwa sebab kahar (force majeure)</p>
                        <p>6. Keterlambatan, kerusakan atau kehilangan yang disengaja oleh Pengirim dan atau Penerima, dengan tujuan untuk mencari keuntungan dari layanan Jaminan Ganti Rugi.</p>
                        <p>7. Keterlambatan yang diakibatkan oleh kesulitan penyerahan kiriman kepada penerima, termasuk tapi tidak terbatas kepada:</p>
                          <ul>
                            <li>Penulisan alamat yang tidak lengkap ataupun kesalahan penulisan alamat,</li>
                            <li>Penerima tidak berada di tempat pada saat dilakukan antaran,</li>
                            <li>Penerima terlambat datang setelah  panggilan dikirimkan,</li>
                            <li>Alamat PO BOX.</li> 
                          </ul><br>
                        <p>8. Keterlambatan yang disebabkan oleh lamanya pemeriksaan bea cukai atau petugas yang berwenang lainnya atau karena melewati hari libur.</p>    
                </ul><br>  

                <p>NILAI JAMINAN GANTI RUGI</p>    
                   <ul>
                      <p>1. Nilai jaminan ganti rugi ditetapkan sebagai berikut:</p>
                        <ul>
                          <li>Barang baru menurut harga faktur/kuitansi pembelian dengan maksimal yang dapat dipertanggungkan adalah Rp 20.000.000,00 (dua puluh juta rupiah)</li>
                          <li>Barang bekas, ditetapkan nilainya oleh Pengirim, dengan persetujuan Kantorpos kirim Rp 20.000.000,00 (dua puluh juta rupiah)</li>
                          <li>Barang berisi barang seni/budaya, barang koleksi yang bersifat pribadi lainnya dan Akta Otentik 
                              yang diterbitkan oleh suatu instansi atau institusi atau lembaga tertentu, antara lain berupa ijazah, Surat Izin Mengemudi (SIM), BPKB, STNK, atau dokumen 
                              lainnya ditentukan berdasarkan biaya pengurusan atau pembuatannya maksimum sebesar Rp.6.000.000,00 (Enam Juta Rupiah) tiap Pucuk/Koli;</li>
                        </ul>             
                    </ul><br>

                <p>BEA LAYANAN JAMINAN GANTI RUGI</p>
                   <ul>
                    <p>1. Bea Jaminan Ganti Rugi ditetapkan sebesar 0,5% (nol koma lima per seratus) dari Nilai Jaminan Ganti Rugi.</p>
                    <p>2. Minimal bea Layanan Jaminan Ganti Rugi adalah Rp 5.000,- (lima ribu rupiah).</p>
                  </ul><br>
                
                <p>BEA LAYANAN JAMINAN GANTI RUGI</p>
                   <ul>
                    <p>1. Ganti rugi atas Kerusakan atau Kehilangan Kiriman:</p>
                    <p>Tanpa Jaminan Ganti RugiDengan Jaminan Ganti RugiMaksimal penggantian US $100Maksimal penggantian = Nilai PertanggunganDitambah dengan 1 kali biaya kirimDitambah dengan 1 kali biaya kirim</p>
                      <ul>
                        <li>Biaya kirim yang diperhitungkan sebagai ganti rugi yang dibayarkan kepada pengirim tidak termasuk ppn dan bea layanan jaminan ganti rugi.</li>
                        <li>Ganti Rugi kerusakan kiriman internasional sebagian tidak diberikan pengembalian biaya kirim.</li>
                      </ul><br>

                      <p>2. Ganti rugi keterlambatan kiriman EMS </p>
                      <p>Jumlah Hari KeterlambatanMaksimal Ganti Rugi1 sd 10 hari10% X Biaya KirimLebih dari 10 hari20% X Biaya Kirim</p>
                      <ul>
                        <li>Biaya kirim yang diperhitungkan sebagai ganti rugi keterlambatan yang dibayarkan kepada pengirim tidak termasuk ppn dan bea layanan jaminan ganti rugi.</li>
                        <li>Ganti Rugi keterlambatan diberikan untuk kiriman EMS yang menggunakan jaminan ganti rugi maupun yang tidak menggunakan jaminan ganti rugi.</li>
                        <li>Ganti rugi keterlambatan EMS dapat dibayarkan maksimal sebesar 20% dari biaya kirim dengan ketentuan sebagai berikut:</li>
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
    </section><!-- End Syarat dan Ketentuan Layanan -->
    <!-- Sekat -->
    <div style="height: 20x;"></div> 
    
          <!-- =======Syarat dan Ketentuan Layanan Kiriman======= -->
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
        <h3>Syarat dan Ketentuan Kiriman</h3>
      </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">1. Barang yang dilarang dikirim melalui Pos Indonesia</a></h4><br>
              <ul class="desc">
              <iframe src="https://www.youtube.com/embed/uzCAQ-xWfQI" title="Barang - Barang yang Tidak Boleh Dikirim Melalui Pos - POSTV Episode 3" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br>
              <br><p>Barang - Barang yang tidak boleh dikirim melalui Pos Indonesia berdasarkan Undang-Undang Republik Indonesia Nomor 38 Tahun 2009 tentang Pos : Pasal 32</p>
                      <ul>
                        <p>1. Pengguna layanan pos dilarang mengirimkan barang yang dapat membahayakan barang kiriman lainnya, lingkungan, atau keselamatan orang.</p>
                        <p>2. Barang terlarang yang dapat membahayakan kiriman atau keselamatan orang sebagaimana dimaksud pada ayat (1) meliputi:</p>
                          <ul>
                            <li>Narkotika, psikotropika, dan obat-obat terlarang lainnya;</li>
                            <li>Barang yang mudah meledak;</li>
                            <li>Barang yang mudah terbakar;</li>
                            <li>Barang yang mudah rusak dan dapat mencemari lingkungan;</li>
                            <li>Barang yang melanggar kesusilaan; dan/atau</li>
                            <li>Barang lainnya yang menurut peraturan perundang-undangan dinyatakan terlarang.</li>
                          </ul><br>
                        <p>3. Pengiriman barang terlarang sebagaimana dimaksud pada ayat (2) dilakukan sesuai dengan ketentuan peraturan perundang-undangan.</p>
                         <ul>
                            <li>Barang yang mudah meledak (Amunisi,Petasan,Kembang api,Senjata Api dan Tabung bertekanan Gas /Hair Spray,Deodorant dll ).</li>
                            <li>Barang yang mudah terbakar ( Korek Api ).</li>
                            <li>Bakteri,virus dan lainnya yang mengandung penyakit.</li>
                            <li>Barang yang mengandung zat Radio Aktif.</li>
                            <li>Unsur kimia yang bila tercampur menyebabkan korosi atau karat.</li>
                            <li>Narkotika dan Psikotropika serta zat adictif lainnya (kecuali dikirim oleh instansi yang berwenang dan dilengkapi dengan dokumen pendukung ).</li>
                            <li>Material Pornografi dan pelanggaran moral.</li>
                            <li>Material yang dapat mengganggu  kestabilan dan keamanan nasional.</li>
                            <li>Tumbuh-tumbuhan,binatang hidup ( kecuali  lebah,lintah,ulat sutera,parasite,serangga dan serangga pembasmi serangga perusak yang di kirim oleh badan yang diakui resmi ),buah-buahan dan sayur yang mudah busuk.</li>
                            <li>Permata,Batu mulia,Uang Kertas dan Uang Koin,Emas dan Perak.</li>
                        </ul><br>
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">2. Kiriman yang dilarang dikirim dengan layanan Pos Internasional</a></h4><br>
              <ul class="desc">
              <p>Kiriman yang dilarang untuk diekspor sesuai Peraturan Menteri Perdagangan RI Nomor: 44/M-DAG/PER/7/2012 tentang Barang Dilarang Ekspor adalah kiriman;</p>
              <ul>
                <p>A. Kiriman yang mengotori kiriman lainnya, menimbulkan  bahaya, atau merusak :</p>
                  <ul>
                    <li>kiriman pos lainnya.</li>
                    <li>gedung.</li>
                    <li>Barang yang mengandung zat Radio Aktif.</li>
                    <li>peralatan pos.</li> 
                    <li>kendaraan yang digunakan untuk mengumpulkan, mengolah dan mengangkut kiriman internasional.</li>
                  </ul><br>     
              </ul>     
                <iframe src="https://www.youtube.com/embed/ZL0Dt6BAwEg" title="Dangerous Goods | Barang yang Mudah Meledak Dilarang Dikirim Melalui Pos Seluruh Dunia" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p>Kiriman yang membahayakan kesehatan dan keselamatan jiwa pegawai pos, tenaga kontrak karya atau orang lain yang ditetapkan oleh PT Pos Indonesia (Persero) untuk bekerja di dalam kegiatan mengumpulkan, mengolah dan mengangkut kiriman internasional.</p>
              <ul>
              <p>B. Kiriman yang berisi barang-barang dalam kategori berikut :</p>
                <ul>
                  <li>Binatang.</li>
                  <li>Uang.</li>
                  <li>Barang yang mengandung zat Radio Aktif.</li>
                  <li>Barang yang dapat mengganggu keamanan dan stabilitas negara.</li> 
                  <li>Bahan-bahan yang dikategorikan sebagai morphin, ganja, heroin dan zat lainnya yang dikategorikan NAZA (Narkotika dan Zat Adiktif).</li>
                  <li>Bahan-bahan yang dapat dikategorikan sebagai bahan mudah terbakar, mudah meledak.</li>
                  <li>Barang-barang yang dapat dikategorikan melanggar kesusilaan, berupa buku-buku, majalah, film porno dan barang lainnya.</li>
                  <li>Informasi yang dikategorikan dapat menimbulkan perselisihan akibat perbedaan suku, ras dan agama.</li>
                  <li>Barang yang menurut perundang-undangan yang berlaku tidak dapat diedarkan di Negara Republik Indonesia.</li>
                </ul><br>     
              </ul><br>     
              <p>Kiriman yang berisi barang yang dilarang masuk berdasarkan  ketentuan negara tujuan, yang termuat dalam daftar Prohibited  dan Restricted Item.</p>
              <p><a href="https://drive.google.com/file/d/1sq7hfMDo2z3zPOzprBSNk3NPGPbqumky/view" target='_blank'>Daftar Prohibited dan Restricted Item</a></p>      
              </ul>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">3. Kewajiban pengirim :</a></h4><br>
              <ul class="desc">
                <strong>Mengisi formulir pengiriman yang sesuai dengan layanan yang diinginkan secara lengkap.</strong><br>
                <br><p>Ketentuan Pengisian Formulir Pengiriman</p>
                    <p>a. Pengisian formulir pengiriman harus dilakukan menggunakan Bahasa Inggris.</p>
                    <p>b. Seluruh kolom dalam formulir pengiriman harus diisi meliputi :</p>
                  <ul>  
                  <p>i. Nama dan alamat lengkap pengirim, <strong>WAJIB</strong> disertai nomor telepon yang dapat dihubungi.</p>
                  <p>ii. Nama dan alamat lengkap penerima, <strong>WAJIB</strong> disertai nomor telepon yang dapat dihubungi dan atau alamat email.</p>
                  <p>iii. Keterangan isi kiriman/Customs Declaration, barang, jumlah setiap jenis barang, terbuat dari apa, nilai/harga setiap jenis barang, negara pembuat barang, berat setiap jenis barang.</p>
                  <p>iv. Memberikan tanda centang (v) padakotak kategori isi kiriman apakah termasuk: "Barang Pribadi", "Contoh", "Dokumen", atau "Barang Dagangan".</p>
                  <p>v. Memberikan tanda centang (v) pada alternatif prosedur yang diinginkan apabila kiriman tidak terantar: "Kembali ke Pengirim", "Diteruskan" (khusus untuk kiriman Paket) atau "Dianggap Dilepaskan".</p>
                  <p><strong>Note:</strong> Dalam hal Pengirim memilih alternatif "Kembali ke Pengirim" atau "Diteruskan" (khusus untuk kiriman Paket), agar diberi penjelasan bahwa biaya yang timbul akibat pengembalian atau penerusan kiriman menjadi beban Pengirim.</p>
                  <p>vi. Menandatangani formulir pengiriman pada kolom yang disediakan.</p>
                  <ul>
                      <li>Contoh Pengisian Formulir untuk kiriman Express Mail Services (EMS-5)</li>
                      <li>Contoh Pengisian Formulir untuk kiriman Paket Cepat Internasional (CP-72)</li>
                      <li>Contoh Pengisian Formulir untuk kiriman Paket Biasa Internasional (CP-72)</li>
                      <li>Contoh Pengisian Formulir untuk kiriman Pos Ekspor</li>
                      <li>Formulir untuk kiriman Pos Tercatat Internasional dan ePacket berisi barang (CN-23)</li>
                      <li>Contoh Pengisian Formulir untuk kiriman Bungkusan Kecil dengan Pos Udara (CN-22)</li>
                    <ul><br> 
              </ul>   
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">4. Persyaratan Berat dan Ukuran Kiriman</a></h4><br>
              <ul class="desc">
                <ul>
                  <p><strong>Dokumen (EMS)</strong></p>
                  <ul>
                    <li>Berat Maksimal 2 kg</li>
                    <li>Berbentuk persegi panjang:</li>
                </ul><br>
                <p>Ukuran minimal: 90 x 140 mm (sama dengan ukuran minimal suratpos)</p>
                <p style="margin-top: -20px; width: 160%;" >Ukuran maksimal: Jumlah Panjang, Lebar dan Tinggi sisi-sisinya < 300 cm, dan salah satu sisinya < 150 cm.</p>
                 <ul>
                  <p><strong>Dimensi Kiriman Barang (EMS dan Paketpos Cepat Internasional)</strong></p>
                  <ul>
                    <li>Berat maksimal untuk EMS BARANG adalah 30kg</li>
                    <li>Berat maksimal untuk Paketpos Cepat Internasional adalah 30kg</li>
                    <li>Berbentuk persegi panjang :</li>
                    <p style="margin-top: -20px; width: 160%;" >Ukuran maksimal : Jumlah Panjang, Lebar dan Tinggi sisi-sisinya < 300 cm, dan salah satu sisinya < 150 cm.</p>
                </ul><br>
                <p><strong>Dimensi Kiriman untuk Pengiriman Pos Tercatat (R) dan ePACKET</strong></p>
                <p>Berat maksimal untuk kiriman Pos Tercatat (R) Internasional ePACKET adalah 2 kg.</p>
                  <ul>
                    <li><strong>Suratpos :</strong></li><br>
                    <p>Ukuran minimal: 90 x 140 mm</p>
                    <p style="margin-top: -20px; width: 160%;" >Ukuran maksimal: Jumlah Panjang + Lebar + Tinggi < 900 mm, dan salah satu sisinya < 600 mm.</p>
                  </ul><br>
                  <ul>
                    <li><strong>Kartupos :</strong></li><br>
                    <p>Ukuran minimal: 90 x 140 mm.</p>
                    <p style="margin-top: -20px;" >Ukuran maksimal: 120 x 235 mm.</p>
                  </ul><br>
                  <ul>
                    <li><strong>Berbentuk persegi panjang :</strong></li><br>
                    <p>Ukuran minimal : 90 x 140 mm (sama dengan ukuran minimal suratpos)</p>
                    <p style="margin-top: -20px; width: 160%;" >Ukuran maksimal: Jumlah Panjang + Lebar + Tinggi < 900 mm, dan salah satu sisinya < 600 mm.</p>
                  </ul><br>
                  <ul>
                    <li><strong>Bentuk Silinder :</strong></li><br>
                    <p>Ukuran minimal: Panjang + 2 (diameter) = 170 mm</p>
                    <p style="margin-top: -20px;" >Ukuran maksimal: Panjang + 2 (diameter) = 1.040 mm</p>
                  </ul><br>
                <strong>Perhitungan Volumetrik</strong><br>
                <br><p>"Perhitungan volumetrik diterapkan pada kondisi di mana berat aktual kiriman kecil (ringan) akan tetapi ukuran kiriman memakan tempat (volume besar)."</p>  
                <strong>(Panjang x Lebar x Tinggi) : 5000  x 1 kg = Y kg</strong>
              </ul>
            </div>      
                 
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">5. Cara Penulisan Alamat</a></h4><br>
              <ul class="desc">
                <p>Cara menulis alamat kiriman dalam negeri dapat dilihat di video berikut;</p>
                <iframe src="https://www.youtube.com/embed/AlgrOsJ23Ds" title="Cara Menulis Alamat Pada Kiriman Surat/Paket" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p><a href="https://www.upu.int/UPU/media/upu/publications/manualAddressingAddressingAndPostcodeManualEn.pdf" target='_blank'>Ketentuan penulisan alamat yang benar untuk masing-masing negara tujuan</a></p>   
              </ul>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">6. Packing</a></h4><br>
              <ul class="desc">
                <p>Pembungkus kiriman harus dapat melindungi isi kiriman dari setiap getaran atau benturan selama angkutan, baik yang terjadi antara isi dengan kotak pembungkusnya atau antar kotak pembungkus 
                   kiriman internasional satu dengan yang lainnya. PENGGUNAAN KARUNG GONI SEBAGAI PEMBUNGKUS KIRIMAN TIDAK DIREKOMENDASIKAN.</p>
                <p>Tutorial Mengemas Produk Reguler</p>   
                <iframe src="https://www.youtube.com/embed/UuSCVAfhiT8?si=idJBLsdYqMrSpOyw" title="YouTube video player" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p>Tutorial Mengemas Produk Cair</p>
                <iframe src="https://www.youtube.com/embed/6dD5JkKn90s?si=COVFv_7Dny3BlUEc" title="YouTube video player" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br> 
                <br><p>Tutorial Mengemas Produk Mudah Kotor</p>
                <iframe src="https://www.youtube.com/embed/EWadr950Y8Y?si=ppk4NfM2kW2VwIXD" title="YouTube video player" frameborder="0" style="border:0; width: 50%; height: 230px;" allowfullscreen></iframe><br>
              <br><p><strong>Metode Pengemasan :</strong></p> 
               <ul>
                <p><strong>a. Metode Pengemasan Dus Tunggal (Single-Box)</strong></p>
                 <ul>
                  <li>Letakkan produk tidak mudah pecah seperti barang lunak di dalam dus bagian luar yang kokoh.</li>
                  <li>Gunakan sisipan (filler) seperti remasan koran, bola gabus (loosefill peanut), atau bahan peredam seluler bergelembung seperti Bubble Wrap® untuk mengisi ruang yang kosong dan mencegah pergeseran barang di dalam dus selama pengiriman.</li>
                  <li>Tempatkan barang yang dapat terpengaruh oleh debu, air atau kondisi bawah di dalam kantung plastik.</li>
                  <li>Satukan bagian kecil atau produk butiran ke dalam kontainer bersegel, seperti karung goni atau kantung plastik anti rembes, kemudian kemas di dalam dus bagian luar yang kokoh.</li>
                  <li>Gunakan metode pemasangan perekat berbentuk huruf H untuk menyegel paket Anda.</li>
                </ul><br>
                <p><strong>Note :</strong></p>
                 <p>Dus Tunggal dengan Kiriman Terbungkus</p>
                 <p>Dus Tunggal yang Diisi Bola Gabus (Loosefill Peanut)</p> 
                 <p><strong>b. Metode Pengemasan Box-inBox</strong></p>
                  <ul>
                   <li>Bungkus produk secara masing-masing mengguna-kan peredam seluler bergelembung atau bahan busa dengan ketebalan sekurang-kurangnya 2″ untuk menahannya di dalam dus berombak.</li>
                   <li>Batasi pergerakan produk di dalam dus mengguna-kan sisipan seperti remasan koran, loosefill peanut, atau bahan peredam lainnya.</li>
                   <li>Tutup dan beri pita perekat dus bagian dalam meng-gunakan metode pemasangan perekat berbentuk huruf H. Ini akan membantu mencegah terbuka tanpa sengaja.</li>
                   <li>Gunakan dus kedua yang sekurang-kurangnya 6″ lebih panjang, lebih lebar, dan lebih dalam daripada dos bagian dalam.</li>
                   <li>Pilih pembungkus atau metode menyisipan untuk meredam dus bagian dalam di dalam dus bagian luar yang kokoh dan lebih besar.</li>
                   <li>Kirimkan produk mudah pecah secara masing-masing, bungkus di dalam bahan peredam seluler bergelembung dengan ketebalan minimum 3″.</li>
                   <li>Bungkus dus bagian dalam menggunakan bahan peredam seluler bergelembung dengan ketebalan 3″ atau menggunakan loosefill peanut dengan ketebalan sekurang-kurangnya 3″ atau bahan peredam lainnya untuk mengisi ruang antara dus bagian dalam dengan dus bagian luar di atas, bawah dan seluruh sisinya.</li>
                   <li>Isi setiap ruang kosong dengan bahan peredam lebih banyak.</li>
                   <li>Gunakan metode pemasangan perekat berbentuk huruf H untuk menyegel paket Anda.</li>
                 </ul><br>
                 <p><strong>Note :</strong></p>
                 <p>Box-in-Box dengan Peredam Seluler Bergelembung</p>
                 <p>Box-in-Box dengan Loosefill Peanuts</p> 
                 <p><strong>c. Pedoman Umum untuk Barang Khas/Unik</strong></p>
                  <ul>
                    <li><strong>Karya Seni.</strong> Gunakan pita penutup dengan pola bersilangan (criss-cross) pada permukaan kaca untuk mencegah agar tidak retak</li>
                    <li><strong>Foto dan Papan Poster.</strong> Tempelkan kiriman yang rata ke bahan kaku seperti plywood, plastik, atau permukaan bantalan papan fiber; sebagai alternatif, 
                        tempatkan bahan cetakan di antara lembaran bantalan berombak dan tempelkan kedua bantalan tersebut pada seluruh sisi.</li>
                    <li><strong>Instrumen Musik Berdawai/Senar.</strong> Kendurkan senar untuk menghilangkan tekanan pada leher instrumen.</li>
                    <li><strong>Bahan Cetakan.</strong> Ikat bahan cetakan menjadi satu untuk mencegah pergeseran. Beri peredam secukupnya sebelum dimasukkan ke dalam dus berombak bagian luar yang berlapis ganda.</li>
                    <li><strong>Barang Berbentuk Gulungan.</strong> Bungkus dengan rapat barang berbentuk gulungan menggunakan beberapa lapis film plastik yang kuat atau kertas kraft dan bungkus dengan pita pembungkus plastik. Kemudian bubuhkan label alamat selengkapnya di sekeliling objek atau gunakan wadah label (pouch). 
                        Pos Indonesia tidak bertanggung jawab untuk kerusakan akibat perlindungan yang tidak memadai.</li>
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
    </section><!-- End Syarat dan Ketentuan Layanan Kiriman -->


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