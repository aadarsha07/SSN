-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 02:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `r_c` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_key` varchar(12) NOT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `c_n` varchar(20) DEFAULT NULL,
  `c_file` varchar(300) DEFAULT NULL,
  `pass_n` varchar(20) DEFAULT NULL,
  `pass_file` varchar(300) DEFAULT NULL,
  `lic_n` varchar(20) DEFAULT NULL,
  `lic_file` varchar(300) DEFAULT NULL,
  `pan_n` varchar(20) DEFAULT NULL,
  `pan_file` varchar(300) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `detail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `user_key`, `photo`, `c_n`, `c_file`, `pass_n`, `pass_file`, `lic_n`, `lic_file`, `pan_n`, `pan_file`, `active`, `detail_id`) VALUES
(1, 2, 'dsfdsf41534', 'dfsdfasfdsdf', NULL, '1111.jpg', NULL, '', NULL, '', NULL, '', 0, 0),
(2, 2, 'dsfdsf41534', 'dfsdfasfdsdf', NULL, 'index.jpeg', NULL, 'Sorry your file is not a image.', NULL, '', NULL, '315869d23f7bfd166dcec509ba69f19f.jpg', 0, 0),
(3, 2, 'dsfdsf41534', 'dfsdfasfdsdf', NULL, 'index.jpeg', NULL, 'cartoon-funny-bear-vector-16998785.jpg', NULL, '', NULL, '1111.jpg', 0, 0),
(4, 2, 'dsfdsf41534', 'dfsdfasfdsdf', NULL, 'index.jpeg', NULL, 'cartoon-funny-bear-vector-16998785.jpg', NULL, '315869d23f7bfd166dcec509ba69f19f.jpg', NULL, '1111.jpg', 0, 0),
(5, 2, 'dsfdsf41534', 'dfsdfasfdsdf', NULL, '', NULL, '', NULL, '', NULL, '', 0, 0),
(6, 2, 'dsfdsf41534', 'dfsdfasfdsdf', '', '', '', '', '', '', '', '', 0, 0),
(7, 2, 'dsfdsf41534', 'dfsdfasfdsdf', '9874563210', 'index.jpeg', '23254356', 'cartoon-funny-bear-vector-16998785.jpg', '43243256', '315869d23f7bfd166dcec509ba69f19f.jpg', '546554', '1111.jpg', 0, 0),
(8, 2, 'dsfdsf41534', 'dfsdfasfdsdf', '9874563210', '315869d23f7bfd166dcec509ba69f19f.jpg', '', '', '', '', '', '', 0, 0),
(9, 2, 'A-21211019', 'cartoon-funny-bear-vector-16998785.jpg', '9874563210', '1111.jpg', '', '', '', '', '', '', 0, 0),
(10, 2, 'A-21591019', '315869d23f7bfd166dcec509ba69f19f.jpg', '9874563210', '315869d23f7bfd166dcec509ba69f19f.jpg', '23254356', 'index.jpeg', '43243256', '315869d23f7bfd166dcec509ba69f19f.jpg', '546554', '1111.jpg', 0, 16),
(11, 2, 'S-21011231', '', '9874563210', '1111.jpg', '', '', '', '', '', '', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `roll` varchar(11) NOT NULL,
  `code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roll`, `code`) VALUES
(1, 'SuperAdmin', 'SA'),
(2, 'Admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userkey` varchar(12) DEFAULT NULL,
  `role` varchar(2) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `userkey`, `role`, `verified`) VALUES
(1, 'Asmit', 'test@gmail.com', 'testtest', NULL, '', 0),
(2, 'Asmit', 'asmit@gmail.com', '$2y$10$wREYcbvRZQ3k294AmC3wcO.UDVai9vFT3/0H2yhF0c16MHYiojGbS', NULL, 'A', 0),
(3, 'Aashish', 'aashis@gmail.com', '$2y$10$LEqFxQ1poISDvZGvCLJrwuir/hUdL4OruGT5ufFdmsVSD9InsJlRi', NULL, 'SA', 0),
(4, 'Aadarsha', 'aadarsha@gmail.com', '$2y$10$KXCR3xlNT8/TcGb2klVfJ.bsQ5oGvegKjmTHuPNQ7Rlxi2ksE/Zzq', NULL, 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pri_pro_no` int(11) DEFAULT 0,
  `pri_zone` varchar(20) DEFAULT NULL,
  `pri_district` varchar(20) DEFAULT NULL,
  `pri_city` varchar(20) DEFAULT NULL,
  `pri_street` varchar(20) DEFAULT NULL,
  `temp_pro_no` int(11) DEFAULT 0,
  `temp_zone` varchar(20) DEFAULT NULL,
  `temp_district` varchar(20) DEFAULT NULL,
  `temp_city` varchar(20) DEFAULT NULL,
  `temp_street` varchar(30) DEFAULT NULL,
  `grandfather_name` varchar(55) DEFAULT NULL,
  `father_name` varchar(55) DEFAULT NULL,
  `mother_name` varchar(55) DEFAULT NULL,
  `spouse_name` varchar(55) DEFAULT NULL,
  `son` varchar(55) DEFAULT NULL,
  `daughter` varchar(55) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `pri_ward` int(11) DEFAULT NULL,
  `temp_ward` int(11) DEFAULT NULL,
  `user_key` varchar(12) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `pri_pro_no`, `pri_zone`, `pri_district`, `pri_city`, `pri_street`, `temp_pro_no`, `temp_zone`, `temp_district`, `temp_city`, `temp_street`, `grandfather_name`, `father_name`, `mother_name`, `spouse_name`, `son`, `daughter`, `occupation`, `blood_group`, `contact`, `email`, `pri_ward`, `temp_ward`, `user_key`, `gender`, `user_id`, `active`) VALUES
(16, 'Asmit', 'Parsad', 'Nepali', '1859-10-19', 1, '2', '2', 'Pokhara', 'Badahare', 1, '2', '2', 'Pokhara', 'Badahare', 'Dil Bahadur Sarki', 'Shiva Lal Sarki', 'Paichhana Sarki', 'Spouse', 'Son', 'Daughter', 'Software Developer', 'B+', '9874563210', 'asmit@gmail.com', 44, 44, 'A-21591019', 'M', 2, 1),
(18, 'Saurab11', 'Bikram1', 'Sen1', '2001-12-06', 2, '2', '1', 'Pokhara', 'Sathmuhane', 4, '2', '0', 'Pokhara', 'Badahare', 'Jogendra Bikram Sen1', 'Yogendra Bikram Sen1', 'Juna Sen1', 'Spouse1', 'Son', 'Daughter', 'Software Developer', '', '9874563210', 'saurab@gmail.com', 32, 32, 'S-21011231', 'M', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
