-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2025 at 06:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_programmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspernikahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etnis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusaktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama`, `alamat`, `tgl_lahir`, `agama`, `pendidikan`, `jabatan`, `statuspernikahan`, `etnis`, `statusaktif`, `created_at`, `updated_at`) VALUES
(1, 'Yudi', 'jl.jalan', '2025-05-03', 'Islam', 'SD', 'Direktur', 'Belum Menikah', 'Jawa', 0, '2025-05-24 10:27:03', '2025-05-24 11:35:41'),
(2, 'Dadang Sunandar', 'Jalan Jalan', '2025-05-23', 'Kristen', 'Diploma', 'Manager', 'Duda', 'Sunda', 1, '2025-05-24 10:32:12', '2025-05-24 11:02:15'),
(3, 'Yudi gaspar', 'jalan cendrawasih', '2025-05-17', 'Budha', 'SMP', 'Marketing', 'Belum Menikah', 'Batak', 0, '2025-05-24 10:32:43', '2025-05-24 10:32:43'),
(4, 'Yudi', 'jl.jalan', '2025-05-16', 'Kristen', 'SD', 'Direktur', 'Menikah', 'Jawa', 1, '2025-05-24 11:23:32', '2025-05-24 11:23:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
