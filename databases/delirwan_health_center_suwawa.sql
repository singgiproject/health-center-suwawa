-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2023 at 02:06 PM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delirwan_health_center_suwawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `image`, `description`, `date_insert`, `date_update`, `type`) VALUES
(1, 'Puskesmas suwawa 2.jpg_64018eda9c219.jpg', '<p>Puskesmas suwawa adalah puskesmas pusat di kecamatan suwawa untuk menyelenggarakan pembangunan kesehatan secara efektif, efisien dalam mewujudkan kemandirian masyarakat untuk hidup sehat melalui pemberdayaan masyrakat.</p>\r\n', '', '2023-03-05 21:07', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcement`
--

CREATE TABLE `tb_announcement` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_announcement`
--

INSERT INTO `tb_announcement` (`id`, `description`, `date_insert`, `date_update`, `type`) VALUES
(1, 'Menerima Pasien <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/BPJS_Kesehatan_logo.svg/2560px-BPJS_Kesehatan_logo.svg.png\" alt=\"BPJS\" width=\"120\"/>', '', '2022-11-17 10:13', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `id` int(11) NOT NULL,
  `background` varchar(100) NOT NULL,
  `active` varchar(6) NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`id`, `background`, `active`, `date_insert`, `date_update`, `type`) VALUES
(106, 'Puskesmas suwawa 1 (1).jpg_64b14d43420a1.jpg', 'active', '2023-07-14 21:25', '', 'insert'),
(107, 'Puskesmas suwawa 2.jpg_64b14db0719a1.jpg', 'active', '2023-07-14 21:29', '', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`, `date_insert`, `date_update`, `type`) VALUES
(23, ' Promosi Kesehatan (Promkes)', '2023-06-06 19:54', '', 'insert'),
(24, 'Pencegahan Penyakit Menular (P2M) ', '2023-06-06 19:54', '', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `service_hours` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `no_telp`, `email`, `alamat`, `service_hours`) VALUES
(1, '0895320497977', 'sri.bumulo@student.president.ac.id', '<p>Boludawa, Kec. Suwawa, Kabupaten Bone Bolango, Gorontalo 96113.</p>\r\n', '<p>Layanan Umum Senin - Kamis : 08.00 s/d 12.00 Jumat - sabtu : 08:00 s/d 11.00.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id`, `title`, `image`, `description`, `category`, `date_insert`, `date_update`, `type`) VALUES
(19, 'Pencegahan Penyakit Menular', 'P2M.png_64b165ebca1c5.png', '- Surveilens Epidemiologi\r\n- Pelacakan Kasus : TBC, Kusta, DBD, Malaria, Flu Burung, ISPA, Diare, IMS (Infeksi Menular Seksual), Rabiest (Perkesmas)', 'Pencegahan Penyakit Menular (P2M) ', '2023-06-06 19:54', '2023-07-14 23:11', 'update'),
(20, 'Promosi Kesehatan', 'promosi-kesehatan.jpg_64b166992c3a0.jpg', '- Penyuluhan Kesehatan Masyarakat \r\n- Sosialisasi Program Kesehatan \r\n- Perawatan Kesehatan Masyarakat (Perkesmas)', ' Promosi Kesehatan (Promkes)', '2023-07-14 23:14', '', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_head`
--

CREATE TABLE `tb_head` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` varchar(510) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_head`
--

INSERT INTO `tb_head` (`id`, `url`, `description`, `keywords`, `author`, `title`, `icon`, `logo`) VALUES
(1, 'https://klinikdeliyana.delirwan.com/', 'Klinik Dokter Gigi Deliyana Dental Care', 'Klinik Dokter Gigi Deliyana Dental Care, Klinik Dokter Gigi Deliyana, Deliyana Dental Care, klinikdeliyana, klinikdeliyana.com, Klinik Dokter Gigi Gorontalo, Dokter Gigi Gorontalo, Delirwan, Delirwan.com', 'Dr. Irwan', 'Klinik Deliyana Dental Care', 'logo-deliyana2.png', 'logo-deliyana.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medical_records`
--

CREATE TABLE `tb_medical_records` (
  `id` int(11) NOT NULL,
  `no_rekam_medis` varchar(6) NOT NULL,
  `tgl` varchar(40) NOT NULL,
  `medis` varchar(255) NOT NULL,
  `paramedis` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `date_send` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_medical_records`
--

INSERT INTO `tb_medical_records` (`id`, `no_rekam_medis`, `tgl`, `medis`, `paramedis`, `keterangan`, `date_send`) VALUES
(14, '123456', '2023-03-05', '<p>contoh medis</p>\r\n', '<p>contoh untuk paramedis</p>\r\n', '<p>terimakasih&nbsp;</p>\r\n', '2023-03-05 20:18'),
(25, '112233', '2023-07-01', '<p>&nbsp;Datang dengan keluhan pilek</p>\r\n', '<p>panas, batuk, beringus</p>\r\n', '', '2023-07-31 09:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_messages`
--

CREATE TABLE `tb_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `ip_user` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `read_one_message` varchar(1) NOT NULL,
  `read_all_message` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_messages`
--

INSERT INTO `tb_messages` (`id`, `name`, `email`, `subject`, `message`, `ip_user`, `date`, `read_one_message`, `read_all_message`) VALUES
(17, 'Dea ', 'dea@gmail.com', 'pelayanan umum', 'Saya ingin bertanya apakah pelayanan umum tersedia hari ini?\r\n', '125.162.208.111', '2023-06-16 14:20', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien_satisfaction_survey`
--

CREATE TABLE `tb_pasien_satisfaction_survey` (
  `id` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasien_satisfaction_survey`
--

INSERT INTO `tb_pasien_satisfaction_survey` (`id`, `no_hp`) VALUES
(50, '082293991297'),
(51, '085145534401'),
(56, '085256266661'),
(57, '082259131734'),
(58, '0895428177772'),
(59, '08521031381'),
(60, '081342877871'),
(61, '082310705506'),
(62, '085222715716'),
(63, '085256577981'),
(64, '081341300048'),
(65, '085299280747'),
(66, '085299280747'),
(67, '085298382727'),
(68, '082293173423'),
(69, '082293173423'),
(70, '081340106611'),
(71, '082195484737'),
(72, '082187108899'),
(73, '085298120722'),
(74, '085298508423'),
(75, '08511433811'),
(76, '085256597800'),
(77, '08114331507'),
(78, '085298442395'),
(79, '082293431258'),
(80, '081340777919'),
(81, '081340777919'),
(82, '081340777919'),
(83, '081340777919'),
(87, '085741730774'),
(89, '085298543180'),
(90, '085298508423'),
(91, '085340082208'),
(92, '082340248280'),
(93, '081242345656'),
(94, '085298902505'),
(95, '081344318335'),
(96, '089601586462'),
(97, '081340875056'),
(98, '081340875056'),
(99, '085211972876'),
(100, '0895424802800'),
(101, '081341300048'),
(102, '085256798196'),
(103, '082187551355'),
(104, '082348274027'),
(105, '081245114060'),
(106, '082396122980'),
(107, '081241882526'),
(108, '082296655370'),
(109, '081356711497'),
(111, '082347020018'),
(113, '08219027047'),
(114, '082347020018'),
(115, '085299958144'),
(116, '082188934520'),
(117, '08525667821'),
(118, '082393604777'),
(119, '082188096451'),
(120, '085241925462'),
(121, '082189288657'),
(122, '081244543036'),
(123, '085242480213'),
(124, '08529838297'),
(125, '08124442146'),
(128, '085256523099'),
(129, '082385716213'),
(130, '082310958311'),
(131, '085256677444'),
(132, '082296633370'),
(133, '082271614962'),
(134, '082191608837'),
(135, '085242500434'),
(136, '081244046933'),
(137, '085240036649'),
(138, '082271104769'),
(139, '082251148638'),
(140, '081340777919'),
(141, '085255538180'),
(142, '081315283182'),
(143, '081363112221'),
(144, '081243039086'),
(145, '0821871100369'),
(146, '082195234565'),
(147, '081243672229'),
(148, '082191928763'),
(149, '082347020018'),
(150, '085397061127'),
(151, '085240325464'),
(152, '081244735663'),
(153, '082348274227'),
(154, '082348267711'),
(155, '081340375494'),
(156, '081241060143'),
(157, '082192540910'),
(158, '08114319092'),
(159, '085256261945'),
(160, '082188801445'),
(161, '081245079792'),
(162, '081322222790'),
(163, '085240511888'),
(164, '081322144054'),
(165, '082292906939'),
(166, '085657180332'),
(167, '081241099997'),
(168, '085256501275'),
(169, '085256501275'),
(170, '082293173425'),
(171, '081244440550'),
(172, '081244543036'),
(173, '081241060143'),
(174, '085397479545'),
(175, '085256501275'),
(176, '085298326557');

-- --------------------------------------------------------

--
-- Table structure for table `tb_patients`
--

CREATE TABLE `tb_patients` (
  `id` int(11) NOT NULL,
  `no_rekam_medis` varchar(6) NOT NULL,
  `no_kartu_jaminan` varchar(50) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `riwayat_alergi` varchar(100) NOT NULL,
  `date_send` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_patients`
--

INSERT INTO `tb_patients` (`id`, `no_rekam_medis`, `no_kartu_jaminan`, `nama_pasien`, `jenis_kelamin`, `nama_kk`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `pekerjaan`, `no_hp`, `agama`, `alamat`, `riwayat_alergi`, `date_send`) VALUES
(243, '123456', '3672387498', 'Ayudia', 'Perempuan', 'tahaku', 'gtlo', '2001-01-12', 's1', 'mahasiswa', '112324e56756', 'Islam', 'dwdf', '', '2023-07-12 00:14'),
(244, '112233', '123456789', 'Sri Novita Bumulo ', 'Perempuan', 'Bumulo', 'Gorontalo', '2001-10-22', 'SMA', 'mahasiswa', '085383792', 'Islam', 'Suwawa', '', '2023-07-12 00:23'),
(245, '543212', '34546543', 'Rati', 'Perempuan', 'Musa', 'Gorontalo', '0001-10-10', 'SMA', 'mahasiswa', '436354543', 'Islam', 'Suwawa', '', '2023-07-18 13:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satisfaction_survey`
--

CREATE TABLE `tb_satisfaction_survey` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `description` varchar(512) NOT NULL,
  `survey` varchar(11) NOT NULL,
  `status_reply` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_satisfaction_survey`
--

INSERT INTO `tb_satisfaction_survey` (`id`, `name`, `no_hp`, `description`, `survey`, `status_reply`, `date`) VALUES
(4, 'Kicky Marina M Sanu', '082345086020', 'saya sangat senang dengan puskesmas suwawa ini', 'Puas', 1, '2023-01-24 09:04'),
(6, 'Zikra podungge', '082259131734', 'Pelayanan baik dan ramah\r\n', 'Puas', 1, '2023-02-09 13:17'),
(7, 'Ais Panigoro ', '085340082208', 'Sudah sangat baik pelayanannya terima kasih', 'Puas', 1, '2023-02-13 19:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `vector` varchar(100) NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id`, `title`, `description`, `vector`, `date_insert`, `date_update`, `type`) VALUES
(14, 'Pelayanan Umum', 'Tersedia di hari Senin sampai dengan sabtu,\r\ndari jam 08:15 - 11:00', 'value.png_640188dee659e.png', '2022-11-17 10:32', '2023-07-31 10:46', 'update'),
(24, 'Pelayanan Gigi', 'Tersedia di hari selasa, rabu, dan jumat, \r\ndari jam 08:15 - 11:00, terkecuali di hari jumat hanya sampai dengan 10:30.', 'P gigi.png_647e591fb3f50.png', '2023-06-06 05:48', '2023-06-06 05:53', 'update'),
(25, 'Pelayana KIA', 'Tersedia hanya di selasa dan kamis, \r\ndari jam 08:15 - 11:00', 'p Kia.jpg_647e5a17939af.jpg', '2023-06-06 05:53', '', 'insert'),
(26, 'Pelayanan KB', 'Tersedia di hari senin, rabu, dan jumat\r\ndari jam 08:15 - 11:00, terkecuali di hari jumat hanya tersedia sampai dengan jam 10:30.', 'P KB.jpg_647e5b5ace0d7.jpg', '2023-06-06 05:56', '', 'insert'),
(27, 'Pelayanan Laboratorium', 'Tersedia dari hari senin sampai dengan hari sabtu, \r\ndari jam 08:15 - 11:00.', 'p lab.jpg_647e5d19bed4f.jpg', '2023-06-06 06:02', '', 'insert'),
(28, 'Pelayanan UGD', 'Tersedia 24 jam.', 'p ugd.jpg_647e5d8f47f99.jpg', '2023-06-06 06:09', '', 'insert'),
(29, 'Pelayanan Persalinan', 'Tersedia 24 jam.', 'p persalinan.png_647e5e22dd71f.png', '2023-06-06 06:11', '', 'insert'),
(30, 'Pelayanan Apotek', 'Tersedia di setiap pelayanan di puskesmas.', 'p farmasi.png_647e5f9239cdf.png', '2023-06-06 06:13', '', 'insert'),
(31, 'Pelayanan Gizi ', 'Tersedia dari hari senin sampai dengan hari sabtu, pada jam 08:15 - 11:00.', 'p gizi.jpg_6482f86553965.jpg', '2023-06-09 17:58', '', 'insert'),
(32, 'Pelayanan Kesling (kesehatan lingkungan)', 'Tersedia dari hari senin sampai dengan sabtu, pada jam 08:15 - 11:00.', 'p kesling.jpg_6482fa273ab48.jpg', '2023-06-09 18:02', '2023-06-09 18:31', 'update'),
(33, 'Pelayanan MTBS (manajemen terpadu balita sakit)', 'Tersedia dari hari senin sampai dengan sabtu, dari jam 08:15 - 11:00.', 'p mtbs.png_648300cc226f5.png', '2023-06-09 18:33', '', 'insert'),
(34, 'Pelayanan Nifas', 'Tersedia tergantung setiap pasien yang membutuhkan/masuk.', 'p nifas.jpg_648301cbe4aaa.jpg', '2023-06-09 18:37', '', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id`, `image`, `name`, `position`, `description`, `date_insert`, `date_update`, `type`) VALUES
(31, 'vector-user.jpg_64019bdf07f60.jpg', 'Rini Kasim, S.ST', 'Kepala Puskesmas', 'Memimpin Puskesmas', '2023-03-03 14:56', '2023-07-31 11:17', 'update'),
(33, 'dokter gigi perempuan.jpg_6465c94cf0d52.jpg', 'Hairiyah Kuna, AMKG', 'Tenaga Kesehatan', 'Terapis Gigi dan Mulut', '2023-05-18 14:40', '2023-05-18 18:11', 'update'),
(34, 'Bidan.jpg_6465fc47da449.jpg', 'Nursanty B.Touwuri,A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-18 18:14', '2023-05-19 10:34', 'update'),
(35, 'Gizi.jpg_6465fde660d16.jpg', 'Lisnaningsih Humalanggi, AMG', 'Tenaga Kesehatan', 'Ahli Gizi', '2023-05-18 18:22', '2023-05-19 12:04', 'update'),
(36, 'Farmasi.jpg_6466d90a00b13.jpg', 'Fitria Pasau, AMF', 'Tenaga Kesehatan', 'Apoteker', '2023-05-19 10:03', '2023-05-19 10:47', 'update'),
(37, 'kesmas.png_6466da8a7c392.png', 'Sri Wilin Gagulu, SKM', 'Tenaga Kesehatan', 'Kesehatan Masyarakat', '2023-05-19 10:04', '2023-05-19 12:05', 'update'),
(38, 'Gizi.jpg_6466daf6c60ca.jpg', 'Rinny D.C. Lahay, AMG', 'Tenaga Kesehatan', 'Ahli Gizi', '2023-05-19 10:10', '2023-05-19 12:06', 'update'),
(39, 'kesmas.png_6466db3d1b016.png', 'Mujizat H. Abdullah, SKM', 'Tenaga Kesehatan', 'Kesehatan Masyarakat', '2023-05-19 10:12', '2023-05-19 12:06', 'update'),
(40, 'Dokter umum.jpg_6466dc36d4fdd.jpg', 'dr. Endang Kartiko peny', 'Tenaga Medis', 'Dokter Umum', '2023-05-19 10:13', '', 'insert'),
(41, 'dokter gigi perempuan.jpg_6466dc946dd2a.jpg', 'drg. Hasnilawaty', 'Tenaga Medis', 'Dokter Gigi Umum', '2023-05-19 10:17', '', 'insert'),
(42, 'Perawat.jpg_6466ddd694bca.jpg', 'Silvoni P. Sayedi. A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:19', '2023-05-19 10:33', 'update'),
(43, 'Perawat.jpg_6466de27556da.jpg', 'Nurmila Simin Djakaria, S.Kep.Ns', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:24', '2023-05-19 10:34', 'update'),
(44, 'Perawat.jpg_6466de9a551f0.jpg', 'Nurul Tianing Uloli, S.kep.Ns', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:25', '', 'insert'),
(45, 'Perawat.jpg_6466df14f05ce.jpg', 'Yuliyanti Tuki, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:27', '2023-05-19 10:34', 'update'),
(46, 'Perawat.jpg_6466df4e16a0e.jpg', 'Soviana, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:29', '', 'insert'),
(47, 'perawat laki.png_6466dff571a7c.png', 'Moh. Iswanto Nani, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 10:30', '2023-05-19 10:35', 'update'),
(48, 'Kesmas cowoo.jpg_6466e277d7e65.jpg', 'Sukri Ashari Mansur, S.KM', 'Tenaga Kesehatan', 'Kesehatan Masyarakat', '2023-05-19 10:36', '2023-05-19 11:10', 'update'),
(49, 'Farmasi.jpg_6466e342a84b8.jpg', 'Fara Lutfiah Datau, S.Farm.Apt', 'Tenaga Kesehatan', 'Apoteker', '2023-05-19 10:44', '', 'insert'),
(50, 'Bidan.jpg_6466e42f8c10f.jpg', 'Valantina Monoarfa, S.T.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:48', '', 'insert'),
(51, 'Bidan.jpg_6466e4cea7659.jpg', 'Inang Isima, S.ST', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:51', '', 'insert'),
(52, 'Bidan.jpg_6466e515e9a91.jpg', 'Fadlun Al Hasni, A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:54', '', 'insert'),
(53, 'Bidan.jpg_6466e546cf147.jpg', 'Nirmawati Akub, A.md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:55', '', 'insert'),
(54, 'Bidan.jpg_6466e5875d7cf.jpg', 'Andi Misnaeni, A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:56', '', 'insert'),
(55, 'Bidan.jpg_6466e631dc678.jpg', 'Suarti Ahmad, A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 10:57', '', 'insert'),
(56, 'Bidan.jpg_6466e6760285a.jpg', 'Sasrin Yusup, A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 11:00', '', 'insert'),
(57, 'Bidan.jpg_6466e6ac68dec.jpg', 'Serliwulandari, A.Md.Kep', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 11:01', '', 'insert'),
(58, 'perawat laki.png_6466e719393d0.png', 'Ervan Djafar, S.Kep.Ns', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:02', '', 'insert'),
(59, 'perawat laki.png_6466e76d67b24.png', 'Adriyanto Abdullah, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:03', '', 'insert'),
(60, 'Perawat.jpg_6466e7aba168b.jpg', 'Rahmawati Lantu, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:05', '', 'insert'),
(61, 'Perawat.jpg_6466e7e5af33b.jpg', 'Nurlilan S. Yubi, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:06', '', 'insert'),
(62, 'Perawat.jpg_6466e81fb49d2.jpg', 'Vebriyanti Daud, A.Md.Kep', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:07', '', 'insert'),
(63, 'gizi cowok.jpg_6466ea055b577.jpg', 'Zulkifli Abubakar, AMG', 'Tenaga Kesehatan', 'Ahli Gizi', '2023-05-19 11:12', '', 'insert'),
(64, 'kesmas.png_6466ee449ed89.png', 'Rifka Cahyani Lasulika, SKM', 'Tenaga Kesehatan', 'Kesehatan Masyarakat', '2023-05-19 11:32', '', 'insert'),
(65, 'Perawat.jpg_6466ee86ae13c.jpg', 'Isnawati Mahmud, S.Kep.Ns', 'Tenaga Kesehatan', 'Perawat', '2023-05-19 11:34', '', 'insert'),
(66, 'Bidan.jpg_6466eed4d1f24.jpg', 'Mirna Ningsih Ibrahim, S.T.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 11:35', '', 'insert'),
(67, 'Bidan.jpg_6466ef327c8c5.jpg', 'Silviane o.Kairupan, S.Tr.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 11:36', '', 'insert'),
(68, 'Bidan.jpg_6466ef6a5bd68.jpg', 'Pebriani Clara Mohamad, A.Md.Keb', 'Tenaga Kesehatan', 'Bidan', '2023-05-19 11:38', '', 'insert'),
(69, 'ankes.jpg_6466f1ca72998.jpg', 'Siti Rahmawatia Datau, A.Md.Kes', 'Tenaga Kesehatan', 'Analisis kesehatan', '2023-05-19 11:39', '', 'insert'),
(70, 'gizi cowok.jpg_6466f27330514.jpg', 'Hendrawanto Tupi, A.Md.Gz', 'Tenaga Kesehatan', 'Ahli Gizi', '2023-05-19 11:49', '', 'insert'),
(71, 'kesmas.png_6466f29f91f91.png', 'Yusna Saleh, SKM', 'Tenaga Kesehatan', 'Kesehatan Masyarakat', '2023-05-19 11:52', '', 'insert'),
(72, 'admin cowok.jpg_6466f45e22000.jpg', 'Sarip K. Mooduto, S.Akun', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 11:53', '2023-05-19 12:11', 'update'),
(73, 'staff adm.jpg_6466f6886ea16.jpg', 'Testinang Polapa', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:06', '2023-05-19 12:11', 'update'),
(74, 'staff adm.jpg_6466f6a6a3d9a.jpg', 'Sukma Halada', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:09', '2023-05-19 12:11', 'update'),
(75, 'staff adm.jpg_6466f6e205e98.jpg', 'Nurjana Utina', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:10', '', 'insert'),
(76, 'staff adm.jpg_6466f74a98fb7.jpg', 'Sriyanti Gani', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:12', '', 'insert'),
(77, 'staff adm.jpg_6466f7688577f.jpg', 'Helina Datau', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:13', '', 'insert'),
(78, 'staff adm.jpg_6466f78e72858.jpg', 'Agustina Gintue', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:13', '2023-05-19 12:14', 'update'),
(79, 'staff adm.jpg_6466f7cd13ee2.jpg', 'Dewiyanti Mahmud', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:14', '', 'insert'),
(80, 'staff adm.jpg_6466f80629f2c.jpg', 'Rika Fransiska Tangahu', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:15', '', 'insert'),
(81, 'staff adm.jpg_6466f8366bcf6.jpg', 'Helma Oktaviani Kirno Samuda', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:16', '', 'insert'),
(82, 'admin cowok.jpg_6466f85c50b86.jpg', 'Non Anwar Halid', 'Karyawan', 'Mengelolah Administrasi', '2023-05-19 12:16', '', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `gambar`, `first_name`, `last_name`, `username`, `password`, `password2`, `level`) VALUES
(3, 'admin.png_6465f9878765a.png', 'Sri Novita', 'Bumulo', 'admin', '$2y$10$nSNw7c6qhKx.clkqEWGls.pVSiwNWkAiYbjkKXTipLaf7/qYdyipC', 'novita123', 'superadmin'),
(12, 'staff adm.jpg_6465cf08068cd.jpg', 'Staff', 'Administrasi', 'staff administrasi', '$2y$10$iTwACfGIMW4LsRWmPMm2/eIDqRryrszNBw6o2yQxcT7zrTqr3tR/.', 'staff123', 'staff'),
(13, 'tim kshatan.jpg_6465cf92eafdc.jpg', 'Tim', 'Kesehatan', 'tim kesehatan', '$2y$10$q8QQwIF1Xq/5Qqi0R33u6.jAKHPVmnaewBAYS8eZk2CMsQCk7r78.', 'doctor123', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_videos`
--

CREATE TABLE `tb_videos` (
  `id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `date_insert` varchar(20) NOT NULL,
  `date_update` varchar(20) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `id` int(11) NOT NULL,
  `ip_visitor` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_visitor`
--

INSERT INTO `tb_visitor` (`id`, `ip_visitor`, `date`) VALUES
(1, '182.1.148.131', '2023-03-09 20:58'),
(2, '36.85.221.112', '2023-03-09 21:41'),
(3, '182.1.150.40', '2023-03-11 19:49'),
(4, '182.1.136.164', '2023-03-12 17:51'),
(5, '36.85.169.66', '2023-03-13 09:33'),
(6, '36.85.171.70', '2023-03-17 09:19'),
(7, '36.85.175.84', '2023-03-18 13:01'),
(8, '110.139.239.130', '2023-03-20 09:35'),
(9, '65.109.232.182', '2023-03-21 14:51'),
(10, '35.209.187.78', '2023-03-23 19:21'),
(11, '65.154.226.166', '2023-03-23 21:59'),
(12, '65.155.30.101', '2023-03-23 22:10'),
(13, '36.85.223.195', '2023-03-25 13:17'),
(14, '51.158.118.231', '2023-03-26 08:38'),
(15, '35.206.253.134', '2023-03-28 02:06'),
(16, '182.1.149.46', '2023-03-29 14:29'),
(17, '182.1.132.56', '2023-03-29 23:15'),
(18, '104.237.193.28', '2023-04-02 09:30'),
(19, '54.198.55.229', '2023-04-02 09:47'),
(20, '38.132.118.68', '2023-04-02 10:04'),
(21, '63.35.219.76', '2023-04-09 16:34'),
(22, '36.85.220.30', '2023-04-12 15:01'),
(23, '36.85.220.157', '2023-04-12 15:21'),
(24, '36.85.223.127', '2023-04-12 22:07'),
(25, '36.85.174.205', '2023-04-13 12:07'),
(26, '182.1.165.102', '2023-04-13 12:08'),
(27, '110.50.81.201', '2023-04-13 12:08'),
(28, '110.50.80.197', '2023-04-14 08:54'),
(29, '18.246.6.226', '2023-04-15 00:39'),
(30, '52.209.250.222', '2023-04-19 17:11'),
(31, '36.85.220.151', '2023-04-20 04:47'),
(32, '36.85.220.48', '2023-04-26 20:17'),
(33, '164.163.127.106', '2023-05-02 21:19'),
(34, '157.230.185.127', '2023-05-02 21:20'),
(35, '65.154.226.169', '2023-05-02 21:21'),
(36, '179.43.169.181', '2023-05-02 21:21'),
(37, '133.242.140.127', '2023-05-03 03:19'),
(38, '47.242.105.176', '2023-05-03 10:54'),
(39, '47.242.105.176', '2023-05-03 10:54'),
(40, '168.151.109.156', '2023-05-03 16:48'),
(41, '180.149.7.49', '2023-05-03 16:48'),
(42, '35.217.23.130', '2023-05-06 06:23'),
(43, '68.183.18.118', '2023-05-07 19:23'),
(44, '34.210.26.143', '2023-05-08 22:18'),
(45, '18.246.36.154', '2023-05-08 22:18'),
(46, '35.88.247.4', '2023-05-08 22:18'),
(47, '52.26.65.126', '2023-05-09 01:22'),
(48, '52.38.52.160', '2023-05-09 01:25'),
(49, '54.244.70.3', '2023-05-10 21:04'),
(50, '54.202.139.27', '2023-05-10 21:04'),
(51, '54.71.158.205', '2023-05-10 21:04'),
(52, '35.88.250.66', '2023-05-11 18:09'),
(53, '35.88.61.36', '2023-05-11 18:09'),
(54, '54.219.17.26', '2023-05-11 20:47'),
(55, '35.167.249.22', '2023-05-12 08:55'),
(56, '18.237.116.213', '2023-05-12 08:55'),
(57, '35.87.250.14', '2023-05-12 08:55'),
(58, '3.70.198.100', '2023-05-13 00:55'),
(59, '167.248.133.186', '2023-05-13 08:53'),
(60, '23.88.97.188', '2023-05-14 00:59'),
(61, '54.213.245.122', '2023-05-14 12:25'),
(62, '35.161.85.158', '2023-05-14 12:25'),
(63, '34.220.105.211', '2023-05-14 12:25'),
(64, '34.247.244.113', '2023-05-14 21:53'),
(65, '159.89.121.148', '2023-05-15 23:36'),
(66, '164.92.120.44', '2023-05-15 23:45'),
(67, '36.85.222.61', '2023-05-15 23:59'),
(68, '182.1.136.101', '2023-05-16 15:17'),
(69, '18.237.238.17', '2023-05-18 00:57'),
(70, '35.92.209.166', '2023-05-18 00:57'),
(71, '35.165.23.11', '2023-05-18 00:57'),
(72, '36.85.223.54', '2023-05-18 14:16'),
(73, '110.50.81.200', '2023-05-18 14:16'),
(74, '114.142.175.62', '2023-05-18 18:09'),
(75, '103.26.14.146', '2023-05-19 10:03'),
(76, '35.89.175.65', '2023-05-19 17:50'),
(77, '35.88.175.212', '2023-05-19 17:50'),
(78, '34.213.148.169', '2023-05-19 17:51'),
(79, '34.219.34.212', '2023-05-20 11:19'),
(80, '34.217.210.175', '2023-05-20 11:19'),
(81, '36.85.221.28', '2023-05-20 17:34'),
(82, '36.85.221.4', '2023-05-20 17:37'),
(83, '65.154.226.167', '2023-05-23 21:03'),
(84, '18.237.182.86', '2023-05-24 12:52'),
(85, '34.214.5.15', '2023-05-24 12:52'),
(86, '35.91.176.106', '2023-05-24 12:52'),
(87, '143.244.142.237', '2023-05-24 15:26'),
(88, '165.22.183.14', '2023-05-24 15:50'),
(89, '35.89.212.19', '2023-05-25 00:01'),
(90, '35.161.107.163', '2023-05-25 00:01'),
(91, '52.41.38.182', '2023-05-26 00:04'),
(92, '35.91.70.236', '2023-05-26 00:05'),
(93, '114.142.175.36', '2023-05-26 14:19'),
(94, '125.162.209.123', '2023-05-26 15:08'),
(95, '34.221.38.126', '2023-05-27 18:50'),
(96, '35.88.204.182', '2023-05-27 18:50'),
(97, '35.91.161.193', '2023-05-27 18:50'),
(98, '34.221.101.115', '2023-05-29 09:25'),
(99, '35.162.212.142', '2023-05-29 09:25'),
(100, '35.86.175.165', '2023-05-29 09:25'),
(101, '36.85.223.60', '2023-05-29 15:16'),
(102, '150.129.59.5', '2023-05-29 15:16'),
(103, '34.220.111.170', '2023-05-30 03:27'),
(104, '35.161.18.62', '2023-05-30 03:27'),
(105, '125.162.192.81', '2023-05-30 19:58'),
(106, '36.85.223.244', '2023-05-31 09:10'),
(107, '114.142.175.51', '2023-05-31 09:13'),
(108, '125.162.215.117', '2023-05-31 13:05'),
(109, '54.208.225.159', '2023-05-31 23:01'),
(110, '34.219.196.232', '2023-05-31 23:56'),
(111, '34.213.187.161', '2023-05-31 23:56'),
(112, '54.188.160.123', '2023-05-31 23:56'),
(113, '36.85.222.41', '2023-06-01 03:32'),
(114, '36.85.221.106', '2023-06-01 12:05'),
(115, '34.221.215.114', '2023-06-01 20:33'),
(116, '35.89.66.176', '2023-06-01 20:33'),
(117, '35.92.8.61', '2023-06-02 16:23'),
(118, '34.221.115.100', '2023-06-02 16:23'),
(119, '35.92.115.150', '2023-06-02 16:23'),
(120, '35.92.253.171', '2023-06-05 06:02'),
(121, '34.217.88.33', '2023-06-05 06:02'),
(122, '35.91.202.223', '2023-06-05 06:02'),
(123, '63.35.199.173', '2023-06-05 06:58'),
(124, '52.42.238.208', '2023-06-06 10:37'),
(125, '35.162.141.80', '2023-06-06 10:37'),
(126, '34.208.195.118', '2023-06-06 10:38'),
(127, '125.162.213.142', '2023-06-06 19:41'),
(128, '18.236.255.90', '2023-06-07 17:23'),
(129, '52.42.14.24', '2023-06-07 17:24'),
(130, '35.92.165.47', '2023-06-07 17:24'),
(131, '34.255.182.190', '2023-06-07 22:48'),
(132, '34.221.165.71', '2023-06-08 09:42'),
(133, '125.167.136.249', '2023-06-08 11:03'),
(134, '35.88.178.142', '2023-06-08 11:28'),
(135, '170.64.162.5', '2023-06-08 13:16'),
(136, '165.232.177.136', '2023-06-08 13:16'),
(137, '36.85.223.174', '2023-06-09 12:19'),
(138, '36.85.221.125', '2023-06-09 17:04'),
(139, '34.221.116.184', '2023-06-09 20:12'),
(140, '35.89.248.182', '2023-06-10 01:47'),
(141, '35.93.157.233', '2023-06-10 01:47'),
(142, '34.220.148.177', '2023-06-10 08:30'),
(143, '52.12.6.105', '2023-06-10 14:19'),
(144, '18.236.133.108', '2023-06-12 09:54'),
(145, '36.85.222.100', '2023-06-12 13:50'),
(146, '34.219.144.131', '2023-06-13 01:28'),
(147, '36.85.221.53', '2023-06-13 13:58'),
(148, '35.88.236.213', '2023-06-14 04:10'),
(149, '35.87.124.72', '2023-06-14 04:10'),
(150, '52.41.13.90', '2023-06-14 04:10'),
(151, '34.217.51.174', '2023-06-14 15:09'),
(152, '128.199.81.213', '2023-06-16 11:45'),
(153, '125.162.208.111', '2023-06-16 14:08'),
(154, '34.212.160.10', '2023-06-16 17:59'),
(155, '35.92.115.70', '2023-06-16 17:59'),
(156, '34.222.24.56', '2023-06-16 17:59'),
(157, '34.214.185.164', '2023-06-18 14:53'),
(158, '18.237.6.76', '2023-06-18 14:53'),
(159, '18.246.56.78', '2023-06-18 14:53'),
(160, '36.90.138.104', '2023-06-18 16:57'),
(161, '35.90.173.213', '2023-06-19 10:13'),
(162, '18.236.149.64', '2023-06-19 10:13'),
(163, '36.75.187.60', '2023-06-20 10:43'),
(164, '157.245.210.110', '2023-06-20 11:08'),
(165, '54.201.131.162', '2023-06-21 14:38'),
(166, '34.220.214.182', '2023-06-21 14:38'),
(167, '35.87.1.123', '2023-06-21 14:38'),
(168, '35.162.136.238', '2023-06-22 16:48'),
(169, '35.87.40.86', '2023-06-22 16:48'),
(170, '34.221.60.167', '2023-06-22 16:48'),
(171, '35.87.126.97', '2023-06-23 22:07'),
(172, '34.213.20.35', '2023-06-23 22:07'),
(173, '35.161.195.176', '2023-06-23 22:07'),
(174, '54.214.69.9', '2023-06-24 10:17'),
(175, '54.184.233.243', '2023-06-24 10:17'),
(176, '34.214.43.243', '2023-06-24 16:56'),
(177, '54.213.242.146', '2023-06-24 16:56'),
(178, '35.90.122.238', '2023-06-25 05:18'),
(179, '35.166.90.207', '2023-06-25 05:18'),
(180, '36.85.221.101', '2023-06-25 14:02'),
(181, '180.249.93.166', '2023-06-25 15:43'),
(182, '35.92.97.0', '2023-06-26 05:47'),
(183, '35.92.9.172', '2023-06-26 05:47'),
(184, '103.105.25.9', '2023-06-26 16:40'),
(185, '35.90.166.62', '2023-06-28 07:29'),
(186, '35.88.190.189', '2023-06-28 07:29'),
(187, '52.35.233.63', '2023-06-28 07:29'),
(188, '34.220.141.44', '2023-06-29 16:06'),
(189, '54.213.18.168', '2023-06-29 16:06'),
(190, '52.34.48.45', '2023-06-29 16:06'),
(191, '150.129.59.4', '2023-06-29 20:09'),
(192, '180.249.85.9', '2023-07-01 02:29'),
(193, '34.214.252.37', '2023-07-01 08:35'),
(194, '34.210.172.76', '2023-07-01 08:35'),
(195, '182.1.135.139', '2023-07-01 14:53'),
(196, '182.1.137.179', '2023-07-01 17:55'),
(197, '205.169.39.241', '2023-07-02 21:18'),
(198, '185.209.196.244', '2023-07-02 21:20'),
(199, '168.151.167.67', '2023-07-02 21:21'),
(200, '188.241.249.237', '2023-07-02 21:22'),
(201, '74.85.210.186', '2023-07-02 21:23'),
(202, '171.244.43.14', '2023-07-03 06:16'),
(203, '170.64.167.103', '2023-07-03 11:31'),
(204, '35.166.206.0', '2023-07-03 18:13'),
(205, '159.89.189.236', '2023-07-03 23:32'),
(206, '139.59.10.175', '2023-07-04 08:54'),
(207, '54.188.141.167', '2023-07-04 18:12'),
(208, '34.213.161.145', '2023-07-04 21:34'),
(209, '163.172.148.199', '2023-07-05 03:05'),
(210, '54.187.233.166', '2023-07-05 18:12'),
(211, '35.88.79.132', '2023-07-05 18:13'),
(212, '34.213.181.210', '2023-07-05 18:13'),
(213, '54.244.139.126', '2023-07-06 18:30'),
(214, '54.187.158.50', '2023-07-06 18:30'),
(215, '34.217.95.83', '2023-07-06 18:30'),
(216, '36.85.220.185', '2023-07-07 15:23'),
(217, '54.213.86.57', '2023-07-07 18:04'),
(218, '54.70.60.189', '2023-07-07 18:04'),
(219, '36.85.223.55', '2023-07-08 14:22'),
(220, '34.208.243.103', '2023-07-09 02:14'),
(221, '61.27.203.168', '2023-07-09 14:35'),
(222, '34.219.152.104', '2023-07-10 02:08'),
(223, '34.219.138.61', '2023-07-10 02:54'),
(224, '34.213.188.93', '2023-07-11 06:29'),
(225, '54.191.47.141', '2023-07-11 06:42'),
(226, '52.33.118.103', '2023-07-11 07:32'),
(227, '18.236.163.171', '2023-07-12 03:48'),
(228, '35.92.135.153', '2023-07-12 03:49'),
(229, '34.247.64.99', '2023-07-12 05:33'),
(230, '202.67.41.21', '2023-07-12 18:05'),
(231, '34.220.208.149', '2023-07-13 03:08'),
(232, '52.26.83.28', '2023-07-13 03:11'),
(233, '54.186.44.77', '2023-07-14 02:22'),
(234, '35.89.64.107', '2023-07-14 02:22'),
(235, '36.85.223.164', '2023-07-14 21:23'),
(236, '34.215.75.248', '2023-07-15 02:22'),
(237, '35.162.222.181', '2023-07-15 02:22'),
(238, '18.236.84.103', '2023-07-16 02:35'),
(239, '54.149.242.26', '2023-07-17 03:02'),
(240, '54.190.114.114', '2023-07-17 03:02'),
(241, '35.93.140.236', '2023-07-17 03:20'),
(242, '110.139.224.233', '2023-07-18 12:16'),
(243, '36.85.222.254', '2023-07-18 13:09'),
(244, '34.209.12.232', '2023-07-18 13:44'),
(245, '52.34.44.190', '2023-07-18 15:17'),
(246, '54.187.23.149', '2023-07-19 11:14'),
(247, '36.85.223.156', '2023-07-20 02:16'),
(248, '34.218.242.174', '2023-07-20 11:39'),
(249, '34.217.22.245', '2023-07-20 11:39'),
(250, '54.185.18.127', '2023-07-21 12:05'),
(251, '54.186.178.81', '2023-07-22 11:38'),
(252, '35.88.79.172', '2023-07-22 11:38'),
(253, '34.221.133.229', '2023-07-23 11:10'),
(254, '35.90.134.20', '2023-07-23 11:10'),
(255, '54.188.149.77', '2023-07-24 10:56'),
(256, '139.59.83.106', '2023-07-24 10:58'),
(257, '52.41.58.62', '2023-07-25 08:51'),
(258, '35.87.45.176', '2023-07-25 08:56'),
(259, '36.75.190.3', '2023-07-25 16:01'),
(260, '35.92.253.118', '2023-07-26 15:39'),
(261, '34.216.101.64', '2023-07-26 15:39'),
(262, '125.167.139.123', '2023-07-28 01:27'),
(263, '34.218.208.164', '2023-07-28 15:20'),
(264, '35.92.185.3', '2023-07-28 16:53'),
(265, '34.221.64.6', '2023-07-28 16:53'),
(266, '87.236.176.162', '2023-07-29 00:38'),
(267, '54.245.138.107', '2023-07-29 21:44'),
(268, '52.32.77.76', '2023-07-30 14:57'),
(269, '165.232.89.199', '2023-07-30 19:07'),
(270, '35.161.201.175', '2023-07-31 00:22'),
(271, '52.36.63.48', '2023-07-31 00:22'),
(272, '52.34.11.3', '2023-08-01 11:38'),
(273, '54.188.130.84', '2023-08-01 13:01'),
(274, '54.185.10.196', '2023-08-01 13:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_head`
--
ALTER TABLE `tb_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medical_records`
--
ALTER TABLE `tb_medical_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_messages`
--
ALTER TABLE `tb_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien_satisfaction_survey`
--
ALTER TABLE `tb_pasien_satisfaction_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_patients`
--
ALTER TABLE `tb_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_satisfaction_survey`
--
ALTER TABLE `tb_satisfaction_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_head`
--
ALTER TABLE `tb_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_medical_records`
--
ALTER TABLE `tb_medical_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_messages`
--
ALTER TABLE `tb_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pasien_satisfaction_survey`
--
ALTER TABLE `tb_pasien_satisfaction_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3400001;

--
-- AUTO_INCREMENT for table `tb_patients`
--
ALTER TABLE `tb_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `tb_satisfaction_survey`
--
ALTER TABLE `tb_satisfaction_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
