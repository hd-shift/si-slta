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
            <h1 class="m-0 text-dark">Data Admin</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-user-plus"></i> Tambah Admin Baru
        </button>
        <div class="row">
          <div class="col">
            <!-- Data Tabel -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin SLTASekitar</h3>
              </div>

              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>                 
                    <th>Email</th>
                    <th>Img</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                    $no =1;
                    $ambil = $koneksi->query("SELECT * FROM tb_admin");

                    while ($tampil = $ambil->fetch_assoc()){;                                    
                    
                  ?>

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tampil['nama'];?></td>
                    <td><?php echo $tampil['username'];?></td>
                    <td><?php echo $tampil['email'];?></td>
                    <td><img style="width: 100pt;" src="../img/<?php echo $tampil['img'];?>"></td>
                    <td class="text-center">
                      <a href="detail_petugas.php?id_admin=<?php echo $tampil['id_admin'];?>" class="btn btn-sm btn-primary"><i class="far fa-eye"></i></a>
                      <a href="edit_petugas.php?id_admin=<?php echo $tampil['id_admin'];?>" class="btn btn-sm btn-warning  text-white"><i class="fas fa-user-edit"></i></a>
                      <a href="hapus_petugas.php?id_admin=<?php echo $tampil['id_admin'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data dengan Username <?php echo $tampil['username'];?> ?');"><i class="fas fa-trash-alt"></i></a>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="modal-body">
            
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label text-right">Nama Lengkap</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="username" class="col-sm-3 col-form-label text-right">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="pass" class="col-sm-3 col-form-label text-right">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="pass" name="password" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="pass" class="col-sm-3 col-form-label text-right">Konfirmasi Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="pass" name="password2" autocomplete="" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="img" class="col-sm-3 col-form-label text-right">Foto</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="img" name="gambar"  required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label text-right">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="nama" name="email" autocomplete="" required>
              </div>
            </div>
           
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </form>

        <?php
        
            if(isset($_POST['simpan'])){

              $password = $_POST['password'];
              $password2 = $_POST['password2'];
              if($password == $password2){
              
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $nama_file = $_FILES['gambar']['name'];
                $email = $_POST['email'];

                if($nama_file != ""){
                  $ekstensi_boleh = array('png', 'jpg', 'jpeg');
                  $x = explode('.', $nama_file);
                  $ekstensi = strtolower(end($x));
                  $source = $_FILES['gambar']['tmp_name'];
                  $random = rand(1, 999);
                  $new_file_name = $random."-".$nama_file;
                
                  if(in_array($ekstensi, $ekstensi_boleh)== true){
                    move_uploaded_file($source, '../img/'.$new_file_name);
                  
                    $cek = $koneksi->query("INSERT INTO tb_admin (nama, username, password, img, email) VALUES ('$nama', '$username', '$password', '$new_file_name', '$email')");
                    
                    if($cek>0){
                      echo "<script>
                      alert('Simpan Data Admin Berhasil');
                    </script>";
                    echo "<script>
                      location='petugas.php';
                    </script>";
                    }else{
                        echo "<script>
                      alert('Simpan Data Admin Ggl!');
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

              }else{
                echo "<script>  
                              alert('Password tidak cocok!');
                            </script>";
                            mysqli_error($koneksi);
              }
            }

        ?>
      </div>
    </div>
  </div>
<!-- Akhir Modal -->


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Powered</strong>
    Nurul Huda
    <div class="float-right d-none d-sm-inline-block">
      Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.<b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include "js.php" ?>
<?php }else{
        echo "<script>
        alert('Anda belum Login!');
        </script>";
        header("location: index.php");
    }
?>