-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 04:05 PM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3i_ci_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusan`
--

CREATE TABLE `master_jurusan` (
  `kode_jurusan` char(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_jurusan`
--

INSERT INTO `master_jurusan` (`kode_jurusan`, `nama_jurusan`, `deskripsi`) VALUES
('001', 'Informatika Komputer', 'Memperlajari tentang komputer dan pemograman'),
('002', 'Teknik Informatika', 'Mempelajari tentang teknik komputer dan pemograman'),
('003', 'Akutansi', 'Mempelajari tentang teknik perbankan dan pajak'),
('004', 'Sekertaris', 'Mempelajari tentang sekertarisan kantor dan memanage manajeman');

-- --------------------------------------------------------

--
-- Table structure for table `master_mahasiswa`
--

CREATE TABLE `master_mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_jurusan` char(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_mahasiswa`
--

INSERT INTO `master_mahasiswa` (`nim`, `nama`, `kode_jurusan`, `semester`, `foto`) VALUES
('123456789', 'Arief Satria Nugraha', '001', 4, '1589381631_9f697eada494bccaae03.jpg'),
('987654321', 'Satria bajay Hitam', '002', 2, '1589381682_a39d018bde6095914f8c.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(3, 'arief satria nugraha', 'arief', '$2y$10$O27oHYH.kxAimWpTa1QtMu4KPneIl4JB7Ne6KjFS1P0wkY57HwNhu'),
(10, 'satria bajay hitam', 'satria', '$2y$10$HWqziSucNdCfF8EbFp6mJ.O7bDqZ2w8r/bunEYBZV8/25p9z7QIq.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_jurusan`
--
ALTER TABLE `master_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `master_mahasiswa`
--
ALTER TABLE `master_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
