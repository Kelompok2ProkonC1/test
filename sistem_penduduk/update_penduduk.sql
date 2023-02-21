-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `update_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `id_log` int(255) NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bantuan`
--

CREATE TABLE `tb_bantuan` (
  `id_bantuan` int(16) NOT NULL,
  `no_kk` int(16) DEFAULT NULL,
  `nik` int(100) DEFAULT NULL,
  `kepala_keluarga` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `jenis_bantuan` enum('BPNT','PKH','PBI') CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang`
--

CREATE TABLE `tb_datang` (
  `id_datang` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_datang` date NOT NULL,
  `status_tinggal` enum('Tetap','Sementara') NOT NULL,
  `pelapor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `kk` varchar(300) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` int(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(7, 'kk-3270.jpg', '1231452', 34, 'Telukagung', '03', '03', 'Indramayu', 'Indramayu', 'Jawa Barat'),
(8, 'kk-4052.jpg', '1010202030304040', 1, 'Telukagung', '03', '03', 'Indramayu', 'Indramayu', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id_lahir` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mendu`
--

CREATE TABLE `tb_mendu` (
  `id_mendu` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_mendu` date NOT NULL,
  `waktu_mendu` varchar(250) NOT NULL,
  `tempat_mendu` varchar(250) NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mendu`
--

INSERT INTO `tb_mendu` (`id_mendu`, `id_pdd`, `tgl_mendu`, `waktu_mendu`, `tempat_mendu`, `sebab`) VALUES
(3, 4, '2022-11-27', '18.00 WIB', 'RS MM ', 'Sakit Tua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdd`
--

CREATE TABLE `tb_pdd` (
  `id_pend` int(11) NOT NULL,
  `ktp` varchar(300) NOT NULL,
  `kk` varchar(300) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` int(25) DEFAULT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pendidikan` enum('SD','SMP','SMA','Diploma','Sarjana') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL,
  `kewarganegaraan` varchar(300) NOT NULL,
  `peng_input` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdd`
--

INSERT INTO `tb_pdd` (`id_pend`, `ktp`, `kk`, `nik`, `no_kk`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pendidikan`, `pekerjaan`, `status`, `kewarganegaraan`, `peng_input`, `jabatan`) VALUES
(1, '', '', '3318090603080002', NULL, 'Juprianto', 'Semarang', '2020-09-01', 'Laki-laki', 'Telukagung', '01', '02', 'Islam', 'Sudah', 'SD', 'Nelayan', 'Ada', '', NULL, NULL),
(2, '', '', '3318090603080012', NULL, 'Anita', 'Kudus', '2020-09-02', 'Perempuan', 'Telukagung', '01', '02', 'Islam', 'Sudah', 'SD', 'Ibu Rumah Tangga', 'Ada', '', NULL, NULL),
(3, '', '', '3318091907080001', NULL, 'Hardi', 'Kudus', '2020-09-10', 'Laki-laki', 'Telukagung', '02', '02', 'Islam', 'Sudah', 'SD', 'Petani', 'Ada', '', NULL, NULL),
(4, '', '', '3318091907080022', NULL, 'Sawilah', 'Semarang', '2020-09-01', 'Perempuan', 'Telukagung', '01', '04', 'Islam', 'Sudah', 'SD', 'Ibu Rumah Tangga', 'Meninggal', '', NULL, NULL),
(5, '', '', '3318090603080123', NULL, 'Ali Ahmadi', 'Semarang', '2020-09-01', 'Laki-laki', 'Telukagung', '01', '03', 'Islam', 'Belum', 'SD', 'Pelajar', 'Ada', '', NULL, NULL),
(6, '', '', '3318091907080002', NULL, 'Supardi', 'kudus', '2020-09-01', 'Laki-laki', 'Telukagung', '01', '04', 'Islam', 'Sudah', 'SD', 'Petani', 'Meninggal', '', NULL, NULL),
(7, '', '', '3318091907080007', NULL, 'Suparmi', 'Semarang', '2020-09-03', 'Perempuan', 'Telukagung', '01', '01', 'Kristen', 'Sudah', 'SD', 'Ibu Rumah Tangga', 'Pindah', '', NULL, NULL),
(8, '', '', '3318090603080045', NULL, 'Rojali', 'Semarang', '2020-09-01', 'Laki-laki', 'Telukagung', '01', '02', 'Islam', 'Sudah', 'SD', 'PNS', 'Ada', '', NULL, NULL),
(34, 'ktp-8972.jpg', '', '3213030305980005', 2147483647, 'Hitnes Muharram', 'Soebang', '1998-05-13', 'Laki-laki', 'Sukasari', '43', '08', 'RT', 'Belum', 'Sarjana', 'Mager', 'Ada', 'WNI', NULL, NULL),
(43, 'ktp-5898.jpg', 'kk-5898.jpg', '29734798569287345', 0, 'haha', 'anjatan', '2022-12-06', 'Laki-laki', 'Telukagung', '03', '02', 'Islam', 'Belum', 'SMA', 'Petani', 'Ada', 'WNI', '', ''),
(44, 'ktp-2338.', 'kk-2338.', '1010202030304040', 0, 'epul', 'Bango dua', '2022-12-12', 'Laki-laki', 'Telukagung', '03', '03', 'Islam', 'Belum', 'SMA', 'Petani', 'Ada', 'WNI', 'L', 'RT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Kaur Pemerintah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Fajar', 'admin', '1', 'Administrator'),
(2, 'Somat', 'kaur', '1', 'Kaur Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  ADD PRIMARY KEY (`id_pend`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `id_log` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  MODIFY `id_bantuan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_datang`
--
ALTER TABLE `tb_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  MODIFY `id_mendu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD CONSTRAINT `tb_datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD CONSTRAINT `fk_kepala` FOREIGN KEY (`kepala`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD CONSTRAINT `tb_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD CONSTRAINT `tb_mendu_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD CONSTRAINT `tb_pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
