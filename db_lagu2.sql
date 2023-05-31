-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lagu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lagu`
--

CREATE TABLE `tbl_lagu` (
  `CodeSong` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Artist` varchar(50) NOT NULL,
  `Album` varchar(50) NOT NULL,
  `Cover` varchar(50) NOT NULL,
  `Audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lagu`
--

INSERT INTO `tbl_lagu` (`CodeSong`, `Title`, `Artist`, `Album`, `Cover`, `Audio`) VALUES
('A1', 'Norman Fucking Rockwell', 'Lana Del Rey', 'pp', '', 'Norman fucking Rockwell.mp3'),
('A2', 'Typa Girl', 'BLACKPINK', 'Shut Down', '', 'BLACKPINK  Typa Girl.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lagu`
--
ALTER TABLE `tbl_lagu`
  ADD PRIMARY KEY (`CodeSong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
