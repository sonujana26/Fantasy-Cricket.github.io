-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 10:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my11`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `matchid` int(255) NOT NULL,
  `team1` varchar(100) NOT NULL,
  `team2` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchid`, `team1`, `team2`, `datetime`) VALUES
(1, 'India', 'England', '2018-10-23 22:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playid` int(200) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `ppoints` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playid`, `pname`, `country`, `ptype`, `ppoints`) VALUES
(1, 'MS Dhoni', 'India', 'WKT Keeper', 9),
(2, 'Virat Kohli', 'India', 'Batsman', 10),
(3, 'Rohit Sharma', 'India', 'Batsman', 10),
(4, 'Shikhar Dhawan', 'India', 'Batsman', 9),
(5, 'Lokesh Rahul', 'India', 'Batsman', 9),
(6, 'Dinesh Karthik', 'India', 'Batsman', 9),
(7, 'Manish Pandey', 'India', 'Batsman', 8),
(8, 'Hardik Pandya', 'India', 'All Rounder', 9),
(9, 'Kedar Jadhav', 'India', 'All Rounder', 9),
(10, 'Ravindra Jadeja', 'India', 'All Rounder', 9),
(11, 'Jasprit Bumrah', 'India', 'Bowler', 9),
(12, 'Kuldeep Yadav', 'India', 'Bowler', 9),
(13, 'Bhuvaneshwar Kumar', 'India', 'Bowler', 9),
(14, 'Yuzvendra Chahal', 'India', 'Bowler', 9),
(15, 'Deepak Chahar', 'India', 'Bowler', 8),
(16, 'Sarfraz Ahmed', 'Pakistan', 'WKT Keeper', 9),
(17, 'Babar Azam', 'Pakistan', 'Batsman', 10),
(18, 'Fakhar Zaman', 'Pakistan', 'Batsman', 10),
(19, 'Imam-ul-Haq', 'Pakistan', 'Batsman', 9),
(20, 'Haris Sohail', 'Pakistan', 'Batsman', 9),
(21, 'Shan Masood', 'Pakistan', 'Batsman', 8),
(22, 'Asif Ali', 'Pakistan', 'Batsman', 8),
(23, 'Shoaib Malik', 'Pakistan', 'All Rounder', 10),
(24, 'Shadab Khan', 'Pakistan', 'All Rounder', 9),
(25, 'Faheem Ashraf', 'Pakistan', 'All Rounder', 9),
(26, 'Hasan Ali', 'Pakistan', 'Bowler', 9),
(27, 'Mohammad Amir', 'Pakistan', 'Bowler', 9),
(28, 'Usman Khan', 'Pakistan', 'Bowler', 9),
(29, 'Junaid Khan', 'Pakistan', 'Bowler', 8),
(30, 'Shaheen Afridi', 'Pakistan', 'Bowler', 8),
(31, 'Mushfiqur Rahim', 'Bangladesh', 'WKT Keeper', 9),
(32, 'Linton Das', 'Bangladesh', 'Batsman', 9),
(33, 'Mahmudullah', 'Bangladesh', 'Batsman', 9),
(34, 'Nazmul H Shanto', 'Bangladesh', 'Batsman', 9),
(35, 'M Mithun', 'Bangladesh', 'Batsman', 9),
(36, 'M Hossain', 'Bangladesh', 'Batsman', 9),
(37, 'Mominul Haque', 'Bangladesh', 'Batsman', 8),
(38, 'Ariful Haque', 'Bangladesh', 'Batsman', 8),
(39, 'Shakib Al Hasan', 'Bangladesh', 'All Rounder', 10),
(40, 'Mashrafe Mortaza', 'Bangladesh', 'All Rounder', 9),
(41, 'Abu H Rony', 'Bangladesh', 'All Rounder', 8),
(42, 'Mustafizur Rahman', 'Bangladesh', 'Bowler', 10),
(43, 'Rubel Hossain', 'Bangladesh', 'Bowler', 9),
(44, 'Mehidy Hasan', 'Bangladesh', 'Bowler', 9),
(45, 'Nazmul Islam', 'Bangladesh', 'Bowler', 8),
(46, 'Mohammad Shahzad', 'Afghanistan', 'WKT Keeper', 9),
(47, 'Rahmat Shah', 'Afghanistan', 'Batsman', 10),
(48, 'Asghar Afghan', 'Afghanistan', 'Batsman', 9),
(49, 'Najibullah Zardan', 'Afghanistan', 'Batsman', 9),
(50, 'Hashmatullah Shahidi', 'Afghanistan', 'Batsman', 9),
(51, 'Ihsanullah Janat', 'Afghanistan', 'Batsman', 9),
(52, 'Javed Ahmadi', 'Afghanistan', 'Batsman', 8),
(53, 'Mohammad Nabi', 'Afghanistan', 'All Rounder', 9),
(54, 'Gulbadin Naib', 'Afghanistan', 'All Rounder', 9),
(55, 'Samiullah Shenwari', 'Afghanistan', 'All Rounder', 9),
(56, 'Sharafuddin Ashraf', 'Afghanistan', 'All Rounder', 8),
(57, 'Mohammad Nabi', 'Afghanistan', 'All Rounder', 9),
(58, 'Rashid Khan', 'Afghanistan', 'Bowler', 10),
(59, 'Mujeeb-ur-Rahman', 'Afghanistan', 'Bowler', 9),
(60, 'Yamin Ahmadzai', 'Afghanistan', 'Bowler', 8),
(61, 'Aftab Alam', 'Afghanistan', 'Bowler', 8),
(62, 'Jos Buttler', 'England', 'WKT Keeper', 10),
(63, 'Jonny Bairstow', 'England', 'Batsman', 10),
(64, 'Alex Hales', 'England', 'Batsman', 10),
(65, 'Joe Root', 'England', 'Batsman', 9),
(66, 'Jason Roy', 'England', 'Batsman', 9),
(67, 'Eoin Morgan', 'England', 'Batsman', 9),
(68, 'David Malan', 'England', 'Batsman', 8),
(69, 'James Vince', 'England', 'Batsman', 8),
(70, 'Ben Stokes', 'England', 'All Rounder', 9),
(71, 'David Willey', 'England', 'All Rounder', 9),
(72, 'Moeen Ali ', 'England', 'All Rounder', 9),
(73, 'Adil Rashid', 'England', 'Bowler', 9),
(74, 'Liam Plunkett', 'England', 'Bowler', 9),
(75, 'Chris Jordan', 'England', 'Bowler', 9),
(76, 'Mark Wood', 'England', 'Bowler', 9),
(77, 'Jake Ball', 'England', 'Bowler', 8),
(78, 'A Carey', 'Australia', 'WKT Keeper', 9),
(79, 'Aron Finch', 'Australia', 'Batsman', 10),
(80, 'Darcy Short', 'Australia', 'Batsman', 9),
(81, 'Travis Head', 'Australia', 'Batsman', 9),
(82, 'Chris Lynn', 'Australia', 'Batsman', 9),
(83, 'Nic Maddinson', 'Australia', 'Batsman', 8),
(84, 'Usman Khawaja', 'Australia', 'Batsman', 8),
(85, 'Ben Cutting', 'Australia', 'All Rounder', 9),
(86, 'Glenn Maxwell', 'Australia', 'All Rounder', 9),
(87, 'Macrus Stoinis', 'Australia', 'All Rounder', 9),
(89, 'Andrew Tye', 'Australia', 'Bowler', 10),
(90, 'Josh Hzelwood', 'Australia', 'Bowler', 9),
(91, 'Pat Cummins', 'Australia', 'Bowler', 9),
(92, 'Adam Zampa', 'Australia', 'Bowler', 9),
(93, 'Billy Stanlake', 'Australia', 'Bowler', 8),
(94, 'Tom Lantham', 'New Zealand', 'WKT Keeper', 9),
(95, 'Luke Ronchi', 'New Zealand', 'WKT Keeper', 9),
(96, 'Kane Williamson', 'New Zealand', 'Batsman', 10),
(97, 'Ross Taylor', 'New Zealand', 'Batsman', 10),
(98, 'Martin Guptill', 'New Zealand', 'Batsman', 9),
(99, 'Dean Brownlie', 'New Zealand', 'Batsman', 9),
(100, 'Neil Broom', 'New Zealand', 'Batsman', 9),
(101, 'Coin de Grandhomme', 'New Zealand', 'All Rounder', 9),
(102, 'Corey Anderson', 'New Zealand', 'All Rounder', 9),
(103, 'James Neesham', 'New Zealand', 'All Rounder', 9),
(104, 'Trent Boult', 'New Zealand', 'Bowler', 10),
(105, 'Tim Southee', 'New Zealand', 'Bowler', 9),
(106, 'Ish Sodhi', 'New Zealand', 'Bowler', 9),
(107, 'Mitchell Santner', 'New Zealand', 'Bowler', 9),
(108, 'Lockie Ferguson', 'New Zealand', 'Bowler', 9),
(109, 'Mitchell McClenaghan', 'New Zealand', 'Bowler', 8),
(110, 'Quinton de Kock', 'South Africa', 'WKT Keeper', 10),
(111, 'Heinrich Klaasen', 'South Africa', 'WKT Keeper', 8),
(112, 'Faf du Plesis', 'South Africa', 'Batsman', 10),
(113, 'Hashim Amla', 'South Africa', 'Batsman', 10),
(114, 'Aiden Markram', 'South Africa', 'Batsman', 9),
(115, 'David Miller', 'South Africa', 'Batsman', 9),
(116, 'Frhaan Behardein', 'South Africa', 'Batsman', 8),
(117, 'Chris Morris', 'South Africa', 'All Rounder', 9),
(118, 'Jean-Paul Duminy', 'South Africa', 'All Rounder', 9),
(119, 'Vernon Philander', 'South Africa', 'All Rounder', 8),
(120, 'Lungi Ngidi', 'South Africa', 'Bowler', 10),
(121, 'Kagiso Rabada', 'South Africa', 'Bowler', 9),
(122, 'Morne Morkel', 'South Africa', 'Bowler', 9),
(123, 'Morne Morkel', 'South Africa', 'Bowler', 9),
(124, 'Tabraiz Shamsi', 'South Africa', 'Bowler', 9),
(125, 'Andile Phehlukwayo', 'South Africa', 'Bowler', 8);

-- --------------------------------------------------------

--
-- Table structure for table `playingplayers`
--

CREATE TABLE `playingplayers` (
  `ppid` int(100) NOT NULL,
  `playid` int(255) NOT NULL,
  `ppname` varchar(255) NOT NULL,
  `ppcountry` varchar(255) NOT NULL,
  `pptype` varchar(255) NOT NULL,
  `runs` varchar(255) NOT NULL,
  `wickets` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playingplayers`
--

INSERT INTO `playingplayers` (`ppid`, `playid`, `ppname`, `ppcountry`, `pptype`, `runs`, `wickets`, `points`) VALUES
(1, 1, 'MS Dhoni', 'India', 'WKT Keeper', '0', '0', '0'),
(2, 2, 'Virat Kohli', 'India', 'Batsman', '0', '0', '0'),
(3, 3, 'Rohit Sharma', 'India', 'Batsman', '0', '0', '0'),
(4, 4, 'Shikhar Dhawan', 'India', 'Batsman', '0', '0', '0'),
(5, 5, 'Lokesh Rahul', 'India', 'Batsman', '0', '0', '0'),
(6, 8, 'Hardik Pandya', 'India', 'All Rounder', '0', '0', '0'),
(7, 9, 'Kedar Jadhav', 'India', 'All Rounder', '0', '0', '0'),
(8, 11, 'Jasprit Bumrah', 'India', 'Bowler', '0', '0', '0'),
(9, 12, 'Kuldeep Yadav', 'India', 'Bowler', '0', '0', '0'),
(10, 13, 'Bhuvaneshwar Kumar', 'India', 'Bowler', '0', '0', '0'),
(11, 14, 'Yuzvendra Chahal', 'India', 'Bowler', '0', '0', '0'),
(12, 62, 'Jos Buttler', 'England', 'WKT Keeper', '0', '0', '0'),
(13, 63, 'Jonny Bairstow', 'England', 'Batsman', '0', '0', '0'),
(14, 64, 'Alex Hales', 'England', 'Batsman', '0', '0', '0'),
(15, 65, 'Joe Root', 'England', 'Batsman', '0', '0', '0'),
(16, 66, 'Jason Roy', 'England', 'Batsman', '0', '0', '0'),
(17, 70, 'Ben Stokes', 'England', 'All Rounder', '0', '0', '0'),
(18, 71, 'David Willey', 'England', 'All Rounder', '0', '0', '0'),
(19, 73, 'Adil Rashid', 'England', 'Bowler', '0', '0', '0'),
(20, 74, 'Liam Plunkett', 'England', 'Bowler', '0', '0', '0'),
(21, 75, 'Chris Jordan', 'England', 'Bowler', '0', '0', '0'),
(22, 76, 'Mark Wood', 'England', 'Bowler', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `sid` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `matchid` int(255) NOT NULL,
  `selplay` varchar(255) NOT NULL,
  `points` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`sid`, `id`, `matchid`, `selplay`, `points`) VALUES
(1, 15, 1, '2, 3, 4, 5, 63, 8, 9, 70, 1, 11, 12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  `rank` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`, `points`, `rank`) VALUES
(1, 'unknown32', 'unknown@gmail.com', 'unknown123', 100, 3),
(2, 'vedant123', 'vedant123@gmail.com', 'ketan3232', 50, 4),
(7, 'ketan3232', 'ketan3232@gmail.com', 'ketan3232', 360, 2),
(15, 'hello3232', 'hello3232@gmail.com', 'hello3232', 1708, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`matchid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playid`);

--
-- Indexes for table `playingplayers`
--
ALTER TABLE `playingplayers`
  ADD PRIMARY KEY (`ppid`);

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `matchid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `playingplayers`
--
ALTER TABLE `playingplayers`
  MODIFY `ppid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
