-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2019 pada 07.42
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(35) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `kapasitas_listrik` varchar(100) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alasan_pesan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = belum diproses; 1 = sudah diproses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id_question` varchar(30) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `no_hp_user` varchar(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text,
  `status` int(11) NOT NULL COMMENT '0 = belum dijawab; 1 = sudah dijawab'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subs`
--

CREATE TABLE `subs` (
  `id_subs` varchar(35) NOT NULL,
  `email_subs` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = aktif, 0 = unsubs'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_aktif` int(11) NOT NULL COMMENT '0 = belum aktif (baru daftar); 1 : sudah aktif (dari email)',
  `is_subscribe` int(11) NOT NULL COMMENT '0 = belum subscribe; 1 = sudah subscribe ',
  `status` int(11) NOT NULL COMMENT '0= only subs;1 = admin; 2 = user ; 3 = kontraktor',
  `no_hp` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id_subs`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
