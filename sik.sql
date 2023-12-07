-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 02:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nama` varchar(50) NOT NULL,
  `NIP` int NOT NULL,
  `id_absen` int NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nama`, `NIP`, `id_absen`, `posisi`) VALUES
('Andika Bastian', 1236547, 1, 'HRD'),
('Andika Bastian', 1236547, 2, 'HRD'),
('brian', 784512, 3, 'ob'),
('Andika Bastian', 1236547, 4, 'HRD'),
('brian', 784512, 5, 'ob');

-- --------------------------------------------------------

--
-- Table structure for table `insentif`
--

CREATE TABLE `insentif` (
  `nama` varchar(50) NOT NULL,
  `id_insentif` int NOT NULL,
  `NIP` int NOT NULL,
  `jum_insentif` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insentif`
--

INSERT INTO `insentif` (`nama`, `id_insentif`, `NIP`, `jum_insentif`) VALUES
('asd', 3, 44552, 554000),
('andik', 4, 64546, 50000),
('asd', 5, 44552, 20000),
('andra', 6, 614163, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int NOT NULL,
  `job` varchar(50) NOT NULL,
  `tanggal_pemberian` date NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job`, `tanggal_pemberian`, `deadline`) VALUES
(234, 'dash', '2023-12-05', '2023-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `kode_absen`
--

CREATE TABLE `kode_absen` (
  `kode` varchar(20) NOT NULL,
  `tanggal_kode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kode_absen`
--

INSERT INTO `kode_absen` (`kode`, `tanggal_kode`) VALUES
('111', '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nama` varchar(50) NOT NULL,
  `NIP` int NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `awal_bekerja` date NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nama`, `NIP`, `posisi`, `awal_bekerja`, `pass`) VALUES
('dec', 324, 'cad', '2023-12-05', 'asc'),
('fds', 425, 'vsd', '2023-12-05', 'vs'),
('rfsa', 23413, 'fdfa', '2023-12-05', 'fad'),
('ade', 23423, 'ob', '2023-12-06', '000'),
('asd', 44552, 'OB', '2023-11-17', '0000'),
('andri', 44651, 'staff', '2023-11-27', '111'),
('andik', 64546, 'staff', '2023-12-01', '111'),
('andra', 614163, 'ceo', '2023-04-30', '000'),
('brian', 784512, 'ob', '2023-11-19', '333'),
('Andika Bastian', 1236547, 'HRD', '2023-11-14', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `pem_kerja`
--

CREATE TABLE `pem_kerja` (
  `nama` varchar(50) NOT NULL,
  `id_pem_kerja` int NOT NULL,
  `NIP` int NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pem_kerja`
--

INSERT INTO `pem_kerja` (`nama`, `id_pem_kerja`, `NIP`, `posisi`, `alasan`) VALUES
('brian', 1, 784512, 'ob', 'malas'),
('asd', 2, 44552, 'OB', 'tolol'),
('andik', 3, 64546, 'staff', 'malas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `insentif`
--
ALTER TABLE `insentif`
  ADD PRIMARY KEY (`id_insentif`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pem_kerja`
--
ALTER TABLE `pem_kerja`
  ADD PRIMARY KEY (`id_pem_kerja`),
  ADD KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insentif`
--
ALTER TABLE `insentif`
  MODIFY `id_insentif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pem_kerja`
--
ALTER TABLE `pem_kerja`
  MODIFY `id_pem_kerja` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `insentif`
--
ALTER TABLE `insentif`
  ADD CONSTRAINT `insentif_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pem_kerja`
--
ALTER TABLE `pem_kerja`
  ADD CONSTRAINT `pem_kerja_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
