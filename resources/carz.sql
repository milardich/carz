-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 05:50 PM
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
(23, 'qeLeEE', 'images/qeLeEE-vEzLiF_car1.jpg', 0),
(24, 'qeLeEE', 'images/qeLeEE-YCm_fM_car2.jpg', 0),
(25, 'qeLeEE', 'images/qeLeEE-jfA2Fz_car3.jpg', 0),
(26, '342cok', 'images/342cok-z7WfxI_car1.jpg', 0),
(27, '342cok', 'images/342cok-vaN1WY_car2.jpg', 0),
(28, '342cok', 'images/342cok-zi6-cl_car3.jpg', 0),
(29, '_HaTag', 'images/_HaTag-kNbuIO_car1.jpg', 0),
(30, '_HaTag', 'images/_HaTag-vUgRxR_car2.jpg', 0),
(31, '_HaTag', 'images/_HaTag-VQLNpN_car3.jpg', 0),
(32, 'oQzfF5', 'images/oQzfF5-kxqwFI_car1.jpg', 0),
(33, 'oQzfF5', 'images/oQzfF5-qfOzQk_car2.jpg', 0),
(34, 'oQzfF5', 'images/oQzfF5-v0kJ8R_car3.jpg', 0),
(35, 'oQzfF5', 'images/oQzfF5-jMiEfx_soyjack1233213.jpg', 0),
(36, 'oQzfF5', 'images/oQzfF5-iUAlrx_vwpolo.jpg', 0),
(37, 'Eha5MZ', 'images/Eha5MZ-k5y3ba_astra2.jpg', 0),
(38, 'Eha5MZ', 'images/Eha5MZ-YUeXO2_astra3.jpg', 0),
(39, 'Eha5MZ', 'images/Eha5MZ-bw58oG_astra4.jpg', 0),
(40, 'kxEs2j', 'images/kxEs2j-Mwz-1v_astra3.jpg', 0),
(41, 'kxEs2j', 'images/kxEs2j-Fzgy2O_astra4.jpg', 0),
(42, 'kxEs2j', 'images/kxEs2j-5wCilx_bmw52.jpg', 0),
(43, 'kxEs2j', 'images/kxEs2j-tyCH3J_car2.jpg', 0),
(44, 'kxEs2j', 'images/kxEs2j-KvilnG_car3.jpg', 0),
(45, 'E1Dtu1', 'images/E1Dtu1-uJoOcX_car2.jpg', 0),
(46, 'E1Dtu1', 'images/E1Dtu1-13NMXB_corsa1.jpg', 0),
(47, 'E1Dtu1', 'images/E1Dtu1-I415TI_corsa2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `unique_item_id` varchar(6) NOT NULL DEFAULT current_timestamp(),
  `item_title` varchar(50) DEFAULT NULL,
  `car_maker_id` int(11) DEFAULT NULL,
  `car_type_id` int(11) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_location` varchar(50) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_thumbnail` text DEFAULT NULL,
  `item_date_posted` date NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `unique_item_id`, `item_title`, `car_maker_id`, `car_type_id`, `item_description`, `item_location`, `item_price`, `item_thumbnail`, `item_date_posted`, `seller_id`) VALUES
(59, '_HaTag', 'test 1', 1, 2, 'test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1test 1', 'Osijek', 132, 'images/_HaTag-car3.jpg', '2022-12-19', 0),
(60, 'oQzfF5', 'Vw ', 2, 1, 'qweqwe wqe', 'qewqew', 12, 'images/oQzfF5-L6JROvm3EMS1wfevwpolo_2.jpg', '2022-12-19', 0),
(61, 'G_Uzje', 'samo thumbnail', 3, 3, 'samo thumbnailsamo thumbnailsamo thumbnailsamo thumbnailsamo thumbnailsamo thumbnail', 'samo thumbnail', 1, 'images/G_Uzje-soyjack1233213.jpg', '2022-12-19', 0),
(62, 'Eha5MZ', 'Test car 322', 0, 0, 'Testset lkestjlsketj l tjeslj tlesj tlsejt lsekjtlse tjlkj', 'Jankovci', 992, 'images/Eha5MZ-astra.jpg', '2022-12-30', 0),
(64, 'kxEs2j', 'BMW 5 Series', 0, 0, 'ajkldlakdjsl', 'asda', 0, 'images/kxEs2j-bmw51.webp', '2022-12-30', 0),
(67, 'fO5LsH', 'Valjd radi - Volkswa', 4, 10, 'qqqqqqqqqqq', 'Osijek', 1112, 'images/fO5LsH-tiguan.jpg', '2022-12-30', 0),
(68, 'Gwwa--', 'BMW 3 Series F10', 1, 1, 'pali vozi', 'Vinkovci', 12411, 'images/Gwwa---f10.jpg', '2022-12-30', 0),
(69, 'E1Dtu1', 'Opel Corsa', 3, 9, 'Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe Corsa hehe ', 'Osijek', 19998, 'images/E1Dtu1-corsa1.jpg', '2023-01-01', 0),
(70, 'N0j5ey', 'Opel Insignia', 3, 7, '', '', 0, 'images/N0j5ey-astra.jpg', '2023-01-01', 0),
(71, 'Rz6f43', 'BMW 7 Series', 1, 3, '', '', 0, 'images/Rz6f43-', '2023-01-01', 2),
(72, 'dg6OrK', 'Toyota Yaris', 2, 6, '', '', 0, 'images/dg6OrK-', '2023-01-01', 2),
(73, 'b7zPU2', 'rqrqwrqwrwq', 0, 0, '', '', 0, 'images/b7zPU2-', '2023-01-01', 1),
(74, '7oq-0W', 'Opel Insignia', 3, 7, '', '', 0, 'images/7oq-0W-', '2023-01-01', 3);

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
  `profile_picture_url` text DEFAULT NULL,
  `user_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `username`, `profile_picture_url`, `user_phone`) VALUES
(1, 'admin@admin', 'admin', 'admin', NULL, '4444444'),
(2, 'stjepan@stjepan.com', 'stjepan', 'stjepan', 'images/nature.JPG', '099123123'),
(9, 'q@q', 'q', 'q', 'images/2023-01-01_astra2.jpg_q', 'q'),
(10, 'ee@ee', 'ee', 'ee', 'images/2023-01-01_ee_corsa1.jpg', '123');

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
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
