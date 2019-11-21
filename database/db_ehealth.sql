-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 01:54 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ehealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_book`
--

CREATE TABLE `t_book` (
  `no_pas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_book`
--

INSERT INTO `t_book` (`no_pas`, `nama`, `email`, `tanggal`, `depart`) VALUES
('PS0001', 'Deny', 'denyrizky9@gmail.com', '19/10/2016', 'Pemeriksaan Hidung'),
('PS0002', 'sada', 'denyrizky9@gmail.com', '19/10/2016', 'Pemeriksaan Telinga'),
('PS0003', 'Adi', 'denyrizky9@gmail.com', '10/18/2019', 'Pemeriksaan Telinga'),
('PS0004', 'Musa', 'denyrizky9@gmail.com', '11/22/2019', 'Pemeriksaan Telinga'),
('PS0005', 'Feri', 'denyrizky9@gmail.com', '11/22/2019', 'Pemeriksaan Telinga'),
('PS0006', 'admin', 'denyrizky9@gmail.com', '19/10/2016', 'Pemeriksaan Tenggorokan'),
('PS0007', 'admin', 'denyrizky9@gmail.com', '19/10/2016', 'Pemeriksaan Tenggorokan'),
('PS0008', 'admin', 'denyrizky9@gmail.com', '19/10/2016', 'Pemeriksaan Tenggorokan');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`user_id`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'operator', 'operator', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_book`
--
ALTER TABLE `t_book`
  ADD PRIMARY KEY (`no_pas`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
