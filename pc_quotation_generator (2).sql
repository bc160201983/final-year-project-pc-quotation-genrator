-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 02:54 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_quotation_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(8, 'CPU'),
(9, 'CPU Cooler'),
(10, 'Motherboard'),
(11, 'Memory'),
(12, 'Storage'),
(13, 'Video Card'),
(14, 'Case'),
(15, 'Power Supply'),
(16, 'Optical Drive'),
(17, 'Operating System'),
(18, 'Software'),
(19, 'Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_title` varchar(500) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `man_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_title`, `cat_id`, `man_id`, `image`, `description`, `price`, `status`) VALUES
(43, 'ZOTAC GAMING GeForce RTX 2080 Ti AMP ZT-T20810D-10P Graphics Card', 13, 4, '617vr1SLb5L._SX425_.jpg', '&lt;p&gt;ZOTAC GAMING GeForce RTX 2080 Ti AMP ZT-T20810D-10P Graphics Card&lt;/p&gt;', 224900, 'publish'),
(44, 'MSI Geforce GTX 1050TI Gaming X 4G Graphics Card, 4GB 912-V335-035', 13, 4, '2018-02-08-product-15.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;GeForce GTX graphics cards are the most advanced ever created. Discover unprecedented performance, power efficiency, and next-generation gaming experiences. Just like in games, the exclusive MSI TORX 2.0 Fan technology uses the power of teamwork to allow the TWIN FROZR VI to achieve new levels of cool.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;768 Units Cores&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;1493 MHz / 1379 MHz (OC Mode)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4GB GDDR5 (128-bit)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;DisplayPort (Version 1.4) / HDMI 2.0b / DL-DVI-D&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 27900, 'publish'),
(57, 'MSI Radeon RX 580 DirectX 12 RX 580 ARMOR 8G OC 8GB 256-Bit GDDR5 PCI Express x16 HDCP Ready CrossFireX Support Video Card', 13, 3, '14-137-118_R01.jpg', '&lt;p&gt;MSI Radeon RX 580 DirectX 12 RX 580 ARMOR 8G OC 8GB 256-Bit GDDR5 PCI Express x16 HDCP Ready CrossFireX Support Video Card&lt;/p&gt;', 38000, 'publish'),
(58, 'AMD Ryzen 5 3600 Desktop Processor With Wraith Stealth Cooler', 8, 3, '1562490108-img-1213283-1540-8511-110919084841.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif; background-color: #ffffff;&quot;&gt;AMD 3600: Serious Gaming. Fully Unlocked*.&lt;/div&gt;', 39500, 'publish'),
(59, 'Gigabyte GA-A320M-S2H AMD Socket AM4 Motherboard', 10, 3, '2019010417452071-big-1540-8350-270719115701.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif; background-color: #ffffff;&quot;&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif;&quot;&gt;&lt;span style=&quot;font-size: 13px;&quot;&gt;Gigabyte GA-A320M-S2H AMD Socket AM4 Motherboard&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;', 11900, 'publish'),
(60, 'Intel Core i3-9100F Desktop Processor Without Processor Graphics LGA1151 9th Generation', 8, 2, '1557934564-1469520-1540-8363-020819010222-1540-8393-080819082215.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif; background-color: #ffffff;&quot;&gt;9th Gen Intel Core i3-9100f desktop processor without processor graphics. Features Intel Turbo Boost Technology 2.0 and offers mainstream performance for exceptional overall productivity. Thermal solution included in the box. Only compatible with Intel 300 Series chipset based motherboards. 65W.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; background-color: #ffffff; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;# of Cores 4 # of Threads 4&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Processor Base Frequency 3.60 GHz | Max Turbo Frequency 4.20 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 MB SmartCache&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;TDP 65 W&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 21300, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`) VALUES
(2, 'Intel'),
(3, 'AMD'),
(4, 'Nvidia GeForce'),
(5, 'Seagate'),
(6, 'Gigabyte'),
(7, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customer_name` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `date`, `customer_name`, `item_id`, `qty`, `amount`) VALUES
(63, '0000-00-00 00:00:00', 'bilal afzaal', 60, 1, 21300),
(64, '0000-00-00 00:00:00', 'bilal afzaal', 59, 5, 11900),
(65, '0000-00-00 00:00:00', 'bilal afzaal', 44, 1, 27900),
(66, '2019-09-25 19:00:00', 'admin', 58, 1, 39500),
(67, '2019-09-18 19:00:00', 'bilalafzaal', 58, 1, 39500),
(68, '2019-09-18 19:00:00', 'bilalafzaal', 44, 1, 27900),
(69, '2019-09-26 19:00:00', 'bilal afzaal', 58, 1, 39500),
(70, '2019-09-26 19:00:00', 'bilal afzaal', 44, 1, 27900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`man_id`) REFERENCES `manufacturer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
