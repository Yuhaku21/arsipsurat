-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 12:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_efektivitas`
--

CREATE TABLE `tb_efektivitas` (
  `id_laporan` int(11) NOT NULL,
  `periode` varchar(225) NOT NULL,
  `waktu_rata_rata` varchar(225) NOT NULL,
  `jmlh_arsip_tw` varchar(225) NOT NULL,
  `presentasi_tw` varchar(225) NOT NULL,
  `jmlh_kesalahan` varchar(225) NOT NULL,
  `id_instansi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(225) NOT NULL,
  `kepala_instansi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`id_instansi`, `nama_instansi`, `kepala_instansi`) VALUES
(1, 'Kementerian Pendidikan dan Kebudayaan', 'Dr. Anwar Sutanto');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk`
--

CREATE TABLE `tb_sk` (
  `id_sk` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerima` varchar(225) NOT NULL,
  `perihal` varchar(225) NOT NULL,
  `tgl_arsip` date NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_status_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sk`
--

INSERT INTO `tb_sk` (`id_sk`, `no_surat`, `tgl_keluar`, `penerima`, `perihal`, `tgl_arsip`, `id_instansi`, `id_status_arsip`) VALUES
(1, 'SK/001/2024', '2024-11-04', 'PT. ABC', 'Pengajuan Kerjasama', '2024-11-05', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sm`
--

CREATE TABLE `tb_sm` (
  `id_sm` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_status_arsip` int(11) NOT NULL,
  `perihal` varchar(225) NOT NULL,
  `tgl_arsip` date NOT NULL,
  `pengirim` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sm`
--

INSERT INTO `tb_sm` (`id_sm`, `no_surat`, `tgl_masuk`, `id_instansi`, `id_status_arsip`, `perihal`, `tgl_arsip`, `pengirim`) VALUES
(3, 'SM/001/2024', '2024-11-04', 1, 1, 'Permohonan Informasi', '2024-11-06', 'BPKP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pengarsipan`
--

CREATE TABLE `tb_status_pengarsipan` (
  `id_status_arsip` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `nama`, `telepon`, `username`, `password`, `id_instansi`, `level`) VALUES
(1, 12333, 'Istiyana', '023828', 'admin', 'admin123', 11, 'admin'),
(2, 1236, 'nadia', '23203912', 'staff', 'staff123', 12, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_efektivitas`
--
ALTER TABLE `tb_efektivitas`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tb_sk`
--
ALTER TABLE `tb_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `tb_sm`
--
ALTER TABLE `tb_sm`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_status_pengarsipan`
--
ALTER TABLE `tb_status_pengarsipan`
  ADD PRIMARY KEY (`id_status_arsip`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_efektivitas`
--
ALTER TABLE `tb_efektivitas`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sk`
--
ALTER TABLE `tb_sk`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sm`
--
ALTER TABLE `tb_sm`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status_pengarsipan`
--
ALTER TABLE `tb_status_pengarsipan`
  MODIFY `id_status_arsip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
