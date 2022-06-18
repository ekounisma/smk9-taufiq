<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">simPT</span>
  </a>

  <!-- Sidebar -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?= base_url() . "/mahasiswa1"; ?>>
                <i class="nav-icon fas fa-user-alt"></i>
                  <p>Profile Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= base_url() . "/mahasiswa1/update"; ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?= base_url() . "/Dosen"; ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update</p>
                </a>
              </li>
            </ul>
          </li>
      <li class="nav-item">
        <a  class="nav-link">
          <i class="nav-icon fas fa-sitemap"></i>
          <p>
            Kartu Rencana Studi
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>
            Kartu Hasil Studi
            <span class="badge badge-info right"></span>
          </p>
        </a>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-coins"></i>
          <p>
            Keuangan
          </p>
        </a>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-lock"></i>
          <p>
        Ganti Password
          </p>
        </a>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-running "></i>
          <p>
            Logout
          </p>
        </a>
  </div>
  <!-- /.sidebar -->
</aside>  