-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 10:02 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `seat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `Location`, `seat`) VALUES
(38, 'Captain Marvel', 'vip-hall', 'imax', '12-3', '18-00', 'dhanush', 'oamsoi', '7022664', 'Cinipolis-Nitte', ''),
(39, 'Captain Marvel', 'main-hall', 'imax', '15-3', '18-00', 'dhanush', 'pamahs', '755786355', 'inox-Mantri', 'b3'),
(40, 'Captain Marvel', 'main-hall', 'imax', '15-3', '18-00', 'dhanush', 'pamahs', '755786355', 'inox-Mantri', 'b3'),
(41, 'Captain Marvel', 'vip-hall', '3d', '14-3', '18-00', 'dahajs', 'oajs', '70222', 'Rockline', 'b5'),
(42, 'Captain Marvel', 'vip-hall', '3d', '14-3', '18-00', 'dahajs', 'oajs', '70222', 'Rockline', 'b5'),
(43, '', 'main-hall', 'imax', '15-3', '15-00', 'dhanjs', 'ss', '77', 'inox-Mantri', 'b7'),
(44, '', 'main-hall', 'imax', '15-3', '15-00', 'dhanjs', 'ss', '77', 'inox-Mantri', 'b7'),
(45, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(46, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(47, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(48, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(49, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(50, 'Captain Marvel', 'main-hall', '3d', '13-3', '18-00', 'dhanush', 'panmsi', '23345', 'inox-Mantri', 'b4'),
(51, '', 'main-hall', '3d', '2019-11-15', '18-00', 'raju', 'pa', '8033466', 'inox-Mantri', 'b2');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(1, 'dhanush', 'pani', 'dhanush@gmail.com', 'hello its not working'),
(2, 'lavanya', 'none', 'asa@as.com', 'asdas'),
(4, 'harish', 'babau', 'babu@gmail.com', 'snshgha');

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` varchar(200) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  `language` varchar(200) NOT NULL,
  `ratings` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `language`, `ratings`) VALUES
(1, 'img/movie-poster-1.jpg', 'Captain Marvel', ' Action, Adventure, Sci-Fi ', '220', '2018-10-18', 'Anna Boden, Ryan Fleck', 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn', 'English', '3/5'),
(2, 'img/movie-poster-2.jpg', 'Qarmat Bitamrmat  ', 'Comedy', '110', '2018-10-18', 'Assad Fouladkar', 'Ahmed Adam, Bayyumy Fouad, Salah Abdullah , Entsar, Dina Fouad ', 'English', '3/5'),
(4, 'img/movie-poster-4.jpg', 'Nadi Elregal Elserri ', 'Comedy', '105', '2019-01-23', ' Ayman Uttar', 'Karim Abdul Aziz, Ghada Adel, Maged El Kedwany, Nesreen Tafesh, Bayyumy Fouad, Moataz El Tony ', 'English', '4/5'),
(5, 'img/movie-poster-5.jpg', 'VICE', 'Biography, Comedy, Drama', '132', '2018-12-25', 'Adam McKay', 'Christian Bale, Amy Adams, Steve Carell', 'English', '4/5'),
(6, 'img/movie-poster-6.jpg', 'The Vanishing', 'Crime, Mystery, Thriller', '107', '2019-01-04', 'Kristoffer Nyholm', 'Gerard Butler, Peter Mullan, Connor Swindells', 'English', '2/5'),
(12, 'img/force.jpg', 'force', 'action', '230', '2018-12-18', 'sujeeth', 'prbhas,sweety', 'Hindi', '3.25/5'),
(13, 'img/kabir.jpg', 'kabir singh', 'love story', '230', '2019-06-19', 'sandeep', 'ranbir kapoor', 'Hindi', '4.5/5'),
(17, 'img/kahani.jpg', 'kahani', 'thriller', '230', '2018-12-12', 'ddndinid', 'vidhya', 'Hindi', '3/5'),
(18, 'img/uppi.jpg', 'i love u', 'love story', '3', '2016-12-12', 'xyz', 'upendra', 'Kannada', '3.25/5'),
(19, 'img/kirik.jpg', 'Kirik Party', 'comedy', '230', '2019-02-12', 'rishab', 'rakshith', 'Kannada', '4/5'),
(20, 'img/thithi.jpg', 'Thithi', 'documentry comedy', '2', '0194-12-12', 'xyz', 'abx,ss,shush', 'Kannada', '4.2/5'),
(23, 'img/movie-poster-3.jpg', 'the lego', 'Animatipn', '2', '2018-12-12', 'snjkbdjs', 'adsnjbsdbjd', 'English', '4.6/5'),
(25, 'img/bean.jpg', 'Jhonny English', 'Action Comedy', '2 hrs', '2016-12-12', 'bean', 'MR.Bean', 'English', '4.2/5'),
(26, 'img/aftermath.jpg', 'After Math', 'Action', '3hrs', '2018-01-12', 'Jhon', 'Steve,Rogers', 'English', '4.6/5'),
(27, 'img/kiss.jpeg', 'kiss', 'romance', '2hrs', '2017-09-12', 'radha', 'srileela', 'Kannada', '4.2/5'),
(28, 'img/kgf.jpg', 'kgf', 'action', '3hrs', '2017-01-12', 'someone', 'yash', 'Kannada', '4.7/5'),
(29, 'img/bharate.jpg', 'bharate', 'comedy', '3hrs', '2017-01-12', 'someone', 'sri murali', 'Kannada', '4.8/5'),
(30, 'img/pailwan.jpg', 'pailwan', 'action comedy', '2 30hrs', '2018-12-12', 'someoine', 'sudeep', 'Kannada', '4.4/5'),
(31, 'img/dabang.jpg', 'dabang', 'action', '2 hrs', '2018-08-12', 'someone', 'salman bhai', 'Hindi', '4.7/5'),
(32, 'img/bala.jpg', 'bala', 'comedy', '2hrs', '2019-09-19', 'someone', 'Ayshman', 'Hindi', '4.8/5'),
(33, 'img/dream.jpg', 'dream girl', 'comedy', '2 hrs', '2020-02-12', 'someone', 'ayshman', 'Hindi', '4.7/5'),
(34, 'img/super.jpg', 'Super30', 'COmedy', '2hrs', '2019-06-12', 'someone', 'Hrithick Roshan', 'Hindi', '4.7/5');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardNumber` int(200) NOT NULL,
  `month` int(200) NOT NULL,
  `year` int(200) NOT NULL,
  `cvv` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardNumber`, `month`, `year`, `cvv`) VALUES
(121, 1, 121, 121),
(1221, 1211, 12, 12),
(123454, 321, 1, 2019),
(0, 0, 0, 0),
(0, 0, 0, 0),
(1234, 121, 12, 12),
(57985554, 546, 8, 20),
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `password`, `email`, `phone`) VALUES
(0, 'dhanush', '1234', 'dhanush@gm.com', '85642341'),
(1, 'dhanush', '1234', 'dhanush@gmail.com', '7022463389'),
(2, 'lavanya', '1234', 'lavanya@123', '885546547');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminname`);

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
