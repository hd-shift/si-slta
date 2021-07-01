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
  <div class="content-wrapper pt-2">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
             <div class="card card-outline card-primary">
              <div class="card-header">
                <h2 class="card-title">Edit Data Sekolah</h2>
              </div>
              <!-- /.card-header -->
              <?php

                    
                    $ambil = $koneksi->query("SELECT * FROM tb_sekolah WHERE npsn='$_GET[npsn]'");

                    $tampil = $ambil->fetch_assoc();                                    
                    
              ?>
              <div class="card-body">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="npsn" class="col-sm-2 col-form-label text-right">NPSN</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="npsn" name="npsn" value="<?php echo $tampil['npsn'];?>" autocomplete="" required readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label text-right">Nama Sekolah</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama" name="nama_sekolah" value="<?php echo $tampil['nama_sekolah'];?>" autocomplete="" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label text-right">Lokasi</label>
                          <div class="col-sm-9">
                            <textarea name="lokasi" id="lokasi" value="" class="form-control"><?php echo $tampil['lokasi'];?></textarea>
                          </div>
                        </div>
                      
                      <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label text-right">Jurusan</label>
                        <div class="col-sm-9">
                          <textarea name="jurusan" id="jurusan" value="" class="form-control"><?php echo $tampil['jurusan'];?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label text-right">Deskripsi</label>
                        <div class="col-sm-9">
                        <textarea name="deskripsi" id="deskripsi" value="" class="form-control"><?php echo $tampil['deskripsi'];?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="js" class="col-sm-2 col-form-label text-right">Jenis Sekolah</label>
                          <div class="col-sm-9">
                              <select name="js" id="js" class="form-control">
                              <?php
                                if($tampil['jenis_sekolah']=='SMK'){
                                  echo "<option value='SMK' selected >SMK</option>";
                                  echo "<option value='SMA' >SMA</option>";
                                  echo "<option value='MA' >MA</option>";
                                }elseif($tampil['jenis_sekolah']=='SMA'){
                                  echo "<option value='SMK'>SMK</option>";
                                  echo "<option value='SMA' selected>SMA</option>";
                                  echo "<option value='MA' >MA</option>";
                                }else{
                                  echo "<option value='SMK'>SMK</option>";
                                  echo "<option value='SMA'>SMA</option>";
                                  echo "<option value='MA' selected >MA</option>";
                                }
                              ?>
                                
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label text-right">Foto Sekolah</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="foto" name="foto" autocomplete="" value="<?php echo $tampil['foto_sekolah'];?>" >
                        </div>
                        <label for="telepon" class="col-sm-2 col-form-label text-right">Foto Sekolah Sebelumnya</label>
                        <div class="col-sm-9">
                        <img src="../img/<?php echo $tampil['foto_sekolah'];?>" alt="Foto Sebelumnya" style="width: 200pt; margin-top:1em;">
                        </div>
                      </div>
                      
                      <?php

                    
                          $ambil = $koneksi->query("SELECT * FROM tb_galeri WHERE npsn='$_GET[npsn]'");

                          $tampil = $ambil->fetch_assoc();                                    

                      ?>

                      <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label text-right">Galeri 1</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="foto" name="foto1" autocomplete="" value="<?php echo $tampil['foto1'];?>" >
                        </div>
                        <label for="telepon" class="col-sm-2 col-form-label text-right">Galeri 1 Sebelumnya</label>
                        <div class="col-sm-9">
                        <img src="../img/<?php echo $tampil['foto1'];?>" alt="Foto Sebelumnya" style="width: 200pt; margin-top:1em;">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label text-right">Galeri 2</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="foto" name="foto2" autocomplete="" value="<?php echo $tampil['foto2'];?>">
                        </div>
                        <label for="telepon" class="col-sm-2 col-form-label text-right">Galeri 2 Sebelumnya</label>
                        <div class="col-sm-9">
                        <img src="../img/<?php echo $tampil['foto2'];?>" alt="Foto Sebelumnya" style="width: 200pt; margin-top:1em;">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label text-right">Galeri 3</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="foto" name="foto3" autocomplete="" value="<?php echo $tampil['foto3'];?>">
                        </div>
                        <label for="telepon" class="col-sm-2 col-form-label text-right">Galeri 3 Sebelumnya</label>
                        <div class="col-sm-9">
                        <img src="../img/<?php echo $tampil['foto3'];?>" alt="Foto Sebelumnya" style="width: 200pt; margin-top:1em;">
                        </div>
                      </div>
                      
                    <div class="modal-footer">
                      <a href="sekolah.php" class="btn btn-success"><i class="fas fa-arrow-left"></i> Kembali</a>
                      <button type="reset" class="btn btn-secondary"><i class="fas fa-sync"></i> Reset</button>
                      <button type="submit" name="ubah" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>                      
                    </div>
                  </form>
                  <?php
                      if(isset($_POST['ubah'])){

                        $npsn = $_POST['npsn'];
                        $nama = $_POST['nama_sekolah'];
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
                          
                            $cek = $koneksi->query("UPDATE tb_sekolah SET nama_sekolah='$nama', lokasi='$lokasi', jurusan='$jurusan', deskripsi='$deskripsi', jenis_sekolah='$js', foto_sekolah='$new_file_name' WHERE npsn='$npsn'");
                            $cekk = $koneksi->query("UPDATE tb_galeri SET foto1='$new_file1', foto2='$new_file2', foto3='$new_file3' WHERE npsn='$npsn'");
                            if($cek>0){
                              echo "<script>
                              alert('Simpan Data Sekolah Berhasil');
                            </script>";
                            echo "<script>
                              location='sekolah.php';
                            </script>";
                            echo "<script>
                              location='sekolah.php';
                            </script>";
                            }else{
                                echo "<script>
                              alert('Simpan Data Sekolah Ggl!');
                            </script>";
                            mysqli_error($koneksi);
                            }
                          }
                        }else{
                          echo "<script>  
                            alert('Simpan Data Sekolah Gagal!');
                          </script>";
                          mysqli_error($koneksi);
                        }
                      }
                  ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- Akhir dari data tabel -->
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>




<?php include "js.php" ?>
<?php }else{
        echo "<script>
        alert('Anda belum Login!');
        </script>";
        header("location: index.php");
    }
?>