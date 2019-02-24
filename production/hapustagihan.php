<?php 	
	session_start();
	$koneksi = new mysqli("localhost","root","","sikeuangan");
	if(!isset($_SESSION['admin'])){
		echo "<script>alert('Anda Harus Login');</script>";
		echo "<script>location='login.php';</script>";
		exit();
	}

	$ambil	= $koneksi->query("SELECT * FROM tagihan WHERE idtagihan ='$_GET[id]'");
	$pecah  = $ambil->fetch_assoc(); 
	$koneksi->query("DELETE FROM tagihan WHERE idtagihan ='$_GET[id]'");
	echo "<script>alert('Data Terhapus');</script>";
	echo "<script>location='tagihan.php';</script>";
?>

