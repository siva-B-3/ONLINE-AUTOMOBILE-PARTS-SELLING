-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 08:25 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE IF NOT EXISTS `cart_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Session_id` varchar(10000) NOT NULL,
  `Product_id` varchar(20) NOT NULL,
  `Quty` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart_tb`
--

INSERT INTO `cart_tb` (`Id`, `Session_id`, `Product_id`, `Quty`) VALUES
(1, 'kcurq9t34608rk70ro5frcft06', '1', '2'),
(2, '9si3b4uamgpo4o3j14e70ji626', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categoty_tb`
--

CREATE TABLE IF NOT EXISTS `categoty_tb` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categoty_tb`
--

INSERT INTO `categoty_tb` (`Id`, `name`) VALUES
(1, 'Beverages'),
(2, 'Edible oils and Ghee'),
(3, 'Grocery'),
(4, 'House hold'),
(5, 'Instant Foods'),
(6, 'Personal Care'),
(7, 'Spices and Masala');

-- --------------------------------------------------------

--
-- Table structure for table `clients_tb`
--

CREATE TABLE IF NOT EXISTS `clients_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(30) NOT NULL,
  `Cmp_Id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients_tb`
--

INSERT INTO `clients_tb` (`Id`, `cmp_name`, `Cmp_Id`, `Password`, `Logo`, `Mail`, `Address`, `Contact`) VALUES
(1, 'Tata', '', '', 'download (2).jpg', 'TAT@GMAIL.COM', 'Coimbatore', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE IF NOT EXISTS `feedback_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `from_user` varchar(100) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `feedback` varchar(5000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_tb`
--

INSERT INTO `feedback_tb` (`Id`, `from_user`, `Date`, `feedback`) VALUES
(1, 'mani.ns10@gmail.com', '13/03/2015', 'thanks for your service');

-- --------------------------------------------------------

--
-- Table structure for table `gust_tb`
--

CREATE TABLE IF NOT EXISTS `gust_tb` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Comments` varchar(3000) NOT NULL,
  `Sessionid` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gust_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_register_tb`
--

CREATE TABLE IF NOT EXISTS `order_register_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `Session_id` varchar(100) NOT NULL,
  `Commends` varchar(10000) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Register',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_register_tb`
--

INSERT INTO `order_register_tb` (`Id`, `user_id`, `Session_id`, `Commends`, `Status`) VALUES
(1, 'mani.ns10@gmail.com', 'kcurq9t34608rk70ro5frcft06', 'Send soon  ', 'Send');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE IF NOT EXISTS `product_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Product_code` varchar(20) NOT NULL,
  `Stock` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Image1` varchar(100) NOT NULL,
  `Iamge2` varchar(100) NOT NULL,
  `Image3` varchar(100) NOT NULL,
  `Image4` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`Id`, `Product_name`, `Brand`, `Product_code`, `Stock`, `Price`, `Description`, `Image1`, `Iamge2`, `Image3`, `Image4`, `Type`) VALUES
(1, 'Sugur', 'Tata', 'PCODE1', '100', '25/Kg', 'Good', 'download (1).jpg', 'download (2).jpg', 'download (3).jpg', 'download.jpg', 'Grocery'),
(2, 'sa', 'asa', 'PCODE2', '10', '100', '100', 'download (1).jpg', 'download (3).jpg', 'download (2).jpg', 'download.jpg', 'Grocery'),
(3, 'asa', 'asas', 'PCODE3', 'sas', 'sas', 'asas', 'download (2).jpg', 'download (3).jpg', 'download (2).jpg', 'download (4).jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_tb`
--

CREATE TABLE IF NOT EXISTS `subcat_tb` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_id` int(50) NOT NULL,
  `Name` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `subcat_tb`
--

INSERT INTO `subcat_tb` (`Id`, `cat_id`, `Name`) VALUES
(1, 1, 'Coffee Powder'),
(2, 1, 'Energy and Health Drink'),
(3, 1, 'Soft Drinks and Water'),
(4, 1, 'Tea Powder'),
(5, 2, 'Ghee'),
(6, 2, 'Gingelly Oil'),
(7, 2, 'Ground nut and mustard Oil'),
(8, 2, 'Olive Oil'),
(9, 2, 'Rice Bran Oil'),
(10, 2, 'Sun Flower Oil'),
(11, 2, 'Vanaspathi'),
(12, 3, 'Atta and Flour'),
(13, 3, 'Dals and Pulses'),
(14, 3, 'Dry Fruits'),
(15, 3, 'Pickles'),
(16, 3, 'Rices'),
(17, 3, 'Salt and Sugar'),
(18, 4, 'Air Fresheners'),
(19, 4, 'Cleaning Products'),
(20, 4, 'Detergents'),
(21, 4, 'Insert Repellents'),
(22, 4, 'Kitchen Needs'),
(23, 4, 'Pooja'),
(24, 5, 'Biscuits'),
(25, 5, 'Chocolates'),
(26, 5, 'Honey,Jams and Spreads'),
(27, 5, 'Quick Foods'),
(28, 5, 'Sauces and Ketchup'),
(29, 5, 'Snacks'),
(30, 6, 'Baby Care'),
(31, 6, 'Dental Care'),
(32, 6, 'Deo,Talc and Perfumes'),
(33, 6, 'Hair Care'),
(34, 6, 'Personal Hygiene'),
(36, 7, 'Whole Spices'),
(37, 7, 'Spices Powdered'),
(38, 7, 'Spices Pasted');

-- --------------------------------------------------------

--
-- Table structure for table `user_register_tb`
--

CREATE TABLE IF NOT EXISTS `user_register_tb` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address1` varchar(300) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_register_tb`
--

INSERT INTO `user_register_tb` (`Id`, `Fname`, `Lname`, `Email`, `Password`, `Address1`, `Address2`, `City`, `Postal`, `Contact`) VALUES
(1, 'manikandan', 'N', 'mani.ns10@gmail.com', 'nmkmscss', 'Pollachi', 'pollachi', 'cbe', '641004', '9876543210'),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '');
