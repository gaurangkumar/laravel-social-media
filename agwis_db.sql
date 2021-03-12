-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 08:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agwis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rid` bigint(20) UNSIGNED DEFAULT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0,
  `msg` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `group_id`, `rid`, `view`, `msg`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 2, 0, 'hello', NULL, '2021-02-16 09:47:45', '2021-02-16 09:47:45'),
(2, 1, NULL, 3, 0, 'good morning', NULL, '2021-02-16 09:48:45', '2021-02-16 09:47:45'),
(3, 1, NULL, 4, 0, 'good night', NULL, '2021-02-16 09:49:45', '2021-02-16 09:47:45'),
(4, 1, NULL, 5, 0, 'how are you', NULL, '2021-02-16 09:50:45', '2021-02-16 09:47:45'),
(5, 1, NULL, 6, 0, 'Welcome', NULL, '2021-02-16 09:51:45', '2021-02-16 09:47:45'),
(6, 1, NULL, 7, 0, 'hey', NULL, '2021-02-16 09:52:45', '2021-02-16 09:47:45'),
(7, 1, NULL, 8, 0, 'good afternoon', NULL, '2021-02-16 09:53:45', '2021-02-16 09:47:46'),
(8, 2, NULL, 1, 0, 'good afternoon', NULL, '2021-02-16 09:54:45', '2021-02-16 09:47:46'),
(9, 2, NULL, 3, 0, 'what up?', NULL, '2021-02-16 09:55:45', '2021-02-16 09:47:46'),
(10, 2, NULL, 4, 0, 'how are you', NULL, '2021-02-16 09:56:45', '2021-02-16 09:47:46'),
(11, 2, NULL, 5, 0, 'good afternoon', NULL, '2021-02-16 09:57:45', '2021-02-16 09:47:46'),
(12, 2, NULL, 6, 0, 'what up?', NULL, '2021-02-16 09:58:45', '2021-02-16 09:47:46'),
(13, 2, NULL, 7, 0, 'good night', NULL, '2021-02-16 09:59:45', '2021-02-16 09:47:46'),
(14, 2, NULL, 8, 0, 'how\'s it going', NULL, '2021-02-16 10:00:45', '2021-02-16 09:47:46'),
(15, 3, NULL, 2, 0, 'what up?', NULL, '2021-02-16 10:01:45', '2021-02-16 09:47:46'),
(16, 3, NULL, 2, 0, 'good afternoon', NULL, '2021-02-16 10:02:45', '2021-02-16 09:47:47'),
(17, 3, NULL, 4, 0, 'good afternoon', NULL, '2021-02-16 10:03:45', '2021-02-16 09:47:47'),
(18, 3, NULL, 5, 0, 'how are you', NULL, '2021-02-16 10:04:45', '2021-02-16 09:47:47'),
(19, 3, NULL, 6, 0, 'good night', NULL, '2021-02-16 10:05:45', '2021-02-16 09:47:47'),
(20, 3, NULL, 7, 0, 'how\'s it going', NULL, '2021-02-16 10:06:45', '2021-02-16 09:47:47'),
(21, 3, NULL, 8, 0, 'hey', NULL, '2021-02-16 10:07:45', '2021-02-16 09:47:47'),
(22, 4, NULL, 1, 0, 'hey', NULL, '2021-02-16 10:08:45', '2021-02-16 09:47:47'),
(23, 4, NULL, 2, 0, 'good morning', NULL, '2021-02-16 10:09:45', '2021-02-16 09:47:47'),
(24, 4, NULL, 3, 0, 'good morning', NULL, '2021-02-16 10:10:45', '2021-02-16 09:47:47'),
(25, 4, NULL, 5, 0, 'what up?', NULL, '2021-02-16 10:11:45', '2021-02-16 09:47:47'),
(26, 4, NULL, 6, 0, 'how are you', NULL, '2021-02-16 10:12:45', '2021-02-16 09:47:47'),
(27, 4, NULL, 7, 0, 'what up?', NULL, '2021-02-16 10:13:45', '2021-02-16 09:47:47'),
(28, 4, NULL, 8, 0, 'good morning', NULL, '2021-02-16 10:14:45', '2021-02-16 09:47:47'),
(29, 5, NULL, 1, 0, 'what up?', NULL, '2021-02-16 10:15:45', '2021-02-16 09:47:47'),
(30, 5, NULL, 2, 0, 'how\'s it going', NULL, '2021-02-16 10:16:45', '2021-02-16 09:47:47'),
(31, 5, NULL, 3, 0, 'hello', NULL, '2021-02-16 10:17:45', '2021-02-16 09:47:47'),
(32, 5, NULL, 4, 0, 'good morning', NULL, '2021-02-16 10:18:45', '2021-02-16 09:47:47'),
(33, 5, NULL, 6, 0, 'Welcome', NULL, '2021-02-16 10:19:45', '2021-02-16 09:47:47'),
(34, 5, NULL, 7, 0, 'hello', NULL, '2021-02-16 10:20:45', '2021-02-16 09:47:47'),
(35, 5, NULL, 8, 0, 'how are you', NULL, '2021-02-16 10:21:45', '2021-02-16 09:47:47'),
(36, 6, NULL, 1, 0, 'what up?', NULL, '2021-02-16 10:22:45', '2021-02-16 09:47:47'),
(37, 6, NULL, 2, 0, 'good morning', NULL, '2021-02-16 10:23:45', '2021-02-16 09:47:48'),
(38, 6, NULL, 3, 0, 'Welcome', NULL, '2021-02-16 10:24:45', '2021-02-16 09:47:48'),
(39, 6, NULL, 4, 0, 'good morning', NULL, '2021-02-16 10:25:45', '2021-02-16 09:47:48'),
(40, 6, NULL, 5, 0, 'good morning', NULL, '2021-02-16 10:26:45', '2021-02-16 09:47:48'),
(41, 6, NULL, 7, 0, 'what up?', NULL, '2021-02-16 10:27:45', '2021-02-16 09:47:48'),
(42, 6, NULL, 8, 0, 'how are you', NULL, '2021-02-16 10:28:45', '2021-02-16 09:47:48'),
(43, 7, NULL, 1, 0, 'good night', NULL, '2021-02-16 10:29:45', '2021-02-16 09:47:48'),
(44, 7, NULL, 2, 0, 'good night', NULL, '2021-02-16 10:30:45', '2021-02-16 09:47:48'),
(45, 7, NULL, 3, 0, 'hello', NULL, '2021-02-16 10:31:45', '2021-02-16 09:47:48'),
(46, 7, NULL, 4, 0, 'how\'s it going', NULL, '2021-02-16 10:32:45', '2021-02-16 09:47:48'),
(47, 7, NULL, 5, 0, 'what up?', NULL, '2021-02-16 10:33:45', '2021-02-16 09:47:48'),
(48, 7, NULL, 6, 0, 'Welcome', NULL, '2021-02-16 10:34:45', '2021-02-16 09:47:48'),
(49, 7, NULL, 8, 0, 'good night', NULL, '2021-02-16 10:35:45', '2021-02-16 09:47:48'),
(50, 8, NULL, 1, 0, 'good night', NULL, '2021-02-16 10:36:45', '2021-02-16 09:47:48'),
(51, 8, NULL, 2, 0, 'good morning', NULL, '2021-02-16 10:37:45', '2021-02-16 09:47:48'),
(52, 8, NULL, 3, 0, 'hey', NULL, '2021-02-16 10:38:45', '2021-02-16 09:47:48'),
(53, 8, NULL, 4, 0, 'what up?', NULL, '2021-02-16 10:39:45', '2021-02-16 09:47:48'),
(54, 8, NULL, 5, 0, 'Welcome', NULL, '2021-02-16 10:40:45', '2021-02-16 09:47:48'),
(55, 8, NULL, 6, 0, 'good afternoon', NULL, '2021-02-16 10:41:45', '2021-02-16 09:47:48'),
(56, 8, NULL, 7, 0, 'what up?', NULL, '2021-02-16 10:42:45', '2021-02-16 09:47:48'),
(57, 8, NULL, 3, 0, 'what up?', NULL, '2021-02-16 10:43:45', '2021-02-16 09:47:48'),
(58, 7, NULL, 5, 0, 'hello', NULL, '2021-02-16 10:44:45', '2021-02-16 09:47:48'),
(59, 5, NULL, 6, 0, 'good morning', NULL, '2021-02-16 10:45:45', '2021-02-16 09:47:48'),
(60, 8, NULL, 4, 0, 'hey', NULL, '2021-02-16 10:46:45', '2021-02-16 09:47:48'),
(61, 8, NULL, 3, 0, 'how\'s it going', NULL, '2021-02-16 10:47:45', '2021-02-16 09:47:48'),
(62, 2, NULL, 7, 0, 'good night', NULL, '2021-02-16 10:48:45', '2021-02-16 09:47:49'),
(63, 4, NULL, 1, 0, 'good afternoon', NULL, '2021-02-16 10:49:45', '2021-02-16 09:47:49'),
(64, 8, NULL, 3, 0, 'Welcome', NULL, '2021-02-16 10:50:45', '2021-02-16 09:47:49'),
(65, 7, NULL, 8, 0, 'how are you', NULL, '2021-02-16 10:51:45', '2021-02-16 09:47:49'),
(66, 4, NULL, 4, 0, 'gud nyt', NULL, '2021-02-19 12:40:54', '2021-02-19 12:40:54'),
(67, 4, NULL, 1, 0, 'kem reply nai apto', NULL, '2021-02-19 13:05:06', '2021-02-19 13:05:06'),
(68, 1, NULL, 4, 0, 'time j nai mara jode', NULL, '2021-02-21 13:38:15', '2021-02-21 13:38:15'),
(69, 1, NULL, 4, 0, 'su matlab time nai', NULL, '2021-02-21 13:38:41', '2021-02-21 13:38:41'),
(70, 1, NULL, 8, 0, 'hello', NULL, '2021-02-21 13:40:07', '2021-02-21 13:40:07'),
(71, 1, NULL, 7, 0, 'hii', NULL, '2021-02-21 13:40:17', '2021-02-21 13:40:17'),
(72, 1, NULL, 1, 0, 'hello', NULL, '2021-02-21 13:40:38', '2021-02-21 13:40:38'),
(73, 1, NULL, 4, 0, '...', NULL, '2021-02-21 13:41:54', '2021-02-21 13:41:54'),
(74, 4, NULL, 1, 0, 'hello', NULL, '2021-02-21 13:42:14', '2021-02-21 13:42:14'),
(75, 4, NULL, 1, 0, 'hi', NULL, '2021-03-08 01:51:52', '2021-03-08 01:51:52'),
(76, 1, NULL, 4, 0, 'hello', NULL, '2021-03-08 01:54:31', '2021-03-08 01:54:31'),
(77, 4, NULL, 1, 0, 'how are  you', NULL, '2021-03-08 01:55:45', '2021-03-08 01:55:45'),
(78, 1, NULL, 4, 0, 'i am fine', NULL, '2021-03-08 01:56:12', '2021-03-08 01:56:12'),
(79, 4, NULL, 1, 0, 'hello', NULL, '2021-03-08 01:56:43', '2021-03-08 01:56:43'),
(80, 1, NULL, 4, 0, 'hhhh', NULL, '2021-03-08 01:57:10', '2021-03-08 01:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `blocked` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `cid`, `blocked`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 0, NULL, NULL),
(2, 2, 6, NULL, NULL, NULL),
(3, 4, 2, NULL, NULL, NULL),
(4, 4, 3, NULL, NULL, NULL),
(5, 4, 6, NULL, NULL, NULL),
(6, 4, 7, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_03_172503_create_users_table', 1),
(2, '2021_02_03_172650_create_password_resets_table', 1),
(3, '2021_02_03_172939_create_failed_jobs_table', 1),
(4, '2021_02_03_172941_create_admins_table', 1),
(5, '2021_02_03_172942_create_contacts_table', 1),
(6, '2021_02_03_172943_create_groups_table', 1),
(7, '2021_02_03_172944_create_group_members_table', 1),
(8, '2021_02_03_172945_create_chats_table', 1),
(9, '2021_02_03_172946_create_pages_table', 1),
(10, '2021_02_03_172947_create_page_posts_table', 1),
(11, '2021_02_03_172948_create_page_followers_table', 1),
(12, '2021_02_03_172949_create_page_comments_table', 1),
(13, '2021_02_03_172950_create_page_likes_table', 1),
(14, '2021_02_03_172951_create_calls_table', 1),
(15, '2021_02_03_172952_create_statuses_table', 1),
(16, '2021_02_07_145832_create_businesses_table', 1),
(17, '2021_02_07_150547_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `profile`, `banner`, `uname`, `user_id`, `description`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Abc', '1.jpg', 'asasas', 'abc', 4, 'asasasa', NULL, NULL, NULL),
(2, 'Pqr', '2.jpg', 'asasas', 'pqr', 6, 'asasasa', NULL, NULL, NULL),
(3, 'Xyz', '3.jpg', '', 'xyz', 4, NULL, NULL, NULL, NULL),
(4, 'demo', '3.jpg', '', 'demo', 4, NULL, NULL, NULL, NULL),
(5, 'njdhfrgs', 'page/eJOrro5oBqBj4reusTQjvc8QMiZhUCpvdJWEVSJR.jpg', '', 'gfbdnjf', 4, 'rtdyertqwedade', NULL, '2021-03-12 02:15:29', '2021-03-12 02:15:29'),
(6, 'abc', 'page/dxsHqsjrCUpHKXULboPIPE0kSubL6vHe2FkCaiAY.jpg', '', 'abce', 4, 'abc', NULL, '2021-03-12 02:17:08', '2021-03-12 02:17:08'),
(7, 'abc', 'page/2AnQdirbWRp9UVnqCVTw9wSuECFjEPK5SHZzzipW.jpg', '', 'abcd', 4, 'abc', NULL, '2021-03-12 02:18:30', '2021-03-12 02:18:30'),
(8, 'vivek', 'page/hsO5ARNKUdXcMofElbOEr0wq5Kn32XIZL2PTmlHY.jpg', '', 'vivek', 4, 'vivek', NULL, '2021-03-12 02:29:03', '2021-03-12 02:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `page_comments`
--

CREATE TABLE `page_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_followers`
--

CREATE TABLE `page_followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `follow` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_followers`
--

INSERT INTO `page_followers` (`id`, `user_id`, `page_id`, `follow`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, NULL, NULL),
(2, 7, 1, 1, NULL, NULL),
(3, 4, 2, 1, NULL, NULL),
(4, 4, 8, 1, '2021-03-12 02:29:03', '2021-03-12 02:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `page_likes`
--

CREATE TABLE `page_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_post_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_posts`
--

CREATE TABLE `page_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `view_count` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gaurangkumarp@gmail.com', '$2y$10$S8GOxbcTDqRoaKQLBcsvXuyGuzd8t.21U9WOwl82q0g.iP2L3T.kC', '2021-02-28 07:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT 0,
  `dob` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `mobile`, `blocked`, `dob`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vivek Patel', 'template\\assets\\img\\avatar-1.jpg', NULL, 0, NULL, 'vivek@abc.com', NULL, '$2y$10$qDYX4HbMlysGGfoFPBh9s.jRRv0d3ZdDWFiF9M.3QBeHBjaNGMuh6', 'D0IfW2XReVWxLujA1q8lihO6YOOrlu1BYJ7gYlp3AqtiJNHx1AScg15BEZTD', '2021-02-16 06:54:22', '2021-02-16 06:54:22', NULL),
(2, 'Gaurang Parmar', 'template\\assets\\img\\avatar-2.jpg', NULL, 0, NULL, 'gaurang@abc.com', NULL, '$2y$10$n.1F.0vXrAHyYvovzxbHQO0CdzlOkaou3GbMH./.uRRfd71G6DXK6', NULL, '2021-02-16 06:54:23', '2021-02-16 06:54:23', NULL),
(3, 'Himani Prajapati', 'template\\assets\\img\\avatar-3.jpg', NULL, 0, NULL, 'himani@abc.com', NULL, '$2y$10$QFrNXsC6WOig8PIUzLXWb.0xwtb5LMZwGi8Jd1cEBnX11aD0sYZki', NULL, '2021-02-16 06:54:23', '2021-02-16 06:54:23', NULL),
(4, 'Priya Patel', 'template\\assets\\img\\avatar-4.jpg', NULL, 0, NULL, 'priya@abc.com', NULL, '$2y$10$JHuAZ0.1gosycD7qf5XI6eeHWoA9mjw8W24hoCsio2sWPxcZdGQrC', 'MFviUB7c8Rmfc6I4mdyGrXHfQgS0MTjrszIAmzU1BrWUYcsA9icUnzv7fxNR', '2021-02-16 06:54:24', '2021-02-16 06:54:24', NULL),
(5, 'Jack Sparrow', 'template\\assets\\img\\jack-sparrow.jpg', NULL, 0, NULL, 'jack@abc.com', NULL, '$2y$10$r0svOZhCfLBdAuPB.W2vkubPjYoHl6NB.EHMsdx3yEzvQwWWVqqMK', NULL, '2021-02-16 06:54:24', '2021-02-16 06:54:24', NULL),
(6, 'Harry Potter', 'template\\assets\\img\\harry-potter.jpg', NULL, 0, NULL, 'harry@abc.com', NULL, '$2y$10$YiCsWNOu01kU.jF.G8.dne3IhF1ZIxm.dO2iIq/XaOEc.AlmVV5p6', NULL, '2021-02-16 06:54:25', '2021-02-16 06:54:25', NULL),
(7, 'Hermione Granger', 'template\\assets\\img\\hermione-granger.jpg', NULL, 0, NULL, 'hermione@abc.com', NULL, '$2y$10$QX5ckn9Px2x5gDI16Rk9RuNXyiadDDxlJAzVtS7Fp3h0W1zSm93Xm', NULL, '2021-02-16 06:54:25', '2021-02-16 06:54:25', NULL),
(8, 'Sherlock Holmes', 'template\\assets\\img\\sherlock-holmes.jpg', NULL, 0, NULL, 'sherlock@abc.com', NULL, '$2y$10$OzrYbJXC2oS3ifmEl8z.POHNgclirYR6yrmNkThhPZQkGumD2vVZi', NULL, '2021-02-16 06:54:26', '2021-02-16 06:54:26', NULL),
(12, 'demo', 'profile/lK25VcuFxa95Wo90SkqHjJZjSFyKI9vgzr3iTWem.jpg', 9876543210, 0, NULL, 'gaurangkumarp@gmail.com', NULL, '$2y$10$eiuW2TVFsmzl9G5yQeaRae1LUQfnN9xDtBUZUfyCzPI7z/0Q5bPVq', NULL, '2021-02-26 02:05:34', '2021-02-26 02:05:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calls_user_id_foreign` (`user_id`),
  ADD KEY `calls_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_user_id_foreign` (`user_id`),
  ADD KEY `chats_group_id_foreign` (`group_id`),
  ADD KEY `chats_rid_foreign` (`rid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`),
  ADD KEY `contacts_cid_foreign` (`cid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_user_id_foreign` (`user_id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_members_group_id_foreign` (`group_id`),
  ADD KEY `group_members_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `page_comments`
--
ALTER TABLE `page_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_comments_user_id_foreign` (`user_id`),
  ADD KEY `page_comments_page_post_id_foreign` (`page_post_id`);

--
-- Indexes for table `page_followers`
--
ALTER TABLE `page_followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_followers_user_id_foreign` (`user_id`),
  ADD KEY `page_followers_page_id_foreign` (`page_id`);

--
-- Indexes for table `page_likes`
--
ALTER TABLE `page_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_likes_user_id_foreign` (`user_id`),
  ADD KEY `page_likes_page_post_id_foreign` (`page_post_id`);

--
-- Indexes for table `page_posts`
--
ALTER TABLE `page_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_business_id_foreign` (`business_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_comments`
--
ALTER TABLE `page_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_followers`
--
ALTER TABLE `page_followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_likes`
--
ALTER TABLE `page_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_posts`
--
ALTER TABLE `page_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `calls`
--
ALTER TABLE `calls`
  ADD CONSTRAINT `calls_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `calls_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `chats_rid_foreign` FOREIGN KEY (`rid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `group_members`
--
ALTER TABLE `group_members`
  ADD CONSTRAINT `group_members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `group_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `page_comments`
--
ALTER TABLE `page_comments`
  ADD CONSTRAINT `page_comments_page_post_id_foreign` FOREIGN KEY (`page_post_id`) REFERENCES `page_posts` (`id`),
  ADD CONSTRAINT `page_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `page_followers`
--
ALTER TABLE `page_followers`
  ADD CONSTRAINT `page_followers_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`),
  ADD CONSTRAINT `page_followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `page_likes`
--
ALTER TABLE `page_likes`
  ADD CONSTRAINT `page_likes_page_post_id_foreign` FOREIGN KEY (`page_post_id`) REFERENCES `page_posts` (`id`),
  ADD CONSTRAINT `page_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `page_posts`
--
ALTER TABLE `page_posts`
  ADD CONSTRAINT `page_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`);

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
