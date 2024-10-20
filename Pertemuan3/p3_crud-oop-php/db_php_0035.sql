-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2024 pada 14.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0035`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_0035`
--

CREATE TABLE `tb_user_0035` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `poto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user_0035`
--

INSERT INTO `tb_user_0035` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `poto`) VALUES
(11, 'Callista', 'Pekalongan', '0857900012345', 'perempuan', '6714f962bda17.jpg'),
(12, 'Wildan', 'Pekalongan', '0857123455551', 'laki-laki', '6714fa1a014ce.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user_0035`
--
ALTER TABLE `tb_user_0035`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user_0035`
--
ALTER TABLE `tb_user_0035`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
