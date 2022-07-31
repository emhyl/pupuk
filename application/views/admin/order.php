<main id="main" class="main">

  <div class="pagetitle">
    <h1>Orderan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Orderan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="alert alert-info" role="alert">
          Terima apabila pembeli telah melakukan pembayaran.!
        </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php foreach($data as $row){ ?>
              <div class="col">
                <div class="card pt-2  <?= ($row['status'] == 'member')?'border border-warning':''; ?>">
                  <img src="<?= base_url() ?>assets/img/produk/<?= $row['gambar'] ?>" style="width: 120px;height: 140px;" class="card-img-top m-auto" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?= $row['nama_produk'] ?> <?php if($row['metode_bayar'] == 'COD'){echo '<span class="badge text-bg-light">COD(Bayar Di Tempat)</span>';}else{?>
                      <!-- Button trigger modal -->
                      <span class="badge text-bg-light" data-bs-toggle="modal" data-bs-target="#modal<?= $row['id'] ?>">Transfer</span>
                    <h5>
                    <?php } ?>
                    <ul class="list-group">
                      <li class="list-group-item">Nama : <?= $row['nama'] ?></li>
                      <li class="list-group-item">Alamat : <?= $row['alamat'] ?></li>
                      <li class="list-group-item">No HP : <?= $row['no_hp'] ?></li>
                      <li class="list-group-item">Unit : <?= $row['unit'] ?></li>
                      <li class="list-group-item">Total : <?= $row['total'] ?></li>
                    </ul>
                    <a href="<?= base_url() ?>admin/order/terima/<?= $row['id'] ?>" type="button" class="btn btn-primary mt-1 w-100">TERIMA</a>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="modal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="modal<?= $row['id'] ?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal<?= $row['id'] ?>Label">pupuk <?= $row['nama_produk'] ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <figure class="figure">
                        <img src="<?= base_url() ?>assets/img/bukti_pembayaran/<?= $row['gambar_bukti'] ?>" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption"><?= $row['tgl'] ?></figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>


              <?php } ?>
            </div>      

      </div><!-- End Left side columns -->

      
    </div>
  </section>
</main><!-- End #main -->

