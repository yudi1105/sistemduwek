<?php 
	session_start();
	session_destroy();
	echo "<script>alert('Silahkan Login Kembali');</script>";
	echo "<script>location='loginsiswa.php';</script>";
?>