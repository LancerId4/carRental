-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 13.28
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
-- Database: `beritapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_car` varchar(50) NOT NULL,
  `id_pickup` varchar(50) NOT NULL,
  `date_pickup` varchar(20) NOT NULL,
  `id_dropoff` varchar(50) NOT NULL,
  `date_dropoff` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
