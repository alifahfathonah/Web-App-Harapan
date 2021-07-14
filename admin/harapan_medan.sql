
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `harapan_medan`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal_sekolah`
--

CREATE TABLE IF NOT EXISTS `asal_sekolah` (
  `id_asal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_asal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_asal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `asal_sekolah`
--

INSERT INTO `asal_sekolah` (`id_asal`, `nama_asal`) VALUES
(5, 'SD Harapan 3'),
(4, 'SD Harapan 2'),
(3, 'SD Harapan 1'),
(2, 'TK Harapan 2'),
(1, 'TK Harapan 1'),
(6, 'SMP Harapan 1'),
(7, 'SMP Harapan 2'),
(8, 'SMA Harapan 1'),
(9, 'SMA Harapan 2'),
(10, 'TK Siti Hajar'),
(11, 'Not Set');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_transaksipsb` int(10) NOT NULL,
  `nominal` int(100) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksipsb`, `nominal`) VALUES
(11, 9, 40000),
(10, 8, 500000),
(9, 7, 500000),
(8, 6, 2000000),
(7, 5, 1500000),
(6, 4, 2500000),
(12, 10, 3000000),
(13, 11, 2000000),
(14, 12, 2000000),
(15, 13, 2000000),
(16, 14, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(6) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) NOT NULL,
  `tingpen` varchar(50) NOT NULL,
  `uang_daftar` int(100) NOT NULL,
  `uang_pangkal` int(100) NOT NULL,
  `uang_sekolah` int(100) NOT NULL,
  `uang_sarana` int(100) NOT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `tingpen`, `uang_daftar`, `uang_pangkal`, `uang_sekolah`, `uang_sarana`) VALUES
(1, 'TK', 'TK Harapan 1', 250000, 3800000, 650000, 900000),
(2, 'TK', 'TK Harapan 2', 250000, 3800000, 650000, 900000),
(3, 'SD', 'SD Harapan 1', 250000, 3800000, 650000, 900000),
(4, 'SD', 'SD Harapan 2', 250000, 3800000, 650000, 900000),
(5, 'SD', 'SD Harapan 3', 250000, 3800000, 650000, 900000),
(6, 'SMP', 'SMP Harapan 1', 250000, 4700000, 750000, 950000),
(7, 'SMP', 'SMP Harapan 2', 250000, 4700000, 750000, 950000),
(8, 'SMA', 'SMA Harapan 1', 250000, 5700000, 900000, 1300000),
(9, 'SMA', 'SMA Harapan 3', 250000, 5700000, 900000, 1300000),
(12, 'SMP', 'SMP Harapan 3', 250000, 4700000, 750000, 950000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(6) NOT NULL AUTO_INCREMENT,
  `nosttb` varchar(100) NOT NULL,
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
  `tgl_daftar` date NOT NULL,
  `id_asal` int(10) NOT NULL,
  `note_sekolah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nosttb`, `id_sekolah`, `nama`, `tempat_lahir1`, `tgl1`, `jk`, `gol_darah1`, `alamat1`, `anak_no`, `kandung`, `tiri`, `angkat`, `anak_tsb`, `bahasa`, `warga1`, `agama1`, `notel1`, `email`, `n_ayah`, `n_ayah_t`, `tempat_lahir2`, `tgl2`, `agama2`, `p_ayah`, `warga2`, `alamat2`, `notel2`, `alamat3`, `notel3`, `gol_darah2`, `n_ibu`, `n_ibu_t`, `tempat_lahir3`, `tgl3`, `agama3`, `p_ibu`, `warga3`, `alamat4`, `notel4`, `alamat5`, `notel5`, `gol_darah3`, `tgl_daftar`, `id_asal`, `note_sekolah`) VALUES
(1, '', 4, 'jkljkl', 'jkljkl', '2018-11-28', 'L', 'b', 'lkjkl', 0, 3, 3, 3, 'piatu', 'asdasd', 'dasdasd', 'Islam', 1.23123e+008, 'sadasd@gmail.com', '', 'asdasd', 'asdasdas', '2020-02-26', 'Kristen', 'asdasd', 'asdasd', 'asdasdasd', 1.23123e+008, 'asdasdasd', 1.23123e+008, 'b', '', 'dasda', 'asdasdas', '2020-03-04', 'Kristen', 'sdasd', 'asdasdas', 'dasdasd', 123123, 'sadasdasd', 1.23123e+007, 'a', '0000-00-00', 1, ''),
(2, '', 1, 'oijewfd', 'ijiewjfi', '2020-02-02', '-', 'a', 'ewfwef', 0, 3, 2, 1, '-', 'utyjrtherg', 'rtherwgefw', '-', 987654, 'fewfewf@gmail.com', 'yhtrh', 'rhtrh', 'rhrt', '2020-02-02', '-', 'wefwef', 'wefwf', 'wefewf', 897655, '', 8.97868e+010, 'a', 'gdgfsaa', 'hgfdgs', 'hgfdd', '2020-02-05', '-', 'kjhgf', 'hgndbfs', 'dfsbda', 98765, 'fgdnfsb', 98765, 'a', '2020-02-02', 1, ''),
(3, '', 3, 'wkd', 'okop', '2020-02-02', 'L', 'a', 'qdqdqd', 0, 3, 3, 3, '-', 'qedq', 'ddwdqqd', 'Islam', 9.87654e+006, 'dhany.zone@gmail.com', 'wefwf', 'wefew', 'wefwef', '2020-02-02', 'Islam', 'wefewfewfew', 'qwedqwd', 'qwdqwqwd', 9.88565e+009, 'wefwqwd', 9.87654e+007, 'a', 'qwdwq', 'dqwqd', 'qwdqwd', '2020-02-02', 'Islam', 'qwdwqdwdqwd', 'qwdq', 'ddqwd', 98765, 'wqdqwdwqd', 9854, 'a', '2020-02-02', 2, ''),
(4, '', 2, 'wqdqwd', 'wqdqqd', '2020-02-03', 'L', 'a', 'wqdqdqwdw', 0, 3, 2, -2, '-', 'w', 'ddwdqqd', 'Islam', 8556, 'dhany@gmail.com', 'qwd', 'wqdqwd', 'qwd', '2020-02-03', 'Islam', 'qwdqdqwd', 'qwdqwd', 'qwd', 9876, 'qdqd', 987654, 'a', 'qdq', 'dqwd', 'qwdqd', '2020-02-03', 'Islam', 'qwdq', 'dqwdqw', 'dqwd', 8765, 'qwdqw', 8765, 'a', '2020-02-03', 11, 'SMP PGRI'),
(5, '', 3, 'Doddy', 'Medan', '2011-01-12', 'L', 'a', 'aaaa', 0, 2, 0, 0, '-', 'Indonesia', 'Indonesia', 'Islam', 254789, 'aaa@gmail.com', 'HABIBI', '-', 'Medan', '2020-02-03', 'Islam', 'Wiraswata', 'Indonesia', 'aa', 8.52453e+008, 'fhfhfhgh', 8.52148e+008, 'a', 'Siti', '-', 'Medan', '2020-02-03', 'Islam', 'Ibu Rumah Tangga', 'Indonesia', '', 2.58747e+009, '', 2.25888e+007, 'a', '2020-02-03', 3, ''),
(6, '', 2, 'akd', 'qqwd', '2018-12-01', 'P', 'ab', 'wdqdq', 0, 22, 2, 2, '-', 'Indonesia', 'Indonesia', 'Islam', 2552, 'dhany.zone@gmail.com', 'kwdokwod', 'doekodko', 'wekdowek', '0000-00-00', '-', 'Wiraswasta', 'Indonesia', 'weedwodk', 32151, 'ewdewd', 262, 'a', 'wpodwoqk', 'okwqok', 'medan', '2017-12-01', 'Islam', 'Ibu Rumah Tangga', 'Indonesia', 'welkdow', 2555, 'wedfwd', 2555, 'a', '2020-02-03', 6, ''),
(7, '', 2, 'pewqdopekop', 'qewdq', '2016-09-07', 'L', 'a', 'qwdqwd', 0, 2, 2, 2, 'yatim', 'Indonesia', 'Indonesia', 'Kristen', 225022, 'dkdksdj@gmail.com', 'wej', 'wefwef', 'ewfwf', '2017-12-01', 'Islam', 'wqdqwdj', 'qwdq', 'wedwe', 588522, 'kekwflkewfk', 5520, 'a', 'edlewjdlk', 'jklwejdlk', 'kljewkldj', '2018-12-31', 'Kristen', 'wqdq', 'wdqd', 'dwqdw', 25555, 'qd', 255, 'a', '2020-02-03', 4, ''),
(8, '', 4, 'kdjkqwldjkl', 'medan', '2017-01-02', 'L', 'a', 'Jl. ABC', 0, 1, 0, 0, '-', 'Indonesia', 'Indonesia', 'Islam', 8.52979e+008, 'hello@yahoo.com', 'Dhani', 'dhani', 'dhani', '2019-12-28', 'Islam', 'wiraswasta', 'Indonesia', 'Jl.ABC', 8.52123e+009, 'Jl.ABC', 8.52135e+007, 'a', 'Ibu', '-', 'kjk', '2022-03-06', 'Islam', 'Indonesai', 'Indonesia', 'Jl.ABC', 8.52479e+006, 'Jl.ABC', 8.12346e+008, 'a', '2020-02-03', 2, ''),
(9, '', 1, 'Raamdhani', '', '0000-00-00', '-', 'a', '', 0, 0, 0, 0, '-', '', '', '-', 0, '', '', '', '', '0000-00-00', '-', '', '', '', 0, '', 0, 'a', '', '', '', '0000-00-00', '-', '', '', '', 0, '', 0, 'a', '2020-02-03', 4, ''),
(10, '', 1, 'qwdqwd', '', '0000-00-00', '-', 'a', '', 0, 0, 0, 0, '-', '', '', '-', 0, '', '', '', '', '0000-00-00', '-', '', '', '', 0, '', 0, 'a', '', '', '', '0000-00-00', '-', '', '', '', 0, '', 0, 'a', '2020-02-04', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksipsb`
--

CREATE TABLE IF NOT EXISTS `transaksipsb` (
  `id_transaksipsb` int(10) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(10) NOT NULL,
  `pendaftaran` int(100) NOT NULL,
  `pangkal` int(100) NOT NULL,
  `uangsekolah` int(100) NOT NULL,
  `uangsarana` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  PRIMARY KEY (`id_transaksipsb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `transaksipsb`
--

INSERT INTO `transaksipsb` (`id_transaksipsb`, `id_siswa`, `pendaftaran`, `pangkal`, `uangsekolah`, `uangsarana`, `total`, `bayar`, `sisa`, `tgl_transaksi`) VALUES
(4, 3, 250000, 4700000, 750000, 950000, 5650000, 2500000, 3150000, '2020-02-02'),
(5, 4, 250000, 1900000, 650000, 900000, 3700000, 1500000, 2200000, '2020-02-03'),
(6, 5, 250000, 1850000, 750000, 950000, 3800000, 2000000, 1800000, '2020-02-03'),
(7, 9, 250000, 1400000, 650000, 900000, 3200000, 500000, 2700000, '2020-02-03'),
(8, 9, 250000, 1400000, 650000, 900000, 3200000, 500000, 2700000, '2020-02-03'),
(9, 9, 250000, 1400000, 650000, 900000, 3200000, 40000, 3160000, '2020-02-03'),
(10, 10, 250000, 1400000, 650000, 900000, 3200000, 3000000, 200000, '2020-02-04'),
(11, 10, 250000, 1400000, 650000, 900000, 3200000, 2000000, 1200000, '2020-02-04'),
(12, 10, 250000, 1400000, 650000, 900000, 3200000, 2000000, 1200000, '2020-02-04'),
(13, 10, 250000, 1400000, 650000, 900000, 3200000, 2000000, 1200000, '2020-02-04'),
(14, 10, 250000, 1400000, 650000, 900000, 3200000, 2000000, 1200000, '2020-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_user` varchar(15) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status_user`, `nama_admin`, `id_sekolah`) VALUES
(1, 'admin', 'admin', 'admin', '', 0),
(2, 'dhani', 'dhani', 'harapan1', '', 0),
(3, 'lala', 'lala', 'harapan2', '', 0),
(4, 'dhani', 'sportif88', 'harapan1', 'Ramadhani', 0);
