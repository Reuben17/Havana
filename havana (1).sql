-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 01:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `havana`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfooddetails`
--

CREATE TABLE `tblfooddetails` (
  `id` int(11) NOT NULL,
  `food_name` varchar(256) NOT NULL,
  `imageoriginalname` varchar(256) NOT NULL,
  `imagepathname` varchar(256) NOT NULL,
  `food_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfooddetails`
--

INSERT INTO `tblfooddetails` (`id`, `food_name`, `imageoriginalname`, `imagepathname`, `food_price`) VALUES
(1, 'Fries', 'fries.jpg', 'assets/1595848615.jpg', 80),
(2, 'Chicken', 'chicken.jpg', 'assets/1595848690.jpg', 150),
(3, 'Soda', 'soda.jpeg', 'assets/1595848767.jpeg', 50),
(4, 'Ice Cream', 'ice cream.jpg', 'assets/1595848842.jpg', 170),
(5, 'Milkshake', 'Milkshake.jpeg', 'assets/1595848905.jpeg', 120),
(6, 'Side of Coleslaw', 'coleslaw.jpg', 'assets/1595849000.jpg', 30),
(7, 'Burger', 'burger.jpg', 'assets/1596106463.jpg', 120);

-- --------------------------------------------------------

--
-- Table structure for table `tblorderdetails`
--

CREATE TABLE `tblorderdetails` (
  `order_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `food_name` varchar(256) NOT NULL,
  `food_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderdetails`
--

INSERT INTO `tblorderdetails` (`order_no`, `customer_id`, `username`, `food_name`, `food_price`, `quantity`, `status`) VALUES
(1, 4, 'Carmella', 'Burger', 120, 5, 'complete'),
(2, 4, 'Carmella', 'Chicken', 150, 2, 'complete'),
(3, 3, 'OmolloD', 'Fries', 80, 1, 'pending'),
(4, 5, 'MainaK', 'Ice Cream', 170, 4, 'pending'),
(5, 4, 'Carmella', 'Side of Coleslaw', 30, 3, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdetails`
--

CREATE TABLE `tbluserdetails` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `second_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(256) NOT NULL,
  `user_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserdetails`
--

INSERT INTO `tbluserdetails` (`id`, `first_name`, `second_name`, `email`, `username`, `password`, `date_of_birth`, `gender`, `user_type`) VALUES
(1, 'Brian', 'Aurier', 'aurier@outlook.com', 'B.Aurier', '123', '1990-05-11', 'Male', 'Administrator'),
(2, 'Annie', 'Rodriguez', 'arodriguez@gmail.com', 'Rodri', '456', '1997-01-11', 'Female', 'Administrator'),
(3, 'Dennis', 'Omollo', 'omollo@yahoo.com', 'OmolloD', '789', '1993-07-05', 'Male', 'Customer'),
(4, 'Carmen', 'Sandiego', 'csandiego@hotbox.com', 'Carmella', '987', '2000-11-22', 'Female', 'Customer'),
(5, 'Kimberly', 'Maina', 'mainaK@gmail.com', 'MainaK', '555', '1990-01-01', 'Female', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfooddetails`
--
ALTER TABLE `tblfooddetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_name` (`food_name`),
  ADD KEY `food_price` (`food_price`);

--
-- Indexes for table `tblorderdetails`
--
ALTER TABLE `tblorderdetails`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `food_name` (`food_name`);

--
-- Indexes for table `tbluserdetails`
--
ALTER TABLE `tbluserdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfooddetails`
--
ALTER TABLE `tblfooddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblorderdetails`
--
ALTER TABLE `tblorderdetails`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluserdetails`
--
ALTER TABLE `tbluserdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
