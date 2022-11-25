-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2022 pada 13.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` char(6) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `telepon`, `jenis_kelamin`, `alamat`) VALUES
('a001', 'arees', '0872366277438', 'L', 'bakung jaya'),
('A002', 'Fajar saus', '09882938822', 'L', 'morbius'),
('b4555', 'yahya', '087654786543', 'L', 'jln makmur'),
('kg1122', 'kilogram', '0888267637376', 'L', 'meteran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` char(6) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penerbit`) VALUES
('BK001', 'GAME OF THRONES 1', 'lupa'),
('BM221', 'BUMI MANUSIA', 'lentera dipanegara'),
('MK002', 'Main Kampf-adolf hitler', 'Franz Eher Nachfolger GmbH'),
('OP20', 'ONE PIECE VOL 20', 'Sounen jump'),
('TKV001', 'Tenggelamnya kapan van der wijck', 'Gema insani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `no_pinjam` int(3) NOT NULL,
  `id_anggota` char(6) NOT NULL,
  `id_buku` char(6) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`no_pinjam`, `id_anggota`, `id_buku`, `tgl_pinjam`) VALUES
(1, 'a001', 'BK001', '2022-11-22'),
(2, 'A002', 'BK001', '2022-11-23'),
(3, 'a003', 'BK001', '2022-11-23'),
(4, 'b4555', 'BK001', '2022-11-23'),
(5, 'kg1122', 'BK001', '2022-11-23'),
(6, 'b4556', 'BK001', '2022-11-08'),
(7, 'A002', 'TKV001', '2022-11-23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `no_pinjam` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
