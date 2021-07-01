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
        
        <div class="row">
          <div class="col">
            <!-- Data Tabel -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pesan dari Halaman Depan (Front Page)</h3>
              </div>

              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengunjung</th>          
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                    $no =1;
                    $ambil = $koneksi->query("SELECT * FROM tb_pesan");

                    while ($tampil = $ambil->fetch_assoc()){;                                    
                    
                  ?>

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tampil['nama'];?></td>
                    <td><?php echo $tampil['email'];?></td>
                    <td><?php echo $tampil['pesan'];?></td>
                    <td><?php echo $tampil['waktu_kirim'];?></td>
                    <td class="text-center">
                      <a href="hapus_pesan.php?id=<?php echo $tampil['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus Pesan dengan isi <?php echo $tampil['pesan'];?>  ?');"><i class="fas fa-trash-alt"></i></a>
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

<!-- Data Pesan -->
                      
 


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