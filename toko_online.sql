-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2022 pada 13.43
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(10, 'makanan'),
(11, 'aksesoris'),
(12, 'kandang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `komentar` longtext,
  `tanggal` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `balasan` longtext,
  `id_produk` int(11) DEFAULT NULL,
  `id_diskon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `komentar`, `tanggal`, `waktu`, `balasan`, `id_produk`, `id_diskon`) VALUES
(1, 'yuda', 'yuda@gmail.com', 'Bajunya Bagus Sesuai Dengan Di Gambar Dan Pengirimannya Juga Cepat', '28-11-2020', '14:19:07', 'terimakasih sudah order ditunggu orderan selanjutnya siap bang\r\n', 3, NULL),
(2, 'oni', 'yudhaew@gmail.com', 'dkutdul', '14-07-2021', '04:43:40', NULL, 9, NULL),
(3, 'oniham', 'zaenall@gmail.com', 'ss2', '28-07-2021', '04:41:11', NULL, 12, NULL),
(4, 'ikiki', 'oni@gmail.com', 'skdhfia', '28-07-2021', '04:42:19', NULL, 12, NULL),
(5, 'Akbar', 'akbar1107kurniawan@gmail.com', 'Bahannya bagus, brand lokal kualitas internasional, saya suka saya suka', '02-08-2021', '06:12:09', NULL, 26, NULL),
(6, 'oniham', 'oni@gmail.com', 'shakdhaskll', '02-08-2021', '06:55:10', NULL, 27, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` longtext,
  `pesan` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `website`, `alamat`, `pesan`) VALUES
(3, 'akbar', 'akbar@gmail.com', 'www.akbar.com', 'Metro', 'Mantab'),
(4, 'oni', 'yudhaew@gmail.com', '-', 'lampung', 'jos'),
(5, 'oniham', 'oni@gmail.com', 'sa.com', 'sadadawdawwawaww', 'aw'),
(6, 'oniham', 'oni@gmail.com', 'sa.com', 'ASdsacbsa', 'sk'),
(7, 'ikiki', 'oni@gmail.com', 'sa.com', 'sadkas', 'adsads'),
(8, 'oniham', 'zaenall@gmail.com', 'sa.com', 'lsdas', ',asdas'),
(9, 'ikiki', 'oni@gmail.com', 'sa.com', 'lkdasd', 'bdklsa'),
(10, 'oniham', 'oni@gmail.com', 'lsda', 'ksbdas', 'ksadas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `deskripsi` longtext,
  `harga` varchar(255) DEFAULT NULL,
  `harga_awal` varchar(255) DEFAULT NULL,
  `dilihat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `gambar1`, `gambar2`, `merk`, `deskripsi`, `harga`, `harga_awal`, `dilihat`) VALUES
(29, 10, 'produk_ars.png', 'produk2_4332057.jpg', 'whiskas', '<p>okoe</p>', 'Rp.100.000', 'Rp.200.000', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `tentang` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `tentang`) VALUES
(1, '<ol><li>Tentang Toko Online Tentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko OnlineTentang Toko Online</li><li>Barang yang kami jual semua 100% original tidak ada yang fake</li></ol><p><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(3, 'oni', 'oni', '202cb962ac59075b964b07152d234b70'),
(4, 'onihamm', 'onii', '02522a2b2726fb0a03bb19f2d8d9524d');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
