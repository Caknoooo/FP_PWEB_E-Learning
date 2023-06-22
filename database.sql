-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2023 at 03:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp-pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` int(11) NOT NULL,
  `jumlah_modul` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `nama`, `deskripsi`, `durasi`, `jumlah_modul`, `tingkat`, `gambar`) VALUES
(1, 'Pemrograman dengan Kotlin', 'Pelajari dasar bahasa pemrograman, functional programming, object-oriented programming (OOP), serta concurrency dengan menggunakan Kotlin.', 50, 118, 'dasar', 'images/kotlin.png'),
(2, 'Prinsip Pemrograman Solid', 'Pelajari kelima prinsip desain yang merupakan pedoman untuk rancangan kode yang baik pada pemrograman berorientasi objek (OOP).', 15, 41, 'menengah', 'images/solid.png'),
(3, 'Android Developer Expert', 'Saatnya menjadi Android Expert dengan belajar Clean Architecture, Reactive, Dependency Injection, Modularization, Performance, dan Security.', 90, 87, 'Professional', 'images/android.png'),
(4, 'Dasar Visualisasi Data', 'Pelajari teknik dasar untuk representasi hasil secara visual sehingga dapat menceritakan dan mempresentasikan data secara efektif.\r\n', 16, 50, 'Dasar', 'images/data_visualization.jpg'),
(5, 'Machine Learning Operations (MLOps)', 'Pelajari proses pengembangan dan pengoperasian sistem machine learning dalam lingkup produksi dengan menerapkan berbagai prinsip MLOps.', 45, 72, 'Mahir', 'images/ml.jpg'),
(6, 'Fundamental Aplikasi Flutter', 'Pelajari komponen fundamental Flutter berdasarkan teknik yang digunakan industri mulai dari state management, API, database, sampai testing.', 70, 87, 'menengah', 'images/flutter.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `nama`, `gambar_logo`) VALUES
(1, 'Samsung Indonesia', 'images/samsung'),
(2, 'Microsoft', 'images/microsoft'),
(3, 'alcatel', 'images/alcatel'),
(4, 'aws', 'images/aws'),
(5, 'ericsson', 'images/ericsson'),
(6, 'Google Indonesia', 'images/google'),
(7, 'IBM', 'images/ibm'),
(8, 'indosat', 'images/indosat'),
(9, 'Line', 'images/line'),
(10, 'lintasarta', 'images/lintasarta'),
(11, 'telkom', 'images/telkom'),
(12, 'Lenovo', 'images/lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `nama`) VALUES
(1, 'Java Kanaya Prada'),
(2, 'Master Cakno'),
(3, 'Thoriq Afif Habibi'),
(4, 'M Naufal Badruttamam'),
(5, 'Afiq Fawwaz Haidar'),
(6, 'Kevin Nathanael');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_course`
--

CREATE TABLE `tutor_course` (
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor_course`
--

INSERT INTO `tutor_course` (`cid`, `tid`) VALUES
(1, 1),
(1, 4),
(2, 3),
(2, 2),
(3, 2),
(3, 6),
(4, 5),
(4, 3),
(5, 1),
(5, 3),
(6, 4),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO user (id, nama, email, role, password) VALUES (1, 'Admin', 'admin@gmail.com', 'admin', 'password');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD KEY `uid` (`uid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_course`
--
ALTER TABLE `tutor_course`
  ADD KEY `cid` (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `course_user_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`id`);

--
-- Constraints for table `tutor_course`
--
ALTER TABLE `tutor_course`
  ADD CONSTRAINT `tutor_course_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `tutor_course_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `tutor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
