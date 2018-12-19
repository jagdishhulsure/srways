-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srways`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `challanentry`
--

CREATE TABLE `challanentry` (
  `challan_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `lr_number` varchar(50) NOT NULL,
  `challannumber` varchar(100) NOT NULL,
  `vnumber` varchar(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `cfrom` varchar(100) NOT NULL,
  `cto` varchar(100) NOT NULL,
  `totalfare` varchar(100) NOT NULL,
  `amountpaid` varchar(100) NOT NULL,
  `balanceamt` varchar(100) NOT NULL,
  `noofpackages` varchar(100) NOT NULL,
  `cvalues` varchar(100) NOT NULL,
  `drivername` varchar(100) NOT NULL,
  `docno` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `vdocument` varchar(100) NOT NULL,
  `agentname` varchar(100) NOT NULL,
  `hire` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challanentry`
--

INSERT INTO `challanentry` (`challan_id`, `lr_number`, `challannumber`, `vnumber`, `vehicletype`, `cfrom`, `cto`, `totalfare`, `amountpaid`, `balanceamt`, `noofpackages`, `cvalues`, `drivername`, `docno`, `mobileno`, `vdocument`, `agentname`, `hire`, `advance`, `balance`, `created_date`, `updated_date`) VALUES
(0000000001, 'LR20190001', '9874', '2000', '24 feet close', 'Mumbai', 'Pune', '800', '700', '100', '2', '1000', 'Jai', 'Karnatak', '9738720991', 'ggggg', 'Shankar M', '9874', '6512', '3214', '2018-12-15 08:38:11', '2018-12-15 08:38:11'),
(0000000002, 'LR20190001', '1111', '2222', '32 feet XL', 'Bangaloredd', 'Punedd', '1000', '900', '100', '2', '1000', 'Jai', 'KArr3455555', '9738720991', 'jhhhk', 'Shankar', '5000', '1000', '4000', '2018-12-15 08:39:35', '2018-12-15 08:39:35'),
(0000000004, 'LR20190001', '6754', 'KA39L6413', '32 feet XXL', 'Peenya', 'Electronic City', '10000', '5000', '5000', '9', '5000', 'Jacks', 'KAR23658FFF', '9738720991', 'Adhar', 'Jagdish', '1200', '600', '600', '2018-12-15 15:33:49', '2018-12-15 15:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `indentbooking`
--

CREATE TABLE `indentbooking` (
  `ib_number` int(10) UNSIGNED ZEROFILL NOT NULL,
  `ibvnumber` varchar(50) NOT NULL,
  `ibcname` varchar(100) NOT NULL,
  `ibfrom` varchar(200) NOT NULL,
  `ibto` varchar(100) NOT NULL,
  `ibvehicletype` varchar(100) NOT NULL,
  `ibtotalfare` varchar(200) NOT NULL,
  `ibamountpaid` varchar(100) NOT NULL,
  `ibbalance` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indentbooking`
--

INSERT INTO `indentbooking` (`ib_number`, `ibvnumber`, `ibcname`, `ibfrom`, `ibto`, `ibvehicletype`, `ibtotalfare`, `ibamountpaid`, `ibbalance`, `created_date`, `updated_date`) VALUES
(0000000004, '6413', 'Shankar', 'Pune', 'Bangalore ', '19 feet close', '100', '50', '50', '2018-12-08 06:47:27', '2018-12-08 06:47:27'),
(0000000005, '1111', 'Shankar', 'Bangalore', 'Bidar', '17 feet open', '100', '10', '90', '2018-12-11 20:25:03', '2018-12-11 20:25:03'),
(0000000006, '5555', 'Besleri', 'Mumbai', 'Bangalore ', '19 feet close', '5000', '2000', '3000', '2018-12-13 16:32:09', '2018-12-13 16:32:09'),
(0000000007, '1000', 'Cocacola', 'HYD', 'BLR', '32 feet XXL', '10000', '5000', '5000', '2018-12-13 16:35:56', '2018-12-13 16:35:56'),
(0000000009, '5689', 'Limca', 'Pune', 'Bidar', '17 feet open', '100', '8', '92', '2018-12-13 16:46:21', '2018-12-13 16:46:21'),
(0000000010, '9874', 'jimm', 'Pune', 'BLR', '22 feet close', '10', '10', '00', '2018-12-13 16:47:26', '2018-12-13 16:47:26'),
(0000000011, '9875', 'Shankar', 'Mumbai', 'Bangalore ', '22 feet close', '100', '50', '50', '2018-12-13 16:49:55', '2018-12-13 16:49:55'),
(0000000012, '6541', 'Sandy', 'Bidar', 'bhalk', '22 feet close', '100', '50', '50', '2018-12-13 16:53:02', '2018-12-13 16:53:02'),
(0000000013, '8888', 'Jai rao', 'HYD', 'Bidar', '17 feet open', '10', '2000', '90', '2018-12-15 08:29:45', '2018-12-15 08:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `lrentrydetails`
--

CREATE TABLE `lrentrydetails` (
  `lr_number` int(10) UNSIGNED ZEROFILL NOT NULL,
  `ib_number` varchar(22) NOT NULL,
  `lrvnumber` varchar(50) NOT NULL,
  `lrcname` varchar(100) NOT NULL,
  `lrfrom` varchar(200) NOT NULL,
  `lrto` varchar(100) NOT NULL,
  `lrvehicletype` varchar(100) NOT NULL,
  `lrtotalfare` varchar(200) NOT NULL,
  `lramountpaid` varchar(100) NOT NULL,
  `lrbalance` varchar(100) NOT NULL,
  `lrnoofpackages` varchar(100) NOT NULL,
  `lrvalue` varchar(100) NOT NULL,
  `lrbilling` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lrentrydetails`
--

INSERT INTO `lrentrydetails` (`lr_number`, `ib_number`, `lrvnumber`, `lrcname`, `lrfrom`, `lrto`, `lrvehicletype`, `lrtotalfare`, `lramountpaid`, `lrbalance`, `lrnoofpackages`, `lrvalue`, `lrbilling`, `created_date`, `updated_date`) VALUES
(0000000002, 'IB20190003', '1234', 'Bislery', 'Bangalore', 'Pune', '19 feet close', '4000', '2000', '2000', '7', '700', 'Peenya', '2018-12-15 04:58:24', '2018-12-15 04:58:24'),
(0000000003, 'IB20190003', '1234', 'Bislery', 'Bangalore', 'Pune', '24 feet close', '4000', '2000', '2000', '7', '700', 'Peenya', '2018-12-15 05:12:49', '2018-12-15 05:12:49'),
(0000000004, 'IB20190001', '1478', 'Testing', 'Bangalore', 'Pune', '32 feet XL', '4000', '2000', '2000', '7', '700', 'Peenya', '2018-12-15 05:23:36', '2018-12-15 05:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `podentry`
--

CREATE TABLE `podentry` (
  `pod_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `lr_number` varchar(50) NOT NULL,
  `ibdate` varchar(100) NOT NULL,
  `unloading` varchar(100) NOT NULL,
  `unloadingcharges` varchar(100) NOT NULL,
  `damages` varchar(100) NOT NULL,
  `shortage` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podentry`
--

INSERT INTO `podentry` (`pod_id`, `lr_number`, `ibdate`, `unloading`, `unloadingcharges`, `damages`, `shortage`, `remarks`, `created_date`, `updated_date`) VALUES
(0000000001, 'IB20190002', '2018-12-16', '2018-12-18', '12002', '602', '2222', 'Testing check', '2018-12-15 16:19:47', '2018-12-15 16:19:47'),
(0000000002, 'IB20190003', '2018-12-15', '2018-12-16', '123', '1', '1', 'testing data', '2018-12-15 17:05:52', '2018-12-15 17:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `uid` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehiclemaster`
--

CREATE TABLE `vehiclemaster` (
  `v_id` int(10) NOT NULL,
  `vregnumber` varchar(50) NOT NULL,
  `vregdate` varchar(100) NOT NULL,
  `permitno` varchar(100) NOT NULL,
  `permitupto` varchar(100) NOT NULL,
  `insurance` varchar(100) NOT NULL,
  `insuranceupto` varchar(100) NOT NULL,
  `fc` varchar(100) NOT NULL,
  `fcupto` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `taxupto` varchar(100) NOT NULL,
  `pucno` varchar(100) NOT NULL,
  `pucupto` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehiclemaster`
--

INSERT INTO `vehiclemaster` (`v_id`, `vregnumber`, `vregdate`, `permitno`, `permitupto`, `insurance`, `insuranceupto`, `fc`, `fcupto`, `tax`, `taxupto`, `pucno`, `pucupto`, `created_date`, `updated_date`) VALUES
(1, '123', '2018-12-16', 'KA123', '2019', '2019', '2019', 'pu233', '2019', '2020', '', '555', '2020', '2018-12-15 18:02:18', '2018-12-15 18:02:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challanentry`
--
ALTER TABLE `challanentry`
  ADD PRIMARY KEY (`challan_id`);

--
-- Indexes for table `indentbooking`
--
ALTER TABLE `indentbooking`
  ADD PRIMARY KEY (`ib_number`);

--
-- Indexes for table `lrentrydetails`
--
ALTER TABLE `lrentrydetails`
  ADD PRIMARY KEY (`lr_number`);

--
-- Indexes for table `podentry`
--
ALTER TABLE `podentry`
  ADD PRIMARY KEY (`pod_id`);

--
-- Indexes for table `vehiclemaster`
--
ALTER TABLE `vehiclemaster`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challanentry`
--
ALTER TABLE `challanentry`
  MODIFY `challan_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `indentbooking`
--
ALTER TABLE `indentbooking`
  MODIFY `ib_number` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lrentrydetails`
--
ALTER TABLE `lrentrydetails`
  MODIFY `lr_number` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `podentry`
--
ALTER TABLE `podentry`
  MODIFY `pod_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehiclemaster`
--
ALTER TABLE `vehiclemaster`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
