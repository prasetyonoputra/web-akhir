-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 10.42
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
(1, 'Pikachu', 'pikachu.png', 'Pikachu yang dapat menghasilkan listrik berkekuatan tinggi memiliki kantong pipi yang lunak dan mudah melar.', 'Listrik', 3, 4),
(6, 'Bulbasaur', 'bulbasaur.png', 'Bulbasaur dapat ditemukan tidur siang di bawah sinar matahari. Dengan mandi banyak sinar matahari, benih di punggungnya tumbuh makin besar.', 'Rumput', 5, 10),
(7, 'Plusle', 'pulse.png', 'Plusle selalu bertindak sebagai pemandu sorak bagi rekan-rekannya. Setiap kali ada anggota timnya yang berusaha baik di dalam pertempuran, Pokémon ini memendekkan tubuhnya dan menciptakan suara gemeretak bunga api untuk menunjukkan kegembiraannya.', 'Listrik', 3, 2),
(8, 'Totodile', 'totodile.png', 'Walaupun tubuhnya kecil, rahangnya sangat kuat. Meskipun Totodile hanya bermaksud menggigit pelan, kekuatan gigitannya dapat menyebabkan cedera serius.', 'Air', 10, 10),
(9, 'Piplup', 'piplup.png', 'Piplup tidak suka diurus. Sulit untuk menjalin ikatan dengannya karena Pokémon ini tidak menuruti instruksi pelatihnya.', 'Air', 2, 2),
(10, 'Pachirisu', 'pachirisu.png', 'Pachirisu menyimpan bola bulu yang gemeretak karena bermuatan listrik statis bersama dengan buah beri kesukaannya di dalam lubang pohon.', 'Normal', 1, 5),
(11, 'Chikorita', 'chikorita.png', 'Di dalam pertempuran, Chikorita melambai-lambaikan daunnya untuk menghalau lawan-lawannya. Tetapi, daun tersebut juga menghasilkan wangi yang semerbak, yang dapat menenangkan Pokémon-Pokémon yang sedang bertempur dan menciptakan suasana yang tenang dan bersahabat.', 'Rumput', 4, 2),
(13, 'Mudkip', 'mudkip.png', 'Sirip di kepala Mudkip berfungsi sebagai radar yang sangat sensitif. Dengan menggunakan siripnya untuk merasakan gerakan air dan udara, Pokémon ini dapat menentukan apa yang terjadi di sekitarnya tanpa menggunakan matanya.', 'Air', 6, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
