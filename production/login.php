<?php 
  session_start();
  $koneksi = new mysqli("localhost","root","","sidsaripraja");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ICON LOGO -->
    <link rel="icon" type="images/ico" href="images/logo.png">
    <!-- /ICON LOGO -->

    <!-- TITLE -->
    <title>SMK SARIPRAJA!</title>
    <!-- /TITLE -->

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">


            <form method="post">

              <!-- INFORMASI LOGIN -->
              <h1>SMK SARIPRAJA</h1>

              <img src="images/logo.png" width="100px" height="100px">

              <h3>SISTEM INFORMASI KEUANGAN</h3>
              <!-- /INFORMASI LOGIN -->


              <!-- EMAIL , PASSWORD -->
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" />
              </div>

              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <!-- /EMAIL , PASSWORD -->


              <!-- BUTTON LOGIN -->
              <div>
                <button class="btn btn-dark" name="login">Log in</button>
              </div>
              <!-- /BUTTON LOGIN -->


              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <!-- COPY RIGHT -->
                <div>
                  <h1>Administrator!</h1>
                  <p>Copyright © <strong> SMK SARIPRAJA </strong> All Rights Reserved.</p>
                </div>
                <!-- /COPY RIGHT -->

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<!-- LOGIN -->
<?php
  if(isset($_POST['login'] )){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $ambil = $koneksi->query("SELECT * FROM admin WHERE emailadmin='$email'
                                                    AND passwordadmin='$password'");
    $yangcocok = $ambil->num_rows;
    if($yangcocok==1){
      $akun = $ambil->fetch_assoc();
      $_SESSION["admin"] = $akun;
      echo "<script>alert('Login Berhasil');</script>";
      echo "<script>location='index.php';</script>";  

    }else{
      echo "<script>alert('Login Gagal');</script>";
      echo "<script>location='login.php';</script>";
    }
  }
?>
<!-- /LOGIN -->