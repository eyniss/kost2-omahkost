<!-- White Navbar with Shadow  -->

<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-shadow ">
  <div class="container-fluid">
    <header class="sticky-header">
      <div class="logo-title">
        <img src="<?= base_url('assets/img/logoo.png') ?>" alt="Logo" class="logo">
      </div>
    </header>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home'); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('katalog'); ?>">Katalog</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('about'); ?>">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Faqoke'); ?>">FAQs</a></li>
      </ul>


      <div class="d-flex">
      <?php if ($this->session->userdata('user_name')): ?> 
        <a href="#" class="btn btn-outline-dark me-2"> Hai, <?= $this->session->userdata('user_name'); ?> </a>
         <a href="<?= base_url('auth/logout'); ?>" class="btn btn-outline-danger">Logout</a>
          <?php else: ?> 
        <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-success me-2">Login</a>
          <a href="<?= base_url('Auth/signup_form') ?>" class="btn btn-success">Sign Up</a>

           <?php endif; ?>
      </div>
    </div>
  </div>
</nav>