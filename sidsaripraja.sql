-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 05:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidsaripraja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `namaadmin` varchar(100) NOT NULL,
  `emailadmin` varchar(100) NOT NULL,
  `passwordadmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `namaadmin`, `emailadmin`, `passwordadmin`) VALUES
(1, 'M Rifki Maulana', 'mrifkimaulana1998@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tagihan_bebas`
--

CREATE TABLE `detail_tagihan_bebas` (
  `idDetailTagihanBebas` int(11) NOT NULL,
  `idTagihanBebas` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tagihan_bulanan`
--

CREATE TABLE `detail_tagihan_bulanan` (
  `idDetailTagihanBulanan` int(11) NOT NULL,
  `idTagihanBulanan` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS','','') NOT NULL DEFAULT 'BELUM LUNAS'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_tagihan_bulanan`
--

INSERT INTO `detail_tagihan_bulanan` (`idDetailTagihanBulanan`, `idTagihanBulanan`, `bulan`, `nominal`, `status`) VALUES
(1, 1, 'Januari', 20, 'BELUM LUNAS'),
(2, 1, 'Februari', 20, 'BELUM LUNAS'),
(3, 1, 'Maret', 20, 'BELUM LUNAS'),
(4, 1, 'April', 20, 'BELUM LUNAS'),
(5, 1, 'Mei', 20, 'BELUM LUNAS'),
(6, 1, 'Juni', 20, 'BELUM LUNAS'),
(7, 1, 'Juli', 20, 'BELUM LUNAS'),
(8, 1, 'Agustus', 20, 'BELUM LUNAS'),
(9, 1, 'September', 20, 'BELUM LUNAS'),
(10, 1, 'Oktober', 20, 'BELUM LUNAS'),
(11, 1, 'November', 20, 'BELUM LUNAS'),
(12, 1, 'Desember', 20, 'BELUM LUNAS'),
(13, 2, 'Januari', 20, 'BELUM LUNAS'),
(14, 2, 'Februari', 20, 'BELUM LUNAS'),
(15, 2, 'Maret', 20, 'BELUM LUNAS'),
(16, 2, 'April', 20, 'BELUM LUNAS'),
(17, 2, 'Mei', 20, 'BELUM LUNAS'),
(18, 2, 'Juni', 20, 'BELUM LUNAS'),
(19, 2, 'Juli', 20, 'BELUM LUNAS'),
(20, 2, 'Agustus', 20, 'BELUM LUNAS'),
(21, 2, 'September', 20, 'BELUM LUNAS'),
(22, 2, 'Oktober', 20, 'BELUM LUNAS'),
(23, 2, 'November', 20, 'BELUM LUNAS'),
(24, 2, 'Desember', 20, 'BELUM LUNAS'),
(25, 3, 'Januari', 20, 'BELUM LUNAS'),
(26, 3, 'Februari', 20, 'BELUM LUNAS'),
(27, 3, 'Maret', 20, 'BELUM LUNAS'),
(28, 3, 'April', 20, 'BELUM LUNAS'),
(29, 3, 'Mei', 20, 'BELUM LUNAS'),
(30, 3, 'Juni', 20, 'BELUM LUNAS'),
(31, 3, 'Juli', 20, 'BELUM LUNAS'),
(32, 3, 'Agustus', 20, 'BELUM LUNAS'),
(33, 3, 'September', 20, 'BELUM LUNAS'),
(34, 3, 'Oktober', 20, 'BELUM LUNAS'),
(35, 3, 'November', 20, 'BELUM LUNAS'),
(36, 3, 'Desember', 20, 'BELUM LUNAS'),
(37, 4, 'Januari', 20, 'BELUM LUNAS'),
(38, 4, 'Februari', 20, 'BELUM LUNAS'),
(39, 4, 'Maret', 20, 'BELUM LUNAS'),
(40, 4, 'April', 20, 'BELUM LUNAS'),
(41, 4, 'Mei', 20, 'BELUM LUNAS'),
(42, 4, 'Juni', 20, 'BELUM LUNAS'),
(43, 4, 'Juli', 20, 'BELUM LUNAS'),
(44, 4, 'Agustus', 20, 'BELUM LUNAS'),
(45, 4, 'September', 20, 'BELUM LUNAS'),
(46, 4, 'Oktober', 20, 'BELUM LUNAS'),
(47, 4, 'November', 20, 'BELUM LUNAS'),
(48, 4, 'Desember', 20, 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `idsekolah` int(11) NOT NULL,
  `namasekolah` varchar(100) NOT NULL,
  `alamatsekolah` varchar(100) NOT NULL,
  `nipkepsek` int(100) NOT NULL,
  `namakepsek` varchar(100) NOT NULL,
  `niptu` int(100) NOT NULL,
  `namatu` varchar(100) NOT NULL,
  `nipbendahara` int(100) NOT NULL,
  `namabendahara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`idsekolah`, `namasekolah`, `alamatsekolah`, `nipkepsek`, `namakepsek`, `niptu`, `namatu`, `nipbendahara`, `namabendahara`) VALUES
(1, 'SMK SARIPRAJA SURABAYA', 'JL. LEMPUNG PERDANA NO. 2, MANUKAN WETAN, TANDES, SURABAYA. TELP.(031)-7419719', 1, 'M. Rinto Hermawan, S.Fil.l., M.MPd.', 1, 'Novitriani UMMUL', 1, 'Sintya Alni Amri');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbayar`
--

CREATE TABLE `jenisbayar` (
  `idjenisbayar` int(11) NOT NULL,
  `posbayar` varchar(100) NOT NULL,
  `keteranganpos` varchar(100) NOT NULL,
  `tipebayar` varchar(100) NOT NULL,
  `tahunajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisbayar`
--

INSERT INTO `jenisbayar` (`idjenisbayar`, `posbayar`, `keteranganpos`, `tipebayar`, `tahunajaran`) VALUES
(1, 'SPP', 'SPP', 'Bulanan', '2018/2019'),
(2, 'Seragam', 'Seragam Biru Putih', 'Bebas', '2018/2019'),
(5, 'Wali 5', 'Wali 5', 'Bebas', '2018/2019'),
(6, 'Buku Unas', 'Buku Unas', 'Bebas', '2018/2019'),
(7, 'SPP', 'SPP tahun ajaran 2019/2020', 'Bulanan', '2019/2020'),
(8, 'TAS', 'tas', 'Bulanan', '2020/2021'),
(9, 'Tour Bali', 'tour bali', 'Bulanan', '2020/2021'),
(10, 'Buku Unas', 'Buku Unas', 'Bulanan', '2019/2020'),
(11, 'Buku Unas', 'Buku Unas', 'Bulanan', '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `namakelas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`, `keterangan`) VALUES
(1, 'X TKR 1', '10 TEKNIK KENDARAAN RINGAN 1'),
(2, 'X TPM 1', '10 TEKNIK PERMESINAN 1'),
(3, 'XI TKR 1', '11 TEKNIK KENDARAAN RINGAN 1 '),
(4, 'XI TPM 1', '11 TEKNIK PERMESINAN 1'),
(5, 'XII TKR 1', '12 TEKNIK KENDARAAN RINGAN 1'),
(6, 'XII TPM 1', '12 TEKNIK PERMESINAN 1');

-- --------------------------------------------------------

--
-- Table structure for table `posbayar`
--

CREATE TABLE `posbayar` (
  `idposbayar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posbayar`
--

INSERT INTO `posbayar` (`idposbayar`, `nama`, `keterangan`) VALUES
(1, 'SPP', 'Bulanan'),
(2, 'Seragam', 'Bebas'),
(3, 'Wali 5', 'Bebas'),
(5, 'Tour Bali', 'Bebas'),
(6, 'Buku Unas', ''),
(7, 'TAS', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nisn` int(100) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `namasiswa`, `jeniskelamin`, `alamat`, `agama`, `kelas`, `status`) VALUES
(1, 1, 'M Rifki Maulana', 'L ', 'JL Dukuh Menanggal 6 No 17 Surabaya', 'Islam', 'X TKR 1 ', 'Aktif   '),
(2, 2, 'Yoga Aditya Rizqullah', 'L ', 'JL Dukuh Menanggal 6 No 21 Surabaya', 'Islam', 'X TKR 1  ', 'Aktif'),
(3, 3, 'Ilma Nia', 'P ', 'JL Dukuh Menanggal 6 No 18 Surabaya', 'Islam', 'X TKR 1  ', 'Aktif'),
(4, 4, 'Amir Hamza', 'L', 'JL Dukuh Menanggal 6 No 23 Surabaya', 'Islam', 'XI TPM 1 ', 'Aktif'),
(5, 5, 'Wahyu Pratama', 'L', 'JL Dukuh Menanggal 6 No 1 Surabaya', 'Islam', 'X TKR 1', 'Aktif'),
(6, 6, 'M Nizam Al Hazbi', 'L', 'JL Dukuh Menanggal 6 No 2 Surabaya', 'Islam', 'X TPM 1', 'Aktif'),
(7, 7, 'Imron Rosadi', 'L', 'JL Dukuh Menanggal 6 No 18 Sidoarjo', 'Islam', 'X TPM 1', 'Aktif'),
(8, 8, 'Ilham Zaky Dhiya Ulhaq', 'L', 'JL Dukuh Menanggal 6 No 18 Cepu', 'Islam', 'X TKR 1', 'Aktif'),
(9, 9, 'Aldi Rizaldi', 'L', 'JL Dukuh Menanggal 6 No 99 Sidoarjo', 'Islam', 'X TPM 1', 'Aktif'),
(10, 10, 'Muhammad Rizal', 'L', 'JL Dukuh Menanggal 6 No 100 Surabaya', 'Islam', 'X TKR 1', 'Aktif'),
(11, 11, 'Risky Pratama', 'L', 'JL Dukuh Menanggal 6 No 101 Surabaya', 'Islam', 'X TPM 1', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_bebas`
--

CREATE TABLE `tagihan_bebas` (
  `idTagihanBebas` int(11) NOT NULL,
  `idJenisBayar` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan_bebas`
--

INSERT INTO `tagihan_bebas` (`idTagihanBebas`, `idJenisBayar`, `nis`, `nominal`) VALUES
(5, 2, 1, 50000),
(6, 2, 2, 50000),
(7, 2, 3, 50000),
(8, 2, 5, 50000),
(9, 2, 8, 50000),
(10, 2, 10, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_bulanan`
--

CREATE TABLE `tagihan_bulanan` (
  `idTagihanBulanan` int(11) NOT NULL,
  `idJenisBayar` int(11) NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan_bulanan`
--

INSERT INTO `tagihan_bulanan` (`idTagihanBulanan`, `idJenisBayar`, `nis`) VALUES
(1, 1, 6),
(2, 1, 7),
(3, 1, 9),
(4, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `idtahunajaran` int(11) NOT NULL,
  `tahunajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunajaran`
--

INSERT INTO `tahunajaran` (`idtahunajaran`, `tahunajaran`) VALUES
(1, '2018/2019'),
(3, '2019/2020'),
(4, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `tipebayar`
--

CREATE TABLE `tipebayar` (
  `idtipebayar` int(11) NOT NULL,
  `namatipebayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipebayar`
--

INSERT INTO `tipebayar` (`idtipebayar`, `namatipebayar`) VALUES
(1, 'Bulanan'),
(2, 'Bebas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `detail_tagihan_bebas`
--
ALTER TABLE `detail_tagihan_bebas`
  ADD PRIMARY KEY (`idDetailTagihanBebas`);

--
-- Indexes for table `detail_tagihan_bulanan`
--
ALTER TABLE `detail_tagihan_bulanan`
  ADD PRIMARY KEY (`idDetailTagihanBulanan`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`idsekolah`);

--
-- Indexes for table `jenisbayar`
--
ALTER TABLE `jenisbayar`
  ADD PRIMARY KEY (`idjenisbayar`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `posbayar`
--
ALTER TABLE `posbayar`
  ADD PRIMARY KEY (`idposbayar`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tagihan_bebas`
--
ALTER TABLE `tagihan_bebas`
  ADD PRIMARY KEY (`idTagihanBebas`);

--
-- Indexes for table `tagihan_bulanan`
--
ALTER TABLE `tagihan_bulanan`
  ADD PRIMARY KEY (`idTagihanBulanan`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`idtahunajaran`);

--
-- Indexes for table `tipebayar`
--
ALTER TABLE `tipebayar`
  ADD PRIMARY KEY (`idtipebayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_tagihan_bebas`
--
ALTER TABLE `detail_tagihan_bebas`
  MODIFY `idDetailTagihanBebas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_tagihan_bulanan`
--
ALTER TABLE `detail_tagihan_bulanan`
  MODIFY `idDetailTagihanBulanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `idsekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenisbayar`
--
ALTER TABLE `jenisbayar`
  MODIFY `idjenisbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posbayar`
--
ALTER TABLE `posbayar`
  MODIFY `idposbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tagihan_bebas`
--
ALTER TABLE `tagihan_bebas`
  MODIFY `idTagihanBebas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tagihan_bulanan`
--
ALTER TABLE `tagihan_bulanan`
  MODIFY `idTagihanBulanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `idtahunajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipebayar`
--
ALTER TABLE `tipebayar`
  MODIFY `idtipebayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
