-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2023 pada 12.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_besar_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `tipe` varchar(1000) NOT NULL,
  `hitpoint` float NOT NULL,
  `damage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pokemon`
--

INSERT INTO `pokemon` (`id`, `nama`, `gambar`, `deskripsi`, `tipe`, `hitpoint`, `damage`) VALUES
(1, 'Pikachu', 'pikachu.png', 'Pikachu adalah karakter fiksi dan salah satu spesies dalam waralaba media Pokémon yang dimiliki oleh Nintendo dan Game Freak. Dirancang oleh Atsuko Nishida dan Ken Sugimori, Pikachu pertama kali muncul dalam permainan video Pocket Monsters: Red and Green pada tahun 1996.[b] Pikachu adalah makhluk berwarna kuning yang menyerupai tikus dengan kemampuan listrik. Ia adalah karakter utama dalam semesta Pokémon, bertugas sebagai maskot waralaba dan juga sebagai maskot utama untuk Nintendo.\r\nPikachu secara luas dianggap sebagai spesies Pokémon paling populer dan terkenal, sebagian besar karena kemunculannya dalam anime Pokémon sebagai pendamping protagonis Ash Ketchum. Dalam penampilan suaranya secara umum, Pikachu disulihsuarakan oleh Ikue Ōtani. Dalam versi lainnya, ia disulihsuarakan oleh Ryan Reynolds dalam film animasi peran hidup Pokémon: Detective Pikachu. Pikachu telah diterima dengan baik oleh para kritikus, dengan pujian khusus diberikan karena kelucuannya, dan telah dianggap sebagai ikon budaya pop Jepang.', 'Listrik', 3, 4),
(5, 'qwe', 'bulbasaur.png', 'asd', 'asd', 123, 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'prasetyono', '$2y$10$aZOeLSwQUt70Vxah49zFlu4cbgdNFbuBi.gktvdLEcitD/b7N/z6u');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pokemon`
--
ALTER TABLE `pokemon`
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
-- AUTO_INCREMENT untuk tabel `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
