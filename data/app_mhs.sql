-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.epizy.com
-- Waktu pembuatan: 08 Apr 2022 pada 14.32
-- Versi server: 10.3.27-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31456385_app_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(32, 200180020, 'Nasruddin', 'nasruddin20182019@gmail.com', 'Sistem informasi', '624c9e21ae984.png'),
(33, 200180000, 'NasStaiko', 'nasstaiko@gmail.com', 'Teknik Informatika', '624c9e4da9375.png'),
(34, 200180027, 'Arif maulana', 'arif02@gmail.com', 'Sistem informasi', '624c9ea1d0e60.jpg'),
(35, 200180050, 'muhammad habib', 'muhammadhabib543@gmail.com', 'Sistem informasi', '624c9eda68551.jpg'),
(36, 200180006, 'muhammad abdullah ali', 'ali20017@gmail.com', 'Sistem informasi', '624c9f2d43d72.jpg'),
(37, 200180023, 'seprinal', 'rinal08@gmail.com', 'Sistem informasi', '624c9f6188542.jpg'),
(38, 200180033, 'ilham wirayuda', 'ilham87@gmail.com', 'Sistem informasi', '624c9fef55726.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(10, 'nasruddin', '$2y$10$avFxNHVKh.gzLBVTQL9nC.VC5mRwwi/fIKUARb8gj2NzI2GE0Eke.'),
(11, 'arif', '$2y$10$ZCrAZOEBoWcOpJIP.3RFZuIxVyAzl4bMlghlUyTRiCSqRV8RlHpqC'),
(12, 'nasstaiko', '$2y$10$lVxxMDTYlZ8SAPgiK4fzaeKoeFwxSqIKAVmgGMnwP3875IW8mOS7W'),
(13, 'faraliana', '$2y$10$fPZSNTaaR0lxxTfFV6bBjecUvVqyvIBBMMTY4m5liXys/TrYNOb0q');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
