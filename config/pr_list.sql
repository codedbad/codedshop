-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2019 at 08:39 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pr_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(64) DEFAULT NULL,
  `mox` varchar(32) DEFAULT NULL,
  `dim` varchar(32) DEFAULT NULL,
  `osx` varchar(32) DEFAULT NULL,
  `mem` varchar(32) DEFAULT NULL,
  `scr` varchar(32) DEFAULT NULL,
  `prc` varchar(6) DEFAULT NULL,
  `img` varchar(256) DEFAULT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `mox`, `dim`, `osx`, `mem`, `scr`, `prc`, `img`, `dat`, `userId`) VALUES
(6, NULL, 'Iphone Xs Gold', '143.6 x 70.9 x 7.7', 'iOS 12.1.3', '64', '5.8 inches, 1125x2436 pixels', '1099', 'images/iphone.jpg', '2019-03-18 13:26:04', 1),
(7, NULL, 'Samsung S10+', '157.6 x 74.1 x 7.8 ', 'Android 9.0 (Pie); One UI', '128', '6.4 inches, 1440 x 3040 pixels', '1049', 'images/samsung.jpg', '2019-03-18 13:26:04', 1),
(8, NULL, 'Huawei P30 Pro', '155 x 73.9 x 7.8', 'Android 9.0 (Pie); EMUI 9', '128', '6.47 inches, 1080 x 2340 pixels', '899', 'images/huawei.jpg', '2019-03-18 13:26:04', 1),
(9, NULL, 'Xiaomi Mi 9', '157.5 x 74.7 x 7.6', 'Android 9.0 (Pie); MIUI 10', '64', '6.39 inches, 1080 x 2340 pixels', '799', 'images/xiaomi.jpg', '2019-03-18 13:26:04', 1),
(10, NULL, 'Sony Xperia 10 Plus', '167 x 73 x 8.3', 'Android 9.0 (Pie)', '64', '6.5 inches, 1080 x 2520 pixels', '695', 'images/sony-xp.jpg', '2019-03-18 13:26:04', 1),
(11, NULL, 'vivo V15 Pro', '157.3 x 74.7 x 8.2', 'Android 9.0 (Pie); Funtouch 9', '128', '6.39 inches, 1080 x 2316 pixels', '499', 'images/vivo.jpg', '2019-03-18 13:26:04', 1),
(12, NULL, 'Motorola Moto G7', '157 x 75.3 x 8', 'Android 9.0 (Pie)', '64', '6.2 inches, 1080 x 2270 pixels', '699', 'images/moto.jpg', '2019-03-18 13:26:04', 1),
(13, NULL, 'Meizu Note 9', '153.1 x 74.4 x 8.7', 'Android 9.0 (Pie); Flyme 7.2', '64', '6.2 inches, 1080 x 2244 pixels', '595', 'images/meizu.jpg', '2019-03-18 13:26:04', 1),
(17, NULL, 'Siemens', '10x10x10', 'siemens os', '16', '2.2inches', '110', 'images/xiaomi.jpg', '2019-03-19 09:14:43', NULL),
(18, NULL, 'Siemens', '55x112x12', 'siemens os', '128', '2.2inches', '739', 'images/iphone.jpg', '2019-03-19 09:20:00', NULL),
(19, NULL, 'Siemens', '100x120x10', 'siemens os', '32', '1.2inches', '739', 'images/samsung.jpg', '2019-03-19 09:22:08', NULL),
(29, NULL, 'Apple Iphone 8', '100x120x10', 'iOS', '16', '6.2inches, 322x800 pixels', '499', 'images/iphone.jpg', '2019-03-19 11:06:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `email` varchar(320) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hash` binary(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `lastname`, `email`, `created`, `hash`) VALUES
(1, 'codedbad', 'Rustams', 'Steinbergs', 'rustams.steinbergs@gmail.com', '2019-03-14 11:26:51', 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(2, 'peter89', 'Peteris', 'Saulis', 'shteecers@inbox.lv', '2019-03-14 11:41:17', 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
