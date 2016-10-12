-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: engr-cpanel-mysql.engr.illinois.edu
-- Generation Time: Dec 11, 2013 at 12:21 PM
-- Server version: 5.1.71
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wonderland_wonderland`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'sublease');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` text,
  `postContent` text,
  `userID` int(11) DEFAULT NULL,
  `parentPostID` int(11) DEFAULT NULL,
  `realEstateID` int(11) DEFAULT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `postTitle`, `postContent`, `userID`, `parentPostID`, `realEstateID`, `createdDate`) VALUES
(2, '$1325 / 3br - Available August 2014!! Close to Campus - 3 Bedroom House!!!', 'Don''t miss out on this great HOUSE near University of Illinois Engineering Department on the UofI campus! This property also has a screened in porch off of the garage perfect for barbecues!Full unfinished basement. Fridge has ice maker and ice water,washer and dryer included! Bedrooms wired with Ethernet connections! Hardwood floors throughout, new kitchen floor and a NEW bathroom.\r\nLocation: 710 W. Stoughton, Urbana, IL\r\nit''s NOT ok to contact this poster with services or other commercial interests', NULL, NULL, 2, '2013-11-20'),
(3, ' $599 / 1br - $599/Month.A Paid Utilities ', 'Paid Utilitie ', NULL, NULL, 3, '2013-11-20'),
(4, '$719 / 2br - 750ft² - Available in January... Short term leasing available.', 'This spacious apartment has a window in every room, offering natural sunlight all hours of the day. The bedrooms are spacious & have a nice amount of closet space. It''s on the ground level for those of you that don''t want to go up a bunch of stairs We also offer additional storage space in your building for those items you just aren''t sure what to do with. You''ll love that your parking space is right in front of your apartment, so you don''t have to walk a mile to get home!\r\n\r\nTree-lined streets will guide you to your new home in this beautiful southwest Champaign/Urbana location, home to a cosmopolitan mix of people from all over the world drawn together by the University of Illinois..\r\n\r\nSituated on 20 wooded acres, you can be as private or as active as you''d like. Hessel Park is just across the street offering summer concerts and other fun filled events, while miles of serene biking trails surround the community making exercising enjoyable! Hessel is located near the Champaign Unit 4 schools, and is also on all major bus lines. We''re also just minutes away from downtown Champaign, and also the U of I campus so you''ll always have something to do..\r\n\r\nWe''re a pet friendly community with no weight restrictions, which is kind of a big deal! Most places won''t allow those of you to have your pets over 25 pounds, but you don''t have to worry about that if you rent with us. We even have designated pet waste stations, and a bark park!\r\n\r\nReady to make this apartment home? You should be... Call Amanda at 217-356-4012 and we can discuss how to reserve this apartment. Check out our website for more information at http://www.mckinley.com, or even apply online now at https://apply.mckinley.com.\r\n\r\nWe''re a company that cares & you won''t be let down!\r\nLocation: Near Hessel Park\r\nit''s NOT ok to contact this poster with services or other commercial interests', NULL, NULL, 4, '2013-11-20'),
(8, 'c神的房子', '神殿', NULL, NULL, NULL, '2013-12-10'),
(10, NULL, '回复1', NULL, 2, NULL, '2013-12-10'),
(11, NULL, '回复2', NULL, 2, NULL, '2013-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE IF NOT EXISTS `post_category` (
  `postID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`postID`,`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `realEstate`
--

CREATE TABLE IF NOT EXISTS `realEstate` (
  `realEstateID` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `pricePerMonth` int(11) DEFAULT NULL,
  `noOfBedrooms` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`realEstateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `realEstate`
--

INSERT INTO `realEstate` (`realEstateID`, `startDate`, `endDate`, `pricePerMonth`, `noOfBedrooms`, `userID`, `address`, `createdDate`, `provider`) VALUES
(2, '0000-00-00', '0000-00-00', 1325, 3, 1, '710 W. Stoughton, Urbana, IL', '2013-11-20', 'Personal'),
(3, '2013-11-04', '2013-11-04', 599, 1, 1, '1212 West Anthony, Champaign, IL 61821', '2013-12-10', 'Personal'),
(4, '2013-11-19', '2013-11-23', 719, 2, 1, '1613 Valley Road # A1.', '2013-11-20', 'Personal'),
(8, '2013-12-03', '2013-12-03', 5000, 8, 1, '神.Street', '2013-12-10', '神'),
(10, NULL, NULL, NULL, NULL, 1, '2', '2013-12-10', NULL),
(11, NULL, NULL, NULL, NULL, 1, '2', '2013-12-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleID` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `description`) VALUES
('Account Administrator', 'Add, remove, and edit authors'),
('Content Editor', 'Add, remove, and edit jokes'),
('Site Administrator', 'Add, remove, and edit categories');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `active`, `password`, `phoneNo`) VALUES
(6, 'Alex', 'alex@gmail.com', 0, 'alex', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_ID` int(11) NOT NULL,
  `roleID` varchar(255) NOT NULL,
  PRIMARY KEY (`user_role_ID`,`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
