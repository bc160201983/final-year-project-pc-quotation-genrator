-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 04:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
(1, 'CPU'),
(2, 'GPU'),
(3, 'Laptop');

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
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_title`, `cat_id`, `man_id`, `image`, `description`, `price`, `status`) VALUES
(1, 'AMD Ryzen 5 2600 Processor with Wraith Stealth Cooler - YD2600BBAFBOX', 1, 3, 'amd-ryzen.jpg', 'Higher performance. Incredible technology. Intelligent Ryzen™ processors just got even smarter.\r\n6 Cores / 12 Threads UNLOCKED\r\nPackage AM4\r\nMax Boost Clock 3.9GHz\r\n19MB of Combined Cache', 29000, 'draft'),
(16, 'What is Lorem Ipsum?', 1, 2, 'newscan.jpeg', '<h2 style=\"box-sizing: border-box; margin: 0px 0px 10px; font-weight: 400; line-height: 24px; font-size: 24px; color: #212529; background-color: #ffffff; padding: 0px; font-family: DauphinPlain;\">What is Lorem Ipsum</h2>', 7777, 'draft'),
(17, 'Asus ROG G531GT Gaming Laptop - 9th Gen Ci7 9750H - 8GB Memory - NVIDIA GeForce GTX 1650 GC - 512GB SSD - Windows 10 - 15.6\" FHD - Black', 3, 2, '58691971_2052429281725574_2186076798192713728_o.jpg', '&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;Windows 10 operating system&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Windows 10 brings back the Start Menu from Windows 7 and introduces new features, like the Edge Web browser that lets you markup Web pages on your screen.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;15.6&quot; Full HD display&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;The 1920 x 1080 resolution boasts impressive color and clarity. Energy-efficient LED backlight.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;9th Gen Intel&amp;reg; Core&amp;trade; i7-9750H mobile processor&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Powerful 6-core, twelve-way processing performance.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;8GB system memory for advanced multitasking&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Substantial high-bandwidth RAM to smoothly run your games and photo- and video-editing applications, as well as multiple programs and browser tabs all at once.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;512GB PCIe solid state drive&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;While offering less storage space than a hard drive, a flash-based SSD has no moving parts, resulting in faster start-up times and data access, no noise, and reduced heat production and power draw on the battery.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;NVIDIA GeForce GTX 1650 graphics&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Backed by 4GB GDDR5 dedicated video memory for a fast, advanced GPU to fuel your games.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;Weighs 5.29 lbs. and measures 1&quot; thin&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Thin and light design with DVD/CD drive omitted for improved portability. 3-cell lithium-ion battery.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;HDMI output expands your viewing options&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Connect to an HDTV or high-def monitor to set up two screens side by side or just see more of the big picture.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;Next-generation wireless connectivity&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Connects to your network or hotspots on all current Wi-Fi standards. Connect to a Wireless-AC router for speed nearly 3x faster than Wireless-N. The Gigabit Ethernet LAN port also plugs into wired networks.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div style=&quot;box-sizing: border-box; font-size: 12px; max-width: 100%; width: 800px; font-family: Roboto, sans-serif; color: #34495e; background-color: #ffffff;&quot;&gt;\r\n&lt;h4 style=&quot;box-sizing: border-box; font-family: inherit !important; font-weight: 300; line-height: 20px; color: inherit; margin: 0px; font-size: 16px; padding-bottom: 15px;&quot;&gt;RGB backlit keyboard&lt;/h4&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-family: inherit !important;&quot;&gt;Allows you to enjoy comfortable and accurate typing, even in dim lighting.&lt;/p&gt;\r\n&lt;/div&gt;', 12000, 'draft'),
(18, 'What is Lorem Ipsum?', 1, 3, '58691971_2052429281725574_2186076798192713728_o.jpg', '&lt;h1 id=&quot;spnProductName&quot; class=&quot;product-title&quot; style=&quot;box-sizing: border-box; margin: 0px; font-size: 24px; font-family: Roboto; font-weight: 500; line-height: 1; color: #49494a; padding-bottom: 2px; letter-spacing: 0.25px; background-color: #ffffff;&quot;&gt;Epson EcoTank L3110 All-in-One Ink Tank Printer&lt;/h1&gt;', 26500, 'draft'),
(19, 'What is Lorem Ipsum?', 1, 3, '58691971_2052429281725574_2186076798192713728_o.jpg', '&lt;h1 id=&quot;spnProductName&quot; class=&quot;product-title&quot; style=&quot;box-sizing: border-box; margin: 0px; font-size: 24px; font-family: Roboto; font-weight: 500; line-height: 1; color: #49494a; padding-bottom: 2px; letter-spacing: 0.25px; background-color: #ffffff;&quot;&gt;Epson EcoTank L3110 All-in-One Ink Tank Printer&lt;/h1&gt;', 26500, 'draft'),
(20, 'Salary', 1, 3, '58691971_2052429281725574_2186076798192713728_o.jpg', '&lt;p&gt;ggggggggggggggggggg&lt;/p&gt;', 21222, 'publish'),
(21, 'Salary', 1, 3, '58691971_2052429281725574_2186076798192713728_o.jpg', '&lt;p&gt;ggggggggggggggggggg&lt;/p&gt;', 21222, 'publish'),
(22, 'What is Lorem Ipsum?', 1, 2, 'Class Diagram (1).png,genrate and print quotation Diagram.png,Brows Catgories Diagram.png,category deleted Diagram.png', '&lt;p&gt;eeeeeeeeeeeeeeeeee&lt;/p&gt;', 1111111111, 'draft');

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
(3, 'AMD');

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`man_id`) REFERENCES `manufacturer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
