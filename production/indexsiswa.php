<?php   
  session_start();
  $koneksi = new mysqli("localhost","root","","sikeuangan");
  if(!isset($_SESSION['siswa'])){
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
  <link rel="icon" href="images/logo.PNG" type="image/ico" />

  <title>SMK SARIPRAJA</title>

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
          <div class="navbar nav_title" style="border: 0;">
            <a class="site_title"><img src="images/logo.PNG" width="35px" height="33px"><span>SMK SARIPRAJA</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><strong>
                  <?php echo $_SESSION["siswa"]["namasiswa"] ?></strong></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="indexsiswa.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-right"></span></a>
                <li><a href="riwayatsiswa.php"><i class="fa fa-table"></i> Riwayat Pembayaran <span class="fa fa-chevron-right"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /menu footer buttons -->
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
                  <img src="images/img.jpg" alt="">
                  <?php echo $_SESSION["siswa"]["namasiswa"] ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="logoutsiswa.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="right_col" role="main">

      </div>

      <footer>
        <div class="pull-right">
          <script type="text/javascript">
            //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
            function tampilkanwaktu() {
              //buat object date berdasarkan waktu saat ini
              var waktu = new Date();
              //ambil nilai jam, 
              //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
              var sh = waktu.getHours() + "";
              //ambil nilai menit
              var sm = waktu.getMinutes() + "";
              //ambil nilai detik
              var ss = waktu.getSeconds() + "";
              //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
              document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ?
                "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
            }
          </script>Pukul:

          <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
            <span id="clock"></span>
            <?php
          $hari = date('l');
            /*$new = date('l, F d, Y', strtotime($Today));*/
            if ($hari=="Sunday") {
              echo "Minggu";
            }elseif ($hari=="Monday") {
              echo "Senin";
            }elseif ($hari=="Tuesday") {
              echo "Selasa";
            }elseif ($hari=="Wednesday") {
              echo "Rabu";
            }elseif ($hari=="Thursday") {
              echo("Kamis");
            }elseif ($hari=="Friday") {
              echo "Jum'at";
            }elseif ($hari=="Saturday") {
              echo "Sabtu";
            }
        ?>,
            <?php
          $tgl =date('d');
          echo $tgl;
          $bulan =date('F');
          if ($bulan=="January") {
            echo " Januari ";
          }elseif ($bulan=="February") {
            echo " Februari ";
          }elseif ($bulan=="March") {
            echo " Maret ";
          }elseif ($bulan=="April") {
            echo " April ";
          }elseif ($bulan=="May") {
            echo " Mei ";
          }elseif ($bulan=="June") {
            echo " Juni ";
          }elseif ($bulan=="July") {
            echo " Juli ";
          }elseif ($bulan=="August") {
            echo " Agustus ";
          }elseif ($bulan=="September") {
            echo " September ";
          }elseif ($bulan=="October") {
            echo " Oktober ";
          }elseif ($bulan=="November") {
            echo " November ";
          }elseif ($bulan=="December") {
            echo " Desember ";
        }
        $tahun=date('Y');
        echo $tahun;
      ?>
        </div>
        <div class="clearfix"></div>
      </footer>
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