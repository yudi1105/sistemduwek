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
 <html>
 

<head>
    <title> Cetak Bukti Pembayaran </title>
    <style type="text/css">
    body {
      font-family: arial;
    }

    @media print {
      .no-print {
        display: none;
      }

      table {
        border-collapse: collapse;
      }
    }
  </style>
   </head>
 

<body>
    <CENTER>
    <h4> SMK SARIPRAJA<br>JL. LEMPUNG PERDANA NO. 2, MANUKAN WETAN, TANDES, SURABAYA. TELP.(031)-7419719
      <hr><STRONG>BUKTI PEMBAYARAN</STRONG><br>SPP Tahun : </h4>
  </CENTER>
    
  <?php   

        $ambil=$koneksi->query("SELECT tagihan_bulanan.*, siswa.nis,siswa.nisn,siswa.namasiswa,siswa.kelas,jenisbayar.keteranganpos FROM tagihan_bulanan INNER JOIN siswa ON tagihan_bulanan.nis = siswa.nis INNER JOIN jenisbayar ON tagihan_bulanan.idJenisBayar = jenisbayar.idjenisbayar  WHERE idTagihanBulanan = '$_GET[id]' OR idTagihanBulanan = '$_GET[idtagihan]' ");
           $tag = $ambil->fetch_assoc();
                       

                    ?>
    <table>
       <tr>
          <td width="100px"> Nama Siswa </td>
          <td width="4"> : </td>
          <td>
        <?php echo $tag['namasiswa']; ?>
      </td>
         </tr>
        <tr>
          <td width="100px"> NIS </td>
          <td width="4"> : </td>
          <td>
        <?php echo $tag['nis']; ?>
      </td>
         </tr>
          <tr>
          <td width="100px"> Kelas </td>
          <td width="4"> : </td>
          <td>
        <?php echo $tag['kelas']; ?>
      </td>
         </tr>
      </table>
    
  <hr>
  <table width="100%" border="1" cellspacing="0" cellpadding="4">
       <tr>
          <th> Bulan </th>
          <th> Tanggal Bayar </th>
          <th> Jumlah </th>
         </tr>
       
    <?php 	
$ambil1=$koneksi->query("SELECT* FROM detail_tagihan_bulanan WHERE idTagihanBulanan='$_GET[id]'");
 ?>
         <tr>
             <td align='center'>
        <?php echo $tag['bulan'] ?>
      </td>
             <td> </td>
             <td> </td>
            </tr>
          
        
      
      </table>
    
</body>

</html>