-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 08:02 AM
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
-- Database: `pc price quotation`
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
(1, 'Processors'),
(2, ' Graphic Cards'),
(3, 'Laptop'),
(4, 'Hard Drives'),
(5, ' Motherboards');

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
(1, 'Intel Core i3-8100 Processor, Coffee Lake, LGA 1151 (300 Series), 8th Gen', 1, 2, '19-117-822-z01-1540-6013-181117092414.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Experience powerful performance and seamless computing for your everyday tasks. That includes improved productivity, smooth streaming, and brilliant HD entertainment with immersive, full-screen 4K and 360-degree viewing. ONLY Compatible with Intel 300 Series Motherboard.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4 Cores / 4 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Processor Base Frequency 3.60 GHz / Cache 6 MB&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;65 W / DDR4-2400&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Intel&amp;reg; UHD Graphics 630&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 26000, 'publish'),
(16, 'AMD Ryzen 5 3400G Processor With Wraith Spire Cooler AM4', 1, 3, 'ryzen-5-3400g-main-600x600.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;The Most Powerful Graphics on a Desktop Processor. The Power to Play. Fully Unlocked. AMD Ryzen&amp;trade; 5 3400G with Radeon&amp;trade; RX Vega 11 Graphics.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;4 Cores &amp;amp; 8 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;4.2 GHz Max Boost Clock&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;# of GPU Cores 11&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;Package AM4&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 29500, 'publish'),
(17, 'AMD Ryzen 5 2600X Processor with Wraith Spire Cooler - YD260XBCAFBOX', 1, 3, '51W-O4Jn9EL._SX425_.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Highest Multiprocessing Performance in Its Class for Serious Gamers and Promising Creators*&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 Cores / 12 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Package AM4&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Max Boost Clock 4.2 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;19MB of Combined Cache&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 34500, 'draft'),
(18, 'Intel Core i3-9100 Processor (Boxed) BX80684I39100 LGA1151 9th Generation', 1, 2, '19-117-822-z01-1540-6013-181117092414.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Packing in four cores and four threads, the Core i3-9100 Processor from Intel has a 3.6 GHz base clock speed and a 4.2 GHz maximum boost speed. Compatible with LGA 1151 motherboard sockets, this 9th-generation Core i3 CPU comes with a 6MB Intel Smart Cache.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4 Cores &amp;amp; 4 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4.2 GHz Maximum Boost Speed&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;LGA 1151 Socket&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 MB SmartCache&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 25900, 'draft'),
(19, 'ZOTAC GAMING GeForce RTX 2080 Ti AMP ZT-T20810D-10P Graphics Card', 2, 4, '617vr1SLb5L._SX425_.jpg', '&lt;div id=&quot;rptListView_ctl01_divProductDesc&quot; class=&quot;description&quot; style=&quot;box-sizing: border-box; margin: 5px auto 0px; padding: 0px; max-width: 100%; border-top: none; color: #34495e; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgba(255, 255, 255, 0.024);&quot;&gt;\r\n&lt;p id=&quot;rptListView_ctl01_spnProductDesc&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 5px; color: #444444; font-size: 12px; overflow: hidden; line-height: 18px; max-height: 200px; min-height: 10px;&quot;&gt;The all-new generation of ZOTAC GAMING GeForce graphics cards are here. Based on the new NVIDIA Turing architecture, it&amp;rsquo;s packed with more cores and all-new GDDR6 ultra-fast memory. Integrated with more smart and optimized technologies, get ready to get fast and game strong like never before.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;ul id=&quot;rptListView_ctl01_ulHighlights&quot; class=&quot;description highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px auto 5px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px; font-size: 12px; color: #444444; font-family: Roboto; max-width: 100%; border-top: none; background-color: rgba(255, 255, 255, 0.024);&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;CUDA cores 4352&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Engine Clock Boost: 1665 MHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;11GB GDDR6 352-bit&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Memory Clock 14.0 Gbps&lt;/li&gt;\r\n&lt;/ul&gt;', 224900, 'draft'),
(20, 'MSI Geforce GTX 1050TI Gaming X 4G Graphics Card, 4GB 912-V335-035', 2, 4, '2018-02-08-product-15.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;GeForce GTX graphics cards are the most advanced ever created. Discover unprecedented performance, power efficiency, and next-generation gaming experiences. Just like in games, the exclusive MSI TORX 2.0 Fan technology uses the power of teamwork to allow the TWIN FROZR VI to achieve new levels of cool.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;768 Units Cores&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;1493 MHz / 1379 MHz (OC Mode)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4GB GDDR5 (128-bit)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;DisplayPort (Version 1.4) / HDMI 2.0b / DL-DVI-D&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 27900, 'draft'),
(21, 'Seagate BarraCuda ST1000DM010 1TB Hard Drive Bare Drive', 4, 5, '61gs95fvcmL._SL1000_.jpg', '&lt;h2 style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-weight: 400; line-height: 24px; font-size: 24px; color: #212529; background-color: #ffffff; padding: 0px; font-family: DauphinPlain;&quot;&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; Versatile, Fast and Dependable&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; 64MB Cache&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; SATA 6.0Gb/s 3.5&quot;&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; Multi-Tier Caching Technology&lt;/span&gt;&lt;/h2&gt;', 6300, 'draft'),
(22, 'Gigabyte H310M H 2.0 Intel H310 Ultra Durable Motherboard', 5, 6, '916y99h18LL._SL1500_.jpg', '&lt;h2 style=&quot;box-sizing: border-box; font-family: Roboto, sans-serif; font-weight: 300; line-height: 28px; color: #34495e; margin: 0px; font-size: 22px; padding-bottom: 15px; background-color: #ffffff;&quot;&gt;Intel H310 Ultra Durable motherboard with GIGABYTE 8118 Gaming LAN, Anti-Sulfur Resistor, Smart Fan 5, CEC 2019 ready&lt;/h2&gt;\r\n&lt;h2 style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-weight: 400; line-height: 24px; font-size: 24px; color: #212529; background-color: #ffffff; padding: 0px; font-family: DauphinPlain;&quot;&gt;&amp;nbsp;&lt;/h2&gt;\r\n&lt;ul style=&quot;box-sizing: border-box; margin: 0px; list-style: none; padding: 0px; color: #34495e; font-family: Roboto, sans-serif; font-size: 12px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Supports 8th&amp;nbsp;Gen Intel&amp;reg;&amp;nbsp;Core&amp;trade; Processors&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Dual Channel Non-ECC Unbuffered DDR4&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;8-Channel HD Audio with High Quality Audio Capacitors&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;GIGABYTE Exclusive 8118 Gaming LAN with Bandwidth Management&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;CEC 2019 Ready, Save Power With a Simple Click&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Smart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;All new GIGABYTE&amp;trade; APP Center, simple and easy use&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Anti-Sulfur Resistors Design&lt;/li&gt;\r\n&lt;/ul&gt;', 9500, 'publish'),
(29, 'Intel Core i5-9400F Desktop Processor - LGA1151', 1, 2, '1550232361_1459562.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;9th Gen Intel Core i5-9400f desktop processor without processor graphics. Features Intel Turbo Boost Technology 2.0 and offers powerful performance for mainstream gaming and creating. Discrete graphics required. Thermal solution included in the box. Only compatible with 300 Series chipset based motherboard.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;9M Cache, up to 4.10 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Processor Base Frequency 2.90 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 Cores/ 6 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Discrete GPU required - No integrated graphics&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 28500, 'draft'),
(30, 'Intel Core i3-8100 Processor, Coffee Lake, LGA 1151 (300 Series), 8th Gen', 1, 2, '19-117-822-z01-1540-6013-181117092414.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Experience powerful performance and seamless computing for your everyday tasks. That includes improved productivity, smooth streaming, and brilliant HD entertainment with immersive, full-screen 4K and 360-degree viewing. ONLY Compatible with Intel 300 Series Motherboard.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4 Cores / 4 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Processor Base Frequency 3.60 GHz / Cache 6 MB&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;65 W / DDR4-2400&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Intel&amp;reg; UHD Graphics 630&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 26000, 'publish'),
(31, 'AMD Ryzen 5 3400G Processor With Wraith Spire Cooler AM4', 1, 3, 'ryzen-5-3400g-main-600x600.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;The Most Powerful Graphics on a Desktop Processor. The Power to Play. Fully Unlocked. AMD Ryzen&amp;trade; 5 3400G with Radeon&amp;trade; RX Vega 11 Graphics.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;4 Cores &amp;amp; 8 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;4.2 GHz Max Boost Clock&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;# of GPU Cores 11&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px; text-align: left;&quot;&gt;Package AM4&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 29500, 'publish'),
(32, 'AMD Ryzen 5 2600X Processor with Wraith Spire Cooler - YD260XBCAFBOX', 1, 3, '51W-O4Jn9EL._SX425_.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Highest Multiprocessing Performance in Its Class for Serious Gamers and Promising Creators*&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 Cores / 12 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Package AM4&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Max Boost Clock 4.2 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;19MB of Combined Cache&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 34500, 'draft'),
(33, 'Intel Core i3-9100 Processor (Boxed) BX80684I39100 LGA1151 9th Generation', 1, 2, '19-117-822-z01-1540-6013-181117092414.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;Packing in four cores and four threads, the Core i3-9100 Processor from Intel has a 3.6 GHz base clock speed and a 4.2 GHz maximum boost speed. Compatible with LGA 1151 motherboard sockets, this 9th-generation Core i3 CPU comes with a 6MB Intel Smart Cache.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4 Cores &amp;amp; 4 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4.2 GHz Maximum Boost Speed&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;LGA 1151 Socket&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 MB SmartCache&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 25900, 'draft'),
(34, 'ZOTAC GAMING GeForce RTX 2080 Ti AMP ZT-T20810D-10P Graphics Card', 2, 4, '617vr1SLb5L._SX425_.jpg', '&lt;div id=&quot;rptListView_ctl01_divProductDesc&quot; class=&quot;description&quot; style=&quot;box-sizing: border-box; margin: 5px auto 0px; padding: 0px; max-width: 100%; border-top: none; color: #34495e; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgba(255, 255, 255, 0.024);&quot;&gt;\r\n&lt;p id=&quot;rptListView_ctl01_spnProductDesc&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 5px; color: #444444; font-size: 12px; overflow: hidden; line-height: 18px; max-height: 200px; min-height: 10px;&quot;&gt;The all-new generation of ZOTAC GAMING GeForce graphics cards are here. Based on the new NVIDIA Turing architecture, it&amp;rsquo;s packed with more cores and all-new GDDR6 ultra-fast memory. Integrated with more smart and optimized technologies, get ready to get fast and game strong like never before.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;ul id=&quot;rptListView_ctl01_ulHighlights&quot; class=&quot;description highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px auto 5px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px; font-size: 12px; color: #444444; font-family: Roboto; max-width: 100%; border-top: none; background-color: rgba(255, 255, 255, 0.024);&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;CUDA cores 4352&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Engine Clock Boost: 1665 MHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;11GB GDDR6 352-bit&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Memory Clock 14.0 Gbps&lt;/li&gt;\r\n&lt;/ul&gt;', 224900, 'draft'),
(35, 'MSI Geforce GTX 1050TI Gaming X 4G Graphics Card, 4GB 912-V335-035', 2, 4, '2018-02-08-product-15.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;GeForce GTX graphics cards are the most advanced ever created. Discover unprecedented performance, power efficiency, and next-generation gaming experiences. Just like in games, the exclusive MSI TORX 2.0 Fan technology uses the power of teamwork to allow the TWIN FROZR VI to achieve new levels of cool.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;768 Units Cores&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;1493 MHz / 1379 MHz (OC Mode)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;4GB GDDR5 (128-bit)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;DisplayPort (Version 1.4) / HDMI 2.0b / DL-DVI-D&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 27900, 'draft'),
(36, 'Seagate BarraCuda ST1000DM010 1TB Hard Drive Bare Drive', 4, 5, '61gs95fvcmL._SL1000_.jpg', '&lt;h2 style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-weight: 400; line-height: 24px; font-size: 24px; color: #212529; background-color: #ffffff; padding: 0px; font-family: DauphinPlain;&quot;&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; Versatile, Fast and Dependable&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; 64MB Cache&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; SATA 6.0Gb/s 3.5&quot;&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot; /&gt;&lt;span style=&quot;color: #444444; font-family: Roboto, sans-serif; font-size: 13px;&quot;&gt;&amp;bull; Multi-Tier Caching Technology&lt;/span&gt;&lt;/h2&gt;', 6300, 'draft'),
(37, 'Gigabyte H310M H 2.0 Intel H310 Ultra Durable Motherboard', 5, 6, '916y99h18LL._SL1500_.jpg', '&lt;h2 style=&quot;box-sizing: border-box; font-family: Roboto, sans-serif; font-weight: 300; line-height: 28px; color: #34495e; margin: 0px; font-size: 22px; padding-bottom: 15px; background-color: #ffffff;&quot;&gt;Intel H310 Ultra Durable motherboard with GIGABYTE 8118 Gaming LAN, Anti-Sulfur Resistor, Smart Fan 5, CEC 2019 ready&lt;/h2&gt;\r\n&lt;h2 style=&quot;box-sizing: border-box; margin: 0px 0px 10px; font-weight: 400; line-height: 24px; font-size: 24px; color: #212529; background-color: #ffffff; padding: 0px; font-family: DauphinPlain;&quot;&gt;&amp;nbsp;&lt;/h2&gt;\r\n&lt;ul style=&quot;box-sizing: border-box; margin: 0px; list-style: none; padding: 0px; color: #34495e; font-family: Roboto, sans-serif; font-size: 12px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Supports 8th&amp;nbsp;Gen Intel&amp;reg;&amp;nbsp;Core&amp;trade; Processors&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Dual Channel Non-ECC Unbuffered DDR4&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;8-Channel HD Audio with High Quality Audio Capacitors&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;GIGABYTE Exclusive 8118 Gaming LAN with Bandwidth Management&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;CEC 2019 Ready, Save Power With a Simple Click&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Smart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;All new GIGABYTE&amp;trade; APP Center, simple and easy use&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box;&quot;&gt;Anti-Sulfur Resistors Design&lt;/li&gt;\r\n&lt;/ul&gt;', 9500, 'publish'),
(38, 'Intel Core i5-9400F Desktop Processor - LGA1151', 1, 2, '1550232361_1459562.jpg', '&lt;div id=&quot;divProductDesc&quot; class=&quot;details-description&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; margin-top: 5px; margin-bottom: 2px; font-family: Roboto, sans-serif;&quot;&gt;9th Gen Intel Core i5-9400f desktop processor without processor graphics. Features Intel Turbo Boost Technology 2.0 and offers powerful performance for mainstream gaming and creating. Discrete graphics required. Thermal solution included in the box. Only compatible with 300 Series chipset based motherboard.&lt;/div&gt;\r\n&lt;div id=&quot;divProductHighlights&quot; class=&quot;details-description no-margin&quot; style=&quot;box-sizing: border-box; color: #444444; font-size: 13px; font-family: Roboto, sans-serif; margin: 5px 0px !important 2px 0px !important;&quot;&gt;\r\n&lt;ul id=&quot;ulHighlights&quot; class=&quot;highlights text-left&quot; style=&quot;box-sizing: border-box; margin: 0px 0px 10px; list-style-position: initial; list-style-image: initial; padding: 0px 0px 0px 15px;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;9M Cache, up to 4.10 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Processor Base Frequency 2.90 GHz&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;6 Cores/ 6 Threads&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; line-height: 18px;&quot;&gt;Discrete GPU required - No integrated graphics&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 28500, 'draft');

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
