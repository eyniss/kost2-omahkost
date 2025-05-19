<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Manajemen Kost</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Dashboard Admin - Manajemen Kost</h1>
        </div>

        <?php if ($this->session->flashdata('success_message')): ?>
            <div class="notification alert-success">
                <?= $this->session->flashdata('success_message'); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error_message')): ?>
            <div class="notification alert-error">
                <?= $this->session->flashdata('error_message'); ?>
            </div>
        <?php endif; ?>

        <!-- Modal Form Edit -->
        <?php if (isset($pendaftar_edit)): ?>
            <div class="modal-overlay">
                <div class="modal">
                    <div class="modal-header">
                        <h3>Edit Data Pendaftar</h3>
                        <a href="<?= site_url('admin') ?>" class="close-modal">&times;</a>
                    </div>
                    <div class="modal-body">
                        <?= form_open('admin/update') ?>
                        <input type="hidden" name="id" value="<?= $pendaftar_edit['id'] ?>">

                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($pendaftar_edit['nama']) ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" id="nik" name="nik" value="<?= htmlspecialchars($pendaftar_edit['nik']) ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-laki" <?= $pendaftar_edit['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="Perempuan" <?= $pendaftar_edit['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">Nomor HP:</label>
                            <input type="text" id="no_hp" name="no_hp" value="<?= htmlspecialchars($pendaftar_edit['no_hp']) ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Asal:</label>
                            <textarea id="alamat" name="alamat" rows="2" required><?= htmlspecialchars($pendaftar_edit['alamat']) ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tipe_kost">Tipe Kost:</label>
                            <select id="tipe_kost" name="tipe_kost" required>
                                <option value="Tipe A" <?= $pendaftar_edit['tipe_kost'] == 'Tipe A' ? 'selected' : '' ?>>Tipe A</option>
                                <option value="Tipe B" <?= $pendaftar_edit['tipe_kost'] == 'Tipe B' ? 'selected' : '' ?>>Tipe B</option>
                                <option value="Tipe C" <?= $pendaftar_edit['tipe_kost'] == 'Tipe C' ? 'selected' : '' ?>>Tipe C</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_penempatan">Tanggal Penempatan:</label>
                            <input type="date" id="tanggal_penempatan" name="tanggal_penempatan" value="<?= $pendaftar_edit['tanggal_penempatan'] ?>" required>
                        </div>

                        <div class="form-actions">
                            <button type="submit" name="update_pendaftar" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="<?= site_url('admin') ?>" class="btn btn-cancel">Batal</a>
                        </div>
                        <?= form_close() ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h2>Kelola Ketersediaan Kamar</h2>
            </div>
            <div class="card-body">
                <div class="kost-container">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="kost-card">
                            <h3 class="kost-title">Kost <?= chr(64 + $i) ?> (ID: <?= $i ?>)</h3>
                            <?= form_open('admin/update_kamar') ?>
                            <input type="hidden" name="kost_id" value="<?= $i ?>">
                            <div class="form-group">
                                <label for="kamar_tersedia_<?= $i ?>">Kamar Tersedia:</label>
                                <input type="number" id="kamar_tersedia_<?= $i ?>" name="kamar_tersedia"
                                    value="<?= isset($kamars[$i]) ? $kamars[$i]['kamar_tersedia'] : 0 ?>" min="0" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <?= form_close() ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Data Pendaftar Kost</h2>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor HP</th>
                            <th>Alamat Asal</th>
                            <th>Tipe Kost</th>
                            <th>Tanggal Penempatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($pendaftars)) : ?>
                            <?php foreach ($pendaftars as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['no_hp'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['tipe_kost'] ?></td>
                                    <td><?= $row['tanggal_penempatan'] ?></td>
                                    <td class="aksi">
                                        <a href="<?= site_url('admin?action=edit&id=' . $row['id']) ?>" class="btn btn-edit">Edit</a>
                                        <a href="<?= site_url('admin/hapus/' . $row['id']) ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>









        <div class="logout-container">
            <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>

</html>