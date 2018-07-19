-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 11:44 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_17_083116_create_story_types_table', 2),
(5, '2018_07_18_034551_create_story_authors_table', 3),
(6, '2018_07_18_044659_create_stories_table', 4),
(7, '2018_07_18_141214_create_story_type_details_table', 5),
(9, '2018_07_19_072445_create_story_list_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `story_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_name_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `story_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_rating` int(10) UNSIGNED NOT NULL,
  `story_view` int(10) UNSIGNED NOT NULL,
  `story_sum_chapter` int(10) UNSIGNED NOT NULL,
  `story_source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_price` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `story_name`, `story_name_link`, `author_id`, `story_image`, `story_type`, `story_intro`, `story_rating`, `story_view`, `story_sum_chapter`, `story_source`, `story_status`, `story_price`, `update_id`, `flag`, `created_at`, `updated_at`) VALUES
(12, 'Đấu La Đại Lục', 'dau-la-dai-luc', 2, 'Sooi_dau-la-dai-luc.jpg', 'a:3:{i:0;s:1:\"5\";i:1;s:1:\"6\";i:2;s:1:\"8\";}', '<p>sssssssssssssssssssssssssss</p>', 9, 0, 0, 'truyện full', '1', 2, 1, 1, '2018-07-18 23:54:56', '2018-07-19 00:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `story_authors`
--

CREATE TABLE `story_authors` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_authors`
--

INSERT INTO `story_authors` (`author_id`, `author_name`, `author_name_link`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Thiên Tằm Tổ Đậu', 'thien-tam-to-dau', 2, '2018-07-17 21:37:09', '2018-07-18 20:43:04'),
(2, 'Đường Gia Tam Thiếu', 'duong-gia-tam-thieu', 1, '2018-07-18 04:30:36', '2018-07-18 04:30:36'),
(3, 'Ngã Tật Cây Hồng Thị', 'nga-tat-cay-hong-thi', 1, '2018-07-18 19:12:03', '2018-07-18 19:12:03'),
(4, 'Tiêu Thiên Tứ', 'tieu-thien-tu', 1, '2018-07-19 02:17:20', '2018-07-19 02:17:20'),
(5, 'Huy Xích Phương Tù', 'huy-xich-phuong-tu', 1, '2018-07-19 02:17:43', '2018-07-19 02:17:43'),
(6, 'Vưu Tiền', 'vuu-tien', 1, '2018-07-19 02:17:53', '2018-07-19 02:17:53'),
(7, 'Lão Hói', 'lao-hoi', 1, '2018-07-19 02:18:03', '2018-07-19 02:18:03'),
(8, 'Thạch Long', 'thach-long', 1, '2018-07-19 02:18:13', '2018-07-19 02:18:13'),
(9, 'Gió Tới', 'gio-toi', 1, '2018-07-19 02:18:27', '2018-07-19 02:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `story_list_details`
--

CREATE TABLE `story_list_details` (
  `chapter_id` int(10) UNSIGNED NOT NULL,
  `chapter` int(10) UNSIGNED NOT NULL,
  `chapter_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `story_types`
--

CREATE TABLE `story_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_name_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_types`
--

INSERT INTO `story_types` (`type_id`, `type_name`, `type_name_link`, `flag`, `created_at`, `updated_at`) VALUES
(3, 'Tiên Hiệp', 'tien-hiep', 1, '2018-07-17 03:01:13', '2018-07-17 21:45:29'),
(4, 'Huyền Huyễn', 'huyen-huyen', 1, '2018-07-17 03:02:01', '2018-07-17 18:12:34'),
(5, 'Xuyên Không', 'xuyen-khong', 1, '2018-07-17 03:06:56', '2018-07-17 18:12:29'),
(6, 'Dị Giới', 'di-gioi', 1, '2018-07-17 05:02:14', '2018-07-17 08:01:03'),
(7, 'Trọng Sinh', 'trong-sinh', 1, '2018-07-17 18:21:27', '2018-07-17 18:21:27'),
(8, 'Đô Thị', 'do-thi', 1, '2018-07-18 19:12:33', '2018-07-18 19:12:33'),
(9, 'Truyện Teen', 'truyen-teen', 1, '2018-07-18 19:13:30', '2018-07-18 19:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `story_type_details`
--

CREATE TABLE `story_type_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `story_id` int(11) NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_type_details`
--

INSERT INTO `story_type_details` (`id`, `story_id`, `type_id`, `created_at`, `updated_at`) VALUES
(141, 12, '5', '2018-07-19 00:52:39', '2018-07-19 00:52:39'),
(142, 12, '6', '2018-07-19 00:52:39', '2018-07-19 00:52:39'),
(143, 12, '8', '2018-07-19 00:52:39', '2018-07-19 00:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'bvl0165@gmail.com', '$2y$10$Z/mbqq/r7ByDeKOBTyvN4eLjy8QgcALdWHWN3g8ksmQdi/G1mj1PW', 0, 'z9dTvQIptjtn8kzxYbqq7S5cLp7qw1E6hHrANNLZ8eCvj4XkEs4m8GwWou5v', '2018-07-16 05:34:40', '2018-07-16 05:34:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `story_authors`
--
ALTER TABLE `story_authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `story_list_details`
--
ALTER TABLE `story_list_details`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `story_types`
--
ALTER TABLE `story_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `story_type_details`
--
ALTER TABLE `story_type_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `story_authors`
--
ALTER TABLE `story_authors`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `story_list_details`
--
ALTER TABLE `story_list_details`
  MODIFY `chapter_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story_types`
--
ALTER TABLE `story_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `story_type_details`
--
ALTER TABLE `story_type_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
