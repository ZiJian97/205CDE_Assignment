-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`ID`, `username`, `password`) VALUES
(1, 'testing', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `email`, `phone`, `message`) VALUES
('111', '111', '111', '111', '111'),
('Chin', 'Zi Jian', 'blabla@gmail.com', '0123456789', 'nice website');

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `ID` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `quantity` int(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `phone_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_form`
--

INSERT INTO `order_form` (`ID`, `customer_name`, `quantity`, `address`, `contact_number`, `phone_id`, `customer_id`) VALUES
(1, 'Chin ZI Jian', 3, 'penang', '0123456789', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phone_list`
--

CREATE TABLE `phone_list` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_list`
--

INSERT INTO `phone_list` (`ID`, `name`, `category`, `quantity`, `price`, `image`) VALUES
(1, 'Iphone7', 'Apple', 100, 2749, 'iphone7.png'),
(2, 'Iphone7 plus', 'Apple', 100, 3349, 'iphone7plus.png'),
(3, 'Iphone8', 'Apple', 100, 3649, 'iphone8.jpg'),
(4, 'Iphone8 Plus', 'Apple', 100, 4149, 'iphone8plus.jpg'),
(5, 'IphoneX', 'Apple', 100, 5149, 'iphonex.jpg'),
(6, 'note8', 'Samsung', 100, 3499, 'note8.png'),
(7, 'S8', 'Samsung', 100, 2399, 's8.jpg'),
(8, 'S8 Plus', 'Samsung', 100, 2699, 's8plus.jpg'),
(9, 'J7 Plus', 'Samsung', 100, 1269, 'j7plus.jpg'),
(10, 'J7 Pro', 'Samsung', 100, 1299, 'j7pro.jpg'),
(11, 'Xperia XZ Premium', 'Sony', 100, 3099, 'xzpremium.jpg'),
(12, 'Xperia X1 Compact', 'Sony', 100, 2099, 'xz1compact.jpg'),
(13, 'Xperia XA1 Plus', 'Sony', 100, 1499, 'xa1plus.jpg'),
(14, 'Oppo F5', 'Oppo', 100, 1200, 'f5.jpeg'),
(15, 'Oppo R9S', 'Oppo', 100, 1480, 'r9s.jpg'),
(16, 'Oppo R11', 'Oppo', 100, 2599, 'r11.jpg'),
(17, 'Oppo A77', 'Oppo', 100, 1149, 'a77.png'),
(18, 'Mate 10', 'Huawei', 100, 2699, 'mate10.jpg'),
(19, 'Mate 10 Pro', 'Huawei', 100, 3099, 'mate10pro.jpg'),
(20, 'Mate 9', 'Huawei', 100, 2399, 'mate9.jpg'),
(21, 'Mate 9 Pro', 'Huawei', 100, 2499, 'mate9pro.jpg'),
(22, 'Nova 2i', 'Huawei', 100, 1299, '2i.jpg'),
(23, 'Nova 2 Plus', 'Huawei', 100, 1699, '2plus.jpg'),
(24, 'Vivo V7 Plus', 'Vivo', 50, 1350, 'v7plus.jpg'),
(25, 'Vivo X9', 'Vivo', 50, 1689, 'x9.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phone_list`
--
ALTER TABLE `phone_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phone_list`
--
ALTER TABLE `phone_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
