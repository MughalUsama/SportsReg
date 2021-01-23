-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE `business_categories` (
  `business_category_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`business_category_id`, `business_id`, `category_id`) VALUES
(155, 16, 2),
(156, 16, 3),
(157, 16, 4),
(158, 16, 5),
(159, 16, 6),
(160, 16, 8),
(161, 16, 9),
(162, 16, 10),
(176, 12, 2),
(177, 12, 3),
(178, 12, 5),
(198, 28, 2),
(199, 28, 3),
(200, 28, 4),
(201, 28, 6);

-- --------------------------------------------------------

--
-- Table structure for table `business_counties`
--

CREATE TABLE `business_counties` (
  `business_counties_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `county_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_counties`
--

INSERT INTO `business_counties` (`business_counties_id`, `business_id`, `county_name`) VALUES
(31, 12, 'Oslo'),
(32, 12, 'Rogaland'),
(42, 16, 'Hele Norge (all over the country)'),
(73, 28, 'Hele Norge (all over the country)'),
(74, 28, 'Oslo'),
(75, 28, 'Rogaland');

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE `business_info` (
  `business_id` int(11) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `business_email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `logo_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_info`
--

INSERT INTO `business_info` (`business_id`, `business_name`, `vat`, `address`, `telephone`, `business_email`, `website`, `contact_person`, `contact_email`, `email`, `password`, `logo_name`) VALUES
(12, 'Usama and Company', '1111111111111', 'Lahore', '03204115426', 'bsef17m035@pucit.edu.pk', 'https://www.github.com/mughalusama', 'Usama Shahid', 'bsef17m035@pucit.edu.pk', 'bsef17m035@pucit.edu.pk', 'aaaaaaaa', '5ff84a6e67e2c.png'),
(16, 'Unknown123', 'aujkwh828128', 'asdugauig', '2338247', 'usama@d.com', 'https://www.github.com.pk', 'FARAZ', 'usama@d.com', 'usama@d.com', 'aaaaaaaa', '5ff84a6e67e2c.png'),
(28, 'Shahid and sons', '1111111111111', 'aaaaaaaaa aaa a', '0300000000', 'aaaa@ssss.cpm', 'https://www.github.com.pk', 'Usama Shahid', 'usama@1.com', 'usama@1.com', 'aaaaaaaa', '5ffdb9c0394cb.png');

-- --------------------------------------------------------

--
-- Table structure for table `business_products`
--

CREATE TABLE `business_products` (
  `business_products_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_products`
--

INSERT INTO `business_products` (`business_products_id`, `business_id`, `product_id`, `category_id`) VALUES
(156, 16, 3, 2),
(157, 16, 5, 2),
(158, 16, 13, 2),
(159, 16, 4, 2),
(160, 16, 2, 2),
(173, 12, 3, 2),
(174, 12, 5, 2),
(175, 12, 13, 2),
(176, 12, 4, 2),
(177, 12, 16, 5),
(178, 12, 10, 3),
(233, 28, 3, 2),
(234, 28, 5, 2),
(235, 28, 13, 2),
(236, 28, 4, 2),
(237, 28, 2, 2),
(238, 28, 10, 3),
(239, 28, 9, 3),
(240, 28, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `business_sports`
--

CREATE TABLE `business_sports` (
  `business_sports_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `sports_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_sports`
--

INSERT INTO `business_sports` (`business_sports_id`, `business_id`, `sports_name`) VALUES
(64, 12, 'Football'),
(65, 12, 'Ishockey'),
(62, 16, 'Handball'),
(63, 16, 'Ishockey'),
(101, 28, 'Cricket'),
(91, 28, 'Football'),
(97, 28, 'Handball'),
(92, 28, 'Ishockey');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'Idrettsreiser'),
(3, 'Reklame'),
(4, 'Premier'),
(5, 'Treningsutstyr'),
(6, 'Medisinsk'),
(7, 'Garderobeutstyr'),
(8, 'Administrasjon/klubbdrift'),
(9, 'Stadion/arena'),
(10, 'Inntektsbringende');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT 'username',
  `address` varchar(50) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isadmin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `contact_person`, `telephone`, `email`, `address`, `post_code`, `city`, `password`, `isadmin`) VALUES
(1, 'Usama\'s Club', 'Usama Shahid', '03104115426', 'mughalusama1133@gmail.com', 'Shad bagh', '54000', 'Lahore', 'aaaaaaaa', 0),
(5, 'Real Madrid', 'aaaaa', 'llll44', 'aaaa@ssss.cpm', 'wswwwwwwwww', 'wwwww', 'wwww', 'aaaaaaaa', 0),
(6, 'mu', 'aaaaa', 'llll44', 'waleedshahid@rocketmails.com', 'wswwwwwwwww', 'wwwww', 'wwww', 'aaaaaaaaaaa', 0),
(7, 'Real Madrid', 'aaaaa', 'llll44', '03244014942@d.com', 'wswwwwwwwww', 'wwwww', 'wwww', 'zzzzzzzzzzzzz', 0),
(8, 'Real Madrid', 'aaaaa', 'llll44', 'bsef17m035@pucit.edu.pk', 'wswwwwwwwww', 'wwwww', 'Lahore', 'usamashahid', 0),
(9, 'abc12345', 'Usama Shahid', '0300000000', 'usama@d.com', 'aaaaaaaaa aaa a', '54000', 'Lahore', 'aaaaaaaa', 0),
(11, 'Administrator', 'N/A', 'N/A', 'admin@sportsreg.com', 'N/A', 'N/A', 'N/A', 'admin@sportsreg123', 1),
(12, 'New club', 'abc', '0310101010', 'musama@gmail.com', 'Lahore', '54000', 'Lahore', 'aaaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `club_requests`
--

CREATE TABLE `club_requests` (
  `request_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `sports` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `accepted_by` int(11) DEFAULT NULL COMMENT 'business_id',
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `accepted_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_requests`
--

INSERT INTO `club_requests` (`request_id`, `club_id`, `sports`, `category_id`, `product_id`, `quantity`, `color`, `size`, `description`, `status`, `accepted_by`, `created_on`, `accepted_on`) VALUES
(15, 1, 'Football', 2, 15, 5, 'white', 'd', 'fgdgsd', 0, NULL, '2021-01-03', NULL),
(16, 8, 'Handball', 2, 3, 12, 'Red', 'aaaaaa', 'aaaaaaaaaaaaaaazzzzzzzz', 1, 12, '2021-01-13', '2021-01-17 16:48:20'),
(17, 8, 'Football', 2, 3, 1, 'Red', 'qqq', 'testuik,\r\n', 1, 12, '2021-01-13', '2021-01-13 12:54:51'),
(18, 8, 'Football', 7, 20, 5, 'Red', 'ws', '', 0, NULL, '2021-01-13', NULL),
(19, 8, 'Football', 3, 8, 12, 'white', 'Large', 'udsksa', 0, NULL, '2021-01-13', NULL),
(20, 8, 'Handball', 2, 4, 11, 'redq', 'a', 'asasza', 1, 12, '2021-01-13', '2021-01-13 13:18:48'),
(21, 1, 'Football', 2, 4, 10, 'Red', 'aaaaaa', 'ksfmlkm', 0, NULL, '2021-01-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offer_messages`
--

CREATE TABLE `offer_messages` (
  `message_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `request_id` int(11) NOT NULL,
  `sentby` int(11) NOT NULL COMMENT '0 for club, 1 for business',
  `status` int(11) NOT NULL DEFAULT 0,
  `is_seen` int(11) NOT NULL DEFAULT 0 COMMENT 'O for unseen,1 for seen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`) VALUES
(3, 2, 'Fotballbilletter'),
(5, 2, 'Halleie'),
(13, 2, 'Overnatting'),
(4, 2, 'Transport'),
(2, 2, 'Treningsleir'),
(10, 3, 'Invitasjoner'),
(9, 3, 'Klubb, supporter og profileringsartikler'),
(8, 3, 'Led-reklame'),
(7, 3, 'Reklameskilt/bannere'),
(12, 4, 'Diplomer'),
(11, 4, 'Medaljer/pokaler'),
(15, 5, 'Baller'),
(16, 5, 'Kjegler, stiger, hekker m.m'),
(14, 5, 'Klesleverandør / treningsklær'),
(17, 5, 'Styrkeapparater'),
(19, 6, 'Massasjebenk'),
(18, 6, 'Medisinsk utstyr'),
(20, 7, 'Garderobeinnredning/inventar'),
(25, 8, 'Hjemmesider'),
(22, 8, 'Kontorrekvisita og maskiner'),
(23, 8, 'Medlemssystem'),
(26, 8, 'Nettbutikkløsning'),
(24, 8, 'Turneringssystem'),
(41, 9, 'Containere'),
(29, 9, 'Gressklippere'),
(30, 9, 'Hjørneflagg'),
(40, 9, 'Innbytterskilt'),
(28, 9, 'Kunstgress'),
(39, 9, 'Resultattavle'),
(42, 9, 'Telt'),
(27, 9, 'Tribune'),
(43, 10, 'Dugnad');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sports_id` int(11) NOT NULL,
  `sports_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_id`, `sports_name`) VALUES
(1, 'Football'),
(2, 'Ishockey'),
(5, 'Handball'),
(7, 'Cricket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD PRIMARY KEY (`business_category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `c_id` (`business_id`);

--
-- Indexes for table `business_counties`
--
ALTER TABLE `business_counties`
  ADD PRIMARY KEY (`business_counties_id`),
  ADD KEY `b_id1` (`business_id`);

--
-- Indexes for table `business_info`
--
ALTER TABLE `business_info`
  ADD PRIMARY KEY (`business_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `business_products`
--
ALTER TABLE `business_products`
  ADD PRIMARY KEY (`business_products_id`),
  ADD KEY `b_id2` (`business_id`),
  ADD KEY `bp_id0` (`product_id`),
  ADD KEY `bc_id` (`category_id`);

--
-- Indexes for table `business_sports`
--
ALTER TABLE `business_sports`
  ADD PRIMARY KEY (`business_sports_id`),
  ADD UNIQUE KEY `business_id` (`business_id`,`sports_name`),
  ADD KEY `sports_key` (`sports_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `club_requests`
--
ALTER TABLE `club_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `req_cat` (`category_id`),
  ADD KEY `req_pro` (`product_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `offer_messages`
--
ALTER TABLE `offer_messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `req_id_fkey` (`request_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `category_id` (`category_id`,`product_name`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_id`,`sports_name`),
  ADD UNIQUE KEY `sports_name` (`sports_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_categories`
--
ALTER TABLE `business_categories`
  MODIFY `business_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `business_counties`
--
ALTER TABLE `business_counties`
  MODIFY `business_counties_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `business_info`
--
ALTER TABLE `business_info`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `business_products`
--
ALTER TABLE `business_products`
  MODIFY `business_products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `business_sports`
--
ALTER TABLE `business_sports`
  MODIFY `business_sports_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `club_requests`
--
ALTER TABLE `club_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `offer_messages`
--
ALTER TABLE `offer_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD CONSTRAINT `b_id` FOREIGN KEY (`business_id`) REFERENCES `business_info` (`business_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_id` FOREIGN KEY (`business_id`) REFERENCES `business_info` (`business_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_counties`
--
ALTER TABLE `business_counties`
  ADD CONSTRAINT `b_id1` FOREIGN KEY (`business_id`) REFERENCES `business_info` (`business_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_products`
--
ALTER TABLE `business_products`
  ADD CONSTRAINT `b_id2` FOREIGN KEY (`business_id`) REFERENCES `business_info` (`business_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bc_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bp_id0` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_sports`
--
ALTER TABLE `business_sports`
  ADD CONSTRAINT `b_id5` FOREIGN KEY (`business_id`) REFERENCES `business_info` (`business_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sports_key` FOREIGN KEY (`sports_name`) REFERENCES `sports` (`sports_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `club_requests`
--
ALTER TABLE `club_requests`
  ADD CONSTRAINT `club_id` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`club_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `req_cat` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `req_pro` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer_messages`
--
ALTER TABLE `offer_messages`
  ADD CONSTRAINT `req_id_fkey` FOREIGN KEY (`request_id`) REFERENCES `club_requests` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_key` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
