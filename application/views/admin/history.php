<main id="main" class="main">

  <div class="pagetitle">
    <h1>Administrator</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Riwayat</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Terjual <span>| Produk</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= count($data) ?></h6>
                    <span class="text-success small pt-1 fw-bold"></span>Produk<span class="text-muted small pt-2 ps-1"></span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

         

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Riwayat Penjualan</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No HP</th>
                      <th scope="col">Status</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $key => $row){ ?>
                    <tr>
                      <th scope="row"><a href="#"><?= $key+1 ?></a></th>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td><?= $row['no_hp'] ?></td>
                      <td><?= $row['status'] ?></td>
                      <td><?= $row['nama_produk'] ?></td>
                      <td><?= $row['tgl'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->

        </div>
      </div><!-- End Left side columns -->

      
    </div>
  </section>

</main><!-- End #main -->
