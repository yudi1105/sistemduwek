<?php 
	session_start();
	$koneksi = new mysqli("localhost","root","","sidsaripraja");	
	
?>
<?php 
	$koneksi->query("DELETE FROM tahunajaran WHERE idtahunajaran='$_GET[id]'");
	echo "<script>alert('Kelas Telah Terhapus');</script>";
	echo "<script>location='tahunajaran.php';</script>";
?>