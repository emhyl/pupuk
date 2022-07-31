
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="<?= base_url() ?>admin/home">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Member</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="data/tbl_member">
            <i class="bi bi-circle"></i><span>Member</span>
          </a>
        </li>
        <li>
          <a href="data/tbl_produk">
            <i class="bi bi-circle"></i><span>Tambah Member</span>
          </a>
        </li>
        <li>
          <a href="data/tbl_pembeli">
            <i class="bi bi-circle"></i><span>Setting</span>
          </a>
        </li>
        
      </ul>
    </li> -->

    <!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url() ?>admin/data/member">
            <i class="bi bi-circle"></i><span>Data Member</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>admin/data/produk">
            <i class="bi bi-circle"></i><span>Data Produk</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>admin/data/pembeli">
            <i class="bi bi-circle"></i><span>Pembeli</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url() ?>admin/data/user">
            <i class="bi bi-circle"></i><span>User</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-heading text-center">===========================</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url() ?>admin/admin/riwayat">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Riwayat</span>
      </a>
    </li><!-- End Contact Page Nav -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="admin/setting">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Diskon</span>
      </a>
    </li>
     --><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed position-relative" href="<?= base_url() ?>admin/order">
        <i class="bi bi-card-list"></i>
        <span>Orderan</span>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?= $jml ?>
            <span class="visually-hidden">unread messages</span>
        </span>

      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url() ?>admin/login">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->