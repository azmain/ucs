-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2017 at 07:26 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_login`
--

CREATE TABLE IF NOT EXISTS `college_login` (
`id` int(11) NOT NULL,
  `cc` char(2) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200 ;

--
-- Dumping data for table `college_login`
--

INSERT INTO `college_login` (`id`, `cc`, `user_name`, `password`) VALUES
(1, '09', '09', 'asdfg;09'),
(2, '0A', '0A', 'PRINCIPAL_0A'),
(3, '12', '12', 'PRINCIPAL_12'),
(4, '19', '19', 'PRINCIPAL_19'),
(5, '2F', '2F', 'PRINCIPAL_2F'),
(6, '2G', '2G', 'PRINCIPAL_2G'),
(7, '2H', '2H', 'PRINCIPAL_2H'),
(8, '2J', '2J', 'PRINCIPAL_2J'),
(9, '2K', '2K', 'PRINCIPAL_2K'),
(10, '2M', '2M', 'PRINCIPAL_2M'),
(11, '2N', '2N', 'PRINCIPAL_2N'),
(12, '2P', '2P', 'PRINCIPAL_2P'),
(13, '2Q', '2Q', 'PRINCIPAL_2Q'),
(14, '2R', '2R', 'PRINCIPAL_2R'),
(15, '2T', '2T', 'PRINCIPAL_2T'),
(16, '2U', '2U', 'PRINCIPAL_2U'),
(17, '38', '38', 'PRINCIPAL_38'),
(18, '3A', '3A', 'PRINCIPAL_3A'),
(19, '3C', '3C', 'PRINCIPAL_3C'),
(20, '3D', '3D', 'PRINCIPAL_3D'),
(21, '3E', '3E', 'PRINCIPAL_3E'),
(22, '3F', '3F', 'PRINCIPAL_3F'),
(23, '3G', '3G', 'PRINCIPAL_3G'),
(24, '3H', '3H', 'PRINCIPAL_3H'),
(25, '3J', '3J', 'PRINCIPAL_3J'),
(26, '3K', '3K', 'PRINCIPAL_3K'),
(27, '3M', '3M', 'PRINCIPAL_3M'),
(28, '3N', '3N', 'PRINCIPAL_3N'),
(29, '3P', '3P', 'PRINCIPAL_3P'),
(30, '3Q', '3Q', 'PRINCIPAL_3Q'),
(31, '3R', '3R', 'PRINCIPAL_3R'),
(32, '3T', '3T', 'PRINCIPAL_3T'),
(33, '3U', '3U', 'PRINCIPAL_3U'),
(34, '42', '42', 'PRINCIPAL_42'),
(35, '44', '44', 'PRINCIPAL_44'),
(36, '4A', '4A', 'PRINCIPAL_4A'),
(37, '4C', '4C', 'PRINCIPAL_4C'),
(38, '4D', '4D', 'PRINCIPAL_4D'),
(39, '4E', '4E', 'PRINCIPAL_4E'),
(40, '4F', '4F', 'PRINCIPAL_4F'),
(41, '4G', '4G', 'PRINCIPAL_4G'),
(42, '4H', '4H', 'PRINCIPAL_4H'),
(43, '4J', '4J', 'PRINCIPAL_4J'),
(44, '4K', '4K', 'PRINCIPAL_4K'),
(45, '4M', '4M', 'PRINCIPAL_4M'),
(46, '4N', '4N', 'PRINCIPAL_4N'),
(47, '4P', '4P', 'PRINCIPAL_4P'),
(48, '4Q', '4Q', 'PRINCIPAL_4Q'),
(49, '4R', '4R', 'PRINCIPAL_4R'),
(50, '4T', '4T', 'PRINCIPAL_4T'),
(51, '4U', '4U', 'PRINCIPAL_4U'),
(52, '5K', '5K', 'PRINCIPAL_5K'),
(53, '5M', '5M', 'PRINCIPAL_5M'),
(54, '5N', '5N', 'PRINCIPAL_5N'),
(55, '5P', '5P', 'PRINCIPAL_5P'),
(56, '69', '69', 'PRINCIPAL_69'),
(57, '70', '70', 'PRINCIPAL_70'),
(58, '71', '71', 'PRINCIPAL_71'),
(59, '72', '72', 'PRINCIPAL_72'),
(60, '73', '73', 'PRINCIPAL_73'),
(61, '74', '74', 'PRINCIPAL_74'),
(62, '75', '75', 'PRINCIPAL_75'),
(63, '78', '78', 'PRINCIPAL_78'),
(64, '8P', '8P', 'PRINCIPAL_8P'),
(65, '8Q', '8Q', 'PRINCIPAL_8Q'),
(66, '8R', '8R', 'PRINCIPAL_8R'),
(67, '8T', '8T', 'PRINCIPAL_8T'),
(68, '8U', '8U', 'PRINCIPAL_8U'),
(69, '8W', '8W', 'PRINCIPAL_8W'),
(70, '8X', '8X', 'PRINCIPAL_8X'),
(71, '8Y', '8Y', 'PRINCIPAL_8Y'),
(72, '8Z', '8Z', 'PRINCIPAL_8Z'),
(73, '9A', '9A', 'PRINCIPAL_9A'),
(74, '9B', '9B', 'PRINCIPAL_9B'),
(75, '9C', '9C', 'PRINCIPAL_9C'),
(76, '9D', '9D', 'PRINCIPAL_9D'),
(77, '9E', '9E', 'PRINCIPAL_9E'),
(78, '9F', '9F', 'PRINCIPAL_9F'),
(79, '9G', '9G', 'PRINCIPAL_9G'),
(80, '9H', '9H', 'PRINCIPAL_9H'),
(81, '9J', '9J', 'PRINCIPAL_9J'),
(82, '9K', '9K', 'PRINCIPAL_9K'),
(83, '9L', '9L', 'PRINCIPAL_9L'),
(84, '9M', '9M', 'PRINCIPAL_9M'),
(85, '9N', '9N', 'PRINCIPAL_9N'),
(86, '9P', '9P', 'PRINCIPAL_9P'),
(87, '9Q', '9Q', 'PRINCIPAL_9Q'),
(88, '9R', '9R', 'PRINCIPAL_9R'),
(89, '9T', '9T', 'PRINCIPAL_9T'),
(90, '9U', '9U', 'PRINCIPAL_9U'),
(91, '9W', '9W', 'PRINCIPAL_9W'),
(92, '9X', '9X', 'PRINCIPAL_9X'),
(93, '9Y', '9Y', 'PRINCIPAL_9Y'),
(94, 'AF', 'AF', 'PRINCIPAL_AF'),
(95, 'AK', 'AK', 'PRINCIPAL_AK'),
(96, 'AM', 'AM', 'PRINCIPAL_AM'),
(97, 'AT', 'AT', 'PRINCIPAL_AT'),
(98, 'BC', 'BC', 'PRINCIPAL_BC'),
(99, 'BF', 'BF', 'PRINCIPAL_BF'),
(100, 'BG', 'BG', 'PRINCIPAL_BG'),
(101, 'BM', 'BM', 'PRINCIPAL_BM'),
(102, 'BP', 'BP', 'PRINCIPAL_BP'),
(103, 'CN', 'CN', 'PRINCIPAL_CN'),
(104, 'CP', 'CP', 'PRINCIPAL_CP'),
(105, 'CQ', 'CQ', 'PRINCIPAL_CQ'),
(106, 'DC', 'DC', 'PRINCIPAL_DC'),
(107, 'DJ', 'DJ', 'PRINCIPAL_DJ'),
(108, 'DK', 'DK', 'PRINCIPAL_DK'),
(109, 'DM', 'DM', 'PRINCIPAL_DM'),
(110, 'E8', 'E8', 'PRINCIPAL_E8'),
(111, 'EA', 'EA', 'PRINCIPAL_EA'),
(112, 'EH', 'EH', 'PRINCIPAL_EH'),
(113, 'ER', 'ER', 'PRINCIPAL_ER'),
(114, 'F1', 'F1', 'PRINCIPAL_F1'),
(115, 'F2', 'F2', 'PRINCIPAL_F2'),
(116, 'F3', 'F3', 'PRINCIPAL_F3'),
(117, 'F4', 'F4', 'PRINCIPAL_F4'),
(118, 'F5', 'F5', 'PRINCIPAL_F5'),
(119, 'F6', 'F6', 'PRINCIPAL_F6'),
(120, 'F7', 'F7', 'PRINCIPAL_F7'),
(121, 'F8', 'F8', 'PRINCIPAL_F8'),
(122, 'FH', 'FH', 'PRINCIPAL_FH'),
(123, 'FN', 'FN', 'PRINCIPAL_FN'),
(124, 'G0', 'G0', 'PRINCIPAL_G0'),
(125, 'G1', 'G1', 'PRINCIPAL_G1'),
(126, 'G2', 'G2', 'PRINCIPAL_G2'),
(127, 'G3', 'G3', 'PRINCIPAL_G3'),
(128, 'G4', 'G4', 'PRINCIPAL_G4'),
(129, 'G8', 'G8', 'PRINCIPAL_G8'),
(130, 'G9', 'G9', 'PRINCIPAL_G9'),
(131, 'GT', 'GT', 'PRINCIPAL_GT'),
(132, 'H0', 'H0', 'PRINCIPAL_H0'),
(133, 'HC', 'HC', 'PRINCIPAL_HC'),
(134, 'HD', 'HD', 'PRINCIPAL_HD'),
(135, 'HE', 'HE', 'PRINCIPAL_HE'),
(136, 'HF', 'HF', 'PRINCIPAL_HF'),
(137, 'HG', 'HG', 'PRINCIPAL_HG'),
(138, 'HH', 'HH', 'PRINCIPAL_HH'),
(139, 'HJ', 'HJ', 'PRINCIPAL_HJ'),
(140, 'HK', 'HK', 'PRINCIPAL_HK'),
(141, 'HL', 'HL', 'PRINCIPAL_HL'),
(142, 'HM', 'HM', 'PRINCIPAL_HM'),
(143, 'HN', 'HN', 'PRINCIPAL_HN'),
(144, 'HP', 'HP', 'PRINCIPAL_HP'),
(145, 'HQ', 'HQ', 'PRINCIPAL_HQ'),
(146, 'HR', 'HR', 'PRINCIPAL_HR'),
(147, 'HT', 'HT', 'PRINCIPAL_HT'),
(148, 'HU', 'HU', 'PRINCIPAL_HU'),
(149, 'HW', 'HW', 'PRINCIPAL_HW'),
(150, 'HX', 'HX', 'PRINCIPAL_HX'),
(151, 'HY', 'HY', 'PRINCIPAL_HY'),
(152, 'HZ', 'HZ', 'PRINCIPAL_HZ'),
(153, 'JA', 'JA', 'PRINCIPAL_JA'),
(154, 'JB', 'JB', 'PRINCIPAL_JB'),
(155, 'JC', 'JC', 'PRINCIPAL_JC'),
(156, 'JD', 'JD', 'PRINCIPAL_JD'),
(157, 'JE', 'JE', 'PRINCIPAL_JE'),
(158, 'JF', 'JF', 'PRINCIPAL_JF'),
(159, 'JG', 'JG', 'PRINCIPAL_JG'),
(160, 'JH', 'JH', 'PRINCIPAL_JH'),
(161, 'JJ', 'JJ', 'PRINCIPAL_JJ'),
(162, 'JK', 'JK', 'PRINCIPAL_JK'),
(163, 'JL', 'JL', 'PRINCIPAL_JL'),
(164, 'JM', 'JM', 'PRINCIPAL_JM'),
(165, 'JN', 'JN', 'PRINCIPAL_JN'),
(166, 'JQ', 'JQ', 'PRINCIPAL_JQ'),
(167, 'JR', 'JR', 'PRINCIPAL_JR'),
(168, 'JT', 'JT', 'PRINCIPAL_JT'),
(169, 'JU', 'JU', 'PRINCIPAL_JU'),
(170, 'JW', 'JW', 'PRINCIPAL_JW'),
(171, 'JX', 'JX', 'PRINCIPAL_JX'),
(172, 'JY', 'JY', 'PRINCIPAL_JY'),
(173, 'JZ', 'JZ', 'PRINCIPAL_JZ'),
(174, 'K2', 'K2', 'PRINCIPAL_K2'),
(175, 'K5', 'K5', 'PRINCIPAL_K5'),
(176, 'KA', 'KA', 'PRINCIPAL_KA'),
(177, 'KB', 'KB', 'PRINCIPAL_KB'),
(178, 'KC', 'KC', 'PRINCIPAL_KC'),
(179, 'KD', 'KD', 'PRINCIPAL_KD'),
(180, 'KE', 'KE', 'PRINCIPAL_KE'),
(181, 'L2', 'L2', 'PRINCIPAL_L2'),
(182, 'L4', 'L4', 'PRINCIPAL_L4'),
(183, 'L8', 'L8', 'PRINCIPAL_L8'),
(184, 'M7', 'M7', 'PRINCIPAL_M7'),
(185, 'P1', 'P1', 'PRINCIPAL_P1'),
(186, 'P2', 'P2', 'PRINCIPAL_P2'),
(187, 'P9', 'P9', 'PRINCIPAL_P9'),
(188, 'Q0', 'Q0', 'PRINCIPAL_Q0'),
(189, 'Q1', 'Q1', 'PRINCIPAL_Q1'),
(190, 'Q2', 'Q2', 'PRINCIPAL_Q2'),
(191, 'Q3', 'Q3', 'PRINCIPAL_Q3'),
(192, 'R6', 'R6', 'PRINCIPAL_R6'),
(193, 'T1', 'T1', 'PRINCIPAL_T1'),
(194, 'W5', 'W5', 'PRINCIPAL_W5'),
(195, 'X5', 'X5', 'PRINCIPAL_X5'),
(196, 'Y0', 'Y0', 'PRINCIPAL_Y0'),
(197, 'Y1', 'Y1', 'PRINCIPAL_Y1'),
(198, 'Z7', 'Z7', 'PRINCIPAL_Z7'),
(199, 'KG', 'KG', 'PRINCIPAL_KG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_login`
--
ALTER TABLE `college_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_login`
--
ALTER TABLE `college_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=200;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
