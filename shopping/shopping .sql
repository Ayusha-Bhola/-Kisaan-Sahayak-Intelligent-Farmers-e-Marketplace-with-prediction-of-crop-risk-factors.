-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 05:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerdetails`
--

CREATE TABLE `buyerdetails` (
  `id` int(11) NOT NULL,
  `bid` int(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `success` int(1) NOT NULL,
  `userid` int(11) NOT NULL,
  `country` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerdetails`
--

INSERT INTO `buyerdetails` (`id`, `bid`, `product_id`, `name`, `phone`, `email`, `product`, `amount`, `success`, `userid`, `country`, `state`, `district`, `address`) VALUES
(11, 4, 37, 'AYUSHA SANDEEP BHOLA', '+91917548822', 'bholaayusha123@gmail.com', 'Fresh Green Grapes', 300, 1, 36, '', '', '', ''),
(14, 0, 46, 'lata umaknt shrigandhi', '+91887744557', 'bholavandana5@gmail.com', 'Green Avocado', 1550, 1, 41, 'India', 'Manipur', 'Thoubal', 'thoubal'),
(15, 0, 37, 'madhav raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Fresh Green Grapes', 300, 1, 36, 'India', 'Maharashtra', 'Mumbai City', 'Chembur'),
(16, 0, 41, 'shrutika chendake', '+91887766788', 'schendake@gmail.com', 'Watermelon', 150, 1, 41, 'India', 'Maharashtra', 'Mumbai City', 'Chembur'),
(17, 0, 42, 'savita raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Mango', 1250, 1, 30, 'India', 'Gujarat', 'Chhota Udaipur', 'UDAIPUR'),
(18, 0, 41, 'akshata machal', '+91906777997', 'akshatamachal@gmail.com', 'Watermelon', 150, 1, 30, 'India', 'Karnataka', 'Bangalore Rural', 'bangalore'),
(19, 0, 40, 'madhav raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Fresh Green Guava', 300, 1, 30, 'India', 'Jammu and Kashmir', 'Jammu', 'jammu'),
(20, 5100362, 43, 'Meghaa karjol', '+91917548888', 'meghakarjol@gmail.com', 'Blackberries', 450, 1, 30, 'India', 'Kerala', 'Alappuzha', '10385 plot no 30/68'),
(21, 2147483647, 37, 'madhav raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Fresh Green Grapes', 300, 1, 36, 'India', 'Goa', 'North Goa', 'north goa'),
(22, 0, 37, 'Rohan Dasari', '+91917548822', 'rohandasariii@gmail.com', 'Fresh Green Grapes', 300, 1, 36, 'India', 'Gujarat', 'Ahmedabad', '10385 plot no 30/68 ahmedabad'),
(23, 0, 42, 'Nagraj Gajjam', '+91992234022', 'nnagrajgajjam@gmail.com', 'Mango', 1450, 1, 30, 'India', 'Telangana', 'Peddapalli', 'peddapalli'),
(24, 0, 39, 'madhav raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Banana', 100, 1, 30, 'India', 'Maharashtra', 'Ahmednagar', 'padma peth solapur'),
(25, 166, 39, 'madhav raju gujja', '+91942358835', 'bholavandana5@gmail.com', 'Banana', 100, 1, 30, 'India', 'Maharashtra', 'Ahmednagar', 'padma peth solapur'),
(26, 0, 39, 'vandana sandeep bhola', '+91942358835', 'bholavandana5@gmail.com', 'Banana', 100, 1, 30, 'India', 'Maharashtra', 'Ahmednagar', '68 padma nagar'),
(27, 64, 46, 'lata umaknt shrigandhi', '+91942358835', 'bholavandana5@gmail.com', 'Green Avocado', 1550, 1, 41, 'India', 'Maharashtra', 'Mumbai City', '223/24 raviwar peth solapur'),
(28, 0, 39, 'huma qureshi', '+91998877665', 'huma@gmail.com', 'Banana', 100, 1, 30, 'India', 'Meghalaya', 'West Khasi Hills', 'west khasi hills,meghalaya');

-- --------------------------------------------------------

--
-- Table structure for table `farmerdetails`
--

CREATE TABLE `farmerdetails` (
  `fid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmerdetails`
--

INSERT INTO `farmerdetails` (`fid`, `fname`, `cname`, `email`, `phone`, `country`, `state`, `district`, `address`) VALUES
(25, 'Vandana Bhola', 'krishna enterprises', 'bholavandana5@gmail.com', '9423588352', 'India', 'Maharashtra', 'Solapur', '68 padma nagar'),
(30, 'Sandeep Bhola', 'vishwa traders', 'sandeepbhola5@gmail.com', '9175488222', 'India', 'Jammu and Kashmir', 'Anantnag', 'anantnag'),
(36, 'Ayusha Bhola', 'ASB', 'bholavandana8888@gmail.com', '9175488228', 'India', 'Maharashtra', 'Ahmednagar', '68 padma nagar'),
(37, 'Kamal Bhola', 'BholaTraders', 'kamal@gmail.com', '9420635262', 'India', 'Maharashtra', 'Mumbai City', 'Khamatipuram,Bombay'),
(38, 'Tanisha Bhola', 'BholaTraders', 'bholayusha5@gmail.com', '9175488333', 'India', 'Maharashtra', 'Mumbai City', 'Chembur'),
(39, 'ayusha', 'ASB', 'bholaayusha@gmail.com', '9175488666', 'India', 'Maharashtra', 'Nanded', 'padma nagar'),
(40, 'Shruti chendake', 'Chendake Traders', 'schendake@gmail.com', '8877557744', 'india', 'punjab', 'delhi', 'delhi'),
(41, 'nagraj gajjam', 'Gajjam Shop', 'nagrajgajjam@gmail.com', '9922340229', 'India', 'Punjab', 'Amritsar', 'amritsar');

-- --------------------------------------------------------

--
-- Table structure for table `googlemap`
--

CREATE TABLE `googlemap` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `buyer_name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `googlemap`
--

INSERT INTO `googlemap` (`id`, `buyer_id`, `userid`, `buyer_name`, `address`, `country`, `state`, `district`, `product_name`) VALUES
(1, 23, 30, 'Nagraj Gajjam', 'peddapalli', 'India', 'Telangana', 'Peddapalli', 'Mango'),
(3, 17, 30, 'savita raju gujja', 'UDAIPUR', 'India', 'Gujarat', 'Chhota Udaipur', 'Mango'),
(4, 18, 30, 'akshata machal', 'bangalore', 'India', 'Karnataka', 'Bangalore Rural', 'Watermelon'),
(5, 19, 30, 'madhav raju gujja', 'jammu', 'India', 'Jammu and Kashmir', 'Jammu', 'Fresh Green Guava'),
(6, 20, 30, 'Meghaa karjol', '10385 plot no 30/68', 'India', 'Kerala', 'Alappuzha', 'Blackberries');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `myid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `topcategory` varchar(256) NOT NULL,
  `subcategory` varchar(256) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brandname` varchar(256) NOT NULL,
  `weightvolume` varchar(256) NOT NULL,
  `costprice` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `EAN` int(20) NOT NULL,
  `qauntity` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `topcategory`, `subcategory`, `product_name`, `brandname`, `weightvolume`, `costprice`, `product_price`, `EAN`, `qauntity`, `product_image`, `userid`) VALUES
(37, 'fruits', 'Grapes', 'Fresh Green Grapes ', 'Royal Grapes', '1000', '200', '250', 0, '49', 'grapes.jpeg', 36),
(39, 'fruits', 'Banana', 'Banana', 'Bhola Traders', '1', '40', '50', 0, '148', 'feature-2.jpg', 30),
(40, 'fruits', 'Guava', 'Fresh Green Guava', 'Bhola Traders', '1', '200', '250', 0, '149', 'feature-3.jpg', 30),
(41, 'fruits', 'other', 'Watermelon', 'Bhola Traders', '1', '80', '100', 0, '149', 'feature-4.jpg', 30),
(42, 'fruits', 'Mango', 'Mango', 'Bhola Traders', '1', '1200', '1400', 78452288, '148', 'feature-7.jpg', 30),
(43, 'fruits', 'Blackberries', 'Blackberries', 'Bhola Traders', '150 g', '200', '400', 0, '500', 'feature-5.jpg', 30),
(44, 'fruits', 'Apple', 'Fresh Apples', 'Bhola Traders', '1', '150', '200', 0, '149', 'feature-8.jpg', 30),
(45, 'fruits', 'Orange', 'juicy Orange', 'Rosta', '1', '200', '400', 0, '149', 'cat-1.jpg', 41),
(46, 'fruits', 'Avocado', 'Green Avocado', 'Royaal', '150 g', '1200', '1500', 0, '149', 'download.jpeg', 41),
(47, 'fruits', 'Apple', 'Red Apple', 'Juicy', '1', '100', '250', 0, '149', 'feature-8.jpg', 41),
(48, 'vegetables', 'Broccoli', 'Broccoli', 'Bhola Traders', '1', '200', '400', 0, '149', 'b.jpg', 30),
(49, 'vegetables', 'Tomato*', 'Tomato', 'virat', '1', '20', '30', 0, '100', 'k.jpg', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `googlemap`
--
ALTER TABLE `googlemap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`myid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `googlemap`
--
ALTER TABLE `googlemap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `myid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `farmerdetails` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
