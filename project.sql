-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 12:08 PM
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
(10, '2018_07_19_072445_create_story_list_details_table', 6);

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
(12, 'Đấu La Đại Lục', 'dau-la-dai-luc', 2, 'Sooi_dau-la-dai-luc.jpg', 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"4\";i:2;s:1:\"5\";}', '<p><strong>Giới Thiệu Truyện</strong><br /><br /><strong>Một&nbsp;<em>đại lục</em>&nbsp;kh&ocirc;ng hề y&ecirc;n b&igrave;nh, một cuộc sống đầy hiểm nguy, phi&ecirc;u lưu nhưng cũng kh&ocirc;ng k&eacute;m phần l&atilde;ng mạn. t&igrave;nh y&ecirc;u, th&ugrave; hận, tr&aacute;ch nhiệm&hellip; Tiếp bước những tiền bối đi trước, Hoắc Vũ Hạo v&agrave; đời sau sử lai khắc thất qu&aacute;i, bằng niềm tin nhiệt huyết tuổi trẻ đ&atilde; g&acirc;y dựng lại&nbsp;đường m&ocirc;n&nbsp;t&aacute;i lập những huy ho&agrave;ng xưa kia của c&aacute;c tiền bối đi trước&hellip;</strong><br /><br />- Kiếp trước l&agrave; thi&ecirc;n t&agrave;i sau khi chế tạo &aacute;m kh&iacute; cao nhất của đường m&ocirc;n: Phật Nộ Li&ecirc;n Hoa. Xuy&ecirc;n việt mang theo v&otilde; c&ocirc;ng c&ugrave;ng với &aacute;m kh&iacute; Đường M&ocirc;n đến thế giới kh&ocirc;ng c&oacute; v&otilde; c&ocirc;ng c&ugrave;ng &aacute;m kh&iacute; si&ecirc;u đẳng như thế, chuyện g&igrave; sẽ xảy ra tiếp theo? H&atilde;y c&ugrave;ng nhau theo d&otilde;i Đấu La Đại Lục để biết r&otilde; bạn nh&eacute;.<br /><br />- Tags:&nbsp;<a href=\"http://truyenfull.vn/dau-la-dai-luc/\" target=\"_blank\" rel=\"nofollow\"><strong>dau la dai luc</strong></a>,&nbsp;<strong>truyen huyen ao</strong>,&nbsp;<em>dau la dai luc prc full</em></p>', 9, 0, 1, 'truyện full', '2', 2, 1, 1, '2018-07-18 23:54:56', '2018-07-19 21:26:33');

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
  `story_id` int(10) UNSIGNED NOT NULL,
  `chapter_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_name_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_list_details`
--

INSERT INTO `story_list_details` (`chapter_id`, `chapter`, `story_id`, `chapter_name`, `chapter_name_link`, `chapter_content`, `flag`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 'Đấu La Đại Lục (1)', 'chuong-1_prE6', '<p>Ba Thục c&ograve;n c&oacute; mỹ danh Thi&ecirc;n Phủ Chi Quốc, trong đ&oacute; nổi danh nhất ch&iacute;nh l&agrave; Đường M&ocirc;n<br /><br />Đường M&ocirc;n l&agrave; một thần b&iacute; địa phương, rất nhiều người chỉ biết đ&oacute; l&agrave; một địa điểm giữa sườn n&uacute;i, m&agrave; đỉnh n&uacute;i nơi Đường M&ocirc;n tọa lạc lại c&oacute; một c&aacute;i t&ecirc;n l&agrave;m kẻ kh&aacute;c đảm chiến kinh t&acirc;m - Quỷ Kiến Sầu.<br /><br />Từ đỉnh Quỷ Kiến Sầu m&agrave; n&eacute;m ra một h&ograve;n đ&aacute;, phải đến 19 mới nghe được tiếng vang của h&ograve;n đ&aacute; va chạm dưới ch&acirc;n n&uacute;i, c&oacute; thể thấy được n&uacute;i cao thế n&agrave;o, cũng bởi v&igrave; mười ch&iacute;n gi&acirc;y n&agrave;y, vượt qua mười t&aacute;m tầng địa ngục một bậc, n&ecirc;n mới c&oacute; c&aacute;i t&ecirc;n n&agrave;y.<br /><br />Một g&atilde; h&ocirc;i y (&aacute;o x&aacute;m) thanh ni&ecirc;n đang đứng tr&ecirc;n đỉnh n&uacute;i Quỷ Kiến Sầu, gi&oacute; n&uacute;i m&atilde;nh liệt kh&ocirc;ng l&agrave;m th&acirc;n thể hắn di động ch&uacute;t n&agrave;o, từ tr&ecirc;n ngực hắn ngực c&oacute; một chữ Đường lớn c&oacute; thể nhận ra, hắn đến từ Đường M&ocirc;n, &aacute;o x&aacute;m đại biểu l&agrave; Đường M&ocirc;n ngoại m&ocirc;n đệ tử.<br /><br />Hắn năm nay hai mươi ch&iacute;n tuổi, xuất sanh kh&ocirc;ng l&acirc;u th&igrave; tiến v&agrave;o Đường M&ocirc;n, trong ngoại m&ocirc;n b&agrave;i danh đệ tam, bởi vậy ngoại m&ocirc;n đệ tử xưng hắn một tiếng Tam Thiếu. Đương nhi&ecirc;n, tới miệng nội m&ocirc;n đệ tử miệng, tựu biến th&agrave;nh Đường Tam.<br /><br />Đường M&ocirc;n từ khi th&agrave;nh lập th&igrave; bắt đầu chia l&agrave;m nội ngoại nhị m&ocirc;n, ngoại m&ocirc;n đệ tử đều l&agrave; ngoại t&iacute;nh (họ kh&aacute;c) hoặc được thụ dư (ban cho) Đường t&iacute;nh (họ Đường), m&agrave; nội m&ocirc;n l&agrave; Đường M&ocirc;n trực hệ gia tộc truyền thừa.<br /><br />L&uacute;c n&agrave;y, vẻ mặt Đường Tam rất phong ph&uacute;, khi th&igrave; cười, khi th&igrave; kh&oacute;c, nhưng v&ocirc; luận thế n&agrave;o, đều kh&ocirc;ng thể che dấu hưng phấn ph&aacute;t ra từ nội t&acirc;m.<br /><br />Hai mươi ch&iacute;n năm, hai mươi ch&iacute;n năm trước hắn được ngoại m&ocirc;n trưởng l&atilde;o Đường Lam th&aacute;i gia nhặt về Đường M&ocirc;n từ l&uacute;c c&ograve;n nằm trong t&atilde;, Đường M&ocirc;n ch&iacute;nh l&agrave; nh&agrave; hắn, m&agrave; Đường M&ocirc;n &aacute;m kh&iacute; ch&iacute;nh l&agrave; tất cả của hắn.<br /><br />Đột nhi&ecirc;n, Đường Tam sắc mặt chợt biến đổi, nhưng rất nhanh trở lại b&igrave;nh thường, c&oacute; ch&uacute;t khổ s&aacute;p đ&iacute;ch tự nhủ:&nbsp;<em>\"C&aacute;i g&igrave; phải tới cuối c&ugrave;ng sẽ tới. \"</em><br /><br />Mười bảy đạo th&acirc;n ảnh, mười bảy đạo bạch sắc th&acirc;n ảnh, tựa như &aacute;nh sao to&aacute;t ra từ sườn n&uacute;i hướng đỉnh n&uacute;i m&agrave; đến, chủ nh&acirc;n mười bảy đạo th&acirc;n ảnh n&agrave;y, tuổi nhỏ nhất cũng ngoại ngũ tuần (hơn 50), mỗi người đều thần sắc ngưng trọng, bọn họ mặc bạch y đại biểu ch&iacute;nh l&agrave; nội m&ocirc;n, m&agrave; chữ Đường m&agrave;u v&agrave;ng trước ngực l&agrave; tượng trưng cho Đường M&ocirc;n trưởng l&atilde;o.<br /><br />Đường M&ocirc;n nội m&ocirc;n trưởng l&atilde;o đường kể cả chưởng m&ocirc;n Đường Đại ti&ecirc;n sinh tổng cộng c&oacute; mười bảy vị trưởng l&atilde;o, l&uacute;c n&agrave;y đăng sơn (l&ecirc;n n&uacute;i) cũng l&agrave; mười bảy vị. Cho d&ugrave; l&agrave; v&otilde; l&acirc;m đại hội cũng kh&ocirc;ng thể kinh động to&agrave;n bộ Đường M&ocirc;n trưởng l&atilde;o đồng thời xuất động, phải biết rằng, trong số Đường M&ocirc;n trưởng l&atilde;o, người lớn tuổi nhất đ&atilde; vượt qua hai gi&aacute;p (hơn 120 tuổi).<br /><br />Đường M&ocirc;n trưởng l&atilde;o tu vi, kh&ocirc;ng ai kh&ocirc;ng đạt tới cực cảnh, chỉ trong chớp mắt, bọn họ cũng đ&atilde; đi tới đỉnh n&uacute;i.<br /><br />Ngoại m&ocirc;n đệ tử nh&igrave;n thấy nội m&ocirc;n trưởng l&atilde;o, chỉ c&oacute; thể quỳ xuống ngh&ecirc;nh đ&oacute;n, nhưng l&uacute;c n&agrave;y, Đường Tam bất động, chỉ lẳng lặng nh&igrave;n c&aacute;c trưởng l&atilde;o sắc mặt ngưng trọng đi tới trước mặt, ngăn lại tất cả đường đi, m&agrave; sau lưng hắn l&agrave; Quỷ Kiến Sầu.<br /><br />Bu&ocirc;ng ba đ&oacute;a Phật Nộ Đường Li&ecirc;n, Đường Tam cuối c&ugrave;ng c&uacute;i đầu, &aacute;nh mắt lưu luyến kh&ocirc;ng th&ocirc;i, kh&oacute;e miệng to&aacute;t ra một nụ cười vui mừng, hắn d&ugrave; sao cũng đ&atilde; th&agrave;nh c&ocirc;ng, cố gắng hai mươi năm, hắn rốt cục ho&agrave;n th&agrave;nh chế tạo Đường gia ngoại m&ocirc;n &aacute;m kh&iacute; đỉnh phong, c&aacute;i loại thỏa m&atilde;n về th&agrave;nh tựu n&agrave;y kh&ocirc;ng thể d&ugrave;ng ng&ocirc;n ngữ h&igrave;nh dung được.<br /><br />Giờ ph&uacute;t n&agrave;y, Đường Tam c&oacute; cảm gi&aacute;c đối với ch&iacute;nh m&igrave;nh m&agrave; n&oacute;i, tất cả đều đ&atilde; kh&ocirc;ng c&ograve;n trọng yếu, vi bối m&ocirc;n quy cũng được, sanh tử tồn vong cũng được, tựa hồ tất cả đều theo ba đ&oacute;a Đường Li&ecirc;n đang nở rộ trước mắt m&agrave; kết th&uacute;c, Phật Nộ Đường Li&ecirc;n, loại &aacute;m kh&iacute; b&aacute; đạo nhất thế gian n&agrave;y đản sinh trong ch&iacute;nh tay m&igrave;nh, c&ograve;n g&igrave; c&oacute; thể l&agrave;m Đường Tam hưng phấn hơn loại &aacute;m kh&iacute; c&oacute; tẩm d&acirc;m dược n&agrave;y?<br /><br /><em>\"Ta biết, trộm nhập nội m&ocirc;n, học trộm bổn m&ocirc;n tuyệt học tội kh&ocirc;ng thể tha thứ. M&ocirc;n quy bất dung, nhưng Đường Tam c&oacute; thể hướng l&ecirc;n trời m&agrave; thề, tuyệt kh&ocirc;ng đem một điểm n&agrave;o của bổn m&ocirc;n tuyệt học m&agrave; ta hoc trộm được tiết lộ ra b&ecirc;n ngo&agrave;i. Ta n&oacute;i điều n&agrave;y, cũng kh&ocirc;ng phải hy vọng được c&aacute;c trưởng l&atilde;o khoan dung, chỉ l&agrave; muốn n&oacute;i cho c&aacute;c trưởng l&atilde;o, Đường Tam chưa bao giờ qu&ecirc;n nguồn cội. Trước kia kh&ocirc;ng c&oacute;, sau n&agrave;y cũng kh&ocirc;ng c&oacute;. \"</em><br /><br />Đường Tam l&uacute;c n&agrave;y t&acirc;m t&igrave;nh rất tỉnh t&aacute;o, c&oacute; lẽ đ&acirc;y l&agrave; l&uacute;c hắn tỉnh t&aacute;o nhất trong đời. Nh&igrave;n đại viện cổ xưa của Đường M&ocirc;n tr&ecirc;n sườn n&uacute;i, cảm thụ kh&ocirc;ng kh&iacute; thuộc về Đường M&ocirc;n, Đường Tam mắt đ&atilde; ươn ướt. Từ khi hắn bắt đầu hiểu chuyện, c&oacute; thể n&oacute;i, hắn ch&iacute;nh l&agrave; v&igrave; Đường M&ocirc;n m&agrave; sinh, m&agrave; l&uacute;c n&agrave;y, cũng n&ecirc;n v&igrave; điều m&agrave; ch&iacute;nh m&igrave;nh theo đuổi suốt cuộc đời lại v&igrave; Đường M&ocirc;n m&agrave; đi.<br /><br />C&aacute;c trưởng l&atilde;o đều kh&ocirc;ng n&oacute;i g&igrave;, bọn họ l&uacute;c n&agrave;y c&ograve;n chưa thể tỉnh t&aacute;o sau khi chứng kiến Phật Nộ Đường Li&ecirc;n xuất hiện. Hai trăm năm, suốt hai trăm năm, Phật Nộ Đường Li&ecirc;n dĩ nhi&ecirc;n xuất hiện trong tay một ngoại m&ocirc;n đệ tử, điều c&oacute; &yacute; nghĩa g&igrave;? Ph&aacute;ch tuyệt thi&ecirc;n hạ, tuyệt thế &aacute;m kh&iacute; m&agrave; ngay cả người của ch&iacute;nh Đường M&ocirc;n cũng kh&ocirc;ng thể ngăn cản đại biểu tuyệt đối l&agrave; thời k&igrave; đỉnh phong của Đường M&ocirc;n đ&atilde; tới.<br /><br />Nh&igrave;n c&aacute;c trưởng l&atilde;o c&uacute;i đầu kh&ocirc;ng n&oacute;i, Đường Tam thản nhi&ecirc;n cười,&nbsp;<em>\"Đường Tam hết thảy mọi thứ đều l&agrave; Đường M&ocirc;n cấp, bất luận l&agrave; sinh mệnh hay năng lực, đều l&agrave; Đường M&ocirc;n ph&uacute; dư, bất luận l&uacute;c n&agrave;o, Đường Tam sống l&agrave; người của Đường M&ocirc;n, chết l&agrave; quỷ của Đường M&ocirc;n, ta biết, c&aacute;c trưởng l&atilde;o sẽ kh&ocirc;ng cho ph&eacute;p thi thể ta, một ngoại m&ocirc;n đệ tử vi bối m&ocirc;n quy ở lại Đường M&ocirc;n, đ&atilde; như vật, h&atilde;y để xương cốt ta h&ograve;a v&agrave;o tự nhi&ecirc;n Ba Thục đi. \"</em><br /><br />Thanh &acirc;m Đường Tam b&igrave;nh tĩnh, thậm ch&iacute; c&oacute; ch&uacute;t hưng phấn rốt cục l&agrave;m c&aacute;c trưởng l&atilde;o bừng tỉnh, l&uacute;c c&aacute;c trưởng l&atilde;o ngẩng đầu nh&igrave;n về ph&iacute;a hắn, chỉ thấy một tầng&nbsp;<em>\"nhũ bạch sắc\"</em>&nbsp;(m&agrave;u kem) kh&iacute; lưu trong nh&aacute;y mắt từ hắn tr&ecirc;n người tỏa ra.<br /><br /><em>\"Huyền thi&ecirc;n bảo lục, ngươi ngay cả bổn m&ocirc;n tối cao nội c&ocirc;ng, Huyền Thi&ecirc;n Bảo Lục cũng học rồi? \"</em>&nbsp;Đường đại ti&ecirc;n sinh thất thanh n&oacute;i.<br /><br />Oanh! Một tiếng nổ vang l&ecirc;n, l&uacute;c c&aacute;c vị trưởng l&atilde;o đồng thời lui về sau để ph&ograve;ng bất trắc, bọn họ cũng thấy Đường Tam x&iacute;ch l&otilde;a to&agrave;n th&acirc;n.<br /><br />Đường Tam cười, hắn tươi cười rất s&aacute;ng lạn,&nbsp;<em>\"x&iacute;ch l&otilde;a m&agrave; đến, x&iacute;ch l&otilde;a m&agrave; đi, Phật Nộ Đường Li&ecirc;n xem như lễ vật cuối c&ugrave;ng Đường Tam lưu lại cho bổn m&ocirc;n. B&acirc;y giờ, ngoại trừ con người của ta ra, ta kh&ocirc;ng mang đi bất cứ vật g&igrave; của Đường M&ocirc;n, b&iacute; tịch tất cả đều nằm trong khối gạch đầu ti&ecirc;n dưới cửa ph&ograve;ng ta. Đường Tam b&acirc;y giờ đ&atilde; đem tất cả đều trả lại cho Đường M&ocirc;n. \"</em><br /><br /><em>\"Ha ha ha ha ha ha ha......\"</em>&nbsp;Đường Tam ngửa mặt l&ecirc;n trời cuồng tiếu, bước nhanh về ph&iacute;a sau, l&uacute;c n&agrave;y, c&aacute;c vị Đường M&ocirc;n trưởng l&atilde;o đột nhi&ecirc;n ph&aacute;t hiện, nhưng cũng kh&ocirc;ng ai kịp ngăn cản hắn, th&acirc;n thể hắn trong bạch quang bao phủ, như tia chớp ph&oacute;ng về Quỷ Kiến Sầu ph&iacute;a trước, th&acirc;n h&igrave;nh cao lớn bay v&uacute;t l&ecirc;n, bay về ph&iacute;a m&acirc;y m&ugrave; giữa n&uacute;i.<br /><br /><em>\"Chờ một ch&uacute;t.\"</em>&nbsp;Đường đại ti&ecirc;n sinh rốt cục đ&atilde; phản ứng, nhưng l&agrave;, l&uacute;c n&agrave;y hắn n&oacute;i c&aacute;i g&igrave; đi nữa cũng đều đ&atilde; chậm.<br /><br />M&acirc;y m&ugrave; d&agrave;y đặc, mang theo trận trận kh&iacute; ẩm, mang đi &aacute;nh mặt trời, cũng mang đi Đường Tam, người đem cả đời cống hiến cho Đường M&ocirc;n c&ugrave;ng &aacute;m kh&iacute;.<br /><br />Thời gian tựa hồ&nbsp;<em>\"đ&igrave;nh trệ\"</em>&nbsp;(dừng lại), Đờng Đại ti&ecirc;n sinh hai tay run rẩy n&acirc;ng ba đ&oacute;a Đường Li&ecirc;n trước mặt l&ecirc;n, mắt hắn đ&atilde; ươn ướt,&nbsp;<em>\"Đường Tam a Đường Tam, ngươi sao phải khổ như vậy chứ? Ngươi thật sự g&acirc;y cho ch&uacute;ng ta nhiều kinh ngạc, nhiều lắm......\"</em><br /><br /><em>\"Đại ca.\"</em>&nbsp;Nhị trưởng l&atilde;o tiến l&ecirc;n một bước,&nbsp;<em>\"Cần g&igrave; phải thương x&oacute;t phản đồ n&agrave;y? \"</em><br /><br />Đường Đại ti&ecirc;n sinh &aacute;nh mắt trong nh&aacute;y mắt biến l&atilde;nh, to&agrave;n th&acirc;n h&agrave;n kh&iacute; đại thịnh, trừng mắt nh&igrave;n Nhị trưởng l&atilde;o,&nbsp;<em>\"Ngươi n&oacute;i ai l&agrave; phản đồ? Ngươi đ&atilde; gặp qua một phản đồ sau khi đoạt được bổn m&ocirc;n tối cao b&iacute; tịch c&ograve;n kh&ocirc;ng trốn? Ngươi đ&atilde; gặp qua một phản đồ d&ugrave;ng c&aacute;i chết để chứng minh? Ngươi đ&atilde; gặp qua một người mang tuyệt thế &aacute;m kh&iacute; đủ để hủy diệt tất cả Đường M&ocirc;n cao thủ nhưng lại lấy đ&oacute; l&agrave;m lễ vật cuối c&ugrave;ng cho Đường M&ocirc;n? Đường Tam kh&ocirc;ng phải phản đồ, hắn l&agrave; thi&ecirc;n t&agrave;i xuất sắc nhất bổn m&ocirc;n hai trăm năm qua.\"</em><br />Nhị trưởng l&atilde;o ngẩn ngơ,&nbsp;<em>\"Nhưng l&agrave;, hắn học trộm bổn m&ocirc;n......\"</em><br /><br />Đường đại ti&ecirc;n sinh chợt cắt đứt,&nbsp;<em>\"Nếu ngươi cũng c&oacute; thể l&agrave;m ra Phật Nộ Đường Li&ecirc;n, ngươi trộm c&aacute;i g&igrave; ta cũng c&oacute; thể bất kể. Ngươi sai rồi, ta cũng sai rồi, một khắc trước, ch&uacute;ng ta dĩ nhi&ecirc;n trơ mắt nh&igrave;n cơ hội l&agrave;m cho Đường M&ocirc;n t&aacute;i huy ho&agrave;ng trước mắt tr&ocirc;i đi. \"</em><br /><br />C&aacute;c vị trưởng l&atilde;o x&ocirc;ng tới, bọn họ thần sắc đều rất phức tạp, c&oacute; nghi hoặc, c&oacute; thương cảm, c&oacute; thở d&agrave;i, nhiều nhất vẫn l&agrave; tiếc nuối.<br /><br /><em>\"C&aacute;c ngươi kh&ocirc;ng cần n&oacute;i g&igrave; cả, truyền lệnh ta, lệnh bổn m&ocirc;n đệ tử to&agrave;n thể xuất động, dưới Quỷ Kiến Sầu t&igrave;m Đường Tam, sống phải gặp người, chết phải thấy x&aacute;c. Đồng thời, từ giờ khắc n&agrave;y, Đường Tam tấn thăng l&agrave;m bổn m&ocirc;n nội m&ocirc;n đệ tử, nếu hắn c&ograve;n sống, l&agrave; người duy nhất kế thừa ta ng&ocirc;i vị chưởng m&ocirc;n. \"</em><br /><br /><em>\"R&otilde;, chưởng m&ocirc;n. \"</em>&nbsp;Ch&uacute;ng trưởng l&atilde;o đồng thời khom người tu&acirc;n mệnh.<br /><br />Nếu Đường Tam l&uacute;c n&agrave;y c&ograve;n ở tr&ecirc;n v&aacute;ch n&uacute;i, c&ograve;n c&oacute; thể nghe được Đường Đại ti&ecirc;n sinh n&oacute;i, cho d&ugrave; chết, hắn cũng nhất định rất vui mừng, cố gắng của hắn cuối c&ugrave;ng kh&ocirc;ng uổng ph&iacute;. Nhưng l&agrave;, tất cả đều đ&atilde; muộn một ch&uacute;t.<br /><br />Quỷ Kiến Sầu, một tảng đ&aacute; rơi cũng phải mất hơn mười ch&iacute;n gi&acirc;y, tựa hồ si&ecirc;u việt mười t&aacute;m tầng địa ngục tồn tại, như thế n&agrave;o c&oacute; thể cho ph&eacute;p một người được m&acirc;y m&ugrave; ph&oacute;ng th&iacute;ch sống m&agrave; về? Đường Tam đi, hắn vĩnh viễn rời khỏi thế giới n&agrave;y, nhưng vận mệnh hắn một lần kh&aacute;c lại vừa mới bắt đầu.<br /><br />Đấu La Đại Lục, Thi&ecirc;n Đấu đế quốc T&acirc;yNam, Ph&aacute;p Tư Nặc h&agrave;nh tỉnh.<br /><br />Th&aacute;nh Hồn th&ocirc;n, nếu l&agrave; chỉ nghe kỳ danh, vậy tuyệt đối l&agrave; một c&aacute;i t&ecirc;n l&agrave;m kẻ kh&aacute;c kinh ngạc, nhưng tr&ecirc;n thực tế, đ&acirc;y bất qu&aacute; chỉ l&agrave; Ph&aacute;p Tư Nặc h&agrave;nh tỉnh Nặc Đinh th&agrave;nh Nam một c&aacute;i th&ocirc;n nhỏ chỉ c&oacute; hơn ba trăm hộ m&agrave; th&ocirc;i. Sở dĩ t&ecirc;n l&agrave; Th&aacute;nh Hồn, l&agrave; bởi v&igrave; trong truyền thuyết, trăm năm trước nơi n&agrave;y từng sinh ra một vị hồn sư đạt đến hồn th&aacute;nh cấp bậc m&agrave; theo đ&oacute; th&agrave;nh danh. Điều n&agrave;y cũng l&agrave; Th&aacute;nh Hồn th&ocirc;n vĩnh viễn ki&ecirc;u h&atilde;nh.<br /><br />B&ecirc;n ngo&agrave;i Th&aacute;nh Hồn th&ocirc;n, l&agrave; một khi trồng trọt rộng r&atilde;i, nơi n&agrave;y xuất sản lương thực c&ugrave;ng thực phẩm, đều cung cấp cho Nặc Đinh th&agrave;nh, Nặc Đinh th&agrave;nh trong Ph&aacute;p Tư Nặc h&agrave;nh tỉnh mặc d&ugrave; kh&ocirc;ng coi l&agrave; đại th&agrave;nh thị, nhưng nơi n&agrave;y d&ugrave; sao khoảng c&aacute;ch c&ugrave;ng bi&ecirc;n giới với một đế quốc kh&aacute;c cũng rất gần, cũng tự nhi&ecirc;n l&agrave; một trong những nơi đầu ti&ecirc;n m&agrave; thương nh&acirc;n hai đại đế quốc giao dịch, Nặc Đinh th&agrave;nh bởi vậy m&agrave; phồn vinh, theo đ&oacute; l&agrave;m cho cuộc sống của b&igrave;nh d&acirc;n trong th&ocirc;n trang xung quanh th&agrave;nh thị so với địa phương kh&aacute;c tốt hơn nhiều.<br /><br />Trời mới tờ mờ s&aacute;ng, xa xa phương đ&ocirc;ng mọc l&ecirc;n một mảng bạch sắc nh&agrave;n nhạt, tr&ecirc;n một t&ograve;a tiểu sơn cao chỉ hơn trăm thước b&ecirc;n ngo&agrave;i Th&aacute;nh Hồn th&ocirc;n, đ&atilde; c&oacute; th&ecirc;m một đạo th&acirc;n ảnh nhỏ gầy.<br /><br />Đ&oacute; l&agrave; một h&agrave;i tử chỉ năm, s&aacute;u tuổi, hiển nhi&ecirc;n, hắn thường xuy&ecirc;n thừa nhận sự ấm &aacute;p của mặt trời, da tay&nbsp;<em>\"tiểu mạch sắc\"</em>(m&agrave;u hơi n&acirc;u n&acirc;u) khỏe mạnh, hắc sắc đoản ph&aacute;t nh&igrave;n qua rất lanh lợi, một th&acirc;n quần &aacute;o mặc d&ugrave; đơn giản nhưng sạch sẽ.<br /><br />Đối với một tiểu h&agrave;i tử như hắn m&agrave; n&oacute;i, tr&egrave;o l&ecirc;n ngọn n&uacute;i cao trăm thước n&agrave;y cũng kh&ocirc;ng phải l&agrave; chuyện dễ d&agrave;ng g&igrave;, nhưng kỳ qu&aacute;i ch&iacute;nh l&agrave;, hắn đi tới đỉnh n&uacute;i nhưng mặt lại kh&ocirc;ng đỏ, kh&ocirc;ng thở gấp, bộ d&aacute;ng rất tự đắc.<br /><br />Nam h&agrave;i ngồi xuống tr&ecirc;n đỉnh n&uacute;i, hai mắt hắn gắt gao nh&igrave;n về phương Đ&ocirc;ng đang dần s&aacute;ng l&ecirc;n một m&agrave;u trắng, mũi chậm r&atilde;i h&iacute;t v&agrave;o, miệng từ từ thở ra, h&iacute;t v&agrave;o li&ecirc;n tục, thở ra nhẹ nh&agrave;ng, đ&uacute;ng l&agrave; h&igrave;nh th&agrave;nh v&ograve;ng tuần ho&agrave;n tuyệt vời.<br /><br />Ngay l&uacute;c n&agrave;y, mắt hắn đột nhi&ecirc;n mở to, xa xa nơi ch&acirc;n trời, trong mảng bạch sắc đang s&aacute;ng dần l&ecirc;n, phảng phất hiện l&ecirc;n một tia tử kh&iacute; nh&agrave;n nhạt, nếu kh&ocirc;ng phải c&oacute; mục lực kinh người c&ugrave;ng kh&ocirc;ng đủ chuy&ecirc;n ch&uacute;, l&agrave; tuyệt đối kh&ocirc;ng c&aacute;ch n&agrave;o ph&aacute;t hiện n&oacute; tồn tại.<br /><br />Tử kh&iacute; xuất hiện, l&agrave;m nam h&agrave;i tinh thần ho&agrave;n to&agrave;n tập trung lại, hắn thậm ch&iacute; kh&ocirc;ng hề thở ra, chỉ l&agrave; từ từ h&iacute;t v&agrave;o rất nhẹ nh&agrave;ng, đồng thời hai mắt gắt gao nh&igrave;n về ph&iacute;a m&agrave;n tử sắc l&uacute;c ẩn l&uacute;c hiện.<br /><br />Thời gian tử kh&iacute; xuất hiện cũng kh&ocirc;ng d&agrave;i, khi phương Đ&ocirc;ng được &aacute;nh mặt trời từ từ d&acirc;ng l&ecirc;n bao tr&ugrave;m th&igrave; tử kh&iacute; đ&atilde; ho&agrave;n to&agrave;n biến mất.<br /><br />Nam h&agrave;i l&uacute;c n&agrave;y mới chậm r&atilde;i nhắm hai mắt lại, đồng thời thở ra một hơi thật d&agrave;i trọc kh&iacute; trong cơ thể. Một đạo bạch sắc kh&iacute; lưu giống như từ miệng hắn phun ra, sau đ&oacute; từ từ tản đi.<br /><br />Tĩnh tọa một hồi l&acirc;u, nam h&agrave;i mới lại mở mắt, kh&ocirc;ng biết c&oacute; phải l&agrave; tử kh&iacute; tri&ecirc;m nhiễm kh&ocirc;ng, trong đ&ocirc;i mắt hắn l&oacute;e l&ecirc;n một tầng nh&agrave;n nhạt tử &yacute;, mặc d&ugrave; tử sắc n&agrave;y tồn tại trong thời gian kh&ocirc;ng d&agrave;i rồi lặng y&ecirc;n thu liễm, nhưng ch&iacute;nh l&uacute;c n&oacute; tồn tại cũng rất r&otilde; r&agrave;ng.<br /><br />Ch&aacute;n nản thở d&agrave;i, nam h&agrave;i l&agrave;m ra một vẻ mặt bất đắc dĩ tuyệt kh&ocirc;ng n&ecirc;n xuất hiện ở tuổi hắn, lắc đầu, lầm bầm n&oacute;i:&nbsp;<em>\"Vẫn kh&ocirc;ng được, Huyền Thi&ecirc;n C&ocirc;ng ta như trước kh&ocirc;ng c&aacute;ch n&agrave;o đột ph&aacute; đệ nhất trọng b&igrave;nh cảnh. Đ&atilde; suốt ba th&aacute;ng, rốt cuộc l&agrave; tại sao? Cho d&ugrave; l&agrave; Tử Cực Ma Đồng phải dựa v&agrave;o \"</em>tử kh&iacute; đ&ocirc;ng lai<em>\" (kh&iacute; t&iacute;m đến từ ph&iacute;a Đ&ocirc;ng) chỉ c&oacute; thể tu luyện v&agrave;o s&aacute;ng sớm vẫn đang tiến bộ. Huyền Thi&ecirc;n C&ocirc;ng kh&ocirc;ng thể đột ph&aacute; b&igrave;nh cảnh, Huyền Ngọc Thủ cũng v&ocirc; ph&aacute;p tăng l&ecirc;n. L&uacute;c đầu ta tu luyện, tại đệ nhất trọng đến đệ nhị trọng, l&uacute;c đ&oacute; tựa hồ cũng kh&ocirc;ng gặp phải t&igrave;nh huống như vậy. Huyền Thi&ecirc;n C&ocirc;ng tổng cộng cửu trọng, sao m&agrave; đệ nhất trọng n&agrave;y lại phiền to&aacute;i như vậy? Chẳng lẻ, l&agrave; bởi v&igrave; thế giới n&agrave;y c&ugrave;ng thế giới kia của ta vốn bất đồng sao? \"</em><br /><br />Đi tới thế giới n&agrave;y đ&atilde; hơn năm năm, h&agrave;i tử trước mắt n&agrave;y, đ&uacute;ng l&agrave; Đường Tam l&uacute;c đầu ở Đường M&ocirc;n&nbsp;<em>\"khi&ecirc;u nhai minh ch&iacute;\"</em>&nbsp;(nhảy vực chứng minh). Khi hắn từ trong h&ocirc;n m&ecirc; tỉnh t&aacute;o lại, ph&aacute;t hiện ngoại trừ cảm gi&aacute;c ấm &aacute;p c&aacute;i g&igrave; cũng kh&ocirc;ng l&agrave;m được. Nhưng c&aacute;i chết trong dự liệu cũng kh&ocirc;ng c&oacute; tới, rất nhanh, hắn th&ocirc;ng qua một qu&aacute; tr&igrave;nh dồn n&eacute;n đi tới thế giới n&agrave;y.<br /><br />Qua một thời gian rất l&acirc;u, Đường Tam mới hiểu được chuyện g&igrave; xảy ra. Ch&iacute;nh m&igrave;nh kh&ocirc;ng chết, nhưng đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; Đường Tam trước đ&acirc;y.<br /><br />L&uacute;c xuất sanh, Đường Tam d&ugrave;ng đến gần một năm thời gian, mới học được thế giới n&agrave;y ngữ ng&ocirc;n. Hắn c&ograve;n nhớ r&otilde;, l&uacute;c ch&iacute;nh m&igrave;nh xuất sanh, mặc d&ugrave; vẫn kh&ocirc;ng c&aacute;ch n&agrave;o mở mắt quan kh&aacute;n, nhưng nghe được một giọng nam nh&acirc;n h&ugrave;ng hậu đang&nbsp;<em>\"t&ecirc; t&acirc;m liệt phế\"</em>&nbsp;(c&otilde;i l&ograve;ng tan n&aacute;t) m&agrave; k&ecirc;u kh&oacute;c. Khi hắn học xong thế giới n&agrave;y ngữ ng&ocirc;n, bằng v&agrave;o tr&iacute; nhớ hơn người nhớ lại th&igrave;, cũng chỉ c&oacute; thể nhớ, nam nh&acirc;n kia tựa hồ k&ecirc;u l&ecirc;n:&nbsp;<em>\"Tam muội, đừng bỏ ta.\"</em>&nbsp;M&agrave; nam nh&acirc;n kia, ch&iacute;nh l&agrave; cha hắn Đường Hạo. Mẫu th&acirc;n hắn ở thế giới n&agrave;y, khi đ&oacute; cũng đ&atilde; chết trong l&uacute;c kh&oacute; sanh.<br /><br />Kh&ocirc;ng biết l&agrave; thi&ecirc;n &yacute;, hay l&agrave; nh&acirc;n duy&ecirc;n tr&ugrave;ng hợp, v&igrave; kỷ niệm th&ecirc; tử chết đi, Đường Hạo đặt cho hắn một c&aacute;i t&ecirc;n thần kỳ sao vẫn l&agrave; Đường Tam.<br /><br />Những đứa trẻ đồng trang đứa trong th&ocirc;n thường xuy&ecirc;n hội lấy điều n&agrave;y giễu cợt hắn, nhưng Đường Tam trong l&ograve;ng lại thập phần h&agrave;i l&ograve;ng. D&ugrave; sao c&aacute;i t&ecirc;n n&agrave;y tại thế giới b&ecirc;n kia hắn cũng đ&atilde; sử dụng gần ba mươi năm. Chỉ ri&ecirc;ng chuyện quen thuộc cũng đ&atilde; l&agrave;m hắn sớm th&iacute;ch hai chữ n&agrave;y.<br /><br />Đi tới thế giới n&agrave;y, trải qua bắt đầu l&agrave; giật m&igrave;nh, sợ h&atilde;i, đến sau lại l&agrave; hưng phấn c&ugrave;ng với b&acirc;y giờ l&agrave; b&igrave;nh tĩnh, Đường Tam đ&atilde; ho&agrave;n to&agrave;n tiếp nhận sự thật, hắn xem ra, đ&acirc;y l&agrave; &ocirc;ng trời lại cho hắn một cơ hội nữa. Kiếp trước t&acirc;m nguyện lớn nhất, c&oacute; lẽ c&oacute; thể trong một đời n&agrave;y thực hiện rồi.<br /><br />X&iacute;ch l&otilde;a đi tới thế giới n&agrave;y, nhưng Đường Tam đ&atilde; c&oacute; lớn nhất t&agrave;i ph&uacute;, đ&oacute; ch&iacute;nh l&agrave; tr&iacute; nhớ. Th&acirc;n l&agrave; Đường M&ocirc;n ngoại m&ocirc;n xuất sắc nhất thi&ecirc;n t&agrave;i, Đường M&ocirc;n c&aacute;c loại&nbsp;<em>\"cơ quan loại &aacute;m kh&iacute;\"</em>(&aacute;m kh&iacute; d&ugrave;ng cơ quan để ph&aacute;t động) phương ph&aacute;p chế tạo to&agrave;n bộ khắc trong &oacute;c hắn. M&agrave; l&uacute;c đầu hắn trộm đi Đường M&ocirc;n nội m&ocirc;n b&iacute; tịch, kh&aacute;t vọng trong nhiều năm đạt được, trong qu&aacute; tr&igrave;nh học tập, nội m&ocirc;n tối cao Huyền Thi&ecirc;n Bảo Lục cũng đồng dạng được hắn ghi v&agrave;o trong t&acirc;m. Đường Tam hy vọng, c&oacute; thể ở thế giới n&agrave;y lại hiện ra Đường M&ocirc;n huy ho&agrave;ng.<br /><br /><em>\"Cần phải trở về.\"</em>&nbsp;Đường Tam nh&igrave;n sắc trời, th&acirc;n thể gầy g&ograve; ph&oacute;ng l&ecirc;n, hướng dưới ch&acirc;n n&uacute;i chạy đi. Nếu l&uacute;c n&agrave;y c&oacute; người thấy hắn, nhất định sẽ kinh ngạc đ&iacute;ch mở to hai mắt nh&igrave;n, hắn mỗi bước bước ra, cũng c&oacute; thể gần một trượng, những hố bất kh&ocirc;ng bằng phẳng tr&ecirc;n mặt đất đối với hắn m&agrave; n&oacute;i căn bản kh&ocirc;ng c&oacute; ảnh hưởng g&igrave;, dễ d&agrave;ng n&eacute; tr&aacute;nh, trong l&uacute;c đ&oacute; cấp tốc bước đi, so với người trưởng th&agrave;nh c&ograve;n muốn nhanh hơn nhiều.<br /><br />Đường M&ocirc;n tinh t&uacute;y l&agrave; c&aacute;i g&igrave;? &Aacute;m kh&iacute;, độc dược c&ugrave;ng khinh c&ocirc;ng. Đường M&ocirc;n nội m&ocirc;n c&ugrave;ng ngoại m&ocirc;n kh&aacute;c nhau lớn nhất, ch&iacute;nh l&agrave; phương ph&aacute;p sử dụng &aacute;m kh&iacute;. Ngoại m&ocirc;n lấy cơ quan loại l&agrave; ch&iacute;nh, m&agrave; nội m&ocirc;n lại l&agrave; thủ ph&aacute;p ch&acirc;n ch&iacute;nh. Độc dược b&igrave;nh thường l&agrave; ngoại m&ocirc;n mới d&ugrave;ng, nội m&ocirc;n đ&iacute;ch truyền đệ tử &aacute;m kh&iacute; rất &iacute;t dụng độc, bởi v&igrave; bọn họ căn bản kh&ocirc;ng cần.</p>', 1, '2018-07-19 08:09:06', '2018-07-19 21:26:33');

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
(147, 12, '3', '2018-07-19 08:10:01', '2018-07-19 08:10:01'),
(148, 12, '4', '2018-07-19 08:10:01', '2018-07-19 08:10:01'),
(149, 12, '5', '2018-07-19 08:10:01', '2018-07-19 08:10:01');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `chapter_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `story_types`
--
ALTER TABLE `story_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `story_type_details`
--
ALTER TABLE `story_type_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
