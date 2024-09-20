-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2024 at 10:42 AM
-- Server version: 10.5.24-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiexpe_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0716d9708d321ffb6a00818614779e779925365c', 'i:1;', 1726286755),
('0716d9708d321ffb6a00818614779e779925365c:timer', 'i:1726286755;', 1726286755),
('0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'i:1;', 1725386273),
('0ade7c2cf97f75d009975f4d720d1fa6c19f4897:timer', 'i:1725386273;', 1725386273),
('12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'i:1;', 1726480688),
('12c6fc06c99a462375eeb3f43dfd832b08ca9e17:timer', 'i:1726480688;', 1726480688),
('1574bddb75c78a6fd2251d61e2993b5146201319', 'i:2;', 1726245641),
('1574bddb75c78a6fd2251d61e2993b5146201319:timer', 'i:1726245641;', 1726245641),
('17ba0791499db908433b80f37c5fbc89b870084b', 'i:1;', 1726225401),
('17ba0791499db908433b80f37c5fbc89b870084b:timer', 'i:1726225401;', 1726225401),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1726231517),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1726231517;', 1726231517),
('472b07b9fcf2c2451e8781e944bf5f77cd8457c8', 'i:2;', 1726462427),
('472b07b9fcf2c2451e8781e944bf5f77cd8457c8:timer', 'i:1726462427;', 1726462427),
('7b52009b64fd0a2a49e6d8a939753077792b0554', 'i:2;', 1726225922),
('7b52009b64fd0a2a49e6d8a939753077792b0554:timer', 'i:1726225922;', 1726225922),
('91032ad7bbcb6cf72875e8e8207dcfba80173f7c', 'i:1;', 1726422783),
('91032ad7bbcb6cf72875e8e8207dcfba80173f7c:timer', 'i:1726422783;', 1726422783),
('9e6a55b6b4563e652a23be9d623ca5055c356940', 'i:1;', 1726391100),
('9e6a55b6b4563e652a23be9d623ca5055c356940:timer', 'i:1726391100;', 1726391100),
('aryakdewa@gmail.com|127.0.0.1', 'i:1;', 1725928871),
('aryakdewa@gmail.com|127.0.0.1:timer', 'i:1725928871;', 1725928871),
('aryakdewa18@gmail.com|114.5.111.105', 'i:1;', 1726227477),
('aryakdewa18@gmail.com|114.5.111.105:timer', 'i:1726227477;', 1726227477),
('b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f', 'i:1;', 1726410701),
('b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f:timer', 'i:1726410701;', 1726410701),
('bd307a3ec329e10a2cff8fb87480823da114f8f4', 'i:2;', 1726231628),
('bd307a3ec329e10a2cff8fb87480823da114f8f4:timer', 'i:1726231628;', 1726231628),
('d435a6cdd786300dff204ee7c2ef942d3e9034e2', 'i:1;', 1726535057),
('d435a6cdd786300dff204ee7c2ef942d3e9034e2:timer', 'i:1726535057;', 1726535057),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1725329816),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1725329816;', 1725329816),
('f1abd670358e036c31296e66b3b66c382ac00812', 'i:3;', 1726234188),
('f1abd670358e036c31296e66b3b66c382ac00812:timer', 'i:1726234188;', 1726234188),
('fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', 'i:1;', 1726232145),
('fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b:timer', 'i:1726232145;', 1726232145),
('fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'i:1;', 1725291357),
('fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f:timer', 'i:1725291357;', 1725291357),
('lailyfila0@gmail.com|182.1.82.14', 'i:1;', 1726462335),
('lailyfila0@gmail.com|182.1.82.14:timer', 'i:1726462335;', 1726462335),
('naiakedua@gmail.com|2400:9800:6042:f8:50b4:9e44:fc40:d882', 'i:1;', 1726234156),
('naiakedua@gmail.com|2400:9800:6042:f8:50b4:9e44:fc40:d882:timer', 'i:1726234156;', 1726234156);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(23, 'GPT-4o', '2024-07-28 07:20:27', '2024-07-28 07:20:27'),
(25, 'gpt', '2024-08-03 04:38:50', '2024-08-03 04:38:50'),
(26, 'spotify', '2024-09-01 23:12:45', '2024-09-01 23:12:45'),
(27, 'zoom', '2024-09-01 23:23:03', '2024-09-01 23:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_07_16_125440_create_categories_table', 2),
(8, '2024_07_18_113327_create_products_table', 3),
(9, '2024_07_29_155654_create_projects_table', 4),
(10, '2024_08_04_105630_create_carts_table', 5),
(11, '2024_08_08_160503_quantity', 6),
(12, '2024_08_08_164150_product_id', 6),
(13, '2024_08_08_164503_add_quantity_to_carts_table', 7),
(14, '2024_08_10_163026_create_orders_table', 8),
(15, '2024_08_12_172208_add_payment_status_to_orders_table', 9),
(16, '2024_08_12_173125_add_payment_status_to_orders_table', 10),
(18, '2024_08_12_175149_add_additional_to_orders', 11),
(19, '2024_08_14_145434_add_duration_to_product', 12),
(21, '2024_08_25_034352_create_newsletter_subs', 13);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kirana@gmail.com', 1, '2024-08-25 19:33:57', '2024-08-25 19:33:57'),
(2, 'kirana@gmail.com', 1, '2024-09-02 19:39:22', '2024-09-02 19:39:22'),
(3, 'kirana@gmail.com', 1, '2024-09-02 19:41:05', '2024-09-02 19:41:05'),
(4, 'digiexpert.10001@gmail.com', 1, '2024-09-13 03:37:31', '2024-09-13 03:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'cash on delivery',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `snap` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `rec_address`, `phone`, `user_id`, `product_id`, `payment_status`, `created_at`, `updated_at`, `snap`, `order_id`) VALUES
(17, 'Kirana', 'kirana@gmail.com', 'None', 2, 20, 'pending', '2024-09-01 09:18:28', '2024-09-01 09:18:28', '', ''),
(18, 'Arya', 'aryakdewa18@gmail.com', 'None', 1, 22, 'pending', '2024-09-02 01:56:44', '2024-09-02 01:56:44', '', ''),
(19, 'Kirana', 'kirana@gmail.com', 'None', 2, 21, 'pending', '2024-09-02 19:16:44', '2024-09-02 19:16:44', '', ''),
(20, 'Kirana', 'kirana@gmail.com', 'None', 2, 21, 'pending', '2024-09-02 19:19:25', '2024-09-02 19:19:25', '', ''),
(21, 'Arya', 'aryakdewa18@gmail.com', 'None', 1, 20, 'pending', '2024-09-09 02:34:42', '2024-09-09 02:34:42', '', ''),
(22, 'Arya', 'aryakdewa18@gmail.com', '083138121', NULL, NULL, 'pending', '2024-09-10 20:56:49', '2024-09-10 20:56:49', 'e300ba12-e162-4fa2-a504-e314b27bdd02', ''),
(23, 'Arya', 'aryakdewa18@gmail.com', '083138121', NULL, NULL, 'pending', '2024-09-10 20:58:01', '2024-09-10 20:58:01', '9d08b972-7e99-465d-ad2f-0df01e8362aa', ''),
(24, 'Arya', 'aryakdewa18@gmail.com', '083138121', NULL, NULL, 'pending', '2024-09-11 00:57:12', '2024-09-11 00:57:12', '472d2350-d594-4ed2-9f20-b6490db865b3', ''),
(25, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, NULL, 'pending', '2024-09-11 01:15:14', '2024-09-11 01:15:14', 'ca5a6657-959e-4643-8c5b-f46b360eee06', ''),
(26, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, NULL, 'pending', '2024-09-11 01:15:25', '2024-09-11 01:15:25', 'f845ec8b-b76b-4dcc-8376-7d006c3502c0', ''),
(27, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, NULL, 'pending', '2024-09-11 01:16:58', '2024-09-11 01:16:58', '93e47927-6a1b-482d-9721-ebb9c5a4b8e4', ''),
(28, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, NULL, 'pending', '2024-09-11 01:17:24', '2024-09-11 01:17:24', '57823a93-44eb-427c-996c-d18bf925aa3f', ''),
(29, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, NULL, 'pending', '2024-09-11 01:21:46', '2024-09-11 01:21:46', '7b28831f-9480-4d90-bbdb-96e5f4ed9c1d', ''),
(30, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-11 01:47:11', '2024-09-11 01:47:11', '501d58f2-50ba-4682-89f4-b8ab44a4dce5', ''),
(31, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-11 01:49:16', '2024-09-11 01:49:16', '93eca575-bea3-4c76-9598-c2535b9c3bd4', ''),
(32, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-11 02:08:32', '2024-09-11 02:08:32', '22a74348-fd11-4d88-b2da-13e1e76083cc', ''),
(33, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-11 02:22:22', '2024-09-11 02:22:22', '8eba348e-a070-4d06-ad2d-3262b5af2352', ''),
(34, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-11 02:27:19', '2024-09-11 02:27:19', 'cd7f2d95-1c0d-44f1-bbdc-dd648db5cb2d', ''),
(35, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-11 17:14:31', '2024-09-11 17:14:31', '5ecce428-8772-4706-8ab9-7e173c329bfb', ''),
(36, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-11 17:17:08', '2024-09-11 17:17:08', '920b5e00-8ba7-4675-983e-14ddc640dc42', ''),
(37, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-11 17:21:41', '2024-09-11 17:21:41', 'dad5d4e7-9403-4f94-a04c-86419733c995', ''),
(38, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-11 18:55:37', '2024-09-11 18:55:37', '0d886cda-fa81-4c9c-9a87-2bedce0f6e7f', ''),
(39, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-11 18:57:07', '2024-09-11 18:57:07', 'd6c7624d-4edb-4698-994b-b1af48273d49', ''),
(40, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-12 08:11:28', '2024-09-12 08:11:28', '5e16a3dd-5977-410a-8562-33335eddb499', ''),
(41, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 08:35:33', '2024-09-12 08:35:33', 'dead2ab7-5668-4e01-8a1b-d20f21ef27c8', ''),
(42, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-12 08:50:48', '2024-09-12 08:50:48', '2af3d785-28d2-40ac-984d-9b1914113f6b', ''),
(43, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 21:36:26', '2024-09-12 21:36:26', '67d900fa-cd6a-4e89-87de-fa1cfadda158', ''),
(44, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 21:45:01', '2024-09-12 21:45:01', '6455cff5-1e24-416c-ae57-a491e6a9d3b0', ''),
(45, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-12 21:48:44', '2024-09-12 21:48:44', '90fb8040-ffa3-4117-b776-68a3f0e30200', ''),
(46, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-12 22:02:53', '2024-09-12 22:02:53', '601f388c-e2b1-4f6b-ad42-b5dd4cd74d7c', 'ORDER-66e3c77ce53d1'),
(47, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 22:08:36', '2024-09-12 22:08:36', '6fc6a9d8-8da6-4d17-bed4-fb46ee487702', 'ORDER-66e3c8d3762d9'),
(48, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 21, 'pending', '2024-09-12 22:10:00', '2024-09-12 22:10:00', '497fe448-605b-4df7-88d3-8da8fc52a370', 'ORDER-66e3c9280ddda'),
(49, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 23:11:02', '2024-09-12 23:11:02', '72f0a21e-3dc8-45f7-abdd-65fb05414976', 'ORDER-66e3d775f02d1'),
(50, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-12 23:11:20', '2024-09-12 23:11:20', 'c355eccc-8d4a-4f0e-8951-15cbe347d0e1', 'ORDER-66e3d787ce3f8'),
(51, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-13 00:13:37', '2024-09-13 00:13:37', 'b25a50c7-eec1-4827-8646-f9d0f6d376f9', 'ORDER-66e3e6207e94b'),
(52, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 20, 'pending', '2024-09-13 01:31:34', '2024-09-13 01:31:34', '4bc5a635-c2c3-46a7-ab64-fb2695c03f24', 'ORDER-66e3f865e692c'),
(53, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-13 01:32:24', '2024-09-13 01:32:24', '92f805cc-2e3a-489a-8607-45b0537d0609', 'ORDER-66e3f889023da'),
(54, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-13 01:32:34', '2024-09-13 01:32:34', 'b58ae39c-8144-4862-9eb3-1f71a21c2773', 'ORDER-66e3f88286182'),
(55, 'aa', 'digiexpert.10001@gmail.com', '93819313', 10, 20, 'pending', '2024-09-13 03:20:53', '2024-09-13 03:20:53', 'f906ab12-751c-4f4f-8bd2-5693c0b23904', 'ORDER-66e4120461038'),
(56, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-13 03:39:42', '2024-09-13 03:39:42', '941e2075-a0df-490e-bb40-db5796f104ca', 'ORDER-66e4166e394f8'),
(57, 'Annisa Azka', 'azkaannisa141402@gmail.com', '082192293980', 11, 26, 'pending', '2024-09-13 04:04:24', '2024-09-13 04:04:24', 'e5d23a8d-1566-4575-8333-5a0832df9e1f', 'ORDER-66e41c380f375'),
(58, 'Annisa Azka', 'azkaannisa141402@gmail.com', '082192293980', 11, 26, 'pending', '2024-09-13 04:16:55', '2024-09-13 04:16:55', '3db521b4-b194-4c2f-8f75-d1d24f90ca04', 'ORDER-66e41f2747fd5'),
(59, 'Ajabsk', 'digiexpert.10004@gmail.com', '08797879', 14, 26, 'pending', '2024-09-13 05:55:04', '2024-09-13 05:55:04', 'f6746dde-e663-4eeb-9fc1-2c2e33ce1d10', 'ORDER-66e4362826825'),
(60, 'Naila', 'naiakedua@gmail.com', '082131083779', 15, 20, 'pending', '2024-09-13 06:29:57', '2024-09-13 06:29:57', '996ce721-e7b8-42ee-a96e-753746413d87', 'ORDER-66e43e5535639'),
(61, 'Muhammad Irvan Shandika', 'shandikamuhammadirvan@gmail.com', '085845561655', 16, 23, 'pending', '2024-09-13 09:41:10', '2024-09-13 09:41:10', 'ff8c89f6-eddd-4e75-81dd-e0c6c459401f', 'ORDER-66e46b268687b'),
(62, 'Keanu', 'keanuhabb@gmail.com', '08113080451', 17, 23, 'pending', '2024-09-13 21:05:38', '2024-09-13 21:05:38', '36ce54e0-8469-4fee-a366-d6f6adf09987', 'ORDER-66e50b91cae1b'),
(63, 'Keanu', 'keanuhabb@gmail.com', '08113080451', 17, 23, 'pending', '2024-09-13 21:06:05', '2024-09-13 21:06:05', 'efa44041-16f4-4ca7-ae3a-f5e0e3012ebf', 'ORDER-66e50bacc5573'),
(64, 'Keanu', 'keanuhabb@gmail.com', '08113080451', 17, 23, 'pending', '2024-09-13 21:07:19', '2024-09-13 21:07:19', '0bbfda59-0892-4035-b3a4-eda17bd21011', 'ORDER-66e50bf7126b9'),
(65, 'Keanu', 'keanuhabb@gmail.com', '08113080451', 17, 23, 'pending', '2024-09-13 21:19:00', '2024-09-13 21:19:00', '783733cf-9fb5-4584-bea0-9f914f765cd6', 'ORDER-66e50eb43d53a'),
(66, 'Arya', 'aryakdewa18@gmail.com', '083138121', 1, 23, 'pending', '2024-09-14 09:46:07', '2024-09-14 09:46:07', '9c697081-fb90-42a8-a01f-c69a76641692', 'ORDER-66e5bdcf20b35'),
(67, 'Samuel Arthur Gamalliel', 'samuelarthurmarpaung@gmail.com', '087868453883', 18, 23, 'pending', '2024-09-15 02:05:38', '2024-09-15 02:05:38', 'b20c1947-3fac-4095-a2fd-95d32d6cc3d6', 'ORDER-66e6a3621cb10'),
(68, 'Afif Ridho', 'botolb512@gmail.com', '082385119649', 20, 20, 'pending', '2024-09-15 10:53:25', '2024-09-15 10:53:25', 'a607aa2c-e7e7-4b56-8f4d-e735d3f63caa', 'ORDER-66e71f15143a7'),
(69, 'Laily Fila', 'palate-waver0f@icloud.com', '081219503446', 21, 20, 'pending', '2024-09-15 21:54:12', '2024-09-15 21:54:12', 'b83945f5-3c38-451a-b0b9-a276240748d7', 'ORDER-66e7b9f3aa68e'),
(70, 'Muhammad Fhandika Rafif', 'dika@atharva.co.id', '628158870904', 22, 21, 'pending', '2024-09-16 02:58:06', '2024-09-16 02:58:06', 'ea9bbd10-78ae-46e8-822d-f73835c6314f', 'ORDER-66e8012e1aec2'),
(71, 'Afif Anshor', 'soblogsanjing83@gmail.com', '08814077849', 23, 26, 'pending', '2024-09-16 18:08:29', '2024-09-16 18:08:29', '61105b74-f39d-48c9-854b-b61b296ff0e6', 'ORDER-66e8d68d0c509');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('sabil@gmail.com', '$2y$12$pEO24srFGdYq05o5PBOseeUCddWdk/uZZSyD/rrM1wtVxeerbz/vS', '2024-07-14 08:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `duration` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `duration`, `category`, `quantity`, `created_at`, `updated_at`) VALUES
(20, 'Chat GPT-4o (Premium) Sharing', '200 messages / 3 hours. Access to GPT-4, GPT-4o, GPT-4o mini, o1-preview, o1-mini. Faster and smarter than GPT-4. DALL-E Image generation. Can be used for parafrase. Without thidr party or mirror link, 100% pure GPT. Can be used on mobile app.', '1726461056.webp', '14999', '/ bulan', 'gpt', '1000', '2024-08-30 19:32:39', '2024-09-15 21:30:56'),
(21, 'Chat GPT-4o (Premium) private', 'More private than GPT-4o sharing, duration: 1 Month, much faster speed than GPT-4, DALL-E image generation, create and use custom GPTs', '1726461081.jpg', '44999', '/ bulan', 'gpt', '1000', '2024-08-30 19:37:06', '2024-09-15 21:31:21'),
(22, 'Spotify Premium Sharing', 'Premium 30 Hari', '1725266856.jpg', '20000', '/ 1 bulan', 'spotify', '100000', '2024-09-01 23:14:14', '2024-09-02 01:47:36'),
(23, 'Chat GPT-4', 'Duration: 1 month, limit: 50 messages / 3 hours. Private. Cannot access GPT-4o yet.', '1726422634.webp', '4999', 'Lifetime (selamanya)', 'gpt', '1000', '2024-09-02 01:40:15', '2024-09-15 10:50:34'),
(24, 'Spotify Premium Private', 'Premium 30 hari, private.', '1725266961.jpg', '50000', '/ bulan', 'spotify', '1000', '2024-09-02 01:49:22', '2024-09-02 01:49:22'),
(25, 'Zoom Premium', 'Durasi: 1 bulan, no limit.', '1725267213.jpg', '60000', '/ bulan', 'zoom', '100', '2024-09-02 01:53:33', '2024-09-02 01:53:33'),
(26, 'Chat GPT-4o (Premium) Private Plus', '200 messages / 3 hr. Very private. Access to GPT-4, GPT-4o, GPT-4o mini. More fast, responsive, and advance than GPT-4. DALL-E Image generation. Without third party', '1726461132.jpg', '89999', '/ bulan', 'gpt', '1000', '2024-09-12 23:20:43', '2024-09-15 21:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `deskripsi_project` varchar(255) NOT NULL,
  `leader_project` varchar(255) NOT NULL,
  `fee_project` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `nama_project`, `deskripsi_project`, `leader_project`, `fee_project`, `created_at`, `updated_at`) VALUES
(1, 'Enha', 'Membuat System Web', 'Andrian', 'Rp. 10.000.000', '2024-07-29 09:34:23', '2024-07-29 09:57:07'),
(2, 'Petrogas Jatim Utama', 'Membuat System ERP web based', 'Bagus Setiawan', 'Rp. 25.000.000', '2024-07-29 09:55:34', '2024-07-29 09:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1G5p7y8W1Ape9ZoXDlAT7Lam6i6uXe8zUouEaBSj', NULL, '139.194.57.157', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.127 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRldKUUlieGtwMGM4UUp6YUVtZWFlMVVyN2FBOFpnZFk2YmFjRFdkSyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726537871),
('2hzl9QQYb2db0CaqDy6ifwVeZeMvmi1Ayx1XVg7e', 23, '60.253.104.2', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS3Zic1plZWhqSHlza0ZmUjV4ekQ5N2tKQ3lGZHJBNTBaYmN0U3VNZCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0OToiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0cy9jaGVja291dC83MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjIzO3M6MzoidXJsIjthOjA6e319', 1726535309),
('2vN8Hjdan7ewShLn2JXQ0Vt1j4p9uJ6xWF2SuzMC', NULL, '110.50.81.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaENwME5oYlluVnFsRWR1alFJeFVjemdTT2VFak5LS1lPR0N3V2xEciI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxNzk6Imh0dHBzOi8vd3d3LmRpZ2lleHBlcnQuY28uaWQvdmVyaWZ5LWVtYWlsLzIzL2IzZTBmZTcwMjM5ZjllZWI1NzkzZWY1M2U5ZmJkNDY2ZDJhN2E0MGY/ZXhwaXJlcz0xNzI2NTM4NDkyJnNpZ25hdHVyZT04YmQwMjQyYWMzYzFiMDM0ZDcwNDI0NDU5MmJhODA4MDdjZWM4ZDAzMjhjODYyM2FkYzM1NWRhZmMxMDVjM2VjIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmRpZ2lleHBlcnQuY28uaWQvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE4OiJmbGFzaGVyOjplbnZlbG9wZXMiO2E6MDp7fX0=', 1726534927),
('34xERCDCoaRQkDRvnQiIpUstERJvSByXdIwCVToD', NULL, '2400:9800:820:9a31:64fe:2cff:fe9c:a6cd', 'WhatsApp/2.23.20.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaG5hbm9ncjlqR2xzMzBJUlFFWkJzRjA0bDBUVmdCQk9idzN0cUJ3OCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726535359),
('6TyuphykXkyiLrkPewv0F5iQjis9VpMNbohqRiEi', NULL, '114.79.55.120', 'WhatsApp/2.23.20.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamg1SHVEYUsyc0tyZ2VqYmNJWDlrUnJXemxoMWQ1d2JlbUszZXZOSiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726534784),
('7m1TesHViO8TP1XSdwMvU7aDkXbphlGf1r3GOfXX', NULL, '103.94.190.26', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.127 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieDBuWWlUN2pydVN1OEpsVUZqTFFOSmczbkFtR1dnN0tuVDJwYlF3SSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NzoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2RldGFpbHMvMjYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1726537836),
('9CRl2NhQsVL6UARCcUpzEJgUo1S4ewFtUamig5YH', NULL, '103.182.49.50', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.146 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQTZNSUYxbVR1eFZQWVhyc0NSMHFneklkR04xQWEyN3o0UTNHeXNNcyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726538454),
('asEePrBfkIfxGPBTkSfhL2cYO0F5NfAk3OLOpjFu', NULL, '103.247.9.9', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2ZGMWhHMDl0Ylh6UEZZbTlreUU2d3pjQk1aZERaSzZFV0MxYlhlUyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726521630),
('D6MfRYktsmVCx4pTe4UqBfgh2iHIc4mQ3BY61NGh', NULL, '34.235.48.77', 'Mozilla/5.0 (compatible)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN0NVbWxYeDgzeVpxOHlCRUw2RURDTURsbDJoT3VqclF0cE12UHR3ZiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726526570),
('E0zi8CNX7fMEyrUHGfcXApjTeSxRry6PFOu9QiNS', NULL, '180.252.95.158', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:130.0) Gecko/20100101 Firefox/130.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQjlycGp4dUxLS3NHOFVGOUVMY1NHRVQ5blJoVEdrUjBpMzJvcUNwdiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNzoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDg6Imh0dHBzOi8vd3d3LmRpZ2lleHBlcnQuY28uaWQvcHJvZHVjdC9hZGRfY2FydC8yNiI7fX0=', 1726538634),
('FoWirXz59rdARSbmo1P6UDLDY0N4XzDBV7iCh5WH', NULL, '114.10.78.25', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYXZlMFpaSkdRWWJMYkhjOTg3UmFEMVJhOG9OT0gyaEN2SUhURlJ5RiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NzoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2RldGFpbHMvMjAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1726539159),
('O9GD0jZ44Fen37P4eVTnHCvhTZmDfje4IX3GwdNU', NULL, '103.116.13.228', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoielZya0lZSXl2MEx6ZFBaczhVTkM2UG1DOHg2cG1xZWs1SlZjWDdkVCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxNzk6Imh0dHBzOi8vd3d3LmRpZ2lleHBlcnQuY28uaWQvdmVyaWZ5LWVtYWlsLzIzL2IzZTBmZTcwMjM5ZjllZWI1NzkzZWY1M2U5ZmJkNDY2ZDJhN2E0MGY/ZXhwaXJlcz0xNzI2NTM4NDkyJnNpZ25hdHVyZT04YmQwMjQyYWMzYzFiMDM0ZDcwNDI0NDU5MmJhODA4MDdjZWM4ZDAzMjhjODYyM2FkYzM1NWRhZmMxMDVjM2VjIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmRpZ2lleHBlcnQuY28uaWQvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE4OiJmbGFzaGVyOjplbnZlbG9wZXMiO2E6MDp7fX0=', 1726534928),
('QjCAOzZvw5fLBnlaXzkH5sbhgvDizLvJTB30MbyA', NULL, '182.2.142.133', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmRHaDVDVlVtQWp0RnFmdGVwRkVySjA2UUt1d05ZdnU3eHZDUkx3ZyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726540595),
('RmWYixCP0ndttPCj47vewQYgtdqqses5RKq4pKoX', NULL, '192.175.111.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiekhHYXVvSm9PaXpEVTRWbW9aVlRhOHpQRnhRT3RpMUZwWkN3ZmhGVCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726540241),
('sCU7Jz1QMxQ0Y1OPKY4yp75SYFW0rk3Cc7VAod07', NULL, '103.116.13.229', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHJIdnRDMFVxWmNQZEFaTndRSjlrdlVXV1NlMkNzSWFuQTdMZlBaUyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNzoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726534884),
('Ub8rGpGi8lQLriByqFQA0tqRRHOtBXgNAjcodKJz', NULL, '192.175.111.229', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM0psMzhCcGEydUxCbXdGQ21vZW11QWxuVnAxZTV4amFVSTZ6MFhGaCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726540238),
('vGzGz44UlJdvJIYMqJv7KUc7Vr5NxS9yQdTGeuE2', NULL, '182.2.142.133', 'Mozilla/5.0 (Linux; Android 9; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.146 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNTRSc1hCUmx4MTlVSVJlMXhFY3QwSlhZUWNucGZrbE96VGFabEo2eSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726540497),
('xUJR7t743ztSagFMynyCFpX6AcL0TzYJeBm0ITWO', NULL, '114.79.55.120', 'WhatsApp/2.23.20.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaEhHT1gwdjNjUHdISGN0NHExU1paSFNnMHRlSGFjcnVZQjZ1Y3MyVSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726534784),
('ZiY1UKbzYUfDRuHJx1LwwMlBicvSVshzitOMzdjN', NULL, '2400:9800:820:9a31:64fe:2cff:fe9c:a6cd', 'WhatsApp/2.23.20.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUVFSZ2JVeGNTOXVGMXA1VDlFc2U0YkxSeHZvbVVjS2hFODFnV2NkOCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly93d3cuZGlnaWV4cGVydC5jby5pZC9wcm9kdWN0L2dwdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726535359);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `no_hp`, `alamat`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arya', 'aryakdewa18@gmail.com', 'Admin', '083138121', 'RT 19 RW 96', '2024-09-09 20:35:24', '$2y$12$Mym2jcptiaYn6GDmmMEFrehQrLwdg4F9kGQf/C.6Tnx/HBEGCUVXm', 'P1cuao8kCfTqOWyfsU2a1UJORaLiLe4x503y50cklygxUM5EEJK4BuB58f0V', '2024-07-13 10:19:16', '2024-09-09 20:35:24'),
(2, 'Kirana', 'kirana@gmail.com', 'user', '12345678910', 'Indonesia', NULL, '$2y$12$NX9yaiaLkpzoCZj6T48j.uejCOciGvbTP74n3QJpllxFsycOvg3ZC', NULL, '2024-07-13 23:32:31', '2024-07-13 23:32:31'),
(3, 'Sabil', 'sabil@gmail.com', 'user', '38183193819', 'Sawangan', NULL, '$2y$12$yiJ7GxSPfytMyeXkZ0eqw.vOEppFG5HHl.Ohil4x5HfSRcfxbvARy', NULL, '2024-07-14 08:39:35', '2024-07-14 08:39:35'),
(4, 'Rexsa', 'rexsa@gmail.com', 'user', '087886050392', 'Blok R2/11', NULL, '$2y$12$ugMahYhBiIjtjhybGi1pi.fLnUBbICKST0zVeeYbrQGvLo7r4v0W6', NULL, '2024-08-12 09:47:06', '2024-08-12 09:47:06'),
(6, 'hacker', 'hackerunknown622@gmail.com', 'user', '087886050392', 'Test', '2024-08-12 09:53:41', '$2y$12$fYUpgMhZtfUOOtA4ZbjLZOjxpbTJ6wO2J0by5kzAkD75XXZQY9ITq', NULL, '2024-08-12 09:53:00', '2024-08-12 09:53:41'),
(8, 'Haris', 'whoamigansx@gmail.com', 'user', '4881913', 'GATAU', '2024-09-02 08:34:57', '$2y$12$bfwc4UqYwgXVDSycuA6TT.Y1diEPN3/MqnQyTexFrInKOEnEZb9j2', NULL, '2024-09-02 08:33:50', '2024-09-02 08:34:57'),
(9, 'aadda', 'ddia@gmail.com', 'user', '839131', 'dadada', NULL, '$2y$12$v70MCG4trYtuDxc9fx9DjexuamlE9KPptOuE3OEgQXbpYZPckN2e6', NULL, '2024-09-03 10:16:53', '2024-09-03 10:16:53'),
(10, 'aa', 'digiexpert.10001@gmail.com', 'user', '93819313', 'gatau', NULL, '$2y$12$3o3XblK.MlonG96jZ075tOhTlHKryFqlhKPMNQcuck1AmguKuaU7W', NULL, '2024-09-13 03:19:43', '2024-09-13 03:19:43'),
(11, 'Annisa Azka', 'azkaannisa141402@gmail.com', 'user', '082192293980', 'Jakarta, Indonesia', NULL, '$2y$12$uwu4CNX0C1F8nz.UDtLG3OE8YKd5pX3O1EGxYXQFJ6SNShv.m/mha', NULL, '2024-09-13 04:02:17', '2024-09-13 04:02:17'),
(12, 'abdbad', 'digiexpert.10002@gmail.com', 'user', '0849482', 'abdada', '2024-09-13 04:11:18', '$2y$12$UBgdCZ9q414fAuNQb1nQdeDuBTBe88S0SsNTRHd2bRA0qMK.vkd36', NULL, '2024-09-13 04:07:16', '2024-09-13 04:11:18'),
(13, 'iaiiabdia', 'digiexpert.10003@gmail.com', 'user', '381993831', 'adad', '2024-09-13 05:46:23', '$2y$12$HhKRrKDypuknNmd2obaiWORpyfWgRQMgWozUGewoDDgldU8maaxr2', NULL, '2024-09-13 05:43:44', '2024-09-13 05:46:23'),
(14, 'Ajabsk', 'digiexpert.10004@gmail.com', 'user', '08797879', 'Gatau', '2024-09-13 05:54:46', '$2y$12$05Cn29HdzyCZ.teWvX4hNuEB4FtBQjGVBgLYxiSJbeQBY7Cxvl0IG', NULL, '2024-09-13 05:54:26', '2024-09-13 05:54:46'),
(15, 'Naila', 'naiakedua@gmail.com', 'user', '082131083779', 'Jl. Pumpungan V no 2', '2024-09-13 06:29:18', '$2y$12$kB1L9UJNdOirOgbKjzetQ.cyQGMFTVGjxv0EeLzQqv95Y5KtCLD6W', NULL, '2024-09-13 06:28:40', '2024-09-13 06:29:18'),
(16, 'Muhammad Irvan Shandika', 'shandikamuhammadirvan@gmail.com', 'user', '085845561655', 'Jalan Veteran, Kota Yogyakarta, D.I Yogyakarta, Indonesia', '2024-09-13 09:39:50', '$2y$12$nJxkh1CJ8HxRuOzczU8gu.cQwsEEjVTfkMqZFMl6Pxzdt8uanatIC', NULL, '2024-09-13 09:38:53', '2024-09-13 09:39:50'),
(17, 'Keanu', 'keanuhabb@gmail.com', 'user', '08113080451', 'Puri Surya Jaya, Gedangan, Sidoarjo', '2024-09-13 21:04:11', '$2y$12$FNhuJ1qTnfyyDimG2oIYfO4IPvJNXivMFfvH2ureOsh8ixuShDqKu', NULL, '2024-09-13 21:03:40', '2024-09-13 21:04:11'),
(18, 'Samuel Arthur Gamalliel', 'samuelarthurmarpaung@gmail.com', 'user', '087868453883', 'jl sutorejo no 63', '2024-09-15 02:04:00', '$2y$12$YYbyiPJQ7uaUeZTjG0KB4.NvUh6lxDWg8PL4aHWi89jDdRIaExiJ.', NULL, '2024-09-15 02:03:40', '2024-09-15 02:04:00'),
(19, 'Najmy', 'najmywardhana123@gmail.com', 'user', '6283832652574', 'jalan', '2024-09-15 07:30:41', '$2y$12$HqLqMVZoYdyNtNar4LuSf.uubC31RCd/pQWReBSYrg9gAMwwoiSNC', NULL, '2024-09-15 07:30:31', '2024-09-15 07:30:41'),
(20, 'Afif Ridho', 'botolb512@gmail.com', 'user', '082385119649', 'Keputih', '2024-09-15 10:52:03', '$2y$12$9qWVeswP7YopuuPoupW6leQ4uTUhG1MVEsVKoUzXrLyTXyJFkb/IC', NULL, '2024-09-15 10:51:46', '2024-09-15 10:52:03'),
(21, 'Laily Fila', 'palate-waver0f@icloud.com', 'user', '081219503446', 'surabaya', '2024-09-15 21:53:28', '$2y$12$VfchWmWYLpzNc19H6k18a.u9ulUK7euHvJVZFWC7eMhspVVe.Mz.C', NULL, '2024-09-15 21:52:39', '2024-09-15 21:53:28'),
(22, 'Muhammad Fhandika Rafif', 'dika@atharva.co.id', 'user', '628158870904', 'Menara Pondok Indah 2nd Floor', '2024-09-16 02:57:08', '$2y$12$6CboJ8etYGSwaCAuIfD08.XTTJbS5bjAA08XS26poy3SSs8ndfJqC', NULL, '2024-09-16 02:56:05', '2024-09-16 02:57:08'),
(23, 'Afif Anshor', 'soblogsanjing83@gmail.com', 'user', '08814077849', 'Sout East Asia', '2024-09-16 18:01:49', '$2y$12$fncnGg62Fn4cBXKj6JQYk.qQYdeFC7ohsdXtXcj12.7uZOkeGZiTq', NULL, '2024-09-16 18:01:32', '2024-09-16 18:01:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
