-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 09:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gohevvy`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_items`
--

CREATE TABLE IF NOT EXISTS `sys_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceid` text NOT NULL,
  `name` mediumtext NOT NULL,
  `unit` varchar(100) NOT NULL DEFAULT '',
  `sales_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `item_number` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` enum('Service','Product') NOT NULL,
  `track_inventroy` enum('Yes','No') NOT NULL DEFAULT 'No',
  `negative_stock` enum('Yes','No') NOT NULL DEFAULT 'No',
  `available` int(11) NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `added` date NOT NULL DEFAULT '0000-00-00',
  `last_sold` date NOT NULL DEFAULT '0000-00-00',
  `e` mediumtext NOT NULL,
  `pid` varchar(30) DEFAULT NULL,
  `cf1` text NOT NULL,
  `cf2` text NOT NULL,
  `cf3` text NOT NULL,
  `cf2_total` text NOT NULL,
  `cf3_total` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1095 ;

--
-- Dumping data for table `sys_items`
--

INSERT INTO `sys_items` (`id`, `invoiceid`, `name`, `unit`, `sales_price`, `item_number`, `description`, `type`, `track_inventroy`, `negative_stock`, `available`, `status`, `added`, `last_sold`, `e`, `pid`, `cf1`, `cf2`, `cf3`, `cf2_total`, `cf3_total`) VALUES
(1027, '', 'ss', '1', '22.00', '1', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1028, '', 'sa', '1', '0.00', '1', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1029, '', 's', '1', '2324.00', '1029', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1035, '', 'asd', '1', '11.00', '1035', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1036, '', 'qwe', '1', '222.00', '1036', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1037, '', 'dd', '1', '1000.00', '1037', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1038, '', 'ds', '1', '0.00', '1038', '', 'Service', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '', ''),
(1064, '', 'asif cre8', '1', '2000.00', '1064', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', '', '', '1000', '2000', '1000', '2000'),
(1078, '1051', 'a1', '1', '100.00', '1065', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', '', '', '1000', '2000', '1000', '2000'),
(1079, '1053', 'a2', '2', '1000.00', '1079', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', '', '', '1000', '2000', '2000', '4000'),
(1080, '', 's1', '1', '0.00', '1080', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1081, '', 's2', '1', '0.00', '1081', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1082, '', 's3', '1', '0.00', '1082', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1083, '', 's4', '1', '0.00', '1083', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1084, '', 's5', '1', '0.00', '1084', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1085, '', 's6', '1', '0.00', '1085', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1086, '', 's7', '1', '0.00', '1086', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1087, '', 's8', '1', '0.00', '1087', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1088, '', 's9', '1', '0.00', '1088', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1089, '', 'b1', '1', '0.00', '1089', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1090, '', 'b2', '2', '0.00', '1090', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1091, '', 'b3', '1', '0.00', '1091', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1092, '', 'b4', '1', '0.00', '1092', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0'),
(1093, '', 'b5', '1', '0.00', '1093', '', 'Product', 'No', 'No', 0, 'Active', '0000-00-00', '0000-00-00', '', NULL, '', '', '', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
