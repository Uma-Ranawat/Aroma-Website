-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 10:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aroma`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Pincode` varchar(6) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customorder`
--

CREATE TABLE `customorder` (
  `CustomOrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `Text` varchar(50) DEFAULT NULL,
  `SizeID` int(11) DEFAULT NULL,
  `Image` blob,
  `Quantity` int(11) NOT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `PhoneModel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `ShippedDate` date DEFAULT NULL,
  `ReceivedDate` date DEFAULT NULL,
  `ShipAddress` varchar(100) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `Payment_Received` varchar(1) NOT NULL DEFAULT 'n',
  `Total_Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Order_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(70) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `UnitPrice` float NOT NULL,
  `Quantity_in_Stock` int(11) NOT NULL,
  `ProductImage` blob NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Customizable` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `SizeID` int(11) NOT NULL,
  `Size` varchar(6) NOT NULL,
  `Chest` varchar(10) NOT NULL,
  `Waist` varchar(10) NOT NULL,
  `Length` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tshirtdetails`
--

CREATE TABLE `tshirtdetails` (
  `ProductID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserType` int(11) NOT NULL DEFAULT '2',
  `MobileNumber` varchar(14) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Pincode` varchar(6) DEFAULT NULL,
  `code` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Password`, `Email`, `UserType`, `MobileNumber`, `Address`, `Pincode`, `code`) VALUES
(1, 'Uma', 'Ranawat', '835606357c7c0d9157bb989121f79eab', 'umaranawat@yahoo.com', 2, NULL, NULL, NULL, '587598972');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Pincode`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customorder`
--
ALTER TABLE `customorder`
  ADD PRIMARY KEY (`CustomOrderID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `SizeID` (`SizeID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `Pincode` (`Pincode`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`SizeID`);

--
-- Indexes for table `tshirtdetails`
--
ALTER TABLE `tshirtdetails`
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `SizeID` (`SizeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Pincode` (`Pincode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customorder`
--
ALTER TABLE `customorder`
  MODIFY `CustomOrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `SizeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `customorder`
--
ALTER TABLE `customorder`
  ADD CONSTRAINT `customproduct` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `customsize` FOREIGN KEY (`SizeID`) REFERENCES `size` (`SizeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `customuser` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `orderarea` FOREIGN KEY (`Pincode`) REFERENCES `area` (`Pincode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderuser` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails` FOREIGN KEY (`OrderID`) REFERENCES `order` (`OrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orderproduct` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `tshirtdetails`
--
ALTER TABLE `tshirtdetails`
  ADD CONSTRAINT `size` FOREIGN KEY (`SizeID`) REFERENCES `size` (`SizeID`),
  ADD CONSTRAINT `tshirtproduct` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `pincode` FOREIGN KEY (`Pincode`) REFERENCES `area` (`Pincode`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
