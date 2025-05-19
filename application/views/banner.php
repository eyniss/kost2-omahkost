<!-- Tambahkan di bagian <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .carousel-item img {
    height: 500px;
    object-fit: cover;
  }
</style>
<section>
  <div class="outlet-content">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/banner0.png') ?>" class="d-block w-100" alt="banner">
          <div class="carousel-caption d-none d-md-block">
            <h5>Selamat Datang di Omah Kost</h5>
            <p>Hunian Nyaman & Strategis untuk Hidup Lebih Praktis!<br>Kost lengkap, aman, dan tenang di lokasi paling ideal.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/bannerr2.png') ?>" class="d-block w-100" alt="banner">
          <div class="carousel-caption d-none d-md-block">
            <h5>"Cari Kost?"</h5>
            <p>Temukan Kenyamanan Disini Seperti di Rumah Sendiri!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/bannerr3.png') ?>" class="d-block w-100" alt="banner">
          <div class="carousel-caption d-none d-md-block">
            <h5>"Ngekost Rasa Rumah Sendiri!"</h5>
            <p>Nyaman, bersih, dan fasilitas lengkap. Yuk, pindah ke OmahKost!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
