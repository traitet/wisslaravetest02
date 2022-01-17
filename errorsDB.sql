-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 09:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `functionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdDate` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdTime` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`id`, `functionName`, `message`, `createdBy`, `createdDate`, `createdTime`) VALUES
(1, 'GET_DATA', 'Invalid column name COMPCODE.  Invalid column name PLANTCODE.  Invalid column name ENABLE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name CONFIGNAME.  Invalid column name VALUETXT1.  Invalid column name VALUETXT2.  Invalid column name VALUETXT3.  Invalid column name VALUETXT4.  Invalid column name VALUENUM1.  Invalid column name VALUENUM2from', 'ADMIN', '20220117', '125505'),
(2, 'GET_DATA', 'Invalid column name COMPCODE.  Invalid column name PLANTCODE.  Invalid column name ENABLE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name CONFIGNAME.  Invalid column name VALUETXT1.  Invalid column name VALUETXT2.  Invalid column name VALUETXT3.  Invalid column name VALUETXT4.  Invalid column name VALUENUM1.  Invalid column name VALUENUM2from', 'ADMIN', '20220117', '125505'),
(3, 'GET_DATA', 'Invalid column name COMPCODE.  Invalid column name PLANTCODE.  Invalid column name ENABLE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name CONFIGNAME.  Invalid column name VALUETXT1.  Invalid column name VALUETXT2.  Invalid column name VALUETXT3.  Invalid column name VALUETXT4.  Invalid column name VALUENUM1.  Invalid column name VALUENUM2from', 'ADMIN', '20220117', '125505'),
(4, 'GET_DATA', 'Invalid column name COMPCODE.  Invalid column name PLANTCODE.  Invalid column name ENABLE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name MODULECODE.  Invalid column name FEATURECODE.  Invalid column name FUNCTIONCODE.  Invalid column name CONFIGNAME.  Invalid column name VALUETXT1.  Invalid column name VALUETXT2.  Invalid column name VALUETXT3.  Invalid column name VALUETXT4.  Invalid column name VALUENUM1.  Invalid column name VALUENUM2from', 'ADMIN', '20220117', '125505');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
