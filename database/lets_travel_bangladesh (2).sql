-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 08:04 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lets_travel_bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Md.Kamrul Hasan', 'hasanakash0215@gmail.com', '01773303096'),
(2, 'Asraf Jahan Tamanna', 'asrafjahantamanna@gmail.com', '01720689393');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE IF NOT EXISTS `agencies` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_group`
--

CREATE TABLE IF NOT EXISTS `event_group` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `place_name` varchar(255) DEFAULT NULL,
  `full_description` text,
  `route` text,
  `hotel1` varchar(255) DEFAULT NULL,
  `hotel2` varchar(255) DEFAULT NULL,
  `police` varchar(255) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `fire_service` varchar(255) DEFAULT NULL,
  `guide` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `cate_id`, `place_name`, `full_description`, `route`, `hotel1`, `hotel2`, `police`, `hospital`, `fire_service`, `guide`) VALUES
(1, 1, 'pppppppppp', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'hhhhhhh1111', 'hhhhhhhhhhhh2222', 'ppppppp', 'hhhhhhhhhh', 'fffffffffffffffsssssssssss', 'gggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `place_cate`
--

CREATE TABLE IF NOT EXISTS `place_cate` (
  `cate_id` int(11) NOT NULL,
  `place_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_cate`
--

INSERT INTO `place_cate` (`cate_id`, `place_type`) VALUES
(1, 'Sea Beaches'),
(2, 'Hills & Mountains'),
(3, 'Historical Places'),
(4, 'Waterfalls'),
(5, 'Rivers & Lakes'),
(6, 'Theme Parks'),
(7, 'Museums'),
(8, 'Eco Parks'),
(9, 'Islands'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `place_review`
--

CREATE TABLE IF NOT EXISTS `place_review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `visited_place` varchar(255) DEFAULT NULL,
  `date_of_visit` date DEFAULT NULL,
  `experience` text,
  `review` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_review`
--

INSERT INTO `place_review` (`review_id`, `name`, `email`, `visited_place`, `date_of_visit`, `experience`, `review`) VALUES
(1, 'fghjk', 'shahadshadman9@gmail.com', 'dgfghjkjlk', '2020-01-01', 'zdxcvbiugv bjhnzdxtcryguihoidxgfchjbkj', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `event_group`
--
ALTER TABLE `event_group`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`), ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `place_cate`
--
ALTER TABLE `place_cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `place_review`
--
ALTER TABLE `place_review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_group`
--
ALTER TABLE `event_group`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `place_cate`
--
ALTER TABLE `place_cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `place_review`
--
ALTER TABLE `place_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `place`
--
ALTER TABLE `place`
ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `place_cate` (`cate_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
