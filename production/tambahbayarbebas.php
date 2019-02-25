<?php
    session_start();
    $koneksi = new mysqli("localhost","root","","sidsaripraja");
    if(!isset($_SESSION['admin'])){
      echo "<script>alert('Anda Harus Login');</script>";
      echo "<script>location='login.php';</script>";
      exit();
    }
    $idTagihanBebas = $_POST['idTagihanBebas'];
    $nominal = $_POST['jumlahbayar'];
    $tanggal = date('Y-m-d', strtotime($_POST['tglbayar']));
    $keterangan = $_POST['ketbayar'];
    $koneksi->query(
        "INSERT INTO detail_tagihan_bebas(
            idTagihanBebas,
            nominal,
            tanggal,
            keterangan
        )
        VALUES(
            $idTagihanBebas,
            $nominal,
            '$tanggal',
            '$keterangan'
        )"
    );
    echo "<script>location='bayarbebas.php?tagihanbebas=$idTagihanBebas';</script>";
?>