-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 11:42 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` int(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nip` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `tanggal`, `jenis_kelamin`, `keterangan`) VALUES
(20, 123456, 'Ahmad Subagyo', '29-11-2018', 'Laki-Laki', 'Hadir'),
(21, 234242424, 'Silva', '30-11-2018', 'Laki-Laki', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama`, `keterangan`) VALUES
(13, 'Kelas 1', 'Meja kurang 10 harap di betulkan'),
(15, 'Kelas 2', 'Bau '),
(17, 'Kelas 2', 'MEJA KURANG 5 , BANGKU KURANG 10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `keterangan` enum('Hadir','Sakit','Izin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama`, `kelas`, `tanggal`, `jenis_kelamin`, `keterangan`) VALUES
(48, 123456, 'Fiqi Sulaiman', 'Kelas 1 ', '30-11-2018', 'Laki-laki', 'Sakit'),
(61, 2147483647, 'Alsa Marwah', 'Kelas 1', '30-11-2018', 'Perempuan', 'Izin'),
(62, 3242342, 'Maxwell ', 'Kelas 1', '30-11-2018', 'Laki-laki', 'Sakit'),
(63, 2342, 'Messi', 'Kelas 1', '30-11-2018', 'Laki-laki', 'Hadir'),
(64, 1432434324, 'Nur', 'Kelas 1', '30-11-2018', 'Perempuan', 'Alpa'),
(65, 123457, 'Ronaldo', 'Kelas 2', '30-11-2018', 'Laki-laki', 'Hadir'),
(66, 123457, 'Muhammed Salah', 'Kelas 2', '30-11-2018', 'Laki-laki', 'Sakit'),
(67, 12313123, 'Aguero', 'Kelas 2', '30-11-2018', 'Laki-laki', 'Izin'),
(68, 1231231, 'Silva', 'Kelas 2', '30-11-2018', 'Laki-laki', 'Alpa'),
(69, 1323213, 'Henderson', 'Kelas 2', '30-11-2018', 'Laki-laki', 'Hadir'),
(70, 1231232131, 'kocak', 'Kelas 3', '30-11-2018', 'Laki-laki', 'Sakit'),
(71, 123457, 'Fiqi Sulaiman', 'Kelas 1', '30-11-2018', 'Laki-laki', 'Izin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'Guru', 'guru', 'guru', 'guru'),
(7, 'Ahmad Sukri', 'rechtweez', 'sponge703', 'guru'),
(8, 'Gerry Susilo', 'GERRY', '1234', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
