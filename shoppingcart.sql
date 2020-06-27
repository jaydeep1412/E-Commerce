-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 04:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(20) NOT NULL,
  `name` varchar(16) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `fullname`, `username`, `password`) VALUES
(1, 'nkl', '', 'knkl', '123'),
(2, 'jbjb', '', 'jbbb', '123'),
(4, 'vaibhav', 'Vaibhav B. Gelot', 'abcd', '1234'),
(5, 'jaydeep', 'Jaydeep Ram', 'abcd', '123'),
(12, 'kkklklkl', '', 'll;l;l;', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(50) NOT NULL,
  `addrid` int(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `taluko` varchar(100) NOT NULL,
  `pinno` int(50) NOT NULL,
  `mobileno` decimal(50,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `addrid`, `street`, `city`, `dist`, `taluko`, `pinno`, `mobileno`) VALUES
(4, 1, 'AT PO BILWANI', 'LIMDI', 'DAHOD', 'JHALOD', 389180, '7874325018'),
(4, 7, 'sector 2/c plot no 847/1', 'gandhinagar', 'gandhinagar', 'gandhinagar', 3820007, '7874325018');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `qty`) VALUES
(4, 2, 1),
(4, 3, 3),
(4, 1, 1),
(5, 2, 1),
(4, 4, 2),
(4, 5, 1),
(5, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offerbar`
--

CREATE TABLE `offerbar` (
  `ofid` int(10) NOT NULL,
  `ofname` varchar(255) NOT NULL,
  `ofpath` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerbar`
--

INSERT INTO `offerbar` (`ofid`, `ofname`, `ofpath`) VALUES
(1, 'beauty &grooming sale', '4.jpg'),
(2, 'moto G5s plus', '2.jpg'),
(3, 'sports fest', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(20) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `ppath` varchar(255) NOT NULL,
  `pactulprice` varchar(255) NOT NULL,
  `pcurrentprice` varchar(255) NOT NULL,
  `pdiscount` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `ppath`, `pactulprice`, `pcurrentprice`, `pdiscount`, `pdescription`) VALUES
(1, 'Fashius Men Brown Genuine Leather Belt', '22.jpeg', '700', '268', '61% off', 'Genuine Leather Belt with Imported specially manufactured Buckle with Brand Logo.'),
(2, 'Lois Caron LCS-4027 Analog Watch - For Men', '11.jpeg', '1,199', '399', '66% off', 'General\nStyle Code :LCS-4027\nOccasion   :Casual, Party-Wedding,Formal\nWatch Type : Wrist Watch\nPack of    : 1\nMechanism  :  Quartz'),
(3, 'Epic Ink cmb005 Wayfarer,Aviator Sunglasses', '33.jpeg', '1,494', '249', '83% off', 'MaFs Brings to you must-have, stylish polarised\r\nsunglasses that offer 100% protection against harmful UV rays. \r\nMade of polycarbonate material our products are ergonomically \r\ndesigned to give you a comfortable head hugging fit.\r\n'),
(4, 'Samsung Galaxy J7 Prime Gold (16GB)', '44.jpg', '16,900', '11890', '29% off', 'Samsung Galaxy J7 Prime Full Phone Specifications: 5.5 Inch Full HD IPS Display (1080 x 1920 Pixels, 401 ppi) 2.5D Arc Scratch Resistant Corning Gorilla Glass 4 Android 6.0 Marshmallow OS with TouchWiz UI 1.6GHz Octa core.'),
(5, 'Ambrane P-1122 NA 10000 mAh Power Bank', '44.jpeg', '1,799', '779 ', '56% off', ''),
(6, 'HP 15.6 inch Laptop Backpack  (Black)', '55.jpeg', '1,079', '450 ', '58% off', ''),
(7, 'WildHorn Men Black Genuine Leather Wallet  (8 Card Slots)', '66.jpeg', '1,299', '599', '53% off', ''),
(8, 'Tripr Printed Men V-neck Multicolor T-Shirt', '88.jpeg', '899', '399', '55% off', '');

-- --------------------------------------------------------

--
-- Table structure for table `subproduct`
--

CREATE TABLE `subproduct` (
  `pid` int(10) NOT NULL,
  `subpid` int(10) NOT NULL,
  `subppath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subproduct`
--

INSERT INTO `subproduct` (`pid`, `subpid`, `subppath`) VALUES
(2, 1, '111.jpg'),
(2, 2, '112.jpg'),
(2, 3, '113.jpg'),
(1, 1, '221.jpg'),
(1, 2, '222.jpg'),
(1, 3, '223.jpg'),
(3, 1, '331.jpg'),
(3, 2, '332.jpg'),
(3, 3, '333.jpg'),
(4, 1, '441.jpg'),
(4, 2, '442.jpg'),
(4, 3, '443.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addrid`,`street`,`city`,`dist`,`taluko`,`pinno`);

--
-- Indexes for table `offerbar`
--
ALTER TABLE `offerbar`
  ADD PRIMARY KEY (`ofid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `subproduct`
--
ALTER TABLE `subproduct`
  ADD PRIMARY KEY (`pid`,`subpid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addrid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `offerbar`
--
ALTER TABLE `offerbar`
  MODIFY `ofid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
