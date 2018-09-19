-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2017 at 07:00 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uerahg`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`ID` int(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `cid`, `Cname`, `fullname`) VALUES
(1, 'A', 'BTech', 'Bachler of Technology'),
(2, 'R', 'BPharm', 'Bachler of Pharmacy'),
(3, 'T', 'Pharm D', 'Doctor of Pharmacy'),
(4, 'E', 'MBA', 'Masters in Business administration'),
(7, 'D', 'MTech', 'Master of Technology'),
(8, 'F', 'MCA', 'Master of Computer applications'),
(9, 'S', 'MPharm', 'Master of Pharmacy'),
(11, 'D', 'MSIT', 'Master of Science in Information Technology'),
(12, 'D', 'MTech(seer academy)', 'Master  of Technology(seer academy)'),
(13, 'K', 'MSc', 'Master of Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
