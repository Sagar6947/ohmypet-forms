-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2023 at 11:44 AM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohmypet_forms_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_query_notification`
--

CREATE TABLE `all_query_notification` (
  `nid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `service_type` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `is_new` enum('0','1') NOT NULL COMMENT '0 - yes , 1 -no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_query_notification`
--

INSERT INTO `all_query_notification` (`nid`, `create_date`, `owner_id`, `pet_id`, `service_type`, `service_id`, `is_new`) VALUES
(1, '2023-07-10 18:03:49', 1, 1, 1, 1, '1'),
(2, '2023-07-15 16:40:45', 2, 2, 2, 1, '1'),
(3, '2023-07-17 22:33:57', 3, 3, 2, 2, '1'),
(4, '2023-07-18 13:36:38', 4, 4, 2, 3, '1'),
(5, '2023-07-18 13:41:14', 5, 5, 2, 4, '1'),
(6, '2023-07-20 17:40:51', 6, 6, 2, 5, '1'),
(7, '2023-07-20 21:00:10', 7, 7, 1, 2, '1'),
(8, '2023-07-20 21:08:49', 7, 7, 1, 3, '1'),
(9, '2023-07-21 15:21:49', 8, 8, 1, 4, '1'),
(10, '2023-07-21 18:55:31', 9, 9, 3, 1, '1'),
(11, '2023-07-22 19:54:19', 10, 10, 1, 5, '1'),
(12, '2023-07-24 18:54:26', 11, 11, 1, 6, '1'),
(13, '2023-07-28 10:18:49', 12, 13, 1, 7, '1'),
(14, '2023-07-28 14:17:55', 12, 13, 1, 8, '1'),
(15, '2023-07-28 15:57:54', 12, 13, 3, 2, '1'),
(16, '2023-07-28 15:58:58', 12, 13, 2, 6, '1'),
(17, '2023-07-28 15:59:50', 12, 13, 1, 9, '1'),
(18, '2023-07-28 19:06:26', 13, 14, 1, 10, '1'),
(19, '2023-07-28 19:57:47', 13, 15, 1, 11, '1'),
(20, '2023-07-28 21:41:45', 14, 16, 1, 12, '1'),
(21, '2023-07-28 21:44:40', 14, 20, 1, 13, '1'),
(22, '2023-07-28 21:47:10', 14, 21, 1, 14, '1'),
(23, '2023-07-31 17:52:15', 15, 22, 1, 15, '0'),
(24, '2023-07-31 17:55:48', 15, 22, 2, 7, '1'),
(25, '2023-07-31 18:58:20', 15, 22, 1, 16, '0'),
(26, '2023-07-31 22:52:20', 15, 22, 1, 17, '0'),
(27, '2023-07-31 23:18:41', 16, 23, 1, 18, '0'),
(28, '2023-08-01 11:26:59', 17, 24, 1, 19, '0');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `basic_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_age` varchar(100) NOT NULL,
  `pet_age_month` int(11) NOT NULL,
  `pet_gender` varchar(50) NOT NULL,
  `pet_weight` varchar(50) NOT NULL,
  `pet_breed` varchar(50) NOT NULL,
  `pet_microchip_no` varchar(50) NOT NULL,
  `pet_allergies` varchar(500) NOT NULL,
  `pet_is_rabiesVac` varchar(50) NOT NULL,
  `pet_rabiesVac_expDate` varchar(50) NOT NULL,
  `pet_is_dhippiVac` varchar(50) NOT NULL,
  `pet_dhippiVac_expDate` varchar(50) NOT NULL,
  `pet_is_kennelCoughVac` varchar(50) NOT NULL,
  `pet_kennelCoughVac_expDate` varchar(50) NOT NULL,
  `pet_is_fvrcpVac` varchar(50) NOT NULL,
  `pet_fvrcpVac_expDate` varchar(50) NOT NULL,
  `pet_is_pchVac` varchar(10) NOT NULL,
  `pet_pchVac_expDate` varchar(50) NOT NULL,
  `pet_likes` varchar(300) NOT NULL,
  `pet_dislikes` varchar(300) NOT NULL,
  `pet_place_to_play` varchar(300) NOT NULL,
  `vac_book` varchar(300) NOT NULL,
  `pet_profile_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`basic_id`, `created_on`, `owner_id`, `pet_type`, `pet_name`, `pet_age`, `pet_age_month`, `pet_gender`, `pet_weight`, `pet_breed`, `pet_microchip_no`, `pet_allergies`, `pet_is_rabiesVac`, `pet_rabiesVac_expDate`, `pet_is_dhippiVac`, `pet_dhippiVac_expDate`, `pet_is_kennelCoughVac`, `pet_kennelCoughVac_expDate`, `pet_is_fvrcpVac`, `pet_fvrcpVac_expDate`, `pet_is_pchVac`, `pet_pchVac_expDate`, `pet_likes`, `pet_dislikes`, `pet_place_to_play`, `vac_book`, `pet_profile_img`) VALUES
(1, '2023-07-10 18:03:49', 1, 'CATS', 'snowy', '1', 9, 'female', '3.5', 'calico', 'ghh12345', 'none', 'Yes', '2023-11-11', '', '', '', '', '', '', 'Yes', '2023-11-24', '', '', '', '', ''),
(2, '2023-07-15 16:40:45', 2, 'CATS', 'Maimai', '2021', 2, 'female', '', 'Arabian Mau X', '900115002044177', '', 'Yes', '2024-02-25', '', '', '', '', '', '', 'Yes', '2024-02-25', '', '', '', '', '15071689419445240.jpg'),
(3, '2023-07-17 22:33:57', 3, 'DOGS', 'Nexo', '2022', 0, 'male', '4.5', 'Cavapoo', '900215005117522', 'None', 'Yes', '2024-03-18', 'Yes', '2024-03-18', 'Yes', '2024-03-18', '', '', '', '', '', '', '', '', '17071689613436897.jpeg'),
(4, '2023-07-18 13:36:38', 4, 'DOGS', 'Rusty', '2014', 0, 'male', '36', 'Labrador', '941000016462970', '', 'Yes', '2023-05-06', 'Yes', '2023-05-06', 'Yes', '2023-05-06', '', '', '', '', '', '', '', '', ''),
(5, '2023-07-18 13:41:14', 5, 'CATS', 'Ronto', '2023', 0, 'male', '28', 'Golden retriever ', '900215005385141', '', 'Yes', '2023-06-30', '', '', '', '', '', '', 'Yes', '2023-06-30', '', '', '', '', ''),
(6, '2023-07-20 17:40:51', 6, 'DOGS', 'Brownie', '', 6, 'male', '5', 'Toy poodle', '900215002461588', '', 'Yes', '2024-05-12', 'Yes', '2024-04-28', 'Yes', '2024-01-19', '', '', '', '', '', '', '', '', '20071689855051209.jpeg'),
(7, '2023-07-20 21:00:10', 7, 'DOGS', 'Jojo', '2', 5, 'male', '6', 'Maltese', '9441600962285', '', 'Yes', '2024-04-04', 'Yes', '2024-04-04', 'Yes', '2024-04-04', '', '', '', '', '', '', '', '', '26071690373325375.jpg'),
(8, '2023-07-21 15:21:49', 8, 'DOGS', 'sdfsdfs', '', 0, 'male', '', '', '', '', 'Yes', '2023-07-11', 'Yes', '2023-07-27', 'Yes', '2023-07-14', '', '', '', '', '', '', '', '', '21071689933109661.png'),
(9, '2023-07-21 18:55:31', 9, 'DOGS', 'Mocha ', '2017', 12, 'female', '16', 'Beagle', '941000022324872', 'None', 'Yes', '2024-01-21', 'Yes', '2024-01-21', 'Yes', '2024-01-21', '', '', '', '', '', '', '', '', ''),
(10, '2023-07-22 19:54:19', 10, 'CATS', 'Bagheera', '1', 0, 'male', '5', 'Persian', '900193000085847', '', 'Yes', '2024-05-14', '', '', '', '', '', '', 'Yes', '2024-05-14', '', '', '', '', '22071690035859050.jpg'),
(11, '2023-07-24 18:54:26', 11, 'DOGS', 'Shasha', '1', 9, 'female', '1', 'Pomeranian', '900215002451946', 'None', 'Yes', '2024-06-21', 'Yes', '2024-06-21', 'No', '2023-07-24', '', '', '', '', '', '', '', '', '24071690205066539.JPG'),
(12, '2023-07-20 21:00:10', 7, 'CATS', 'Jojo', '2', 5, 'male', '6', 'Maltese', '9441600962285', '', 'Yes', '2024-04-04', 'Yes', '2024-04-04', 'Yes', '2024-04-04', '', '', '', '', '', '', '', '', '26071690377386106.jpg'),
(13, '2023-07-28 10:18:49', 12, 'DOGS', 'asd', 'asd', 0, 'male', 'asd', 'asd', 'asd', 'asd', 'Yes', '2023-07-12', 'Yes', '2023-07-26', 'Yes', '2023-07-26', '', '', 'Yes', '2023-06-27', '', '', '', '', '28071690540074140.png'),
(14, '2023-07-28 19:06:26', 13, 'DOGS', 'Rocky', '10', 12, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-18', 'Yes', '2023-07-26', 'Yes', '2023-07-11', '', '', '', '', '', '', '', '', '28071690551386286.jpg'),
(15, '2023-07-28 19:57:47', 13, 'DOGS', 'Rocky', '10', 12, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-18', 'Yes', '2023-07-26', 'Yes', '2023-07-11', '', '', '', '', '', '', '', '', '28071690554467841.jpg'),
(16, '2023-07-28 21:41:45', 14, 'DOGS', 'Rocky', '3', 9, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-13', 'Yes', '2023-07-25', 'Yes', '2023-08-01', '', '', '', '', '', '', '', '', '28071690560705620.jpg'),
(17, '2023-07-28 21:43:37', 14, 'DOGS', 'Rocky', '3', 9, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-13', 'Yes', '2023-07-25', 'Yes', '2023-08-01', '', '', '', '', '', '', '', '', '28071690560817451.jpg'),
(18, '2023-07-28 21:44:18', 14, 'DOGS', 'Rocky', '3', 9, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-13', 'Yes', '2023-07-25', 'Yes', '2023-08-01', '', '', '', '', '', '', '', '', '28071690560858086.jpg'),
(19, '2023-07-28 21:44:28', 14, 'DOGS', 'Rocky', '3', 9, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-13', 'Yes', '2023-07-25', 'Yes', '2023-08-01', '', '', '', '', '', '', '', '', '28071690560868682.jpg'),
(20, '2023-07-28 21:44:40', 14, 'DOGS', 'Rocky', '3', 9, 'male', '4.7', 'Pomeranian', '123456', 'Test Allergy', 'Yes', '2023-07-13', 'Yes', '2023-07-25', 'Yes', '2023-08-01', '', '', '', '', '', '', '', '', '28071690560880050.jpg'),
(21, '2023-07-28 21:47:10', 14, 'DOGS', 'Ansar Mohammed', '3', 9, 'male', '4.7', 'Pomeranian', '123456', '', 'Yes', '2023-07-27', 'Yes', '2023-07-26', 'Yes', '2023-07-26', '', '', '', '', '', '', '', '', '28071690561030036.jpg'),
(22, '2023-07-31 17:52:15', 15, 'DOGS', '123', '12', 2, 'male', '', '', '', '', 'Yes', '2023-07-05', 'Yes', '2023-07-04', 'No', '2023-07-27', '', '', '', '', '', '', '', '', '31071690810100295.jpg'),
(23, '2023-07-31 23:18:41', 16, 'DOGS', 'Rocky', '3', 12, 'male', '3.3', 'Pomeranian', '123456', 'Test allergy', 'Yes', '2023-07-22', 'Yes', '2023-07-29', 'Yes', '2023-07-29', '', '', '', '', '', '', '', '', '31071690825719285.png'),
(24, '2023-08-01 11:26:59', 17, 'DOGS', 'Sagar Thakur', '2', 6, 'male', '40', '', '', '', 'Yes', '2023-08-10', 'Yes', '2023-08-16', 'Yes', '2023-08-17', '', '', '', '', '', '', '', '', '01081690869419422.png');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details_vacbook`
--

CREATE TABLE `basic_details_vacbook` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `book_nm` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_details_vacbook`
--

INSERT INTO `basic_details_vacbook` (`id`, `bid`, `book_nm`, `create_date`) VALUES
(4, 7, '', '2023-07-26 17:31:04'),
(5, 7, '', '2023-07-26 17:31:04'),
(6, 7, '26071690372905063.jpg', '2023-07-26 17:31:45'),
(7, 7, '26071690372905433.jpg', '2023-07-26 17:31:45'),
(8, 7, '26071690376321584.jpg', '2023-07-26 18:28:41'),
(9, 12, '26071690377394764.png', '2023-07-26 18:46:34'),
(10, 12, '26071690377394921.png', '2023-07-26 18:46:34'),
(11, 13, '28071690519729376.png', '2023-07-28 10:18:49'),
(12, 13, '', '2023-07-28 15:59:50'),
(13, 13, '28071690540190293.png', '2023-07-28 15:59:50'),
(14, 13, '28071690540190470.png', '2023-07-28 15:59:50'),
(15, 14, '', '2023-07-28 19:06:26'),
(16, 14, '', '2023-07-28 19:06:26'),
(17, 14, '', '2023-07-28 19:06:26'),
(18, 15, '', '2023-07-28 19:57:47'),
(19, 15, '', '2023-07-28 19:57:47'),
(20, 15, '', '2023-07-28 19:57:47'),
(21, 16, '', '2023-07-28 21:41:45'),
(22, 16, '', '2023-07-28 21:41:45'),
(23, 16, '', '2023-07-28 21:41:45'),
(24, 20, '', '2023-07-28 21:44:40'),
(25, 20, '', '2023-07-28 21:44:40'),
(26, 20, '', '2023-07-28 21:44:40'),
(27, 21, '', '2023-07-28 21:47:10'),
(28, 21, '', '2023-07-28 21:47:10'),
(29, 21, '', '2023-07-28 21:47:10'),
(30, 22, '', '2023-07-31 17:52:15'),
(31, 22, '', '2023-07-31 17:55:48'),
(32, 22, '', '2023-07-31 18:58:20'),
(33, 22, '31071690824139997.jpg', '2023-07-31 22:52:20'),
(34, 22, '31071690824140011.jpg', '2023-07-31 22:52:20'),
(35, 22, '31071690824140098.png', '2023-07-31 22:52:20'),
(36, 23, '31071690825721043.jpg', '2023-07-31 23:18:41'),
(37, 23, '', '2023-07-31 23:46:50'),
(38, 23, '', '2023-07-31 23:46:50'),
(39, 23, '', '2023-07-31 23:46:50'),
(40, 24, '01081690869419480.pdf', '2023-08-01 11:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `boarding_details`
--

CREATE TABLE `boarding_details` (
  `boarding_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `morning_amt` varchar(100) NOT NULL,
  `afternoon_amt` varchar(100) NOT NULL,
  `evening_amt` varchar(100) NOT NULL,
  `treats` varchar(100) NOT NULL,
  `restrictions` varchar(100) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_day` varchar(50) NOT NULL,
  `regular_vet` varchar(100) NOT NULL,
  `regular_vet_contact` varchar(100) NOT NULL,
  `regular_vet_address` varchar(100) NOT NULL,
  `emergency_vet` varchar(100) NOT NULL,
  `emergency_vet_contact` varchar(100) NOT NULL,
  `emergency_vet_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boarding_details`
--

INSERT INTO `boarding_details` (`boarding_id`, `created_on`, `owner_id`, `pet_id`, `brand_name`, `morning_amt`, `afternoon_amt`, `evening_amt`, `treats`, `restrictions`, `medication`, `from_date`, `to_day`, `regular_vet`, `regular_vet_contact`, `regular_vet_address`, `emergency_vet`, `emergency_vet_contact`, `emergency_vet_address`) VALUES
(2, '2023-07-17 22:33:57', 3, 3, 'Purina Proplan Optistart', '35 gms @ 7 am, soaked in 150 ml warm water for about 15-20 mins, served along with the water', 'none', '35 gms @ 7 am, soaked in 150 ml warm water for about 15-20 mins, served along with the water', '11am and 4 pm; any of the following - apple (only once a week), cucumber or water melon slices, stea', 'None', 'None', '2023-07-19', '2023-08-15', 'Dr Dominic Saurek', '044309797', 'Vetcare, Diamond Business Center 1, Block B, Arjan', 'Any vet in the clinic', '044309797', 'Vetcare, Diamond Business Center 1, Block B, Arjan'),
(5, '2023-07-20 17:40:51', 6, 6, 'Royal canin', 'Some', 'Some', 'Some', 'Met,duck,chicken ', 'After doing good', 'None', '2023-07-04', '2023-07-21', 'Pet connection ', '044475307', 'Albarsha 1', 'Pet connection ', '044475307', 'Albarsha 1'),
(6, '2023-07-28 15:58:58', 12, 13, 'wer', 'wer', 'wer', 'wer', 'wer', 'wer', 'wer', '2023-07-19', '2023-07-06', 'wer', 'wer', 'wer', 'wer', 'wer', 'wer'),
(7, '2023-07-31 17:55:48', 15, 22, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-07-25', '2023-07-15', 'asd', 'asd', 'asd', 'asda', 'sda', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `daycare_details`
--

CREATE TABLE `daycare_details` (
  `daycare_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `likes` varchar(200) NOT NULL,
  `dislike` varchar(200) NOT NULL,
  `place_play` varchar(200) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `morning_amt` varchar(100) NOT NULL,
  `afternoon_amt` varchar(100) NOT NULL,
  `evening_amt` varchar(100) NOT NULL,
  `treats` varchar(100) NOT NULL,
  `restrictions` varchar(100) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `select_days` varchar(10) NOT NULL,
  `single_day_date` varchar(20) NOT NULL,
  `from_date` varchar(20) NOT NULL,
  `to_date` varchar(20) NOT NULL,
  `from_time` varchar(20) NOT NULL,
  `to_time` varchar(20) NOT NULL,
  `from_hour` varchar(50) NOT NULL,
  `from_min` varchar(50) NOT NULL,
  `to_hour` varchar(50) NOT NULL,
  `to_min` varchar(50) NOT NULL,
  `regular_vet` varchar(100) NOT NULL,
  `regular_vet_contact` varchar(100) NOT NULL,
  `regular_vet_address` varchar(100) NOT NULL,
  `emergency_vet` varchar(100) NOT NULL,
  `emergency_vet_contact` varchar(100) NOT NULL,
  `emergency_vet_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grooming_details`
--

CREATE TABLE `grooming_details` (
  `grooming_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `spa_includes` varchar(150) NOT NULL,
  `other_services` text NOT NULL DEFAULT '{}',
  `my_skin` varchar(100) NOT NULL,
  `haircut` varchar(100) NOT NULL,
  `haircut_size` varchar(20) NOT NULL,
  `nails` varchar(100) NOT NULL,
  `mood_during_bath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grooming_details`
--

INSERT INTO `grooming_details` (`grooming_id`, `created_on`, `owner_id`, `pet_id`, `spa_includes`, `other_services`, `my_skin`, `haircut`, `haircut_size`, `nails`, `mood_during_bath`) VALUES
(3, '2023-07-20 21:08:49', 7, 7, 'TYCOON BATH', '[]', 'normal', 'Scissors', ' Medium', 'Short', '[\"Anxious\"]'),
(5, '2023-07-22 19:54:19', 10, 10, 'TYCOON BATH', '[\"teeth-brushing\"]', 'normal', 'Medium', '10 mm', 'Short', '[\"scared\"]'),
(6, '2023-07-24 18:54:26', 11, 11, 'TYCOON BATH', '[]', 'normal', 'Only Trimming', '', 'Short', '[\"Calm\"]'),
(12, '2023-07-28 21:41:45', 14, 16, 'WASH AND GO', '[\"Eyes Cleaning\",\"de matting\"]', 'normal', 'Short', '3 mm', 'Short', '[]'),
(13, '2023-07-28 21:44:40', 14, 20, 'WASH AND GO', '[\"Eyes Cleaning\",\"de matting\"]', 'normal', 'Short', '3 mm', 'Short', '[]'),
(14, '2023-07-28 21:47:10', 14, 21, 'WASH AND GO', '[\"Eyes Cleaning\",\"de matting\",\"quick trimp\"]', 'normal', 'Medium', '9.5 mm', 'Short', '[\"Happy\"]'),
(15, '2023-07-31 17:52:15', 15, 22, 'WASH AND GO', '[]', '', '', '', '', '[]'),
(16, '2023-07-31 18:58:20', 15, 22, 'WASH AND GO', '[]', '', '', '', '', '[]'),
(17, '2023-07-31 22:52:20', 15, 22, 'WASH AND GO', '[]', '', '', '', '', '[]'),
(18, '2023-07-31 23:18:41', 16, 23, 'WASH AND GO', '[\"Eyes Cleaning\"]', 'normal', 'Short', '3 mm', 'Medium', '[]'),
(19, '2023-08-01 11:26:59', 17, 24, 'CUT & GO', '[]', '', '', '', '', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `haircut`
--

CREATE TABLE `haircut` (
  `hid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `haircut` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haircut`
--

INSERT INTO `haircut` (`hid`, `create_date`, `haircut`) VALUES
(1, '2023-06-17 17:25:30', 'Short'),
(2, '2023-06-17 17:25:30', 'Medium'),
(3, '2023-06-17 17:25:56', 'Long'),
(4, '2023-06-17 17:25:56', 'Scissors'),
(5, '2023-06-17 17:26:11', 'Only Trimming');

-- --------------------------------------------------------

--
-- Table structure for table `haircut_type`
--

CREATE TABLE `haircut_type` (
  `tid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `haircut` int(11) DEFAULT NULL,
  `haircut_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haircut_type`
--

INSERT INTO `haircut_type` (`tid`, `create_date`, `haircut`, `haircut_type`) VALUES
(1, '2023-06-17 17:33:54', 1, ' 1.5 mm'),
(2, '2023-06-17 17:33:54', 1, '3 mm'),
(3, '2023-06-17 17:34:11', 1, '3.2 mm'),
(4, '2023-06-17 17:34:11', 1, '6 mm'),
(5, '2023-06-17 17:33:54', 2, '9.5 mm'),
(6, '2023-06-17 17:33:54', 2, '10 mm'),
(7, '2023-06-17 17:34:11', 2, ' 13 mm'),
(8, '2023-06-17 17:33:54', 3, '19 mm'),
(9, '2023-06-17 17:33:54', 3, '25 mm'),
(10, '2023-06-17 17:34:11', 4, 'Short'),
(11, '2023-06-17 17:33:54', 4, ' Medium'),
(12, '2023-06-17 17:33:54', 4, ' Long');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_type` enum('0','1') NOT NULL,
  `login_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `created_on`, `name`, `designation`, `username`, `password`, `login_type`, `login_pic`) VALUES
(1, '2023-06-17 16:30:31', 'admin', '', 'admin', 'admin123', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `oid` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_name` varchar(100) NOT NULL,
  `owner_contact` varchar(50) NOT NULL,
  `owner_contact_1` varchar(15) NOT NULL,
  `emerg_owner_name` varchar(100) NOT NULL,
  `emerg_owner_contact` varchar(15) NOT NULL,
  `owner_address` varchar(200) NOT NULL,
  `owner_facebook` varchar(100) NOT NULL,
  `owner_instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_details`
--

INSERT INTO `owner_details` (`oid`, `created_on`, `owner_name`, `owner_contact`, `owner_contact_1`, `emerg_owner_name`, `emerg_owner_contact`, `owner_address`, `owner_facebook`, `owner_instagram`) VALUES
(3, '2023-07-17 22:33:56', 'Suneel Gollapudi', '0544089604', '', 'Jaya', '0504689776', '106, Divine Residences', 'a', ''),
(4, '2023-07-18 13:36:38', 'Russell', '0508827979', '', 'Pam', '0561141881', '', '', ''),
(5, '2023-07-18 13:41:14', 'Russell', '0561141881', '', 'Russell', '0561141881', '', '', ''),
(6, '2023-07-20 17:40:51', 'Charaf eddine', '0561628302', '', 'Jiji', '0569404542', 'SBO Tower/1105. Albarsha1 Dubai', '', 'Achraf.kerbab'),
(7, '2023-07-20 21:00:10', 'Sonya', '0502103601', '', 'Oliver', '0507941863', 'Arjan dubai', '', ''),
(8, '2023-07-21 15:21:49', 'sdf', 'sdfsdf', '', 'sdfsd', 'sfd', '', '', ''),
(9, '2023-07-21 18:55:31', 'Nadine Fanous', '0569585635', '', 'Nadine Fanous', '0569585635', '', '', ''),
(10, '2023-07-22 19:54:19', 'Rakesh ', '0522672800', '', 'Rakesh', '0522672800', '', '', ''),
(11, '2023-07-24 18:54:26', 'Jasem', '0507373911', '', '/', '/', '/', '/', '/'),
(12, '2023-07-28 10:18:48', 'asd', '9516354018', '', 'asda', 'sdas', 'dasd', 'asd', 'asd'),
(14, '2023-07-28 21:41:45', 'Ansar Mohammed', '+971503526896', '', 'Ans Emergency', '+971503526896', 'Al Safa', 'ansar', 'ansar'),
(15, '2023-07-31 17:52:15', '123', '123', '123', 'wer', 'wer', 'wer', 'wer', 'wer'),
(16, '2023-07-31 23:18:39', 'Ansar', '0503526896', '0503526896 ', 'Ans 2', '050 352 6897', 'Lat', 'Ansar', 'Ansar'),
(17, '2023-08-01 11:26:59', 'Sagar Thakur', '6265954611', '6265965711', 'sagar', '7771864467', 'Indai', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_query_notification`
--
ALTER TABLE `all_query_notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `basic_details_vacbook`
--
ALTER TABLE `basic_details_vacbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boarding_details`
--
ALTER TABLE `boarding_details`
  ADD PRIMARY KEY (`boarding_id`);

--
-- Indexes for table `daycare_details`
--
ALTER TABLE `daycare_details`
  ADD PRIMARY KEY (`daycare_id`);

--
-- Indexes for table `grooming_details`
--
ALTER TABLE `grooming_details`
  ADD PRIMARY KEY (`grooming_id`);

--
-- Indexes for table `haircut`
--
ALTER TABLE `haircut`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `haircut_type`
--
ALTER TABLE `haircut_type`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_query_notification`
--
ALTER TABLE `all_query_notification`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `basic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `basic_details_vacbook`
--
ALTER TABLE `basic_details_vacbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `boarding_details`
--
ALTER TABLE `boarding_details`
  MODIFY `boarding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daycare_details`
--
ALTER TABLE `daycare_details`
  MODIFY `daycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grooming_details`
--
ALTER TABLE `grooming_details`
  MODIFY `grooming_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `haircut`
--
ALTER TABLE `haircut`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `haircut_type`
--
ALTER TABLE `haircut_type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `owner_details`
--
ALTER TABLE `owner_details`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
