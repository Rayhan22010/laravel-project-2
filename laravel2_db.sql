-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 09:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_bottom_rights`
--

CREATE TABLE `about_bottom_rights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_bottom_rights`
--

INSERT INTO `about_bottom_rights` (`id`, `icone`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, 'bi bi-pie-chart-fill', 'Resources and insights', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 22:21:42', '2023-10-03 22:21:42'),
(3, 'bi bi-briefcase-fill', 'Blog just for youuuuuu', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 22:22:33', '2023-10-03 22:28:43'),
(4, 'bi bi-bag-check-fill', 'Building your blog', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 22:24:58', '2023-10-03 22:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `about_post_grids`
--

CREATE TABLE `about_post_grids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_post_grids`
--

INSERT INTO `about_post_grids` (`id`, `icone`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(3, 'bi-bag-check', 'Blog just for you', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind text', '2023-10-03 12:19:47', '2023-10-03 12:19:47'),
(4, 'bi-wallet-fill', 'Resources and insights', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,there live the blind texts.', '2023-10-03 12:29:41', '2023-10-03 12:29:41'),
(5, 'bi-pie-chart-fill', 'Blog just for youuuu', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,there live the blind texts.', '2023-10-03 12:32:33', '2023-10-03 12:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `about_teams`
--

CREATE TABLE `about_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_teams`
--

INSERT INTO `about_teams` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '1696324885.jpg', 'James Griffin', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 13:21:25', '2023-10-03 13:21:25'),
(2, '1696324904.jpg', 'Claire Smith', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.xxxx', '2023-10-03 13:21:44', '2023-10-03 13:34:18'),
(3, '1696324918.jpg', 'Jessica Wilson', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 13:21:58', '2023-10-03 13:21:58'),
(4, '1696324931.jpg', 'William Anderson', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 13:22:11', '2023-10-03 13:22:11'),
(5, '1696324948.jpg', 'Julie Harvey', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2023-10-03 13:22:28', '2023-10-03 13:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `about_team_headings`
--

CREATE TABLE `about_team_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_team_headings`
--

INSERT INTO `about_team_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(14, 'Our Team member', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the', '2023-10-09 21:11:00', '2023-10-09 21:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bottom_lefts`
--

CREATE TABLE `bottom_lefts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottom_lefts`
--

INSERT INTO `bottom_lefts` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, '1696351845.jpg', 'Publishing platform for professional bloggerssss', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.xxxx', '2023-10-03 20:50:45', '2023-10-09 21:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `business_grids`
--

CREATE TABLE `business_grids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_grids`
--

INSERT INTO `business_grids` (`id`, `image`, `date_time`, `heading`, `btn_text`, `description`, `created_at`, `updated_at`) VALUES
(2, '1695272872.jpg', 'Apr. 14th, 2022', 'Thought you loved Python? Wait until you meet Rust', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2023-09-21 09:07:52', '2023-09-21 09:07:52'),
(3, '1695273268.jpg', 'Mar. 25th, 2024', 'Startup vs corporate: What job suits you best?', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2023-09-21 09:14:28', '2023-09-21 09:14:28'),
(4, '1695273310.jpg', 'Mar. 15th, 2023', 'UK sees highest inflation in 30 years', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2023-09-21 09:15:10', '2023-09-21 09:15:10'),
(5, '1695273355.jpg', 'Apr. 24th, 2026', 'Don’t assume your user data in the cloud is safe', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2023-09-21 09:15:55', '2023-09-21 09:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `business_pages`
--

CREATE TABLE `business_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_pages`
--

INSERT INTO `business_pages` (`id`, `image`, `date_time`, `heading`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(2, '1696255184.jpg', 'Mar. 25th, 2024', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 17:59:44', '2023-10-02 17:59:44'),
(4, '1696255755.jpg', 'Mar. 15th, 2023', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 18:09:15', '2023-10-02 18:09:15'),
(7, '1696256211.jpg', 'Apr. 14th, 2022', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 18:16:51', '2023-10-02 18:16:51'),
(8, '1696256231.jpg', 'Jun. 23th, 2025', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 18:17:11', '2023-10-02 18:17:11'),
(10, '1696710013.jpg', 'Apr. 14th, 2022', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis', 'Read more', '2023-10-08 00:20:13', '2023-10-08 00:21:29'),
(11, '1696710026.jpg', 'Apr. 14th, 2022', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis', 'Read more', '2023-10-08 00:20:26', '2023-10-08 00:20:26'),
(12, '1696710036.jpg', 'Mar. 25th, 2024', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis', 'Read more', '2023-10-08 00:20:36', '2023-10-08 00:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `b_popular_posts`
--

CREATE TABLE `b_popular_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_popular_posts`
--

INSERT INTO `b_popular_posts` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(3, '1696701548.jpg', 'There’s a Cool New Way for Men to Wear Socks and Sandals', 'Apr. 14th, 2022', '2023-10-02 18:35:12', '2023-10-07 21:59:08'),
(4, '1696701534.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2027', '2023-10-02 18:40:25', '2023-10-07 21:58:54'),
(5, '1696701020.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Jun. 23th, 2023', '2023-10-07 21:50:20', '2023-10-07 21:50:20'),
(6, '1696701596.jpg', 'Don’t assume your user data in the cloud is safe', 'Mar. 25th, 2024', '2023-10-07 21:59:56', '2023-10-07 21:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rayhan Parvez', 'rayhan@gmail.com', 'Application for the post of jr.engineer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', '2023-09-27 23:31:52', '2023-09-27 23:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `c_popular_posts`
--

CREATE TABLE `c_popular_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_popular_posts`
--

INSERT INTO `c_popular_posts` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(6, '1695840968.jpg', 'Startup vs corporate: What job suits you best?xx', 'Mar. 25th, 2024', '2023-09-27 22:56:08', '2023-09-27 23:04:14'),
(7, '1695840989.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2024', '2023-09-27 22:56:29', '2023-10-08 00:56:34'),
(8, '1695841005.jpg', 'Don’t assume your user data in the cloud is safe', 'Apr. 14th, 2023', '2023-09-27 22:56:45', '2023-09-27 22:56:45');

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
-- Table structure for table `footer_recent_posts`
--

CREATE TABLE `footer_recent_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_recent_posts`
--

INSERT INTO `footer_recent_posts` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(1, '1696875945.jpg', 'Don’t assume your user data in the cloud is safe', 'Mar. 25th, 2024', '2023-09-21 12:52:03', '2023-10-09 22:25:45'),
(2, '1695286343.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2023', '2023-09-21 12:52:23', '2023-09-21 12:52:23'),
(4, '1695286680.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Jun. 23th, 2024', '2023-09-21 12:58:00', '2023-09-21 13:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_heroes`
--

CREATE TABLE `home_heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_heroes`
--

INSERT INTO `home_heroes` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(1, '1695233078.jpg', 'rayhan Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2022', '2023-09-20 22:04:38', '2023-10-08 00:59:53'),
(8, '1695236449.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Mar. 25th, 2024', '2023-09-20 23:00:49', '2023-09-20 23:15:08'),
(9, '1695236589.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2023', '2023-09-20 23:03:09', '2023-09-20 23:15:13'),
(10, '1696712269.jpg', 'rayhan Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2023', '2023-09-20 23:03:15', '2023-10-08 00:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `home_politics`
--

CREATE TABLE `home_politics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_politics`
--

INSERT INTO `home_politics` (`id`, `p_image`, `heading`, `r_image`, `r_name`, `date_time`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(2, '1695281355.jpg', 'Startup vs corporate: What job suits you best?', '1695281355.jpg', 'David Anderson', 'Apr. 14th, 2022', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor', 'Read more', '2023-09-21 11:29:15', '2023-09-21 11:29:15'),
(3, '1695281700.jpg', 'Don’t assume your user data in the cloud is safe', '1695281700.jpg', 'David Anderson', 'Mar. 15th, 2023', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tem', 'Continue reading', '2023-09-21 11:35:00', '2023-09-21 11:35:00'),
(4, '1695281776.jpg', 'Don’t assume your user data in the cloud is safe', '1695281776.jpg', 'David Anderson', 'Jun. 23th, 2023', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tem', 'Continue reading', '2023-09-21 11:36:16', '2023-09-21 11:36:16'),
(5, '1695281815.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1695281815.jpg', 'David Anderson', 'Apr. 14th, 2022', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tem', 'Continue reading', '2023-09-21 11:36:55', '2023-09-21 11:36:55'),
(6, '1695281857.jpg', 'Don’t assume your user data in the cloud is safe', '1695281857.jpg', 'David Anderson', 'Jun. 23th, 2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tem', 'Continue reading', '2023-09-21 11:37:37', '2023-09-21 11:37:37'),
(7, '1695282081.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1695282081.jpg', 'David Anderson', 'Nov. 24th, 2024', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt temxxx', 'Continue reading', '2023-09-21 11:41:21', '2023-09-21 11:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_travel`
--

CREATE TABLE `home_travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_travel`
--

INSERT INTO `home_travel` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(4, '1695709280.jpg', 'Don’t assume your user data in the cloud is safe', 'Mar. 25th, 2024', '2023-09-26 10:21:20', '2023-09-26 10:21:20'),
(5, '1695709339.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Apr. 14th, 2023', '2023-09-26 10:22:19', '2023-09-26 10:22:19'),
(6, '1695709556.jpg', 'Personalize Learning', 'Mar. 25th, 2024', '2023-09-26 10:25:56', '2023-09-26 10:25:56'),
(8, '1695713068.jpg', 'Tools for Students', 'Apr. 14th, 2023', '2023-09-26 11:24:28', '2023-09-26 11:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `left_businesses`
--

CREATE TABLE `left_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `left_businesses`
--

INSERT INTO `left_businesses` (`id`, `image`, `date_time`, `heading`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(4, '1695240932.jpg', 'Mar. 25th, 2024', 'Tools for Students', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis', 'Read more', '2023-09-21 00:15:32', '2023-09-21 00:15:32'),
(5, '1695240981.jpg', 'Mar. 25th, 2024', 'Trusted Courses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis', 'Read more', '2023-09-21 00:16:21', '2023-09-21 00:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `left_cultures`
--

CREATE TABLE `left_cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `left_cultures`
--

INSERT INTO `left_cultures` (`id`, `date_time`, `heading`, `btn_text`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Jun. 23th, 2025', 'Don’t assume your user data in the cloud is safe', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas', '2023-09-21 10:04:50', '2023-09-21 10:04:50'),
(2, 'Mar. 15th, 2022', 'Meta unveils fees on metaverse sales', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', '2023-09-21 10:13:09', '2023-09-21 10:26:25'),
(4, 'Mar. 25th, 2025', 'UK sees highest inflation in 30 yearsxx', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.xx', '2023-09-21 10:22:17', '2023-09-21 10:26:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_20_174218_create_home_heroes_table', 1),
(6, '2023_09_20_192317_create_left_businesses_table', 2),
(7, '2023_09_20_203053_create_right_businesses_table', 3),
(8, '2023_09_21_045309_create_business_grids_table', 4),
(9, '2023_09_21_055528_create_left_cultures_table', 5),
(10, '2023_09_21_063555_create_right_cultures_table', 6),
(11, '2023_09_21_071219_create_home_politics_table', 7),
(12, '2023_09_21_084811_create_footer_recent_posts_table', 8),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 9),
(14, '2023_09_23_165048_create_sessions_table', 9),
(15, '2023_09_26_055616_create_home_travel_table', 10),
(16, '2023_09_27_184057_create_c_popular_posts_table', 11),
(17, '2023_09_27_192531_create_contacts_table', 12),
(18, '2023_10_02_133825_create_business_pages_table', 13),
(19, '2023_10_02_143103_create_b_popular_posts_table', 14),
(20, '2023_10_02_152151_create_politics_lefts_table', 15),
(21, '2023_10_02_154754_create_p_popular_posts_table', 16),
(22, '2023_10_03_072312_create_top_abouts_table', 17),
(23, '2023_10_03_081118_create_about_post_grids_table', 18),
(24, '2023_10_03_091844_create_about_teams_table', 19),
(25, '2023_10_03_093725_create_about_team_headings_table', 20),
(26, '2023_10_03_163754_create_bottom_lefts_table', 21),
(27, '2023_10_03_181850_create_about_bottom_rights_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `politics_lefts`
--

CREATE TABLE `politics_lefts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `politics_lefts`
--

INSERT INTO `politics_lefts` (`id`, `image`, `date_time`, `heading`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(1, '1696260426.jpg', 'Jun. 23th, 2023', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 19:27:06', '2023-10-02 19:27:06'),
(3, '1696260909.jpg', 'Aug. 14th, 2023', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 19:35:09', '2023-10-02 19:38:29'),
(4, '1696260927.jpg', 'Nov. 23th, 2025', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 19:35:27', '2023-10-02 19:38:41'),
(5, '1696260939.jpg', 'Mar. 25th, 2024', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-02 19:35:39', '2023-10-02 19:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `p_popular_posts`
--

CREATE TABLE `p_popular_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_popular_posts`
--

INSERT INTO `p_popular_posts` (`id`, `image`, `heading`, `date_time`, `created_at`, `updated_at`) VALUES
(1, '1696262296.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Mar. 25th, 2024', '2023-10-02 19:58:16', '2023-10-02 19:58:16'),
(2, '1696863421.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Mar. 15th, 2023', '2023-10-02 19:58:31', '2023-10-09 18:57:01'),
(3, '1696262323.jpg', 'Don’t assume your user data in the cloud is safe', 'Dec. 14th, 2023', '2023-10-02 19:58:43', '2023-10-02 20:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `right_businesses`
--

CREATE TABLE `right_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `right_businesses`
--

INSERT INTO `right_businesses` (`id`, `date_time`, `heading`, `btn_text`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Jun. 23th, 2025', 'Trusted Courses', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', '2023-09-21 00:34:30', '2023-09-21 01:08:35'),
(2, 'Jun. 23th, 2025', 'Lorem ipsum dolor sit amet', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis', '2023-09-21 00:41:27', '2023-09-21 00:41:27'),
(3, 'Jun. 23th, 2026', 'Lorem ipsum dolor adipisicing elit', 'Continue reading', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis', '2023-09-21 00:41:51', '2023-09-21 01:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `right_cultures`
--

CREATE TABLE `right_cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `right_cultures`
--

INSERT INTO `right_cultures` (`id`, `image`, `date_time`, `heading`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(1, '1695278371.jpg', 'Apr. 24th, 2026', 'Thought you loved Python? Wait until you meet Rust', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-09-21 10:39:31', '2023-09-27 23:06:37'),
(2, '1695278650.jpg', 'Dec. 23th, 2024', 'Startup vs corporate: What job suits you best?xx', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-09-21 10:44:10', '2023-09-21 10:49:47'),
(5, '1695717287.jpg', 'Jun. 23th, 2025', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-09-26 12:34:47', '2023-09-26 12:34:47'),
(9, '1695720630.jpg', 'Jun. 23th, 2023', 'Don’t assume your user data in the cloud is safe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel', 'Read more', '2023-09-26 13:30:30', '2023-09-26 13:30:30'),
(12, '1696708702.jpg', 'Mar. 25th, 2024', 'Thought you loved Python? Wait until you meet Rust', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-07 23:58:22', '2023-10-07 23:58:22'),
(13, '1696708744.jpg', 'Apr. 14th, 2023', 'Startup vs corporate: What job suits you best?xx', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.', 'Read more', '2023-10-07 23:59:04', '2023-10-07 23:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9bh3UiiJL8fYBiixJV49i7V2fXHC5JchgSYBgOtL', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZlRodVl0akpkZndwaEVEZVJ6R2c3ZGduRzFnM0xxUGdXWGxGR2pFZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWFpCT2pNVjJLbDNtVzJHNy9MWG93dXUvdm1CTGxKeUc5Ry95UkdBbkN5eW1ETktDa1JSUlMiO30=', 1696880366);

-- --------------------------------------------------------

--
-- Table structure for table `top_abouts`
--

CREATE TABLE `top_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_abouts`
--

INSERT INTO `top_abouts` (`id`, `image`, `heading`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(2, '1696318320.jpg', 'Resources for makers and creatives', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Read more', '2023-10-03 11:32:00', '2023-10-03 11:32:00'),
(4, '1696318998.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Read more', '2023-10-03 11:43:18', '2023-10-03 11:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rayhan', 'rayhan@gmail.com', NULL, '$2y$10$r1QEKawVosgdYH3UNvWLL.m4A39yywCff8SdrJhi1QUizrx50VFnq', NULL, NULL, NULL, NULL, '2023-09-23 21:08:11', '2023-09-23 21:08:11'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$XZBOjMV2Kl3mW2G7/LXowuu/vmBLlJyG9G/yRGAnCyymDNKCkRRRS', NULL, NULL, NULL, NULL, '2023-10-09 18:05:29', '2023-10-09 18:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_bottom_rights`
--
ALTER TABLE `about_bottom_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_post_grids`
--
ALTER TABLE `about_post_grids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_teams`
--
ALTER TABLE `about_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_team_headings`
--
ALTER TABLE `about_team_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_lefts`
--
ALTER TABLE `bottom_lefts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_grids`
--
ALTER TABLE `business_grids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_pages`
--
ALTER TABLE `business_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_popular_posts`
--
ALTER TABLE `b_popular_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_popular_posts`
--
ALTER TABLE `c_popular_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_recent_posts`
--
ALTER TABLE `footer_recent_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_heroes`
--
ALTER TABLE `home_heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_politics`
--
ALTER TABLE `home_politics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_travel`
--
ALTER TABLE `home_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `left_businesses`
--
ALTER TABLE `left_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `left_cultures`
--
ALTER TABLE `left_cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `politics_lefts`
--
ALTER TABLE `politics_lefts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_popular_posts`
--
ALTER TABLE `p_popular_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right_businesses`
--
ALTER TABLE `right_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right_cultures`
--
ALTER TABLE `right_cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `top_abouts`
--
ALTER TABLE `top_abouts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_bottom_rights`
--
ALTER TABLE `about_bottom_rights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_post_grids`
--
ALTER TABLE `about_post_grids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_teams`
--
ALTER TABLE `about_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `about_team_headings`
--
ALTER TABLE `about_team_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bottom_lefts`
--
ALTER TABLE `bottom_lefts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_grids`
--
ALTER TABLE `business_grids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_pages`
--
ALTER TABLE `business_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `b_popular_posts`
--
ALTER TABLE `b_popular_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_popular_posts`
--
ALTER TABLE `c_popular_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_recent_posts`
--
ALTER TABLE `footer_recent_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_heroes`
--
ALTER TABLE `home_heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_politics`
--
ALTER TABLE `home_politics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_travel`
--
ALTER TABLE `home_travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `left_businesses`
--
ALTER TABLE `left_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `left_cultures`
--
ALTER TABLE `left_cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `politics_lefts`
--
ALTER TABLE `politics_lefts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_popular_posts`
--
ALTER TABLE `p_popular_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `right_businesses`
--
ALTER TABLE `right_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `right_cultures`
--
ALTER TABLE `right_cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `top_abouts`
--
ALTER TABLE `top_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
