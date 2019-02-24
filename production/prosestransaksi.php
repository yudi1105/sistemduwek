<?php 
	$koneksi = new mysqli("localhost","root","","sidsaripraja");
	if($_GET['act'] == 'bayar'){
		$idtagihan = $_GET['id'];
		$idtagbulanan = $_GET['idtagihan'];
		mysqli_query($koneksi, "UPDATE detail_tagihan_bulanan SET status = 'LUNAS' WHERE idDetailTagihanBulanan = '$idtagihan' ");
		header('location:bayar.php?tagihanbulanan='.$idtagbulanan);
	}elseif($_GET['act'] == 'batal'){
		$idtagihan = $_GET['id'];
		$idtagbulanan = $_GET['idtagihan'];

		mysqli_query($koneksi, "UPDATE detail_tagihan_bulanan SET status = 'BELUM LUNAS' WHERE idDetailTagihanBulanan = '$idtagihan'");

		header('location:bayar.php?tagihanbulanan='.$idtagbulanan);
		  
	}
 ?>