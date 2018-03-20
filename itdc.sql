-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 03:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `addchild`
--

CREATE TABLE `addchild` (
  `id` int(25) NOT NULL,
  `cid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addchild`
--

INSERT INTO `addchild` (`id`, `cid`, `name`, `dob`, `age`, `weight`, `height`, `gender`, `category`, `address`) VALUES
(5, 5, 'Akash', '2016-04-09', 5, 16, 42, 'male', 'open', 'At shirapur Tq Ashti Dist Beeb'),
(6, 78, 'Jennifer', '2022-08-04', 4, 12, 42, 'female', 'sc', 'At Post Gobhani ,Tq.Risod ,Dist-Washim. '),
(8, 74, 'Ron', '2024-08-12', 0, 1.8, 34, 'male', 'open', 'At shirapur Tq Ashti Dist Beeb'),
(9, 52, 'neeta', '2022-08-04', 0, 3.2, 32, 'female', 'open', 'At shirapur Tq Ashti Dist Beed'),
(10, 0, '', '0000-00-00', 0, 0, 0, 'male', 'open', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'raj', 'raj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addchild`
--
ALTER TABLE `addchild`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addchild`
--
ALTER TABLE `addchild`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
