-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 01:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aziz`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `id_ruangan` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `user_id` int(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `kode_booking` varchar(128) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `check_in` int(11) NOT NULL,
  `check_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `id_ruangan`, `username`, `user_id`, `tipe_kamar`, `kode_booking`, `tanggal_mulai`, `tanggal_selesai`, `check_in`, `check_out`) VALUES
(50, 0, 'Muhammad Rifki Aziz', 32, 'Standar', '32/30/10/22', '2022-10-13', '2022-10-19', 0, 0),
(51, 0, 'Muhammad Rifki Aziz', 32, 'Standar', '32/30/10/22', '2022-10-13', '2022-10-19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `id_tipe_kamar` int(128) NOT NULL,
  `nomor_ruangan` int(255) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `id_tipe_kamar`, `nomor_ruangan`, `status`) VALUES
(1, 10, 5, 'Booked'),
(2, 10, 123, 'Booked'),
(3, 12, 8, '--Pilih Status Kamar--'),
(4, 11, 2, '--Pilih Status Kamar--'),
(5, 9, 90, 'Maintenence');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(128) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `tipe_harga` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id`, `nama_kamar`, `fasilitas_kamar`, `tipe_harga`, `img`, `tanggal_update`) VALUES
(9, 'Singl', 'Tipe Single Room memiliki ranjang standar. Selain tempat tidur, perabot lain juga ditawarkan kepada tamu untuk menambah fungsionalitas ruangan seperti meja rias kecil, meja samping tempat tidur kecil, dan meja tulis dengan kursi tunggal', 300000, '121.png', '2022-09-13'),
(10, 'Deluxe', 'Tipe kamar Deluxe punya ukuran luas sekitar 40 meter persegi, dengan fasilitas yang mirip dengan kamar tipe Standard, ditambah beberapa fasilitas pendukung seperti coffee/tea maker, lemari es, kamar mandi plus shower, hingga view menarik di luar ruangan', 400000, '2.png', '2022-09-13'),
(11, 'Standar', 'Tipe President Suite mempunyai fasilitas seperti : Ruang penyimpanan laptop, Telepon IDD dan voicemail, Gratis internet berkecepatan tinggi, Setrika dan papan setrika, Soket internasional, Meja kerja, Mini bar gratis (minuman non-alkohol saja)', 350000, '4.png', '2022-09-13'),
(12, 'Double', 'Tipe Double mempunyai fasilitas seperti : Teras, Telepon, TV satelit, TV kabel, Brankas, AC, Kipas angin, Pemanas ruangan, Lantai kayu/parket, Lemari, Pengering rambut, Peralatan mandi, Toilet, Kamar mandi pribadi, Bathtub atau shower, Minibar, Lemari es, Jam alarm/layanan bangun tidur', 450000, '5.png', '2022-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_pengguna`
--

CREATE TABLE `user_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` int(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `status` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pengguna`
--

INSERT INTO `user_pengguna` (`id`, `username`, `password`, `nama`, `email`, `telepon`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gender`, `status`, `level`) VALUES
(31, 'Muhammad Rifki Aziz', '$2y$10$VBmZnmH4waD3wgcTeHZeluWOXkN0GNAYKvckGthoWaQ3o9OpqdAaa', 'aziz', 'azis@gmail.com', 21515, '423423423423423423423423423423423423423423423423', '2022-10-24', 'qweqw', 'L', 'weqweqwe', '2'),
(32, 'Muhammad Rifki Aziz', '$2y$10$7ftoLABhzqtwMKvJ8El0xuhYe7ZxMf1D/3uKjjJDVQNGTesEGfdWi', 'Aziz', 'azizz@gmail.com', 123, '123', '2022-10-21', '123', 'L', '123', '1'),
(33, 'aziz', '$2y$10$rZHwzKIvJV/KF8P9D6Da8ufgrvt18d028HhBA3TnNq1EMp1Q0J/SK', 'aaaa', 'custom@gmail.com', 123, '123', '2022-10-27', '123', 'L', '123', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_pengguna`
--
ALTER TABLE `user_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
