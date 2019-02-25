<?php   
  session_start();
  $koneksi = new mysqli("localhost","root","","sidsaripraja");
  if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
  }
?>

    <?php
    if (isset($_POST['pindahh'])) {
      $query2 =  mysqli_query($koneksi, "SELECT * FROM siswa");
      if (mysqli_num_rows($query2)) {
        while($pecah = mysqli_fetch_array($query2)) {
        $check = 'check_'.$pecah['nis'];
          if(isset($_POST[$check])){
            $kelas = $_POST['kelas'];
            $nis = $pecah['nis'];
            mysqli_query($koneksi, "UPDATE siswa SET kelas = '$kelas' WHERE nis = $nis");
            // echo "<script>alert('".$pecah['nis']."');</script>";
          }
        }
      }
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
         
          <?php
                  $ambil = $koneksi->query("SELECT * FROM jenisbayar WHERE idjenisbayar='$_GET[id]'");
                  $pecah  = $ambil->fetch_assoc(); 
                 ?> 
                 

    

          <hr>
          
            <div class="row">
              <div class="panel panel-primary">

                <div class="panel-heading">
                   <h1 class="panel-title"><strong> Tagihan Siswa Per Kelas </strong></h1>
                </div>

              <div class="panel-body">
                <div class="row">
                  <div class="col-md-5">
                        <div class="panel panel-danger">

                          <div class="panel-heading">
                            <h1 class="panel-title"><strong> Pilih Kelas </strong></h1>
                          </div>

                          <div class="panel-body">
                           

                              <div class="form-group">
                                <label for class="col-sm-4 col-sm-push-1 ">Tipe Bayar</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="tipebayar" readonly=""  value="<?php echo $pecah['tipebayar']?>">
                                </div><br><br><br>
                                <label for class="col-sm-4 col-sm-push-1 ">Jenis Bayar</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="jenisbayar" readonly=""  value="<?php echo $pecah['posbayar']?>">
                                </div><br><br><br>
                                <label for class="col-sm-4 col-sm-push-1 ">Tahun</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="tahun" readonly=""  value="<?php echo $pecah['tahunajaran']?>">
                                </div><br><br><br>
                      
                                <label for class="col-sm-4 col-sm-push-1 ">Kelas</label>
                                <div class="col-sm-5">
                                  <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">Pilih Kelas
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown-menu1">
                                <?php

                                  $ambil=$koneksi->query("SELECT * FROM kelas");
                                  while($perkelas = $ambil -> fetch_assoc()){ ?>

                                  
                                  <li><a href="katsettingtarif.php?id=<?php echo $pecah['idjenisbayar']?>&tipe=id=<?php echo $pecah['tipebayar']?>&katkelas=<?php echo $perkelas['namakelas']?>"><?php echo $perkelas['namakelas']?></a></li>
                                  <?php } ?>
                                  
                               </ul>
                                  </div>
                                

                                </div><br><br><br>
                              
                              </div>
                              <a class="btn btn-primary" href="jenisbayar.php"><i class="fa fa-share"> Kembali</i></a>

                               <button type="submit" class="pull-right btn btn-dark">
                                <i class="fa fa-search">   Tampilkan</i>
                              </button>
                              
                           


                                
                            </div>

 
                          </div>
                          <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h1 class="panel-title"><strong> Tarif Setiap Siswa Sama </strong></h1>
                          </div>
                          <div class="panel-body">
                            <div class="form-group">
                              
                                <label for class="col-sm-4 col-sm-push-2 ">Tarif (Rp.)</label>
                                <div class="col-sm-4">
                                 <input id="terapkan" type="number" class="form-control" name="tarifall" >
                                </div>
                                  <div class="col-sm-4">
                                    <button class="btn btn-warning" name="terapkan" onclick="setTarif()"> Terapkan </button>  
                                </div>
                            </div>

                          </div>
                        </div>        
                      </div>
                      <form method="post">
                        <div class="col-md-7">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h1 class="panel-title"><strong> Tentukan Tagihan Siswa </strong></h1>
                          </div>
                          <div class="panel-body">
                           
                           <table class="table table-bordered ">
                            <?php  
                            $katsettingtarif = $_GET["katkelas"];
                            $ambil=$koneksi->query("SELECT siswa.*,kelas.namakelas FROM siswa ,kelas WHERE siswa.kelas = kelas.namakelas AND siswa.kelas ='$katsettingtarif'");
                          
                            ?>
                             <?php $no=1; ?>
                             <thead>
                               <tr>
                                 <th>No.</th>
                                 <th>NIS</th>
                                 <th>Nama Siswa</th>
                                 <th>Kelas</th>
                                 <th>Besar Tagihan</th>
                               </tr>

                             </thead>
                               
                                <?php while($pecah = $ambil->fetch_assoc()){
                            ?>

                             <tbody>

                               <tr>
                                 <td><?php echo $no; ?></td>
                                 <td><?php echo $pecah['nis'] ?></td>
                                 <td><?php echo $pecah['namasiswa'] ?></td>
                                 <td><?php echo $pecah['kelas'] ?></td>
                                 <td>
                                   Rp.<input id="besartagihan" type="number" name="besartagihan" class="form-control" required>
                                 </td>
                               </tr>
                               <?php $no++; ?>
                               <?php } ?>
                             
                             </tbody>
                             
                           </table>
                         
                           <button class="btn btn-success" name="simpann"><i class="fa fa-save"></i> Simpan Tagihan</button>
                           <a class="btn btn-default" href="">Cancel</a>
                           </form>
                           <?php
                              if(isset($_POST['simpann'])){
                               

                                  $ambil=$koneksi->query("SELECT * FROM siswa where kelas = '$_GET[katkelas]'");
                                  while ($siswa = $ambil->fetch_assoc()) {

                                    //cek data jika sudah ada
                                    $ambilcek = $koneksi->query("SELECT COUNT(*) as cek FROM tagihan_bebas WHERE idJenisBayar = $_GET[id] AND nis = $siswa[nis]")->fetch_assoc();

                                    if ($ambilcek['cek'] == 0) {
                                      //insert table tagihan bulanan
                                      $koneksi->query("INSERT INTO tagihan_bebas (idJenisBayar, nis, nominal)
                                                        VALUES ($_GET[id], $siswa[nis], $_POST[besartagihan])");


                                    //ambil data tagihan bulanan terakhir
                                    // $tagihan_bebas = $koneksi->query("SELECT MAX(idTagihanBebas) as idTagihanBebas FROM tagihan_bebas")->fetch_assoc();

                                    //insert table detail tagihan bulanan
                                    // $koneksi->query("INSERT INTO detail_tagihan_bebas (idTagihanBebas,nominal)
                                    //                   VALUES ($tagihan_bebas[idTagihanBebas],$_POST[besartagihan])");
                                    }else{
                                      continue;
                                    }
                                  }
                              
                                  // echo "<script>alert('Data Telah Di Simpan');</script>";
                                  // echo "<script>location='jenisbayar.php';</script>"; 
                              }
                              ?>
                          </div>
                        </div>
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
     <script>
      function setTarif() {
        var element = document.getElementsByName('besartagihan');
        var value = document.getElementById('terapkan').value;
        for (var i = 0; i < element.length; i++) {
          element[i].value = value;
        }
      }
      function getElementsById(elementID){
        var elementCollection = new Array();
        var allElements = document.getElementsByTagName("*");
        for(i = 0; i < allElements.length; i++){
            if(allElements[i].id == elementID)
                elementCollection.push(allElements[i]);

        }
        return elementCollection;
    }
    </script>

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
