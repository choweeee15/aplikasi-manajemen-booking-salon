-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 12:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salonn`
--

-- --------------------------------------------------------

--
-- Table structure for table `appeals`
--

CREATE TABLE `appeals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appeal_reason` text NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appeals`
--

INSERT INTO `appeals` (`id`, `user_id`, `appeal_reason`, `status`, `created_at`) VALUES
(8, 66, 'dawd', 'accepted', '2025-03-27 11:05:59'),
(10, 66, 'pls unblok i want to book a sport arena', 'accepted', '2025-03-27 11:37:11'),
(11, 69, 'halo tolong saya sudah jerah mau olahraga', 'rejected', '2025-03-27 11:43:17'),
(12, 70, 'saya tidak akan melanggar aturan aplikasi lagi, tolong pertimbangkan ban saya :(', 'accepted', '2025-04-02 04:24:37'),
(13, 75, 'tolong unban saya, saya mau memai fasilitas', 'accepted', '2025-04-05 04:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` int(11) NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `app_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `app_name`, `app_logo`) VALUES
(2, 'Velour', '1746703848_bc90822aa5fb3ae4948f.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `pengguna_id` int(11) DEFAULT NULL,
  `lapangan_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Terkonfirmasi','Sedang Menggunakan','Selesai') NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `pengguna_id`, `lapangan_id`, `pembayaran_id`, `tanggal`, `total_harga`, `status`, `created_at`) VALUES
(1, NULL, 7, 2, '2025-04-13', '125000.00', 'Menunggu Konfirmasi', '2025-04-13 21:33:35'),
(2, NULL, 7, 3, '2025-04-13', '250000.00', 'Menunggu Konfirmasi', '2025-04-13 21:34:08'),
(3, NULL, 7, 4, '2025-04-13', '125000.00', 'Menunggu Konfirmasi', '2025-04-13 21:39:50'),
(4, 78, 7, 5, '2025-04-14', '250000.00', 'Selesai', '2025-04-14 21:46:12'),
(5, 78, 7, 6, '2025-04-15', '375000.00', 'Selesai', '2025-04-15 09:24:04'),
(6, 78, 12, 7, '2025-04-14', '95000.00', 'Terkonfirmasi', '2025-04-15 09:40:10'),
(7, 78, 10, 8, '2025-04-13', '120000.00', 'Menunggu Konfirmasi', '2025-04-15 09:47:30'),
(8, 78, 11, 9, '2025-04-14', '80000.00', 'Menunggu Konfirmasi', '2025-04-15 09:57:23'),
(9, 81, 11, 10, '2025-04-01', '80000.00', 'Menunggu Konfirmasi', '2025-04-16 08:40:45'),
(10, 59, 10, 11, '2025-04-16', '240000.00', 'Selesai', '2025-04-16 10:06:07'),
(11, 59, 10, 12, '2025-04-16', '240000.00', 'Menunggu Konfirmasi', '2025-04-16 10:07:15'),
(12, 59, 9, 13, '2025-04-01', '100000.00', 'Terkonfirmasi', '2025-04-16 20:46:16'),
(13, 59, 9, 14, '2025-04-01', '100000.00', 'Selesai', '2025-04-16 20:47:28'),
(14, 59, 9, 15, '2025-04-15', '100000.00', 'Terkonfirmasi', '2025-04-16 20:51:49'),
(15, 59, 9, 16, '2025-04-15', '100000.00', 'Menunggu Konfirmasi', '2025-04-16 20:53:00'),
(16, 59, 9, 17, '2025-04-08', '100000.00', 'Menunggu Konfirmasi', '2025-04-16 20:56:24'),
(17, 59, 9, 18, '2025-04-15', '100000.00', 'Terkonfirmasi', '2025-04-16 20:59:09'),
(18, 59, 8, 19, '0000-00-00', '150000.00', 'Menunggu Konfirmasi', '2025-04-16 21:31:35'),
(19, 19, 10, 20, '2025-04-12', '120000.00', 'Selesai', '2025-04-17 07:39:01'),
(20, 19, 8, 21, '2025-04-01', '600000.00', 'Menunggu Konfirmasi', '2025-04-17 07:40:13'),
(21, 19, 9, 22, '2025-04-17', '100000.00', 'Selesai', '2025-04-17 07:41:26'),
(22, 83, 10, 23, '2025-04-20', '240000.00', 'Selesai', '2025-04-20 09:10:59'),
(23, 59, 8, 24, '2025-05-08', '150000.00', 'Terkonfirmasi', '2025-05-08 09:14:44'),
(24, 59, 8, 25, '2025-05-08', '150000.00', 'Selesai', '2025-05-08 09:48:44'),
(25, 59, 8, 26, '2025-05-08', '150000.00', 'Menunggu Konfirmasi', '2025-05-08 14:03:00'),
(26, 59, 7, 27, '2025-05-16', '125000.00', 'Terkonfirmasi', '2025-05-08 18:26:08'),
(27, 59, 8, 28, '2025-05-08', '150000.00', 'Selesai', '2025-05-08 20:07:10'),
(28, 59, 8, 29, '2025-05-09', '150000.00', 'Menunggu Konfirmasi', '2025-05-09 11:25:58'),
(29, 59, 7, 30, '2025-05-10', '125000.00', 'Terkonfirmasi', '2025-05-09 11:26:52'),
(30, 59, 9, 31, '2025-05-10', '100000.00', 'Menunggu Konfirmasi', '2025-05-09 11:35:50'),
(31, 85, 9, 32, '2025-05-15', '100000.00', 'Terkonfirmasi', '2025-05-10 11:36:27'),
(32, 85, 9, 33, '2025-05-11', '100000.00', 'Selesai', '2025-05-10 11:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `booking_waktu`
--

CREATE TABLE `booking_waktu` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `waktu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_waktu`
--

INSERT INTO `booking_waktu` (`id`, `booking_id`, `waktu_id`) VALUES
(1, 1, 1),
(2, 2, 8),
(3, 2, 9),
(4, 3, 1),
(5, 4, 5),
(6, 4, 8),
(7, 5, 1),
(8, 5, 2),
(9, 5, 3),
(10, 6, 5),
(11, 7, 1),
(12, 8, 6),
(13, 9, 6),
(14, 10, 6),
(15, 10, 7),
(16, 11, 6),
(17, 11, 7),
(18, 12, 8),
(19, 13, 8),
(20, 14, 2),
(21, 15, 2),
(22, 16, 1),
(23, 17, 4),
(24, 18, 5),
(25, 19, 2),
(26, 20, 3),
(27, 20, 6),
(28, 20, 8),
(29, 20, 9),
(30, 21, 9),
(31, 22, 1),
(32, 22, 2),
(33, 23, 5),
(34, 24, 5),
(35, 25, 9),
(36, 26, 7),
(37, 27, 8),
(38, 28, 6),
(39, 29, 1),
(40, 30, 5),
(41, 31, 3),
(42, 32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_lapangan`
--

CREATE TABLE `gambar_lapangan` (
  `id` int(11) NOT NULL,
  `lapangan_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_lapangan`
--

INSERT INTO `gambar_lapangan` (`id`, `lapangan_id`, `file`, `created_at`) VALUES
(28, 7, '1746704585_e7237f82abf63f1e5fb5.jpg', '2025-05-08 18:43:05'),
(29, 7, '1746704585_01c68efcbe9bf9cd21b7.jpg', '2025-05-08 18:43:05'),
(30, 7, '1746704585_ec146af991a3c026e45f.jpg', '2025-05-08 18:43:05'),
(31, 8, '1746704636_a6a4d96acdd197095473.jpg', '2025-05-08 18:43:56'),
(32, 8, '1746704636_7c07a04b88403f0a7c7c.jpg', '2025-05-08 18:43:56'),
(33, 8, '1746704636_50c4460ef8e4d6f15869.jpg', '2025-05-08 18:43:56'),
(34, 9, '1746704682_a90ca201d4ab195c83f0.jpg', '2025-05-08 18:44:42'),
(35, 9, '1746704682_57b10f3389fb9241c0a0.jpg', '2025-05-08 18:44:42'),
(36, 9, '1746704682_c85c5da84bb020c00e29.jpg', '2025-05-08 18:44:42'),
(37, 9, '1746704682_5edb66d9f6be5a84f97c.jpg', '2025-05-08 18:44:42'),
(38, 10, '1746704727_04290f192438d00269b9.jpg', '2025-05-08 18:45:27'),
(39, 10, '1746704727_1a6ef0e0a306a960fec7.jpg', '2025-05-08 18:45:27'),
(40, 10, '1746704727_c30690437a4261c08afa.jpg', '2025-05-08 18:45:27'),
(41, 11, '1746704890_0654496a9e1ff061a29e.jpg', '2025-05-08 18:48:10'),
(42, 11, '1746704890_8bf19e84fcb7c12e321a.jpg', '2025-05-08 18:48:10'),
(43, 11, '1746704890_c2ac96557769cf04240d.jpg', '2025-05-08 18:48:10'),
(50, 20, '1746852176_125face36903bdddb0ae.jpg', '2025-05-10 11:42:56'),
(51, 20, '1746852176_460a68256ff662b35927.jpg', '2025-05-10 11:42:56'),
(52, 20, '1746852176_908dfc2e4b44938e5c48.jpg', '2025-05-10 11:42:56'),
(53, 20, '1746852199_602413c3f2407a6120f8.jpeg', '2025-05-10 11:43:19'),
(54, 20, '1746852199_667dfd317abf27f8458d.jpg', '2025-05-10 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tipe` enum('Haircut','Hair coloring','Hair styling','Hair treatment','Updo Styling','Perming') DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `status` enum('tersedia','tidak tersedia') DEFAULT 'tersedia',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `nama`, `deskripsi`, `lokasi`, `tipe`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Creambath', 'Perfect for deep conditioning or a quick refresh. Designed to nourish and revitalize hair, delivering softness and shine for all hair types.', 'Sapi Bakar2', 'Hair styling', '125000.00', 'tersedia', '2025-04-13 19:04:52', '2025-05-08 18:43:05'),
(8, 'Full Color', 'Transform your entire look with a rich, vibrant full color treatment. Perfect for an all-over change or to refresh your existing color.', 'chelsica', 'Hair coloring', '150000.00', 'tersedia', '2025-04-13 19:21:49', '2025-05-08 18:43:56'),
(9, 'Wedding/Bridal Styling', 'Let us create a stunning bridal look for your special day. From elegant updos to soft, romantic styles, we’ll make sure you look flawless.', 'panda', 'Hair styling', '100000.00', 'tersedia', '2025-04-13 19:22:28', '2025-05-08 18:44:42'),
(10, 'Sleek Bun', 'A smooth, polished bun usually placed at the back or top of the head. Ideal for formal events or professional looks.', 'Evan', 'Updo Styling', '120000.00', 'tersedia', '2025-04-13 19:23:12', '2025-05-08 18:45:27'),
(11, 'Long Layers Perming', '\"Add volume, bounce, and beautiful movement to your long hair with our Long Layers Perming. This treatment creates soft, natural-looking curls or waves that enhance your layered haircut.', 'Sapi Bakar2', 'Perming', '80000.00', 'tersedia', '2025-04-13 19:24:52', '2025-05-08 18:48:10'),
(12, '5-a-Side Court', 'Enjoy fast-paced action on our premiuwam 5-a-side court. Perfect for small teams and competitive matches.', 'Sapi Bakar2', 'Perming', '95000.00', 'tersedia', '2025-04-14 21:53:08', '2025-05-08 19:51:58'),
(20, 'Smoothing', 'bebasssssssssssssssssssssssssssssssssssssss', 'Casey', 'Perming', '99999999.99', 'tersedia', '2025-05-10 11:42:56', '2025-05-10 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `what_happens` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id_log`, `id_user`, `what_happens`, `created_at`) VALUES
(1, 19, 'User logged in', '2025-03-24 19:45:11'),
(2, 19, 'User logged in', '2025-03-24 20:08:28'),
(3, 19, 'User logged out', '2025-03-24 20:10:43'),
(4, 65, 'User registered', '2025-03-24 20:15:25'),
(5, 19, 'User logged in', '2025-03-24 20:15:44'),
(6, 19, 'User logged out', '2025-03-24 20:20:45'),
(7, 59, 'User logged in', '2025-03-24 20:20:53'),
(8, 59, 'Delete User ID 5', '2025-03-24 20:21:09'),
(9, 59, 'Delete User ID 13', '2025-03-24 20:21:16'),
(10, 59, 'Restore User ID 5', '2025-03-24 20:21:31'),
(11, 59, 'Restore All Deleted User', '2025-03-24 20:22:41'),
(12, 59, 'Updated User ID 5', '2025-03-24 20:26:52'),
(13, 59, 'Updated Aplication Name: E-Parkir', '2025-03-24 20:33:31'),
(14, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250324-203820-57, Vehicle: Mobil, Payment Method: Gopay', '2025-03-24 20:38:20'),
(15, 59, 'Added User ID hai', '2025-03-24 21:36:12'),
(16, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250324-213807-58, Vehicle: Mobil, Payment Method: Dana', '2025-03-24 21:38:07'),
(17, 59, 'Logged out', '2025-03-24 21:45:02'),
(18, 67, 'User registered', '2025-03-24 21:45:30'),
(19, 67, 'Logged in', '2025-03-24 21:45:39'),
(20, 67, 'Booked a parking spot. Ticket Code: TKT-MT-20250324-214636-59, Vehicle: Motor, Payment Method: Bank Transfer', '2025-03-24 21:46:36'),
(21, 67, 'Logged out', '2025-03-24 21:47:12'),
(22, 66, 'Logged in', '2025-03-26 15:33:34'),
(23, 66, 'Logged out', '2025-03-26 15:34:30'),
(24, 66, 'Logged in', '2025-03-26 15:34:40'),
(25, 66, 'Logged out', '2025-03-26 15:49:52'),
(26, 59, 'Logged in', '2025-03-26 15:50:04'),
(27, 59, 'Logged out', '2025-03-26 15:50:10'),
(28, 68, 'User registered', '2025-03-26 15:52:23'),
(29, 68, 'Logged in', '2025-03-26 15:52:38'),
(30, 68, 'Logged out', '2025-03-26 15:53:29'),
(31, 66, 'Logged in', '2025-03-26 15:53:36'),
(32, 66, 'Logged out', '2025-03-26 16:05:43'),
(33, 59, 'Logged in', '2025-03-26 16:05:49'),
(34, 59, 'Logged out', '2025-03-26 16:05:52'),
(35, 23, 'Logged in', '2025-03-26 16:07:30'),
(36, 23, 'Booked a parking spot. Ticket Code: TKT-MB-20250326-160802-60, Vehicle: Mobil, Payment Method: Ovo', '2025-03-26 16:08:02'),
(37, 23, 'Logged out', '2025-03-26 16:09:37'),
(38, 59, 'Logged in', '2025-03-26 16:09:51'),
(39, 59, 'Logged out', '2025-03-26 16:10:24'),
(40, 66, 'Logged in', '2025-03-26 16:10:42'),
(41, 59, 'Logged in', '2025-03-27 14:52:19'),
(42, 59, 'Logged out', '2025-03-27 14:52:24'),
(43, 66, 'Logged in', '2025-03-27 14:52:35'),
(44, 66, 'Logged in', '2025-03-27 16:44:10'),
(45, 66, 'Logged out', '2025-03-27 17:10:31'),
(46, 59, 'Logged in', '2025-03-27 17:10:37'),
(47, 59, 'Delete User ID 24', '2025-03-27 17:10:56'),
(48, 59, 'Logged in', '2025-03-27 18:00:52'),
(49, 59, 'Logged out', '2025-03-27 18:01:59'),
(50, 66, 'Logged in', '2025-03-27 18:02:09'),
(51, 66, 'Logged out', '2025-03-27 18:10:14'),
(52, 59, 'Logged in', '2025-03-27 18:10:21'),
(53, 59, 'Logged out', '2025-03-27 18:22:15'),
(54, 59, 'Logged in', '2025-03-27 18:22:21'),
(55, 59, 'Logged in', '2025-03-27 18:22:28'),
(56, 59, 'Logged out', '2025-03-27 18:22:32'),
(57, 66, 'Logged in', '2025-03-27 18:22:38'),
(58, 66, 'Logged out', '2025-03-27 18:22:47'),
(59, 59, 'Logged in', '2025-03-27 18:23:59'),
(60, 59, 'Logged out', '2025-03-27 18:36:42'),
(61, 66, 'Logged in', '2025-03-27 18:36:48'),
(62, 66, 'Logged out', '2025-03-27 18:37:17'),
(63, 59, 'Logged in', '2025-03-27 18:37:24'),
(64, 59, 'Logged out', '2025-03-27 18:40:50'),
(65, 66, 'Logged in', '2025-03-27 18:40:58'),
(66, 66, 'Logged out', '2025-03-27 18:41:12'),
(67, 69, 'User registered', '2025-03-27 18:41:33'),
(68, 69, 'Logged in', '2025-03-27 18:41:53'),
(69, 69, 'Logged out', '2025-03-27 18:42:03'),
(70, 59, 'Logged in', '2025-03-27 18:42:09'),
(71, 59, 'Logged out', '2025-03-27 18:42:34'),
(72, 69, 'Logged in', '2025-03-27 18:42:52'),
(73, 69, 'Logged out', '2025-03-27 18:44:43'),
(74, 59, 'Logged in', '2025-03-27 18:45:00'),
(75, 59, 'Logged out', '2025-03-27 18:48:20'),
(76, 69, 'Logged in', '2025-03-27 18:49:00'),
(77, 69, 'Logged out', '2025-03-27 18:50:01'),
(78, 69, 'Logged in', '2025-03-27 18:50:32'),
(79, 69, 'Logged out', '2025-03-27 18:59:15'),
(80, 59, 'Logged in', '2025-03-27 18:59:22'),
(81, 59, 'Restore User ID 24', '2025-03-27 19:18:36'),
(82, 59, 'Delete User ID 24', '2025-03-27 19:18:43'),
(83, 59, 'Logged out', '2025-03-27 19:19:32'),
(84, 19, 'Logged in', '2025-03-27 19:19:57'),
(85, 19, 'Logged out', '2025-03-27 19:20:11'),
(86, 59, 'Logged in', '2025-03-27 19:20:31'),
(87, 59, 'Logged in', '2025-03-28 12:32:50'),
(88, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250328-123417-61, Vehicle: Mobil, Payment Method: Bank Transfer', '2025-03-28 12:34:17'),
(89, 59, 'Updated Aplication Name: E-Parkirg', '2025-03-28 12:49:03'),
(90, 59, 'Updated Aplication Name: E-Parkir', '2025-03-28 12:49:21'),
(91, 59, 'Logged in', '2025-03-29 13:01:56'),
(92, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-132708-62, Vehicle: Mobil, Payment Method: Gopay', '2025-03-29 13:27:08'),
(93, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-132928-63, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:29:28'),
(94, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-133002-64, Vehicle: Mobil, Payment Method: Dana', '2025-03-29 13:30:02'),
(95, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-133357-65, Vehicle: Motor, Payment Method: Ovo', '2025-03-29 13:33:57'),
(96, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-133424-66, Vehicle: Mobil, Payment Method: Dana', '2025-03-29 13:34:24'),
(97, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-133557-67, Vehicle: Motor, Payment Method: Gopay', '2025-03-29 13:35:57'),
(98, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-133648-68, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:36:48'),
(99, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-133709-69, Vehicle: Mobil, Payment Method: Dana', '2025-03-29 13:37:09'),
(100, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-134025-70, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:40:25'),
(101, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-134250-71, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:42:50'),
(102, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-134251-72, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:42:51'),
(103, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-134319-73, Vehicle: Motor, Payment Method: Gopay', '2025-03-29 13:43:19'),
(104, 59, 'Logged out', '2025-03-29 13:48:37'),
(105, 19, 'Logged in', '2025-03-29 13:48:44'),
(106, 19, 'Logged out', '2025-03-29 13:49:03'),
(107, 33, 'Logged in', '2025-03-29 13:50:19'),
(108, 33, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-135218-74, Vehicle: Mobil, Payment Method: Dana', '2025-03-29 13:52:18'),
(109, 33, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-135237-75, Vehicle: Motor, Payment Method: Dana', '2025-03-29 13:52:37'),
(110, 33, 'Logged out', '2025-03-29 13:53:54'),
(111, 59, 'Logged in', '2025-03-29 13:53:58'),
(112, 59, 'Logged out', '2025-03-29 13:55:41'),
(113, 19, 'Logged in', '2025-03-29 13:56:01'),
(114, 19, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-135753-76, Vehicle: Motor, Payment Method: Ovo', '2025-03-29 13:57:53'),
(115, 19, 'Logged out', '2025-03-29 13:59:42'),
(116, 70, 'User registered', '2025-03-29 14:00:25'),
(117, 70, 'Logged in', '2025-03-29 14:00:35'),
(118, 70, 'Booked a parking spot. Ticket Code: TKT-MT-20250329-140115-77, Vehicle: Motor, Payment Method: Dana', '2025-03-29 14:01:15'),
(119, 59, 'Logged in', '2025-03-29 14:03:54'),
(120, 59, 'Logged out', '2025-03-29 14:04:49'),
(121, 70, 'Logged in', '2025-03-29 14:05:02'),
(122, 70, 'Logged out', '2025-03-29 14:06:04'),
(123, 59, 'Logged in', '2025-03-29 14:06:36'),
(124, 59, 'Logged in', '2025-03-29 14:20:26'),
(125, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250329-142259-78, Vehicle: Mobil, Payment Method: Gopay', '2025-03-29 14:22:59'),
(126, 59, 'Logged in', '2025-03-31 10:54:15'),
(127, 59, 'Logged in', '2025-03-31 20:56:05'),
(128, 59, 'Blocked User ID 57', '2025-03-31 22:39:52'),
(129, 59, 'Logged in', '2025-04-01 10:06:23'),
(130, 59, 'Logged out', '2025-04-01 10:39:37'),
(131, 19, 'Logged in', '2025-04-01 10:39:44'),
(132, 19, 'Logged out', '2025-04-01 10:52:41'),
(133, 59, 'Logged in', '2025-04-01 10:52:49'),
(134, 59, 'Delete User ID 47', '2025-04-01 11:14:46'),
(135, 59, 'Logged in', '2025-04-02 11:01:11'),
(136, 59, 'Blocked User ID 70', '2025-04-02 11:22:04'),
(137, 59, 'Logged out', '2025-04-02 11:22:15'),
(138, 70, 'Logged in', '2025-04-02 11:22:37'),
(139, 70, 'Logged out', '2025-04-02 11:24:43'),
(140, 59, 'Logged in', '2025-04-02 11:24:49'),
(141, 59, 'Logged out', '2025-04-02 12:38:18'),
(142, 59, 'Logged in', '2025-04-02 13:18:05'),
(143, 59, 'Logged out', '2025-04-02 13:18:26'),
(144, 32, 'Logged in', '2025-04-02 13:19:16'),
(145, 32, 'Logged out', '2025-04-02 13:19:22'),
(146, 33, 'Logged in', '2025-04-02 13:19:33'),
(147, 59, 'Logged in', '2025-04-03 08:12:02'),
(148, 59, 'Logged out', '2025-04-03 08:13:15'),
(149, 19, 'Logged in', '2025-04-03 08:13:22'),
(150, 19, 'Booked a parking spot. Ticket Code: TKT-MT-20250403-081717-79, Vehicle: Motor, Payment Method: Gopay', '2025-04-03 08:17:17'),
(151, 59, 'Logged in', '2025-04-03 09:07:57'),
(152, 59, 'Logged out', '2025-04-03 09:08:16'),
(153, 59, 'Logged in', '2025-04-03 09:09:52'),
(154, 59, 'Logged in', '2025-04-03 13:39:12'),
(155, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250403-134125-80, Vehicle: Mobil, Payment Method: Dana', '2025-04-03 13:41:25'),
(156, 59, 'Logged out', '2025-04-03 13:45:52'),
(157, 33, 'Logged in', '2025-04-03 13:45:59'),
(158, 33, 'Booked a parking spot. Ticket Code: TKT-MT-20250403-134622-81, Vehicle: Motor, Payment Method: Gopay', '2025-04-03 13:46:22'),
(159, 33, 'Logged out', '2025-04-03 13:47:30'),
(160, 59, 'Logged in', '2025-04-03 13:47:34'),
(161, 59, 'Logged out', '2025-04-03 13:48:31'),
(162, 33, 'Logged in', '2025-04-03 13:48:37'),
(163, 33, 'Logged out', '2025-04-03 13:55:39'),
(164, 33, 'Logged in', '2025-04-03 13:55:48'),
(165, 33, 'Booked a parking spot. Ticket Code: TKT-MB-20250403-135628-82, Vehicle: Mobil, Payment Method: Bank Transfer', '2025-04-03 13:56:28'),
(166, 33, 'Logged out', '2025-04-03 13:56:53'),
(167, 59, 'Logged in', '2025-04-03 13:57:01'),
(168, 59, 'Logged out', '2025-04-03 13:58:28'),
(169, 33, 'Logged in', '2025-04-03 13:58:36'),
(170, 33, 'Logged out', '2025-04-03 14:03:52'),
(171, 59, 'Logged in', '2025-04-04 18:15:28'),
(172, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-183558-83, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 18:35:59'),
(173, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-183640-84, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 18:36:40'),
(174, 59, 'Booked a parking spot. Ticket Code: TKT-MT-20250404-183834-85, Vehicle: Motor, Payment Method: Bank Transfer', '2025-04-04 18:38:34'),
(175, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-184311-86, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 18:43:11'),
(176, 59, 'Logged out', '2025-04-04 18:43:33'),
(177, 19, 'Logged in', '2025-04-04 18:43:41'),
(178, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-184431-87, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 18:44:31'),
(179, 19, 'Booked a parking spot. Ticket Code: TKT-MT-20250404-190116-88, Vehicle: Motor, Payment Method: Dana', '2025-04-04 19:01:16'),
(180, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-190610-89, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 19:06:10'),
(181, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-193301-90, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 19:33:01'),
(182, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-195155-1, Vehicle: Mobil, Payment Method: Dana', '2025-04-04 19:51:55'),
(183, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-200535-2, Vehicle: Mobil, Payment Method: Dana', '2025-04-04 20:05:35'),
(184, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-200828-3, Vehicle: Mobil, Payment Method: Bank Transfer', '2025-04-04 20:08:28'),
(185, 19, 'Booked a parking spot. Ticket Code: TKT-MT-20250404-201122-4, Vehicle: Motor, Payment Method: Dana', '2025-04-04 20:11:22'),
(186, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-201224-5, Vehicle: Mobil, Payment Method: Gopay', '2025-04-04 20:12:24'),
(187, 19, 'Booked a parking spot. Ticket Code: TKT-MT-20250404-201318-6, Vehicle: Motor, Payment Method: Dana', '2025-04-04 20:13:18'),
(188, 19, 'Booked a parking spot. Ticket Code: TKT-MB-20250404-201622-7, Vehicle: Mobil, Payment Method: Bank Transfer', '2025-04-04 20:16:22'),
(189, 59, 'Logged in', '2025-04-05 10:12:41'),
(190, 59, 'Logged out', '2025-04-05 10:14:23'),
(191, 71, 'User registered', '2025-04-05 10:27:29'),
(192, 72, 'User registered', '2025-04-05 10:32:50'),
(193, 72, 'Logged in', '2025-04-05 10:33:15'),
(194, 72, 'Booked a parking spot. Ticket Code: TKT-MB-20250405-103510-8, Vehicle: Mobil, Payment Method: Gopay', '2025-04-05 10:35:10'),
(195, 72, 'Logged out', '2025-04-05 10:36:19'),
(196, 59, 'Logged in', '2025-04-05 10:36:34'),
(197, 59, 'Logged out', '2025-04-05 10:38:00'),
(198, 72, 'Logged in', '2025-04-05 10:38:12'),
(199, 72, 'Logged out', '2025-04-05 10:38:53'),
(200, 59, 'Logged in', '2025-04-05 10:39:00'),
(201, 59, 'Blocked User ID 33', '2025-04-05 10:40:59'),
(202, 59, 'Delete User ID 18', '2025-04-05 10:41:34'),
(203, 59, 'Restore User ID 18', '2025-04-05 10:41:54'),
(204, 59, 'Updated Aplication Name: E Parkir', '2025-04-05 10:44:14'),
(205, 59, 'Updated Aplication Name: E Parkir', '2025-04-05 10:44:36'),
(206, 59, 'Updated Aplication Name: E-Parkir', '2025-04-05 10:44:43'),
(207, 59, 'Accepted appeal for User ID 70', '2025-04-05 10:45:26'),
(208, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250405-104637-9, Vehicle: Mobil, Payment Method: Dana', '2025-04-05 10:46:37'),
(209, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250405-104906-10, Vehicle: Mobil, Payment Method: Gopay', '2025-04-05 10:49:06'),
(210, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250405-105003-11, Vehicle: Mobil, Payment Method: Gopay', '2025-04-05 10:50:03'),
(211, 59, 'Booked a parking spot. Ticket Code: TKT-MB-20250405-105355-12, Vehicle: Mobil, Payment Method: Bank Transfer', '2025-04-05 10:53:55'),
(212, 59, 'Logged out', '2025-04-05 10:54:28'),
(213, 75, 'User registered', '2025-04-05 10:57:27'),
(214, 75, 'Logged in', '2025-04-05 10:58:08'),
(215, 75, 'Logged out', '2025-04-05 10:58:11'),
(216, 59, 'Logged in', '2025-04-05 10:58:22'),
(217, 59, 'Blocked User ID 75', '2025-04-05 10:58:41'),
(218, 59, 'Logged out', '2025-04-05 10:58:46'),
(219, 75, 'Logged in', '2025-04-05 10:59:04'),
(220, 75, 'Logged out', '2025-04-05 11:00:33'),
(221, 19, 'Logged in', '2025-04-05 11:00:41'),
(222, 19, 'Accepted appeal for User ID 75', '2025-04-05 11:01:01'),
(223, 19, 'Logged out', '2025-04-05 11:01:08'),
(224, 75, 'Logged in', '2025-04-05 11:01:27'),
(225, 75, 'Logged out', '2025-04-05 11:01:59'),
(226, 59, 'Logged in', '2025-04-05 11:02:14'),
(227, 59, 'Restore All Deleted User', '2025-04-05 11:02:55'),
(228, 59, 'Logged out', '2025-04-05 11:04:25'),
(229, 19, 'Logged in', '2025-04-05 11:05:03'),
(230, 19, 'Logged out', '2025-04-05 11:06:51'),
(231, 72, 'Logged in', '2025-04-05 11:08:50'),
(232, 72, 'Logged out', '2025-04-05 11:09:07'),
(233, 59, 'Logged in', '2025-04-05 18:03:24'),
(234, 59, 'Logged in', '2025-04-06 21:24:43'),
(235, 59, 'Logged out', '2025-04-06 21:25:28'),
(236, 59, 'Logged in', '2025-04-06 21:26:33'),
(237, 59, 'Updated Aplication Name: SPORT CENTER', '2025-04-06 21:29:13'),
(238, 59, 'Updated Aplication Name: LapanganKu', '2025-04-06 21:33:39'),
(239, 59, 'Updated Aplication Name: AYO ARENA', '2025-04-06 21:35:50'),
(240, 59, 'Updated Aplication Name: X ARENA', '2025-04-06 21:36:09'),
(241, 59, 'Updated Aplication Name: AYO ARENA', '2025-04-06 21:37:53'),
(242, 76, 'User registered', '2025-04-06 22:14:18'),
(243, 76, 'Logged in', '2025-04-06 22:14:30'),
(244, 59, 'Logged in', '2025-04-06 22:14:58'),
(245, 76, 'Logged out', '2025-04-06 22:18:51'),
(246, 77, 'User registered', '2025-04-06 22:29:37'),
(247, 77, 'Logged in', '2025-04-06 22:29:58'),
(248, 77, 'Logged out', '2025-04-06 22:30:06'),
(249, 59, 'Logged in', '2025-04-06 22:30:13'),
(250, 59, 'Logged in', '2025-04-07 19:31:54'),
(251, 59, 'Logged out', '2025-04-07 19:47:57'),
(252, 78, 'User registered', '2025-04-07 19:49:23'),
(253, 78, 'Logged in', '2025-04-07 19:49:34'),
(254, 59, 'Logged in', '2025-04-08 09:05:33'),
(255, 59, 'Logged out', '2025-04-08 09:05:52'),
(256, 78, 'Logged in', '2025-04-08 09:06:33'),
(257, 78, 'Logged in', '2025-04-08 09:22:50'),
(258, 59, 'Logged in', '2025-04-08 20:42:42'),
(259, 59, 'Logged out', '2025-04-08 20:53:16'),
(260, 78, 'Logged in', '2025-04-08 20:54:02'),
(261, 78, 'Logged in', '2025-04-08 21:07:53'),
(262, 78, 'Logged out', '2025-04-08 21:10:43'),
(263, 59, 'Logged in', '2025-04-08 21:13:36'),
(264, 59, 'Updated Aplication Name: XZR ARENA', '2025-04-08 21:13:53'),
(265, 59, 'Updated Aplication Name: AYO ARENA', '2025-04-08 21:14:09'),
(266, 59, 'Logged out', '2025-04-08 21:45:05'),
(267, 78, 'Logged in', '2025-04-08 21:53:07'),
(268, 78, 'Logged in', '2025-04-09 08:59:33'),
(269, 78, 'Logged out', '2025-04-09 09:04:58'),
(270, 59, 'Logged in', '2025-04-09 09:05:06'),
(271, 59, 'Updated User ID 13', '2025-04-09 09:07:22'),
(272, 59, 'Updated User ID 19', '2025-04-09 09:07:49'),
(273, 59, 'Updated User ID 13', '2025-04-09 09:08:01'),
(274, 59, 'Updated User ID 32', '2025-04-09 09:08:27'),
(275, 59, 'Updated User ID 35', '2025-04-09 09:08:49'),
(276, 59, 'Updated User ID 59', '2025-04-09 09:09:13'),
(277, 59, 'Updated User ID 71', '2025-04-09 09:09:30'),
(278, 59, 'Logged out', '2025-04-09 09:10:45'),
(279, 78, 'Logged in', '2025-04-09 09:11:01'),
(280, 78, 'Logged in', '2025-04-09 12:47:01'),
(281, 78, 'Logged out', '2025-04-09 13:03:58'),
(282, 59, 'Logged in', '2025-04-09 13:04:05'),
(283, 59, 'Logged out', '2025-04-09 13:21:54'),
(284, 78, 'Logged in', '2025-04-09 13:22:14'),
(285, 78, 'Logged out', '2025-04-09 13:37:54'),
(286, 59, 'Logged in', '2025-04-09 13:48:28'),
(287, 59, 'Logged out', '2025-04-09 13:51:39'),
(288, 59, 'Logged in', '2025-04-09 14:09:15'),
(289, 59, 'Logged out', '2025-04-09 14:09:30'),
(290, 78, 'Logged in', '2025-04-09 14:11:14'),
(291, 78, 'Logged in', '2025-04-09 17:17:27'),
(292, 59, 'Logged in', '2025-04-09 18:24:49'),
(293, 59, 'Logged in', '2025-04-09 20:00:48'),
(294, 59, 'Logged in', '2025-04-13 18:39:43'),
(295, 59, 'Updated User ID 13', '2025-04-13 19:19:23'),
(296, 78, 'Logged in', '2025-04-13 19:27:48'),
(297, 59, 'Logged in', '2025-04-14 07:33:10'),
(298, 78, 'Logged in', '2025-04-14 07:33:41'),
(299, 78, 'Logged out', '2025-04-14 21:46:49'),
(300, 59, 'Logged in', '2025-04-14 21:46:56'),
(301, 79, 'User registered', '2025-04-15 07:20:41'),
(302, 79, 'Logged in', '2025-04-15 07:25:08'),
(303, 79, 'Logged out', '2025-04-15 07:30:31'),
(304, 79, 'Logged in', '2025-04-15 07:30:59'),
(305, 79, 'Logged out', '2025-04-15 07:33:56'),
(306, 79, 'Logged in', '2025-04-15 07:34:18'),
(307, 79, 'Logged out', '2025-04-15 07:38:03'),
(308, 78, 'Logged in', '2025-04-15 07:41:45'),
(309, 78, 'Logged out', '2025-04-15 07:41:59'),
(310, 59, 'Logged in', '2025-04-15 07:54:15'),
(311, 59, 'Logged out', '2025-04-15 08:01:28'),
(312, 59, 'Logged in', '2025-04-15 08:01:44'),
(313, 59, 'Logged out', '2025-04-15 08:54:33'),
(314, 59, 'Logged in', '2025-04-15 09:02:32'),
(315, 59, 'Logged out', '2025-04-15 09:03:01'),
(316, 59, 'Logged in', '2025-04-15 09:03:15'),
(317, 59, 'Logged out', '2025-04-15 09:05:50'),
(318, 79, 'Logged in', '2025-04-15 09:06:33'),
(319, 79, 'Logged out', '2025-04-15 09:07:05'),
(320, 59, 'Logged in', '2025-04-15 09:07:16'),
(321, 59, 'Added User ID tes delte', '2025-04-15 09:15:31'),
(322, 59, 'Delete User ID 71', '2025-04-15 09:16:07'),
(323, 59, 'Logged out', '2025-04-15 09:16:58'),
(324, 59, 'Logged in', '2025-04-15 09:17:44'),
(325, 59, 'Restore All Deleted User', '2025-04-15 09:18:35'),
(326, 59, 'Logged out', '2025-04-15 09:23:18'),
(327, 78, 'Logged in', '2025-04-15 09:23:29'),
(328, 78, 'Logged out', '2025-04-15 09:24:31'),
(329, 59, 'Logged in', '2025-04-15 09:25:31'),
(330, 59, 'Logged out', '2025-04-15 09:39:28'),
(331, 78, 'Logged in', '2025-04-15 09:39:37'),
(332, 59, 'Logged in', '2025-04-16 08:04:45'),
(333, 59, 'Added User ID womp', '2025-04-16 08:05:43'),
(334, 59, 'Updated User ID 13', '2025-04-16 08:08:17'),
(335, 59, 'Updated User ID 13', '2025-04-16 08:09:49'),
(336, 59, 'Added User ID erm', '2025-04-16 08:10:21'),
(337, 59, 'Updated User ID 80', '2025-04-16 08:10:39'),
(338, 59, 'Logged in', '2025-04-16 08:34:25'),
(339, 59, 'Logged out', '2025-04-16 08:38:56'),
(340, 81, 'User registered', '2025-04-16 08:39:51'),
(341, 81, 'Logged in', '2025-04-16 08:40:06'),
(342, 81, 'Logged out', '2025-04-16 09:31:26'),
(343, 59, 'Logged in', '2025-04-16 09:31:46'),
(344, 59, 'Logged in', '2025-04-16 12:46:47'),
(345, 59, 'Logged in', '2025-04-16 20:16:03'),
(346, 59, 'Added User ID Evan', '2025-04-16 20:24:06'),
(347, 59, 'Baru saja membuat reservasi lapangan', '2025-04-16 20:56:24'),
(348, 59, 'Has Booked Badminton Court', '2025-04-16 20:59:09'),
(349, 59, 'Has Booked a Futsal Field', '2025-04-16 21:31:35'),
(350, 19, 'Logged in', '2025-04-17 07:29:38'),
(351, 19, 'Has Booked a Volleyball Court', '2025-04-17 07:39:01'),
(352, 19, 'Has Booked a Futsal Field', '2025-04-17 07:40:13'),
(353, 19, 'Has Booked a Badminton Court', '2025-04-17 07:41:26'),
(354, 59, 'Logged in', '2025-04-18 14:52:02'),
(355, 59, 'Logged in', '2025-04-19 23:02:15'),
(356, 59, 'Logged out', '2025-04-19 23:03:46'),
(357, 59, 'Logged in', '2025-04-19 23:05:52'),
(358, 59, 'Blocked User ID 80', '2025-04-19 23:12:11'),
(359, 59, 'Delete User ID 32', '2025-04-19 23:17:27'),
(360, 83, 'User registered', '2025-04-20 09:08:23'),
(361, 83, 'Logged in', '2025-04-20 09:08:39'),
(362, 83, 'Has Booked a Volleyball Court', '2025-04-20 09:10:59'),
(363, 83, 'Logged out', '2025-04-20 09:11:42'),
(364, 59, 'Logged in', '2025-04-20 09:11:51'),
(365, 59, 'Updated User ID 79', '2025-04-20 09:21:17'),
(366, 59, 'Blocked User ID 71', '2025-04-20 09:21:30'),
(367, 59, 'Delete User ID 71', '2025-04-20 09:21:44'),
(368, 59, 'Restore User ID 71', '2025-04-20 09:21:58'),
(369, 59, 'Delete User ID 71', '2025-04-20 09:35:02'),
(370, 59, 'Restore User ID 71', '2025-04-20 09:35:12'),
(371, 59, 'Logged in', '2025-04-20 20:23:14'),
(372, 59, 'Logged in', '2025-04-22 08:32:36'),
(373, 59, 'Logged in', '2025-04-23 07:50:43'),
(374, 59, 'Logged out', '2025-04-23 07:51:18'),
(375, 59, 'Logged in', '2025-04-23 08:02:16'),
(376, 59, 'Logged in', '2025-04-23 08:10:39'),
(377, 59, 'Logged in', '2025-04-23 08:21:22'),
(378, 59, 'Logged out', '2025-04-23 10:21:12'),
(379, 78, 'Logged in', '2025-04-23 10:31:06'),
(380, 78, 'Logged out', '2025-04-23 10:39:44'),
(381, 78, 'Logged in', '2025-04-23 11:25:58'),
(382, 78, 'Logged out', '2025-04-23 11:27:25'),
(383, 78, 'Logged in', '2025-04-23 11:27:53'),
(384, 78, 'Logged out', '2025-04-23 11:29:11'),
(385, 78, 'Logged in', '2025-04-23 11:29:27'),
(386, 78, 'Logged out', '2025-04-23 11:31:22'),
(387, 78, 'Logged in', '2025-04-23 11:31:34'),
(388, 78, 'Logged out', '2025-04-23 12:03:13'),
(389, 59, 'Logged in', '2025-04-23 12:47:52'),
(390, 59, 'Updated Aplication Name: Beautique Lounge', '2025-04-23 13:05:14'),
(391, 59, 'Updated Aplication Name: Lush Lounge', '2025-04-23 13:05:51'),
(392, 59, 'Updated Aplication Name: Lush Beauty', '2025-04-23 13:06:02'),
(393, 59, 'Updated Aplication Name: GO-BEAUTY', '2025-04-23 13:06:55'),
(394, 59, 'Updated Aplication Name: OBEAUTY', '2025-04-23 13:07:06'),
(395, 59, 'Updated Aplication Name: O\'BEAUTY', '2025-04-23 13:07:07'),
(396, 59, 'Updated Aplication Name: Velour', '2025-04-23 13:08:02'),
(397, 59, 'Updated Aplication Name: Velour', '2025-04-23 13:08:26'),
(398, 59, 'Updated Aplication Name: Velour', '2025-04-23 13:10:40'),
(399, 59, 'Logged out', '2025-04-23 13:12:34'),
(400, 59, 'Logged in', '2025-04-23 13:16:03'),
(401, 59, 'Logged in', '2025-04-24 07:36:48'),
(402, 78, 'Logged in', '2025-04-24 08:34:16'),
(403, 78, 'Logged out', '2025-04-24 08:36:06'),
(404, 78, 'Logged in', '2025-04-24 08:37:07'),
(405, 78, 'Logged out', '2025-04-24 08:39:25'),
(406, 78, 'Logged in', '2025-04-24 08:39:44'),
(407, 78, 'Logged out', '2025-04-24 09:00:11'),
(408, 59, 'Logged in', '2025-04-24 09:01:45'),
(409, 59, 'Logged in', '2025-04-27 15:00:06'),
(410, 59, 'Logged out', '2025-04-27 15:09:12'),
(411, 59, 'Logged in', '2025-04-27 15:15:21'),
(412, 59, 'Logged in', '2025-04-27 15:35:20'),
(413, 78, 'Logged in', '2025-04-28 09:42:21'),
(414, 59, 'Logged in', '2025-04-28 09:47:19'),
(415, 59, 'Logged in', '2025-04-28 09:52:15'),
(416, 78, 'Logged in', '2025-04-28 09:58:53'),
(417, 59, 'Logged in', '2025-05-08 09:14:19'),
(418, 59, 'Has Booked a Futsal Field', '2025-05-08 09:14:44'),
(419, 59, 'Logged in', '2025-05-08 09:44:02'),
(420, 59, 'Updated Aplication Name: Velour', '2025-05-08 09:47:44'),
(421, 59, 'Has Booked a Futsal Field', '2025-05-08 09:48:44'),
(422, 59, 'Logged in', '2025-05-08 10:24:39'),
(423, 59, 'Logged out', '2025-05-08 10:28:18'),
(424, 59, 'Logged in', '2025-05-08 10:28:34'),
(425, 59, 'Updated Aplication Name: Velour', '2025-05-08 10:33:51'),
(426, 59, 'Has Booked a Futsal Field', '2025-05-08 14:03:00'),
(427, 59, 'Logged in', '2025-05-08 18:25:48'),
(428, 59, 'Has Booked a BasketBall Court', '2025-05-08 18:26:08'),
(429, 59, 'Updated Aplication Name: Velour', '2025-05-08 18:30:48'),
(430, 59, 'Has Booked a Full Color', '2025-05-08 20:07:10'),
(431, 59, 'Logged in', '2025-05-08 21:06:05'),
(432, 59, 'Updated User ID 13', '2025-05-08 21:07:03'),
(433, 59, 'Logged in', '2025-05-09 10:44:28'),
(434, 59, 'Added User ID Casey', '2025-05-09 10:47:01'),
(435, 84, 'Logged in', '2025-05-09 10:47:36'),
(436, 59, 'Logged in', '2025-05-09 10:48:34'),
(437, 59, 'Has Booked a Full Color', '2025-05-09 11:25:58'),
(438, 59, 'Has Booked a Creambath', '2025-05-09 11:26:52'),
(439, 59, 'Has Booked a Wedding/Bridal Styling', '2025-05-09 11:35:50'),
(440, 59, 'Logged in', '2025-05-10 11:08:46'),
(441, 85, 'User registered', '2025-05-10 11:34:09'),
(442, 85, 'Logged in', '2025-05-10 11:34:43'),
(443, 85, 'Has Booked a Wedding/Bridal Styling', '2025-05-10 11:36:27'),
(444, 85, 'Has Booked a Wedding/Bridal Styling', '2025-05-10 11:36:56'),
(445, 59, 'Logged in', '2025-05-10 11:39:02'),
(446, 59, 'Added User ID dsadaw', '2025-05-10 11:44:30'),
(447, 59, 'Logged in', '2025-05-10 13:24:42'),
(448, 59, 'Logged in', '2025-05-11 16:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `metode_pembayaran`, `bukti_pembayaran`) VALUES
(1, 'Ovo', '1744553151_aa506f5dc664aa6cb8e1.jpg'),
(2, 'Dana', '1744554815_3a2eaeda396a9af92a0e.jpeg'),
(3, 'Ovo', '1744554848_a8de97165767b7eedc1b.jpg'),
(4, 'Dana', '1744555190_694acfd92e5849b8a5e3.jpeg'),
(5, 'Dana', '1744641972_a56dc49c93b5dc299388.png'),
(6, 'Bank Transfer', '1744683844_5853eb9ebefcb78ccc23.png'),
(7, 'Gopay', '1744684810_31dba13d0a22b7c2c53e.png'),
(8, 'Ovo', '1744685250_33d7f2fa80c0cc1a2bb6.png'),
(9, 'Bank Transfer', '1744685843_9a8b37eba4016536820d.png'),
(10, 'Dana', '1744767645_dd3f4da3f55bb95beaf0.png'),
(11, 'Dana', '1744772767_d6b27c7a1b7db5f16a39.png'),
(12, 'Dana', '1744772835_86b47cc22230c4d237cb.png'),
(13, 'Gopay', '1744811176_b77f95a284f0a27cc8df.png'),
(14, 'Gopay', '1744811248_ebdfcd511094b04c5262.png'),
(15, 'Ovo', '1744811509_e884c328fa37ab0b5abc.png'),
(16, 'Ovo', '1744811580_52d2ae5533bf3d3382c4.png'),
(17, 'Bank Transfer', '1744811784_0f212ee63bc3b1f11a83.png'),
(18, 'Dana', '1744811949_601b16b3c8beacc94240.png'),
(19, 'Bank Transfer', '1744813895_58ab24293b15282a8b90.png'),
(20, 'Dana', '1744850341_02a31427be64c9489a33.png'),
(21, 'Dana', '1744850413_417efba19ee61143b10e.png'),
(22, 'Gopay', '1744850486_abf321f369e0dd29f62e.png'),
(23, 'Gopay', '1745115059_496284b8f6ca0fe1d94e.png'),
(24, 'Gopay', '1746670484_e2aa890eb021d27a7066.jpg'),
(25, 'Ovo', '1746672524_b2c52ff22ffc30414a7d.jpg'),
(26, 'Dana', '1746687780_b6f8282c6629774d27fd.jpg'),
(27, 'Gopay', '1746703568_19341b43ca5b8518ae0e.jpg'),
(28, 'Gopay', '1746709630_55b626d722738922c195.jpg'),
(29, 'Dana', '1746764758_212d9516970b30d57ad5.jpg'),
(30, 'Ovo', '1746764812_b45dd7ff173d5b1a51f4.jpg'),
(31, 'Dana', '1746765350_78ec3af623d6b8d07c22.png'),
(32, 'Gopay', '1746851787_469b39e731f97375d98f.png'),
(33, 'Gopay', '1746851816_5a6beea111cd13956d0d.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `level` enum('1','2','3','10','4') NOT NULL DEFAULT '2',
  `soft_delete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `email`, `no_hp`, `alamat`, `password`, `token`, `expiry`, `level`, `soft_delete`) VALUES
(13, 'Sapi Bakar2', 'sapi@gmaill', '082323134322', '2', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 0),
(19, 'rawr', 'rawr@gmail', '0823521635', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 0),
(32, 'berudu', 'berudu@gmail.com', '023521343', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 1),
(35, 'chelsica', 'chelsica@gmail.com', '02341244324', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '2', 0),
(59, 'Super Admin', 'superadmin@gmail.com', '02131246732', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '10', 0),
(71, 'rpll', 'rpll@gmail.com', '08982636213', '', '1229e06a85f7d8871e0b1fa38fc43318', NULL, NULL, '4', 0),
(78, 'arena', 'arena@gmail.com', '067643271334', 'bengkong', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '2', 0),
(79, 'Tes Booking', 'tesbooking@gmail.com', '0821312131323', 'Tiban Durian', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '1', 0),
(80, 'erm', 'erm@gmail.com', '08253154343', 'Tiban Durian', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '4', 0),
(81, 'panda', 'panda@gmail.com', '08235152431', 'panda house', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '2', 0),
(82, 'Evan', 'evan@gmail', '0832142316453', 'tiban bengkong', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '1', 0),
(83, 'bookin', 'bookin@gmail.com', '083251534241', 'Tiban Durian', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '2', 0),
(84, 'Casey', 'casey@gmail.com', '0372322315656132', 'Here', '202cb962ac59075b964b07152d234b70', NULL, NULL, '1', 0),
(85, 'salon', 'salon@gmail.com', '083521345123', 'bengkong', '9121cb5949eece06392b6c7a24269e4d', NULL, NULL, '2', 0),
(86, 'dsadaw', 'hsdhgdg@gmail.com', '0363671213', 'daawdadawd', '220466675e31b9d20c051d5e57974150', NULL, NULL, '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `mulai` varchar(8) NOT NULL,
  `selesai` varchar(8) NOT NULL,
  `satuan` enum('AM','PM') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `mulai`, `selesai`, `satuan`, `created_at`, `updated_at`) VALUES
(1, '09:00', '10:00', 'AM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(2, '10:00', '11:00', 'AM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(3, '11:00', '12:00', 'AM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(4, '12:00', '01:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(5, '01:00', '02:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(6, '02:00', '03:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(7, '03:00', '04:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(8, '04:00', '05:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27'),
(9, '05:00', '06:00', 'PM', '2025-04-13 19:34:27', '2025-04-13 19:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lapangan_id` (`lapangan_id`),
  ADD KEY `pembayaran_id` (`pembayaran_id`);

--
-- Indexes for table `booking_waktu`
--
ALTER TABLE `booking_waktu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `waktu_id` (`waktu_id`);

--
-- Indexes for table `gambar_lapangan`
--
ALTER TABLE `gambar_lapangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lapangan_id` (`lapangan_id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `booking_waktu`
--
ALTER TABLE `booking_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gambar_lapangan`
--
ALTER TABLE `gambar_lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangan` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`);

--
-- Constraints for table `booking_waktu`
--
ALTER TABLE `booking_waktu`
  ADD CONSTRAINT `booking_waktu_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `booking_waktu_ibfk_2` FOREIGN KEY (`waktu_id`) REFERENCES `waktu` (`id`);

--
-- Constraints for table `gambar_lapangan`
--
ALTER TABLE `gambar_lapangan`
  ADD CONSTRAINT `gambar_lapangan_ibfk_1` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
