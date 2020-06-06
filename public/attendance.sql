-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 07:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`, `Email`) VALUES
('admin', '12345', 'admin@gau'),
('Test', '12345', '1234@gmail.com'),
('Valosh Test', '12345', '1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Id` int(11) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Active_flag` char(1) NOT NULL,
  `Report_flag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Id`, `Course`, `Date`, `Active_flag`, `Report_flag`) VALUES
(1, 'CEN305', '2020-05-04', '1', '1'),
(2, 'CEN420', '2019-05-03', '1', '1'),
(3, 'CEN305', '2020-05-11', '1', '1'),
(6, 'CEN305', '2020-05-18', '1', '1'),
(15, 'CEN305', '2020-05-25', '1', '1'),
(17, 'CEN305', '2020-06-01', '0', '1'),
(18, 'CEN305', '2020-06-08', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `Name` varchar(10) NOT NULL,
  `Radius` varchar(50) NOT NULL,
  `Longt` varchar(50) NOT NULL,
  `Lat` varchar(50) NOT NULL,
  `Beacon_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`Name`, `Radius`, `Longt`, `Lat`, `Beacon_id`) VALUES
('ITDEL', 'NA', 'NA', 'NA', NULL),
('TP201', 'NA', 'NA', 'NA', NULL),
('TP202', '20', '0.1', '0.5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Code` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL,
  `Start_time` time NOT NULL,
  `Stop_time` time NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Room` varchar(10) DEFAULT NULL,
  `Instructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Code`, `Name`, `Semester`, `Start_time`, `Stop_time`, `Day`, `Room`, `Instructor`) VALUES
('CEN305', 'Object Oriented', '2019/2020 SPRING', '12:00:00', '15:00:00', 'Sunday', 'TP201', 1),
('CEN306', 'Database Systems', '2019/2020 SPRING', '13:00:00', '16:00:00', 'Wednesday', 'ITDEL', 2),
('CEN403', 'Software Design', '2019/2020 SPRING', '10:00:00', '13:00:00', 'Wednesday', 'ITDEL', 1),
('CEN420', 'Automata Theory', '2019/2020 SPRING', '14:00:00', '17:00:00', 'Friday', 'ITDEL', 1),
('CEN424', 'Software Quality', '2019/2020 SPRING', '09:00:00', '12:00:00', 'Monday', 'ITDEL', 2),
('CEN477', 'Java Programming', '2019/2020 SPRING', '09:00:00', '11:00:00', 'Wednesday', 'TP201', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `Staff_id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`Staff_id`, `Email`, `Password`, `Name`) VALUES
(1, 'sam.jones@ins.tr', 'samsam', 'Asst. Prof. Sam Jones'),
(2, 'david.philips@ins.tr', 'davey', 'Asst. Prof. David Philips');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Student` varchar(15) NOT NULL,
  `Course` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Student`, `Course`) VALUES
('0876', 'CEN305'),
('0876', 'CEN420'),
('1125', 'CEN305'),
('1125', 'CEN306'),
('1125', 'CEN403'),
('1125', 'CEN420'),
('1125', 'CEN424'),
('1125', 'CEN477'),
('1180', 'CEN305'),
('1180', 'CEN306'),
('1180', 'CEN403'),
('1180', 'CEN420'),
('1180', 'CEN424'),
('1180', 'CEN477'),
('1380', 'CEN305'),
('1380', 'CEN420'),
('1380', 'CEN477'),
('1395', 'CEN305'),
('1395', 'CEN306'),
('1395', 'CEN403'),
('1395', 'CEN420'),
('1395', 'CEN424'),
('1395', 'CEN477'),
('1450', 'CEN305'),
('1450', 'CEN306'),
('1450', 'CEN403'),
('1450', 'CEN420'),
('1450', 'CEN424'),
('1450', 'CEN477'),
('1456', 'CEN305'),
('1456', 'CEN306'),
('1456', 'CEN403'),
('1456', 'CEN420'),
('1456', 'CEN424'),
('1456', 'CEN477'),
('1460', 'CEN305'),
('1460', 'CEN306'),
('1460', 'CEN403'),
('1460', 'CEN420'),
('1460', 'CEN424'),
('1460', 'CEN477'),
('1474', 'CEN305'),
('1474', 'CEN306'),
('1474', 'CEN403'),
('1474', 'CEN424'),
('1474', 'CEN477'),
('1479', 'CEN305'),
('1479', 'CEN306'),
('1479', 'CEN403'),
('1479', 'CEN420'),
('1479', 'CEN424'),
('1479', 'CEN477'),
('1490', 'CEN305'),
('1490', 'CEN306'),
('1490', 'CEN403'),
('1490', 'CEN420'),
('1490', 'CEN424'),
('1490', 'CEN477'),
('1549', 'CEN305'),
('1549', 'CEN306'),
('1549', 'CEN403'),
('1549', 'CEN420'),
('1549', 'CEN424'),
('1549', 'CEN477'),
('1654', 'CEN305'),
('1654', 'CEN306'),
('1654', 'CEN403'),
('1654', 'CEN420'),
('1654', 'CEN424'),
('1654', 'CEN477'),
('1967', 'CEN305');

-- --------------------------------------------------------

--
-- Table structure for table `std_attendance`
--

CREATE TABLE `std_attendance` (
  `Student` varchar(15) NOT NULL,
  `Attendance` int(11) NOT NULL,
  `Present` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_attendance`
--

INSERT INTO `std_attendance` (`Student`, `Attendance`, `Present`) VALUES
('0876', 1, '3'),
('0876', 3, '1'),
('0876', 6, '1'),
('0876', 15, '1'),
('1125', 1, '2'),
('1125', 3, '1'),
('1125', 6, '1'),
('1125', 15, '1'),
('1180', 1, '1'),
('1180', 3, '1'),
('1180', 6, '1'),
('1180', 15, '1'),
('1380', 1, '3'),
('1380', 3, '1'),
('1380', 6, '3'),
('1380', 15, '1'),
('1395', 1, '1'),
('1395', 3, '2'),
('1395', 6, '1'),
('1395', 15, '1'),
('1450', 1, '3'),
('1450', 3, '2'),
('1450', 6, '1'),
('1450', 15, '1'),
('1456', 1, '2'),
('1456', 3, '1'),
('1456', 6, '1'),
('1456', 15, '1'),
('1460', 1, '2'),
('1460', 3, '1'),
('1460', 6, '2'),
('1460', 15, '1'),
('1474', 1, '1'),
('1474', 3, '1'),
('1474', 6, '2'),
('1474', 15, '1'),
('1479', 1, '1'),
('1479', 3, '1'),
('1479', 6, '1'),
('1479', 15, '1'),
('1490', 1, '1'),
('1490', 3, '3'),
('1490', 6, '1'),
('1490', 15, '1'),
('1549', 1, '1'),
('1549', 3, '1'),
('1549', 6, '1'),
('1549', 15, '1'),
('1654', 1, '1'),
('1654', 3, '1'),
('1654', 6, '1'),
('1654', 15, '1'),
('1967', 1, '1'),
('1967', 3, '1'),
('1967', 6, '1'),
('1967', 15, '1');

-- --------------------------------------------------------

--
-- Table structure for table `std_verification`
--

CREATE TABLE `std_verification` (
  `Student` varchar(15) NOT NULL,
  `Imei` varchar(20) NOT NULL,
  `Features` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Std_id` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `IMEI` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Std_id`, `Email`, `Password`, `Name`, `Surname`, `IMEI`) VALUES
('0876', 'barry@std.tr', 'aaa', 'Barry', 'Allen', ''),
('1125', 'smoak@std.tr', 'aaa', 'Mary', 'Smoak', '0125'),
('1180', 'bruce@std.tr', 'aaa', 'Bruce', 'Banner', ''),
('1380', 'carol@std.tr', 'aaa', 'Carol', 'Danvers', ''),
('1395', 'julie@std.tr', 'aaa', 'Julie', 'Berry', ''),
('1450', 'thor@std.tr', 'aaa', 'Thor', 'Odinson', ''),
('1456', 'jane.smith@std.tr', 'janejane', 'Jane', 'Smith', ''),
('1460', 'sam@std.tr', 'aaa', 'Sam', 'Wilson', ''),
('1474', 'steve.rogers@std.tr', 'stevey', 'Steve', 'Rogers', ''),
('1479', 'mark@std.tr', 'aaa', 'Mark', 'Harmon', ''),
('1490', 'john.smith@std.tr', 'johnjohn', 'John', 'Smith', ''),
('1549', 'oliver@std.tr', 'aaa', 'Oliver', 'Queen', ''),
('1654', 'laurel@std.tr', 'aaa', 'Laurel', 'Lance', ''),
('1967', 'tony.stark@std.tr', 'tony', 'Tony', 'Stark', '');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `start`, `end`) VALUES
(1, '0000-00-00 00:00:00', '2020-01-10 15:52:43'),
(2, '2019-12-31 15:53:51', '2020-01-10 15:53:51'),
(3, '2019-12-31 16:06:01', '2020-01-10 16:06:01'),
(4, '2019-12-31 16:06:29', '2020-06-28 16:06:29'),
(5, '2020-01-02 08:36:27', '2020-06-30 08:36:27'),
(6, '2020-01-02 09:27:06', '2020-06-30 09:27:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Id`,`Course`,`Date`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `Room` (`Room`),
  ADD KEY `Instructor` (`Instructor`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`Staff_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Student`,`Course`),
  ADD KEY `Course` (`Course`);

--
-- Indexes for table `std_attendance`
--
ALTER TABLE `std_attendance`
  ADD PRIMARY KEY (`Student`,`Attendance`),
  ADD KEY `Attendance` (`Attendance`);

--
-- Indexes for table `std_verification`
--
ALTER TABLE `std_verification`
  ADD PRIMARY KEY (`Student`),
  ADD UNIQUE KEY `Imei` (`Imei`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Std_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Room`) REFERENCES `classroom` (`Name`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`Instructor`) REFERENCES `instructor` (`Staff_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Student`) REFERENCES `student` (`Std_id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`Course`) REFERENCES `course` (`Code`);

--
-- Constraints for table `std_attendance`
--
ALTER TABLE `std_attendance`
  ADD CONSTRAINT `std_attendance_ibfk_1` FOREIGN KEY (`Student`) REFERENCES `student` (`Std_id`),
  ADD CONSTRAINT `std_attendance_ibfk_2` FOREIGN KEY (`Attendance`) REFERENCES `attendance` (`Id`);

--
-- Constraints for table `std_verification`
--
ALTER TABLE `std_verification`
  ADD CONSTRAINT `std_verification_ibfk_1` FOREIGN KEY (`Student`) REFERENCES `student` (`Std_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
