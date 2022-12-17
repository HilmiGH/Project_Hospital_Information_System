-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 08:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_pweb_inti`
--

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `ID` int(11) NOT NULL,
  `Pasien_ID` int(11) NOT NULL,
  `Poli_ID` tinyint(4) NOT NULL,
  `Dokter_ID` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `ID` tinyint(2) NOT NULL,
  `Nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`ID`, `Nama`) VALUES
(0, 'Sehat'),
(1, 'Sehat'),
(2, 'Sakit'),
(3, 'Istirahat'),
(4, 'Kelahiran'),
(5, 'Kematian'),
(6, 'Cacat'),
(7, 'Forensik'),
(8, 'Penyakit Menular');

-- --------------------------------------------------------

--
-- Table structure for table `konsul`
--

CREATE TABLE `konsul` (
  `ID` int(11) NOT NULL,
  `Janji_ID` int(11) NOT NULL,
  `Perawat_ID` int(11) NOT NULL,
  `Waktu_Mulai` timestamp NULL DEFAULT NULL,
  `Waktu_Selesai` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID` int(11) NOT NULL,
  `NIP` bigint(20) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `RS_ID` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjaminan`
--

CREATE TABLE `penjaminan` (
  `ID` int(11) NOT NULL,
  `NAMA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjaminan`
--

INSERT INTO `penjaminan` (`ID`, `NAMA`) VALUES
(1, 'BPJS'),
(2, 'SWASTA'),
(3, 'MANDIRI');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `ID` tinyint(3) NOT NULL,
  `Nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`ID`, `Nama`) VALUES
(1, 'Obstetri dan Ginekologi (OBGYN)'),
(2, 'Anak dan Tumbuh Kembang'),
(3, 'Penyakit Dalam '),
(4, 'Bedah Umum'),
(5, 'Bedah Onkologi'),
(6, 'Mata'),
(7, 'Saraf'),
(8, 'Jantung'),
(9, 'Bedah Digestif'),
(10, 'Paru-Paru'),
(11, 'Orthopaedi'),
(12, 'Bedah Plastik'),
(13, 'Urologi'),
(14, 'Jiwa'),
(15, 'Kulit dan Kelamin'),
(16, 'Telinga, Hidung, dan Tenggorokan (THT)'),
(17, 'Gizi'),
(18, 'Anestesi'),
(19, 'Gigi dan Mulut'),
(20, 'Bedah Mulut'),
(21, 'Periodonsia'),
(22, 'Onkologi Radiologi'),
(23, 'Geriatri'),
(24, 'Kosmetik Medik'),
(25, 'VCT'),
(26, 'Triage'),
(27, 'Bedah Saraf'),
(28, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` tinyint(3) NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `NAME`) VALUES
(11, 'Manajemen Polri'),
(12, 'Manajemen Polda'),
(13, 'Manajemen Polres'),
(21, 'Dokter Polisi'),
(22, 'Dokter PNS'),
(23, 'Dokter Non PNS'),
(24, 'Dokter Tidak Tetap'),
(31, 'Nakes Polisi'),
(32, 'Nakes PNS'),
(33, 'Nakes Non PNS'),
(34, 'Nakes Tidak Tetap'),
(41, 'Nonnakes Polisi'),
(42, 'Nonnakes PNS'),
(43, 'Nonnakes Honorer'),
(51, 'Mitra Polisi'),
(52, 'Mitra Pemerintah'),
(53, 'Mitra Swasta'),
(61, 'Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `ID` mediumint(9) NOT NULL,
  `Jenis_Surat_ID` tinyint(4) NOT NULL,
  `Dokter_ID` int(11) NOT NULL,
  `Pasien_ID` int(11) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(60) NOT NULL,
  `PHONE` varchar(12) NOT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `ROLE_ID` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAMA`, `PHONE`, `EMAIL`, `ROLE_ID`) VALUES
(1, '', '081234567890', 'a@example.com', 61),
(2, '', '081234567891', NULL, 21),
(3, '', '081234567892', NULL, 33),
(4, '', '081234567893', NULL, 42),
(5, '', '081234567894', NULL, 13),
(6, '', '081234567895', NULL, 52);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Dokter_ID` (`Dokter_ID`),
  ADD KEY `Poli_ID` (`Poli_ID`),
  ADD KEY `janji_ibfk_1` (`Pasien_ID`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `konsul`
--
ALTER TABLE `konsul`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Janji_ID` (`Janji_ID`),
  ADD KEY `Perawat_ID` (`Perawat_ID`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NIP` (`NIP`),
  ADD UNIQUE KEY `USER_ID` (`USER_ID`),
  ADD KEY `RS_ID` (`RS_ID`);

--
-- Indexes for table `penjaminan`
--
ALTER TABLE `penjaminan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Dokter_ID` (`Dokter_ID`),
  ADD KEY `Jenis_Surat_ID` (`Jenis_Surat_ID`),
  ADD KEY `surat_ibfk_2` (`Pasien_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ROLE_ID` (`ROLE_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `janji`
--
ALTER TABLE `janji`
  ADD CONSTRAINT `janji_ibfk_1` FOREIGN KEY (`Pasien_ID`) REFERENCES `pasien` (`User_ID`),
  ADD CONSTRAINT `janji_ibfk_3` FOREIGN KEY (`Dokter_ID`) REFERENCES `pegawai` (`ID`),
  ADD CONSTRAINT `janji_ibfk_4` FOREIGN KEY (`Poli_ID`) REFERENCES `poliklinik` (`ID`);

--
-- Constraints for table `konsul`
--
ALTER TABLE `konsul`
  ADD CONSTRAINT `konsul_ibfk_1` FOREIGN KEY (`Janji_ID`) REFERENCES `janji` (`ID`),
  ADD CONSTRAINT `konsul_ibfk_2` FOREIGN KEY (`Perawat_ID`) REFERENCES `pegawai` (`ID`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`RS_ID`) REFERENCES `rumah_sakit` (`ID`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`Dokter_ID`) REFERENCES `pegawai` (`ID`),
  ADD CONSTRAINT `surat_ibfk_2` FOREIGN KEY (`Pasien_ID`) REFERENCES `pasien` (`User_ID`),
  ADD CONSTRAINT `surat_ibfk_3` FOREIGN KEY (`Jenis_Surat_ID`) REFERENCES `jenis_surat` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ROLE_ID`) REFERENCES `role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
