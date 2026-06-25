-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 08:12 AM
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
-- Database: ` db_uas_pbo_ti1d_dokterqolbiyalhasaniy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(10,2) NOT NULL,
  `jenis_pembiayaan` enum('Mandiri','Bidikmisi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(10,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Ahmad Fauzi', '230101001', 2, '5000000.00', 'Mandiri', 'Golongan 4', 'Budi Santoso', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', '230101002', 2, '7500000.00', 'Mandiri', 'Golongan 5', 'Hendra Wijaya', NULL, NULL, NULL, NULL),
(3, 'Rizky Ramadhan', '230101003', 4, '5000000.00', 'Mandiri', 'Golongan 4', 'Suratno', NULL, NULL, NULL, NULL),
(4, 'Amanda Putri', '230101004', 4, '9000000.00', 'Mandiri', 'Golongan 6', 'Dedi Kurniawan', NULL, NULL, NULL, NULL),
(5, 'Bimo Aryo', '230101005', 6, '3500000.00', 'Mandiri', 'Golongan 3', 'Eko Prasetyo', NULL, NULL, NULL, NULL),
(6, 'Citra Lestari', '230101006', 6, '7500000.00', 'Mandiri', 'Golongan 5', 'Agus Susanto', NULL, NULL, NULL, NULL),
(7, 'Dimas Saputra', '230101007', 2, '5000000.00', 'Mandiri', 'Golongan 4', 'Rudi Hermawan', NULL, NULL, NULL, NULL),
(8, 'Eka Wahyuni', '230101008', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2023-9901', '700000.00', NULL, NULL),
(9, 'Fajar Shidiq', '230101009', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2023-9902', '700000.00', NULL, NULL),
(10, 'Gita Gutawa', '230101010', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2022-8801', '750000.00', NULL, NULL),
(11, 'Hadi Nur', '230101011', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2022-8802', '750000.00', NULL, NULL),
(12, 'Indah Permata', '230101012', 6, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2021-7701', '800000.00', NULL, NULL),
(13, 'Joko Susilo', '230101013', 6, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2021-7702', '800000.00', NULL, NULL),
(14, 'Kurniawati', '230101014', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP-2023-9903', '700000.00', NULL, NULL),
(15, 'Laksana Tri', '230101015', 2, '1000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Djarum Foundation', '3.50'),
(16, 'Mega Utami', '230101016', 2, '1500000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'PT. Inalum', '3.30'),
(17, 'Nanda Pratama', '230101017', 4, '0.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Bank Indonesia', '3.50'),
(18, 'Oki Setiawan', '230101018', 4, '2000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Tanoto Foundation', '3.40'),
(19, 'Putri Rahayu', '230101019', 6, '0.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Unggulan Kemendikbud', '3.75'),
(20, 'Qori Sandi', '230101020', 6, '1200000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Yayasan Toyota Astra', '3.25'),
(21, 'Rendra Pramudya', '230101021', 2, '0.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Beasiswa Pemprov', '3.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
