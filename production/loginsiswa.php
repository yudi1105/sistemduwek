<?php 
  session_start();
  $koneksi = new mysqli("localhost","root","","sikeuangan");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="images/ico" href="images/logo.PNG">
    <title>SMK SARIPRAJA</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>SMK SARIPRAJA</h1>
              <img src="images/logo.PNG" width="100px" height="100px" />
              <h2>SISTEM INFORMASI KEUANGAN </h2>
              <br>
              <div>
                <input type="text" class="form-control" name="email" placeholder="Username" required="" >
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" >
              </div>
              <div>
                <button class="btn btn-round btn-primary" name="simpan">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> Siswa</h1>
                  <p>Copyright © <strong>SMK SARIPRAJA</strong> All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
     <?php
              if(isset($_POST['simpan'] )){
                $email = $_POST["email"];
                $password = $_POST["password"];
                $ambil = $koneksi->query("SELECT * FROM siswa WHERE emailsiswa='$email'
                AND passwordsiswa='$password'");
                $yangcocok = $ambil->num_rows;
                if($yangcocok==1){
                  $akun = $ambil->fetch_assoc();
                  $_SESSION["siswa"] = $akun;
                  echo "<script>alert('Login Berhasil');</script>";
                  echo "<script>location='indexsiswa.php';</script>"; 

                }else{
                  echo "<script>alert('Login Gagal');</script>";
                  echo "<script>location='loginsiswa.php';</script>";
                }
              }
            ?>
  </body>
</html>


