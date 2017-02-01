-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 10:01 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_session`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(32) NOT NULL,
  `access` int(10) UNSIGNED DEFAULT NULL,
  `data` text,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `access`, `data`, `created_on`, `updated_on`) VALUES
('gbpirql43891vvu0vdal1bgh11', 1445843109, 'check|a:1:{i:0;s:8:"checking";}newvalues|a:2:{s:8:"checking";s:20:"hello world adsfdsfg";s:7:"testing";s:22:"hello ji ki haal chaal";}', '2015-10-26 12:35:09', NULL),
('m9umtrg69ml74ec7r6a6d5u964', 1445842677, 'check|a:1:{i:0;s:8:"checking";}newvalues|a:2:{s:8:"checking";s:20:"hello world adsfdsfg";s:7:"testing";s:22:"hello ji ki haal chaal";}', '2015-10-26 12:27:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
