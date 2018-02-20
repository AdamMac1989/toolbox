-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2018 at 08:22 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_screw`
--

CREATE TABLE `user_screw` (
  `screw_id` varchar(10) NOT NULL,
  `length` int(12) NOT NULL,
  `number` int(12) NOT NULL,
  `user_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_screw`
--

INSERT INTO `user_screw` (`screw_id`, `length`, `number`, `user_id`) VALUES
('test05', 2, 20, 'test05'),
('TEST99', 45, 45, 'TEST99'),
('sc008', 2, 10, 'user01'),
('sc009', 2, 10, 'user01'),
('sc0010', 2, 10, 'user01'),
('sc0010', 4, 20, 'user01'),
('sc0010', 4, 20, 'user01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
