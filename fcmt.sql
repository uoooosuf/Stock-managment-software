-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 04:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `description`, `qty`, `price`, `amount`) VALUES
(1, 'Infinix Hot6 1gb', '0 ', '0', '0'),
(2, 'Infinix Hot6 2gb', '0 ', '0', '0'),
(3, 'Infinix Hot6 Pro 2gb', '0 ', '0', '0'),
(4, 'Infinix Hot6 Pro 3gb', '0 ', '0', '0'),
(5, 'Infinix Smart2 1gb', '0 ', '0', '0'),
(6, 'Infinix Smart2 pro 2gb', '0', '0', '0'),
(7, 'Infinix hot6 x 2gb', '0   ', '0', '0'),
(8, 'Infinix Hot6 3gb', '0 ', '0', '0'),
(9, 'Infinix S3x 3gb', '0', '0', '0'),
(10, 'Infinix S3 3gb', '0', '0', '0'),
(11, 'Infinix Note4 2gb', '0', '0', '0'),
(12, 'Infinix Note4 3gb', '0', '0', '0'),
(13, 'Infinix Note4 Pro 3gb', '0', '0', '0'),
(14, 'Infinix Note5  3gb', '0', '0', '0'),
(15, 'Infinix Note5 3gb', '2', '0', '0'),
(16, 'Infinix Note5 Stylus 4gb', '0', '0', '0'),
(17, 'Infinix Note5 Stylus 64+4gb', ' 1', '0', '0'),
(18, 'Infinix Zero5 6gb', '0', '0', '0'),
(19, 'Infinix Zero5 Pro 128+6gb', '0', '0', '0'),
(20, 'Infinix Zero6 6gb', '0', '0', '0'),
(21, 'Infinix Zero 6 128 + 6gb', '0', '0', '0'),
(22, 'Gionee L850', '0', '0', '0'),
(23, 'Gionee L1000', '0', '0', '0'),
(24, 'Gionee S11Lite 4gbRam 32gb Rom', '0', '0', '0'),
(25, 'Gionee A1 Lite 3gb RAM 32gb ROM', '0', '0', '0'),
(26, 'Gionee F205 2gb RAM 16gb ROM', '1  ', '0', '0'),
(27, 'Gionee p5mini 1gb RAM 8gb ROM', '0', '0', '0'),
(28, 'Gionee M7 Power 4gb RAM 64gb ROM', '0', '0', '0'),
(29, 'Gionee X1s 3gb RAM 32gb ROM', '0', '0', '0'),
(30, 'Gionee M5 mini 2gb RAM 16gb ROM', '0', '0', '0'),
(31, 'Tecno Y2', '0   ', '0', '0'),
(32, 'Tecno F1', '0  ', '0', '0'),
(33, 'Tecno F2 Lite', '0', '0', '0'),
(34, 'Tecno  F3 POP2', '0', '0', '0'),
(35, 'Tecno  Wx3 Lite', '0', '0', '0'),
(36, 'Tecno Wx3P', '0 ', '0', '0'),
(37, 'Tecno F3 Pro ', '0', '0', '0'),
(38, 'Tecno KA70', '0', '0', '0'),
(39, 'Tecno Camon Cx', '0 ', '0', '0'),
(40, 'Tecno Camon Cx Air', '0', '0', '0'),
(41, 'Tecno LA7', '0', '0', '0'),
(42, 'Tecno LA7 Pro', ' 0', '0', '0'),
(43, 'Tecno Camon X ', '0', '0', '0'),
(44, 'Tecno Camon Pro', '0 ', '0', '0'),
(45, 'Tecno Camon 11', '0 ', '0', '0'),
(46, 'Tecno Camon 11 Pro', '3', '0', '0'),
(47, 'Tecno 7D', '1  ', '0', '0'),
(48, 'Tecno Driopad 10D', '0', '0', '0'),
(49, 'Tecno LA6', '0', '0', '0'),
(50, 'Tecno Ax8', '0', '0', '0'),
(51, 'Tecno P905', '0', '0', '0'),
(52, 'Tecno T528', '71', '0', '0'),
(53, 'Tecno T371', ' 0', '0', '0'),
(54, 'Tecno T473', '1  ', '0', '0'),
(55, 'Tecno P349', '0', '0', '0'),
(56, 'Tecno T439', '0', '0', '0'),
(57, 'Tecno T465', ' 0', '0', '0'),
(58, 'Tecno T661', '25', '0', '0'),
(59, 'Tecno T660', '0 ', '0', '0'),
(60, 'Tecno T350', '0 ', '0', '0'),
(61, 'Iphone x Supper Amoled 3gb RAM- 256gbROM', '0', '0', '0'),
(62, 'Iphone x 3gb RAM - 64gb ROM', '0', '0', '0'),
(63, 'Iphone 4 16gb', '0', '0', '0'),
(64, 'Iphone5 16Gb +1gb', '0', '0', '0'),
(65, 'Iphone 9plus', '0', '0', '0'),
(66, 'Iphone x5 Max ', '0', '0', '0'),
(67, 'Iphone6 2gb 16gb ROM', '0', '0', '0'),
(68, 'Iphone7 32gb', '0', '0', '0'),
(69, 'Iphone5 16gb + 1gb', '0', '0', '0'),
(70, 'Iphone x5 Max 4gb RAM 64gb ROM', '0', '0', '0'),
(71, 'Iphone 6Plus', '0', '0', '0'),
(72, 'Iphone 8 plus 64gb', '0', '0', '0'),
(73, 'Samsung GalaxyJ6 3gb RAM 32gb ROM', '0', '0', '0'),
(74, 'Samsung Galaxy S4 4gb', '0', '0', '0'),
(75, 'Samsung Galaxy J4 plus 32gb + 2gb Ram', '0', '0', '0'),
(76, 'Samsung Galaxy J5 2gb-16gb', '0', '0', '0'),
(77, 'Samsung Galaxy S8 4gb RAM 64gb ROM', '0', '0', '0'),
(78, 'Samsung Galaxy S9 plus (6gb, 64gb)', '0', '0', '0'),
(79, 'Samsung Galaxy A6 plus (3gb, 32gb)', '0', '0', '0'),
(80, 'Samsung Galaxy J8 (32gb ROM - 3gbRAM)', '0', '0', '0'),
(81, 'ecno wx3p', '5', '', '0'),
(82, 'Itel 2160', '40 ', '', '0'),
(83, 'Tecno t349', '0 ', '', '0'),
(84, 'Tecno spark 2', '0', '', '0'),
(85, 'Tecno T484', '  0', '', '0'),
(86, 'Tecno pop 1', ' 0', '', '0'),
(87, 'itel 2190', '0  ', '', '0'),
(88, 'itel 5600', '0 ', '', '0'),
(89, 'itel 6910', '0', '', '0'),
(90, 'Nokia lumia 435', '1  ', '', '0'),
(91, 'NOkia 8110', '0 ', '', '0'),
(92, 'Nokia 216', '0 ', '', '0'),
(93, 'Samsung Keystone', '0', '', '0'),
(94, 'omo tab 2', '0 ', '', '0'),
(95, 'Samsung A8+', '0 ', '', '0'),
(96, ' Samsung note 8', '1', '', '0'),
(97, 'Samsung S9 ', '0 ', '', '0'),
(98, 'Samsung S8', '0 ', '', '0'),
(99, 'Iphone 7 (32gb)', ' 0', '', '0'),
(100, 'Iphone 7  (128gb)', '1', '', '0'),
(101, 'Iphone 7plus (32gb)', '0 ', '', '0'),
(102, 'blackberry', '3 ', '', '0'),
(103, 'Tecno spark 2 (2gb)', ' 0 ', '', '0'),
(104, 'Tecno LA7 (3GB)', '0', '', '0'),
(105, 'itel  S32', '0', '', '0'),
(106, 'Tecno T401', '19', '', '0'),
(107, 'tecno pop1', '0 ', '', '0'),
(108, 'Infinix Smart', '0', '', '0'),
(109, 'Tecno camon x (32gb+3gb)', '0 ', '', '0'),
(110, 'Tecno spark 2(1gb)', '0', '', '0'),
(111, 'Infinix hot7', '5', '', '0'),
(112, 'infinix ZERO6 64+6', '1  ', '', '0'),
(113, 'infinix ZERO6PRO 128+6', '0', '', '0'),
(114, 'Tecno spark 3 16+1', '0', '', '0'),
(115, 'Tecno spark 3 16+2', '0', '', '0'),
(116, 'Tecno spark 3 32+2', '0', '', '0'),
(117, 'PHATOM9 128+6', '0', '', '0'),
(118, 'TECNO LB6', '0', '', '0'),
(119, 'TECNO POP2 POWER', '0', '', '0'),
(120, 'tecno pop1 pro', '2', '', ''),
(121, 'INFINIX HOT7 2G', '3 ', '', ''),
(122, 'samsung galaxyA7', '1', '', ''),
(123, 'itel p32', '3', '', ''),
(124, 'itel  p33', '10', '', ''),
(125, 'itel s32', '3', '', ''),
(126, 'itel s32 mini', '5 ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `daily_history`
--

CREATE TABLE `daily_history` (
  `id` int(50) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `timee` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_history`
--

INSERT INTO `daily_history` (`id`, `datee`, `timee`, `amount`, `name`) VALUES
(2, 'Mon-Dec-2018', '02:13 PM', '69,500', 'admin'),
(3, 'Tue-Dec-2018', '02:23 PM', '131,800', 'admin'),
(4, 'Wed-Dec-2018', '02:31 PM', '106,900', 'admin'),
(5, 'Thu-Dec-2018', '05:45 PM', '133,000', 'admin'),
(6, 'Mon-Dec-2018', '05:37 PM', '13,000', 'happy'),
(7, 'Tue-Dec-2018', '05:46 PM', '103,000', 'amana'),
(8, 'Wed-Dec-2018', '05:50 PM', '59,500', 'admin'),
(9, 'Thu-Dec-2018', '05:57 PM', '185,300', 'admin'),
(10, 'Sun-Dec-2018', '05:43 PM', '1,245,200', 'happy'),
(11, 'Mon-Dec-2018', '05:55 PM', '814,300', 'admin'),
(12, 'Thu-Dec-2018', '05:49 PM', '335,500', 'happy'),
(13, 'Fri-Dec-2018', '05:37 PM', '314,000', 'admin'),
(14, 'Sun-Dec-2018', '05:37 PM', '93,000', 'admin'),
(15, 'Mon-Dec-2018', '05:46 PM', '117,500', 'amana'),
(16, 'Sat-Mar-2019', '04:56 PM', '4,889,200', 'amana'),
(17, 'Sat-Mar-2019', '04:56 PM', '4,889,200', 'amana'),
(18, 'Sun-Mar-2019', '06:40 PM', '1,025,000', 'amana'),
(19, 'Sun-Mar-2019', '06:40 PM', '1,025,000', 'amana'),
(20, 'Tue-Apr-2019', '06:48 PM', '629,000', 'amana'),
(21, 'Tue-Apr-2019', '06:48 PM', '629,000', 'amana'),
(22, 'Wed-Apr-2019', '06:44 PM', '212,000', 'amana'),
(23, 'Thu-Apr-2019', '06:56 PM', '136,000', 'amana'),
(24, 'Thu-Apr-2019', '07:05 PM', '512,000', 'amana'),
(25, 'Fri-Apr-2019', '06:49 PM', '130,500', 'amana'),
(26, 'Tue-Apr-2019', '06:45 PM', '244,000', 'amana');

-- --------------------------------------------------------

--
-- Table structure for table `daily_post`
--

CREATE TABLE `daily_post` (
  `id` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `timee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `timee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `description`, `qty`, `price`, `amount`, `datee`, `timee`) VALUES
(4, 'Gionee F205 2gb RAM 16gb ROM', '1', '37000', '37000', '10/12/2018', '02:09 PM'),
(5, 'Tecno Wx3P', '1', '25000', '25000', '10/12/2018', '02:11 PM'),
(6, 'Itel 2160', '1', '3500', '3500', '10/12/2018', '02:12 PM'),
(7, 'Tecno t349', '1', '4000', '4000', '10/12/2018', '02:12 PM'),
(8, 'Tecno spark 2', '2', '35000', '70000', '11/12/2018', '02:16 PM'),
(9, 'Infinix Hot6 2gb', '1', '42000', '42000', '11/12/2018', '02:16 PM'),
(10, 'Tecno T484', '2', '7500', '15000', '11/12/2018', '02:19 PM'),
(11, 'Tecno T371', '1', '4800', '4800', '11/12/2018', '02:20 PM'),
(12, 'Tecno pop 1', '1', '25000', '25000', '12/12/2018', '02:25 PM'),
(13, 'Tecno F1', '1', '22000', '22000', '12/12/2018', '02:26 PM'),
(14, 'itel 2190', '1', '4000', '4000', '12/12/2018', '02:26 PM'),
(15, 'Infinix Hot6 2gb', '1', '43000', '43000', '12/12/2018', '02:27 PM'),
(16, 'Tecno T473', '2', '6450', '12900', '12/12/2018', '02:28 PM'),
(17, 'Tecno Wx3P', '2', '26000', '52000', '13/12/2018', '02:50 PM'),
(18, 'Tecno Wx3P', '1', '26000', '26000', '13/12/2018', '02:51 PM'),
(19, 'Tecno Wx3P', '1', '26000', '26000', '13/12/2018', '02:51 PM'),
(20, 'Tecno Wx3P', '1', '25500', '25500', '13/12/2018', '02:51 PM'),
(21, 'Itel 2160', '1', '3500', '3500', '13/12/2018', '05:24 PM'),
(22, 'Tecno T371', '1', '5000', '5000', '17/12/2018', '05:35 PM'),
(23, 'Tecno T371', '1', '5000', '5000', '17/12/2018', '05:35 PM'),
(24, 'Itel 2160', '1', '3000', '3000', '17/12/2018', '05:35 PM'),
(25, 'Tecno pop 1', '1', '25000', '25000', '18/12/2018', '02:06 PM'),
(26, 'Tecno spark 2', '1', '38000', '38000', '18/12/2018', '03:41 PM'),
(27, 'blackberry', '1', '40000', '40000', '18/12/2018', '03:42 PM'),
(28, 'Itel 2160', '2', '3000', '6000', '19/12/2018', '12:29 PM'),
(29, 'Tecno pop 1', '1', '25000', '25000', '19/12/2018', '12:32 PM'),
(30, 'Tecno pop 1', '1', '23500', '23500', '19/12/2018', '05:47 PM'),
(31, 'Tecno T371', '1', '5000', '5000', '19/12/2018', '05:47 PM'),
(32, 'Tecno T465', '1', '6000', '6000', '20/12/2018', '05:53 PM'),
(33, 'Tecno LA7 (3GB)', '1', '52000', '52000', '20/12/2018', '05:54 PM'),
(34, 'itel  S32', '1', '35000', '35000', '20/12/2018', '05:55 PM'),
(35, 'Gionee F205 2gb RAM 16gb ROM', '1', '35000', '35000', '20/12/2018', '05:55 PM'),
(36, 'Tecno T371', '1', '4800', '4800', '20/12/2018', '05:56 PM'),
(37, 'Tecno LA7 (3GB)', '1', '45000', '45000', '20/12/2018', '05:56 PM'),
(38, 'Itel 2160', '1', '3000', '3000', '20/12/2018', '05:57 PM'),
(39, 'itel 5600', '1', '4500', '4500', '20/12/2018', '05:57 PM'),
(40, 'Tecno T528', '3', '7300', '21900', '21/12/2018', '08:59 AM'),
(41, 'Tecno T484', '3', '7500', '22500', '21/12/2018', '08:59 AM'),
(42, 'Tecno T371', '3', '4800', '14400', '21/12/2018', '08:59 AM'),
(43, 'Tecno spark 2 (2gb)', '2', '39500', '79000', '21/12/2018', '09:00 AM'),
(44, 'Tecno LA7 (3GB)', '1', '42000', '42000', '21/12/2018', '09:01 AM'),
(45, 'Tecno T528', '10', '7300', '73000', '21/12/2018', '09:03 AM'),
(46, 'Tecno T484', '10', '7500', '75000', '21/12/2018', '09:04 AM'),
(47, 'Tecno T371', '10', '4800', '48000', '21/12/2018', '09:04 AM'),
(48, 'Tecno T473', '10', '6500', '65000', '21/12/2018', '09:04 AM'),
(49, 'Tecno t349', '10', '3800', '38000', '21/12/2018', '09:05 AM'),
(50, 'Tecno T465', '10', '5900', '59000', '21/12/2018', '09:05 AM'),
(51, 'Tecno T528', '10', '7500', '75000', '21/12/2018', '09:07 AM'),
(52, 'Tecno T473', '6', '6400', '38400', '21/12/2018', '09:07 AM'),
(53, 'Tecno t349', '10', '3650', '36500', '21/12/2018', '09:09 AM'),
(54, 'Tecno T484', '10', '7800', '78000', '21/12/2018', '09:09 AM'),
(55, 'Tecno T465', '10', '5800', '58000', '21/12/2018', '09:10 AM'),
(56, 'Tecno T371', '10', '4650', '46500', '21/12/2018', '09:10 AM'),
(57, 'Tecno T401', '10', '4800', '48000', '21/12/2018', '09:11 AM'),
(58, 'Tecno T371', '1', '5500', '5500', '22/12/2018', '09:11 AM'),
(59, 'Tecno T371', '1', '5500', '5500', '22/12/2018', '09:11 AM'),
(60, 'Itel 2160', '1', '3500', '3500', '22/12/2018', '09:18 AM'),
(61, 'Tecno pop 1', '2', '25000', '50000', '22/12/2018', '09:19 AM'),
(62, 'Tecno LA7 (3GB)', '1', '42000', '42000', '22/12/2018', '09:21 AM'),
(63, 'Tecno pop 1', '1', '23000', '23000', '22/12/2018', '09:21 AM'),
(64, 'Tecno pop 1', '1', '23000', '23000', '22/12/2018', '09:21 AM'),
(65, 'Tecno spark 2 (2gb)', '1', '40500', '40500', '22/12/2018', '09:26 AM'),
(66, 'Tecno Y2', '1', '15500', '15500', '22/12/2018', '05:52 PM'),
(67, 'Tecno T465', '1', '6000', '6000', '23/12/2018', '03:28 PM'),
(68, 'Nokia 216', '1', '12000', '12000', '23/12/2018', '03:29 PM'),
(69, 'Tecno T528', '5', '7100', '35500', '23/12/2018', '03:29 PM'),
(70, 'Tecno T528', '2', '7500', '15000', '23/12/2018', '03:29 PM'),
(71, 'Tecno spark 2 (2gb)', '1', '40000', '40000', '23/12/2018', '03:30 PM'),
(72, 'Samsung Keystone', '1', '6000', '6000', '23/12/2018', '03:30 PM'),
(73, 'Tecno t349', '1', '4000', '4000', '23/12/2018', '03:31 PM'),
(74, 'Tecno spark 2 (2gb)', '2', '42000', '84000', '24/12/2018', '05:29 PM'),
(75, 'itel 6910', '1', '7500', '7500', '24/12/2018', '05:30 PM'),
(76, 'Tecno LA7 (3GB)', '1', '42000', '42000', '24/12/2018', '05:31 PM'),
(77, 'Nokia 216', '1', '12000', '12000', '24/12/2018', '05:32 PM'),
(78, 'Tecno LA7 (3GB)', '1', '42000', '42000', '24/12/2018', '05:36 PM'),
(79, 'Tecno LA7 (3GB)', '1', '42000', '42000', '24/12/2018', '05:47 PM'),
(80, 'Tecno LA7 (3GB)', '1', '42000', '42000', '24/12/2018', '05:47 PM'),
(81, 'Tecno T465', '1', '6300', '6300', '24/12/2018', '05:48 PM'),
(82, 'Tecno Y2', '1', '5500', '5500', '24/12/2018', '05:50 PM'),
(83, 'Infinix Hot6 2gb', '1', '41000', '41000', '24/12/2018', '05:53 PM'),
(84, 'Tecno Y2', '10', '15000', '150000', '24/12/2018', '05:54 PM'),
(85, 'Tecno T528', '25', '7200', '180000', '24/12/2018', '05:55 PM'),
(86, 'Tecno T484', '20', '8000', '160000', '24/12/2018', '05:55 PM'),
(87, 'Infinix Hot6 1gb', '1', '37000', '37000', '27/12/2018', '04:58 PM'),
(88, 'Infinix Hot6 1gb', '1', '36000', '36000', '27/12/2018', '04:59 PM'),
(89, 'Infinix Hot6 2gb', '1', '43000', '43000', '27/12/2018', '04:59 PM'),
(90, 'Samsung Keystone', '1', '6500', '6500', '27/12/2018', '04:59 PM'),
(91, 'Infinix Hot6 3gb', '1', '51000', '51000', '27/12/2018', '05:00 PM'),
(92, 'Tecno LA7 (3GB)', '1', '43000', '43000', '27/12/2018', '05:01 PM'),
(93, 'Infinix Hot6 3gb', '1', '53000', '53000', '27/12/2018', '05:01 PM'),
(94, 'Tecno T371', '1', '5000', '5000', '27/12/2018', '05:02 PM'),
(95, 'Tecno T473', '1', '7000', '7000', '27/12/2018', '05:02 PM'),
(96, 'Tecno T465', '2', '6000', '12000', '27/12/2018', '05:04 PM'),
(97, 'Tecno LA7 (3GB)', '1', '42000', '42000', '27/12/2018', '05:06 PM'),
(98, 'Infinix Smart', '1', '30000', '30000', '28/12/2018', '04:37 PM'),
(99, 'Infinix Hot6 2gb', '1', '43000', '43000', '28/12/2018', '04:37 PM'),
(100, 'Iphone 7 (32gb)', '1', '177000', '177000', '28/12/2018', '04:38 PM'),
(101, 'Tecno F1', '1', '20000', '20000', '28/12/2018', '04:38 PM'),
(102, 'Tecno spark 2 (2gb)', '1', '44000', '44000', '28/12/2018', '05:36 PM'),
(103, 'Tecno T528', '1', '8000', '8000', '30/12/2018', '02:36 PM'),
(104, 'Infinix Hot6 2gb', '1', '45000', '45000', '30/12/2018', '02:36 PM'),
(105, 'Itel 2160', '1', '3500', '3500', '30/12/2018', '05:23 PM'),
(106, 'Infinix Hot6 1gb', '1', '36500', '36500', '30/12/2018', '05:24 PM'),
(107, 'Tecno T473', '1', '6500', '6500', '31/12/2018', '03:42 PM'),
(108, 'Itel 2160', '2', '3500', '7000', '31/12/2018', '03:43 PM'),
(109, 'Tecno spark 2(1gb)', '2', '34500', '69000', '31/12/2018', '03:45 PM'),
(110, 'Tecno spark 2(1gb)', '1', '35000', '35000', '31/12/2018', '03:47 PM'),
(111, 'Infinix hot6 x 2gb', '1', '45000', '45000', '02/01/2019', '03:56 PM'),
(112, 'Infinix Hot6 2gb', '1', '42000', '42000', '02/01/2019', '03:57 PM'),
(113, 'Tecno F1', '1', '20000', '20000', '02/01/2019', '03:59 PM'),
(114, 'Infinix Hot6 2gb', '3', '45000', '135000', '02/01/2019', '04:49 PM'),
(115, 'Infinix hot6 x 2gb', '2', '45000', '90000', '02/01/2019', '04:50 PM'),
(116, 'Infinix Hot6 2gb', '1', '42000', '42000', '03/01/2019', '10:46 AM'),
(117, 'Infinix hot6 x 2gb', '1', '45000', '45000', '03/01/2019', '10:49 AM'),
(118, 'Tecno T528', '200', '7170', '1434000', '16/03/2019', '02:53 PM'),
(119, 'Tecno T528', '1', '7500', '7500', '19/03/2019', '12:15 PM'),
(120, 'Tecno T528', '1', '8000', '8000', '19/03/2019', '12:16 PM'),
(121, 'Tecno T528', '1', '7500', '7500', '19/03/2019', '12:17 PM'),
(122, 'Tecno T528', '1', '8200', '8200', '19/03/2019', '12:20 PM'),
(123, 'Tecno T528', '10', '7200', '72000', '19/03/2019', '12:21 PM'),
(124, 'Tecno T528', '1', '7000', '7000', '19/03/2019', '12:23 PM'),
(125, 'Tecno T528', '       3                                          ', '7500', '22500', '19/03/2019', '12:29 PM'),
(126, 'Tecno T528', '5', '7200', '36000', '19/03/2019', '12:29 PM'),
(127, 'Tecno T528', '3', '7500', '22500', '19/03/2019', '12:31 PM'),
(128, 'Tecno T528', '3', '7500', '22500', '19/03/2019', '12:32 PM'),
(129, 'Tecno T528', '2', '7100', '14200', '19/03/2019', '12:35 PM'),
(130, 'Tecno T528', '4', '7200', '28800', '19/03/2019', '12:36 PM'),
(131, 'Tecno T528', '2', '7000', '14000', '19/03/2019', '12:37 PM'),
(132, 'Tecno T528', '5', '7100', '35500', '19/03/2019', '12:39 PM'),
(133, 'Tecno T528', '4', '7100', '28400', '19/03/2019', '12:43 PM'),
(134, 'Tecno T371', '1', '5000', '5000', '20/03/2019', '09:37 AM'),
(135, 'Tecno T371', '1', '5000', '5000', '20/03/2019', '09:39 AM'),
(136, 'Tecno T371', '1', '5000', '5000', '20/03/2019', '09:42 AM'),
(137, 'Tecno T371', '10', '4800', '48000', '20/03/2019', '09:43 AM'),
(138, 'Tecno T371', '5', '4800', '24000', '20/03/2019', '09:45 AM'),
(139, 'Tecno T371', '5', '4800', '24000', '20/03/2019', '09:48 AM'),
(140, 'Tecno T371', '1', '4900', '4900', '20/03/2019', '09:58 AM'),
(141, 'Tecno T371', '1', '4800', '4800', '20/03/2019', '10:15 AM'),
(142, 'Tecno LA7 (3GB)', '1', '43000', '43000', '22/03/2019', '09:41 AM'),
(143, 'Tecno LA7 (3GB)', '1', '43500', '43500', '22/03/2019', '09:44 AM'),
(144, 'Tecno LA7 (3GB)', '1', '43000', '43000', '22/03/2019', '09:50 AM'),
(145, 'Tecno spark 2 (2gb)', '1', '40500', '40500', '22/03/2019', '10:13 AM'),
(146, 'Tecno spark 2(1gb)', '1', '34500', '34500', '22/03/2019', '10:25 AM'),
(147, 'Tecno spark 2(1gb)', '1', '33500', '33500', '22/03/2019', '10:27 AM'),
(148, 'Tecno T465', '1', '6500', '6500', '22/03/2019', '10:40 AM'),
(149, 'Tecno T465', '1', '6500', '6500', '22/03/2019', '10:40 AM'),
(150, 'Tecno T465', '1', '6500', '6500', '22/03/2019', '10:42 AM'),
(151, 'tecno pop1', '1', '25000', '25000', '22/03/2019', '11:35 AM'),
(152, 'Tecno pop 1', '1', '23000', '23000', '22/03/2019', '11:45 AM'),
(153, 'Tecno pop 1', '1', '24000', '24000', '22/03/2019', '11:46 AM'),
(154, 'Tecno pop 1', '1', '23000', '23000', '22/03/2019', '11:46 AM'),
(155, 'Tecno pop 1', '2', '23000', '46000', '22/03/2019', '11:47 AM'),
(156, 'Tecno pop 1', '1', '24000', '24000', '22/03/2019', '11:48 AM'),
(157, 'Tecno T371', '2', '55000', '110000', '22/03/2019', '01:10 PM'),
(158, 'Tecno T371', '2', '4900', '9800', '22/03/2019', '01:15 PM'),
(159, 'Tecno T371', '1', '5000', '5000', '22/03/2019', '01:15 PM'),
(160, 'Tecno T371', '1', '55000', '55000', '22/03/2019', '01:15 PM'),
(161, 'Tecno t349', '1', '4000', '4000', '22/03/2019', '01:23 PM'),
(162, 'Tecno t349', '1', '3800', '3800', '22/03/2019', '01:23 PM'),
(163, 'Tecno t349', '1', '4000', '4000', '22/03/2019', '01:24 PM'),
(164, 'Tecno t349', '3', '4000', '12000', '22/03/2019', '01:25 PM'),
(165, 'Tecno t349', '1', '4000', '4000', '22/03/2019', '01:26 PM'),
(166, 'Tecno t349', '1', '4000', '4000', '22/03/2019', '01:27 PM'),
(167, 'Tecno t349', '1', '4000', '4000', '22/03/2019', '01:27 PM'),
(168, 'Tecno T528', '5', '7500', '37500', '30/03/2019', '04:12 PM'),
(169, 'Tecno T528', '5', '7500', '37500', '30/03/2019', '04:12 PM'),
(170, 'Tecno T401', '5', '5300', '26500', '30/03/2019', '04:14 PM'),
(171, 'Tecno T528', '1', '7500', '7500', '30/03/2019', '04:14 PM'),
(172, 'TECNO LB6', '2', '37000', '74000', '30/03/2019', '04:16 PM'),
(173, 'Tecno T661', '1', '8300', '8300', '30/03/2019', '04:17 PM'),
(174, 'Tecno T401', '1', '5500', '5500', '30/03/2019', '04:17 PM'),
(175, 'Tecno T401', '2', '5500', '11000', '30/03/2019', '04:19 PM'),
(176, 'Tecno LA7 (3GB)', '3', '44000', '132000', '30/03/2019', '04:20 PM'),
(177, 'TECNO LB6', '8', '35000', '280000', '30/03/2019', '04:21 PM'),
(178, 'Tecno T661', '10', '8500', '85000', '30/03/2019', '04:24 PM'),
(179, 'Tecno T528', '25', '8000', '200000', '30/03/2019', '04:25 PM'),
(180, 'Tecno T528', '25', '8000', '200000', '30/03/2019', '04:25 PM'),
(181, 'TECNO POP2 POWER', '9', '27000', '243000', '30/03/2019', '04:36 PM'),
(182, 'Tecno spark 2(1gb)', '1', '35000', '35000', '30/03/2019', '04:51 PM'),
(183, 'Tecno spark 2(1gb)', '1', '35000', '35000', '30/03/2019', '04:52 PM'),
(184, 'Tecno spark 2(1gb)', '1', '35000', '35000', '30/03/2019', '04:53 PM'),
(185, 'Tecno spark 2(1gb)', '2', '35000', '70000', '30/03/2019', '04:53 PM'),
(186, 'Tecno spark 2(1gb)', '3', '35000', '105000', '30/03/2019', '04:53 PM'),
(187, 'Tecno spark 2(1gb)', '9', '35000', '315000', '30/03/2019', '04:54 PM'),
(188, 'Tecno LA7 (3GB)', '4', '45000', '180000', '31/03/2019', '10:31 AM'),
(189, 'Infinix Note5 3gb', '1', '65000', '65000', '31/03/2019', '04:35 PM'),
(190, 'INFINIX HOT7 2G', '5', '42000', '210000', '31/03/2019', '04:36 PM'),
(191, 'Infinix hot7', '3', '4000', '12000', '31/03/2019', '04:37 PM'),
(192, 'Tecno Camon 11 Pro', '6', '75000', '450000', '31/03/2019', '05:11 PM'),
(193, 'tecno pop1 pro', '2', '27000', '54000', '31/03/2019', '05:35 PM'),
(194, 'tecno pop1 pro', '2', '27000', '54000', '31/03/2019', '05:35 PM'),
(195, 'TECNO POP2 POWER', '1', '26000', '26000', '02/04/2019', '10:23 AM'),
(196, 'TECNO POP2 POWER', '1', '25000', '25000', '02/04/2019', '10:23 AM'),
(197, 'Infinix hot7', '2', '4000', '8000', '02/04/2019', '10:30 AM'),
(198, 'INFINIX HOT7 2G', '5', '45000', '225000', '02/04/2019', '10:32 AM'),
(199, 'TECNO POP2 POWER', '1', '25000', '25000', '02/04/2019', '01:14 PM'),
(200, 'TECNO LB6', '1', '38000', '38000', '02/04/2019', '04:14 PM'),
(201, 'TECNO LB6', '1', '38000', '38000', '02/04/2019', '04:14 PM'),
(202, 'TECNO LB6', '2', '36000', '72000', '02/04/2019', '04:26 PM'),
(203, 'TECNO POP2 POWER', '1', '26000', '26000', '02/04/2019', '04:26 PM'),
(204, 'Tecno spark 2(1gb)', '3', '36000', '108000', '02/04/2019', '04:27 PM'),
(205, 'TECNO LB6', '1', '38000', '38000', '02/04/2019', '06:47 PM'),
(206, 'Tecno T528', '10', '7400', '74000', '03/04/2019', '10:04 AM'),
(207, 'Tecno T661', '10', '8400', '84000', '03/04/2019', '10:05 AM'),
(208, 'Tecno T401', '10', '5400', '54000', '03/04/2019', '10:06 AM'),
(209, 'samsung galaxyA7', '1', '110000', '110000', '04/04/2019', '01:21 PM'),
(210, 'TECNO POP2 POWER', '1', '26000', '26000', '04/04/2019', '05:10 PM'),
(211, 'Tecno T528', '1', '8000', '8000', '05/04/2019', '01:05 PM'),
(212, 'Tecno T528', '1', '8000', '8000', '05/04/2019', '01:05 PM'),
(213, 'TECNO POP2 POWER', '1', '26000', '26000', '05/04/2019', '06:42 PM'),
(214, 'TECNO POP2 POWER', '1', '26000', '26000', '05/04/2019', '06:42 PM'),
(215, 'TECNO LB6', '1', '37000', '37000', '06/04/2019', '06:34 PM'),
(216, 'TECNO LB6', '1', '37000', '37000', '06/04/2019', '06:34 PM'),
(217, 'Tecno LA7 (3GB)', '1', '43000', '43000', '06/04/2019', '06:36 PM'),
(218, 'Tecno LA7 (3GB)', '2', '43000', '86000', '10/04/2019', '10:03 AM'),
(219, 'TECNO LB6', '1', '37000', '37000', '10/04/2019', '10:09 AM'),
(220, 'TECNO LB6', '2', '33500', '67000', '10/04/2019', '10:09 AM'),
(221, 'Tecno T528', '1', '8000', '8000', '10/04/2019', '10:10 AM'),
(222, 'Tecno T528', '1', '7500', '7500', '10/04/2019', '10:10 AM'),
(223, 'TECNO POP2 POWER', '1', '26000', '26000', '10/04/2019', '06:36 PM'),
(224, 'TECNO POP2 POWER', '1', '27000', '27000', '10/04/2019', '06:36 PM'),
(225, 'Infinix hot7', '1', '35000', '35000', '11/04/2019', '01:50 PM'),
(226, 'TECNO LB6', '1', '33500', '33500', '11/04/2019', '07:04 PM'),
(227, 'TECNO POP2 POWER', '2', '26000', '52000', '12/04/2019', '01:15 PM'),
(228, 'Tecno T401', '1', '5500', '5500', '12/04/2019', '01:15 PM'),
(229, 'Tecno Camon 11 Pro', '1', '73000', '73000', '12/04/2019', '05:28 PM'),
(230, 'Tecno T528', '2', '7500', '15000', '16/04/2019', '06:41 PM'),
(231, 'Tecno T661', '1', '8500', '8500', '16/04/2019', '06:41 PM'),
(232, 'Tecno T528', '2', '7500', '15000', '16/04/2019', '06:42 PM'),
(233, 'Tecno T401', '2', '55000', '110000', '16/04/2019', '06:42 PM'),
(234, 'tecno pop1 pro', '2', '26000', '52000', '16/04/2019', '06:43 PM'),
(235, 'TECNO LB6', '1', '35000', '35000', '16/04/2019', '06:43 PM'),
(236, 'Tecno T661', '1', '8500', '8500', '16/04/2019', '06:44 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'yusuf', 'yusuf', 'user'),
(2, 'coder', 'coder', 'admin'),
(3, 'aliyu', 'aliyu', 'user'),
(4, 'mas', 'admin', 'admin'),
(5, 'happy', 'lolo', 'user'),
(6, 'amana', '1122', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_history`
--
ALTER TABLE `daily_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_post`
--
ALTER TABLE `daily_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `daily_history`
--
ALTER TABLE `daily_history`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `daily_post`
--
ALTER TABLE `daily_post`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
