<?php 
	session_start();
	$koneksi = new mysqli("localhost","root","","sidsaripraja");	
	
?>
<?php 
	$koneksi->query("DELETE FROM jenisbayar WHERE idjenisbayar='$_GET[id]'");
	echo "<script>alert('Kelas Telah Terhapus');</script>";
	echo "<script>location='kelas.php';</script>";
?>