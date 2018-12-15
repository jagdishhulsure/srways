-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2018 at 12:48 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `contact_person`, `phone`, `mobile`, `gst`, `pincode`, `created`) VALUES
(1, 'dfsfds', 'sdf', 'sdfdsfd', '545645', '45454', '4545464', '545465', '2018-12-15 23:58:42'),
(2, '', 'At post Mehkar\r\nTq Bhhalki', '', '121212315', '', 'GTS1212', '1212154', '2018-12-16 00:09:07'),
(3, 'Sandeep Dattatray Jadhav', 'At post Mehkar\r\nTq Bhhalki\r\nDist Bidar', 'Sandeep Jadhav', '78787878999', '121212315999', 'GTS121299', '121215499', '2018-12-16 00:13:29'),
(4, 'Sandeep Jadhav 1', 'At post Mehkar 1\r\nTq Bhhalki', 'Sandeeeep 1', '7878787899', '1212123159', 'GTS12129', '12121549', '2018-12-16 00:14:42'),
(5, 'Sandeep Jadhav', 'At post Mehkar\r\nTq Bhhalki', 'Sandeeeep', '78787878', '121212315', 'GTS1212', '1212154', '2018-12-16 00:14:52'),
(6, 'Sandeep Jadhav', 'At post Mehkar\r\nTq Bhhalki', 'Sandeeeep', '78787878', '121212315', 'GTS1212', '1212154', '2018-12-16 00:15:50'),
(7, 'Sandeep Jadhav', 'At post Mehkar\r\nTq Bhhalki', 'Sandeeeep', '78787878', '121212315', 'GTS1212', '1212154', '2018-12-16 00:16:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
