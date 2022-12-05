-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 11:45 PM
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

CREATE TABLE IF NOT EXISTS `car_makers` (
  `car_maker_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_maker_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`car_maker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE IF NOT EXISTS `car_types` (
  `car_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `car_maker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`car_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `item_id`, `image_url`, `user_id`) VALUES
(1, NULL, 'images/nature.JPG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_title` varchar(20) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_location` varchar(50) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_thumbnail` text DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saved_items`
--

CREATE TABLE IF NOT EXISTS `saved_items` (
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `profile_picture_url` text DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `username`, `profile_picture_url`) VALUES
(1, 'admin@admin', 'admin', 'admin', NULL),
(2, 'stjepan@stjepan.com', 'stjepan', 'stjepan', 'images/nature.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
