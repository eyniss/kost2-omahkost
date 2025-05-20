<?php

$kost = [
    'nama' => 'Omah Kost Tipe A',
    'lokasi' => 'Jl. Raung Kemuning Gg. III, Bandar Kidul, Kec. Mojoroto, Kota Kediri, Jawa Timur',
    'harga' => 'Rp 350.000',
    'transaksi' => 22,
    'spesifikasi' => '3 x 2.5 meter',
    'listrik' => true,
    'fasilitas_kamar' => ['Kasur Single Bed', 'Bantal', 'Meja', 'Kursi', 'Lemari Baju', 'Ventilasi', 'Kamar Mandi Dalam'],
    'fasilitas_umum' => ['WiFi', 'Penjaga Kos', 'Taman', 'Parkir Motor', 'Ruang Tamu', 'Dapur', 'Dispenser', 'Jemuran'],
    'peraturan' => ['Akses 24 Jam', 'Dilarang merokok di kamar', 'Kamar hanya bagi penyewa', 'Gunakan listrik sesuai kebutuhan', 'Dilarang membawa hewan peliharaan', 'Dilarang mengundang tamu ke dalam kamar'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $kost['nama'] ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/katalog.css'); ?>">
</head>

<body>

<div class="container">

    <div class="gambar">
        <img src="http://localhost/kost2/assets/img/katalog1.jpeg" alt="Omah Kost Tipe A" class="gambar-utama">
        <div class="gambar-kecil">
            <img src="http://localhost/kost2/assets/img/banner4.jpeg" alt="Tampak Depan">
            <img src="http://localhost/kost2/assets/img/cardd1.jpeg" alt="Jalan Depan">
        </div>
    </div>

    <div class="info-kost">
        <h1><?= $kost['nama'] ?></h1>
        <p class="lokasi"><i class="fas fa-map-marker-alt"></i> <?= $kost['lokasi'] ?></p>
        <p class="harga"><?= $kost['harga'] ?> 
          <?php if ($this->session->userdata('user_id')): ?>
                    <a href="<?= site_url('Pendaftaran/proses') ?>" class="btn-kos">Mulai Kos Sekarang</a>
                <?php else: ?>
                    <button class="btn-kos" onclick="alert('Silakan login terlebih dahulu untuk memulai proses kos.')">Mulai Kos Sekarang</button>
                <?php endif; ?>

        </div>

    <div class="spesifikasi">
        <h2>Spesifikasi Kamar</h2>
        <ul>
            <li>Ukuran: <?= $kost['spesifikasi'] ?></li>
            <li><?= $kost['listrik'] ? 'Termasuk Listrik' : 'Tidak Termasuk Listrik' ?></li>
        </ul>

        <h2>Fasilitas Kamar</h2>
        <div class="fasilitas-list">
            <?php foreach($kost['fasilitas_kamar'] as $fasilitas): ?>
                <span class="badge"><?= $fasilitas ?></span>
            <?php endforeach; ?>
        </div>

        <h2>Fasilitas Umum</h2>
        <div class="fasilitas-list">
            <?php foreach($kost['fasilitas_umum'] as $fasilitas): ?>
                <span class="badge"><?= $fasilitas ?></span>
            <?php endforeach; ?>
        </div>

        <h2>Peraturan Kos</h2>
        <ul>
            <?php foreach($kost['peraturan'] as $peraturan): ?>
                <li><?= $peraturan ?></li>
            <?php endforeach; ?>
        </ul>

    </div>

</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
