-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 03:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs_yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `stock_obat` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stock_obat`, `harga_beli`, `harga_jual`) VALUES
(1, 'paracetamol tablet', 50, 5000, 10000),
(2, 'cairan infus bening', 10, 10000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `no_ktp` char(16) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `riwayat_penyakit` text DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_lengkap`, `no_ktp`, `no_hp`, `email`, `jenis_kelamin`, `agama`, `alamat`, `status_perkawinan`, `pekerjaan`, `riwayat_penyakit`, `tempat_lahir`, `tanggal_lahir`, `created_at`) VALUES
(1, 'febriani', '1234567812345', '081212121', 'febri@gmail.com', 'P', 'kristen', 'jayapura', 'Belum Menikah', 'wartawan', 'tidak ada', 'Jayapura', '2013-05-01', '2023-05-05 13:01:30'),
(2, 'anisyah', '1237654322345', '0812121212', 'ani@gmail.com', 'P', 'islam', 'makasar', 'Menikah', 'apoteker', 'tidak ada', 'Makasar', '2013-05-01', '2023-05-05 13:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `nama_panggilan` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_ktp` char(16) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jenis_pegawai` enum('Medis','Non medis') DEFAULT NULL,
  `status_pegawai` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tanggal_bergabung` date DEFAULT NULL,
  `status_aktif` enum('0','1') DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `agama`, `pendidikan`, `alamat`, `no_ktp`, `no_hp`, `email`, `jenis_pegawai`, `status_pegawai`, `jabatan`, `tanggal_bergabung`, `status_aktif`, `created_at`, `updated_at`) VALUES
(1, 'Rozi', 'ozil', 'L', 'Bandung', '2000-01-01', 'Belum Menikah', 'Islam', 'S1', 'Jl. Batik Pekalongan', '12345678901234', '081212121', 'ozi@gmail.com', 'Non medis', 'Kontrak ', 'Programmer', '2023-05-01', '1', '2023-05-04', NULL),
(2, 'Mahalini', 'lini', 'P', 'Bali', '2000-01-01', 'Belum Menikah', 'Hindhu', 'S1', 'Bali', '12345678901234', '081212121', 'lini@gmail.com', 'Medis', 'Kontrak ', 'Dokter', '2023-05-02', '1', '2023-05-04', NULL),
(3, 'Heri', 'her', 'L', 'Cimahi', '2000-01-02', 'Menikah', 'Islam', 'S1', 'cimahi', '12345678901234', '08121212', 'heri@gmail.co', 'Medis', 'Training', 'Perawat', '2023-05-03', '1', '2023-05-04', NULL),
(4, 'aris', 'ris', 'L', 'jakarta', '2013-04-01', 'Belum Menikah', 'Islam', 'S1', 'jakut', '1234567812345', '081212121', 'aris@gmail.com', 'Non medis', 'Training', 'Kasir', '2023-05-05', '1', '2023-05-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `harga_tindakan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `harga_tindakan`) VALUES
(1, 'tensi darah', 10000),
(2, 'memasang infus', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tindakan_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `pasien_id`, `tindakan_id`, `obat_id`, `pegawai_id`, `tanggal`, `jumlah_biaya`) VALUES
(1, 1, 1, 1, 3, '2023-05-05 14:06:28', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `authKey` varchar(250) DEFAULT NULL,
  `accessToken` varchar(250) DEFAULT NULL,
  `status_active` enum('0','1') DEFAULT NULL,
  `role_user` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authKey`, `accessToken`, `status_active`, `role_user`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin01', 'admin01', '1', 'admin', '2023-05-05 08:41:25', '0000-00-00 00:00:00'),
(2, 'perawat', 'perawat', 'perawat01', 'perawat01', '1', 'perawat', '2023-05-05 10:18:14', '0000-00-00 00:00:00'),
(3, 'apoteker', 'apoteker', 'apoteker01', 'apoteker01', '1', 'apoteker', '2023-05-05 10:18:14', '0000-00-00 00:00:00'),
(4, 'kasir', 'kasir', 'kasir01', 'kasir01', '1', 'kasir', '2023-05-05 10:22:58', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `relasi_transaksi_obat` (`obat_id`),
  ADD KEY `relasi_transaksi_pasien` (`pasien_id`),
  ADD KEY `relasi_transaksi_tindakan` (`tindakan_id`),
  ADD KEY `relasi_transakisi_pegawai` (`pegawai_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `relasi_transakisi_pegawai` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `relasi_transaksi_obat` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `relasi_transaksi_pasien` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `relasi_transaksi_tindakan` FOREIGN KEY (`tindakan_id`) REFERENCES `tindakan` (`id_tindakan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
