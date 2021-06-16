-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 09.45
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `max`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `max` (
`nilai` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_fasilitas`
--

CREATE TABLE `tb_kriteria_fasilitas` (
  `id_kriteria_fasilitas` int(4) NOT NULL,
  `pilihan_kriteria_fasilitas` varchar(50) NOT NULL,
  `bobot_kriteria_fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria_fasilitas`
--

INSERT INTO `tb_kriteria_fasilitas` (`id_kriteria_fasilitas`, `pilihan_kriteria_fasilitas`, `bobot_kriteria_fasilitas`) VALUES
(1, 'Sangat Layak Dan Lengkap', 4),
(2, 'Layak', 3),
(3, 'Kurang Layak', 2),
(4, 'Sangat Tidak Layak', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_lingkungan`
--

CREATE TABLE `tb_kriteria_lingkungan` (
  `id_kriteria_lingkungan` int(4) NOT NULL,
  `pilihan_kriteria_lingkungan` varchar(50) NOT NULL,
  `bobot_kriteria_lingkungan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria_lingkungan`
--

INSERT INTO `tb_kriteria_lingkungan` (`id_kriteria_lingkungan`, `pilihan_kriteria_lingkungan`, `bobot_kriteria_lingkungan`) VALUES
(1, 'Sangat Bersih', 4),
(2, 'Bersih', 3),
(3, 'Kotor', 2),
(4, 'Sangat kotor', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_pelayanan`
--

CREATE TABLE `tb_kriteria_pelayanan` (
  `id_kriteria_pelayanan` int(4) NOT NULL,
  `pilihan_kriteria_pelayanan` varchar(50) NOT NULL,
  `bobot_kriteria_pelayanan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria_pelayanan`
--

INSERT INTO `tb_kriteria_pelayanan` (`id_kriteria_pelayanan`, `pilihan_kriteria_pelayanan`, `bobot_kriteria_pelayanan`) VALUES
(1, 'Sangat Baik Sekali', 4),
(2, 'Baik', 3),
(3, 'Tidak Baik', 2),
(4, 'Sangat Tidak Baik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_tenagamedis`
--

CREATE TABLE `tb_kriteria_tenagamedis` (
  `id_kriteria_tenmed` int(4) NOT NULL,
  `pilihan_kriteria_tenmed` varchar(50) NOT NULL,
  `bobot_kriteria_tenmed` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria_tenagamedis`
--

INSERT INTO `tb_kriteria_tenagamedis` (`id_kriteria_tenmed`, `pilihan_kriteria_tenmed`, `bobot_kriteria_tenmed`) VALUES
(1, 'Sangat Mumpuni', 4),
(2, 'Mumpuni', 3),
(3, 'Kurang Mumpuni', 3),
(4, 'Sangat kurang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Rizki Hariyanto', 'admin', 'admin'),
(2, 'Rifqy Abrory', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(4) NOT NULL,
  `id_puskesmas` int(4) NOT NULL,
  `id_kriteria_lingkungan` int(4) NOT NULL,
  `id_kriteria_tenmed` int(4) NOT NULL,
  `id_kriteria_pelayanan` int(4) NOT NULL,
  `id_kriteria_fasilitas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_puskesmas`, `id_kriteria_lingkungan`, `id_kriteria_tenmed`, `id_kriteria_pelayanan`, `id_kriteria_fasilitas`) VALUES
(39, 110, 1, 1, 1, 1),
(40, 111, 2, 2, 2, 2),
(42, 116, 1, 1, 1, 1),
(43, 117, 2, 1, 1, 1),
(44, 115, 2, 2, 1, 1),
(45, 119, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_puskesmas`
--

CREATE TABLE `tb_puskesmas` (
  `id_puskesmas` int(4) NOT NULL,
  `nama_puskesmas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_puskesmas`
--

INSERT INTO `tb_puskesmas` (`id_puskesmas`, `nama_puskesmas`, `alamat`, `id_user`) VALUES
(110, 'Puskesmas Ciputat', 'Jalan Ki Hajar Dewantara, Ciputat, Kec. Ciputat, Kota Tangerang Selatan, Banten 15411', 0),
(111, 'Puskesmas Jombang', ' Jl. Sumatera No.3, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414', 0),
(115, 'Puskesmas Kampung Sawah', 'Jl. Gelatik No. 1 RT 6 RW 1, Kampung Sawah, Ciputat, Jl. Gelatik, Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413', 0),
(116, 'Puskesmas Sawah Baru', 'alan Palem Puri 1, RT. 03/06, Sawah Baru, Ciputat, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413', 0),
(117, 'Puskesmas Situ Gintung', ' Jl. Hidup Baru No.44, Serua, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414', 0),
(119, 'Puskesmas Tes', 'Tes 1', 0);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `total kriteria`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `total kriteria` (
`jumlah` varchar(6)
,`Sum(tb_kriteria_lingkungan.bobot_kriteria_lingkungan)` double
,`Sum(tb_kriteria_tenagamedis.bobot_kriteria_tenmed)` double
,`Sum(tb_kriteria_pelayanan.bobot_kriteria_pelayanan)` double
,`Sum(tb_kriteria_fasilitas.bobot_kriteria_fasilitas)` double
);

-- --------------------------------------------------------

--
-- Struktur untuk view `max`
--
DROP TABLE IF EXISTS `max`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `max`  AS  select max(((((`tb_kriteria_lingkungan`.`bobot_kriteria_lingkungan` * 0.4) + (`tb_kriteria_tenagamedis`.`bobot_kriteria_tenmed` * 0.25)) + (`tb_kriteria_pelayanan`.`bobot_kriteria_pelayanan` * 0.15)) + (`tb_kriteria_fasilitas`.`bobot_kriteria_fasilitas` * 0.2))) AS `nilai` from (((((`tb_nilai` join `tb_puskesmas` on((`tb_puskesmas`.`id_puskesmas` = `tb_nilai`.`id_puskesmas`))) join `tb_kriteria_lingkungan` on((`tb_kriteria_lingkungan`.`id_kriteria_lingkungan` = `tb_nilai`.`id_kriteria_lingkungan`))) join `tb_kriteria_tenagamedis` on((`tb_nilai`.`id_kriteria_tenmed` = `tb_kriteria_tenagamedis`.`id_kriteria_tenmed`))) join `tb_kriteria_pelayanan` on((`tb_kriteria_pelayanan`.`id_kriteria_pelayanan` = `tb_nilai`.`id_kriteria_pelayanan`))) join `tb_kriteria_fasilitas` on((`tb_kriteria_fasilitas`.`id_kriteria_fasilitas` = `tb_nilai`.`id_kriteria_fasilitas`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `total kriteria`
--
DROP TABLE IF EXISTS `total kriteria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total kriteria`  AS  select 'JUMLAH' AS `jumlah`,sum(`tb_kriteria_lingkungan`.`bobot_kriteria_lingkungan`) AS `Sum(tb_kriteria_lingkungan.bobot_kriteria_lingkungan)`,sum(`tb_kriteria_tenagamedis`.`bobot_kriteria_tenmed`) AS `Sum(tb_kriteria_tenagamedis.bobot_kriteria_tenmed)`,sum(`tb_kriteria_pelayanan`.`bobot_kriteria_pelayanan`) AS `Sum(tb_kriteria_pelayanan.bobot_kriteria_pelayanan)`,sum(`tb_kriteria_fasilitas`.`bobot_kriteria_fasilitas`) AS `Sum(tb_kriteria_fasilitas.bobot_kriteria_fasilitas)` from (((((`tb_nilai` join `tb_puskesmas` on((`tb_puskesmas`.`id_puskesmas` = `tb_nilai`.`id_puskesmas`))) join `tb_kriteria_lingkungan` on((`tb_kriteria_lingkungan`.`id_kriteria_lingkungan` = `tb_nilai`.`id_kriteria_lingkungan`))) join `tb_kriteria_tenagamedis` on((`tb_nilai`.`id_kriteria_tenmed` = `tb_kriteria_tenagamedis`.`id_kriteria_tenmed`))) join `tb_kriteria_pelayanan` on((`tb_kriteria_pelayanan`.`id_kriteria_pelayanan` = `tb_nilai`.`id_kriteria_pelayanan`))) join `tb_kriteria_fasilitas` on((`tb_kriteria_fasilitas`.`id_kriteria_fasilitas` = `tb_nilai`.`id_kriteria_fasilitas`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kriteria_fasilitas`
--
ALTER TABLE `tb_kriteria_fasilitas`
  ADD PRIMARY KEY (`id_kriteria_fasilitas`);

--
-- Indeks untuk tabel `tb_kriteria_lingkungan`
--
ALTER TABLE `tb_kriteria_lingkungan`
  ADD PRIMARY KEY (`id_kriteria_lingkungan`);

--
-- Indeks untuk tabel `tb_kriteria_pelayanan`
--
ALTER TABLE `tb_kriteria_pelayanan`
  ADD PRIMARY KEY (`id_kriteria_pelayanan`);

--
-- Indeks untuk tabel `tb_kriteria_tenagamedis`
--
ALTER TABLE `tb_kriteria_tenagamedis`
  ADD PRIMARY KEY (`id_kriteria_tenmed`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_puskesmas` (`id_puskesmas`),
  ADD KEY `C1` (`id_kriteria_lingkungan`),
  ADD KEY `C2` (`id_kriteria_tenmed`),
  ADD KEY `C3` (`id_kriteria_pelayanan`),
  ADD KEY `C4` (`id_kriteria_fasilitas`);

--
-- Indeks untuk tabel `tb_puskesmas`
--
ALTER TABLE `tb_puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria_fasilitas`
--
ALTER TABLE `tb_kriteria_fasilitas`
  MODIFY `id_kriteria_fasilitas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria_lingkungan`
--
ALTER TABLE `tb_kriteria_lingkungan`
  MODIFY `id_kriteria_lingkungan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria_pelayanan`
--
ALTER TABLE `tb_kriteria_pelayanan`
  MODIFY `id_kriteria_pelayanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria_tenagamedis`
--
ALTER TABLE `tb_kriteria_tenagamedis`
  MODIFY `id_kriteria_tenmed` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_puskesmas`
--
ALTER TABLE `tb_puskesmas`
  MODIFY `id_puskesmas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
