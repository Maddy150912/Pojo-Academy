-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 09:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission_form`
--

CREATE TABLE `addmission_form` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `address` varchar(75) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `relationship` varchar(25) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `parent_phone` int(100) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `prev_school` varchar(50) NOT NULL,
  `grade_completed` varchar(25) NOT NULL,
  `year_completed` varchar(50) NOT NULL,
  `reason_for_leaving` varchar(75) NOT NULL,
  `medical` varchar(25) DEFAULT NULL,
  `medical_conditions_specify` varchar(50) DEFAULT NULL,
  `declaration` varchar(25) DEFAULT NULL,
  `signature` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmission_form`
--

INSERT INTO `addmission_form` (`id`, `name`, `dob`, `gender`, `nationality`, `religion`, `blood_group`, `address`, `phone`, `email`, `parent_name`, `relationship`, `occupation`, `parent_phone`, `parent_email`, `prev_school`, `grade_completed`, `year_completed`, `reason_for_leaving`, `medical`, `medical_conditions_specify`, `declaration`, `signature`, `date`) VALUES
(1, 'Tony Stark', '2005-03-17', 'Male', 'Indian', 'Hindu', 'B+', 'mananananan', '1412121412', '', 'Jhon Stark', 'Father', 'Bussiness', 2147483647, 'jhonstark@ironman.com', 'Howard University', 'A+', '2022', 'Not want to take addmission', 'No', NULL, 'ok', NULL, '2023-03-05'),
(3, 'Captain America', '2005-02-02', 'male', 'Indian', 'hindu', 'C+', 'los angels', '7212141240', 'cap@america.com', 'avengers leader', 'boss', 'job', 1111222221, 'boss@avengers.com', 'Avengers Infintiy War', 'O+', '2022', 'Nothing', 'female', '', 'on', 'Captain', '2023-03-05'),
(5, 'mm', '2011-01-01', 'female', 'Indian', 'hindu', 'C+', 'mm', '', '', 'mamma@gmail.com', 'm', 'm', 1414141212, 'mama@gmail.com', 'mm', 'm', 'm', 'm', 'female', '', 'on', 'mm', '2011-01-01'),
(6, 'mm', '1120-01-01', 'female', 'Indian', 'hindu', 'C+', 'Laxmi colony C/3 , near nutan dnya mandir school, jari mai nagar kalyan (ea', '', '', 'BscIT', 'm', 'm', 1414141212, 'mm@gmail.com', 'BscIT', 'O+', '2022', 'Nothing', 'female', '', 'on', 'mm', '2023-02-02'),
(7, 'Pojo Chudhari', '2005-12-31', 'female', 'Indian', 'hindu', 'A+', 'mulund', '', '', 'pojo pojo', 'gurdian', 'job', 1111222221, 'pojopojo@pojo.com', 'SHMS School mulnd', 'A+', '2023', 'Nothing', 'female', '', 'on', 'Pojo', '2023-03-05'),
(8, 'mandar', '2001-01-01', 'male', 'Indian', 'hindu', 'C+', 'mamam', '1414141212', 'mandar@gmail.com', 'maddy', 'gurdian', 'job', 1212121414, 'maddy@gmail.com', 'NDMS School', 'A+', '2023', 'Nothing', 'female', '', 'on', 'Captain', '2023-02-01'),
(9, 'mandar', '2001-01-01', 'male', 'Indian', 'hindu', 'C+', 'mamam', '1414141212', 'mandar@gmail.com', 'maddy', 'gurdian', 'job', 1212121414, 'maddy@gmail.com', 'NDMS School', 'A+', '2023', 'Nothing', 'female', '', 'on', 'Captain', '2023-02-01'),
(10, 'mandar', '2001-01-01', 'male', 'Indian', 'hindu', 'C+', 'mamam', '1414141212', 'mandar@gmail.com', 'maddy', 'gurdian', 'job', 1212121414, 'maddy@gmail.com', 'NDMS School', 'A+', '2023', 'Nothing', 'female', '', 'on', 'Captain', '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` varchar(75) NOT NULL,
  `student_name` varchar(75) NOT NULL,
  `cardholder_name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `student_name`, `cardholder_name`) VALUES
(12, '5thclass/Rs.10000', 'pojo', 'ammama');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 720837831, 'admin@gmail.com', 'admin', '12345'),
(2, 'student', 1234567897, 'student@gmail.com', 'student', '12345'),
(7, 'pojo', 2147483614, 'pojo14@gmail.com', 'student', '12345'),
(26, 'mandar', 2147483647, 'mandar123@gmail.com', 'student', '12345'),
(27, 'Maddy123', 2147483647, 'maddy12@gmail.com', 'student', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission_form`
--
ALTER TABLE `addmission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmission_form`
--
ALTER TABLE `addmission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
