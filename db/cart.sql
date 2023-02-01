-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2021 at 03:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` char(7) NOT NULL,
  `admin_f_name` varchar(20) NOT NULL,
  `admin_l_name` varchar(20) DEFAULT NULL,
  `admin_username` varchar(15) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_f_name`, `admin_l_name`, `admin_username`, `admin_email`, `admin_password`) VALUES
('ad01', 'Mudeesha', 'Dilshan', 'mudeesha', 'mudeesha@gmail.com', 'mudeesha123'),
('ad02', 'Lakshan', 'Ravindu', 'ravindu', 'ravindu@gmail.com', 'ravindu123'),
('ad03', 'Lakshitha', 'Isuru', 'lakshitha', 'lakshitha@gmail.com', 'lakshitha123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(101, 'Mesh 70l Scuba', '3000.00', 'image/dive (3).png', 3, '9000', 'p1020'),
(102, 'Adult Snokel SNK5000', '800.00', 'image/dive (4).png', 4, '3200', 'p1021'),
(103, 'Freediving', '800.00', 'image/dive (2).png', 3, '2400', 'p1019');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `address_line_01` varchar(255) NOT NULL,
  `address_line_02` varchar(255) NOT NULL,
  `address_line_03` varchar(255) DEFAULT NULL,
  `zip_code` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `f_name`, `l_name`, `address_line_01`, `address_line_02`, `address_line_03`, `zip_code`, `email`, `password`, `telephone`, `is_delete`, `created_at`, `updated_at`) VALUES
(2, 'Dinesh', 'Chandimal', 'No 324,', 'Main Road,', 'Ambalangoda.', 456734, 'dinesh@gmail.com', 'dinesh123', 78541236, 0, '2021-07-03 06:35:26', '2021-07-03 06:35:26'),
(3, 'kusal', 'Mendis', 'No 234,', 'Katubedda Road,', 'Moratuwa.', 56789, 'kusalmendis@gmail.com', 'kusal123', 778564999, 0, '2021-07-03 06:35:26', '2021-07-03 06:35:26'),
(4, 'Danushka', 'Gunathilake', 'No678,', 'Cross Road,', 'Bambalapitiya.', 54567, 'danushka@gmail.com', 'danushka123', 778565963, 0, '2021-07-03 06:35:26', '2021-07-03 06:35:26'),
(5, 'Mahela', 'Jayawardane', 'No 873,', 'Gallle Road,', 'Colombo 03.', 12345, 'mahela@gmail.com', 'mahela123', 715489632, 0, '2021-07-03 06:39:29', '2021-07-03 06:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(13, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '000000', 'Kumari,kongala,Hakmana', 'cod', 'Lady Shoe(1), Jackets(1), Travelling Bag(1)', '170000'),
(14, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '000000', 'Kumari,kongala,Hakmana', 'cod', 'Swimming Goggles(1), Torch(1)', '100000'),
(17, 'nc', 'cnvcn@gmail.com', '04414141', 'cvxvx', 'cod', 'Camera(5)', '1000000'),
(18, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '0702228130', 'Kumari,kongala,Hakmana', 'cards', 'Tent(1), Sleeping bag(6)', '43000'),
(19, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '0702228130', 'Kumari,kongala,Hakmana', 'cod', 'Mini Travel Umbrella(5)', '2500'),
(20, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '0702228130', 'Kumari,kongala,Hakmana', 'cod', 'Lady Shoe(1), Fire Bottle(1), Swimming Goggles(1), Poratble Chair(1), Packing Cubes (4)', '27700'),
(21, 'Lakshitha Dilshan', 'lakshithaisuru.dilshan2@gmail.com', '0702228130', 'Kumari,kongala,Hakmana', 'cod', 'Swimming Goggles(2), Freediving(3)', '3900');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code_2` (`product_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `category`) VALUES
(1, 'Lady Shoe', '5250.00', 1, 'a.JPG', 'p1000', 'H'),
(2, 'Swimming Goggles', '750.00', 1, 'image/swim (1).png', 'p1001', 'S'),
(3, 'Scuba diving suit', '6500.00', 1, 'image/dive (1).png', 'p1002', 'D'),
(4, 'Poratble Chair', '15000.00', 1, 'image/shoe-3.png', 'p1003', 'C'),
(5, 'Tent', '25000.00', 1, 'image/fid.png', 'p1004', 'C'),
(6, 'Fire Bottle', '3500.00', 1, 'image/shoe-6.png', 'p1005', 'H'),
(7, 'Travelling Bag', '1500.00', 1, 'image/shoe-7.png', 'p1006', 'H'),
(8, 'Swimming earplugs', '2500.00', 1, 'image/swim (3).png', 'p1007', 'S'),
(9, 'Hiking Backpack', '5200.00', 1, 'image/hiking02.jpg', 'p1008', 'H'),
(10, 'Weather Proof Jacket', '3000.00', 1, 'image/hiking07.jpg', 'p1009', 'H'),
(11, 'Hiking Boots', '4000.00', 1, 'image/hiking01.jpg', 'p1010', 'H'),
(12, 'First aid kit', '700.00', 1, 'image/hiking faid.jpg', 'p1011', 'H'),
(13, 'Compass', '500.00', 1, 'image/hiking03.jpg', 'p1012', 'H'),
(14, 'Swimming Neprene', '250.00', 5, 'image/swim (4).png', 'p1013', 'S'),
(15, 'Baby Mesh Swim Cap', '300.00', 7, 'image/swim (2).png', 'p1014', 'S'),
(16, 'Swimsuit Nose Clip', '900.00', 2, 'image/swim (6).png', 'p1015', 'S'),
(17, 'Snorkel SNK 500', '1000.00', 13, 'image/swim (7).png', 'p1016', 'S'),
(18, 'SCD Anti FOG', '1000.00', 7, 'image/swim (8).png', 'p1017', 'S'),
(19, 'Waterproof MP# Player', '500.00', 9, 'image/swim (5).png', 'p1018', 'S'),
(20, 'Freediving', '800.00', 3, 'image/dive (2).png', 'p1019', 'D'),
(21, 'Mesh 70l Scuba', '3000.00', 3, 'image/dive (3).png', 'p1020', 'D'),
(22, 'Adult Snokel SNK5000', '800.00', 4, 'image/dive (4).png', 'p1021', 'D'),
(23, 'Dive Computer Sunto', '800.00', 2, 'image/dive (5).png', 'p1022', 'D'),
(24, 'Hydro 2kg net weight', '2000.00', 5, 'image/dive (6).png', 'p1023', 'D'),
(25, 'Fins mundial  one 50', '2000.00', 6, 'image/dive (7).png', 'p1024', 'D'),
(26, 'Mres Led', '2500.00', 7, 'image/dive (8).png', 'p1025', 'D'),
(27, 'Sleeping bag', '3000.00', 6, 'image/sl.png', 'p1026', 'C'),
(28, 'Gas Tanks', '2000.00', 4, 'image/shoe-6.png', 'p1027', 'C'),
(29, 'Cooker', '1000.00', 2, 'image/shoe-5.png', 'p1028', 'C'),
(30, 'Campign Tent', '800.00', 4, 'image/shoe-1.png', 'p1029', 'C'),
(31, 'Portable shower', '900.00', 8, 'image/shoe-4.png', 'p1030', 'C'),
(32, 'Cooling Box', '1500.00', 1, 'image/shoe-8.png', 'p1031', 'C'),
(33, 'Travel Laundry Bags', '300.00', 4, 'image/laundry bags.jpg', 'p1032', 'O'),
(34, 'Mini Travel Umbrella', '500.00', 5, 'image/umb.jpg', 'p1033', 'O'),
(35, 'Camera', '12000.00', 3, 'image/camera.jpg', 'p1034', 'O'),
(36, 'Gopro', '9000.00', 6, 'image/gopro.jpg', 'p1035', 'O'),
(37, 'Selfie Stick', '3000.00', 12, 'image/selfie stick.jpg', 'p1036', 'O'),
(38, 'Travel pillow', '500.00', 10, 'image/travel pillow.jpg', 'p1037', 'O'),
(39, 'Packing Cubes ', '800.00', 4, 'image/packing cubes.jpg', 'p1038', 'O'),
(40, 'Rain coat', '400.00', 10, 'image/rain coats.jpg', 'p1039', 'O');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
