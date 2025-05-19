<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
    <!-- Font Awesome CDN (versi 6) -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="<?php echo base_url('assets/img/logoo.png'); ?>" alt="Logo Omah Kost">
    </div>

    <div class="login-header">
      <h1>Login Akun</h1>
      <p>Silakan masukkan email dan password untuk masuk</p>
    </div>

    <!-- Flashdata jika ada error -->
    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger text-center"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <form action="<?= base_url('auth/login') ?>" method="POST">
      <div class="form-group">
        <label for="login_email">Email</label>
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" id="login_email" name="login_email" class="form-control" placeholder="Masukkan email" required>
      </div>

      <div class="form-group">
        <label for="login_password">Password</label>
        <i class="fas fa-lock input-icon"></i>
        <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn-login">
        <i class="fas fa-sign-in-alt"></i> Login</button>
    </form>

    <div class="footer-text mt-3">
      Belum punya akun? <a href="<?= base_url('auth/signup_form') ?>">Daftar di sini</a><br>
      &copy; <?= date('Y') ?> Omah Kost. Hak cipta dilindungi.
    </div>
  </div>
</body>

</html>
