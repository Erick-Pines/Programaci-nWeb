-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 06:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `participantes`
--

CREATE TABLE `participantes` (
  `ID` int(4) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `TIEMPO` varchar(10) NOT NULL,
  `INTENTOS` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participantes`
--

INSERT INTO `participantes` (`ID`, `NOMBRE`, `TIEMPO`, `INTENTOS`) VALUES
(1, 'prueba', '00:00:23', 4),
(2, 'dadas', '00:58:00', 3),
(3, 'Franco', '01:04:48', 6),
(4, 'juan', '00:10:22', 4),
(5, 'Pedro', '00:08:54', 24700),
(6, 'dsadas', '00:22:57', 8),
(7, 'prueba 2', '00:24:30', 17),
(8, 'mariana', '01:07:22', 3),
(9, 'Gerardo', '00:11:33', 7),
(10, 'asda', '00:03:53', 3),
(11, 'dasda', '00:02:21', 4),
(12, 'fdsfsdf', '00:05:38', 4),
(13, 'fdsf', '00:02:66', 2),
(14, 'dsfdsf', '00:08:02', 4),
(15, 'ddsf', '00:04:88', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
