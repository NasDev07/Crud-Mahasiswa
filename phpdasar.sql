-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 09:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(5) NOT NULL,
  `nrp` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, 200180020, 'nasruddin', 'nasruddin@gmail.com', 'sistem informasi', ''),
(2, 2001800001, 'fara', 'fara@gmail.com', 'sistem informasi', ''),
(22, 200180016, 'nasruddin', 'nasruddin20182019@gmail.com', 'sistem informasi', '62471e4ce12c5.png'),
(23, 200180016, 'faraliana', 'faraliana@gmail.com', 'sistem informasi', '62471e6f51b27.png'),
(25, 200180000, 'staiko', 'staiko@gmail.com', 'teknik informarika', '62472b33c4209.png'),
(26, 200180001, 'hallo', 'hallo@gmail.com', 'teknik industri', '62473299a2f2d.jpg'),
(27, 200180002, 'nana', 'nana@gmail.com', 'teknik elekro', '6247330fde8ca.png'),
(30, 200180000, 'baks', 'nasruddin20182019@gmail.com', 'sistem informasi', '62473674ef5b4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'nasruddin', '$2y$10$TGzGzPuXDw4vNvNEomSn1evpw5FShysqGwKo6M8an3c.Kco/Tl7be'),
(2, 'nas_staiko', '$2y$10$wICmOGe86wvC7vjQOTMGFO3akb8KTVWm2Ehkd0yF9t.uGUNZRv8v.'),
(4, 'fara', '$2y$10$9U2Zzf3JRfqdvtR2LIn70.Z4qDQg/MLXdgFJ/r3Y7nyPYI4PFHuvC'),
(6, 'nana', '$2y$10$HEQhyo.VxEjz2Qg14z./HepowkivNEj2QyN6qyEzLeETM5B8/JSpS'),
(7, 'hallo', '$2y$10$YnLGj1T3MIr7AKxKg78E1umvZcZNVaveSX.SXH2uT59PJswypbmZa'),
(8, 'test', '$2y$10$kYpCYKLxKCtKAWzOURGTPuMpDBCZCnDooBkvLihi9V3yN5KCaBJVe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
