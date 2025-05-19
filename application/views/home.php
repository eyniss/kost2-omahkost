<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<!-- Sebelum </body> -->
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<!-- <script>
  AOS.init(); // Inisialisasi AOS
</script> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<main>
<head>


<section class="slide-section" id="keuntungan">
  <h1>Keuntungan Tinggal Di Omah Kost</h1>
  <div class="card-grid">
    <!-- Card 1 -->
    <div class="card">
      <img src="<?= base_url('assets/img/cardd1.jpeg') ?>" alt="foto teras">
      <div class="card-body">
        <h5 class="card-title">Lokasi Strategis</h5>
        <p class="card-text">Mudah ditemukan dan dekat dengan berbagai fasilitas umum seperti kampus, pusat perbelanjaan, dan transportasi umum.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="<?= base_url('assets/img/card2.png') ?>" alt="Area Luas">
      <div class="card-body">
        <h5 class="card-title">Area Luas</h5>
        <p class="card-text">Halaman luas memberi suasana asri dan lapang, cocok untuk bersantai atau aktivitas outdoor ringan.</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="<?= base_url('assets/img/carrd3.jpeg') ?>" alt="Tersedia Parkir">
      <div class="card-body">
        <h5 class="card-title">Tersedia Parkir</h5>
        <p class="card-text">Area parkir aman dan memadai untuk kendaraan penghuni maupun tamu.</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="<?= base_url('assets/img/carrdd4.png') ?>" alt="Biaya Murah">
      <div class="card-body">
        <h5 class="card-title">Biaya Murah</h5>
        <p class="card-text">Sewa terjangkau, ideal untuk hunian nyaman di lokasi terbaik.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <section class= "cardnew" >
        <div class="container-card">
            <h1>Pilihan Properti untuk Sesuaikan Kenyamananmu</h1> 
            <div class="property-options"> 
                <div class="property-card">
                    <div class="card-header tipeA">
                        <h2>Tipe A</h2>
                    </div>
                    <div class="card-body">
                        <div class="price">IDR 350 Ribu <span>/ bulan</span></div>
                        <p class="description">Menggunakan Kasur Double Bed, Bantal, Meja, Kursi, Lemari Baju, Ventilasi dan Kamar Mandi Dalam</p> 
                    </div>
                </div>
 
                <div class="property-card">
                    <div class="card-header tipeB">
                        <h2>Tipe B</h2>
                    </div>
                    <div class="card-body">
                        <div class="price">IDR 350 Ribu <span>/ bulan</span></div>
                        <p class="description">Menggunakan Kasur Single Bed, Bantal, Meja, Kursi, Lemari Baju, Ventilasi dan Kamar Mandi Dalam</p> 
                    </div>
                </div>
 
                <div class="property-card">
                    <div class="card-header tipeC">
                        <h2>Tipe C</h2>
                    </div>
                    <div class="card-body">
                        <div class="price">IDR 350 Ribu <span>/ bulan</span></div>
                        <p class="description">Menggunakan Kasur Single Bed, Bantal, Meja, Kursi, Lemari Baju, Ventilasi dan Kamar Mandi Luar</p> 
                    </div>
                </div> 
            </div>
        </div>
    </section>
</section>

<section class="banner2">
  <div class="custom-container">
    <div class="custom-row">
      
      <!-- Gambar -->
      <div class="banner-img-wrapper">
        <img src="<?= base_url('assets/img/baner5.png') ?>" class="banner-img" alt="Banner Image">
      </div>

      <!-- Konten Teks -->
      <div class="banner-text-wrapper">
        <h2><span class="highlight">Masih Bingung Cari Tempat Kost?</span><br>
          Yuk cari Hunian<br>untukmu sekarang di Omah Kost!
        </h2>
        <a href="#keuntungan" class="btn-custom">Cari Sekarang</a>
      </div>

    </div>
  </div>
</section>




<?php if (isset($login_error)): ?>
  <div class="alert alert-danger">
    <?= $login_error ?>
  </div>
<?php endif; ?>

<!-- Button untuk membuka Modal -->



<?php $this->load->view('partials/footer'); ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- <script src="<?= base_url('assets/js/login.js'); ?>"></script>

<script src="<?= base_url('assets/js/signup.js'); ?>"></script>  -->


</main>


</body>
</html>