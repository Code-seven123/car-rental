-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 03.10
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
-- Database: `irvan&husni_rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `username`, `password`) VALUES
(1, 'irvan', '12345'),
(2, 'root', 'root'),
(3, 'irvan', '300'),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'irvan', '1234'),
(8, 'e', 'e'),
(9, 'rea', '1'),
(10, 'rea', '1'),
(11, 'suryo', '111'),
(12, 'irvan', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil_admin`
--

CREATE TABLE `rental_mobil_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_nama` varchar(30) NOT NULL,
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rental_mobil_admin`
--

INSERT INTO `rental_mobil_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(4, 'kasir', 'susi', '1234'),
(5, 'manajer', 'sumarto', '222'),
(6, 'pegawai', 'suryo', '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil_kostumer`
--

CREATE TABLE `rental_mobil_kostumer` (
  `kostumer_id` int(2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kostumer_nama` varchar(30) NOT NULL,
  `kostumer_alamat` text NOT NULL,
  `kostumer_jk` varchar(10) NOT NULL,
  `kostumer_hp` varchar(12) NOT NULL,
  `kostumer_ktp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rental_mobil_kostumer`
--

INSERT INTO `rental_mobil_kostumer` (`kostumer_id`, `user_id`, `kostumer_nama`, `kostumer_alamat`, `kostumer_jk`, `kostumer_hp`, `kostumer_ktp`) VALUES
(1, 5, 'susi', 'wanahayu', 'perempuan', '843265021658', '53856165'),
(2, 1, 'irvan', 'wanahayu', 'laki laki', '783658236583', '56236576616856'),
(3, 0, 'budi', 'bandung', 'laki laki', '085275335155', '1000193226461476'),
(4, 0, 'susi', 'jakarta', 'perempuan', '082637541554', '100007361451415'),
(5, 0, 'rahmat', 'aceh', 'laki laki', '08225656452', '100074775752'),
(6, 0, 'irun', 'sukasari', 'perempuan', '0981684246', '1362441460001'),
(7, 2, 'budi', 'wr', 'ww', '24435884', '75878353653');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil_mobil`
--

CREATE TABLE `rental_mobil_mobil` (
  `mobil_id` int(12) NOT NULL,
  `mobil_merk` varchar(30) NOT NULL,
  `mobil_plat` varchar(12) NOT NULL,
  `mobil_warna` varchar(6) NOT NULL,
  `mobil_tahun` int(4) NOT NULL,
  `mobil_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rental_mobil_mobil`
--

INSERT INTO `rental_mobil_mobil` (`mobil_id`, `mobil_merk`, `mobil_plat`, `mobil_warna`, `mobil_tahun`, `mobil_status`) VALUES
(2, 'be', 'TQA 2909 B', 'hitam', 6002, 1),
(5, 'KAWASAKI', 'OPP 4782 N', 'pink', 2020, 1),
(6, 'BEAT', 'PLO 6382 D', 'putih', 1999, 1),
(7, 'NEXT', 'GOP 5667 P', 'HITAM', 2021, 1),
(8, 'HONDA', '3243467568', 'hitam', 2000, 1),
(9, 'kawasaki', '3243467568', 'hitam', 2000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil_transaksi`
--

CREATE TABLE `rental_mobil_transaksi` (
  `transaksi_id` varchar(16) NOT NULL,
  `transaksi_karyawan` int(2) NOT NULL,
  `transaksi_kostumer` int(2) NOT NULL,
  `transaksi_mobil` int(2) NOT NULL,
  `transaksi_tgl_pinjam` date NOT NULL,
  `transaksi_tgl_kembali` date NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_denda` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_totaldenda` int(11) NOT NULL,
  `transaksi_status` int(2) NOT NULL,
  `transaksi_tgl_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `rental_mobil_admin`
--
ALTER TABLE `rental_mobil_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `rental_mobil_kostumer`
--
ALTER TABLE `rental_mobil_kostumer`
  ADD PRIMARY KEY (`kostumer_id`);

--
-- Indeks untuk tabel `rental_mobil_mobil`
--
ALTER TABLE `rental_mobil_mobil`
  ADD PRIMARY KEY (`mobil_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rental_mobil_admin`
--
ALTER TABLE `rental_mobil_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rental_mobil_kostumer`
--
ALTER TABLE `rental_mobil_kostumer`
  MODIFY `kostumer_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rental_mobil_mobil`
--
ALTER TABLE `rental_mobil_mobil`
  MODIFY `mobil_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
