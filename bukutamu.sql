-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2022 at 07:46 PM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id` int(11) NOT NULL,
  `nama_bagian` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`id`, `nama_bagian`, `status`) VALUES
(4, 'Main Office', '1'),
(5, 'Gudang Sentral', '1'),
(6, 'Gedung  Depan', '1'),
(8, 'Gudang Belakang', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `nama_jabatan`, `status`) VALUES
(1, 'Manajer', '1'),
(2, 'Supervisor', '1'),
(3, 'Staff', '1'),
(4, 'Cleaning Service', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kartu_tamu`
--

CREATE TABLE `tbl_kartu_tamu` (
  `id` int(11) NOT NULL,
  `id_tamu` int(11) NOT NULL,
  `serial_kartu` varchar(100) NOT NULL,
  `tgl_dipakai` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_dikembalikan` datetime DEFAULT NULL,
  `status` enum('y','t') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kartu_tamu`
--

INSERT INTO `tbl_kartu_tamu` (`id`, `id_tamu`, `serial_kartu`, `tgl_dipakai`, `tgl_dikembalikan`, `status`) VALUES
(17, 12, '41356346734754854854845', '2022-06-05 19:36:08', NULL, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lampiran`
--

CREATE TABLE `tbl_lampiran` (
  `id` int(11) NOT NULL,
  `id_tamu` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tgl_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lampiran`
--

INSERT INTO `tbl_lampiran` (`id`, `id_tamu`, `file`, `tgl_upload`) VALUES
(7, 12, 'Celine Evangelista - Wikipedia bahasa Indonesia, ensiklopedia bebas.pdf', '2022-06-05 19:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket_surat`
--

CREATE TABLE `tbl_paket_surat` (
  `id` int(11) NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `isi_paket` varchar(200) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `tgl_simpan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `bagian` varchar(150) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `status` enum('aktif','blok') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `nip`, `nama`, `jabatan`, `bagian`, `no_hp`, `status`) VALUES
(1, '214125125125125', 'Didik', 'Ketua Suku', 'Main Office', '0812343213515', 'aktif'),
(2, '143643745764373473', 'Ira', 'Supervisor', 'Main Office', '085323523523', 'aktif'),
(5, '35252356346346346', 'Yetik', 'Staff', 'Gudang Mesiu', '08412412414', 'aktif'),
(6, '214125125125125', 'Supri', 'Staff', 'Main Office', '0812343213515', 'aktif'),
(7, '214125125125125', 'Agus', 'Staff', 'Main Office', '0812343213515', 'aktif'),
(8, '214125125125125', 'Kocor', 'Supervisor', 'Main Office', '0812343213515', 'aktif'),
(9, '214125125125125', 'Leni', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(10, '214125125125125', 'Jipin', 'Ketua Suku Apache ', 'Main Office', '0812343213515', 'aktif'),
(11, '214125125125125', 'Arip', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(12, '', 'Gufron', 'Staff Ahli ', 'Main Office', '0812343213515', 'aktif'),
(13, '214125125125125', 'Edi', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(14, '214125125125125', 'Hari', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(15, '214125125125125', 'Aris', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(16, '214125125125125', 'Santi', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(17, '214125125125125', 'Dewi', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(18, '214125125125125', 'Ita', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(19, '214125125125125', 'Hudi', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(20, '214125125125125', 'Purbo', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(21, '214125125125125', 'Tukah', 'Ketua Suku', 'Main Office', '0812343213515', 'aktif'),
(22, '214125125125125', 'Muklis', 'Staff', 'Main Office', '0812343213515', 'aktif'),
(23, '214125125125125', 'Sarif', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(24, '214125125125125', 'Dendi', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(25, '214125125125125', 'Gani', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(26, '214125125125125', 'Susilo', 'Ketua Suku Apache Surya', 'Main Office', '0812343213515', 'aktif'),
(27, '214125125125125', 'Atun', 'Supervisor', 'Main Office', '0812343213515', 'aktif'),
(59, '4124124124', 'Parjo', 'Staff', 'Gudang Belakang', '08412412414', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenkel` varchar(2) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `tgl_datang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keperluan` text NOT NULL,
  `nama_tujuan` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`id`, `nama`, `alamat`, `jenkel`, `no_hp`, `tujuan`, `tgl_datang`, `keperluan`, `nama_tujuan`, `photo`, `user_id`, `nama_user`) VALUES
(12, 'Sudjatmiko', 'Mojolebak Kupang Jetis Kab. Mojokerto', 'L', '083435235235623', 'Gudang Belakang', '2022-06-05 19:36:08', 'Setor Indomie ', '59', 'foto_sudjatmiko_tamu_2022-06-05.jpeg', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `moto` varchar(100) DEFAULT NULL,
  `jenkel` varchar(2) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `tentang` text,
  `email` varchar(50) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `level` varchar(3) DEFAULT NULL,
  `register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `nama`, `moto`, `jenkel`, `username`, `password`, `tentang`, `email`, `nohp`, `status`, `level`, `register`, `photo`) VALUES
(1, 'Cak Admin', 'Just do it', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'I am a mountainner. to me mountainerring is a life', 'admine_jhon@gmail.com', '082244339826', 1, '1', '2022-02-03 06:07:55', 'e1b0bef49766ac35512dec14d158f7bc.jpg'),
(5, 'Celine Evangelista', NULL, 'P', 'celine', 'dba7b8a81dc064a62919df57e69d0054', NULL, 'celine_evangelista@gmail.com', '082244339826', 1, '1', '2022-06-05 12:32:34', '966d0fd03a9785fb6526a219a054f465.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kartu_tamu`
--
ALTER TABLE `tbl_kartu_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paket_surat`
--
ALTER TABLE `tbl_paket_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kartu_tamu`
--
ALTER TABLE `tbl_kartu_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_paket_surat`
--
ALTER TABLE `tbl_paket_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
