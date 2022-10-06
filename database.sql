-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220824.5acfb45262
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 06 Okt 2022 pada 06.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7fs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_booking` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_booking` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_booking` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `paket_booking` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_booking`, `jumlah_booking`, `tanggal_booking`, `jam_booking`, `paket_booking`) VALUES
(1, 'PT.Percobaan Pertama', '40 Orang', '2021-11-03', '13:30', 'A'),
(2, 'PT.Sejahtera Sentosa', '75 Orang', '2021-10-30', '14:30', 'A'),
(5, 'Ibnu Hadi Sumitro', '10', '2021-10-29', '11:27', 'B'),
(10, 'Fajar Kurniawan', '75 Orang', '2021-11-13', '12:00', 'A'),
(14, 'Ibnu Hadi Sumitro', '1', '2021-12-07', '10:02', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_paintball`
--

CREATE TABLE `produk_paintball` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `ket_produk` varchar(120) NOT NULL,
  `kat_produk` varchar(120) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `gambar_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_paintball`
--

INSERT INTO `produk_paintball` (`id_produk`, `nama_produk`, `ket_produk`, `kat_produk`, `harga_produk`, `stock_produk`, `gambar_produk`) VALUES
(1, 'S.ARCHON Militer ', 'S.ARCHON Military Camouflage Shirt Men Multicam Tactical Uniform Long Sleeve Shirt', 'Clothes', 450000, 12, 's.archon.jpg'),
(2, 'TACVASEN Summer ', 'Tactical T-shirt Army Navy Combat Airsoft Tops Long Sleeve Military', 'Clothes', 550000, 8, 'tacvasen.jpg'),
(3, 'Men Breathable', 'Long Sleeve Camouflage Shirts Desert Jungle Hiking Camping T Shirts', 'Clothes', 535000, 6, 'breathable.jpg'),
(4, 'ZXQYH Men', 'Combat Training Long Sleeve Tactical T-Shirts Army Camping Breathable T-shirts ', 'Clothes', 475000, 10, 'zxqyh.jpg'),
(5, 'HAN WILD', 'long pants Airsoft Paintball Military Pants With Protector Size 34 - HW01 - Black', 'Long Pants', 470000, 8, 'hanwild.jpg'),
(6, 'SINAIRSOFT', 'Military Tactical Pants Paintball Hunting Combat Army Men Trousers ', 'Long Pants', 580000, 7, 'sinairsoft.jpg'),
(7, 'Combat Pants ACU', 'These pants are made from extremely durable Ripstop material for wear restiance', 'Long Pants', 460000, 9, 'combat.jpg'),
(8, 'PCP Paintball', 'Army Camouflage Military Jacket Men Coat Waterproof Jacket Outfits', 'Jacket', 670000, 5, 'pcp.jpg'),
(9, 'Black Python g8', 'tactical jackets camouflage breathable g8 waterproof army military jacket', 'Jacket', 760000, 6, 'piton.jpg'),
(10, 'TDA Men\'s', 'Camouflage Lightweight Military Tactical Field Jacket Coat with Hood', 'Jacket', 740000, 4, 'tda.jpg'),
(11, 'Army Jacket', 'Tactical Windbreaker Men Waterproof Hoodie Military Field Jacket', 'Jacket', 690000, 7, 'army.jpg'),
(12, 'MAACWEE Army Hat', 'Tactical Camouflage Military Army Hat Airsoft Paintball Basebal', 'Hat', 250000, 15, 'maacwe.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `gender` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `date_created`, `image`, `date_birth`, `gender`) VALUES
(1, 'Fajar', 'Kurniawan', 'kurniawan7437@gmail.com', '$2y$10$spU5WlBOORKVcsAVn2w9Le...tmduGndKqpwt4ZYPE33lTLOHA7Z2', 1636515317, 'Foto.JPG', '1997-09-07', ''),
(2, 'ibnu11', '', 'ibnu11@gmail.com', '$2y$10$9XnsT3BccJBCl5v.sfcPsOyLoxcnXLkuT8NHgC6cOKQmY46rxTiE2', 1637426264, '', '0000-00-00', ''),
(3, 'Kurniawan', '', 'tika07404@gmail.com', '$2y$10$q4zy.P/2bnyefYBRcPe4cOVzHwqaHikTNH1Pc3fq82SZwOsIeY02q', 1638881960, 'profile.jpg', '0000-00-00', ''),
(4, 'Kurniawan', 'Fajar', 'fajarkurniawan@gmail.com', '$2y$10$SUjtcK4SJWPW4q2DL7PIVu6mOOoYiug2M7rY/nJHroYsp3iP3hNr.', 1639384173, 'profile.jpg', '2021-12-02', 'Male'),
(10, 'ihza', 'ihza', 'ihzafarhan69@gmail.com', '$2y$10$vTFhJhcxA0oZOV8Gb/8bi.QoR4kIc3cZOrsWbPR85uYPO2.J70Wgu', 1641101249, '569838.jpg', '2022-01-01', 'Female'),
(12, 'Dinar Ayu', 'Amalia Syahputri', 'ayu@gmail.com', '$2y$10$WEjQQthX4gSLjDxU.gFZKetEQKPeV86xf7CCUJ/59TkEuztCquc3S', 1642594030, 'profile.jpg', '2021-08-18', 'Female'),
(13, 'Jojon', 'Hermawan', 'jojo@gmail.com', '$2y$10$TEtLz8p5o10HpLaqbfBvWOvZyByndwKVae3eNqUvuHRSsQ2ZNjZj.', 1649904646, 'profile.jpg', '2022-02-08', 'Male'),
(14, 'Jojon', 'Hermawan', 'jojon@gmail.com', '$2y$10$jDVFy.2.Jk6QEV/R/TponubCMQ26pdOzu68guRfGFzhnTZp8WCy7.', 1649904683, 'profile.jpg', '2022-02-08', 'Male');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `kode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `kode`, `date_created`) VALUES
(1, 'tika07404@gmail.com', 'wJB/ITYATZteFNJn0aZxMDEowKEfEgNkah++HSgtca4=', 1638881976),
(2, 'tika07404@gmail.com', 'fOgszZRNLE6Ue4PLsQa/KMRUEh94Z7FecUJUv2v/OXk=', 1638882097),
(3, 'tika07404@gmail.com', 'wAKLQnV502ftDHDTi6ompBw6vEDpBLoQO5JIXgTQdFQ=', 1638882197),
(4, 'tika07404@gmail.com', 'f5c0eCq7BXxOcw0b7G6KXksx9IrJIuQHcrqAu/sRw04=', 1638882420),
(5, 'tika07404@gmail.com', 'nzqXIvjP2qWbtOiIQ1AzVkqK5aW1mkJpP/NjU5XSDMg=', 1638882987),
(6, 'ihzafarhan69@gmail.com', 'H1+k1PgfZKHuZa0UMAvCOsF5D57Jds+yCJMQ/FmJ9+Q=', 1641101260),
(7, 'ihzafarhan69@gmail.com', '/AY3jiAtbqB45FX1Lcb4vu0yW0UyTnnKKQMzEOXC4Qg=', 1641101267),
(8, 'kurniawan7437@gmail.com', 'YNcHSMRPEsnIoSw2ip5aJn5au/ACkWM5tYrLpprRkhA=', 1642594640);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `produk_paintball`
--
ALTER TABLE `produk_paintball`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk_paintball`
--
ALTER TABLE `produk_paintball`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
