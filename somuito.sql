-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2025 at 10:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somuito`
--

-- --------------------------------------------------------

--
-- Table structure for table `brake_pads_premium`
--

CREATE TABLE `brake_pads_premium` (
  `id` int(11) NOT NULL,
  `brand_mobil` varchar(100) DEFAULT NULL,
  `nama_mobil` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genuine_number` varchar(100) DEFAULT NULL,
  `posisi` enum('FRONT','REAR','FRONT & REAR') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brake_pads_premium`
--

INSERT INTO `brake_pads_premium` (`id`, `brand_mobil`, `nama_mobil`, `description`, `genuine_number`, `posisi`) VALUES
(1, 'Toyota', NULL, 'AGYA AT (12-)', '04491-BZ020', 'FRONT'),
(2, 'Daihatsu', NULL, 'AYLA  AT (12-)', '04491-BZ020', 'FRONT'),
(3, 'Daihatsu', NULL, 'SIGRA (16-)', '04491-BZ030', 'FRONT'),
(4, 'Toyota', NULL, 'CALYA (16-)', '04491-BZ030', 'FRONT'),
(5, 'Daihatsu', NULL, 'GRAND MAX (08-21) / NEW GRAND MAX (22-)', '04465-BZ130', 'FRONT'),
(6, 'Daihatsu', NULL, 'LUXIO (09-)', '04465-BZ130', 'FRONT'),
(7, 'Daihatsu', NULL, 'XENIA (04-10) / NEW XENIA (11-21)', '04465-YZZR8', 'FRONT'),
(8, 'Daihatsu', NULL, 'TERIOS (06-16) ', '04465-YZZR8', 'FRONT'),
(9, 'Toyota', NULL, 'RUSH (06-16)', '04465-YZZR8', 'FRONT'),
(10, 'Suzuki', NULL, 'APV (04-)', '04465-YZZR8', 'FRONT'),
(11, 'Daihatsu', NULL, 'GRAND MAX (08-21)', '04495-BZ100', 'REAR'),
(12, 'Daihatsu', NULL, 'LUXIO (09-)', '04495-BZ100', 'REAR'),
(13, 'Toyota', NULL, 'RUSH (06-16)', '04495-87601', 'REAR'),
(14, 'Daihatsu', NULL, 'TERIOS (06-16)', '04495-87601', 'REAR'),
(15, 'Toyota', NULL, 'AVANZA (04-10) / NEW AVANZA (11-21)', '04495-BZ010', 'REAR'),
(16, 'Daihatsu', NULL, 'XENIA (04-10) / NEW XENIA (11-21)', '04495-BZ010', 'REAR'),
(17, 'Toyota', NULL, 'AVANZA (04-10) / NEW AVANZA (11-21)', '04465-YZZR8', 'FRONT'),
(18, 'Toyota', NULL, 'FORTUNER (05-11)', '04465-0K020', 'FRONT'),
(19, 'Toyota', NULL, 'HILUX VIGO SC (05-15)', '04465-0K020', 'FRONT'),
(20, 'Toyota', NULL, 'FORTUNER VNT (12-15)', '04465-0K340', 'FRONT'),
(21, 'Toyota', NULL, 'HILUX VIGO DC (05-15)', '04465-0K340', 'FRONT'),
(22, 'Toyota', NULL, 'KIJANG INNOVA (04-15)', '04465-0K100', 'FRONT'),
(23, 'Toyota', NULL, 'KIJANG SUPER KF40/50 5K/7K (86-97)', '04465-0B020', 'FRONT'),
(24, 'Toyota', NULL, 'KIJANG KAPSUL KF60/70/80 7K (98-03)', '04465-0B020', 'FRONT'),
(25, 'Toyota', NULL, 'INNOVA REBORN (16-)', '04465-0K430', 'FRONT'),
(26, 'Toyota', NULL, 'VELOZ (22-)', '04466-B1011', 'REAR'),
(27, 'Toyota', NULL, 'ALL NEW AVANZA (22-) / VELOZ (22-)', '04465-BZ300', 'FRONT'),
(28, 'Daihatsu', NULL, 'ALL NEW DAIHATSU XENIA (22-)', '04465-BZ300', 'FRONT'),
(29, 'Toyota', NULL, 'RAIZE (21-)', '04465-BZ300', 'FRONT'),
(30, 'Daihatsu', NULL, 'DAIHATSU ROCKY (21-)', '04465-BZ300', 'FRONT'),
(31, 'Toyota', NULL, 'NEW FORTUNER (16-)', '04465-0K370', 'FRONT'),
(32, 'Toyota', NULL, 'NEW HILUX REVO DC (16-)', '04465-0K370', 'FRONT'),
(33, 'Toyota', NULL, 'ALL NEW YARIS (14-21)', '04465-0D150', 'FRONT'),
(34, 'Toyota', NULL, 'ALL NEW VIOS (14-21)', '04465-0D150', 'FRONT'),
(35, 'Toyota', NULL, 'NEW YARIS (06-13)', '04465-52240', 'FRONT'),
(36, 'Toyota', NULL, 'NEW VIOS (07-13)', '04465-52240', 'FRONT'),
(37, 'Toyota', NULL, 'NEW YARIS (06-13)', '04465-52120', 'REAR'),
(38, 'Toyota', NULL, 'NEW VIOS (07-13)', '04465-52120', 'REAR'),
(39, 'Toyota', NULL, 'VIOS (03-06)', '04466-52160', 'FRONT'),
(40, 'Toyota', NULL, 'VIOS (03-06)', '04466-52040', 'REAR'),
(41, 'Toyota', NULL, 'NAV1 (12-16)', '04465-02310', 'FRONT'),
(42, 'Toyota', NULL, 'VOXY (17-)', '04465-02310', 'FRONT'),
(43, 'Toyota', NULL, 'SIENTA (16-)', '04465-02310', 'FRONT'),
(44, 'Toyota', NULL, 'SIENTA (16-)', '04466-0D040', 'REAR'),
(45, 'Toyota', NULL, 'VOXY (17-)', '04466-28120', 'REAR'),
(46, 'Toyota', NULL, 'HIACE PREMIO (19-)', '04465-26440', 'FRONT'),
(47, 'Toyota', NULL, 'HIACE COMMUTER (12-)', '04465-YZZE9', 'FRONT'),
(48, 'Toyota', NULL, 'HIACE PREMIO (19-)', '04466-26030', 'REAR'),
(49, 'Toyota', NULL, 'NEW RUSH (17-)', '04465-BZ250', 'FRONT'),
(50, 'Daihatsu', NULL, 'NEW DAIHATSU TERIOS (17-)', '04465-BZ250', 'FRONT'),
(51, 'Mitshubisi', NULL, 'COLT L300 (81-)', '4605A905B1', 'FRONT'),
(52, 'Toyota', NULL, 'AGYA MT (12-)', '04491-BZ021', 'FRONT'),
(53, 'Daihatsu', NULL, 'AYLA MT (12-)', '04491-BZ021', 'FRONT'),
(54, 'Mitshubisi', NULL, 'L200 STRADA TRITON 2.5/2.8 (08-15)', '4605A284', 'FRONT'),
(55, 'Mitshubisi', NULL, 'NEW TRITON HDX (16-)', '4605A930', 'FRONT'),
(56, 'Mitshubisi', NULL, 'NEW PAJERO SPORT (16-)', '4605A930', 'FRONT'),
(57, 'Mitshubisi', NULL, 'PAJERO SPORT (08-15)', '4605A783', 'REAR'),
(58, 'Mitshubisi', NULL, 'NEW PAJERO SPORT (16-)', '4605A783', 'REAR'),
(59, 'Mitshubisi', NULL, 'XPANDER (17-) / XPANDER CROSS (19-)', '4605B949', 'FRONT'),
(60, 'Nissan', NULL, 'LIVINA (19-)', '4605B949', 'FRONT'),
(61, 'Suzuki', NULL, 'ERTIGA (12-18)', '55810-B58M50N', 'FRONT'),
(62, 'Mazda', NULL, 'MAZDA 2 (09-14)', '55810-B58M50N', 'FRONT'),
(63, 'Suzuki', NULL, 'NEW ERTIGA (19-) / XL7 (20-)', '55810-59R00', 'FRONT'),
(64, 'Suzuki', NULL, 'NEW CARRY (19-)', '55810-52S00', 'FRONT'),
(65, 'Suzuki', NULL, 'CARRY FUTURA (91-18)', '55110-77500', 'FRONT'),
(66, 'Mitshubisi', NULL, 'COLT T120SS (91-18)', '55110-77500', 'FRONT'),
(67, 'Isuzu', NULL, 'PANTHER KAROSERI 2.3/2.5 (91-00)', '8-87083-999-0', 'FRONT'),
(68, 'Isuzu', NULL, 'PANTHER KAPSUL TOURING 2.5 (01-21)', '8-87083-999-0', 'FRONT'),
(69, 'Isuzu', NULL, 'TRAGA (18-)', '8-98283-244-0', 'FRONT'),
(70, 'Nissan', NULL, 'GRAND LIVINA (07-12)', 'D1060-ED500', 'FRONT'),
(71, 'Nissan', NULL, 'NEW GRAND LIVINA (13-18)', 'D1060-EE5ZA', 'FRONT'),
(72, 'Nissan', NULL, 'X-TRAIL T30 (03-08) / X-TRAIL T31 (09-13) / X-TRAIL T32 (14-21) / SERENA C26 (13-18) / SERENA C27 (19-23)', 'D1060-8H385', 'REAR'),
(73, 'Nissan', NULL, 'SERENA C26 (13-18) / SERENA C27 (19-23)', 'D1060-8H385', 'REAR'),
(74, 'Nissan', NULL, 'X-TRAIL T30 (03-08) / SERENA C24 (04-12)', 'D1060-OW7X5', 'FRONT'),
(75, 'Nissan', NULL, 'X-TRAIL T31 (09-13)', 'D1060-JE21A', 'FRONT'),
(76, 'Nissan', NULL, 'X-TRAIL T32 (14-21)', 'D1060-4GA0A', 'FRONT'),
(77, 'Nissan', NULL, 'SERENA C26 (13-18)', 'D1M60-CY70B', 'FRONT'),
(78, 'Nissan', NULL, 'SERENA C27 (19-23)', 'D1MFM-4KJ1J', 'FRONT'),
(79, 'Nissan', NULL, 'DATSUN GO (14-20) / CROSS (18-20)', 'D1060-4LA0A', 'FRONT'),
(80, 'Honda', NULL, 'CITY GD3 (02-07) / JAZZ GD8 (02-07) / BRIO (12-17) / NEW BRIO (18-)', '45022-TG1-T00', 'FRONT'),
(81, 'Honda', NULL, 'HR-V (14-21) / NEW HR-V (22-)', '45022-TGM-H01', 'FRONT'),
(82, 'Honda', NULL, 'BR-V (16-21) / NEW BR-V (22-)', '45022-S7A-010', 'FRONT'),
(83, 'Honda', NULL, 'CITY GM2 (08-14) / JAZZ GE8 (08-14) / CITY GM6 (15-20) / JAZZ GK5 (15-20) / FREED (08-16) / MOBILIO (14-24)', '45022-TG0-T00', 'FRONT'),
(84, 'Honda', NULL, 'CITY GD3 (02-07) / JAZZ GD8 (02-07) / CITY GM2 (08-14) / JAZZ GE8 (08-14)', '43022-SR3-G01', 'REAR'),
(85, 'Honda', NULL, 'HR-V (14-21) / NEW HR-V (22-)', '43022-T7J-H01', 'REAR'),
(86, 'Honda', NULL, 'CR-V GEN 3 (07-12) / CR-V GEN 4 (13-16) / CR-V GEN 5 (17-23)', '45022-T0A-A01', 'FRONT'),
(87, 'Honda', NULL, 'CR-V GEN 3 (07-12) / CR-V GEN 4 (13-16)', '43022-S9A-JT0', 'REAR'),
(88, 'Honda', NULL, 'CR-V GEN 5 (17-23)', '43022-TLA-A00', 'REAR'),
(89, 'Wuling', NULL, 'CONFERO (17-) / CORTEZ (18-)', '23948042', 'FRONT'),
(90, 'Wuling', NULL, 'CONFERO (17-) / CORTEZ (18-)', '23904739', 'REAR');

-- --------------------------------------------------------

--
-- Table structure for table `brake_shoes_premium`
--

CREATE TABLE `brake_shoes_premium` (
  `id` int(11) NOT NULL,
  `brand_mobil` varchar(100) DEFAULT NULL,
  `nama_mobil` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genuine_number` varchar(100) DEFAULT NULL,
  `posisi` enum('FRONT','REAR','FRONT & REAR') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brake_shoes_premium`
--

INSERT INTO `brake_shoes_premium` (`id`, `brand_mobil`, `nama_mobil`, `description`, `genuine_number`, `posisi`) VALUES
(1, 'Toyota', NULL, 'NEW RUSH (17-)', '04465-BZ160', 'REAR'),
(2, 'Daihatsu', NULL, 'TERIOS (17-)', '04465-BZ160', 'REAR'),
(3, 'Toyota', NULL, 'HIACE COMMUTER (12-)', '04495-35250', 'REAR'),
(4, 'Toyota', NULL, 'ALL NEW AVANZA (22-)', '04495-BZ180', 'REAR'),
(5, 'Daihatsu', NULL, 'ROCKY (21-)', '04495-BZ180', 'REAR'),
(6, 'Toyota', NULL, 'RAIZE (21-)', '04495-BZ180', 'REAR'),
(7, 'Daihatsu', NULL, 'XENIA (22-)', '04495-BZ180', 'REAR'),
(8, 'Toyota', NULL, 'AGYA (12-)', '04495-BZ110', 'REAR'),
(9, 'Daihatsu', NULL, 'AYLA (12-)', '04495-BZ110', 'REAR'),
(10, 'Toyota', NULL, 'CALYA (16-)', '04495-BZ140', 'REAR'),
(11, 'Daihatsu', NULL, 'SIGRA (16-)', '04495-BZ140', 'REAR'),
(12, 'Toyota', NULL, 'FORTUNER (05-11) / FORTUNER VNT (12-15) / NEW FORTUNER (16-)', '04495-0K120', 'REAR'),
(13, 'Toyota', NULL, 'HILUX VIGO DC (05-15) / NEW HILUX REVO DC (16-)', '04495-0K120', 'REAR'),
(14, 'Toyota', NULL, 'KIJANG INNOVA (04-15)', '04495-0K040', 'REAR'),
(15, 'Toyota', NULL, 'HILUX VIGO SC (05-15)', '04495-0K040', 'REAR'),
(16, 'Toyota', NULL, 'INNOVA REBORN (16-)', '04495-0K130', 'REAR'),
(17, 'Toyota', NULL, 'NEW HILUX REVO SC (16-)', '04495-0K130', 'REAR'),
(18, 'Toyota', NULL, 'KIJANG SUPER KF40/50 5K/7K (86-97)', '04495-0B020', 'REAR'),
(19, 'Toyota', NULL, 'KIJANG KAPSUL KF60/70/80 7K (98-03)', '04495-0B020', 'REAR'),
(20, 'Toyota', NULL, 'ALL NEW YARIS (14-21)', '04495-0D060', 'REAR'),
(21, 'Toyota', NULL, 'ALL NEW VIOS (14-21)', '04495-0D060', 'REAR'),
(22, 'Toyota', NULL, 'NAV1 (12-16)', '04495-28151', 'REAR'),
(23, 'Mitshubisi', NULL, 'COLT L300 (81-)', 'ML587659', 'REAR'),
(24, 'Mitshubisi', NULL, 'L200 STRADA TRITON 2.5/2.8 (08-15)', '4600A106', 'REAR'),
(25, 'Mitshubisi', NULL, 'NEW TRITON HDX (16-)', '4600A106', 'REAR'),
(26, 'Mitshubisi', NULL, 'XPANDER (17-) / XPANDER CROSS (19-)', '4600A259', 'REAR'),
(27, 'Nissan', NULL, 'NEW NISSAN LIVINA (19-)', '4600A259', 'REAR'),
(28, 'Nissan', NULL, 'JUKE (10-18)', '4600A259', 'REAR'),
(29, 'Suzuki', NULL, 'APV (04-)', '53200-61J00', 'REAR'),
(30, 'Suzuki', NULL, 'MEGA CARRY (11-18) / NEW CARRY (19-)', '53200-61J00', 'REAR'),
(31, 'Suzuki', NULL, 'ERTIGA (12-18)', '53200-M5K10', 'REAR'),
(32, 'Suzuki', NULL, 'NEW ERTIGA (19-)', '53200-73R00', 'REAR'),
(33, 'Suzuki', NULL, 'XL7 (20-)', '53200-73R00', 'REAR'),
(34, 'Suzuki', NULL, 'CARRY ST100 (83-09)', '53200-77311', ''),
(35, 'Suzuki', NULL, 'CARRY FUTURA (91-18)', '53200-B77501', 'REAR'),
(36, 'Mitshubisi', NULL, 'COLT T120SS (91-18)', '53200-B77501', 'REAR'),
(37, 'Isuzu', NULL, 'PANTHER KAROSERI 2.3/2.5 (91-00)', '8-94479-709-1', 'REAR'),
(38, 'Isuzu', NULL, 'PANTHER KAPSUL TOURING 2.5 (01-21)', '8-94479-709-1', 'REAR'),
(39, 'Isuzu', NULL, 'TRAGA (18-)', '16-87832-225-0', 'REAR'),
(40, 'Nissan', NULL, 'DATSUN GO (14-20) / CROSS (18-20)', 'D4060-4LC0A', 'REAR'),
(41, 'Nissan', NULL, 'SERENA C24 (04-12)', '44060-4N028', 'REAR'),
(42, 'Nissan', NULL, 'GRAND LIVINA (07-12) / NEW GRAND LIVINA (13-18)', '44060-EN026', 'REAR'),
(43, 'Honda', NULL, 'BR-V (16-21) / NEW BR-V (22-)', '43153-S10-A01', 'REAR'),
(44, 'Honda', NULL, 'FREED (08-16)', '43153-S10-A01', 'REAR'),
(45, 'Honda', NULL, 'CITY GM6 (15-20)', '43153-SNA-A02', 'REAR'),
(46, 'Honda', NULL, 'JAZZ GK5 (15-20)', '43153-SNA-A02', 'REAR'),
(47, 'Honda', NULL, 'MOBILIO (14-24)', '43153-SNA-A02', 'REAR'),
(48, 'Honda', NULL, 'BRIO (12-17)', '43153-TG1-T01', 'REAR'),
(49, 'Honda', NULL, 'NEW BRIO (18-)', '43153-TG4-T51', 'REAR');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `telepon`, `email`, `pesan`, `created_at`) VALUES
(3, 'Sons', '08123456789', 'sons@gmail.com', 'sons@gmail.com', '2025-08-27 08:10:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brake_pads_premium`
--
ALTER TABLE `brake_pads_premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brake_shoes_premium`
--
ALTER TABLE `brake_shoes_premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brake_pads_premium`
--
ALTER TABLE `brake_pads_premium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `brake_shoes_premium`
--
ALTER TABLE `brake_shoes_premium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
