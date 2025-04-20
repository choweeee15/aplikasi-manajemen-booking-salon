-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2025 at 12:46 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_booking_lapangan_252`
--

-- --------------------------------------------------------

--
-- Table structure for table `appeals`
--

CREATE TABLE `appeals` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `appeal_reason` text NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appeals`
--

INSERT INTO `appeals` (`id`, `user_id`, `appeal_reason`, `status`, `created_at`) VALUES
(8, 66, 'dawd', 'accepted', '2025-03-27 11:05:59'),
(10, 66, 'pls unblok i want to park my car', 'accepted', '2025-03-27 11:37:11'),
(11, 69, 'halo tolong saya sudah jerah saya mau buat parkir disini jadi tolong saya', 'rejected', '2025-03-27 11:43:17'),
(12, 70, 'saya tidak akan melanggar aturan aplikasi lagi, tolong pertimbangkan ban saya :(', 'accepted', '2025-04-02 04:24:37'),
(13, 75, 'tolong unban saya, saya pengen parkir disini plis', 'accepted', '2025-04-05 04:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` int NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `app_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `app_name`, `app_logo`) VALUES
(2, 'AYO ARENA', '1743950273_d63b0f11570025ec844d.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `lapangan_id` int NOT NULL,
  `pembayaran_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Terkonfirmasi','Sedang Menggunakan','Selesai') NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `lapangan_id`, `pembayaran_id`, `tanggal`, `total_harga`, `status`, `created_at`) VALUES
(1, 7, 2, '2025-04-13', 125000.00, 'Menunggu Konfirmasi', '2025-04-13 21:33:35'),
(2, 7, 3, '2025-04-13', 250000.00, 'Menunggu Konfirmasi', '2025-04-13 21:34:08'),
(3, 7, 4, '2025-04-13', 125000.00, 'Menunggu Konfirmasi', '2025-04-13 21:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `booking_waktu`
--

CREATE TABLE `booking_waktu` (
  `id` int NOT NULL,
  `booking_id` int NOT NULL,
  `waktu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_waktu`
--

INSERT INTO `booking_waktu` (`id`, `booking_id`, `waktu_id`) VALUES
(1, 1, 1),
(2, 2, 8),
(3, 2, 9),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_lapangan`
--

CREATE TABLE `gambar_lapangan` (
  `id` int NOT NULL,
  `lapangan_id` int NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar_lapangan`
--

INSERT INTO `gambar_lapangan` (`id`, `lapangan_id`, `file`, `created_at`) VALUES
(1, 7, '1744545892_c0746ceeb1256d897075.jpg', '2025-04-13 19:04:52'),
(3, 7, '1744545892_f476006ff8eeb292f9d3.jpg', '2025-04-13 19:04:52'),
(4, 7, '1744546756_9e320b155bd4f0d95ec6.jpg', '2025-04-13 19:19:16'),
(5, 8, '1744546909_25ce197a226349a93ba9.jpg', '2025-04-13 19:21:49'),
(6, 8, '1744546909_632624d3959a51c7bde5.jpg', '2025-04-13 19:21:49'),
(7, 8, '1744546909_05de6f9e0e960c23294d.jpg', '2025-04-13 19:21:49'),
(8, 9, '1744546948_b9a803f72465ee3f6b6b.jpg', '2025-04-13 19:22:28'),
(9, 9, '1744546948_24eab82af4adf042499a.jpg', '2025-04-13 19:22:28'),
(10, 9, '1744546948_5bc0516a1fcc8f51913e.jpg', '2025-04-13 19:22:28'),
(11, 10, '1744546992_21a5af7bfebf516bbbf2.jpg', '2025-04-13 19:23:12'),
(12, 10, '1744546992_3cf88a5ae396b59c7ad9.jpg', '2025-04-13 19:23:12'),
(13, 10, '1744546992_6477acab2d1bce20c048.jpg', '2025-04-13 19:23:12'),
(14, 11, '1744547092_9155c4b9967137668687.jpeg', '2025-04-13 19:24:52'),
(15, 11, '1744547092_07f521073bea7bc02eb9.jpg', '2025-04-13 19:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `lokasi` varchar(255) DEFAULT NULL,
  `tipe` enum('Basketball Court','Futsal Field','Badminton Court','Volleyball Court','Table Tennis','Baseball Field') DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `status` enum('tersedia','tidak tersedia') DEFAULT 'tersedia',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `nama`, `deskripsi`, `lokasi`, `tipe`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Basketball Court22', 'Perfect for 5v5 matches or casual shootarounds. Designed for the ideal bounce and grip for all levels.', 'Located in the heart of the city, this basketball court is easily accessible and offers a great atmosphere for both friendly matches and training sessions.', 'Basketball Court', 125000.00, 'tersedia', '2025-04-13 19:04:52', '2025-04-13 19:19:16'),
(8, 'Futsal Field', 'Ideal for 5v5 matches or friendly practice sessions. Offering excellent turf and goalposts.', 'Located in the prime sports area, this futsal field is perfect for teams or friends to enjoy a fun match.', 'Futsal Field', 150000.00, 'tersedia', '2025-04-13 19:21:49', '2025-04-13 19:21:49'),
(9, 'Badminton Court', 'Smash, serve, and rally on our indoor court. Designed for all skill levels with ample space and excellent lighting.', 'Located in the heart of the city, this indoor badminton court is perfect for recreational and competitive players alike.', 'Badminton Court', 100000.00, 'tersedia', '2025-04-13 19:22:28', '2025-04-13 19:22:28'),
(10, 'Volleyball Court', 'Enjoy thrilling volleyball matches on our high-quality court. Perfect for friendly and competitive matches alike.', 'Located in the heart of the city, our volleyball court is the perfect spot for both competitive and casual games.', 'Volleyball Court', 120000.00, 'tersedia', '2025-04-13 19:23:12', '2025-04-13 19:23:12'),
(11, 'Table Tennis', 'Enjoy fast-paced indoor play with our top-quality table tennis setup. Ideal for singles or doubles matches.', 'Our indoor table tennis setup provides the perfect environment for fast-paced games, whether you\'re a beginner or a seasoned pro', 'Table Tennis', 80000.00, 'tersedia', '2025-04-13 19:24:52', '2025-04-13 19:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id_log` int NOT NULL,
  `id_user` int NOT NULL,
  `what_happens` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(298, 78, 'Logged in', '2025-04-14 07:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tipe` varchar(20) NOT NULL DEFAULT 'mobil',
  `status` enum('available','booked') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `lokasi`, `tipe`, `status`) VALUES
(1, 'Parkir 1', 'mobil', 'booked'),
(2, 'Parkir 2', 'mobil', 'booked'),
(3, 'Parkir 3', 'mobil', 'booked'),
(4, 'Parkir 4', 'mobil', 'booked'),
(5, 'Parkir 5', 'mobil', 'available'),
(6, 'Parkir 6', 'mobil', 'available'),
(7, 'Parkir 7', 'mobil', 'available'),
(8, 'Parkir 8', 'mobil', 'booked'),
(9, 'Parkir 9', 'mobil', 'available'),
(10, 'Parkir 10', 'mobil', 'booked'),
(11, 'Parkir 11', 'mobil', 'booked'),
(12, 'Parkir 12', 'mobil', 'booked'),
(13, 'Parkir 13', 'mobil', 'booked'),
(14, 'Parkir 14', 'mobil', 'available'),
(15, 'Parkir 15', 'mobil', 'available'),
(16, 'Parkir 16', 'mobil', 'available'),
(17, 'Parkir 17', 'mobil', 'available'),
(18, 'Parkir 18', 'mobil', 'available'),
(19, 'Parkir 19', 'mobil', 'available'),
(20, 'Parkir 20', 'mobil', 'available'),
(21, 'Parkir 1', 'motor', 'available'),
(22, 'Parkir 2', 'motor', 'available'),
(23, 'Parkir 3', 'motor', 'available'),
(24, 'Parkir 4', 'motor', 'available'),
(25, 'Parkir 5', 'motor', 'available'),
(26, 'Parkir 6', 'motor', 'available'),
(27, 'Parkir 7', 'motor', 'available'),
(28, 'Parkir 8', 'motor', 'available'),
(29, 'Parkir 9', 'motor', 'booked'),
(30, 'Parkir 10', 'motor', 'available'),
(31, 'Parkir 11', 'motor', 'available'),
(32, 'Parkir 12', 'motor', 'booked'),
(33, 'Parkir 13', 'motor', 'available'),
(34, 'Parkir 14', 'motor', 'available'),
(35, 'Parkir 15', 'motor', 'available'),
(36, 'Parkir 16', 'motor', 'available'),
(37, 'Parkir 17', 'motor', 'available'),
(38, 'Parkir 18', 'motor', 'available'),
(39, 'Parkir 19', 'motor', 'available'),
(40, 'Parkir 20', 'motor', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `metode_pembayaran`, `bukti_pembayaran`) VALUES
(1, 'Ovo', '1744553151_aa506f5dc664aa6cb8e1.jpg'),
(2, 'Dana', '1744554815_3a2eaeda396a9af92a0e.jpeg'),
(3, 'Ovo', '1744554848_a8de97165767b7eedc1b.jpg'),
(4, 'Dana', '1744555190_694acfd92e5849b8a5e3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `level` enum('1','2','3','10','4') NOT NULL DEFAULT '2',
  `soft_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `email`, `no_hp`, `alamat`, `password`, `token`, `expiry`, `level`, `soft_delete`) VALUES
(13, 'Sapi Bakar2', 'sapi@gmail', '08232313432', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '2', 0),
(19, 'rawr', 'rawr@gmail', '0823521635', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 0),
(32, 'berudu', 'berudu@gmail.com', '023521343', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 0),
(35, 'chelsica', 'chelsica@gmail.com', '02341244324', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '2', 0),
(59, 'Super Admin', 'superadmin@gmail.com', '02131246732', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, '1', 0),
(71, 'rpll', 'rpll@gmail.com', '08982636213', '', '1229e06a85f7d8871e0b1fa38fc43318', NULL, NULL, '2', 0),
(78, 'arena', 'arena@gmail.com', '067643271334', 'bengkong', '8c30331f147521dc60926e785ca84d42', NULL, NULL, '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_parkir` int DEFAULT NULL,
  `waktu_reservasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `awal_waktu_reservasi` datetime DEFAULT NULL,
  `akhir_waktu_reservasi` datetime DEFAULT NULL,
  `waktu_checkout` datetime DEFAULT NULL,
  `kendaraan` varchar(11) DEFAULT NULL,
  `total_tagihan` int DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `tiket` varchar(20) NOT NULL DEFAULT '0',
  `status` varchar(30) DEFAULT 'Terbayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_user`, `id_parkir`, `waktu_reservasi`, `awal_waktu_reservasi`, `akhir_waktu_reservasi`, `waktu_checkout`, `kendaraan`, `total_tagihan`, `bukti_pembayaran`, `tiket`, `status`) VALUES
(1, 19, 1, '2025-04-04 19:51:55', '2025-04-04 16:51:00', '2025-04-04 19:46:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250404-1951', 'Checked-out'),
(2, 19, 8, '2025-04-04 20:05:35', '2025-04-04 20:05:00', '2025-04-04 20:06:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250404-2005', 'Checked-out'),
(3, 19, 13, '2025-04-04 20:08:28', '2025-04-04 21:08:00', '2025-04-04 22:09:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250404-2008', 'Confirmed'),
(4, 19, 29, '2025-04-04 20:11:22', '2025-04-04 20:10:00', '2025-04-04 21:14:00', NULL, 'Motor', NULL, NULL, 'TKT-MT-20250404-2011', 'Checked-in'),
(5, 19, 19, '2025-04-04 20:12:24', '2025-04-04 20:11:00', '2025-04-04 21:11:00', '2025-04-04 20:14:00', 'Mobil', NULL, NULL, 'TKT-MB-20250404-2012', 'Checked-out'),
(6, 19, 32, '2025-04-04 20:13:18', '2025-04-04 20:12:00', '2025-04-04 20:14:00', NULL, 'Motor', NULL, NULL, 'TKT-MT-20250404-2013', 'Waiting for Fine Payment'),
(7, 19, 10, '2025-04-04 20:16:22', '2025-04-04 20:15:00', '2025-04-05 14:15:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250404-2016', 'Terbayar'),
(8, 72, 12, '2025-04-05 10:35:10', '2025-04-05 10:34:00', '2025-04-05 10:36:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250405-1035', 'Checked-out'),
(9, 59, 4, '2025-04-05 10:46:37', '2025-04-05 10:46:00', '2025-04-05 10:47:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250405-1046', 'Waiting for Fine Payment'),
(10, 59, 2, '2025-04-05 10:49:06', '2025-04-05 10:48:00', '2025-04-05 10:51:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250405-1049', 'Terbayar'),
(11, 59, 11, '2025-04-05 10:50:03', '2025-04-05 10:49:00', '2025-04-05 10:54:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250405-1050', 'Terbayar'),
(12, 59, 3, '2025-04-05 10:53:55', '2025-04-05 10:53:00', '2025-04-05 10:57:00', NULL, 'Mobil', NULL, NULL, 'TKT-MB-20250405-1053', 'Terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int NOT NULL,
  `mulai` varchar(8) NOT NULL,
  `selesai` varchar(8) NOT NULL,
  `satuan` enum('AM','PM') NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`);

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
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_waktu`
--
ALTER TABLE `booking_waktu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gambar_lapangan`
--
ALTER TABLE `gambar_lapangan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_parkir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
