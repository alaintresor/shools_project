-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 09:48 PM
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
-- Table structure for table `shools`
--

CREATE TABLE `shools` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `welcome_msg` varchar(4000) NOT NULL,
  `compuses` varchar(4000) NOT NULL,
  `facilities` varchar(4000) NOT NULL,
  `img1` varchar(400) NOT NULL,
  `img2` varchar(400) NOT NULL,
  `img3` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shools`
--

INSERT INTO `shools` (`id`, `name`, `welcome_msg`, `compuses`, `facilities`, `img1`, `img2`, `img3`) VALUES
(1, 'University of Rwanda', 'UR is best University in the East African that will help you to make your dreams comes true', 'Huye,Musanze,Kigali', 'Business, IT', 'img/ur.jpg', '', ''),
(2, 'ULK University', 'ULK University is all you need to make your world better place and make yourself home', 'Kigali,Nyanza', 'IT', 'img/ULK_Logo.png', '', '');

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
(3, 'kamana', 'Eric', 'kamana', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shools`
--
ALTER TABLE `shools`
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
-- AUTO_INCREMENT for table `shools`
--
ALTER TABLE `shools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
