<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Kost</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form_pendaftaran.css'); ?>">
</head>
<body>

<div class="container">
    <h1>Form Pendaftaran Kost</h1>
    
    <?php echo validation_errors(); ?>
    
    <?php echo form_open('pendaftaran/proses'); ?>
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" required>

        <label for="alamat">Alamat Asal:</label>
        <textarea id="alamat" name="alamat" rows="4" required><?php echo set_value('alamat'); ?></textarea>

        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" value="<?php echo set_value('nik'); ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
            <option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
        </select>

        <label for="no_hp">Nomor HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="<?php echo set_value('no_hp'); ?>" required>

        <label for="tipe_kost">Tipe Kos:</label>
        <select id="tipe_kost" name="tipe_kost" required>
            <option value="">Pilih Tipe Kos</option>
            <option value="Tipe A" <?php echo set_select('tipe_kost', 'Tipe A'); ?>>Tipe A</option>
            <option value="Tipe B" <?php echo set_select('tipe_kost', 'Tipe B'); ?>>Tipe B</option>
            <option value="Tipe C" <?php echo set_select('tipe_kost', 'Tipe C'); ?>>Tipe C</option>
        </select>

        <label for="tanggal_penempatan">Tanggal Penempatan:</label>
        <input type="date" id="tanggal_penempatan" name="tanggal_penempatan" value="<?php echo set_value('tanggal_penempatan'); ?>" required>

        <button type="submit" class="btn-daftar">Daftar Sekarang</button>
    <?php echo form_close(); ?>
</div>

</body>
</html>