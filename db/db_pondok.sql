-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 15.22
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pondok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id_bln` int(11) NOT NULL,
  `nama_bln` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bulan`
--

INSERT INTO `tb_bulan` (`id_bln`, `nama_bln`) VALUES
(1, 'Januari'),
(2, 'Febuari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_santri`
--

CREATE TABLE `tb_data_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_santri`
--

INSERT INTO `tb_data_santri` (`id`, `nama`, `nis`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `id_kamar`, `id_kelas`, `no_hp`, `password`, `tgl_masuk`, `status`, `foto`) VALUES
(4, 'Wakhid', '122', '2022-10-13', 'ds', 'Laki - Laki', 1, 1, '0887787687', '22221', '2022-09-28', 'aktif', 'sa'),
(5, 'Wakhid', '122', '2022-10-13', 'ds', 'Laki - Laki', 5, 1, '0887787687', '22221', '2022-09-28', 'aktif', 'sa'),
(9, 'aku', '2', '2022-10-13', 'pujo', 'Laki - Laki', 9, 1, '32', '1212', '2022-10-04', 'tidak aktif', 'e'),
(10, 'q', '1211', '2022-10-07', 'aa', 'Laki - Laki', 9, 2, '0988', '098j', '2022-10-12', 'q', 'q'),
(13, 'baru', '1221', '2022-10-17', 'teet', 'Laki - Laki', 5, 0, '899', '9899', '2022-10-17', 'santri', 'hh'),
(14, 'd', '123', '2022-10-31', 'fg', 'Laki - Laki', 1, 1, '098', 'yt', '2022-10-25', 'hg', 'hg'),
(15, 'baru1', '1223', '2022-11-01', 'kbm', 'Perempuan', 5, 2, '0984', 'yt', '2022-11-02', 'santri', 'fot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_tagihan`
--

CREATE TABLE `tb_data_tagihan` (
  `id` int(11) NOT NULL,
  `id_thn` int(11) NOT NULL,
  `id_bln` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_tagihan`
--

INSERT INTO `tb_data_tagihan` (`id`, `id_thn`, `id_bln`, `nominal`) VALUES
(1, 1, 1, 175000),
(2, 1, 2, 175000),
(4, 1, 3, 175000),
(5, 1, 4, 175000),
(6, 1, 5, 175000),
(7, 1, 6, 175000),
(8, 1, 7, 175000),
(9, 1, 8, 175000),
(10, 1, 9, 175000),
(11, 1, 10, 175000),
(12, 1, 11, 175000),
(13, 1, 12, 175000),
(14, 6, 1, 175000),
(15, 6, 2, 175000),
(16, 6, 3, 175000),
(17, 6, 4, 175000),
(18, 6, 5, 175000),
(19, 6, 6, 175000),
(20, 6, 7, 175000),
(21, 6, 8, 175000),
(22, 6, 9, 175000),
(23, 6, 10, 175000),
(24, 6, 11, 175000),
(25, 6, 12, 175000),
(26, 7, 1, 200000),
(27, 7, 2, 200000),
(28, 7, 3, 200000),
(29, 7, 4, 200000),
(30, 7, 5, 200000),
(31, 7, 6, 200000),
(32, 7, 7, 230000),
(33, 7, 8, 200000),
(34, 7, 9, 200000),
(35, 7, 10, 200000),
(36, 7, 11, 200000),
(37, 7, 12, 200000),
(38, 8, 1, 175000),
(39, 8, 2, 175000),
(40, 8, 3, 175000),
(41, 8, 4, 175000),
(42, 8, 5, 175000),
(43, 8, 6, 175000),
(44, 8, 7, 175000),
(45, 8, 8, 175000),
(46, 8, 9, 175000),
(47, 8, 10, 175000),
(48, 8, 11, 175000),
(49, 8, 12, 175000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_transaksi`
--

CREATE TABLE `tb_data_transaksi` (
  `id_data_transaksi` int(11) NOT NULL,
  `id_data_santri` int(11) NOT NULL,
  `id_data_tagihan` int(11) DEFAULT NULL,
  `jumlah_byr` varchar(200) DEFAULT NULL,
  `sisa` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `tgl_byr` datetime DEFAULT NULL,
  `created_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_transaksi`
--

INSERT INTO `tb_data_transaksi` (`id_data_transaksi`, `id_data_santri`, `id_data_tagihan`, `jumlah_byr`, `sisa`, `keterangan`, `tgl_byr`, `created_by`) VALUES
(1, 4, 1, '175000', '2000', 'Belum Lunas', '2022-11-09 21:28:03', 'Admin1'),
(2, 5, 4, '175000', '0', 'Lunas', '2022-11-01 23:45:36', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal`
--

CREATE TABLE `tb_jurnal` (
  `id_jurnal_umum` int(11) NOT NULL,
  `pemasukan` int(200) NOT NULL,
  `pengeluaran` varchar(200) NOT NULL,
  `tgl_jurnal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal_umum`, `pemasukan`, `pengeluaran`, `tgl_jurnal`, `keterangan`, `created_by`) VALUES
(4, 300000, '0', '2022-10-13', 'Kotak', 4),
(5, 300000, '0', '2022-10-13', 'Amal', 3),
(6, 100000, '0', '2022-10-13', 'Kotak', 3),
(7, 0, '500000', '2022-10-13', 'listrik', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kls`
--

CREATE TABLE `tb_kls` (
  `id_kls` int(11) NOT NULL,
  `nama_kls` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kls`
--

INSERT INTO `tb_kls` (`id_kls`, `nama_kls`) VALUES
(1, 'Ibtida'),
(2, 'Jurumiyah'),
(3, 'Imrithy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kmr`
--

CREATE TABLE `tb_kmr` (
  `id_kmr` int(11) NOT NULL,
  `nama_kmr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kmr`
--

INSERT INTO `tb_kmr` (`id_kmr`, `nama_kmr`) VALUES
(1, 'Umar 1'),
(5, 'Umar 2'),
(9, 'Umar 3'),
(10, 'Umar 4'),
(11, 'Umar 5'),
(12, 'Umar 6'),
(13, 'Umar Bambu'),
(14, 'Abu Bakar 1'),
(15, 'Abu Bakar 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_thn`
--

CREATE TABLE `tb_thn` (
  `id_thn` int(11) NOT NULL,
  `nama_thn` varchar(200) NOT NULL,
  `nominal_tagihan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_thn`
--

INSERT INTO `tb_thn` (`id_thn`, `nama_thn`, `nominal_tagihan`) VALUES
(1, '2018', '175000'),
(8, '2019', '175000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id_bln`);

--
-- Indeks untuk tabel `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  ADD PRIMARY KEY (`id_data_transaksi`);

--
-- Indeks untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD PRIMARY KEY (`id_jurnal_umum`);

--
-- Indeks untuk tabel `tb_kls`
--
ALTER TABLE `tb_kls`
  ADD PRIMARY KEY (`id_kls`);

--
-- Indeks untuk tabel `tb_kmr`
--
ALTER TABLE `tb_kmr`
  ADD PRIMARY KEY (`id_kmr`);

--
-- Indeks untuk tabel `tb_thn`
--
ALTER TABLE `tb_thn`
  ADD PRIMARY KEY (`id_thn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id_bln` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_data_santri`
--
ALTER TABLE `tb_data_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_data_tagihan`
--
ALTER TABLE `tb_data_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tb_data_transaksi`
--
ALTER TABLE `tb_data_transaksi`
  MODIFY `id_data_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  MODIFY `id_jurnal_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kls`
--
ALTER TABLE `tb_kls`
  MODIFY `id_kls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kmr`
--
ALTER TABLE `tb_kmr`
  MODIFY `id_kmr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_thn`
--
ALTER TABLE `tb_thn`
  MODIFY `id_thn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
