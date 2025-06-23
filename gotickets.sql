-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BusNO` varchar(50) NOT NULL,
  `Driver` text NOT NULL,
  `RouteID` int(11) NOT NULL,
  `Types` varchar(50) NOT NULL,
  `Charges` float NOT NULL,
  `bd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BusNO`, `Driver`, `RouteID`, `Types`, `Charges`, `bd`) VALUES
('AN4597', 'Arnold Hammers', 9, 'NON A/C', 380, 3),
('AR2087', 'Lasanga Perath', 6, 'A/C', 700, 4),
('AR267D', 'Terrance Hater', 8, 'NON A/C', 350, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` int(1) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `rating`, `message`) VALUES
(28, 'asdad', 'sffsk@sfl', 2, 'der'),
(29, 'vh', 'jasa@kd', 2, 'hyt'),
(30, 'asdad', 'jasa@kd', 3, 'get'),
(31, 'adl', 'sffsk@sfl', 3, 'jui'),
(32, 'vh', 'jasa@kd', 3, 'juy'),
(33, 'asdad', 'adl@lk', 3, 'loi'),
(34, 'adl', 'sffsk@sfl', 2, 'lon'),
(35, 'tyu', 'adl@lk', 2, 'hello'),
(36, 'asdad', 'mmmmkfs@gmail.com', 3, 'hello'),
(37, 'adl', 'jasa@kd', 2, 'hui'),
(38, 'asdad', 'mmmmkfs@gmail.com', 2, 'kio'),
(39, 'fast', 'sffsk@sfl', 3, 'juiy'),
(40, 'vh', 'jasa@kd', 2, 'tui'),
(41, 'sukri', 'sffsk@sfl', 5, 'very good '),
(42, 'vh', 'jasa@kd', 2, 'jh'),
(43, 'adl', 'sffsk@sfl', 2, 'gjj'),
(44, 'fast', 'adl@lk', 3, 'hello'),
(45, 'asdad', 'adl@lk', 2, 'ghu'),
(46, 'asdad', 'adl@lk', 3, 'ghu'),
(47, 'adl', 'jasa@kd', 4, 'good job'),
(48, 'rohit', 'gh@lk', 4, 'good service good very good'),
(49, 'adl', 'sffsk@sfl', 5, 'juop'),
(50, 'asdad', 'sffsk@sfl', 3, 'kop');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_id` int(10) NOT NULL,
  `R_id` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_id`, `R_id`, `Date`, `Time`, `Amount`) VALUES
(1, 0, '2023-06-11', '00:18:49', 1000),
(2, 0, '2023-06-11', '00:25:06', 1000),
(3, 164, '2023-06-11', '00:26:38', 1000),
(4, 165, '2023-06-21', '18:25:42', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `f_name`, `l_name`, `gender`, `city`, `email`, `mobile_no`, `username`, `password`) VALUES
(11, 'Faizal', 'amaan', 'male', 'kandy         ', 'faizalamaan2@gmail.com         ', 2147483647, 'amaan     ', '123'),
(12, 'shukry', 'amaan', 'male', 'kandy         ', 'faizalamaan2@gmail.com         ', 2147483647, 'afham       ', '123'),
(13, 'MOhamed', 'Shukry', 'male', 'Akurana', 'Dedsec123@gmail.com', 713769398, 'Dedsec24', 'Kashmira'),
(14, 'MOhamed', 'Mufeez', 'female', 'Akurana', 'mufeez21@gmail.com', 713769398, 'Mufeez21', '1234'),
(15, 'MOhamed', 'Adham', 'others', 'Akurana', 'afham21@gmail.com', 713745612, 'afham21', 'afham21');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `T_ID` int(20) NOT NULL,
  `R_id` int(10) DEFAULT NULL,
  `T_Date` date NOT NULL,
  `T_Time` varchar(8) NOT NULL,
  `Pas_Count` int(11) NOT NULL,
  `Seat_No` varchar(50) NOT NULL,
  `T_Type` varchar(50) NOT NULL,
  `T_Mail` varchar(20) NOT NULL,
  `T_Mobile` int(10) NOT NULL,
  `charges` float NOT NULL,
  `Rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`T_ID`, `R_id`, `T_Date`, `T_Time`, `Pas_Count`, `Seat_No`, `T_Type`, `T_Mail`, `T_Mobile`, `charges`, `Rname`) VALUES
(88, NULL, '2015-02-20', '05:00 PM', 4, '', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(91, NULL, '2015-02-20', '05:00 PM', 4, 's28  s29  ', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(92, NULL, '2015-02-20', '05:00 PM', 4, 's28  s29  ', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(93, NULL, '2015-02-20', '05:00 PM', 4, 's28  s29  ', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(94, NULL, '2015-02-20', '05:00 PM', 4, 's28  s29  ', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(95, NULL, '2015-02-20', '05:00 PM', 4, 's28  s29  ', 'Non-A/C', 'dedsec@gmail.com', 714567899, 0, ''),
(96, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(97, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(98, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(99, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(100, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(101, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(102, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(103, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 0, ''),
(104, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(105, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(106, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(107, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(108, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(109, NULL, '2023-05-05', '08:00 AM', 5, 's26  s27  s31  s32  s37  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(110, NULL, '2032-04-20', '05:00 PM', 5, '', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(111, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(112, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(113, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(114, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(115, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(116, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(117, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(118, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(119, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(120, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(121, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(122, NULL, '2032-04-20', '05:00 PM', 5, 's27  s32  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, ''),
(123, 10, '2023-05-25', '08:00 AM', 5, 's27  s32  ', 'A/C', 'wewonmaara@gmail.com', 717777777, 750, ''),
(124, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(125, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(126, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(127, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(128, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(129, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(130, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(131, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, ''),
(132, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(133, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(134, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(135, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(136, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(137, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(138, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(139, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(140, NULL, '2023-03-20', '12:00 PM', 4, 's21  s22  ', 'NON A/C', 'dedsec@gmail.com', 714567899, 250, 'Akurana - Colombo'),
(141, 10, '2015-06-20', '05:00 PM', 5, '', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(142, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(143, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(144, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(145, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(146, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(147, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(148, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(149, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(150, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(151, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(152, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(153, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(154, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(155, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(156, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(157, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(158, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(159, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(160, 10, '2015-06-20', '05:00 PM', 5, 's26  s27  ', 'A/C', 'adsadsadfs@gmail.com', 2147483647, 750, 'Kurunegala - Matale'),
(161, 10, '2020-02-06', '08:00 AM', 3, 's32  s37  ', 'A/C', 'dedsec@gmail.com', 714567899, 750, 'Kurunegala - Matale'),
(162, 10, '2023-02-20', '12:00 PM', 4, 's12  s17  s22  s27  ', 'NON A/C', 'dedsecwd24@gmail.com', 714567899, 500, 'Kurunegala - Matale'),
(163, NULL, '2023-06-08', '12:00 PM', 4, 's12  s17  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, 'Akurana - Colombo'),
(164, NULL, '2023-06-08', '12:00 PM', 4, 's12  s17  ', 'NON A/C', 'adsadsadfs@gmail.com', 2147483647, 250, 'Akurana - Colombo'),
(165, NULL, '2023-06-22', '05:00 PM', 3, 's16  s21  s22  s27  s37  ', 'NON A/C', 'IT22052124@my.sliit.', 714567899, 600, 'KANDY - AKURANA');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_id` int(10) NOT NULL,
  `RName` varchar(30) NOT NULL,
  `DepartureL` varchar(20) NOT NULL,
  `DestinationL` varchar(20) NOT NULL,
  `Distance` varchar(10) NOT NULL,
  `Description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Route_id`, `RName`, `DepartureL`, `DestinationL`, `Distance`, `Description`) VALUES
(2, 'Akurana - Kandy', 'Akurana', 'Kandy', '15 KM', 'HEY UNATHAN'),
(3, 'Akurana - Matale', 'Akurana', 'Matale', '20 KM', 'HEY'),
(6, 'JAFFNA - COLOMBO', 'JAFFNA ', 'COLOMBO', '250 KM', ''),
(7, 'TRINCOMALEE - KANDY', 'TRINCOMALEE ', 'KANDY', '179 KM', ''),
(8, 'MATALE - TRINCOMALEE', 'MATALE ', 'TRINCOMALEE', '154 KM', ''),
(9, 'Anuradhapura - Matale ', 'Anuradhapura  ', 'Matale ', '111 KM', ''),
(10, 'Kurunegala - Matale', 'Kurunegala ', 'Matale', '52 KM', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BusNO`),
  ADD UNIQUE KEY `bd` (`bd`),
  ADD KEY `fk` (`RouteID`);
ALTER TABLE `bus` ADD FULLTEXT KEY `BusNO` (`BusNO`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `fk_rid` (`R_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `T_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `Route_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `fk` FOREIGN KEY (`RouteID`) REFERENCES `route` (`Route_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_rid` FOREIGN KEY (`R_id`) REFERENCES `route` (`Route_id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
