-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 21.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts_pbwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `id_photo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `nama`, `text`, `id_photo`) VALUES
(321, 'anggun', 'bahagia', 881),
(432, 'melati', 'senang', 882);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `text`) VALUES
(121, 'anggun', 'bahagia'),
(122, 'monica', 'kesedihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_photo`
--

CREATE TABLE `tb_photo` (
  `id_photo` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `id_post` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_photo`
--

INSERT INTO `tb_photo` (`id_photo`, `tanggal`, `judul`, `text`, `id_post`) VALUES
(881, '2021-06-06', 'bawar hitam', 'bahagia', 421),
(882, '2021-06-09', 'mawar berduri', 'kesedihan', 431);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `id_kategori` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `tanggal`, `slug`, `judul`, `text`, `id_kategori`) VALUES
(421, '2021-06-01', 'tidak', 'bawar hitam', 'bahagia', 121),
(431, '2021-06-03', 'iya', 'mawar berduri', 'sedih', 122);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`),
  ADD UNIQUE KEY `id_photo` (`id_photo`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD UNIQUE KEY `id_post` (`id_post`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`id_photo`) REFERENCES `tb_photo` (`id_photo`);

--
-- Ketidakleluasaan untuk tabel `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD CONSTRAINT `tb_photo_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `tb_post` (`id_post`);

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
