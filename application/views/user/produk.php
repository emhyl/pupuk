

  
  <main id="main">

      
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
