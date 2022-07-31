

  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>About Us</h2> -->
          <p>Tentang <span>PUPUK TANI</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(<?= base_url() ?>assets/user/img/img-about.png) ;" data-aos="fade-up" data-aos-delay="150">

          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Pupuk kimia bisa dibedakan menjadi dua, yakni pupuk kimia tunggal dan pupuk kimia majemuk. Pupuk kimia tunggal hanya memiliki satu macam hara, sedangkan pupuk kimia majemuk memiliki kandungan hara yang lengkap. Pupuk kimia tunggal yang sering digunakan adalah urea dan ZA untuk hara N, pupuk TSP, DSP, dan ZA untuk hara P, Kcl atau MOP untuk hara K. Sementara pupuk kimia majemuk dibuat dengan mencampurkan produk pupuk-pupuk kimia tunggal. 
              </p>
            <!--   <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p> -->
                Kelebihan atau dampak positif dari penggunaan pupuk kimia ini adalah dapat menyuburkan tanah yang tidak subur dengan tepat. Ini disebabkan oleh unsur hara pada pupuk kimia yang penting bagi tanaman, seperti nitrogen, fosfor, kalium, belerang, dan magnesium. Usur hara yang terkandung dalam pupuk kimia juga lebih cepat terurai dan mudah diserap oleh tumbuhan. 
              </p>
<!-- 
              <div class="position-relative mt-4">
                <img src="assets/user/img/img-about.png" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>PILIH <span>PUPUK TANI</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4><?= $type_cari ?></h4>
            </a>
          </li><!-- End tab nav item -->

          

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

<!--             <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Starters</h3>
            </div>
 -->
            <div class="row gy-5 mt-4">
              <?php foreach($data as $pupuk){ ?>
              <div class="col-lg-4 menu-item">
                <a href="<?= base_url() ?>assets/img/produk/" class="glightbox"><img src="<?= base_url() ?>assets/img/produk/<?= $pupuk['gambar'] ?>" width="300" class="menu-img img-fluid" alt="" style="height: 200px;"></a>
                <h4><?= $pupuk['nm_produk'] ?></h4>
                <p class="ingredients">
                  <span class="badge text-bg-info text-light">Tersedia <?= $pupuk['stok'] ?></span>
                </p>
                <p class="price">
                  <span class="border-bottom pb-2 px-2 shadow-sm">
                    <span class="<?= ($this->session->userdata('member')!= null)?'text-decoration-line-through':''; ?>">Rp.<?= $pupuk['harga']  ?></span>
                    <?php if($this->session->userdata('member') != null){ ?>
                    <span type="button" class="btn btn-primary btn-sm position-relative">
                      Rp.<?= $pupuk['harga'] - ($pupuk['harga'] * $diskon/100)  ?>
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?= $diskon ?>%
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </span>
                    <?php } ?>
                    <a href="<?= base_url() ?>order/<?= $pupuk['id'] ?>" class="btn border btn-light btn-sm px-3 fs-6">Beli</a>
                  </span>
                </p>
              </div><!-- Menu Item -->
              <?php } ?>
            </div>
          </div><!-- End Starter Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Contact Section ======= -->
    
  </main><!-- End #main -->
