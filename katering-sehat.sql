-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2021 pada 11.38
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katering-sehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(256) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pembayaran` enum('Bank Jago','Bank Mandiri','Bank BNI','Bank BCA','Bank BRI') NOT NULL,
  `paket` enum('1 hari','1 bulan','6 bulan','1 tahun') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `name`, `address`, `no_telp`, `email`, `pembayaran`, `paket`, `date_created`) VALUES
(29, 'Naman', 'Jatisari', '088829988289', 'naman123@gmail.com', 'Bank Jago', '1 tahun', 1607347414),
(30, 'Nawa Hayu M R.', 'Cikampek', '08999990997', 'nawa123@gmail.com', 'Bank BNI', '1 hari', 1607347536),
(31, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank BNI', '1 bulan', 1607347686),
(32, 'Khalil Annbiya', 'Perum Gading Mas', '098772899288', 'khalilannbiya@gmail.com', 'Bank Jago', '1 hari', 1607769592),
(33, 'Khalil Annbiya', 'Perum Gading Mas', '098772899288', 'khalilannbiya@gmail.com', 'Bank Mandiri', '1 bulan', 1607772178),
(34, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Jago', '6 bulan', 1610404514),
(35, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Jago', '1 bulan', 1615633715),
(36, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Mandiri', '1 bulan', 1615633926),
(37, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Jago', '1 hari', 1616989272),
(38, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Mandiri', '1 hari', 1619512432),
(39, 'Khalil Annbiya', 'Perum Gading Mas', '098772899288', 'khalilannbiya@gmail.com', 'Bank Jago', '1 hari', 1621587760),
(40, 'M Firas Akbar', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'Bank Mandiri', '1 bulan', 1623804933);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nick` varchar(14) NOT NULL,
  `address` varchar(256) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `nick`, `address`, `no_telp`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Syeich Khalil Annbiya', 'Khalil', 'Perum Gading Mas', '08999199817', 'syeichkhalil@gmail.com', 'default.jpg', '$2y$10$MFbsL1DxskstENX2EXgovOs2lJQUA5TjHzEwjUcDxk5QM71NfFZyi', 1, 1, 0),
(7, 'Naman', 'Naman', 'Telaga Sari', '088829988289', 'naman123@gmail.com', 'default.jpg', '$2y$10$3sQ0XLfa3alyK3B46n54e.VU44GEMj/ILB87hxOlwC5lyj80DRzWO', 2, 1, 0),
(8, 'Nawa Hayu M R.', 'Nawa', 'Cikampek', '08999990997', 'nawa123@gmail.com', 'default.jpg', '$2y$10$QocLsxAkKz2WVgcPhXf/MeOSxjB4aD8/Rl2MpLJuGApopmjr7U6Xm', 2, 1, 0),
(9, 'M Firas Akbar', 'Firas', 'Perumnas TelukJjambe', '098290900920', 'firas123@gmail.com', 'default.jpg', '$2y$10$6DlueTHJUzzeVBRpveBHo.IOwocOWWi.SD0rLUhzXQFU6swCMI1VK', 2, 1, 0),
(10, 'Khalil Annbiya', 'Annbiya', 'Perum Gading Mas', '098772899288', 'khalilannbiya@gmail.com', 'default.jpg', '$2y$10$x5ZgNYPtxWjMQZFSi4Z8KumI..Q2xlRyJT4fWfh9AL6Co.c87VnUi', 2, 1, 0),
(11, 'Khalil', 'Annbiya', 'Perum Gading Mas', '098772899288', 'khalil@gmail.com', 'default.jpg', '$2y$10$aDe9O9Va2xMv6RKsag6xRO7/awTKTnG1mbJfnGhzR1bWpdxK1IrZm', 2, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
