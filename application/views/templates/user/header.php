<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pupuk Tani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/user/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/user/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.0.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/user/img/logo.png" alt=""> -->
        <h1>PUPUKTANI<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url() ?>home">Home</a></li>
          <li><a href="<?= base_url() ?>about">About</a></li>
          <li><a href="<?= base_url() ?>produk">Produk</a></li>
          <!-- <li><a href="#testimonials">Testmoni</a></li> -->
        </ul>
      </nav><!-- .navbar -->

      <form action="<?= base_url() ?>home" method="post">
        <div class="input-group input-group-sm mb-0">
          <button type="submit" name="btn_cari" class="input-group-text" id="inputGroup-sizing-sm">Cari..</span></button>
          <input type="text" name="keyword" class="form-control" aria-label="Sizing example input" placeholder="Nama Pupuk" aria-describedby="inputGroup-sizing-sm">
        </div>
      </form>
      <span class="fw-semibold"><?= ($this->session->userdata('member')?$this->session->userdata('member')['nama']:'')  ?></span>  
      <a class="btn-book-a-table" href="<?= base_url() ?>login"><?= ($this->session->userdata('member')!= null)?'Log Out':'Login'; ?></a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Selamat Datang<br>Pupuk TANI</h2>
          <p data-aos="fade-up" data-aos-delay="100">
            Menyediakan berbagai macam pupuk
          </p>
       <!--    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?= base_url() ?>assets/user/img/img-Big.jpg
          " class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
