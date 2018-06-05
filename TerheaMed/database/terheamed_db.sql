-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 08:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terheamed_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contentmed`
--

CREATE TABLE `contentmed` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `density` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contentmed`
--

INSERT INTO `contentmed` (`id`, `medicine_id`, `name`, `density`, `created_at`, `updated_at`) VALUES
(1, 89, 'Paracetamol', '10 mg', '2018-04-16 00:07:48', '2018-04-16 19:55:48'),
(2, 89, 'Cetirizine dihydrochloride', '5 mg', '2018-04-16 19:57:48', '2018-04-16 19:57:48'),
(3, 78, 'vitamins B1, B2, and B3, C', 'null', '2018-04-16 20:06:53', '2018-04-23 22:41:54'),
(18, 91, 'VItamin E', '10 gram', '2018-04-16 21:06:16', '2018-04-16 21:06:16'),
(22, 89, 'Calcium', '10 mg', '2018-04-17 00:09:28', '2018-04-17 00:09:28'),
(23, 44, 'Each tablet contains:', NULL, '2018-04-19 00:57:37', '2018-04-19 01:01:47'),
(24, 44, 'Aspirin', '325 mg', '2018-04-19 01:01:47', '2018-04-19 01:01:47'),
(25, 48, 'Each tablet contains:', NULL, '2018-04-19 01:03:48', '2018-04-22 17:55:12'),
(26, 48, 'Phenylpropanolamine  HCI', '25 mg', '2018-04-19 01:03:49', '2018-04-19 01:03:49'),
(27, 48, 'Chlorphenamine Maleate', '2 mg', '2018-04-19 01:03:49', '2018-04-19 01:03:49'),
(28, 48, 'Paracetamol', '500 mg', '2018-04-19 01:03:49', '2018-04-19 01:03:49'),
(29, 48, 'Each 5 mL (1 teaspoonful) suspension contains:', 'null', '2018-04-19 01:04:57', '2018-04-22 17:54:30'),
(30, 48, 'Phenylephrine HCI', '2.5 mg', '2018-04-19 01:04:57', '2018-04-19 01:04:57'),
(31, 48, 'Chlorphenamine Maleate', '500 mg', '2018-04-19 01:04:57', '2018-04-19 01:04:57'),
(32, 48, 'Paracetamol', '125 mg', '2018-04-19 01:04:57', '2018-04-19 01:04:57'),
(33, 49, 'Paracetamol', '500 mg', '2018-04-19 01:05:35', '2018-04-19 01:05:35'),
(34, 50, 'Ibuprofen', '200 mg', '2018-04-19 01:06:34', '2018-04-19 01:06:34'),
(35, 51, 'Paracetamol', '500 mg', '2018-04-19 01:07:33', '2018-04-19 01:07:33'),
(36, 51, 'Caffeine', '65 mg', '2018-04-19 01:07:33', '2018-04-19 01:07:33'),
(37, 52, 'Paracetamol', '500 mg', '2018-04-19 01:08:51', '2018-04-19 01:08:51'),
(38, 90, 'Ibuprofen', '400g', '2018-04-19 01:17:02', '2018-04-19 01:17:02'),
(39, 53, 'Each tablet contains:', NULL, '2018-04-19 01:28:15', '2018-04-19 01:28:15'),
(40, 53, 'Phenylpropanolamine  HCI', '25 mg', '2018-04-19 01:28:15', '2018-04-19 01:28:15'),
(41, 53, 'Chlorphenamine Maleate', '2 mg', '2018-04-19 01:28:15', '2018-04-19 01:28:15'),
(42, 53, 'Paracetamol', '500', '2018-04-19 01:28:15', '2018-04-19 01:28:15'),
(43, 54, 'Ambroxol HCI', '75 mg', '2018-04-19 01:29:19', '2018-04-19 01:29:19'),
(44, 55, 'Each 5 mL (1 teaspoonful) contains:', NULL, '2018-04-19 01:31:32', '2018-04-19 01:31:32'),
(45, 55, 'Ambroxol (as hydrochloride)', '30 mg', '2018-04-19 01:31:32', '2018-04-19 01:31:32'),
(46, 56, 'Each tablet contains:', NULL, '2018-04-19 01:33:14', '2018-04-19 01:33:14'),
(47, 56, 'Paracetamol', '325 mg', '2018-04-19 01:33:14', '2018-04-19 01:33:14'),
(48, 56, 'Phenylpropanolamine HCI', '20 mg', '2018-04-19 01:33:14', '2018-04-19 01:33:14'),
(49, 56, 'Chlorphenamine Maleate', '1 mg', '2018-04-19 01:33:14', '2018-04-19 01:33:14'),
(50, 57, 'Each tablet contains:', NULL, '2018-04-19 01:34:56', '2018-04-19 01:34:56'),
(51, 57, 'Phenylpropanolamine HCI', '10 mg', '2018-04-19 01:34:56', '2018-04-19 01:34:56'),
(52, 57, 'Chlorphenamine Maleate', '2 mg', '2018-04-19 01:34:56', '2018-04-19 01:34:56'),
(53, 57, 'Paracetamol', '500 mg', '2018-04-19 01:34:57', '2018-04-19 01:34:57'),
(54, 58, 'Each tablet contains:', NULL, '2018-04-19 01:36:09', '2018-04-19 01:36:09'),
(55, 58, 'Phenylephrine HCI', '10 mg', '2018-04-19 01:36:09', '2018-04-19 01:36:09'),
(56, 58, 'Paracetamol', '500 mg', '2018-04-19 01:36:10', '2018-04-19 01:36:10'),
(57, 59, 'Each tablet contains:', NULL, '2018-04-19 01:37:22', '2018-04-19 01:37:22'),
(58, 59, 'Phenylephrine HCI', '10 mg', '2018-04-19 01:37:22', '2018-04-19 01:37:22'),
(59, 59, 'Paracetamol', '500 mg', '2018-04-19 01:37:22', '2018-04-19 01:37:22'),
(60, 60, 'Each mL (Oral Drops) contains:', NULL, '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(61, 60, 'Carbocisteine', '40 mg', '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(62, 60, 'Each 5 mL (1 teaspoonful) syrup contains:', NULL, '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(63, 60, 'Carbocisteine', '100 mg/200 mg', '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(64, 60, 'Each 5 mL (1 teaspoonful) forte adult suspension contains:', NULL, '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(65, 60, 'Carbocisteine', '500 mg', '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(66, 60, 'Each capsule contains:', NULL, '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(67, 60, 'Carbocisteine', '500 mg', '2018-04-19 01:46:38', '2018-04-19 01:46:38'),
(68, 61, 'Each capsule contains:', NULL, '2018-04-19 01:48:30', '2018-04-19 01:48:30'),
(69, 61, 'Dextromethorphan HBr', '15 mg', '2018-04-19 01:48:30', '2018-04-19 01:48:30'),
(70, 61, 'Phenylephrine HCI', '10 mg', '2018-04-19 01:48:30', '2018-04-19 01:48:30'),
(71, 61, 'Paracetamol', '325 mg', '2018-04-19 01:48:30', '2018-04-19 01:48:30'),
(72, 62, 'Each capsule contains:', NULL, '2018-04-19 01:49:55', '2018-04-19 01:49:55'),
(73, 62, 'Carbocisteine', '500 mg', '2018-04-19 01:49:55', '2018-04-19 01:49:55'),
(74, 63, 'Lagundi Leaf (Vitex negundo L.)', NULL, '2018-04-19 01:50:53', '2018-04-19 01:50:53'),
(75, 64, 'Each tablet/capsule contains:', NULL, '2018-04-19 01:52:42', '2018-04-19 01:52:42'),
(76, 64, 'Ibuprofen', '200 mg', '2018-04-19 01:52:42', '2018-04-19 01:52:42'),
(77, 64, 'Paracetamol', '325 mg', '2018-04-19 01:52:42', '2018-04-19 01:52:42'),
(78, 65, 'Each mL Syrup (Oral drops) contains:', 'null', '2018-04-19 01:57:12', '2018-04-19 01:57:19'),
(79, 65, 'Cetirizin dihydrochloride', '2.5 mg', '2018-04-19 01:57:12', '2018-04-19 01:57:12'),
(80, 65, 'Each 5 mL (1 teaspooful) syrup contains:', 'null', '2018-04-19 01:57:12', '2018-04-19 01:57:19'),
(81, 65, 'Cetirizin dihydrochloride', '2.5 mg', '2018-04-19 01:57:12', '2018-04-19 01:57:12'),
(82, 66, 'Each tablet contains:', NULL, '2018-04-19 01:58:51', '2018-04-19 01:58:51'),
(83, 66, 'Loratadine', '10 mg', '2018-04-19 01:58:51', '2018-04-19 01:58:51'),
(84, 66, 'Each 5 mL (1teaspoonful) syrup contains:', NULL, '2018-04-19 01:58:51', '2018-04-19 01:58:51'),
(85, 66, 'Loratadine', '5 mg', '2018-04-19 01:58:52', '2018-04-19 01:58:52'),
(86, 67, 'Each gram of cream/ointment contains:', NULL, '2018-04-19 02:00:15', '2018-04-19 02:00:15'),
(87, 67, 'Mometasone furoate', '1 mg (0.1%)', '2018-04-19 02:00:15', '2018-04-19 02:00:15'),
(88, 68, 'Each film-coated tablet contains:', NULL, '2018-04-19 02:03:35', '2018-04-19 02:03:35'),
(89, 68, 'Cetirizin dihydrochloride', '10 mg', '2018-04-19 02:03:35', '2018-04-19 02:03:35'),
(90, 69, 'Each syrup (Oral drops) contains:', NULL, '2018-04-19 02:05:50', '2018-04-19 02:05:50'),
(91, 69, 'Cetirizin dihydrochloride', '2.5 mg', '2018-04-19 02:05:50', '2018-04-19 02:05:50'),
(92, 69, 'Each 5 mL (1 teaspoonful) syrup contains', NULL, '2018-04-19 02:05:50', '2018-04-19 02:05:50'),
(93, 69, 'Cetirizin dihydrochloride', '5 mg', '2018-04-19 02:05:51', '2018-04-19 02:05:51'),
(94, 69, 'Each film-coated tablet contains:', NULL, '2018-04-19 02:05:51', '2018-04-19 02:05:51'),
(95, 69, 'Cetirizin dihydrochloride', '5 mg', '2018-04-19 02:05:51', '2018-04-19 02:05:51'),
(96, 70, 'Each film-coated tablet contains:', NULL, '2018-04-19 02:07:02', '2018-04-19 02:07:02'),
(97, 70, 'Cetirizin dihydrochloride', '5 mg', '2018-04-19 02:07:02', '2018-04-19 02:07:02'),
(98, 70, 'Phenylephrine HCI', '10 mg', '2018-04-19 02:07:02', '2018-04-19 02:07:02'),
(99, 71, 'Camphor', '4.0 %', '2018-04-19 02:08:32', '2018-04-19 02:08:32'),
(100, 91, 'This medicine contains:', NULL, '2018-04-19 02:12:38', '2018-04-19 02:12:38'),
(101, 91, 'Loperamide – an antidiarrheal agent which slows intestinal movement and reduces fluid and salt loss in the intestines, resulting and improved stool consistency.', NULL, '2018-04-19 02:12:38', '2018-04-19 02:12:38'),
(102, 92, 'Enzyplex has a combination of digestive enzymes and vitamin B-complex.', NULL, '2018-04-22 20:57:45', '2018-04-22 20:57:45'),
(103, 92, 'Amylase', 'Breaks down carbohydrates to gluco.', '2018-04-22 20:57:45', '2018-04-22 20:57:45'),
(104, 92, 'Protease', 'Breaks down fat to glycerol.', '2018-04-22 20:57:45', '2018-04-22 20:57:45'),
(105, 92, 'Lipase', 'Breaks down protein to amino acid.', '2018-04-22 20:57:45', '2018-04-22 20:57:45'),
(106, 93, 'Each chewable tablet contains:', NULL, '2018-04-22 21:02:14', '2018-04-22 21:02:14'),
(107, 93, 'Aluminum Hydroxide', '178 mg', '2018-04-22 21:02:14', '2018-04-22 21:02:14'),
(108, 93, 'Magnesium Hydroxide', '233 mg', '2018-04-22 21:02:14', '2018-04-22 21:02:14'),
(109, 93, 'Simeticone', '30 mg', '2018-04-22 21:02:14', '2018-04-22 21:02:14'),
(110, 94, 'Each chewable tablet contains:', NULL, '2018-04-22 21:05:50', '2018-04-22 21:05:50'),
(111, 94, 'Magnesium Hydroxide', '165 m', '2018-04-22 21:05:50', '2018-04-22 21:05:50'),
(112, 94, 'Calcium Carbonate', '800 mg', '2018-04-22 21:05:50', '2018-04-22 21:05:50'),
(113, 94, 'Famotidine', '10 mg', '2018-04-22 21:05:50', '2018-04-22 21:05:50'),
(114, 94, 'Each chewable tablet contains:', NULL, '2018-04-22 21:06:23', '2018-04-22 21:06:23'),
(115, 94, 'Magnesium Hydroxide', '165 m', '2018-04-22 21:06:23', '2018-04-22 21:06:23'),
(116, 94, 'Calcium Carbonate', '800 mg', '2018-04-22 21:06:23', '2018-04-22 21:06:23'),
(117, 94, 'Famotidine', '10 mg', '2018-04-22 21:06:23', '2018-04-22 21:06:23'),
(118, 95, 'Each tablet contains:', NULL, '2018-04-22 21:11:56', '2018-04-22 21:11:56'),
(119, 95, 'Loperamide Hydrochloride', '2 mg', '2018-04-22 21:11:56', '2018-04-22 21:11:56'),
(120, 78, 'magnesium', NULL, '2018-04-23 22:41:53', '2018-04-23 22:41:53'),
(121, 78, 'folic acid', NULL, '2018-04-23 22:41:54', '2018-04-23 22:41:54'),
(122, 78, 'zinc', NULL, '2018-04-23 22:41:54', '2018-04-23 22:41:54'),
(123, 78, 'phosphorus', NULL, '2018-04-23 22:41:54', '2018-04-23 22:41:54'),
(124, 78, 'manganese, and has high dietary fiber.', NULL, '2018-04-23 22:41:54', '2018-04-23 22:41:54'),
(125, 98, 'Iron', '600 mg', '2018-05-07 22:28:50', '2018-05-07 22:28:50'),
(126, 98, 'Folic Acid', '600 mg', '2018-05-07 22:28:50', '2018-05-07 22:28:50'),
(127, 98, 'Pyridoxine HCI', '20 mg', '2018-05-07 22:28:50', '2018-05-07 22:28:50'),
(128, 98, 'Cyanocobalamin', '25 mg', '2018-05-07 22:28:50', '2018-05-07 22:28:50'),
(129, 99, 'Calciumade', '600mg', '2018-05-07 22:32:27', '2018-05-07 22:32:27'),
(130, 99, 'Colecalciferol', '400IU', '2018-05-07 22:32:27', '2018-05-07 22:32:27'),
(131, 99, 'Magnesium', '40 mg', '2018-05-07 22:32:27', '2018-05-07 22:32:27'),
(132, 99, 'Zinc', '7.5 mg', '2018-05-07 22:32:27', '2018-05-07 22:32:27'),
(133, 99, 'Manganese', '1.8 mg', '2018-05-07 22:32:27', '2018-05-07 22:32:27'),
(134, 100, 'Thiamine Mononitrate (Vitamin B1)', '50 mg', '2018-05-07 22:36:24', '2018-05-07 22:36:24'),
(135, 100, 'Riboflavin (Vitamin B2)', '20 mg', '2018-05-07 22:36:24', '2018-05-07 22:36:24'),
(136, 100, 'Pyridoxine Hydrochloride (Vitamin B6)', '5 mg', '2018-05-07 22:36:24', '2018-05-07 22:36:24'),
(137, 100, 'Cyanocobalamin (Vitamin B12)', '5 mg', '2018-05-07 22:36:24', '2018-05-07 22:36:24'),
(138, 100, 'Nicotinamide', '50 mg', '2018-05-07 22:36:24', '2018-05-07 22:36:24'),
(139, 100, 'Calcium Pantothenate', '20 mg', '2018-05-07 22:36:25', '2018-05-07 22:36:25'),
(140, 100, 'Ascorbic Acid (Vitamin C)', '500 mg', '2018-05-07 22:36:25', '2018-05-07 22:36:25'),
(141, 101, 'Retinol Palmitate (Vitamin A)', '3,000 IU', '2018-05-07 22:43:34', '2018-05-07 22:43:34'),
(142, 101, 'Cholecalciferol (Vitamin D3)', '200 IU', '2018-05-07 22:43:34', '2018-05-07 22:43:34'),
(143, 101, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '5 IU', '2018-05-07 22:43:34', '2018-05-07 22:43:34'),
(144, 101, 'Thiamine Mononitrate (Vitamin B1)', '7.5 mg', '2018-05-07 22:43:34', '2018-05-07 22:43:34'),
(145, 101, 'Riboflavin (Vitamin B2)', '8.5 mg', '2018-05-07 22:43:34', '2018-05-07 22:43:34'),
(146, 101, 'Pyridoxine Hydrochloride (Vitamin B6)', '10 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(147, 101, 'Nicotinamide', '20 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(148, 101, 'Ascorbic Acid (Vitamin C)', '100 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(149, 101, 'Calcium (as calcium carbonate)', '100 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(150, 101, 'Iron, elemental', '10 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(151, 101, 'Zinc (sulfate)', '500 mg', '2018-05-07 22:43:35', '2018-05-07 22:43:35'),
(152, 101, 'Copper (copper sulfate)', '1 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(153, 101, 'Magnesium (as sulfate)', '3 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(154, 101, 'Manganese (as sulfate)', '650 mcg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(155, 101, 'Molybdenum (as Sodium molybdenum)', '45 mcg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(156, 101, 'Phosphorus (as Dibasic Calcium Phosphate)', '50 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(157, 101, 'Potassium (as sulfate)', '2.5 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(158, 101, 'Ginseng', '50 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(159, 101, 'Royal Jelly', '6 mg', '2018-05-07 22:51:11', '2018-05-07 22:51:11'),
(160, 102, 'Each soft gel contains:', NULL, '2018-05-07 22:53:53', '2018-05-07 22:53:53'),
(161, 102, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '400IU', '2018-05-07 22:53:53', '2018-05-07 22:53:53'),
(162, 103, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '300IU', '2018-05-07 22:56:41', '2018-05-07 22:56:41'),
(163, 104, 'Active ingredient Sodium Ascorbate', '568.18 mg', '2018-05-07 23:01:07', '2018-05-07 23:01:07'),
(164, 105, 'Retinol Palmitate (Vitamin A)', '7,500 IU', '2018-05-07 23:03:55', '2018-05-07 23:03:55'),
(165, 105, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '100 IU', '2018-05-07 23:03:55', '2018-05-07 23:03:55'),
(166, 105, 'Ascorbic Acid (Vitamin C)', '250 mg', '2018-05-07 23:03:55', '2018-05-07 23:03:55'),
(167, 105, 'Selenium', '50 mcg', '2018-05-07 23:03:56', '2018-05-07 23:03:56'),
(168, 105, 'Zinc (as Sulfate)', '20 mg', '2018-05-07 23:03:56', '2018-05-07 23:03:56'),
(169, 105, 'Lecithin, Soya', '200 mg', '2018-05-07 23:03:56', '2018-05-07 23:03:56'),
(170, 107, 'Active ingredient Sodium Ascorbate', '568.18 mg', '2018-05-07 23:08:17', '2018-05-07 23:08:17'),
(171, 108, 'Retinol Palmitate (Vitamin A)', '7,500 IU', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(172, 108, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '100 IU', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(173, 108, 'Ascorbic Acid (Vitamin C)', '250 mg', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(174, 108, 'Selenium', '50 mcg', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(175, 108, 'Zinc (as Sulfate)', '20 mg', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(176, 108, 'Lecithin, Soya', '200 mg', '2018-05-07 23:10:41', '2018-05-07 23:10:41'),
(177, 108, 'Retinol Palmitate (Vitamin A)', '7,500 IU', '2018-05-07 23:10:51', '2018-05-07 23:10:51'),
(178, 108, 'dl-Alpha Tocopheryl Acetate (Vitamin E)', '100 IU', '2018-05-07 23:10:51', '2018-05-07 23:10:51'),
(179, 108, 'Ascorbic Acid (Vitamin C)', '250 mg', '2018-05-07 23:10:52', '2018-05-07 23:10:52'),
(180, 108, 'Selenium', '50 mcg', '2018-05-07 23:10:52', '2018-05-07 23:10:52'),
(181, 108, 'Zinc (as Sulfate)', '20 mg', '2018-05-07 23:10:52', '2018-05-07 23:10:52'),
(182, 108, 'Lecithin, Soya', '200 mg', '2018-05-07 23:10:52', '2018-05-07 23:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `health_tips`
--

CREATE TABLE `health_tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_embed_code` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_tips`
--

INSERT INTO `health_tips` (`id`, `name`, `description`, `tip_title`, `video_embed_code`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Drink Water The Correct Way -- Dr. Willie Ong Health Blog #1', 'The Correct Way To Drink Water\nVideo By Dr. Willie Ong (Internist-Cardiologist)', 'Tips in drinking water', 'https://www.youtube.com/embed/gNHKRocTVcg?list=PLqxfhR260JI5yutZsXAVCtK9dpFZYcy7f', '2018-04-26 02:10:08', '2018-04-26 02:10:08', 1),
(2, 'Lower Your Cholesterol Naturally -- Doctor Willie Ong Health Blog #5', 'High Cholesterol: Natural Remedies\nVideo by Dr. Willie T. Ong (Internist and Cardiologist)', 'Tips in Lowering Your Cholesterol Naturally', 'https://www.youtube.com/embed/K7FIYqsVJko?list=PLqxfhR260JI5yutZsXAVCtK9dpFZYcy7f', '2018-04-26 03:51:14', '2018-04-26 03:51:14', 1),
(10, 'Tips For Beautiful & Healthy Skin', 'Bacterial skin infections include: Folliculitis is an infection of the hair follicle that can resemble pimples. Impetigo is a highly contagious bacterial skin infection most common among pre-school children. It is primarily caused by Staphylococcus aureus, and sometimes by Streptococcus pyogenes.', 'Ways To Have Beautiful Skin', 'https://www.youtube.com/embed/73opXD-RUvA', '2018-04-26 06:39:32', '2018-04-26 06:39:32', 1),
(11, 'Dragon Fruit', 'Here\'s how to remove this bright-coloured Asian fruit\'s soft, sweet flesh from the hard, inedible outer skin.', 'Ways to use dragon fruit', 'https://www.youtube.com/embed/h62zSDPQ_PI', '2018-04-26 16:47:40', '2018-04-26 16:47:40', 1),
(19, 'Tonsillitis', 'Tonsils are situated at the back of the throat. They are collections of lymphoid tissue that form part of the immune system.', 'Some steps to cure Tonsillitis', 'https://www.youtube.com/embed/6KQkn84RT04', '2018-05-08 00:22:59', '2018-05-08 00:22:59', 2),
(20, 'How to cure cold fast', 'A common viral infection in which the mucous membrane of the nose and throat becomes inflamed, typically causing running at the nose, sneezing, a sore throat, and other similar symptoms.', 'Some steps to cure cold fast', 'https://www.youtube.com/embed/8noy2a0AqTw', '2018-05-08 00:27:40', '2018-05-08 00:27:40', 2),
(21, 'Home Remedies for Minor Burns', 'Whether you burn your hand on a pan of cookies, spend too much time in the sun, or spill hot coffee on your lap, burns are certainly not pleasant. Unfortunately, burns are one of the most common household injuries.', 'Some steps to cure minor burns', 'https://www.youtube.com/embed/0raO0kcSe8Y', '2018-05-08 00:35:21', '2018-05-08 00:35:21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `health_tips_pictures`
--

CREATE TABLE `health_tips_pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `health_tips_id` int(11) NOT NULL,
  `picture` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warningMsg` text COLLATE utf8mb4_unicode_ci,
  `direction_of_use` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `side_effect` text COLLATE utf8mb4_unicode_ci,
  `format` varchar(9999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_name` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_word` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `category_id`, `name`, `picture`, `brand_name`, `desc`, `purpose`, `warningMsg`, `direction_of_use`, `created_at`, `updated_at`, `side_effect`, `format`, `generic_name`, `key_word`) VALUES
(48, 1, 'Bioflu', 'uploads/mAwGe7hmGBF6HFxHM4vR1521604347.jpg', 'Unilab', 'Used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with flu, common cold, allergic rhinitis, sinusitis, and other minor respiratory tract infections.', 'used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headaches, body aches and fever.', 'Do not use if you are now taking a prescription monoamine oxidase inhibitor (MAOI) (certain drugs for depression, psychiatric or emotional conditions, or Parkinson disease), or for 2 weeks after stopping the MAOI drug. If you do not know if your prescription drug contains an MAOI, ask a doctor or pharmacist before taking this product.', 'Take every 6 hours. 1 tablet for adults and children 12 years and older.', '2018-03-20 19:52:27', '2018-05-09 00:04:12', 'Dizziness, drowsiness, constipation, stomach upset, blurred vision, or dry mouth/nose/throat may occur. If any of these effects persist or worsen, tell your doctor or pharmacist promptly.', '{\"format\":\"Tablet and Syrup\",\"prescription_required\":\"0\"}', 'Phenylephrine HCI Chlorphenamine Maleate Paracetamol', 'clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headaches, body aches and fever.'),
(49, 1, 'Biogesic', 'uploads/JO6EcrhDy5Y8pF8vq8bj1521604453.jpg', 'Unilab', 'For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction.', 'Fever, Moderate pain, Headache', 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: breathing problems (such as asthma, chronic obstructive pulmonary disease-COPD), glaucoma, heart disease, high blood pressure, liver disease, stomach/intestinal problems. During pregnancy, this medication should be used only when clearly needed. Discuss the risks and benefits with your doctor.', 'Take every four hours.', '2018-03-20 19:54:13', '2018-05-08 17:41:12', 'Dizziness, drowsiness, constipation, stomach upset, blurred vision, or dry mouth/nose/throat may occur. If any of these effects persist or worsen, tell your doctor or pharmacist promptly.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Paracetamol', 'Fever, Moderate pain, Headache'),
(50, 1, 'Medicol Advance', 'uploads/BUQ1IRpJ4pJiXzooBLNb1521604578.jpg', 'Unilab', 'For the relief of toothache, muscular aches, minor arthritis pain, backache, minor aches and pains associated with the common cold, and pain of menstrual cramps (dysmenorrhea).', 'Headache, Toothache, Muscular aches, minor arthritis pain, backache', 'If you are pregnant or breastfeeding ask your doctor before use. It is especially important not to use ibuprofen during last 3 months of pregnancy unless definitely directed to do so by a doctor.', 'Adults and children 12 years old and older.1 softgel capsule with a glassful of water every 4 to 6 hours.', '2018-03-20 19:56:18', '2018-05-08 17:41:12', 'Belly pain or heartburn, Upset stomach or throwing up, Dizziness', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'N/A', 'Headache, Toothache, Muscular aches, minor arthritis pain, backache'),
(51, 1, 'Rexidol Forte', 'uploads/982xwkqGm45styBS2hCS1521604675.jpg', 'Unilab', 'For the relief of mild to moderate pain including headache, migraine, backache, muscular aches, menstrual cramps, arthritis pain, toothache, and pain associated with the common cold and flu; For fever reduction.', 'Moderate pain including migraine, backache, muscular ache, toothache, menstrual cramps.', 'Before using Rexidol Forte Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Adults and children 12 years old and above: 1-2 tablets every 6 hours as needed for pain/fever', '2018-03-20 19:57:55', '2018-05-08 17:41:12', 'Hypersensitivity including skin rashes, minor stomach &amp; intestinal disturbances. Caffeine: Tremor, difficulty in sleeping, nervousness, restlessness, irritability, anxiety, headache, ringing in the ears, fast or irregular heartbeat, rapid breathing, frequent urination &amp; stomach upset, increased BP.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Paracetamol Caffeine', 'Moderate pain including migraine, backache, muscular ache, toothache, menstrual cramps.'),
(52, 1, 'United home fever tab', 'uploads/2fBn8VqHWJIqiji2MYpN1521604779.jpg', 'Unilab', 'For fever reduction; For the temporary relief of minor aches and pains such as toothache, headache, backache, menstrual cramps, muscular aches, minor arthritis pain, and pain associated with the common cold and flu.', 'For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular pains, and toothache.', 'Liver warning - This product contains paracetamol.\nSevere liver damage may occur if: An adult or child 12 years old and above takes more than 4 g (8 tablets) in 24 hours, which is the maximum daily dose.\nTaken with other medicines containing paracetamol (or acetaminophen).\nAn adult has 3 or more alcoholic drinks everyday while using this product.\nAsk the doctor before use if the patient has liver disease.\nAsk the doctor before use if the patient is taking warfarin, a blood thinning medicine.\nConsult the doctor: If the patient is pregnant or breastfeeding, consult the doctor before use.Stop use and ask doctor if: New symptoms occur; Symptoms do not get better; Headache is persistent; Pain gets worse or lasts more than 10 days; Fever gets worse or lasts for more than 3 days.', 'Adults and children 12 years old and above: 1-2 tablets every 4 to 6 hours as needed for pain/fever. Do not take more than 4 g (8 tablets) in each 24 hours period.', '2018-03-20 19:59:39', '2018-05-08 17:41:13', 'Hypersensitivity including skin rashes, minor stomach &amp; intestinal disturbances. Caffeine: Tremor, difficulty in sleeping, nervousness, restlessness, irritability, anxiety, headache, ringing in the ears, fast or irregular heartbeat, rapid breathing, frequent urination &amp; stomach upset, increased BP.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Paracetamol', 'For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular pains, and toothache.'),
(53, 1, 'Decolgen Forte', 'uploads/mVOmMLrRjgLJAlM7LwG61521605151.jpg', 'Unilab', 'Used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections.', 'Relief clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing headches, body aches and fever associated with the common cold, allergic rhinitis, and sinusitis.', 'Do not use if the patient is pregnant, trying to become pregnant or breastfeeding unless on the advice of the physician.', '* Adults and children 12 years older. Orally 1 tablet every 6 hours, or as, recommended by doctor.', '2018-03-20 20:05:51', '2018-05-08 17:41:13', 'Mild upset stomach, trouble sleeping, dizziness, lightheadedness, headache, nervousness, shaking, or fast heartbeat may occur. If any of these effects persist or worsen, tell your doctor or pharmacist promptly. This product may reduce blood flow to your hands or feet, causing them to feel cold.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Phenylpropanolamine HCI Chlorphenamine Maleate Paracetamol', 'Relief clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing headches, body aches and fever associated with the common cold, allergic rhinitis, and sinusitis.'),
(54, 1, 'Expel Od', 'uploads/WCIhpXZhRj7cMV3JLcin1521605344.jpg', 'Unilab', 'Used for the relief of cough secondary to acute and chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis and bronchial asthma.', 'For the relief of cough secondary to acute chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis.', 'Do not take Expel OD if pregnant or breastfeeding unless advised by a physician.', 'Adults, Orally 1 capsule daily preferable with a meal. Or as recommended by doctor.', '2018-03-20 20:09:04', '2018-05-08 17:41:13', 'Mild stomach disturbance eg, pyrosis (heartburn), dyspepsia, diarrhea, nausea &amp; vomiting. Rash/urticaria, angioedema (rapid swelling of the skin), anaphylactic reactions (rare, life-threatening allergic reaction) &amp; other allergic reactions.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Ambroxol HCI', 'For the relief of cough secondary to acute chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis.'),
(55, 1, 'Myracof (syrup)', 'uploads/MUQSMGc9H0jp8ViX6SvN1521605683.jpg', 'Unilab', 'Used for the relief of cough secondary to acute and chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis and bronchial', 'For the relief of cough secondary to acute chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis.', 'Please consult your doctor before taking this drug especially during pregnancy.', 'Doses are taken after meals.', '2018-03-20 20:14:43', '2018-05-08 17:41:13', 'Occasional gastrointestinal side effects may occur but these are normally mild.', '{\"format\":\"Syrup\",\"prescription_required\":\"0\"}', 'Ambroxol', 'For the relief of cough secondary to acute chronic diseases of the respiratory tract accompanied by excessive lung secretions such as chronic bronchitis, asthmatic bronchitis.'),
(56, 1, 'Nafarin- A', 'uploads/7sDaqdS31ribc6QQvHvz1521605797.jpg', 'Unilab', 'Used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections.', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing headache, body aches, and fever.', 'Use with caution in patients with high blood pressure, toxic goiter, benign prostatic hypertrophy, heart rate irregularity, glaucoma and in those taking antidepressants. You may not also use this during pregnancy. Unless please be advised by the physician.', 'Adults and children 12 years and older. Orally 1 tablet every 6 hours. Or as recommended by doctor.', '2018-03-20 20:16:37', '2018-05-08 17:41:13', 'Nervousness, restlessness, insomnia, dizziness, lassitude, muscular weakness, headache, nausea and drowsiness may occur with usual doses of phenylpropanolamine or chlorphenamine maleate.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Phenylpropanolamine HCI Chlorphenamine Maleate Paracetamol', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing headache, body aches, and fever.'),
(57, 1, 'Neozep forte', 'uploads/nxESZSksbZFWU7Sf6Zju1521605933.jpg', 'Unilab', 'Used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections.', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.', 'Before using Neozep Forte Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Adults and children 12 years and older 1 tablet. For syrup 3 teaspoon. Children 7 to 12 years old 2 teaspoon. Children 2 to 6 years old 1 teaspoon.', '2018-03-20 20:18:53', '2018-05-08 17:41:13', 'Drowsiness, dizziness; dry mouth, difficulty in micturition, sweating, reduced appetite; epileptiform seizures (large doses).', '{\"format\":\"Syrup and Tablet\",\"prescription_required\":\"0\"}', 'Phenylpropanolamine HCI Chlorphenamine Maleate Paracetamol', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.'),
(58, 1, 'Neozep non-drowsy', 'uploads/9NDE7AXp8xd9nP8VrbL81521606044.jpg', 'Unilab', 'For the relief of clogged nose, postnasal drip, headache, body aches, and fever associated with the common cold, sinusitis, flu, and other minor respiratory tract infections.', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.', 'Before using Neozep Forte Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Adults and children 12 years and older. Orally 1 tablet every 6 hours, or as recommended by doctor.', '2018-03-20 20:20:44', '2018-05-08 17:41:13', 'Nervousness, insomnia, dizziness, muscular weakness, headache, HTN. Rapid heart rate, tightness of chest, excitement &amp; dilatation of pupils; skin rashes, itching, swelling of throat &amp; rarely allergic reactions (large doses of paracetamol.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Phenylephrine HCI + Paracetamol', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.'),
(59, 1, 'No-Drowse Decolgen', 'uploads/meENmldkU3f9TTsTgfpG1521606138.jpg', 'Unilab', 'Used for the relief of clogged nose, postnasal drip, headache, body aches, and fever associated with the common cold, sinusitis, flu, and other minor respiratory tract infections. It also helps decongest sinus openings and passages.', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.', 'Patients w/ high BP, severe heart disease, anemia, kidney or liver disease. Pregnancy &amp; lactation. Decolgen Forte May impair ability to drive &amp; operate machines.', 'Adults and children 12 years and older. Orally 1 tablet every 6 hours, or as recommended by doctor.', '2018-03-20 20:22:18', '2018-05-08 17:41:13', 'Upset stomach, Trouble sleeping, Dizziness, Lightheadedness, Headches, Dizziness.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Phenylephrine HCI + Paracetamol', 'For the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, body aches, and fever associated with the common cold, allergic rhinitis, sinusitis, and flu.'),
(60, 1, 'Solmux', 'uploads/t1Btir4roWr6t8MZ4UGq1521606310.jpg', 'Unilab', 'Used for the relief of cough characterized by excessive or sticky sputum or phlegm to help treat respiratory tract disorders such as acute or chronic bronchitis and chronic obstructive pulmonary disease (COPD).', 'For the relief of cough characterized by excessive or sticky sputumorphlegm to help treat respiratory tract disorders such as acute or chronic bronchitis and chronic obstructive pulmonary disease', 'It should not be used by people who are allergic (hypersensitive) to carbocisteine or any of the other ingredient people with an active stomach (peptic) ulcer.', 'Children 2 to 3 years old (1 teaspoon) 4 to 7 years old (2 teaspoonful) then 8-12 (3 teaspoonful) every 6 hours. Adults and children over 12 years old. Orally 1 capsule every 8 hours.', '2018-03-20 20:25:10', '2018-05-08 17:41:13', 'nausea, headache, gastric discomfort, and diarrhea. Gastrointestinal bleeding and skin rash have occasionally occurred. Other isolated reports include dizziness, insomnia, headache, palpitations, mild hypoglycemia, dry mouth, flatulence, and atrial fibrillation.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Carbocisteine', 'For the relief of cough characterized by excessive or sticky sputumorphlegm to help treat respiratory tract disorders such as acute or chronic bronchitis and chronic obstructive pulmonary disease'),
(61, 1, 'Tuseran Forte', 'uploads/lA42AnP1kB6Xquby4QSI1521606432.jpg', 'Unilab', 'Used for the relief of cough, clogged nose, postnasal drip, headache, body aches, and fever associated with the common cold, sinusitis, flu, and other minor respiratory tract infections. It also helps decongest sinus openings and passages.', 'For the relief of cough, clogged nose, postnasal drip, headache, body aches, and fever associated with the common cold, sinusitis, flu.', 'Please do not use Tuseran Forte Capsule for cough and temporary relief of stuffy nose without consulting first with your doctor especially during pregnancy, please be advised by the physician.', 'Adults and children over 12 years old. Orally 1 capsule every 6 hours.', '2018-03-20 20:27:12', '2018-05-08 17:41:13', 'Shortness of breath, Dizziness, Drowsiness, Nausea, Restlessness, and Vomiting.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Dextromethorphan HBr Phenylephrine HCI Paracetamol', 'For the relief of cough, clogged nose, postnasal drip, headache, body aches, and fever associated with the common cold, sinusitis, flu.'),
(62, 1, 'UHP Carbocisteine', 'uploads/rDMCYaaUvw8fRhv6bnLc1521606704.jpg', 'Unilab', 'It is used to relieve cough characterized by excessive or sticky sputum or phlegm.', 'Relieve cough or sticky sputum or phlegm.', 'It should not be used by people who are allergic (hypersensitive) to carbocisteine or any of the other ingredient people with an active stomach (peptic) ulcer. And please be advised by the physician.', '1 capsule every 8 hours.', '2018-03-20 20:31:44', '2018-05-08 17:41:13', 'Severe allergic reactions (rash; hives; itching; difficulty breathing; tightness in the chest; swelling of the mouth, face, lips, or tongue); blood in the stools; irregular heartbeat; symptoms of low blood sugar, dizziness, drowsiness, fainting, weakness, increased hunger, increased sweating, headache, chills, tremors); vomit that looks like blood or coffee grounds.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Carbocisteine', 'Relieve cough or sticky sputum or phlegm.'),
(63, 1, 'Lagundi', 'uploads/5GUxXlZhn6fhyK5gKUcN1521606880.jpg', 'RiteMed', 'A large shrub that grows in tropical and subtropical regions and valued as an herbal medicine.', 'For the relief of cough due to common cold and flu.', 'It is safe for pregnancy since it is an herbal product.', 'Adults 1 tablet 3-4 times a day. Children 7-12 years old ½ tablet 3-4 times day.', '2018-03-20 20:34:40', '2018-05-08 17:41:13', 'Dizziness, headache, nausea, nervousness, or trouble sleeping may occur. If any of these effects persist or worsen, contact your doctor or pharmacist promptly.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Lagundi (Vitex negundo L.)', 'For the relief of cough due to common cold and flu.'),
(64, 1, 'Allerin', 'uploads/hpXZlKc6uW52Puhnbg391522121879.jpg', 'Unilab', 'Used for Nasal congestion, Nausea, Vomiting, Motion sickness, Insect bite, Hypersensitivity reactions and other conditions.', 'Used for the relief of cough, clogged nose, runny nose, postnasal drip, sneezing, and itchy and watery eyes associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections. It also helps decongest sinus openings and passages.', 'Before using Allerin Syrup, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). And take this medicine with a full glass of water.', '*Children 2 to 6 years old 2.5mL (1/2 teaspoonful), \n*Children 7 to 12 years old 5mL (1 teaspoonful) \n*Adults and Children over 12 years old 10mL (2 teaspoonful)  take this medicine with a full glass of water.', '2018-03-26 19:37:59', '2018-05-08 17:41:13', 'Flushing, tachycardia, blurred vision, toxic psychosis, urinary retention, these side effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away.', '{\"format\":\"Syrup\",\"prescription_required\":\"0\"}', 'Diphenhydramine HCI Phenylpropanolamine', 'Used for the relief of cough, clogged nose, runny nose, postnasal drip, sneezing, and itchy and watery eyes associated with the common cold, allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections. It also helps decongest sinus openings and passages.'),
(65, 1, 'Allerkid', 'uploads/RHqIUqfxXgvLLyA0GHX21522122057.jpg', 'Unilab', 'Used for Itching and redness caused by hives, Allergy to dust mites, Animal dander, Cockroaches and molds, Hay fever and other conditions. Allerkid Syrup may also be used for purposes not listed in this medication guide.', 'Relief symptoms such as rashes, sneezing, itchy nose, and itchy watery eyes', 'Before using Allerkid Syrup, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.)', '*(Oral drops) Infants 6 months to less than 12 months 2.5mg (1mL) once daily, \n*Children 12 months to less than 2 years 2.5mg (1mL) once or twice daily every 12 hours,  2 to 5 years  5mg (2mL) twice daily,  6 to 12 years old 10mL (2teaspoonfuls) once daily every 12 hours.', '2018-03-26 19:40:57', '2018-05-08 17:41:14', 'The following is a list of possible side-effects that may occur from all constituting ingredients of Syrup. These side-effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away. (Stomach pain, drowsiness, excessive tiredness, dry mouth, diarrhea, vomiting.)', '{\"format\":\"Syrup and Oral drops\",\"prescription_required\":\"0\"}', 'Cetirizine', 'Relief symptoms such as rashes, sneezing, itchy nose, and itchy watery eyes'),
(66, 1, 'Allerta', 'uploads/I5i9QEARwIcBS17tENPC1522122178.jpg', 'Unilab', 'Allerta syrup is an antihistamine that relieving symptoms of seasonal allergies such as runny nose, sneezing, itchy, and watery eyes.', 'Allergic rhinitis, such as sneezing, runny, itchy nose, watery eyes, rashes.', 'Before using this medication, tell your doctor or pharmacist your medical history. Do not self-treat with this medication without consulting your doctor first if you have certain medical conditions such as: kidney disease, liver disease.', '*Adults and children over 12 years 1 tablet, for the syrup is 10 mL (2teaspoonful), \n*Children 2 to 12 years old body weight more than 30kg 1 tablet for the syrup is  10mL (2teaspoonfuls), Body weight 30k or less ½ tablet  for the syrup is 5mL (1teaspoonful), \n*Children 1 to 2 years old 2.5mL (1/2teaspoonful)', '2018-03-26 19:42:58', '2018-05-08 17:41:14', 'loratadine/pseudoephedrine sulfate preparations: Insomnia, dry mouth, headache, somnolence, nervousness, dizziness, fatigue.', '{\"format\":\"Tablet and Syrup\",\"prescription_required\":\"0\"}', 'Loratadine', 'Allergic rhinitis, such as sneezing, runny, itchy nose, watery eyes, rashes.'),
(67, 1, 'Allerta Dermatec Ointment', 'uploads/xGBci8A8NptvKjWtrSTi1522122363.jpg', 'Unilab', 'Used for the treatment, control, and prevention.', 'For the relief of inflammation and itch caused by skin conditions such as itchy, scaly, pink patches that develop on the elbow, knees, scalp, and rashes.', '*Do not take by mouth. Consult with your doctor before using this medicine on open wounds, dry, chapped, irritated, or sun-burned skin.\n•	Do not wash the treated area after immediately applying Allerta Dermatec Cream. Also avoid the use of other products on the treated area unless directed by your doctor.', 'Wash your hands before and after applying Allerta Dermatec Cream. Clean and dry the skin area to be treated. Applying an excessive amount may result in pilling. Use a thinner layer or lesser quantity of medicine to avoid pilling. Avoid getting this medication in your eyes or nose or mouth.', '2018-03-26 19:46:03', '2018-05-08 17:41:14', 'These side-effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away. (Oral candidas, adrenal suppression, cataracts, glaucoma, decreased bone mineral density.)', '{\"format\":\"Ointment\",\"prescription_required\":\"0\"}', 'Mometasone furoate', 'For the relief of inflammation and itch caused by skin conditions such as itchy, scaly, pink patches that develop on the elbow, knees, scalp, and rashes.'),
(68, 1, 'Allerteen Cetirizine', 'uploads/H91WFsRX8W0y9hC6gqiR1522122454.jpg', 'Unilab', 'For Itching and redness caused by hives, Hay fever, Allergy to dust mites, Animal dander, Cockroaches and molds and other conditions. Allerteen Tablet may also be used for purposes not listed in this medication guide.', 'Allergic rhinitis such as sneezing, runny nose, and itchy watery eyes.', 'Before using Allerteen Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', '*Adults and children 12 years old  1 tablet once daily.\n*Children 6 to 11 years old 1/2 tablet twice daily  or as recommended by a doctor.', '2018-03-26 19:47:34', '2018-05-08 17:41:14', 'These side-effects are possible, but do not always occur. Some of the side-effects may be rare but serious. Consult your doctor if you observe any of the following side-effects, especially if they do not go away. (Drowsiness, Excessive tiredness, dry mouth, stomach pain, diarrhea, vomiting.)', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Cetirizine Dihydrochloride', 'Allergic rhinitis such as sneezing, runny nose, and itchy watery eyes.'),
(69, 1, 'Alnix (Cetirizine)', 'uploads/s7REcVrvgFJ5tzku2O9c1522122588.jpg', 'Unilab', 'Used for Itching and redness caused by hives, Allergy to dust mites, Animal dander, Cockroaches and molds, Hay fever and other conditions. Alnix Tablet may also be used for purposes not listed in this medication guide.', 'Skin symptoms, Anti-allergy, runny, itchy nose, watery eyes, rashes.', 'Before using Allerteen Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', '*Infants 6 months to less than 12 months 2.5mg (1mL) once a day, *Children: 12 months to less than 2 years take every 12 hours, 2 to 5 years 5mg (2mL) once daily, Syrup: 5mL (1teaspoon) once daily, 6 to 12 years 10mL (2teaspoonful) once daily, Adults and children over 12 years old 1 tablet once daily.', '2018-03-26 19:49:48', '2018-05-08 17:41:14', 'The most commonly reported side-effects of Allerteen Tablet are drowsiness, excessive tiredness, dry mouth, stomach pain, diarrhea, and vomiting.', '{\"format\":\"Oral drops, Syrup and Tablet\",\"prescription_required\":\"0\"}', 'Cetirizine diHCI', 'Skin symptoms, Anti-allergy, runny, itchy nose, watery eyes, rashes.'),
(70, 1, 'Alnix Plus Tablet', 'uploads/PrWeNQCi785kBNMpnTYc1522122692.jpg', 'Unilab', 'Used for Ear symptoms caused by the common cold, Flu, Allergies or other breathing illnesses, Temporary relief of stuffy nose, Hay fever, Allergy to dust mites, Animal dander, Cockroaches and molds, Itching and redness caused by hives, Sinus and other conditions. Alnix plus Tablet may also be used for purposes not listed in this medication guide.', 'Used for relief of clogged nose, sneezing, runny nose, and itchy, watery eyes with allergic rhinitis.', 'Before using Alnix plus Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Adults and children over 12 years: Orally, 1 tablet every 12 hours, or as directed by a doctor.', '2018-03-26 19:51:32', '2018-05-08 17:41:14', 'The most commonly reported side-effects of Alnix plus Tablet are drowsiness, excessive tiredness, dry mouth, stomach pain, diarrhea, and vomiting.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Cetirizine + Phenylephrine HCI', 'Used for relief of clogged nose, sneezing, runny nose, and itchy, watery eyes with allergic rhinitis.'),
(71, 1, 'Efficascent Oil', 'uploads/QnKMXWInhIYcuDqkjFCP1522123568.jpg', 'Efficascent Oil', 'Efficascent Oil (Regular) is a liniment especially formulated for fast and effective relief of rheumatism, back pains, muscular pains, joint pains, lumbago, stiff neck, headache, flatulence, insect bites, minor sprains and strains, cramps, itchiness, and other skin irritations. Contains menthol and camphor which provides therapeutic benefits for the mentioned conditions.', 'A liniment formulated to provide instant relief for pain,can be used to relieve itch,also used to relieve arthritis and gas pains,contains camphor and menthol.', 'Before using Efficascent Oil, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Some health conditions may make you more susceptible to the side-effects of the drug. Take as directed by your doctor or follow the direction printed on the product insert. Dosage is based on your condition. and avoid getting this medication in your eyes or nose or mouth.', 'Wash your hands before and after applying Efficascent Oil. Clean and dry the skin area to be treated,do not wash the treated area after immediately applying Efficascent Oil. Also avoid the use of other products on the treated area unless directed by your doctor.', '2018-03-26 20:06:08', '2018-05-08 17:41:14', 'The most commonly reported side-effects of Efficascent Oil are mild cold or burning sensation at the site of application, severe allergic rejection, increased heart rate, vasodilation in skin, slower breathing, and reduced appetite.', '{\"format\":\"Oil\",\"prescription_required\":\"0\"}', 'N/A', 'A liniment formulated to provide instant relief for pain,can be used to relieve itch,also used to relieve arthritis and gas pains,contains camphor and menthol.'),
(72, 2, 'Handilib-on [Blumea balsamifera ] Sambong (Scientific Name: Blumea balsamifera L. DC)', 'uploads/EGQl4PQjD2NRAvwexsO31522125182.jpg', 'N/A', 'Sambong is used as herbal medicine and is a shrub that grows wild in the tropical climate countries such as Philippines, India, Africa and found even in eastern Himalayas. Sambong is widely used in the Philippines as herbal medicine.Sambong is an aromatic shrub, that grows from 1 to 4 meters in height. It is considered as a weed in some countries and is difficult to eradicate. Sambong has yellow flowering heads that is 6 mm long. Sambong leaves are green obloid that spreads in a pyramidial pattern. Sambong bears fruits that are ribbed and hairy on top. Sambong fruit has 1 seed.The Philippine Council for Health Research and Development (PCHRD) has develop the technology for a sambong herbal medicine tablet.', 'Herbal  for kidney , wounds, cuts, rheumatism, diarrhea, spasms, colds  coughs hypertension.', 'Pregnancy and breast-feeding: Not enough is known about the use of sambong during pregnancy and breast-feeding. Stay on the safe side and avoid use.', '*Tea preparation: gather fresh sambong leaves, cut in small pieces,wash with fresh water.boil 50 grams of sambong leaves to a liter of water,\n*let it seep for 10 minutes,remove from heat,drink while warm 4 glasses a day for best results.', '2018-03-26 20:29:26', '2018-05-08 17:41:14', 'Sambong can cause allergic reaction for people sensitive to ragweed plants and its relatives. Side effects may include itching and skin irritation.', '{\"format\":\"Leaves\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal  for kidney , wounds, cuts, rheumatism, diarrhea, spasms, colds  coughs hypertension.'),
(73, 2, 'Labana or guyabano tree (Scientific Name:Anona Muricata Linn.)', 'uploads/LF1DGRhBRZ2LbpIp8bL41522126887.jpg', 'N/A', 'A scientific research published in the Journal of Natural Products in 1996, stated that the bioactivity-directed fractionation of the seed resulted in the isolation of a new compound (cis-annonacin) that is selectively cytotoxic to colon adenocarcinoma cells (HT-29) in which it was far more potent than Adriamycin. Protect your immune system and avoid deadly infections. Feel stronger and healthier throughout the course of the treatment. Boost your energy and improve your outlook on life. And used for target the cancer cells, leaving healthy cells untouched. Unlike chemotherapy, which indiscriminately targets all actively reproducing cells (such as stomach and hair cells), causing the often devastating side effects of nausea and hair loss in cancer patients.', 'Herbal to treat muscle spasms, treat dysentery, purge parasites such as bedbugs and head lice, vomiting (emetic), tranquilizer, sedative, head lice, bedbugs, inflammation, eczema, skin diseases, arthritis, rheumatism, diuretic.\nTreatment of hematuria and urethritis.', 'Guyabano bark has been reported to contain alkaloids called anonaine and anoniine that is high in hydrocyanic acid. Small traces of hydrocyanic acid may also be found in leaves. Hydrocyanic acid is a colorless substance that is considered poisonous.\nConcoctions of leaves, seeds and barks are not recommended for internal consumption to young children, pregnant and lactating women, In studies done from a Caribbean laboratory,  Guyabano contains annonacin that is suggested to have a connection in the development of atypical Parkinson’s disease. Guyabano is not recommended for people who have motor control difficulty or suspected of having Parkinson&#039;s disease.', 'How to make a Guyabano as medicine\n\n*Wash and peel guyabano. \n*Remove core and seeds. \n*Cut into small pieces. \n*Mix two cups water for every three cups of pulp. \n*Pass guyabano pulp through a juice extractor or corn mill grinder. \n*Strain through a stainless steel strainer.\n*Add one cup of water for every two cups juice. \n*Add one cup sugar for every 3 cups of pulp mixture and mix\n*Place the mixture in an enamel casserole or a stainless steel kettle, and cook until it simmers.\n*Do not let it boil. Lower the heat \n*Stir from time to time until mixture become thick. \n*Pour cooked mixture into tall tin cans while still hot, leaving 1/4 inch space on top of the mixture. \n*Seal the cans and place them in a pressure cooker for 15 minutes at 10 pounds pressure.Cool and label\n\nGuyabano Ale\nIngredients:\n1 kilo ripe guyabano\n4 cups water\n3/4 cup sugar\nCalamansi juice\n\nProcedure: \n*Wash and peel fruits. Remove the core and seeds. Then cut pulp into small pieces. \n*Heat in four cups water. Cool. Strain mix­ture through a clean cheese cloth into a pitcher, then squeeze the juice. Add sugar and enough Calamansi juice or make the mixture a little sour. *Serve with ice cubes. Add more sugar if desired.', '2018-03-26 20:43:10', '2018-05-08 17:41:14', 'N/A', '{\"format\":\"seeds,leaves,fruit,roots\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal to treat muscle spasms, treat dysentery, purge parasites such as bedbugs and head lice, vomiting (emetic), tranquilizer, sedative, head lice, bedbugs, inflammation, eczema, skin diseases, arthritis, rheumatism, diuretic.\nTreatment of hematuria and urethritis.'),
(74, 2, 'Lagundi (scientific name: Vitex negundo)', 'uploads/SaplaqCNXffAGaBK84Qq1522127317.jpg', 'N/A', 'is a large native shrub that grows in Asia and Southeast Asia such as the Philippines and India and has been traditionally used as herbal medicine and is an important medicinal plant in Ayurvedic and Unani systems of medicine. The extracts from its leaves and roots are mostly considered to provide the most health benefits. The Philippine Department of Health has conducted research and study for Lagundi and has suggested that the lagundi plant has a number of verifiable therapeutic value and health benefits to man.', 'Herbal to treat worm infestation, eczema, ring worm\n anti-inflammation and analgesic in cases of rheumatism, arthritis, muscle pains, headache, fever, wash wounds to promote healing, rheumatism, muscle pain, inflammation of joints, anorexia, colic, spasms and indigestion, high cholesterol, good memory, eye sight, relieve anxiety.', 'However, moderate use is recommended for pregnant women, and treatment should not exceed one week. If symptoms persist and irritation occurs, stop the use and consult your doctor.', '* First, wash fresh or dried Lagundi leaves\n*Then, chop up the leaves and add in 4 cups of water for every 1 cup of lagundi parts.\n *Let it boil for 10 to 15 minutes\n *Let it steep then strain different parts.\n *Drink half cup of Lagundi three times a day.\n *Lagundi concoction can be stored in appropriate blass container for later use.', '2018-03-26 21:08:37', '2018-05-08 17:41:14', 'N/A', '{\"format\":\"Leaves\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal to treat worm infestation, eczema, ring worm\n anti-inflammation and analgesic in cases of rheumatism, arthritis, muscle pains, headache, fever, wash wounds to promote healing, rheumatism, muscle pain, inflammation of joints, anorexia, colic, spasms and indigestion, high cholesterol, good memory, eye sight, relieve anxiety.'),
(75, 2, 'Dragon Fruit', 'uploads/icSXr0kLvoU0kZ1WExCh1522127656.jpg', 'N/A', 'Dragon fruit or red pitaya belongs to the Cactaceae family from the subfamily Cactoidea of the tribe Cactea . The Dragon Fruit / Pitaya plant is magnificent to behold with stunning and beautiful fruit that exhibits vivirant colors and shape. Dragon fruit is not only attractive but is also flavourful that is slightly similar to kiwi and melon that possess amazing health benefits.', 'Herbal for memory loss, anti cancer ,diabetes, anti-oxidant properties,  healing, immune system, digestion, probiotics, digestion,anti-oxidant.', 'Dragon fruit is safe for consumption even by pregnant and breast feeding mothers.', 'Dragon is fruit is best eaten fresh, it can be diced, sliced, chilled, add to salads or even blended to make a smoothie.\n\nDragon fruits are also made into jams, puree, sherbets, salads, fruit pizza, juice and beverages.', '2018-03-26 21:14:16', '2018-05-08 17:41:14', 'There are no reported side effects in consuming dragon fruit.', '{\"format\":\"Fruit\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal for memory loss, anti cancer ,diabetes, anti-oxidant properties,  healing, immune system, digestion, probiotics, digestion,anti-oxidant.'),
(76, 2, 'Malunggay', 'uploads/vMQFhIKMRCvea701RvgD1522128007.jpg', 'N/A', 'Scientific Name: Moringa Oleifera\nOther names:\n&quot;Malunggáy&quot; in Philippines, &quot;Sajina&quot; in India, &quot;Shojne&quot; in Bengal, &quot;Munagakaya&quot; in Telugu, &quot;Shenano&quot; in Rajasthani, &quot;Shevaga&quot; in Marathi, &quot;Nuggekai&quot; in Kannada, &quot;Drumstick Tree, Horse Radish Tree, Ben Oil Tree&quot; in English, &quot;La mu&quot; in Chinese.\n\nMalunggay (Moringa Oleifera), is a popular plant known for high nutritional value as well as an herbal medicine. Malunggay is a plant that grows in the tropical climates such as the Philippines, India and Africa. Malunggay is widely used as vegetable ingredient in cooking, as herbal medicine for a number of illness and other practical uses.', 'Herbal for Scalp problems, boosts immune system, Asthma, Skin rejuvenation, promote skin rejuvenation, Hypertension, Relaxant\nAnthelmintic, Diabetes, Source of calcium, Anti-inflammatory, Eye problems, Anti-cancer, diuretic, Skin diseases, Stomach problems, Abortificient, Boosts fertility, Contraceptive, Snake bites', 'Pregnancy and Breast feeding. There is no sufficient studies done to investigate the adverse or side effects of Malunggay herbal medicine during pregnancy and breast feeding. It is recommended to avoid its use. According to Indian traditional usage, Malunggay may have an abortificient effects.', 'Malunggay tree can be found in the wild as well as culitvated in warm ttopical countries. The pods and leaves are harvested and are sold in wet markets and in the vegetable section in Asian grocery stores.\n\nFor other countries where malunggay trees don&#039;t grow, food grade preparations in forms of powder, tablets, syrups and capsules can be bought in respected health stores and Asian stores. Liniments, creams and lotions containg malunggay oil may also be available.', '2018-03-26 21:20:07', '2018-05-08 17:41:14', 'N/A', '{\"format\":\"Leaves\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal for Scalp problems, boosts immune system, Asthma, Skin rejuvenation, promote skin rejuvenation, Hypertension, Relaxant\nAnthelmintic, Diabetes, Source of calcium, Anti-inflammatory, Eye problems, Anti-cancer, diuretic, Skin diseases, Stomach problems, Abortificient, Boosts fertility, Contraceptive, Snake bites'),
(77, 2, 'Lemon Grass or Tanglad', 'uploads/6pzlLbSpxKgoxwiGWdCb1522128296.jpg', 'N/A', 'Lemon Grass is an herb largely popolar for its citrus flavour with a trace of ginger. It is widely used in cooking served to spice various Asian cuisines from Thai to Filipino dishes. Lemon grass is not only good for flavouring but it has been traditionally used as herbal medicine to treat various medical condition. Read on to discover the amazing uses of this lowly but useful herb.\n\nLemon grass (Cymbopogon citratus), a native herb from temperate and warm regions such as India, Philippines and Malaysia, is widely used in Asian cooking and is an ingredient in many Thai and Vietnamese foods. Lemon grass use in cooking has become popular in the Caribbean and in the United States for its aromatic citrus flavor with a trace of ginger.', 'Herbal for Antiseptic, antibacterial, antimicrobial, body odor, metabolism diuretic, relieves gout, antioxidant, improve bowel movement, pain reliever, relaxant.', 'While Lemongrass is not known to have an adverse effect with known drugs and supplements. Nonetheless It is advisable to limit the use of Lemongrass for the following medical conditions\n\nIndividuals taking oral diabetes drugs\nIndividuals taking anti-hypertensive drugs\nIndividuals with diabetes and / or individuals who are hypoglycemic', 'Lemon Grass Tea Preparation\n1. Pound or cut about 10 leaves of lemon grass\n2. Then add in 2 cups of boiling water for 10 to 15 minutes,\n3. Strain, add sugar and a slice of ginger to taste.\n4. Let it cool and drink a cup three to four times a day.\n5. Make new lemon grass herbal tea as needed.\nWhen symptoms persist or irritation occurs stop the use and consult your doctor.\n\nLemon grass oil (food grade) can also be used to make tea by diluting 2 teaspoon of lemon grass oil to a cup of boiling water.\n\nLemongrass Baths and Compress\nChop about a cup of lemon grass leaves to a liter of water. Let it boil and strain. You can add it to your bath or you can use it as herbal compress for skin infections.\n\nLemon grass oil can also be added to a bath or warm water for hot compress. a tablespoon of oil for every 500ml for compress is suggested.\n\nLemon grass Liniment Preparation\nBoil equal amounts of chopped leaves and roots with freshly made coconut oil\nYou can also mix 2 drops of Lemon grass oil to an ounce of your usual oil used such as coconut oil, olive oil, etc.', '2018-03-26 21:24:56', '2018-05-08 17:41:14', 'When used for various medication, There are reports of the following\n\nBurning sensation(s)\nSkin Irritation, discomfort, and rash\nLowered blood glucose\n\nAllergies. In rare cases, lemongrass essential oil has caused allergic reactions when applied to the skin. To minimize skin irritation, dilute the oil in a carrier oil such as safflower or sunflower seed oil before application. As with all essential oils, small amounts should be used, and only for a limited time.\n\nCan cause eye irritation. Avoid getting lemongrass (herb or oil) in the eyes.', '{\"format\":\"Leaves\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal for Antiseptic, antibacterial, antimicrobial, body odor, metabolism diuretic, relieves gout, antioxidant, improve bowel movement, pain reliever, relaxant.'),
(78, 2, 'Ampalaya', 'uploads/3OkSUUOuKhEh54wmXTf91524552710.jpg', 'N/A', 'Scientific Name: Momordica charantia\nOther names:\nAmpalaya, Bitter melon, papailla, melao de sao caetano, bittergourd, sorosi, a&#039;jayib al maasi, assorossie, balsam apple, balsam pear, chin li chih, ejinrin gule khandan, fu-kua, karela, k&#039;u kua kurela, kor-kuey, ku gua, lai p&#039;u t&#039;ao, pava-aki, salsamino, sorci, sorossi, sorossie, sorossies, pare, peria laut, peria\n\nAmpalaya Bitter Melon (Momordica charantia) also known as Bitter Melon is a tropical and subtropical vine of the family Cucurbitaceae, widely grown in the Amazon, Carribean, South east Asia such as Philippines for its edible fruit. Ampalaya or bitter melon also known as bitter gourd as the name implies has a bitter taste due to the presence of momordicin, and is believed to be among the most bitter of all vegetables.', 'Herbal for Diabetes,skin problems, acne, fever ,headache, toothache, stomachache, HIV/AIDS.', 'When under medications for diabetes, hypertension, heart problems, etc., Taking Ampalaya in medicinal dosages may counter-act or aggravate its effectiveness. It is advised to consult your doctor before using this herb.\nPregnancy and Breast feeding. There is a study that suggests the abortive action of Momordica charantia in large doses during pregnancy. It is recommended to avoid its use more than what is found in food.', '* Cooking. Green fruit and young leaves of Ampalaya are cooked mixed with meat. To lessen the bitterness of the ampalaya fruit, wash or even boiled in water with salt.\n\n* Poultice. Grounded ampalaya leaves, seeds and root are prepared as poultice applied externally over the affected area to alleviate pain and symptoms of inflammation. It is usually mixed with other herbal oils such as olive and coconut oil.\n\n* Ampalaya herbal tea. Decoction of tea may be prepared from the powdered Ampalaya or Bitter Melon leaves, seeds and flower.', '2018-03-26 21:27:46', '2018-05-08 17:41:14', 'Favism is a condition named after the fava bean, which is thought to cause &quot;tired blood&quot; (anemia), headache, fever, stomach pain, and coma in certain people. A chemical found in bitter melon seeds is related to chemicals in fava beans. If you have G6PD deficiency, avoid bitter melon.', '{\"format\":\"Leaves, seeds, fruit\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal for Diabetes,skin problems, acne, fever ,headache, toothache, stomachache, HIV/AIDS.'),
(90, 1, 'Medicol Advance 400', 'uploads/adMI3iKxUs8RS3mLwSBn1524129350.jpg', 'Unilab', 'Used for Pain in teeth, Soft tissue injuries, Muscles pain, Back pain, Pain in nerves, Muscular skeletal disorders, Joints pain, Headache, Pain in body, Menstruation pain and other conditions.', 'Headache, toothache, muscular ache, minor arthritic pain, backache, and minor aches with menstrual cramps.', 'Before using Medicol Advance 400 Capsule, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Some health conditions may make you more susceptible to the side-effects of the drug. Take as directed by your doctor.', 'Adults and children 12 years old and above: 1 softgel capsule up to 3 times a day, as needed. Leave at least 4 hours between each dose. You may take 1 capsule every 8 hours.', '2018-04-19 01:15:51', '2018-05-08 17:41:14', 'Belly pain, upset stomach or throwing up, hard stools (constipation), diarrhea, and dizziness.', '{\"format\":\"Softgel\",\"prescription_required\":\"0\"}', 'Ibuprofen', 'Headache, toothache, muscular ache, minor arthritic pain, backache, and minor aches with menstrual cramps.');
INSERT INTO `medicines` (`id`, `category_id`, `name`, `picture`, `brand_name`, `desc`, `purpose`, `warningMsg`, `direction_of_use`, `created_at`, `updated_at`, `side_effect`, `format`, `generic_name`, `key_word`) VALUES
(91, 1, 'Diatabs', 'uploads/v51fzEvAGzZ2j4pbvaew1524459152.jpg', 'Unilab', 'Used for acute non-specific diarrhea, chronic diarrhea associated with inflammatory bowel disease, reduction of number of volume of discharge in patients with ileostomies and colostomies.', 'Used to treat sudden diarrhea (including traveler&#039;s diarrhea).', 'This medication should not be used if you have certain medical conditions. Before using this medicine, consult your doctor or pharmacist if you have: stomach/abdominal pain without diarrhea, bowel obstruction (e.g., ileus, megacolon, abdominal distention). This medication is not approved for use in children younger than 2 years due to an increased risk of side effects (such as slow/shallow breathing, fast/irregular heartbeat).', '*Adult dose: take 2 capsules initially followed by 1 capsule after each loose bowel movement. \nOr as directed by a doctor. Average Daily Maintenance Dose: take 2 to 4 capsules/a day. A dosage of five capsules (10mg) is rarely exceeded. If no clinical improvement is observed after treatment with 8 capsules /day (16mg/ a day) for atleast 1 days, symptoms are unlikely to be controlled by further loperamide administration.', '2018-04-19 02:12:02', '2018-05-08 17:41:14', 'Dizziness, drowsiness, tiredness, or constipation may occur. If any of these effects persist or worsen, contact your doctor promptly.', '{\"format\":\"N\\/A\",\"prescription_required\":\"0\"}', 'Loperamide', 'Used to treat sudden diarrhea (including traveler&#039;s diarrhea).'),
(92, 1, 'Enzyplex', 'uploads/coSeByQmn8qMF3sJ6pFC1524459314.jpg', 'Unilab', 'This medication contains digestive enzymes, which are natural substances needed by the body to help break down and digest food. It is used when the pancreas cannot make or does not release enough digestive enzymes into the gut to digest the food. Depending on the amount of enzymes in your product, it may be used for indigestion, as a supplement, or as replacement therapy (e.g., in chronic pancreatitis, cystic fibrosis, cancer of the pancreas, after surgery on the pancreas or gut).', 'Supplement that aids proper digestion and help ensure optimal nutrient absorption.', 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: sudden/severe swelling of the pancreas (acute pancreatitis), sudden worsening of long-term disease of the pancreas.', 'Before using this medication, tell your doctor or pharmacist your medical history, especially of: sudden/severe swelling of the pancreas (acute pancreatitis), sudden worsening of long-term disease of the pancreas.', '2018-04-22 20:55:14', '2018-05-08 17:41:14', 'Diarrhea, abdominal pain/cramps, or nausea may occur. If any of these effects persist or worsen, tell your doctor or pharmacist promptly.', '{\"format\":\"Caplex\",\"prescription_required\":\"0\"}', 'Digestive Enzymes', 'Supplement that aids proper digestion and help ensure optimal nutrient absorption.'),
(93, 1, 'Kremil-S', 'uploads/aGwjKknFjg9ZlFLBOUS91524459666.jpg', 'Unilab', 'Provides the real relief of hyperacidity and its accompanying stomach pain. Kremil-S has 2x acid stopping power which neutralizes excess acids in the stomach as as fast as 5 minutes.', 'Used for the treatment, control, prevention, such as acidity, heartburn, upset stomach, stomach acid, and indigestion.', ': Before using Kremil-S Advance Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Dosage is based on your condition.', 'Swallowed with water or swallowed without water. Recommended for adult dose: 1 to 2 tablets to be taken one hour after each meal and at bedtime. Or as prescribed by a doctor.', '2018-04-22 21:01:06', '2018-05-08 17:41:14', 'The most commonly reported side-effects of Kremil-S Advance Tablet are muscle discomfort, vomiting or stomach pain, constipation, fatigue, impotence, and unexplained bleeding or bruising.', '{\"format\":\"Chewable Tablet\",\"prescription_required\":\"0\"}', 'Aluminum Hydroxide Magnesium Hydroxide Simeticone', 'Used for the treatment, control, prevention, such as acidity, heartburn, upset stomach, stomach acid, and indigestion.'),
(94, 1, 'Kremil-S Advance', 'uploads/ccRrnwhygUdi650ZYnq11524459862.jpg', 'Unilab', 'Used for Acidity, Heartburn, Upset stomach, Stomach acid, Acid indigestion, Sour stomach, Indigestion, Gastric ulcers, Calcium supplementation, Increases water in the intestines and other conditions.', 'Relief of heartburn associated w/ acid indigestion &amp; hyperacidity.', 'Before using Kremil-S Advance Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'To relieve heartburn in adults and children 12 years and older: 1 tablet as needed or, as directed by a doctor.', '2018-04-22 21:04:22', '2018-05-08 17:41:15', 'The most commonly reported side-effects of Kremil-S Advance Tablet are muscle discomfort, vomiting or stomach pain, constipation, fatigue, impotence, and unexplained bleeding or bruising.', '{\"format\":\"Chewable Tablet\",\"prescription_required\":\"0\"}', 'Calcium Carbonate Magnesium Hydroxide Famotidine', 'Relief of heartburn associated w/ acid indigestion &amp; hyperacidity.'),
(95, 1, 'Lormide', 'uploads/0h59fK5QelgppofjpotW1524460285.jpg', 'Unilab', 'Lormide slows the rhythm of digestion so that the small intestines have more time to absorb fluid and nutrients', 'This medication is used to treat diarrhea. It helps to decrease the number and frequency of bowel movements. It works by slowing the movement of the intestines.', 'Before taking loperamide, tell your doctor or pharmacist if you are allergic to it; or if you have any other allergies details. During pregnancy, this medication should be used only if clearly needed. Discuss the risks and benefits with your doctor. Talk to your pharmacist for more details.', '*For symptomatic Relief of Acute diarrhea\n*Adult dose: Take 2 capsules initially followed by 1 capsule after each loose bowel movement. Or as, directed by a doctor. Maximum dose is 16 mg. (8 capsules) per day. Discontinue if there is no improvement after 2 days. \n\n*For Symptomatic Relief of Chronic diarrhea\n\n*Adult dose:\nTake 2 capsules initially followed by 1 capsule after each loose bowel movement. Or as, directed by a doctor. Then reduce loperamide dose to meet individual requirements. When the optimal daily dosage has been established, administer this amount as a single dose or in divided doses. Or as, directed by a doctor.\n\n*Average Daily Maintenance Dose: Take 2 to 4 capsules/day. A dosage of five capsules (10mg) is rarely exceeded.  If no clinical improvement as observed after treatment with 8 capsules/day (16mg) for atleast 10 days, symptoms are unlikely to be controlled by further Loperamide administration.', '2018-04-22 21:11:25', '2018-05-08 17:41:15', 'Dry mouth, abdominal pain, distention or discomfort, nausea, vomiting, fatigue, flatulence, dyspepsia, constipation, epigastric pain, paralytic ileus &amp; toxic megacolon.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Loperamide', 'This medication is used to treat diarrhea. It helps to decrease the number and frequency of bowel movements. It works by slowing the movement of the intestines.'),
(96, 2, 'Akapulko', 'uploads/7fxrcmg1aRPZnLp3xjTG1524463381.jpg', 'N/A', 'Akapulko leaves contain chrysophanic acid, a fungicide that is used to treat fungal infections, like ringworms, scabies and eczema.. Akapulko leaves are also known to be sudorific, diuretic and purgative, usedto treat intestinal problems including intestinal parasites. Akapulko is also used as herbal medicine to treat bronchitis and asthma.', 'Herbal to treat tinea infections, insect bites, ringworms, eczema, scabies and itchiness.', 'Akapulko possesses Immunosuppressive action. Therefore, avoid taking corticosteroids (eg, prednisone) or cyclosporine with Akapulko.\nWhen taking medications for diabetes, hypertension, heart problems, etc., Akapulko may couter-act or aggravate its effectiveness. It is advised to consult your doctor before using this herb.\nPregnancy and Breast feeding. There is no sufficient studies done to investigate the adverse or side effects of Akapulko consumption during pregnancy and breast feeding. It is recommended to aovoid its use.', 'Akapulko herbal tea or decoction.\nPound or cut a cup of Akapulko seeds, Akapulko leaves and flowers into manageable sizes then let it seep in boiling water for 10 to 15 minutes to creat an Akapulko herbal tea. Let it cool and drink a cup three times a day. The potency of Akapulko herbal tea is good to last for one day. Make new Akapulko herbal tea as needed.', '2018-04-22 22:03:01', '2018-05-08 17:41:15', 'Akapulko leaves are safe for most adults, however the seeds should not be taken for long term.\nAllergy. Akapulko have been reported to cause allergic reaction to sensitive people.', '{\"format\":\"N\\/A\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal to treat tinea infections, insect bites, ringworms, eczema, scabies and itchiness.'),
(97, 2, 'Avocado', 'uploads/J7kHEfCKzEonTq1eLolG1524463590.jpg', 'N/A', 'The fruit of Persea americana, commonly known as avocado, is an edible fruit from Central America which is easily adaptable in tropical regions. The avocado has an olive-green peel and thick pale yellow pulp that is rich in fatty acids such as linoleic, oleic, palmitic, stearic, linolenic, capric, and myristic acid', 'Herbal for wounds, toothaches, cuts and wounds, menstruation, skin irritation, rheumatism, sunburn', 'N/A', 'It is best to store ripe avocado in a refrigerator. Just like any other fruits, when an avocado is sliced open and exposed to air, the avocado flesh will soon oxidize and turn brownish in color. To store sliced avocado, sprinkle lemon juice, wrap with plastic and keep in refrigerator.', '2018-04-22 22:06:30', '2018-05-08 17:41:15', 'Avocado contains enzyme called chitinases that are associated with the latex-fruit allergy syndrome. There has been a report that consumption of avocado containing food can cause anaphylaxis in latex sensitized patients. It is therefore recommended to avoid avocado if latex allergy is suspected.', '{\"format\":\"N\\/A\",\"prescription_required\":\"0\"}', 'N/A', 'Herbal for wounds, toothaches, cuts and wounds, menstruation, skin irritation, rheumatism, sunburn'),
(98, 1, 'Hemerate FA', 'uploads/Fp8yPP3WvLGV5AEFio871525760847.jpg', 'Unilab', 'A round, pink-colored, biconvex tablet bisected on one side and plain on the other side. Folic acid, vitamins B6 and B12 are also required in the metabolism of homocysteine to prevent its accumulation in the blood.\n*For the prevention and treatment of iron deficiency anemia in pregnant and lactating women. \n*To reduce the risk of having a baby with neutral tube defect due to folate deficiency. \n*And to help lower plasma homocysteine.', '*For the prevention and treatment of iron deficiency anemia in pregnant and lactating women. \n*To reduce the risk of having a baby with neutral tube defect due to folate deficiency. \n*And to help lower plasma homocysteine.', 'Before using Hemarate Fa Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc. Take as directed by your doctor.', 'Orally, 1 tablet daily as soon as pregnancy is detected. Or, as directed by a doctor.', '2018-05-07 22:27:27', '2018-05-09 00:53:55', 'The most commonly reported side-effects of Hemarate Fa Tablet are stomach upset and pain, constipation, diarrhea, nausea, vomiting, and polycythemia vera.', '{\"format\":\"Film coated-tablet\",\"prescription_required\":\"0\"}', 'Iron + Folic Acid + Vitamin B-complex', 'vitamin vitamins  and supplements supplements prevention of for iron deficiency neutral tube defect'),
(99, 1, 'Calciumade', 'uploads/6ReIe1VMrLHhrqUQp28O1525761068.jpg', 'Unilab', 'Used for Pregnancy related mineral deficiency, Inflammation, Vitamin deficiency, Digestive disorders, Autoimmunity disorders, Mineral deficiencies, Minerals related poor nutrition and to help maintain optimum bone function and risk of osteoporosis later in life.', 'To help maintain optimum bone function and risk of osteoporosis later in life.', 'Before using Calciumade Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Take as directed by your doctor. Dosage is based on your condition.', 'Orally once daily. Or, as directed by a doctor.', '2018-05-07 22:31:08', '2018-05-09 00:33:32', 'The most commonly reported side-effects of Calciumade Tablet are upset stomach, headache, and unusual, unpleasant taste in mouth.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Calcium + Vitamin D3 + Minerals', 'Mineral deficiency, Inflammation, Vitamin deficiency, Digestive disorders, Autoimmunity disorders, Mineral deficiencies.'),
(100, 1, 'Enervon', 'uploads/GHRnT1faEQldm4AKBwk21525761257.jpg', 'Unilab', 'Used for the treatment of Pregnancy related mineral deficiency, Inflammation, Vitamin deficiency, Digestive disorders, Autoimmunity disorders, Mineral deficiencies and to help promote increased energy and enhance the immune system. For the treatment of vitamin-B complex deficiencies and vitamin C deficiencies.', 'To help promote increased energy and enhance the immune system. For the treatment of vitamin-B complex deficiencies and vitamin C deficiencies.', 'Inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Dosage is based on your condition.  Take as directed by your doctor.', 'Orally once daily. Or, as directed by a doctor.', '2018-05-07 22:34:17', '2018-05-09 00:38:45', 'The most commonly reported side-effects of Enervon Tablet are gastrointestinal intolerance, allergic manifestations, and idiosyncratic reactions.', '{\"format\":\"Tablet\",\"prescription_required\":\"0\"}', 'Tablet', 'Treatment of Pregnancy, mineral deficiency, Inflammation, Vitamin deficiency, Digestive disorders, Autoimmunity disorders, Vitamin C, and Vitamin-B'),
(101, 1, 'Enervon Activ', 'uploads/A2uwilBjxmoJTD4P6yRX1525761540.jpg', 'Unilab', 'Enervon Activ Capsule works by providing nutritional requirements of the body to maintain physiological balance; maintaining fluid balance within body cells and acidity levels; boosting the immune system; suppression of interleukins and chemokines.To help promote optimum physical and mental performance.', 'To help promote optimum physical and mental performance.', 'Before using Enervon Activ Capsule, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.). Some health conditions may make you more susceptible to the side-effects of the drug. Dosage is based on your condition.  Take as directed by your doctor.', 'Orally, 1-2 gel capsules daily or, as directed by a doctor.', '2018-05-07 22:39:00', '2018-05-09 00:40:17', 'The most commonly reported side-effects of Enervon Activ Capsule are gastrointestinal intolerance, allergic manifestations, idiosyncratic reactions, unusual, unpleasant taste in mouth, upset stomach, and headache.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Multivitamins + Minerals + Ginseng + Royal Jelly', 'Physiological balance, fluid balance ,immune system, optimum physical and mental performance.'),
(102, 1, 'Myra-e 400', 'uploads/FBXrrGJ6O4skBE8DtN971525762398.jpg', 'Unilab', 'Prevention and Treatment of vitamin E deficiency.Improve muscular performance, circulation of blood, Protects and revitalizes of body cells, makes you look young and feel young.', 'Improve muscular performance, circulation of blood, Protects and revitalizes of body cells, makes you look young and feel young.', 'Before using Myra E Capsule, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Orally, 1-2 capsules daily', '2018-05-07 22:53:18', '2018-05-09 00:41:19', 'The most commonly reported side-effects of Myra E Capsule are dizziness, diarrhea, blurred vision, headache, nausea, and stomach cramps.', '{\"format\":\"Capsule\",\"prescription_required\":\"1\"}', 'dl-Alpha Tocopheryl Acetate (Vitamin E)', 'Glowing skin, muscular performance, circulation of blood, revitalizes of body cells'),
(103, 1, 'Myra e 300 IU', 'uploads/NoSvwy0o3bYamMv2xQYU1525762585.jpg', 'Unilab', 'Provides anti-oxidant action that helps remove harmful free radicals and promote cell and tissue renewal of the skin, heart, lungs, muscles and liver. It maintains and improves stamina to keep you on the go all day.Improve muscular performance, circulation of blood, Protects and revitalizes of body cells, makes you look young and feel young.', 'Improve muscular performance, circulation of blood, Protects and revitalizes of body cells, makes you look young and feel young.', 'Before using Myra 300 - E Capsule, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.', 'Orally, take 1 capsule daily. Or, prescribed by your doctor.', '2018-05-07 22:56:25', '2018-05-09 00:42:07', 'The most commonly reported side-effects of Myra 300 - E Capsule are blurred vision, diarrhea, dizziness, headache, nausea, and stomach cramps.', '{\"format\":\"Capsule\",\"prescription_required\":\"1\"}', 'dl-Alpha Tocopheryl Acetate (Vitamin E)', 'muscular performance, circulation of blood, Glowing skin'),
(107, 1, 'United Home Ceetab Premium', 'uploads/dsb2B8me8xPUohyaJTNE1525763269.jpg', 'Unilab', 'Used for the treatment of scurvy (vitamin C deficiency)  such as spongy gums, loosening of the teeth, and bleeding into the skin and mucous membranes.', 'Used for the treatment scurvy such as spongy gums, loosening of the teeth, and bleeding into the skin and mucous membranes.', 'Before using Ceetab Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', '*For daily maintenance 1-2 capsules daily.\n*For cold symptoms, take 3 to 4 capsules daily.\nOr, Prescribed by your physician.', '2018-05-07 23:07:49', '2018-05-09 00:47:14', 'The most commonly reported side-effects of Ceetab Tablet are temporary faintness, dizziness, and injection site soreness.', '{\"format\":\"Capsule\",\"prescription_required\":\"0\"}', 'Sodium Ascorbate', 'Spongy gums, loosening of the teeth,bleeding skin, mucous membranes.'),
(108, 1, 'Vigor Ace', 'uploads/993Br7m9znNvyJ5LiYyA1525763372.jpg', 'Unilab', 'For the prevention and treatment of vitamins and/or mineral deficiencies. Nutritional supplement especially indicated to support active function in adults and to help restore and maintain general well-being, strength and vitality.', 'For the prevention and treatment of vitamins and/or mineral deficiencies.', 'Before using Vigor Ace Tablet, inform your doctor about your current list of medications, over the counter products (e.g. vitamins, herbal supplements, etc.), allergies, pre-existing diseases, and current health conditions (e.g. pregnancy, upcoming surgery, etc.).', 'Orally, 1 softgel capsule daily or as directed by a doctor.', '2018-05-07 23:09:32', '2018-05-09 00:49:16', 'The most commonly reported side-effects of Vigor Ace Tablet are yellowing of the skin, diarrhea, dizziness, joint pain, flushing or redness of skin, and stomach upset.', '{\"format\":\"Softgel capsule\",\"prescription_required\":\"0\"}', 'Multivitamins + Minerals', 'Prevention and treatment of vitamins and/or mineral deficiencies.');

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
(3, '2018_03_09_032656_create_medicines_table', 1),
(4, '2018_03_09_033903_create_category_table', 2),
(5, '2018_03_20_101439_add_columns_to_medicine_table', 3),
(6, '2018_03_26_023556_add_format_to_medicines_table', 4),
(7, '2018_04_10_111326_add_generic_name_to_medicines', 5),
(8, '2018_04_16_022430_update_category_table', 6),
(9, '2018_04_16_024136_add_medicine_id_elements_table', 7),
(10, '2018_04_16_052643_rename_column_grams_table_elements', 8),
(11, '2018_04_16_072114_update_category_table', 9),
(12, '2018_04_16_074007_create_contentmed_table', 10),
(13, '2018_04_26_044439_create_health_tips_table', 11),
(14, '2018_04_26_045018_create_tips_table', 11),
(15, '2018_04_26_045837_create_health_tips_pictures_table', 11),
(16, '2018_05_07_095811_add_category_to_health_tips_table', 12),
(17, '2018_05_08_091709_add_key_word_to_medicines_table', 13);

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
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `health_tips_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `health_tips_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Drink water when you wake up. You are naturally thirsty or dehydrated in the morning.', '2018-04-26 03:31:23', '2018-04-26 03:31:23'),
(2, 1, 'Drink 8 to 12 glasses a day.', '2018-04-26 03:31:23', '2018-04-26 03:31:23'),
(3, 2, 'Try a cup of oatmeal a day.', '2018-04-26 03:52:34', '2018-04-26 03:52:34'),
(4, 2, 'Eat more oily fishes, like sardines, salmon and bangus.', '2018-04-26 03:52:34', '2018-04-26 03:52:34'),
(5, 2, 'Eating garlic is good for the heart, too.', '2018-04-26 03:52:34', '2018-04-26 03:52:34'),
(6, 2, 'Increase your fiber consumption, such as apples, legumes, and grains, since fiber removes the cholesterol from your body.', '2018-04-26 03:52:34', '2018-04-26 03:52:34'),
(16, 10, 'Avoid the sun -- Sunlight is the primary cause of wrinkles and aging. Thus, we should avoid the sun from 10 AM to 3 PM. Use a sunscreen daily.', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(17, 10, 'Stop smoking and avoid alcohol', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(18, 10, 'Be weather-conscious -- Skin can be damaged by very hot or very cold weather. Strong wind, dust and pollution cause wrinkles to form in your face.', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(19, 10, 'Get enough sleep', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(20, 10, 'Limit stress', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(21, 10, 'Clean your face', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(22, 10, 'Moisturize your skin', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(23, 10, 'Be gentle when touching your face.', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(24, 10, 'Use clever make-up', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(25, 10, 'Eat lots of colorful fruits, vegetables and salads.', '2018-04-26 06:42:24', '2018-04-26 06:42:24'),
(26, 11, 'Place the dragonfruit on a chopping board. Use a large knife to cut in half lengthways.', '2018-04-26 16:48:58', '2018-04-26 16:48:58'),
(27, 11, 'The flesh of the dragon fruit may be white or red.', '2018-04-26 16:48:58', '2018-04-26 16:48:58'),
(28, 11, 'Use a spoon to scoop out the flesh.', '2018-04-26 16:48:58', '2018-04-26 16:48:58'),
(29, 18, 'step1', '2018-05-07 03:22:31', '2018-05-07 03:22:31'),
(30, 18, 'step2', '2018-05-07 03:22:31', '2018-05-07 03:22:31'),
(31, 19, 'Resting enables the body to focus its energy on fighting the infection rather than using it on daily activities.', '2018-05-08 00:23:48', '2018-05-08 00:23:48'),
(32, 19, 'Drinking plenty of fluids will prevent the throat from drying out and becoming more uncomfortable. When the body is fighting an infection, it needs more hydration than normal. Warm, preferably caffeine-free drinks can also soothe.', '2018-05-08 00:23:48', '2018-05-08 00:23:48'),
(33, 19, 'Gargling with saltwater might help with discomfort.', '2018-05-08 00:23:48', '2018-05-08 00:23:48'),
(34, 19, 'Avoiding irritants, such as tobacco and smoky locations.', '2018-05-08 00:23:48', '2018-05-08 00:23:48'),
(35, 19, 'Taking medication, such as ibuprofen or acetaminophen, can help with pain and fever.', '2018-05-08 00:23:48', '2018-05-08 00:23:48'),
(36, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:29:53', '2018-05-08 00:29:53'),
(37, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:29:53', '2018-05-08 00:29:53'),
(38, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:29:53', '2018-05-08 00:29:53'),
(39, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:29:59', '2018-05-08 00:29:59'),
(40, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:29:59', '2018-05-08 00:29:59'),
(41, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:29:59', '2018-05-08 00:29:59'),
(42, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:30:05', '2018-05-08 00:30:05'),
(43, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:06', '2018-05-08 00:30:06'),
(44, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:06', '2018-05-08 00:30:06'),
(45, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:30:13', '2018-05-08 00:30:13'),
(46, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:13', '2018-05-08 00:30:13'),
(47, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:13', '2018-05-08 00:30:13'),
(48, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:30:17', '2018-05-08 00:30:17'),
(49, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:17', '2018-05-08 00:30:17'),
(50, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:17', '2018-05-08 00:30:17'),
(51, 20, '1. Gargling\n\nThis old-school remedy can ease a sore throat, which is often one of the first symptoms of a cold. People can choose from a variety of saltwater gargle recipes, including gargling with 1 teaspoon of salt mixed in a cup of warm water.\n\nAnother option is gargling with warm water that is mixed with half a teaspoon of lemon juice and honey. With any gargling solutions, people should be sure that the water is not too hot, which can lead to burns.', '2018-05-08 00:30:43', '2018-05-08 00:30:43'),
(52, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:43', '2018-05-08 00:30:43'),
(53, 20, 'Sipping fluids\n\nDrinking plenty of fluids can help prevent dehydration and may thin mucus. Water is the best bet when it comes to staying well hydrated. Other liquids such as juice are also acceptable.\n\nTea with lemon and honey and other hot drinks may help break up congestion and ease a sore throat. Hot soup, especially spicy soups, may promote nasal drainage and make breathing easier.', '2018-05-08 00:30:43', '2018-05-08 00:30:43'),
(54, 21, 'Cool water\nThe first thing you should do when you get a minor burn is run cool (not cold) water over the burn area for about 20 minutes. Then wash the burned area with mild soap and water.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(55, 21, 'Cool compresses\nA cool compress or clean wet cloth placed over the burn area helps relieve pain and swelling. You can apply the compress in 5- to 15-minute intervals. Try not to use excessively cold compresses because they may irritate the burn more.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(56, 21, 'Antibiotic ointments\nAntibiotic ointments and creams help prevent infections. Apply an antibacterial ointment like Bacitracin or Neosporin to your burn and cover with cling film or a sterile, non-fluffy dressing or cloth.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(57, 21, 'Aloe vera\nAloe vera is often touted as the “burn plant.” Studies show evidence that aloe vera is effective in healing first- to second-degree burns. Aloe is anti-inflammatory, promotes circulation, and inhibits the growth of bacteria.\n\nApply a layer of pure aloe vera gel taken from the leaf of an aloe vera plant directly to the affected area. If you buy aloe vera in a store, make sure it contains a high percentage of aloe vera and avoid products that have additives, especially coloring and perfumes.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(58, 21, 'Honey\nHoney just got sweeter. Apart from its delicious taste, honey may help heal a minor burn when applied topically. Honey is an anti-inflammatory and naturally anti-bacterial and anti-fungal.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(59, 21, 'Reducing sun exposure\nDo your best to avoid exposing the burn to direct sunlight. The burned skin will be very sensitive to the sun. Keep it covered with clothing.', '2018-05-08 00:36:17', '2018-05-08 00:36:17'),
(60, 21, 'Don’t pop your blisters\nAs tempting as it may be, leave your blisters alone. Bursting a blister yourself can lead to infection. If you’re worried about blisters that have formed due to your burn, see a medical professional.', '2018-05-08 00:36:17', '2018-05-08 00:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contentmed`
--
ALTER TABLE `contentmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_tips`
--
ALTER TABLE `health_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_tips_pictures`
--
ALTER TABLE `health_tips_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tips`
--
ALTER TABLE `tips`
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
-- AUTO_INCREMENT for table `contentmed`
--
ALTER TABLE `contentmed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `health_tips`
--
ALTER TABLE `health_tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `health_tips_pictures`
--
ALTER TABLE `health_tips_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
