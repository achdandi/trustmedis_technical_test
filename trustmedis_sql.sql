-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 06:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trustmedis_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_hari`
--

CREATE TABLE `master_hari` (
  `hari_id` int(11) NOT NULL,
  `hari_nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_hari`
--

INSERT INTO `master_hari` (`hari_id`, `hari_nama`) VALUES
(1, 'senin'),
(2, 'selasa'),
(3, 'rabu'),
(4, 'kamis'),
(5, 'jumat'),
(6, 'sabtu'),
(7, 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `master_jadwal`
--

CREATE TABLE `master_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `jadwal_mulai` time NOT NULL,
  `jadwal_selesai` time NOT NULL,
  `jadwal_created_at` timestamp NULL DEFAULT NULL,
  `jadwal_updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jadwal`
--

INSERT INTO `master_jadwal` (`jadwal_id`, `pegawai_id`, `poli_id`, `hari_id`, `jadwal_mulai`, `jadwal_selesai`, `jadwal_created_at`, `jadwal_updated_at`) VALUES
(1, 1, 1, 2, '08:00:00', '10:00:00', NULL, '2022-06-16 05:47:32'),
(2, 1, 1, 3, '08:00:00', '10:00:00', NULL, '2022-06-16 05:47:32'),
(3, 2, 2, 1, '08:00:00', '10:00:00', NULL, '2022-06-16 06:34:00'),
(4, 2, 2, 4, '12:00:00', '17:00:00', NULL, '2022-06-16 06:34:00'),
(7, 2, 2, 7, '12:00:00', '17:00:00', NULL, '2022-06-16 06:34:37'),
(8, 3, 2, 1, '10:00:00', '15:00:00', NULL, '2022-06-16 14:14:11'),
(9, 3, 2, 2, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:59'),
(10, 3, 2, 3, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:24'),
(11, 3, 2, 4, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:24'),
(12, 3, 2, 5, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:24'),
(13, 3, 2, 6, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:24'),
(14, 3, 2, 7, '10:00:00', '15:00:00', NULL, '2022-06-16 14:15:24'),
(55, 8, 4, 2, '18:00:00', '21:00:00', NULL, '2022-08-14 09:47:11'),
(56, 8, 4, 4, '18:00:00', '21:00:00', NULL, '2022-08-14 09:47:11'),
(57, 8, 4, 6, '18:00:00', '21:00:00', NULL, '2022-08-14 09:47:11'),
(66, 9, 4, 1, '08:00:00', '12:00:00', NULL, '2022-08-14 11:19:55'),
(67, 9, 4, 3, '12:00:00', '17:00:00', NULL, '2022-08-14 11:19:55'),
(68, 9, 4, 5, '08:00:00', '12:00:00', NULL, '2022-08-14 11:19:55'),
(69, 9, 4, 7, '12:00:00', '17:00:00', NULL, '2022-08-14 11:19:55'),
(70, 7, 3, 1, '08:15:00', '12:00:00', NULL, '2022-08-14 11:20:18'),
(71, 7, 3, 3, '08:15:00', '12:00:00', NULL, '2022-08-14 11:20:18'),
(72, 7, 3, 5, '08:15:00', '12:00:00', NULL, '2022-08-14 11:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `master_pegawai`
--

CREATE TABLE `master_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nama` varchar(255) NOT NULL,
  `pegawai_nip` varchar(10) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `pegawai_created_at` timestamp NULL DEFAULT current_timestamp(),
  `pegawai_updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pegawai`
--

INSERT INTO `master_pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_nip`, `poli_id`, `pegawai_created_at`, `pegawai_updated_at`) VALUES
(1, 'Dr Anwar', '312312', 1, '2022-06-16 01:10:00', '2022-06-15 14:58:51'),
(2, 'Dr Nagita', '123123', 2, '2022-06-15 15:05:19', '2022-06-15 15:05:19'),
(3, 'Dr Rafi', '6564545', 2, '2022-06-15 17:00:33', '2022-06-15 17:00:33'),
(7, 'Dr Baim', '211234', 3, '2022-06-16 00:46:42', '2022-06-16 00:46:42'),
(8, 'Dr Tarti', '123123', 0, '2022-08-12 15:33:27', '2022-08-12 15:33:27'),
(9, 'Dr Faisal', '031245', 0, '2022-08-14 09:38:56', '2022-08-14 09:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `master_poli`
--

CREATE TABLE `master_poli` (
  `poli_id` int(11) NOT NULL,
  `poli_nama` varchar(190) NOT NULL,
  `poli_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `poli_updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_poli`
--

INSERT INTO `master_poli` (`poli_id`, `poli_nama`, `poli_created_at`, `poli_updated_at`) VALUES
(1, 'Poli Gigi', '2022-06-16 01:09:06', '2022-06-15 14:57:48'),
(2, 'Poli Mata', '2022-06-16 01:09:06', '2022-06-15 14:58:09'),
(3, 'Poli Kandungan', '2022-06-16 01:09:06', '2022-06-15 14:58:09'),
(4, 'Poli Penyakit Dalam', '2022-06-16 01:09:06', '2022-06-16 01:08:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_hari`
--
ALTER TABLE `master_hari`
  ADD PRIMARY KEY (`hari_id`);

--
-- Indexes for table `master_jadwal`
--
ALTER TABLE `master_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `master_pegawai`
--
ALTER TABLE `master_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `master_poli`
--
ALTER TABLE `master_poli`
  ADD PRIMARY KEY (`poli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_hari`
--
ALTER TABLE `master_hari`
  MODIFY `hari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_jadwal`
--
ALTER TABLE `master_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `master_pegawai`
--
ALTER TABLE `master_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_poli`
--
ALTER TABLE `master_poli`
  MODIFY `poli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
