-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 11:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Bname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bauther` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bpicture` blob NOT NULL,
  `Bid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booksold`
--

CREATE TABLE `booksold` (
  `Bname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `Uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Uusername` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Upassword` bigint(20) NOT NULL,
  `Utype` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Uname`, `Uusername`, `Upassword`, `Utype`) VALUES
(1, 'ahmed', 'Dogaryahmed2017', 1231, 2),
(2, 'mohammed', 'Dogaryahmed2017', 1231, 2),
(3, 'ahmed', 'Ahmed Atef mousa', 12312, 1),
(4, 'ahmed', 'ahmedabdo', 1234566, 1),
(5, 'ahmed', 'Ahmed mousa', 12312, 1),
(6, 'mohammed adel salah', 'mohammed adel2017', 123, 2),
(7, 'mohammed', 'Dogaryahmed2017', 123122, 2),
(8, 'mohammed', 'Dogaryahmed2017', 123122, 2),
(9, 'ahmed', 'ahmedmousa@gmail', 123456, 1),
(10, 'ali', 'ali mohamed', 12312, 2),
(11, 'ahmed', 'Ahmed salah', 1123122, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
