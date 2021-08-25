-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 02:35 AM
-- Server version: 5.5.20-log
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_athena_emr`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getpasienperbulan`(IN tanggalawal VARCHAR(255), IN tanggalakhir VARCHAR(255), IN iddokter VARCHAR(255))
BEGIN
SELECT pendaftaran.`waktu` AS "Waktu", pasien.`nama_pasien` AS "Nama", dokter.`nama_dokter` AS "Nama Dokter"
FROM pendaftaran, pasien, dokter WHERE pendaftaran.`id_pasien` = pasien.`id_pasien` AND dokter.`id_dokter` = pendaftaran.`id_dokter`
AND pendaftaran.`id_dokter` = iddokter
AND DATE_FORMAT(pendaftaran.`waktu`, "%m-%Y") >= "tanggalawal"
AND DATE_FORMAT(pendaftaran.`waktu`, "%m-%Y") <= "tanggalakhir"
GROUP BY pasien.`nama_pasien`;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `bayarhariini`
--
CREATE TABLE IF NOT EXISTS `bayarhariini` (
`id_bayar` varchar(15)
,`id_daftar` varchar(15)
,`id_petugas` varchar(10)
,`jenis_biaya` varchar(20)
,`biaya` double
,`waktu` date
,`no_antrian` int(11)
,`id_poli` varchar(8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftartoday`
--
CREATE TABLE IF NOT EXISTS `daftartoday` (
`id_daftar` varchar(10)
,`id_petugas` varchar(10)
,`id_pasien` varchar(15)
,`id_poli` varchar(8)
,`id_dokter` varchar(15)
,`waktu` timestamp
,`no_antrian` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE IF NOT EXISTS `detail_resep` (
  `id_resep` varchar(18) NOT NULL,
  `id_obat` varchar(10) NOT NULL,
  `dosis` varchar(100) NOT NULL,
  `satuan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `aturan_pakai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`id_resep`, `id_obat`, `dosis`, `satuan`, `jumlah`, `aturan_pakai`) VALUES
('RSP-A01', 'OBAT-001', '5gram', 2, 4, '2x1'),
('RSP-A03', 'OBAT-001', '5gram', 2, 4, '2X1');

--
-- Triggers `detail_resep`
--
DELIMITER $$
CREATE TRIGGER `ambilresep` AFTER INSERT ON `detail_resep`
 FOR EACH ROW BEGIN
UPDATE obat SET obat.satuan = obat.satuan - new.satuan WHERE obat.id_obat = new.id_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` varchar(10) NOT NULL,
  `id_poli` varchar(8) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `jk_dokter` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_poli`, `nama_dokter`, `jk_dokter`, `tgl_lahir`, `alamat`, `no_telp`, `foto`, `create_at`, `updated_at`) VALUES
('DTR-01', 'PL-001', 'dr.Sumarni ramana', 'Perempuan', '1987-01-10', 'Bandung', '08987987333', '', '2018-09-28 01:03:04', '2017-02-01 17:00:00'),
('DTR-02', 'PL-002', 'dr.supriatna supardi', 'laki-laki', '1990-08-16', 'padalarang', '0897897894', '', '2017-02-07 14:36:15', '2017-02-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE IF NOT EXISTS `jenis_obat` (
  `id_jenis` varchar(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`id_jenis`, `nama_jenis`, `created_at`, `updated_at`) VALUES
('JNS-001', 'antibiotik', '2017-02-23 00:00:00', '2017-02-23 00:00:00'),
('JNS-002', 'antiseptik', '2017-02-23 00:00:00', '2017-02-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` varchar(10) NOT NULL,
  `id_jenis` varchar(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `kegunaan` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `satuan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `id_jenis`, `nama_obat`, `kegunaan`, `harga`, `satuan`, `created_at`, `updated_at`) VALUES
('OBAT-001', 'JNS-001', 'Adelisyna', 'memcegah dan mencukupi kekurangan vitamin anak-dewasa', 55000, 35, '2017-02-23 00:00:00', '2017-02-23 00:00:00');

--
-- Triggers `obat`
--
DELIMITER $$
CREATE TRIGGER `ambilobat` AFTER INSERT ON `obat`
 FOR EACH ROW BEGIN
DECLARE newjumlah INT(11);
SELECT satuan FROM obat WHERE id_obat=new.id_obat INTO newjumlah;
UPDATE obat SET satuan= newjumlah-new.satuan WHERE  id_obat=new.id_obat ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` varchar(15) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `jk`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
('PSN-20', 'Rudi setiawan', '1999-01-12', 'P', 'bekasi', '65656565', '2017-03-01 05:23:21', '0000-00-00 00:00:00'),
('PSN-21', 'Radifan', '1999-05-28', 'L', 'cibeber', '08942342', '2017-02-24 01:24:21', '0000-00-00 00:00:00'),
('PSN-22', 'Sofyan Maulid', '1989-06-03', 'L', 'pasteur', '0897778887', '2017-03-01 20:49:56', '0000-00-00 00:00:00'),
('PSN-23', 'Febri Yanto', '1998-02-13', 'L', 'BANDUNG', '0898773333', '2017-03-01 20:48:54', '0000-00-00 00:00:00'),
('PSN-24', 'Toni Pratama', '2001-09-05', 'L', 'cilacap', '0897765678', '2017-03-02 01:16:02', '0000-00-00 00:00:00'),
('PSN-25', 'heri aldianto', '1999-05-21', 'L', 'cimindi', '0897657758', '2017-03-02 03:27:38', '0000-00-00 00:00:00'),
('PSN-26', 'Natasya Putri Wulandari', '1994-05-21', 'P', 'Jakarta', '089732421', '2017-12-17 07:45:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_bayar` varchar(15) NOT NULL,
  `id_daftar` varchar(15) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `jenis_biaya` varchar(20) NOT NULL,
  `biaya` double NOT NULL,
  `waktu` date NOT NULL,
  `no_antrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_daftar`, `id_petugas`, `jenis_biaya`, `biaya`, `waktu`, `no_antrian`) VALUES
('BYR-01', 'DFTR-41', 'PTGS-04', 'poli', 15000, '2017-03-01', 1),
('BYR-02', 'DFTR-43', 'PTGS-03', 'poli', 15000, '2017-03-02', 2),
('BYR-03', 'DFTR-43', 'PTGS-02', 'obat', 20000, '2017-03-02', 3),
('BYR-04', 'DFTR-45', 'PTGS-01', 'poli', 50000, '2017-12-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` varchar(10) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `id_pasien` varchar(15) NOT NULL,
  `type_pasien` int(1) NOT NULL,
  `id_poli` varchar(8) NOT NULL,
  `id_dokter` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_antrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `id_petugas`, `id_pasien`, `type_pasien`, `id_poli`, `id_dokter`, `waktu`, `no_antrian`) VALUES
('DFTR-39', 'PTGS-01', 'PSN-23', 0, 'PL-001', 'DTR-01', '2017-02-27 17:00:00', 0),
('DFTR-40', 'PTGS-01', 'PSN-21', 1, 'PL-002', 'DTR-02', '2017-02-27 17:00:00', 0),
('DFTR-41', 'PTGS-01', 'PSN-23', 0, 'PL-002', 'DTR-02', '2017-02-28 17:00:00', 0),
('DFTR-42', 'PTGS-01', 'PSN-24', 0, 'PL-001', 'DTR-01', '2017-03-01 17:00:00', 0),
('DFTR-43', 'PTGS-01', 'PSN-25', 0, 'PL-001', 'DTR-01', '2017-03-01 17:00:00', 0),
('DFTR-44', 'PTGS-01', 'PSN-26', 0, 'PL-002', 'DTR-01', '2017-12-16 17:00:00', 0),
('DFTR-45', 'PTGS-01', 'PSN-26', 0, 'PL-002', 'DTR-02', '2017-12-18 17:00:00', 0),
('DFTR-46', 'PTGS-01', 'PSN-26', 0, 'PL-002', 'DTR-02', '2017-12-27 17:00:00', 0),
('DFTR-47', 'PTGS-01', 'PSN-25', 0, 'PL-001', 'DTR-01', '2017-12-27 17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jk`, `jabatan`, `tgl_lahir`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
('PTGS-01', 'adi lasmana', 'L', 'petugas pendaftaran', '2010-02-02', 'bandung', '', '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
('PTGS-02', 'Asep si', 'L', 'dokter', '2017-02-06', 'jakarta', '', '2017-02-03 00:00:00', '2017-02-03 00:00:00'),
('PTGS-03', 'Heni anggraeni', 'P', 'apoteker', '1981-01-03', 'cibiru', 'asd', '2017-02-09 00:00:00', '2017-02-09 00:00:00'),
('PTGS-04', 'yandi hermawan', 'L', 'kasir', '1979-02-12', 'cidahu', '', '2017-02-10 00:00:00', '2017-02-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
  `id_poli` varchar(8) NOT NULL,
  `nama_poli` varchar(255) NOT NULL,
  `tarif` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `tarif`, `created_at`, `updated_at`) VALUES
('PL-001', 'poli gigi', 50000, '2017-03-02 02:50:10', '0000-00-00 00:00:00'),
('PL-002', 'poli mata', 50000, '2017-02-01 17:00:00', '2017-02-01 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `id_rekam` varchar(20) NOT NULL,
  `id_dokter` varchar(10) NOT NULL,
  `id_daftar` varchar(15) NOT NULL,
  `id_pasien` varchar(15) NOT NULL,
  `waktu` date NOT NULL,
  `id_resep` varchar(18) NOT NULL,
  `keluhan` text NOT NULL,
  `gejala` text NOT NULL,
  `diagnosa` text NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam`, `id_dokter`, `id_daftar`, `id_pasien`, `waktu`, `id_resep`, `keluhan`, `gejala`, `diagnosa`, `penanganan`) VALUES
('RM-01', 'DTR-01', 'DFTR-41', 'PSN-23', '2017-03-01', 'RSP-A01', 'sakit gigi', 'makan es', 'pembekakan', 'ambil obat'),
('RM-02', 'DTR-01', 'DFTR-43', 'PSN-25', '2017-03-02', 'RSP-A03', 'sakit gigi', 'makan es', 'pembekakan', ' ambil obat');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` varchar(18) NOT NULL,
  `id_rekam` varchar(15) NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_rekam`, `id_petugas`, `waktu`, `keterangan`) VALUES
('RSP-A01', 'RM-01', 'PTGS-02', '2017-03-01 17:00:00', 'ambil obat'),
('RSP-A02', 'RM-02', 'PTGS-04', '2017-03-01 17:00:00', 'saki gigi'),
('RSP-A03', 'RM-02', 'PTGS-04', '2017-03-01 17:00:00', 'ambil obat');

--
-- Triggers `resep`
--
DELIMITER $$
CREATE TRIGGER `resep` AFTER INSERT ON `resep`
 FOR EACH ROW BEGIN
      UPDATE `rekam_medis` SET rekam_medis.id_resep = new.id_resep WHERE rekam_medis.id_rekam = new.id_rekam;
      END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` enum('admin','dokter','pendaftaran','kasir','apoteker','kepalars') NOT NULL,
  `id_dokter` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `id_dokter`, `id_petugas`) VALUES
(1, 'dokter', 'cab2d8232139ee4f469a920732578f71', 'dokter', 'DTR-01', ''),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', ''),
(3, 'pendaftaran', '9c4173885e4dac91d08f3198cd1bbaab', 'pendaftaran', '', 'PTGS-01'),
(4, 'kasir', 'c7911af3adbd12a035b289556d96470a', 'kasir', '', 'PTGS-02'),
(5, 'apoteker', '53a580449fd222ba0c5648b8c5fba8db', 'apoteker', '', 'PTGS-03'),
(6, 'kepala_rs', 'a669a411d6370f43d8282525974a896f', 'kepalars', '', 'PTGS-04'),
(7, 'kepalars', 'a669a411d6370f43d8282525974a896f', 'kepalars', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vlaporan`
--
CREATE TABLE IF NOT EXISTS `vlaporan` (
`id_petugas` varchar(10)
,`nama_petugas` varchar(100)
,`id_pasien` varchar(15)
,`nama_pasien` varchar(100)
,`id_poli` varchar(8)
,`nama_poli` varchar(255)
,`id_dokter` varchar(15)
,`nama_dokter` varchar(100)
,`waktu` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpendaftaran`
--
CREATE TABLE IF NOT EXISTS `vpendaftaran` (
`id_daftar` varchar(10)
,`id_petugas` varchar(10)
,`id_pasien` varchar(15)
,`id_poli` varchar(8)
,`id_dokter` varchar(15)
,`waktu` timestamp
,`no_antrian` int(11)
,`nama_petugas` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `bayarhariini`
--
DROP TABLE IF EXISTS `bayarhariini`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bayarhariini` AS (select `pembayaran`.`id_bayar` AS `id_bayar`,`pembayaran`.`id_daftar` AS `id_daftar`,`pembayaran`.`id_petugas` AS `id_petugas`,`pembayaran`.`jenis_biaya` AS `jenis_biaya`,`pembayaran`.`biaya` AS `biaya`,`pembayaran`.`waktu` AS `waktu`,`pembayaran`.`no_antrian` AS `no_antrian`,`pendaftaran`.`id_poli` AS `id_poli` from (`pembayaran` join `pendaftaran`) where ((`pendaftaran`.`id_daftar` = `pembayaran`.`id_daftar`) and (cast(`pembayaran`.`waktu` as date) = cast(curdate() as date)) and (`pembayaran`.`no_antrian` is not null)) order by `pembayaran`.`id_bayar`);

-- --------------------------------------------------------

--
-- Structure for view `daftartoday`
--
DROP TABLE IF EXISTS `daftartoday`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftartoday` AS (select `pendaftaran`.`id_daftar` AS `id_daftar`,`pendaftaran`.`id_petugas` AS `id_petugas`,`pendaftaran`.`id_pasien` AS `id_pasien`,`pendaftaran`.`id_poli` AS `id_poli`,`pendaftaran`.`id_dokter` AS `id_dokter`,`pendaftaran`.`waktu` AS `waktu`,`pendaftaran`.`no_antrian` AS `no_antrian` from `pendaftaran` where (cast(`pendaftaran`.`waktu` as date) = cast(curdate() as date)));

-- --------------------------------------------------------

--
-- Structure for view `vlaporan`
--
DROP TABLE IF EXISTS `vlaporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlaporan` AS select `pendaftaran`.`id_petugas` AS `id_petugas`,`petugas`.`nama_petugas` AS `nama_petugas`,`pendaftaran`.`id_pasien` AS `id_pasien`,`pasien`.`nama_pasien` AS `nama_pasien`,`pendaftaran`.`id_poli` AS `id_poli`,`poli`.`nama_poli` AS `nama_poli`,`pendaftaran`.`id_dokter` AS `id_dokter`,`dokter`.`nama_dokter` AS `nama_dokter`,`pendaftaran`.`waktu` AS `waktu` from ((((`pendaftaran` join `petugas` on((`petugas`.`id_petugas` = `pendaftaran`.`id_petugas`))) join `pasien` on((`pasien`.`id_pasien` = `pendaftaran`.`id_pasien`))) join `poli` on((`poli`.`id_poli` = `pendaftaran`.`id_poli`))) join `dokter` on((`dokter`.`id_dokter` = `pendaftaran`.`id_dokter`)));

-- --------------------------------------------------------

--
-- Structure for view `vpendaftaran`
--
DROP TABLE IF EXISTS `vpendaftaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpendaftaran` AS (select `a`.`id_daftar` AS `id_daftar`,`a`.`id_petugas` AS `id_petugas`,`a`.`id_pasien` AS `id_pasien`,`a`.`id_poli` AS `id_poli`,`a`.`id_dokter` AS `id_dokter`,`a`.`waktu` AS `waktu`,`a`.`no_antrian` AS `no_antrian`,`b`.`nama_petugas` AS `nama_petugas` from (`pendaftaran` `a` join `petugas` `b`) where (`a`.`id_petugas` = `b`.`id_petugas`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD KEY `FK_detail_resep` (`id_resep`),
  ADD KEY `FK_detail_resep1` (`id_obat`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `FK_dokter` (`id_poli`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `FK_obat` (`id_jenis`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `FK_pembayaran` (`id_daftar`),
  ADD KEY `FK_pembayaran1` (`id_petugas`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `FK_pendaftaran1` (`id_petugas`),
  ADD KEY `FK_pendaftaran2` (`id_pasien`),
  ADD KEY `FK_pendaftaran3` (`id_poli`);

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
  ADD PRIMARY KEY (`id_rekam`),
  ADD KEY `FK_rekam_medis` (`id_dokter`),
  ADD KEY `FK_rekam_medis1` (`id_daftar`),
  ADD KEY `FK_rekam_medis2` (`id_pasien`),
  ADD KEY `FK_rekam_medis7` (`id_resep`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `FK_resep` (`id_rekam`),
  ADD KEY `FK_resep1` (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `FK_detail_resep` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detail_resep1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `FK_dokter` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `FK_obat` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_obat` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_pembayaran` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pembayaran1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `FK_pendaftaran1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pendaftaran2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pendaftaran3` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `FK_rekam_medis` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_rekam_medis1` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_rekam_medis2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `FK_resep1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
