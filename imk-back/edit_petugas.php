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

                    
                    $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE id_admin='$_GET[id_admin]'");

                    $tampil = $ambil->fetch_assoc();                                    
                    
              ?>
              <div class="card-body">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label text-right">Nama Admin</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $tampil['nama'];?>" autocomplete="" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label text-right">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="username" name="username" value="<?php echo $tampil['username'];?>" autocomplete="" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password" name="password" value="" autocomplete="" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password2" class="col-sm-2 col-form-label text-right">Konfirmasi Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password2" name="password2" value="" autocomplete="" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
                          <div class="col-sm-9">
                          <input type="email" class="form-control" id="email" name="email" value="<?php echo $tampil['email'];?>" autocomplete="" required>
                          </div>
                        </div>
                      
                      
                      <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label text-right">Foto Admin</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="foto" name="foto" autocomplete="" required>
                        </div>
                        <label for="foto" class="col-sm-2 col-form-label text-right">Foto Admin Sebelumnya</label>
                        <div class="col-sm-9">
                        <img src="../img/<?php echo $tampil['img'];?>" alt="Foto Sebelumnya" style="width: 200pt; margin-top:1em;">
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
                          $password= $_POST['password'];
                          $password2= $_POST['password2'];

                          if($password == $password2){
                          $nama = $_POST['nama'];
                          $username = $_POST['username'];
                          $password= $_POST['password'];
                          $email= $_POST['email'];
                          $nama_foto = $_FILES['foto']['name'];

                            if($nama_foto != ""){
                              $ekstensi_boleh = array('png', 'jpg', 'jpeg');
                              $x = explode('.', $nama_foto);
                              $ekstensi = strtolower(end($x));
                              $source = $_FILES['foto']['tmp_name'];
                              $random = rand(1, 999);
                              $new_file_name = $random."-".$nama_foto;
                         
                                if(in_array($ekstensi, $ekstensi_boleh)== true){
                                  move_uploaded_file($source, '../img/'.$new_file_name);
                                
                                  $cek = $koneksi->query("UPDATE tb_admin SET nama='$nama', username='$username', email='$email', password='$password', img='$new_file_name' WHERE id_admin='$_GET[id_admin]'");
                              
                              if($cek>0){
                                echo "<script>
                                alert('Ubah Data Petugas Berhasil');
                              </script>";
                              echo "<script>
                                location='petugas.php';
                              </script>";
                              }else{
                                  echo "<script>
                                alert('Ubah Data Admin Ggl!');
                              </script>";
                              mysqli_error($koneksi);
                              }
                            }
                          }else{
                            echo "<script>  
                              alert('Ubah Data Admin Gagal!');
                            </script>";
                            mysqli_error($koneksi);
                          }
                        }else{
                          echo "<script>  
                              alert('Password tidak cocok!');
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