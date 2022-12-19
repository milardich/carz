-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 01:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carz`
--
CREATE DATABASE IF NOT EXISTS `carz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carz`;

-- --------------------------------------------------------

--
-- Table structure for table `car_makers`
--

CREATE TABLE `car_makers` (
  `car_maker_id` int(11) NOT NULL,
  `car_maker_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_makers`
--

INSERT INTO `car_makers` (`car_maker_id`, `car_maker_name`) VALUES
(1, 'BMW'),
(2, 'Toyota'),
(3, 'Opel'),
(4, 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `car_type_id` int(11) NOT NULL,
  `car_type` varchar(50) DEFAULT NULL,
  `car_maker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`car_type_id`, `car_type`, `car_maker_id`) VALUES
(1, '3 Series', 1),
(2, '5 Series', 1),
(3, '7 Series', 1),
(4, 'Aigo', 2),
(5, 'Corolla', 2),
(6, 'Yaris', 2),
(7, 'Insignia', 3),
(8, 'Astra', 3),
(9, 'Corsa', 3),
(10, 'Tiguan', 4),
(11, 'Passat', 4),
(12, 'Golf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `unique_item_id` varchar(10) DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `unique_item_id`, `image_url`, `user_id`) VALUES
(1, NULL, 'images/nature.JPG', 2),
(17, 'VmTLvB', '../images/VmTLvB-Y-4DJi_car1.jpg', 0),
(18, 'VmTLvB', '../images/VmTLvB-QvF3oY_car2.jpg', 0),
(19, 'VmTLvB', '../images/VmTLvB-MxjP92_car3.jpg', 0),
(20, 'KiRvkQ', '../images/KiRvkQ-lVH1it_car1.jpg', 0),
(21, 'KiRvkQ', '../images/KiRvkQ-Rcsoid_car2.jpg', 0),
(22, 'KiRvkQ', '../images/KiRvkQ-QUcyng_car3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `unique_item_id` varchar(6) NOT NULL DEFAULT current_timestamp(),
  `item_title` varchar(20) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_location` varchar(50) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_thumbnail` text DEFAULT NULL,
  `item_date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `unique_item_id`, `item_title`, `item_description`, `item_location`, `item_price`, `item_thumbnail`, `item_date_posted`) VALUES
(15, '2022-1', 'Renault Megane', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', 'Osijek', 5988, 'images/d4MJijkGdFKfsCUrenault-megane-4-dci-2017-slika-168827466.jpg', '2022-12-09'),
(16, '2022-1', 'BMW F30', 'bmw f30 test description 1 2 3bmw f30 test description 1 2 3bmw f30 test description 1 2 3bmw f30 test description 1 2 3bmw f30 test description 1 2 3bmw f30 test description 1 2 3bmw f30 test description 1 2 3', 'Vinkovci', 8900, 'images/JtegwLJAFxJ-cqo3090_115.jpeg', '2022-12-09'),
(17, '2022-1', 'wewerwer', 'werrweewrerw', 'erwrewwer', 0, 'images/37zx_VANUFVM93tbolje carz.JPG', '2022-12-12'),
(18, '2022-1', 'VW neki', 'test test test test test test test test test test test test test test test test test ', 'Zagreb', 12331, 'images/pG2iJFVTPOCHSaevwpolo.jpg', '2022-12-18'),
(19, '2022-1', 'vw', 'qweqwewqqewwe', 'Zagreb', 12331, 'images/PLpqNZKIULgWUvevwpolo.jpg', '2022-12-18'),
(20, '2022-1', 'VW NOVO', 'qweiqiewuqwieuyiquweyiuy', 'ewqee', 132, 'images/CQAIa8hgMn2pItFvwpolo.jpg', '2022-12-18'),
(21, '2022-1', 'k', 'r', 'ee', 5, 'images/LcqDHCLMaNwUgBosoyjack1233213.jpg', '2022-12-18'),
(22, '2022-1', 'q', 'q', 'q', 4, 'images/_HODce69rkmma7J3090_115.jpeg', '2022-12-18'),
(23, '2022-1', 't', 't', 't', 33, 'images/L6JROvm3EMS1wfevwpolo.jpg', '2022-12-18'),
(24, '2022-1', 'w', 'w', 'w', 0, 'images/d7majl0gDMy3slxvwpolo.jpg', '2022-12-18'),
(25, '2022-1', 'r', 'r', 'r', 2, 'images/Zp8n8N5hY-iYp4Vcar3.jpg', '2022-12-18'),
(26, '2022-1', 'r', 'r', 'r', 2, 'images/WrjNlrq1WJqwveDcar3.jpg', '2022-12-18'),
(27, '2022-1', 'r', 'r', 'r', 2, 'images/7fBuUANuovzbTBvcar3.jpg', '2022-12-18'),
(28, '2022-1', 'r', 'r', 'r', 2, 'images/Z9qqyqW4GZE2CIGcar3.jpg', '2022-12-18'),
(29, '2022-1', 'r', 'r', 'r', 3, 'images/Aip0J1t6FR7Q3TVcar3.jpg', '2022-12-18'),
(30, '2022-1', 'r', 'r', 'r', 3, 'images/QVJnfe7v8cptw2gcar3.jpg', '2022-12-18'),
(31, '2022-1', 'r', 'r', 'r', 3, 'images/pYBchfWaQx-bHpEcar3.jpg', '2022-12-18'),
(32, '2022-1', 'r', 'r', 'r', 3, 'images/i4jua-xfvhaJyAdcar3.jpg', '2022-12-18'),
(33, '2022-1', 'r', 'r', 'r', 3, 'images/G_1tE1jxnNM7zwkcar3.jpg', '2022-12-18'),
(34, '2022-1', 'r', 'r', 'r', 3, 'images/5Z9GbpdDEkMTZ0Ycar3.jpg', '2022-12-18'),
(35, '2022-1', 'r', 'r', 'r', 3, 'images/fxl9s2463uQ6nOycar3.jpg', '2022-12-18'),
(36, '2022-1', 'r', 'r', 'r', 3, 'images/ZJ4kYoG8u76gsamcar3.jpg', '2022-12-18'),
(37, '2022-1', 'r', 'r', 'r', 3, 'images/yX7Pf6iOyrzkhJZcar3.jpg', '2022-12-18'),
(38, '2022-1', 'rrrr', 'qqqq', 'wwww', 5555, 'images/FqYIATanZKD2-lfL6JROvm3EMS1wfevwpolo_2.jpg', '2022-12-18'),
(39, '2022-1', 'r', 'r', 'r', 3, 'images/G_MFygcw3yF6AyXcar2.jpg', '2022-12-18'),
(40, '2022-1', 'r', 'r', 'r', 2, 'images/o7ju4yhBbwoFO6Ncar3.jpg', '2022-12-18'),
(41, '2022-1', 'r', 'r', 'r', 2, 'images/5qGcdGB7lweWy6scar3.jpg', '2022-12-18'),
(42, '2022-1', 'r', 'r', 'r', 2, 'images/3QIymuQnAw8UT9scar3.jpg', '2022-12-18'),
(43, '2022-1', 'Bugatti', 'qwewqer', 'Osijek', 123, 'images/iyjyzqfESDzX_Uecar3.jpg', '2022-12-18'),
(44, '2022-1', 'Bugatti', 'qwewqer', 'Osijek', 123, 'images/uCIg_D7JLCZPmRWcar3.jpg', '2022-12-18'),
(45, '2022-1', 'Bugatti', 'qwewqer', 'Osijek', 123, 'images/t4x-HLSdyi1poI8car3.jpg', '2022-12-18'),
(46, '2022-1', 'Bugatti', 'qwewqer', 'Osijek', 123, 'images/lUiXBGxTBFGwLOIcar3.jpg', '2022-12-18'),
(47, '2022-1', 'r', 'r', 'r', 3, 'images/JJ3GHEwrrcQqvBJcar2.jpg', '2022-12-18'),
(48, '2022-1', 'tt', 't', 't', 0, 'images/NKFZb8FQHuuI4ypcar1.jpg', '2022-12-18'),
(49, '2022-1', 'rt', 'r', 'r', 0, 'images/6uuMkmz_cAt7oNicar3.jpg', '2022-12-18'),
(50, '2022-1', 'r', 'r', 'r', 0, 'images/DxWuNj0N6e3wd-hcar3.jpg', '2022-12-18'),
(51, '2022-1', 'TEST1', 'test 1', 'test1', 123, '../images/P9U1Ec-car2.jpg', '2022-12-19'),
(52, '2022-1', 'TEST1', 'test 1', 'test1', 123, '../images/WYgIP--car2.jpg', '2022-12-19'),
(53, 'MCcDSq', 'rrrrrrr', 'rwwww', 'www', 0, '../images/MCcDSq-car3.jpg', '2022-12-19'),
(54, 'Ry4dvb', 'rrrrrrr', 'rwwww', 'www', 0, '../images/Ry4dvb-car3.jpg', '2022-12-19'),
(55, 'VmTLvB', 'rrrrrrr', 'rwwww', 'www', 0, '../images/VmTLvB-car3.jpg', '2022-12-19'),
(56, 'KiRvkQ', 'rrrrrrr', 'rwwww', 'www', 0, '../images/KiRvkQ-car3.jpg', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `saved_items`
--

CREATE TABLE `saved_items` (
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `profile_picture_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `username`, `profile_picture_url`) VALUES
(1, 'admin@admin', 'admin', 'admin', NULL),
(2, 'stjepan@stjepan.com', 'stjepan', 'stjepan', 'images/nature.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_makers`
--
ALTER TABLE `car_makers`
  ADD PRIMARY KEY (`car_maker_id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`car_type_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_makers`
--
ALTER TABLE `car_makers`
  MODIFY `car_maker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `car_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
