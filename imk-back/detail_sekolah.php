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
        <a href="sekolah.php" class="btn btn-success mb-2"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="row">
          <div class="col">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><strong>Detail Sekolah</strong></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
          
              <?php

                    
                    $ambil = $koneksi->query("SELECT * FROM tb_sekolah WHERE npsn='$_GET[npsn]'");

                    $tampil = $ambil->fetch_assoc();                                    
                    
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-3">NPSN</div>
                      <div class="col-9"> : <?php echo $tampil['npsn'];?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Nama Sekolah</div>
                      <div class="col-9"> : <?php echo $tampil['nama_sekolah'];?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Lokasi</div>
                      <div class="col-9">: <?php echo $tampil['lokasi'];?></div>
                    </div>
                    
                  </div>

                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-3">Jurusan</div>
                      <div class="col-9"> : <?php echo $tampil['jurusan'];?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Deskripsi</div>
                      <div class="col-9"> : <?php echo $tampil['deskripsi'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-3">Jenis Sekolah</div>
                      <div class="col-9"> : <?php echo $tampil['jenis_sekolah'];?></div>
                    </div>             
                  </div>

                  <div class="col-md-12" style="margin-top: 2em;">
                    <div class="row">
                      <div class="col-2">Foto Sekolah</div>
                      <div class="col-10 text-left">
                      <img style="width: 100%;" src="../img/<?php echo $tampil['foto_sekolah'];?>">
                      </div>
                    </div>                
                  </div>
                  <?php

                    
                    $ambil1 = $koneksi->query("SELECT * FROM tb_galeri WHERE npsn='$_GET[npsn]'");

                    $tampil = $ambil1->fetch_assoc();                                    
                    
                  ?>
                  <div class="col-md-12" style="margin-top: 2em;">
                    <div class="row">
                      <div class="col-2">Galeri 1</div>
                      <div class="col-10 text-left">
                      <img style="width: 100%;" src="../img/<?php echo $tampil['foto1'];?>">
                      </div>
                    </div>                
                  </div>
                  <div class="col-md-12" style="margin-top: 2em;">
                    <div class="row">
                      <div class="col-2">Galeri 2</div>
                      <div class="col-10 text-left">
                      <img style="width: 100%;" src="../img/<?php echo $tampil['foto2'];?>">
                      </div>
                    </div>                
                  </div>
                  <div class="col-md-12" style="margin-top: 2em;">
                    <div class="row">
                      <div class="col-2">Galeri 3</div>
                      <div class="col-10 text-left">
                      <img style="width: 100%;" src="../img/<?php echo $tampil['foto3'];?>">
                      </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" class="form-horizontal">
          <div class="modal-body">
            <div class="form-group row">
              <label for="induk" class="col-sm-3 col-form-label text-right">Nomor Induk</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="induk" name="induk" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label text-right">Nama Lengkap</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="tempat" class="col-sm-3 col-form-label text-right">Tempat Tanggal Lahir</label>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="tempat" name="tempat" autocomplete="" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" autocomplete="" required>
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