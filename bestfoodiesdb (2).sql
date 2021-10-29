-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 08:48 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestfoodiesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`username`, `password`) VALUES
('admin', 'min1');

-- --------------------------------------------------------

--
-- Table structure for table `banner_details`
--

CREATE TABLE `banner_details` (
  `bid` int(11) NOT NULL,
  `banner` text NOT NULL,
  `ImagePath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_details`
--

INSERT INTO `banner_details` (`bid`, `banner`, `ImagePath`) VALUES
(3, 'nice meal', 'images/1 (2).jpg'),
(5, 'ads', 'images/-259594522.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `Booking_Id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Days` int(11) NOT NULL,
  `Toatal_amt` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`Booking_Id`, `User_ID`, `Date`, `Days`, `Toatal_amt`) VALUES
(23, 2, '11/08/2017', 7, '800'),
(24, 2, '14/08/2017', 7, '520'),
(25, 0, '', 7, '0'),
(26, 2, '07/11/2017', 7, '80'),
(27, 6, '14/06/2018', 7, '580');

-- --------------------------------------------------------

--
-- Table structure for table `dayandtimedetails`
--

CREATE TABLE `dayandtimedetails` (
  `DayAndTime_ID` int(11) NOT NULL,
  `Day_Name` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dayandtimedetails`
--

INSERT INTO `dayandtimedetails` (`DayAndTime_ID`, `Day_Name`, `Time`) VALUES
(7, 'Monday', 'Breakfast'),
(8, 'Monday', 'Lunch'),
(9, 'Monday', 'Dinner'),
(10, 'Tuesday', 'Breakfast'),
(11, 'Tuesday', 'Lunch'),
(12, 'Tuesday', 'Dinner'),
(13, 'Wednesday', 'Breakfast'),
(14, 'Wednesday', 'Lunch'),
(15, 'Wednesday', 'Dinner'),
(16, 'Thursday', 'Breakfast'),
(17, 'Thursday', 'Lunch'),
(18, 'Thursday', 'Dinner'),
(19, 'Friday', 'Breakfast'),
(20, 'Friday', 'Lunch'),
(21, 'Friday', 'Dinner'),
(22, 'Saturday', 'Breakfast'),
(23, 'Saturday', 'Lunch'),
(24, 'Saturday', 'Dinner'),
(25, 'Sunday', 'Breakfast'),
(26, 'Sunday', 'Lunch'),
(27, 'Sunday', 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `daywisemeal_details`
--

CREATE TABLE `daywisemeal_details` (
  `DM_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Meal_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daywisemeal_details`
--

INSERT INTO `daywisemeal_details` (`DM_ID`, `ID`, `Meal_ID`) VALUES
(1100, 7, 7),
(1101, 7, 8),
(1102, 8, 9),
(1103, 8, 10),
(1104, 8, 11),
(1105, 8, 12),
(1106, 9, 15),
(1107, 9, 16),
(1108, 9, 17),
(1109, 9, 18),
(1111, 10, 7),
(1112, 10, 8),
(1113, 10, 9),
(1114, 10, 10),
(1116, 11, 7),
(1117, 11, 18),
(1118, 11, 19),
(1119, 11, 20),
(1121, 12, 7),
(1122, 12, 10),
(1123, 12, 11),
(1124, 13, 15),
(1125, 13, 16),
(1126, 13, 17),
(1127, 13, 18),
(1128, 14, 21),
(1129, 14, 22),
(1130, 14, 23),
(1131, 14, 24),
(1132, 14, 25),
(1133, 15, 7),
(1134, 15, 8),
(1135, 15, 9),
(1136, 15, 10),
(1137, 16, 11),
(1138, 16, 13),
(1139, 16, 17),
(1140, 16, 18),
(1142, 17, 23),
(1143, 17, 24),
(1144, 17, 25),
(1145, 17, 26),
(1146, 22, 7),
(1147, 22, 8),
(1148, 22, 9);

-- --------------------------------------------------------

--
-- Table structure for table `day_wise_booking`
--

CREATE TABLE `day_wise_booking` (
  `Dwb_Id` int(11) NOT NULL,
  `Booking_Id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `DayTime_Id` int(11) NOT NULL,
  `Meal_Id` int(11) NOT NULL,
  `cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_wise_booking`
--

INSERT INTO `day_wise_booking` (`Dwb_Id`, `Booking_Id`, `User_ID`, `DayTime_Id`, `Meal_Id`, `cost`) VALUES
(33, 23, 2, 7, 7, '80'),
(34, 23, 2, 8, 11, '60'),
(35, 23, 2, 9, 16, '80'),
(36, 23, 2, 10, 7, '80'),
(37, 23, 2, 11, 18, '60'),
(38, 23, 2, 12, 10, '80'),
(39, 23, 2, 12, 11, '60'),
(40, 23, 2, 13, 16, '80'),
(41, 23, 2, 14, 22, '120'),
(42, 23, 2, 15, 9, '100'),
(44, 24, 2, 7, 8, '60'),
(45, 24, 2, 8, 10, '80'),
(46, 24, 2, 9, 17, '80'),
(47, 24, 2, 13, 15, '70'),
(48, 24, 2, 14, 21, '150'),
(49, 24, 2, 15, 7, '80'),
(50, 26, 2, 8, 10, '80'),
(51, 0, 2, 7, 7, '80'),
(52, 0, 2, 8, 9, '100'),
(53, 0, 2, 9, 15, '70'),
(54, 27, 6, 8, 10, '80'),
(55, 27, 6, 8, 11, '60'),
(56, 27, 6, 9, 17, '80'),
(57, 27, 6, 10, 10, '80'),
(58, 27, 6, 11, 19, '60'),
(59, 27, 6, 12, 11, '60'),
(60, 27, 6, 13, 17, '80'),
(61, 27, 6, 14, 23, '80');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `F_Id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Meal` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`F_Id`, `User_ID`, `Date`, `Meal`, `feedback`) VALUES
(2, 2, '13/08/2017', 'Fried kachodi', 'jfdsgjkhsdfkljvjbdfnkjhfdv dsjjvsdjgvhbfdnv hjdbjfjdhfjsljdhfjshajkdhfjsdjkfakjhlasdhfjkhsjkjkaljkhjkhdjsjfsdahjkds'),
(3, 2, '13/08/2017', 'Stuffed tikki', 'ajshfhf jshdhsd fdjdaf jhdsjkghfs gd sg fs g sfg  fsd g as d g fds g dsf    sfd g fs g fs g sfd g sfd g sfd g ds g sfdg sf '),
(4, 2, '14/08/2017', 'Dahi bhalle', 'asdfghj'),
(5, 2, '15/08/2017', 'Daal makhni', 'safadsfdfdfdf'),
(6, 2, '30/07/2018', 'Stuffed tikki', 'ncxzbcvzxmvcmxzvbczx');

-- --------------------------------------------------------

--
-- Table structure for table `mealdetails`
--

CREATE TABLE `mealdetails` (
  `mealID` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  `Name` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `ImagePath` varchar(2000) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealdetails`
--

INSERT INTO `mealdetails` (`mealID`, `display`, `Name`, `Quantity`, `Unit`, `ImagePath`, `Description`, `Price`) VALUES
(4, 0, 'khichdi', 1, '1 plate', 'images/khichdi.jpg', 'healthy', '50'),
(5, 0, 'lacha prantha', 2, '1 plate', 'images/lacha prantha.jpg', 'eat tasty food', '190'),
(7, 1, 'Stuffed tikki', 1, '1 plate', 'images/stuffed tikki.jpg', 'curd+chutni tadka', '80'),
(8, 1, 'Fried kachodi', 1, '1 plate', 'images/kachodi1.jpg', 'love it at good bite', '60'),
(9, 1, 'Bhindi', 1, '1kg', 'images/bhindi.jpg', 'stuffed with masala ', '100'),
(10, 1, 'Burger', 1, '1', 'images/burger.jpg', 'enjoy your party with it', '80'),
(11, 1, 'Chowmin', 1, '1 plate', 'images/chowmin.jpg', 'love desi chinese', '60'),
(12, 1, 'Daal makhni', 1, '1kg', 'images/daal makhni.jpg', 'enjoy daal with makhan', '70'),
(13, 1, 'Simple aloo', 1, '1 kg', 'images/alloo.jpg', 'healthy aloo', '40'),
(14, 1, 'Bread Sandwich', 1, '4piece', 'images/bread sandwich.jpg', 'good food enjoy it', '80'),
(15, 1, 'Aloo paneer prantha', 1, '2', 'images/aloo paneer prantha.jpg', 'make your day good having tasty prantha', '70'),
(16, 1, 'Stuffed Capcicum', 1, '1 plate', 'images/filled capcicum.jpg', 'enjoy the red yellow capcicum', '80'),
(17, 1, 'Matar paneer', 1, '1 kg', 'images/matar paneer.jpg', 'matar paneer', '80'),
(18, 1, 'Spring roll', 1, '1 plate', 'images/spring roll.jpg', 'good n tasty', '60'),
(19, 1, 'Dhokla', 1, '1plate', 'images/dhokla.jpg', 'gujrat special', '60'),
(20, 1, 'Dahi bhalle', 1, '1 plate', 'images/dahi-bhalle.jpg', 'tasty bhalle', '100'),
(21, 1, 'Moong Daal Halwa', 1, '1 plate', 'images/moong-dal-halwa.jpg', 'sweet n yummy', '150'),
(22, 1, 'Manchurian', 1, '1 plate', 'images/manchurian.jpg', 'tasty manchurian', '120'),
(23, 1, 'Pav Bhaji', 1, '1 plate', 'images/pav-bhaji_625x350_81439874431.jpg', 'tasty pav  bhaji', '80'),
(24, 1, 'Tomato soup', 1, '1 packet', 'images/tomato soup.jpg', 'healthy n tasty', '45'),
(25, 1, 'Shahi paneer', 1, '1 kg', 'images/shahi paneer.jpg', 'tasty n yummy', '150'),
(26, 1, 'Cholle Bature', 1, '1 plate', 'images/cholle bature.jpg', 'yum', '30'),
(27, 0, 'abc', 12, '2kg', 'images/2.jpg', 'asdfgh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(40) NOT NULL,
  `Pin_Code` varchar(6) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Email_Id` text NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_Id`, `Name`, `Address`, `City`, `Pin_Code`, `Contact`, `Email_Id`, `Password`) VALUES
(1, 'asdfgh', 'asdfgh', 'swdsfghjk', '1234', '234', 'sdfgdfsdsdfdg', 'sdfghydff'),
(2, 'ayush', '#283 arya puram ', 'karnal,haryana', '132001', '7206872607', 'ayush0522@gmail.com', '1234'),
(3, 'tanu', '#235 model town', 'karnal', '132001', '9999135467', 'tanu@gmail.com', '12345'),
(4, 'akash', '#223 R.K. puram', 'karnal', '132001', '9991362277', 'akh09997@gmail.com', '1234'),
(5, 'akash', '#234 iti ', 'karnal', '132001', '9991362277', 'ab@gmail.com', '1234'),
(6, 'czgxhcjgzhxj', 'skdhjkdshfkjhdskhfkdshkhfkdsh', 'karnal', '132001', '9999999999', 'ajsgdja@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `img_id` int(11) NOT NULL,
  `Email_Id` varchar(300) NOT NULL,
  `ImagePath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`img_id`, `Email_Id`, `ImagePath`) VALUES
(4, 'ayush0522@gmail.com', 'images/userpic/-972263451.jpg'),
(5, 'tanu@gmail.com', 'images/userpic/1806809874.jpg'),
(6, 'akh09997@gmail.com', 'images/userpic/INDIAN-RAILWAYS.jpg'),
(7, 'ab@gmail.com', 'images/userpic/Indian_Railway-logo-D33F1889EB-seeklogo.com.png'),
(8, 'ajsgdja@gmail.com', 'images/userpic/boat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `banner_details`
--
ALTER TABLE `banner_details`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`Booking_Id`);

--
-- Indexes for table `dayandtimedetails`
--
ALTER TABLE `dayandtimedetails`
  ADD PRIMARY KEY (`DayAndTime_ID`);

--
-- Indexes for table `daywisemeal_details`
--
ALTER TABLE `daywisemeal_details`
  ADD PRIMARY KEY (`DM_ID`);

--
-- Indexes for table `day_wise_booking`
--
ALTER TABLE `day_wise_booking`
  ADD PRIMARY KEY (`Dwb_Id`);

--
-- Indexes for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD PRIMARY KEY (`F_Id`);

--
-- Indexes for table `mealdetails`
--
ALTER TABLE `mealdetails`
  ADD PRIMARY KEY (`mealID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_details`
--
ALTER TABLE `banner_details`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `Booking_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `dayandtimedetails`
--
ALTER TABLE `dayandtimedetails`
  MODIFY `DayAndTime_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `daywisemeal_details`
--
ALTER TABLE `daywisemeal_details`
  MODIFY `DM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1149;
--
-- AUTO_INCREMENT for table `day_wise_booking`
--
ALTER TABLE `day_wise_booking`
  MODIFY `Dwb_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `F_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mealdetails`
--
ALTER TABLE `mealdetails`
  MODIFY `mealID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
