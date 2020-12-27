-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(123) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `mother` varchar(40) NOT NULL,
  `ID_nber` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `facility` varchar(40) NOT NULL,
  `compuse` varchar(40) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `ID_copy` varchar(400) NOT NULL,
  `diploma` varchar(400) NOT NULL,
  `isPayed` varchar(10) NOT NULL DEFAULT 'no',
  `status` varchar(40) NOT NULL DEFAULT 'pending',
  `reg_date` varchar(123) NOT NULL,
  `stu_location` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `student_id`, `gender`, `birth_date`, `father`, `mother`, `ID_nber`, `email`, `phone`, `school_id`, `facility`, `compuse`, `photo`, `ID_copy`, `diploma`, `isPayed`, `status`, `reg_date`, `stu_location`) VALUES
(2, '1', 'M', '2020-12-26', 'Mugisha Peter', 'Mukanama Alice', '1199909380280939', 'tee@gmail.com', '0787683568', '4', 'mec', 'External', '../img/Capture.JPG', 'files/B201204153740RX8Z.pdf', 'files/B201204153740RX8Z (1).pdf', 'no', 'yes', '', ''),
(3, '3', 'M', '2020-12-26', 'Mugisha Peter', 'Mukanama Alice', '1199909380280939', 'kamana@gmail.com', '0787683568', '4', 'heg', 'Boarding', '../img/america.jpg', 'files/-281114083.pdf', 'files/Oficial_gazette_N___39_of_07.12.2020_Amazina.pdf', 'yes', 'pending', '', ''),
(4, '4', 'F', '2020-12-26', 'Mugisha Peter', 'Mukanama Alice', '1199909380280939', 'aisha@gmail.com', '0787683568', '4', 'heg', 'Boarding', '../img/Braids-For-Long-Hair-44-650x650.jpg', 'files/B201204153740RX8Z (1).pdf', 'files/-281114083.pdf', 'no', 'pending', '26/12/20', '');

-- --------------------------------------------------------

--
-- Table structure for table `head_teacher`
--

CREATE TABLE `head_teacher` (
  `id` int(123) NOT NULL,
  `school_id` varchar(123) NOT NULL,
  `fname` varchar(123) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(123) NOT NULL,
  `tel` varchar(123) NOT NULL,
  `startAt` varchar(20) NOT NULL,
  `finishAt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head_teacher`
--

INSERT INTO `head_teacher` (`id`, `school_id`, `fname`, `lname`, `email`, `tel`, `startAt`, `finishAt`) VALUES
(1, '4', 'Mugisha', 'Jean Claude', 'mugishajc@gmail.com', '0787683568', '2020-12-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `mineduc`
--

CREATE TABLE `mineduc` (
  `id` int(123) NOT NULL,
  `school_code` varchar(200) NOT NULL,
  `school_name` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mineduc`
--

INSERT INTO `mineduc` (`id`, `school_code`, `school_name`) VALUES
(1, 'sc001', 'green hills academy'),
(2, 'sc002', 'kigali parents school');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_code` varchar(123) NOT NULL,
  `name` varchar(40) NOT NULL,
  `welcome_msg` varchar(4000) NOT NULL,
  `school_type` varchar(123) NOT NULL,
  `school_level` varchar(123) NOT NULL,
  `category` varchar(4000) NOT NULL,
  `options` varchar(4000) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'inactive',
  `school_location` varchar(1234) NOT NULL,
  `reg_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_code`, `name`, `welcome_msg`, `school_type`, `school_level`, `category`, `options`, `logo`, `email`, `phone`, `password`, `status`, `school_location`, `reg_date`) VALUES
(4, 'sc001', 'Green Hills Academy', 'we are the boss in the city', 'TVET', 'l1,l2,l3', 'boarding,external', 'heg,mec', 'img/ur.jpg', 'aphro@gmail.com', '0789635787', '1234', 'active', 'kigali,gasabo,kacyiru,kibaza', '2020-12-27 18:07:18.'),
(5, 'sc002', 'kigali parents school', '', '', '', '', '', '', 'aphro@gmail.com', '', '123', 'inactive', '', '2020-12-23 00:01:39.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Tee', 'renzo', 'tee@gmail.com', '1234'),
(3, 'kamana', 'Eric', 'kamana', '1234'),
(4, 'Kabera', 'Aisha', 'aisha', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_teacher`
--
ALTER TABLE `head_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mineduc`
--
ALTER TABLE `mineduc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `head_teacher`
--
ALTER TABLE `head_teacher`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mineduc`
--
ALTER TABLE `mineduc`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
