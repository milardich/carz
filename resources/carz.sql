-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 11:57 PM
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

DROP TABLE IF EXISTS `car_makers`;
CREATE TABLE IF NOT EXISTS `car_makers` (
  `car_maker_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_maker_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`car_maker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_makers`
--

INSERT DELAYED IGNORE INTO `car_makers` (`car_maker_id`, `car_maker_name`) VALUES
(1, 'BMW'),
(2, 'Toyota'),
(3, 'Opel'),
(4, 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

DROP TABLE IF EXISTS `car_types`;
CREATE TABLE IF NOT EXISTS `car_types` (
  `car_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `car_maker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`car_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_types`
--

INSERT DELAYED IGNORE INTO `car_types` (`car_type_id`, `car_type`, `car_maker_id`) VALUES
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

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_item_id` varchar(10) DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT DELAYED IGNORE INTO `images` (`image_id`, `unique_item_id`, `image_url`, `user_id`) VALUES
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
(47, 'E1Dtu1', 'images/E1Dtu1-I415TI_corsa2.jpg', 0),
(48, '72Nq0M', 'images/72Nq0M-7g6bcK_astra2.jpg', 0),
(49, 'FxLetd', 'images/FxLetd-cEVhN__golf1.jpg', 0),
(50, 'FxLetd', 'images/FxLetd-YjqrR__golf2.jpg', 0),
(51, 'FxLetd', 'images/FxLetd-qNiUtg_golf3.jpg', 0),
(52, 'MA2eDS', 'images/MA2eDS-IJWSdS_corsa2.jpg', 0),
(53, 'lEF375', 'images/lEF375-hE_mJX_e92  3.jpg', 0),
(54, 'lEF375', 'images/lEF375-qNzJfo_e92 2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_item_id` varchar(6) NOT NULL DEFAULT current_timestamp(),
  `item_title` varchar(50) DEFAULT NULL,
  `car_maker_id` int(11) DEFAULT NULL,
  `car_type_id` int(11) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_location` varchar(50) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_thumbnail` text DEFAULT NULL,
  `item_date_posted` date NOT NULL,
  `seller_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT DELAYED IGNORE INTO `items` (`item_id`, `unique_item_id`, `item_title`, `car_maker_id`, `car_type_id`, `item_description`, `item_location`, `item_price`, `item_thumbnail`, `item_date_posted`, `seller_id`) VALUES
(83, 'jLcQVn', 'BMW 3 Series - povoljno', 1, 1, 'test description bmw 3 seriestest description bmw 3 seriestest description bmw 3 seriestest description bmw 3 seriestest description bmw 3 series', 'Osijek', 19923, 'images/jLcQVn-e92 2.jpg', '2023-02-12', 14),
(84, 'ggJsgq', 'BMW 3 Series - test', 1, 1, 'qqweeeeeqw', 'Vinkovci', 12331, 'images/ggJsgq-e92  3.jpg', '2023-02-12', 14),
(85, 'qE73Wq', 'BMW 5 Series', 1, 2, 'qweqweeqwqwe', 'Osijek', 100000, 'images/qE73Wq-bmw51.jpg', '2023-02-12', 14),
(86, 'tlYzpl', 'BMW 7 Series - 25k km', 1, 3, 'qweeqwqweqwe', 'Zagreb', 32293, 'images/tlYzpl-bmw7.jpg', '2023-02-12', 14),
(87, 'sFiXta', 'Toyota Aigo - ostecen', 2, 4, 'test descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest description', 'Rijeka', 3000, 'images/sFiXta-aigo1.jpg', '2023-02-12', 14),
(88, 'RNPQE6', 'Toyota Corolla', 2, 5, 'reliable', 'Otok', 12500, 'images/RNPQE6-corolla1.jpeg', '2023-02-12', 14),
(89, 'I-nFgx', 'Toyota Yaris - TEST', 2, 6, 'qqqqqqqqqqqqqqqqqq q', 'Osijek', 5000, 'images/I-nFgx-yaris1.jpeg', '2023-02-12', 14),
(90, 'pYzh1-', 'Opel Insignia', 3, 7, 'Test description', 'Osijek', 15000, 'images/pYzh1--insignia1.jpg', '2023-02-12', 15),
(91, 'gU8h_M', 'Opel Astra OPC', 3, 8, 'OPC, 180k km', 'Vinkovci', 11000, 'images/gU8h_M-astra.jpg', '2023-02-12', 15),
(92, 'xh5Kpb', 'Opel Corsa - TEST', 3, 9, 'qweqwqweqwe', 'Zagreb', 1700, 'images/xh5Kpb-corsa1.jpg', '2023-02-12', 15),
(93, 'gLIx__', 'Volkswagen Tiguan TDI', 4, 10, 'Volkswagen Tiguan TDI descriptionVolkswagen Tiguan TDI descriptionVolkswagen Tiguan TDI description', 'Split', 18000, 'images/gLIx__-tiguan.jpg', '2023-02-12', 15),
(94, 'X5BEb5', 'Volkswagen Passat TSI', 4, 11, 'passat 180kw chip tune', 'Osijek', 4400, 'images/X5BEb5-passat1.jpeg', '2023-02-12', 15),
(95, '31dDC4', 'Volkswagen Golf GTI', 4, 12, 'edited opis - test', 'Osijek', 15000, 'images/31dDC4-golf2.jpg', '2023-02-12', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `profile_picture_url` text DEFAULT NULL,
  `user_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`user_id`, `user_email`, `user_password`, `username`, `profile_picture_url`, `user_phone`) VALUES
(1, 'admin@admin', 'admin', 'admin', NULL, '4444444'),
(2, 'stjepan@stjepan.com', 'stjepan', 'stjepan', 'images/nature.JPG', '099123123'),
(9, 'q@q', 'q', 'q', 'images/2023-01-01_astra2.jpg_q', 'q'),
(10, 'ee@ee', 'ee', 'ee', 'images/2023-01-01_ee_corsa1.jpg', '123'),
(11, 'bruh@bruh', 'bruh', 'bruh', 'images/2023-01-02_bruh_bobby.jpg', '991293'),
(12, 'prof@prof.com', 'prof', 'prof', 'images/2023-02-12_prof_f10.jpg', '0999999999'),
(13, 'prof@prof.com', 'prof', 'prof', 'images/2023-02-12_prof_f10.jpg', '0999999999'),
(14, 'stjepan@stjepan', 'stjepan', 'stjepan', 'images/2023-02-12_stjepan_e92.jpg', '099123123'),
(15, 'test@test', 'test', 'test', 'images/2023-02-12_test_astra.jpg', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
