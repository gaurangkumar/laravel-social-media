-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.epizy.com
-- Generation Time: May 01, 2021 at 06:30 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27820697_agwis_db`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `profile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'template\\assets\\img\\avatar-1.jpg', 'admin@admin.com', 'admin', '2021-04-24 18:48:16', '2021-04-24 18:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `btype`, `address`, `website`, `description`, `profile`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'XYZ', 'Grocery Store', 'Delhi', 'abc.com', 'Grocery', 'template\\assets\\img\\avatar-1.jpg', 1, '2021-04-24 18:48:54', '2021-04-24 18:48:54'),
(2, 'ABC', 'Cloth Store', 'Mumbai', 'abc.com', 'Grocery', 'template\\assets\\img\\avatar-2.jpg', 2, '2021-04-24 18:48:55', '2021-04-24 18:48:55');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rid` bigint(20) UNSIGNED DEFAULT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `msg` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `group_id`, `rid`, `view`, `msg`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 2, 0, 'good afternoon', NULL, '2021-04-24 18:48:41', '2021-04-24 18:48:41'),
(2, 1, NULL, 3, 0, 'good afternoon', NULL, '2021-04-24 18:49:41', '2021-04-24 18:48:42'),
(3, 1, NULL, 4, 0, 'how\'s it going', NULL, '2021-04-24 18:50:41', '2021-04-24 18:48:42'),
(4, 1, NULL, 5, 0, 'what up?', NULL, '2021-04-24 18:51:41', '2021-04-24 18:48:42'),
(5, 1, NULL, 6, 0, 'hello', NULL, '2021-04-24 18:52:41', '2021-04-24 18:48:42'),
(6, 1, NULL, 7, 0, 'good afternoon', NULL, '2021-04-24 18:53:41', '2021-04-24 18:48:42'),
(7, 1, NULL, 8, 0, 'Welcome', NULL, '2021-04-24 18:54:41', '2021-04-24 18:48:42'),
(8, 2, NULL, 1, 0, 'hello', NULL, '2021-04-24 18:55:41', '2021-04-24 18:48:43'),
(9, 2, NULL, 3, 0, 'Welcome', NULL, '2021-04-24 18:56:41', '2021-04-24 18:48:43'),
(10, 2, NULL, 4, 0, 'how are you', NULL, '2021-04-24 18:57:41', '2021-04-24 18:48:43'),
(11, 2, NULL, 5, 0, 'what up?', NULL, '2021-04-24 18:58:41', '2021-04-24 18:48:43'),
(12, 2, NULL, 6, 0, 'how\'s it going', NULL, '2021-04-24 18:59:41', '2021-04-24 18:48:43'),
(13, 2, NULL, 7, 0, 'good afternoon', NULL, '2021-04-24 19:00:41', '2021-04-24 18:48:43'),
(14, 2, NULL, 8, 0, 'good morning', NULL, '2021-04-24 19:01:41', '2021-04-24 18:48:43'),
(15, 3, NULL, 1, 0, 'hello', NULL, '2021-04-24 19:02:41', '2021-04-24 18:48:43'),
(16, 3, NULL, 2, 0, 'how are you', NULL, '2021-04-24 19:03:41', '2021-04-24 18:48:43'),
(17, 3, NULL, 4, 0, 'what up?', NULL, '2021-04-24 19:04:41', '2021-04-24 18:48:44'),
(18, 3, NULL, 5, 0, 'good afternoon', NULL, '2021-04-24 19:05:41', '2021-04-24 18:48:44'),
(19, 3, NULL, 6, 0, 'good afternoon', NULL, '2021-04-24 19:06:41', '2021-04-24 18:48:44'),
(20, 3, NULL, 7, 0, 'good morning', NULL, '2021-04-24 19:07:41', '2021-04-24 18:48:45'),
(21, 3, NULL, 8, 0, 'Welcome', NULL, '2021-04-24 19:08:41', '2021-04-24 18:48:45'),
(22, 4, NULL, 1, 0, 'how are you', NULL, '2021-04-24 19:09:41', '2021-04-24 18:48:45'),
(23, 4, NULL, 2, 0, 'what up?', NULL, '2021-04-24 19:10:41', '2021-04-24 18:48:45'),
(24, 4, NULL, 3, 0, 'what up?', NULL, '2021-04-24 19:11:41', '2021-04-24 18:48:45'),
(25, 4, NULL, 5, 0, 'good afternoon', NULL, '2021-04-24 19:12:41', '2021-04-24 18:48:45'),
(26, 4, NULL, 6, 0, 'what up?', NULL, '2021-04-24 19:13:41', '2021-04-24 18:48:45'),
(27, 4, NULL, 7, 0, 'good night', NULL, '2021-04-24 19:14:41', '2021-04-24 18:48:46'),
(28, 4, NULL, 8, 0, 'good night', NULL, '2021-04-24 19:15:41', '2021-04-24 18:48:46'),
(29, 5, NULL, 1, 0, 'good afternoon', NULL, '2021-04-24 19:16:41', '2021-04-24 18:48:46'),
(30, 5, NULL, 2, 0, 'Welcome', NULL, '2021-04-24 19:17:41', '2021-04-24 18:48:46'),
(31, 5, NULL, 3, 0, 'good night', NULL, '2021-04-24 19:18:41', '2021-04-24 18:48:47'),
(32, 5, NULL, 4, 0, 'how\'s it going', NULL, '2021-04-24 19:19:41', '2021-04-24 18:48:47'),
(33, 5, NULL, 6, 0, 'good afternoon', NULL, '2021-04-24 19:20:41', '2021-04-24 18:48:47'),
(34, 5, NULL, 7, 0, 'what up?', NULL, '2021-04-24 19:21:41', '2021-04-24 18:48:47'),
(35, 5, NULL, 8, 0, 'hello', NULL, '2021-04-24 19:22:41', '2021-04-24 18:48:47'),
(36, 6, NULL, 1, 0, 'what up?', NULL, '2021-04-24 19:23:41', '2021-04-24 18:48:47'),
(37, 6, NULL, 2, 0, 'how are you', NULL, '2021-04-24 19:24:41', '2021-04-24 18:48:47'),
(38, 6, NULL, 3, 0, 'hey', NULL, '2021-04-24 19:25:41', '2021-04-24 18:48:48'),
(39, 6, NULL, 4, 0, 'what up?', NULL, '2021-04-24 19:26:41', '2021-04-24 18:48:48'),
(40, 6, NULL, 5, 0, 'good morning', NULL, '2021-04-24 19:27:41', '2021-04-24 18:48:48'),
(41, 6, NULL, 7, 0, 'what up?', NULL, '2021-04-24 19:28:41', '2021-04-24 18:48:48'),
(42, 6, NULL, 8, 0, 'good night', NULL, '2021-04-24 19:29:41', '2021-04-24 18:48:48'),
(43, 7, NULL, 1, 0, 'good morning', NULL, '2021-04-24 19:30:41', '2021-04-24 18:48:48'),
(44, 7, NULL, 2, 0, 'hey', NULL, '2021-04-24 19:31:41', '2021-04-24 18:48:48'),
(45, 7, NULL, 3, 0, 'how are you', NULL, '2021-04-24 19:32:41', '2021-04-24 18:48:48'),
(46, 7, NULL, 4, 0, 'hello', NULL, '2021-04-24 19:33:41', '2021-04-24 18:48:48'),
(47, 7, NULL, 5, 0, 'how\'s it going', NULL, '2021-04-24 19:34:41', '2021-04-24 18:48:49'),
(48, 7, NULL, 6, 0, 'what up?', NULL, '2021-04-24 19:35:41', '2021-04-24 18:48:49'),
(49, 7, NULL, 8, 0, 'hello', NULL, '2021-04-24 19:36:41', '2021-04-24 18:48:49'),
(50, 8, NULL, 1, 0, 'good night', NULL, '2021-04-24 19:37:41', '2021-04-24 18:48:49'),
(51, 8, NULL, 2, 0, 'hello', NULL, '2021-04-24 19:38:41', '2021-04-24 18:48:49'),
(52, 8, NULL, 3, 0, 'what up?', NULL, '2021-04-24 19:39:41', '2021-04-24 18:48:49'),
(53, 8, NULL, 4, 0, 'good morning', NULL, '2021-04-24 19:40:41', '2021-04-24 18:48:49'),
(54, 8, NULL, 5, 0, 'how\'s it going', NULL, '2021-04-24 19:41:41', '2021-04-24 18:48:49'),
(55, 8, NULL, 6, 0, 'hello', NULL, '2021-04-24 19:42:41', '2021-04-24 18:48:50'),
(56, 8, NULL, 7, 0, 'what up?', NULL, '2021-04-24 19:43:41', '2021-04-24 18:48:50'),
(57, 1, 1, NULL, 0, 'good night', NULL, '2021-04-24 19:44:41', '2021-04-24 18:48:50'),
(58, 1, 2, NULL, 0, 'how are you', NULL, '2021-04-24 19:45:41', '2021-04-24 18:48:50'),
(59, 2, 1, NULL, 0, 'Welcome', NULL, '2021-04-24 19:46:41', '2021-04-24 18:48:50'),
(60, 2, 2, NULL, 0, 'good night', NULL, '2021-04-24 19:47:41', '2021-04-24 18:48:50'),
(61, 3, 1, NULL, 0, 'good night', NULL, '2021-04-24 19:48:41', '2021-04-24 18:48:50'),
(62, 3, 2, NULL, 0, 'Welcome', NULL, '2021-04-24 19:49:41', '2021-04-24 18:48:50'),
(63, 4, 1, NULL, 0, 'good night', NULL, '2021-04-24 19:50:41', '2021-04-24 18:48:51'),
(64, 4, 2, NULL, 0, 'good morning', NULL, '2021-04-24 19:51:41', '2021-04-24 18:48:51'),
(65, 5, 1, NULL, 0, 'how are you', NULL, '2021-04-24 19:52:41', '2021-04-24 18:48:51'),
(66, 5, 2, NULL, 0, 'hey', NULL, '2021-04-24 19:53:41', '2021-04-24 18:48:51'),
(67, 6, 1, NULL, 0, 'hey', NULL, '2021-04-24 19:54:41', '2021-04-24 18:48:51'),
(68, 6, 2, NULL, 0, 'Welcome', NULL, '2021-04-24 19:55:41', '2021-04-24 18:48:52'),
(69, 7, 1, NULL, 0, 'Welcome', NULL, '2021-04-24 19:56:41', '2021-04-24 18:48:52'),
(70, 7, 2, NULL, 0, 'how\'s it going', NULL, '2021-04-24 19:57:41', '2021-04-24 18:48:52'),
(71, 8, 1, NULL, 0, 'hello', NULL, '2021-04-24 19:58:41', '2021-04-24 18:48:52'),
(72, 8, 2, NULL, 0, 'hello', NULL, '2021-04-24 19:59:41', '2021-04-24 18:48:52'),
(73, 1, NULL, 2, 0, 'what up?', NULL, '2021-04-24 20:00:41', '2021-04-24 18:48:52'),
(74, 5, NULL, 1, 0, 'hello', NULL, '2021-04-24 20:01:41', '2021-04-24 18:48:52'),
(75, 6, NULL, 3, 0, 'good morning', NULL, '2021-04-24 20:02:41', '2021-04-24 18:48:53'),
(76, 8, NULL, 7, 0, 'hey', NULL, '2021-04-24 20:03:41', '2021-04-24 18:48:53'),
(77, 6, NULL, 7, 0, 'how\'s it going', NULL, '2021-04-24 20:04:41', '2021-04-24 18:48:53'),
(78, 7, NULL, 2, 0, 'good night', NULL, '2021-04-24 20:05:41', '2021-04-24 18:48:54'),
(79, 6, NULL, 7, 0, 'good afternoon', NULL, '2021-04-24 20:06:41', '2021-04-24 18:48:54'),
(80, 8, NULL, 1, 0, 'Welcome', NULL, '2021-04-24 20:07:41', '2021-04-24 18:48:54'),
(81, 4, NULL, 7, 0, 'how are you', NULL, '2021-04-24 20:08:41', '2021-04-24 18:48:54');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `cid`, `blocked`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '2021-04-24 18:48:21', '2021-04-24 18:48:21'),
(2, 1, 3, NULL, '2021-04-24 18:49:21', '2021-04-24 18:48:21'),
(3, 1, 4, NULL, '2021-04-24 18:50:21', '2021-04-24 18:48:21'),
(4, 1, 5, NULL, '2021-04-24 18:51:21', '2021-04-24 18:48:21'),
(5, 1, 6, NULL, '2021-04-24 18:52:21', '2021-04-24 18:48:21'),
(6, 1, 7, NULL, '2021-04-24 18:53:21', '2021-04-24 18:48:21'),
(7, 1, 8, NULL, '2021-04-24 18:54:21', '2021-04-24 18:48:21'),
(8, 2, 1, NULL, '2021-04-24 18:55:21', '2021-04-24 18:48:21'),
(9, 2, 3, NULL, '2021-04-24 18:56:21', '2021-04-24 18:48:21'),
(10, 2, 4, NULL, '2021-04-24 18:57:21', '2021-04-24 18:48:21'),
(11, 2, 5, NULL, '2021-04-24 18:58:21', '2021-04-24 18:48:21'),
(12, 2, 6, NULL, '2021-04-24 18:59:21', '2021-04-24 18:48:22'),
(13, 2, 7, NULL, '2021-04-24 19:00:21', '2021-04-24 18:48:22'),
(14, 2, 8, NULL, '2021-04-24 19:01:21', '2021-04-24 18:48:22'),
(15, 3, 1, NULL, '2021-04-24 19:02:21', '2021-04-24 18:48:22'),
(16, 3, 2, NULL, '2021-04-24 19:03:21', '2021-04-24 18:48:22'),
(17, 3, 4, NULL, '2021-04-24 19:04:21', '2021-04-24 18:48:22'),
(18, 3, 5, NULL, '2021-04-24 19:05:21', '2021-04-24 18:48:22'),
(19, 3, 6, NULL, '2021-04-24 19:06:21', '2021-04-24 18:48:22'),
(20, 3, 7, NULL, '2021-04-24 19:07:21', '2021-04-24 18:48:22'),
(21, 3, 8, NULL, '2021-04-24 19:08:21', '2021-04-24 18:48:22'),
(22, 4, 1, NULL, '2021-04-24 19:09:21', '2021-04-24 18:48:23'),
(23, 4, 2, NULL, '2021-04-24 19:10:21', '2021-04-24 18:48:23'),
(24, 4, 3, NULL, '2021-04-24 19:11:21', '2021-04-24 18:48:23'),
(25, 4, 5, NULL, '2021-04-24 19:12:21', '2021-04-24 18:48:23'),
(26, 4, 6, NULL, '2021-04-24 19:13:21', '2021-04-24 18:48:23'),
(27, 4, 7, NULL, '2021-04-24 19:14:21', '2021-04-24 18:48:23'),
(28, 4, 8, NULL, '2021-04-24 19:15:21', '2021-04-24 18:48:23'),
(29, 5, 1, NULL, '2021-04-24 19:16:21', '2021-04-24 18:48:23'),
(30, 5, 2, NULL, '2021-04-24 19:17:21', '2021-04-24 18:48:24'),
(31, 5, 3, NULL, '2021-04-24 19:18:21', '2021-04-24 18:48:24'),
(32, 5, 4, NULL, '2021-04-24 19:19:21', '2021-04-24 18:48:24'),
(33, 5, 6, NULL, '2021-04-24 19:20:21', '2021-04-24 18:48:24'),
(34, 5, 7, NULL, '2021-04-24 19:21:21', '2021-04-24 18:48:24'),
(35, 5, 8, NULL, '2021-04-24 19:22:21', '2021-04-24 18:48:24'),
(36, 6, 1, NULL, '2021-04-24 19:23:21', '2021-04-24 18:48:24'),
(37, 6, 2, NULL, '2021-04-24 19:24:21', '2021-04-24 18:48:24'),
(38, 6, 3, NULL, '2021-04-24 19:25:21', '2021-04-24 18:48:24'),
(39, 6, 4, NULL, '2021-04-24 19:26:21', '2021-04-24 18:48:24'),
(40, 6, 5, NULL, '2021-04-24 19:27:21', '2021-04-24 18:48:25'),
(41, 6, 7, NULL, '2021-04-24 19:28:21', '2021-04-24 18:48:25'),
(42, 6, 8, NULL, '2021-04-24 19:29:21', '2021-04-24 18:48:25'),
(43, 7, 1, NULL, '2021-04-24 19:30:21', '2021-04-24 18:48:25'),
(44, 7, 2, NULL, '2021-04-24 19:31:21', '2021-04-24 18:48:25'),
(45, 7, 3, NULL, '2021-04-24 19:32:21', '2021-04-24 18:48:25'),
(46, 7, 4, NULL, '2021-04-24 19:33:21', '2021-04-24 18:48:25'),
(47, 7, 5, NULL, '2021-04-24 19:34:21', '2021-04-24 18:48:25'),
(48, 7, 6, NULL, '2021-04-24 19:35:21', '2021-04-24 18:48:25'),
(49, 7, 8, NULL, '2021-04-24 19:36:21', '2021-04-24 18:48:25'),
(50, 8, 1, NULL, '2021-04-24 19:37:21', '2021-04-24 18:48:25'),
(51, 8, 2, NULL, '2021-04-24 19:38:21', '2021-04-24 18:48:26'),
(52, 8, 3, NULL, '2021-04-24 19:39:21', '2021-04-24 18:48:26'),
(53, 8, 4, NULL, '2021-04-24 19:40:21', '2021-04-24 18:48:26'),
(54, 8, 5, NULL, '2021-04-24 19:41:21', '2021-04-24 18:48:26'),
(55, 8, 6, NULL, '2021-04-24 19:42:21', '2021-04-24 18:48:26'),
(56, 8, 7, NULL, '2021-04-24 19:43:21', '2021-04-24 18:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `profile`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'MCA', 'template\\assets\\img\\avatar-1.jpg', 1, 'MCA Group', '2021-04-24 18:48:37', '2021-04-24 18:48:37'),
(2, 'BCA', 'template\\assets\\img\\avatar-2.jpg', 2, 'BCA Group', '2021-04-24 18:48:38', '2021-04-24 18:48:38');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-04-24 18:49:38', '2021-04-24 18:48:38'),
(2, 2, 1, '2021-04-24 18:50:38', '2021-04-24 18:48:38'),
(3, 1, 2, '2021-04-24 18:51:38', '2021-04-24 18:48:39'),
(4, 2, 2, '2021-04-24 18:52:38', '2021-04-24 18:48:39'),
(5, 1, 3, '2021-04-24 18:53:38', '2021-04-24 18:48:39'),
(6, 2, 3, '2021-04-24 18:54:38', '2021-04-24 18:48:40'),
(7, 1, 4, '2021-04-24 18:55:38', '2021-04-24 18:48:40'),
(8, 2, 4, '2021-04-24 18:56:38', '2021-04-24 18:48:40'),
(9, 1, 5, '2021-04-24 18:57:38', '2021-04-24 18:48:40'),
(10, 2, 5, '2021-04-24 18:58:38', '2021-04-24 18:48:40'),
(11, 1, 6, '2021-04-24 18:59:38', '2021-04-24 18:48:41'),
(12, 2, 6, '2021-04-24 19:00:38', '2021-04-24 18:48:41'),
(13, 1, 7, '2021-04-24 19:01:38', '2021-04-24 18:48:41'),
(14, 2, 7, '2021-04-24 19:02:38', '2021-04-24 18:48:41'),
(15, 1, 8, '2021-04-24 19:03:38', '2021-04-24 18:48:41'),
(16, 2, 8, '2021-04-24 19:04:38', '2021-04-24 18:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `profile`, `banner`, `uname`, `user_id`, `description`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'MCA', 'template\\assets\\img\\avatar-1.jpg', NULL, 'mca', 1, 'MCA Group', NULL, '2021-04-24 18:48:26', '2021-04-24 18:48:26'),
(2, 'BCA', 'template\\assets\\img\\avatar-1.jpg', NULL, 'bca', 2, 'BCA Group', NULL, '2021-04-24 18:48:26', '2021-04-24 18:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `page_comments`
--

CREATE TABLE `page_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_comments`
--

INSERT INTO `page_comments` (`id`, `user_id`, `page_post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2021-04-24 18:49:34', '2021-04-24 18:48:34'),
(2, 1, 2, '2', '2021-04-24 18:50:34', '2021-04-24 18:48:35'),
(3, 2, 1, '1', '2021-04-24 18:51:34', '2021-04-24 18:48:35'),
(4, 2, 2, '2', '2021-04-24 18:52:34', '2021-04-24 18:48:35'),
(5, 3, 1, '1', '2021-04-24 18:53:34', '2021-04-24 18:48:35'),
(6, 3, 2, '2', '2021-04-24 18:54:34', '2021-04-24 18:48:35'),
(7, 4, 1, '1', '2021-04-24 18:55:34', '2021-04-24 18:48:35'),
(8, 4, 2, '2', '2021-04-24 18:56:34', '2021-04-24 18:48:36'),
(9, 5, 1, '1', '2021-04-24 18:57:34', '2021-04-24 18:48:36'),
(10, 5, 2, '2', '2021-04-24 18:58:34', '2021-04-24 18:48:36'),
(11, 6, 1, '1', '2021-04-24 18:59:34', '2021-04-24 18:48:36'),
(12, 6, 2, '2', '2021-04-24 19:00:34', '2021-04-24 18:48:36'),
(13, 7, 1, '1', '2021-04-24 19:01:34', '2021-04-24 18:48:36'),
(14, 7, 2, '2', '2021-04-24 19:02:34', '2021-04-24 18:48:37'),
(15, 8, 1, '1', '2021-04-24 19:03:34', '2021-04-24 18:48:37'),
(16, 8, 2, '2', '2021-04-24 19:04:34', '2021-04-24 18:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `page_followers`
--

CREATE TABLE `page_followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `follow` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_followers`
--

INSERT INTO `page_followers` (`id`, `user_id`, `page_id`, `follow`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-04-24 18:49:27', '2021-04-24 18:48:27'),
(2, 1, 2, 1, '2021-04-24 18:50:27', '2021-04-24 18:48:28'),
(3, 2, 1, 1, '2021-04-24 18:51:27', '2021-04-24 18:48:29'),
(4, 2, 2, 1, '2021-04-24 18:52:27', '2021-04-24 18:48:30'),
(5, 3, 1, 1, '2021-04-24 18:53:27', '2021-04-24 18:48:30'),
(6, 3, 2, 1, '2021-04-24 18:54:27', '2021-04-24 18:48:30'),
(7, 4, 1, 1, '2021-04-24 18:55:27', '2021-04-24 18:48:30'),
(8, 4, 2, 1, '2021-04-24 18:56:27', '2021-04-24 18:48:30'),
(9, 5, 1, 1, '2021-04-24 18:57:27', '2021-04-24 18:48:30'),
(10, 5, 2, 1, '2021-04-24 18:58:27', '2021-04-24 18:48:30'),
(11, 6, 1, 1, '2021-04-24 18:59:27', '2021-04-24 18:48:30'),
(12, 6, 2, 1, '2021-04-24 19:00:27', '2021-04-24 18:48:31'),
(13, 7, 1, 1, '2021-04-24 19:01:27', '2021-04-24 18:48:31'),
(14, 7, 2, 1, '2021-04-24 19:02:27', '2021-04-24 18:48:31'),
(15, 8, 1, 1, '2021-04-24 19:03:27', '2021-04-24 18:48:31'),
(16, 8, 2, 1, '2021-04-24 19:04:27', '2021-04-24 18:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `page_likes`
--

CREATE TABLE `page_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_post_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_likes`
--

INSERT INTO `page_likes` (`id`, `user_id`, `page_post_id`, `like`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-04-24 18:49:32', '2021-04-24 18:48:32'),
(2, 1, 2, 1, '2021-04-24 18:50:32', '2021-04-24 18:48:33'),
(3, 2, 1, 1, '2021-04-24 18:51:32', '2021-04-24 18:48:33'),
(4, 2, 2, 1, '2021-04-24 18:52:32', '2021-04-24 18:48:33'),
(5, 3, 1, 1, '2021-04-24 18:53:32', '2021-04-24 18:48:33'),
(6, 3, 2, 1, '2021-04-24 18:54:32', '2021-04-24 18:48:33'),
(7, 4, 1, 1, '2021-04-24 18:55:32', '2021-04-24 18:48:33'),
(8, 4, 2, 1, '2021-04-24 18:56:32', '2021-04-24 18:48:34'),
(9, 5, 1, 1, '2021-04-24 18:57:32', '2021-04-24 18:48:34'),
(10, 5, 2, 1, '2021-04-24 18:58:32', '2021-04-24 18:48:34'),
(11, 6, 1, 1, '2021-04-24 18:59:32', '2021-04-24 18:48:34'),
(12, 6, 2, 1, '2021-04-24 19:00:32', '2021-04-24 18:48:34'),
(13, 7, 1, 1, '2021-04-24 19:01:32', '2021-04-24 18:48:34'),
(14, 7, 2, 1, '2021-04-24 19:02:32', '2021-04-24 18:48:34'),
(15, 8, 1, 1, '2021-04-24 19:03:32', '2021-04-24 18:48:34'),
(16, 8, 2, 1, '2021-04-24 19:04:32', '2021-04-24 18:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `page_posts`
--

CREATE TABLE `page_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `view_count` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_posts`
--

INSERT INTO `page_posts` (`id`, `text`, `media`, `user_id`, `page_id`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Good morning', 'template\\assets\\img\\avatar-1.jpg', 1, 1, 0, '2021-04-24 18:48:31', '2021-04-24 18:48:31'),
(2, 'Good morning', 'template\\assets\\img\\avatar-2.jpg', 2, 2, 0, '2021-04-24 18:48:32', '2021-04-24 18:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `dob` date DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `mobile`, `blocked`, `dob`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vivek Patel', 'template\\assets\\img\\avatar-1.jpg', NULL, 0, NULL, NULL, 'vivek@abc.com', NULL, '$2y$10$EfiXU5Q3hKelwSRHTPU0A.ODbUwwLHqsXiOKfwoN/rx0DYfE0uzv.', NULL, '2021-04-24 18:48:17', '2021-04-24 18:48:17', NULL),
(2, 'Gaurang Parmar', 'template\\assets\\img\\avatar-2.jpg', NULL, 0, NULL, NULL, 'gaurang@abc.com', NULL, '$2y$10$Io9Fl.QWOuial0QH2uXxxe/Lt9887nDE/2P/w/mI/QWdvSFrby70u', NULL, '2021-04-24 18:48:17', '2021-04-24 18:48:17', NULL),
(3, 'Himani Prajapati', 'template\\assets\\img\\avatar-3.jpg', NULL, 0, NULL, NULL, 'himani@abc.com', NULL, '$2y$10$QuGekuUFciqkviL8.Ose1.ybuUq76K.CGAuH0Dk2KHlwMjt2QIhZm', NULL, '2021-04-24 18:48:18', '2021-04-24 18:48:18', NULL),
(4, 'Priya Patel', 'template\\assets\\img\\avatar-4.jpg', NULL, 0, NULL, NULL, 'priya@abc.com', NULL, '$2y$10$nPT4wQWXC29fiUxVLxXfnO/NxkciUbl7w/zK3OP6cXDfWyNqNenue', 'QiMY62a6IVicz8cVyiJ08FvXSEFRTnCczb3Ug3DNjcY5uSW2F0l7JTIMu6od', '2021-04-24 18:48:18', '2021-04-24 18:48:18', NULL),
(5, 'Jack Sparrow', 'template\\assets\\img\\jack-sparrow.jpg', NULL, 0, NULL, NULL, 'jack@abc.com', NULL, '$2y$10$u1ERWGjxEP/5GBjxzYRNQ.IChaOwD7GfJEiz57aRyvu5/Rls6RUpe', NULL, '2021-04-24 18:48:19', '2021-04-24 18:48:19', NULL),
(6, 'Harry Potter', 'template\\assets\\img\\harry-potter.jpg', NULL, 0, NULL, NULL, 'harry@abc.com', NULL, '$2y$10$Rce1gehemV.cUgE2U0Ol4u.RyCW6pcvEdswa.82oCQNK210JK9H.K', NULL, '2021-04-24 18:48:19', '2021-04-24 18:48:19', NULL),
(7, 'Hermione Granger', 'template\\assets\\img\\hermione-granger.jpg', NULL, 0, NULL, NULL, 'hermione@abc.com', NULL, '$2y$10$YEbZr4bBDORQ4ohNTRJllutpWvE9agL3tjHSvUfgpQ9MioxylVjBO', NULL, '2021-04-24 18:48:20', '2021-04-24 18:48:20', NULL),
(8, 'Sherlock Holmes', 'template\\assets\\img\\sherlock-holmes.jpg', NULL, 0, NULL, NULL, 'sherlock@abc.com', NULL, '$2y$10$70gGvLX3OvbgFWPKfJzIQuw4LboDiNMI6sMGIOzqLo3qrzyTUAKXi', NULL, '2021-04-24 18:48:20', '2021-04-24 18:48:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`(250));

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
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`(250));

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
  ADD UNIQUE KEY `pages_uname_unique` (`user_id`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `page_comments`
--
ALTER TABLE `page_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_comments_page_post_id_foreign` (`page_post_id`),
  ADD KEY `page_comments_user_id_foreign` (`user_id`);

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
  ADD KEY `page_posts_user_id_foreign` (`user_id`),
  ADD KEY `page_posts_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

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
  ADD UNIQUE KEY `users_email_unique` (`email`(250));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_comments`
--
ALTER TABLE `page_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_followers`
--
ALTER TABLE `page_followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_likes`
--
ALTER TABLE `page_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page_posts`
--
ALTER TABLE `page_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
