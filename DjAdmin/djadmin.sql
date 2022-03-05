-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 04:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `signuplogin`
--

CREATE TABLE `signuplogin` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `Mobileno` varchar(13) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signuplogin`
--

INSERT INTO `signuplogin` (`sno`, `name`, `companyname`, `Mobileno`, `emailid`, `password`, `date`) VALUES
(45, 'dharamraj', 'shopincliq', '2147483647', 'dj@gmail.com', '1234', '2022-03-03 11:48:54'),
(47, 'kanika', '9910706795', '0', 'kanika@gmail.com', '1234', '2022-03-03 11:50:33'),
(51, 'kanika', 'dadsd', '9625732118', 'dada@gmail.com', '1234', '2022-03-03 11:52:52'),
(53, 'dad', 'adada', 'd9625732118', 'adada@gmail.com', 'dadad', '2022-03-03 11:54:01'),
(55, 'kunalkumar', 'fh', '9625732145', 'kk@gmail.com', '1234', '2022-03-04 07:08:06'),
(58, 'dharamraj', 'shoponcliq', '8851096421', 'kumardharamraj2017@gmail.com', '1234', '2022-03-04 07:50:21'),
(59, 'KANIKA', '85485', '9910706198', 'GG@GMAIL.COM', '1234', '2022-03-04 07:57:05'),
(61, 'sdzczxc', 'xvxcvxv', '9711672940', 'dxczxcc@gmail.com', '1234', '2022-03-04 08:17:57'),
(62, 'dharamraj kumar', 'shoponcliq', '7550732118', 'kkk@gmail.com', '1234', '2022-03-04 08:28:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signuplogin`
--
ALTER TABLE `signuplogin`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `Mobileno` (`Mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signuplogin`
--
ALTER TABLE `signuplogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
