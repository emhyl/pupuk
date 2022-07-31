<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Member</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Member</li>
        <li class="breadcrumb-item active">Tambah</li>
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
            <form action="<?= base_url() ?>member/tambah" method="post">
              <?php foreach($form as $input){ ?>
                <?= $input ?>
              <?php } ?>
              <button type="submit" name="btn_add" class="btn btn-primary">Tambah</button>
            </form>
            

          </div><!-- End Customers Card -->



          <!-- Recent Sales -->
          
        </div>
      </div><!-- End Left side columns -->

      
    </div>
  </section>

</main><!-- End #main -->
