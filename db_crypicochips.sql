-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 03:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crypicochips`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `pwd_admin` text NOT NULL,
  `email_admin` varchar(20) NOT NULL,
  `deskripsi_admin` text NOT NULL,
  `id_admin_creator` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `status_admin` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `pwd_admin`, `email_admin`, `deskripsi_admin`, `id_admin_creator`, `id_level`, `status_admin`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', 'admin', 1, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat_user`
--

CREATE TABLE `tb_alamat_user` (
  `id_alamat_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kota_au` varchar(50) NOT NULL,
  `provinsi_au` varchar(50) NOT NULL,
  `kodepos_au` int(11) NOT NULL,
  `desakel_au` varchar(50) NOT NULL,
  `kecamatan_au` varchar(50) NOT NULL,
  `more_au` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alamat_user`
--

INSERT INTO `tb_alamat_user` (`id_alamat_user`, `id_user`, `kota_au`, `provinsi_au`, `kodepos_au`, `desakel_au`, `kecamatan_au`, `more_au`) VALUES
(9134, 7479, 'Yogyakarta', 'DIY', 55281, 'Sleman', 'Depok', 'Pugeran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `id_kategori_barang` int(11) NOT NULL,
  `diskripsi_barang` text NOT NULL,
  `berat_barang` float NOT NULL,
  `harga_barang` double NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `id_kategori_barang`, `diskripsi_barang`, `berat_barang`, `harga_barang`, `stok_barang`) VALUES
(1, 'Kripik Cokelat', 1, 'kripik pisang rasa cokelat', 20, 10000, 500),
(2, 'Kripik Keju', 2, 'Kripik pisang rasa keju', 200, 10000, 760),
(3, 'Kripik Kacang', 5, 'kripik pisang rasa kacang', 300, 12500, 145);

-- --------------------------------------------------------

--
-- Table structure for table `tb_checkout`
--

CREATE TABLE `tb_checkout` (
  `id_pembayaran` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` int(20) NOT NULL,
  `tanggal_pembayaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_checkout`
--

INSERT INTO `tb_checkout` (`id_pembayaran`, `id_keranjang`, `id_barang`, `id_user`, `nama_bank`, `no_rek`, `tanggal_pembayaran`) VALUES
(437, 3272, 3, 7479, 'BCA', 556611233, '2021-01-07 11:27:59'),
(6717, 8792, 2, 7479, 'BRI', 2147483647, '2021-01-07 00:00:00'),
(8301, 1717, 1, 7479, 'Mandiri', 333222111, '2021-01-06 00:00:00'),
(8334, 8264, 3, 7479, 'BCA', 2147483647, '2021-01-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_user`, `id_barang`, `total_qty`, `total_harga`, `status`) VALUES
(1717, 7479, 1, 5, 50000, 'Y'),
(3272, 7479, 3, 20, 250000, 'Y'),
(5552, 7479, 1, 10, 100000, 'N'),
(8264, 7479, 3, 5, 62500, 'Y'),
(8792, 7479, 2, 2, 20000, 'Y'),
(9799, 7479, 3, 5, 62500, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening_user`
--

CREATE TABLE `tb_rekening_user` (
  `id_rekening_user` int(11) NOT NULL,
  `bank_ru` varchar(50) NOT NULL,
  `an_ru` varchar(50) NOT NULL,
  `no_ru` int(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_ru` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekening_user`
--

INSERT INTO `tb_rekening_user` (`id_rekening_user`, `bank_ru`, `an_ru`, `no_ru`, `id_user`, `status_ru`) VALUES
(2946, 'BCA', 'Budi Daya', 56566655, 7479, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat_toko` text NOT NULL,
  `telp_toko` varchar(30) NOT NULL,
  `email_toko` varchar(150) NOT NULL,
  `facebook_toko` varchar(150) NOT NULL,
  `twitter_toko` varchar(150) NOT NULL,
  `instagram_toko` varchar(150) NOT NULL,
  `deskripsi_toko` text NOT NULL,
  `image_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id_toko`, `nama_toko`, `alamat_toko`, `telp_toko`, `email_toko`, `facebook_toko`, `twitter_toko`, `instagram_toko`, `deskripsi_toko`, `image_toko`) VALUES
(15, 'Toko Sejahtera', 'Jl. Malioboro No.189, Sosromenduran, Gedong Tengen, Kota Yogyakarta', '085434566544', 'tokosejahtera@gmail.com', 'www.facebook.com/tokosejahtera', '@sejahtera_toko', '@sejahtera_toko', 'membuka toko kripik pisang', '75-sedang_1580195370IMG20191021084255.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username_user` varchar(30) NOT NULL,
  `pwd_user` text NOT NULL,
  `point_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `tlp_user` varchar(30) NOT NULL,
  `id_alamat_user` int(11) NOT NULL,
  `id_rekening_user` int(11) NOT NULL,
  `status_user` enum('Y','N') NOT NULL,
  `catatan_user` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username_user`, `pwd_user`, `point_user`, `email_user`, `tlp_user`, `id_alamat_user`, `id_rekening_user`, `status_user`, `catatan_user`) VALUES
(7479, 'Budi Daya', 'budi', 'budi', 1, 'buditess@gmail.com', '0823332223', 9134, 2946, 'Y', 'saya seorang mahasiswa angkatan 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_alamat_user`
--
ALTER TABLE `tb_alamat_user`
  ADD PRIMARY KEY (`id_alamat_user`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_checkout`
--
ALTER TABLE `tb_checkout`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_rekening_user`
--
ALTER TABLE `tb_rekening_user`
  ADD PRIMARY KEY (`id_rekening_user`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
