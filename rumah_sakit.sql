-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 03:42 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE IF NOT EXISTS `detail_resep` (
  `id_detail` char(15) NOT NULL,
  `id_obat` char(15) NOT NULL,
  `id_resep` char(15) NOT NULL,
  `dosis` varchar(30) NOT NULL,
  `aturan_pakai` varchar(30) NOT NULL,
  `jumlah` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` char(16) NOT NULL,
  `id_poli` char(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `jk_dokter` enum('P','L') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_leb`
--

CREATE TABLE IF NOT EXISTS `hasil_leb` (
  `id_halillab` char(15) NOT NULL,
  `id_daftar` char(15) NOT NULL,
  `id_lab` char(15) NOT NULL,
  `id_pasien` char(15) NOT NULL,
  `waktu` date NOT NULL,
  `hasilleb` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE IF NOT EXISTS `jenis_obat` (
  `id_jenis` char(3) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `id_leb` char(2) NOT NULL,
  `nama_leb` varchar(30) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` char(5) NOT NULL,
  `id_jenis` char(3) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `tarif` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `kegunaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` char(16) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_bayar` char(15) NOT NULL,
  `id_pasien` char(15) NOT NULL,
  `id_daftar` char(15) NOT NULL,
  `id_petugas` char(15) NOT NULL,
  `id_resep` char(15) NOT NULL,
  `waktu` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `jenis_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` char(15) NOT NULL,
  `id_pasien` char(15) NOT NULL,
  `id_petugas` char(15) NOT NULL,
  `waktu` date NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` char(16) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
  `id_poli` char(10) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `id_rm` char(15) NOT NULL,
  `id_dokter` char(15) NOT NULL,
  `id_pasien` char(15) NOT NULL,
  `id_daftar` char(15) NOT NULL,
  `gejala` varchar(30) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` char(15) NOT NULL,
  `id_daftar` char(15) NOT NULL,
  `id_pasien` char(15) NOT NULL,
  `waktu` date NOT NULL,
  `nama_obat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` char(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(10) NOT NULL,
  `id_dokter` char(15) NOT NULL,
  `id_petugas` char(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `hasil_leb`
--
ALTER TABLE `hasil_leb`
  ADD PRIMARY KEY (`id_halillab`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_leb`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
