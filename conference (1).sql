-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 12:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE `conf` (
  `id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_Info` varchar(200) NOT NULL,
  `event_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `last_date` timestamp NULL DEFAULT NULL,
  `program` varchar(200) NOT NULL,
  `speaker01` varchar(200) NOT NULL,
  `mailid01` varchar(200) NOT NULL,
  `facebookid01` varchar(200) NOT NULL,
  `twitterid01` varchar(200) NOT NULL,
  `linkedinid01` varchar(200) NOT NULL,
  `eventvenue` varchar(200) NOT NULL,
  `event_location` varchar(200) NOT NULL,
  `registerlimit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`id`, `event_name`, `event_Info`, `event_date`, `last_date`, `program`, `speaker01`, `mailid01`, `facebookid01`, `twitterid01`, `linkedinid01`, `eventvenue`, `event_location`, `registerlimit`) VALUES
(6, 'function', 'functional event', '2018-04-13 08:57:24', '2018-04-15 21:42:06', '001', 'abcd', 'abc@gmail.com', 'abc@gmail.com', 'abc@gmail.com', 'abc@gmail.com', 'Hyderabad', 'kukatpally', '1'),
(7, 'sports event', 'sports program', '2018-04-15 01:42:08', '2018-04-14 06:35:22', '002', 'kkkkk', 'kkk@gmail.com', 'kkk@gmail.com', 'kkk@gmail.com', 'kkk@gmail.com', 'secunderabad', 'secunderabad', '2'),
(8, 'Food program', 'food program', '2018-04-18 14:42:19', '2018-04-15 23:05:09', '003', 'uuuuu', 'uuu@gmail.com', 'uuu@gmail.com', 'uuu@gmail.com', 'uuu@gmail.com', 'Chennai', 'station', '10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `input_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `input_message`) VALUES
(2, 'Suman', 'itsmetoton@gmail.com', 'hi'),
(3, 'rtg', 'mynenisitsolutions@gmail.com', 'rgegeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `user_name`, `mobile`, `comments`) VALUES
(1, 'mynenisitsolutions@gmail.com', 'suman', '9100888653', 'hello there'),
(2, 'rger@gmail', 'suman', '5555555555', 'ilului'),
(3, 'tyhrh@gmail', 'rtgegtrs', '1111111111', 'ujtuyjyg'),
(4, 'gg@gm', 'trrg', '9100888653', 'etrge');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `nameandsurname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phnumber` varchar(10) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nameandsurname`, `email`, `phnumber`, `specialization`, `address`) VALUES
(1, 'gdggg', 'rger@gmail', '1111111111', 'event 02', 'tyhryht6r'),
(2, 'suman', 'its@gmail', '5555555555', 'event 06', 'lollllll'),
(3, 'retggsg', 'mynenisitsolutions@gmail.com', '9100888653', 'event 02', '128/2RT, 6th Ln, Srinivasa Nagar, Ameerpet, Hyderabad, Telangana 500038');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conf`
--
ALTER TABLE `conf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
