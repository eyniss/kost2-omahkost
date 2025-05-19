<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Omah Kost</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="<?php echo base_url('assets/img/logoo.png'); ?>" alt="Logo Omah Kost">
    </div>

    <div class="login-header">
      <h1>Daftar Akun</h1>
      <p>Silakan lengkapi data untuk membuat akun baru</p>
    </div>

    <form action="<?= base_url('auth/registrasi_user') ?>" method="POST">
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <i class="fas fa-user input-icon"></i>
        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" id="email" name="emailaddress" class="form-control" placeholder="Masukkan email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <i class="fas fa-lock input-icon"></i>
        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
      </div>

      <div class="form-group">
        <label for="confirm_password">Konfirmasi Password</label>
        <i class="fas fa-lock input-icon"></i>
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Ulangi password" required>
      </div>

      <button type="submit" class="btn-login">
        <i class="fas fa-user-plus"></i> Daftar</button>
    </form>

    <div class="footer-text">
      &copy; <?= date('Y') ?> Omah Kost. Hak cipta dilindungi.
    </div>
  </div>
</body>
</html>
