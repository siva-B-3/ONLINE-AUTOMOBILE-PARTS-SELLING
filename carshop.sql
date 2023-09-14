-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 09:11 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE IF NOT EXISTS `cart_tb` (
  `Id` int(10) NOT NULL,
  `Session_id` varchar(10000) NOT NULL,
  `Product_id` varchar(20) NOT NULL,
  `Quty` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tb`
--

INSERT INTO `cart_tb` (`Id`, `Session_id`, `Product_id`, `Quty`) VALUES
(1, 'kcurq9t34608rk70ro5frcft06', '1', '2'),
(2, '9si3b4uamgpo4o3j14e70ji626', '1', '1'),
(3, 'oreci8vlpd918od5stg4n0prd2', '13', '1'),
(4, 'oreci8vlpd918od5stg4n0prd2', '15', '1'),
(5, '7bjl2qdlcchb25pdk5qvila1g2', '14', '1'),
(6, 'fgrno4vctvekfacr6l2hkgcki2', '14', '1'),
(7, 'fgrno4vctvekfacr6l2hkgcki2', '15', '1'),
(8, '4bgmif6jeekvavu5mab83nn950', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categoty_tb`
--

CREATE TABLE IF NOT EXISTS `categoty_tb` (
  `Id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoty_tb`
--

INSERT INTO `categoty_tb` (`Id`, `name`) VALUES
(1, 'car_engine'),
(2, ' car_tire'),
(3, 'car_mirrors'),
(4, 'car_speaker'),
(5, 'car_transfer'),
(6, 'car_oils'),
(7, 'car_lights');

-- --------------------------------------------------------

--
-- Table structure for table `clients_tb`
--

CREATE TABLE IF NOT EXISTS `clients_tb` (
  `Id` int(10) NOT NULL,
  `cmp_name` varchar(30) NOT NULL,
  `Cmp_Id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `Id` int(10) NOT NULL,
  `from_user` varchar(100) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `feedback` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `Id` int(20) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Comments` varchar(3000) NOT NULL,
  `Sessionid` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gust_tb`
--

INSERT INTO `gust_tb` (`Id`, `Fname`, `Lname`, `Mail`, `Phone`, `Address1`, `Address2`, `City`, `Postal`, `Comments`, `Sessionid`) VALUES
(1, 'rko', 'ragu', 'ragurko@gmail.com', '234234', '', '', '', '', 'dfsaf', 'oreci8vlpd918od5stg4n0prd2');

-- --------------------------------------------------------

--
-- Table structure for table `order_register_tb`
--

CREATE TABLE IF NOT EXISTS `order_register_tb` (
  `Id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `Session_id` varchar(100) NOT NULL,
  `Commends` varchar(10000) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Register'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `Id` int(10) NOT NULL,
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
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`Id`, `Product_name`, `Brand`, `Product_code`, `Stock`, `Price`, `Description`, `Image1`, `Iamge2`, `Image3`, `Image4`, `Type`) VALUES
(14, 'tire', 'MRF', 'PCODE14', '5', '600', 'Tread design optimized for tyre life, comfortable and quiet ride.\r\nBetter grip and traction due to curvilinear tread pattern.', 'mrf.png', 'mrf.png', 'mrf.png', 'mrf.png', ' car_tire'),
(15, 'light', 'sony', 'PCODE15', '5', '350', 'light', 'sdf.jpg', 'sdf.jpg', 'sdf.jpg', 'sdf.jpg', 'car_lights'),
(16, ' engine', 'Datsun GO T', 'PCODE16', '2', '1400', ' Being a leader in this industry, ', '81x79gvcW5L._SL1500_.jpg', '81x79gvcW5L._SL1500_.jpg', '81x79gvcW5L._SL1500_.jpg', '81x79gvcW5L._SL1500_.jpg', 'car_engine'),
(17, 'mirrors', '1A Auto', 'PCODE17', '4', '150', '2007-13 Chevy Avalanche 1500 Off-Road Package Power Heated Chrome Cap Manual-Folding Mirror Driver Side', 'mirror.jpg', 'mirror.jpg', 'mirror.jpg', 'mirror.jpg', 'car_mirrors'),
(18, 'speaker', 'New Kicker', 'PCODE18', '4', '250', 'Kicker 43DSC69304 D-Series 6x9" 360 Watt 4-Ohm 3-Way Car Audio Coaxial Speakers\r\nPeak: 360 watts\r\nRMS: 70 watts', 'speaker.jpg', 'speaker.jpg', 'speaker.jpg', 'speaker.jpg', 'car_speaker'),
(19, 'oils', 'Castrol 03096', 'PCODE19', '2', '500', 'Castrol GTX ULTRACLEAN with its proprietary sludge buster - is our cleanest GTX ever', 'oils.jpg', 'oils.jpg', 'oils.jpg', 'oils.jpg', 'car_oils'),
(20, 'transfer', 'Otium', 'PCODE20', '3', '250', 'ust plug the Otium best Bluetooth FM Transmitter in the car cigarette lighter, control it and the car radio at the same frequency (frequency range from 87.5 to 108 Mhz). Then let your phone/audio player connects this FM music gear via bluetooth/audio line.', 'tran.jpg', 'tran.jpg', 'tran.jpg', 'tran.jpg', 'car_transfer');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_tb`
--

CREATE TABLE IF NOT EXISTS `subcat_tb` (
  `Id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

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
  `Id` int(10) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address1` varchar(300) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Contact` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register_tb`
--

INSERT INTO `user_register_tb` (`Id`, `Fname`, `Lname`, `Email`, `Password`, `Address1`, `Address2`, `City`, `Postal`, `Contact`) VALUES
(1, 'manikandan', 'N', 'mani.ns10@gmail.com', 'nmkmscss', 'Pollachi', 'pollachi', 'cbe', '641004', '9876543210'),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categoty_tb`
--
ALTER TABLE `categoty_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `clients_tb`
--
ALTER TABLE `clients_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gust_tb`
--
ALTER TABLE `gust_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_register_tb`
--
ALTER TABLE `order_register_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcat_tb`
--
ALTER TABLE `subcat_tb`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_register_tb`
--
ALTER TABLE `user_register_tb`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tb`
--
ALTER TABLE `cart_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categoty_tb`
--
ALTER TABLE `categoty_tb`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clients_tb`
--
ALTER TABLE `clients_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gust_tb`
--
ALTER TABLE `gust_tb`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_register_tb`
--
ALTER TABLE `order_register_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subcat_tb`
--
ALTER TABLE `subcat_tb`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `user_register_tb`
--
ALTER TABLE `user_register_tb`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
