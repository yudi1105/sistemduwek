<?php   
  session_start();
  $koneksi = new mysqli("localhost","root","","sidsaripraja");
  if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
  }
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
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <!-- navbar nav_title -->
          <div class="navbar nav_title" style="border: 0;">
            <a class="site_title"><img src="images/logo.png" width="35px" height="35px"><span> SMK SARIPRAJA</span></a>
          </div>
          <!-- /navbar nav_title -->


          <div class="clearfix"></div>


          <!-- menu profile quick info -->
          <div class="profile clearfix">





            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Selamat Datang,</span> <br>
              <span>
                <?php echo $_SESSION["admin"]["namaadmin"] ?></span>
            </div>




          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">


              <h3>MENU UTAMA</h3>


              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-right"></span></a></li>



                <li><a><i class="fa fa-database"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tahunajaran.php">Tahun Ajaran</a></li>
                    <li><a href="kelas.php">Kelas</a></li>
                    <li><a href="siswa.php">Siswa</a></li>
                    <li><a href="kenaikankelas.php">Kenaikan Kelas</a></li>
                    <li><a href="kelulusan.php">Kelulusan</a></li>
                  </ul>
                </li>




                <li><a><i class="fa fa-money"></i> Keuangan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="posbayar.php">Jenis Tagihan</a></li>
                    <li><a href="jenisbayar.php">Setting Tagihan</a></li>
                    <li><a href="jurnalumum.php">Jurnal Umum</a></li>
                  </ul>
                </li>






                <li><a href="pembayaransiswa.php"><i class="fa fa-credit-card"></i> Pembayaran Siswa <span class="fa fa-chevron-right"></span></a></li>






                <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Lap. Data Siswa</a></li>
                    <li><a href="chartjs2.html">Lap. Pembayaran Per Kelas</a></li>
                    <li><a href="morisjs.html">Lap. Pembayaran Per Bulan</a></li>
                    <li><a href="echarts.html">Rekapitulasi Pembayaran</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>


      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">


                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/user.png" alt="">
                  <?php echo $_SESSION["admin"]["namaadmin"] ?>
                  <span class=" fa fa-angle-down"></span>
                </a>


                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="index.php"> Home</a></li>


                  <li>
                    <a href="editadmin.php">
                      <span>Edit Profile</span>
                    </a>
                  </li>


                  <li><a href="identitas.php">Identitas Sekolah</a></li>



                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>


                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="row">
          <h1> <i class="fa fa-edit"></i> <strong> Edit Siswa </strong> </h1>
        </div>

        <hr>

        <div class="row">
          <div class="panel panel-primary">

            <div class="panel-heading">
              <h1 class="panel-title"><strong> Edit Siswa </strong></h1>
            </div>

            <div class="panel-body">
              <?php
            $ambil = $koneksi->query("SELECT * FROM siswa WHERE nis='$_GET[nis]'");
            $pecah  = $ambil->fetch_assoc(); 
          ?>
              <div class="col-sm-8 col-sm-offset-2">
                <form method="post">
                  <div class="form-group">
                    <h4><label>NIS</label>
                      <input type="number" class="form-control" name="nis" value="<?php echo $pecah['nis']; ?>">
                      <h4>
                  </div>
                  <div class="form-group">
                    <h4><label>NISN</label>
                      <input type="number" class="form-control" name="nisn" value="<?php echo $pecah['nisn']; ?>">
                      <h4>
                  </div>
                  <div class="form-group">
                    <h4><label>Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $pecah['namasiswa']; ?>">
                      <h4>
                  </div>
                  <div class="form-group">
                    <h4><label>Kelamin</label>

                      <select class="form-control" name="status">
                        <option value="<?php echo $pecah['jeniskelamin']; ?> ">
                          <?php echo $pecah['jeniskelamin']; ?>
                        </option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                      </select>
                      <h4>

                  </div>
                  <div>
                    <h4><label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>">
                      <h4>
                  </div>
                  <div>
                    <h4><label>Agama</label>
                      <input type="text" class="form-control" name="agama" value="<?php echo $pecah['agama']; ?>">
                      <h4>
                  </div>
                  <div class="form-group">
                    <h4><label>Kelas</label>

                      <select class="form-control" name="kelas">
                        <option value="<?php echo $pecah['kelas']; ?> ">
                          <?php echo $pecah['kelas']; ?>
                        </option>
                        <?php

                        $ambil=$koneksi->query("SELECT * FROM kelas");
                        while($perkelas = $ambil -> fetch_assoc()){ ?>

                        <option value="<?php echo $perkelas['namakelas']; ?> ">
                          <?php echo $perkelas['namakelas']; ?>
                        </option>
                        <?php } ?>
                      </select>
                      <h4>

                  </div>
                  <div class="form-group">
                    <h4><label>Status</label>

                      <select class="form-control" name="statussiswa">
                        <option value="<?php echo $pecah['status']; ?> ">
                          <?php echo $pecah['status']; ?>
                        </option>
                        <option value="Aktif">Aktif</option>
                        <option value="Lulus">Lulus</option>
                      </select>
                      <h4>

                  </div>
                  <button class="btn btn-dark" name="ubah"><i class="fa fa-edit"></i> Ubah</button>
                  <a href="siswa.php" class="btn btn-default"><i class="fa fa-share"></i> Cancel</a>
                </form>

                <?php
                if(isset($_POST['ubah'])){
                  $koneksi->query("UPDATE siswa SET nis='$_POST[nis]',
                                                   nisn='$_POST[nisn]',
                                                   namasiswa='$_POST[nama]',
                                                   jeniskelamin='$_POST[status]',
                                                   alamat='$_POST[alamat]',
                                                   agama='$_POST[agama]',
                                                   kelas='$_POST[kelas]',
                                                   status='$_POST[statussiswa]'   


                                    WHERE nis='$_GET[nis]'");

                  echo "<script>alert('Data Telah Di Ubah');</script>";
                  echo "<script>location='siswa.php';</script>";  
        
                }
            ?>

              </div>
            </div>

          </div>
        </div>


      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          <p>Copyright © <strong> SMK SARIPRAJA </strong> All Rights Reserved.</p>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../vendors/Flot/jquery.flot.js"></script>
  <script src="../vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../vendors/Flot/jquery.flot.time.js"></script>
  <script src="../vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>