-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 12:20 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahayavision`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kelurahan_id` int(11) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`kelurahan_id`, `nama_kelurahan`) VALUES
(1, 'Basirih'),
(2, 'Belitung Selatan'),
(3, 'Belitung Utara'),
(4, 'Kuin Cerucuk'),
(5, 'Kuin Selatan'),
(6, 'Pelambuan'),
(7, 'Telaga Biru'),
(8, 'Telawang'),
(9, 'Teluk Tiram'),
(10, 'Basirih Selatan'),
(11, 'Kelayan Barat'),
(12, 'Kelayan Dalam'),
(13, 'Kelayan Tengah'),
(14, 'Kelayan Timur'),
(15, 'Kelayan Selatan'),
(16, 'Mantuil'),
(17, 'Murung Raya'),
(18, 'Pekauman'),
(19, 'Pemurus Baru'),
(20, 'Pemurus Dalam'),
(21, 'Tanjung Pagar'),
(22, 'Antasan Besar'),
(23, 'Gadang'),
(24, 'Kertak Baru ilir'),
(25, 'Kertak Baru Ulu'),
(26, 'Kelayan Luar'),
(27, 'Mawar'),
(28, 'Melayu'),
(29, 'Pasar Lama'),
(44, 'Pekapuran Laut'),
(45, 'Seberang Mesjid'),
(46, 'Sungai Baru'),
(47, 'Teluk Dalam'),
(48, 'Benua Anyar'),
(49, 'Karang Mekar'),
(50, 'Kebun Bunga'),
(51, 'Kuripan'),
(52, 'Pekapuran Raya'),
(53, 'Pemurus Luar'),
(54, 'Pengambangan'),
(55, 'Sungai Bilu'),
(56, 'Sungai Lulut'),
(57, 'Alalak Utara'),
(58, 'Alalak Tengah'),
(59, 'Alalak Selatan'),
(60, 'Antasan Kecil Timur'),
(61, 'Kuin Utara'),
(62, 'Pangeran'),
(63, 'Sungai Andai'),
(64, 'Sungai Jingah'),
(65, 'Sungai Miai'),
(66, 'Surgi Mufti');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nik`, `nama`, `address`, `kelurahan_id`, `username`, `password`, `no_telp`) VALUES
(15, '68657537685002', 'Muhammad Rizal', 'Jalan Sungai Andai', 63, 'rizal', '584ffd958df0120b7b1e2a122302c8099b6bdbe8', '082153577112'),
(16, '68657537684002', 'Muhammad Renaldi', 'Jalan Sungai Andai', 63, 'renaldi', '10c248a4d6e01b5ebaef47ac64bd822593e194cc', '081230912323'),
(17, '68657537687002', 'Richard heryanto', 'Jalan Sungai miai', 65, 'ricard', 'bc7b9248ddf31e18ca7aa0ab0940f763659874ed', '0829013123123'),
(18, '68657537685001', 'Rika', 'jalan raya bangun no 231', 2, 'rika1', '0b0fc44427b326c4a4c42e8ac7f472d5de152219', '0821891023213'),
(19, '68657537686001', 'Renaldi', 'Jl Anggrek Cendrawasih 5 Bl J/56-A,Kemanggisan', 1, 'renaldi5', '10c248a4d6e01b5ebaef47ac64bd822593e194cc', '0891231232131'),
(20, '3326166004030020', 'Kharisma Bella', 'Kpg. Lumban Tobing No. 591', 16, 'kharisma', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082153577123'),
(21, '3326160107400470', 'Kaliri', 'Ds. Basuki Rahmat  No. 314', 15, 'Kaliri', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082155069572'),
(22, '3326161606790000', 'imam Purwanto', 'Dk. Pattimura No. 83', 2, 'purwanto', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082192087358'),
(23, '3326164410800000', 'Sri Ningsih', 'Ds. Flora No. 583', 2, 'ningsih', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082129802677'),
(24, '3326167001090000', 'Lutfiana Indah', 'Ki. Sudirman No. 537', 13, 'lutfiana', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082124476127'),
(25, '3326165907820000', 'Devina', 'Gg. Gotong Royong No. 162', 45, 'devina', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082188355115'),
(26, '3326165706070000', 'Sasha Reditha', 'Ds. Tangkuban Perahu No. 650', 3, 'sasha', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082113002977'),
(27, '3326162610790020', 'Didik Hariyadi', 'Ki. Sukajadi No. 168', 12, 'didik', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082179893196'),
(28, '3326160706800000', 'Ali Subechi', 'Kpg. Ir. H. Juanda No. 633', 4, 'subechi', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082145141766'),
(29, '3326167101940000', 'Liza Amelia', 'Jr. Bayam No. 289', 51, 'AMELIA', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082191041314'),
(30, '3326164101680020', 'Riyanti', 'Kpg. Setiabudhi No. 148', 2, 'RIYANTI', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082198893210'),
(31, '3326162209000000', 'Galih Purwanto', 'Gg. Sudiarto No. 962', 7, 'GALIH', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082189647128'),
(32, '3326160107540300', 'Parto Aji', 'Ki. Bayam No. 401', 21, 'PARTO', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082188180795'),
(33, '3326165403850000', 'Puji Astuti', 'Jln. Sutoyo No. 311', 5, 'Astuti', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082148674520'),
(34, '3326164107600580', 'Kartika', 'Ds. Sutarto No. 396', 24, 'kartika', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082118559969'),
(35, '3326161902810060', 'Sutrisno', 'Psr. Radio No. 610', 21, 'SUTRISNO', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082127439921'),
(36, '3326161905910020', 'Herman Efendi', 'Jln. Bak Mandi No. 676', 6, 'nopendi', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082163872795'),
(37, '3326165407590000', 'Sriatun', 'Kpg. B.Agam Dlm No. 953', 20, 'atun5', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082150695588'),
(38, '3326161506050000', 'Muhammad Yadi', 'Gg. Sam Ratulangi No. 600', 22, 'Yadim', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082156304532'),
(39, '3326165206560000', 'RAODAH', 'Jln. Baik No. 519', 1, 'RAODAH', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082168696761'),
(40, '3326164710810000', 'MARKHAMAH', 'Ki. Fajar No. 279', 14, 'MARKHAMAH', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082115603204'),
(41, '3326164107440280', 'RASUMI', 'Psr. Pacuan Kuda No. 644', 12, 'RASUMI', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082172047051'),
(42, '3326166806680000', 'SRI WURYANTI', 'Ds. Otto No. 724', 22, 'WURYANTI', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082132465380'),
(43, '3326161106680000', 'TRISAKTI', 'Ds. Ciwastra No. 223', 20, 'TRISAKTI', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082125077465'),
(44, '3326160407670000', 'MUNDZAKIR', 'Ds. Raden No. 336', 51, 'MUNDZAKIR', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082190397843'),
(45, '3326162008710040', 'KUSNOTO', 'Jr. Kalimantan No. 494', 52, 'KUSNOTO', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '082163057458'),
(46, '718293718231', 'yusuf', 'tes', 4, 'yusuf', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '081210231231'),
(47, '68657537684009', 'Muhammad Rizky', 'Jl Anggrek Cendrawasih 5 Bl J/', 6, 'rizky', '35b8b2ddcd47e4602a38adc8aacf8fc4e7343d47', '089982310232');

-- --------------------------------------------------------

--
-- Table structure for table `pemasangan`
--

CREATE TABLE `pemasangan` (
  `pemasangan_id` int(11) NOT NULL,
  `pelanggan_id` int(10) NOT NULL,
  `tanggal_pemasangan` date DEFAULT '0000-00-00',
  `jumlah_televisi` int(1) DEFAULT NULL,
  `teknisi_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasangan`
--

INSERT INTO `pemasangan` (`pemasangan_id`, `pelanggan_id`, `tanggal_pemasangan`, `jumlah_televisi`, `teknisi_id`, `status`) VALUES
(14, 15, '2020-05-29', 2, 2, '2'),
(17, 16, '2020-05-23', 2, 3, '2'),
(18, 18, '2020-05-29', 2, 4, '2'),
(19, 19, '0000-00-00', NULL, 0, '1'),
(21, 21, '0000-00-00', NULL, 0, '1'),
(22, 22, '0000-00-00', NULL, 0, '1'),
(23, 23, '0000-00-00', NULL, 0, '1'),
(24, 24, '0000-00-00', NULL, 0, '1'),
(25, 25, '2020-05-29', 2, 3, '2'),
(26, 26, '0000-00-00', NULL, 0, '1'),
(27, 27, '0000-00-00', NULL, 0, '1'),
(28, 28, '0000-00-00', NULL, 0, '1'),
(29, 29, '0000-00-00', NULL, 0, '1'),
(30, 30, '0000-00-00', NULL, 0, '1'),
(31, 31, '0000-00-00', NULL, 0, '1'),
(32, 32, '0000-00-00', NULL, 0, '1'),
(33, 33, '0000-00-00', NULL, 0, '1'),
(34, 34, '0000-00-00', NULL, 0, '1'),
(35, 35, '0000-00-00', NULL, 0, '1'),
(36, 36, '0000-00-00', NULL, 0, '1'),
(37, 37, '0000-00-00', NULL, 0, '1'),
(38, 38, '0000-00-00', NULL, 0, '1'),
(39, 39, '0000-00-00', NULL, 0, '1'),
(40, 40, '0000-00-00', NULL, 0, '1'),
(41, 41, '0000-00-00', NULL, 0, '1'),
(42, 42, '0000-00-00', NULL, 0, '1'),
(43, 43, '0000-00-00', NULL, 0, '1'),
(44, 44, '0000-00-00', NULL, 0, '1'),
(45, 45, '0000-00-00', NULL, 0, '1'),
(46, 20, '2020-06-01', 2, 4, '2'),
(49, 46, '2020-05-31', 2, 1, '2'),
(50, 47, '2020-06-01', 1, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `tanggal_tagihan` date NOT NULL DEFAULT '0000-00-00',
  `tanggal_jatuh_tempo` date NOT NULL DEFAULT '0000-00-00',
  `tanggal_pembayaran` date NOT NULL,
  `metode_pembayaran` varchar(30) DEFAULT NULL,
  `tujuan_transfer` varchar(11) DEFAULT NULL,
  `total_pembayaran` varchar(40) DEFAULT NULL,
  `status_bayar` varchar(20) NOT NULL DEFAULT '1',
  `image` varchar(100) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `pelanggan_id`, `tanggal_tagihan`, `tanggal_jatuh_tempo`, `tanggal_pembayaran`, `metode_pembayaran`, `tujuan_transfer`, `total_pembayaran`, `status_bayar`, `image`) VALUES
(19, 11, '2020-06-05', '0000-00-00', '2020-05-31', '', '1', '', '2', 'pembayaran-2020-05-31_14-56-18.png'),
(26, 15, '0000-00-00', '0000-00-00', '2020-05-14', '', '', '', '3', 'default.jpg'),
(31, 16, '0000-00-00', '0000-00-00', '2020-05-13', '', '', '', '3', 'pembayaran-2020-05-28_17-01-49.jpg'),
(33, 46, '2020-05-31', '2020-06-05', '0000-00-00', NULL, NULL, NULL, '1', 'default.jpg'),
(34, 11, '0000-00-00', '0000-00-00', '2020-05-25', NULL, NULL, NULL, '1', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemutusan`
--

CREATE TABLE `pemutusan` (
  `pemutusan_id` int(11) NOT NULL,
  `pelanggan_id` int(10) NOT NULL,
  `alasan_pemutusan` varchar(100) NOT NULL,
  `tanggal_pemutusan` date NOT NULL,
  `status_pemutusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemutusan`
--

INSERT INTO `pemutusan` (`pemutusan_id`, `pelanggan_id`, `alasan_pemutusan`, `tanggal_pemutusan`, `status_pemutusan`) VALUES
(2, 15, 'berhenti', '2020-06-01', 1),
(3, 20, 'tes', '2020-06-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pengaduan_id` int(11) NOT NULL,
  `pelanggan_id` int(10) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `teknisi_id` int(11) NOT NULL,
  `status_pengaduan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`pengaduan_id`, `pelanggan_id`, `keluhan`, `tanggal_pengaduan`, `teknisi_id`, `status_pengaduan`) VALUES
(4, 15, 'Suara Delay', '2020-05-23', 3, '2'),
(5, 17, 'Rusak', '2020-05-23', 2, '2'),
(7, 20, 'Sinyal Hilang', '2020-05-29', 3, '3'),
(8, 16, 'Sinyal Hilang', '2020-06-01', 2, '3'),
(9, 22, 'Sinyal Hilang', '2020-05-31', 2, '2'),
(10, 19, 'Gambar Hilang', '2020-06-01', 1, '2'),
(12, 25, 'Suara Delay', '2020-05-31', 3, '3'),
(13, 20, 'Suara Delay', '2020-06-01', 3, '2');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `teknisi_id` int(11) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`teknisi_id`, `nama_teknisi`, `alamat`, `no_telpon`) VALUES
(1, 'Arifin', 'Jalan Belitung Darat GG.Abadi', '082155812100'),
(2, 'Cahyono', 'Jalan Jafri Zam-Zam komp. Grawiratama 4 ', '082155812312'),
(3, 'Ilham Ramadhan', 'Jalan Cendrawasih no 14', '0812912312323'),
(4, 'Muhammad Rizky', 'jalan sukamara no 155', '081293012324');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Muhammad Rizky Pratama', 'banjarmasin', '1'),
(4, 'pimpinan', '59335c9f58c78597ff73f6706c6c8fa278e08b3a', 'Muhammad Arifin', 'banjarmasin', '3'),
(5, 'teknisi', 'bb5fd707b68a69354e08aed905388f69e697d93e', 'Muhammad Rizali', 'banjarmasin', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kelurahan_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indexes for table `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD PRIMARY KEY (`pemasangan_id`),
  ADD UNIQUE KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `pemutusan`
--
ALTER TABLE `pemutusan`
  ADD PRIMARY KEY (`pemutusan_id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduan_id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`teknisi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `kelurahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pemasangan`
--
ALTER TABLE `pemasangan`
  MODIFY `pemasangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pemutusan`
--
ALTER TABLE `pemutusan`
  MODIFY `pemutusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pengaduan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `teknisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
