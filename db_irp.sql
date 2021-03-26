-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 10:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_irp`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_fir` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `position_title` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `report_to` varchar(100) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `education_background` varchar(100) DEFAULT NULL,
  `dayefectif_month` int(11) DEFAULT NULL,
  `day_used` int(11) DEFAULT NULL,
  `umr_default` int(11) DEFAULT NULL,
  `presentation` varchar(11) DEFAULT NULL,
  `result_insentif` int(11) DEFAULT NULL,
  `total_insentif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_fir`, `date`, `position_title`, `company`, `report_to`, `departement`, `brand`, `location`, `education_background`, `dayefectif_month`, `day_used`, `umr_default`, `presentation`, `result_insentif`, `total_insentif`) VALUES
('001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('002', '2021-03-24', '1', 'sjdjs', 'snasjka', 'aishjas', 'wishij', '1', '', 1, 2, 4207750, '63', 63, 2950000),
('003', '2021-03-24', '1', 'sjdjs', 'snasjka', 'aishjas', 'wishij', '1', 'associate_degree', 1, 2, 4207750, '63', 63, 2950000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_fir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
