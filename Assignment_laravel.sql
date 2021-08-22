-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 22, 2021 lúc 11:22 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Assignment_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `slug`, `value`, `id_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, '64GB', '64gb', '64GB', 2, 1, '2021-07-18 21:04:45', '2021-08-14 00:59:20', NULL),
(17, 'Vàng', 'vang', '#bfad95', 1, 1, '2021-07-18 21:08:12', '2021-07-29 16:49:14', '2021-07-29 16:49:14'),
(18, '128GB', '128gb', '128G', 2, 1, '2021-07-18 21:08:28', '2021-07-18 21:08:28', NULL),
(19, 'Xanh', 'xanh', '#2d4853', 1, 1, '2021-07-18 21:10:27', '2021-07-29 16:49:10', '2021-07-29 16:49:10'),
(20, 'Xám', 'xam', '#8f8a8e', 1, 1, '2021-07-18 21:11:59', '2021-07-29 16:49:05', '2021-07-29 16:49:05'),
(21, '256GB', '256gb', '256G', 2, 1, '2021-07-18 21:12:43', '2021-07-18 21:12:43', NULL),
(22, '512G', '512g', '512G', 2, 1, '2021-07-18 21:13:00', '2021-07-18 21:13:00', NULL),
(23, 'Trắng', 'trang', '#f1f3ed', 1, 1, '2021-07-18 21:13:40', '2021-07-29 16:49:19', '2021-07-29 16:49:19'),
(25, '1080 GB', '1080-gb', '1080GB', 2, 0, '2021-07-20 22:43:36', '2021-08-02 21:13:39', '2021-08-02 21:13:39'),
(26, 'VN/A', 'vna', 'VN/A', 3, 0, '2021-07-22 01:15:39', '2021-07-22 01:15:52', NULL),
(27, '38mm', '38mm', '38mm', 7, 1, '2021-07-22 01:18:56', '2021-07-22 01:20:41', NULL),
(28, '40mm', '40mm', '40mm', 7, 1, '2021-07-22 01:21:05', '2021-07-22 01:21:05', NULL),
(29, '44mm', '44mm', '44mm', 7, 1, '2021-07-22 01:21:16', '2021-07-22 01:21:16', NULL),
(30, '32 GB', '32-gb', '32 GB', 2, 0, '2021-08-13 23:48:27', '2021-08-13 23:52:26', '2021-08-13 23:52:26'),
(31, '16GB', '16gb', '16GB', 2, 0, '2021-08-14 00:06:33', '2021-08-14 00:06:41', '2021-08-14 00:06:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `image`, `content`, `link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Đồng  loạt giảm sâu 20% trên các đơn hàng', 'dong-loat-giam-sau-20-tren-cac-don-hang', '/storage/files/1/banner/banner1.jpeg', '<p>Hot sale sản phẩm vs mart joy 4</p>', 'google.com', 1, '2021-07-08 16:50:35', '2021-07-12 00:23:52', NULL),
(2, 'Apple watch seri 3 sale kịch sàn', 'apple-watch-seri-3-sale-kich-san', '/storage/files/1/banner/banner2.jpeg', '<p>Sale kịch s&agrave;n c&aacute;c mẫu apple watch seri 3 , gi&aacute; chỉ c&ograve;n 3.xxx.000</p>', 'gmail.com', 1, '2021-07-08 17:42:39', '2021-07-12 00:24:14', NULL),
(5, 'Đồng  loạt giảm sâu 20% trên các đơn hàng khi mua Apple Iphone 11', 'dong-loat-giam-sau-20-tren-cac-don-hang-khi-mua-apple-iphone-11', '/storage/files/1/banner/banner3.jpeg', '<p>sale kịch sản đấy anh em mua nhanh tay n&agrave;o !</p>', 'google.com', 1, '2021-07-20 20:23:43', '2021-07-29 00:34:55', NULL),
(6, 'Apple watch seri 3 sale kịch sàn duy nhất hôm nay nha anh em ơi haha', 'apple-watch-seri-3-sale-kich-san-duy-nhat-hom-nay-nha-anh-em-oi-haha', '/storage/files/1/banner/banner3.jpeg', '<p>duy nhất h&ocirc;m nay th&ocirc;i nha anh em ơi hahaha !</p>', 'google.comhaha', 1, '2021-07-20 20:26:09', '2021-08-20 16:32:59', '2021-08-20 16:32:59'),
(7, 'aaaaa', 'aaaaa', '/storage/files/1/banner/banner2.jpeg', '<p>aaaaaaa</p>', 'aaaaa', 1, '2021-08-20 15:31:23', '2021-08-20 15:31:31', '2021-08-20 15:31:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', 1, 0, '2021-07-02 16:43:40', '2021-07-02 16:43:40'),
(2, 'Laptop', 'laptop', 1, 0, '2021-07-02 16:44:07', '2021-07-02 16:44:07'),
(3, 'Iphone', 'iphone', 1, 1, '2021-07-02 16:44:38', '2021-07-29 01:08:03'),
(4, 'Samsung', 'samsung', 1, 1, '2021-07-03 22:04:29', '2021-07-29 01:08:11'),
(5, 'Macbook', 'macbook', 1, 2, '2021-07-03 22:12:44', '2021-07-03 22:12:44'),
(6, 'Dell', 'dell', 1, 2, '2021-07-03 22:15:04', '2021-07-03 22:15:04'),
(7, 'Xiaomi', 'xiaomi', 1, 1, '2021-07-03 22:15:27', '2021-07-04 17:23:47'),
(14, 'Đồng hồ', 'dong-ho', 1, 0, '2021-07-30 20:39:03', '2021-07-30 20:39:03'),
(15, 'Apple watch', 'apple-watch', 1, 14, '2021-07-30 20:39:30', '2021-07-30 20:39:30'),
(16, 'Samsung Galaxy', 'samsung-galaxy', 1, 14, '2021-07-30 20:40:40', '2021-08-13 23:42:27'),
(17, 'Asus', 'asus', 1, 2, '2021-07-30 20:42:05', '2021-07-30 20:42:05'),
(18, 'Tic Watch', 'tic-watch', 1, 14, '2021-07-30 20:42:55', '2021-07-30 22:05:03'),
(19, 'Phụ kiện', 'phu-kien', 1, 0, '2021-08-01 18:26:57', '2021-08-01 18:26:57'),
(20, 'Sạc dự phòng', 'sac-du-phong', 1, 19, '2021-08-01 18:27:17', '2021-08-01 18:27:17'),
(21, 'Tai nghe', 'tai-nghe', 1, 19, '2021-08-01 18:27:30', '2021-08-01 18:27:30'),
(22, 'Dây sạc , củ sạc', 'day-sac-cu-sac', 1, 19, '2021-08-01 18:33:01', '2021-08-01 18:33:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_posts`
--

INSERT INTO `category_posts` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chưa phân loại', 'chua-phan-loai', 1, '2021-07-08 22:10:33', '2021-07-15 00:36:58', NULL),
(2, 'Tin kinh tế', 'tin-kinh-te', 1, '2021-07-08 22:11:02', '2021-07-08 23:07:12', NULL),
(5, 'Tin công nghệ', 'tin-cong-nghe', 1, '2021-07-15 00:37:39', '2021-07-15 00:37:39', NULL),
(6, 'Tin xã hội', 'tin-xa-hoi', 1, '2021-07-19 13:41:21', '2021-08-05 18:11:01', NULL),
(7, 'Tin giáo dục', 'tin-giao-duc', 1, '2021-07-20 22:14:46', '2021-07-29 00:43:25', '2021-07-29 00:43:25'),
(8, 'Tin tuổi trẻ', 'tin-tuoi-tre', 0, '2021-07-23 20:58:22', '2021-07-23 20:58:22', NULL),
(9, 'Tin hot', 'tin-hot', 1, '2021-08-03 00:35:38', '2021-08-03 00:35:44', '2021-08-03 00:35:44'),
(10, 'Tin hay', 'tin-hay', 0, '2021-08-05 21:25:15', '2021-08-05 21:25:32', '2021-08-05 21:25:32'),
(11, 'Tin nóng', 'tin-nong', 0, '2021-08-12 19:56:00', '2021-08-14 00:19:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invioces`
--

CREATE TABLE `invioces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` double UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invioces`
--

INSERT INTO `invioces` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `content`, `total_price`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, NULL, 'Đào Hồng Nhung', 'chuloncobap2311@gmail.com', '0982345612', '39 Hồ Tùng Mậu - Hà Nội', 'Giao hàng cẩn thận giúp mình nha !', 32209000, 3, '2021-08-10 01:11:36', '2021-08-10 01:11:36', NULL),
(17, NULL, 'Lê Thị Hằng', 'anhtuyet2311001@gmail.com', '0859850012', '10 Khoái Châu - Hưng Yên', 'Giao hàng nhanh cho mình nha , ship vào hàng tầm 5h chiều đồ đi vì mình bẩn phải đi làm .', 9300000, 3, '2021-08-10 01:16:22', '2021-08-13 16:51:09', NULL),
(18, NULL, 'Trần Trung Kiên', 'anhndvph10550@fpt.edu.vn', '098335241', '189 Hải Giang - Hải Phòng', 'Giao hàng nhanh cho mình nha , mình rảnh từ 4h chiều đổ về', 14700000, 2, '2021-08-10 01:58:16', '2021-08-11 21:13:54', NULL),
(19, NULL, 'Lê Văn Lương', 'chuloncobap2311@gmail.com', '0345672223', '189 Hải Hậu - Nam Định', 'Đóng hàng cẩn thận cho mình nha', 18900000, 2, '2021-08-10 02:00:30', '2021-08-11 21:14:04', NULL),
(20, NULL, 'Lê Thị Bình', 'viettuyet23112001@gmail.com', '0971892778', '189 Hoài Đức - Hà Nội', 'Giao nhanh cho mình nha , mình rảnh từ 6h tối vì mình phải đi làm .', 659000, 1, '2021-08-10 02:22:15', '2021-08-10 02:22:15', NULL),
(24, NULL, 'Lê Mạnh Hùng', 'hungml2311@gmail.com', '0987676667', '189 Thiên Bình - Bắc Giang', 'Giao hàng nhanh cho mình nha', 8700000, 1, '2021-08-10 02:51:20', '2021-08-10 02:51:20', NULL),
(25, NULL, 'Trần thị Thanh', 'thanhlt23@gmail.com', '0923457772', '189 An Bình - Bình Thuận', 'Giáo hàng nhanh cho mình nha', 17800000, 1, '2021-08-10 02:53:51', '2021-08-10 02:53:51', NULL),
(26, NULL, 'Đỗ Trung Kiên', 'kiencv34@gmail.com', '09238977711', '182 Hoài Mỗ - Bắc Giang', 'Giáo hàng vào buổi sáng cho mình vì buổi chiều và tối mình bận .', 299000, 1, '2021-08-10 02:57:05', '2021-08-10 14:00:16', NULL),
(27, NULL, 'Phan Thanh Tùng', 'chuloncobap2311@gmail.com', '0345762267', '198 Hoài Liền - Bắc Kạn', 'Giao hàng cho tao', 18990000, 1, '2021-08-10 15:30:35', '2021-08-10 15:30:35', NULL),
(28, NULL, 'hâhhaha', 'chuloncobap2311@gmail.com', '0355755697', '189 Kiều Mai - Nam Từ Liêm - Bắc Giang', 'giao hang cho tao', 31200000, 1, '2021-08-10 15:49:35', '2021-08-10 15:49:35', NULL),
(29, 19, 'Ngô Hồng Nguyên', 'chuloncobap2311@gmail.com', '0987778998', '189 Cầu Giấy Hà Nội - Hà Nội', 'Giao hàng cho mình sau 6h tối nha . Mình cảm ơn .', 31960000, 3, '2021-08-15 02:41:59', '2021-08-15 19:49:07', NULL),
(31, 19, 'Ngô Hồng Nguyên', 'chuloncobap2311@gmail.com', '0987778998', '189 Cầu Giấy - Hà Nội', 'Giao hàng nhanh cho mình nha', 189000, 4, '2021-08-15 16:56:58', '2021-08-16 22:13:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invioce_details`
--

CREATE TABLE `invioce_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invioce_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invioce_details`
--

INSERT INTO `invioce_details` (`id`, `created_at`, `updated_at`, `invioce_id`, `product_id`, `image`, `price`, `quantity`, `deleted_at`, `option_id`, `attribute_id`) VALUES
(13, '2021-08-10 01:11:36', '2021-08-10 01:11:36', 16, 38, '/storage/files/1/product/thumb_IP12Pro_3.jpeg', 31960000, 1, NULL, 71, 22),
(14, '2021-08-10 01:11:36', '2021-08-10 01:11:36', 16, 28, '/storage/files/1/pk/dâyC2L.jpeg', 249000, 1, NULL, 50, NULL),
(15, '2021-08-10 01:16:22', '2021-08-10 01:16:22', 17, 36, '/storage/files/1/clock/thumb_SE-LTE_4.jpeg', 9300000, 1, NULL, 68, NULL),
(16, '2021-08-10 01:58:16', '2021-08-10 01:58:16', 18, 20, '/storage/files/1/product/thumb_iP11_5.jpeg', 14700000, 1, NULL, 31, 18),
(17, '2021-08-10 02:00:30', '2021-08-10 02:00:30', 19, 30, '/storage/files/1/clock/thumb_S6-TT_3.jpeg', 18900000, 1, NULL, 52, 29),
(18, '2021-08-10 02:22:15', '2021-08-10 02:22:15', 20, 27, '/storage/files/1/pk/coc-sac-iphone.png', 189000, 1, NULL, 49, NULL),
(19, '2021-08-10 02:22:15', '2021-08-10 02:22:15', 20, 37, '/storage/files/1/clock/thumb_Fit_e_1.jpeg', 470000, 1, NULL, 70, NULL),
(20, '2021-08-10 02:51:20', '2021-08-10 02:51:20', 24, 21, '/storage/files/1/product/thumb_A52-1.jpeg', 8700000, 1, NULL, 35, NULL),
(21, '2021-08-10 02:53:51', '2021-08-10 02:53:51', 25, 33, '/storage/files/1/product/thumb_S21-3.jpeg', 17800000, 1, NULL, 60, NULL),
(22, '2021-08-10 02:57:05', '2021-08-10 13:41:00', 26, 29, '/storage/files/1/pk/pisen.jpeg', 299000, 1, NULL, 51, NULL),
(23, '2021-08-10 15:30:35', '2021-08-10 15:30:35', 27, 18, '/storage/files/1/product/thumb_iP11_7.jpeg', 13400000, 1, NULL, 25, 16),
(24, '2021-08-10 15:30:35', '2021-08-10 15:30:35', 27, 23, '/storage/files/1/clock/thumb_AW3_1.jpeg', 5590000, 1, NULL, 39, 0),
(25, '2021-08-10 15:49:35', '2021-08-10 15:49:35', 28, 16, '/storage/files/1/product/thumb_IP12Pro_1.jpeg', 31200000, 1, NULL, 9, 21),
(26, '2021-08-15 02:41:59', '2021-08-15 02:41:59', 29, 38, '/storage/files/1/product/thumb_IP12Pro_3.jpeg', 31960000, 1, NULL, 71, 22),
(28, '2021-08-15 16:56:58', '2021-08-15 16:56:58', 31, 27, '/storage/files/1/pk/coc-sac-iphone.png', 189000, 1, NULL, 49, 0);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_25_143321_create_websettings_table', 1),
(5, '2021_06_28_204254_create_type_attributes_table', 2),
(6, '2021_06_28_204506_create_attributes_table', 3),
(8, '2021_07_02_161448_create_categories_table', 4),
(9, '2021_07_05_223119_update_collum_description_websettings_table', 5),
(10, '2021_07_07_231135_create_banners_table', 6),
(11, '2021_07_08_004904_create_slug_banners_table', 7),
(12, '2021_07_08_212609_create_category_posts_table', 8),
(13, '2021_07_08_223402_create_posts_table', 9),
(14, '2021_07_08_224732_create_slug_posts_table', 10),
(15, '2021_07_08_225112_create_slug_posts_table', 11),
(16, '2021_07_09_011700_update_short_description_content_posts_table', 12),
(17, '2021_07_11_172951_create_colum_users_table', 13),
(18, '2021_07_15_000959_drop_foregn_category_posts_id_posts', 14),
(19, '2021_07_15_001546_create_foreign_posts', 15),
(20, '2021_07_15_205841_create_table_products', 16),
(21, '2021_07_15_210225_create_table_images_product', 17),
(22, '2021_07_15_210913_create_images_products_table', 18),
(23, '2021_07_15_211253_create_tags_table', 19),
(27, '2021_07_15_211355_create_product_tag_table', 20),
(28, '2021_07_18_214227_change_id_attribute_table', 20),
(29, '2021_07_18_214711_add_amount_products_table', 21),
(30, '2021_07_20_014840_add_column_deleted_at_websettings_table', 22),
(31, '2021_07_20_202854_add_column_deleted_at_banners', 23),
(32, '2021_07_20_220539_add_column_deleted_at_category_posts_table', 24),
(33, '2021_07_20_221656_add_column_posts_table', 25),
(34, '2021_07_20_222921_add_column_deleted_at_type_attributes_table', 26),
(35, '2021_07_20_223702_add_column_deleted_attributes_table', 27),
(36, '2021_07_22_205706_drop_foreign_attribute', 28),
(37, '2021_07_22_210411_drop_foreign_category_posts_id_table', 29),
(38, '2021_07_22_210617_drop_foreign_category_id_and_user_id_products_table', 30),
(39, '2021_07_22_210909_drop_foreign_product_id_and_tang_id_product_tag_table', 31),
(40, '2021_07_22_211806_drop_column_products_table', 32),
(41, '2021_07_22_213311_add_column_products_table', 33),
(42, '2021_07_22_213906_create_product_attributes_table', 34),
(43, '2021_07_22_214050_add_column_product_attributes_table', 35),
(44, '2021_07_22_214242_create_product_options_table', 36),
(45, '2021_07_24_004551_add_column_deleted_at_tag_table', 37),
(46, '2021_07_26_225158_add_column_delete_at_product_option_table', 38),
(47, '2021_07_26_225837_add_column_deleted_at_product_tag_table', 39),
(48, '2021_08_04_030631_drop_colum_users_table', 40),
(49, '2021_08_04_031011_add_colum_deleted_at_users_table', 41),
(50, '2021_08_04_040104_create_roles_table', 42),
(51, '2021_08_04_040339_create_permissions_table', 42),
(52, '2021_08_04_040529_create_user_role_table', 42),
(55, '2021_08_04_040647_create_permission_role_table', 43),
(56, '2021_08_05_183328_add_column_status_role_table', 44),
(57, '2021_08_05_183546_add_column_deleted_at_role_table', 45),
(58, '2021_08_05_194444_add_colum_parent_id_and_status_table', 46),
(59, '2021_08_05_203109_add_column_key_permission_table', 47),
(60, '2021_08_06_181728_add_column_deleted_at_table', 48),
(61, '2021_08_07_013436_create_table_product_reviews', 49),
(62, '2021_08_07_020327_add_column_product_id_table', 50),
(63, '2021_08_09_213117_create_invioces_table', 51),
(64, '2021_08_09_213307_create_invioce_details_table', 51),
(65, '2021_08_09_215541_add_column_invioce_details_table', 52),
(66, '2021_08_10_022840_add_column_invioce_details', 53);

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
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `key_code`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Danh mục sản phẩm', 'Danh mục sản phẩm', NULL, 0, '2021-08-05 19:51:31', '2021-08-05 19:51:31', NULL),
(2, 'Thêm danh mục', 'Thêm danh mục', 'add_category', 1, NULL, '2021-08-06 18:24:48', NULL),
(3, 'Sửa danh mục', 'Sửa danh mục', 'edit_category', 1, '2021-08-05 19:53:23', '2021-08-06 18:24:36', NULL),
(4, 'Xoá danh mục', 'Xoá danh mục', 'delete_category', 1, '2021-08-05 19:53:23', '2021-08-05 19:53:23', NULL),
(5, 'Danh sách danh mục', 'Danh sách danh mục', 'list_category', 1, '2021-08-05 19:54:06', '2021-08-06 18:14:54', NULL),
(6, 'Quản lý sản phẩm', 'Nhân viên quản lí sản phẩm', NULL, 0, '2021-08-06 15:53:50', '2021-08-06 15:53:50', NULL),
(8, 'Quản lí người dùng', 'Nhân viên quản lí người dùng', NULL, 0, '2021-08-06 15:59:28', '2021-08-06 15:59:28', NULL),
(9, 'Quản lí chức vụ', 'Nhân viên quản lí chức vụ', NULL, 0, '2021-08-06 16:02:14', '2021-08-06 16:02:14', NULL),
(10, 'Quản lí quyền', 'Nhân viên quản lí quyền', NULL, 0, '2021-08-06 16:02:58', '2021-08-06 16:02:58', NULL),
(11, 'Quản lí loại thuộc tính', 'Nhân viên quản lí loại thuộc tính', NULL, 0, '2021-08-06 16:03:58', '2021-08-06 16:03:58', NULL),
(12, 'Quản lí thuộc tính', 'Nhân viên quản lí thuộc tính', NULL, 0, '2021-08-06 16:04:21', '2021-08-06 16:04:21', NULL),
(13, 'Quản lí thông tin', 'Nhân viên quản lí thông tin', NULL, 0, '2021-08-06 16:04:46', '2021-08-06 16:04:46', NULL),
(14, 'Quản lí danh mục bài viết', 'Nhân viên quản lí danh mục bào viết', NULL, 0, '2021-08-06 16:06:11', '2021-08-06 16:06:11', NULL),
(15, 'Quản lí bài viết', 'Nhân viên quản lí bài viết', NULL, 0, '2021-08-06 16:06:37', '2021-08-06 16:06:37', NULL),
(16, 'Quản lí slide ảnh', 'Nhân viên quản lí slide ảnh', NULL, 0, '2021-08-06 16:06:58', '2021-08-06 16:06:58', NULL),
(17, 'Thêm sản phẩm', 'Thêm sản phẩm', 'add_product', 6, '2021-08-06 16:08:18', '2021-08-06 18:15:20', NULL),
(18, 'Sửa sản phẩm', 'Sửa sản phẩm', 'edit_product', 6, '2021-08-06 16:08:51', '2021-08-06 18:15:28', NULL),
(19, 'Xoá sản phẩm', 'Xoá sản phẩm', 'delete_product', 6, '2021-08-06 16:09:16', '2021-08-06 18:15:36', NULL),
(21, 'Danh sách sản phẩm', 'Danh sách sản phẩm', 'list_product', 6, '2021-08-06 18:20:29', '2021-08-06 18:20:36', NULL),
(22, 'Thêm người dùng', 'Thêm người dùng', 'add_user', 8, '2021-08-09 01:51:53', '2021-08-09 01:51:53', NULL),
(23, 'Sửa người dùng', 'Sửa người dùng', 'edit_user', 8, '2021-08-09 01:52:18', '2021-08-09 01:52:18', NULL),
(24, 'Xoá người dùng', 'Xoá người dùng', 'delete_user', 8, '2021-08-09 01:52:41', '2021-08-09 01:52:41', NULL),
(25, 'Danh sách người dùng', 'Danh sách người dùng', 'list_user', 8, '2021-08-09 01:53:33', '2021-08-09 01:53:33', NULL),
(26, 'Thêm chức vụ', 'Thêm chức vụ', 'add_role', 9, '2021-08-09 01:53:51', '2021-08-09 01:53:51', NULL),
(27, 'Sửa chức vụ', 'Sửa chức vụ', 'edit_role', 9, '2021-08-09 01:54:10', '2021-08-09 01:54:10', NULL),
(28, 'Xoá chức vụ', 'Xoá chức vụ', 'delete_role', 9, '2021-08-09 01:54:37', '2021-08-09 01:54:37', NULL),
(29, 'Danh sách chức vụ', 'Danh sách chức vụ', 'list_role', 9, '2021-08-09 01:55:15', '2021-08-09 01:55:15', NULL),
(30, 'Thêm quyền', 'Thêm quyền', 'add_permission', 10, '2021-08-09 01:57:41', '2021-08-09 01:57:41', NULL),
(31, 'Sửa quyền', 'Sửa quyền', 'edit_permission', 10, '2021-08-09 01:58:02', '2021-08-09 01:58:02', NULL),
(32, 'Xoá quyền', 'Xoá quyền', 'delete_permission', 10, '2021-08-09 01:58:27', '2021-08-09 01:58:27', NULL),
(33, 'Thêm loại thuộc tính', 'Thêm loại thuộc tính', 'add_type_attribute', 11, '2021-08-09 01:59:12', '2021-08-09 01:59:12', NULL),
(34, 'Sửa loại thuộc tính', 'Sửa loại thuộc tính', 'edit_type_attribute', 11, '2021-08-09 01:59:32', '2021-08-09 01:59:32', NULL),
(35, 'Xoá loại thuộc tính', 'Xoá loại thuộc tính', 'delete_type_attribute', 11, '2021-08-09 02:00:08', '2021-08-09 02:00:08', NULL),
(36, 'Danh sách loại', 'Danh sách loại thuộc tính', 'list_type_attribute', 11, '2021-08-09 02:00:53', '2021-08-09 02:04:49', NULL),
(37, 'Danh sách quyền', 'Danh sách quyền', 'list_permission', 10, '2021-08-09 02:01:15', '2021-08-09 02:01:15', NULL),
(38, 'Thêm thuộc tính', 'Thêm thuộc tính', 'add_attribute', 12, '2021-08-09 02:01:48', '2021-08-09 02:01:48', NULL),
(39, 'Sửa thuộc tính', 'Sửa thuộc tính', 'edit_attribute', 12, '2021-08-09 02:02:11', '2021-08-09 02:02:11', NULL),
(40, 'Xoá thuộc tính', 'Xoá thuộc tính', 'delete_attribute', 12, '2021-08-09 02:02:35', '2021-08-09 02:02:35', NULL),
(41, 'Thêm thông tin', 'Thêm thông tin', 'add_websetting', 13, '2021-08-09 02:03:01', '2021-08-09 02:03:01', NULL),
(42, 'Sửa thông tin', 'Sửa thông tin', 'edit_websetting', 13, '2021-08-09 02:03:22', '2021-08-09 02:03:22', NULL),
(43, 'Xoá thông tin', 'Xoá thông tin', 'delete_websetting', 13, '2021-08-09 02:03:52', '2021-08-09 02:03:52', NULL),
(44, 'Danh sách thông tin', 'Danh sách thông tin', 'list_websetting', 13, '2021-08-09 02:04:33', '2021-08-09 02:04:33', NULL),
(45, 'Danh sách thuộc tính', 'Danh sách thuộc tính', 'list_attribute', 12, '2021-08-09 02:05:23', '2021-08-09 02:05:23', NULL),
(46, 'Thêm danh mục bv', 'Thêm danh mục bv', 'add_category_post', 14, '2021-08-09 02:06:07', '2021-08-09 02:06:07', NULL),
(47, 'Sửa danh mục bv', 'Sửa danh mục bv', 'edit_category_post', 14, '2021-08-09 02:06:26', '2021-08-09 02:06:26', NULL),
(48, 'Xoá danh mục bv', 'Xoá danh mục bv', 'delete_category_post', 14, '2021-08-09 02:07:01', '2021-08-09 02:11:14', NULL),
(49, 'Danh sách danh mục bv', 'Danh sách danh mục bv', 'list_category_post', 14, '2021-08-09 02:07:25', '2021-08-09 02:07:25', NULL),
(50, 'Thêm bài viết', 'Thêm bài viết', 'add_post', 15, '2021-08-09 02:07:49', '2021-08-09 02:07:49', NULL),
(51, 'Sửa bài viết', 'Sửa bài viết', 'edit_post', 15, '2021-08-09 02:08:08', '2021-08-09 02:08:08', NULL),
(52, 'Xoá bài viết', 'Xoá bài viết', 'delete_post', 15, '2021-08-09 02:08:29', '2021-08-09 02:08:29', NULL),
(53, 'Danh sách bài viết', 'Danh sách bài viết', 'list_post', 15, '2021-08-09 02:08:52', '2021-08-09 02:08:52', NULL),
(54, 'Thêm slide', 'Thêm slide', 'add_slide', 16, '2021-08-09 02:09:14', '2021-08-09 02:09:14', NULL),
(55, 'Sửa slide ảnh', 'Sửa slide ảnh', 'edit_slide', 16, '2021-08-09 02:09:35', '2021-08-09 02:09:35', NULL),
(56, 'Xoá slide ảnh', 'Xoá slide ảnh', 'delete_slide', 16, '2021-08-09 02:09:57', '2021-08-09 02:09:57', NULL),
(57, 'Danh sách slide', 'Danh sách slide', 'list_slide', 16, '2021-08-09 02:10:43', '2021-08-09 02:10:43', NULL),
(58, 'Quản lí đơn hàng', 'Quản lí đơn hàng', NULL, 0, '2021-08-11 21:43:23', '2021-08-11 21:43:23', NULL),
(59, 'Sửa đơn hàng', 'Sửa đơn hàng', 'edit_invioce', 58, '2021-08-11 21:44:05', '2021-08-11 21:44:05', NULL),
(60, 'Xoá đơn hàng', 'Xoá đơn hàng', 'delete_invioce', 58, '2021-08-11 21:44:24', '2021-08-11 21:44:24', NULL),
(61, 'Danh sách đơn hàng', 'Danh sách đơn hàng', 'list_invioce', 58, '2021-08-11 21:44:42', '2021-08-11 21:44:42', NULL),
(66, 'Vào Admin', 'Vào Admin', 'Vào Admin', 0, '2021-08-14 16:11:29', '2021-08-14 16:11:29', NULL),
(67, 'admin_access', 'admin_access', 'admin_access', 66, '2021-08-14 16:11:45', '2021-08-14 16:11:45', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, NULL, NULL),
(2, 7, 3, NULL, NULL),
(3, 7, 4, NULL, NULL),
(5, 10, 2, NULL, NULL),
(10, 4, 17, NULL, NULL),
(11, 4, 18, NULL, NULL),
(12, 4, 19, NULL, NULL),
(13, 4, 21, NULL, NULL),
(14, 1, 2, NULL, NULL),
(15, 1, 3, NULL, NULL),
(16, 1, 4, NULL, NULL),
(17, 1, 5, NULL, NULL),
(18, 1, 17, NULL, NULL),
(19, 1, 18, NULL, NULL),
(20, 1, 19, NULL, NULL),
(21, 1, 21, NULL, NULL),
(22, 3, 46, NULL, NULL),
(23, 3, 47, NULL, NULL),
(24, 3, 48, NULL, NULL),
(25, 3, 49, NULL, NULL),
(26, 3, 50, NULL, NULL),
(27, 3, 51, NULL, NULL),
(28, 3, 52, NULL, NULL),
(29, 3, 53, NULL, NULL),
(30, 4, 2, NULL, NULL),
(31, 4, 3, NULL, NULL),
(32, 4, 4, NULL, NULL),
(33, 4, 5, NULL, NULL),
(34, 4, 33, NULL, NULL),
(35, 4, 34, NULL, NULL),
(36, 4, 35, NULL, NULL),
(37, 4, 36, NULL, NULL),
(38, 4, 38, NULL, NULL),
(39, 4, 39, NULL, NULL),
(40, 4, 40, NULL, NULL),
(41, 4, 45, NULL, NULL),
(42, 1, 22, NULL, NULL),
(43, 1, 23, NULL, NULL),
(44, 1, 24, NULL, NULL),
(45, 1, 25, NULL, NULL),
(46, 1, 26, NULL, NULL),
(47, 1, 27, NULL, NULL),
(48, 1, 28, NULL, NULL),
(49, 1, 29, NULL, NULL),
(50, 1, 30, NULL, NULL),
(51, 1, 31, NULL, NULL),
(52, 1, 32, NULL, NULL),
(53, 1, 37, NULL, NULL),
(54, 1, 33, NULL, NULL),
(55, 1, 34, NULL, NULL),
(56, 1, 35, NULL, NULL),
(57, 1, 36, NULL, NULL),
(58, 1, 38, NULL, NULL),
(59, 1, 39, NULL, NULL),
(60, 1, 40, NULL, NULL),
(61, 1, 45, NULL, NULL),
(62, 1, 41, NULL, NULL),
(63, 1, 42, NULL, NULL),
(64, 1, 43, NULL, NULL),
(65, 1, 44, NULL, NULL),
(66, 1, 46, NULL, NULL),
(67, 1, 47, NULL, NULL),
(68, 1, 48, NULL, NULL),
(69, 1, 49, NULL, NULL),
(70, 1, 50, NULL, NULL),
(71, 1, 51, NULL, NULL),
(72, 1, 52, NULL, NULL),
(73, 1, 53, NULL, NULL),
(74, 1, 54, NULL, NULL),
(75, 1, 55, NULL, NULL),
(76, 1, 56, NULL, NULL),
(77, 1, 57, NULL, NULL),
(78, 1, 59, NULL, NULL),
(79, 1, 60, NULL, NULL),
(80, 1, 61, NULL, NULL),
(81, 4, 67, NULL, NULL),
(82, 3, 67, NULL, NULL),
(83, 1, 67, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `highlight` tinyint(4) NOT NULL DEFAULT 0,
  `category_posts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `short_description`, `content`, `image`, `status`, `highlight`, `category_posts_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'iPhone 13 series: Nhiều nâng cấp nổi bật, thiết kế mới, giá chỉ từ 16 triệu đồng', 'iphone-13-series-nhieu-nang-cap-noi-bat-thiet-ke-moi-gia-chi-tu-16-trieu-dong', '<p>Nếu kh&ocirc;ng c&oacute; g&igrave; thay đổi,&nbsp;<a href=\"http://www.thegioididong.com/apple\" target=\"_blank\">Apple</a>&nbsp;sẽ ra mắt iPhone 13 series v&agrave;o th&aacute;ng 9 hoặc th&aacute;ng 10 năm nay. Bạn c&oacute; h&aacute;o hức săn đ&oacute;n n&oacute; h&ocirc;ng n&agrave;o ?&nbsp;</p>', '<p><strong>1. Cấu h&igrave;nh iPhone 13 mini</strong></p>\r\n\r\n<p>Mặc d&ugrave;&nbsp;<a href=\"http://www.thegioididong.com/dtdd/iphone-12-mini\" target=\"_blank\">iPhone 12 mini</a>&nbsp;kh&ocirc;ng mang lại doanh thu tốt, nhưng Apple vẫn tiếp tục tung ra d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;nhỏ gọn của m&igrave;nh. iPhone 13 mini sở hữu m&agrave;n h&igrave;nh OLED 5.4 inch với tần số qu&eacute;t 60 Hz, thiết kế tai thỏ vẫn được giữ v&agrave; đặc biệt sẽ được tinh chỉnh nhỏ gọn hơn.</p>\r\n\r\n<p>M&aacute;y trang bị vi xử l&yacute; Apple A15 Bionic ho&agrave;n to&agrave;n mới c&ugrave;ng bộ nhớ trong cao nhất l&agrave; 256 GB, ngo&agrave;i ra&nbsp;<a href=\"http://www.thegioididong.com/dtdd/iphone-13-mini\" target=\"_blank\">iPhone 13 mini</a>&nbsp;cũng sở hữu vi&ecirc;n pin 2.406 mAh. Thiết bị c&oacute; c&aacute;ch sắp xếp camera sau theo đường ch&eacute;o ho&agrave;n to&agrave;n mới bao gồm 2 ống k&iacute;nh c&ugrave;ng c&ocirc;ng nghệ h&igrave;nh ảnh Sensor Shift đặc trưng tr&ecirc;n d&ograve;ng&nbsp;<a href=\"http://www.thegioididong.com/dtdd/iphone-12\" target=\"_blank\">iPhone 12</a>.</p>\r\n\r\n<p><strong><strong>2. Cấu h&igrave;nh iPhone 13</strong></strong></p>\r\n\r\n<p><img alt=\"\" src=\"/storage/files/1/post/post4-d.jpeg\" style=\"height:300px; width:450px\" /></p>\r\n\r\n<p><a href=\"http://www.thegioididong.com/dtdd/iphone-13\" target=\"_blank\">iPhone 13</a>&nbsp;ti&ecirc;u chuẩn sẽ c&oacute; m&agrave;n h&igrave;nh OLED 6.1 inch v&agrave; tần số qu&eacute;t 60 Hz, phần notch tr&ecirc;n thiết bị cũng được l&agrave;m nhỏ hơn so với người tiền nhiệm. iPhone 13 được trang bị chip Apple A15 Bionic mạnh mẽ c&ugrave;ng bộ nhớ trong l&ecirc;n đến 256 GB, vi&ecirc;n pin của m&aacute;y c&oacute; dung lượng 3.095 mAh.</p>\r\n\r\n<p><strong><strong><strong>3. Cấu h&igrave;nh iPhone 13 Pro</strong></strong></strong></p>\r\n\r\n<p><a href=\"http://www.thegioididong.com/dtdd/iphone-13-pro\" target=\"_blank\">iPhone 13 Pro</a>&nbsp;nổi bật với thiết kế vừa tay nhưng sở hữu cấu h&igrave;nh kh&ocirc;ng thua thiệt nhiều so với d&ograve;ng Pro Max. M&aacute;y c&oacute; m&agrave;n h&igrave;nh OLED 6.1 inch c&ugrave;ng c&ocirc;ng nghệ ProMotion, đ&acirc;y l&agrave; một trong những thiết bị đầu ti&ecirc;n của nh&agrave; T&aacute;o c&oacute; tần số qu&eacute;t m&agrave;n h&igrave;nh 120 Hz.</p>\r\n\r\n<p>Cung cấp sức mạnh cho m&aacute;y vẫn l&agrave; vi xử l&yacute; Apple A15 Bionic ho&agrave;n to&agrave;n mới, sở hữu vi&ecirc;n pin 3.095 mAh c&ugrave;ng bộ nhớ trong l&ecirc;n đến 512 GB. C&aacute;ch bố tr&iacute; camera tr&ecirc;n iPhone 13 Pro kh&ocirc;ng kh&aacute;c g&igrave; so với phi&ecirc;n bản tiền nhiệm với 3 camera v&agrave; 1 cảm biến LiDAR.</p>\r\n\r\n<p><br />\r\nGi&aacute; của d&ograve;ng iPhone 13 được dự kiến như sau:</p>\r\n\r\n<p>* iPhone 13 mini: 699 USD (khoảng 16 triệu đồng).</p>\r\n\r\n<p>* iPhone 13: 799 USD (khoảng 18.3 triệu).</p>\r\n\r\n<p>* iPhone 13 Pro: 999 USD (khoảng 23 triệu đồng).</p>\r\n\r\n<p>* iPhone 13 Pro Max: 1.099 USD (khoảng 25.3 triệu đồng).</p>\r\n\r\n<p><strong><strong><strong>Bạn c&oacute; đang mong chờ d&ograve;ng iPhone 13?</strong></strong></strong><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>', '/storage/files/1/post/post4.jpeg', 1, 1, 2, '2021-07-09 02:36:37', '2021-08-02 02:47:49', '2021-08-02 02:47:49'),
(4, 'Săn sale sinh nhật sắm liền 2 chiếc Galaxy Note giảm cực sốc nha', 'san-sale-sinh-nhat-sam-lien-2-chiec-galaxy-note-giam-cuc-soc-nha', '<p>Mừng sinh nhật, săn sale vui vẻ với bộ đ&ocirc;i&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-note-20\" target=\"_blank\">Galaxy Note 20</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-note-10-plus\" target=\"_blank\">Galaxy Note 10+</a>&nbsp;giảm sốc l&ecirc;n đến 8 triệu đồng.</p>', '<p>M&aacute;y được trang bị b&uacute;t S Pen l&agrave; linh hồn của d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung-galaxy-note\" target=\"_blank\">Galaxy Note</a>, ROM 256 GB k&egrave;m RAM 12 GB th&igrave; deal n&agrave;y chắc chắn sẽ nhận được sự gật đầu của tất cả mọi người.</p>\r\n\r\n<p><strong>Thời gian khuyến m&atilde;i:</strong>&nbsp;Đến hết 31/7/2021.</p>\r\n\r\n<p><strong>Lưu &yacute;:&nbsp;</strong>Khuyến m&atilde;i c&oacute; thể kết th&uacute;c sớm trước thời hạn nếu hết số lượng sản phẩm.</p>\r\n\r\n<p><strong>Samsung Galaxy Note 20 giảm 8.000.000 đồng</strong></p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/220522/samsung-galaxy-note-20-ultra-trang-600x600-1-200x200.jpg\" style=\"width:50%\" /></p>\r\n\r\n<p>M&agrave;n h&igrave;nh Samsung Galaxy Note 20 sử dụng tấm nền Super AMOLED Plus 60 Hz cho m&agrave;u sắc ch&acirc;n thực, khung h&igrave;nh sống động. M&aacute;y sở hữu camera trước 10 MP trong thiết kế nốt ruồi gi&uacute;p khung m&agrave;n h&igrave;nh 6.7 inch được sử dụng tối đa.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, nhờ chip xử l&yacute; Exynos 990 8 nh&acirc;n, RAM 8 GB v&agrave; ROM 256 GB, người d&ugrave;ng c&oacute; thể sử dụng nhiều t&aacute;c vụ c&ugrave;ng l&uacute;c một c&aacute;ch dễ d&agrave;ng, mượt m&agrave;. Đặc biệt, cụm camera sau si&ecirc;u xịn s&ograve; với 1 camera ch&iacute;nh 64 MP, camera g&oacute;c si&ecirc;u rộng 12 MP v&agrave; camera tele 12 MP hỗ trợ zoom đến 30x.<br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '/storage/files/1/post/post1.jpeg', 1, 1, 5, '2021-07-09 20:45:18', '2021-08-03 00:38:12', '2021-08-03 00:38:12'),
(10, 'Ngắm iPhone 13 Pro cực hút trong phiên bản màu nâu đồng lạ mắt', 'ngam-iphone-13-pro-cuc-hut-trong-phien-ban-mau-nau-dong-la-mat', '<p>B&ecirc;n cạnh t&iacute;nh năng, người d&ugrave;ng cũng rất h&aacute;o hức chờ xem c&aacute;c m&agrave;u sắc mới của d&ograve;ng iPhone năm nay. Mới đ&acirc;y, h&igrave;nh ảnh iPhone 13 Pro vừa được tiết lộ với m&agrave;u n&acirc;u động lạ mắt khiến người d&ugrave;ng quyết định xuống tiền ngay lập tức ....</p>', '<h2><strong>iPhone 13 Pro sẽ c&oacute; t&ugrave;y chọn m&agrave;u n&acirc;u đồng?</strong></h2>\r\n\r\n<p>Đ&oacute; sẽ l&agrave; c&acirc;u hỏi m&agrave; kh&ocirc;ng ai c&oacute; thể trả lời chắc chắn, tất nhi&ecirc;n l&agrave; trừ Apple. V&igrave; đến thời điểm hiện tại, mọi th&ocirc;ng tin đều chỉ l&agrave; r&ograve; rỉ. Nhưng nếu iPhone 13 thực sự c&oacute; phi&ecirc;n bản m&agrave;u n&acirc;u đồng, đ&acirc;y sẽ l&agrave; một thay đổi lớn của Apple. Bạn nghĩ sao về một chiếc iPhone m&agrave;u sắc như thế n&agrave;y?</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/2-30.jpeg\" style=\"height:316px; width:600px\" /></p>\r\n\r\n<p>Theo c&aacute;c h&igrave;nh ảnh r&ograve; rỉ, iPhone 13 vẫn sẽ c&oacute; phần notch nhỏ ở m&agrave;n h&igrave;nh. Trong khi đ&oacute; thiết kế nh&igrave;n chung kh&ocirc;ng c&oacute; thay đổi nhiều. Theo r&ograve; rỉ, nếu iPhone 13 thực sự c&oacute; m&agrave;u n&acirc;u đồng, n&oacute; sẽ chỉ d&agrave;nh cho hai phi&ecirc;n bản cao cấp l&agrave; Pro v&agrave; Pro Max. Bạn c&oacute; th&iacute;ch t&ugrave;y chọn m&agrave;u n&agrave;y kh&ocirc;ng?</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/1-40 (1).jpeg\" style=\"height:678px; width:600px\" /></p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>iPhone 13 Pro lộ c&aacute;c phi&ecirc;n bản m&agrave;u sắc, V&agrave;ng Hồng hay V&agrave;ng Ho&agrave;ng H&ocirc;n thu h&uacute;t hơn? (cập nhật ng&agrave;y 29/7)</strong></span></h2>\r\n\r\n<p>Mặc d&ugrave; chưa r&otilde; liệu d&ograve;ng iPhone 2021 sẽ được đặt t&ecirc;n l&agrave; g&igrave;, l&agrave; iPhone 12s hay iPhone 13. Nhưng The Apple Hub đ&atilde; chia sẻ những m&agrave;u sắc mới được cho l&agrave; của d&ograve;ng iPhone năm nay.</p>\r\n\r\n<h2><strong>Hai phi&ecirc;n bản m&agrave;u sắc được mong đợi nhất của iPhone 2021</strong></h2>\r\n\r\n<p>H&igrave;nh ảnh The Apple Hub đăng tải cho thấy iPhone 12s Pro (iPhone 13 Pro) với bốn phi&ecirc;n bản m&agrave;u sắc bao gồm Đen, Bạc, V&agrave;ng Hồng v&agrave; V&agrave;ng Ho&agrave;ng H&ocirc;n. Mặc d&ugrave; m&agrave;u V&agrave;ng Hồng đ&atilde; từng ra mắt với iPhone 6s nhưng khi xuất hiện với iPhone 13 vẫn rất mới lạ, đặc biệt thu h&uacute;t chị em ph&aacute;i đẹp. C&ograve;n m&agrave;u V&agrave;ng Ho&agrave;ng H&ocirc;n chưa từng ra mắt v&agrave; chỉ xuất hiện trong concept nhưng đ&atilde; rất được iFan mong chờ. M&agrave;u Đen v&agrave; Bạc trong bộ tứ th&igrave; đ&atilde; qu&aacute; quen thuộc với người d&ugrave;ng.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/mau-iphone-13-pro-2.jpeg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:center\">C&oacute; thể thấy, iPhone 12s Pro (iPhone 13 Pro) vẫn sở hữu thiết kế tương tự như iPhone 12 Pro. Vẫn l&agrave; khung viền phẳng với c&aacute;c g&oacute;c bo cong, hệ thống ba camera c&ugrave;ng đ&egrave;n Flash LED ph&iacute;a sau.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/mau-iphone-13-pro-3.png\" style=\"height:590px; width:600px\" /></p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>Chi tiết k&iacute;ch thước notch của iPhone 13 series được tiết lộ&nbsp;(Cập nhật ng&agrave;y 24/07)</strong></span></h2>\r\n\r\n<p>Từ thế hệ iPhone X đến nay, Apple vẫn giữ nguy&ecirc;n k&iacute;ch thước notch. Tuy nhi&ecirc;n, c&aacute;c mẫu iPhone mới sắp ra mắt đang được kỳ vọng c&oacute; &ldquo;tai thỏ&rdquo; nhỏ gọn hơn so với thế hệ trước.</p>\r\n\r\n<p>Mới đ&acirc;y, leaker nổi tiếng LeaksApplePro đ&atilde; x&aacute;c nhận rằng, phần &ldquo;tai thỏ&rdquo; của iPhone 13 sẽ nhỏ hơn nhiều iPhone 12. Cụ thể, thay v&igrave; 35mm như trước, phần notch của loạt iPhone mới sẽ chỉ c&ograve;n rộng 26mm. Đ&acirc;y l&agrave; nơi Apple sử dụng để chứa c&aacute;c th&agrave;nh phần Face ID, camera v&agrave; tai nghe.</p>\r\n\r\n<p>Như vậy, k&iacute;ch thước &ldquo;tai thỏ&rdquo; tr&ecirc;n smartphone đ&atilde; giảm hơn 25%. V&agrave; đ&acirc;y sẽ l&agrave; lần đầu ti&ecirc;n &ldquo;T&aacute;o khuyết&rdquo; mang đến thay đổi lớn như vậy cho notch.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/An-iPhone-13-notch-size-leak-1.jpeg\" style=\"height:337px; width:600px\" /></p>\r\n\r\n<p>Apple đ&atilde; đạt được điều n&agrave;y bằng c&aacute;ch di chuyển loa thoại l&ecirc;n s&aacute;t m&eacute;p viền tr&ecirc;n, trong khi c&aacute;c cảm biến phục vụ cho t&iacute;nh năng Face ID nằm ngay b&ecirc;n dưới. B&ecirc;n cạnh đ&oacute;, c&oacute; vẻ như Apple đ&atilde; thiết kế c&aacute;c linh kiện n&agrave;y nằm s&aacute;t nhau hơn, từ đ&oacute; gi&uacute;p phần notch nhỏ gọn hơn kh&aacute; nhiều so với thế hệ trước.</p>\r\n\r\n<p>Điều n&agrave;y chắc hẳn sẽ l&agrave; tin vui với rất nhiều người, để tăng diện t&iacute;ch trải nghiệm của m&agrave;n h&igrave;nh m&agrave; kh&ocirc;ng bị vướng v&iacute;u bởi một khoảng đen kh&aacute; lớn.</p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>iPhone 13 của Apple c&oacute; thể hỗ trợ c&ocirc;ng nghệ sạc nhanh 25W (Cập nhật ng&agrave;y 24/07)</strong></span></h2>\r\n\r\n<p>Với việc Xiaomi v&agrave; Huawei đang đẩy l&ugrave;i giới hạn trong việc sạc nhanh, c&oacute; tin đồn rằng iPhone 13 của Apple c&oacute; thể hỗ trợ c&ocirc;ng nghệ sạc nhanh 25W. H&atilde;y c&ugrave;ng ch&uacute;ng m&igrave;nh t&igrave;m hiểu th&ocirc;ng tin n&agrave;y ngay dưới đ&acirc;y nh&eacute;!</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o của MyDrivers (th&ocirc;ng qua MacRumors ), Apple c&oacute; khả năng ra mắt bộ chuyển đổi nguồn 25W c&ugrave;ng với iPhone 13. Động th&aacute;i n&agrave;y sẽ đi c&ugrave;ng với việc giới thiệu bộ đổi nguồn 25W mới từ thương hiệu.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post1/cong-nghe-sac-nhanh-25w-2.jpeg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p>iPhone 12 v&agrave; iPhone 12 Pro hiện tại hỗ trợ sạc nhanh 20W. V&igrave; vậy, mặc d&ugrave; thay đổi sẽ kh&ocirc;ng mang t&iacute;nh c&aacute;ch mạng về tốc độ, nhưng n&oacute; sẽ gi&uacute;p b&ugrave; đắp cho việc tăng dung lượng pin iPhone 13. Quan trọng hơn, việc bổ sung hỗ trợ sạc nhanh 25W cho d&ograve;ng iPhone 13 cuối c&ugrave;ng sẽ đưa Apple ngang h&agrave;ng với Samsung, h&atilde;ng cung cấp sạc 25W tr&ecirc;n d&ograve;ng Galaxy S21 v&agrave; dự kiến ​​sẽ bổ sung n&oacute; v&agrave;o Galaxy Z Fold 3.</p>\r\n\r\n<p>Tất nhi&ecirc;n, Apple vẫn c&ograve;n k&eacute;m xa so với Xiaomi, Huawei v&agrave; OnePlus. Gần đ&acirc;y, h&atilde;ng đ&atilde; c&ocirc;ng bố Nord 2 5G tầm trung với sạc nhanh 65W, trong khi Huawei v&agrave; Xiaomi cung cấp c&ocirc;ng nghệ 66W v&agrave; 67W tương ứng tr&ecirc;n c&aacute;c thiết bị cao cấp. Sự thay đổi n&agrave;y kh&ocirc;ng c&oacute; nhiều &yacute; nghĩa đối với những kh&aacute;ch h&agrave;ng chưa sở hữu bộ sạc nhanh. Apple đ&atilde; loại bỏ bộ đổi nguồn khỏi c&aacute;c hộp iPhone v&agrave;o th&aacute;ng 10 năm ngo&aacute;i v&agrave; sẽ kh&ocirc;ng bổ sung n&oacute; trở lại. G&atilde; khổng lồ c&oacute; trụ sở tại Cupertino hiện đang b&aacute;n bộ sạc nhanh 20W tương th&iacute;ch với d&ograve;ng iPhone 12 với gi&aacute; 19,99 USD ~ 459,910 VNĐ tại Mỹ. Loại sạc c&ocirc;ng suất 25W dự kiến ​​sẽ hạ c&aacute;nh v&agrave;o m&ugrave;a thu n&agrave;y sẽ thay thế loại sạc hiện tại.</p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>Tạm kết</strong></span></p>\r\n\r\n<p>Trong video cũng đề cập đến việc iPhone 13 Pro Max sẽ ra mắt v&agrave;o th&agrave;ng 9 năm nay với gi&aacute; b&aacute;n dự kiến l&agrave; 1099 USD (~ 25.2 triệu đồng). Mức gi&aacute; n&agrave;y ngang với phi&ecirc;n bản năm ngo&aacute;i. Nếu những dự đo&aacute;n tr&ecirc;n l&agrave; đ&uacute;ng th&igrave; khả năng cao iPhone 13 Pro Max sẽ trở th&agrave;nh &ldquo;b&aacute; vương&rdquo; thị trường smartphone năm nay.</p>', '/storage/files/1/post/post1/blog2.jpeg', 1, 1, 5, '2021-08-02 03:01:59', '2021-08-02 03:01:59', NULL),
(11, 'Bút S Pen của Samsung đã  tiến hóa  như thế nào trong gần 1 thập kỷ qua', 'but-s-pen-cua-samsung-da-tien-hoa-nhu-the-nao-trong-gan-1-thap-ky-qua', '<p>Samsung chuẩn bị tổ chức sự kiện Galaxy Unpacked trong th&aacute;ng 8. Tại đ&acirc;y c&ocirc;ng ty sẽ giới thiệu điện thoại gập mới c&ugrave;ng...</p>', '<p><strong>Samsung chuẩn bị tổ chức sự kiện Galaxy Unpacked trong th&aacute;ng 8. Tại đ&acirc;y c&ocirc;ng ty sẽ giới thiệu điện thoại gập mới c&ugrave;ng b&uacute;t S Pen Pro. H&atilde;y c&ugrave;ng xem những chiếc b&uacute;t S Pen đ&atilde; thay đổi như thế n&agrave;o từ khi ra mắt nh&eacute;.&nbsp;</strong></p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>C&aacute;c b&uacute;t S Pen đ&atilde; thay đổi như thế n&agrave;o trong 10 năm qua?</strong></span></h2>\r\n\r\n<p>Nếu bạn c&ograve;n nhớ th&igrave; b&uacute;t S Pen đ&atilde; được Samsung giới thiệu từ 9 năm trước. Chiếc b&uacute;t S Pen đầu ti&ecirc;n ra mắt tr&ecirc;n d&ograve;ng Galaxy Note v&agrave;o năm 2011. Cho đến thời điểm hiện tại, n&oacute; đ&atilde; thay đổi rất nhiều. Ban đầu, b&uacute;t S Pen chỉ c&oacute; thể l&agrave;m b&uacute;t vẽ v&agrave; t&ocirc; s&aacute;ng. N&oacute; cũng hỗ trợ cử chỉ chạm hai lần tr&ecirc;n m&agrave;n h&igrave;nh. Tới thế hệ thứ 2, b&uacute;t đ&atilde; c&oacute; thiết kế c&ocirc;ng th&aacute;i học v&agrave; độ nhạy tốt hơn. Ngo&agrave;i ra n&oacute; c&ograve;n c&oacute; th&ecirc;m menu cọ vẽ v&agrave; c&ocirc;ng cụ chọn m&agrave;u.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/pots2/1-46.jpeg\" style=\"height:379px; width:600px\" /></p>\r\n\r\n<p>Sau đ&oacute;, b&uacute;t S Pen c&ograve;n c&oacute; th&ecirc;m menu Air Command để người d&ugrave;ng t&ugrave;y chỉnh c&aacute;c t&iacute;nh năng. C&agrave;ng ng&agrave;y, chiếc b&uacute;t cảm ứng n&agrave;y c&agrave;ng được cải thiết độ nhạy v&agrave; n&acirc;ng cao trải nghiệm viết với t&iacute;nh năng Smart Select. Tr&ecirc;n d&ograve;ng Galaxy Note 5, b&uacute;t S Pen c&oacute; th&ecirc;m t&iacute;nh năng Screen Off Memo. Với t&iacute;nh năng n&agrave;y, người d&ugrave;ng c&oacute; thể viết v&agrave; ghi ch&uacute; ngay cả khi m&agrave;n h&igrave;nh đ&atilde; tắt.</p>\r\n\r\n<h2><span style=\"font-size:20px\"><strong>B&uacute;t S Pen ng&agrave;y c&agrave;ng trở n&ecirc;n &ldquo;đa zi năng&rdquo;</strong></span></h2>\r\n\r\n<p>Khi b&uacute;t S Pen xuất hiện tr&ecirc;n Galaxy Note 8, n&oacute; c&oacute; th&ecirc;m t&iacute;nh năng Live Message. Sau đ&oacute; l&agrave; kết nối&nbsp;Bluetooth, cho ph&eacute;p người d&ugrave;ng điều khiển c&aacute;c chức năng tr&ecirc;n smartphone từ xa một c&aacute;ch tiện dụng hơn. Bạn c&oacute; thể nh&igrave;n thấy người d&ugrave;ng sử dụng b&uacute;t để chụp ảnh từ xa hay điều khiển c&aacute;c slide trong l&uacute;c thuyết tr&igrave;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/pots2/3-22.jpeg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p>S Pen thực sự lột x&aacute;c tr&ecirc;n Galaxy Note 10 với c&ocirc;ng nghệ Air Action. Người d&ugrave;ng c&oacute; thể thực hiện c&aacute;c cử chỉ như chuyển chế độ camera, ph&oacute;ng to thu nhỏ ảnh&hellip; Samsung c&ograve;n bổ sung t&iacute;nh năng chuyển chữ viết tay th&agrave;nh văn bản. Gần đ&acirc;y nhất l&agrave; S Pen tr&ecirc;n Galaxy Note 20 Series. Nhờ c&ocirc;ng nghệ AI, độ trễ của b&uacute;t gần như kh&ocirc;ng c&ograve;n, tạo cảm gi&aacute;c như đang viết tr&ecirc;n một c&acirc;y b&uacute;t thật. M&agrave;n h&igrave;nh c&oacute; tần số qu&eacute;t 120Hz cũng g&oacute;p phần n&acirc;ng cao trải nghiệm sử dụng b&uacute;t. Bạn cũng c&oacute; thể lắc nghẹ b&uacute;t S Pen để k&iacute;ch hoạt t&iacute;nh năng Screen Write. Đ&acirc;y l&agrave; t&iacute;nh năng cho ph&eacute;p ngay lập tức chụp ảnh m&agrave;n h&igrave;nh v&agrave; ch&uacute; th&iacute;ch. C&oacute; thể thấy, Samsung kh&ocirc;ng ngừng cải tiến đem lại trải nghiệm ho&agrave;n thiện nhất tr&ecirc;n b&uacute;t S Pen. Tới đ&acirc;y, Samsung sẽ giới thiệu b&uacute;t S Pen Pro. C&ugrave;ng chờ xem n&oacute; sẽ c&oacute; c&ocirc;ng nghệ g&igrave; mới nh&eacute;.</p>', '/storage/files/1/post/pots2/2-34.jpeg', 1, 1, 5, '2021-08-02 03:28:06', '2021-08-14 00:20:16', NULL),
(12, 'Facebook đạt doanh thu cao kỷ lục bất chấp tính năng chặn theo dõi...', 'facebook-dat-doanh-thu-cao-ky-luc-bat-chap-tinh-nang-chan-theo-doi', '<p>Mặc d&ugrave; Apple đ&atilde; ra mắt t&iacute;nh năng quyền ri&ecirc;ng tư mới tr&ecirc;n iOS từ th&aacute;ng 4 nhưng Facebook vẫn đạt kỷ lục doanh...</p>', '<p>Mặc d&ugrave; Apple đ&atilde; ra mắt t&iacute;nh năng quyền ri&ecirc;ng tư mới tr&ecirc;n iOS từ th&aacute;ng 4 nhưng Facebook vẫn đạt kỷ lục doanh thu mới. Mặc d&ugrave; ch&iacute;nh CEO Facebook cũng thừa nhận sắp tới sẽ l&agrave; chặng đường đầy kh&oacute; khăn.</p>\r\n\r\n<h2><strong>Facebook đạt doanh thu cao hơn 50% so với năm ngo&aacute;i</strong></h2>\r\n\r\n<p>Facebook, mạng x&atilde; hội lớn nhất h&agrave;nh tinh vừa th&ocirc;ng b&aacute;o doanh thu quảng c&aacute;o trong qu&yacute; 2 năm 2021 đạt 28.6 tỷ USD, tăng 56% so với c&ugrave;ng kỳ năm ngo&aacute;i. Khoản doanh thu n&agrave;y chiếm gần như to&agrave;n bộ nguồn thu của c&ocirc;ng ty khi tổng doanh thu của cả qu&yacute; l&agrave; 29.1 tỷ USD. B&ecirc;n cạnh đ&oacute;, lợi nhuận của Facebook cũng tăng gấp đ&ocirc;i với với c&ugrave;ng kỳ năm ngo&aacute;i, đạt 10.4 tỷ USD.</p>\r\n\r\n<p>Mặc d&ugrave; vậy, CEO David Wehner của Facebook vẫn khuyến c&aacute;o c&aacute;c nh&agrave; đầu tư về khoảng thời gian kh&oacute; khăn sắp tới. M&agrave; nguồn cơn của những kh&oacute; khăn n&agrave;y đến từ t&iacute;nh năng quyền ri&ecirc;ng tư tr&ecirc;n iOS.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post3/doanh-thu-facebook-3.jpeg\" style=\"height:316px; width:600px\" /></p>\r\n\r\n<h2><strong>T&iacute;nh năng chặn theo d&otilde;i tr&ecirc;n iOS sẽ ảnh hưởng ti&ecirc;u cực đến Facebook</strong></h2>\r\n\r\n<p>Th&aacute;ng 4 vừa qua, Apple đ&atilde; tung ra bản cập nhật mới cho iOS với t&iacute;nh năng hạn chế ứng dụng truy cập m&atilde; số định danh quảng c&aacute;o IDFA của thiết bị. T&iacute;nh năng n&agrave;y buộc c&aacute;c nh&agrave; ph&aacute;t triển phải xin ph&eacute;p người d&ugrave;ng trước khi theo d&otilde;i hoạt động của họ tr&ecirc;n ứng dụng.</p>\r\n\r\n<p>C&aacute;c khảo s&aacute;t cho thấy phần lớn người d&ugrave;ng sẽ chặn khả năng theo d&otilde;i của c&aacute;c ứng dụng. Ch&iacute;nh v&igrave; vậy, c&aacute;c c&ocirc;ng ty quảng c&aacute;o sẽ gặp nhiều kh&oacute; khăn hơn trong việc x&aacute;c định đ&uacute;ng mục ti&ecirc;u cần quảng c&aacute;o. Ngo&agrave;i ra, Apple c&ograve;n cung cấp c&aacute;c c&ocirc;ng cụ đo lường quảng c&aacute;o kh&aacute;c như SKAdNetwork v&agrave; Privacy Click Measurement để thay thế cho IDFA &ndash; d&ugrave; kh&ocirc;ng hiệu quả bằng.</p>\r\n\r\n<p>Facebook đ&atilde; t&iacute;ch cực chỉ tr&iacute;ch động th&aacute;i n&agrave;y của Apple v&igrave; những thay đổi về quyền ri&ecirc;ng tư sẽ l&agrave; đ&ograve;n gi&aacute;ng cực mạnh v&agrave;o kết quả kinh doanh của c&aacute;c c&ocirc;ng ty quảng c&aacute;o v&agrave; doanh nghiệp nhỏ phụ thuộc v&agrave;o doanh số quảng c&aacute;o. Trước đ&oacute;, CEO Mark Zuckerberg cũng dự b&aacute;o kết quả kinh doanh qu&yacute; tới sẽ bị ảnh hưởng ti&ecirc;u cực bởi t&iacute;nh năng n&agrave;y.</p>\r\n\r\n<p>Th&ocirc;ng tin tr&ecirc;n đều được Ho&agrave;ng H&agrave; Mobile tổng hợp. Đừng qu&ecirc;n theo d&otilde;i ch&uacute;ng t&ocirc;i&nbsp;để cập nhật c&aacute;c tin tức c&ocirc;ng nghệ mới nhất nh&eacute;!</p>', '/storage/files/1/post/post3/doanh-thu-facebook-1.jpeg', 1, 1, 2, '2021-08-02 03:35:17', '2021-08-02 03:40:20', NULL),
(13, 'Xuất hiện Apple Watch “pha-ke” như thật, kiểm tra được cả số Series/IMEI trên website Apple', 'xuat-hien-apple-watch-“pha-ke”-nhu-that-kiem-tra-duoc-ca-so-seriesimei-tren-website-apple', '<p>Với thủ đoạn ng&agrave;y c&agrave;ng tinh vi, tr&ecirc;n thị trường hiện nay đ&atilde; xuất hiện một số mẫu đồng hồ nh&aacute;i tương tự Apple . Đ&aacute;nh v&agrave;o t&acirc;m l&yacute; của người d&ugrave;ng n&ecirc;n h&agrave;ng fake n&agrave;y c&oacute; phần n&agrave;o đ&oacute; được ưu chuộng...</p>', '<p>Với thủ đoạn ng&agrave;y c&agrave;ng tinh vi, tr&ecirc;n thị trường hiện nay đ&atilde; xuất hiện một số mẫu đồng hồ nh&aacute;i tương tự Apple Watch Series 6 ch&iacute;nh h&atilde;ng của Apple.</p>\r\n\r\n<h2><strong>Apple Watch &ldquo;pha-ke&rdquo; nhưng kiểm tra được cả số Series/IMEI tr&ecirc;n website của Apple</strong></h2>\r\n\r\n<p>Theo b&aacute;o VnExpress, khi kiểm tra Series/IMEI của mẫu Apple&nbsp;Watch nh&aacute;i tr&ecirc;n trang web của Apple, kết quả cho ra đ&uacute;ng l&agrave; mẫu Series 6 v&agrave; hiện bảo h&agrave;nh như h&agrave;ng thật.</p>\r\n\r\n<p>Về mặt h&igrave;nh thức, h&agrave;ng nh&aacute;i cũng c&oacute; c&oacute; n&uacute;t xoay, m&agrave;n h&igrave;nh cong viền 2,5D với tấm nền hiển thị IPS LCS. Độ mỏng cạnh b&ecirc;n, c&aacute;c phụ kiện như s&aacute;ch hướng dẫn, sạc c&aacute;p đều kh&ocirc;ng kh&aacute;c biệt mấy so với bản thật.</p>\r\n\r\n<p>Tuy nhi&ecirc;n mẫu giấy đi k&egrave;m lại ghi sai ch&iacute;nh tả d&ograve;ng chữ Apple Watch. Phần mặt sau của sản phẩm nh&aacute;i được l&agrave;m bằng nhựa thường, thay v&igrave; bằng k&iacute;nh như bản ch&iacute;nh h&atilde;ng. Hệ điều h&agrave;nh cũng kh&ocirc;ng phải WatchOS.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post4/a1-2795-1627496412.jpeg\" style=\"height:559px; width:600px\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, sản phẩm nh&aacute;i cũng c&oacute; c&aacute;c chức năng như gọi trợ l&yacute; ảo, ghi &acirc;m nhưng kh&ocirc;ng hoạt động được như bản thật. Về gi&aacute; th&agrave;nh, mẫu đồng hồ &ldquo;nh&aacute;i&rdquo; Apple Watch n&agrave;y chỉ khoảng một triệu đồng. T&iacute;nh ra, n&oacute; c&ograve;n chưa bằng một phần mười sản phẩm ch&iacute;nh h&atilde;ng.</p>\r\n\r\n<h2><strong>Cẩn thận với những chi&ecirc;u tr&ograve; lừa đảo</strong></h2>\r\n\r\n<p>Nếu bạn chỉ đơn thuần muốn 1 thiết bị để xem giờ hoặc l&agrave;m trang sức tr&ecirc;n tay m&agrave; kh&ocirc;ng muốn bỏ ra nhiều tiền th&igrave; ho&agrave;n to&agrave;n c&oacute; thể mua ch&uacute;ng. Tuy nhi&ecirc;n hiện nay, rất nhiều đối tượng lợi dụng điều n&agrave;y để lừa những người nhẹ dạ cả tin.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/post4/apple-watch-fale.jpeg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>Chẳng hạn như chi&ecirc;u tr&ograve; b&aacute;n lại sản phẩm với gi&aacute; rẻ, nhưng thực chất chỉ l&agrave; h&agrave;ng nh&aacute;i. Hoặc quảng c&aacute;o để kh&aacute;ch h&agrave;ng bỏ tiền ra mua h&agrave;ng thật, nhưng ship đến nơi nhận được lại l&agrave; h&agrave;ng giả.&nbsp;V&igrave; sản phẩm được l&agrave;m giống thật, số Serial c&oacute; thể tra tr&ecirc;n trang Apple n&ecirc;n c&oacute; kh&ocirc;ng &iacute;t người mất cảnh gi&aacute;c.</p>\r\n\r\n<h2><strong>Tạm kết&nbsp;</strong></h2>\r\n\r\n<p>H&atilde;y l&agrave; người mua h&agrave;ng th&ocirc;ng minh v&agrave; cảnh gi&aacute;c mọi người nh&eacute;. Hoặc kh&ocirc;ng h&atilde;y đến với Ho&agrave;ng H&agrave; Mobile &ndash; Nhà bán lẻ uỷ quyền chính thức của Apple tại Việt Nam với hệ thống 75 si&ecirc;u thị tr&ecirc;n khắp cả nước để mua Apple Watch ch&iacute;nh h&atilde;ng, uy t&iacute;n nh&eacute;!</p>', '/storage/files/1/post/post4/apple-watch.jpeg', 1, 1, 6, '2021-08-02 03:45:25', '2021-08-02 03:45:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `highlight` tinyint(4) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `title`, `short_description`, `description`, `status`, `highlight`, `category_id`, `user_id`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Apple iPhone 12 Pro Max - 128GB - Chính hãng VN/A', 'apple-iphone-12-pro-max-128gb-chinh-hang-vna', 'Mua Apple iPhone 12 Pro Max - 128GB - Chính hãng VN/A giá tốt nhất', '<p>Cuối c&ugrave;ng sau nhiều ng&agrave;y th&aacute;ng tr&igrave; ho&atilde;n, chiếc điện thoại iPhone 12 Pro Max được mong chờ trong suốt thời gian qua cũng đ&atilde; lộ diện. Đ&acirc;y l&agrave; sản phẩm smartphone cao cấp nhất của Apple với h&agrave;ng loạt n&acirc;ng cấp đ&aacute;ng kể so với thế hệ iPhone trước.</p>', '<h3><strong>M&agrave;n h&igrave;nh lớn si&ecirc;u sắc n&eacute;t. Thiết kế vu&ocirc;ng vức sang trọng</strong></h3>\n\n<p>iPhone 12 Pro Max ch&iacute;nh thức trở th&agrave;nh chiếc iPhone c&oacute; m&agrave;n h&igrave;nh lớn nhất t&iacute;nh tới thời điểm hiện tại. Bạn sẽ được trải nghiệm h&igrave;nh ảnh đ&atilde; mắt tr&ecirc;n m&agrave;n h&igrave;nh 6,7 inch Super Retina XDR n&agrave;y. Viền m&agrave;n h&igrave;nh v&agrave; phần kho&eacute;t tai thỏ đ&atilde; được l&agrave;m gọn hơn để tối ưu th&ecirc;m kh&ocirc;ng gian hiển thị. Tấm nền của iPhone 12 Pro Max hỗ trợ chuẩn HDR10 với độ s&aacute;ng tối đa l&ecirc;n tới 1200 nit. M&agrave;n h&igrave;nh của m&aacute;y được bảo vệ bởi k&iacute;nh cường lực Ceremic Shield cho độ bền gấp 4 lần thế hệ trước.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-2.jpeg\" style=\"height:500px; width:417px\" /></p>\n\n<p>Cầm iPhone 12 Pro Max tr&ecirc;n tay chắc chắn sẽ thu h&uacute;t mọi &aacute;nh nh&igrave;n nhờ thiết kế cực sang trọng. Phần viền của m&aacute;y được l&agrave;m từ vật liệu th&eacute;p kh&ocirc;ng gỉ s&aacute;ng b&oacute;ng, được sơn l&ecirc;n lớp phủ chống xước. Mặt lưng của m&aacute;y tiếp tục được ho&agrave;n thiện nh&aacute;m gi&uacute;p tăng cường khả năng cầm nắm m&agrave; kh&ocirc;ng phải đ&aacute;nh đổi vẻ ngo&agrave;i cao cấp. Người d&ugrave;ng sẽ c&oacute; 4 lựa chọn về m&agrave;u sắc gồm bạc, x&aacute;m graphite, v&agrave;ng v&agrave; xanh biển s&acirc;u. iPhone 12 Pro Max được trang bị chuẩn kh&aacute;ng nước v&agrave; bụi bẩn IP68.</p>\n\n<h3><strong>Hỗ trợ băng tần 5G.&nbsp;Cấu h&igrave;nh cực khủng</strong></h3>\n\n<p>iPhone 12 Pro Max l&agrave; chiếc điện thoại đầu ti&ecirc;n của Apple hỗ trợ băng tần mạng 5G. Với thế hệ mạng viễn th&ocirc;ng mới, người d&ugrave;ng sẽ được trải nghiệm tốc độ truyền tải internet nhanh &ldquo;ch&oacute;ng mặt&rdquo; l&ecirc;n tới 4GB/s. Nhờ đ&oacute; m&agrave; mọi nội dung streaming trực tuyến như nhạc, video HDR hay hoạt động lướt web th&ocirc;ng thường đều diễn ra trong nh&aacute;y mắt. Với t&iacute;nh năng Smart Data, iPhone cũng sẽ tự động chuyển đổi giữa LTE v&agrave; 5G dựa tr&ecirc;n nhu cầu của c&aacute;c ứng dụng để tối ưu ho&aacute; lưu lượng data v&agrave; thời lượng sử dụng pin của thiết bị.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-3.jpeg\" style=\"height:159px; width:417px\" /></p>\n\n<p>Tiếp tục truyền thống tạo ra những chiếc iPhone với hiệu năng dẫn đầu thị trường, năm nay Apple đ&atilde; giới thiệu vi xử l&yacute; Apple A14 Bionic, con chip đi dộng đầu ti&ecirc;n chạy tr&ecirc;n tiến tr&igrave;nh 5nm. Con chip n&agrave;y đem lại tốc độ xử l&yacute; nhanh hơn 50% so với những vi xử l&yacute; kh&aacute;c tr&ecirc;n thị trường v&agrave; c&oacute; khả năng ho&agrave;n th&agrave;nh 11 tỷ ph&eacute;p t&iacute;nh mỗi gi&acirc;y. Con chip mới cũng đem lại nhiều t&iacute;nh năng xử l&yacute; h&igrave;nh ảnh đỉnh cao như quay video Dolby Vision, chụp ảnh Smart HDR 3 v&agrave; Deep Fusion.</p>\n\n<p>Bộ nhớ tối thiếu của iPhone 12 Pro Max đ&atilde; được n&acirc;ng l&ecirc;n gấp đ&ocirc;i th&agrave;nh 512GB, gi&uacute;p người d&ugrave;ng thoải m&aacute;i lưu trữ dữ liệu. Thời lượng pin của iPhone 12 Pro Max cũng thuộc h&agrave;ng top trong thế giới smartphone. Chiếc điện thoại n&agrave;y hứa hẹn sẽ đem lại 20 tiếng xem video li&ecirc;n tục cho người d&ugrave;ng (tương đương với iPhone 11 Pro Max). Bạn chắc chắn sẽ c&oacute; một ng&agrave;y l&agrave;m việc v&agrave; giải tr&iacute; kh&ocirc;ng ngừng nghỉ với chiếc điện thoại n&agrave;y. iPhone 12 Pro Max cũng hỗ trợ sạc nhanh 18W v&agrave; sạc kh&ocirc;ng d&acirc;y MagSafe 15W v&ocirc; c&ugrave;ng tiện lợi v&agrave; nhanh ch&oacute;ng.</p>\n\n<h3><strong>Camera xuy&ecirc;n m&agrave;n đ&ecirc;m. M&aacute;y qu&eacute;t LiDAR độc nhất&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h3>\n\n<p>iPhone 12 Pro Max sẽ đem lại cho người d&ugrave;ng hệ thống camera chuy&ecirc;n nghiệp h&agrave;ng đầu thị trường với nhiều n&acirc;ng cấp đ&aacute;ng gi&aacute;. Camera ch&iacute;nh của m&aacute;y c&oacute; giữ nguy&ecirc;n độ ph&acirc;n giải 12MP nhưng c&oacute; cảm biến lớn hơn, cho k&iacute;ch thước điểm ảnh l&ecirc;n tới 1,7&mu;m. Khẩu độ được n&acirc;ng l&ecirc;n &fnof;/1.6 gi&uacute;p tăng 22% khả năng thu s&aacute;ng. Ống k&iacute;nh g&oacute;c rộng cho g&oacute;c chụp tới 120o, cho bạn những bức ảnh với nhiều chi tiết v&agrave; cảnh vật xung quanh. Camera tele tr&ecirc;n iPhone 12 Pro Max đ&atilde; được tăng ti&ecirc;u cự l&ecirc;n 65mm, cho khả năng zoom quang học 2.5x, đưa bạn đến gần hơn với những vật thể ở xa.&nbsp; Camera của iPhone 12 Pro Max được trang bị t&iacute;nh năng Smat HDR 3, gi&uacute;p đem lại độ s&aacute;ng đồng đều cho từng chi tiết, đem lại những bức h&igrave;nh rực rỡ ngay cả trong điều kiện ngược s&aacute;ng.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-4.jpeg\" style=\"height:159px; width:417px\" /></p>\n\n<p>Nh&agrave; T&aacute;o cũng đ&atilde; giới thiệu t&iacute;nh năng Apple ProRAW, gi&uacute;p thiết bị thực hiện to&agrave;n bộ khả năng nhiếp ảnh điện to&aacute;n chuy&ecirc;n nghiệp tr&ecirc;n định dạng RAW. Điều n&agrave;y gi&uacute;p những nhiếp ảnh dễ d&agrave;ng chỉnh sửa hậu k&igrave;. T&iacute;nh năng chụp đ&ecirc;m Night Mode năm nay đ&atilde; c&oacute; thể hoạt động tr&ecirc;n cả camera g&oacute;c rộng, camera selfie v&agrave; trong chế độ quay video. iPhone 12 Pro Max cũng l&agrave; chiếc điện thoại đầu ti&ecirc;n v&agrave; duy nhất tr&ecirc;n thị trường c&oacute; thể quay video Dolby Vision 10-bit gi&uacute;p thu lại tới 1 tỷ m&agrave;u sắc, cho bạn những thước phim cực đ&atilde; mắt. C&ocirc;ng nghệ chống rung Sensor Shift OIS cũng đem lại sự ổn định chưa từng c&oacute; cho những video của bạn.</p>\n\n<h3>Tạm&nbsp;kết</h3>\n\n<p>Với những n&acirc;ng cấp kể tr&ecirc;n, dễ hiểu tại sao iPhone 12 Pro Max l&agrave; chiếc smartphone được săn đ&oacute;n nhiều nhất trong thời điểm n&agrave;y. Sở hữu iPhone 12 Pro Max, bạn sẽ được trải nghiệm tất cả những tinh hoa m&agrave; Apple đ&atilde; đặt v&agrave;o sản phẩm của m&igrave;nh.</p>\n\n<p>Hiện tại, Ho&agrave;ng H&agrave; Mobile đ&atilde; trở th&agrave;nh nh&agrave; ph&acirc;n phối uỷ quyền ch&iacute;nh thức của Apple tại Việt Nam, hứa hẹn đem lại cho kh&aacute;ch h&agrave;ng những sản phẩm chất lượng cao v&agrave; mức gi&aacute; phải chăng nhất. Để mua iPhone 12 Pro Max, h&atilde;y tới ngay chi nh&aacute;nh&nbsp; gần nhất hoặc click đặt h&agrave;ng để được giao h&agrave;ng tận tay ho&agrave;n to&agrave;n miễn ph&iacute;. Sản phẩm được bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</p>', 1, 0, 3, 1, 0, '2021-07-24 01:29:39', '2021-07-31 20:34:40', NULL),
(9, 'iPhone 11 Pro Max - 64GB - Chính hãng VN/A', 'iphone-11-pro-max-64gb-chinh-hang-vna', 'Mua điện thoại iPhone 11 Pro Max chính hãng, giá rẻ nhất Việt Nam', '<p>iPhone 11 Pro Max, chiếc điện thoại iPhone cao cấp nhất năm 2019. Sản phẩm c&oacute; nhiều cải tiến về thiết kế, hiệu năng, camera v&agrave; hứa hẹn sẽ thỏa m&atilde;n sự mong đợi của người d&ugrave;ng.</p>', '<h3><strong>Camera cực đẳng cấp với c&ocirc;ng nghệ Deep Fushion</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-pro-max-256gb-chinh-hang-vn-a-2.jpeg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>iPhone 11 Pro Max sẽ tiếp nối cuộc c&aacute;ch mạng về camera của Apple sau iPhone XR. Điểm đặc biệt đầu ti&ecirc;n đ&oacute; l&agrave; điện thoại sẽ sở hữu 3 camera sau sắp xếp theo h&igrave;nh tam gi&aacute;c kết hợp với đ&egrave;n flash. Tất cả sẽ nằm tr&ecirc;n một mặt vu&ocirc;ng lồi tạo ấn tượng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</p>\r\n\r\n<p>Bộ 3 camera n&agrave;y chắc chắn sẽ n&acirc;ng cao chất lượng h&igrave;nh ảnh l&ecirc;n gấp nhiều lần. iPhone 11 Pro Max sẽ c&oacute; một camera ch&iacute;nh 12MP cho h&igrave;nh ảnh ch&acirc;n thật nhất. C&ugrave;ng với đ&oacute; l&agrave; camera tele room 2X gi&uacute;p chụp ảnh sắc n&eacute;t đến từng chi tiết. Cuối c&ugrave;ng l&agrave; camera g&oacute;c si&ecirc;u rộng đạt 120 độ n&acirc;ng cấp phạm vi chụp ảnh. C&ocirc;ng nghệ chụp ảnh ho&agrave;n to&agrave;n mới Deep Fushion &nbsp;cũng sẽ cho ra đời những bức ảnh căng n&eacute;t kể cả trong điều kiện thiếu &aacute;nh s&aacute;ng.</p>\r\n\r\n<p>Camera trước được trang bị hệ thống TrueDepth thế hệ mới v&agrave; cảm biến tiệm cận IR gi&uacute;p cải thiện &aacute;nh s&aacute;ng tốt hơn. Với độ ph&acirc;n giải 10MP, c&ocirc;ng nghệ cảm biến RBG, camera sẽ tạo ra những bức ảnh selfie xinh lung linh.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh 6.5 inch mang đến trải nghiệm tuyệt vời</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-pro-max-256gb-chinh-hang-vn-a-3.jpeg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p>iPhone 11 Pro Max ch&iacute;nh h&atilde;ng sẽ sở hữu m&agrave;n h&igrave;nh 6.5 inch với tai thỏ giống như iPhone XS Max. Viền xung quanh m&aacute;y cũng được l&agrave;m mỏng tối đa v&agrave; mở rộng kh&ocirc;ng gian sử dụng. M&agrave;n h&igrave;nh sử dụng tấm nền OLED kết hợp với c&ocirc;ng nghệ Super Retina HD mang đến những trải nghiệm mới, th&uacute; vị hơn.</p>\r\n\r\n<p>Mật độ điểm s&aacute;ng 1200 nit v&agrave; mật độ điểm ảnh 458 ppi cho h&igrave;nh ảnh n&eacute;t hơn so với chuẩn th&ocirc;ng thường. C&ocirc;ng nghệ chuẩn Dollby Vison v&agrave; HDR 10 cũng gi&uacute;p h&igrave;nh ảnh ch&acirc;n thực, đẹp mắt hơn.</p>\r\n\r\n<p>C&oacute; thể n&oacute;i đ&acirc;y l&agrave; sản phẩm tốt nhất v&agrave; đ&aacute;ng mua nhất trong tầm gi&aacute; . Gi&uacute;p cho mọi người thoả th&iacute;ch sử dụng kh&ocirc;ng giới hạn.</p>', 1, 1, 3, 1, 0, '2021-07-24 21:34:01', '2021-08-03 22:25:55', NULL),
(10, 'Xiaomi Poco M3 Ram 4Gb 128GB Chính hãng', 'xiaomi-poco-m3-ram-4gb-128gb-chinh-hang', 'Mua Xiaomi Poco M3 Ram 4Gb 128GB Chính hãng gíaa dẻẻ nhất', '<p>Ngay từ khi ra mắt,&nbsp;Xiaomi Poco M3 Ch&iacute;nh h&atilde;ng&nbsp;đ&atilde; rất được ch&uacute; &yacute; nhờ ngoại h&igrave;nh. Cấu h&igrave;nh b&ecirc;n trong k&egrave;m mức gi&aacute; hợp l&yacute;. V&agrave; phải tr&ecirc;n tay thực tế mới kiểm chứng được chiếc m&aacute;y n&agrave;y hấp dẫn đến đ&acirc;u.</p>', '<p><strong>Xiaomi Poco M3 (4GB - 128GB) C&ocirc;ng Ty</strong>&nbsp;l&agrave; chiếc điện thoại c&oacute;&nbsp;cấu h&igrave;nh mạnh mẽ, khủng nhất trong tầm gi&aacute; 3 triệu đồng. Ngo&agrave;i thiết kế sang trọng, chất liệu cao cấp, m&agrave;n h&igrave;nh lớn, POCO M3 c&ograve;n sở hữu chip Rồng 662 hiệu năng ổn định v&agrave; cụm 3 camera chụp ảnh đẹp.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/xiaomi-poco-m3-thiet-ke.jpeg\" style=\"height:278px; width:417px\" /></p>\r\n\r\n<p>Nếu bạn y&ecirc;u th&iacute;ch 1 chiếc điện thoại Xiaomi POCO M3 n&agrave;y&nbsp;đừng ngần ngại&nbsp;<strong>inbox ngay Fanpage Viettablet&nbsp;</strong>hoặc đến&nbsp;<strong>CN: 27 L&ecirc; Văn Việt, P. Hiệp Ph&uacute;, Quận 9, HCM - Sdt 082.754.1636 / 0859850000&nbsp;</strong>hoặc<strong>&nbsp;CN: 174 Cao Thắng, P11, Q10, HCM - Sdt 0355.755.697&nbsp;</strong>để được tư vấn v&agrave; hỗ trợ mua sắm gi&aacute; rẻ nhất thị trường ngay h&ocirc;m nay!</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/xiaomi-poco-m3-man-hinh.jpeg\" style=\"height:278px; width:417px\" /></p>\r\n\r\n<p>Ngay từ phần ngoại h&igrave;nh,&nbsp;Xiaomi&nbsp;Poco M3 Ch&iacute;nh h&atilde;ng Fullbox đ&atilde; tỏ ra vượt trội hơn so với c&aacute;c đối thủ c&ugrave;ng ph&acirc;n kh&uacute;c với thiết kế trẻ trung. Mặt lưng nhựa giả da cho cảm gi&aacute;c cầm th&iacute;ch tay, kh&ocirc;ng bị trơn trượt. Trong khi đ&oacute; viền m&aacute;y lại l&agrave;m dạng nhẵn, điều n&agrave;y kh&aacute; hợp l&yacute;. Mặt lưng giả da đ&atilde; xử l&yacute; cảm gi&aacute;c cầm nắm chắc tay rồi. Khối lượng m&aacute;y kh&aacute; nhẹ, với 198g n&ecirc;n cầm kh&aacute; đầm tay.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/2021-01-04-16.31.25.jpg\" style=\"height:556px; width:417px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 1, 0, 7, 1, 0, '2021-07-25 23:12:25', '2021-07-31 21:14:33', NULL),
(13, 'Điện thoại Samsung Galaxy Note 20 Ultra - Chính hãng', 'dien-thoai-samsung-galaxy-note-20-ultra-chinh-hang', 'Mua điện thoại Samsung Galaxy Note 20 Ultra - Chính hãng giá rẻ', '<p><strong>Samsung Galaxy Note 20 Ultra 5G C&ocirc;ng Ty</strong>&nbsp;l&agrave;&nbsp;<strong>flagship</strong>&nbsp;xứng đ&aacute;ng với t&ecirc;n gọi của n&oacute;. Bằng c&aacute;ch cung cấp cho người d&ugrave;ng sự kết hợp tuyệt vời giữa sức mạnh v&agrave; hiệu quả năng suất hoạt động.</p>', '<h2><strong>Mua Samsung Galaxy Note 20 Ultra gi&aacute; rẻ ch&iacute;nh h&atilde;ng&nbsp;</strong></h2>\r\n\r\n<p>Với những th&agrave;nh c&ocirc;ng m&agrave; Samsung đ&atilde; gặt h&aacute;i được từ c&aacute;c thế hệ Galaxy Note đi trước, &ocirc;ng lớn tới từ H&agrave;n Quốc lại tiếp tục l&agrave;m cho người h&acirc;m mộ một lần nữa phải ph&aacute;t cuồng v&igrave; thế hệ Galaxy Note 20 cao cấp của năm 2020. Người d&ugrave;ng giờ đ&acirc;y sẽ được trải nghiệm tất cả tinh hoa của nh&agrave; sản xuất điện thoại tới từ H&agrave;n Quốc, c&ugrave;ng tập hợp lại tr&ecirc;n si&ecirc;u phẩm Galaxy Note 20 Ultra cuối năm nay. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; những điểm cải tiến cực đ&aacute;ng gi&aacute; tr&ecirc;n si&ecirc;u phẩm d&ograve;ng Note n&agrave;y nh&eacute;!</p>\r\n\r\n<h3><strong>Sự trở lại của thiết kế d&ograve;ng Note cổ điển</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/samsung--dien-thoai-di-dong-samsung-galaxy-note-20-ultra-chinh-hang-1.png\" style=\"height:278px; width:417px\" /></strong></p>\r\n\r\n<p>C&oacute; thể n&oacute;i, từ trước đến nay, thiết kế của d&ograve;ng Galaxy Note lu&ocirc;n khiến cho người d&ugrave;ng phải th&iacute;ch th&uacute; v&agrave; m&ecirc; đắm bởi độ tinh xảo kết hợp với những phi&ecirc;n bản m&agrave;u sắc cực k&igrave; h&agrave;i h&ograve;a. Galaxy Note 20 Ultra sở hữu một thiết kế nguy&ecirc;n khối kim loại, c&ugrave;ng với mặt lưng được ho&agrave;n thiện từ k&iacute;nh cường lực cao cấp, tạo cho m&aacute;y một vẻ bề ngo&agrave;i b&oacute;ng bẩy, sang trọng. Những ai kh&ocirc;ng th&iacute;ch sự mềm mại của những mẫu smartphone cao cấp tr&ecirc;n thị trường chắc chắn sẽ th&iacute;ch m&ecirc; Galaxy Note 20 Ultra với vẻ đẹp nam t&iacute;nh v&agrave; khoẻ khoắn nhờ thiết kế c&aacute;c cạnh vu&ocirc;ng vức. Chiếc Note năm nay cũng đ&aacute;nh dấu sự trở lại của m&agrave;u sắc v&agrave;ng đồng v&ocirc; c&ugrave;ng được ưa chuộng tr&ecirc;n những đời Note trước đ&acirc;y sau một thời gian d&agrave;i vắng b&oacute;ng. B&ecirc;n cạnh đ&oacute;, người d&ugrave;ng c&oacute; th&ecirc;m lựa chọn m&agrave;u đen hoặc trắng cổ điển như thường lệ.</p>\r\n\r\n<p>Galaxy Note 20 Ultra sở hữu một m&agrave;n h&igrave;nh với k&iacute;ch thước lớn 6.9 inch, độ ph&acirc;n giải Quad HD . Tương tự như Galaxy S20 Series, Samsung cũng đ&atilde; mang c&ocirc;ng nghệ m&agrave;n h&igrave;nh Dynamic AMOLED 2X l&ecirc;n những sản phẩm của Galaxy Note 20 Ultra. Đ&acirc;y cũng l&agrave; những chiếc smartphone tiếp theo của Samsung sở hữu tần số qu&eacute;t l&ecirc;n tới 120Hz cho trải nghiệm hiện thị mượt m&agrave;, gi&uacute;p người d&ugrave;ng đắm ch&igrave;m trong từng pha h&agrave;nh động v&agrave; c&aacute;c thao t&aacute;c vuốt chạm. Triết l&yacute; thiết kế m&agrave;n h&igrave;nh Infinity-O cũng sẽ gi&uacute;p m&agrave;n h&igrave;nh được mở rộng ra tối đa để bạn c&oacute; được những gi&acirc;y ph&uacute;t tuyệt vời với Galaxy Note 20 Ultra.</p>\r\n\r\n<h3><strong>C&acirc;y b&uacute;t S Pen quyền năng</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/samsung--dien-thoai-di-dong-samsung-galaxy-note-20-ultra-chinh-hang-2.jpeg\" style=\"height:262px; width:417px\" /></strong></p>\r\n\r\n<p>Nhắc tới d&ograve;ng Note chắc chắn kh&ocirc;ng thể bỏ chiếc b&uacute;t S Pen thần th&aacute;nh đi c&ugrave;ng năm th&aacute;ng. Chiếc b&uacute;t S Pen năm nay được t&iacute;ch hợp th&ecirc;m t&iacute;nh năng Anywhere với 5 cử chỉ khi chụp ảnh như Xoay để Zoom, n&acirc;ng l&ecirc;n - xuống để đổi camera, vuốt sang ngang để chuyển chế độ bằng c&aacute;ch nhấn giữ n&uacute;t. B&ecirc;n cạnh đ&oacute; l&agrave; &acirc;m thanh khi viết - vẽ tr&ecirc;n thiết bị. B&ecirc;n cạnh đ&oacute;, S Pen vẫn thực hiện được sứ mệnh &ldquo;ng&agrave;n đời&rdquo; của n&oacute; l&agrave; gi&uacute;p cho người d&ugrave;ng tương t&aacute;c với điện thoại như một cuốn sổ. Galaxy Note 20 Ultra với m&agrave;n h&igrave;nh lớn v&agrave; S Pen hứa hẹn đem lại trải nghiệm vẽ viết v&agrave; ghi ch&uacute; tốt nhất trong thế giới smartphone.</p>\r\n\r\n<h3><strong>Cấu h&igrave;nh cực khủng cho trải nghiệm mượt m&agrave;</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/samsung--dien-thoai-di-dong-samsung-galaxy-note-20-ultra-chinh-hang-3.png\" style=\"height:278px; width:417px\" /></strong></p>\r\n\r\n<p>Chưa hết, cung cấp năng lượng cho m&aacute;y sẽ l&agrave; vi&ecirc;n pin dung lượng 4.500mAh, hỗ trợ sạc nhanh 25W v&agrave; sạc kh&ocirc;ng d&acirc;y. Đ&acirc;y chắc chắn sẽ l&agrave; &ldquo;qu&aacute;i vật&rdquo; về thời lượng pin trong những chiếc smartphone được ra mắt v&agrave;o cuối năm nay.</p>\r\n\r\n<h3><strong>Camera h&agrave;ng đầu trong giới smartphone</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/samsung--dien-thoai-di-dong-samsung-galaxy-note-20-ultra-chinh-hang-4.jpeg\" style=\"height:234px; width:417px\" /></strong></p>\r\n\r\n<p>Ngo&agrave;i ra, hệ thống camera của Galaxy Note 20 Ultra c&ograve;n hỗ trợ người d&ugrave;ng h&agrave;ng loạt những t&iacute;nh năng chụp h&igrave;nh v&agrave; quay phim cực k&igrave; th&uacute; vị như: chụp một chạm, chế độ quay Super Slow Motion, Time Lapse, chụp x&oacute;a ph&ocirc;ng, chụp g&oacute;c si&ecirc;u rộng c&ugrave;ng t&iacute;nh năng chống rung quang học OIS khi quay video. Ở ph&iacute;a trước sẽ l&agrave; camera selfie với độ ph&acirc;n giải 10MP, hỗ trợ quay video độ ph&acirc;n giải 2K, &nbsp;l&agrave;m đẹp bằng tr&iacute; tuệ th&ocirc;ng minh nh&acirc;n tạo AI,&hellip;Galaxy Note 20 chắc chắn sẽ gi&uacute;p bạn c&oacute; được những tấm h&igrave;nh tự sướng sắc n&eacute;t v&agrave; ảo diệu nhất để bạn c&oacute; thể quay vlog h&agrave;ng ng&agrave;y hoặc thực hiện những cuộc gọi video call cho bạn b&egrave; v&agrave; người th&acirc;n.</p>\r\n\r\n<h3><strong>Mua Samsung Galaxy Note 20 Series gi&aacute; rẻ ch&iacute;nh h&atilde;ng</strong></h3>\r\n\r\n<p>Vậy, mua Samsung Galaxy Note 20 Ultra ở đ&acirc;u? C&acirc;u trả lời l&agrave; bạn c&oacute; thể đến c&aacute;c cửa h&agrave;ng để &ldquo;rinh&rdquo; ngay si&ecirc;u phẩm mới về nh&agrave;. Mọi thắc mắc về th&ocirc;ng tin sản phẩm, gi&aacute; b&aacute;n c&ugrave;ng c&aacute;c chương tr&igrave;nh mua h&agrave;ng, ưu đ&atilde;i sẽ được giải đ&aacute;p qua tổng đ&agrave;i đường d&acirc;y n&oacute;ng 1900.2091 của Ho&agrave;ng H&agrave; Mobile. Đừng qu&ecirc;n theo d&otilde;i website hoanghamobile.com v&agrave; fanpage Facebook Ho&agrave;ng H&agrave; Mobile để cập nhật những tin tức mới nhất về c&aacute;c chương tr&igrave;nh khuyến m&atilde;i nh&eacute;!</p>', 1, 1, 4, 1, 0, '2021-07-26 00:06:38', '2021-07-31 20:31:18', NULL),
(14, 'việt Hoàng 11111 hihi', 'viet-hoang-11111-hihi', 'Đồng  loạt giảm sâu 20% trên các đơn hàng 111111', '<p>hihihihihihihih11111</p>', '<p>hihihihihihihi11111</p>', 1, 1, 3, 1, 0, '2021-07-26 00:08:28', '2021-08-03 00:40:29', '2021-08-03 00:40:29'),
(16, 'Apple iPhone 12 Pro Max - 256GB - Chính hãng VN/A', 'apple-iphone-12-pro-max-256gb-chinh-hang-vna', 'Mua Apple iPhone 12 Pro Max - 256GB - Chính hãng VN/A giá tốt nhất', '<p><span style=\"font-size:12px\">Cuối c&ugrave;ng sau nhiều ng&agrave;y th&aacute;ng tr&igrave; ho&atilde;n, chiếc điện thoại iPhone 12 Pro Max được mong chờ trong suốt thời gian qua cũng đ&atilde; lộ diện. Đ&acirc;y l&agrave; sản phẩm smartphone cao cấp nhất của Apple với h&agrave;ng loạt n&acirc;ng cấp đ&aacute;ng kể so với thế hệ iPhone trước.</span></p>', '<h3><strong>M&agrave;n h&igrave;nh lớn si&ecirc;u sắc n&eacute;t. Thiết kế vu&ocirc;ng vức sang trọng</strong></h3>\r\n\r\n<p>iPhone 12 Pro Max ch&iacute;nh thức trở th&agrave;nh chiếc iPhone c&oacute; m&agrave;n h&igrave;nh lớn nhất t&iacute;nh tới thời điểm hiện tại. Bạn sẽ được trải nghiệm h&igrave;nh ảnh đ&atilde; mắt tr&ecirc;n m&agrave;n h&igrave;nh 6,7 inch Super Retina XDR n&agrave;y. Viền m&agrave;n h&igrave;nh v&agrave; phần kho&eacute;t tai thỏ đ&atilde; được l&agrave;m gọn hơn để tối ưu th&ecirc;m kh&ocirc;ng gian hiển thị. Tấm nền của iPhone 12 Pro Max hỗ trợ chuẩn HDR10 với độ s&aacute;ng tối đa l&ecirc;n tới 1200 nit. M&agrave;n h&igrave;nh của m&aacute;y được bảo vệ bởi k&iacute;nh cường lực Ceremic Shield cho độ bền gấp 4 lần thế hệ trước.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-2.jpeg\" style=\"height:500px; width:417px\" /></p>\r\n\r\n<p>Cầm iPhone 12 Pro Max tr&ecirc;n tay chắc chắn sẽ thu h&uacute;t mọi &aacute;nh nh&igrave;n nhờ thiết kế cực sang trọng. Phần viền của m&aacute;y được l&agrave;m từ vật liệu th&eacute;p kh&ocirc;ng gỉ s&aacute;ng b&oacute;ng, được sơn l&ecirc;n lớp phủ chống xước. Mặt lưng của m&aacute;y tiếp tục được ho&agrave;n thiện nh&aacute;m gi&uacute;p tăng cường khả năng cầm nắm m&agrave; kh&ocirc;ng phải đ&aacute;nh đổi vẻ ngo&agrave;i cao cấp. Người d&ugrave;ng sẽ c&oacute; 4 lựa chọn về m&agrave;u sắc gồm bạc, x&aacute;m graphite, v&agrave;ng v&agrave; xanh biển s&acirc;u. iPhone 12 Pro Max được trang bị chuẩn kh&aacute;ng nước v&agrave; bụi bẩn IP68.</p>\r\n\r\n<h3><strong>Hỗ trợ băng tần 5G.&nbsp;Cấu h&igrave;nh cực khủng</strong></h3>\r\n\r\n<p>iPhone 12 Pro Max l&agrave; chiếc điện thoại đầu ti&ecirc;n của Apple hỗ trợ băng tần mạng 5G. Với thế hệ mạng viễn th&ocirc;ng mới, người d&ugrave;ng sẽ được trải nghiệm tốc độ truyền tải internet nhanh &ldquo;ch&oacute;ng mặt&rdquo; l&ecirc;n tới 4GB/s. Nhờ đ&oacute; m&agrave; mọi nội dung streaming trực tuyến như nhạc, video HDR hay hoạt động lướt web th&ocirc;ng thường đều diễn ra trong nh&aacute;y mắt. Với t&iacute;nh năng Smart Data, iPhone cũng sẽ tự động chuyển đổi giữa LTE v&agrave; 5G dựa tr&ecirc;n nhu cầu của c&aacute;c ứng dụng để tối ưu ho&aacute; lưu lượng data v&agrave; thời lượng sử dụng pin của thiết bị.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-3.jpeg\" style=\"height:159px; width:417px\" /></p>\r\n\r\n<p>Tiếp tục truyền thống tạo ra những chiếc iPhone với hiệu năng dẫn đầu thị trường, năm nay Apple đ&atilde; giới thiệu vi xử l&yacute; Apple A14 Bionic, con chip đi dộng đầu ti&ecirc;n chạy tr&ecirc;n tiến tr&igrave;nh 5nm. Con chip n&agrave;y đem lại tốc độ xử l&yacute; nhanh hơn 50% so với những vi xử l&yacute; kh&aacute;c tr&ecirc;n thị trường v&agrave; c&oacute; khả năng ho&agrave;n th&agrave;nh 11 tỷ ph&eacute;p t&iacute;nh mỗi gi&acirc;y. Con chip mới cũng đem lại nhiều t&iacute;nh năng xử l&yacute; h&igrave;nh ảnh đỉnh cao như quay video Dolby Vision, chụp ảnh Smart HDR 3 v&agrave; Deep Fusion.</p>\r\n\r\n<p>Bộ nhớ tối thiếu của iPhone 12 Pro Max đ&atilde; được n&acirc;ng l&ecirc;n gấp đ&ocirc;i th&agrave;nh 256GB, gi&uacute;p người d&ugrave;ng thoải m&aacute;i lưu trữ dữ liệu. Thời lượng pin của iPhone 12 Pro Max cũng thuộc h&agrave;ng top trong thế giới smartphone. Chiếc điện thoại n&agrave;y hứa hẹn sẽ đem lại 20 tiếng xem video li&ecirc;n tục cho người d&ugrave;ng (tương đương với iPhone 11 Pro Max). Bạn chắc chắn sẽ c&oacute; một ng&agrave;y l&agrave;m việc v&agrave; giải tr&iacute; kh&ocirc;ng ngừng nghỉ với chiếc điện thoại n&agrave;y. iPhone 12 Pro Max cũng hỗ trợ sạc nhanh 18W v&agrave; sạc kh&ocirc;ng d&acirc;y MagSafe 15W v&ocirc; c&ugrave;ng tiện lợi v&agrave; nhanh ch&oacute;ng.</p>\r\n\r\n<h3><strong>Tạm&nbsp;kết</strong></h3>\r\n\r\n<p>Với những n&acirc;ng cấp kể tr&ecirc;n, dễ hiểu tại sao iPhone 12 Pro Max l&agrave; chiếc smartphone được săn đ&oacute;n nhiều nhất trong thời điểm n&agrave;y. Sở hữu iPhone 12 Pro Max, bạn sẽ được trải nghiệm tất cả những tinh hoa m&agrave; Apple đ&atilde; đặt v&agrave;o sản phẩm của m&igrave;nh.</p>\r\n\r\n<p>Hiện tại, Ho&agrave;ng H&agrave; Mobile đ&atilde; trở th&agrave;nh nh&agrave; ph&acirc;n phối uỷ quyền ch&iacute;nh thức của Apple tại Việt Nam, hứa hẹn đem lại cho kh&aacute;ch h&agrave;ng những sản phẩm chất lượng cao v&agrave; mức gi&aacute; phải chăng nhất. Để mua iPhone 12 Pro Max, h&atilde;y tới ngay chi nh&aacute;nh Ho&agrave;ng H&agrave; Mobile gần nhất hoặc click đặt h&agrave;ng để được giao h&agrave;ng tận tay ho&agrave;n to&agrave;n miễn ph&iacute;. Sản phẩm được bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</p>', 1, 0, 3, 1, 8, '2021-07-27 14:27:46', '2021-08-03 22:24:31', NULL),
(17, 'iPhone 11 Pro Max - 256GB - Chính hãng VN/A', 'iphone-11-pro-max-256gb-chinh-hang-vna', 'Mua Apple iPhone 11 Pro Max - 256GB - Chính hãng VN/A giá tốt nhất', '<p><span style=\"font-size:12px\">iPhone 11Pro Max - si&ecirc;u phẩm được mong chờ nhất năm 2019 của Apple chuẩn bị ra mắt. Với những cải tiến vượt trội, phi&ecirc;n bản iPhone mới nhất hứa hẹn sẽ l&agrave;m b&ugrave;ng nổ thị trường c&ocirc;ng nghệ.</span></p>', '<h3><span style=\"font-size:20px\"><strong>Camera cực đẳng cấp với c&ocirc;ng nghệ Deep Fushion</strong></span></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-pro-max-256gb-chinh-hang-vn-a-2 (1).jpeg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12px\">iPhone 11 Pro Max sẽ tiếp nối cuộc c&aacute;ch mạng về camera của Apple sau iPhone XR. Điểm đặc biệt đầu ti&ecirc;n đ&oacute; l&agrave; điện thoại sẽ sở hữu 3 camera sau sắp xếp theo h&igrave;nh tam gi&aacute;c kết hợp với đ&egrave;n flash. Tất cả sẽ nằm tr&ecirc;n một mặt vu&ocirc;ng lồi tạo ấn tượng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</span> <span style=\"font-size:12px\">Bộ 3 camera n&agrave;y chắc chắn sẽ n&acirc;ng cao chất lượng h&igrave;nh ảnh l&ecirc;n gấp nhiều lần. iPhone 11 Pro Max sẽ c&oacute; một camera ch&iacute;nh 12MP cho h&igrave;nh ảnh ch&acirc;n thật nhất. C&ugrave;ng với đ&oacute; l&agrave; camera tele room 2X gi&uacute;p chụp ảnh sắc n&eacute;t đến từng chi tiết. Cuối c&ugrave;ng l&agrave; camera g&oacute;c si&ecirc;u rộng đạt 120 độ n&acirc;ng cấp phạm vi chụp ảnh. C&ocirc;ng nghệ chụp ảnh ho&agrave;n to&agrave;n mới Deep Fushion &nbsp;cũng sẽ cho ra đời những bức ảnh căng n&eacute;t kể cả trong điều kiện thiếu &aacute;nh s&aacute;ng.</span> <span style=\"font-size:12px\">Camera trước được trang bị hệ thống TrueDepth thế hệ mới v&agrave; cảm biến tiệm cận IR gi&uacute;p cải thiện &aacute;nh s&aacute;ng tốt hơn. Với độ ph&acirc;n giải 10MP, c&ocirc;ng nghệ cảm biến RBG, camera sẽ tạo ra những bức ảnh selfie xinh lung linh.</span></p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>M&agrave;n h&igrave;nh 6.5 inch mang đến trải nghiệm tuyệt vời</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-pro-max-256gb-chinh-hang-vn-a-3.jpeg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12px\">iPhone 11 Pro Max ch&iacute;nh h&atilde;ng sẽ sở hữu m&agrave;n h&igrave;nh 6.5 inch với tai thỏ giống như iPhone XS Max. Viền xung quanh m&aacute;y cũng được l&agrave;m mỏng tối đa v&agrave; mở rộng kh&ocirc;ng gian sử dụng. M&agrave;n h&igrave;nh sử dụng tấm nền OLED kết hợp với c&ocirc;ng nghệ Super Retina HD mang đến những trải nghiệm mới, th&uacute; vị hơn.</span> <span style=\"font-size:12px\">Mật độ điểm s&aacute;ng 1200 nit v&agrave; mật độ điểm ảnh 458 ppi cho h&igrave;nh ảnh n&eacute;t hơn so với chuẩn th&ocirc;ng thường. C&ocirc;ng nghệ chuẩn Dollby Vison v&agrave; HDR 10 cũng gi&uacute;p h&igrave;nh ảnh ch&acirc;n thực, đẹp mắt hơn.</span></p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>Cấu h&igrave;nh cao, hiệu năng mạnh mẽ</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-pro-256gb-chinh-hang-vn-a[remove]-637379276056262733-[remove]-2.jpeg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><span style=\"font-size:12px\">iPhone 11 Pro Max được n&acirc;ng cấp l&ecirc;n chip A13, thế hệ chịp sản xuất tr&ecirc;n quy tr&igrave;nh 7nm c&ocirc;ng nghệ EUV. C&ugrave;ng với đ&oacute; hệ điều h&agrave;nh iOS 13 mang đến những t&iacute;nh năng mới, đẳng cấp hơn. Đồng thời n&oacute; cũng gi&uacute;p truy cập nhanh ch&oacute;ng, xử l&yacute; mượt m&agrave;, tiết kiệm năng lượng hiệu quả. Đ&acirc;y được đ&aacute;nh gi&aacute; l&agrave; bộ vi xử l&yacute; ho&agrave;n hảo nhất của Apple từ trước đến nay.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">Apple cũng đ&atilde; tạo ra một bước n&acirc;ng cấp mới trong c&ocirc;ng nghệ bảo mật Face ID. So với iPhone X th&igrave; Face ID của iPhone 11 Pro Max đ&atilde; tối ưu khả năng nhận diện khu&ocirc;n mặt hơn. Sản phẩm n&agrave;y đ&atilde; được trang bị camera hồng ngoại, đ&egrave;n chiếu cảm biến gi&uacute;p mở kh&oacute;a nhanh ch&oacute;ng, ch&iacute;nh x&aacute;c, n&acirc;ng cao t&iacute;nh bảo mật. Sự n&acirc;ng cấp c&agrave;ng ng&agrave;y c&agrave;ng l&agrave;m cho c&aacute;c sản phẩm của Apple trở n&ecirc;n ho&agrave;n hảo, được kh&aacute;ch h&agrave;ng tin d&ugrave;ng nhiều hơn.</span></p>', 1, 0, 3, 1, 9, '2021-07-27 14:36:15', '2021-08-04 01:23:43', NULL),
(18, 'iPhone 11 - 64GB - Chính hãng VN/A', 'iphone-11-64gb-chinh-hang-vna', 'Mua iPhone 11 - 64GB - Chính hãng VN/A giá rẻ nhất Việt Nam', '<p>iPhone 11 - si&ecirc;u phẩm được mong chờ nhất năm 2019 của Apple chuẩn bị ra mắt. Với những cải tiến vượt trội, phi&ecirc;n bản iPhone mới nhất hứa hẹn sẽ l&agrave;m b&ugrave;ng nổ thị trường c&ocirc;ng nghệ.</p>', '<h3><strong>Thiết kế cực kỳ ấn tượng với m&agrave;n h&igrave;nh c&oacute; độ ph&acirc;n giải cao</strong></h3>\r\n\r\n<p>iPhone 11 vẫn sở hữu thiết kế tr&agrave;n viền với &ldquo;tai thỏ&rdquo; giống iPhone X. Viền bezel ph&iacute;a tr&ecirc;n v&agrave; dưới cũng được l&agrave;m gọn lại nhằm tối đa m&agrave;n h&igrave;nh sử dụng. C&ugrave;ng với đ&oacute;, 4 g&oacute;c của m&aacute;y cũng được bo tr&ograve;n nhẹ tạo cảm gi&aacute;c chắc chắn khi cầm tr&ecirc;n tay. Mặt lưng iPhone 11 l&agrave;m từ chất liệu k&iacute;nh n&ecirc;n rất sang trọng, tinh tế. Kh&aacute;c với c&aacute;c d&ograve;ng iPhone trước, sản phẩm n&agrave;y sẽ c&oacute; 6 m&agrave;u bản bạc, v&agrave;ng, xanh l&aacute;, trắng, đen đỏ.</p>\r\n\r\n<p>C&ocirc;ng nghệ m&agrave;n h&igrave;nh LCD Retina mang đến chất lượng tốt nhất. Độ ph&acirc;n giải m&agrave;n h&igrave;nh 1125 x 2436 pixels hiển thị m&agrave;u sắc ch&iacute;nh x&aacute;c v&agrave; cho h&igrave;nh ảnh sắc n&eacute;t. M&agrave;n h&igrave;nh rộng 6.1 inch gi&uacute;p người sử dụng thoải m&aacute;i trải nghiệm xem phim, lướt web&hellip; Đặc biệt Apple đ&atilde; trang bị tần số qu&eacute;t từ 90 đến 120 Hz với 463 điểm m&agrave;u.</p>\r\n\r\n<h3><strong>Camera độc đ&aacute;o n&acirc;ng tầm chụp ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-64gb-chinh-hang-vn-a-3.jpeg\" style=\"height:314px; width:600px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 11 vẫn sở hữu 2 camera nhưng thay v&igrave; đặt dọc như iPhone X th&igrave; ch&uacute;ng lại được sắp xếp theo h&igrave;nh vu&ocirc;ng. Đ&egrave;n flash cũng được đặt trong h&igrave;nh vu&ocirc;ng n&agrave;y. Trong đ&oacute; c&oacute; một camera ch&iacute;nh với độ ph&acirc;n giải 12MP gi&uacute;p bạn c&oacute; được những bức ảnh cực đẹp. Camera thứ hai c&oacute; g&oacute;c si&ecirc;u rộng 12 MP, ti&ecirc;u cự 13mm cho g&oacute;c chụp 120 độ.</p>\r\n\r\n<p>C&aacute;c thuật to&aacute;n xử l&yacute; c&ugrave;ng được Apple n&acirc;ng cấp gồm chụp ch&acirc;n dung Potrait Mode, chụp ch&acirc;n dung đen trắng Highkey. Đồng thời tự động chuyển sang t&iacute;nh năng chụp đ&ecirc;m Night Mode khi nhận thấy thiếu &aacute;nh s&aacute;ng.</p>\r\n\r\n<p>Camera selfie được n&acirc;ng cấp với độ ph&acirc;n giải l&ecirc;n đến 12MP. Đồng thời đ&egrave;n flash cũng được n&acirc;ng độ s&aacute;ng v&agrave; v&ugrave;ng chiếu s&aacute;ng rộng hơn. Nhờ đ&oacute;, bạn sẽ thoải m&aacute;i chụp ảnh kể cả ở những nơi &aacute;nh s&aacute;ng yếu. B&ecirc;n cạnh đ&oacute;, chế độ slow-motiton hứa hẹn sẽ trở th&agrave;nh một t&iacute;nh năng độc đ&aacute;o. Mỗi một sản phẩm mới của Apple đều được n&acirc;ng cấp camera nhằm tạo ra những trải nghiệm mới th&uacute; vị hơn cho người sử dụng.</p>\r\n\r\n<h3><strong>Pin dung lượng 3110 mAh n&acirc;ng thời gian nhiều hơn 1 giờ so với iPhone XR</strong></h3>\r\n\r\n<p>iPhone 11 ch&iacute;nh h&atilde;ng được trang bị pin c&oacute; dung lượng 3110 mAh. Với dung lượng như vậy th&igrave; chỉ một lần sạc l&agrave; c&oacute; thể sử dụng thoải m&aacute;i. Th&ecirc;m một điểm cộng nữa cho sản phẩm n&agrave;y đ&oacute; ch&iacute;nh l&agrave; c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y 15W. So với sạc kh&ocirc;ng d&acirc;y 7.5W hiện tại, sạc kh&ocirc;ng d&acirc;y 15W tăng tốc độ sạc l&ecirc;n 15% v&agrave; hiệu quả năng lượng cao hơn 30%. Mặc d&ugrave; l&agrave; c&ocirc;ng nghệ sạc nhanh nhưng vẫn đảm bảo iPhone kh&ocirc;ng qu&aacute; n&oacute;ng v&agrave; giảm 3 độ trong l&uacute;c sạc.</p>\r\n\r\n<h3><strong>Hiệu năng tối ưu với bộ xử l&yacute; Apple A13</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-64gb-chinh-hang-vn-a-4.jpeg\" style=\"height:400px; width:600px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Bộ&nbsp;xử l&yacute; A13 được sản xuất độc quyền cho iPhone 11 nhằm tạo hiệu năng mạnh mẽ, tiết kiệm pin hiệu quả. Hơn nữa, hệ điều h&agrave;nh iOS v13.0 sẽ tăng tốc độ mở ứng dụng 40%, tốc độ hiển thị b&agrave;n ph&iacute;m 50%, tốc độ camera 70%. C&ocirc;ng nghệ Wi-fi 6 mới nhất cũng được đưa v&agrave;o iPhone 11 nhằm tăng tốc độ kết nối internet tới 40%.</p>\r\n\r\n<p>Để thay thế cho 5G, Apple đ&atilde; ph&aacute;t triển c&ocirc;ng nghệ Modified Polyimide (MPI) thay v&igrave; Liquid Crystal Polymer (LCP). N&acirc;ng cấp băng th&ocirc;ng si&ecirc;u rộng gi&uacute;p kết nối mạng nhanh hơn.</p>\r\n\r\n<p>Face ID cũng được cải thiện khi c&oacute; thể ph&acirc;n biệt tiền cảnh v&agrave; &aacute;nh xạ khu&ocirc;n mặt để mở kh&oacute;a nhanh ch&oacute;ng hơn. Apple đ&atilde; tăng cường &aacute;nh s&aacute;ng của đ&egrave;n chiếu nhằm tr&aacute;nh &aacute;nh s&aacute;ng của m&ocirc;i trường t&aacute;c động l&agrave;m ảnh hưởng đến hoạt động của Face&nbsp; ID. Nhờ đ&oacute; n&acirc;ng cao t&iacute;nh bảo mật cho sản phẩm.</p>\r\n\r\n<p>&nbsp;</p>', 1, 0, 3, 1, 0, '2021-07-31 19:56:30', '2021-08-04 01:14:31', NULL),
(19, 'Điện thoại di động Samsung Galaxy S21 Ultra 128GB 5G', 'dien-thoai-di-dong-samsung-galaxy-s21-ultra-128gb-5g', 'Mua điện thoại di động Samsung Galaxy S21 Ultra 128GB 5G giá rẻ nhất Việt Nam', '<p>Tổng thể Galaxy S21 Ultra mang đến sự sạng trọng v&agrave; đẳng cấp cho người d&ugrave;ng nhờ sử dụng chất liệu cao cấp gồm k&iacute;nh v&agrave; kim loại. Mặt lưng điện thoại được bảo vệ bởi k&iacute;nh cường lực Gorilla Glass 7 thế hệ mới nhằm hạn chế t&igrave;nh trạng chống trầy xước v&agrave; va đập tốt hơn.</p>', '<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Mua điện thoại Samsung Galaxy S21 Ultra 5G gi&aacute; rẻ ch&iacute;nh h&atilde;ng</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung l&agrave; một trong những nh&agrave; sản xuất dẫn đầu tr&ecirc;n thị trường điện thoại th&ocirc;ng minh nhiều năm qua. Sau th&agrave;nh c&ocirc;ng của d&ograve;ng Galaxy S20 series, Samsung đ&atilde; trở lại v&agrave; tiếp tục khẳng định vị thế cho d&ograve;ng flagship cao cấp của m&igrave;nh. D&ograve;ng Galaxy S21 series đ&aacute;nh dấu bước nhảy vọt với những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay. Đ&aacute;ng ch&uacute; &yacute;, Galaxy S21 Ultra 5G l&agrave; phi&ecirc;n bản đầu ti&ecirc;n v&agrave; duy nhất trong d&ograve;ng sản phẩm năm nay được t&iacute;ch hợp c&ugrave;ng b&uacute;t S Pen. &ldquo;T&acirc;n binh khủng long&rdquo; n&agrave;y hứa hẹn sẽ dẫn đầu xu hướng v&agrave; tạo ra những trải nghiệm đẳng cấp, kh&aacute;c biệt cho người d&ugrave;ng.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s21-ultra.jpeg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế nguy&ecirc;n bản camera liền cạnh đẳng cấp</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Điện thoại Galaxy S21 Ultra 5G ch&iacute;nh h&atilde;ng dẫn đầu cho xu hướng thiết kế mới, kh&aacute;c biệt ho&agrave;n to&agrave;n so với những smartphone hiện nay. Cụm camera nguy&ecirc;n khối được gắn liền với cạnh v&agrave; khung kim loại của m&aacute;y, mang lại cảm gi&aacute;c nam t&iacute;nh hơn v&agrave; v&ocirc; c&ugrave;ng tinh xảo. Điện thoại c&ograve;n được trang bị một lớp k&iacute;nh Corning&reg; Gorilla&reg; Glass Victus bền bỉ nhất hiện nay.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s21-ultra-2.jpeg\" style=\"height:356px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy S21 Ultra 5G ch&iacute;nh h&atilde;ng sở hữu m&agrave;n h&igrave;nh AMOLED 2X 6.8 inch với tần số qu&eacute;t từ 10Hz - 120Hz mượt m&agrave;. Nhờ đ&oacute;, điện thoại c&oacute; thể mang đến trải nghiệm h&igrave;nh ảnh sống động, sắc n&eacute;t đến từng chi tiết nhưng vẫn tiết kiệm thời lượng pin đ&aacute;ng kể. Galaxy S21 Ultra 5G cung cấp h&igrave;nh ảnh s&aacute;ng hơn 25%, tối đa 1.500nits so với thế hệ cũ. C&ugrave;ng với tỷ lệ tương phản cải thiện 50% cho hiển thị r&otilde; n&eacute;t bất chấp mọi điều kiện. Nh&agrave; sản xuất cũng bổ sung t&iacute;nh năng Eye Comfort Shield hạn chế tối đa t&igrave;nh trạng mỏi mắt khi sử dụng li&ecirc;n tục. M&agrave;n h&igrave;nh của Galaxy S21 Ultra 5G tự tin đem đến cho người d&ugrave;ng trải nghiệm đa t&aacute;c vụ từ học tập, l&agrave;m việc đến giải tr&iacute; kh&ocirc;ng giới hạn.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">C&ocirc;ng nghệ camera vượt trội nhất từ Samsung</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Kh&ocirc;ng chỉ c&oacute; thiết kế b&ecirc;n ngo&agrave;i đẳng cấp, chiếc Galaxy S21 Ultra 5G ch&iacute;nh h&atilde;ng c&ograve;n sở hữu hệ thống camera ti&ecirc;n tiến nhất hiện nay. M&ocirc;-đun camera h&igrave;nh chữ nhật chứa bốn cảm biến với một ống k&iacute;nh ch&iacute;nh 108MP. Ngo&agrave;i ra c&ograve;n c&oacute; một camera g&oacute;c si&ecirc;u rộng 12MP, camera tele si&ecirc;u rộng 10MP v&agrave; camera tele k&eacute;p 10MP. Hệ thống camera n&agrave;y hỗ trợ chụp ảnh HDR 12 bit với m&agrave;u sắc phong ph&uacute; hơn 64 lần v&agrave; dải động rộng hơn ba lần.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s21-ultra-3.jpeg\" style=\"height:300px; width:600px\" /></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Kết nối cực nhanh, tương th&iacute;ch cực đỉnh với S Pen</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung Galaxy S21 Ultra 5G ch&iacute;nh h&atilde;ng l&agrave; phi&ecirc;n bản duy nhất trong 3 biến thể tương th&iacute;ch với b&uacute;t S Pen ti&ecirc;u chuẩn. N&oacute; c&oacute; thể hỗ trợ c&aacute;c trải nghiệm từ vẽ, ghi ch&uacute;, chỉnh sửa h&igrave;nh ảnh đến chụp ảnh selfie chỉ với thao t&aacute;c cực đơn giản. Nhờ c&ocirc;ng nghệ từ Wacom, người d&ugrave;ng c&oacute; thể trải nghiệm b&uacute;t S Pen y&ecirc;u th&iacute;ch ngay tr&ecirc;n chiếc Galaxy S21 Ultra n&agrave;y. Kh&aacute;c với Galaxy Note, chiếc Galaxy S21 Ultra 5G ch&iacute;nh h&atilde;ng kh&ocirc;ng c&oacute; khe cắm ri&ecirc;ng cho b&uacute;t S Pen. Thay v&agrave;o đ&oacute; bạn c&oacute; thể mua đựng chiếc b&uacute;t S Pen trong một cover b&aacute;n c&ugrave;ng m&aacute;y v&agrave; lấy ra sử dụng rất dễ d&agrave;ng.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s21-ultra-4.jpeg\" style=\"height:337px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p>Những năm qua, Samsung vẫn đang nỗ lực nghi&ecirc;n cứu để ph&aacute;t triển tốc độ kết nối tr&ecirc;n những chiếc smartphone của m&igrave;nh. Samsung Galaxy S21 Ultra 5G tự h&agrave;o l&agrave; một trong những điện thoại th&ocirc;ng minh đầu ti&ecirc;n hỗ trợ Wi-Fi 6E. Nhờ được cung cấp nhiều băng th&ocirc;ng hơn, kết nối Internet tr&ecirc;n chiếc smartphone n&agrave;y nhanh hơn gấp 4 lần, người d&ugrave;ng c&oacute; thể chia sẻ c&aacute;c nội dung chỉ trong nh&aacute;y mắt. So với d&ograve;ng Galaxy S20 series, kết nối mạng 5G tr&ecirc;n Galaxy S21 Ultra 5G đ&atilde; được cải thiện đ&aacute;ng kể. N&oacute; đ&atilde; giảm độ trễ kết nối xuống mức thấp nhất, cho người d&ugrave;ng trải nghiệm trực tuyến mượt m&agrave; hơn. Điện thoại Galaxy S21 Ultra 5G được trang bị con chip Exynos 2100 5nm mạnh mẽ v&agrave; tiết kiệm năng lượng hơn. N&oacute; cũng đi k&egrave;m với vi&ecirc;n pin 5000mAh c&oacute; thể sạc đầy 50% chỉ trong 30 ph&uacute;t.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 1, 0, 4, 1, 0, '2021-07-31 20:06:11', '2021-07-31 20:27:49', NULL),
(20, 'iPhone 11 - 128GB - Chính hãng VN/A', 'iphone-11-128gb-chinh-hang-vna', 'Mua iPhone 11 - 128GB - Chính hãng VN/A chính hãng giá rẻ nhất Việt Nam', '<p>iPhone 11 - si&ecirc;u phẩm được mong chờ nhất năm 2019 của Apple chuẩn bị ra mắt. Với những cải tiến vượt trội, phi&ecirc;n bản iPhone mới nhất hứa hẹn sẽ l&agrave;m b&ugrave;ng nổ thị trường c&ocirc;ng nghệ.</p>', '<h3><strong>Camera độc đ&aacute;o n&acirc;ng tầm chụp ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-64gb-chinh-hang-vn-a-3.jpeg\" style=\"height:314px; width:600px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>iPhone 11 vẫn sở hữu 2 camera nhưng thay v&igrave; đặt dọc như iPhone X th&igrave; ch&uacute;ng lại được sắp xếp theo h&igrave;nh vu&ocirc;ng. Đ&egrave;n flash cũng được đặt trong h&igrave;nh vu&ocirc;ng n&agrave;y. Trong đ&oacute; c&oacute; một camera ch&iacute;nh với độ ph&acirc;n giải 12MP gi&uacute;p bạn c&oacute; được những bức ảnh cực đẹp. Camera thứ hai c&oacute; g&oacute;c si&ecirc;u rộng 12 MP, ti&ecirc;u cự 13mm cho g&oacute;c chụp 120 độ.</p>\r\n\r\n<p>C&aacute;c thuật to&aacute;n xử l&yacute; c&ugrave;ng được Apple n&acirc;ng cấp gồm chụp ch&acirc;n dung Potrait Mode, chụp ch&acirc;n dung đen trắng Highkey. Đồng thời tự động chuyển sang t&iacute;nh năng chụp đ&ecirc;m Night Mode khi nhận thấy thiếu &aacute;nh s&aacute;ng.</p>\r\n\r\n<p>Camera selfie được n&acirc;ng cấp với độ ph&acirc;n giải l&ecirc;n đến 12MP. Đồng thời đ&egrave;n flash cũng được n&acirc;ng độ s&aacute;ng v&agrave; v&ugrave;ng chiếu s&aacute;ng rộng hơn. Nhờ đ&oacute;, bạn sẽ thoải m&aacute;i chụp ảnh kể cả ở những nơi &aacute;nh s&aacute;ng yếu. B&ecirc;n cạnh đ&oacute;, chế độ slow-motiton hứa hẹn sẽ trở th&agrave;nh một t&iacute;nh năng độc đ&aacute;o. Mỗi một sản phẩm mới của Apple đều được n&acirc;ng cấp camera nhằm tạo ra những trải nghiệm mới th&uacute; vị hơn cho người sử dụng.</p>\r\n\r\n<h3><strong>Pin dung lượng 3110 mAh n&acirc;ng thời gian nhiều hơn 1 giờ so với iPhone XR</strong></h3>\r\n\r\n<p>iPhone 11 ch&iacute;nh h&atilde;ng được trang bị pin c&oacute; dung lượng 3110 mAh. Với dung lượng như vậy th&igrave; chỉ một lần sạc l&agrave; c&oacute; thể sử dụng thoải m&aacute;i. Th&ecirc;m một điểm cộng nữa cho sản phẩm n&agrave;y đ&oacute; ch&iacute;nh l&agrave; c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y 15W. So với sạc kh&ocirc;ng d&acirc;y 7.5W hiện tại, sạc kh&ocirc;ng d&acirc;y 15W tăng tốc độ sạc l&ecirc;n 15% v&agrave; hiệu quả năng lượng cao hơn 30%. Mặc d&ugrave; l&agrave; c&ocirc;ng nghệ sạc nhanh nhưng vẫn đảm bảo iPhone kh&ocirc;ng qu&aacute; n&oacute;ng v&agrave; giảm 3 độ trong l&uacute;c sạc.</p>\r\n\r\n<h3><strong>Thiết kế cực kỳ ấn tượng với m&agrave;n h&igrave;nh c&oacute; độ ph&acirc;n giải cao</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-iphone-11-64gb-chinh-hang-vn-a-2.jpeg\" style=\"height:338px; width:600px\" /></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>iPhone 11 vẫn sở hữu thiết kế tr&agrave;n viền với &ldquo;tai thỏ&rdquo; giống iPhone X. Viền bezel ph&iacute;a tr&ecirc;n v&agrave; dưới cũng được l&agrave;m gọn lại nhằm tối đa m&agrave;n h&igrave;nh sử dụng. C&ugrave;ng với đ&oacute;, 4 g&oacute;c của m&aacute;y cũng được bo tr&ograve;n nhẹ tạo cảm gi&aacute;c chắc chắn khi cầm tr&ecirc;n tay. Mặt lưng iPhone 11 l&agrave;m từ chất liệu k&iacute;nh n&ecirc;n rất sang trọng, tinh tế. Kh&aacute;c với c&aacute;c d&ograve;ng iPhone trước, sản phẩm n&agrave;y sẽ c&oacute; 6 m&agrave;u bản bạc, v&agrave;ng, xanh l&aacute;, trắng, đen đỏ.</p>\r\n\r\n<p>C&ocirc;ng nghệ m&agrave;n h&igrave;nh LCD Retina mang đến chất lượng tốt nhất. Độ ph&acirc;n giải m&agrave;n h&igrave;nh 1125 x 2436 pixels hiển thị m&agrave;u sắc ch&iacute;nh x&aacute;c v&agrave; cho h&igrave;nh ảnh sắc n&eacute;t. M&agrave;n h&igrave;nh rộng 6.1 inch gi&uacute;p người sử dụng thoải m&aacute;i trải nghiệm xem phim, lướt web&hellip; Đặc biệt Apple đ&atilde; trang bị tần số qu&eacute;t từ 90 đến 120 Hz với 463 điểm m&agrave;u.</p>\r\n\r\n<p>&nbsp;</p>', 1, 0, 3, 1, 18, '2021-07-31 20:16:34', '2021-08-04 01:25:58', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `title`, `short_description`, `description`, `status`, `highlight`, `category_id`, `user_id`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 'Samsung Galaxy A52 - Chính hãng', 'samsung-galaxy-a52-chinh-hang', 'Mua Samsung Galaxy A52 - Chính hãng giá rẻ nhất Việt Nam', '<p>Năm 2020, Galaxy A51 đ&atilde; ra mắt v&agrave; đạt được mức doanh số vượt kỳ vọng. Để tiếp nối sự th&agrave;nh c&ocirc;ng n&agrave;y, sắp tới Samsung sẽ tr&igrave;nh l&agrave;ng người kế nghiệm của A51 l&agrave; Galaxy A52 với những cải tiến về cấu h&igrave;nh v&agrave; camera.&nbsp;</p>', '<h2 dir=\"ltr\"><strong>Thiết kế tinh tế, m&agrave;n h&igrave;nh Full HD+</strong></h2>\r\n\r\n<p dir=\"ltr\">Galaxy A52 sở hữu một thiết kế sang trọng với c&aacute;c g&oacute;c được bo tr&ograve;n nhẹ nh&agrave;ng. K&iacute;ch thước kh&aacute; mỏng tạo cảm gi&aacute;c nhẹ nh&agrave;ng m&agrave; vẫn chắc chắn khi cầm tr&ecirc;n tay. Thay v&igrave; sử dụng mặt lưng b&oacute;ng như đa số smartphone hiện nay, Galaxy A52 lại chọn mặt lưng l&igrave; tinh tế, &iacute;t b&aacute;m dấu v&acirc;n tay. Về m&agrave;u sắc, sản phẩm n&agrave;y sẽ c&oacute; c&aacute;c m&agrave;u thời thượng tương tự như người tiền nhiệm. Đ&oacute; l&agrave; m&agrave;u hồng, đen, trắng, xanh.&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image4.png\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Galaxy A52 vẫn sở hữu m&agrave;n h&igrave;nh đục lỗ quen thuộc với k&iacute;ch thước 6.5 inch. Samsung đ&atilde; trang bị cho sản phẩm n&agrave;y tấm nền Super AMOLED, mật độ điểm ảnh 405ppi nhằm mang đến những h&igrave;nh ảnh sống động, m&agrave;u sắc ch&iacute;nh x&aacute;c. Độ ph&acirc;n giải 2400 x 1080 (Full HD+) c&agrave;ng l&agrave;m tăng th&ecirc;m t&iacute;nh ch&acirc;n thực cho những h&igrave;nh ảnh hiển thị.&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Hệ thống 4 camera ấn tượng kết hợp c&ugrave;ng camera selfie 32MP</strong></h2>\r\n\r\n<p dir=\"ltr\">Galaxy A52 sở hữu tới 4 thiết lập camera ở mặt sau. Trong đ&oacute; c&oacute; một camera ch&iacute;nh 64MP, k&iacute;ch thước điểm ảnh 0.8 &micro;m v&agrave; hỗ trợ chống rung quang học OIS. Ngo&agrave;i ra, người d&ugrave;ng c&ograve;n được trải nghiệm th&ecirc;m ống k&iacute;nh si&ecirc;u rộng 8MP; ống k&iacute;nh macro 5MP v&agrave; cảm biến độ s&acirc;u 5MP. Samsung cũng đ&atilde; đưa rất nhiều t&iacute;nh năng th&ocirc;ng minh l&ecirc;n sản phẩm của m&igrave;nh bao gồm chế độ HDR, nhận diện khu&ocirc;n mặt, tự động lấy n&eacute;t, zoom quang học...</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image2.jpeg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Ph&iacute;a trước l&agrave; camera selfie 32MP gi&uacute;p tạo ra những bức ảnh selfie đẹp nhất. Camera n&agrave;y cũng hỗ trợ c&aacute;c t&iacute;nh năng như l&agrave;m đẹp tự nhi&ecirc;n, nhận diện khu&ocirc;n mặt, th&ecirc;m Emoji v&agrave;o ảnh... L&agrave; một sản phẩm tầm trung nhưng camera của Galaxy A52 lại ấn tượng v&ocirc; c&ugrave;ng.&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Cấu h&igrave;nh mạnh mẽ với hai phi&ecirc;n bản kh&aacute;c nhau</strong></h2>\r\n\r\n<p dir=\"ltr\">Samsung Galaxy A52 c&oacute; tới hai phi&ecirc;n bản kh&aacute;c nhau. Một phi&ecirc;n bản 4G được trang bị tấm nền AMOLED 90Hz v&agrave; chip Snapdragon 720G. Ngo&agrave;i ra c&ograve;n c&oacute; một phi&ecirc;n bản hỗ trợ 5G với tấm nền AMOLED 120Hz v&agrave; chip Snapdragon 750G. Cả hai con chip n&agrave;y đều c&oacute; tốc độ xử l&yacute; nhanh ch&oacute;ng, giảm độ trễ m&agrave;n h&igrave;nh v&agrave; gi&uacute;p tiết kiệm điện năng hiệu quả. Th&ecirc;m nữa, Galaxy A52 c&ograve;n hoạt động tr&ecirc;n hệ điều h&agrave;nh Android 11 với One UI 3. Nhờ đ&oacute;, m&aacute;y c&oacute; thể đ&aacute;p ứng tốt c&aacute;c tựa game phổ biến hiện nay như PUBG, Li&ecirc;n Qu&acirc;n Mobile, đua xe...</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image3.jpeg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Galaxy A52 c&oacute; hai cấu h&igrave;nh lưu trữ cho người d&ugrave;ng lựa chọn bao gồm phi&ecirc;n bản RAM 6GB - bộ nhớ trong 128GB v&agrave; phi&ecirc;n bản RAM 8GB - bộ nhớ trong 256GB. Cả hai đều mang đến kh&ocirc;ng gian lưu trữ thoải m&aacute;i, đ&aacute;p ứng tốt nhu cầu c&agrave;i đặt ứng dụng, lưu giữ h&igrave;nh ảnh, video, tin nhắn... Ngo&agrave;i ra, nếu cần mở rộng bộ nhớ th&igrave; m&aacute;y vẫn hỗ trợ khe cắm thẻ nhớ l&ecirc;n tới 512GB.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Dung lượng pin 4500 mAh, hỗ trợ sạc nhanh 25W</strong></h2>\r\n\r\n<p dir=\"ltr\">Samsung đ&atilde; trang bị cho Galaxy A52 vi&ecirc;n pin dung lượng cực tốt l&ecirc;n tới 4500 mAh. Nhờ đ&oacute;, người d&ugrave;ng c&oacute; thể sử dụng li&ecirc;n tục cả ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng lo m&aacute;y bị hết pin giữa chừng. Sản phẩm cũng được t&iacute;ch hợp sạc nhanh 25W n&ecirc;n chỉ với v&agrave;i ph&uacute;t sạc l&agrave; lại tiếp tục d&ugrave;ng b&igrave;nh thường.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image1.jpeg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Galaxy A52 chắc hẳn sẽ l&agrave; sản phẩm tiếp nối sự th&agrave;nh c&ocirc;ng của Galaxy A51 v&agrave; trở th&agrave;nh chiếc smartphone đ&aacute;p ứng tốt mọi nhu cầu của kh&aacute;ch h&agrave;ng. Từ thiết kế, camera cho đến cấu h&igrave;nh đều xuất sắc trong tầm gi&aacute;.&nbsp;</p>', 1, 1, 4, 1, 0, '2021-07-31 20:45:45', '2021-07-31 20:45:45', NULL),
(22, 'Samsung Galaxy A22 - Chính hãng', 'samsung-galaxy-a22-chinh-hang', 'Mua Samsung Galaxy A22 - Chính hãng giá rẻ nhất Việt Nam', '<p>Galaxy A22 l&agrave; d&ograve;ng smartphone thuộc ph&acirc;n kh&uacute;c tầm trung mới ra mắt của Samsung. Với một mức gi&aacute; v&ocirc; c&ugrave;ng tốt, bạn đ&atilde; sở hữu cho m&igrave;nh một chiếc smartphone c&oacute; nhiều t&iacute;nh năng nổi bật. Đ&acirc;y chắc chắn sẽ l&agrave; sản phẩm đem đến trải nghiệm tuyệt vời cho người d&ugrave;ng.</p>\r\n\r\n<p>&nbsp;</p>', '<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế trẻ trung, m&agrave;n h&igrave;nh 90Hz tuyệt đỉnh</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Vẻ ngo&agrave;i của Galaxy A22 mang đậm t&iacute;nh đặc trưng của d&ograve;ng c&aacute;c d&ograve;ng Galaxy gi&aacute; rẻ ra mắt trong thời gian gần đ&acirc;y của Samsung. M&aacute;y được ho&agrave;n thiện từ khung viền v&agrave; mặt lưng nhựa nguy&ecirc;n khối với trọng lượng 203g, với c&aacute;c g&oacute;c cạnh bo tr&ograve;n cho cảm gi&aacute;c cầm nắm chắc tay, thoải m&aacute;i.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/a22.png\" style=\"height:387px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ở mặt trước, Galaxy A22 LTE trang bị m&agrave;n h&igrave;nh giọt nước 6.4 inch, sử dụng tấm nền Super AMOLED c&oacute; độ ph&acirc;n giải HD+ k&egrave;m tần số qu&eacute;t 90Hz cho kh&ocirc;ng gian hiển thị lớn, m&agrave;u sắc tươi tắn. Ngo&agrave;i ra,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" style=\"text-decoration:none; color:#00483d\">cảm biến v&acirc;n tay</a>&nbsp;được t&iacute;ch hợp v&agrave;o n&uacute;t nguồn ở cạnh b&ecirc;n cho dễ d&agrave;ng thao t&aacute;c chạm mở nhanh ch&oacute;ng, tiện lợi.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung đem tới cho người d&ugrave;ng c&aacute;c sắc m&agrave;u thời thượng bao gồm Xanh Mint, T&iacute;m Unicorn v&agrave; Đen Diamond để bạn thỏa th&iacute;ch chọn lựa theo c&aacute; t&iacute;nh ri&ecirc;ng của m&igrave;nh.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Bộ 4 Camera t&iacute;ch hợp c&ocirc;ng nghệ chống rung quang học OIS</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy A22 LTE được trang bị bộ tứ camera được xếp th&agrave;nh h&igrave;nh &ocirc; vu&ocirc;ng ở ph&iacute;a mặt lưng m&aacute;y. Trong đ&oacute;, camera ch&iacute;nh đạt 48MP mang lại h&igrave;nh ảnh chất lượng cao, vừa sắc n&eacute;t ch&acirc;n thật trong mọi chế độ. Tiếp đến l&agrave; camera chụp g&oacute;c si&ecirc;u rộng 8MP cho ph&eacute;p mở rộng khung h&igrave;nh ấn tượng l&ecirc;n đến 123 độ, camera x&oacute;a ph&ocirc;ng 2M v&agrave; camera Macro với c&ocirc;ng nghệ chụp cận cảnh 2MP.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/a22-2.png\" style=\"height:399px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Đ&aacute;ng ch&uacute; &yacute;, đ&acirc;y l&agrave; thiết bị ti&ecirc;n phong được t&iacute;ch hợp c&ocirc;ng nghệ chống rung quang học OIS, gi&uacute;p chụp ảnh quay phim mượt m&agrave;, giảm thiểu rung lắc hay nh&ograve;e h&igrave;nh ngay cả trong m&ocirc;i trường thiếu s&aacute;ng.&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ngo&agrave;i ra, ở mặt trước, camera selfie được hỗ trợ l&ecirc;n tới 13MP, kết hợp c&ugrave;ng nhiều bộ lọc tự động c&oacute; sẵn tr&ecirc;n m&aacute;y, đem đến cho người d&ugrave;ng những bức h&igrave;nh tự sướng đẹp lung linh v&agrave; bắt n&eacute;t cực chuẩn.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Hiệu năng mượt m&agrave;</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Về mặt cấu h&igrave;nh, Galaxy A22 LTE sẽ đi k&egrave;m con chip MediaTek G80 gi&uacute;p m&aacute;y vận h&agrave;nh trơn tru ở c&aacute;c t&aacute;c vụ xử l&yacute; hằng ng&agrave;y. C&ugrave;ng với đ&oacute; l&agrave; RAM 6GB k&egrave;m bộ nhớ 128GB cho khả năng đa nhiệm tương đối ổn định, c&ugrave;ng kh&ocirc;ng gian lưu trữ kho t&agrave;ng h&igrave;nh ảnh, video đủ lớn.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ngo&agrave;i ra, GPU Mali-G52 MP2 c&ograve;n mang đến khả năng xử l&yacute; đồ họa ấn tượng. Đồng thời đ&acirc;y cũng l&agrave; c&ocirc;ng cụ gi&uacute;p hỗ trợ, tối ưu hiệu suất v&agrave; tăng tốc độ phản hồi trong game để đem lại cho bạn trải nghiệm giải tr&iacute; mượt m&agrave;.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/a22-3.png\" style=\"height:370px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy A22 LTE sẽ chạy tr&ecirc;n hệ điều h&agrave;nh Android 11 v&agrave; c&oacute; giao diện One UI 3.1, t&iacute;ch hợp nhiều t&iacute;nh năng mới như hỗ trợ quay video từ tất cả c&aacute;c camera của điện thoại, sử dụng c&ugrave;ng l&uacute;c camera trước v&agrave; sau, chụp được nhiều khung h&igrave;nh hơn mỗi gi&acirc;y...&nbsp;</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Pin tr&acirc;u, hỗ trợ sạc nhanh 15W</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung đ&atilde; trang bị cho chiếc điện thoại n&agrave;y một vi&ecirc;n pin dung lượng lớn 5000mAh. Kết hợp với m&agrave;n h&igrave;nh tiết kiệm pin, mang đến thời gian sử dụng k&eacute;o d&agrave;i một c&aacute;ch ấn tượng suốt cả ng&agrave;y d&agrave;i.&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">B&ecirc;n cạnh đ&oacute;, sản phẩm cũng hỗ trợ sạc nhanh 15W đi k&egrave;m th&ocirc;ng qua cổng sạc Type-C si&ecirc;u tiện lợi, vừa r&uacute;t ngắn thời gian sạc, lại c&oacute; thể gi&uacute;p người d&ugrave;ng sử dụng l&acirc;u hơn.</span></span></span></span></p>', 1, 1, 4, 1, 0, '2021-07-31 21:06:27', '2021-07-31 21:06:27', NULL),
(23, 'Apple Watch Series 3 GPS 42mm – Chính hãng VN/A', 'apple-watch-series-3-gps-42mm-–-chinh-hang-vna', 'Mua Apple Watch Series 3 GPS 42mm – Chính hãng VN/A', '<p>Mua Apple Watch Series 3 GPS 42mm &ndash; Ch&iacute;nh h&atilde;ng VN/A h&atilde;y gi&aacute; tốt nhất Việt Nam với nhiều ưu đ&atilde;i hay đến với ch&uacute;ng t&ocirc;i .</p>', '<p>Mua Apple Watch Series 3 GPS 42mm &ndash; Ch&iacute;nh h&atilde;ng VN/A h&atilde;y gi&aacute; tốt nhất Việt Nam với nhiều ưu đ&atilde;i hay đến với ch&uacute;ng t&ocirc;i .</p>', 1, 1, 15, 1, 0, '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(24, 'Apple Watch Series 6 GPS (Viền nhôm dây cao su) – Chính hãng VN/A', 'apple-watch-series-6-gps-vien-nhom-day-cao-su-–-chinh-hang-vna', 'Mua Apple Watch Series 6 GPS (Viền nhôm dây cao su) – Chính hãng VN/A giá tốt nhất', '<p>Mua Apple Watch Series 6 GPS (Viền nh&ocirc;m d&acirc;y cao su) &ndash; Ch&iacute;nh h&atilde;ng VN/A gi&aacute; tốt nhất , h&atilde;y đến với ch&uacute;ng tối , ch&uacute;ng tối lu&ocirc;n mang đến cho qu&yacute; kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất , thời thượng nhất v&agrave; đẹp đẽ nhất .&nbsp;</p>', '<h1><strong><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#646464\">Đồng hồ th&ocirc;ng minh Apple Watch S6 (4G) 44mm - Viền nh&ocirc;m d&acirc;y cao su gi&aacute; rẻ ch&iacute;nh h&atilde;ng VN/A&nbsp;</span></span></span></strong></h1>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ng&agrave;y nay, những chiếc đồng hồ th&ocirc;ng minh đ&atilde; trở th&agrave;nh phụ kiện kh&ocirc;ng thể thiếu của nhiều người d&ugrave;ng. Trong đ&oacute;, c&aacute;c mẫu Apple Watch của nh&agrave; &ldquo;T&aacute;o khuyết&rdquo; được đ&aacute;nh gi&aacute; l&agrave; phổ biến nhất bởi thiết kế độc đ&aacute;o v&agrave; những t&iacute;nh năng v&ocirc; c&ugrave;ng hữu &iacute;ch. Năm 2020, Apple đ&atilde; giới thiệu đến người d&ugrave;ng mẫu Apple Watch Series 6. Nếu bạn đang tham khảo một mẫu đồng hồ th&ocirc;ng minh th&igrave; đừng bỏ qua sản phẩm Apple Watch Series 6 (4G) 40mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A tại Ho&agrave;ng H&agrave; Mobile.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-40-1.jpeg\" style=\"height:400px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#646464\">Thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền sang trọng</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Những sản phẩm của Apple lu&ocirc;n nổi bật bởi thiết kế độc đ&aacute;o, kh&aacute;c biệt so với c&aacute;c thương hiệu kh&aacute;c tr&ecirc;n thị trường. Mẫu đồng hồ th&ocirc;ng minh Apple Watch Series 6 (4G) 44mm - Viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A vẫn giữ nguy&ecirc;n ng&ocirc;n ngữ thiết kế mặt vu&ocirc;ng. Tuy nhi&ecirc;n, d&ograve;ng Apple Watch Series 6 mới nhất c&oacute; thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền, c&aacute;c cạnh cực mỏng, bốn g&oacute;c được bo cong mềm mại tạo cảm gi&aacute;c tinh tế khi đeo tr&ecirc;n cổ tay. Tấm nền Retina LTPO OLED 1.78 inch lu&ocirc;n bật, đem lại chất lượng hiển thị h&igrave;nh ảnh sắc n&eacute;t, r&otilde; r&agrave;ng hơn trong c&aacute;c điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s3-40-2.jpeg\" style=\"height:400px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Phần vỏ v&agrave; viền của đồng hồ Apple Watch Series 6 (4G) 44mm ch&iacute;nh h&atilde;ng được ho&agrave;n thiện từ chất liệu nh&ocirc;m mang đến cảm gi&aacute;c sang trọng, cao cấp. D&acirc;y đeo của đồng hồ được l&agrave;m từ cao su cao cấp, mềm mại, thoải m&aacute;i khi đeo tr&ecirc;n tay v&agrave; kh&ocirc;ng để lại dấu lằn nếu sử dụng li&ecirc;n tục trong thời gian d&agrave;i. Phi&ecirc;n bản n&agrave;y c&oacute; k&iacute;ch thước d&acirc;y đeo 44mm, ph&ugrave; hợp với cổ tay của phần lớn người d&ugrave;ng. Phần m&oacute;c c&agrave;i với đồng hồ được thiết kế tỉ mỉ, vừa khớp để người d&ugrave;ng c&oacute; thể dễ d&agrave;ng thay thế d&acirc;y đeo theo sở th&iacute;ch của m&igrave;nh. Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A c&oacute; sẵn c&aacute;c t&ugrave;y chọn m&agrave;u xanh, đỏ, x&aacute;m v&agrave; m&agrave;u bạc.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><strong><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#646464\">Hỗ trợ đa dạng c&aacute;c t&iacute;nh năng</span></span></span></strong></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">B&ecirc;n cạnh thiết kế sang trọng, đẳng cấp, chiếc đồng hồ th&ocirc;ng minh Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A c&ograve;n hỗ trợ rất nhiều t&iacute;nh năng hữu &iacute;ch cho người d&ugrave;ng. Đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; t&iacute;nh năng đo nồng độ oxy trong m&aacute;u để đưa ra cảnh b&aacute;o li&ecirc;n quan đến bệnh về h&ocirc; hấp. T&iacute;nh năng th&uacute; vị n&agrave;y hiện đ&atilde; hỗ trợ cho người d&ugrave;ng tại Việt Nam. B&ecirc;n cạnh đ&oacute;, Apple Watch Series 6 c&ograve;n hỗ trợ đo nhịp tim quang học v&agrave; điện t&acirc;m đồ. Ngo&agrave;i ra, đồng hồ c&ograve;n c&oacute; t&iacute;nh năng theo d&otilde;i giấc ngủ để đề xuất cải thiện thời gian nghỉ ngơi hiệu quả hơn.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Một trong những l&yacute; do người d&ugrave;ng lựa chọn đồng hồ th&ocirc;ng minh l&agrave; t&iacute;nh năng thể thao như một trợ l&yacute; luyện tập đ&aacute;ng tin cậy. Bạn c&oacute; thể lựa chọn c&aacute;c chế độ như chạy bộ, bơi lội, đạp xe, yoga&hellip;, chiếc Apple Watch sẽ hướng dẫn bạn sau đ&oacute; đưa lại th&ocirc;ng tin của qu&aacute; tr&igrave;nh luyện tập. Một số t&iacute;nh năng mới được Apple bổ sung cho d&ograve;ng Series 6 như nhắc nhở rửa tay để loại bỏ vi khuẩn sau khi tiếp x&uacute;c b&ecirc;n ngo&agrave;i. Hoặc thiết lập gia đ&igrave;nh để quản l&yacute; li&ecirc;n lạc với c&aacute;c th&agrave;nh vi&ecirc;n chỉ với một chiếc iPhone. Trong trường hợp khẩn cấp, Apple Watch Series 6 cũng gửi cảnh b&aacute;o k&egrave;m vị tr&iacute; để gi&uacute;p người d&ugrave;ng nhận được hỗ trợ sớm nhất. Apple Watch Series 6 (4G) 44mm ch&iacute;nh h&atilde;ng VN/A kh&ocirc;ng chỉ l&agrave; người bạn đồng h&agrave;nh m&agrave; c&ograve;n l&agrave; b&aacute;c sĩ đ&aacute;ng tin cậy.</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:15px\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#646464\">Kết nối 4G tiện lợi, thời lượng pin tới 18 giờ</span></span></span></span></h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s6-40-3.jpeg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Đối với phi&ecirc;n bản Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A, thiết bị hỗ trợ kết nối 4G v&ocirc; c&ugrave;ng tiện lợi. Bạn c&oacute; thể giữ li&ecirc;n lạc, nhận th&ocirc;ng b&aacute;o từ người th&acirc;n, bạn b&egrave; mọi l&uacute;c mọi nơi. B&ecirc;n cạnh đ&oacute;, Apple Watch Series 6 ch&iacute;nh h&atilde;ng c&oacute; vi&ecirc;n pin 303,8mAh kết hợp với sạc kh&ocirc;ng d&acirc;y cho thời lượng sử dụng tối đa l&ecirc;n tới 18 giờ. Thiết bị n&agrave;y được chứng nhận chuẩn chống nước l&ecirc;n tới 50m, chạy tr&ecirc;n watchOS 7.0 mới nhất. Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A được b&aacute;n tr&ecirc;n hệ thống của Ho&agrave;ng H&agrave; Mobile với mức gi&aacute; ưu đ&atilde;i v&agrave; chế độ bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</span></span></span></span></p>', 1, 1, 15, 1, 0, '2021-08-01 18:09:19', '2021-08-01 18:15:57', NULL),
(25, 'Apple Watch Series 6 GPS 44mm (Viền nhôm dây cao su) – Chính hãng VN/A', 'apple-watch-series-6-gps-44mm-vien-nhom-day-cao-su-–-chinh-hang-vna', 'Mua Apple Watch Series 6 GPS (Viền nhôm dây cao su) – Chính hãng VN/A', '<p>Mua Apple Watch Series 6 GPS (Viền nh&ocirc;m d&acirc;y cao su) &ndash; Ch&iacute;nh h&atilde;ng VN/A gi&aacute; tốt nhất , h&atilde;y đến với ch&uacute;ng tối , ch&uacute;ng tối lu&ocirc;n mang đến cho qu&yacute; kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất , thời thượng nhất v&agrave; đẹp đẽ nhất .&nbsp;</p>', '<h1><strong>Thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền sang trọng</strong></h1>\r\n\r\n<p>Những sản phẩm của Apple lu&ocirc;n nổi bật bởi thiết kế độc đ&aacute;o, kh&aacute;c biệt so với c&aacute;c thương hiệu kh&aacute;c tr&ecirc;n thị trường. Mẫu đồng hồ th&ocirc;ng minh Apple Watch Series 6 (4G) 44mm - Viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A vẫn giữ nguy&ecirc;n ng&ocirc;n ngữ thiết kế mặt vu&ocirc;ng. Tuy nhi&ecirc;n, d&ograve;ng Apple Watch Series 6 mới nhất c&oacute; thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền, c&aacute;c cạnh cực mỏng, bốn g&oacute;c được bo cong mềm mại tạo cảm gi&aacute;c tinh tế khi đeo tr&ecirc;n cổ tay. Tấm nền Retina LTPO OLED 1.78 inch lu&ocirc;n bật, đem lại chất lượng hiển thị h&igrave;nh ảnh sắc n&eacute;t, r&otilde; r&agrave;ng hơn trong c&aacute;c điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s3-40-2.jpeg\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Phần vỏ v&agrave; viền của đồng hồ Apple Watch Series 6 (4G) 44mm ch&iacute;nh h&atilde;ng được ho&agrave;n thiện từ chất liệu nh&ocirc;m mang đến cảm gi&aacute;c sang trọng, cao cấp. D&acirc;y đeo của đồng hồ được l&agrave;m từ cao su cao cấp, mềm mại, thoải m&aacute;i khi đeo tr&ecirc;n tay v&agrave; kh&ocirc;ng để lại dấu lằn nếu sử dụng li&ecirc;n tục trong thời gian d&agrave;i. Phi&ecirc;n bản n&agrave;y c&oacute; k&iacute;ch thước d&acirc;y đeo 44mm, ph&ugrave; hợp với cổ tay của phần lớn người d&ugrave;ng. Phần m&oacute;c c&agrave;i với đồng hồ được thiết kế tỉ mỉ, vừa khớp để người d&ugrave;ng c&oacute; thể dễ d&agrave;ng thay thế d&acirc;y đeo theo sở th&iacute;ch của m&igrave;nh. Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A c&oacute; sẵn c&aacute;c t&ugrave;y chọn m&agrave;u xanh, đỏ, x&aacute;m v&agrave; m&agrave;u bạc.</p>\r\n\r\n<p><strong><span style=\"font-size:20px\">Đồng hồ trog cuộc sống hiện nay</span></strong></p>\r\n\r\n<p>Ng&agrave;y nay, những chiếc đồng hồ th&ocirc;ng minh đ&atilde; trở th&agrave;nh phụ kiện kh&ocirc;ng thể thiếu của nhiều người d&ugrave;ng. Trong đ&oacute;, c&aacute;c mẫu Apple Watch của nh&agrave; &ldquo;T&aacute;o khuyết&rdquo; được đ&aacute;nh gi&aacute; l&agrave; phổ biến nhất bởi thiết kế độc đ&aacute;o v&agrave; những t&iacute;nh năng v&ocirc; c&ugrave;ng hữu &iacute;ch. Năm 2020, Apple đ&atilde; giới thiệu đến người d&ugrave;ng mẫu Apple Watch Series 6. Nếu bạn đang tham khảo một mẫu đồng hồ th&ocirc;ng minh th&igrave; đừng bỏ qua sản phẩm Apple Watch Series 6 (4G) 40mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A tại Ho&agrave;ng H&agrave; Mobile.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s6-40-1.jpeg\" /></p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>Hỗ trợ đa dạng c&aacute;c t&iacute;nh năng</strong></span></p>\r\n\r\n<p>B&ecirc;n cạnh thiết kế sang trọng, đẳng cấp, chiếc đồng hồ th&ocirc;ng minh Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A c&ograve;n hỗ trợ rất nhiều t&iacute;nh năng hữu &iacute;ch cho người d&ugrave;ng. Đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; t&iacute;nh năng đo nồng độ oxy trong m&aacute;u để đưa ra cảnh b&aacute;o li&ecirc;n quan đến bệnh về h&ocirc; hấp. T&iacute;nh năng th&uacute; vị n&agrave;y hiện đ&atilde; hỗ trợ cho người d&ugrave;ng tại Việt Nam. B&ecirc;n cạnh đ&oacute;, Apple Watch Series 6 c&ograve;n hỗ trợ đo nhịp tim quang học v&agrave; điện t&acirc;m đồ. Ngo&agrave;i ra, đồng hồ c&ograve;n c&oacute; t&iacute;nh năng theo d&otilde;i giấc ngủ để đề xuất cải thiện thời gian nghỉ ngơi hiệu quả hơn.</p>\r\n\r\n<p>Một trong những l&yacute; do người d&ugrave;ng lựa chọn đồng hồ th&ocirc;ng minh l&agrave; t&iacute;nh năng thể thao như một trợ l&yacute; luyện tập đ&aacute;ng tin cậy. Bạn c&oacute; thể lựa chọn c&aacute;c chế độ như chạy bộ, bơi lội, đạp xe, yoga&hellip;, chiếc Apple Watch sẽ hướng dẫn bạn sau đ&oacute; đưa lại th&ocirc;ng tin của qu&aacute; tr&igrave;nh luyện tập. Một số t&iacute;nh năng mới được Apple bổ sung cho d&ograve;ng Series 6 như nhắc nhở rửa tay để loại bỏ vi khuẩn sau khi tiếp x&uacute;c b&ecirc;n ngo&agrave;i. Hoặc thiết lập gia đ&igrave;nh để quản l&yacute; li&ecirc;n lạc với c&aacute;c th&agrave;nh vi&ecirc;n chỉ với một chiếc iPhone. Trong trường hợp khẩn cấp, Apple Watch Series 6 cũng gửi cảnh b&aacute;o k&egrave;m vị tr&iacute; để gi&uacute;p người d&ugrave;ng nhận được hỗ trợ sớm nhất. Apple Watch Series 6 (4G) 44mm ch&iacute;nh h&atilde;ng VN/A kh&ocirc;ng chỉ l&agrave; người bạn đồng h&agrave;nh m&agrave; c&ograve;n l&agrave; b&aacute;c sĩ đ&aacute;ng tin cậy.</p>\r\n\r\n<h3><strong><span style=\"font-size:20px\">Kết nối 4G tiện lợi, thời lượng pin tới 18 giờ</span></strong></h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/s6-40-3.jpeg\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Đối với phi&ecirc;n bản Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A, thiết bị hỗ trợ kết nối 4G v&ocirc; c&ugrave;ng tiện lợi. Bạn c&oacute; thể giữ li&ecirc;n lạc, nhận th&ocirc;ng b&aacute;o từ người th&acirc;n, bạn b&egrave; mọi l&uacute;c mọi nơi. B&ecirc;n cạnh đ&oacute;, Apple Watch Series 6 ch&iacute;nh h&atilde;ng c&oacute; vi&ecirc;n pin 303,8mAh kết hợp với sạc kh&ocirc;ng d&acirc;y cho thời lượng sử dụng tối đa l&ecirc;n tới 18 giờ. Thiết bị n&agrave;y được chứng nhận chuẩn chống nước l&ecirc;n tới 50m, chạy tr&ecirc;n watchOS 7.0 mới nhất. Apple Watch Series 6 (4G) 44mm viền nh&ocirc;m d&acirc;y cao su ch&iacute;nh h&atilde;ng VN/A được b&aacute;n tr&ecirc;n hệ thống của Ho&agrave;ng H&agrave; Mobile với mức gi&aacute; ưu đ&atilde;i v&agrave; chế độ bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</p>', 1, 1, 15, 1, 24, '2021-08-01 18:22:00', '2021-08-01 18:22:00', NULL),
(26, 'Pin dự phòng 10000mAh Mi 18W Fast Charge Power Bank 3', 'pin-du-phong-10000mah-mi-18w-fast-charge-power-bank-3', 'Mua Pin dự phòng 10000mAh Mi 18W Fast Charge Power Bank 3 giá rẻ nhất Việt Nam', '<p>Mua Pin dự ph&ograve;ng 10000mAh Mi 18W Fast Charge Power Bank 3 gi&aacute; rẻ nhất Việt Nam</p>', '<p><strong>Vỏ hợp kim nh&ocirc;m chống rơi v&agrave; va đập.</strong><br />\r\nVỏ kim loại nguy&ecirc;n khối, độ bền cao, chống rơi v&agrave; va đập. Thiết kế bo tr&ograve;n cạnh cho ph&eacute;p cầm nắm một tay thoải m&aacute;i hơn.</p>\r\n\r\n<p><strong>Sạc 2 thiết bị đồng thời, hỗ trợ sạc nhanh 2 chiều.</strong><br />\r\nHai cổng sạc USB-A c&oacute; sạc nhanh với tốc độ cao 18W, sạc nhanh c&aacute;c thiết bị c&oacute; hỗ trợ QC3.0. &nbsp;Hai cổng sạc v&agrave;o MicroUSB v&agrave; Type-C cũng hỗ trợ sạc nhanh gi&uacute;p sạc đầy chỉ từ 4-6h.</p>\r\n\r\n<p><strong>Dung lượng lớn 10000mAh</strong><br />\r\nSử dụng pin polymer-ion chất lượng cao, dung lượng lớn c&oacute; thể cung cấp thời lượng sử dụng l&acirc;u d&agrave;i cho c&aacute;c thiết bị th&ocirc;ng minh như điện thoại di động, m&aacute;y t&iacute;nh bảng v&agrave; m&aacute;y ảnh kỹ thuật số, v&agrave; gi&uacute;p k&eacute;o d&agrave;i cho c&ocirc;ng việc v&agrave; cuộc sống.</p>', 1, 1, 20, 1, 0, '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(27, 'Sạc iPhone Xs Max Chính hãng', 'sac-iphone-xs-max-chinh-hang', 'Mua Sạc iPhone Xs Max Chính hãng giá rẻ nhất Việt Nam', '<p>Củ sạc iPhone Xs Max b&oacute;c m&aacute;y, chưa qua sử dụng</p>', '<p>Củ sạc iPhone Xs Max b&oacute;c m&aacute;y, chưa qua sử dụng</p>', 1, 1, 22, 1, 0, '2021-08-01 20:42:52', '2021-08-01 20:42:52', NULL),
(28, 'CÁP Lightning iPhone  USB C to Lightning', 'cap-lightning-iphone-usb-c-to-lightning', 'Mua CÁP Lightning iPhone (Chính hãng) – USB C to Lightning giá rẻ nhất Việt Nam', '<p>Mua C&Aacute;P Lightning iPhone (Ch&iacute;nh h&atilde;ng) &ndash; USB C to Lightning gi&aacute; rẻ nhất Việt Nam</p>', '<p>Mua C&Aacute;P Lightning iPhone (Ch&iacute;nh h&atilde;ng) &ndash; USB C to Lightning gi&aacute; rẻ nhất Việt Nam đảm bảo ch&iacute;nh h&atilde;ng 100% .</p>', 1, 1, 22, 1, 0, '2021-08-01 20:45:46', '2021-08-01 20:45:46', NULL),
(29, 'Sạc nhanh Pisen 20w (combo sạc + cáp lightning)', 'sac-nhanh-pisen-20w-combo-sac-cap-lightning', 'Mua Sạc nhanh Pisen 20w (combo sạc + cáp lightning) giá rẻ nhất Việt Nam', '<p>Mua Sạc nhanh Pisen 20w (combo sạc + c&aacute;p lightning) gi&aacute; rẻ nhất Việt Nam</p>', '<p>Mua Sạc nhanh Pisen 20w (combo sạc + c&aacute;p lightning) gi&aacute; rẻ nhất Việt Nam đảm bảo ch&iacute;nh h&atilde;ng 100% .</p>', 1, 1, 22, 1, 0, '2021-08-01 20:48:11', '2021-08-01 20:48:11', NULL),
(30, 'Apple Watch Series 6 44mm LTE (Viền thép dây thép) – Chính hãng VN/A', 'apple-watch-series-6-44mm-lte-vien-thep-day-thep-–-chinh-hang-vna', 'Mua Apple Watch Series 6 44mm LTE (Viền thép dây thép) – Chính hãng VN/A giá rẻ nhất Việt Nam', '<p>Mua Apple Watch Series 6 44mm LTE (Viền th&eacute;p d&acirc;y th&eacute;p) &ndash; Ch&iacute;nh h&atilde;ng VN/A gi&aacute; rẻ nhất Việt Nam .&nbsp;Mang tới cho người d&ugrave;ng những t&iacute;nh năng hiện đại bậc nhất như đo nhịp tim, khả năng kết nối Internet độc lập c&ugrave;ng h&agrave;ng loạt những t&iacute;nh năng hữu &iacute;ch kh&aacute;c, Apple Watch Series 6 (4G) 40mm ch&iacute;nh l&agrave; chiếc smartwatch m&agrave; người d&ugrave;ng đang t&igrave;m kiếm.</p>', '<p><strong><span style=\"font-size:15px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế hiện đại c&ugrave;ng khả năng kết nối mạng độc lập</span></span></span></span></strong></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p sở hữu một bộ vỏ v&oacute;i viền th&eacute;p cưc k&igrave; sang trọng v&agrave; b&oacute;ng bẩy c&ugrave;ng phần d&acirc;y đeo cũng được ho&agrave;n thiện từ chất liệu th&eacute;p bền bỉ. Đặc biệt phần d&acirc;y th&eacute;p n&agrave;y được thiết kế theo kiểu dạng c&aacute;c sợi th&eacute;p đan xen lại với nhau, vừa tạo n&ecirc;n cảm gi&aacute;c bền bỉ, chắc chắn, lại vẫn to&aacute;t l&ecirc;n được vẻ sang trọng vốn c&oacute; của thiết bị. Ngo&agrave;i ra thiết kế d&acirc;y đẹo dạng n&agrave;y cũng tạo n&ecirc;n sự thoải m&aacute;i v&agrave; chống thấm mồ h&ocirc;i d&agrave;nh cho người d&ugrave;ng. M&agrave;n h&igrave;nh Retina với phần viền benzel giờ đ&acirc;y đ&atilde; được Apple v&aacute;t mỏng tối đa, mang tới một thiết kế cực k&igrave; tinh tế v&agrave; hiện đại.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40-2.jpeg\" style=\"height:463px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 (4G) 40mm phi&ecirc;n bản viền th&eacute;p d&acirc;y th&eacute;p c&ograve;n hỗ trợ người d&ugrave;ng lắp eSIM, gi&uacute;p cho thiết bị c&oacute; thể hoạt động v&agrave; kết nối Internet ho&agrave;n to&agrave;n độc lập như một mẫu smartphone th&ocirc;ng thường. Với khả năng n&agrave;y, Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i nghe gọi, trả lời tin nhắn, lướt web, nghe nhạc online m&agrave; kh&ocirc;ng cần phải c&oacute; iPhone hoặc iPad b&ecirc;n cạnh.</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cấu h&igrave;nh hiệu năng ấn tượng</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p được trang bị bộ vi xử l&yacute; Apple S6 l&otilde;i k&eacute;p si&ecirc;u mới v&agrave; si&ecirc;u mạnh mẽ của ch&iacute;nh Apple nghi&ecirc;n cứu v&agrave; sản xuất, mang tới một hiệu suất xử l&yacute; nhanh v&agrave; ổn định, gi&uacute;p người d&ugrave;ng c&oacute; được những trải nghiệm sử dụng h&agrave;ng ng&agrave;y mượt m&agrave; v&agrave; h&agrave;i l&ograve;ng nhất. Đi c&ugrave;ng với đ&oacute; l&agrave; thanh RAM 1GB v&agrave; 32GB bộ trong, gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i lưu trữ ứng dụng như nhạc, ảnh,...</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ngo&agrave;i c&oacute; được hiệu năng mạnh mẽ v&agrave; ấn tượng, Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p c&ograve;n hỗ trợ đầy đủ c&aacute;c bộ m&ocirc;n thể thao kh&aacute;c nhau bao gồm chạy bộ, chạy bền, Yoga, đạp xe,...Ngo&agrave;i ra v&igrave; được hỗ trợ khả năng chống nước 5 ATM n&ecirc;n m&aacute;y cũng sẽ t&iacute;ch hợp v&agrave; hỗ trợ người d&ugrave;ng trong bộ m&ocirc;n bơi lội. Đặc biệt, Apple Watch Series 6 cũng hỗ trợ hiển thị đầy đủ c&aacute;c chỉ số như khoảng c&aacute;ch, nhịp tim, lượng calo được đốt ch&aacute;y. Ngo&agrave;i ra, bạn c&oacute; thể đo độ cao khi đang leo n&uacute;i hoặc chạy leo dốc với chiếc smartwatch n&agrave;y.</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Trợ l&yacute; đo nhịp tim v&agrave; theo d&otilde;i giấc ngủ cho người d&ugrave;ng</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 sẽ lu&ocirc;n l&agrave; một người trợ l&yacute; sức khỏe b&ecirc;n cạnh người d&ugrave;ng 24/24, gi&uacute;p người d&ugrave;ng sẽ c&oacute; một cuộc sống khỏe mạnh hơn. Chiếc đồng hồ n&agrave;y sẽ đưa ra cho bạn những lời khuy&ecirc;n rất bổ &iacute;ch cho bạn mỗi ng&agrave;y. Đặc biệt, chiếc đồng hồ Apple Watch Series 6 cũng c&oacute; thể l&agrave; chiếc m&aacute;y đo nhịp tim cho người d&ugrave;ng mọi l&uacute;c mọi nơi, gi&uacute;p cho người d&ugrave;ng c&oacute; thể nắm bắt được t&igrave;nh trạng sức khỏe của m&igrave;nh, qua đ&oacute; kịp thời đưa ra được những biện ph&aacute;p hợp l&yacute; để tr&aacute;nh được những căn bệnh kh&ocirc;ng mong muốn.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:20px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Giải tr&iacute; mọi l&uacute;c mọi nơi</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Sở hữu được Apple Watch Series 6, bạn sẽ c&oacute; một người trợ l&yacute; v&agrave; ki&ecirc;m lu&ocirc;n người bạn ở b&ecirc;n cạnh mỗi khi cần. Kho nhạc số từ Apple Music sẽ mang tới cho bạn tới hơn 70 triệu b&agrave;i nhạc kh&aacute;c nhau đủ mọi thể loại tr&ecirc;n thế giới, gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm được b&agrave;i h&aacute;t theo đ&uacute;ng &ldquo;gu&rdquo; &acirc;m nhạc của m&igrave;nh. V&agrave; hiển nhi&ecirc;n l&agrave; &acirc;m nhạc cũng sẽ phần n&agrave;o gi&uacute;p bạn c&oacute; th&ecirc;m niềm hứng khởi để gi&uacute;p c&ocirc;ng việc v&agrave; việc luyện tập h&agrave;ng ng&agrave;y hiệu quả hơn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40-3.jpeg\" style=\"height:600px; width:600px\" /></span></span></span></span></p>', 1, 1, 15, 1, 0, '2021-08-01 21:06:22', '2021-08-01 21:06:22', NULL),
(31, 'Apple Watch Series 6 40mm LTE (Viền thép dây thép) – Chính hãng VN/A', 'apple-watch-series-6-40mm-lte-vien-thep-day-thep-–-chinh-hang-vna', 'Mua Apple Watch Series 6 40mm LTE (Viền thép dây thép) – Chính hãng VN/A giá rẻ nhất Việt Nam', '<p>Mua Apple Watch Series 6 40mm LTE (Viền th&eacute;p d&acirc;y th&eacute;p) &ndash; Ch&iacute;nh h&atilde;ng VN/A gi&aacute; rẻ nhất Việt Nam . Mang trong m&igrave;nh một phong c&aacute;ch thời thượng c&ugrave;ng với cả một bầu trời c&ocirc;ng nghệ .&nbsp;</p>', '<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cấu h&igrave;nh hiệu năng ấn tượng</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p được trang bị bộ vi xử l&yacute; Apple S6 l&otilde;i k&eacute;p si&ecirc;u mới v&agrave; si&ecirc;u mạnh mẽ của ch&iacute;nh Apple nghi&ecirc;n cứu v&agrave; sản xuất, mang tới một hiệu suất xử l&yacute; nhanh v&agrave; ổn định, gi&uacute;p người d&ugrave;ng c&oacute; được những trải nghiệm sử dụng h&agrave;ng ng&agrave;y mượt m&agrave; v&agrave; h&agrave;i l&ograve;ng nhất. Đi c&ugrave;ng với đ&oacute; l&agrave; thanh RAM 1GB v&agrave; 32GB bộ trong, gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i lưu trữ ứng dụng như nhạc, ảnh,...</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40-2.jpeg\" style=\"height:463px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ngo&agrave;i c&oacute; được hiệu năng mạnh mẽ v&agrave; ấn tượng, Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p c&ograve;n hỗ trợ đầy đủ c&aacute;c bộ m&ocirc;n thể thao kh&aacute;c nhau bao gồm chạy bộ, chạy bền, Yoga, đạp xe,...Ngo&agrave;i ra v&igrave; được hỗ trợ khả năng chống nước 5 ATM n&ecirc;n m&aacute;y cũng sẽ t&iacute;ch hợp v&agrave; hỗ trợ người d&ugrave;ng trong bộ m&ocirc;n bơi lội. Đặc biệt, Apple Watch Series 6 cũng hỗ trợ hiển thị đầy đủ c&aacute;c chỉ số như khoảng c&aacute;ch, nhịp tim, lượng calo được đốt ch&aacute;y. Ngo&agrave;i ra, bạn c&oacute; thể đo độ cao khi đang leo n&uacute;i hoặc chạy leo dốc với chiếc smartwatch n&agrave;y.</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Trợ l&yacute; đo nhịp tim v&agrave; theo d&otilde;i giấc ngủ cho người d&ugrave;ng</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 sẽ lu&ocirc;n l&agrave; một người trợ l&yacute; sức khỏe b&ecirc;n cạnh người d&ugrave;ng 24/24, gi&uacute;p người d&ugrave;ng sẽ c&oacute; một cuộc sống khỏe mạnh hơn. Chiếc đồng hồ n&agrave;y sẽ đưa ra cho bạn những lời khuy&ecirc;n rất bổ &iacute;ch cho bạn mỗi ng&agrave;y. Đặc biệt, chiếc đồng hồ Apple Watch Series 6 cũng c&oacute; thể l&agrave; chiếc m&aacute;y đo nhịp tim cho người d&ugrave;ng mọi l&uacute;c mọi nơi, gi&uacute;p cho người d&ugrave;ng c&oacute; thể nắm bắt được t&igrave;nh trạng sức khỏe của m&igrave;nh, qua đ&oacute; kịp thời đưa ra được những biện ph&aacute;p hợp l&yacute; để tr&aacute;nh được những căn bệnh kh&ocirc;ng mong muốn.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Giải tr&iacute; mọi l&uacute;c mọi nơi</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Sở hữu được Apple Watch Series 6, bạn sẽ c&oacute; một người trợ l&yacute; v&agrave; ki&ecirc;m lu&ocirc;n người bạn ở b&ecirc;n cạnh mỗi khi cần. Kho nhạc số từ Apple Music sẽ mang tới cho bạn tới hơn 70 triệu b&agrave;i nhạc kh&aacute;c nhau đủ mọi thể loại tr&ecirc;n thế giới, gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm được b&agrave;i h&aacute;t theo đ&uacute;ng &ldquo;gu&rdquo; &acirc;m nhạc của m&igrave;nh. V&agrave; hiển nhi&ecirc;n l&agrave; &acirc;m nhạc cũng sẽ phần n&agrave;o gi&uacute;p bạn c&oacute; th&ecirc;m niềm hứng khởi để gi&uacute;p c&ocirc;ng việc v&agrave; việc luyện tập h&agrave;ng ng&agrave;y hiệu quả hơn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40-3.jpeg\" style=\"height:600px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế hiện đại c&ugrave;ng khả năng kết nối mạng độc lập</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p sở hữu một bộ vỏ v&oacute;i viền th&eacute;p cưc k&igrave; sang trọng v&agrave; b&oacute;ng bẩy c&ugrave;ng phần d&acirc;y đeo cũng được ho&agrave;n thiện từ chất liệu th&eacute;p bền bỉ. Đặc biệt phần d&acirc;y th&eacute;p n&agrave;y được thiết kế theo kiểu dạng c&aacute;c sợi th&eacute;p đan xen lại với nhau, vừa tạo n&ecirc;n cảm gi&aacute;c bền bỉ, chắc chắn, lại vẫn to&aacute;t l&ecirc;n được vẻ sang trọng vốn c&oacute; của thiết bị. Ngo&agrave;i ra thiết kế d&acirc;y đẹo dạng n&agrave;y cũng tạo n&ecirc;n sự thoải m&aacute;i v&agrave; chống thấm mồ h&ocirc;i d&agrave;nh cho người d&ugrave;ng. M&agrave;n h&igrave;nh Retina với phần viền benzel giờ đ&acirc;y đ&atilde; được Apple v&aacute;t mỏng tối đa, mang tới một thiết kế cực k&igrave; tinh tế v&agrave; hiện đại.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s6-4g-40.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p>Apple Watch Series 6 (4G) 40mm phi&ecirc;n bản viền th&eacute;p d&acirc;y th&eacute;p c&ograve;n hỗ trợ người d&ugrave;ng lắp eSIM, gi&uacute;p cho thiết bị c&oacute; thể hoạt động v&agrave; kết nối Internet ho&agrave;n to&agrave;n độc lập như một mẫu smartphone th&ocirc;ng thường. Với khả năng n&agrave;y, Apple Watch Series 6 (4G) 40mm viền th&eacute;p d&acirc;y th&eacute;p gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i nghe gọi, trả lời tin nhắn, lướt web, nghe nhạc online m&agrave; kh&ocirc;ng cần phải c&oacute; iPhone hoặc iPad b&ecirc;n cạnh.</p>', 1, 1, 15, 1, 30, '2021-08-01 21:14:04', '2021-08-01 21:14:04', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `title`, `short_description`, `description`, `status`, `highlight`, `category_id`, `user_id`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(32, 'Xiaomi Redmi 9T Chính hãng', 'xiaomi-redmi-9t-chinh-hang', 'Mua Xiaomi Redmi 9T Chính hãng giá rẻ nhất Việt Nam', '<p>Xiaomi Redmi 9T xứng đ&aacute;ng trở th&agrave;nh một trong những sự lựa chọn h&agrave;ng đầu d&agrave;nh cho người d&ugrave;ng đang muốn sở hữu một mẫu smartphone c&oacute; cấu h&igrave;nh mạnh, thiết kế đẹp nhưng chỉ cần bỏ ra một số tiền hợp l&yacute;.</p>', '<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế trẻ trung, đa dạng sắc m&agrave;u</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Redmi 9T vẫn l&agrave; chiếc điện thoại đi theo ng&ocirc;n ngữ thiết kế cũ l&agrave; m&agrave;n h&igrave;nh tr&agrave;n viền dạng giọt nước với k&iacute;ch thước rộng 6.53 inch, tỉ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y đạt 19.5:9, điều n&agrave;y sẽ gi&uacute;p cho người d&ugrave;ng c&oacute; được nhiều kh&ocirc;ng gian trải nghiệm hơn. Độ ph&acirc;n giải m&agrave;n h&igrave;nh của Redmi 9T cũng đạt mức Full HD+ tr&ecirc;n tấm nền IPS LCD n&ecirc;n chất lượng hiển thị vẫn được đảm bảo ở mức sắc n&eacute;t v&agrave; g&oacute;c nh&igrave;n cực rộng. Với m&agrave;n h&igrave;nh của Redmi 9T, đảm bảo rằng bạn sẽ c&oacute; một trải nghiệm h&igrave;nh ảnh ho&agrave;n hảo nhất trong tầm gi&aacute;.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/mi-9t-1.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Ở ph&iacute;a mặt sau, phần mặt lưng của Redmi 9T được ho&agrave;n thiện ho&agrave;n to&agrave;n từ nhựa Polycarbonate cao cấp cho khả năng chống va đập tốt v&agrave; bền bỉ theo thời gian. Ngo&agrave;i ra, phần mặt lưng của Redmi 9T được h&atilde;ng thiết kế theo dạng cong 3D về 2 phần cạnh b&ecirc;n, gi&uacute;p đem lại cảm gi&aacute;c cầm nắm tốt nhất d&agrave;nh cho người d&ugrave;ng. M&aacute;y mang tới cho người d&ugrave;ng tất cả 4 t&ugrave;y chọn m&agrave;u sắc kh&aacute;c nhau bao gồm:&nbsp;Carbon Gray (X&aacute;m), Twilight Blue (Xanh da trời), Sunrise Orange (Cam), Ocean Green (Xanh l&aacute;).</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Chụp ảnh cực đỉnh với bộ tứ camera 48MP</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Hệ thống camera của Redmi 9T cũng l&agrave; một chi tiết m&agrave; kh&ocirc;ng thể kh&ocirc;ng nhắc tới. Tuy l&agrave; một mẫu điện thoại chỉ nằm ở phần kh&uacute;c tầm trung gi&aacute; rẻ thế nhưng Redmi cũng đ&atilde; ưu &aacute;i trang bị cho Redmi 9T một cụm camera bao gồm 4 ống k&iacute;nh ở ph&iacute;a mặt sau. Theo đ&oacute; cụm camera n&agrave;y c&oacute; th&ocirc;ng số kĩ thuật lần lượt bao gồm: camera ch&iacute;nh độ ph&acirc;n giải 48MP, camera g&oacute;c si&ecirc;u rộng 8MP v&agrave; 2 camera c&ograve;n lại l&agrave; macro v&agrave; chụp x&oacute;a ph&ocirc;ng c&oacute; c&ugrave;ng độ ph&acirc;n giải 2MP. Những t&iacute;nh năng hỗ trợ chụp ảnh v&agrave; quay video cũng kh&aacute; đa dạng như hỗ trợ lấy n&eacute;t Auto Focus, chụp ảnh HDR, chụp to&agrave;n cảnh Panorama; đặc biệt hỗ trợ quay phim ở độ ph&acirc;n giải Full HD 1080p@30fps. Trong khi đ&oacute;, camera selfie ph&iacute;a trước c&oacute; độ ph&acirc;n giải l&agrave; 8MP, cũng hỗ trợ quay video độ ph&acirc;n giải 1080p@30fps.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/redmi-9t-2.png\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Đặc biệt hơn cả đ&oacute; l&agrave; camera trước v&agrave; camera sau của Redmi 9T đều hỗ trợ tr&iacute; th&ocirc;ng minh nh&acirc;n tạo AI, đảm bảo sẽ mang lại cho người d&ugrave;ng những bức ảnh &ldquo;tự sướng&rdquo; với chất lượng cao nhất. Chưa hết, camera selfie 8MP n&agrave;y c&ograve;n t&iacute;ch hợp rất nhiều t&iacute;nh năng hữu dụng kh&aacute;c, gi&uacute;p người d&ugrave;ng c&oacute; thể tự tin selfie, gọi điện video cho bạn b&egrave; người th&acirc;n m&agrave; kh&ocirc;ng phải lo lắng tới việc chất lượng k&eacute;m.</span></span></span></span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cấu h&igrave;nh mượt m&agrave; với Snapdragon 662</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cung cấp sức mạnh xử l&yacute; cho Redmi 9T l&agrave; bộ vi xử l&yacute; Snapdragon 662 sản xuất tr&ecirc;n tiến tr&igrave;nh 11nm, cho tốc độ xung nhịp tối đa l&ecirc;n tới 2.0GHz, t&iacute;ch hợp bộ GPU xử l&yacute; đồ họa&nbsp;Adreno 610. Với th&ocirc;ng số kĩ thuật như vậy, Redmi 9T hứa hẹn sẽ mang lại cho người d&ugrave;ng khả năng xử l&yacute; mượt m&agrave;, ổn định, kể cả với c&aacute;c t&aacute;c vụ h&agrave;ng ng&agrave;y từ nhẹ nh&agrave;ng như nghe gọi, nhắn tin, lướt web cho tới việc chơi những tựa game online phổ biến hiện nay.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/redmi-9t-3.png\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Đi k&egrave;m với con chip Snapdragon 662 l&agrave; thanh RAM 4/6GB c&ugrave;ng bộ nhớ trong 64/128GB v&agrave; người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể mở rộng th&ecirc;m kh&ocirc;ng gian lưu trữ qua khe cắm thẻ nhớ ngo&agrave;i microSD.</span></span></span></span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Con m&atilde;nh th&uacute; với vi&ecirc;n pin khủng 6000mAh</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cung cấp năng lượng cho Redmi 9T l&agrave; vi&ecirc;n pin với dung lượng si&ecirc;u khủng l&ecirc;n tới 6000mAh, kết hợp c&ugrave;ng vi xử l&yacute; Snapdragon 662 tiết kiệm điện năng, m&aacute;y ho&agrave;n to&agrave;n c&oacute; thể thoải m&aacute;i sử dụng l&ecirc;n tới 1 ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng lo bị cạn kiệt năng lượng, thậm ch&iacute; c&oacute; thể l&ecirc;n tới 2 ng&agrave;y mới cần phải sạc lại. Redmi 9T được trang bị cổng sạc chuẩn USB-C, mẫu chuẩn sạc đ&atilde; rất phổ biến ở thời điểm hiện tại.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/redmi-9t-4.png\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p>Redmi 9T được c&agrave;i đặt sẵn Android 10 c&ugrave;ng giao diện người d&ugrave;ng MIUI 12 đ&atilde; qu&aacute; nổi tiếng. MIUI được người d&ugrave;ng biết tới l&agrave; một giao diện đẹp mắt v&agrave; dễ sử dụng, t&iacute;ch hợp nhiều t&iacute;nh năng cực k&igrave; hữu &iacute;ch, mới mẻ.&nbsp;</p>', 1, 1, 7, 1, 0, '2021-08-02 00:27:40', '2021-08-02 00:27:40', NULL),
(33, 'Samsung Galaxy S21 Plus 5G Chính hãng', 'samsung-galaxy-s21-plus-5g-chinh-hang', 'Mua Samsung Galaxy S21 Plus 5G Chính hãng', '<p>Mở đầu cuộc chơi flagship năm 2021, Samsung đ&atilde; giới thiệu chiếc Galaxy S21+ b&ecirc;n cạnh Galaxy S21 v&agrave; S21 Ultra. Đ&acirc;y l&agrave; một trong những chiếc m&aacute;y cao cấp nhất của Samsung hiện tại với đầu tư xứng đ&aacute;ng về cả phần cứng lẫn phần mềm.</p>', '<h3><strong><span style=\"font-size:20px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Kết nối 5G ho&agrave;n to&agrave;n mới</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Năm 2021, Samsung đ&atilde; đem đến Việt Nam những chiếc điện thoại Galaxy S đầu ti&ecirc;n hỗ trợ 5G. Galaxy S21+ sử dụng hai chuẩn 5G được triển khai tại Việt Nam l&agrave; sub-6 v&agrave; mmWave. Những si&ecirc;u phẩm mới nh&agrave; Samsung hứa hẹn đem lại cho người d&ugrave;ng tốc độ sử dụng internet si&ecirc;u nhanh với c&aacute;c băng tần 5G. Đ&acirc;y l&agrave; nền tảng quan trọng cho những gi&acirc;y ph&uacute;t giải tr&iacute; tuyệt vời của bạn. Với 5G, bạn sẽ xem được những video 4K một c&aacute;ch trơn tru, hoặc chiến game trực tuyến đồ hoạ khủng mượt m&agrave; hơn.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Người d&ugrave;ng c&oacute; thể sử dụng 2 SIM vật l&yacute; hoặc eSIM tr&ecirc;n chiếc điện thoại n&agrave;y để ph&ugrave; hợp với c&ocirc;ng việc cũng như nhu cầu li&ecirc;n lạc của m&igrave;nh.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:20px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế ho&agrave;n to&agrave;n mới. Nhiều m&agrave;u sắc trẻ trung</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy S21+ được giới thiệu với ngoại h&igrave;nh chứa đầy c&aacute;i nh&igrave;n thẩm mĩ của Samsung trong một sản phẩm flagship. Người d&ugrave;ng vẫn sẽ t&igrave;m thấy những điểm quen thuộc trong thiết kế của Samsung như hai mặt k&iacute;nh cường lực, khung viền kim loạ s&aacute;ng b&oacute;ng v&agrave; m&agrave;n h&igrave;nh Infinity-O. Tuy vậy, h&atilde;ng đ&atilde; l&agrave;m mới lại thiết kế của m&igrave;nh khi kh&eacute;o l&eacute;o đặt cụm camera v&agrave;o một miếng kim loại, ho&agrave; v&agrave;o phần viền của m&aacute;y. Th&ecirc;m v&agrave;o đ&oacute;, phong c&aacute;ch dual tone tạo n&ecirc;n vẻ ngo&agrave;i hấp dẫn ngay từ lần đầu nh&igrave;n thấy. Kh&aacute;ch h&agrave;ng c&oacute; thể tuỳ chọn ba phi&ecirc;n bản m&agrave;u cho chiếc Galaxy S21+ của m&igrave;nh, bao gồm đen nguy&ecirc;n bản, bạc ngẫu hứng v&agrave; t&iacute;m đam m&ecirc;. Giống như những đời si&ecirc;u phẩm trước, Galaxy S21+ cũng c&oacute; khả năng kh&aacute;ng nước v&agrave; bụi bẩn IP68.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s21-plus-1.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy S21+ chắc chắn sẽ l&agrave; một trong những smartphone c&oacute; m&agrave;n h&igrave;nh đ&atilde; mất trong thời điểm đầu năm 2021. Chiếc smartphone n&agrave;y sở hữu m&agrave;n h&igrave;nh Dynamic AMOLED 2X k&iacute;ch thước 6,7 inch tương tự thiết bị tiền nhiệm, độ ph&acirc;n giải 1080x2400. M&agrave;n h&igrave;nh n&agrave;y sở hữu dải m&agrave;u rộng DCI-P3, hỗ trợ chuẩn HDR10+, cho m&agrave;u sắc rực rỡ, sắc n&eacute;t từng chi tiết. Kh&ocirc;ng chỉ vậy, người d&ugrave;ng sẽ được trải nghiệm tần số qu&eacute;t 120Hz tr&ecirc;n tấm nền n&agrave;y, gi&uacute;p mọi thao t&aacute;c vuốt v&agrave; c&aacute;c pha h&agrave;nh động trở n&ecirc;n mượt m&agrave; hơn bao giờ hết.</span></span></span></span></p>\r\n\r\n<h3><strong><span style=\"font-size:20px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Camera đồng h&agrave;nh c&ugrave;ng bạn tr&ecirc;n mọi nẻo đường</span></span></span></span></strong></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cụm camera được trang bị tr&ecirc;n Galaxy S21+ cũng c&oacute; phần cứng mạnh mẽ v&agrave; phần mềm được tối ưu ho&aacute; cực tốt. Samsung đ&atilde; trang bị cho thiết bị của m&igrave;nh ba camera ở mặt sau: camera ti&ecirc;u chuẩn 12MP, khẩu độ f/1.8, k&iacute;ch thước điểm ảnh lớn 1.8&mu;m; camera zoom 64MP, khẩu độ f/2.0 v&agrave; camera g&oacute;c si&ecirc;u rộng 12MP, ti&ecirc;u cự 13mm, khẩu độ f/2.2. Với độ ph&acirc;n giải lớn v&agrave; thuật to&aacute;n chụp ảnh được thiết kế ri&ecirc;ng, bạn c&oacute; thể zoom l&ecirc;n tới 30x tr&ecirc;n chiếc m&aacute;y n&agrave;y, đưa những khung cảnh ở xa lại gần lại tầm nh&igrave;n của bạn với độ chi tiết tối ưu. M&aacute;y cũng c&oacute; camera 10MP ở ph&iacute;a trước gi&uacute;p người d&ugrave;ng chụp ảnh selfie v&agrave; gọi video cực đ&atilde;.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s21-plus-2.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p>Samsung c&ograve;n đưa l&ecirc;n Galaxy S21+ h&agrave;ng loạt t&iacute;nh năng quay phim chụp h&igrave;nh hữu &iacute;ch. Đầu ti&ecirc;n, người d&ugrave;ng sẽ lập tức ấn tượng khi đ&acirc;y l&agrave; chiếc điện thoại hiếm hoi tr&ecirc;n thị trường sở hữu khả năng quay video 8K cực sắc n&eacute;t. H&igrave;nh ảnh tr&iacute;ch xuất từ video n&agrave;y c&oacute; độ ph&acirc;n giải l&ecirc;n tới 33MP. M&aacute;y cũng c&oacute; thể quay video 4K ở 60fps mượt m&agrave;. Để hỗ trợ người d&ugrave;ng quay phim tốt hơn, Samsung trang bị cả chống rung quang học cho ống k&iacute;nh v&agrave; t&iacute;nh năng quay phim si&ecirc;u chống rung, giup thước phim của bạn chuyển động mượt m&agrave; ngay cả khi di chuyển nhanh.</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Hiệu suất vượt trội. Thời lượng pin k&eacute;o d&agrave;i cả ng&agrave;y</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Năm nay, Samsung đ&atilde; mang vi xử l&yacute; Exynos 2100 l&ecirc;n flagship của m&igrave;nh. Đ&acirc;y l&agrave; một con chip 8 nh&acirc;n với tốc độ tối đa l&ecirc;n tới 2,9GHz, đem lại tốc độ tối ưu trong mọi t&aacute;c vụ sử dụng. Galaxy S21+ sẽ gi&uacute;p bạn thực hiện được mọi t&aacute;c vụ một c&aacute;ch nhanh ch&oacute;ng, từ việc lướt web h&agrave;ng ng&agrave;y, cho tới chơi game đồ hoạ khủng v&agrave; xử l&yacute; video độ ph&acirc;n giải cao. Th&ecirc;m v&agrave;o đ&oacute;, dung lượng RAM 8GB sẽ gi&uacute;p bạn xử l&yacute; c&ocirc;ng việc đa nhiệm ho&agrave;n to&agrave;n trơn tru. Người d&ugrave;ng c&oacute; thể thoải m&aacute;i lưu trữ c&aacute;c tệp media v&agrave; th&ocirc;ng tin quan trọng trong bộ nhớ 256GB của m&aacute;y.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/s21-plus-4.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy S21+ sở hữu vi&ecirc;n pin 4800mAh, đủ để cung cấp cho bạn một ng&agrave;y sử dụng với những t&aacute;c vụ hỗn hợp nặng. Samsung trang bị cho chiếc smartphone n&agrave;y h&agrave;ng loạt t&iacute;nh năng sạc đỉnh cao như sạc si&ecirc;u nhanh 25W v&agrave; sạc nhanh kh&ocirc;ng d&acirc;y 2.0, gi&uacute;p bạn nhanh ch&oacute;ng nối lại trải nghiệm dang dở của m&igrave;nh khi hết pin. T&iacute;nh năng Power Share gi&uacute;p bạn chia sẻ pin cho những phụ kiện hỗ trợ sạc kh&ocirc;ng d&acirc;y như chiếc tai nghe Galaxy Buds Pro v&agrave; AirPods.</span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Tạm kết</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy S21+ kh&ocirc;ng chỉ l&agrave; một chiếc điện thoại sang trọng, m&agrave; c&ograve;n l&agrave; một thiết bị mạnh mẽ, đem lại cho người d&ugrave;ng những gi&acirc;y ph&uacute;t l&agrave;m việc v&agrave; giải tr&iacute; cực đ&atilde;. Nếu bạn cần t&igrave;m một flagship Android đ&aacute;p ứng mọi nhu cầu sử dụng của m&igrave;nh th&igrave; đ&acirc;y l&agrave; một sự lựa chọn kh&ocirc;ng thể hợp l&yacute; hơn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 1, 1, 4, 1, 0, '2021-08-02 00:40:42', '2021-08-02 00:40:42', NULL),
(34, 'Samsung Galaxy Watch Active 2 LTE Alumium 40mm (SM - R835) - Chính hãng', 'samsung-galaxy-watch-active-2-lte-alumium-40mm-sm-r835-chinh-hang', 'Mua Samsung Galaxy Watch Active 2 LTE Alumium 40mm (SM - R835) - Chính hãng giá rẻ nhất Việt Nam', '<p>Galaxy Watch Active 2 l&agrave; d&ograve;ng smartwatch cao cấp đến từ thương hiệu Samsung. Nay với băng tần 4G LTE, người d&ugrave;ng sẽ nhận được nhiều hơn cả một thiết bị đeo tay th&ocirc;ng minh với kết nối bất tận.</p>', '<h1 dir=\"ltr\"><span style=\"font-size:20px\"><strong>Thiết kế mặt nh&ocirc;m nhẹ nh&agrave;ng, hiện đại</strong></span></h1>\r\n\r\n<p dir=\"ltr\">V&igrave; được tạo ra với mục đ&iacute;ch mang đến sự thoải m&agrave;i cho người d&ugrave;ng n&ecirc;n Samsung đ&atilde; lựa chọn d&acirc;y cao su cho sản phẩm. Đ&acirc;y l&agrave; một chất liệu &ecirc;m &aacute;i, &ocirc;m v&agrave;o tay v&agrave; kh&ocirc;ng bị lỏng ngay cả khi vận động mạnh. Đồng hồ vẫn giữ kiểu d&aacute;ng mặt tr&ograve;n quen thuộc.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image11.jpeg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Samsung đ&atilde; sử dụng mặt nh&ocirc;m nhằm tăng th&ecirc;m t&iacute;nh thẩm mỹ cho sản phẩm. Nh&igrave;n tổng thể, Galaxy Watch Active 2 l&agrave; một chiếc đồng hồ trẻ trung, phong c&aacute;ch, thời trang. Với c&acirc;n nặng chỉ 25g, bất kỳ ai cũng c&oacute; thể sở hữu sản phẩm n&agrave;y.</p>\r\n\r\n<h1 dir=\"ltr\"><span style=\"font-size:20px\"><strong>M&agrave;n h&igrave;nh AMOLED sắc n&eacute;t, chống xước hiệu quả</strong></span></h1>\r\n\r\n<p dir=\"ltr\">M&agrave;n h&igrave;nh Galaxy Watch Active 2 Aluminum ch&iacute;nh h&atilde;ng c&oacute; độ ph&acirc;n giải 360x360. Nhờ vậy đồng hồ hiển thị r&otilde; n&eacute;t, m&agrave;u sắc đ&uacute;ng chuẩn. Thiết kế b&oacute;ng mượt c&ugrave;ng viền cảm ứng cho ph&eacute;p thực hiện c&aacute;c t&aacute;c vụ mượt m&agrave;, nhanh ch&oacute;ng. V&ograve;ng xoay cảm ứng cũng l&agrave; một điểm hấp dấn của sản phẩm n&agrave;y. K&iacute;ch thước m&agrave;n h&igrave;nh Galaxy Watch Active 2 l&agrave; 40mm hoặc 44mm n&ecirc;n c&oacute; thể hiển thị th&ocirc;ng tin đầy đủ, ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image22.jpeg\" style=\"height:300px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Samsung đ&atilde; trang bị cho sản phẩm một tấm nền Circular Super AMOLED. N&oacute; sẽ gi&uacute;p tăng khả năng chống xước khi va đập. Đặc biệt bạn c&oacute; thể sử dụng chiếc đồng hồ n&agrave;y trong cả m&ocirc;i trường ẩm ướt hoặc dưới nước nhờ khả năng chống nước chuẩn 5 ATM v&agrave; IP68.</p>\r\n\r\n<h1 dir=\"ltr\"><span style=\"font-size:20px\"><strong>T&iacute;nh năng th&ocirc;ng minh, theo d&otilde;i sức khỏe người d&ugrave;ng</strong></span></h1>\r\n\r\n<p dir=\"ltr\">Galaxy Watch Active 2 l&agrave; một &ldquo;người trợ l&yacute;&rdquo; đ&aacute;ng tin cậy của bạn. N&oacute; c&oacute; nhiều t&iacute;nh năng th&ocirc;ng minh như b&aacute;o thức, điều chỉnh m&aacute;y ảnh tự chụp, dịch ngoại ngữ, theo d&otilde;i mạng x&atilde; hội...&nbsp; Bạn cũng c&oacute; thể điều khiển chiếc smartwatch n&agrave;y th&ocirc;ng qua giọng n&oacute;i nhờ trợ l&yacute; ảo Bixby. Thiết bị n&agrave;y c&ograve;n c&oacute; khả năng kết nối với c&aacute;c thiết bị sử dụng hệ điều h&agrave;nh Andoid v&agrave; iOS qua ứng dụng Samsung Wearable.</p>\r\n\r\n<p dir=\"ltr\">Sản phẩm n&agrave;y sẽ theo d&otilde;i sức khỏe của người d&ugrave;ng. N&oacute; sẽ tự đo huyết &aacute;p, nhịp tim, mức độ stress v&agrave; đưa ra th&ocirc;ng b&aacute;o gi&uacute;p bạn ổn định lại tinh thần, chăm s&oacute;c sức khỏe tốt hơn. C&aacute;c cảm biến cũng sẽ ph&aacute;t hiện, ghi ch&eacute;p lại hoạt động thể chất như chạy bộ, bơi, đạp xe... Từ đ&oacute; đ&aacute;nh gi&aacute; hiệu quả v&agrave; đưa ra giải ph&aacute;p ph&ugrave; hợp.</p>\r\n\r\n<h1 dir=\"ltr\"><strong><span style=\"font-size:20px\">Thời lượng pin l&acirc;u d&agrave;i. Kết nối bất tận với LTE</span></strong></h1>\r\n\r\n<p dir=\"ltr\">Samsung Galaxy Watch Active 2 sở hữu vi&ecirc;n pin 247 mAh. Nếu kết nối bluetooth với điện thoại thi bạn c&oacute; thể sử dụng li&ecirc;n tục trong v&ograve;ng 4 ng&agrave;y. C&ograve;n nếu sử dụng b&igrave;nh thường kh&ocirc;ng kết nối th&igrave; sẽ được 7 ng&agrave;y. Sản phẩm n&agrave;y cũng được trang bị sạc kh&ocirc;ng d&acirc;y từ t&iacute;nh. Khi về đến nh&agrave; bạn chỉ cần đặt n&oacute; l&ecirc;n bộ sạc v&agrave; chờ pin đầy. Kh&ocirc;ng d&acirc;y cắm rườm r&agrave; m&agrave; vẫn sạc với tốc độ cực nhanh.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/image33.jpeg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p dir=\"ltr\">Đồng hồ c&oacute; khả năng lưu trữ danh bạn, tin nhắn, b&agrave;i h&aacute;t th&ocirc;ng qua Wi-Fi. Nếu muốn nghe nhạc h&atilde;y sử dụng tai nghe hoặc loa Bluetooth nh&eacute;. Th&ecirc;m v&agrave;o đ&oacute;, với hỗ trợ eSIM va kết nối 4G LTE, bạn c&oacute; thể sử dụng Galaxy Watch Active 2 độc lập với điện thoại. Nhờ đ&oacute;, bạn c&oacute; thể cập nhật th&ocirc;ng tin, trả lời tin nhắn, gọi điện rất tiện lợi.&nbsp;</p>', 1, 1, 16, 1, 0, '2021-08-02 00:50:22', '2021-08-02 00:50:22', NULL),
(35, 'Samsung Galaxy Fit 2 (R220) - Chính hãng', 'samsung-galaxy-fit-2-r220-chinh-hang', 'Mua Samsung Galaxy Fit 2 (R220) - Chính hãng giá rẻ nhất Việt Nam', '<p>Khỏe hơn mỗi ng&agrave;y với chiếc v&ograve;ng đeo tay th&ocirc;ng minh&nbsp;Samsung Galaxy Fit2, mang đến cho bạn khả năng hỗ trợ sức khỏe to&agrave;n diện chỉ với một chiếc v&ograve;ng tay thời trang v&agrave; nhỏ gọn.</p>', '<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Mua đồng hồ th&ocirc;ng minh Samsung Galaxy Fit 2 (R220) ch&iacute;nh h&atilde;ng, gi&aacute; rẻ nhất Việt Nam</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Đồng hồ th&ocirc;ng minh Samsung Galaxy Fit 2 l&agrave; phụ hiện với nhiều t&iacute;nh năng hiện đại nhưng gi&aacute; th&agrave;nh lại tương đối rẻ. Chiếc đồng hồ n&agrave;y c&oacute; thời lượng sử dụng l&ecirc;n tới 15 ng&agrave;y n&ecirc;n kh&ocirc;ng cần phải lo sạc pin li&ecirc;n tục.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/fit-2-1.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thiết kế nhỏ gọn, m&agrave;n h&igrave;nh sắc n&eacute;t</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung Galaxy Fit 2 thực sự rất nhỏ gọn v&igrave; chỉ nặng khoảng 30g. Khi đeo tr&ecirc;n tay kh&ocirc;ng hề c&oacute; cảm gi&aacute;c nặng nề hay vướng v&iacute;u. Mặt đồng hồ c&oacute; k&iacute;ch thước 1.5 inch kết hợp c&ugrave;ng d&acirc;y đeo silicon &ocirc;m v&agrave;o cổ tay. Hai phi&ecirc;n bản m&agrave;u sắc đen v&agrave; đỏ đều rất c&aacute; t&iacute;nh, năng động v&agrave; ph&ugrave; hợp với đa số kh&aacute;ch h&agrave;ng.&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Samsung đ&atilde; trang bị m&agrave;n h&igrave;nh AMOLED cho đồng hồ nhằm gi&uacute;p cho m&agrave;u sắc hiển thị sống động, độ tương phản cao. Đặc biệt loại m&agrave;n h&igrave;nh n&agrave;y tiết kiệm điện năng hơn rất nhiều.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/fit-2-2.png\" style=\"height:377px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Hỗ trợ tập luyện thể thao khoa học hơn</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">C&aacute;c t&iacute;nh năng quan trọng nhất của Samsung Galaxy Fit 2 ch&iacute;nh l&agrave; theo d&otilde;i nhịp tim hằng ng&agrave;y, t&iacute;nh lượng calories đ&atilde; ti&ecirc;u thụ, theo d&otilde;i chế độ luyện tập... Nhờ đ&oacute;, bạn c&oacute; thể nắm được qu&aacute; tr&igrave;nh tập luyện của m&igrave;nh xem n&ecirc;n đặt mục ti&ecirc;u như thế n&agrave;o, đ&atilde; đạt mục ti&ecirc;u đề ra chưa v&agrave; sẽ c&oacute; giải ph&aacute;p tập hiệu quả hơn. Ngo&agrave;i ra, đồng hồ cũng trang bị tới 15 chế độ thể thao kh&aacute;c nhau cho bạn thoải m&aacute;i lựa chọn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/fit-2-3.jpeg\" style=\"height:335px; width:600px\" /></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Cải thiện giấc ngủ, bảo vệ khỏi dịch bệnh</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Những &aacute;p lực trong cuộc sống chắc hẳn sẽ ảnh hưởng kh&ocirc;ng nhỏ tới chất lượng giấc ngủ của bạn. Galaxy Fit 2 sẽ đo lường v&agrave; đ&aacute;nh gi&aacute; độ căng thẳng của cơ thể v&agrave; thời gian ngủ của người d&ugrave;ng. Từ đ&oacute;, bạn sẽ biết để c&acirc;n bằng thời gian tốt hơn, ngủ đủ giấc v&agrave; cải thiện sức khỏe.&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Tr&ecirc;n chiếc đồng hồ n&agrave;y c&ograve;n c&oacute; một ứng dụng rất th&ocirc;ng minh đ&oacute; l&agrave; Hand Wash tải từ Galaxy Store. N&oacute; sẽ thống k&ecirc; số lần rửa tay trong ng&agrave;y v&agrave; trong tuần của bạn, nhắc nhở rửa tay kỹ trong 20 gi&acirc;y. Nhờ đ&oacute;, bạn c&oacute; thể điều chỉnh th&oacute;i quen để giữ cho b&agrave;n tay m&igrave;nh lu&ocirc;n sạch sẽ, ph&ograve;ng chống dịch b&ecirc;nh tốt hơn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/fit-2-4.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Thời lượng pin k&eacute;o d&agrave;i từ 15 đến 21 ng&agrave;y</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy Fit 2 được trang bị vi&ecirc;n pin 159 mAh v&agrave; hỗ trợ sạc nhanh chỉ trong 90 ph&uacute;t. Một lần sạc sẽ cho ph&eacute;p bạn sử dụng trong 15 ng&agrave;y li&ecirc;n tục ở chế độ b&igrave;nh thường. C&ograve;n nếu tắt tự động tập luyện, theo d&otilde;i nhịp tim v&agrave; th&aacute;o đồng hồ khi ngủ th&igrave; thời gian d&ugrave;ng c&oacute; thể l&ecirc;n tới 21 ng&agrave;y.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"/storage/files/1/post/fit-2-5.jpeg\" style=\"height:338px; width:600px\" /></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Kết nối với c&aacute;c thiết bị kh&aacute;c, quản l&yacute; th&ocirc;ng tin tốt hơn</span></span></span></strong></span></h3>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Galaxy Fit 2 tương th&iacute;ch với c&aacute;c d&ograve;ng m&aacute;y từ Androi 5.0 v&agrave; iOS 10 trở l&ecirc;n. Đồng hồ c&oacute; thể kết nối với nhiều thiết bị th&ocirc;ng qua bluetooth. Bạn cần phải c&agrave;i ứng dụng Samsung Wearable để điều chỉnh c&agrave;i đặt tr&ecirc;n sản phẩm n&agrave;y.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:13px\"><span style=\"color:#333333\"><span style=\"font-family:-apple-system,system-ui,&quot;Segoe UI&quot;\"><span style=\"background-color:#ffffff\">Khi kết nối với điện thoại, Galaxy Fit 2 c&oacute; khả năng cập nhật ngay lập tức c&aacute;c th&ocirc;ng b&aacute;o về tin nhắn, cuộc gọi. Th&ecirc;m nữa, đồng hồ th&ocirc;ng minh c&ograve;n hỗ trợ trả lời nhanh ch&oacute;ng bằng c&aacute;c tin nhắn sẵn c&oacute;, điều khiển ph&aacute;t tiếp hay tạm dừng nhạc. Ch&iacute;nh v&igrave; vậy, bạn kh&ocirc;ng cần phải cầm điện thoại li&ecirc;n tục theo b&ecirc;n người m&agrave; vẫn nắm bắt c&aacute;c th&ocirc;ng tin quan trọng.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 1, 1, 16, 1, 0, '2021-08-02 01:05:28', '2021-08-04 00:50:30', NULL),
(36, 'Apple Watch SE LTE 44mm (Viền nhôm dây vải) – Chính hãng VN/A', 'apple-watch-se-lte-44mm-vien-nhom-day-vai-–-chinh-hang-vna', 'Apple Watch SE LTE 44mm (Viền nhôm dây vải) – Chính hãng VN/A giá rẻ nhất Việt Nam', '<p>Kh&ocirc;ng chỉ mang tr&ecirc;n m&igrave;nh một thiết kế thời thượng, hiện đại, m&agrave;n h&igrave;nh Retina sắc n&eacute;t c&ugrave;ng h&agrave;ng loạt t&iacute;nh năng hữu &iacute;ch kh&aacute;c m&agrave; Apple Watch SE phi&ecirc;n bản hỗ trợ Cellular c&ograve;n c&oacute; khả năng kết nối Internet độc lập kh&ocirc;ng cần tới bất k&igrave; một chiếc điện thoại n&agrave;o.</p>', '<h3><span style=\"font-size:20px\"><strong>Thiết kế tuyệt đẹp, khả năng kết nối mạng độc lập</strong></span></h3>\r\n\r\n<p>Apple Watch SE GPS Cellular 44mm sở hữu một thiết kế viền nh&ocirc;m cực k&igrave; b&oacute;ng bẩy c&ugrave;ng với phần d&acirc;y đeo được l&agrave;m từ chất liệu vải bền bỉ, khỏe khoắn nhưng cũng kh&ocirc;ng k&eacute;m phần thời trang. Đeo Apple Watch SE tr&ecirc;n tay, bạn sẽ c&oacute; một cảm gi&aacute;c cực k&igrave; thoải m&aacute;i, kh&ocirc;ng bị cấn, bị đau hay qu&aacute; kh&oacute; chịu bất kể l&agrave; bạn c&oacute; đeo trong một thời gian d&agrave;i. M&agrave;n h&igrave;nh Retina với phần viền đạt v&aacute;t mỏng tốt đa, mang tới một thiết kế năng động, trẻ trung, cực k&igrave; tinh tế.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/files/1/post/apple-watch-se-2.jpeg\" style=\"height:315px; width:600px\" /></p>\r\n\r\n<p>Đặc biệt, kh&ocirc;ng giống như phi&ecirc;n bản GPS, Apple Watch SE phi&ecirc;n bản Cellular c&ograve;n hỗ trợ eSIM, gi&uacute;p thiết bị c&oacute; thể hoạt động v&agrave; kết nối với Internet như một chiếc smartphone thu nhỏ. Với Apple Watch SE Cellular, bạn c&oacute; thể thoải m&aacute;i nghe gọi, trả lời tin nhắn, lướt web, nghe nhạc trực tuyến m&agrave; kh&ocirc;ng nhất thiết phải c&oacute; iPhone hoặc iPad b&ecirc;n cạnh. Lựa chọn Apple Watch phi&ecirc;n bản Cellular, bạn sẽ c&oacute; thể l&agrave;m được nhiều thứ hơn tr&ecirc;n ch&iacute;nh chiếc đồng hồ của m&igrave;nh.</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong>Hiệu năng ấn tượng, hỗ trợ đầy đủ c&aacute;c chế độ thể thao</strong></span></h3>\r\n\r\n<p>Apple Watch SE GPS Cellular 44mm được trang bị bộ vi xử l&yacute; Apple S5 l&otilde;i k&eacute;p mới nhất của Apple, cho một tốc độ xử l&yacute; v&agrave; hiệu năng cực mạnh, gi&uacute;p bạn sẽ c&oacute; những trải nghiệm cực k&igrave; mượt m&agrave; v&agrave; được phản hồi ngay tức khắc. Đi c&ugrave;ng với đ&oacute; l&agrave; thanh RAM 1GB v&agrave; 32GB bộ nhớ trong, gi&uacute;p bạn c&oacute; thể tha hồ lưu trữ ứng dụng, mở được nhiều phần mềm c&ugrave;ng một l&uacute;c; đồng h&agrave;nh c&ugrave;ng bạn trong c&aacute;c b&agrave;i tập kh&oacute; nhằn m&agrave; vẫn c&oacute; thể hoạt động nhanh, ch&iacute;nh x&aacute;c v&agrave; ổn định.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/files/1/post/apple-watch-se_637472497992150119.jpeg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p>B&ecirc;n cạnh hiệu năng ấn tượng, Apple Watch SE c&ograve;n hỗ trợ đầy đủ c&aacute;c bộ m&ocirc;n thể thao kh&aacute;c nhau như chạy bộ, đi bộ, chạy bền, tập Yoga, đạp xe,&hellip;Thiết bị cũng hỗ trợ bộ m&ocirc;n bơi lội bởi Apple đ&atilde; trang bị t&iacute;nh năng chống nước 5 ATM l&ecirc;n m&aacute;y, c&oacute; thể lặn ở độ s&acirc;u 50m dưới nước m&agrave; kh&ocirc;ng hề hấn g&igrave;. Apple Watch SE sẽ hiển thị đầy đủ c&aacute;c chỉ số như khoảng c&aacute;ch, nhịp tim, lượng calo đ&atilde; được đốt ch&aacute;y. Ngo&agrave;i ra bạn c&oacute; thể đo độ cao khi đang leo n&uacute;i hoặc chạy leo dốc với chiếc đồng hồ th&ocirc;ng minh n&agrave;y.</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong>Khả năng đo nhịp tim v&agrave; theo d&otilde;i giấc ngủ</strong></span></h3>\r\n\r\n<p>Apple Watch SE sẽ lu&ocirc;n quan t&acirc;m với vấn đề sức khỏe của bạn như một người trợ l&yacute; đ&iacute;ch thực b&ecirc;n cạnh bạn 24/7, gi&uacute;p bạn c&oacute; một cuộc sống &ldquo;healthy&rdquo; hơn. Thiết bị sẽ thường xuy&ecirc;n đưa ra c&aacute;c lời khuy&ecirc;n cực k&igrave; bổ &iacute;ch d&agrave;nh cho bạn h&agrave;ng ng&agrave;y. Đặc biệt, Apple Watch SE cũng c&oacute; thể l&agrave; chiếc m&aacute;y đo nhịp tim cho bạn mọi l&uacute;c mọi nơi, gi&uacute;p bạn biết được t&igrave;nh trạng sức khỏe của m&igrave;nh, từ đ&oacute; đưa ra c&aacute;c biện ph&aacute;p hợp l&yacute; đề ph&ograve;ng tr&aacute;nh những căn bệnh c&oacute; li&ecirc;n quan tới tim mạch.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/files/1/post/apple-watch-se-3.jpeg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>Kh&ocirc;ng chỉ vậy, Apple Watch SE c&ograve;n gi&uacute;p bạn sẽ c&oacute; th&ecirc;m nhiều năng lượng v&agrave; tinh thần phấn chấn hơn v&agrave;o mỗi ng&agrave;y mới. Đ&oacute; l&agrave; nhờ ứng dụng Sleep tr&ecirc;n thiết bị, kết hợp với iPhone để theo d&otilde;i giấc ngủ của bạn, gi&uacute;p bạn tạo ra được một thời kh&oacute;a biểu sinh học c&aacute; nh&acirc;n hợp l&yacute; v&agrave; c&oacute; được th&oacute;i quen đi ngủ đ&uacute;ng giờ hơn.</p>\r\n\r\n<h3><span style=\"font-size:20px\"><strong>Nghe nhạc mọi l&uacute;c mọi nơi</strong></span></h3>\r\n\r\n<p>Apple Watch SE sẽ đ&uacute;ng nghĩa như l&agrave; một người trợ l&yacute; v&agrave; ki&ecirc;m lu&ocirc;n cả người bạn ở b&ecirc;n bạn mỗi khi bạn cần. Bởi với thiết bị n&agrave;y, bạn c&oacute; thể tận hưởng được niềm vui trọn vẹn với &acirc;m nhạc mọi l&uacute;c mọi nơi. Kho nhạc số từ Apple Music sẽ mang tới cho bạn tới hơn 70 triệu b&agrave;i nhạc kh&aacute;c nhau đủ mọi thể loại tr&ecirc;n thế giới, gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm được b&agrave;i h&aacute;t theo đ&uacute;ng &ldquo;gu&rdquo; &acirc;m nhạc của m&igrave;nh. V&agrave; hiển nhi&ecirc;n l&agrave; &acirc;m nhạc cũng sẽ phần n&agrave;o gi&uacute;p bạn c&oacute; th&ecirc;m niềm hứng khởi để gi&uacute;p c&ocirc;ng việc v&agrave; việc luyện tập h&agrave;ng ng&agrave;y hiệu quả hơn phải kh&ocirc;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/files/1/post/apple-watch-se.jpeg\" style=\"height:366px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>', 1, 1, 15, 1, 0, '2021-08-02 01:31:59', '2021-08-02 01:31:59', NULL),
(37, 'Samsung Galaxy Fit e – Chính hãng', 'samsung-galaxy-fit-e-–-chinh-hang', 'Mua Samsung Galaxy Fit e – Chính hãng giá rẻ nhất Việt Nam', '<p>Mua Samsung Galaxy&nbsp;Fit e &ndash; Ch&iacute;nh h&atilde;ng gi&aacute; rẻ nhất Việt Nam , cam đoan h&agrave;nh ch&iacute;nh h&atilde;ng 100% . Bảo h&agrave;nh 12 th&aacute;ng v&agrave; tặng k&egrave;m d&acirc;y cau su .</p>', '<p>Mua Samsung Galaxy&nbsp;Fit e &ndash; Ch&iacute;nh h&atilde;ng gi&aacute; rẻ nhất Việt Nam , cam đoan h&agrave;nh ch&iacute;nh h&atilde;ng 100% . Bảo h&agrave;nh 12 th&aacute;ng v&agrave; tặng k&egrave;m d&acirc;y cau su .</p>', 1, 1, 16, 1, 0, '2021-08-04 01:18:15', '2021-08-06 21:22:06', NULL),
(38, 'iPhone 12 Pro Max - 512GB Chính hãng VN/A', 'iphone-12-pro-max-512gb-chinh-hang-vna', 'Mua Apple iPhone 12 Pro Max - 128GB - Chính hãng VN/A giá tốt nhất', '<p>hahahahahaaha</p>', '<h3><strong>M&agrave;n h&igrave;nh lớn si&ecirc;u sắc n&eacute;t. Thiết kế vu&ocirc;ng vức sang trọng</strong></h3>\r\n\r\n<p>iPhone 12 Pro Max ch&iacute;nh thức trở th&agrave;nh chiếc iPhone c&oacute; m&agrave;n h&igrave;nh lớn nhất t&iacute;nh tới thời điểm hiện tại. Bạn sẽ được trải nghiệm h&igrave;nh ảnh đ&atilde; mắt tr&ecirc;n m&agrave;n h&igrave;nh 6,7 inch Super Retina XDR n&agrave;y. Viền m&agrave;n h&igrave;nh v&agrave; phần kho&eacute;t tai thỏ đ&atilde; được l&agrave;m gọn hơn để tối ưu th&ecirc;m kh&ocirc;ng gian hiển thị. Tấm nền của iPhone 12 Pro Max hỗ trợ chuẩn HDR10 với độ s&aacute;ng tối đa l&ecirc;n tới 1200 nit. M&agrave;n h&igrave;nh của m&aacute;y được bảo vệ bởi k&iacute;nh cường lực Ceremic Shield cho độ bền gấp 4 lần thế hệ trước.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-2.jpeg\" style=\"height:500px; width:417px\" /></p>\r\n\r\n<p>Cầm iPhone 12 Pro Max tr&ecirc;n tay chắc chắn sẽ thu h&uacute;t mọi &aacute;nh nh&igrave;n nhờ thiết kế cực sang trọng. Phần viền của m&aacute;y được l&agrave;m từ vật liệu th&eacute;p kh&ocirc;ng gỉ s&aacute;ng b&oacute;ng, được sơn l&ecirc;n lớp phủ chống xước. Mặt lưng của m&aacute;y tiếp tục được ho&agrave;n thiện nh&aacute;m gi&uacute;p tăng cường khả năng cầm nắm m&agrave; kh&ocirc;ng phải đ&aacute;nh đổi vẻ ngo&agrave;i cao cấp. Người d&ugrave;ng sẽ c&oacute; 4 lựa chọn về m&agrave;u sắc gồm bạc, x&aacute;m graphite, v&agrave;ng v&agrave; xanh biển s&acirc;u. iPhone 12 Pro Max được trang bị chuẩn kh&aacute;ng nước v&agrave; bụi bẩn IP68.</p>\r\n\r\n<h3><strong>Hỗ trợ băng tần 5G.&nbsp;Cấu h&igrave;nh cực khủng</strong></h3>\r\n\r\n<p>iPhone 12 Pro Max l&agrave; chiếc điện thoại đầu ti&ecirc;n của Apple hỗ trợ băng tần mạng 5G. Với thế hệ mạng viễn th&ocirc;ng mới, người d&ugrave;ng sẽ được trải nghiệm tốc độ truyền tải internet nhanh &ldquo;ch&oacute;ng mặt&rdquo; l&ecirc;n tới 4GB/s. Nhờ đ&oacute; m&agrave; mọi nội dung streaming trực tuyến như nhạc, video HDR hay hoạt động lướt web th&ocirc;ng thường đều diễn ra trong nh&aacute;y mắt. Với t&iacute;nh năng Smart Data, iPhone cũng sẽ tự động chuyển đổi giữa LTE v&agrave; 5G dựa tr&ecirc;n nhu cầu của c&aacute;c ứng dụng để tối ưu ho&aacute; lưu lượng data v&agrave; thời lượng sử dụng pin của thiết bị.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-3.jpeg\" style=\"height:159px; width:417px\" /></p>\r\n\r\n<p>Tiếp tục truyền thống tạo ra những chiếc iPhone với hiệu năng dẫn đầu thị trường, năm nay Apple đ&atilde; giới thiệu vi xử l&yacute; Apple A14 Bionic, con chip đi dộng đầu ti&ecirc;n chạy tr&ecirc;n tiến tr&igrave;nh 5nm. Con chip n&agrave;y đem lại tốc độ xử l&yacute; nhanh hơn 50% so với những vi xử l&yacute; kh&aacute;c tr&ecirc;n thị trường v&agrave; c&oacute; khả năng ho&agrave;n th&agrave;nh 11 tỷ ph&eacute;p t&iacute;nh mỗi gi&acirc;y. Con chip mới cũng đem lại nhiều t&iacute;nh năng xử l&yacute; h&igrave;nh ảnh đỉnh cao như quay video Dolby Vision, chụp ảnh Smart HDR 3 v&agrave; Deep Fusion.</p>\r\n\r\n<p>Bộ nhớ tối thiếu của iPhone 12 Pro Max đ&atilde; được n&acirc;ng l&ecirc;n gấp đ&ocirc;i th&agrave;nh 512GB, gi&uacute;p người d&ugrave;ng thoải m&aacute;i lưu trữ dữ liệu. Thời lượng pin của iPhone 12 Pro Max cũng thuộc h&agrave;ng top trong thế giới smartphone. Chiếc điện thoại n&agrave;y hứa hẹn sẽ đem lại 20 tiếng xem video li&ecirc;n tục cho người d&ugrave;ng (tương đương với iPhone 11 Pro Max). Bạn chắc chắn sẽ c&oacute; một ng&agrave;y l&agrave;m việc v&agrave; giải tr&iacute; kh&ocirc;ng ngừng nghỉ với chiếc điện thoại n&agrave;y. iPhone 12 Pro Max cũng hỗ trợ sạc nhanh 18W v&agrave; sạc kh&ocirc;ng d&acirc;y MagSafe 15W v&ocirc; c&ugrave;ng tiện lợi v&agrave; nhanh ch&oacute;ng.</p>\r\n\r\n<h3><strong>Camera xuy&ecirc;n m&agrave;n đ&ecirc;m. M&aacute;y qu&eacute;t LiDAR độc nhất&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h3>\r\n\r\n<p>iPhone 12 Pro Max sẽ đem lại cho người d&ugrave;ng hệ thống camera chuy&ecirc;n nghiệp h&agrave;ng đầu thị trường với nhiều n&acirc;ng cấp đ&aacute;ng gi&aacute;. Camera ch&iacute;nh của m&aacute;y c&oacute; giữ nguy&ecirc;n độ ph&acirc;n giải 12MP nhưng c&oacute; cảm biến lớn hơn, cho k&iacute;ch thước điểm ảnh l&ecirc;n tới 1,7&mu;m. Khẩu độ được n&acirc;ng l&ecirc;n &fnof;/1.6 gi&uacute;p tăng 22% khả năng thu s&aacute;ng. Ống k&iacute;nh g&oacute;c rộng cho g&oacute;c chụp tới 120o, cho bạn những bức ảnh với nhiều chi tiết v&agrave; cảnh vật xung quanh. Camera tele tr&ecirc;n iPhone 12 Pro Max đ&atilde; được tăng ti&ecirc;u cự l&ecirc;n 65mm, cho khả năng zoom quang học 2.5x, đưa bạn đến gần hơn với những vật thể ở xa.&nbsp; Camera của iPhone 12 Pro Max được trang bị t&iacute;nh năng Smat HDR 3, gi&uacute;p đem lại độ s&aacute;ng đồng đều cho từng chi tiết, đem lại những bức h&igrave;nh rực rỡ ngay cả trong điều kiện ngược s&aacute;ng.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/storage/files/1/post/apple--dien-thoai-di-dong-apple-iphone-12-pro-max-256gb-chinh-hang-vn-a-4.jpeg\" style=\"height:159px; width:417px\" /></p>\r\n\r\n<p>Nh&agrave; T&aacute;o cũng đ&atilde; giới thiệu t&iacute;nh năng Apple ProRAW, gi&uacute;p thiết bị thực hiện to&agrave;n bộ khả năng nhiếp ảnh điện to&aacute;n chuy&ecirc;n nghiệp tr&ecirc;n định dạng RAW. Điều n&agrave;y gi&uacute;p những nhiếp ảnh dễ d&agrave;ng chỉnh sửa hậu k&igrave;. T&iacute;nh năng chụp đ&ecirc;m Night Mode năm nay đ&atilde; c&oacute; thể hoạt động tr&ecirc;n cả camera g&oacute;c rộng, camera selfie v&agrave; trong chế độ quay video. iPhone 12 Pro Max cũng l&agrave; chiếc điện thoại đầu ti&ecirc;n v&agrave; duy nhất tr&ecirc;n thị trường c&oacute; thể quay video Dolby Vision 10-bit gi&uacute;p thu lại tới 1 tỷ m&agrave;u sắc, cho bạn những thước phim cực đ&atilde; mắt. C&ocirc;ng nghệ chống rung Sensor Shift OIS cũng đem lại sự ổn định chưa từng c&oacute; cho những video của bạn.</p>\r\n\r\n<h3>Tạm&nbsp;kết</h3>\r\n\r\n<p>Với những n&acirc;ng cấp kể tr&ecirc;n, dễ hiểu tại sao iPhone 12 Pro Max l&agrave; chiếc smartphone được săn đ&oacute;n nhiều nhất trong thời điểm n&agrave;y. Sở hữu iPhone 12 Pro Max, bạn sẽ được trải nghiệm tất cả những tinh hoa m&agrave; Apple đ&atilde; đặt v&agrave;o sản phẩm của m&igrave;nh.</p>\r\n\r\n<p>Hiện tại, Ho&agrave;ng H&agrave; Mobile đ&atilde; trở th&agrave;nh nh&agrave; ph&acirc;n phối uỷ quyền ch&iacute;nh thức của Apple tại Việt Nam, hứa hẹn đem lại cho kh&aacute;ch h&agrave;ng những sản phẩm chất lượng cao v&agrave; mức gi&aacute; phải chăng nhất. Để mua iPhone 12 Pro Max, h&atilde;y tới ngay chi nh&aacute;nh&nbsp; gần nhất hoặc click đặt h&agrave;ng để được giao h&agrave;ng tận tay ho&agrave;n to&agrave;n miễn ph&iacute;. Sản phẩm được bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng.</p>', 1, 1, 3, 1, 8, '2021-08-04 23:18:50', '2021-08-05 03:12:27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `attribute_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 18, '2021-07-24 01:29:39', '2021-07-31 20:34:40', NULL),
(2, 9, 16, '2021-07-24 21:34:01', '2021-08-03 22:25:55', NULL),
(8, 14, 22, '2021-07-26 22:49:31', '2021-07-26 23:11:36', '2021-07-26 23:11:36'),
(9, 16, 21, '2021-07-27 14:27:46', '2021-08-03 22:24:31', NULL),
(10, 17, 21, '2021-07-27 14:36:15', '2021-08-04 01:23:43', NULL),
(11, 18, 16, '2021-07-31 19:56:30', '2021-08-04 01:14:31', NULL),
(12, 20, 18, '2021-07-31 20:16:34', '2021-08-04 01:25:58', NULL),
(13, 24, 28, '2021-08-01 18:09:19', '2021-08-01 18:15:57', NULL),
(14, 25, 29, '2021-08-01 18:22:00', '2021-08-01 18:22:00', NULL),
(15, 30, 29, '2021-08-01 21:06:22', '2021-08-01 21:07:48', NULL),
(16, 31, 28, '2021-08-01 21:14:04', '2021-08-01 21:14:04', NULL),
(17, 38, 22, '2021-08-04 23:18:50', '2021-08-14 00:19:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_options`
--

CREATE TABLE `product_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale` double(8,2) NOT NULL DEFAULT 0.00,
  `amount` int(11) NOT NULL DEFAULT 0,
  `is_main` tinyint(4) NOT NULL DEFAULT 0,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_options`
--

INSERT INTO `product_options` (`id`, `option_name`, `option_value`, `image`, `price`, `sale`, `amount`, `is_main`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Màu đen', '#000000', '/storage/files/1/product/thumb_IP12Pro_1.jpeg', 28460000, 1.00, 23, 1, 8, '2021-07-24 01:29:39', '2021-07-24 01:29:39', NULL),
(3, 'Màu trắng', '#ededed', '/storage/files/1/product/thumb_11-ProMAX_3.jpeg', 22990000, 1.00, 13, 1, 9, '2021-07-24 21:34:01', '2021-07-24 21:34:01', NULL),
(4, 'Màu đen', '#000000', '/storage/files/1/product/thumb_M3-3.jpeg', 6490000, 3.00, 11, 1, 10, '2021-07-25 23:12:25', '2021-07-31 22:07:28', NULL),
(6, 'Màu trắng', '#f0f0f0', '/storage/files/1/product/thumb_Note20_Ultra_3.jpeg', 18400000, 2.00, 7, 1, 13, '2021-07-26 00:06:39', '2021-07-28 21:38:51', NULL),
(7, 'Màu đen', '#000000', '/storage/files/1/product/thumb_Note20_Ultra_2.jpeg', 7200000, 1.00, 11, 1, 14, '2021-07-26 00:08:28', '2021-07-26 23:11:35', '2021-07-26 23:11:35'),
(9, 'Màu đen', '#000000', '/storage/files/1/product/thumb_IP12Pro_1.jpeg', 31200000, 1.00, 11, 0, 16, '2021-07-27 14:27:46', '2021-07-29 16:44:22', NULL),
(10, 'Màu trắng', '#e7e7de', '/storage/files/1/product/thumb_11-ProMAX_3.jpeg', 20500000, 1.00, 8, 0, 17, '2021-07-27 14:36:15', '2021-07-31 19:43:08', NULL),
(11, 'Màu trắng', '#ebebeb', '/storage/files/1/product/thumb_IP12Pro_2.jpeg', 28660000, 1.00, 9, 0, 8, '2021-07-27 23:40:06', '2021-07-27 23:40:06', NULL),
(12, 'Màu xanh', '#204551', '/storage/files/1/product/thumb_IP12Pro_3.jpeg', 28880000, 1.00, 7, 0, 8, '2021-07-27 23:42:19', '2021-07-27 23:42:19', NULL),
(13, 'Màu vàng', '#feedd3', '/storage/files/1/product/thumb_IP12Pro_4.jpeg', 28990000, 1.00, 11, 0, 8, '2021-07-27 23:43:24', '2021-07-28 21:10:01', NULL),
(15, 'Màu đen', '#000000', '/storage/files/1/product/thumb_11-ProMAX_4.jpeg', 22600000, 1.00, 9, 0, 9, '2021-07-28 21:19:17', '2021-07-28 21:19:17', NULL),
(16, 'Màu vàng', '#000000', '/storage/files/1/product/thumb_11-ProMAX_1.jpeg', 23200000, 1.00, 12, 0, 9, '2021-07-28 21:19:55', '2021-07-28 21:19:55', NULL),
(17, 'Màu vàng', '#fac918', '/storage/files/1/product/thumb_M3-1.jpeg', 6690000, 3.00, 13, 0, 10, '2021-07-28 21:29:42', '2021-07-31 22:07:02', NULL),
(18, 'Màu tím', '#455191', '/storage/files/1/product/thumb_M3-2.jpeg', 6790000, 3.00, 15, 0, 10, '2021-07-28 21:30:17', '2021-07-31 22:07:18', NULL),
(19, 'Màu đen', '#000000', '/storage/files/1/product/thumb_Note20_Ultra_2.jpeg', 28200000, 2.00, 12, 0, 13, '2021-07-28 21:39:32', '2021-07-28 21:39:32', NULL),
(20, 'Màu vàng', '#b68980', '/storage/files/1/product/thumb_Note20_Ultra_1.jpeg', 18800000, 2.00, 14, 0, 13, '2021-07-28 21:40:08', '2021-07-28 21:40:08', NULL),
(21, 'Màu trắng', '#f4f5ef', '/storage/files/1/product/thumb_IP12Pro_2.jpeg', 31400000, 1.00, 8, 1, 16, '2021-07-28 21:41:25', '2021-07-29 16:44:04', NULL),
(22, 'Màu xanh', '#325662', '/storage/files/1/product/thumb_IP12Pro_3.jpeg', 32400000, 1.00, 9, 0, 16, '2021-07-28 21:41:55', '2021-07-28 21:41:55', NULL),
(23, 'Màu vàng', '#fef0db', '/storage/files/1/product/thumb_IP12Pro_4.jpeg', 32800000, 1.00, 11, 0, 16, '2021-07-28 21:42:36', '2021-08-02 01:23:51', NULL),
(24, 'Màu đen', '#36413b', '/storage/files/1/product/thumb_11-ProMAX_2.jpeg', 21200000, 2.00, 4, 1, 17, '2021-07-28 21:43:26', '2021-07-31 21:48:23', NULL),
(25, 'Màu đỏ', '#b20225', '/storage/files/1/product/thumb_iP11_7.jpeg', 13400000, 2.00, 16, 1, 18, '2021-07-31 19:56:30', '2021-07-31 20:17:08', NULL),
(26, 'Màu đen', '#171717', '/storage/files/1/product/thumb_S21ultra-2.jpeg', 23600000, 1.00, 8, 1, 19, '2021-07-31 20:06:11', '2021-07-31 20:06:11', NULL),
(27, 'Màu trắng', '#000000', '/storage/files/1/product/thumb_S21ultra-1.jpeg', 24200000, 2.00, 11, 0, 19, '2021-07-31 20:08:03', '2021-07-31 20:08:17', NULL),
(28, 'Màu vàng', '#ffe680', '/storage/files/1/product/thumb_iP11_6.jpeg', 13700000, 1.00, 15, 0, 18, '2021-07-31 20:08:56', '2021-07-31 20:17:16', NULL),
(29, 'Màu đen', '#000000', '/storage/files/1/product/thumb_iP11_4.jpeg', 12900000, 1.00, 16, 0, 18, '2021-07-31 20:09:38', '2021-07-31 20:17:25', NULL),
(30, 'Màu trắng', '#000000', '/storage/files/1/product/thumb_iP11_2.jpeg', 13200000, 1.00, 8, 0, 18, '2021-07-31 20:10:14', '2021-07-31 20:17:34', NULL),
(31, 'Màu xanh', '#c7e6db', '/storage/files/1/product/thumb_iP11_5.jpeg', 14700000, 1.00, 13, 1, 20, '2021-07-31 20:16:34', '2021-07-31 22:16:53', NULL),
(32, 'Màu đen', '#1b1b1b', '/storage/files/1/product/thumb_iP11_4.jpeg', 14300000, 2.00, 16, 0, 20, '2021-07-31 20:18:13', '2021-07-31 20:18:13', NULL),
(33, 'Màu trắng', '#000000', '/storage/files/1/product/thumb_iP11_2.jpeg', 16900000, 1.00, 7, 0, 20, '2021-07-31 20:18:45', '2021-07-31 20:18:45', NULL),
(34, 'Màu đỏ', '#000000', '/storage/files/1/product/thumb_iP11_7.jpeg', 16800000, 1.00, 9, 0, 20, '2021-07-31 20:19:42', '2021-07-31 20:19:42', NULL),
(35, 'Màu xanh', '#8abed8', '/storage/files/1/product/thumb_A52-1.jpeg', 8700000, 2.00, 11, 1, 21, '2021-07-31 20:45:45', '2021-07-31 22:06:41', NULL),
(36, 'Màu xám', '#ccc7df', '/storage/files/1/product/thumb_A52-2.jpeg', 8900000, 2.00, 7, 0, 21, '2021-07-31 20:46:52', '2021-07-31 20:46:52', NULL),
(37, 'Màu trắng', '#ecebe8', '/storage/files/1/product/thumb_A12-2.jpeg', 5600000, 3.00, 12, 1, 22, '2021-07-31 21:06:27', '2021-07-31 22:07:59', NULL),
(38, 'Màu xanh', '#c6dfd3', '/storage/files/1/product/a22-2.jpeg', 5200000, 3.00, 6, 0, 22, '2021-07-31 21:07:20', '2021-07-31 22:08:08', NULL),
(39, 'Màu đen', '#000000', '/storage/files/1/clock/thumb_AW3_1.jpeg', 5590000, 3.00, 22, 1, 23, '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(40, 'Màu trắng', '#f0eeed', '/storage/files/1/clock/thumb_AW3_2.jpeg', 5890000, 2.00, 11, 0, 23, '2021-08-01 17:48:36', '2021-08-01 17:48:36', NULL),
(41, 'Màu đen', '#3b3938', '/storage/files/1/clock/thumb_S6-GPS_5.jpeg', 12700000, 1.00, 11, 0, 24, '2021-08-01 18:09:19', '2021-08-01 20:23:17', NULL),
(42, 'Màu trắng', '#e8e6e5', '/storage/files/1/clock/thumb_S6-GPS_3.jpeg', 1290000, 1.00, 14, 0, 24, '2021-08-01 18:10:04', '2021-08-01 18:10:04', NULL),
(43, 'Màu hồng', '#f8dbd0', '/storage/files/1/clock/thumb_S6-GPS_4.jpeg', 13200000, 2.00, 11, 1, 24, '2021-08-01 18:10:57', '2021-08-01 20:23:07', NULL),
(44, 'Màu xanh', '#363d53', '/storage/files/1/clock/thumb_S6-GPS_2.jpeg', 13600000, 1.00, 11, 0, 25, '2021-08-01 18:22:00', '2021-08-01 20:21:43', NULL),
(45, 'Màu đỏ', '#000000', '/storage/files/1/clock/thumb_S6-GPS_1.jpeg', 13400000, 2.00, 9, 0, 25, '2021-08-01 18:23:04', '2021-08-01 18:23:04', NULL),
(46, 'Màu trắng', '#000000', '/storage/files/1/clock/thumb_S6-GPS_3.jpeg', 13700000, 1.00, 8, 1, 25, '2021-08-01 18:23:25', '2021-08-01 20:21:35', NULL),
(47, 'Màu đen', '#000000', '/storage/files/1/clock/thumb_S6-GPS_5.jpeg', 13300000, 1.00, 11, 0, 25, '2021-08-01 18:23:58', '2021-08-01 18:23:58', NULL),
(48, 'Màu trắng', '#c8c8c8', '/storage/files/1/pk/Mi-bank.jpeg', 390000, 1.00, 23, 1, 26, '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(49, 'Màu trắng', '#f6f6fa', '/storage/files/1/pk/coc-sac-iphone.png', 189000, 1.00, 8, 1, 27, '2021-08-01 20:42:52', '2021-08-01 20:42:52', NULL),
(50, 'Màu trắng', '#dddddd', '/storage/files/1/pk/dâyC2L.jpeg', 249000, 1.00, 14, 1, 28, '2021-08-01 20:45:46', '2021-08-01 20:45:46', NULL),
(51, 'Màu trắng', '#000000', '/storage/files/1/pk/pisen.jpeg', 299000, 1.00, 7, 1, 29, '2021-08-01 20:48:11', '2021-08-01 20:48:11', NULL),
(52, 'Màu đen', '#595553', '/storage/files/1/clock/thumb_S6-TT_3.jpeg', 18900000, 2.00, 19, 1, 30, '2021-08-01 21:06:22', '2021-08-01 21:06:22', NULL),
(53, 'Màu trắng', '#b1b2b4', '/storage/files/1/clock/thumb_S6-TT_1.jpeg', 18600000, 2.00, 17, 0, 30, '2021-08-01 21:07:10', '2021-08-01 21:07:10', NULL),
(54, 'Màu vàng', '#705f4e', '/storage/files/1/clock/thumb_S6-TT_2.jpeg', 18860000, 2.00, 11, 1, 31, '2021-08-01 21:14:04', '2021-08-01 21:15:48', NULL),
(55, 'Màu trắng', '#babbbd', '/storage/files/1/clock/thumb_S6-TT_1.jpeg', 18490000, 2.00, 12, 0, 31, '2021-08-01 21:15:38', '2021-08-01 21:15:38', NULL),
(56, 'Màu đen', '#9d9896', '/storage/files/1/clock/thumb_S6-TT_3.jpeg', 18200000, 2.00, 13, 0, 31, '2021-08-01 21:16:16', '2021-08-01 21:16:16', NULL),
(57, 'Mùa cam', '#db765b', '/storage/files/1/product/thumb_RMN9_4G-4.jpeg', 3900000, 3.00, 16, 1, 32, '2021-08-02 00:27:40', '2021-08-02 00:27:40', NULL),
(58, 'Màu xanh', '#63c7c3', '/storage/files/1/product/thumb_RMN9_4G-3.jpeg', 3800000, 3.00, 12, 0, 32, '2021-08-02 00:29:34', '2021-08-02 00:29:34', NULL),
(59, 'Màu đen', '#535353', '/storage/files/1/product/thumb_RMN9_4G-1.jpeg', 3600000, 3.00, 11, 0, 32, '2021-08-02 00:30:04', '2021-08-02 00:30:04', NULL),
(60, 'Màu tím', '#9694b4', '/storage/files/1/product/thumb_S21-3.jpeg', 17800000, 3.00, 11, 1, 33, '2021-08-02 00:40:42', '2021-08-02 00:40:42', NULL),
(61, 'Màu xanh', '#b4c3c9', '/storage/files/1/product/thumb_S21-2.jpeg', 17900000, 3.00, 9, 0, 33, '2021-08-02 00:41:31', '2021-08-02 01:22:45', NULL),
(62, 'Màu đen', '#000000', '/storage/files/1/product/thumb_S21-1.jpeg', 17400000, 3.00, 7, 0, 33, '2021-08-02 00:41:57', '2021-08-02 00:41:57', NULL),
(63, 'Màu hồng', '#000000', '/storage/files/1/product/samsung-galaxy-watch-active-2-lte-alumium-40mm.png', 4300000, 2.00, 13, 1, 34, '2021-08-02 00:50:22', '2021-08-02 00:50:22', NULL),
(64, 'Màu đen', '#000000', '/storage/files/1/product/samsung-galaxy-watch-active-2-lte-alumium-40mm-2.png', 4100000, 3.00, 8, 0, 34, '2021-08-02 00:50:53', '2021-08-02 00:50:53', NULL),
(65, 'Màu đen', '#000000', '/storage/files/1/clock/image-removebg-preview-23.png', 790000, 2.00, 11, 0, 35, '2021-08-02 01:05:28', '2021-08-02 01:21:00', NULL),
(66, 'Màu đỏ', '#000000', '/storage/files/1/clock/image-removebg-preview-24.png', 760000, 2.00, 12, 0, 35, '2021-08-02 01:06:03', '2021-08-02 01:22:02', NULL),
(67, 'Màu trắng', '#f4f4f4', '/storage/files/1/clock/thumb_Fit_2.jpeg', 790000, 2.00, 14, 1, 35, '2021-08-02 01:20:47', '2021-08-02 01:20:47', NULL),
(68, 'Màu đỏ', '#000000', '/storage/files/1/clock/thumb_SE-LTE_4.jpeg', 9300000, 4.00, 14, 1, 36, '2021-08-02 01:31:59', '2021-08-10 11:44:35', NULL),
(69, 'Màu đen', '#0c0b10', '/storage/files/1/clock/thumb_SE-LTE_5.jpeg', 9100000, 3.00, 8, 0, 36, '2021-08-02 01:32:47', '2021-08-02 01:32:47', NULL),
(70, 'Màu vàng', '#000000', '/storage/files/1/clock/thumb_Fit_e_1.jpeg', 470000, 1.00, 7, 1, 37, '2021-08-04 01:18:15', '2021-08-04 01:18:15', NULL),
(71, 'Màu xanh', '#000000', '/storage/files/1/product/thumb_IP12Pro_3.jpeg', 31960000, 1.00, 23, 1, 38, '2021-08-04 23:18:50', '2021-08-05 02:37:17', NULL),
(72, 'Màu vàng', '#000000', '/storage/files/1/product/thumb_IP12Pro_4.jpeg', 32900000, 1.00, 11, 0, 38, '2021-08-05 00:47:03', '2021-08-05 00:47:03', NULL),
(73, 'Màu trắng', '#f4f5ef', '/storage/files/1/product/thumb_IP12Pro_2.jpeg', 31800000, 1.00, 14, 0, 38, '2021-08-05 00:48:48', '2021-08-05 00:48:48', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `name`, `rating`, `description`, `email`, `status`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyễn Thanh Duy', 5, 'Sản phẩm rất chất lượng , chiến được tất cả mọi loại game , nhân viên tư vấn nhiệt tình , quá tuyệt vời', 'duy2390@gmail.com', 1, 38, '2021-08-07 02:02:17', '2021-08-20 23:01:11', NULL),
(2, 'Lê Văn Thành', 4, 'Sản phẩm chất lượng , nhân viên nhiệt tình xinh đẹp , chúc của hàng ngày càng phát triển .', 'thanhvt2308@gmail.com', 1, 38, '2021-08-07 02:08:34', '2021-08-20 23:01:10', NULL),
(3, 'Trần Thanh Thuỷ', 5, 'Sản phẩm có màu cực chill luôn , nhân viên tư vấn rất nhiệt tình .', 'thuytt2107@gmail.com', 1, 20, '2021-08-07 20:16:59', '2021-08-07 20:21:24', NULL),
(4, 'Hoàng Văn toàn', 4, 'Sản phẩm ổn định , vô địch trong tầm giá', 'toanht2304@gmail.com', 1, 20, '2021-08-07 20:20:42', '2021-08-07 20:21:25', NULL),
(5, 'Lê Thị Thanh', 4, 'Sản phẩm đẹp lắm , cảm ơn cửa hàng vì những trải nghiệm tuyệt vời này .', 'thanhlt23111@gmail.com', 1, 18, '2021-08-07 20:28:24', '2021-08-07 20:28:36', NULL),
(6, 'Lê Văn Luyện', 4, 'Sản phẩm đẹp quá za trại phải làm ngay một cái mới được . Chúc cửa hàng may mắn nha .', 'luyenlv2211@gmail.com', 1, 16, '2021-08-08 14:33:42', '2021-08-08 14:34:18', NULL),
(7, 'Lê Thị Thuận', 4, 'Sản phẩm rất là đẹp nha', 'thuanlv234@gmail.com', 1, 31, '2021-08-08 17:36:33', '2021-08-08 17:41:10', NULL),
(8, 'việt Hoàng', 4, 'Sản phẩm rất đẹp', 'AnhtuyetAnhtuyet2311001@gmail.com', 1, 31, '2021-08-08 17:37:49', '2021-08-08 17:41:06', '2021-08-08 17:41:06'),
(9, 'Ngô Hồng Nguyên', 4, 'Sản phẩm đẹp quá . Phải sắm ngay thôi', 'chuloncobap2311@gmail.com', 0, 16, '2021-08-15 02:43:33', '2021-08-15 02:43:33', NULL),
(10, 'Ngô Văn Chung', 4, 'Sản phẩm đẹp quá', 'anhtuyet2311001@gmail.com', 1, 38, '2021-08-16 22:33:28', '2021-08-20 23:00:42', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 8, 5, '2021-07-24 01:29:39', '2021-07-24 01:29:39', NULL),
(6, 8, 6, '2021-07-24 01:29:39', '2021-07-24 01:29:39', NULL),
(7, 9, 5, '2021-07-24 21:34:01', '2021-07-24 21:34:01', NULL),
(8, 9, 7, '2021-07-24 21:34:01', '2021-07-24 21:34:01', NULL),
(15, 14, 16, '2021-07-26 00:08:28', '2021-07-26 23:11:36', '2021-07-26 23:11:36'),
(18, 16, 5, '2021-07-27 14:27:46', '2021-07-27 14:27:46', NULL),
(19, 16, 6, '2021-07-27 14:27:46', '2021-07-27 14:27:46', NULL),
(20, 17, 5, '2021-07-27 14:36:15', '2021-07-27 14:36:15', NULL),
(21, 17, 7, '2021-07-27 14:36:15', '2021-07-27 14:36:15', NULL),
(22, 10, 8, NULL, NULL, NULL),
(23, 10, 9, NULL, NULL, NULL),
(24, 13, 17, NULL, NULL, NULL),
(25, 13, 18, NULL, NULL, NULL),
(26, 18, 5, '2021-07-31 19:56:30', '2021-07-31 19:56:30', NULL),
(27, 18, 19, '2021-07-31 19:56:30', '2021-07-31 19:56:30', NULL),
(28, 19, 17, '2021-07-31 20:06:11', '2021-07-31 20:06:11', NULL),
(29, 19, 20, '2021-07-31 20:06:11', '2021-07-31 20:06:11', NULL),
(30, 20, 5, '2021-07-31 20:16:34', '2021-07-31 20:16:34', NULL),
(31, 20, 19, '2021-07-31 20:16:34', '2021-07-31 20:16:34', NULL),
(32, 21, 17, '2021-07-31 20:45:45', '2021-07-31 20:45:45', NULL),
(33, 21, 21, '2021-07-31 20:45:45', '2021-07-31 20:45:45', NULL),
(34, 22, 22, '2021-07-31 21:06:27', '2021-07-31 21:06:27', NULL),
(35, 22, 23, '2021-07-31 21:06:27', '2021-07-31 21:06:27', NULL),
(36, 23, 24, '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(37, 23, 25, '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(38, 24, 24, '2021-08-01 18:09:19', '2021-08-01 18:09:19', NULL),
(39, 24, 26, '2021-08-01 18:09:19', '2021-08-01 18:09:19', NULL),
(40, 25, 24, '2021-08-01 18:22:00', '2021-08-01 18:22:00', NULL),
(41, 26, 27, '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(42, 26, 28, '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(43, 27, 27, '2021-08-01 20:42:52', '2021-08-01 20:42:52', NULL),
(44, 27, 29, '2021-08-01 20:42:52', '2021-08-01 20:42:52', NULL),
(45, 28, 27, '2021-08-01 20:45:46', '2021-08-01 20:45:46', NULL),
(46, 28, 30, '2021-08-01 20:45:46', '2021-08-01 20:45:46', NULL),
(47, 29, 27, '2021-08-01 20:48:11', '2021-08-01 20:48:11', NULL),
(48, 29, 30, '2021-08-01 20:48:11', '2021-08-01 20:48:11', NULL),
(49, 30, 24, '2021-08-01 21:06:22', '2021-08-01 21:06:22', NULL),
(50, 30, 26, '2021-08-01 21:06:22', '2021-08-01 21:06:22', NULL),
(51, 31, 24, '2021-08-01 21:14:04', '2021-08-01 21:14:04', NULL),
(52, 32, 8, '2021-08-02 00:27:40', '2021-08-02 00:27:40', NULL),
(53, 32, 31, '2021-08-02 00:27:40', '2021-08-02 00:27:40', NULL),
(54, 33, 17, '2021-08-02 00:40:42', '2021-08-02 00:40:42', NULL),
(55, 33, 32, '2021-08-02 00:40:42', '2021-08-02 00:40:42', NULL),
(56, 34, 24, '2021-08-02 00:50:22', '2021-08-02 00:50:22', NULL),
(57, 34, 33, '2021-08-02 00:50:22', '2021-08-02 00:50:22', NULL),
(58, 35, 24, '2021-08-02 01:05:28', '2021-08-02 01:05:28', NULL),
(59, 35, 34, '2021-08-02 01:05:28', '2021-08-02 01:05:28', NULL),
(60, 36, 24, '2021-08-02 01:31:59', '2021-08-02 01:31:59', NULL),
(61, 36, 35, '2021-08-02 01:31:59', '2021-08-02 01:31:59', NULL),
(62, 37, 24, '2021-08-04 01:18:15', '2021-08-04 01:18:15', NULL),
(63, 37, 34, '2021-08-04 01:18:15', '2021-08-04 01:18:15', NULL),
(64, 38, 5, '2021-08-04 23:18:50', '2021-08-04 23:18:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Quản trị', 1, NULL, '2021-08-07 01:18:31', NULL),
(2, 'Dev', 'Phát triển hệ thống', 1, NULL, NULL, NULL),
(3, 'Content', 'Viết bài', 1, NULL, NULL, NULL),
(4, 'Producter', 'Quản lý sản phẩm', 1, NULL, NULL, NULL),
(6, 'Staff', 'Nhân viên', 1, NULL, NULL, NULL),
(7, 'Editor', 'Nhân viên soạn thảo văn bản', 1, '2021-08-05 20:52:23', '2021-08-05 21:53:41', NULL),
(17, 'Customer', 'Người dùng', 1, '2021-08-12 01:25:54', '2021-08-12 01:25:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'iphone', '2021-07-24 01:29:39', '2021-07-24 01:29:39', NULL),
(6, 'iphone 12 pro max', '2021-07-24 01:29:39', '2021-07-24 01:29:39', NULL),
(7, 'iphone 11 pro max', '2021-07-24 21:34:01', '2021-07-24 21:34:01', NULL),
(8, 'Xiaomi', '2021-07-25 23:12:25', '2021-07-25 23:12:25', NULL),
(9, 'Xiaomi Poco M3', '2021-07-25 23:12:25', '2021-07-25 23:12:25', NULL),
(14, 'haha', '2021-07-26 00:06:39', '2021-07-26 00:06:39', NULL),
(15, 'hêh', '2021-07-26 00:06:39', '2021-07-26 00:06:39', NULL),
(16, 'hihi', '2021-07-26 00:08:28', '2021-07-26 00:08:28', NULL),
(17, 'samsung', '2021-07-28 21:38:06', '2021-07-28 21:38:06', NULL),
(18, 'samsung s20 ultra', '2021-07-28 21:38:06', '2021-07-28 21:38:06', NULL),
(19, 'iphone 11', '2021-07-31 19:56:30', '2021-07-31 19:56:30', NULL),
(20, 'samsung galaxy s21 ultra', '2021-07-31 20:06:11', '2021-07-31 20:06:11', NULL),
(21, 'samsung galaxy a52', '2021-07-31 20:45:45', '2021-07-31 20:45:45', NULL),
(22, 'samssung', '2021-07-31 21:06:27', '2021-07-31 21:06:27', NULL),
(23, 'samsung galaxy a22', '2021-07-31 21:06:27', '2021-07-31 21:06:27', NULL),
(24, 'đồng hồ', '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(25, 'Apple Watch Series 3', '2021-08-01 17:47:22', '2021-08-01 17:47:22', NULL),
(26, 'Apple Watch Series 6', '2021-08-01 18:09:19', '2021-08-01 18:09:19', NULL),
(27, 'phụ kiện', '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(28, 'sạc dự phòng', '2021-08-01 20:38:40', '2021-08-01 20:38:40', NULL),
(29, 'dây sạc cáp sạc', '2021-08-01 20:42:52', '2021-08-01 20:42:52', NULL),
(30, 'dây sạc củ sạc', '2021-08-01 20:45:46', '2021-08-01 20:45:46', NULL),
(31, 'Xiaomi Redmi 9T', '2021-08-02 00:27:40', '2021-08-02 00:27:40', NULL),
(32, 'Samsung Galaxy S21 Plus', '2021-08-02 00:40:42', '2021-08-02 00:40:42', NULL),
(33, 'Samsung Galaxy Watch', '2021-08-02 00:50:22', '2021-08-02 00:50:22', NULL),
(34, 'Samsung Galaxy Fit', '2021-08-02 01:05:28', '2021-08-02 01:05:28', NULL),
(35, 'Apple Watch SE', '2021-08-02 01:31:59', '2021-08-02 01:31:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_attributes`
--

CREATE TABLE `type_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_attributes`
--

INSERT INTO `type_attributes` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Màu sắc', 'mau-sac', 0, '2021-06-28 20:52:08', '2021-08-03 00:46:55', '2021-08-03 00:46:55'),
(2, 'Bộ nhớ', 'bo-nho', 1, '2021-06-28 20:55:33', '2021-06-28 20:55:33', NULL),
(3, 'Bản sản xuất', 'ban-san-xuat', 0, '2021-06-28 23:39:54', '2021-07-22 01:18:24', NULL),
(6, 'Ram', 'ram', 0, '2021-07-20 22:35:46', '2021-07-20 22:35:54', '2021-07-20 22:35:54'),
(7, 'Kích thước', 'kich-thuoc', 1, '2021-07-22 01:17:30', '2021-08-13 23:53:22', NULL),
(8, 'Nơi sản xuất', 'noi-san-xuat', 0, '2021-08-14 00:23:05', '2021-08-14 00:24:56', NULL);

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `address`, `phone`, `gender`, `status`, `deleted_at`) VALUES
(1, 'Hoàng Quốc Bảo Việt', 'hoangviet10072001@gmail.com', '2021-08-08 02:31:01', '$2y$10$8DqX1RQXvdu2OGtbvp6P3.nOR46gceZrX83b/A69ggeRsrstFzv8u', NULL, '2021-07-11 17:40:53', '2021-08-04 07:13:31', '/storage/files/1/user/user1.jpg', '189 Hoài Đức Hà Nội', '0355755697', 1, 1, NULL),
(2, 'Đào Ánh Tuyết', 'anhtuyet23112001@gmail.com', '2021-08-09 02:31:06', '$2y$10$8DqX1RQXvdu2OGtbvp6P3.nOR46gceZrX83b/A69ggeRsrstFzv8u', NULL, '2021-07-26 22:03:56', '2021-08-04 07:13:47', '/storage/files/1/user/IMG_2414.jpeg', '89 kiều Mai Hà Nội', '0827541636', 0, 1, NULL),
(3, 'Nguyễn Duy Việt Anh', 'vanh@gmail.com', '2021-08-10 02:31:13', '$2y$10$AV57BO9ji.nPzofhG9tXDefyf4HIEAQQqXOszJkkmUdRC/PIjosVu', NULL, '2021-08-04 06:01:44', '2021-08-06 18:55:13', '/storage/files/1/user/IMG_2413.jpeg', '189 Kiều Mai Hà Nội', '0859850000', 1, 1, NULL),
(6, 'Trần Hoài Thương', 'thuong27072001@gmail.com', '2021-08-11 02:31:19', '$2y$10$boCg9EG8OhGwpkpMVnWS1.2wwnb1.uCGJmtZkTcmgjbLcCEZ/L1ye', NULL, '2021-08-06 17:58:25', '2021-08-11 20:09:34', '/storage/files/1/user/IMG_2412.jpeg', '27 Đống Đa Hà Nội', '0982678678', 0, 1, NULL),
(22, 'haha', 'chuloncobap2311@gmail.com', '2021-08-19 15:02:28', '$2y$10$8vxggtKTXtp93edkMkHF1.n9eIp1W11M0oR8RwP6o7V1/UijUlGna', NULL, '2021-08-19 15:00:51', '2021-08-19 15:02:28', 'storage/image_user_clien/Ni1B2fv5NgBEnSGXy0fHZWf8xz58NcoQmLTynbeB.png', '189 Ba Vì Hà Nội', '09878898887', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 3, 4, NULL, NULL),
(4, 1, 1, NULL, NULL),
(5, 2, 1, NULL, NULL),
(7, 6, 3, NULL, NULL),
(8, 7, 17, NULL, NULL),
(9, 9, 6, NULL, NULL),
(10, 11, 7, NULL, NULL),
(18, 19, 17, NULL, NULL),
(20, 21, 17, NULL, NULL),
(21, 22, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `websettings`
--

CREATE TABLE `websettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `websettings`
--

INSERT INTO `websettings` (`id`, `name`, `slug`, `image`, `email`, `address`, `phone`, `description`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(10, 'Xshop', 'xshop', '/storage/files/1/websetting/logo5.png', 'hoangviet10072001@gmail.com', '189 Hoài Đức Hà Nội', '0355755697', '<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n mang đến cho kh&aacute;ch h&agrave;ng những g&igrave; tốt đẹp nhất .</p>', '2021-06-25 17:21:39', '2021-08-06 15:45:15', 1, NULL),
(11, 'Xshop', 'xshop', '/storage/files/1/websetting/logo2.png', 'Anhtuyet2311001@gmail.com', '127 Quận 1 Hồ Chí Minh', '0827541636', '<p>Ch&uacute;ng tối lu&ocirc;n mang đến cho qu&yacute; kh&aacute;ch những gi&acirc;y ph&uacute;t tuyệt vời nhất&nbsp;.</p>', '2021-06-25 18:45:43', '2021-08-01 16:16:27', 0, NULL),
(16, 'Xshop', 'xshop', '/storage/files/1/websetting/logo3.png', 'hoangviet10072001@gmail.com', '71 Kiều Mai Hà Nội', '0355755697', '<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n mang đến cho kh&aacute;ch h&agrave;ng những g&igrave; tốt đẹp nhất .</p>\r\n\r\n<p>&nbsp;</p>', '2021-07-11 23:28:07', '2021-07-20 02:33:54', 0, NULL),
(17, 'Xshop 1', 'xshop-1', '/storage/files/1/websetting/logo3.png', 'quan@gmail.com', 'hà nội', '0355755697', '<p>hahahahahahahhaah</p>', '2021-07-20 02:15:51', '2021-08-03 00:49:18', 0, '2021-08-03 00:49:18'),
(18, 'xshop2', 'xshop2', '/storage/files/1/websetting/logo2.png', 'hoangviet10072001@gmail.com', 'hà nội', '0355755697', '<p>heheheheheheheh</p>', '2021-07-20 02:16:13', '2021-07-20 20:21:03', 0, '2021-07-20 20:21:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `invioces`
--
ALTER TABLE `invioces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invioce_details`
--
ALTER TABLE `invioce_details`
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
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_posts_id_foreign` (`category_posts_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_attributes`
--
ALTER TABLE `type_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invioces`
--
ALTER TABLE `invioces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `invioce_details`
--
ALTER TABLE `invioce_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `type_attributes`
--
ALTER TABLE `type_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
