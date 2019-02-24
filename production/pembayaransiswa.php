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
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
                <span><?php echo $_SESSION["admin"]["namaadmin"] ?></span>
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
            <h1> <i class="fa fa-money"></i> <strong> Pembayaran Siswa </strong> </h1>
          </div>

          <hr>

          <div class="row">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <h1 class="panel-title"><strong>Pembayaran Siswa</strong></h1>
              </div>

              <div class="panel-body">
                <form method="get" action="pembayaransiswa.php">
                  
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-push-1">Tahun </label>
                  </div>
                  <div class="col-sm-2">
                       <select class="form-control" name="tahunajaran" required="">
                            <option value="">-- Pilih Tahun --</option>

                            <?php
                            $ambil=$koneksi->query("SELECT * FROM tahunajaran");
                              while($kelas = $ambil -> fetch_assoc()){ ?>

                            <option value="<?php echo $kelas['tahunajaran'] ?>"><?php echo $kelas['tahunajaran'] ?></option> 


                            <?php } ?>                     

                          </select>                  
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 col-sm-push-1 "> Cari NIS </label>
                  </div>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" name="nis">
                    </div>

                  <!-- <a href="pembayaransiswa.php?&tahun=<?php echo $kelas['tahunajaran']?>" class="btn btn-dark"><i class="fa fa-search"></i> Cari Siswa</a> -->
                  <button type="submit" class="btn btn-dark">
                    <i class="fa fa-search">   Cari Siswa</i>
                  </button>
        
                </form>
              </div>

            </div>

            <?php 

                if (isset($_GET['tahunajaran']) && $_GET['nis']) { ?>
                  <div class="panel panel-success">

                    <div class="panel-heading">
                       <h1 class="panel-title"><strong>Informasi Siswa</strong></h1>

                    </div>
                    
        </div>

                    <?php   

                            $ambil=$koneksi->query("SELECT * FROM siswa WHERE nis = $_GET[nis]");
                            $siswa = $ambil->fetch_assoc();

                    ?>

                    <div class="panel-body">
                      <div class="form-group">
                        <table class="table table-striped">
                          <tr>
                            <td width="200px">Tahun Ajaran</td>
                            <td width="4px">:</td>
                            <td><?php echo $_GET['tahunajaran'] ?></td>
                          </tr>
                          <tr>
                            <td width="200px">NIS</td>
                            <td width="4px">:</td>
                            <td><?php echo $siswa['nis'] ?></td>
                          </tr>
                          <tr>
                            <td width="200px">NISN</td>
                            <td width="4px">:</td>
                            <td><?php echo $siswa['nisn'] ?></td>
                          </tr>
                          <tr>
                            <td width="200px">Nama Siswa</td>
                            <td width="4px">:</td>
                            <td><?php echo $siswa['namasiswa'] ?></td>
                          </tr>
                          <tr>
                            <td width="200px">Kelas</td>
                            <td width="4px">:</td>
                            <td><?php echo $siswa['kelas'] ?></td>
                          </tr>
                        </table>
                      </div>
                      
                    </div>
                  </div>
                  <div class="panel panel-warning">
                    <div class="panel-heading">
                      <h1 class="panel-title"><strong>Tagihan Bulanan</strong></h1>
                    </div>

                    <?php 
                     
                        $query = "SELECT 
                                    tagihan_bulanan.idTagihanBulanan, jenisbayar.keteranganpos, 
                                    SUM(detail_tagihan_bulanan.nominal) as total_tagihan
                                  from 
                                    detail_tagihan_bulanan 
                                  INNER JOIN 
                                    tagihan_bulanan 
                                  ON 
                                    tagihan_bulanan.idTagihanBulanan = detail_tagihan_bulanan.idTagihanBulanan
                                  INNER JOIN
                                    jenisbayar
                                  ON
                                    jenisbayar.idjenisbayar = tagihan_bulanan.idJenisBayar
                                  WHERE
                                    tagihan_bulanan.nis = $_GET[nis] AND jenisbayar.tahunajaran = '$_GET[tahunajaran]'
                                  GROUP BY
                                    detail_tagihan_bulanan.idTagihanBulanan";

                     ?>

                    <div class="panel-body">
                      <table class="table table-striped table-hover">
                       <thead>
                        <th>No</th>
                        <th>Jenis Pembayaran</th>
                        <th>Total Tagihan</th>
                        <th>Dibayar</th>
                        <th>Status Bayar</th>
                        <th>Bayar</th>
                      </thead>
                      <tbody>
                        <?php 

                          $ambil=$koneksi->query($query);
                          $no = 1;
                          while ($bulanan = $ambil->fetch_assoc()) { 

                              $ambil2 = $koneksi->query("SELECT IFNULL(SUM(nominal), 0) as dibayar from detail_tagihan_bulanan WHERE idTagihanBulanan = $bulanan[idTagihanBulanan] AND detail_tagihan_bulanan.status = 'LUNAS'");

                              $detail = $ambil2->fetch_assoc();

                              $status_bayar = "";
                              if ($bulanan['total_tagihan'] == $detail['dibayar']) {
                                $status_bayar = "LUNAS";
                              }elseif ($detail['dibayar'] < $bulanan['total_tagihan']&& $detail['dibayar'] != 0){
                                $status_bayar = "BELUM LENGKAP";
                              }else{
                                $status_bayar ="BELUM BAYAR";
                              }
                            ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $bulanan['keteranganpos'] ?></td>
                              <td><?php echo $bulanan['total_tagihan'] ?></td>
                              <td><?php echo $detail['dibayar'] ?></td>
                              <td><?php echo $status_bayar ?></td>
                              <td>
                                <a href="bayar.php?tagihanbulanan=<?php echo $bulanan['idTagihanBulanan']?>" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i> Bayar</a>
                              </td>
                            </tr>

                        <?php $no++; } ?>
                        
                      </tbody>
                      </table>
                    </div>

                  </div>


                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h1 class="panel-title"><strong>Tagihan Bebas</strong></h1>
                    </div>
                  <div class="panel-body">
                      <table class="table table-striped table-hover">
                       <thead>
                        <th>No</th>
                        <th>Jenis Pembayaran</th>
                        <th>Total Tagihan</th>
                        <th>Dibayar</th>
                        <th>Status Bayar</th>
                        <th>Bayar</th>
                        <th></th>
                      </thead>
                      <tbody>

                    <?php 
                     
                        $query = "SELECT 
                                    tagihan_bebas.idTagihanBebas, jenisbayar.keteranganpos, 
                                    SUM(detail_tagihan_bebas.nominal) as total_tagihan
                                  from 
                                    detail_tagihan_bebas 
                                  INNER JOIN 
                                    tagihan_bebas
                                  ON 
                                    tagihan_bebas.idTagihanBebas = detail_tagihan_bebas.idTagihanBebas
                                  INNER JOIN
                                    jenisbayar
                                  ON
                                    jenisbayar.idjenisbayar = tagihan_bebas.idJenisBayar
                                  WHERE
                                    tagihan_bebas.nis = $_GET[nis] AND jenisbayar.tahunajaran = '$_GET[tahunajaran]'
                                  GROUP BY
                                    detail_tagihan_bebas.idTagihanBebas";

                          $ambil=$koneksi->query($query);
                          $no = 1;
                          while ($bebas = $ambil->fetch_assoc()) { 

                              $ambil2 = $koneksi->query("SELECT IFNULL(SUM(nominal), 0) as dibayar from detail_tagihan_bebas WHERE idTagihanBebas = $bebas[idTagihanBebas] AND detail_tagihan_bebas.status = 'LUNAS'");

                              $detail = $ambil2->fetch_assoc();

                              $status_bayar = "";
                              if ($bebas['total_tagihan'] == $detail['dibayar']) {
                                $status_bayar = "LUNAS";
                              }elseif ($detail['dibayar'] < $bebas['total_tagihan']&& $detail['dibayar'] != 0){
                                $status_bayar = "BELUM LENGKAP";
                              }else{
                                $status_bayar ="BELUM BAYAR";
                              }
                            ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $bebas['keteranganpos'] ?></td>
                              <td><?php echo $bebas['total_tagihan'] ?></td>
                              <td><?php echo $detail['dibayar'] ?></td>
                              <td><?php echo $status_bayar ?></td>
                              <td>
                                <a href="bayarbebas.php?tagihanbebas=<?php echo $bebas['idTagihanBebas']?>" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i> Bayar</a>
                              </td>
                              <td>
                                <a class="btn btn-success btn-xs" href=""><span class="fa fa-print"> Cetak Pembayaran</span></a>

                              </td>
                            </tr>

                        <?php $no++; } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <br>
                <?php }?>
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
