<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <section>
    <div class="kost-container" data-aos="fade-up" id="card-kost">
    <div class="shadow-sm rounded p-5 custom-bg">
        <h4 class="mb-4 text-center" data-aos="fade-up">Daftar Kost Populer</h4>
        <div class="d-flex gap-3 justify-content-center">

            <div class="kost-card">
                <img src="http://localhost/kost2/assets/img/typeaa.png" alt="Omah Kost Tipe A">
                <div class="kost-body">
                    <small>Putra/Putri</small>
                    <h5>Omah Kost Tipe A</h5>
                    <div class="lokasi">Kediri</div>
                    <div class="harga-asli">Rp400.000</div>
                    <div class="harga-diskon">Rp350.000 /bulan</div>
                    <span class="label-fasilitas">K. Mandi Dalam</span>
                    <span class="label-fasilitas">WiFi</span>
                    <span class="label-fasilitas">Kloset Duduk</span>
                    <span class="label-fasilitas">Kasur</span>
                    <a href="<?= site_url('katalogkost/katalog1') ?>" class="btn btn-success btn-detail">Lihat Fasilitas</a>
                </div>
            </div>

            <div class="kost-card">
                
                <img src="http://localhost/kost2/assets/img/typeb.png" alt="Omah Kost Tipe B">
                <div class="kost-body">
                    <small>Putra/Putri</small>
                    <h5>Omah Kost Tipe B</h5>
                    <div class="lokasi">Kediri</div>
                    <div class="harga-asli">Rp400.000</div>
                    <div class="harga-diskon">Rp350.000 /bulan</div>
                    <span class="label-fasilitas">K. Mandi Dalam</span>
                    <span class="label-fasilitas">WiFi</span>
                    <span class="label-fasilitas">Kloset Duduk</span>
                    <span class="label-fasilitas">Kasur</span>
                    <a href="<?= site_url('katalogkost/katalog2') ?>"class="btn btn-success btn-detail">Lihat Fasilitas</a>
                </div>
            </div>

            <div class="kost-card">
               
                <img src="http://localhost/kost2/assets/img/typece.png" alt="Omah Kost Tipe C">
                <div class="kost-body">
                    <small>Putra</small>
                    <h5>Omah Kost Tipe C</h5>
                    <div class="lokasi">Kediri</div>
                    <div class="harga-asli">Rp550.000</div>
                    <div class="harga-diskon">Rp350.000 /bulan</div>
                    <span class="label-fasilitas">K. Mandi Luar</span>
                    <span class="label-fasilitas">WiFi</span>
                    <span class="label-fasilitas">Kloset Duduk</span>
                    <span class="label-fasilitas">Kasur</span>
                    <a href="<?= site_url('katalogkost/katalog3') ?>" class="btn btn-success btn-detail">Lihat Fasilitas</a>
                </div>
            </div>
        </div>
    </div>
</div>
  </section>
</body>
</html>