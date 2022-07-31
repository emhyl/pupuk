

  
  <main id="main">
    
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>ORDER</h2>
          <p>ALAMAT <span>DAN </span> DATA</p>
        </div>

        <div class="row g-0 justify-content-center">

          <div class="card mb-3" style="max-width: 740px;">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src="<?= base_url() ?>assets/img/produk/<?= $pupuk->gambar ?>" class="img-fluid rounded-start" alt="..." style="height: 300px;width: 220px;">
                <span class="badge text-bg-danger p-2 mt-1 <?= ($this->session->userdata('member')!= null)?'text-decoration-line-through':''; ?>">Rp.<?= $pupuk->harga ?></span>
                <?php if($this->session->userdata('member')){ ?>
                <br>
                <button type="button" class="btn btn-sm mt-1 btn-primary position-relative w-75">
                  <?= $pupuk->harga - ($pupuk->harga * $diskon/100) ?>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?= $diskon ?>%
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>
                <?php } ?>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $pupuk->nm_produk ?></h5>
                  <p class="card-text bg-info p-3 text-dark rounded fst-italic">
                    <?php if($this->session->userdata('member')){ ?>
                      Selamat Anda terdaftar sebagai member. Nikmati keuntungan diskon pembelian produk.
                    <?php }else{ ?>
                      Anda belum terdaftar sebagai member. Silahkan melakukan registrasi pada toko dan dapatkan keuntungan diskon
                    <?php } ?>
                  </p>
                  <form action="<?= base_url() ?>order/beli/<?= $pupuk->id ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="inputStok" class="form-label">Jumlah Unit</label>
                      <input type="number" name="stok" value="1" autocomplete="off" min="1" max="<?= $pupuk->stok ?>" class="form-control" id="inputStok" >
                    </div>
                    <div class="mb-1">
                      <label for="inputNama" class="form-label">Nama</label>
                      <input type="text" name="nama" value="<?= ($this->session->userdata('member')!= null)?$this->session->userdata('member')['nama']:''; ?>" class="form-control" id="inputNama" >
                    </div>
                    <div class="mb-1">
                      <label for="inputNoHp" class="form-label">Nomor HP</label>
                      <input type="text" name="no_hp" value="<?= ($this->session->userdata('member')!= null)?$this->session->userdata('member')['no_telpon']:''; ?>" class="form-control" id="inputNoHp" >
                    </div>
                    <div class="mb-1">
                      <label for="inputNoHp" class="form-label">Metode Pembayaran</label><br>
                      <select class="form-select form-select-sm" id="select" name="metode_bayar" aria-label=".form-select-sm example">
                        <option selected>Pilih metode pembayaran</option>
                        <option value="COD">COD</option>
                        <option value="transfer">Transfer</option>
                      </select>
                    </div>
                    <div class="mb-3" id="in-img">
                      <label for="formFile" class="form-label">Foto bukti Pembayaran</label>
                      <input class="form-control" name="gambar" type="file" id="formFile">
                    </div>
                    <div class="mb-1">
                      <label for="alamat" class="form-label">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= ($this->session->userdata('member')!= null)?$this->session->userdata('member')['alamat']:''; ?></textarea>
                    </div>
                    <button type="submit" name="btn_order" value="" class="btn btn-sm btn-primary px-4">Beli</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Book A Table Section -->

    
    <!-- ======= Contact Section ======= -->
    
  </main><!-- End #main -->
  <script type="text/javascript">
    let select = document.getElementById('select');
    let imgBox = document.getElementById('in-img');
    select.addEventListener("change",function(){
      if(this.value == 'COD'){
        imgBox.style.display = "none"
      }else{
        imgBox.style.display = "block"
      }
    });
  </script>
