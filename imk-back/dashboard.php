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
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">                          
                           
                            <h3>
                            <?php
                                $h = $koneksi->query("SELECT * FROM tb_sekolah");
                                $hitung = mysqli_num_rows($h);
                                echo $hitung; 
                            ?>
                            </h3>
                            <p>Jumlah Sekolah SLTA</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <a href="sekolah.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                            <?php
                                $h = $koneksi->query("SELECT * FROM tb_sekolah WHERE jenis_sekolah='SMA'");
                                $hitung = mysqli_num_rows($h);
                                echo $hitung; 
                            ?>
                            </h3>

                            <p>Jumlah Sekolah SMA</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-">SMA</i>
                        </div>
                        <a href="sekolah_sma.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                            <?php
                                $h = $koneksi->query("SELECT * FROM tb_sekolah WHERE jenis_sekolah='SMK'");
                                $hitung = mysqli_num_rows($h);
                                echo $hitung; 
                            ?>
                            </h3>

                            <p>Jumlah Sekolah SMK</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-">SMK</i>
                        </div>
                        <a href="sekolah_smk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                            <?php
                                $h = $koneksi->query("SELECT * FROM tb_sekolah WHERE jenis_sekolah='MA'");
                                $hitung = mysqli_num_rows($h);
                                echo $hitung; 
                            ?>
                            </h3>

                            <p>Jumlah Sekolah MA</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-">MA</i>
                        </div>
                        <a href="sekolah_ma.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row  -->
            <div class="row">
                <!-- Konten Utamanya  -->
                <div class="col-md-6">
                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pesan</h3>

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <?php
                            $take = $koneksi->query("SELECT * FROM tb_pesan ORDER BY id DESC LIMIT 3");
                            while ($tampilkan =$take->fetch_assoc()){

                            
                        ?>
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item pl-3">
                                <span class="badge badge-info float-left"><?php echo "Email : ".$tampilkan['email'];?></span>
                                <span class="badge badge-secondary float-right"><?php echo "Waktu : ".$tampilkan['waktu_kirim'];?></span><br>
                                <a class="product-title text-primary"><?php echo $tampilkan['nama'];?></a>
                                    
                                    <span class="product-description">
                                    <?php echo "Pesan :".$tampilkan['pesan'];?>
                                    </span>
                                </li>

                                <!-- /.item -->
                            </ul>
                        </div>
                        <?php };?>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="pesan.php" class="uppercase">Lihat Semua Pesan</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- Tanggal -->
                <div class="col-md-6">
                    <!-- Calendar -->
                    <section class="connectedSortable">
                        <!-- Map card -->
                        <div class="card bg-gradient-primary d-none">
                            <!-- /.card-body-->
                            <div class="card-footer bg-transparent">
                                <div class="row d-none">
                                    <div class="col-4 text-center">
                                        <div id="sparkline-1"></div>
                                        <div class="text-white">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <div id="sparkline-2"></div>
                                        <div class="text-white">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <div id="sparkline-3"></div>
                                        <div class="text-white">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class="card bg-gradient-success">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i> Calendar
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                </div>
                <!-- Konten Utamanya Disini -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include "js.php" ?>
<?php }else{
        echo "<script>
        alert('Anda belum Login!');
        </script>";
        header("location: index.php");
    }
?>