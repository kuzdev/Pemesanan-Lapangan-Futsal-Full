-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2020 pada 09.43
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paragon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(14, 'Hai', 'DHAGDHJDVh uisad SBU', 1),
(15, 'Hai', 'ssdf', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirbayar`
--

CREATE TABLE `konfirbayar` (
  `kdKonfir` int(12) NOT NULL,
  `kdBoking` int(5) NOT NULL,
  `namaPengirim` varchar(40) NOT NULL,
  `norek` varchar(22) NOT NULL,
  `upFoto` int(11) NOT NULL,
  `status` enum('Lunas','DP') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tboking`
--

CREATE TABLE `tboking` (
  `kdBoking` bigint(20) NOT NULL,
  `noInvoice` varchar(20) NOT NULL,
  `tglInvoice` date NOT NULL,
  `usernameBoking` varchar(100) NOT NULL,
  `an` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `totalBayar` double NOT NULL,
  `statusBayar` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tboking`
--

INSERT INTO `tboking` (`kdBoking`, `noInvoice`, `tglInvoice`, `usernameBoking`, `an`, `alamat`, `kontak`, `totalBayar`, `statusBayar`) VALUES
(12, 'INV-000003', '2019-12-19', 'adi', 'Adi P', 'Jogja', '082213375776', 55000, 'L'),
(13, 'INV-000004', '2019-12-19', 'dedi', 'dedi P', 'Jogja', '082213375778', 55000, 'L'),
(20, 'INV-000002', '2020-01-08', 'aku', 'Kuzi', 'Jogja', '082213375779', 55000, 'L'),
(32, 'INV-000005', '2020-03-10', 'affan', 'Affan DR', '', '0822133757', 55000, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tboking_temp`
--

CREATE TABLE `tboking_temp` (
  `kdBokingTemp` bigint(20) NOT NULL,
  `kdJadwal` int(5) NOT NULL,
  `nomorLapangan` int(5) NOT NULL,
  `tglBokingTemp` date NOT NULL,
  `jamBokingTemp` varchar(20) NOT NULL,
  `hargaTemp` double NOT NULL,
  `subTotalTemp` double NOT NULL,
  `idSession` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tboking_temp`
--

INSERT INTO `tboking_temp` (`kdBokingTemp`, `kdJadwal`, `nomorLapangan`, `tglBokingTemp`, `jamBokingTemp`, `hargaTemp`, `subTotalTemp`, `idSession`) VALUES
(3, 22, 2, '2019-12-26', '23:00', 55000, 55000, 'alfian'),
(4, 106, 1, '2020-02-27', '11:00', 55000, 55000, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `thalamanstatis`
--

CREATE TABLE `thalamanstatis` (
  `kdHalaman` int(1) NOT NULL,
  `profil` longtext NOT NULL,
  `caraBoking` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `thalamanstatis`
--

INSERT INTO `thalamanstatis` (`kdHalaman`, `profil`, `caraBoking`) VALUES
(1, 'lorem', 'lorem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjadwal`
--

CREATE TABLE `tjadwal` (
  `kdJadwal` bigint(20) NOT NULL,
  `tglJadwal` date NOT NULL,
  `kdLapangan` int(5) NOT NULL,
  `kdJam` int(5) NOT NULL,
  `harga` double NOT NULL,
  `statusBoking` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tjadwal`
--

INSERT INTO `tjadwal` (`kdJadwal`, `tglJadwal`, `kdLapangan`, `kdJam`, `harga`, `statusBoking`) VALUES
(7, '2017-03-13', 2, 1, 100000, 'B'),
(8, '2017-03-13', 1, 2, 100000, 'B'),
(9, '2017-03-13', 1, 3, 100000, 'B'),
(10, '2017-03-13', 1, 4, 100000, 'B'),
(11, '2017-03-15', 1, 1, 100000, 'B'),
(12, '2017-03-16', 1, 1, 100000, 'B'),
(13, '2017-03-16', 1, 2, 100000, 'B'),
(14, '2019-12-20', 1, 2, 55000, 'B'),
(15, '2019-12-19', 3, 9, 100000, 'R'),
(16, '2019-12-20', 2, 3, 55000, 'B'),
(17, '2019-12-20', 3, 6, 75000, 'B'),
(19, '2019-12-20', 2, 16, 55000, 'B'),
(20, '2019-12-03', 2, 15, 55000, 'R'),
(21, '2019-12-27', 2, 16, 55000, 'B'),
(22, '2019-12-26', 2, 16, 55000, 'B'),
(23, '2019-12-26', 3, 10, 55000, 'R'),
(24, '2020-01-11', 1, 2, 55000, 'B'),
(25, '2020-01-12', 2, 4, 55000, 'B'),
(26, '2020-01-18', 2, 4, 55000, 'B'),
(28, '2020-01-11', 1, 1, 55000, 'B'),
(29, '2020-01-10', 1, 2, 55000, 'B'),
(30, '2020-01-10', 1, 1, 55000, 'B'),
(31, '2020-01-19', 1, 3, 55000, 'B'),
(32, '2020-01-18', 1, 2, 55000, 'B'),
(33, '2020-01-19', 2, 10, 55000, 'B'),
(34, '2020-01-23', 1, 2, 55000, 'B'),
(35, '2020-01-18', 3, 14, 55000, 'R'),
(36, '2020-01-19', 2, 1, 55000, 'B'),
(37, '2020-01-19', 2, 6, 55000, 'B'),
(38, '2020-01-26', 1, 2, 55000, 'B'),
(39, '2020-01-22', 2, 2, 55000, 'B'),
(40, '2020-01-21', 1, 1, 55000, 'B'),
(41, '2020-01-21', 2, 1, 55000, 'R'),
(42, '2020-01-30', 1, 3, 55000, 'B'),
(43, '2020-01-22', 1, 2, 55000, 'B'),
(44, '2020-01-22', 2, 17, 55000, 'R'),
(45, '2020-01-23', 1, 1, 55000, 'B'),
(46, '2020-01-23', 2, 4, 55000, 'R'),
(47, '2020-01-23', 2, 2, 55000, 'R'),
(48, '2020-01-24', 2, 10, 55000, 'B'),
(49, '2020-01-24', 1, 1, 55000, 'B'),
(50, '2020-01-24', 2, 2, 55000, 'R'),
(51, '2020-01-24', 3, 3, 55000, 'R'),
(52, '2020-01-27', 1, 8, 55000, 'B'),
(53, '2020-01-28', 4, 1, 55000, 'B'),
(55, '2020-01-27', 1, 8, 55000, 'B'),
(56, '2020-01-27', 4, 9, 55000, 'B'),
(57, '2020-01-27', 5, 10, 55000, 'R'),
(58, '2020-01-27', 1, 8, 55000, 'B'),
(59, '2020-01-28', 1, 1, 55000, 'B'),
(60, '2020-01-29', 4, 5, 55000, 'R'),
(61, '2020-01-31', 5, 6, 55000, 'B'),
(62, '2020-01-30', 4, 15, 55000, 'B'),
(63, '2020-02-01', 4, 7, 55000, 'B'),
(64, '2020-01-30', 4, 5, 55000, 'R'),
(65, '2020-01-31', 1, 15, 55000, 'B'),
(66, '2020-01-01', 4, 16, 55000, 'R'),
(67, '2020-01-01', 1, 14, 55000, 'B'),
(68, '2020-02-01', 1, 17, 55000, 'B'),
(70, '2020-01-31', 4, 13, 55000, 'B'),
(71, '2020-02-01', 1, 3, 55000, 'B'),
(72, '2020-02-01', 4, 4, 55000, 'B'),
(73, '2020-02-01', 5, 2, 55000, 'R'),
(78, '2020-02-13', 1, 7, 55000, 'B'),
(79, '2020-02-21', 0, 0, 55, 'R'),
(81, '2020-02-21', 4, 1, 55000, 'B'),
(82, '2020-02-21', 5, 1, 55000, 'B'),
(83, '2020-02-21', 5, 2, 55000, 'B'),
(84, '2020-02-21', 1, 2, 55000, 'B'),
(85, '2020-02-21', 4, 2, 55000, 'B'),
(86, '2020-02-21', 5, 2, 55000, 'B'),
(87, '2020-02-21', 1, 4, 55000, 'B'),
(88, '2020-02-28', 1, 9, 55000, 'B'),
(89, '2020-02-21', 4, 13, 55000, 'B'),
(91, '2020-02-22', 4, 7, 55000, 'B'),
(92, '2020-02-23', 1, 2, 55000, 'B'),
(93, '2020-02-23', 4, 1, 55000, 'B'),
(94, '2020-02-24', 1, 1, 55000, 'B'),
(95, '2020-02-25', 1, 3, 55000, 'B'),
(96, '2020-02-21', 1, 2, 55000, 'B'),
(97, '2020-02-21', 1, 1, 55000, 'B'),
(98, '2020-02-21', 5, 4, 55000, 'B'),
(99, '2020-02-22', 1, 2, 55000, 'B'),
(100, '2020-02-21', 4, 3, 55000, 'B'),
(101, '2020-02-29', 4, 4, 55, 'B'),
(102, '2020-02-22', 1, 2, 55000, 'B'),
(103, '2020-02-06', 1, 1, 12222, 'R'),
(104, '2020-02-20', 4, 3, 12222, 'R'),
(105, '2020-01-01', 1, 2, 12222, 'R'),
(106, '2020-02-27', 1, 4, 55000, 'B'),
(107, '2020-02-27', 4, 2, 55000, 'R'),
(108, '2020-03-07', 1, 2, 55000, 'B'),
(109, '2020-03-05', 1, 1, 55000, 'B'),
(110, '2020-03-05', 4, 2, 55000, 'B'),
(111, '2020-03-05', 1, 9, 55000, 'B'),
(112, '2020-03-05', 4, 7, 55000, 'B'),
(113, '2020-03-06', 1, 3, 55000, 'B'),
(114, '2020-03-06', 4, 8, 55000, 'B'),
(115, '2020-03-06', 4, 12, 55000, 'B'),
(116, '2020-03-07', 5, 7, 55000, 'B'),
(117, '2020-03-06', 5, 3, 55000, 'R'),
(118, '2020-03-07', 5, 6, 55000, 'R'),
(119, '2020-03-06', 5, 10, 55000, 'R'),
(120, '2020-03-06', 5, 6, 55000, 'R'),
(121, '2020-03-11', 1, 5, 55000, 'B'),
(122, '2020-03-11', 1, 1, 55000, 'B'),
(125, '2020-03-11', 4, 4, 55000, 'R'),
(126, '2020-03-11', 4, 10, 55000, 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjam`
--

CREATE TABLE `tjam` (
  `kdJam` int(5) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tjam`
--

INSERT INTO `tjam` (`kdJam`, `jam`) VALUES
(1, '08:00'),
(2, '09:00'),
(3, '10:00'),
(4, '11:00'),
(5, '12:00'),
(6, '13:00'),
(7, '14:00'),
(8, '15:00'),
(9, '16:00'),
(10, '17:00'),
(11, '18:00'),
(12, '19:00'),
(13, '20:00'),
(14, '21:00'),
(15, '22:00'),
(16, '23:00'),
(17, '24:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tlapangan`
--

CREATE TABLE `tlapangan` (
  `kdLapangan` int(5) NOT NULL,
  `noLapangan` int(5) NOT NULL,
  `gambarLapangan` varchar(1000) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` enum('Tersedia','Sudah Dipesan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tlapangan`
--

INSERT INTO `tlapangan` (`kdLapangan`, `noLapangan`, `gambarLapangan`, `deskripsi`, `status`) VALUES
(1, 1, '757a91448d779d6a42052f8235338fa4lapangan futsal.jpg', 'Lapangan Footsal Sintesis pada Paragon Futsal.\r\n\r\n          Paragon Futsal merupakan futsal center yang berlokasi di Jalan Kabupaten KM.0,5, Nogotirto, Gamping, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta.\r\n\r\nMemiliki tiga lapangan yang didukung dengan 2 Line Syntethic Grass, 1 Line Avacourt ukuran standar internasional (ukuran 28 x 18 m), toilet bersih & kamar mandi air hangat, ruang tunggu nyaman, serta parkir luas, tersedia pula kantin pada Paragon Futsal Yogyakarta. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Sudah Dipesan'),
(4, 2, 'f4da689f0e77423b452dc281f3c9c1d5IMG_20200118_153715_HDR.jpg', 'Lapangan Footsal Sintesis pada Paragon Futsal.\r\n\r\n          Paragon Futsal merupakan futsal center yang berlokasi di Jalan Kabupaten KM.0,5, Nogotirto, Gamping, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta.\r\n\r\nMemiliki tiga lapangan yang didukung dengan 2 Line Syntethic Grass, 1 Line Avacourt ukuran standar internasional (ukuran 28 x 18 m), toilet bersih & kamar mandi air hangat, ruang tunggu nyaman, serta parkir luas, tersedia pula kantin pada Paragon Futsal Yogyakarta. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'Tersedia'),
(5, 3, 'e95e96703457f732a51acf62689e146cIMG_20200118_153909_HDR.jpg', 'Lapangan Footsal Sintesis pada Paragon Futsal.\r\n\r\n          Paragon Futsal merupakan futsal center yang berlokasi di Jalan Kabupaten KM.0,5, Nogotirto, Gamping, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta.\r\n\r\nMemiliki tiga lapangan yang didukung dengan 2 Line Syntethic Grass, 1 Line Avacourt ukuran standar internasional (ukuran 28 x 18 m), toilet bersih & kamar mandi air hangat, ruang tunggu nyaman, serta parkir luas, tersedia pula kantin pada Paragon Futsal Yogyakarta. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmember`
--

CREATE TABLE `tmember` (
  `kdMember` bigint(20) NOT NULL,
  `usermember` varchar(100) NOT NULL,
  `passmember` varchar(100) NOT NULL,
  `nmLengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `fotoMember` varchar(1000) NOT NULL,
  `aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmember`
--

INSERT INTO `tmember` (`kdMember`, `usermember`, `passmember`, `nmLengkap`, `alamat`, `kontak`, `fotoMember`, `aktif`) VALUES
(3, 'aku', '202cb962ac59075b964b07152d234b70', 'Kuz', 'Jombor', '6544', 'aaf75eb9a78489775c2e214f50542ca2IMG_20200102_034300.jpg', 'Y'),
(6, 'kamu', '202cb962ac59075b964b07152d234b70', 'Kusno R', 'Jombor', '082213375776', '6864688d0e47f4aabff4ab79ecd4dc8enature_lake_sunset_landscape_london_eye_twalight_night_ultrahd_4k_wallpaper_1920x1080.jpg', 'Y'),
(7, 'adi', '202cb962ac59075b964b07152d234b70', 'Adi P', 'Jombor', '082213375776', '6864688d0e47f4aabff4ab79ecd4dc8enature_lake_sunset_landscape_london_eye_twalight_night_ultrahd_4k_wallpaper_1920x1080.jpg', 'Y'),
(8, 'tedih', '202cb962ac59075b964b07152d234b70', 'Tediiih', 'Cirebon', '082213375777', '1b7f6c7e2b08516bc7cb27aec9957c7blandscape_sea_river_ocean_water_pier_marina_sunset_sun_clouds_sky_1920x1287.jpg', 'Y'),
(35, 'ad', '523af537946b79c4f8369ed39ba78605', 'Adi Nugroho', 'Seturan', '343434', 'd3200c509d7853210cf6786eaeaff14bScreenshot (13).png', 'Y'),
(39, 'saya', '202cb962ac59075b964b07152d234b70', 'Affif Hiayat', 'Jogja', '082213375776', 'd3200c509d7853210cf6786eaeaff14bScreenshot (13).png', 'Y'),
(40, 'agus', '202cb962ac59075b964b07152d234b70', 'Agus Sofyan', 'Jakarta', '082213375', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(41, 'soleh', '202cb962ac59075b964b07152d234b70', 'Soleh P', 'Jogja', '8457857', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(43, 'awe', '055d8401835cbd280eebce0ad57be90c', 'Mas Aji', 'Jalan Palagan', '0822133757', '', 'Y'),
(44, 'soleh', 'a08e7920aa24da147fe58c2710dc646a', 'Sol Leh', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(45, 'akus', '202cb962ac59075b964b07152d234b70', 'Admin Kusno', 'Jombor', '0822133757', '0e8454235ef8744eef5f62203255582akus.png', 'Y'),
(46, 'agus', '202cb962ac59075b964b07152d234b70', 'Agus Sofyan', 'Jakarta', '0822133757', '0e8454235ef8744eef5f62203255582akus.png', 'Y'),
(47, 'affan', '202cb962ac59075b964b07152d234b70', 'Affan DR', 'Tegal', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(49, 'farras', '202cb962ac59075b964b07152d234b70', 'Farras', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(50, 'farras', '202cb962ac59075b964b07152d234b70', 'Farras', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(54, 'qwq', 'a078b88157431887516448c823118d83', 'Farras', 'Jombor', '0822133757', '', 'Y'),
(56, '', '03c7c0ace395d80182db07ae2c30f034', 'Sandra', '', '', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(59, 'admin12345', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin Kusno', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(60, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin Kusno', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(61, 'admin', '202cb962ac59075b964b07152d234b70', 'Farras', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(62, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'Rani', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(63, 'sasaa', '202cb962ac59075b964b07152d234b70', 'sasaa', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(64, 'seli', '202cb962ac59075b964b07152d234b70', 'seli', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(65, 'santi', '202cb962ac59075b964b07152d234b70', 'Santi', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(66, 'adipur', '202cb962ac59075b964b07152d234b70', 'Dipur Wibu', 'Jombor, Jogja', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y'),
(67, 'anton', '202cb962ac59075b964b07152d234b70', 'Anton W', 'Jombor', '0822133757', 'dcce523237de3ed4000b58d48d980204affan.jpg', 'Y'),
(68, 'dika', '202cb962ac59075b964b07152d234b70', 'Dhika R', 'Jombor', '0822133757', '0e8454235ef8744eef5f62203255582akus.png', 'Y'),
(69, 'dhika', '202cb962ac59075b964b07152d234b70', 'Farras', 'Jombor', '0822133757', '29c1348c8803f0ee613f2a7b020cab60IMG-20191113-WA0023.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpengguna`
--

CREATE TABLE `tpengguna` (
  `kdPengguna` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nmPengguna` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `alamatPengguna` text NOT NULL,
  `aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpengguna`
--

INSERT INTO `tpengguna` (`kdPengguna`, `username`, `password`, `nmPengguna`, `kontak`, `alamatPengguna`, `aktif`) VALUES
(2, 'aku', '202cb962ac59075b964b07152d234b70', 'Admin Kusno', '0822133757', 'Jombor', 'Y'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '082213375776', 'Jombor, Jogja', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trincian_boking`
--

CREATE TABLE `trincian_boking` (
  `kdRincianBoking` bigint(20) NOT NULL,
  `kdBoking` int(5) NOT NULL,
  `noLapangan` int(5) NOT NULL,
  `kdJadwal` int(5) NOT NULL,
  `hargaBoking` double NOT NULL,
  `jamBoking` varchar(15) NOT NULL,
  `tglBoking` varchar(15) NOT NULL,
  `subTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trincian_boking`
--

INSERT INTO `trincian_boking` (`kdRincianBoking`, `kdBoking`, `noLapangan`, `kdJadwal`, `hargaBoking`, `jamBoking`, `tglBoking`, `subTotal`) VALUES
(1, 27, 3, 86, 55000, '09:00', '2020-02-21', 55000),
(2, 28, 1, 88, 55000, '16:00', '2020-02-21', 55000),
(3, 29, 2, 89, 55000, '20:00', '2020-02-21', 55000),
(4, 30, 2, 91, 55000, '14:00', '2020-02-22', 55000),
(5, 31, 1, 92, 55000, '09:00', '2020-02-23', 55000),
(6, 32, 1, 95, 55000, '10:00', '2020-02-25', 55000),
(7, 33, 1, 94, 55000, '08:00', '2020-02-24', 55000),
(8, 34, 2, 93, 55000, '08:00', '2020-02-23', 55000),
(9, 35, 1, 96, 55000, '09:00', '2020-02-21', 55000),
(10, 36, 1, 97, 55000, '08:00', '2020-02-21', 55000),
(11, 37, 1, 99, 55000, '09:00', '2020-02-22', 55000),
(12, 38, 2, 100, 55000, '10:00', '2020-02-21', 55000),
(13, 39, 3, 98, 55000, '11:00', '2020-02-21', 55000),
(14, 40, 2, 101, 55, '11:00', '2020-02-29', 55),
(15, 41, 1, 102, 55000, '09:00', '2020-02-22', 55000),
(16, 21, 1, 106, 55000, '11:00', '2020-02-27', 55000),
(17, 22, 1, 108, 55000, '09:00', '2020-03-07', 55000),
(18, 23, 1, 109, 55000, '08:00', '2020-03-05', 55000),
(19, 24, 2, 110, 55000, '09:00', '2020-03-05', 55000),
(20, 25, 1, 111, 55000, '16:00', '2020-03-05', 55000),
(21, 26, 2, 112, 55000, '14:00', '2020-03-05', 55000),
(22, 26, 1, 113, 55000, '10:00', '2020-03-06', 55000),
(23, 27, 2, 114, 55000, '15:00', '2020-03-06', 55000),
(24, 28, 2, 115, 55000, '19:00', '2020-03-06', 55000),
(25, 29, 3, 116, 55000, '14:00', '2020-03-07', 55000),
(26, 30, 2, 123, 55000, '09:00', '2020-03-12', 55000),
(27, 31, 1, 121, 55000, '12:00', '2020-03-11', 55000),
(28, 32, 1, 122, 55000, '08:00', '2020-03-11', 55000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `konfirbayar`
--
ALTER TABLE `konfirbayar`
  ADD PRIMARY KEY (`kdKonfir`);

--
-- Indeks untuk tabel `tboking`
--
ALTER TABLE `tboking`
  ADD PRIMARY KEY (`kdBoking`);

--
-- Indeks untuk tabel `tboking_temp`
--
ALTER TABLE `tboking_temp`
  ADD PRIMARY KEY (`kdBokingTemp`);

--
-- Indeks untuk tabel `thalamanstatis`
--
ALTER TABLE `thalamanstatis`
  ADD PRIMARY KEY (`kdHalaman`);

--
-- Indeks untuk tabel `tjadwal`
--
ALTER TABLE `tjadwal`
  ADD PRIMARY KEY (`kdJadwal`);

--
-- Indeks untuk tabel `tjam`
--
ALTER TABLE `tjam`
  ADD PRIMARY KEY (`kdJam`);

--
-- Indeks untuk tabel `tlapangan`
--
ALTER TABLE `tlapangan`
  ADD PRIMARY KEY (`kdLapangan`);

--
-- Indeks untuk tabel `tmember`
--
ALTER TABLE `tmember`
  ADD PRIMARY KEY (`kdMember`);

--
-- Indeks untuk tabel `tpengguna`
--
ALTER TABLE `tpengguna`
  ADD PRIMARY KEY (`kdPengguna`);

--
-- Indeks untuk tabel `trincian_boking`
--
ALTER TABLE `trincian_boking`
  ADD PRIMARY KEY (`kdRincianBoking`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `konfirbayar`
--
ALTER TABLE `konfirbayar`
  MODIFY `kdKonfir` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tboking`
--
ALTER TABLE `tboking`
  MODIFY `kdBoking` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tboking_temp`
--
ALTER TABLE `tboking_temp`
  MODIFY `kdBokingTemp` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `thalamanstatis`
--
ALTER TABLE `thalamanstatis`
  MODIFY `kdHalaman` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tjadwal`
--
ALTER TABLE `tjadwal`
  MODIFY `kdJadwal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `tjam`
--
ALTER TABLE `tjam`
  MODIFY `kdJam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tlapangan`
--
ALTER TABLE `tlapangan`
  MODIFY `kdLapangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tmember`
--
ALTER TABLE `tmember`
  MODIFY `kdMember` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tpengguna`
--
ALTER TABLE `tpengguna`
  MODIFY `kdPengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `trincian_boking`
--
ALTER TABLE `trincian_boking`
  MODIFY `kdRincianBoking` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
