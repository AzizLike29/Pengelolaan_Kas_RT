-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 04.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-arsip-ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip`
--

CREATE TABLE `tbl_arsip` (
  `id_arsip` int(11) NOT NULL,
  `id_dep` int(11) DEFAULT NULL,
  `no_arsip` varchar(15) DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET armscii8 DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  `file_arsip` text DEFAULT NULL,
  `ukuran_file` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id_arsip`, `id_dep`, `no_arsip`, `keterangan`, `deskripsi`, `tgl_upload`, `tgl_update`, `file_arsip`, `ukuran_file`, `id_kategori`, `id_user`) VALUES
(14, 10, '23062043-tsY8', 'Iuran Bulanan', 'Lunas', '2023-06-20', '2023-06-20', '1687265824_1ace634e303a5310630d.pdf', 3579227, NULL, 1),
(15, 11, '23062011-KiNj', 'Iuran Bulanan', 'Lunas', '2023-06-20', '2023-06-20', '1687265846_2033dc58169b4d7902a8.pdf', 3579227, NULL, 1),
(16, 12, '23062029-tro7', 'Iuran Bulanan', 'Belum Lunas', '2023-06-20', '2023-06-20', '1687265864_0d5c801db2576ff1cc09.pdf', 3579227, NULL, 1),
(17, 13, '23062048-1rLF', 'Iuran Bulanan', 'Lunas', '2023-06-20', '2023-06-20', '1687265879_16966b9c06bc821134e8.pdf', 3579227, NULL, 1),
(18, 14, '23062002-aW2Y', 'Iuran Bulanan', 'Belum Lunas', '2023-06-20', '2023-06-20', '1687265894_75df4b6fd81acbecae57.pdf', 3579227, NULL, 1),
(19, 15, '23062016-gkF4', 'Iuran Bulanan', 'Belum Lunas', '2023-06-20', '2023-06-20', '1687265904_b8fa4971b691e39d4d1e.pdf', 3579227, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dep`
--

CREATE TABLE `tbl_dep` (
  `id_dep` int(11) NOT NULL,
  `nama_dep` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `pengelola` varchar(50) CHARACTER SET armscii8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_dep`
--

INSERT INTO `tbl_dep` (`id_dep`, `nama_dep`, `tanggal`, `bulan`, `tahun`, `jumlah`, `keterangan`, `pengelola`) VALUES
(10, 'Ogie Kukuh Yuwono', '2023-06-20', 'Januari', '2023', 400000, 'Iuran Bulanan', 'Bendahara 1'),
(11, 'Abdul Aziz Firdaus', '2023-06-20', 'Februari', '2023', 500000, 'Iuran Bulanan', 'Bendahara 2'),
(12, 'Alif Dwi Putra', '2023-06-20', 'Maret', '2023', 300000, 'Iuran Bulanan', 'Bendahara 3'),
(13, 'Nurul Najwa Sabilla', '2023-06-20', 'April', '2023', 600000, 'Iuran Bulanan', 'Bendahara 1'),
(14, 'Laela Nur Rohmah', '2023-06-20', 'Mei', '2023', 200000, 'Iuran Bulanan', 'Bendahara 2'),
(15, 'Fitriyani', '2023-06-20', 'Juni', '2023', 100000, 'Iuran Bulanan', 'Bendahara 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `nama_orang` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_rumah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `nama_orang`, `jenis_kelamin`, `alamat`, `no_rumah`) VALUES
(29, '312110472', 'Ogie Kukuh Yuwono', 'Laki-laki', 'Cikarang', '22'),
(30, '312110262', 'Abdul Aziz Firdaus', 'Laki-laki', 'Cikarang', '23'),
(31, '312110401', 'Alif Dwi Putra', 'Laki-laki', 'Cikarang', '24'),
(32, '312110451', 'Nurul Najwa Sabilla', 'Perempuan', 'Cikarang', '25'),
(33, '312110425', 'Laela Nur Rohmah', 'Perempuan', 'Cikarang', '26'),
(34, '312110460', 'Fitriyani', 'Perempuan', 'Cikarang', '27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_dep` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`, `foto`, `id_dep`) VALUES
(1, 'Saya', 'Admin@gmail.com', '1234', 1, '2.png', 15),
(11, 'Super Admin', 'Superadmin@gmail.com', '1234', 1, '1687189579_468952292e46cd7d655e.png', 14),
(12, 'Pengguna', 'Pengguna', '1234', 2, '1687189661_770c3948a5428fa8befd.png', 13);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  ADD PRIMARY KEY (`id_arsip`) USING BTREE;

--
-- Indeks untuk tabel `tbl_dep`
--
ALTER TABLE `tbl_dep`
  ADD PRIMARY KEY (`id_dep`) USING BTREE;

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_dep`
--
ALTER TABLE `tbl_dep`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
