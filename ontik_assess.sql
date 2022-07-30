-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ontik_assess`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_type`
--

CREATE TABLE `form_type` (
  `id` int(144) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_type`
--

INSERT INTO `form_type` (`id`, `value`, `created_at`) VALUES
(1, '{\"label\":\"Name\",\"name\":\"name\",\"formType\":\"text\"},{\"label\":\"Address\",\"name\":\"address\",\"formType\":\"text\"},{\"label\":\"Phone number\",\"name\":\"mobile number\",\"formType\":\"number\"},{\"label\":\"sdad\",\"name\":\"sad\",\"formType\":\"text\",\"formValue\":\"\"}', '2022-07-30 17:35:53'),
(2, '{\"label\":\"Name\",\"name\":\"name\",\"formType\":\"text\"},{\"label\":\"Address\",\"name\":\"address\",\"formType\":\"text\"},{\"label\":\"Phone number\",\"name\":\"mobile number\",\"formType\":\"number\"},{\"label\":\"sad\",\"name\":\"sd\",\"formType\":\"text\",\"formValue\":\"\"}', '2022-07-30 17:40:19'),
(3, '{\"label\":\"Name\",\"name\":\"name\",\"formType\":\"text\"},{\"label\":\"Address\",\"name\":\"address\",\"formType\":\"text\"},{\"label\":\"Phone number\",\"name\":\"mobile number\",\"formType\":\"number\"},{\"label\":\"sad\",\"name\":\"sd\",\"formType\":\"text\",\"formValue\":\"\"}', '2022-07-30 17:40:37'),
(4, '{\"label\":\"Name\",\"name\":\"name\",\"formType\":\"text\"},{\"label\":\"Address\",\"name\":\"address\",\"formType\":\"text\"},{\"label\":\"Phone number\",\"name\":\"mobile number\",\"formType\":\"number\"},{\"label\":\"sad\",\"name\":\"sd\",\"formType\":\"text\",\"formValue\":\"\"}', '2022-07-30 17:40:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_type`
--
ALTER TABLE `form_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_type`
--
ALTER TABLE `form_type`
  MODIFY `id` int(144) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
