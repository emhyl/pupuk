  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Administrator</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah <span>| Produk</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span>  --><span class="text-muted small pt-2 ps-1">Total Produk</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Terjual <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $pembeli ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span>  --><span class="text-muted small pt-2 ps-1">Produk Terjual</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Member <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <!-- <i class="bi bi-currency-dollar"></i> -->
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $member ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> --> <span class="text-muted small pt-2 ps-1">Pendaftar</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title"><a href="<?= base_url('admin/home/export') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Rekap</a></h5>

                  <?= $data ?>

                </div>

              </div>
            </div><!-- End Recent Sales -->


            
            
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
