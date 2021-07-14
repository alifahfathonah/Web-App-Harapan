-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 01:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harapan_medan`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(6) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `tingpen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `tingpen`) VALUES
(1, 'TK', 'TK Harapan 1'),
(2, 'TK', 'TK Harapan 2'),
(3, 'SD', 'SD Harapan 1'),
(4, 'SD', 'SD Harapan 2'),
(5, 'SD', 'SD Harapan 3'),
(6, 'SMP', 'SMP Harapan 1'),
(7, 'SMP', 'SMP Harapan 2'),
(8, 'SMA', 'SMA Harapan 1'),
(9, 'SMA', 'SMA Harapan 2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(6) NOT NULL,
  `id_sekolah` int(6) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir1` varchar(60) NOT NULL,
  `tgl1` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `gol_darah1` varchar(10) NOT NULL,
  `alamat1` text NOT NULL,
  `anak_no` float NOT NULL,
  `kandung` float NOT NULL,
  `tiri` float NOT NULL,
  `angkat` float NOT NULL,
  `anak_tsb` varchar(10) NOT NULL,
  `bahasa` varchar(10) NOT NULL,
  `warga1` varchar(15) NOT NULL,
  `agama1` varchar(10) NOT NULL,
  `notel1` float NOT NULL,
  `email` varchar(20) NOT NULL,
  `n_ayah` varchar(60) NOT NULL,
  `n_ayah_t` varchar(60) NOT NULL,
  `tempat_lahir2` varchar(60) NOT NULL,
  `tgl2` date NOT NULL,
  `agama2` varchar(10) NOT NULL,
  `p_ayah` varchar(20) NOT NULL,
  `warga2` varchar(20) NOT NULL,
  `alamat2` text NOT NULL,
  `notel2` float NOT NULL,
  `alamat3` text NOT NULL,
  `notel3` float NOT NULL,
  `gol_darah2` varchar(5) NOT NULL,
  `n_ibu` varchar(60) NOT NULL,
  `n_ibu_t` varchar(60) NOT NULL,
  `tempat_lahir3` varchar(60) NOT NULL,
  `tgl3` date NOT NULL,
  `agama3` varchar(20) NOT NULL,
  `p_ibu` varchar(20) NOT NULL,
  `warga3` varchar(20) NOT NULL,
  `alamat4` text NOT NULL,
  `notel4` float NOT NULL,
  `alamat5` text NOT NULL,
  `notel5` float NOT NULL,
  `gol_darah3` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_sekolah`, `nama`, `tempat_lahir1`, `tgl1`, `jk`, `gol_darah1`, `alamat1`, `anak_no`, `kandung`, `tiri`, `angkat`, `anak_tsb`, `bahasa`, `warga1`, `agama1`, `notel1`, `email`, `n_ayah`, `n_ayah_t`, `tempat_lahir2`, `tgl2`, `agama2`, `p_ayah`, `warga2`, `alamat2`, `notel2`, `alamat3`, `notel3`, `gol_darah2`, `n_ibu`, `n_ibu_t`, `tempat_lahir3`, `tgl3`, `agama3`, `p_ibu`, `warga3`, `alamat4`, `notel4`, `alamat5`, `notel5`, `gol_darah3`, `tgl_daftar`) VALUES
(1, 0, 'jkljkl', 'jkljkl', '2018-11-28', 'L', 'b', 'lkjkl', 0, 3, 3, 3, 'piatu', 'asdasd', 'dasdasd', 'Islam', 123123000, 'sadasd@gmail.com', '', 'asdasd', 'asdasdas', '2020-02-26', 'Kristen', 'asdasd', 'asdasd', 'asdasdasd', 123123000, 'asdasdasd', 123123000, 'b', '', 'dasda', 'asdasdas', '2020-03-04', 'Kristen', 'sdasd', 'asdasdas', 'dasdasd', 123123, 'sadasdasd', 12312300, 'a', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status_user`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
