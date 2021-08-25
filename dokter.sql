-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 10:44 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rekammedis_1207210370`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` char(6) NOT NULL,
  `nm_dokter` varchar(45) DEFAULT NULL,
  `spesialis` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_tlp` char(12) DEFAULT NULL,
  `kd_user` char(10) DEFAULT NULL,
  PRIMARY KEY (`kd_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nm_dokter`, `spesialis`, `alamat`, `no_tlp`, `kd_user`) VALUES
('DKT-01', 'dr. Ella Wahyu Guntari, Sp.A, M.Ked', 'Anak', 'Citaman, rt 03 rw 18 no 73 c. Cigugur Tengah', '081394481771', '7850323524'),
('DKT-02', 'dr. Syalma Febriani, Sp.KK', 'Alergi', 'Jl. Berlian, Permata', '081324568765', '0966332068'),
('DKT-03', 'dr. Anisa Ramadhanty, Sp.KG', 'Gigi dan Bedah Mulut', 'Melong Asih, Cimahi', '089912345678', '7185982279'),
('DKT-04', 'dr. Novia Firdayanti Umar, Sp.JP', 'Jantung', 'Jl. Pesantren, Cimahi', '089767864567', '4077838803'),
('DKT-05', 'dr. Agung Suteja, Sp.M', 'Mata', 'Cibodas', '081324566754', '6106882317'),
('DKT-06', 'dr. Rachelina Ambarawa, Sp.OG', 'Kebidanan dan Kandungan', 'Jl. Elok no 21. Bandung Asri', '087824568756', '9319890252'),
('DKT-07', 'dr. Zafran Abdul Ahmad, Sp.P', 'Paru-paru', 'Jl. Putra Abdul, Bandung ', '085621894455', '6436190102'),
('DKT-08', 'dr. Angelica Dewi Ayu, Sp.S', 'Saraf', 'Blok Malaya, Komp.Setra Permata', '081328993455', '1989716209'),
('DKT-09', 'dr. Zayn Malik Anggara, Sp.THT-KL', 'THT', 'Jl,Peta, Bandung', '085323121212', '3581464116'),
('DKT-10', 'dr. Niall Horan, Sp.PD, M.Pd.Ked', 'Umum', 'Jl,Anggrek, Taman Bunga Blok E', '081221215645', '7102141830'),
('DKT-11', 'dr. Amanda Aliora, Sp.BA', 'Anak', 'Setra Duta, Komp.Tanjung', '087823434323', '0974091545'),
('DKT-12', 'dr. Davina Anggraeni Sisy, Sp.KK, M.Kes', 'Alergi', 'Jl.Soekarno Hatta, No.455. ', '085665551234', '0958148576'),
('DKT-13', 'dr. Anthony Aliando Putra, Sp.KG', 'Gigi dan Bedah Mulut', 'Padalarang, Kab.Bandung Barat', '082234341876', '4084097354'),
('DKT-14', 'dr. Derry Apsara, Sp.JP', 'Jantung', 'Cempaka Hill, Padalarang', '085734566543', '2373685898'),
('DKT-15', 'dr. Narnia Jeni Andita, Sp.OG', 'Kebidanan dan Kandungan', 'Jl.Desa Sinar, No.009. komp.Daun ', '082196783465', '6638187764'),
('DKT-16', 'dr. Zihan Alfarizi, Sp.M', 'Mata', 'Nusa Hijau, Blok.Anggrek No.011', '08993245876', '4013364472'),
('DKT-17', 'dr. Andreas Setiana, Sp.P', 'Paru-paru', 'Komp.Binakarya, Jl.Cerdas No.001 Blok. A', '081387653456', '3055660146'),
('DKT-18', 'dr. Yuna Ardiana Zehan, Sp.S', 'Saraf', 'Hj.Dzikri No.21 Komp.Sentosa', '087834215645', '0025051878'),
('DKT-19', 'dr. Zahra Aninda Atmadja, Sp.THT-KL', 'THT', 'Kota Baru Parahyangan, Komp.Anjungan no.11', '082185672233', '8142251719'),
('DKT-20', 'dr. Aliana Aulia Zahra, Sp.FK, M.Kes', 'Umum', 'Bukit Rendah, Jl.terang No.010', '087721346453', '1954250773'),
('DKT-21', 'dr. Berry Andreas, Sp.KK', 'Alergi', 'Jl,Kenang. Buah Batu', '082245353434', '7250140257'),
('DKT-22', 'dr. Kevin Dera Hutama, Sp.KK', 'Alergi', 'Jl.Komunikasi. Padjajaran', '082134541232', '0836837637'),
('DKT-23', 'dr. Sheryl Asyfa, Sp.KK', 'Alergi', 'Lembah Hijau, Dago', '081823546543', '2284172578'),
('DKT-24', 'dr. Chica Chalysta, Sp.A, M.Pd.Ked', 'Anak', 'Komp.Bukit Tinggi, Cimahi', '081212343241', '8337495157'),
('DKT-25', 'dr. Helga Luigi, Sp.A', 'Anak', 'Panchanaka Hill, Komp.hijau No.27', '087832326667', '2486216355'),
('DKT-26', 'dr, Kamea Putri Septha, Sp.BA', 'Anak', 'Jl.Telekomunikasi. Buah Batu', '081223244121', '9583090863'),
('DKT-27', 'dr. Azzam Al-Huda, Sp.KGA', 'Gigi dan Bedah Mulut', 'Karang Anyar, Ciputra', '081385672345', '4034107343'),
('DKT-28', 'dr. Hafidz Derra Hubarata, Sp.KG', 'Gigi dan Bedah Mulut', 'Cisarua, Lembang', '082122452312', '2253844026'),
('DKT-29', 'dr. Helena Faustine, Sp.KG, M.Ked', 'Gigi dan Bedah Mulut', 'Sariwangi Regency, Sariwangi', '081323416547', '3930289334'),
('DKT-30', 'dr. David Almaro, Sp.JP', 'Jantung', 'Lembah Teratai. Gadobangkong', '085623435689', '0765203754'),
('DKT-31', 'dr. Fico Alvaro, Sp.An-KAKV', 'Jantung', 'Jl.Pejuang. Komp.Taman Desa', '081722238765', '4876147825'),
('DKT-32', 'dr. Berlyn Alisha Alanza, Sp.JP, M.Kes', 'Jantung', 'Jl.Pawai Timur. Padjadjaran', '081212134546', '2725369351'),
('DKT-33', 'dr. Audrey Alista Putri, Sp.An KAO', 'Kebidanan dan Kandungan', 'Jl.Pejuang. Cibiru, Bandung.', '081598763456', '6505294692'),
('DKT-34', 'dr. Shandy Putra Arialdi, Sp.OG', 'Kebidanan dan Kandungan', 'Cihanjuang, Cimahi', '081717162398', '7482580400'),
('DKT-35', 'dr. Tari Septha Dewi, Sp.OG', 'Kebidanan dan Kandungan', 'Jl,Sindang Sari. Kebon Kopi No.232', '081825437465', '5966596006'),
('DKT-36', 'dr. Deana Alysa Shireen, Sp.M, M.Pd.Ked', 'Mata', 'Jl.putra. komp.Sulung No,119', '087823989978', '6824521209'),
('DKT-37', 'dr. Syahila Ratna Putri, Sp.M', 'Mata', 'Nusa Hijau. Komp.taman No.125', '085620299191', '9623557933'),
('DKT-38', 'dr. Michael Stuard, Sp.M', 'Mata', 'Jl.Dewan Tunggal. Komp.Taman Baru No.229 E', '081221217667', '6111452343'),
('DKT-39', 'dr. Lita Thalita Sinta, Sp.P, M.Ked', 'Paru-paru', 'Jl.Jaksa I. Komp.Kolmas No.217', '085212349876', '4893223744'),
('DKT-40', 'dr. Kaila Lina Dewi, Sp.P', 'Paru-paru', 'Jl.cerdas. Ujung Berung No.71', '081525427766', '0239107639'),
('DKT-41', 'dr. Chalysta Sita, Sp.P', 'Paru-paru', 'Komp.Permai, Jl.Baru No.112', '087834542323', '0161126225'),
('DKT-42', 'dr. Raina Alystha Hena, Sp.BS', 'Saraf', 'Bukit Tunggal, Cimahi No.115', '082155767655', '4539776951'),
('DKT-43', 'dr. Okta Abigail Dera, Sp.S', 'Saraf', 'Panchanaka Hill - Jl.Bukit II No,17 D', '081567899876', '1534014727'),
('DKT-44', 'dr. Farhan Putra Arifa, Sp.S, M.Biomed', 'Saraf', 'Jl.Jakarta, Kiaracondong', '081765766756', '2817994218'),
('DKT-45', 'dr. Aulia Tania Chika, Sp.THT-KL, M.Kes', 'THT', 'Jl.Soekarno Hatta no.197', '081267893452', '6696598045'),
('DKT-46', 'dr. Elyza Rahmawati, Sp.THT-KL', 'THT', 'Pasar Atas, Cimahi', '081876675545', '0414141102'),
('DKT-47', 'dr. Felyan Febri Firda, Sp.THT-KL', 'THT', 'Jl.Mahardika, Citeureup Cimahi', '087734438897', '1655527621'),
('DKT-48', 'dr. Gaitsa Liyura Amira, Sp.GK, MARS', 'Umum', 'Jl.Pandawa Utama, Komp.Melati', '089656789678', '1246751732'),
('DKT-49', 'dr. Irene Sifa Ayudi, Sp.FK', 'Umum', 'Kota Baru Parahyangan, Tanjung Bale No.11 A', '081299877899', '5906522350'),
('DKT-50', 'dr. Jelyn Pratiwi, Sp.Ak', 'Umum', 'Kopo Permai, Kopo No,22 E', '087725437766', '1543213682');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
