-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 11:03 PM
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
-- Database: `shools_project`
--

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
  `status` varchar(40) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `student_id`, `gender`, `birth_date`, `father`, `mother`, `ID_nber`, `email`, `phone`, `school_id`, `facility`, `compuse`, `photo`, `ID_copy`, `diploma`, `isPayed`, `status`) VALUES
(1, '3', 'M', '2020-12-20', 'Mugisha Peter', 'Mukanama Alice', '1199909380280939', 'kamana@gmail.com', '0787683568', '4', 'IT', 'Musanze', 'img/Braids-For-Long-Hair-44-650x650.jpg', 'files/B201204153740RX8Z (1).pdf', 'files/B201204153740RX8Z.pdf', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `welcome_msg` varchar(4000) NOT NULL,
  `compuses` varchar(4000) NOT NULL,
  `facilities` varchar(4000) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `welcome_msg`, `compuses`, `facilities`, `logo`, `email`, `password`, `status`) VALUES
(1, 'University of Rwanda', 'UR is best University in the East African that will help you to make your dreams comes true', 'Huye,Musanze,Kigali', 'Business, IT', 'img/ur.jpg', 'admin@ur.com', '1234', 'active'),
(2, 'ULK University', 'ULK University is all you need to make your world better place and make yourself home', 'Kigali,Nyanza', 'IT', 'img/ULK_Logo.png', '', '', 'active'),
(4, 'IPRC HUYE', 'welcome to IPRC HUYE', 'HUYE', 'IT,AGRICALTURE,ELECTORNIC', 'img/iprc.png', 'admin@iprchuye.com', 'huye', 'active'),
(23, '', '', '', '', '', 'admin@ur.com', '1234', 'inactive'),
(24, '', '', '', '', '', 'admin@ur.com', '1234', 'inactive'),
(25, '', '', '', '', '', 'admin@ur.com', '1234', 'inactive'),
(26, '', '', '', '', '', 'admin@iprchuye.com', '1234', 'inactive'),
(27, '', '', '', '', '', 'admin@iprchuye.com', 'huye', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(1, '0', '0', '0', '0'),
(2, 'kamana', 'Eric', 'kamana', '12345'),
(3, 'kamana', 'Eric', 'kamana', '1234'),
(4, 'mugisha', 'peter', 'peter', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
