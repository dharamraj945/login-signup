-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 04:44 AM
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
-- Table structure for table `collection_page`
--

CREATE TABLE `collection_page` (
  `id` int(11) NOT NULL,
  `Category_Name` varchar(100) NOT NULL,
  `Category_Img` varchar(400) NOT NULL,
  `Category_Desc` varchar(400) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `session_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection_page`
--

INSERT INTO `collection_page` (`id`, `Category_Name`, `Category_Img`, `Category_Desc`, `Date`, `session_no`) VALUES
(33, 'Mobile Covers ', '51smT4SDYYL._SL1000_.jpg', 'Premier Mobile Covers For All Mobiles Lets Make Your Mobile Osm', '2022-03-06 08:39:26', 63),
(34, 'AirPods', 'b7bb2f48e199a2e1fedd529030675f97c5-dotd-air-pods.rsquare.w1200.webp', 'Premier Airpods For Man', '2022-03-06 08:42:14', 63),
(35, 'Man Watch', '75706703_l.webp', 'Premier Man Watch With Best Price And Best Quality', '2022-03-06 08:42:56', 63),
(36, 'Bluetooth Music ', 'article-img-12.jpg', 'Premier Bluetooth Music  In Low Cost', '2022-03-06 08:43:32', 63),
(37, 'Pop Holder', 'CutePhoneHolder-PinkPaw-LMN762-4_2400x.webp', 'Premier  Cartoon Pop Holder ', '2022-03-06 08:44:17', 63),
(38, 'Silicon Mobile Covers', 'RealmeC15smokecase_Red_700x700.webp', 'Silicon Premier Mobile Covers Full Mobile Protection', '2022-03-06 19:40:10', 63);

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
(63, 'dharamraj kumar', 'shoponcliq', '8851096421', 'kumardharamraj2017@gmail.com', '1234', '2022-03-06 06:35:53'),
(64, 'Kunal Kumar ', 'Kunal', '9625732118', 'Kunal@gmail.com', '1234', '2022-03-06 08:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_page`
--
ALTER TABLE `collection_page`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `collection_page`
--
ALTER TABLE `collection_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `signuplogin`
--
ALTER TABLE `signuplogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
