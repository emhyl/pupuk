<main id="main" class="main">

  <div class="pagetitle">
    <h1>Table <?= $tbl_name ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Tabel</li>
        <li class="breadcrumb-item active"><?= $tbl_name ?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">
           
            <button type="button" class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah</button>
            <?= $tbl ?>
   
          </div><!-- End Customers Card -->



          <!-- Recent Sales -->
          
        </div>
      </div><!-- End Left side columns -->

      
    </div>
  </section>

</main><!-- End #main -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $tbl_name ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart(base_url().'admin/data/tambah/'.$tbl_name) ?>
          <?= $input ?>
      </div>
      <div class="modal-footer">
        <button type="submit" name="btn_add" class="btn btn-secondary" data-bs-dismiss="modal">Tambahkan</button>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

