-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 06:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudci`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_customer`
--

CREATE TABLE `db_customer` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_customer`
--

INSERT INTO `db_customer` (`id`, `customername`, `phone`, `address`, `city`, `country`) VALUES
(1, 'Mahmud Numan', '01827211193', 'Mirpur-2,', 'Dhaka', 'Bangladesh'),
(2, 'Numan', '01815052925', 'Mirpur-2,', 'Dhaka', 'Bangladesh'),
(3, 'Jahid Hasan', '01917093745', 'Dhaka', 'Dhaka', 'Bangladesh'),
(4, 'Abdul Awal', '01911404078', 'Chandpur', 'Chandpur', 'Bangladesh'),
(5, 'Zakir Hossain ', '01788282555', 'Dhaka', 'Dhaka', 'Bangladesh'),
(6, 'Panna', '123456789', 'Dhaka', 'Dhaka', 'Bangladesh'),
(8, 'Rasel', '01818177940', 'Chandpur', 'Chandpur', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_customer`
--
ALTER TABLE `db_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
