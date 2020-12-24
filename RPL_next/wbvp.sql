-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:29 PM
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
-- Database: `wbvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jawaban`
--

CREATE TABLE `t_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_opsi`
--

CREATE TABLE `t_opsi` (
  `id_opsi` int(11) NOT NULL,
  `vocab` varchar(255) NOT NULL,
  `opsi` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_opsi`
--

INSERT INTO `t_opsi` (`id_opsi`, `vocab`, `opsi`, `hasil`) VALUES
(1, 'consider', 'mencoba', 'salah'),
(2, 'consider', 'menjaga', 'salah'),
(3, 'consider', 'mempertimbangkan', 'benar'),
(37, 'support', 'terlihat', 'salah'),
(38, 'support', 'mendukung', 'benar'),
(39, 'support', 'melayani', 'salah'),
(40, 'apply', 'berharap', 'salah'),
(41, 'apply', 'membantu', 'salah'),
(42, 'apply', 'menerapkan', 'benar'),
(43, 'develop', 'mengembangkan', 'benar'),
(44, 'develop', 'berlari', 'salah'),
(45, 'develop', 'mengecewakan', 'salah'),
(46, 'expect', 'berhenti', 'salah'),
(47, 'expect', 'berharap', 'benar'),
(48, 'expect', 'berteriak', 'salah'),
(49, 'stop', 'memasang', 'salah'),
(50, 'stop', 'terbang', 'salah'),
(51, 'stop', 'berhenti', 'benar'),
(52, 'mempertimbangkan', 'consider', 'benar'),
(53, 'mempertimbangkan', 'hear', 'salah'),
(54, 'mempertimbangkan', 'run', 'salah'),
(55, 'mendukung', 'look', 'salah'),
(56, 'mendukung', 'support', 'benar'),
(57, 'mendukung', 'serve', 'salah'),
(58, 'menerapkan', 'expect', 'salah'),
(59, 'menerapkan', 'help', 'salah'),
(60, 'menerapkan', 'apply', 'benar'),
(61, 'mengembangkan', 'develop', 'benar'),
(62, 'mengembangkan', 'run', 'salah'),
(63, 'mengembangkan', 'stab', 'salah'),
(64, 'berharap', 'stop', 'salah'),
(65, 'berharap', 'expect', 'benar'),
(66, 'berharap', 'scream', 'salah'),
(67, 'berhenti', 'apply', 'salah'),
(68, 'berhenti', 'fly', 'salah'),
(69, 'berhenti', 'stop', 'benar');

-- --------------------------------------------------------

--
-- Table structure for table `t_ranking`
--

CREATE TABLE `t_ranking` (
  `id_rank` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nilai` int(255) NOT NULL,
  `waktu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_ranking`
--

INSERT INTO `t_ranking` (`id_rank`, `user`, `nilai`, `waktu`) VALUES
(5, 'aa12', 10, 67),
(6, 'aa12', 10, 67),
(7, 'aa12', 10, 67),
(8, 'ahmad_217', 10, 60),
(9, 'cobacoba', 10, 24),
(10, 'cobacoba', 10, 24),
(11, 'cobacoba', 10, 24),
(12, 'qwerty', 3, 31),
(13, 'qwerty', 3, 31),
(14, 'qwerty', 3, 1),
(15, 'qwerty', 3, 1),
(16, 'qwerty', 0, 2),
(17, '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_vocabulary`
--

CREATE TABLE `t_vocabulary` (
  `id_vocabulary` varchar(10) NOT NULL,
  `v_indo` varchar(255) NOT NULL,
  `v_ing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_vocabulary`
--

INSERT INTO `t_vocabulary` (`id_vocabulary`, `v_indo`, `v_ing`) VALUES
('v001', 'mempertimbangkan', 'consider'),
('v002', 'mendukung', 'support'),
('v003', 'menerapkan', 'apply'),
('v004', 'mengembangkan', 'develop'),
('v005', 'berharap', 'expect'),
('v006', 'berhenti', 'stop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`) VALUES
(1, 'aa12', 'aa'),
(2, 'aabd_malik', 'aa'),
(3, 'ahmad_217', '123'),
(4, 'cobacoba', '123'),
(5, 'qwerty', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `t_opsi`
--
ALTER TABLE `t_opsi`
  ADD PRIMARY KEY (`id_opsi`);

--
-- Indexes for table `t_ranking`
--
ALTER TABLE `t_ranking`
  ADD PRIMARY KEY (`id_rank`);

--
-- Indexes for table `t_vocabulary`
--
ALTER TABLE `t_vocabulary`
  ADD PRIMARY KEY (`id_vocabulary`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `t_opsi`
--
ALTER TABLE `t_opsi`
  MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `t_ranking`
--
ALTER TABLE `t_ranking`
  MODIFY `id_rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
