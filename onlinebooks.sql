-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 02:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL,
  `Bname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bauther` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bpicture` blob NOT NULL,
  `Bprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Bname`, `Bauther`, `Bpicture`, `Bprice`) VALUES
(1, 'ahmed', 'ahmed', 0x38323533363836395f3836393833393934363830363136335f313835373033383337303039383634323934345f6e2e706e67, 0),
(2, 'ahmed saeed', 'mo', 0x38323539373735395f3732353234363737373939393231365f343032393235353430333331363434353138345f6e2e6a7067, 0),
(3, 'evel', 'ahmed', 0x4453435f303238332e4a5047, 0),
(4, 'alhok', 'ahmed', 0x4453435f303332332e4a5047, 500);

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
(11, 'ahmed', 'Ahmed salah', 1123122, 2),
(12, 'ahmed all', 'Ahmed ahmed', 12312, 1),
(13, 'ahmed saeed', 'Ahmed saeed', 65, 1),
(14, 'ahmed saeed', 'Ahmed saeed', 8896546, 1),
(15, 'ahmed saeed', 'Ahmed saeed', 546, 1),
(16, 'ahmed saeed', 'Ahmed saeed', 546, 1),
(17, 'ahmed shor', 'shor', 455689, 2),
(18, 'yousef', 'yousef atef', 25, 1),
(19, 'ramzy', 'ramzy12', 312465, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
