-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2021 at 09:44 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examseat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `Sr.No` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`Sr.No`, `username`, `password`) VALUES
(1, 'ADMIN', 'PASSWORD');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `email`) VALUES
(3, 'a', 'a@gmail.com'),
(4, 'b', 'b@gmail.com'),
(5, 'c', 'c@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invigallot`
--

CREATE TABLE `invigallot` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invigallot`
--

INSERT INTO `invigallot` (`id`, `name`, `room`, `email`) VALUES
(1, 'a', 'A31', 'a@gmail.com'),
(2, 'b', 'A32', 'b@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `Name` varchar(100) NOT NULL,
  `RollNo` varchar(100) NOT NULL,
  `Branch` text NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`Name`, `RollNo`, `Branch`, `Year`, `Email`) VALUES
('Afsha Khanam', '174G1A0501', 'CSE', 'IV', '174G1A0501@SRIT.AC.IN'),
('Aishwarya', '174G1A0502', 'CSE', 'IV', '174G1A0502@SRIT.AC.IN'),
('Aakanksha', '174G1A0503', 'CSE', 'IV', '174G1A0503@SRIT.AC.IN'),
('Akhil', '174G1A0504', 'CSE', 'IV', '174G1A0504@SRIT.AC.IN'),
('Akhila', '174G1A0505', 'CSE', 'IV', '174G1A0505@SRIT.AC.IN'),
('Akshitha', '174G1A0506', 'CSE', 'IV', '174G1A0506@SRIT.AC.IN'),
('Anitha', '174G1A0507', 'CSE', 'IV', '174G1A0507@SRIT.AC.IN'),
('Anitha R', '174G1A0508', 'CSE', 'IV', '174G1A0508@SRIT.AC.IN'),
('Anusha', '174G1A0509', 'CSE', 'IV', '174G1A0509@SRIT.AC.IN'),
('Ashok', '174G1A0510', 'CSE', 'IV', '174G1A0510@SRIT.AC.IN'),
('Aswini', '174G1A0511', 'CSE', 'IV', '174G1A0511@SRIT.AC.IN'),
('Aswini S', '174G1A0512', 'CSE', 'IV', '174G1A0512@SRIT.AC.IN'),
('Bharathi', '174G1A0513', 'CSE', 'IV', '174G1A0513@SRIT.AC.IN'),
('Chandana', '174G1A0514', 'CSE', 'IV', '174G1A0514@SRIT.AC.IN'),
('Chandrika', '174G1A0515', 'CSE', 'IV', '174G1A0515@SRIT.AC.IN'),
('Divya Sai ', '174G1A0517', 'CSE', 'IV', '174G1A0517@SRIT.AC.IN'),
('Divya R', '174G1A0518', 'CSE', 'IV', '174G1A0518@SRIT.AC.IN'),
('Govardhan', '174G1A0519', 'CSE', 'IV', '174G1A0519@SRIT.AC.IN'),
('Gouthami', '174G1A0520', 'CSE', 'IV', '174G1A0520@SRIT.AC.IN'),
('Harshini', '174G1A0521', 'CSE', 'IV', '174G1A0521@SRIT.AC.IN'),
('Harshitha', '174G1A0522', 'CSE', 'IV', '174G1A0522@SRIT.AC.IN'),
('Javeria Tabassum', '174G1A0524', 'CSE', 'IV', '174G1A0524@SRIT.AC.IN'),
('Jyoshna', '174G1A0526', 'CSE', 'IV', '174G1A0526@SRIT.AC.IN'),
('Kasiviswanathagowd', '174G1A0529', 'CSE', 'IV', '174G1A0529@SRIT.AC.IN'),
('Lakshmi Kala', '174G1A0530', 'CSE', 'IV', '174G1A0530@SRIT.AC.IN'),
('Lakshmi Narayana ', '174G1A0531', 'CSE', 'IV', '174G1A0531@SRIT.AC.IN'),
('Liyakath', '174G1A0532', 'CSE', 'IV', '174G1A0532@SRIT.AC.IN'),
('Lasya', '174G1A0533', 'CSE', 'IV', '174G1A0533@SRIT.AC.IN'),
('Lavanya', '174G1A0534', 'CSE', 'IV', '174G1A0534@SRIT.AC.IN'),
('Likhitha', '174G1A0535', 'CSE', 'IV', '174G1A0535@SRIT.AC.IN'),
('Madhan Mohan ', '174G1A0536', 'CSE', 'IV', '174G1A0536@SRIT.AC.IN'),
('Madhavi', '174G1A0537', 'CSE', 'IV', '174G1A0537@SRIT.AC.IN'),
('Mahima', '174G1A0538', 'CSE', 'IV', '174G1A0538@SRIT.AC.IN'),
('Mahitha', '174G1A0539', 'CSE', 'IV', '174G1A0539@SRIT.AC.IN'),
('Meghana', '174G1A0541', 'CSE', 'IV', '174G1A0541@SRIT.AC.IN'),
('Mohan Krishna', '174G1A0542', 'CSE', 'IV', '174G1A0542@SRIT.AC.IN'),
('Mounika', '174G1A0543', 'CSE', 'IV', '174G1A0543@SRIT.AC.IN'),
('Naga Vamshidhar', '174G1A0544', 'CSE', 'IV', '174G1A0544@SRIT.AC.IN'),
('Nandhini', '174G1A0545', 'CSE', 'IV', '174G1A0545@SRIT.AC.IN'),
('Nichitha', '174G1A0546', 'CSE', 'IV', '174G1A0546@SRIT.AC.IN'),
('Nihitha', '174G1A0547', 'CSE', 'IV', '174G1A0547@SRIT.AC.IN'),
('Niranjan', '174G1A0548', 'CSE', 'IV', '174G1A0548@SRIT.AC.IN'),
('Om Praksah', '174G1A0549', 'CSE', 'IV', '174G1A0549@SRIT.AC.IN'),
('Pavan Sankar', '174G1A0550', 'CSE', 'IV', '174G1A0550@SRIT.AC.IN'),
('Sai Divya', '174G1A0551', 'CSE', 'IV', '174G1A0551@SRIT.AC.IN'),
('Pooja ', '174G1A0552', 'CSE', 'IV', '174G1A0552@SRIT.AC.IN'),
('Prathyusha', '174G1A0553', 'CSE', 'IV', '174G1A0553@SRIT.AC.IN'),
('Praveen', '174G1A0554', 'CSE', 'IV', '174G1A0554@SRIT.AC.IN'),
('Rajesh', '174G1A0555', 'CSE', 'IV', '174G1A0555@SRIT.AC.IN'),
('Roja sree', '174G1A0556', 'CSE', 'IV', '174G1A0556@SRIT.AC.IN'),
('Sadiya', '174G1A0557', 'CSE', 'IV', '174G1A0557@SRIT.AC.IN'),
('Sai Kumar', '174G1A0558', 'CSE', 'IV', '174G1A0558@SRIT.AC.IN'),
('Sai Pavan', '174G1A0559', 'CSE', 'IV', '174G1A0559@SRIT.AC.IN'),
('Satyamashubhava', '174G1A0560', 'CSE', 'IV', '174G1A0560@SRIT.AC.IN'),
('Bhavana', '184G5A0501', 'CSE', 'IV', '184G5A0501@SRIT.AC.IN'),
('Haritha', '184G5A0502', 'CSE', 'IV', '184G5A0502@SRIT.AC.IN'),
('Lakshmi Narasimhulu', '184G5A0503', 'CSE', 'IV', '184G5A0503@SRIT.AC.IN'),
('Noah', '184G5A0504', 'CSE', 'IV', '184G5A0504@SRIT.AC.IN'),
('Pavithra', '184G5A0505', 'CSE', 'IV', '184G5A0505@SRIT.AC.IN'),
('Vanaja', '184G5A0506', 'CSE', 'IV', '184G5A0506@SRIT.AC.IN'),
('hari', '174G1A0401', 'ece', 'IV', '174G1A0501@gmail.com'),
('hari', '174G1A0402', 'ece', 'IV', '174G1A0402@gmail.com'),
('hari', '174G1A0403', 'ece', 'IV', '174G1A0403@gmail.com'),
('hari', '174G1A0404', 'ece', 'IV', '174G1A0404@gmail.com'),
('hari', '174G1A0407', 'ece', 'IV', '174G1A0407@gmail.com'),
('hari', '174G1A0408', 'ece', 'IV', '174G1A0408@gmail.com'),
('hari', '174G1A0409', 'ece', 'IV', '174G1A0409@gmail.com'),
('hari', '174G1A0410', 'ece', 'IV', '174G1A0410@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `trisub`
--

CREATE TABLE `trisub` (
  `year` varchar(3) NOT NULL,
  `department` varchar(30) NOT NULL,
  `enrollnumber` varchar(255) NOT NULL,
  `classroom` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `examdate` date DEFAULT NULL,
  `starttime` varchar(11) NOT NULL,
  `endtime` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trisub`
--

INSERT INTO `trisub` (`year`, `department`, `enrollnumber`, `classroom`, `subject`, `examdate`, `starttime`, `endtime`) VALUES
('IV', 'CSE', '174G1A0501', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0502', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0503', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0504', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0505', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0506', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0507', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0508', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0509', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0510', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0511', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0512', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0513', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0514', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0515', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0517', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0518', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0519', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0520', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0521', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0522', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0524', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0526', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0529', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0530', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0531', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0532', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0533', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0534', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0535', 'A31', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0536', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0537', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0538', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0539', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0541', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0542', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0543', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0544', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0545', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0546', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0547', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0548', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0549', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0550', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0551', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0552', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0553', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0554', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0555', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0556', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0557', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0558', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0559', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '174G1A0560', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0501', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0502', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0503', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0504', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0505', 'A32', 'python', '2021-06-16', '02:22', '04:22'),
('IV', 'CSE', '184G5A0506', 'A32', 'python', '2021-06-16', '02:22', '04:22');

-- --------------------------------------------------------

--
-- Table structure for table `trisub1`
--

CREATE TABLE `trisub1` (
  `year` varchar(3) CHARACTER SET latin1 NOT NULL,
  `department` varchar(30) CHARACTER SET latin1 NOT NULL,
  `enrollnumber` varchar(255) CHARACTER SET latin1 NOT NULL,
  `classroom` varchar(200) CHARACTER SET latin1 NOT NULL,
  `subject` varchar(50) CHARACTER SET latin1 NOT NULL,
  `examdate` date DEFAULT NULL,
  `starttime` varchar(11) CHARACTER SET latin1 NOT NULL,
  `endtime` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invigallot`
--
ALTER TABLE `invigallot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invigallot`
--
ALTER TABLE `invigallot`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
