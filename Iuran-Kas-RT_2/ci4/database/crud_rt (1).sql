-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 04.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_rt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah` decimal(10,2) DEFAULT NULL,
  `warga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `iuran`
--

INSERT INTO `iuran` (`id`, `keterangan`, `tanggal`, `bulan`, `tahun`, `jumlah`, `warga_id`) VALUES
(1, 'Kas Lunas 2', '2021-09-23', 9, '2023', 90000.00, 1),
(2, 'Kas Lunas 3', '2023-06-07', 6, '2023', 100000.00, 2),
(3, 'Kas Lunas 4', '2023-06-14', 6, '2023', 70000.00, 3),
(4, 'Kas Lunas 5', '2023-06-15', 6, '2023', 10000.00, 4),
(5, 'Kas Lunas 6', '2023-06-05', 6, '2023', 30000.00, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `useremail` varchar(200) DEFAULT NULL,
  `userpassword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `useremail`, `userpassword`) VALUES
(1, 'admin', 'admin@email.com', '$2y$10$4M1friLpacc7q8qkB.mJj.mh39Ob0135iHRmPi9fFQUrZWGWBQA7e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `warga_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_rumah` varchar(10) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`warga_id`, `nik`, `nama`, `kelamin`, `alamat`, `no_rumah`, `status`) VALUES
(1, '3279010804010008', 'Abdul Aziz Firdaus', 'L', 'Bekasi Utara', '47', 2),
(2, '3285032909090011', 'Alif Dwi Pura', 'L', 'Cikarang Timur', '41', 1),
(3, '3295032607042016', 'Ogie Kukuh Y', 'L', 'Cikarang Barat', '35', 5),
(4, '3274032803010044', 'Nurul Najwa Sabila', 'P', 'Cikarang Utara', '40', 6),
(5, '3276032807020033', 'Laela Nur Rohmah', 'P', 'Tambun Selatan', '32', 7),
(6, '3275032704010033', 'Fitriyani', 'P', 'Cibarusah', '42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warga_id` (`warga_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`warga_id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `warga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `iuran`
--
ALTER TABLE `iuran`
  ADD CONSTRAINT `iuran_ibfk_1` FOREIGN KEY (`warga_id`) REFERENCES `warga` (`warga_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
