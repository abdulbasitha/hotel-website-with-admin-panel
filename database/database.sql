-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 08:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `adults` varchar(100) NOT NULL,
  `children` varchar(100) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bookingdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `gender`, `phno`, `arrival`, `departure`, `adults`, `children`, `roomtype`, `days`, `address`, `amount`, `paymentid`, `status`, `bookingdate`) VALUES
(29, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'economy', '3', 'sdsd', '9000', 'OFFLINE', 'paid', '2018-12-11'),
(30, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'economy', '3', 'sdsd', '9000', 'OFFLINE', 'paid', '2018-12-11'),
(31, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'economy', '3', 'sdsd', '9000', 'OFFLINE', 'paid', '2018-12-11'),
(32, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'standard', '3', 'sdsd', '12000', 'OFFLINE', 'paid', '2018-12-11'),
(33, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'standard', '3', 'sdsd', '12000', 'OFFLINE', 'paid', '2018-12-11'),
(34, 'abdul basith a', 'ambalavanbasith@gmail.com', 'male', '9544752154', '2018-12-11', '2018-12-14', '1', '0', 'standard', '3', 'sdsd', '12000', 'OFFLINE', 'paid', '2018-12-11'),
(35, 'dfd', 'ambalavanbasith@gmail.com', 'male', '09544752154', '2020-05-15', '2020-05-16', '1', '0', 'economy', '1', 'ambalavan house\r\nmakkaraparamba post', '3000', 'OFFLINE', 'unpaid', '2020-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phno`, `msg`, `date`) VALUES
(1, 'ABDUL BASITH A', 'ambalavanbasith@gmail.com', '9544752154', 'llklklklk', '2018-08-24'),
(2, 'ABDUL BASITH A', 'ambalavanbasith@gmail.com', '9544752154', '9544752154', '2018-09-10'),
(3, 'ABDUL BASITH A', 'ambalavanbasith@gmail.com', '9544752154', 'assasa', '2018-09-10'),
(4, 'ABDUL BASITH', 'ambalavanbasith@gmail.com', '9544752154', 'sdsdsd', '2018-09-10'),
(5, 'ABDUL BASITH A', 'ambalavanbasith@gmail.com', '9544752154', 'dfdsfsfs', '2018-09-10'),
(6, 'BADEEH', 'ambsdsjdb@kerklwkrlw', '9544752154', 'slkrlskslr\r\ndlsklskrlskrlskrlkrlsrlskrs\r\ndkrlsrklskrlkslrklsrlkslrkslkrlklskrs\r\nsrlkslrklskrlskrlskrlskrlkslrklsrklskrlskrlskr', '2018-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `resort_name` varchar(250) NOT NULL,
  `resort_phno` varchar(250) NOT NULL,
  `resort_email` varchar(250) NOT NULL,
  `resort_fb` varchar(250) NOT NULL,
  `resort_insta` varchar(250) NOT NULL,
  `resort_whatsapp` varchar(250) NOT NULL,
  `resort_address` varchar(250) NOT NULL,
  `resort_about` varchar(2500) NOT NULL,
  `resort_features` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `resort_name`, `resort_phno`, `resort_email`, `resort_fb`, `resort_insta`, `resort_whatsapp`, `resort_address`, `resort_about`, `resort_features`) VALUES
(1, 'Kairali Farm Resort', '8281906010', 'Kairalifarmresort@gmail.com', 'Not Now', 'Not Now', 'Not Now', 'Vendekkumpoyil <br>\r\nKarimb Road <br>\r\n673604, Malappuram Kerala, India', 'After a busy schedule, everybody needs a break and have time for leisure and recreation. Kairali Farm Resort help for  where you can spend time along with your loved ones or family on a holiday trip.\r\n<u><b>Nearest tourist places</b></u>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=Water%20Theme%20Park%20Kakkadampoyil\">Water Theme Park Kakkadampoyil</a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=Kozhippara Waterfalls \">Kozhippara Waterfalls </a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=Kakkadampoyil\">Kakkadampoyil </a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=Nilambur\">Nilambur </a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=thusharagiri waterfalls\">Thusharagiri waterfalls</a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=adyanpara waterfalls\">Adyanpara waterfalls</a></b>\r\nâ€¢   <b><a href=\"https://www.google.co.in/search?ei=3K-zW_DUG9uH9QOor5GIAw&q=Conolly Plot\">Conolly Plot</a></b>\r\n\r\n', 'Kairali Farm Resort Team is committed and emphasizes on offering our guests an experience that keeps all ages happy away from the hustle and bustle of the city life, yet not far off from the city making it easily accessible for a quick rejuvenating getaway.\r\nOur team, renowned for their warmth and heartfelt hospitality, look forward to welcoming you to Kairali Farm Resort, a home away from home where you can arrive as a guest and leave as a friend.');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `oneline` varchar(100) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `quadity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomname`, `price`, `oneline`, `comments`, `quadity`) VALUES
(1, 'economy', '3000', 'ouble-bed room', 'Desk, Fan, Heating, Hardwood/Parquet floors, Shower, Hairdryer, Free toiletries, Toilet, Bathroom, Telephone, Flat-screen TV with 220 international channels, Wake-up service, Free WiFi is available in all rooms. Access to common kitchen on the same floor.', '10'),
(2, 'standard', '4000', 'double-bed room with balcony', 'Desk, Fan , Heating , Wooden / Parquet floor , Hairdryer , Free toiletries , toilet , bathroom, telephone , flat-screen TV with 220 international channels , Wake Up calls,  WI-FI is available in all rooms . Access to common kitchen on the same floor.', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
