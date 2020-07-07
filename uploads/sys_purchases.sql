-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 06:30 AM
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
-- Table structure for table `sys_purchases`
--

CREATE TABLE IF NOT EXISTS `sys_purchases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `account` varchar(200) NOT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subtotal` decimal(10,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxname` varchar(100) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `tax2` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxrate` decimal(10,2) NOT NULL,
  `taxrate2` decimal(10,2) NOT NULL,
  `status` text NOT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `status` (`status`(3))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1016 ;

--
-- Dumping data for table `sys_purchases`
--

INSERT INTO `sys_purchases` (`id`, `userid`, `account`, `cn`, `invoicenum`, `date`, `duedate`, `datepaid`, `subtotal`, `discount_type`, `discount_value`, `discount`, `credit`, `taxname`, `tax`, `tax2`, `total`, `taxrate`, `taxrate2`, `status`, `paymentmethod`, `notes`, `vtoken`, `ptoken`, `r`, `nd`) VALUES
(1000, 1010, 'Sduj', '', '', '2016-11-03', '2016-11-03', '0000-00-00 00:00:00', '444.00', 'p', '0.00', '0.00', '444.00', '', '0.00', '0.00', '444.00', '0.00', '0.00', 'Paid', '', '', '9400350215', '3796471486', '0', '2016-11-03'),
(1001, 1010, 'Sduj', '', '', '2016-11-03', '2016-11-03', '0000-00-00 00:00:00', '144.00', 'p', '0.00', '0.00', '144.00', '', '0.00', '0.00', '144.00', '0.00', '0.00', 'Paid', '', '', '4162588201', '6059486637', '0', '2016-11-03'),
(1002, 1010, 'Sduj', '', '', '2016-11-03', '2016-11-03', '0000-00-00 00:00:00', '484.00', 'p', '0.00', '0.00', '352.00', '', '0.00', '0.00', '484.00', '0.00', '0.00', 'Paid', '', '', '3110984178', '8525512721', '0', '2016-11-03'),
(1003, 1011, 'khjhnk', '', '', '2016-11-30', '2016-11-30', '0000-00-00 00:00:00', '77.00', 'p', '0.00', '0.00', '77.00', '', '0.00', '0.00', '77.00', '0.00', '0.00', 'Paid', '', '', '4496237975', '4740970334', '0', '2016-11-30'),
(1004, 1011, 'khjhnk', '', '', '2016-11-30', '2016-11-30', '0000-00-00 00:00:00', '2442.00', 'p', '0.00', '0.00', '2442.00', '', '0.00', '0.00', '2442.00', '0.00', '0.00', 'Paid', '', '', '9105931139', '8032668962', '0', '2016-11-30'),
(1005, 1011, 'khjhnk', '', '', '2017-03-11', '2017-03-11', '0000-00-00 00:00:00', '726.00', 'p', '0.00', '0.00', '726.00', '', '0.00', '0.00', '726.00', '0.00', '0.00', 'Paid', '', '', '1199144141', '1167973552', '0', '2017-03-11'),
(1006, 1011, 'khjhnk', '', '', '2017-03-11', '2017-03-11', '0000-00-00 00:00:00', '12.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '12.00', '0.00', '0.00', 'Unpaid', '', '', '5839239402', '8045457771', '0', '2017-03-11'),
(1007, 1011, 'khjhnk', '', '', '2017-03-11', '2017-03-11', '0000-00-00 00:00:00', '121.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '121.00', '0.00', '0.00', 'Unpaid', '', '', '3930187605', '1518227924', '0', '2017-03-11'),
(1008, 1011, 'khjhnk', '', '', '2017-03-11', '2017-03-11', '0000-00-00 00:00:00', '121.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '121.00', '0.00', '0.00', 'Unpaid', '', '', '9433252098', '2833268611', '0', '2017-03-11'),
(1011, 4, 'asif cre8', '', '', '2019-05-13', '2019-05-13', '0000-00-00 00:00:00', '15.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '15.00', '0.00', '0.00', 'Unpaid', '', '', '7041751600', '3241692379', '0', '2019-05-13'),
(1012, 5, 'cre8', '', '', '2019-05-13', '2019-05-13', '0000-00-00 00:00:00', '15.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '15.00', '0.00', '0.00', 'Unpaid', '', '', '0597218368', '6213978864', '0', '2019-05-13'),
(1015, 5, 'cre8', '', '', '2019-05-13', '2019-05-13', '0000-00-00 00:00:00', '15.00', 'p', '0.00', '0.00', '0.00', '', '0.00', '0.00', '15.00', '0.00', '0.00', 'Unpaid', '', '', '0100410263', '3244569115', '0', '2019-05-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
