<?php
    ob_start();
    session_start();
    
    
?>
<?php include "koneksi.php" ?>
<?php if($_SESSION['id_admin']){
?>
<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <a href="petugas.php" class="btn btn-success mb-2"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="row">
          <div class="col">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><strong>Detail Admin</strong></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
          
              <?php

                    
                    $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE id_admin='$_GET[id_admin]'");

                    $tampil = $ambil->fetch_assoc();                                    
                    
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-3">Nama Admin</div>
                      <div class="col-9"> : <?php echo $tampil['nama'];?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Username</div>
                      <div class="col-9"> : <?php echo $tampil['username'];?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Email</div>
                      <div class="col-9">: <?php echo $tampil['email'];?></div>
                    </div>
                    
                  </div>

                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-3">Foto</div>
                      <div class="col-9"> : <img style="width:100%;" src="../img/<?php echo $tampil['img'];?>"></div>
                    </div>
                          
                  </div>
                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   
   
<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" class="form-horizontal">
          <div class="modal-body">
            <div class="form-group row">
              <label for="admin" class="col-sm-3 col-form-label text-right">Nama Admin</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="admin" name="nama" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label text-right">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="username" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password" autocomplete="" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="password2" name="password" autocomplete="" placeholder="Konfirmasi password" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="gender" class="col-sm-3 col-form-label text-right">Jenis Kelamin</label>
              <div class="col-sm-4">
                  <select name="gender" id="gender" class="form-control">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="laki-laki">Laki - laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label text-right">Alamat</label>
              <div class="col-sm-9">
                <textarea name="alamat" id="alamat" rows="5" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="telepon" class="col-sm-3 col-form-label text-right">Telepon</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="telepon" name="telepon" autocomplete="" required>
              </div>
            </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Akhir Modal -->


 

<?php include "js.php" ?>
<?php }else{
        echo "<script>
        alert('Anda belum Login!');
        </script>";
        header("location: index.php");
    }
?>