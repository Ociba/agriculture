-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 12:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `statement` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `google` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `user_id`, `title`, `statement`, `image`, `facebook`, `twitter`, `google`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'It’s no secret that the digital industry is booming. from exciting startups to global brands, to the new companies are reaching booming as agencies, responding to the new possibilities available. however, the industry is exciting fast becoming over heaving with golobal life agencies offering similar services.', 'Avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter con sequences that are extremely painful again anyone', 'tomatoes.jpg', 'ocibajames@yahoo.com', 'ocibajames.twitter', 'ocibajames@gmail.com', 'active', '2020-05-25 04:09:07', '2020-05-25 04:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `breed` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id`, `user_id`, `breed`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Local', 'active', '2020-05-25 04:09:49', '2020-05-25 04:09:49'),
(2, 9, 'Exotic', 'active', '2020-05-25 04:09:49', '2020-05-25 04:09:49'),
(3, 9, 'Dual-purpose', 'active', '2020-05-25 04:09:49', '2020-05-25 04:09:49'),
(4, 9, 'Cross', 'active', '2020-05-25 04:09:49', '2020-05-25 04:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Dry and Threshed', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(2, 9, 'Bullock', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(3, 9, 'Heifers', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(4, 9, 'Packed', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(5, 9, 'young ones', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(6, 9, 'Fresh', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(7, 9, 'Dry', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(8, 9, 'injection', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(9, 9, 'oral', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(10, 9, 'piglets', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(11, 9, 'both male & Female', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(12, 9, 'Male', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(13, 9, 'Female', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(14, 9, 'Big', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(15, 9, 'Medium', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(16, 9, 'Small', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(18, 9, 'Browlers', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(19, 9, 'layers', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(20, 9, 'Beef', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(21, 9, 'Freshiers', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(22, 9, 'Dry and not Threshed', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(23, 9, 'seedlings', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(24, 9, 'seeds', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(25, 9, 'Spraying pump', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(26, 9, 'roasted', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(27, 9, 'fried', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21'),
(28, 9, 'boiled', 'active', '2020-05-25 04:10:21', '2020-05-25 04:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `comment` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `status` enum('active','deleted','approve') NOT NULL DEFAULT 'approve',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ociba Esther Atim', 'atimesther@gmail.com', 'I thank you for this system it has helped us a lot for selling our products', 'bg_3.jpg.jpg', 'active', '2020-05-15 19:41:28', '2020-05-15 16:41:28'),
(2, 'ociba james', 'ocibajames@gmail.com', 'We shall respond to all messages as soon as we receive. We appreciate your effort', 'james ociba.PNG', 'active', '2020-05-15 20:20:06', '2020-05-15 17:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `conscents`
--

CREATE TABLE `conscents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `declaration` varchar(191) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conscents`
--

INSERT INTO `conscents` (`id`, `user_id`, `item_id`, `role_id`, `declaration`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 5, 'I declare that in case of sick,blind animal is discovered price will be cut down by 5% or the animal will not be sold.', 'active', '2020-04-23 12:07:16', '2020-04-23 12:07:16'),
(2, 9, 3, 5, 'I declare the sheep i am selling are free from any disease in case of any problem i will stand for it', 'active', '2020-05-25 04:11:06', '2020-05-25 04:11:06'),
(5, 4, 2, 7, 'I declare i am selling the right size of fish and approved by Fisheries officer', 'active', '2020-04-23 12:07:41', '2020-04-23 12:07:41'),
(7, 9, 4, 5, 'This is to confirm that the details provided are true.', 'active', '2020-05-27 11:37:25', '2020-05-27 11:37:25'),
(8, 7, 7, 9, 'This is the truth on the animals iam going to sell', 'active', '2020-05-27 08:48:24', '2020-05-27 08:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `county` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `county`, `created_at`, `updated_at`) VALUES
(1, 'Kiboga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(2, 'Bujumba', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(3, 'Kyamuswa', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(4, 'Bamunanika', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(5, 'Katikamu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(6, 'Bukomansimbi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(7, 'Bukoto', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(8, 'Kyazanga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(9, 'Kalungu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(10, 'Masaka Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(11, 'Butambala', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(12, 'Gomba', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(13, 'Mawokota', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(14, 'Buwekula', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(15, 'Kassanda', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(16, 'Buikwe', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(17, 'Buvuma Islands', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(18, 'Mukono', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(19, 'Nakifuma', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(20, 'Buruli', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(21, 'Kakuuto', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(22, 'Kooki', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(23, 'Kyotera', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(24, 'Lwemiyaga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(25, 'Mawogola', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(26, 'Bbaale', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(27, 'Ntenjeru', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(28, 'Busiro', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(29, 'Entebbe Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(30, 'Kyadondo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(31, 'Kabula', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(32, 'Busujju', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(33, 'Mityana', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(34, 'Nakaseke', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(35, 'Bukooli', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(36, 'Samia-Bugwe', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(37, 'Bugweri', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(38, 'Kigulu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(39, 'Luuka', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(40, 'Butembe', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(41, 'Jinja Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(42, 'Kagoma', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(43, 'Budiope', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(44, 'Bugabula', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(45, 'Buzaaya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(46, 'Kween', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(47, 'Tingey', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(48, 'Usuk', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(49, 'Kumi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(50, 'Ngora', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(51, 'Bungokho', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(52, 'Mbale Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(53, 'Butebo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(54, 'Kibuku', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(55, 'Pallisa', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(56, 'Kasilo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(57, 'Serere', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(58, 'Soroti', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(59, 'Soroti Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(60, 'Tororo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(61, 'Tororo Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(62, 'West Budama(kisoko)', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(63, 'Kaberamaido', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(64, 'Kalaki', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(65, 'Bunya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(66, 'Budadiri', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(67, 'Bulambuli', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(68, 'Amuria', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(69, 'Kapelebyong', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(70, 'Budaka', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(71, 'Manjiya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(72, 'Bukedea', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(73, 'Kongasis', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(74, 'Bunyole', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(75, 'Bulamogi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(76, 'Bubulo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(77, 'Busiki', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(78, 'East Moyo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(79, 'Kole', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(80, 'Kwania', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(81, 'Maruzi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(82, 'Arua Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(83, 'Ayivu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(84, 'Madi-okollo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(85, 'Vurra', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(86, 'Aswa', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(87, 'Gulu Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(88, 'Omoro', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(89, 'Chua', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(90, 'Lamwo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(91, 'Jie', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(92, 'Erute', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(93, 'Lira Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(94, 'Moroto', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(95, 'Otuke', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(96, 'Bokora', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(97, 'Matheniko', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(98, 'Moroto Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(99, 'Obongi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(100, 'West Moyo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(101, 'Jonam', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(102, 'Okoro', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(103, 'Padyere', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(104, 'Chekwii', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(105, 'Pian', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(106, 'Pokot', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(107, 'Aruu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(108, 'Agago', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(109, 'Aringa', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(110, 'Labwor', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(111, 'Kioga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(112, 'Kilak', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(113, 'Nwoya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(114, 'Dokolo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(115, 'Dodoth', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(116, 'Koboko', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(117, 'Oyam', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(118, 'Maracha', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(119, 'Terego', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(120, 'Bwamba', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(121, 'Ntoroko', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(122, 'Buhweju', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(123, 'Bunyaruguru', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(124, 'Igara', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(125, 'Ruhinda', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(126, 'Sheema', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(127, 'Bugahya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(128, 'Buhaguzi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(129, 'Kabale Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(130, 'Ndorwa', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(131, 'Rubanda', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(132, 'Rukiga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(133, 'Bunyangabu', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(134, 'Burahya', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(135, 'Fort Portal Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(136, 'Bukonjo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(137, 'Busongora', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(138, 'Bugangaizi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(139, 'Buyaga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(140, 'Buyanja', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(141, 'Bufumbira', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(142, 'Bujenje', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(143, 'Buruuli', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(144, 'Kibanda', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(145, 'Kashari', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(146, 'Mbarara Municipality', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(147, 'Rwampara', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(148, 'Kajara', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(149, 'Ruhaama', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(150, 'Rushenyi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(151, 'Rubabo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(152, 'Rujumbura', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(153, 'Kibale', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(154, 'Kitagwenda', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(155, 'Kinkiizi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(156, 'Kyaka', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(157, 'Mwenge', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(158, 'Bukanga', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(159, 'Isingiro', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(160, 'Kazo', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(161, 'Nyabushozi', '2020-05-21 15:22:49', '2020-05-21 15:22:49'),
(162, 'oditel', '2020-05-21 18:31:30', '2020-05-21 15:31:30'),
(163, 'bombo', '2020-05-24 19:46:25', '2020-05-24 19:46:25'),
(164, 'Kampala', '2020-05-31 03:42:48', '2020-05-31 03:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `user_id`, `day`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Sunday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(2, 9, 'Monday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(3, 9, 'Tuesday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(4, 9, 'Wednesday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(5, 9, 'Thursday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(6, 9, 'Friday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(7, 9, 'Saturday', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35'),
(8, 9, 'Daily', 'active', '2020-05-25 04:11:35', '2020-05-25 04:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `disease_name` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `user_id`, `disease_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Bird Flue', 'active', '2020-05-25 04:12:02', '2020-05-25 04:12:02'),
(2, 9, 'Foot and Mouth', 'active', '2020-05-25 04:12:02', '2020-05-25 04:12:02'),
(3, 9, 'Swine Fever', 'active', '2020-05-25 04:12:02', '2020-05-25 04:12:02'),
(4, 9, 'cough', 'active', '2020-05-25 04:12:02', '2020-05-25 04:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `user_id`, `district`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Buikwe', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(2, 9, 'Bukomansimbi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(3, 9, 'Butambala', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(4, 9, 'Buvuma', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(5, 9, 'Gomba', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(6, 9, 'Kalangala', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(7, 9, 'Kalungu', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(8, 9, 'Kampala', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(9, 9, 'Kayunga', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(10, 9, 'Kiboga', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(11, 9, 'Kyankwanzi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(12, 9, 'Luweero', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(13, 9, 'Lwengo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(14, 9, 'Lyantonde', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(15, 9, 'Masaka', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(16, 9, 'Mityana', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(17, 9, 'Mpigi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(18, 9, 'Mubende', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(19, 9, 'Mukono', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(20, 9, 'Nakaseke', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(21, 9, 'Nakasongola', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(22, 9, 'Rakai', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(23, 9, 'Sembabule', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(24, 9, 'Wakiso', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(25, 9, 'Amuria', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(26, 9, 'Budaka', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(27, 9, 'Bududa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(28, 9, 'Bugiri', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(29, 9, 'Bukedea', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(30, 9, 'Bukwa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(31, 9, 'Bulambuli', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(32, 9, 'Busia', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(33, 9, 'Butaleja', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(34, 9, 'Buyende', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(35, 9, 'Iganga', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(36, 9, 'Jinja', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(37, 9, 'Kaberamaido', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(38, 9, 'Kaliro', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(39, 9, 'Kamuli', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(40, 9, 'Kapchorwa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(41, 9, 'Katakwi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(42, 9, 'Kibuku', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(43, 9, 'Kumi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(44, 9, 'Kween', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(45, 9, 'Luuka', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(46, 9, 'Manafwa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(47, 9, 'Mayuge', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(48, 9, 'Mbale', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(49, 9, 'Namayingo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(50, 9, 'Namutumba', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(51, 9, 'Ngora', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(52, 9, 'Pallisa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(53, 9, 'Serere', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(54, 9, 'Sironko', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(55, 9, 'Soroti', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(56, 9, 'Tororo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(57, 9, 'Abim', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(58, 9, 'Adjumani', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(59, 9, 'Agago', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(60, 9, 'Alebtong', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(61, 9, 'Amolatar', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(62, 9, 'Amudat', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(63, 9, 'Amuru', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(64, 9, 'Apac', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(65, 9, 'Arua', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(66, 9, 'Dokolo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(67, 9, 'Gulu', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(68, 9, 'Kaabong', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(69, 9, 'Kitgum', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(70, 9, 'Koboko', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(71, 9, 'Kole', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(72, 9, 'Kotido', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(73, 9, 'Lamwo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(74, 9, 'Lira', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(75, 9, 'Maracha', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(76, 9, 'Moroto', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(77, 9, 'Moyo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(78, 9, 'Nakapiripirit', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(79, 9, 'Napak', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(80, 9, 'Nebbi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(81, 9, 'Nwoya', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(82, 9, 'Otuke', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(83, 9, 'Oyam', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(84, 9, 'Pader', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(85, 9, 'Yumbe', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(86, 9, 'Zombo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(87, 9, 'Buhweju', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(88, 9, 'Buliisa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(89, 9, 'Bundibugyo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(90, 9, 'Bushenyi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(91, 9, 'Hoima', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(92, 9, 'Ibanda', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(93, 9, 'Isingiro', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(94, 9, 'Kabale', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(95, 9, 'Kabarole', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(96, 9, 'Kamwenge', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(97, 9, 'Kanungu', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(98, 9, 'Kasese', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(99, 9, 'Kibaale', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(100, 9, 'Kiruhura', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(101, 9, 'Kiryandongo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(102, 9, 'Kisoro', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(103, 9, 'Kyegegwa', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(104, 9, 'Kyenjojo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(105, 9, 'Masindi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(106, 9, 'Mbarara', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(107, 9, 'Mitooma', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(108, 9, 'Ntoroko', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(109, 9, 'Ntungamo', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(110, 9, 'Rubirizi', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(111, 9, 'Rukungiri', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(112, 9, 'Sheema', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(113, 9, 'Kapelebyong', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(114, 9, 'Kalaki', 'active', '2020-05-25 04:12:27', '2020-05-25 04:12:27'),
(115, 9, 'Bugweri', 'active', '2020-06-06 05:47:53', '2020-06-06 05:47:53'),
(116, 9, 'Bunyangabo', 'active', '2020-06-06 05:47:53', '2020-06-06 05:47:53'),
(117, 9, 'Butebo', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(118, 9, 'Kagadi', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(119, 9, 'Kakumiro', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(120, 9, 'Kasanda', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(121, 9, 'Karenga', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(122, 9, 'Kazo', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(123, 9, 'Kikuube', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(124, 9, 'Kitagwenda', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(125, 9, 'Kwania', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(126, 9, 'Kyenjojo', 'active', '2020-06-06 05:55:39', '2020-06-06 05:55:39'),
(127, 9, 'Kyotera', 'active', '2020-06-06 06:02:22', '2020-06-06 06:02:22'),
(128, 9, 'Madi', 'active', '2020-06-06 06:03:20', '2020-06-06 06:03:20'),
(129, 9, 'Mayuge', 'active', '2020-06-06 06:03:20', '2020-06-06 06:03:20'),
(130, 9, 'Nabilatuk', 'active', '2020-06-06 06:05:37', '2020-06-06 06:05:37'),
(131, 9, 'Namisindwa', 'active', '2020-06-06 06:05:37', '2020-06-06 06:05:37'),
(132, 9, 'Obongi', 'active', '2020-06-06 06:07:05', '2020-06-06 06:07:05'),
(133, 9, 'Omoro', 'active', '2020-06-06 06:07:05', '2020-06-06 06:07:05'),
(134, 9, 'Pakwach', 'active', '2020-06-06 06:08:09', '2020-06-06 06:08:09'),
(135, 9, 'Rubanda', 'active', '2020-06-06 06:08:09', '2020-06-06 06:08:09'),
(136, 9, 'Rukiga', 'active', '2020-06-06 06:09:51', '2020-06-06 06:09:51'),
(137, 9, 'Rwampara', 'active', '2020-06-06 06:09:51', '2020-06-06 06:09:51'),
(138, 9, 'Kapir', 'active', '2020-06-06 08:52:46', '2020-06-06 08:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(191) NOT NULL,
  `phone_number_1` varchar(191) NOT NULL,
  `phone_number_2` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `district_id`, `names`, `phone_number_1`, `phone_number_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 57, 'Dr. Oscar Burton Okengo', '0772996147', '0773016670', 'active', '2020-06-06 11:26:23', '2020-06-06 08:26:23'),
(2, 9, 58, 'Dr. Okello N.G. David', '0772375183', 'N/A', 'active', '2020-06-06 11:27:37', '2020-06-06 11:27:37'),
(3, 9, 59, 'Dr. Oneka Paul', '0773282850', 'N/A', 'active', '2020-06-06 11:27:44', '2020-06-06 11:27:44'),
(4, 9, 60, 'Dr. Noki Charles', '0772673509', 'N/A', 'active', '2020-06-06 11:27:50', '2020-06-06 11:27:50'),
(5, 9, 61, 'Dr. Ebong Tamim', '0772671066', '0750367556', 'active', '2020-06-06 11:31:23', '2020-06-06 11:31:23'),
(6, 9, 62, 'Dr. Kaziro Michael', '0782529503', '0751529503', 'active', '2020-06-06 11:31:16', '2020-06-06 11:31:16'),
(7, 9, 25, 'Dr. Cheli Peter', '0772669878', '0752644814', 'active', '2020-06-06 11:31:05', '2020-06-06 11:31:05'),
(8, 9, 63, 'Dr. Okwonga Batulumayo', '0772555041', 'N/A', 'active', '2020-06-06 11:28:27', '2020-06-06 11:28:27'),
(9, 9, 64, 'Dr. Olobo Moses', '0784067089', 'N/A', 'active', '2020-06-06 11:28:37', '2020-06-06 11:28:37'),
(10, 9, 65, 'Dr. Willy Nguma', '0779772377', 'N/A', 'active', '2020-06-06 11:28:47', '2020-06-06 11:28:47'),
(11, 9, 26, 'Dr. Owori Peter', '0772638352', 'N/A', 'active', '2020-06-06 11:28:54', '2020-06-06 11:28:54'),
(12, 9, 27, 'Dr. Okoth John Vincent', '0782656322', 'N/A', 'active', '2020-06-06 11:29:02', '2020-06-06 11:29:02'),
(13, 9, 28, ' Dr. Mangeni Jackson W.N', '0772672149', 'N/A', 'active', '2020-06-06 11:29:09', '2020-06-06 11:29:09'),
(14, 9, 115, ' Dr. Kalange Muhamudu', '0776838447', 'N/A', 'active', '2020-06-06 11:29:15', '2020-06-06 11:29:15'),
(15, 9, 87, 'Dr. Baterana Dismas', '0772667117', 'N/A', 'active', '2020-06-06 11:29:27', '2020-06-06 11:29:27'),
(16, 9, 1, ' Dr. Mwanje Gerald', '0782627631', '0704925971', 'active', '2020-06-06 11:30:55', '2020-06-06 11:30:55'),
(17, 9, 29, 'Dr. Ongelech Francis', '0772614199', '0704614199', 'active', '2020-06-06 11:30:44', '2020-06-06 11:30:44'),
(18, 9, 2, 'Dr. G.W. Sekanwagi', '0772374391', 'N/A', 'active', '2020-06-06 11:29:47', '2020-06-06 11:29:47'),
(19, 9, 30, 'Dr. Chelangat Henry', '0777603739', '0782242706', 'active', '2020-06-06 11:30:37', '2020-06-06 11:30:37'),
(20, 9, 31, 'Dr. Sakwa Benard Hillam', '0772987483', 'N/A', 'active', '2020-06-06 11:30:10', '2020-06-06 11:30:10'),
(21, 9, 88, 'Dr. Mubiru Rashid', '0772611536', '0751611536', 'active', '2020-06-06 11:30:30', '2020-06-06 11:30:30'),
(22, 9, 89, 'Dr. Ndyanabaisi Samson', '0774681995', 'N/A', 'active', '2020-06-06 11:31:35', '2020-06-06 11:31:35'),
(23, 9, 116, 'Dr. Basariza Ephraim', '0772987735', 'N/A', 'active', '2020-06-06 11:31:41', '2020-06-06 11:31:41'),
(24, 9, 90, 'Dr. Natukunda Roberts', '0772675800', '0702678882/0751675800', 'active', '2020-06-06 11:31:57', '2020-06-06 11:31:57'),
(25, 9, 32, 'Dr. Barasa Patrick', '0772346867', 'N/A', 'active', '2020-06-06 11:32:06', '2020-06-06 11:32:06'),
(26, 9, 33, 'Dr. Pakasi Daniel Nalapa', '0782360705', '0701581227', 'active', '2020-06-06 11:32:31', '2020-06-06 11:32:31'),
(27, 9, 3, 'Dr. Serwano Kafeero', '0782392828', '0704392828', 'active', '2020-06-06 11:32:43', '2020-06-06 11:32:43'),
(28, 9, 117, 'Dr.Kauta Moses', '0772687296', '0752513543', 'active', '2020-06-06 11:32:56', '2020-06-06 11:32:56'),
(29, 9, 4, ' Dr. Ssemirembe Richard', '0772563625', '0704125504', 'active', '2020-06-06 11:33:13', '2020-06-06 11:33:13'),
(30, 9, 34, 'Dr. George Mangeni Otebero', '0772649529', 'N/A', 'active', '2020-06-06 11:33:19', '2020-06-06 11:33:19'),
(31, 9, 66, 'Dr. Richard Enyang', '0752356075', '0784749091', 'active', '2020-06-06 11:33:34', '2020-06-06 11:33:34'),
(32, 9, 5, 'Dr. Kaddu Nsubuga Edward', '0772850124', '0750809721', 'active', '2020-06-06 11:33:47', '2020-06-06 11:33:47'),
(33, 9, 67, 'Opio Alfred', '0773167665', 'N/A', 'active', '2020-06-06 11:33:57', '2020-06-06 11:33:57'),
(34, 9, 91, 'Dr. Ndorwa Patrick', '0782373925', 'N/A', 'active', '2020-06-06 11:34:03', '2020-06-06 11:34:03'),
(35, 9, 92, 'Dr. Arinaitwe Hillary', '0782314228', 'N/A', 'active', '2020-06-06 11:34:11', '2020-06-06 11:34:11'),
(36, 9, 35, 'Dr. Baligeya Moses', '0772427131', 'N/A', 'active', '2020-06-06 11:34:18', '2020-06-06 11:34:18'),
(37, 9, 93, 'Dr. Bruhan Kasozi', '0752598184', 'N/A', 'active', '2020-06-06 11:34:27', '2020-06-06 11:34:27'),
(38, 9, 36, 'Dr. Nahamya Flourence', '0772454568', 'N/A', 'active', '2020-06-06 11:34:34', '2020-06-06 11:34:34'),
(39, 9, 68, 'Dr. Logwee John Branda', '0782291665', 'N/A', 'active', '2020-06-06 11:34:43', '2020-06-06 11:34:43'),
(40, 9, 94, 'Dr. Kabagambe Bernard', '0782665031', '0702665031', 'active', '2020-06-06 11:35:29', '2020-06-06 11:35:29'),
(41, 9, 95, 'Dr. Dean Tugume Kusiimakwe', '0773448927', 'N/A', 'active', '2020-06-06 11:35:36', '2020-06-06 11:35:36'),
(42, 9, 37, 'Dr. Okello David Nelson', '0787632956', 'N/A', 'active', '2020-06-06 11:35:58', '2020-06-06 11:35:58'),
(43, 9, 118, 'Dr. M Martien Maate', '0782478923', 'N/A', 'active', '2020-06-06 11:36:05', '2020-06-06 11:36:05'),
(44, 9, 114, 'Dr. Ocoma Francis', '0752203476', '0786717075', 'active', '2020-06-06 11:36:18', '2020-06-06 11:36:18'),
(45, 9, 6, 'Dr. Muwanga Edward', '0772319018', '0757876216', 'active', '2020-06-06 11:36:31', '2020-06-06 11:36:31'),
(46, 9, 38, 'Dr. Okello David Enyamu', '0772438141', '0758186816', 'active', '2020-06-06 11:36:47', '2020-06-06 11:36:47'),
(47, 9, 7, 'Dr. Ssimbwa Henry', '0752314395', '0706400266', 'active', '2020-06-06 11:37:06', '2020-06-06 11:37:06'),
(48, 9, 119, 'Dr. Tusiime Brian', '0771812242', '0753812243', 'active', '2020-06-06 11:37:20', '2020-06-06 11:37:20'),
(49, 9, 8, 'Dr. Ahimbisibwe Emilian', '0772429371', 'N/A', 'active', '2020-06-06 11:37:27', '2020-06-06 11:37:27'),
(50, 9, 39, 'Dr. Kuunya James Oweikanga', '0772577120', '0752554524', 'active', '2020-06-06 11:37:39', '2020-06-06 11:37:39'),
(51, 9, 96, 'Dr. Mbago Paul', '0787223996', 'N/A', 'active', '2020-06-06 11:38:02', '2020-06-06 11:38:02'),
(52, 9, 97, 'Dr. Tumwesigye Aloysius', '0775550106', '07750663981', 'active', '2020-06-06 11:38:14', '2020-06-06 11:38:14'),
(53, 9, 40, 'Dr. Chelangat Jackson G', '0782655120', '0751097598', 'active', '2020-06-06 11:38:26', '2020-06-06 11:38:26'),
(54, 9, 113, 'Dr. Omayo Charles', '0770753460', 'N/A', 'active', '2020-06-06 11:38:34', '2020-06-06 11:38:34'),
(55, 9, 120, 'Dr. Buyondo Siraje', '0772632680', 'N/A', 'active', '2020-06-06 11:38:42', '2020-06-06 11:38:42'),
(56, 9, 98, 'Dr. Kalule Godfrey', '0772688616', '0752788616', 'active', '2020-06-06 11:38:53', '2020-06-06 11:38:53'),
(57, 9, 41, 'Dr. Arik Onyait', '0775554291', 'N/A', 'active', '2020-06-06 11:39:20', '2020-06-06 11:39:20'),
(58, 9, 121, '', '', 'N/A', 'active', '2020-06-06 06:44:31', '2020-06-06 06:44:31'),
(59, 9, 9, 'Dr.Kanakulya Ronald Mutebi', '0782330911', '0701877736', 'active', '2020-06-06 11:39:32', '2020-06-06 11:39:32'),
(60, 9, 122, 'Dr. Kiyemba Ronald', '0701632600', 'N/A', 'active', '2020-06-06 11:39:39', '2020-06-06 11:39:39'),
(61, 9, 99, 'Dr. Jimmy Muhwezi Bamanya', '0787306656', 'N/A', 'active', '2020-06-06 11:39:47', '2020-06-06 11:39:47'),
(62, 9, 10, 'Dr. Atikoro John', '0772897150', '0772428394', 'active', '2020-06-06 11:40:01', '2020-06-06 11:40:01'),
(63, 9, 42, 'Dr. Mubekete Fred', '0772667772', '0706508553', 'active', '2020-06-06 11:40:13', '2020-06-06 11:40:13'),
(64, 9, 123, 'Dr. Ruhweza Protus', '0772612353', '0773167638', 'active', '2020-06-06 11:40:25', '2020-06-06 11:40:25'),
(65, 9, 100, 'Dr. Asiimwe Grace', '0782672805', '0702', 'active', '2020-06-06 11:40:36', '2020-06-06 11:40:36'),
(66, 9, 101, 'Dr. Wabwire Tony', '0772494974', '0701038332', 'active', '2020-06-06 11:40:48', '2020-06-06 11:40:48'),
(67, 9, 102, 'Dr. Ngabo Herbert', '0774067386', 'N/A', 'active', '2020-06-06 11:40:55', '2020-06-06 11:40:55'),
(68, 9, 124, 'Dr. Bagaba Godwin', '0773952999', 'N/A', 'active', '2020-06-06 11:41:03', '2020-06-06 11:41:03'),
(69, 9, 69, 'Dr. Otto Alfred Best', '0782809459', '0772969939', 'active', '2020-06-06 11:41:13', '2020-06-06 11:41:13'),
(70, 9, 70, 'Dr. Ajuga Francis', '0750512600', 'N/A', 'active', '2020-06-06 11:41:20', '2020-06-06 11:41:20'),
(71, 9, 71, 'Dr. Agech Ambrose', '0772646432', 'N/A', 'active', '2020-06-06 11:41:27', '2020-06-06 11:41:27'),
(72, 9, 72, ' Dr. Mulondo Henry', '0782165915', 'N/A', 'active', '2020-06-06 11:41:41', '2020-06-06 11:41:41'),
(73, 9, 43, 'Dr. Micheal Okwalinga', '2.56783E+11', 'N/A', 'active', '2020-06-06 06:44:31', '2020-06-06 06:44:31'),
(74, 9, 125, 'Dr. Opeto Charles Dickens', '0782668337', 'N/A', 'active', '2020-06-06 11:41:50', '2020-06-06 11:41:50'),
(75, 9, 44, 'Dr. Yesho Nelson', '0776524799', '0752524799', 'active', '2020-06-06 11:42:03', '2020-06-06 11:42:03'),
(76, 9, 11, 'Dr. Achong Moses', '0772552660', '0757872422', 'active', '2020-06-06 11:42:31', '2020-06-06 11:42:31'),
(77, 9, 103, 'Dr. Patrick Balinda', '0772356028', 'N/A', 'active', '2020-06-06 11:42:39', '2020-06-06 11:42:39'),
(78, 9, 126, 'Dr. Kahuta Godfrey', '0772435857', 'N/A', 'active', '2020-06-06 11:42:49', '2020-06-06 11:42:49'),
(79, 9, 127, 'Dr. Lutaaya John', '0772694422', 'N/A', 'active', '2020-06-06 11:42:56', '2020-06-06 11:42:56'),
(80, 9, 73, 'Dr. Avudraga Stenely', '0782488565', 'N/A', 'active', '2020-06-06 11:43:02', '2020-06-06 11:43:02'),
(81, 9, 74, 'Dr.Ogwal Antthony', '0772921689', 'N/A', 'active', '2020-06-06 11:43:08', '2020-06-06 11:43:08'),
(82, 9, 45, 'Dr. Batyani James', '0782355068', 'N/A', 'active', '2020-06-06 11:43:14', '2020-06-06 11:43:14'),
(83, 9, 12, 'Dr. Lumbuye Aloysius', '0772445329', 'N/A', 'active', '2020-06-06 11:43:20', '2020-06-06 11:43:20'),
(84, 9, 13, 'Dr. Mukuye Samuel .M', '0772586564', '0702974132', 'active', '2020-06-06 11:43:32', '2020-06-06 11:43:32'),
(85, 9, 14, 'Dr. Bameka Ronald', '0772381599', '0702301325', 'active', '2020-06-06 11:43:45', '2020-06-06 11:43:45'),
(86, 9, 128, 'Okollo Dr. Onzima Charles', '0782177610', '0756832045', 'active', '2020-06-06 11:44:04', '2020-06-06 11:44:04'),
(87, 9, 46, 'Dr. Okello Denis Odongo', '0772883605', 'N/A', 'active', '2020-06-06 11:44:11', '2020-06-06 11:44:11'),
(88, 9, 75, 'Dr. Candia Alex', '0773813504', '0754977221', 'active', '2020-06-06 11:44:26', '2020-06-06 11:44:26'),
(89, 9, 15, 'Dr. Mukasa Kirumira', '0772 432862', '0704936001', 'active', '2020-06-06 11:44:32', '2020-06-06 11:44:32'),
(90, 9, 105, 'Dr. Ssebuguzi Fred', '0772949966', 'N/A', 'active', '2020-06-06 11:44:37', '2020-06-06 11:44:37'),
(91, 9, 129, 'Dr. Kasadha Mathias', '0776579754', '0771629255', 'active', '2020-06-06 11:44:51', '2020-06-06 11:44:51'),
(92, 9, 47, 'Dr. Wakimwere Phillip', '0786590075', '0703076653', 'active', '2020-06-06 11:45:04', '2020-06-06 11:45:04'),
(93, 9, 48, 'Dr. Mwebembezi William', '0772493143', 'N/A', 'active', '2020-06-06 11:45:11', '2020-06-06 11:45:11'),
(94, 9, 107, 'Dr. Muhumuza Godfrey', '0772369862', '0704054087', 'active', '2020-06-06 11:45:30', '2020-06-06 11:45:30'),
(95, 9, 16, 'Dr. Mugenyi Kiiza C.', '0772653418', '0701968307', 'active', '2020-06-06 11:45:48', '2020-06-06 11:45:48'),
(96, 9, 76, 'Dr. Moses Okino', '0773129994', 'N/A', 'active', '2020-06-06 11:45:57', '2020-06-06 11:45:57'),
(97, 9, 77, 'Dr. Richard Akule', '0782782399', 'N/A', 'active', '2020-06-06 11:46:05', '2020-06-06 11:46:05'),
(98, 9, 17, 'Dr. Kasibule Daniel', '0756745880', '0772587752', 'active', '2020-06-06 11:46:17', '2020-06-06 11:46:17'),
(99, 9, 18, 'Dr. Ssematimba Mukasa James', '0772472304', '0701249666', 'active', '2020-06-06 11:46:29', '2020-06-06 11:46:29'),
(100, 9, 19, 'Dr. Kiryabwire David', '0702944890', '0752635555', 'active', '2020-06-06 11:46:40', '2020-06-06 11:46:40'),
(101, 9, 130, 'Dr. Ssendagire David', '0772648831', '0702648831', 'active', '2020-06-06 11:47:10', '2020-06-06 11:47:10'),
(102, 9, 78, 'Dr. Arionga Simon Peter', '0772594031', 'N/A', 'active', '2020-06-06 11:47:16', '2020-06-06 11:47:16'),
(103, 9, 20, 'Dr. Kalanzi Stephen', '0782578968', 'N/A', 'active', '2020-06-06 11:47:23', '2020-06-06 11:47:23'),
(104, 9, 21, 'Dr. Sam Eswagu', '0772492821', '0704877991', 'active', '2020-06-06 11:47:35', '2020-06-06 11:47:35'),
(105, 9, 49, 'Dr. Kiyimba Godfrey', '0772695503', 'N/A', 'active', '2020-06-06 11:47:51', '2020-06-06 11:47:51'),
(107, 9, 131, 'Ongom Issac', '0773594269', 'N/A', 'active', '2020-06-06 11:47:56', '2020-06-06 11:47:56'),
(108, 9, 50, 'Dr. Ngago Bernard', '0702696926', '0778938852', 'active', '2020-06-06 11:48:16', '2020-06-06 11:48:16'),
(109, 9, 79, 'Dr. Kulume Mary Gorreti', '0772479948', 'N/A', 'active', '2020-06-06 11:48:23', '2020-06-06 11:48:23'),
(110, 9, 80, 'Dr. William Abedkane', '2.56773E+11', '0752906783', 'active', '2020-06-06 11:48:32', '2020-06-06 11:48:32'),
(111, 9, 51, 'Dr.John Opolot', '0772935817', 'N/A', 'active', '2020-06-06 11:48:37', '2020-06-06 11:48:37'),
(112, 9, 108, 'Dr. Bagonza Patrick Businge', '0774423508', '0754423508', 'active', '2020-06-06 11:48:46', '2020-06-06 11:48:46'),
(113, 9, 109, 'Dr. Yake Basulira', '0772465302', 'N/A', 'active', '2020-06-06 11:48:54', '2020-06-06 11:48:54'),
(114, 9, 81, 'Dr. Ukwir James', '0772663649', 'N/A', 'active', '2020-06-06 11:49:00', '2020-06-06 11:49:00'),
(115, 9, 132, 'Asilaza Leonard', '0772317917', 'N/A', 'active', '2020-06-06 11:49:06', '2020-06-06 11:49:06'),
(116, 9, 82, 'Dr. Anyuru Thomas', '0772887835', '0751966665', 'active', '2020-06-06 11:49:20', '2020-06-06 11:49:20'),
(117, 9, 83, 'Dr. Ogwal Tom', '0772321027', 'N/A', 'active', '2020-06-06 11:49:31', '2020-06-06 11:49:31'),
(118, 9, 133, 'Dr. Aliker Solomon', '0788219131', 'N/A', 'active', '2020-06-06 11:49:38', '2020-06-06 11:49:38'),
(119, 9, 84, 'Dr. Okeny Robert', '0772692238', 'N/A', 'active', '2020-06-06 11:49:44', '2020-06-06 11:49:44'),
(120, 9, 134, 'Dr. Canpara Robert', '0772855719', 'N/A', 'active', '2020-06-06 11:49:51', '2020-06-06 11:49:51'),
(121, 9, 52, 'Dr. Omaido WB', '0782496362', 'N/A', 'active', '2020-06-06 11:49:56', '2020-06-06 11:49:56'),
(122, 9, 22, 'Dr. Kizito Nsubuga Elias', '0701673714', '0772673714', 'active', '2020-06-06 11:50:14', '2020-06-06 11:50:14'),
(123, 9, 135, 'Dr. Katumba Hannington', '0777538911', '0752516340', 'active', '2020-06-06 11:50:23', '2020-06-06 11:50:23'),
(124, 9, 110, 'Dr. Mugaya Henry', '0772553390', 'N/A', 'active', '2020-06-06 11:50:28', '2020-06-06 11:50:28'),
(125, 9, 111, 'Dr. Ninsiima Johnson', '0772672798', 'N/A', 'active', '2020-06-06 11:50:39', '2020-06-06 11:50:39'),
(126, 9, 137, ' Dr. Begumisa Deogratias', '0772882831', 'N/A', 'active', '2020-06-06 11:50:45', '2020-06-06 11:50:45'),
(127, 9, 53, 'Dr. Amonya Collins', '0772920210', '0705055079', 'active', '2020-06-06 11:51:13', '2020-06-06 11:51:13'),
(128, 9, 112, 'Dr. Arnold Ezama', '0782898390', 'N/A', 'active', '2020-06-06 11:51:19', '2020-06-06 11:51:19'),
(129, 9, 54, 'Dr. Chekwurui Alfred', '0782037118', 'N/A', 'active', '2020-06-06 11:51:23', '2020-06-06 11:51:23'),
(130, 9, 55, 'Dr. Eyudu Patrick', '0772581630', 'N/A', 'active', '2020-06-06 11:51:31', '2020-06-06 11:51:31'),
(131, 9, 23, 'Dr. Ssali Angello', '0772384959', 'N/A', 'active', '2020-06-06 11:51:36', '2020-06-06 11:51:36'),
(132, 9, 56, 'Dr. Obbo Bonifance', '0782628320', '0754628320', 'active', '2020-06-06 11:51:48', '2020-06-06 11:51:48'),
(133, 9, 24, 'Dr. Kirembe Gerald', '0772471709', 'N/A', 'active', '2020-06-06 11:51:53', '2020-06-06 11:51:53'),
(134, 9, 85, 'Dr. Mukasa Matinda Neckyon', '0772352169', 'N/A', 'active', '2020-06-06 11:51:58', '2020-06-06 11:51:58'),
(135, 9, 136, 'Dr. Bukoosi Godfrey', '0782733654', 'N/A', 'active', '2020-06-06 11:52:04', '2020-06-06 11:52:04'),
(136, 9, 138, 'Ociba Aaron Ojinga', '0772996147', '0773016670', 'deleted', '2020-06-06 11:55:01', '2020-06-06 08:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_requests`
--

CREATE TABLE `doctors_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `conditions` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `status` enum('active','deleted','done') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_requests`
--

INSERT INTO `doctors_requests` (`id`, `user_id`, `product_id`, `district_id`, `county_id`, `village_id`, `conditions`, `number`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 66, 2, 2, 2, 'can not even it and it is almost dying', '2', 'tractor.jpg', 'active', '2020-05-25 04:12:56', '2020-05-25 04:12:56'),
(2, 9, 5, 1, 1, 1, 'Falling ears and saliva flue', '4', '02.jpg', 'active', '2020-05-25 04:12:56', '2020-05-25 04:12:56'),
(3, 9, 68, 25, 69, 425, 'Red eyes and flowing saliva', '2', '07.jpg', 'active', '2020-05-25 04:12:56', '2020-05-25 04:12:56'),
(4, 9, 3, 1, 9, 12, 'Falling ears and saliva flue', '15', 'basket3.jpg', 'active', '2020-05-25 04:32:47', '2020-05-25 04:32:47'),
(5, 9, 3, 1, 6, 6, 'Has standing fur and does not eat normally', '12', 'sheep.jpg', 'active', '2020-05-24 11:04:43', '2020-05-24 08:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `drug_name` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `user_id`, `drug_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 9, 'Dewormar', 'active', '2020-05-25 04:13:22', '2020-05-25 04:13:22'),
(3, 9, 'Norbook', 'active', '2020-05-25 04:13:22', '2020-05-25 04:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `problem` varchar(191) NOT NULL,
  `affected_number` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`id`, `user_id`, `role_id`, `district_id`, `county_id`, `village_id`, `product_id`, `problem`, `affected_number`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 5, 53, 57, 352, 1, 'Wounds and limping cattle', '100', 'cattle.JPG', 'active', '2020-05-25 20:31:07', '2020-05-25 17:31:07'),
(2, 9, 6, 1, 4, 6, 17, 'Drying and changes brown even when it is raining', '10', 'flowers.JPG', 'active', '2020-05-25 20:26:41', '2020-05-25 17:26:41'),
(3, 9, 6, 37, 64, 358, 26, 'floods', '120', 'fishing.JPG', 'active', '2020-05-25 17:36:48', '2020-05-25 17:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qualification` varchar(191) NOT NULL,
  `experience` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `qualification`, `experience`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Desgin_view.pdf', '1 Year', 'deleted', '2020-05-22 15:06:48', '2020-05-22 12:06:48'),
(3, 4, 'Sports Center _ Physical Fitness Solutions.pdf', '3years', 'active', '2020-04-18 07:19:49', '2020-04-18 07:19:49'),
(5, 9, 'Copy2jQuery-Tutorial.pdf', '7 years', 'active', '2020-05-25 04:13:59', '2020-05-25 04:13:59'),
(6, 7, 'lec18.pdf', '1 Year', 'active', '2020-05-21 17:43:38', '2020-05-21 17:43:38'),
(7, 6, 'this.pdf', '11 Months', 'active', '2020-05-21 20:02:12', '2020-05-21 20:02:12'),
(8, 7, 'Uganda _ Agriculture system.pdf', '15 months', 'deleted', '2020-05-22 15:06:35', '2020-05-22 12:06:35'),
(9, 7, 'amuge Eunice.pdf', '6 Months', 'deleted', '2020-05-22 15:06:41', '2020-05-22 12:06:41'),
(10, 9, 'Uganda_ Sacco system new.pdf', '15 months', 'deleted', '2020-05-25 04:13:59', '2020-05-25 04:13:59'),
(11, 9, 'amuge Eunice.pdf', '2 years', 'deleted', '2020-05-25 04:13:59', '2020-05-25 04:13:59'),
(12, 8, 'Proposal Memo.pdf', '1 Year', 'active', '2020-06-09 04:00:33', '2020-06-09 04:00:33'),
(13, 5, 'desktop app documentation.pdf', '6 Months', 'active', '2020-06-09 04:01:50', '2020-06-09 04:01:50'),
(14, 4, 'List of Villages and Parishes for Residual Elections July 2019 for Press.pdf', '11 Months', 'active', '2020-06-11 13:27:31', '2020-06-11 13:27:31'),
(15, 5, 'Fao.pdf', '11 Months', 'active', '2020-06-11 13:42:51', '2020-06-11 13:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `examination_treatments`
--

CREATE TABLE `examination_treatments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `signs_symptom_id` bigint(20) UNSIGNED NOT NULL,
  `weight_id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `drug_id` bigint(20) UNSIGNED NOT NULL,
  `week_id` bigint(20) UNSIGNED NOT NULL,
  `month_id` bigint(20) UNSIGNED NOT NULL,
  `bill` int(191) NOT NULL,
  `deposit` int(191) NOT NULL,
  `balance` int(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination_treatments`
--

INSERT INTO `examination_treatments` (`id`, `user_id`, `product_id`, `signs_symptom_id`, `weight_id`, `disease_id`, `drug_id`, `week_id`, `month_id`, `bill`, `deposit`, `balance`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, 4, 2, 3, 3, 3, 3, 1, 25000, 10000, 15000, 'active', '2020-05-25 04:14:29', '2020-05-25 04:14:29'),
(4, 9, 9, 1, 2, 2, 2, 1, 9, 15000, 5000, 10000, 'active', '2020-05-25 04:14:29', '2020-05-25 04:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `famers`
--

CREATE TABLE `famers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `famers`
--

INSERT INTO `famers` (`id`, `user_id`, `profile_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 3, 'active', '2020-05-25 04:15:04', '2020-05-25 04:15:04'),
(2, 9, 3, 'deleted', '2020-05-25 04:15:04', '2020-05-25 04:15:04'),
(3, 9, 3, 'deleted', '2020-05-25 04:15:04', '2020-05-25 04:15:04'),
(4, 4, 4, 'active', '2020-05-23 09:43:40', '2020-05-23 09:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `user_id`, `question`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Relationship Between seller And Buyer ?', 'active', '2020-05-25 04:15:23', '2020-05-25 04:15:23'),
(2, 9, 'How can i sell my items?', 'active', '2020-05-25 04:15:23', '2020-05-25 04:15:23'),
(3, 9, 'Is there some payment or not to be a member ?', 'active', '2020-05-25 04:15:23', '2020-05-25 04:15:23'),
(4, 9, 'How can access vetenary officer in my subcounty ?', 'active', '2020-05-25 04:15:23', '2020-05-25 04:15:23'),
(5, 9, 'Do we need to pay vet,agric,fisheries and forestry officers ?', 'active', '2020-05-25 04:15:23', '2020-05-25 04:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(191) NOT NULL,
  `farm_name` varchar(191) NOT NULL,
  `statement` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `user_id`, `district_id`, `county_id`, `village_id`, `activity`, `farm_name`, `statement`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 51, 50, 309, 'Rice Growing', 'Kapir Youth Rice Growing', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Syd-ney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas-sage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact origi-nal form, accompanied by English versions from the 1914 translation by H. Rackham.', 'project-thumb.jpg', 'active', '2020-05-25 04:15:47', '2020-05-25 04:15:47'),
(2, 9, 19, 158, 959, 'Tea Growing', 'Mukono Tea Plantation', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Syd-ney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas-sage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact origi-nal form, accompanied by English versions from the 1914 translation by H. Rackham.', 'farm7.JPG', 'active', '2020-05-25 04:15:47', '2020-05-25 04:15:47'),
(3, 9, 106, 4, 958, 'Tobacco Growing', 'Mbarara Tobacco Plantation', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Syd-ney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas-sage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact origi-nal form, accompanied by English versions from the 1914 translation by H. Rackham.', 'farm3.JPG', 'active', '2020-05-25 04:15:47', '2020-05-25 04:15:47'),
(4, 9, 24, 29, 861, 'Flowers Growing', 'Horticulture Farm', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Syd-ney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas-sage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact origi-nal form, accompanied by English versions from the 1914 translation by H. Rackham.', 'flowers.JPG', 'active', '2020-05-25 04:15:47', '2020-05-25 04:15:47'),
(5, 9, 113, 162, 422, 'Planting trees', 'Trees Plantation', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Syd-ney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum pas-sage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact origi-nal form, accompanied by English versions from the 1914 translation by H. Rackham.', 'tree farm.JPG', 'active', '2020-05-25 04:15:47', '2020-05-25 04:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) NOT NULL,
  `statement` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `user_id`, `heading`, `statement`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Animal Products', 'We can connect to sell and buy any animal(s) of any breed', '09.jpg', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14'),
(2, 9, 'Birds', 'These involve all the domestic birds of your choice', '07.jpg', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14'),
(3, 9, 'Crops', 'Fresh,dry,vegetables,grains,Fruits and many other type of crops', '05.jpg', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14'),
(4, 9, 'Fish', 'You can get all type of fish of recognized size', 'Fish.png', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14'),
(5, 9, 'Bee Keeping', 'We avail you with registered qalified doctors', '08.jpg', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14'),
(6, 9, 'All Types Of Feeds', 'Locate all the place you can get all the feeds for your Farm at farmers affordable price.We can deliver to your farm on agreed terms.', '02.png', 'active', '2020-05-25 04:16:14', '2020-05-25 04:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `feedback` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted','approve') NOT NULL DEFAULT 'approve',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `feedback`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ociba james', 'ocibajames@gmail.com', 'Great web application, then i would request you get for us even mobile app so that we can download to our phones otherwise Thanks!!', 'james ociba.PNG', 'active', '2020-05-19 20:35:26', '2020-05-19 20:35:26'),
(2, 'ojinga Aaron Ociba', 'ojingaaaron@gmail.com', 'Thanks alot! Last week i connect buyer who bought my Turkeys in a good price. I am so happy with this app innovation.', 'agric.jpg', 'active', '2020-06-08 20:43:06', '2020-06-08 20:43:06'),
(3, 'Ociba Esther Atim', 'atimesther@gmail.com', 'Thanks for the work done as far as Agriculture is concerned, please i am happy for that', 'drought.jpg', 'active', '2020-06-08 08:01:10', '2020-06-08 05:01:10'),
(4, 'Ociba Aaron Ojinga', 'ojingaaaron@gmail.com', 'Uganda Agriculture sector, Marketing,Advertising and Connecting Farmers', '220px-Australorp_Rooster.jpg', 'approve', '2020-06-08 06:55:20', '2020-06-08 06:55:20'),
(5, 'ociba james', 'ocibajames@gmail.com', 'I would like thanks for your positive comments for our application', 'boer-goats-resized-56a885723df78cf7729e87d2.webp', 'approve', '2020-06-08 03:59:26', '2020-06-08 03:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `feed_type` varchar(191) NOT NULL,
  `prescription` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `user_id`, `feed_type`, `prescription`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, 'layers Mash', 'A half kg for 5 Layers 3 times A day', 'active', '2020-05-25 04:16:42', '2020-05-25 04:16:42'),
(4, 9, 'Brick Ash', 'Ones a day for 45 Minutes', 'active', '2020-05-25 04:16:42', '2020-05-25 04:16:42'),
(5, 9, 'Browlers Mash', 'A 1 kg for 5 Layers 4 times a day', 'active', '2020-05-25 04:16:42', '2020-05-25 04:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `title`, `message`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Cow & Meat', 'Fresh Meat', 'blog-standard-2.jpg', 'active', '2020-05-25 04:17:03', '2020-05-25 04:17:03'),
(2, 9, 'Natural Vegetable', 'Vegetables Organic', 'cabbage.jpg', 'active', '2020-05-25 04:17:03', '2020-05-25 04:17:03'),
(3, 9, 'Fresh Rice', 'From Our Soil', 'gallery-3.jpg', 'active', '2020-05-25 04:17:03', '2020-05-25 04:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `breed_id` bigint(20) UNSIGNED NOT NULL,
  `weight_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `item_image` varchar(191) NOT NULL,
  `status` enum('available','finished','not available') NOT NULL DEFAULT 'available',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `product_id`, `breed_id`, `weight_id`, `district_id`, `county_id`, `village_id`, `category_id`, `price`, `number`, `item_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 51, 1, 3, 2, 2, 2, 7, 105000, '4', 'basket women.png', 'available', '2020-05-25 04:17:46', '2020-05-25 04:17:46'),
(2, 9, 3, 1, 3, 1, 1, 2, 15, 250000, '15', 'huddles.jpg', 'available', '2020-05-25 04:17:46', '2020-05-25 04:17:46'),
(3, 9, 1, 4, 17, 29, 72, 441, 21, 900000, '8', 'cows.JPG', 'available', '2020-05-24 10:33:16', '2020-05-24 07:33:16'),
(4, 7, 61, 1, 1, 2, 2, 2, 23, 2500, '1000', 'cricket2.jpg', 'available', '2020-05-28 08:52:50', '2020-05-28 08:52:50'),
(5, 9, 9, 1, 2, 55, 57, 349, 12, 25000, '20', 'omweso.jpg', 'available', '2020-05-25 04:17:46', '2020-05-25 04:17:46'),
(6, 9, 36, 1, 68, 51, 50, 309, 6, 1000, '1 acre', 'cane.JPG', 'available', '2020-05-24 10:23:52', '2020-05-24 07:23:52'),
(7, 4, 4, 1, 3, 2, 2, 2, 10, 70000, '20', 'sheep.jpg', 'available', '2020-05-27 12:07:54', '2020-05-27 12:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `market_products`
--

CREATE TABLE `market_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_products`
--

INSERT INTO `market_products` (`id`, `user_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Fresh Vegetables', 'veg.png', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(2, 9, 'Fresh Fruits', 'fruits.png', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(3, 9, 'Natural Honey', 'honey.PNG', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(4, 9, 'Tubers', 'store-item-3.png', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(5, 9, 'Chicken & Eggs', '07.jpg', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(6, 9, 'All Meat', 'services-3.png', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08'),
(7, 9, 'Fresh Milk', 'milk.png', 'active', '2020-05-25 04:18:08', '2020-05-25 04:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `status` enum('active','deleted','approve') NOT NULL DEFAULT 'approve',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ociba Aaron Ojinga', 'ojingaaaron@gmail.com', 'Thanking entire group', 'I would like to thankyou because i was able to sell my cows at a good price', 'deleted', '2020-06-08 07:47:13', '2020-06-08 04:47:13'),
(2, 'Ociba Aaron Ojinga', 'ojingaaaron@gmail.com', 'how to access system', 'i would like to market my items but when i try to login it shows an error', 'approve', '2020-06-08 03:22:08', '2020-06-08 03:22:08');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(19) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `user_id`, `month`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, '1 month', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(2, 9, '2 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(3, 9, '3 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(4, 9, '4 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(5, 9, '5 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(6, 9, '6 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(7, 9, '7 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(8, 9, '8 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(9, 9, '9 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(10, 9, '10 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(11, 9, '11 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(12, 9, '12 months', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34'),
(13, 9, '13 month', 'active', '2020-05-25 04:18:34', '2020-05-25 04:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `subject`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Hand machine for ploughing whch uses fuel', 'blog-1.jpg', 'active', '2020-05-25 04:18:55', '2020-05-25 04:18:55'),
(2, 9, 'Tractor for large farms of land and acres', 'tractor.jpg', 'active', '2020-05-25 04:18:55', '2020-05-25 04:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `user_id`, `title`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Business Strategy', '20', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15'),
(2, 9, 'Investment Planning', '05', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15'),
(3, 9, 'Financial Investment', '03', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15'),
(4, 9, 'Banking & Insurance', '30', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15'),
(5, 9, 'Free Consulting', '07', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15'),
(6, 9, 'Meet Our Team', '09', 'active', '2020-05-25 04:19:15', '2020-05-25 04:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ocibajames@gmail.com', '$2y$10$4OtEf93weJb7HORaMtfc7eNqhPiCcXa6DvAhx.VKBAHpDrGb7wToK', '2020-05-23 06:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Can view dashboard', 'active', '2020-04-19 08:56:48', '2020-04-19 08:56:48'),
(2, 'Can view users', 'active', '2020-04-19 08:01:51', '2020-04-19 08:01:51'),
(3, 'Can view registered users', 'active', '2020-04-19 08:01:51', '2020-04-19 08:01:51'),
(4, 'Can search user', 'active', '2020-04-19 08:01:51', '2020-04-19 08:01:51'),
(5, 'Can view user action', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(6, 'Can edit user', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(7, 'Can delete User', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(8, 'Can view employees', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(9, 'Can search Employees', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(10, 'Can add employee', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(11, 'Can see employees action', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(12, 'Can edit employee', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(13, 'Can delete employee', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(14, 'Can view profile', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(15, 'Can search profile', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(16, 'Can add profile', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(17, 'Can see profile action', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(18, 'Can edit profile', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(19, 'Can delete profile', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(20, 'Can view items', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(21, 'Can view products', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(22, 'Can search product', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(23, 'Can add product', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(24, 'Can see product action', 'active', '2020-04-19 08:01:52', '2020-04-19 08:01:52'),
(25, 'Can edit product', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(26, 'Can delete product', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(27, 'Can view breeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(28, 'Can search breed', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(29, 'Can add breed', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(30, 'Can see breed action', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(31, 'Can edit breed', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(32, 'Can delete breed', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(33, 'Can view categories', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(34, 'Can search category', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(35, 'Can add category', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(36, 'Can see Category action', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(37, 'Can edit category', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(38, 'Can delete category', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(39, 'Can view feeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(40, 'Can search feeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(41, 'Can add feeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(42, 'Can see feeds action', 'active', '2020-05-19 05:34:55', '2020-05-19 05:34:55'),
(43, 'Can edit feeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(44, 'Can delete feeds', 'active', '2020-04-19 08:01:53', '2020-04-19 08:01:53'),
(45, 'Can view sell and buy', 'active', '2020-04-19 09:36:42', '2020-04-19 09:36:42'),
(46, 'Can view market items', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(47, 'Can search items advertised', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(48, 'Can add item details', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(49, 'Can see item action', 'active', '2020-04-26 11:23:20', '2020-04-26 11:23:20'),
(50, 'Can edit item', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(51, 'Can delete item', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(52, 'Can view doctors request form', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(53, 'Can search doctors request', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(54, 'Can request for doctor', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(55, 'Can see doctors request action', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(56, 'Can edit doctors request', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(57, 'Can delete doctor request', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(58, 'Can view standard prices', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(59, 'Can search prices', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(60, 'Can add prices', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(61, 'Can see price action', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(62, 'Can edit price', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(63, 'Can delete price', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(64, 'Can view vetenery services', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(65, 'Can view signs and symptoms', 'active', '2020-04-19 08:01:54', '2020-04-19 08:01:54'),
(66, 'Can search signs and symptoms', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(67, 'Can add signs and symptoms', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(68, 'Can see signs and symptoms action', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(69, 'Can edit sign and symptom action', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(70, 'Can delete sign and symptom', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(71, 'Can view disease', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(72, 'Can search disease', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(73, 'Can add disease', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(74, 'Can see disease action', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(75, 'Can edit disease', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(76, 'Can delete disease', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(77, 'Can view pest', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(78, 'Can search pest', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(79, 'Can add pest', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(80, 'Can see pest action', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(81, 'Can edit pest', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(82, 'Can delete pest', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(83, 'Can view drugs', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(84, 'Can search drug', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(85, 'Can add drug', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(86, 'Can see drug action', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(87, 'Can edit drug', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(88, 'Can delete drug', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(89, 'Can view E & T', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(90, 'Can search E & T', 'active', '2020-04-19 08:01:55', '2020-04-19 08:01:55'),
(91, 'Can add E & T', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(92, 'Can see E & T action', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(93, 'Can edit E & T', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(94, 'Can delete E & T', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(95, 'Can view period', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(96, 'Can view months', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(97, 'Can search month', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(98, 'Can add month', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(99, 'Can see month action', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(100, 'Can edit month', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(101, 'Can delete month', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(102, 'Can view weeks', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(103, 'Can search week', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(104, 'Can add week', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(105, 'Can see week action', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(106, 'Can edit week', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(107, 'Can delete week', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(108, 'Can view weight', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(109, 'Can search weight', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(110, 'Can add weight', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(111, 'Can see weight action', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(112, 'Can edit weight', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(113, 'Can delete weight', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(114, 'Can view user account', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(115, 'Can view register user', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(116, 'Can view change password', 'active', '2020-04-19 08:01:56', '2020-04-19 08:01:56'),
(117, 'Can view Days', 'active', '2020-04-19 12:00:54', '2020-04-19 12:00:54'),
(118, 'Can search day', 'active', '2020-04-19 12:00:54', '2020-04-19 12:00:54'),
(119, 'Can add day', 'active', '2020-04-19 12:01:34', '2020-04-19 12:01:34'),
(120, 'Can see day action', 'active', '2020-04-19 12:01:34', '2020-04-19 12:01:34'),
(121, 'Can edit day', 'active', '2020-04-19 12:02:32', '2020-04-19 12:02:32'),
(122, 'Can delete day', 'active', '2020-04-19 12:02:32', '2020-04-19 12:02:32'),
(123, 'Can view Permit', 'active', '2020-04-20 12:30:56', '2020-04-20 12:30:56'),
(124, 'Can view Permit form', 'active', '2020-04-20 17:40:35', '2020-04-20 17:40:35'),
(125, 'Can view conscent', 'active', '2020-04-26 10:34:12', '2020-04-26 10:34:12'),
(126, 'Can view conscent form', 'active', '2020-04-26 11:27:58', '2020-04-26 11:27:58'),
(127, 'Can view front pages', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(128, 'Can view blog details', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(129, 'Can view comments', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(130, 'Can view messages', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(131, 'Can view faq', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(132, 'Can view farmers', 'active', '2020-05-12 17:34:56', '2020-05-12 17:34:56'),
(133, 'Can view features', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(134, 'Can view feedback', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(135, 'Can view gallery', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(136, 'Can view market products', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(137, 'Can view news', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(138, 'Can view others', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(139, 'Can view project gallery', 'active', '2020-05-12 17:39:35', '2020-05-12 17:39:35'),
(140, 'Can view recent news', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(141, 'Can view reply', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(142, 'Can view services', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(143, 'Can view we do service', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(144, 'Can view sponsors', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(145, 'Can view subscription', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(146, 'Can search blog details', 'active', '2020-05-12 17:45:36', '2020-05-12 17:45:36'),
(147, 'Can add blog detail', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(148, 'Can see blog action', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(149, 'Can edit blog', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(150, 'Can delete blog', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(151, 'Can search comment', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(152, 'Can see comment action', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(153, 'Can edit comment', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(154, 'Can delete comment', 'active', '2020-05-12 17:50:41', '2020-05-12 17:50:41'),
(155, 'Can search farmers', 'active', '2020-05-12 17:52:20', '2020-05-12 17:52:20'),
(156, 'Can add farmers', 'active', '2020-05-12 17:52:20', '2020-05-12 17:52:20'),
(157, 'Can see farmers action', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(158, 'Can edit farmers', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(159, 'Can delete farmers', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(160, 'Can search feature', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(161, 'Can add feature', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(162, 'Can see feature action', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(163, 'Can edit feature', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(164, 'Can delete feature', 'active', '2020-05-12 17:56:40', '2020-05-12 17:56:40'),
(165, 'Can search feedback', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(166, 'Can see feedback action', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(167, 'Can edit feedback', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(168, 'Can delete feedback', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(169, 'Can search gallery', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(170, 'Can add gallery', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(171, 'Can see gallery action', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(172, 'Can edit gallery', 'active', '2020-05-12 18:02:37', '2020-05-12 18:02:37'),
(173, 'Can delete gallery', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(174, 'Can search market products', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(175, 'Can add market products', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(176, 'Can see market products action', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(177, 'Can edit market products', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(178, 'Can delete market products', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(179, 'Can search message', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(180, 'Can see message action', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(181, 'Can delete message', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(182, 'Can search news', 'active', '2020-05-12 18:10:05', '2020-05-12 18:10:05'),
(183, 'Can add news', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(184, 'Can see news action', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(185, 'Can edit news', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(186, 'Can delete news', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(187, 'Can search others', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(188, 'Can add others', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(189, 'Can see others action', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(190, 'Can edit others', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(191, 'Can delete others', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(192, 'Can search project gallery', 'active', '2020-05-12 18:18:35', '2020-05-12 18:18:35'),
(193, 'Can add project gallery', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(194, 'Can see projeci-gallery action', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(195, 'Can edit project gallery', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(196, 'Can delete project gallery', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(197, 'Can search question', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(198, 'Can add question', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(199, 'Can see question action', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(200, 'Can edit question', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(201, 'Can delete question', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(202, '\'Can search recent', 'active', '2020-05-12 18:27:04', '2020-05-12 18:27:04'),
(203, 'Can add recent news', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(204, 'Can see recent news action', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(205, 'Can edit recent news', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(206, 'Can delete recent news', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(207, 'Can search reply', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(208, 'Can add reply', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(209, 'Can see reply action', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(210, 'Can delete reply', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(211, 'Can search service we do', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(212, 'Can add service we do', 'active', '2020-05-12 18:34:36', '2020-05-12 18:34:36'),
(213, 'Can see do action', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(214, 'Can edit service we do', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(215, 'Can delete service we do', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(216, 'Can search service', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(217, 'Can add service', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(218, 'Can see service action', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(219, 'Can edit service', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(220, 'Can delete service', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(221, 'Can search sponsor', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(222, 'Can add sponsor', 'active', '2020-05-12 18:43:10', '2020-05-12 18:43:10'),
(223, 'Can see sponsor action', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(224, 'Can edit sponsor', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(225, 'Can delete sponsor', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(226, 'Can search subscription', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(227, 'Can see subscription action', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(228, 'Can delete subscription', 'active', '2020-05-12 18:47:02', '2020-05-12 18:47:02'),
(229, 'Can see created by name', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(230, 'Can see users created by', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(231, 'Can see profile created by', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(232, 'Can see profile createdby name', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(233, 'Can see product createdby name', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(234, 'Can see product created by', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(235, 'Can see breed createdby name', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(236, 'Can see breed created by', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(237, 'Can see Category created by name', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(238, 'Can see Category created by', 'active', '2020-05-18 22:26:04', '2020-05-18 22:26:04'),
(239, 'Can see feeds created by name', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(240, 'Can see feeds created by', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(241, 'Can see signs and symptoms created by name', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(242, 'Can see signs and symptoms created by', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(243, 'Can see disease created by name', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(244, 'Can see disease created by', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(245, 'Can see pest created by name', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(246, 'Can see pest created by', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(247, 'Can see drug created by name', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(248, 'Can see drug created by', 'active', '2020-05-18 23:08:11', '2020-05-18 23:08:11'),
(249, 'Can see E & T created by name', 'active', '2020-05-18 23:12:58', '2020-05-18 23:12:58'),
(250, 'Can see E & T created by', 'active', '2020-05-18 23:12:58', '2020-05-18 23:12:58'),
(252, 'Can delete farms', 'active', '2020-05-21 09:58:37', '2020-05-21 09:58:37'),
(253, 'Can edit farms', 'active', '2020-05-21 09:58:37', '2020-05-21 09:58:37'),
(254, 'Can see farm action', 'active', '2020-05-21 09:58:37', '2020-05-21 09:58:37'),
(255, 'Can add farm', 'active', '2020-05-21 09:58:37', '2020-05-21 09:58:37'),
(256, 'Can search farm', 'active', '2020-05-21 09:58:37', '2020-05-21 09:58:37'),
(257, 'Can view farms', 'active', '2020-05-21 10:02:25', '2020-05-21 10:02:25'),
(258, 'Can view location', 'active', '2020-05-21 15:50:16', '2020-05-21 15:50:16'),
(259, 'Can view counties', 'active', '2020-05-21 15:50:16', '2020-05-21 15:50:16'),
(260, 'Can view districts', 'active', '2020-05-21 15:50:16', '2020-05-21 15:50:16'),
(261, 'Can view sub-counties', 'active', '2020-05-21 15:50:16', '2020-05-21 15:50:16'),
(262, 'Can delete district', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(263, 'Can edit district', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(264, 'Can see district createdby name', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(265, 'Can see district action', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(266, 'Can see district created by', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(267, 'Can add district', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(268, 'Can search district', 'active', '2020-05-21 16:23:06', '2020-05-21 16:23:06'),
(269, 'Can delete county', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(270, 'Can edit county', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(271, 'Can see county createdby name', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(272, 'Can see county action', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(273, 'Can see county created by', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(274, 'Can add county', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(275, 'Can search county', 'active', '2020-05-21 18:10:45', '2020-05-21 18:10:45'),
(276, 'Can search village', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(277, 'Can add village', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(278, 'Can see village created by', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(279, 'Can see village action', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(280, 'Can edit village', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(281, 'Can delete village', 'active', '2020-05-21 19:16:40', '2020-05-21 19:16:40'),
(282, 'Can view emrgency report', 'active', '2020-05-24 15:28:29', '2020-05-24 15:28:29'),
(283, 'Can search emergency', 'active', '2020-05-24 18:16:10', '2020-05-24 18:16:10'),
(284, 'Can add emergency', 'active', '2020-05-24 18:16:10', '2020-05-24 18:16:10'),
(285, 'Can see emergency action', 'active', '2020-05-24 18:16:10', '2020-05-24 18:16:10'),
(286, 'Can edit emergency', 'active', '2020-05-24 18:16:10', '2020-05-24 18:16:10'),
(287, 'Can delete emergency', 'active', '2020-05-24 18:16:10', '2020-05-24 18:16:10'),
(289, 'Can see print Permit', 'active', '2020-05-26 09:56:11', '2020-05-26 09:56:11'),
(290, 'Can view reports', 'active', '2020-05-27 12:38:16', '2020-05-27 12:38:16'),
(291, 'Can view doctors treatment records', 'active', '2020-05-27 12:38:16', '2020-05-27 12:38:16'),
(292, 'Can search vet reports', 'active', '2020-05-27 14:20:01', '2020-05-27 14:20:01'),
(293, 'Can add vet reports', 'active', '2020-05-27 14:20:01', '2020-05-27 14:20:01'),
(294, 'Can see vet reports action', 'active', '2020-05-27 14:21:06', '2020-05-27 14:21:06'),
(295, 'Can edit vet reports', 'active', '2020-05-27 14:21:06', '2020-05-27 14:21:06'),
(296, 'Can delete vet reports', 'active', '2020-05-27 14:21:39', '2020-05-27 14:21:39'),
(297, 'Can view documentation', 'active', '2020-05-28 07:09:43', '2020-05-28 07:09:43'),
(298, 'Can view veterinary doctors', 'active', '2020-06-06 07:00:09', '2020-06-06 07:00:09'),
(299, 'Can delete doctor', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(300, 'Can edit doctor', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(301, 'Can see doctor createdby name', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(302, 'Can see doctor action', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(303, 'Can see doctor created by', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(304, 'Can add doctor', 'active', '2020-06-06 08:35:38', '2020-06-06 08:35:38'),
(305, 'Can search doctors', 'active', '2020-06-06 10:25:07', '2020-06-06 10:25:07'),
(306, 'Can view notification messages', 'active', '2020-06-08 08:08:00', '2020-06-08 08:08:00'),
(307, 'Can view notifications', 'active', '2020-06-08 08:08:00', '2020-06-08 08:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_roles`
--

CREATE TABLE `permission_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','deleted','suspended') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_roles`
--

INSERT INTO `permission_roles` (`id`, `role_id`, `permission_id`, `created_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(2, 1, 2, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(4, 1, 4, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(5, 1, 5, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(6, 1, 6, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(7, 1, 7, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(8, 1, 8, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(9, 1, 9, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(10, 1, 10, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(11, 1, 11, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(12, 1, 12, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(13, 1, 13, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(14, 1, 14, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(15, 1, 15, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(16, 1, 16, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(20, 1, 20, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(21, 1, 21, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(22, 1, 22, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(23, 1, 23, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(24, 1, 24, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(25, 1, 25, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(26, 1, 26, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(27, 1, 27, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(28, 1, 28, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(29, 1, 29, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(30, 1, 30, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(31, 1, 31, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(32, 1, 32, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(33, 1, 33, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(34, 1, 34, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(35, 1, 35, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(36, 1, 36, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(37, 1, 37, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(38, 1, 38, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(39, 1, 39, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(40, 1, 40, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(41, 1, 41, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(42, 1, 42, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(43, 1, 43, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(44, 1, 44, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(45, 1, 45, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(46, 1, 46, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(47, 1, 47, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(48, 1, 48, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(49, 1, 49, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(50, 1, 50, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(51, 1, 51, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(52, 1, 52, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(53, 1, 53, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(54, 1, 54, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(55, 1, 55, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(56, 1, 56, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(57, 1, 57, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(58, 1, 58, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(59, 1, 59, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(60, 1, 60, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(61, 1, 61, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(62, 1, 62, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(63, 1, 63, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(64, 1, 64, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(65, 1, 65, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(66, 1, 66, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(67, 1, 67, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(68, 1, 68, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(69, 1, 69, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(70, 1, 70, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(71, 1, 71, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(72, 1, 72, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(73, 1, 73, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(74, 1, 74, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(75, 1, 75, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(76, 1, 76, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(77, 1, 77, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(78, 1, 78, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(80, 1, 80, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(81, 1, 81, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(82, 1, 82, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(83, 1, 83, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(84, 1, 84, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(85, 1, 85, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(86, 1, 86, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(87, 1, 87, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(88, 1, 88, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(89, 1, 89, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(90, 1, 90, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(91, 1, 91, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(92, 1, 92, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(93, 1, 93, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(94, 1, 94, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(95, 1, 95, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(96, 1, 96, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(97, 1, 97, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(98, 1, 98, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(99, 1, 99, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(100, 1, 100, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(101, 1, 101, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(102, 1, 102, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(103, 1, 103, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(104, 1, 104, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(105, 1, 105, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(106, 1, 106, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(107, 1, 107, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(108, 1, 108, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(109, 1, 109, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(110, 1, 110, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(111, 1, 111, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(112, 1, 112, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(113, 1, 113, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(114, 1, 114, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(115, 1, 115, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(116, 1, 116, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(117, 1, 121, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(118, 1, 122, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(119, 1, 117, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(120, 1, 118, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(121, 1, 119, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(122, 1, 120, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(123, 1, 123, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(125, 4, 20, 5, 'active', '2020-04-26 06:26:39', '2020-04-26 06:26:39'),
(126, 4, 14, 5, 'active', '2020-04-26 06:27:21', '2020-04-26 06:27:21'),
(127, 4, 15, 5, 'active', '2020-04-26 06:27:21', '2020-04-26 06:27:21'),
(128, 4, 16, 5, 'active', '2020-04-26 06:27:21', '2020-04-26 06:27:21'),
(130, 4, 2, 5, 'active', '2020-04-26 06:27:58', '2020-04-26 06:27:58'),
(132, 4, 4, 5, 'active', '2020-04-26 06:27:58', '2020-04-26 06:27:58'),
(133, 4, 21, 5, 'active', '2020-04-26 06:28:38', '2020-04-26 06:28:38'),
(134, 4, 22, 5, 'active', '2020-04-26 06:28:38', '2020-04-26 06:28:38'),
(135, 4, 27, 5, 'active', '2020-04-26 06:28:38', '2020-04-26 06:28:38'),
(136, 4, 28, 5, 'active', '2020-04-26 06:28:38', '2020-04-26 06:28:38'),
(137, 4, 33, 5, 'active', '2020-04-26 06:29:11', '2020-04-26 06:29:11'),
(138, 4, 34, 5, 'active', '2020-04-26 06:29:11', '2020-04-26 06:29:11'),
(139, 4, 39, 5, 'active', '2020-04-26 06:29:12', '2020-04-26 06:29:12'),
(140, 4, 40, 5, 'active', '2020-04-26 06:29:12', '2020-04-26 06:29:12'),
(141, 4, 45, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(142, 4, 46, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(143, 4, 47, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(144, 4, 48, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(145, 4, 49, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(146, 4, 50, 5, 'active', '2020-04-26 06:30:16', '2020-04-26 06:30:16'),
(147, 4, 52, 5, 'active', '2020-04-26 06:31:52', '2020-04-26 06:31:52'),
(148, 4, 53, 5, 'active', '2020-04-26 06:31:52', '2020-04-26 06:31:52'),
(149, 4, 54, 5, 'active', '2020-04-26 06:31:52', '2020-04-26 06:31:52'),
(150, 4, 58, 5, 'active', '2020-04-26 06:31:52', '2020-04-26 06:31:52'),
(151, 4, 59, 5, 'active', '2020-04-26 06:31:52', '2020-04-26 06:31:52'),
(152, 4, 64, 5, 'active', '2020-04-26 06:32:32', '2020-04-26 06:32:32'),
(153, 4, 65, 5, 'active', '2020-04-26 06:32:32', '2020-04-26 06:32:32'),
(154, 4, 66, 5, 'active', '2020-04-26 06:32:32', '2020-04-26 06:32:32'),
(155, 4, 71, 5, 'active', '2020-04-26 06:33:09', '2020-04-26 06:33:09'),
(156, 4, 72, 5, 'active', '2020-04-26 06:33:10', '2020-04-26 06:33:10'),
(157, 4, 77, 5, 'active', '2020-04-26 06:33:10', '2020-04-26 06:33:10'),
(158, 4, 78, 5, 'active', '2020-04-26 06:33:10', '2020-04-26 06:33:10'),
(160, 4, 83, 5, 'active', '2020-04-26 06:33:54', '2020-04-26 06:33:54'),
(161, 4, 84, 5, 'active', '2020-04-26 06:33:54', '2020-04-26 06:33:54'),
(162, 4, 89, 5, 'active', '2020-04-26 06:33:54', '2020-04-26 06:33:54'),
(163, 4, 90, 5, 'active', '2020-04-26 06:33:54', '2020-04-26 06:33:54'),
(164, 4, 95, 5, 'active', '2020-04-26 06:34:28', '2020-04-26 06:34:28'),
(165, 4, 96, 5, 'active', '2020-04-26 06:34:28', '2020-04-26 06:34:28'),
(166, 4, 97, 5, 'active', '2020-04-26 06:34:28', '2020-04-26 06:34:28'),
(167, 4, 102, 5, 'active', '2020-04-26 06:35:00', '2020-04-26 06:35:00'),
(168, 4, 103, 5, 'active', '2020-04-26 06:35:00', '2020-04-26 06:35:00'),
(169, 4, 108, 5, 'active', '2020-04-26 06:35:00', '2020-04-26 06:35:00'),
(170, 4, 109, 5, 'active', '2020-04-26 06:35:00', '2020-04-26 06:35:00'),
(171, 4, 116, 5, 'active', '2020-04-26 06:35:40', '2020-04-26 06:35:40'),
(172, 4, 117, 5, 'active', '2020-04-26 06:35:40', '2020-04-26 06:35:40'),
(173, 4, 118, 5, 'active', '2020-04-26 06:35:40', '2020-04-26 06:35:40'),
(174, 4, 123, 5, 'active', '2020-04-26 06:36:06', '2020-04-26 06:36:06'),
(178, 4, 51, 5, 'active', '2020-04-26 08:26:12', '2020-04-26 08:26:12'),
(179, 4, 125, 5, 'active', '2020-04-26 08:26:53', '2020-04-26 08:26:53'),
(180, 4, 126, 5, 'active', '2020-04-26 08:26:53', '2020-04-26 08:26:53'),
(181, 2, 127, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(182, 2, 128, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(183, 2, 129, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(184, 2, 130, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(185, 2, 131, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(186, 2, 132, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(187, 2, 133, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(188, 2, 134, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(189, 2, 135, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(190, 2, 136, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(191, 2, 137, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(192, 2, 138, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(193, 2, 139, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(194, 2, 140, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(195, 2, 141, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(196, 2, 142, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(197, 2, 143, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(198, 2, 144, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(199, 2, 145, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(200, 2, 146, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(201, 2, 147, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(202, 2, 148, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(203, 2, 149, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(204, 2, 150, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(205, 2, 151, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(206, 2, 152, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(207, 2, 153, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(208, 2, 154, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(209, 2, 155, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(210, 2, 156, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(211, 2, 157, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(212, 2, 158, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(213, 2, 159, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(214, 2, 160, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(215, 2, 161, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(216, 2, 162, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(217, 2, 163, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(218, 2, 164, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(219, 2, 165, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(220, 2, 166, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(221, 2, 167, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(222, 2, 168, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(223, 2, 169, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(224, 2, 170, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(225, 2, 171, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(226, 2, 172, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(227, 2, 173, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(228, 2, 174, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(229, 2, 175, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(230, 2, 176, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(231, 2, 177, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(232, 2, 178, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(233, 2, 179, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(234, 2, 180, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(235, 2, 181, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(236, 2, 182, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(237, 2, 183, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(238, 2, 184, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(239, 2, 185, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(240, 2, 186, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(241, 2, 187, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(242, 2, 188, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(243, 2, 189, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(244, 2, 190, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(245, 2, 191, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(246, 2, 192, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(247, 2, 193, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(248, 2, 194, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(249, 2, 195, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(250, 2, 196, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(251, 2, 197, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(252, 2, 198, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(253, 2, 199, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(254, 2, 200, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(255, 2, 201, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(256, 2, 202, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(257, 2, 203, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(258, 2, 204, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(259, 2, 205, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(260, 2, 206, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(261, 2, 207, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(262, 2, 208, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(263, 2, 209, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(264, 2, 210, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(265, 2, 211, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(266, 2, 212, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(267, 2, 213, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(268, 2, 214, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(269, 2, 215, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(270, 2, 216, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(271, 2, 217, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(272, 2, 218, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(273, 2, 219, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(274, 2, 220, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(275, 2, 221, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(276, 2, 222, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(277, 2, 223, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(278, 2, 224, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(279, 2, 225, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(280, 2, 226, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(281, 2, 227, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(282, 2, 228, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(283, 1, 127, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(284, 1, 128, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(285, 1, 129, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(286, 1, 130, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(287, 1, 131, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(288, 1, 132, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(289, 1, 133, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(290, 1, 134, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(291, 1, 135, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(292, 1, 136, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(293, 1, 137, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(294, 1, 138, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(295, 1, 139, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(296, 1, 140, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(297, 1, 141, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(298, 1, 142, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(299, 1, 143, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(300, 1, 144, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(301, 1, 145, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(302, 1, 146, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(303, 1, 147, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(304, 1, 148, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(305, 1, 149, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(306, 1, 150, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(307, 1, 151, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(308, 1, 152, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(309, 1, 153, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(310, 1, 154, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(311, 1, 155, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(312, 1, 156, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(313, 1, 157, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(314, 1, 158, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(315, 1, 159, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(316, 1, 160, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(317, 1, 161, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(318, 1, 162, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(319, 1, 163, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(320, 1, 164, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(321, 1, 165, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(322, 1, 166, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(323, 1, 167, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(324, 1, 168, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(325, 1, 169, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(326, 1, 170, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(327, 1, 171, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(328, 1, 172, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(329, 1, 173, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(330, 1, 174, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(331, 1, 175, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(332, 1, 176, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(333, 1, 177, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(334, 1, 178, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(335, 1, 179, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(336, 1, 180, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(337, 1, 181, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(338, 1, 182, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(339, 1, 183, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(340, 1, 184, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(341, 1, 185, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(342, 1, 186, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(343, 1, 187, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(344, 1, 188, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(345, 1, 189, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(346, 1, 190, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(347, 1, 191, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(348, 1, 192, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(349, 1, 193, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(350, 1, 194, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(351, 1, 195, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(352, 1, 196, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(353, 1, 197, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(354, 1, 198, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(355, 1, 199, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(356, 1, 200, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(357, 1, 201, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(358, 1, 202, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(359, 1, 203, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(360, 1, 204, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(361, 1, 205, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(362, 1, 206, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(363, 1, 207, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(364, 1, 208, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(365, 1, 209, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(366, 1, 210, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(367, 1, 211, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(368, 1, 212, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(369, 1, 213, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(370, 1, 214, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(371, 1, 215, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(372, 1, 216, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(373, 1, 217, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(374, 1, 218, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(375, 1, 219, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(376, 1, 220, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(377, 1, 221, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(378, 1, 222, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(379, 1, 223, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(380, 1, 224, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(381, 1, 225, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(382, 1, 226, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(383, 1, 227, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(384, 1, 228, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(385, 4, 17, 7, 'active', '2020-05-18 07:54:12', '2020-05-18 07:54:12'),
(386, 4, 18, 7, 'active', '2020-05-18 07:54:12', '2020-05-18 07:54:12'),
(388, 1, 229, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(389, 1, 230, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(390, 1, 231, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(391, 1, 232, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(392, 1, 233, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(393, 1, 234, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(394, 1, 235, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(395, 1, 236, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(396, 1, 237, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(397, 1, 238, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(398, 1, 239, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(399, 1, 240, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(400, 1, 241, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(401, 1, 242, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(402, 1, 243, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(403, 1, 244, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(404, 1, 245, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(405, 1, 246, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(406, 1, 247, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(407, 1, 248, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(408, 1, 249, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(409, 1, 250, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(411, 1, 252, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(412, 1, 253, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(413, 1, 254, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(414, 1, 255, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(415, 1, 256, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(416, 1, 257, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(417, 1, 258, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(418, 1, 259, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(419, 1, 260, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(420, 1, 261, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(421, 1, 262, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(422, 1, 263, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(423, 1, 264, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(424, 1, 265, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(425, 1, 266, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(426, 1, 267, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(427, 1, 268, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(428, 1, 269, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(429, 1, 270, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(430, 1, 271, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(431, 1, 272, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(432, 1, 273, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(433, 1, 274, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(434, 1, 275, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(435, 1, 276, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(436, 1, 277, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(437, 1, 278, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(438, 1, 279, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(439, 1, 280, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(440, 1, 281, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(441, 1, 79, 9, 'active', '2020-05-25 04:20:18', '2020-05-25 04:20:18'),
(442, 1, 3, 9, 'active', '2020-05-24 08:50:16', '2020-05-24 08:50:16'),
(443, 1, 282, 9, 'active', '2020-05-24 12:29:29', '2020-05-24 12:29:29'),
(444, 1, 283, 9, 'active', '2020-05-24 15:18:41', '2020-05-24 15:18:41'),
(445, 1, 284, 9, 'active', '2020-05-24 15:18:41', '2020-05-24 15:18:41'),
(446, 1, 285, 9, 'active', '2020-05-24 15:18:41', '2020-05-24 15:18:41'),
(447, 1, 286, 9, 'active', '2020-05-24 15:18:41', '2020-05-24 15:18:41'),
(448, 1, 287, 9, 'active', '2020-05-24 15:18:41', '2020-05-24 15:18:41'),
(449, 1, 289, 7, 'active', '2020-05-26 06:59:58', '2020-05-26 06:59:58'),
(450, 1, 125, 9, 'active', '2020-05-27 05:46:22', '2020-05-27 05:46:22'),
(451, 1, 126, 9, 'active', '2020-05-27 05:46:23', '2020-05-27 05:46:23'),
(452, 1, 290, 9, 'active', '2020-05-27 09:42:12', '2020-05-27 09:42:12'),
(453, 1, 291, 9, 'active', '2020-05-27 09:42:12', '2020-05-27 09:42:12'),
(454, 1, 293, 9, 'active', '2020-05-27 11:26:45', '2020-05-27 11:26:45'),
(455, 1, 294, 9, 'active', '2020-05-27 11:26:45', '2020-05-27 11:26:45'),
(456, 1, 295, 9, 'active', '2020-05-27 11:26:46', '2020-05-27 11:26:46'),
(457, 1, 296, 9, 'active', '2020-05-27 11:26:46', '2020-05-27 11:26:46'),
(458, 1, 292, 9, 'active', '2020-05-27 11:27:14', '2020-05-27 11:27:14'),
(459, 4, 290, 9, 'active', '2020-05-27 16:42:56', '2020-05-27 16:42:56'),
(460, 4, 291, 9, 'active', '2020-05-27 16:42:57', '2020-05-27 16:42:57'),
(461, 4, 292, 9, 'active', '2020-05-27 16:42:57', '2020-05-27 16:42:57'),
(462, 1, 297, 9, 'active', '2020-05-28 04:11:23', '2020-05-28 04:11:23'),
(463, 4, 297, 9, 'active', '2020-05-28 04:12:17', '2020-05-28 04:12:17'),
(464, 1, 124, 9, 'active', '2020-05-29 10:39:40', '2020-05-29 10:39:40'),
(465, 4, 282, 9, 'active', '2020-05-29 12:17:33', '2020-05-29 12:17:33'),
(466, 4, 283, 9, 'active', '2020-05-29 12:17:33', '2020-05-29 12:17:33'),
(467, 1, 298, 9, 'active', '2020-06-06 04:01:02', '2020-06-06 04:01:02'),
(468, 1, 299, 9, 'active', '2020-06-06 05:39:39', '2020-06-06 05:39:39'),
(469, 1, 300, 9, 'active', '2020-06-06 05:39:39', '2020-06-06 05:39:39'),
(470, 1, 301, 9, 'active', '2020-06-06 05:39:39', '2020-06-06 05:39:39'),
(471, 1, 302, 9, 'active', '2020-06-06 05:39:39', '2020-06-06 05:39:39'),
(472, 1, 303, 9, 'active', '2020-06-06 05:40:09', '2020-06-06 05:40:09'),
(473, 1, 304, 9, 'active', '2020-06-06 05:40:09', '2020-06-06 05:40:09'),
(474, 1, 305, 9, 'active', '2020-06-06 07:28:02', '2020-06-06 07:28:02'),
(475, 1, 306, 9, 'active', '2020-06-08 05:09:13', '2020-06-08 05:09:13'),
(476, 1, 307, 9, 'active', '2020-06-08 05:09:14', '2020-06-08 05:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `permits`
--

CREATE TABLE `permits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `sellers_name` varchar(191) NOT NULL,
  `contact` varchar(191) NOT NULL,
  `buyers_name` varchar(191) NOT NULL,
  `buyers_contact` varchar(191) NOT NULL,
  `sellers_ID` varchar(191) NOT NULL,
  `buyer_ID` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `Number_of_items` varchar(191) NOT NULL,
  `local_council_one_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `vet_officer` varchar(191) NOT NULL,
  `vet_contact` varchar(191) NOT NULL,
  `item_image` varchar(191) NOT NULL,
  `from_destination` varchar(191) NOT NULL,
  `to_destination` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permits`
--

INSERT INTO `permits` (`id`, `user_id`, `product_id`, `role_id`, `sellers_name`, `contact`, `buyers_name`, `buyers_contact`, `sellers_ID`, `buyer_ID`, `description`, `Number_of_items`, `local_council_one_name`, `phone_number`, `vet_officer`, `vet_contact`, `item_image`, `from_destination`, `to_destination`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 4, 5, 'ociba james', '0775401793', 'Lwanga Moses', '0775401794', 'CM123456789E', 'MC987654321B', 'The animals were bought and heathy, Seller was paid', '25', 'Ojebe simon', '0775401795', 'Ojinga Aaron', '0775401795', 'james ociba.png', 'Ngora', 'Busia', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(2, 9, 2, 5, 'Onyala Bonny', '0775401794', 'Ociba James', '0775401797', 'CB09812345657E', 'ME9876543210B', 'Bought goats ,Paid seller and allow him travel', '50', 'Ociba Flavious', '0783067833', 'Oliba Moses', '0775401790', 'ugcranes.jpg', 'Ngora', 'Lira', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(3, 9, 53, 7, 'Alaun Ivan', '0775602354', 'Okello Patrict', '0775401799', 'BM4323456789E', 'PO987654321B', 'it is allowed to travel  and cleared', '2', 'Omasuge Richard', '0776913451', 'Opio Samuel', '0775401794', 'huddles.jpg', 'Ngora', 'Abim', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(4, 9, 66, 6, 'ociba james', '0775401793', 'Tracter Dealers', '0775401794', 'CM123456789E', 'MC987654321B', 'Good as new', '25', 'Omasuge Richard', '0775497865', 'Ojinga Aaron', '0775401795', 'aisu.PNG', 'Ngora', 'Busia', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(5, 9, 32, 6, 'Onyala Bonny', '0775401794', 'Ociba James', '0775401799', 'CB09812345657E', 'PO987654321B', 'If you want more, Come again', '50', 'Ociba Flavious', '0783067831', 'Opio Samuel', '0775401794', 'aisu.PNG', 'Gulu', 'Abim', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(6, 9, 54, 5, 'Alaun Ivan', '0775401793', 'New B. Enterprizes', '0775401799', 'BM4323456789E', 'PO987654321B', 'Ever Fresh and Cool', '2', 'Ojebe simon', '0783067831', 'Oliba Moses', '0775401790', 'ayobo.PNG', 'Arua', 'Kotido', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(7, 9, 66, 6, 'ociba james', '0775401793', 'Lwanga Moses', '0775401794', 'CM123456789E', 'MC987654321B', 'Bought goats ,Paid seller and allow him travel', '25', 'Ojebe simon', '0775497865', 'Ojinga Aaron', '0775401795', 'aisu.PNG', 'Ngora', 'Kotido', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(8, 9, 66, 6, 'Onyala Bonny', '0776401793', 'Ociba James', '0775401794', 'CM123456789E', 'ME9876543210B', 'Bought goats ,Paid seller and allow him travel', '25', 'Ojebe simon', '0783067831', 'Ojinga Aaron', '0775401795', 'aisu.PNG', 'Ngora', 'Busia', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(9, 9, 55, 5, 'Onyala Bonny', '0775401794', 'Ociba James', '0775401799', 'CB09812345657E', 'ME9876543210B', 'I\'ve just succeeded', '50', 'Omasuge Richard', '0775497865', 'Oliba Moses', '0775401794', 'aisu.PNG', 'Ngora', 'Abim', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(10, 9, 4, 5, 'Omare Denis', '0775602354', 'Ocom Cipriano', '0775401797', 'CM1234567669E', 'ME987654329960B', 'Allow him to transport his pigs, they are cleared', '50', 'ociba james', '0775401793', 'Ameo Agnes', '0775401790', 'olympics.jpg', 'Ntugambo', 'Kisoro', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(11, 9, 67, 8, 'Ssemakula julius', '0775602354', 'Kintu Mark', '0775401794', 'CM213456789E', 'TS987654321M', 'He has license for charcoal transportation and selling.', '90 bags', 'Jowary Musutafa', '0783067831', 'Loduk Anthony', '0775401727', 'cricket2.jpg', 'Katakwii', 'Kampala', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07'),
(12, 9, 6, 5, 'Okiria Ben', '0773203040', 'Masaba Anthony', '0793151617', 'TR4567812094M', 'BV0981237645M', 'Transport donkeys and he has cleared everything', '5', 'Akurut Anna', '0776453221', 'Egitu Patrick', '0705345672', 'tennis.PNG', 'Kaberemaido', 'Mbale', 'active', '2020-05-25 04:21:07', '2020-05-25 04:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `pests`
--

CREATE TABLE `pests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pest` varchar(191) NOT NULL,
  `status` enum('active','inactve','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pests`
--

INSERT INTO `pests` (`id`, `user_id`, `pest`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Ticks', 'active', '2020-05-25 04:21:36', '2020-05-25 04:21:36'),
(2, 9, 'Rats', 'active', '2020-05-25 04:21:36', '2020-05-25 04:21:36'),
(3, 9, 'wild cats', 'active', '2020-05-25 04:21:36', '2020-05-25 04:21:36'),
(4, 9, 'Bean weevils', 'active', '2020-05-25 04:21:36', '2020-05-25 04:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL,
  `market_name` varchar(191) NOT NULL,
  `day_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `user_id`, `product_id`, `district_id`, `county_id`, `market_name`, `day_id`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(12, 9, 14, 51, 50, 'Akisim Cattle Market', 3, '100kg', '30000', 'active', '2020-05-31 06:30:45', '2020-05-31 06:30:45'),
(13, 9, 2, 48, 52, 'mbale market', 8, '1', '120000', 'active', '2020-05-31 06:32:47', '2020-05-31 06:32:47'),
(14, 9, 1, 6, 3, 'Kala market', 2, '1', '500000', 'active', '2020-05-31 06:34:23', '2020-05-31 06:34:23'),
(15, 9, 61, 6, 9, 'kan market', 7, '1 seedling', '3000', 'active', '2020-06-08 05:44:08', '2020-06-08 05:44:08'),
(16, 9, 71, 41, 48, 'usuk market', 2, '1', '75000', 'active', '2020-06-08 05:46:18', '2020-06-08 05:46:18'),
(17, 9, 67, 57, 110, 'Abaratang  cattle market', 2, '1 bag', '25000', 'active', '2020-06-08 05:47:31', '2020-06-08 05:47:31'),
(18, 9, 19, 12, 163, 'Bombo market', 8, '100kg', '300000', 'active', '2020-06-08 05:51:27', '2020-06-08 05:51:27'),
(19, 9, 8, 3, 5, 'katikamu market', 6, '1', '75000', 'active', '2020-06-08 05:54:33', '2020-06-08 05:54:33'),
(20, 9, 50, 47, 2, 'Mayuge market', 8, '1 fish', '270000', 'active', '2020-06-08 05:58:36', '2020-06-08 05:58:36'),
(21, 9, 50, 24, 29, 'Entebbe main market', 8, '1', '250000', 'active', '2020-06-08 14:11:34', '2020-06-08 14:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `produces`
--

CREATE TABLE `produces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produces`
--

INSERT INTO `produces` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'mangoes', 'We have mangoes seedlings for sale', '2020-05-20 09:53:29', '2020-05-20 09:53:29'),
(2, 'oranges', 'We have oranges both seedlings and fruits for sale', '2020-05-20 07:38:29', '2020-05-20 07:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Cattle', 'active', '2020-05-24 19:57:16', '2020-05-24 19:57:16'),
(2, 9, 'Goats', 'active', '2020-05-24 19:57:40', '2020-05-24 19:57:40'),
(3, 9, 'Sheep', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(4, 9, 'Pigs', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(5, 9, 'Rabbits', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(6, 9, 'Donkeys', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(7, 9, 'Chicken', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(8, 9, 'Turkeys', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(9, 9, 'Ducks', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(10, 9, 'Pigeons', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(11, 9, 'Guinea Fowls', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(12, 9, 'Rice', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(14, 9, 'Maize', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(15, 9, 'Beans', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(16, 9, 'Soya Beans', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(17, 9, 'Matooke', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(18, 9, 'Millet', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(19, 9, 'Groundnuts', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(20, 9, 'Simsim', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(21, 9, 'Oranges', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(22, 9, 'Mangoes', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(23, 9, 'Passion fruits', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(24, 9, 'Berenge Maize', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(25, 9, 'Sun flower', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(26, 9, 'Casava', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(27, 9, 'Sweet Potatoes', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(28, 9, 'Irish Potatoes', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(29, 9, 'Yams', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(30, 9, 'Carrots', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(31, 9, 'Sorghum', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(32, 9, 'Wheat', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(33, 9, 'Cotton', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(34, 9, 'Coffee', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(35, 9, 'Tea', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(36, 9, 'Sugarcane', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(37, 9, 'Ovacado', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(38, 9, 'Jack fruit', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(39, 9, 'Apples', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(40, 9, 'Tomatoes', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(41, 9, 'Onions', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(42, 9, 'Cabbages', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(43, 9, 'Red Papper', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(44, 9, 'Green Papper', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(45, 9, 'Dodo(Eboga)', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(46, 9, 'Green Peeas(Corogo)', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(47, 9, 'Cow peas', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(48, 9, 'Cow peas(Black)', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(49, 9, 'Cow Peas(Kawo)', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(50, 9, 'Tilapia', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(51, 9, 'Lung Fish', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(52, 9, 'Mad Fish', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(53, 9, 'Nile Pearch', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(54, 9, 'Milk', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(55, 9, 'Egg', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(56, 9, 'Skins', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(57, 9, 'insecticides', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(58, 9, 'Pesticides', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(59, 9, 'Equipment', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(60, 9, 'Graveller', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(61, 9, 'Umbrella tree', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(62, 9, 'Sukuma', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(63, 9, 'ox plough', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(64, 9, 'Hoes', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(65, 9, 'Panga', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(66, 9, 'Tractors', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(67, 9, 'Charcoal', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(68, 9, 'Dog', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(69, 9, 'Honey', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(70, 9, 'Fertilizers', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(71, 9, 'Beehives', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(72, 9, 'flowers', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(73, 9, 'cat', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(74, 9, 'Tobacco', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(75, 9, 'Cassava', 'active', '2020-05-24 19:59:36', '2020-05-24 19:59:36'),
(76, 9, 'Gravous', 'active', '2020-05-26 04:32:11', '2020-05-26 04:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 9, 'email4.jpg', 'active', '2020-05-25 04:22:43', '2020-05-25 04:22:43'),
(3, 9, 'james ociba.png', 'active', '2020-05-25 04:22:43', '2020-05-25 04:22:43'),
(4, 4, 'download (2).jpg', 'active', '2020-04-22 06:26:58', '2020-04-22 06:26:58'),
(5, 7, 'checkout-1.jpg', 'active', '2020-05-18 07:56:00', '2020-05-18 07:56:00'),
(6, 6, 'images.jpg', 'active', '2020-05-20 17:21:54', '2020-05-20 17:21:54'),
(7, 8, 'download.jpg', 'active', '2020-05-24 08:16:41', '2020-05-24 05:16:41'),
(8, 9, 'ociba.JPG', 'active', '2020-05-24 08:38:53', '2020-05-24 05:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `project_galleries`
--

CREATE TABLE `project_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_galleries`
--

INSERT INTO `project_galleries` (`id`, `user_id`, `names`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Vegetables', 'Planning and Organizing Planting crops', 'gallery-4.jpg', 'active', '2020-05-25 04:23:02', '2020-05-25 04:23:02'),
(2, 9, 'Birds', 'Assessing and Managing your Poultry', 'gallery-item-5.jpg', 'active', '2020-05-25 04:23:02', '2020-05-25 04:23:02'),
(3, 9, 'Animals', 'Checking animals health', 'gallery-item-6.jpg', 'active', '2020-05-25 04:23:02', '2020-05-25 04:23:02'),
(4, 9, 'Fish', 'Fish maintanace & Feeding', 'gallery-item-7.jpg', 'active', '2020-05-25 04:23:02', '2020-05-25 04:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `recent_news`
--

CREATE TABLE `recent_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_news`
--

INSERT INTO `recent_news` (`id`, `user_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Quick Win For Improe Perfor Securitys.', 'blog-news-1.png', 'active', '2020-05-25 04:23:22', '2020-05-25 04:23:22'),
(2, 9, 'Quick Win Imperfora Security Web ses', 'blog-news-2.png', 'active', '2020-05-25 04:23:22', '2020-05-25 04:23:22'),
(3, 9, 'We’ve Got Announce ment Make Rachel', 'blog-news-3.png', 'active', '2020-05-25 04:23:22', '2020-05-25 04:23:22'),
(4, 9, 'We’ve Got Announce ment Make Rachel', 'blog-news-3.png', 'active', '2020-05-25 04:23:22', '2020-05-25 04:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `reply` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'active', '2020-04-17 06:34:34', '2020-04-17 06:34:34'),
(2, 'admin', 'active', '2020-04-17 06:45:51', '2020-04-17 06:45:51'),
(3, 'ministry official', 'active', '2020-05-09 10:30:21', '2020-05-09 10:30:21'),
(4, 'member', 'active', '2020-04-17 06:46:37', '2020-04-17 06:46:37'),
(5, 'vetenary officer', 'active', '2020-05-09 10:30:31', '2020-05-09 10:30:31'),
(6, 'agriculture officer', 'active', '2020-04-19 11:28:13', '2020-04-19 11:28:13'),
(7, 'Fisheries Officer', 'active', '2020-04-23 12:04:36', '2020-04-23 12:04:36'),
(8, 'Forestry Officer', 'active', '2020-04-23 12:04:36', '2020-04-23 12:04:36'),
(9, 'Vet Doctor', 'active', '2020-05-22 07:15:26', '2020-05-22 07:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) NOT NULL,
  `statement` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `subject`, `statement`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Market Products', 'Buy and sell products', 'market.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53'),
(2, 9, 'Advertise your Products', 'Display your Products sample for customers to view', 'shop-thumb.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53'),
(3, 9, 'Demonstration', 'Connect you with Farmers with experience in Particular Farming', 'gallery-item-8.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53'),
(4, 9, 'Treatment', 'Connect you nearest Vetenary,Agricultural officer for immediate help', 'gallery-3.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53'),
(5, 9, 'Security & Safety', 'Advice on how to harvest and keep for dry crops for long time to avoid losses', 'gallery-item-3.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53'),
(6, 9, 'Modern Equipment', 'Linkinng farmers to buy modern farming equipments', 'tractor.jpg', 'active', '2020-05-25 04:23:53', '2020-05-25 04:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `service_features`
--

CREATE TABLE `service_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `statement` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_features`
--

INSERT INTO `service_features` (`id`, `user_id`, `title`, `statement`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Animals & their Feeds', 'Conneting you with Buyers, sellers and suppliers for feeds', 'blog-2.jpg', 'active', '2020-05-25 04:24:21', '2020-05-25 04:24:21'),
(2, 9, 'Birds & their Feeds', 'Conneting you with Buyers, sellers and suppliers for feeds', '07.jpg', 'active', '2020-05-25 04:24:21', '2020-05-25 04:24:21'),
(3, 9, 'Crops & seeds', 'Conneting you with Buyers, sellers and suppliers for seeds', 'crop.jpg', 'active', '2020-05-25 04:24:21', '2020-05-25 04:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `signs_symptoms`
--

CREATE TABLE `signs_symptoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `signs_symptoms` varchar(191) NOT NULL,
  `status` enum('active','inactive','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signs_symptoms`
--

INSERT INTO `signs_symptoms` (`id`, `user_id`, `signs_symptoms`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Does not eat and Thin', 'active', '2020-05-25 04:24:43', '2020-05-25 04:24:43'),
(2, 9, 'Fallen ears and flowing saliva', 'active', '2020-05-25 04:24:43', '2020-05-25 04:24:43'),
(3, 9, 'catepillar eating cassava leaves', 'active', '2020-05-24 19:46:25', '2020-05-24 19:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sponsor` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `user_id`, `sponsor`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Best Seller', 'brand-1.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02'),
(2, 9, 'Original Authentic Product', 'brand-2.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02'),
(3, 9, 'Premium Quality', 'brand-3.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02'),
(4, 9, 'Special Offer', 'brand-6.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02'),
(5, 9, 'Super Sale', 'brand-5.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02'),
(6, 9, 'Best Seller2', 'brand-4.png', 'active', '2020-05-25 04:25:02', '2020-05-25 04:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` enum('active','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'amugeeunice@gmail.com', 'active', '2020-05-13 19:03:21', '2020-05-13 19:03:21'),
(2, 'amugeeunice@gmail.com', 'active', '2020-06-06 15:05:55', '2020-06-06 15:05:55'),
(3, 'ojingaaaron@gmail.com', 'active', '2020-06-13 09:19:28', '2020-06-13 09:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_counties`
--

CREATE TABLE `sub_counties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_counties` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_counties`
--

INSERT INTO `sub_counties` (`id`, `sub_counties`) VALUES
(1, 'Central Division'),
(2, 'Kawempe Division'),
(3, 'Makindye Division'),
(4, 'Nakawa Division'),
(5, 'Rubaga Division'),
(6, 'Bukomero'),
(7, 'Butemba'),
(8, 'Dwaniro'),
(9, 'Gayaza'),
(10, 'Kapeke'),
(11, 'Kibiga'),
(12, 'Kiboga T.c.'),
(13, 'Kyankwanzi'),
(14, 'Lwamata'),
(15, 'Mulagi'),
(16, 'Muwanga'),
(17, 'Nsambya'),
(18, 'Ntwetwe'),
(19, 'Wattuba'),
(20, 'Bujjumba'),
(21, 'Kalangala T.c.'),
(22, 'Mugoye'),
(23, 'Bamunanika'),
(24, 'Kalagala'),
(25, 'Kamira'),
(26, 'Kikyusa'),
(27, 'Zirobwe'),
(28, 'Mazinga'),
(29, 'Bubeke'),
(30, 'Bufumira'),
(31, 'Kyamuswa'),
(32, 'Mazinga'),
(33, 'Bombo T.c.'),
(34, 'Butuntumula'),
(35, 'Katikamu'),
(36, 'Luwero'),
(37, 'Luwero T.c.'),
(38, 'Makulubita'),
(39, 'Nyimbwa'),
(40, 'Wobulenzi T.c.'),
(41, 'Bigasa'),
(42, 'Butenga'),
(43, 'Kibinge'),
(44, 'Kitanda'),
(45, 'Bukakata'),
(46, 'Buwunga'),
(47, 'Kabonera'),
(48, 'Kisekka'),
(49, 'Kkingo'),
(50, 'Kyanamukaaka'),
(51, 'Lwengo'),
(52, 'Malongo'),
(53, 'Mukungwe'),
(54, 'Ndagwe'),
(55, 'Bukulula'),
(56, 'Kalungu'),
(57, 'Kyamuliibwa'),
(58, 'Lukaya T.c.'),
(59, 'Lwabenge'),
(60, 'Katwe/butego'),
(61, 'Kimanya/kyabakuza'),
(62, 'Nyendo/senyange'),
(63, ''),
(64, 'Budde'),
(65, 'Bulo'),
(66, 'Kalamba'),
(67, 'Kibibi'),
(68, 'Ngando'),
(69, ''),
(70, 'Kabulasoke'),
(71, 'Kyegonza'),
(72, 'Maddu'),
(73, 'Mpenja'),
(74, ''),
(75, ''),
(76, 'Buwama'),
(77, 'Kamengo'),
(78, 'Kiringente'),
(79, 'Kituntu'),
(80, 'Mpigi'),
(81, 'Mpigi T.c.'),
(82, 'Muduma'),
(83, 'Nkozi'),
(84, 'Bagezza'),
(85, 'Butoloogo'),
(86, 'Kasambya'),
(87, 'Kitenga'),
(88, 'Kiyuni'),
(89, 'Madudu'),
(90, 'Mubende T.c.'),
(91, 'Bukuya'),
(92, 'Kassanda'),
(93, 'Kiganda'),
(94, 'Myanzi'),
(95, 'Buikwe'),
(96, 'Kawolo'),
(97, 'Lugazi T.c.'),
(98, 'Najja'),
(99, 'Najjembe'),
(100, 'Ngogwe'),
(101, 'Njeru T.c.'),
(102, 'Nkonkonjeru T.c.'),
(103, 'Nyenga'),
(104, 'Ssi - Bukunja'),
(105, 'Wakisi'),
(106, 'Bugaya'),
(107, 'Busamuzi'),
(108, 'Bweema'),
(109, 'Nairambi'),
(110, 'Goma'),
(111, 'Kkome Islands'),
(112, 'Kyampisi'),
(113, 'Mukono T.c.'),
(114, 'Nakisunga'),
(115, 'Nama'),
(116, 'Ntenjeru'),
(117, 'Kasawo'),
(118, 'Kimenyedde'),
(119, 'Nabaale'),
(120, 'Nagojje'),
(121, 'Ntunda'),
(122, 'Seeta- Namuganga'),
(123, 'Kakooge'),
(124, 'Kalongo'),
(125, 'Kalungi'),
(126, 'Lwabyata'),
(127, 'Lwampanga'),
(128, 'Nabiswera'),
(129, 'Nakasongola T.c.'),
(130, 'Nakitoma'),
(131, 'Wabinyonyi'),
(132, 'Kakuuto'),
(133, 'Kasasa'),
(134, 'Kibanda'),
(135, 'Kifamba'),
(136, 'Kyebe'),
(137, 'Byakabanda'),
(138, 'Ddwaniro'),
(139, 'Kacheera'),
(140, 'Kagamba (buyamba)'),
(141, 'Kyalulangira'),
(142, 'Lwamaggwa'),
(143, 'Lwanda'),
(144, 'Rakai T.c.'),
(145, 'Kabira'),
(146, 'Kalisizo'),
(147, 'Kasaali'),
(148, 'Kirumba'),
(149, 'Kyotera T.c.'),
(150, 'Lwankoni'),
(151, 'Nabigasa'),
(152, 'Lwemiyaga'),
(153, 'Ntusi'),
(154, 'Lugusulu'),
(155, 'Lwebitakuli'),
(156, 'Mateete'),
(157, 'Mijwala'),
(158, 'Sembabule T.c.'),
(159, 'Bbaale'),
(160, 'Galiraaya'),
(161, 'Kayonza'),
(162, 'Wabwoko-kitimbwa'),
(163, 'Busana'),
(164, 'Kangulumira'),
(165, 'Kayunga'),
(166, 'Kayunga T.c.'),
(167, 'Nazigo'),
(168, 'Kakiri'),
(169, 'Kasanje'),
(170, 'Katabi'),
(171, 'Masulita'),
(172, 'Namayumba'),
(173, 'Nsangi'),
(174, 'Ssisa'),
(175, 'Wakiso'),
(176, 'Wakiso T.c.'),
(177, 'Division A'),
(178, 'Division B'),
(179, 'Busukuma'),
(180, 'Gombe'),
(181, 'Kira'),
(182, 'Nabweru'),
(183, 'Nangabo'),
(184, 'Ssabagabo-makindye'),
(185, 'Kaliiro'),
(186, 'Kasagama'),
(187, 'Kinuuka'),
(188, 'Lyantonde'),
(189, 'Lyantonde T.c.'),
(190, 'Mpumudde'),
(191, 'Butayunja'),
(192, 'Kakindu'),
(193, 'Maanyi'),
(194, 'Malangala'),
(195, 'Bulera'),
(196, 'Busimbi'),
(197, 'Kikandwa'),
(198, 'Mityana T.c.'),
(199, 'Ssekanyonyi'),
(200, 'Kapeeka'),
(201, 'Kasangombe'),
(202, 'Kikamulo'),
(203, 'Nakaseke'),
(204, 'Ngoma'),
(205, 'Semuto'),
(206, 'Wakyato'),
(207, 'Banda'),
(208, 'Budhaya'),
(209, 'Bugiri T.c.'),
(210, 'Bulesa'),
(211, 'Bulidha'),
(212, 'Buluguyi'),
(213, 'Buswale'),
(214, 'Buwunga'),
(215, 'Buyinja'),
(216, 'Iwemba'),
(217, 'Kapyanga'),
(218, 'Muterere'),
(219, 'Nabukalu'),
(220, 'Nankoma'),
(221, 'Sigulu Islands'),
(222, 'Mutumba'),
(223, 'Buhehe'),
(224, 'Bulumbi'),
(225, 'Busia T.c.'),
(226, 'Busitema'),
(227, 'Buteba'),
(228, 'Dabani'),
(229, 'Lumino'),
(230, 'Lunyo'),
(231, 'Masaba'),
(232, 'Masafu'),
(233, 'Buyanga'),
(234, 'Ibulanku'),
(235, 'Makuutu'),
(236, 'Namalemba'),
(237, 'Bulamagi'),
(238, 'Iganga T.c.'),
(239, 'Nabitende'),
(240, 'Nakalama'),
(241, 'Nakigo'),
(242, 'Nambale'),
(243, 'Namungalwe'),
(244, 'Nawandala'),
(245, 'Bukanga'),
(246, 'Bukooma'),
(247, 'Bulongo'),
(248, 'Ikumbya'),
(249, 'Irongo'),
(250, 'Nawampiti'),
(251, 'Waibuga'),
(252, 'Busedde'),
(253, 'Kakira'),
(254, 'Mafubira'),
(255, 'Central Division'),
(256, 'Mpumudde/kimaka'),
(257, 'Masese/walukuba'),
(258, 'Budondo'),
(259, 'Butagaya'),
(260, 'Buwenge'),
(261, 'Buwenge T.c.'),
(262, 'Buyengo'),
(263, 'Bugaya'),
(264, 'Buyende'),
(265, 'Kagulu'),
(266, 'Kidera'),
(267, 'Nkondo'),
(268, 'Balawoli'),
(269, 'Bulopa'),
(270, 'Butansi'),
(271, 'Kamuli T.c.'),
(272, 'Kitayunjwa'),
(273, 'Nabwigulu'),
(274, 'Namasagali'),
(275, 'Namwendwa'),
(276, 'Bugulumbya'),
(277, 'Kisozi'),
(278, 'Mbulamuti'),
(279, 'Nawanyago'),
(280, 'Wankole'),
(281, 'Benet'),
(282, 'Binyiny'),
(283, 'Kaproron'),
(284, 'Kwanyiny'),
(285, 'Ngenge'),
(286, 'Chema'),
(287, 'Kapchorwa T.c.'),
(288, 'Kaptanya'),
(289, 'Kaserem'),
(290, 'Kawowo'),
(291, 'Sipi'),
(292, 'Tegeres'),
(293, 'Kapujan'),
(294, 'Katakwi'),
(295, 'Katakwi T.c'),
(296, 'Magoro'),
(297, 'Ngariam'),
(298, 'Toroma'),
(299, 'Usuk'),
(300, 'Ongongoja'),
(301, 'Omodoi'),
(302, 'Atutur'),
(303, 'Kanyum'),
(304, 'Kumi'),
(305, 'Kumi T.c.'),
(306, 'Mukongoro'),
(307, 'Nyero'),
(308, 'Ongino'),
(309, 'Kapir'),
(310, 'Kobwin'),
(311, 'Mukura'),
(312, 'Ngora'),
(313, 'Bufumbo'),
(314, 'Bukonde'),
(315, 'Bukyiende'),
(316, 'Bungokho'),
(317, 'Bungokho-mutoto'),
(318, 'Busano'),
(319, 'Busiu'),
(320, 'Busoba'),
(321, 'Nakaloke'),
(322, 'Namanyonyi'),
(323, 'Wanale'),
(324, 'Industrial'),
(325, 'Northern Division'),
(326, 'Wanale Division'),
(327, 'Butebo'),
(328, 'Kabwangasi'),
(329, 'Kakoro'),
(330, 'Kibale'),
(331, 'Petete'),
(332, 'Bulangira'),
(333, 'Buseta'),
(334, 'Kibuku'),
(335, 'Kadama'),
(336, 'Tirinyi'),
(337, 'Kagumu'),
(338, 'Kirika'),
(339, 'Agule'),
(340, 'Apopong'),
(341, 'Gogonyo'),
(342, 'Kameke'),
(343, 'Kasodo'),
(344, 'Pallisa'),
(345, 'Pallisa T.c.'),
(346, 'Puti-puti'),
(347, 'Kamuge'),
(348, 'Bugondo'),
(349, 'Kadungulu'),
(350, 'Pingire'),
(351, 'Atiira'),
(352, 'Kateta'),
(353, 'Kyere'),
(354, 'Olio'),
(355, 'Arapai'),
(356, 'Asuret'),
(357, 'Gweri'),
(358, 'Kamuda'),
(359, 'Katine'),
(360, 'Soroti'),
(361, 'Tubur'),
(362, 'Eastern Division'),
(363, 'Northern Division'),
(364, 'Western Division'),
(365, 'Kwapa'),
(366, 'Mella'),
(367, 'Merikit'),
(368, 'Molo'),
(369, 'Mukuju'),
(370, 'Osukuru'),
(371, 'Eastern Division'),
(372, 'Western Division'),
(373, 'Iyolwa'),
(374, 'Kirewa'),
(375, 'Kisoko'),
(376, 'Mulanda'),
(377, 'Nabuyoga'),
(378, 'Nagongera'),
(379, 'Paya'),
(380, 'Petta'),
(381, 'Rubongi'),
(382, 'Alwa'),
(383, 'Kaberamaido'),
(384, 'Kobulubulu'),
(385, 'Ochero'),
(386, 'Kaberamaido T.c'),
(387, 'Anyara'),
(388, 'Bululu'),
(389, 'Kalaki'),
(390, 'Otuboi'),
(391, 'Baitambogwe'),
(392, 'Buwaaya'),
(393, 'Immanyiro'),
(394, 'Kigandalo'),
(395, 'Kityerera'),
(396, 'Malongo'),
(397, 'Mayuge T.c.'),
(398, 'Buhugu'),
(399, 'Bumasifwa'),
(400, 'Busulani'),
(401, 'Butandiga'),
(402, 'Buteza'),
(403, 'Buwalasi'),
(404, 'Buyobo'),
(405, 'Sironko T.c.'),
(406, 'Zesui'),
(407, 'Bukhulo'),
(408, 'Buginyanya'),
(409, 'Bukhalu'),
(410, 'Bulago'),
(411, 'Bulegeni'),
(412, 'Buluganya'),
(413, 'Bunambutye'),
(414, 'Masiira'),
(415, 'Muyembe'),
(416, 'Sisiyi'),
(417, 'Abarilela'),
(418, 'Asamuk'),
(419, 'Kuju'),
(420, 'Orungo'),
(421, 'Wera'),
(422, 'Morungatuny'),
(423, 'Acowa'),
(424, 'Kapelebyong'),
(425, 'Obalanga'),
(426, 'Budaka'),
(427, 'Iki-iki'),
(428, 'Kaderuna'),
(429, 'Kamonkoli'),
(430, 'Lyama'),
(431, 'Naboa'),
(432, 'Kameruka'),
(433, 'Bubiita'),
(434, 'Bududa'),
(435, 'Bukibokolo'),
(436, 'Bukigai'),
(437, 'Bulucheke'),
(438, 'Bumayoka'),
(439, 'Bushika'),
(440, 'Bukedea'),
(441, 'Kachumbala'),
(442, 'Kidongole'),
(443, 'Kolir'),
(444, 'Malera'),
(445, 'Bukwa'),
(446, 'Chesower'),
(447, 'Kabei'),
(448, 'Suam'),
(449, 'Budumba'),
(450, 'Busaba'),
(451, 'Busolwe'),
(452, 'Butaleja'),
(453, 'Kachonga'),
(454, 'Nawanjofu'),
(455, 'Nazimasa'),
(456, 'Bumanya'),
(457, 'Gadumire'),
(458, 'Namugongo'),
(459, 'Namwiwa'),
(460, 'Nawaikoke'),
(461, 'Bubutu'),
(462, 'Bugobero'),
(463, 'Bumbo'),
(464, 'Bumwoni'),
(465, 'Bupoto'),
(466, 'Butiru'),
(467, 'Buwabwala'),
(468, 'Buwagogo'),
(469, 'Kaato'),
(470, 'Sibanga'),
(471, 'Bulange'),
(472, 'Ivukula'),
(473, 'Kibaale'),
(474, 'Magada'),
(475, 'Namutumba'),
(476, 'Nsinze'),
(477, 'Adjumani T.c'),
(478, 'Adropi'),
(479, 'Ciforo'),
(480, 'Dzaipi'),
(481, 'Ofua'),
(482, 'Pakelle'),
(483, 'Aboke'),
(484, 'Akalo'),
(485, 'Alito'),
(486, 'Ayer'),
(487, 'Bala'),
(488, 'Abongomola'),
(489, 'Aduku'),
(490, 'Chawente'),
(491, 'Inomo'),
(492, 'Nambieso'),
(493, 'Akokoro'),
(494, 'Apac'),
(495, 'Apac T.c.'),
(496, 'Cegere'),
(497, 'Ibuje'),
(498, 'Arua Hill'),
(499, 'Oli River'),
(500, 'Adumi'),
(501, 'Aroi'),
(502, 'Dadamu'),
(503, 'Manibe'),
(504, 'Oluko'),
(505, 'Pajulu'),
(506, 'Offaka'),
(507, 'Ogoko'),
(508, 'Okollo'),
(509, 'Rhino Camp'),
(510, 'Rigbo'),
(511, 'Uleppi'),
(512, 'Ajia'),
(513, 'Arivu'),
(514, 'Logiri'),
(515, 'Vurra'),
(516, 'Awach'),
(517, 'Bungatira'),
(518, 'Paicho'),
(519, 'Palaro'),
(520, 'Patiko'),
(521, 'Bar-dege'),
(522, 'Laroo'),
(523, 'Layibi'),
(524, 'Pece'),
(525, 'Bobi'),
(526, 'Koro'),
(527, 'Lakwana'),
(528, 'Lalogi'),
(529, 'Odek'),
(530, 'Ongako'),
(531, 'Kitgum T.c.'),
(532, 'Kitigum Matidi'),
(533, 'Labongo Akwang'),
(534, 'Labongo Amida'),
(535, 'Labongo Layamo'),
(536, 'Lagoro'),
(537, 'Mucwini'),
(538, 'Namokora'),
(539, 'Omiya Anyima'),
(540, 'Orom'),
(541, 'Agoro'),
(542, 'Lokung'),
(543, 'Madi Opei'),
(544, 'Parabek Ogili'),
(545, 'Padibe East'),
(546, 'Padibe West'),
(547, 'Palabek Gem'),
(548, 'Palabek Kal'),
(549, 'Paloga'),
(550, 'Kacheri'),
(551, 'Kotido'),
(552, 'Kotido T.c.'),
(553, 'Nakapelimoru'),
(554, 'Panyangara'),
(555, 'Rengen'),
(556, 'Adekokwok'),
(557, 'Amach'),
(558, 'Aromo'),
(559, 'Barr'),
(560, 'Lira'),
(561, 'Ogur'),
(562, 'Adyel'),
(563, 'Central'),
(564, 'Ojwina'),
(565, 'Railway'),
(566, 'Abako'),
(567, 'Aloi'),
(568, 'Amugo'),
(569, 'Apala'),
(570, 'Omoro'),
(571, 'Adwari'),
(572, 'Okwang'),
(573, 'Olilim'),
(574, 'Orum'),
(575, 'Iriiri'),
(576, 'Lokopo'),
(577, 'Lopei'),
(578, 'Lotome'),
(579, 'Matany'),
(580, 'Ngoleriet'),
(581, 'Katikekile'),
(582, 'Nadunget'),
(583, 'Rupa'),
(584, 'Northern Division'),
(585, 'Southern Division'),
(586, 'Aliba'),
(587, 'Gimara'),
(588, 'Itula'),
(589, 'Dufile'),
(590, 'Lefori'),
(591, 'Metu'),
(592, 'Moyo T.c.'),
(593, 'Moyo'),
(594, 'Pakwach'),
(595, 'Pakwach T.c.'),
(596, 'Panyango'),
(597, 'Panyimur'),
(598, 'Wadelai'),
(599, 'Atyak'),
(600, 'Jangokoro'),
(601, 'Kango'),
(602, 'Nyapea'),
(603, 'Paidha'),
(604, 'Paidha T.c.'),
(605, 'Zeu'),
(606, 'Akworo'),
(607, 'Erussi'),
(608, 'Kucwiny'),
(609, 'Nebbi'),
(610, 'Nebbi T.c'),
(611, 'Nyaravur'),
(612, 'Parombo'),
(613, 'Kakomongole'),
(614, 'Moruita'),
(615, 'Nakapiripirit T.c.'),
(616, 'Namalu'),
(617, 'Lolachat'),
(618, 'Lorengedwat'),
(619, 'Nabilatuk'),
(620, 'Amudat'),
(621, 'Karita'),
(622, 'Loroo'),
(623, 'Acholibur'),
(624, 'Atanga'),
(625, 'Awer'),
(626, 'Kilak'),
(627, 'Laguti'),
(628, 'Lapul'),
(629, 'Pader T.c.'),
(630, 'Pajule'),
(631, 'Puranga'),
(632, 'Adilang'),
(633, 'Lapono'),
(634, 'Lira Palwo'),
(635, 'Lukole'),
(636, 'Omot'),
(637, 'Paimol'),
(638, 'Parabongo'),
(639, 'Patongo'),
(640, 'Wol'),
(641, 'Apo'),
(642, 'Drajani'),
(643, 'Kei'),
(644, 'Kuru'),
(645, 'Midigo'),
(646, 'Odravu'),
(647, 'Romogi'),
(648, 'Yumbe T.c.'),
(649, 'Abim'),
(650, 'Alerek'),
(651, 'Lotukei'),
(652, 'Morulem'),
(653, 'Nyakwae'),
(654, 'Aputi'),
(655, 'Awelo'),
(656, 'Muntu'),
(657, 'Namasale'),
(658, 'Amuru'),
(659, 'Atiak'),
(660, 'Lamogi'),
(661, 'Pabbo'),
(662, 'Alero'),
(663, 'Anaka'),
(664, 'Purongo'),
(665, 'Koch Goma'),
(666, 'Agwata'),
(667, 'Batta'),
(668, 'Dokolo'),
(669, 'Kangai'),
(670, 'Kwera'),
(671, 'Kaabong T.c.'),
(672, 'Kalapata'),
(673, 'Kapedo'),
(674, 'Karenga'),
(675, 'Kathile'),
(676, 'Lolelia'),
(677, 'Loyoro'),
(678, 'Sidok'),
(679, 'Kaabong Subcounty'),
(680, 'Koboko T.c.'),
(681, 'Kuluba'),
(682, 'Lobule'),
(683, 'Ludara'),
(684, 'Midia'),
(685, 'Aber'),
(686, 'Acaba'),
(687, 'Iceme'),
(688, 'Loro'),
(689, 'Minakulu'),
(690, 'Ngai'),
(691, 'Otwal'),
(692, 'Yivu'),
(693, 'Nyadri'),
(694, 'Oleba'),
(695, 'Oluvu'),
(696, 'Tara'),
(697, 'Oluffe'),
(698, 'Kijomoro'),
(699, 'Aii - Vu'),
(700, 'Beleafe'),
(701, 'Katrini'),
(702, 'Odupi'),
(703, 'Omugo'),
(704, 'Uriama'),
(705, 'Bubandi'),
(706, 'Bubukwanga'),
(707, 'Bundibugyo T.c.'),
(708, 'Busaru'),
(709, 'Harugali'),
(710, 'Kasitu'),
(711, 'Nduguto'),
(712, 'Kanara'),
(713, 'Karugutu'),
(714, 'Rwebisengo'),
(715, 'Bihanga'),
(716, 'Burere'),
(717, 'Karungu'),
(718, 'Rwengwe'),
(719, 'Katerera'),
(720, 'Katunguru'),
(721, 'Kichwamba'),
(722, 'Ryeru'),
(723, 'Bumbaire'),
(724, 'Bushenyi T.c.'),
(725, 'Kakanju'),
(726, 'Kyabugimbi'),
(727, 'Kyamuhunga'),
(728, 'Kyeizoba'),
(729, 'Nyabubare'),
(730, 'Bitereko'),
(731, 'Kabira'),
(732, 'Kanyabwanga'),
(733, 'Kashenshero'),
(734, 'Kiyanga'),
(735, 'Mitooma'),
(736, 'Mutara'),
(737, 'Bugongi'),
(738, 'Kabwohe-itendero T.c'),
(739, 'Kagango'),
(740, 'Kigarama'),
(741, 'Kitagata'),
(742, 'Kyangyenyi'),
(743, 'Shuuku'),
(744, 'Buhanika'),
(745, 'Buseruka'),
(746, 'Busiisi'),
(747, 'Hoima T.c.'),
(748, 'Kigorobya T.c.'),
(749, 'Kigorobya'),
(750, 'Kitoba'),
(751, 'Kyabigambire'),
(752, 'Bugambe'),
(753, 'Buhimba'),
(754, 'Kabwoya'),
(755, 'Kiziranfumbi'),
(756, 'Kyangwali'),
(757, 'Kabale Central'),
(758, 'Kabale Northern'),
(759, 'Kabale Southern'),
(760, 'Buhara'),
(761, 'Kaharo'),
(762, 'Kamuganguzi'),
(763, 'Kitumba'),
(764, 'Kyanamira'),
(765, 'Maziba'),
(766, 'Rubaya'),
(767, 'Bubare'),
(768, 'Bufundi'),
(769, 'Hamurwa'),
(770, 'Ikumba'),
(771, 'Muko'),
(772, 'Bukinda'),
(773, 'Kamwezi'),
(774, 'Kashambya'),
(775, 'Rwamucucu'),
(776, 'Buheesi'),
(777, 'Kibiito'),
(778, 'Kisomoro'),
(779, 'Rwiimi'),
(780, 'Bukuku'),
(781, 'Busoro'),
(782, 'Hakibaale'),
(783, 'Karambi'),
(784, 'Kicwamba'),
(785, 'Mugusu'),
(786, 'Ruteete'),
(787, 'Eastern'),
(788, 'Western'),
(789, 'Southern'),
(790, 'Bwera'),
(791, 'Ihandiro'),
(792, 'Karambi'),
(793, 'Kisinga'),
(794, 'Kitholhu'),
(795, 'Kyarumba'),
(796, 'Kyondo'),
(797, 'Mahango'),
(798, 'Munkunyu'),
(799, 'Nyakiyumbu'),
(800, 'Bugoye'),
(801, 'Karusandara'),
(802, 'Kasese T.c'),
(803, 'Katwe Kabatoro T.c.'),
(804, 'Kilembe'),
(805, 'Kitswamba'),
(806, 'Kyabarungira'),
(807, 'L.katwe'),
(808, 'Maliba'),
(809, 'Muhokya'),
(810, 'Rukoki'),
(811, 'Bwanswa'),
(812, 'Kakindo'),
(813, 'Kasambya'),
(814, 'Kisiita'),
(815, 'Nalweyo'),
(816, 'Nkooko'),
(817, 'Bwikara'),
(818, 'Kagadi'),
(819, 'Kiryanga'),
(820, 'Kyanaisoke'),
(821, 'Mabaale'),
(822, 'Mpeefu'),
(823, 'Muhoro'),
(824, 'Rugashari'),
(825, 'Bwamiramira'),
(826, 'Kibaale T.c.'),
(827, 'Kyebando'),
(828, 'Matale'),
(829, 'Mugarama'),
(830, 'Bukimbiri'),
(831, 'Busanza'),
(832, 'Chahi'),
(833, 'Kanaba'),
(834, 'Kirundo'),
(835, 'Kisoro T.c.'),
(836, 'Muramba'),
(837, 'Murora'),
(838, 'Nyabwishenya'),
(839, 'Nyakabande'),
(840, 'Nyakinama'),
(841, 'Nyarubuye'),
(842, 'Nyarusiza'),
(843, 'Nyundo'),
(844, 'Budongo'),
(845, 'Bwijanga'),
(846, 'Karujubu'),
(847, 'Kimengo'),
(848, 'Masindi T.c'),
(849, 'Miirya'),
(850, 'Nyangahya'),
(851, 'Pakanyi'),
(852, 'Kigumba'),
(853, 'Kiryandongo'),
(854, 'Masindi -port'),
(855, 'Mutunda'),
(856, 'Bubaare'),
(857, 'Bukiro'),
(858, 'Kagongi'),
(859, 'Kakiika'),
(860, 'Kashare'),
(861, 'Rubaya'),
(862, 'Rubindi'),
(863, 'Rwanyamahembe'),
(864, 'Kakoba'),
(865, 'Kamukuzi'),
(866, 'Nyamitanga'),
(867, 'Bugamba'),
(868, 'Mwizi'),
(869, 'Ndaija'),
(870, 'Nyakayojo'),
(871, 'Rugando'),
(872, 'Bwongyera'),
(873, 'Ihunga'),
(874, 'Kibatsi'),
(875, 'Nyabihoko'),
(876, 'Itojo'),
(877, 'Ntugamo'),
(878, 'Ntungamo T.c'),
(879, 'Nyakyera'),
(880, 'Ruhaama'),
(881, 'Rukoni'),
(882, 'Rweikiniro'),
(883, 'Kayonza'),
(884, 'Ngoma'),
(885, 'Rubaare'),
(886, 'Rugarama'),
(887, 'Buyanja'),
(888, 'Kebisoni'),
(889, 'Nyakishenyi'),
(890, 'Nyarushanje'),
(891, 'Bugangari'),
(892, 'Buhunga'),
(893, 'Bwambara'),
(894, 'Kagunga'),
(895, 'Nyakagyeme'),
(896, 'Ruhinda'),
(897, 'Rukungiri T.c.'),
(898, 'Bwiizi'),
(899, 'Kahunge'),
(900, 'Kamwenge'),
(901, 'Kamwenge T.c.'),
(902, 'Nkoma'),
(903, 'Kicheche'),
(904, 'Mahyoro'),
(905, 'Ntara'),
(906, 'Nyabbani'),
(907, 'Kambuga'),
(908, 'Kanyantorogo'),
(909, 'Kayonza'),
(910, 'Kihiihi'),
(911, 'Kirima'),
(912, 'Nyamirama'),
(913, 'Rugyeyo'),
(914, 'Rutenga'),
(915, 'Kanungu T.c'),
(916, 'Mpungu'),
(917, 'Hapuyo'),
(918, 'Kakabara'),
(919, 'Kasule'),
(920, 'Kyegegwa'),
(921, 'Mpara'),
(922, 'Bufunjo'),
(923, 'Bugaaki'),
(924, 'Butiiti'),
(925, 'Katoke'),
(926, 'Kihuura'),
(927, 'Kyarusozi'),
(928, 'Kyenjojo T.c.'),
(929, 'Nyankwanzi'),
(930, 'Nyantungo'),
(931, 'Biiso'),
(932, 'Buliisa'),
(933, 'Bisheshe'),
(934, 'Ibanda T.c.'),
(935, 'Ishongororo'),
(936, 'Kicuzi'),
(937, 'Kikyenkye'),
(938, 'Nyabuhikye'),
(939, 'Nyamarebe'),
(940, 'Rukiri'),
(941, 'Endinzi'),
(942, 'Kashumba'),
(943, 'Ngarama'),
(944, 'Rugaaga'),
(945, 'Birere'),
(946, 'Kabingo'),
(947, 'Kabuyanda'),
(948, 'Kikagate'),
(949, 'Masha'),
(950, 'Nyakitunda'),
(951, 'Buremba'),
(952, 'Burunga'),
(953, 'Kanoni'),
(954, 'Kazo'),
(955, 'Rwemikoma'),
(956, 'Kanyaryeru'),
(957, 'Kashongi'),
(958, 'Kenshunga'),
(959, 'Kikatsi'),
(960, 'Kinoni'),
(961, 'Nyakashashara'),
(962, 'Sanga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '4',
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','deleted','pending','suspended') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `contact`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 1, '0775401794', 'Ociba Esther Atim', 'atimesther@gmail.com', 'active', '2020-05-23 09:21:44', '$2y$10$EeJ26S2fkhD.GETGbWFJiuGwMCmHcqHjZKTFX7005ydfjN1s3KKD6', '', '2020-05-23 09:21:44', '2020-05-23 09:21:44'),
(5, 9, '0775401796', 'Ociba Aaron Ojinga', 'ojingaaaron@gmail.com', 'active', '2020-05-23 09:21:11', '$2y$10$z8hO/WndR8zXUr0IyYRHpeodvCfsCaYrBdnfXWTvd1RdFtdDzX0fi', NULL, '2020-05-23 09:21:11', '2020-05-23 09:21:11'),
(6, 4, '0775401799', 'okwerede john', 'okweredejohn@gmail.com', 'suspended', '2020-05-18 21:55:37', '$2y$10$4AFe3hPlmlSHhimVMI7Jvu5Sf1ecymewUP7RAhKCAB2LmfTd5FaWi', NULL, '2020-05-18 21:55:37', '2020-05-18 21:55:37'),
(7, 4, '0778401793', 'Omachol James', 'omacholjames@gmail.com', 'active', '2020-05-18 21:45:17', '$2y$10$VwAWHODY5Q/.H2tCvt9jI.eCAPKUU.TjmsyblfIpwNbvKq.gHmrH2', NULL, '2020-05-18 21:45:17', '2020-05-18 21:45:17'),
(8, 3, '0785662365', 'oliba moses ociba', 'olibamoses@gmail.com', 'active', '2020-05-28 11:31:30', '$2y$10$WarKXzFSoxTlP4S4yR9OJOHZFiC1bPSOJNJetuZjOqwKkb9jSLk/6', NULL, '2020-05-28 11:31:30', '2020-05-28 11:31:30'),
(9, 1, '0775401793', 'ociba james', 'ocibajames@gmail.com', 'active', '2020-05-24 11:21:21', '$2y$10$s1Kc5zloVC1MnuiMXgz5Oe0HowODlyVJ.ozWNF/YZJ0GPB7sirZka', NULL, '2020-05-24 11:21:21', '2020-05-24 11:21:21'),
(10, 4, '0775401799', 'ociba Celestine Flavious', 'ocibacelestine@gmail.com', 'active', '2020-06-10 06:13:24', '$2y$10$cY1DM5IDdjqqxTNgLQLkw.75fQRo8pBWj1p/2LyDvw3gAvfKchtYq', NULL, '2020-06-10 03:13:23', '2020-06-10 03:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `vet_reports`
--

CREATE TABLE `vet_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `farmer_name` varchar(191) NOT NULL,
  `farmer_contact` varchar(191) NOT NULL,
  `doctor_name` varchar(191) NOT NULL,
  `doctor_contact` varchar(191) NOT NULL,
  `treatment` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `status` enum('active','deleted','suspended') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vet_reports`
--

INSERT INTO `vet_reports` (`id`, `user_id`, `farmer_name`, `farmer_contact`, `doctor_name`, `doctor_contact`, `treatment`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Okello Nakalet', '0786453241', 'Epenyu Gilbert', '0778567843', 'General deworming and spraying', '23', 'active', '2020-05-27 17:28:19', '2020-05-27 17:28:19'),
(2, 9, 'Opoi Robert', '0779876543', 'Opupe Ben', '0786543217', 'Foot and mouth disease', '12', 'active', '2020-05-27 17:03:39', '2020-05-27 17:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `village` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `village`, `created_at`, `updated_at`) VALUES
(1, 'Central Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(2, 'Kawempe Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(3, 'Makindye Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(4, 'Nakawa Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(5, 'Rubaga Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(6, 'Bukomero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(7, 'Butemba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(8, 'Dwaniro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(9, 'Gayaza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(10, 'Kapeke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(11, 'Kibiga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(12, 'Kiboga T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(13, 'Kyankwanzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(14, 'Lwamata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(15, 'Mulagi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(16, 'Muwanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(17, 'Nsambya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(18, 'Ntwetwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(19, 'Wattuba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(20, 'Bujjumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(21, 'Kalangala T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(22, 'Mugoye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(23, 'Bamunanika', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(24, 'Kalagala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(25, 'Kamira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(26, 'Kikyusa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(27, 'Zirobwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(28, 'Mazinga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(29, 'Bubeke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(30, 'Bufumira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(31, 'Kyamuswa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(32, 'Mazinga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(33, 'Bombo T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(34, 'Butuntumula', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(35, 'Katikamu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(36, 'Luwero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(37, 'Luwero T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(38, 'Makulubita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(39, 'Nyimbwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(40, 'Wobulenzi T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(41, 'Bigasa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(42, 'Butenga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(43, 'Kibinge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(44, 'Kitanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(45, 'Bukakata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(46, 'Buwunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(47, 'Kabonera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(48, 'Kisekka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(49, 'Kkingo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(50, 'Kyanamukaaka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(51, 'Lwengo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(52, 'Malongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(53, 'Mukungwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(54, 'Ndagwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(55, 'Bukulula', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(56, 'Kalungu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(57, 'Kyamuliibwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(58, 'Lukaya T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(59, 'Lwabenge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(60, 'Katwe/butego', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(61, 'Kimanya/kyabakuza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(62, 'Nyendo/senyange', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(63, '', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(64, 'Budde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(65, 'Bulo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(66, 'Kalamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(67, 'Kibibi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(68, 'Ngando', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(69, '', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(70, 'Kabulasoke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(71, 'Kyegonza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(72, 'Maddu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(73, 'Mpenja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(74, '', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(75, '', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(76, 'Buwama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(77, 'Kamengo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(78, 'Kiringente', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(79, 'Kituntu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(80, 'Mpigi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(81, 'Mpigi T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(82, 'Muduma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(83, 'Nkozi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(84, 'Bagezza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(85, 'Butoloogo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(86, 'Kasambya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(87, 'Kitenga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(88, 'Kiyuni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(89, 'Madudu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(90, 'Mubende T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(91, 'Bukuya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(92, 'Kassanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(93, 'Kiganda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(94, 'Myanzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(95, 'Buikwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(96, 'Kawolo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(97, 'Lugazi T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(98, 'Najja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(99, 'Najjembe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(100, 'Ngogwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(101, 'Njeru T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(102, 'Nkonkonjeru T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(103, 'Nyenga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(104, 'Ssi - Bukunja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(105, 'Wakisi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(106, 'Bugaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(107, 'Busamuzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(108, 'Bweema', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(109, 'Nairambi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(110, 'Goma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(111, 'Kkome Islands', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(112, 'Kyampisi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(113, 'Mukono T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(114, 'Nakisunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(115, 'Nama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(116, 'Ntenjeru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(117, 'Kasawo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(118, 'Kimenyedde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(119, 'Nabaale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(120, 'Nagojje', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(121, 'Ntunda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(122, 'Seeta- Namuganga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(123, 'Kakooge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(124, 'Kalongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(125, 'Kalungi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(126, 'Lwabyata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(127, 'Lwampanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(128, 'Nabiswera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(129, 'Nakasongola T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(130, 'Nakitoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(131, 'Wabinyonyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(132, 'Kakuuto', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(133, 'Kasasa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(134, 'Kibanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(135, 'Kifamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(136, 'Kyebe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(137, 'Byakabanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(138, 'Ddwaniro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(139, 'Kacheera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(140, 'Kagamba (buyamba)', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(141, 'Kyalulangira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(142, 'Lwamaggwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(143, 'Lwanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(144, 'Rakai T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(145, 'Kabira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(146, 'Kalisizo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(147, 'Kasaali', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(148, 'Kirumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(149, 'Kyotera T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(150, 'Lwankoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(151, 'Nabigasa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(152, 'Lwemiyaga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(153, 'Ntusi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(154, 'Lugusulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(155, 'Lwebitakuli', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(156, 'Mateete', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(157, 'Mijwala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(158, 'Sembabule T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(159, 'Bbaale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(160, 'Galiraaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(161, 'Kayonza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(162, 'Wabwoko-kitimbwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(163, 'Busana', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(164, 'Kangulumira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(165, 'Kayunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(166, 'Kayunga T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(167, 'Nazigo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(168, 'Kakiri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(169, 'Kasanje', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(170, 'Katabi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(171, 'Masulita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(172, 'Namayumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(173, 'Nsangi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(174, 'Ssisa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(175, 'Wakiso', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(176, 'Wakiso T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(177, 'Division A', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(178, 'Division B', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(179, 'Busukuma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(180, 'Gombe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(181, 'Kira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(182, 'Nabweru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(183, 'Nangabo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(184, 'Ssabagabo-makindye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(185, 'Kaliiro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(186, 'Kasagama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(187, 'Kinuuka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(188, 'Lyantonde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(189, 'Lyantonde T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(190, 'Mpumudde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(191, 'Butayunja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(192, 'Kakindu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(193, 'Maanyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(194, 'Malangala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(195, 'Bulera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(196, 'Busimbi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(197, 'Kikandwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(198, 'Mityana T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(199, 'Ssekanyonyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(200, 'Kapeeka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(201, 'Kasangombe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(202, 'Kikamulo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(203, 'Nakaseke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(204, 'Ngoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(205, 'Semuto', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(206, 'Wakyato', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(207, 'Banda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(208, 'Budhaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(209, 'Bugiri T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(210, 'Bulesa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(211, 'Bulidha', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(212, 'Buluguyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(213, 'Buswale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(214, 'Buwunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(215, 'Buyinja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(216, 'Iwemba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(217, 'Kapyanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(218, 'Muterere', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(219, 'Nabukalu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(220, 'Nankoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(221, 'Sigulu Islands', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(222, 'Mutumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(223, 'Buhehe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(224, 'Bulumbi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(225, 'Busia T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(226, 'Busitema', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(227, 'Buteba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(228, 'Dabani', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(229, 'Lumino', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(230, 'Lunyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(231, 'Masaba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(232, 'Masafu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(233, 'Buyanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(234, 'Ibulanku', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(235, 'Makuutu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(236, 'Namalemba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(237, 'Bulamagi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(238, 'Iganga T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(239, 'Nabitende', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(240, 'Nakalama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(241, 'Nakigo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(242, 'Nambale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(243, 'Namungalwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(244, 'Nawandala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(245, 'Bukanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(246, 'Bukooma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(247, 'Bulongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(248, 'Ikumbya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(249, 'Irongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(250, 'Nawampiti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(251, 'Waibuga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(252, 'Busedde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(253, 'Kakira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(254, 'Mafubira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(255, 'Central Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(256, 'Mpumudde/kimaka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(257, 'Masese/walukuba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(258, 'Budondo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(259, 'Butagaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(260, 'Buwenge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(261, 'Buwenge T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(262, 'Buyengo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(263, 'Bugaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(264, 'Buyende', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(265, 'Kagulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(266, 'Kidera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(267, 'Nkondo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(268, 'Balawoli', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(269, 'Bulopa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(270, 'Butansi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(271, 'Kamuli T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(272, 'Kitayunjwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(273, 'Nabwigulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(274, 'Namasagali', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(275, 'Namwendwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(276, 'Bugulumbya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(277, 'Kisozi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(278, 'Mbulamuti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(279, 'Nawanyago', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(280, 'Wankole', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(281, 'Benet', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(282, 'Binyiny', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(283, 'Kaproron', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(284, 'Kwanyiny', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(285, 'Ngenge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(286, 'Chema', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(287, 'Kapchorwa T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(288, 'Kaptanya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(289, 'Kaserem', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(290, 'Kawowo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(291, 'Sipi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(292, 'Tegeres', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(293, 'Kapujan', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(294, 'Katakwi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(295, 'Katakwi T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(296, 'Magoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(297, 'Ngariam', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(298, 'Toroma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(299, 'Usuk', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(300, 'Ongongoja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(301, 'Omodoi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(302, 'Atutur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(303, 'Kanyum', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(304, 'Kumi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(305, 'Kumi T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(306, 'Mukongoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(307, 'Nyero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(308, 'Ongino', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(309, 'Kapir', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(310, 'Kobwin', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(311, 'Mukura', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(312, 'Ngora', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(313, 'Bufumbo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(314, 'Bukonde', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(315, 'Bukyiende', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(316, 'Bungokho', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(317, 'Bungokho-mutoto', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(318, 'Busano', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(319, 'Busiu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(320, 'Busoba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(321, 'Nakaloke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(322, 'Namanyonyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(323, 'Wanale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(324, 'Industrial', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(325, 'Northern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(326, 'Wanale Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(327, 'Butebo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(328, 'Kabwangasi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(329, 'Kakoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(330, 'Kibale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(331, 'Petete', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(332, 'Bulangira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(333, 'Buseta', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(334, 'Kibuku', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(335, 'Kadama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(336, 'Tirinyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(337, 'Kagumu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(338, 'Kirika', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(339, 'Agule', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(340, 'Apopong', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(341, 'Gogonyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(342, 'Kameke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(343, 'Kasodo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(344, 'Pallisa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(345, 'Pallisa T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(346, 'Puti-puti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(347, 'Kamuge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(348, 'Bugondo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(349, 'Kadungulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(350, 'Pingire', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(351, 'Atiira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(352, 'Kateta', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(353, 'Kyere', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(354, 'Olio', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(355, 'Arapai', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(356, 'Asuret', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(357, 'Gweri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(358, 'Kamuda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(359, 'Katine', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(360, 'Soroti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(361, 'Tubur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(362, 'Eastern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(363, 'Northern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(364, 'Western Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(365, 'Kwapa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(366, 'Mella', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(367, 'Merikit', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(368, 'Molo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(369, 'Mukuju', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(370, 'Osukuru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(371, 'Eastern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(372, 'Western Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(373, 'Iyolwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(374, 'Kirewa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(375, 'Kisoko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(376, 'Mulanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(377, 'Nabuyoga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(378, 'Nagongera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(379, 'Paya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(380, 'Petta', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(381, 'Rubongi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(382, 'Alwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(383, 'Kaberamaido', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(384, 'Kobulubulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(385, 'Ochero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(386, 'Kaberamaido T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(387, 'Anyara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(388, 'Bululu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(389, 'Kalaki', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(390, 'Otuboi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(391, 'Baitambogwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(392, 'Buwaaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(393, 'Immanyiro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(394, 'Kigandalo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(395, 'Kityerera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(396, 'Malongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(397, 'Mayuge T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(398, 'Buhugu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(399, 'Bumasifwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(400, 'Busulani', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(401, 'Butandiga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(402, 'Buteza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(403, 'Buwalasi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(404, 'Buyobo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(405, 'Sironko T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(406, 'Zesui', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(407, 'Bukhulo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(408, 'Buginyanya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(409, 'Bukhalu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(410, 'Bulago', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(411, 'Bulegeni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(412, 'Buluganya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(413, 'Bunambutye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(414, 'Masiira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(415, 'Muyembe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(416, 'Sisiyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(417, 'Abarilela', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(418, 'Asamuk', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(419, 'Kuju', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(420, 'Orungo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(421, 'Wera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(422, 'Morungatuny', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(423, 'Acowa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(424, 'Kapelebyong', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(425, 'Obalanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(426, 'Budaka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(427, 'Iki-iki', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(428, 'Kaderuna', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(429, 'Kamonkoli', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(430, 'Lyama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(431, 'Naboa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(432, 'Kameruka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(433, 'Bubiita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(434, 'Bududa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(435, 'Bukibokolo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(436, 'Bukigai', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(437, 'Bulucheke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(438, 'Bumayoka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(439, 'Bushika', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(440, 'Bukedea', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(441, 'Kachumbala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(442, 'Kidongole', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(443, 'Kolir', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(444, 'Malera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(445, 'Bukwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(446, 'Chesower', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(447, 'Kabei', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(448, 'Suam', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(449, 'Budumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(450, 'Busaba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(451, 'Busolwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(452, 'Butaleja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(453, 'Kachonga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(454, 'Nawanjofu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(455, 'Nazimasa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(456, 'Bumanya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(457, 'Gadumire', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(458, 'Namugongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(459, 'Namwiwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(460, 'Nawaikoke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(461, 'Bubutu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(462, 'Bugobero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(463, 'Bumbo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(464, 'Bumwoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(465, 'Bupoto', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(466, 'Butiru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(467, 'Buwabwala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(468, 'Buwagogo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(469, 'Kaato', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(470, 'Sibanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(471, 'Bulange', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(472, 'Ivukula', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(473, 'Kibaale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(474, 'Magada', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(475, 'Namutumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(476, 'Nsinze', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(477, 'Adjumani T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(478, 'Adropi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(479, 'Ciforo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(480, 'Dzaipi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(481, 'Ofua', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(482, 'Pakelle', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(483, 'Aboke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(484, 'Akalo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(485, 'Alito', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(486, 'Ayer', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(487, 'Bala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(488, 'Abongomola', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(489, 'Aduku', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(490, 'Chawente', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(491, 'Inomo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(492, 'Nambieso', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(493, 'Akokoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(494, 'Apac', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(495, 'Apac T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(496, 'Cegere', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(497, 'Ibuje', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(498, 'Arua Hill', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(499, 'Oli River', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(500, 'Adumi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(501, 'Aroi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(502, 'Dadamu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(503, 'Manibe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(504, 'Oluko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(505, 'Pajulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(506, 'Offaka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(507, 'Ogoko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(508, 'Okollo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(509, 'Rhino Camp', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(510, 'Rigbo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(511, 'Uleppi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(512, 'Ajia', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(513, 'Arivu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(514, 'Logiri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(515, 'Vurra', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(516, 'Awach', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(517, 'Bungatira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(518, 'Paicho', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(519, 'Palaro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(520, 'Patiko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(521, 'Bar-dege', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(522, 'Laroo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(523, 'Layibi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(524, 'Pece', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(525, 'Bobi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(526, 'Koro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(527, 'Lakwana', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(528, 'Lalogi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(529, 'Odek', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(530, 'Ongako', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(531, 'Kitgum T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(532, 'Kitigum Matidi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(533, 'Labongo Akwang', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(534, 'Labongo Amida', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(535, 'Labongo Layamo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(536, 'Lagoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(537, 'Mucwini', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(538, 'Namokora', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(539, 'Omiya Anyima', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(540, 'Orom', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(541, 'Agoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(542, 'Lokung', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(543, 'Madi Opei', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(544, 'Parabek Ogili', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(545, 'Padibe East', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(546, 'Padibe West', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(547, 'Palabek Gem', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(548, 'Palabek Kal', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(549, 'Paloga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(550, 'Kacheri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(551, 'Kotido', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(552, 'Kotido T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(553, 'Nakapelimoru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(554, 'Panyangara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(555, 'Rengen', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(556, 'Adekokwok', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(557, 'Amach', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(558, 'Aromo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(559, 'Barr', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(560, 'Lira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(561, 'Ogur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(562, 'Adyel', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(563, 'Central', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(564, 'Ojwina', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(565, 'Railway', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(566, 'Abako', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(567, 'Aloi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(568, 'Amugo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(569, 'Apala', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(570, 'Omoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(571, 'Adwari', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(572, 'Okwang', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(573, 'Olilim', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(574, 'Orum', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(575, 'Iriiri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(576, 'Lokopo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(577, 'Lopei', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(578, 'Lotome', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(579, 'Matany', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(580, 'Ngoleriet', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(581, 'Katikekile', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(582, 'Nadunget', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(583, 'Rupa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(584, 'Northern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(585, 'Southern Division', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(586, 'Aliba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(587, 'Gimara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(588, 'Itula', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(589, 'Dufile', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(590, 'Lefori', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(591, 'Metu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(592, 'Moyo T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(593, 'Moyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(594, 'Pakwach', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(595, 'Pakwach T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(596, 'Panyango', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(597, 'Panyimur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(598, 'Wadelai', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(599, 'Atyak', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(600, 'Jangokoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(601, 'Kango', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(602, 'Nyapea', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(603, 'Paidha', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(604, 'Paidha T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(605, 'Zeu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(606, 'Akworo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(607, 'Erussi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(608, 'Kucwiny', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(609, 'Nebbi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(610, 'Nebbi T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(611, 'Nyaravur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(612, 'Parombo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(613, 'Kakomongole', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(614, 'Moruita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(615, 'Nakapiripirit T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(616, 'Namalu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(617, 'Lolachat', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(618, 'Lorengedwat', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(619, 'Nabilatuk', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(620, 'Amudat', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(621, 'Karita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(622, 'Loroo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(623, 'Acholibur', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(624, 'Atanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(625, 'Awer', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(626, 'Kilak', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(627, 'Laguti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(628, 'Lapul', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(629, 'Pader T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(630, 'Pajule', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(631, 'Puranga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(632, 'Adilang', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(633, 'Lapono', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(634, 'Lira Palwo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(635, 'Lukole', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(636, 'Omot', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(637, 'Paimol', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(638, 'Parabongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(639, 'Patongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(640, 'Wol', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(641, 'Apo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(642, 'Drajani', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(643, 'Kei', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(644, 'Kuru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(645, 'Midigo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(646, 'Odravu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(647, 'Romogi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(648, 'Yumbe T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(649, 'Abim', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(650, 'Alerek', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(651, 'Lotukei', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(652, 'Morulem', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(653, 'Nyakwae', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(654, 'Aputi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(655, 'Awelo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(656, 'Muntu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(657, 'Namasale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(658, 'Amuru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(659, 'Atiak', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(660, 'Lamogi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(661, 'Pabbo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(662, 'Alero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(663, 'Anaka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(664, 'Purongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(665, 'Koch Goma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(666, 'Agwata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(667, 'Batta', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(668, 'Dokolo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(669, 'Kangai', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(670, 'Kwera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(671, 'Kaabong T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(672, 'Kalapata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(673, 'Kapedo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(674, 'Karenga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(675, 'Kathile', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(676, 'Lolelia', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(677, 'Loyoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(678, 'Sidok', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(679, 'Kaabong Subcounty', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(680, 'Koboko T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(681, 'Kuluba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(682, 'Lobule', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(683, 'Ludara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(684, 'Midia', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(685, 'Aber', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(686, 'Acaba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(687, 'Iceme', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(688, 'Loro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(689, 'Minakulu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(690, 'Ngai', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(691, 'Otwal', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(692, 'Yivu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(693, 'Nyadri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(694, 'Oleba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(695, 'Oluvu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(696, 'Tara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(697, 'Oluffe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(698, 'Kijomoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(699, 'Aii - Vu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(700, 'Beleafe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(701, 'Katrini', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(702, 'Odupi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(703, 'Omugo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(704, 'Uriama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(705, 'Bubandi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(706, 'Bubukwanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(707, 'Bundibugyo T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(708, 'Busaru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(709, 'Harugali', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(710, 'Kasitu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(711, 'Nduguto', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(712, 'Kanara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(713, 'Karugutu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(714, 'Rwebisengo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(715, 'Bihanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(716, 'Burere', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(717, 'Karungu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(718, 'Rwengwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(719, 'Katerera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(720, 'Katunguru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(721, 'Kichwamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(722, 'Ryeru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(723, 'Bumbaire', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(724, 'Bushenyi T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(725, 'Kakanju', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(726, 'Kyabugimbi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(727, 'Kyamuhunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(728, 'Kyeizoba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(729, 'Nyabubare', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(730, 'Bitereko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(731, 'Kabira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(732, 'Kanyabwanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(733, 'Kashenshero', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(734, 'Kiyanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(735, 'Mitooma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(736, 'Mutara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(737, 'Bugongi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(738, 'Kabwohe-itendero T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(739, 'Kagango', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(740, 'Kigarama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(741, 'Kitagata', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(742, 'Kyangyenyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(743, 'Shuuku', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(744, 'Buhanika', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(745, 'Buseruka', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(746, 'Busiisi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(747, 'Hoima T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(748, 'Kigorobya T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(749, 'Kigorobya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(750, 'Kitoba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(751, 'Kyabigambire', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(752, 'Bugambe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(753, 'Buhimba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(754, 'Kabwoya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(755, 'Kiziranfumbi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(756, 'Kyangwali', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(757, 'Kabale Central', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(758, 'Kabale Northern', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(759, 'Kabale Southern', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(760, 'Buhara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(761, 'Kaharo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(762, 'Kamuganguzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(763, 'Kitumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(764, 'Kyanamira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(765, 'Maziba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(766, 'Rubaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(767, 'Bubare', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(768, 'Bufundi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(769, 'Hamurwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(770, 'Ikumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(771, 'Muko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(772, 'Bukinda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(773, 'Kamwezi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(774, 'Kashambya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(775, 'Rwamucucu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(776, 'Buheesi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(777, 'Kibiito', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(778, 'Kisomoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(779, 'Rwiimi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(780, 'Bukuku', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(781, 'Busoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(782, 'Hakibaale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(783, 'Karambi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(784, 'Kicwamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(785, 'Mugusu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(786, 'Ruteete', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(787, 'Eastern', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(788, 'Western', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(789, 'Southern', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(790, 'Bwera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(791, 'Ihandiro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(792, 'Karambi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(793, 'Kisinga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(794, 'Kitholhu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(795, 'Kyarumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(796, 'Kyondo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(797, 'Mahango', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(798, 'Munkunyu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(799, 'Nyakiyumbu', '2020-05-21 15:27:53', '2020-05-21 15:27:53');
INSERT INTO `villages` (`id`, `village`, `created_at`, `updated_at`) VALUES
(800, 'Bugoye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(801, 'Karusandara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(802, 'Kasese T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(803, 'Katwe Kabatoro T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(804, 'Kilembe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(805, 'Kitswamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(806, 'Kyabarungira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(807, 'L.katwe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(808, 'Maliba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(809, 'Muhokya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(810, 'Rukoki', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(811, 'Bwanswa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(812, 'Kakindo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(813, 'Kasambya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(814, 'Kisiita', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(815, 'Nalweyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(816, 'Nkooko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(817, 'Bwikara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(818, 'Kagadi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(819, 'Kiryanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(820, 'Kyanaisoke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(821, 'Mabaale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(822, 'Mpeefu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(823, 'Muhoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(824, 'Rugashari', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(825, 'Bwamiramira', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(826, 'Kibaale T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(827, 'Kyebando', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(828, 'Matale', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(829, 'Mugarama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(830, 'Bukimbiri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(831, 'Busanza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(832, 'Chahi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(833, 'Kanaba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(834, 'Kirundo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(835, 'Kisoro T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(836, 'Muramba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(837, 'Murora', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(838, 'Nyabwishenya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(839, 'Nyakabande', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(840, 'Nyakinama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(841, 'Nyarubuye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(842, 'Nyarusiza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(843, 'Nyundo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(844, 'Budongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(845, 'Bwijanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(846, 'Karujubu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(847, 'Kimengo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(848, 'Masindi T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(849, 'Miirya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(850, 'Nyangahya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(851, 'Pakanyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(852, 'Kigumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(853, 'Kiryandongo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(854, 'Masindi -port', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(855, 'Mutunda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(856, 'Bubaare', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(857, 'Bukiro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(858, 'Kagongi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(859, 'Kakiika', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(860, 'Kashare', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(861, 'Rubaya', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(862, 'Rubindi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(863, 'Rwanyamahembe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(864, 'Kakoba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(865, 'Kamukuzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(866, 'Nyamitanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(867, 'Bugamba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(868, 'Mwizi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(869, 'Ndaija', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(870, 'Nyakayojo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(871, 'Rugando', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(872, 'Bwongyera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(873, 'Ihunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(874, 'Kibatsi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(875, 'Nyabihoko', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(876, 'Itojo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(877, 'Ntugamo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(878, 'Ntungamo T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(879, 'Nyakyera', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(880, 'Ruhaama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(881, 'Rukoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(882, 'Rweikiniro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(883, 'Kayonza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(884, 'Ngoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(885, 'Rubaare', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(886, 'Rugarama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(887, 'Buyanja', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(888, 'Kebisoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(889, 'Nyakishenyi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(890, 'Nyarushanje', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(891, 'Bugangari', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(892, 'Buhunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(893, 'Bwambara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(894, 'Kagunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(895, 'Nyakagyeme', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(896, 'Ruhinda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(897, 'Rukungiri T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(898, 'Bwiizi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(899, 'Kahunge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(900, 'Kamwenge', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(901, 'Kamwenge T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(902, 'Nkoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(903, 'Kicheche', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(904, 'Mahyoro', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(905, 'Ntara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(906, 'Nyabbani', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(907, 'Kambuga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(908, 'Kanyantorogo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(909, 'Kayonza', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(910, 'Kihiihi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(911, 'Kirima', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(912, 'Nyamirama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(913, 'Rugyeyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(914, 'Rutenga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(915, 'Kanungu T.c', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(916, 'Mpungu', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(917, 'Hapuyo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(918, 'Kakabara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(919, 'Kasule', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(920, 'Kyegegwa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(921, 'Mpara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(922, 'Bufunjo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(923, 'Bugaaki', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(924, 'Butiiti', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(925, 'Katoke', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(926, 'Kihuura', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(927, 'Kyarusozi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(928, 'Kyenjojo T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(929, 'Nyankwanzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(930, 'Nyantungo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(931, 'Biiso', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(932, 'Buliisa', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(933, 'Bisheshe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(934, 'Ibanda T.c.', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(935, 'Ishongororo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(936, 'Kicuzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(937, 'Kikyenkye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(938, 'Nyabuhikye', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(939, 'Nyamarebe', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(940, 'Rukiri', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(941, 'Endinzi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(942, 'Kashumba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(943, 'Ngarama', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(944, 'Rugaaga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(945, 'Birere', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(946, 'Kabingo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(947, 'Kabuyanda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(948, 'Kikagate', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(949, 'Masha', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(950, 'Nyakitunda', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(951, 'Buremba', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(952, 'Burunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(953, 'Kanoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(954, 'Kazo', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(955, 'Rwemikoma', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(956, 'Kanyaryeru', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(957, 'Kashongi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(958, 'Kenshunga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(959, 'Kikatsi', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(960, 'Kinoni', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(961, 'Nyakashashara', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(962, 'Sanga', '2020-05-21 15:27:53', '2020-05-21 15:27:53'),
(963, 'Agirigiroi', '2020-05-21 16:27:02', '2020-05-21 16:27:02'),
(964, 'Morukakise', '2020-05-21 19:31:43', '2020-05-21 16:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `weeks`
--

CREATE TABLE `weeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `week` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeks`
--

INSERT INTO `weeks` (`id`, `user_id`, `week`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, '1 week', 'active', '2020-05-26 10:54:09', '2020-05-26 10:54:09'),
(2, 9, '2 weeks', 'active', '2020-05-26 10:54:09', '2020-05-26 10:54:09'),
(3, 9, '3 weeks', 'active', '2020-05-26 10:54:09', '2020-05-26 10:54:09'),
(4, 9, '4 weeks', 'active', '2020-05-26 10:54:09', '2020-05-26 10:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `user_id`, `weight`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, '0-5 kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(2, 9, '6-10 kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(3, 9, '10-15kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(4, 9, '15-20kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(5, 9, '20-25kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(6, 9, '25-30kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(7, 9, '30-35kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(8, 9, '35-40kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(9, 9, '40-45kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(10, 9, '45-50kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(11, 9, '50-55kgss', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(12, 9, '55-60kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(13, 9, '60-65kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(14, 9, '65-70kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(15, 9, '70-75kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(16, 9, '75-80kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(17, 9, '80-85kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(18, 9, '85-90kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(19, 9, '90-95kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(20, 9, '95-100kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(21, 9, '100-105kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(22, 9, '105-110kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(23, 9, '110-115kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(24, 9, '115-120kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(25, 9, '125-125kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(26, 9, '125-130kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(27, 9, '130-135kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(28, 9, '135-140kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(29, 9, '140-145kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(30, 9, '145-150kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(31, 9, '150-155kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(32, 9, '155-160kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(33, 9, '160-165kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(34, 9, '165-170kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(35, 9, '170-175kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(36, 9, '175-180kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(37, 9, '180-185kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(38, 9, '185-190kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(39, 9, '190-195kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(40, 9, '195-200kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(41, 9, '200-205kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(42, 9, '205-210kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(43, 9, '210-215kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(44, 9, '215-220kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(45, 9, '220-225kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(46, 9, '225-230kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(47, 9, '230-235kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(48, 9, '235-240kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(49, 9, '240-245kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(50, 9, '245-250kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(51, 9, '250-255kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(52, 9, '255-260kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(53, 9, '260-265kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(54, 9, '265-270kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(55, 9, '270-275kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(56, 9, '275-280kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(57, 9, '280-285kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(58, 9, '285-290kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(59, 9, '290-295kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(60, 9, '295-300kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(61, 9, '300-305kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(62, 9, '305-310kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(63, 9, '310-315kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(64, 9, '315-320kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(65, 9, '320-325kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(66, 9, 'over 325kgs', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(67, 9, 'half tone', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(68, 9, '1 tone', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18'),
(69, 9, 'over 1 tone', 'active', '2020-05-26 10:55:18', '2020-05-26 10:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(191) NOT NULL,
  `status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `conscents`
--
ALTER TABLE `conscents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`district_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `doctors_requests`
--
ALTER TABLE `doctors_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`product_id`,`district_id`,`county_id`,`village_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`role_id`,`district_id`,`county_id`,`village_id`,`product_id`),
  ADD KEY `signs_symptoms_id` (`problem`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `village_id` (`village_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `examination_treatments`
--
ALTER TABLE `examination_treatments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `signs_symptom_id` (`signs_symptom_id`,`weight_id`,`disease_id`,`drug_id`,`week_id`,`month_id`),
  ADD KEY `disease_id` (`disease_id`),
  ADD KEY `drug_id` (`drug_id`),
  ADD KEY `month_id` (`month_id`),
  ADD KEY `week_id` (`week_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `famers`
--
ALTER TABLE `famers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`profile_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`district_id`,`county_id`,`village_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`product_id`,`breed_id`,`weight_id`,`district_id`,`county_id`,`village_id`,`category_id`),
  ADD KEY `breed_id` (`breed_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `village_id` (`village_id`),
  ADD KEY `weight_id` (`weight_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `market_products`
--
ALTER TABLE `market_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`role_id`,`permission_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `pests`
--
ALTER TABLE `pests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`,`district_id`,`county_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `day_id` (`market_name`),
  ADD KEY `day_id_2` (`day_id`);

--
-- Indexes for table `produces`
--
ALTER TABLE `produces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_galleries`
--
ALTER TABLE `project_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `recent_news`
--
ALTER TABLE `recent_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`comment_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service_features`
--
ALTER TABLE `service_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `signs_symptoms`
--
ALTER TABLE `signs_symptoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sub_counties`
--
ALTER TABLE `sub_counties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `vet_reports`
--
ALTER TABLE `vet_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `weeks`
--
ALTER TABLE `weeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conscents`
--
ALTER TABLE `conscents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `doctors_requests`
--
ALTER TABLE `doctors_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `examination_treatments`
--
ALTER TABLE `examination_treatments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `famers`
--
ALTER TABLE `famers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `market_products`
--
ALTER TABLE `market_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `permission_roles`
--
ALTER TABLE `permission_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT for table `permits`
--
ALTER TABLE `permits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pests`
--
ALTER TABLE `pests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produces`
--
ALTER TABLE `produces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_galleries`
--
ALTER TABLE `project_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recent_news`
--
ALTER TABLE `recent_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_features`
--
ALTER TABLE `service_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signs_symptoms`
--
ALTER TABLE `signs_symptoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_counties`
--
ALTER TABLE `sub_counties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=963;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vet_reports`
--
ALTER TABLE `vet_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=965;

--
-- AUTO_INCREMENT for table `weeks`
--
ALTER TABLE `weeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD CONSTRAINT `blog_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `breeds`
--
ALTER TABLE `breeds`
  ADD CONSTRAINT `breeds_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `conscents`
--
ALTER TABLE `conscents`
  ADD CONSTRAINT `conscents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `conscents_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `conscents_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `days_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `diseases`
--
ALTER TABLE `diseases`
  ADD CONSTRAINT `diseases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctors_requests`
--
ALTER TABLE `doctors_requests`
  ADD CONSTRAINT `doctors_requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `doctors_requests_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `doctors_requests_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `doctors_requests_ibfk_4` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`),
  ADD CONSTRAINT `doctors_requests_ibfk_5` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`);

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD CONSTRAINT `emergencies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emergencies_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `emergencies_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `emergencies_ibfk_4` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`),
  ADD CONSTRAINT `emergencies_ibfk_5` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`),
  ADD CONSTRAINT `emergencies_ibfk_6` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `examination_treatments`
--
ALTER TABLE `examination_treatments`
  ADD CONSTRAINT `examination_treatments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_2` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_3` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_4` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_5` FOREIGN KEY (`signs_symptom_id`) REFERENCES `signs_symptoms` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_6` FOREIGN KEY (`week_id`) REFERENCES `weeks` (`id`),
  ADD CONSTRAINT `examination_treatments_ibfk_7` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `famers`
--
ALTER TABLE `famers`
  ADD CONSTRAINT `famers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `famers_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`);

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `farms`
--
ALTER TABLE `farms`
  ADD CONSTRAINT `farms_ibfk_1` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`),
  ADD CONSTRAINT `farms_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `farms_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `farms_ibfk_4` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`);

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_ibfk_3` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`),
  ADD CONSTRAINT `items_ibfk_4` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `items_ibfk_6` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `items_ibfk_7` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`),
  ADD CONSTRAINT `items_ibfk_8` FOREIGN KEY (`weight_id`) REFERENCES `weights` (`id`),
  ADD CONSTRAINT `items_ibfk_9` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `market_products`
--
ALTER TABLE `market_products`
  ADD CONSTRAINT `market_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `months`
--
ALTER TABLE `months`
  ADD CONSTRAINT `months_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD CONSTRAINT `permission_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `permission_roles_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_roles_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `permits`
--
ALTER TABLE `permits`
  ADD CONSTRAINT `permits_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `permits_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `permits_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `pests`
--
ALTER TABLE `pests`
  ADD CONSTRAINT `pests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `prices_ibfk_2` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`),
  ADD CONSTRAINT `prices_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `prices_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `prices_ibfk_5` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `project_galleries`
--
ALTER TABLE `project_galleries`
  ADD CONSTRAINT `project_galleries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `recent_news`
--
ALTER TABLE `recent_news`
  ADD CONSTRAINT `recent_news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `service_features`
--
ALTER TABLE `service_features`
  ADD CONSTRAINT `service_features_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `signs_symptoms`
--
ALTER TABLE `signs_symptoms`
  ADD CONSTRAINT `signs_symptoms_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `vet_reports`
--
ALTER TABLE `vet_reports`
  ADD CONSTRAINT `vet_reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `weeks`
--
ALTER TABLE `weeks`
  ADD CONSTRAINT `weeks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `weights`
--
ALTER TABLE `weights`
  ADD CONSTRAINT `weights_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `years`
--
ALTER TABLE `years`
  ADD CONSTRAINT `years_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
