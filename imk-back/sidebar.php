
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <i class="fas fa-home ml-3"></i>
      <span class="brand-text font-weight-light"></i>SLTA -<strong>Sekitar</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/<?php echo $_SESSION['img'];?>" class="img-circle elevation-1" alt="User Image">
        </div>
        <br>
        <div class="info">
          <a href="detail_petugas.php?id_admin=<?php echo $_SESSION['id_admin'];?>" class="d-block"><?php echo $_SESSION['nama'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="petugas.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="sekolah.php" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Semua Sekolah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pesan.php" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Pesan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Jenis Sekolah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sekolah_sma.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sekolah_smk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMK</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="sekolah_ma.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MA</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <hr class="bg-secondary">
            <a href="../imk-front/" target="_blank" class="nav-link" >
              <i class="nav-icon fas fa-city"></i>
              <p>
                Front Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link" onclick="return confirm('Apakah Anda Yakin Ingin Logout?');">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>