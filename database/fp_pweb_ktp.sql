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
-- Database: `fp_pweb_ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `ID` tinyint(1) NOT NULL,
  `AGAMA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`ID`, `AGAMA`) VALUES
(7, 'ALIRAN KEPERCAYAAN'),
(5, 'BUDHA'),
(4, 'HINDU'),
(1, 'ISLAM'),
(3, 'KATHOLIK'),
(6, 'KHONG HU CHU'),
(2, 'KRISTEN');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `ID` tinyint(1) NOT NULL,
  `JENIS_KELAMIN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`ID`, `JENIS_KELAMIN`) VALUES
(1, 'LAKI-LAKI'),
(2, 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `ID` tinyint(3) NOT NULL,
  `KEWARGANEGARAAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `NIK` bigint(16) NOT NULL,
  `NAMA` varchar(60) NOT NULL,
  `PROV_LAHIR_ID` tinyint(2) NOT NULL,
  `KOTA_LAHIR_ID` tinyint(2) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN_ID` tinyint(1) NOT NULL,
  `ALAMAT_ID` int(11) NOT NULL,
  `AGAMA_ID` tinyint(1) NOT NULL,
  `STATUS_PERKAWINAN_ID` tinyint(1) NOT NULL,
  `PEKERJAAN_ID` tinyint(1) NOT NULL,
  `KEWARGANEGARAAN_ID` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `ID` tinyint(2) NOT NULL,
  `PEKERJAAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `ID` tinyint(1) NOT NULL,
  `STATUS_PERKAWINAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`ID`, `STATUS_PERKAWINAN`) VALUES
(1, 'BELUM KAWIN'),
(3, 'CERAI HIDUP'),
(4, 'CERAI MATI'),
(2, 'KAWIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `AGAMA` (`AGAMA`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `JENIS_KELAMIN` (`JENIS_KELAMIN`);

--
-- Indexes for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `KEWARGANEGARAAN` (`KEWARGANEGARAAN`),
  ADD UNIQUE KEY `KEWARGANEGARAAN_2` (`KEWARGANEGARAAN`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `KTP_AGAMA_ID` (`AGAMA_ID`),
  ADD KEY `KTP_ALAMAT_ID` (`ALAMAT_ID`),
  ADD KEY `KTP_JENIS_KELAMIN_ID` (`JENIS_KELAMIN_ID`),
  ADD KEY `KTP_PEKERJAAN_ID` (`PEKERJAAN_ID`),
  ADD KEY `KTP_STATUS_PERKAWINAN_ID` (`STATUS_PERKAWINAN_ID`),
  ADD KEY `KTP_KEWARGANEGARAAN` (`KEWARGANEGARAAN_ID`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `PEKERJAAN` (`PEKERJAAN`);

--
-- Indexes for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `STATUS_PERKAWINAN` (`STATUS_PERKAWINAN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ktp`
--
ALTER TABLE `ktp`
  ADD CONSTRAINT `KTP_AGAMA_ID` FOREIGN KEY (`AGAMA_ID`) REFERENCES `agama` (`ID`),
  ADD CONSTRAINT `KTP_ALAMAT_ID` FOREIGN KEY (`ALAMAT_ID`) REFERENCES `fp_pweb_alamat`.`alamat` (`ID`),
  ADD CONSTRAINT `KTP_JENIS_KELAMIN_ID` FOREIGN KEY (`JENIS_KELAMIN_ID`) REFERENCES `jenis_kelamin` (`ID`),
  ADD CONSTRAINT `KTP_KEWARGANEGARAAN` FOREIGN KEY (`KEWARGANEGARAAN_ID`) REFERENCES `kewarganegaraan` (`ID`),
  ADD CONSTRAINT `KTP_PEKERJAAN_ID` FOREIGN KEY (`PEKERJAAN_ID`) REFERENCES `pekerjaan` (`ID`),
  ADD CONSTRAINT `KTP_STATUS_PERKAWINAN_ID` FOREIGN KEY (`STATUS_PERKAWINAN_ID`) REFERENCES `status_perkawinan` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
