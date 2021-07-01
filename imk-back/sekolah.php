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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Sekolah</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus"></i> Tambah Sekolah Baru
        </button>
        <div class="row">
          <div class="col">
            <!-- Data Tabel -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sekolah SLTA-Sekitar</h3>
              </div>

              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Foto Sekolah</th>        
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                    $no =1;
                    $ambil = $koneksi->query("SELECT * FROM tb_sekolah");

                    while ($tampil = $ambil->fetch_assoc()){;                                    
                    
                  ?>

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tampil['npsn'];?></td>
                    <td><?php echo $tampil['nama_sekolah'];?></td>
                    <td><?php echo $tampil['lokasi'];?></td>                   
                    <td><img style="width: 100pt;" src="../img/<?php echo $tampil['foto_sekolah'];?>"></td>
                    <td class="text-center">
                      <a href="detail_sekolah.php?npsn=<?php echo $tampil['npsn']; ?>" class="btn btn-sm btn-primary"><i class="far fa-eye"></i></a>
                      <a href="edit.php?npsn=<?php echo $tampil['npsn']; ?>" class="btn btn-sm btn-warning  text-white"><i class="fas fa-user-edit"></i></a>
                      <a href="hapus.php?npsn=<?php echo $tampil['npsn']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus <?php echo $tampil['nama_sekolah'];?> ');"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <?php };?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- Akhir dari data tabel -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


<!-- Modal -->
  <!-- Button trigger modal -->

<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="form-group row">
              <label for="nama_admin" class="col-sm-3 col-form-label text-right">Nama Admin</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_admin" name="nama_admin" autocomplete="" value="<?php echo $_SESSION['nama'];?>" readonly>
              </div>
            </div>
            <?php
              date_default_timezone_set('Asia/Jakarta');
              $waktu = date('H:i:s. l, d - M - Y.');
            ?>
          <div class="form-group row">
              <label for="posting" class="col-sm-3 col-form-label text-right">Tanggal Posting</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="posting" name="posting" autocomplete="" value="<?php echo $waktu;?>" readonly>
              </div>
          </div>
          <div class="form-group row">
              <label for="npsn" class="col-sm-3 col-form-label text-right">NPSN</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="npsn" name="npsn" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label text-right">Nama Sekolah</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="lokasi" class="col-sm-3 col-form-label text-right">Lokasi</label>
                  <div class="col-sm-6">
                  <textarea name="lokasi" id="lokasi"  class="form-control"></textarea>
                  </div>
            </div>
            <div class="form-group row">
              <label for="jurusan" class="col-sm-3 col-form-label text-right">Jurusan</label>
                  <div class="col-sm-6">
                  <textarea name="jurusan" id="jurusan"  class="form-control"></textarea>
                  </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi" class="col-sm-3 col-form-label text-right">Deskripsi</label>
                  <div class="col-sm-6">
                    <textarea name="deskripsi" id="deskripsi"  class="form-control"></textarea>
                  </div>
            </div>

            <div class="form-group row">
              <label for="js" class="col-sm-3 col-form-label text-right">Jenis Sekolah</label>
              <div class="col-sm-4">
                  <select name="js" id="js" class="form-control">
                    <option value="">-- Pilih Jenis Sekolah --</option>
                    <option value="SMK">SMK</option>
                    <option value="SMA">SMA</option>
                    <option value="MA">MA</option>
                  </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="foto" class="col-sm-3 col-form-label text-right">Foto Sekolah</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" id="foto" name="foto" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-3 col-form-label text-right">Galeri (Opsional)</label>
              <div class="col-sm-3">
                <input type="file" class="form-control" id="foto1" name="foto1" autocomplete="" >
              </div>
              <div class="col-sm-3">
                <input type="file" class="form-control" id="foto2" name="foto2" autocomplete="" >
              </div>
              <div class="col-sm-3">
                <input type="file" class="form-control" id="foto3" name="foto3" autocomplete="" >
              </div>
            </div>
          <div class="modal-footer">
            <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>

        
          
        <?php

        if(isset($_POST['submit'])){

              $admin = $_POST['nama_admin'];
              $posting = $_POST['posting'];
              $npsn = $_POST['npsn'];
              $nama = $_POST['nama'];
              $lokasi = $_POST['lokasi'];
              $jurusan= $_POST['jurusan'];
              $deskripsi = $_POST['deskripsi'];
              $js = $_POST['js'];
              $nama_foto = $_FILES['foto']['name'];
              $nama_foto1 = $_FILES['foto1']['name'];
              $nama_foto2 = $_FILES['foto2']['name'];
              $nama_foto3 = $_FILES['foto3']['name'];
              

              if($nama_foto != ""){
                $ekstensi_boleh = array('png', 'jpg', 'jpeg');
                $x = explode('.', $nama_foto);
                $ekstensi = strtolower(end($x));
                $source = $_FILES['foto']['tmp_name'];
                $source1 = $_FILES['foto1']['tmp_name'];
                $source2 = $_FILES['foto2']['tmp_name'];
                $source3 = $_FILES['foto3']['tmp_name'];
                $random = rand(1, 999);
                $new_file_name = $random."-".$nama_foto;
                $new_file1 = $random."-".$nama_foto1;
                $new_file2 = $random."-".$nama_foto2;
                $new_file3 = $random."-".$nama_foto3;
                
                if(in_array($ekstensi, $ekstensi_boleh)== true){
                  move_uploaded_file($source, '../img/'.$new_file_name);
                  move_uploaded_file($source1, '../img/'.$new_file1);
                  move_uploaded_file($source2, '../img/'.$new_file2);
                  move_uploaded_file($source3, '../img/'.$new_file3);
                
                  $cek = $koneksi->query("INSERT INTO tb_sekolah (npsn, nama_sekolah, lokasi, jurusan, deskripsi, jenis_sekolah, foto_sekolah) VALUES ('$npsn', '$nama', '$lokasi', '$jurusan', '$deskripsi', '$js', '$new_file_name')");

                  $cekk = $koneksi->query("INSERT INTO tb_posting (nama_admin, npsn, tanggal_posting) VALUES ('$admin', '$npsn', '$posting')");

                  $cekkk = $koneksi->query("INSERT INTO tb_galeri (npsn, foto1, foto2, foto3) VALUES ('$npsn', '$new_file1', '$new_file2', '$new_file3')");
                  
                  if($cek>0 && $cekk>0){
                    echo "<script>
                    alert('Simpan Data Sekolah Berhasil');
                  </script>";
                  echo "<script>
                    location='sekolah.php';
                  </script>";
                  }else{
                      echo "<script>
                    alert('Simpan Data Sekolah Gagal!');
                  </script>";
                  mysqli_error($koneksi);
                  }
                }
              }else{
                echo "<script>  
                  alert('Simpan Data Admin Gagal!');
                </script>";
                mysqli_error($koneksi);
              }
        
        }
          
          
        ?>
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