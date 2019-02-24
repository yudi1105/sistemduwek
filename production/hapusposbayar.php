<?php 
	session_start();
	$koneksi = new mysqli("localhost","root","","sidsaripraja");	
	
?>
<?php 
	$koneksi->query("DELETE FROM posbayar WHERE idposbayar='$_GET[id]'");
	echo "<script>alert('Pos Bayar Telah Terhapus');</script>";
	echo "<script>location='kelas.php';</script>";
?>