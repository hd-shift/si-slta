<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NH - SI Pendidikan SLTA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Data AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
            <div class="container"  data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
            <!-- <img src="assets/img/navbar-logo.svg" alt="..." /> -->
                <a class="navbar-brand" href="#page-top">NH - SLTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" >
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#portfolio">Sekolah</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#team">Profilku</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#contact">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link active" href="../imk-back/index.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container"  data-aos="fade-down" data-aos-delay="4000" data-aos-duration="1100">
                <div class="masthead-subheading text-uppercase sub"></div>
                <div class="masthead-heading text-uppercase head"></div>
                <a class="btn btn-primary btn-xl text-uppercase s" href="#services">Selengkapnya</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services"  data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
            <div class="container" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan</h2>
                    <h3 class="section-subheading text-muted">Layanan yang disediakan oleh NH SLTA</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-school fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pilihan Sekolah SLTA di Kecamatan Sumobito</h4>
                        <p class="text-muted">Menyajikan Berbagai Pilihan Sekolah Tingkat SLTA di Kecamatan Sumobito</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tasks fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kurikulum Sesuai Standar Nasional</h4>
                        <p class="text-muted">Sekolah yang disajikan di web ini menggunakan Kurikulum berstandar nasional</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-certificate fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Sistem Informasi Berdasarkan Fakta</h4>
                        <p class="text-muted">Menyajikan Sistem Informasi Mengenai Semua Sekolah Tingkat SLTA yang berada di Kecamatan Sumobito berdasarkan Fakta</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                    <h2 class="section-heading text-uppercase">Sekolah</h2>
                    <h3 class="section-subheading text-muted">Sekolah SMA/SMK/MA Kecamatan Sumobito</h3>
                </div>
                
                <div class="row">
                <?php
                        include "koneksi.php";
                        ?>
                        <?php
                                    $ambil = $koneksi->query("SELECT * FROM tb_sekolah");
                                    while($data = $ambil->fetch_assoc()){;
                        ?>
                    <div class="col-sm-4">
                        <!-- Portfolio item 1-->
                       
                 
                        <div class="portfolio-item" data-aos="zoom-out" data-aos-delay="1000" data-aos-duration="1500">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $data['npsn'];?>">
                                
                                <div class="card shadow" style="background-color:#ededed;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width:100%; padding:1em;" src="../img/<?php echo $data['foto_sekolah'];?>"/>
                                <div class="card-body">
                                </div>
                                </div>
                                
                            </a>

                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $data['nama_sekolah']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['jenis_sekolah']; ?></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php };?>   
                </div>
                
                        
                

            </div>
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
                    <h2 class="section-heading text-uppercase">Profilku</h2>
                    <h3 class="section-subheading text-muted">Pembuat dari NH Sistem Informasi Pendidikan Sekolah Tingkat SLTA di Kecamatan Sumobito Kabupaten Jombang</h3>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="team-member" >
                            <img class="mx-auto rounded-circle" src="../img/216-aku1.jpg" alt="..." data-aos="flip-right" data-aos-delay="1000" data-aos-duration="3000"/>
                            <h4 class="section-heading" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1800">
                            Nurul Huda</h4>
                            <p class="section-subheading text-muted" class="row" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1800">
                            Mahasiswa</p>
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> -->
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1800">
                    <div class="col-lg-8 mx-auto text-center" >
                    <p style="font-size:1.3em;" class="large text-uppercase text-muted">
                    S1 -  Teknik Informatika Angkatan 2019<br> 
                    Universitas Hasyim Asyari Jombang<br>
                    Website Sistem Informasi Pendidikan Sekolah Tingkat SLTA<br>
                    di Kecamatan Sumobito Kabupaten Jombang<br>
                    Tugas Mata Kuliah Interaksi Manusia dan komputer
                    </p>
                    </div>
                
                    <div class="col-lg-8 mx-auto text-center"><p  class="large text-uppercase" style="font-weight: bold; font-size:1.3em;">Dosen Pengampu : Sri WidoyoNingrum, ST., M.Pd</p></div>
                    <p>Maps</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7910.597164228737!2d112.31618134657657!3d-7.542380528134499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786b455cde1799%3A0x89478a47a61d924b!2sBrudu%2C%20Kec.%20Sumobito%2C%20Kabupaten%20Jombang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623550179817!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- Clients
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
                    <h2 class="section-heading text-uppercase">Kontak</h2>
                    <h3 class="section-subheading text-muted">Kirim Kritik dan Saran Kepada Kami</h3>
                </div>
                <form id="contactForm" method="POST">
                    <div class="row align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="nama" placeholder="Nama Anda *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email Anda *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $waktu = date('Y-M-d , H:i:s');
                            ?>
                                <input class="form-control" id="waktu" type="hidden" name="waktu" placeholder="" required="required" value="<?php echo $waktu;?>" readonly />
                                <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="pesan" placeholder="Pesan Anda .." required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="text-center" data-aos="flip-up" data-aos-delay="1000" data-aos-duration="1600">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit" name="kirim">Kirim Pesan</button>        
                    </div>
                </form>

                <?php
                    if(isset($_POST['kirim'])){
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $pesan = $_POST['pesan'];
                        $wktu = $_POST['waktu'];

                        $send = $koneksi->query("INSERT INTO tb_pesan (nama, email, pesan, waktu_kirim) VALUES ('$nama', '$email', '$pesan', '$wktu')");
                        
                        if($send == true){
                            echo"<script>
                                alert('Pesan Sudah Terkirim');
                            </script>";
                            
                        }else{
                            echo"<script>
                                alert('Pesan Gagal Terkirim');
                            </script>";
                        }
                    }
                ?>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4" >
            <div class="container" >
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                        Copyright &copy; NH - SLTA
                        <!-- This script automatically adds the current year to your website footer-->
                        <!-- (credit: https://updateyourfooter.com/)-->
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <?php
            include "koneksi.php";
        ?>
        <?php
            $ambil = $koneksi->query("SELECT * FROM tb_sekolah JOIN tb_posting ON tb_sekolah.npsn = tb_posting.npsn");
            while($data = $ambil->fetch_assoc()){;
        ?>

        <!-- Portfolio item  modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $data['npsn'];?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                    
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Sekolah details-->
                                    <h2 class="text-uppercase"><?php echo $data['nama_sekolah'];?></h2>
                                    Penulis : <?php echo $data['nama_admin'];?><br>
                                    Tanggal Posting : <?php echo $data['tanggal_posting'];?><br>
                                    <img class="img-fluid d-block mx-auto" src="../img/<?php echo $data['foto_sekolah'];?>" alt="..." />                                   
                                    <strong>NPSN : </strong><?php echo $data['npsn'];?><br>
                                    <strong>Lokasi : </strong><?php echo $data['lokasi'];?><br>
                                    <strong>Jurusan : </strong><?php echo $data['jurusan'];?><br>
                                    <strong>Jenis Sekolah : </strong><?php echo $data['jenis_sekolah'];?><br>
                                    <p><strong>Deskripsi : </strong><?php echo $data['deskripsi'];?></p>

                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $data['npsn'];?>">               
                                    <a data-bs-toggle="modal" href="#portfolioModals<?php echo $data['npsn'];?>"><button class="btn btn-primary btn-xl text-uppercase" type="button" style="background-color: skyblue;">
                                        <i class="fas fa-school me-1"></i>
                                        Galeri
                                    </button></a>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Preview
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php };?>
        
        </div>
        
        <?php
            include "koneksi.php";
        ?>
        <?php
            $ambil = $koneksi->query("SELECT * FROM tb_sekolah JOIN tb_galeri ON tb_sekolah.npsn = tb_galeri.npsn");
            while($data = $ambil->fetch_assoc()){;
        ?>
        <div class="portfolio-modal modal fade" id="portfolioModals<?php echo $data['npsn'];?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                    
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Sekolah details-->
                                    <h2 class="text-uppercase"><?php echo $data['nama_sekolah'];?></h2>

                                    <img class="img-fluid d-block mx-auto" src="../img/<?php echo $data['foto1'];?>" alt="..." />
                           
                                    <img class="img-fluid d-block mx-auto" src="../img/<?php echo $data['foto2'];?>" alt="..." />

                                    <img class="img-fluid d-block mx-auto" src="../img/<?php echo $data['foto3'];?>" alt="..." /> 
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Preview
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php };?>
        
        </div>

        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Data AOS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                once:true,
                durration:2000,
            });
        </script>
        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/TextPlugin3.min.js"></script>
        <script>
            gsap.registerPlugin(TextPlugin);
            gsap.from('.navbar', {duration:2, y:'-100%', opacity:0, ease:'bounce'});
            gsap.to('.sub', {duration:2, delay:2, text: 'Selamat Datang Di NH SLTA'});
            gsap.to('.head', {duration:2, delay:4, text: 'Sistem Informasi SLTA Kecamatan Sumobito'});
            gsap.from('.s', {duration:1, y:'600%', delay:5});
           
            
        </script>
        
    </body>
</html>
