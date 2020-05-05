-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2020 lúc 08:26 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnangcao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(2, 'kfKAxpYXGq', 'QDSKx6Upum', NULL, NULL),
(3, '45nDeZJ2gWduc', '1OdeSVp0OX', NULL, NULL),
(4, 'HpaiFFFrmmduc', 'YB753YgJLd', NULL, NULL),
(5, 'dCSsTEwkiAduc', 'KIXVwcWaTr', NULL, NULL),
(6, 'eRTFrj7myKduc', 'RuinZDxLGa', NULL, NULL),
(7, 'LMEZ7L2uEsduc', 'N5jV6FvRcI', NULL, NULL),
(8, 'ox2uUFhLuOduc', 'r4JWNBeVde', NULL, NULL),
(9, 'W3k8hIXaipduc', 'GQNomKhbeE', NULL, NULL),
(10, 'tpVoyY7Mx4duc', 'Boh1aPWb9F', NULL, NULL),
(11, 'fsUVrb7Riqduc', 'Vi6weaU89C', NULL, NULL),
(12, 'krvYx595vbduc', 'gN9Nuf8qvc', NULL, NULL),
(13, 'fn4Ms0vdKmduc', 'fpBS9cGddv', NULL, NULL),
(14, '8yJaey5zv2duc', '1NaRngksjo', NULL, NULL),
(15, 'ducjunxnu6cloduc', '9J4PNIFutu', NULL, NULL),
(16, 'ducylF7LbSLZ7duc', '01stgbQ2p9', NULL, NULL),
(17, 'duc311mEBjIEVduc', 'sKPXxviRjy', NULL, NULL),
(21, 'duc', 'asdasd', '2020-03-31 20:09:32', '2020-03-31 20:09:32'),
(23, 'duc', 'asdasd', '2020-05-02 06:02:52', '2020-05-02 06:02:52'),
(24, 'ads', 'ad', '2020-05-02 06:09:21', '2020-05-02 06:09:21'),
(25, 'dâ', 'adaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-05-02 06:09:38', '2020-05-02 06:09:38'),
(26, 'ádasd', '<h1>ádasas</h1>', '2020-05-02 06:09:52', '2020-05-02 06:09:52'),
(27, 'adas', '<p>ádasdsadadasdasdas</p><p>ádasdsssss</p>', '2020-05-02 06:22:08', '2020-05-02 06:28:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, NULL, 'sấd', '2020-05-01 08:56:31', '2020-05-01 08:56:31', NULL),
(2, 3, 1, 1, 'ấ', '2020-05-01 08:57:13', '2020-05-01 08:57:13', NULL),
(3, 3, 1, NULL, 'áda', '2020-05-01 08:57:17', '2020-05-01 08:57:17', NULL),
(4, 3, 1, 1, 'ấ', '2020-05-01 09:05:49', '2020-05-01 09:05:49', NULL),
(5, 3, 2, NULL, 'á', '2020-05-03 03:23:52', '2020-05-03 03:23:52', NULL),
(6, 3, 2, NULL, 's', '2020-05-03 03:24:03', '2020-05-03 03:24:03', NULL),
(7, 3, 1, NULL, 'á', '2020-05-03 03:25:08', '2020-05-03 03:25:08', NULL),
(8, 3, 1, 4, 'á', '2020-05-03 03:41:17', '2020-05-03 03:41:17', NULL),
(9, 3, 1, 1, 'sấ', '2020-05-03 03:47:25', '2020-05-03 03:47:25', NULL),
(10, 3, 1, 1, 'áaaaaaaaaaaaa', '2020-05-03 03:47:34', '2020-05-03 03:47:34', NULL),
(11, 3, 1, 10, 'sad', '2020-05-03 03:49:56', '2020-05-03 03:49:56', NULL),
(12, 3, 1, 10, 'duc', '2020-05-03 03:50:09', '2020-05-03 03:50:09', NULL),
(13, 3, 1, NULL, 'áda', '2020-05-03 03:50:23', '2020-05-03 03:50:23', NULL),
(14, 3, 1, 4, 'agvdhbsnkdmlasdkasdnaskdasndkasldnasldjaskldjasdlasjdasldjasldasjdlasjdasldlasldjkasld', '2020-05-03 03:52:48', '2020-05-03 03:52:48', NULL),
(15, 3, 10, NULL, 'a', '2020-05-05 08:59:59', '2020-05-05 08:59:59', NULL),
(16, 4, 10, 15, 'a', '2020-05-05 09:03:51', '2020-05-05 09:03:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'do', 'ducgets@gmail.com', 'áqsq', '2020-04-30 22:03:51', '2020-04-30 22:03:51'),
(2, 'do', 'ducgets@gmail.com', 'hg', '2020-04-30 22:05:02', '2020-04-30 22:05:02'),
(3, 'do', 'ducgets@gmail.com', 'á', '2020-04-30 22:06:28', '2020-04-30 22:06:28'),
(4, 'ása', 'admin@gmail.com', 'a', '2020-04-30 22:08:15', '2020-04-30 22:08:15'),
(5, 'do', 'ducgets@gmail.com', 'ádsad', '2020-05-01 02:51:40', '2020-05-01 02:51:40'),
(6, 'do', 'ducgets@gmail.com', 'ádsad', '2020-05-01 02:58:09', '2020-05-01 02:58:09'),
(7, 'do', 'ducgets@gmail.com', 'ád', NULL, NULL),
(8, 'do', 'ducgets@gmail.com', 'ádas', NULL, NULL),
(9, 'do', 'ducgets@gmail.com', 'ádas', NULL, NULL),
(10, 'do', 'ducgets@gmail.com', 'ád', NULL, NULL),
(11, 'do', 'ducgets@gmail.com', 'ád', NULL, NULL),
(12, 'ads', 'ducgets@gmail.com', 'ád', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_uploads`
--

INSERT INTO `image_uploads` (`id`, `filename`, `created_at`, `updated_at`, `product_id`) VALUES
(1, '1588399110338logo1.png', '2020-05-01 22:58:30', '2020-05-01 22:58:30', NULL),
(3, '1588399110344ssss.png', '2020-05-01 22:58:31', '2020-05-01 22:58:31', NULL),
(4, '1588400797903logo1.png', '2020-05-01 23:26:38', '2020-05-01 23:26:38', NULL),
(5, '1588400797906logo1x.png', '2020-05-01 23:26:38', '2020-05-01 23:26:38', NULL),
(6, '1588400797908ssss.png', '2020-05-01 23:26:38', '2020-05-01 23:26:38', NULL),
(7, '1588402486443logo1.png', '2020-05-01 23:54:46', '2020-05-01 23:54:46', 1),
(8, '1588402486446logo1x.png', '2020-05-01 23:54:46', '2020-05-01 23:54:46', 1),
(9, '1588402486448ssss.png', '2020-05-01 23:54:47', '2020-05-01 23:54:47', 1),
(10, 'logo1.png', '2020-05-02 01:53:00', '2020-05-02 01:53:00', NULL),
(11, 'logo1x.png', '2020-05-02 01:53:01', '2020-05-02 01:53:01', NULL),
(12, 'ssss.png', '2020-05-02 01:53:01', '2020-05-02 01:53:01', NULL),
(13, '1588412751622logo1.png', '2020-05-02 02:45:51', '2020-05-02 02:45:51', 1),
(14, '1588412751626logo1x.png', '2020-05-02 02:45:52', '2020-05-02 02:45:52', 1),
(15, '1588412751628ssss.png', '2020-05-02 02:45:52', '2020-05-02 02:45:52', 1),
(16, '1588412823660logo1.png', '2020-05-02 02:47:03', '2020-05-02 02:47:03', 1),
(18, '1588412823664ssss.png', '2020-05-02 02:47:04', '2020-05-02 02:47:04', 1),
(19, '1588412880294logo1.png', '2020-05-02 02:48:00', '2020-05-02 02:48:00', 2),
(20, '1588412880296logo1x.png', '2020-05-02 02:48:00', '2020-05-02 02:48:00', 2),
(21, '1588412880297ssss.png', '2020-05-02 02:48:01', '2020-05-02 02:48:01', 2),
(22, '1588412906609logo1x.png', '2020-05-02 02:48:26', '2020-05-02 02:48:26', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_17_155033_create_products_table', 1),
(4, '2020_03_17_155404_create_products_table', 2),
(5, '2020_03_25_151454_create_blog_table', 3),
(6, '2014_10_12_100000_create_password_resets_table', 4),
(7, '2020_04_01_034404_create_sessions_table', 4),
(8, '2020_04_01_132434_create_user_activations_', 5),
(9, '2020_04_01_132609_alter_users_table', 5),
(10, '2020_04_02_014845_add_image_at_to_users', 6),
(11, '2020_04_02_043948_add_price_at_to_products', 7),
(12, '2020_03_31_161723_create_teacher_table', 8),
(13, '2020_04_07_144705_create_posts_comments_table', 9),
(14, '2020_05_01_045428_create_contact_us_table', 9),
(15, '2020_05_02_055308_create_image_uploads_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body2` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `image`, `img`, `body1`, `body2`) VALUES
(1, 'ád', 'dâd', '2020-05-01 08:54:20', '2020-05-01 08:54:20', NULL, NULL, NULL, NULL, '', ''),
(2, 'ád', '123213', '2020-05-01 09:06:33', '2020-05-01 09:06:33', NULL, NULL, NULL, NULL, '', ''),
(3, 'sa', 's', '2020-05-01 23:50:56', '2020-05-01 23:50:56', NULL, NULL, NULL, NULL, '', ''),
(4, 'gia do gia dung', 'saaaaaaaaaaaaaaaaaa', '2020-05-04 09:10:33', '2020-05-04 09:10:33', NULL, NULL, NULL, NULL, '', ''),
(5, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '2020-05-04 09:11:49', '2020-05-04 09:11:49', NULL, NULL, NULL, NULL, '', ''),
(6, 'ads', 'aaa', '2020-05-04 09:13:57', '2020-05-04 09:13:57', NULL, 3, NULL, NULL, '', ''),
(7, 'aaaaaaaa', 'aaaaaaaaaaa', '2020-05-05 08:27:09', '2020-05-05 08:27:09', NULL, 3, NULL, NULL, '', ''),
(8, 'á', 'aaa', '2020-05-05 08:28:19', '2020-05-05 08:28:19', NULL, 3, 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', NULL, '', ''),
(9, 'aaaaaaaa', 'âaa', '2020-05-05 08:46:44', '2020-05-05 08:46:44', NULL, 3, 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', 'z1789264541741_ff7ac60c4120c06c330931517d3936e0.jpg', '', ''),
(10, 'áda', 'aaaaaaaa', '2020-05-05 08:57:31', '2020-05-05 08:57:31', NULL, 3, 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', 'z1789264541741_ff7ac60c4120c06c330931517d3936e0.jpg', 'aaaaaaaaaaaa', 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaisp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `giakm` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `detail`, `loaisp`, `gia`, `giakm`, `created_at`, `updated_at`, `image`, `status`) VALUES
(12, 'Giáo trình thị trường chứng khoán', NULL, 'Khoa ngân hàng', 'hafn', 50000, NULL, NULL, '2020-04-17 12:23:32', '', '1'),
(13, 'Giáo trình ngân hàng thương mại', NULL, 'Khoa ngân hàng', '1', 60000, NULL, NULL, NULL, 'giaotrinh3.PNG', '1'),
(14, 'Giáo trình nguyên lý kế toán', NULL, 'Khoa kế toán', '1', 55000, NULL, NULL, NULL, 'giaotrinh4.PNG', '1'),
(15, 'Giáo trình tiền tệ ngân hàng', NULL, 'Khoa ngân hàng', '1', 45000, NULL, NULL, NULL, 'giaotrinh5.PNG', ''),
(16, 'Giáo trình tài chính quốc tế', NULL, 'Khoa tài chính', '1', 35000, NULL, NULL, NULL, 'giaotrinh6.PNG', ''),
(17, 'Bút chì', NULL, '.', '2', 5000, NULL, NULL, '2020-04-07 11:05:20', 'butchi.PNG', ''),
(18, 'Bút bi', NULL, '.', '2', 3000, NULL, NULL, '2020-04-07 11:03:26', 'butbi.PNG', ''),
(19, 'Bút xóa', NULL, '.', '2', 15000, NULL, NULL, NULL, 'butxoa.PNG', ''),
(20, 'Kẹp tài liệu', NULL, '.', '2', 5000, NULL, NULL, NULL, 'kep.PNG', ''),
(21, 'Thước kẻ', NULL, '.', '2', 3000, NULL, NULL, NULL, 'thuoc.PNG', ''),
(22, 'Xôi', NULL, '.', '3', 20000, NULL, NULL, NULL, 'xoi.PNG', ''),
(23, 'Bánh bao', NULL, '.', '3', 7000, NULL, NULL, NULL, 'banh.PNG', ''),
(24, 'Bánh mỳ', NULL, '.', '3', 15000, NULL, NULL, NULL, 'banhmy.PNG', ''),
(25, 'Phở bò', NULL, '.', '3', 30000, NULL, NULL, '2020-04-07 11:14:35', 'pho1.PNG', ''),
(26, 'Bún chả', NULL, '.', '3', 30000, NULL, NULL, NULL, 'bun.PNG', ''),
(27, 'Quần thể dục', NULL, '.', '5', 100000, NULL, NULL, '2020-04-07 11:26:03', 'quan.PNG', ''),
(28, 'Áo thể thao', NULL, '.', '4', 100000, NULL, NULL, NULL, 'ao.PNG', ''),
(29, 'Giày thể thao', NULL, '.', '4', 200000, NULL, NULL, NULL, 'giay.PNG', ''),
(30, 'Áo thể thao', NULL, '.', '5', 100000, NULL, NULL, NULL, 'ao.PNG', ''),
(31, 'Giầy thể thao  2', NULL, '.', '4', 400000, NULL, NULL, NULL, 'giay2.PNG', ''),
(32, 'Áo thể thao', NULL, '.', '5', 70000, NULL, NULL, NULL, 'ao2.PNG', ''),
(33, 'Giầy đá bóng', NULL, '.', '4', 500000, NULL, NULL, '2020-04-26 07:12:15', '', 'a'),
(34, 'abccd', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'a'),
(35, 'trung12333', NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, '', 'a'),
(36, 'duc', NULL, 'a', '1', 30000, NULL, NULL, '2020-04-30 10:55:12', '', 'a'),
(37, 'adminss', NULL, 'ád', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(38, 'duc', NULL, 'ad', '1', 1, NULL, NULL, NULL, 'ssss.png', '1'),
(39, 'do', NULL, 'a', '1', 30000, NULL, NULL, NULL, 'ssss.png', '1'),
(40, 'duc', NULL, '1', '1', 1, NULL, NULL, NULL, 'logo1x.png', '1'),
(41, 'duc', NULL, '1á', '1', 1, NULL, NULL, NULL, 'logo1x.png', '1'),
(42, 'duc', NULL, '1á', '1', 1, NULL, NULL, NULL, 'logo1x.png', '1'),
(43, 'duc', NULL, '1á', '1', 1, NULL, NULL, NULL, 'logo1x.png', '1'),
(44, 'duc', NULL, 'yu', '1', 30000, NULL, NULL, NULL, '', '1'),
(45, 'da', NULL, 'ads', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(46, 'da', NULL, 'ads', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(47, 'da', NULL, 'ads', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(48, 'da', NULL, 'ads', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(49, 'da', NULL, 'ads', '1', 30000, NULL, NULL, NULL, 'logo1x.png', '1'),
(50, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(51, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(52, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(53, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(54, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(55, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(56, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(57, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(58, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(59, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(60, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(61, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(62, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(63, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(64, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(65, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(66, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(67, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(68, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(69, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(70, 'á', NULL, 'á', '1', 1, NULL, NULL, NULL, '', '1'),
(71, 'duc', NULL, 'a', '1', 1, NULL, NULL, NULL, 'logo1.png', '1'),
(72, 'duc', NULL, 'a', '1', 1, NULL, NULL, NULL, 'logo1.png', '1'),
(73, 'duc', NULL, 'a', '1', 1, NULL, NULL, NULL, 'logo1.png', '1'),
(74, 'á', NULL, 'sa', '1', 1, NULL, NULL, NULL, '', '1'),
(75, 'duc', NULL, '1', '1', 1, NULL, NULL, NULL, 'logo1x.png', '1'),
(76, 'duc', NULL, '1', '1', 1, NULL, NULL, NULL, '', '1'),
(77, 'duc', NULL, '1', '1', 1, NULL, NULL, NULL, '', '1'),
(78, 'duc', NULL, 'sa', '1', 1, NULL, NULL, NULL, '', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_category`
--

CREATE TABLE `products_category` (
  `id` int(20) UNSIGNED NOT NULL,
  `name_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_category`
--

INSERT INTO `products_category` (`id`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'giáo trình', NULL, NULL),
(3, 'trà chanh', NULL, '2020-04-17 09:22:41'),
(6, 'kẹo', NULL, NULL),
(8, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `created_at`, `updated_at`, `mon`, `image`) VALUES
(8, 'Thầy Chu Văn Huy', NULL, NULL, 'Lập trình web: Môn lập trình web đang nổi lên là một công việc được các bạn trẻ ưa chuộng. Xuất phát từ việc internet đang ngày càng chi phối mạnh mẽ đến cuộc sống con người ngày nay, lập trình web bỗng dưng trở thành một công việc lý tưởng cho các lập trình viên.', '1.PNG'),
(9, 'Thầy Đinh Trọng Hiếu', NULL, NULL, 'Môn hệ hỗ trợ và ra quyết định kinh doanh thông minh.Hệ hỗ trợ quyết định (tiếng Anh: Decision Support System, viết tắt: DSS) được thiết kế với mục đích rõ ràng là trợ giúp các hoạt động ra quyết định. Hệ thống này có rất nhiều ưu điểm nổi trội, cung cấp cho người dùng những thông tin hữu ích một cách linh hoạt.', '2.PNG'),
(10, 'Cô Bùi Hồng Nhung', NULL, NULL, 'Môn Cơ sở lập trình 2: Cơ sở lập trình là một trong những môn học nền tảng của Ngành Hệ thống Thông tin Quản lý. Môn học này cung cấp những kiến thức cơ bản và toàn diện về ngôn ngữ lập trình cùng những kỹ năng lập trình cơ bản. Mục tiêu chính của môn học là giúp người học hình thành nên tư duy lập trình và nắm vững phương pháp giải quyết vấn đề - bài toán thông qua việc sử dụng thành thạo ngôn ngữ lập trình, cụ thể là ngôn ngữ lập trình C#.', '3.PNG'),
(13, 'Ngô Thùy Linh', NULL, NULL, 'Môn hệ thống thông tin quản lý: Để hiểu rõ hệ thống thông tin quản lý là gì, chúng ta hãy cùng xem xét một khái niệm đơn giản nhất. Nói một cách ngắn gọn, hệ thống thông tin quản lý là một hệ thống thông tin mà tại đó các nhà quản lý công ty, doanh nghiệp có thể lấy được những thông tin cần thiết về việc vận hành, hoạt động của tổ chức một cách nhanh chóng, dễ dàng để phục vụ cho việc ra các quyết định của công ty.', '6.PNG'),
(14, 'Thầy Phan Thanh Đức', NULL, NULL, 'Môn học hệ thống thông tin quản lý: Ngày nay, với sự tăng trưởng mạnh mẽ của nền kinh tế và sự phát triển như vũ bão của công nghệ thông tin, các khối ngành, khoa về công nghệ thông tin ngày càng được chú trọng. Trong đó, ngành hệ thống thông tin quản lý đóng vai trò chủ chốt và thiết yếu. Tuy nhiên, hiện nay vẫn còn khá nhiều người chưa nắm rõ về ngành này.', '7.PNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `level` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieusu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `level`, `image`, `role`, `avatar`, `provider`, `provider_id`, `access_token`, `tieusu`) VALUES
(1, 'duc', 'lxc150896@gmail.com', NULL, '$2y$10$RRvFDkgxcQBrXZnq7RBGSeKJDlI1Wk229gmnaDBBKdVyOzRT7QxcO', NULL, NULL, NULL, 0, NULL, NULL, '0', NULL, NULL, NULL, NULL, ''),
(2, 'lxc150896@gmail.com', 'lxc@gmail.com', NULL, '$2y$10$6rDjMPLmzqxv5IZHfCmgwOzlzQv/y/4mB2CXg4z7F62.1wcigpWG.', NULL, NULL, '2020-04-30 11:02:34', 0, '0', 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', '1', NULL, NULL, NULL, NULL, 'đẹp trai vô đối'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$4Vc8.JRsWb3Lap2N0gwNW.6WlRPgHZWnXRjKf0PEuMmcmZx0yaFx.', NULL, NULL, '2020-04-30 03:32:30', 1, '1', 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', '1', NULL, NULL, NULL, NULL, 'Đức Đẹp Trai Vô Đối'),
(4, 'ducgets', 'ducgets@gmail.com', NULL, '$2y$10$CGDqItuvzlMlASmBMBy39.rWUF1xy3otBh/HNZYziMe2uPpFPRcue', NULL, '2020-03-31 21:36:26', '2020-03-31 21:36:26', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, ''),
(5, 'doquangduc', 'doquangduc@gmail.com', NULL, '$2y$10$ukD13WFXn/MCBdyjxn/y..kBAuQyPzsr0lUBtn7Xugfg2KuLmbNDa', NULL, '2020-03-31 21:39:23', '2020-03-31 21:39:23', 0, NULL, NULL, '0', NULL, NULL, NULL, NULL, ''),
(6, 'quangduc', 'quangduc@gmail.com', NULL, '$2y$10$M2gou8VJYT0ceADRvnYUqOvGZPdiQSkdZRp1w54AljVuhOmLBHkDS', NULL, '2020-03-31 21:41:46', '2020-03-31 21:41:46', 0, NULL, NULL, '', NULL, NULL, NULL, NULL, ''),
(7, 'saaaaaaa', 'ducgg1@gmail.com', NULL, '$2y$10$0EP2U9o1mpntA5gQeyAjo.rUVP2Nh6q8FnGAVdvjxXSvgdIEA3gxa', NULL, '2020-03-31 21:47:03', '2020-04-30 09:55:37', 0, '0', 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', '0', NULL, NULL, NULL, NULL, ''),
(8, 'ducgg', 'admin1@gmail.com', NULL, '$2y$10$9k3BnjE8GFRuGmbGKH569ey8b1uBZ6r3zzr.yfrsbmYz6.vdsIttu', NULL, '2020-04-01 06:50:06', '2020-04-30 04:31:33', 0, '1', 'z1789261051546_f9ac45b9566fa3652614667df59194bb.jpg', '0', NULL, NULL, NULL, NULL, ''),
(10, 'qưeqweqwe', 'admin111@gmail.com', NULL, '$2y$10$GLs9jAAKjtkaTLq8X3542OTCjjcFAoutfFa2Aw12urhOaovEHgFAe', NULL, '2020-05-02 07:01:39', '2020-05-02 07:01:39', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, ''),
(11, 'aqwqwe', 'admin11@gmail.com', NULL, '$2y$10$PuVFg47qUroMTr5APPTRHeub0m0pOfHnV07Lcyiw1nwvC49mczj.e', NULL, '2020-05-02 07:03:25', '2020-05-02 07:03:25', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, ''),
(12, 'ádadsdas', 'admi111n@gmail.com', NULL, '$2y$10$DVRxOdbfk6DznigHQ/jymuoquTkSHYGe.4lTW27o8hl5TCUZGkqsm', NULL, '2020-05-02 07:08:48', '2020-05-02 07:08:48', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, ''),
(13, 'sadasaaaa', 'admin1d@gmail.com', NULL, '$2y$10$oMFGVja1e6wcKr08nd1a4eeQoVSjYrOURp.Cf5beS/T2LpS2bfddC', NULL, '2020-05-02 07:16:23', '2020-05-02 07:16:23', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, ''),
(14, 'ádadasdas', 'adminccccccccccccccc@gmail.com', NULL, '$2y$10$Px0IYL6hHzV/O0GW64IFwexu5inAHsWJKJlSYPPN3E/1Q04YbS1NW', NULL, '2020-05-02 07:17:40', '2020-05-02 07:17:40', 0, '0', NULL, '0', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_activations`
--

CREATE TABLE `user_activations` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_activations`
--
ALTER TABLE `user_activations`
  ADD KEY `user_activations_activation_code_index` (`activation_code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `products_category`
--
ALTER TABLE `products_category`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
