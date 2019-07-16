-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2019 pada 11.21
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boogja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail_order` int(50) NOT NULL,
  `id_order` int(50) NOT NULL,
  `id_masakan` int(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_restoran` int(100) NOT NULL,
  `no_meja` int(50) NOT NULL,
  `status_total_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(255) NOT NULL,
  `nama_kasir` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(50) NOT NULL,
  `id_restoran` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `username`, `password`, `id_level`, `id_restoran`) VALUES
(1, 'Ubaidillah', 'ubed', '123', 2, 3),
(2, 'Riski', 'riski', '123', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(50) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masakan`
--

CREATE TABLE `masakan` (
  `id_masakan` int(50) NOT NULL,
  `nama_masakan` varchar(100) NOT NULL,
  `gambar_masakan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_restoran` int(111) NOT NULL,
  `status_masakan` varchar(50) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `gambar_masakan`, `harga`, `id_restoran`, `status_masakan`, `stok`) VALUES
(9, 'Ceker Kecap', 'ceker.jpg', '6000', 1, 'ada', ''),
(11, 'Nasi Goreng Jawa', 'nasi_goreng_jawa.jpg', '11000', 2, 'ada', ''),
(12, 'Nasi Goreng Saus Tiram', 'nasi-goreng-saus-tiram.jpg', '10000', 3, 'ada', ''),
(13, 'Tempe Penyet', 'Tempe-Penyet-tokomesin.jpg', '8000', 4, 'ada', ''),
(14, 'Pecel Lele', 'pecel_lele.jpg', '10000', 4, 'habis', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`, `username`, `password`) VALUES
(1, 'Ricky Hanif', 'Jl. Segara Anak', '08578464292012', 'hanif', '123'),
(3, 'kaka', 'aaaa', '1234567', 'kaka', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'kaka', 'aaaa', '1234567', 'kaka', '202cb962ac59075b964b07152d234b70'),
(5, 'momo', 'momo', '12312', 'momo', '202cb962ac59075b964b07152d234b70'),
(6, 'mama', 'mama', '123123', 'mama', '123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(50) NOT NULL,
  `nama_pengurus` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(111) NOT NULL,
  `id_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `username`, `password`, `id_level`) VALUES
(1, 'fani Rahmat', 'fani', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_meja`
--

CREATE TABLE `pesanan_meja` (
  `id_pesanan` int(100) NOT NULL,
  `id_restoran` int(100) NOT NULL,
  `no_meja` varchar(50) NOT NULL,
  `username` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `restoran`
--

CREATE TABLE `restoran` (
  `id_restoran` int(100) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `alamat_restoran` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jam_buka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `nama_restoran`, `gambar`, `alamat_restoran`, `status`, `jam_buka`) VALUES
(1, 'Mulyo Redjo', '2_-Bengawan-Keraton-at-the-Plaza-Jakarta.jpg', 'Jl. Mawar 23', 'Buka', '09.00-21.00'),
(2, 'Dewi Kahyangan', 'restaurant-decoration-design.jpg', 'Jl. Danau Ranau', 'Buka', '11.00-23.00'),
(3, 'Warung ABC', 'rae-meierei-interjoor10.jpg', 'jl. Malang', 'Tutup', '09.45-00.00'),
(4, 'Pasar Senggol', 'download.jpg', 'Jl. Bratan Malang', '', '09.00-21.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `id_pelanggan` int(50) NOT NULL,
  `total_bayar` varchar(150) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_masakan` (`id_masakan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id_masakan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `pesanan_meja`
--
ALTER TABLE `pesanan_meja`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail_order` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masakan`
--
ALTER TABLE `masakan`
  MODIFY `id_masakan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan_meja`
--
ALTER TABLE `pesanan_meja`
  MODIFY `id_pesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_masakan`) REFERENCES `masakan` (`id_masakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_3` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `masakan`
--
ALTER TABLE `masakan`
  ADD CONSTRAINT `masakan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `pengurus_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_meja`
--
ALTER TABLE `pesanan_meja`
  ADD CONSTRAINT `pesanan_meja_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
