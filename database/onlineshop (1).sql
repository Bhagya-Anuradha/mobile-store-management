-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `image`, `role`) VALUES
(1, 'manager', 'manager@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1665038710_jeremy-bezanger-9k_gCYLoH2g-unsplash.jpg', 'Admin'),
(2, 'staff', 'staff@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1590338174_uhu.jpg', 'Staff'),
(3, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1665038725_william-hook-9e9PD9blAto-unsplash.jpg', 'Admin'),
(4, 'Sanjaya', 's@s.com', '77cbc257e66302866cf6191754c0c8e3', '1669381819_1667118229_profile3.png', 'Staff'),
(5, 'Shanaka', 'shanaka@gmail.com', '5da8c67262a7e6f96613adc7615f4562', '1669311166_profile3.png', 'Staff'),
(6, 'Pasindu', 'pasindu@gmail.com', 'b1b9b6bbb3a176dde42602fa155c1b7c', '1669311383_profile1.png', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `img`) VALUES
(1, 'Samsung', 'samsung.png'),
(2, 'Apple', 'apple.png'),
(3, 'Nokia', 'nokia.png'),
(4, 'Huawei', 'huawei.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(10, 89, '127.0.0.1', 22, '1.000'),
(21, 99, '127.0.0.1', -1, '1.000'),
(42, 133, '::1', 28, '2.000'),
(43, 121, '::1', 28, '1.000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_discription` varchar(200) NOT NULL,
  `cat_imag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_discription`, `cat_imag`) VALUES
(1, 'Phones', 'Buy Brand New and Used Mobile Phones!!', 'mobile_photo_category.png'),
(2, 'Tablet/PC', 'Buy Best Tablets and PCs!', 'tablet_photo.png'),
(3, 'Accessories', 'Mobile Phones & Tablets Accessories', 'accessories_photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_info`
--

INSERT INTO `email_info` (`email_id`, `email`) VALUES
(3, 'admin@gmail.com'),
(4, 'repairer@gmail.com'),
(5, 'manager@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `Customer` varchar(30) NOT NULL,
  `C_msg` varchar(200) DEFAULT NULL,
  `A_msg` varchar(200) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `Customer`, `C_msg`, `A_msg`, `Time`) VALUES
(1, 'Anuradha', 'Hi admin', 'Hi ', '2022-10-15 14:56:51'),
(73, 'Anuradha', 'My mobile Phone gave to repair. How process is gone?', 'Today we got to repair your Phone.', '2022-11-21 19:43:25'),
(74, 'Anuradha', 'What is the problem of that', 'It is a software damage', '2022-11-21 19:44:21'),
(82, 'Sandun', 'Hi', 'hi sandun', '2022-10-19 17:44:57'),
(83, 'Sandun', 'can you explain about new features of Samsun Galaxy M22', 'It has 128 GB Storage,8GB RAM, High Quality Camera.', '2022-11-21 19:51:40'),
(112, 'Hemantha', 'What kind of warranty do you offer?', 'We offer 2 year warranty.', '2022-11-25 06:37:52'),
(113, 'Nilmini', 'I need to repair my phone', 'we us more details and handover your phone .we will fix it.', '2022-11-25 06:39:25'),
(114, 'Venuri', 'Why my phone is not power on?', 'We need to check it.\r\n', '2022-11-25 06:39:58'),
(115, 'saduni', 'Can you fix my tablet?', 'We always provide our better service.', '2022-11-25 06:40:46'),
(116, 'Dilshan', 'will your Shop ,open in weekend?', 'yes, but Saturday only.', '2022-11-25 06:42:42'),
(117, 'chathura', 'I bought a headset ,but it was not working now?', 'have you a warranty?', '2022-11-25 06:43:33'),
(118, 'Saman', 'I gave my mobile to repair? was it fixed', 'Today we can complete it.', '2022-11-25 06:44:04'),
(119, 'Sunethra', 'I gave my phone to repair in 22nd of November? was it fixed?', 'yes we finished it.', '2022-11-25 06:44:52'),
(120, 'Madumi', 'I need to buy a power bank?', 'What kind of power bank your looking?', '2022-11-25 06:45:33'),
(121, 'krishan', 'Can I quired my damage tab to your shop?', 'yes you can.', '2022-11-25 06:46:04'),
(122, 'sadali', 'my phone power button not work? can you fix it?', 'yeah, handover it to our shop.', '2022-11-25 06:46:56'),
(123, 'Hasintha', 'I gave my headset to repair? was it fixed', 'now we get to repair it.', '2022-11-25 06:47:41'),
(124, 'imesha', 'my tab gave to repair. how process is gone ? ', 'it gets 2more days. We are repairing it now.', '2022-11-25 06:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 12, 7, 1, '07M47684BS5725041', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `orders_info`
--

CREATE TABLE `orders_info` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL,
  `adate` varchar(20) NOT NULL,
  `province` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_info`
--

INSERT INTO `orders_info` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`, `adate`, `province`) VALUES
(1, 12, 'Anuradha', 'anuradha@gmail.com', 'Galenbindunuwewa,Anuradhapura.', 'Galenbindunuwewa', 'Aproved', 560074, 'Anuradha', '4321 2345 6788 7654', '12/09', 3, 77000, 1234, '2022.10.11', ''),
(2, 23, 'Hemantha', 'hemanth@gmail.com', 'Kekirawa', 'Kekirawa', 'Aproved', 322321, 'Hemantha', '4321 2345 6788 7654', '12/22', 1, 25000, 2312, '2022.10.12', ''),
(3, 21, 'Nilmini', 'nilmini@gmail.com', 'Thalawa', 'Thalawa', 'Aproved', 112325, 'Nilmini', '4321 2345 6788 7654', '11/22', 1, 21500, 2311, '2022.10.13', ''),
(4, 19, 'abhisheka ', 'abhisheka@gmail.com', 'Eppawala', 'Eppawala', 'Aproved', 322321, 'abhisheka bs', '4321 2345 6788 7654', '11/11', 1, 50000, 2312, '2022.10.14', ''),
(6, 16, ' Venuri', 'venuri@gmail.com', 'Raganganaya', 'Rajanganaya', 'Aproved', 112325, 'Venuri', '1212121212121212', '12/22', 3, 41500, 1222, '2022.10.15', ''),
(9, 12, 'praneeth', 'praneeth@gmail.com', 'Kalawewa', 'Kalawewa', 'Aproved', 112325, 'Praneeth', '1212121212121212', '11/11', 1, 120000, 1222, '2022.10.13', 'North Central'),
(10, 22, 'Sandun', 'sandun@gmail.com', 'Thambuththegama', 'Thambuththegama', 'Aproved', 333333, 'Sandun', '12312344', '12/22', 1, 95000, 443, '2022.10.14', 'North Central'),
(11, 26, 'Kasuni', 'kasuni@gmail.com', 'Vijithapura', 'Vijithapura', 'Aproved', 111111, 'Kasuni', '3434 343433 43434', '12/10', 1, 32332, 334, '2022-10-06', 'North Central'),
(12, 29, 'Kamala ', 'kamala12@gmail.com', '897,12 Block,', 'Galenbindunuwewa', 'Approved', 508972, 'visa', '4598 721', '12/02', 1, 94000, 789, '2022-11-25', 'North'),
(13, 32, 'Dilshan \r\n', 'disanayaka1245@gmail.com', '589,galagedara block', 'Dutuwewa', 'NotAproved', 508979, 'master', '78945615', '09/24', 1, 159650, 897, '2022-11-25', 'North Central'),
(14, 33, 'chathura ', 'nethmina@gmail.com', '789B,11 Block.', 'Dutuwewa', 'Aproved', 504781, 'visa', '7894561', '12/23', 1, 1350, 456, '2022-11-25', 'Nort Central'),
(15, 35, 'Wishmi karunanayake', 'wishmi@gmail.com', '23 dambulla road', 'galenbindun', 'Aproved', 504760, 'master', '78945616', '03/25', 1, 94000, 147, '2022-11-25', 'North Central'),
(16, 36, 'Sunethra Bandara', 'bandara1980@gmail.com', '123 rathmalwetiya', 'galenbindun', 'Aproved', 504756, 'visa', '7894561', '12/25', 1, 65900, 456, '2022-11-25', 'North Central'),
(17, 37, 'Nawarathna bandara', 'nawaban@gmail.com', '85 katarampura', 'Dutuwewa', 'Aproved', 508852, 'visa', '7894562', '05/25', 1, 487520, 785, '2022-11-25', 'North Central'),
(18, 38, 'Madumi Sumanabandara', 'madumi98@gmail.com', '857B,kokawewa', 'galenbindun', 'Aproved', 789450, 'master', '5287 41', '05/23', 1, 2500, 471, '2022-11-25', 'North Central'),
(19, 39, 'krishan Perera', 'prera23@gmail.com', '789B,', 'Eppawala', 'Aproved', 524178, 'master', '25874196', '02/26', 1, 109900, 452, '2022-11-25', 'Nort Central'),
(20, 40, 'sadali withanachchi', 'sadali@96gmail.com', '789,Anuradhapura Road.', 'Mihinthale', 'Aproved', 789450, 'visa', '8521473', '02/25', 1, 67000, 789, '2022-11-25', 'North Central'),
(21, 42, 'imesha madumali', 'imesha98@gmail.com', '874/B,40Block', 'Dutuwewa', 'Aproved', 508960, 'visa', '1236547', '09/25', 1, 1250, 458, '2022-11-25', 'North Central'),
(22, 21, 'Praneeth Gamage', 'praneeth@gmail.com', 'Kalawewa', 'Galenbindunuwewa', 'Aproved', 789450, 'visa', '2014789', '12/25', 1, 289000, 875, '2022-11-25', 'North Central'),
(23, 28, 'Anuradha Rathnayaka', 'anuradha.rathnayaka@gmail.com', 'Anuradhapura', 'Galenbindunuwewa', '', 508980, 'visa', '7894561', '12/24', 3, 170650, 456, '2022-11-26', 'North Central');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` decimal(10,3) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_pro_id`, `order_id`, `product_id`, `qty`, `amt`) VALUES
(73, 1, 1, '1.000', 5000),
(74, 1, 4, '2.000', 64000),
(75, 1, 8, '1.000', 40000),
(76, 2, 2, '1.000', 25000),
(78, 4, 1, '1.000', 5000),
(81, 6, 19, '1.000', 3000),
(85, 8, 17, '1.000', 1000),
(86, 9, 11, '1.000', 1200),
(88, 11, 100, '1.000', 32332),
(89, 12, 99, '1.000', 10000),
(90, 12, 100, '1.000', 94000),
(91, 13, 108, '1.000', 159650),
(92, 14, 112, '1.000', 1350),
(93, 15, 100, '1.000', 94000),
(94, 16, 104, '1.000', 65900),
(95, 17, 110, '1.000', 487520),
(96, 18, 113, '1.000', 2500),
(97, 19, 107, '1.000', 109900),
(98, 20, 105, '1.000', 67000),
(99, 21, 111, '1.000', 1250),
(100, 22, 109, '1.000', 289000),
(101, 23, 129, '2.000', 17000),
(102, 23, 108, '1.000', 159650),
(103, 23, 113, '1.000', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `pricing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `pricing`) VALUES
(99, 1, 1, 'Samsung Galaxy A12', 82000, 'Samsung ', '1669057818_photo_2022-11-22_00-31-33.jpg', '', '1 unit'),
(100, 1, 1, 'Samsung Galaxy M22', 94000, 'Apple ', '1669057901_photo_2022-11-22_00-37-51.jpg', '', '1 unit'),
(101, 1, 1, 'Samsung Galaxy M53 5G', 113900, 'Samsung', '1669057987_1665058542_s22ultra.png', '', '1 unit'),
(104, 1, 1, 'Samsung Galaxy A03S', 65900, 'Samsung', '1669058062_photo_2022-11-22_00-31-25.jpg', '', '1 unit'),
(105, 1, 1, 'Samsung A03 CORE ', 67000, 'Samsung', '1669058244_photo_2022-11-22_00-30-18.jpg', '', '1 unit'),
(106, 1, 1, 'Samsung Galaxy M22', 94500, 'Samsung', '1669058427_photo_2022-11-22_00-31-10.jpg', '', '1 unit'),
(107, 1, 2, 'iPhone XS MAX', 109900, 'Apple', '1669098980_1665060058_Untitled design (16).png', '', '1 unit'),
(108, 2, 2, 'Apple iPad Air', 159650, 'Apple', '1669099187_1665041701_Apple-iPad-10.2-2021-64GB-1-600x600.jpg', '', '1 unit'),
(109, 2, 2, 'Apple Unvelis', 289000, 'Apple', '1669099493_photo_2022-11-22_12-12-53.jpg', '', '1 unit'),
(110, 2, 2, 'iPad Pro', 487520, 'Apple', '1669099546_photo_2022-11-22_12-12-59.jpg', '', '1 unit'),
(111, 3, 4, 'Mobile Phone Stand', 1250, 'Any Type', '1669099958_photo_2022-11-22_12-20-55.jpg', '', '1 unit'),
(112, 3, 4, 'Huawei Y5P Back Cover', 1350, 'Back Cover', '1669100073_photo_2022-11-22_12-21-02.jpg', '', '1 unit'),
(113, 3, 1, 'Bluetooth Headphone', 2500, 'Headphone', '1669100142_photo_2022-11-22_12-21-09.jpg', '', '1 unit'),
(114, 3, 1, 'Bluetooth Headphone with neck band', 1385, 'headphone', '1669100224_photo_2022-11-22_12-21-14.jpg', '', '1 unit'),
(115, 1, 3, '8210 4G', 11500, 'Nokia', '1669351336_photo_2022-11-25_10-08-33.jpg', '', '1 unit'),
(116, 1, 3, '5710 XpressAudio', 12500, 'Nokia', '1669351508_photo_2022-11-25_10-08-54.jpg', '', '1 unit'),
(117, 1, 3, '2760 Filp', 13200, 'Nokia', '1669351571_photo_2022-11-25_10-08-59.jpg', '', '1 unit'),
(118, 1, 3, 'Nokia T10', 54300, 'Nokia', '1669351670_photo_2022-11-25_10-09-07.jpg', '', '1 unit'),
(119, 1, 4, 'Huawei Niva 8 Pro', 45100, 'Huawei', '1669351731_photo_2022-11-25_10-09-38.jpg', '', '1 unit'),
(120, 1, 4, 'Huawei P50 Pro', 65800, 'Huawei', '1669351855_photo_2022-11-25_10-09-32.jpg', '', '1 unit'),
(121, 1, 4, 'Huawei Y6P', 58700, 'Huawei', '1669351917_photo_2022-11-25_10-09-16.jpg', '', '1 unit'),
(122, 1, 4, 'Huawei Y9S', 65200, 'Huawei', '1669352098_photo_2022-11-25_10-09-24.jpg', '', '1 unit'),
(123, 2, 2, 'Apple ipad 9 Gen', 250000, 'Apple', '1669352538_photo_2022-11-25_10-29-10.jpg', '', '1 unit'),
(124, 2, 1, 'Galaxy Tab A7 Lite', 185000, 'Samsung', '1669352599_photo_2022-11-25_10-28-57.jpg', '', '1 unit'),
(125, 2, 2, 'ipad Air 5', 320000, 'Apple', '1669352653_photo_2022-11-25_10-29-05.jpg', '', '1 unit'),
(126, 2, 2, 'ipad pro 2022', 369200, 'Apple', '1669352706_photo_2022-11-25_10-29-18.jpg', '', '1 unit'),
(127, 2, 1, 'Galaxy A 10', 158200, 'Samsung ', '1669352761_photo_2022-11-25_10-29-26.jpg', '', '1 unit'),
(128, 3, 4, 'phone Charger', 2000, 'huawei', '1669353145_photo_2022-11-25_10-39-59.jpg', '', '1 unit'),
(129, 3, 1, 'Power Bank', 8500, 'Samsung', '1669353206_photo_2022-11-25_10-40-07.jpg', '', '1 unit'),
(130, 3, 1, 'Data Cabel', 3800, 'Samsung', '1669353253_photo_2022-11-25_10-40-16.jpg', '', '1 unit'),
(131, 3, 2, 'ipad pencil', 45000, 'Apple', '1669353304_photo_2022-11-25_10-40-28.jpg', '', '1 unit'),
(132, 3, 1, 'Tech 432 Head set', 5890, 'JBL', '1669353364_photo_2022-11-25_10-40-46.jpg', '', '1 unit'),
(133, 3, 1, 'T4 Techno Headset', 10850, 'Samsung', '1669353429_photo_2022-11-25_10-40-40.jpg', '', '1 unit');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `id` int(10) NOT NULL,
  `Customer` varchar(30) NOT NULL,
  `Device` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `courier_id` varchar(50) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `Customer`, `Device`, `Status`, `courier_id`, `staff_name`) VALUES
(24, 'Anuradha', 'Huawei Y6p', 'Software Damage', '456op81', 'Sanjaya'),
(25, 'Hemantha', 'Samsung Galaxy J2', 'Power button damage', '897ui71', 'Shanaka'),
(26, 'Nilmini', 'Samsung Galaxy M22', 'Software Damage', '789sd456', 'Pasindu'),
(29, 'Shyamika', 'Apple 12 Pro Max', 'Water Damage', '', 'Shanaka'),
(30, 'Nethmina', 'Oppo 12x', 'Cracked Screen', '897we41', 'Sanjaya'),
(31, 'Sunethra', 'Huawei Y3', 'Broken Power Button', '', 'Pasindu'),
(39, 'Sandun', 'Nokia T10', 'Software Damage', '7895rt10', 'Pasindu'),
(40, 'Nilmini', 'Huawei y3', 'Display Damage', '7850rt6', 'Sanjaya'),
(41, 'saduni', 'Apple ipad pro 10', 'Display Damage', '459Yt10', 'Admin'),
(42, 'chathura', 'Headset', 'Charging Pin Damage', '4587u60', 'Pasindu'),
(43, 'Saman', 'Apple 12 pro max', 'Ic Damage', '7850ss45', 'Sanjaya'),
(44, 'Krishan', 'Apple ipad 6', 'Display Damage', '9874iot', 'Pasindu'),
(45, 'sadali', 'apple 14 max', 'Power Button Damage', '7894oi3', 'Sanjaya'),
(46, 'Hasintha', 'Headset', 'Speaker Damage ', '7845on1', 'Shanaka'),
(47, 'Imesha', 'Apple ipad  9', 'Software Damage', '7894io3', 'Pasindu');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `staff_id` int(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_emaill` varchar(50) NOT NULL,
  `staff_password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(12, 'Hemantha', 'Gamage', 'hemantha@gmail.com', 'hemantha12#', '9448121558', 'Galenbindunuwewa', 'Thalawa'),
(15, 'Nilmini', 'Sumedha', 'nilmini22@gmail.com', 'nilu1234$', '536487276', '', ''),
(16, 'Venuri', 'Nimesha', 'venuri@gmail.com', '1234534', '9877654334', 'Rajanganaya', ''),
(19, 'Abhisheka', 'Nawodi', 'abhisheka@gmail.com', 'Abhi1234#', '9871236534', 'Awkana', ''),
(21, 'Praneeth', 'Gamage', 'praneeth@gmail.com', '1234545662', '0789658712', 'Kalawewa', ''),
(22, 'Sandun', 'Nirmal', 'sandun@gmail.com', '123', '9877654334', 'Thambuttegama', ''),
(28, 'Anuradha', 'Rathnayaka', 'anuradha.rathnayaka@gmail.com', 'Anuradha1234#', '0768547621', 'Anuradhapura', 'Galenbindun'),
(29, 'Kamala', 'Ranathunga', 'kamala12@gmail.com', 'sadu1234', '0769874513', '897,12 Block,', 'Galenbindun'),
(31, 'saduni', 'Amarasekara', 'saduni@gmail.com', 'sadu1234#', '0786523410', 'No 124 ,12 Block', 'Dutuwewa'),
(32, 'Dilshan', 'Disanayaka', 'disanayaka1245@gmail.com', 'disanayaka1234', '0769845627', '589,galagedara block', 'Dutuwewa'),
(33, 'chathura', 'nethmina', 'nethmina@gmail.com', 'nethmina56#', '0114587965', '789B,11 Block.', 'Dutuwewa'),
(34, 'Saman', 'Kumara', 'kumara14@gmail.com', 'kumara@16', '2314569870', '243 ,padilkaramaduwa', 'Getalawaq'),
(35, 'Wishmi', 'karunanayake', 'wishmi@gmail.com', 'wish1234@', '2365147890', '23 dambulla road', 'galenbindun'),
(36, 'Sunethra', 'Bandara', 'bandara1980@gmail.com', 'sune1234@', '5478961237', '123 rathmalwetiya', 'galenbindun'),
(37, 'Nawarathna', 'bandara', 'nawaban@gmail.com', 'banda1237@', '8574123698', '85 katarampura', 'Dutuwewa'),
(38, 'Madumi', 'Sumanabandara', 'madumi98@gmail.com', 'madu@8856', '1254789630', '857B,kokawewa', 'galenbindun'),
(39, 'krishan', 'Perera', 'prera23@gmail.com', '7894@perera', '0231456987', '789B,', 'Eppawala'),
(40, 'sadali', 'withanachchi', 'sadali@96gmail.com', 'sadali@9612', '0789645230', '789,Anuradhapura Road.', 'Mihinthale'),
(41, 'Hasintha', 'Madubashitha', 'hasintha23072@mail.com', 'hashi@2308', '0789874541', '987B,Nikawewa', 'galenbindun'),
(42, 'imesha', 'madumali', 'imesha98@gmail.com', 'imesga@9865', '4569871238', '874/B,40Block', 'Dutuwewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_info`
--
ALTER TABLE `orders_info`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `staff_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
