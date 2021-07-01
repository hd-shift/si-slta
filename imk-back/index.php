<?php include "koneksi.php" ?>
<?php include "header.php" ?>

<body class="hold-transition login-page" style="background-image:url(../img/55.jpg); background-size: cover;">
<div class="login-box" style="background-color: rgba(100, 0, 0, 0.5);">
  <div class="login-logo">
    <a style="color:#e0546b;">NH -<b>SLTA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="background-color: rgba(50, 0, 0, 0.1);">
    <div class="card-body login-card-body" style="background-color: rgba(50, 0, 0, 0.0);">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="" method="post">
        <div class="input-group mb-3" >
          <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-tie"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" name="masuk" class="btn btn-primary btn-block">Login <i class="fas fa-sign-in-alt"></i></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php
        if(isset($_POST['masuk'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
          $sql = $koneksi->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
          $data = $sql->fetch_assoc();
          $ada = $sql->num_rows;
          if($ada==1){
            session_start();
            if($data['id_admin']>=1){
              $_SESSION['id_admin'] = $data['id_admin'];
              $_SESSION['nama'] = $data['nama'];
              $_SESSION['username'] = $data['username'];
              $_SESSION['password'] = $data['password'];
              $_SESSION['img'] = $data['img'];
              $_SESSION['email'] = $data['email'];
              echo "<script>
              alert('Username dan Password Benar!');
              </script>";
              echo "<script>
              location='dashboard.php';                
          </script>";
                       
            }else{
                  echo "<script>
                  alert('Login Gagal! Username atau Password Salah!');                
              </script>";
              
              }
                  
          }else{
            echo "<script>
            alert('Login Gagal! Username atau Password Salah!');                
        </script>";
          }
        } 
              
      ?>
  </div>
</div>
<!-- /.login-box -->

