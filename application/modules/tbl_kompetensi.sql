-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 03:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anandaprivate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kompetensi`
--

CREATE TABLE `tbl_kompetensi` (
  `id_kompetensi` varchar(15) NOT NULL,
  `id_tentor` int(11) NOT NULL,
  `id_kursus` varchar(15) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `status` enum('aktif','tidak') DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kompetensi`
--

INSERT INTO `tbl_kompetensi` (`id_kompetensi`, `id_tentor`, `id_kursus`, `id_jenjang`, `status`, `date_created`) VALUES
('KM0931', 58260739, 'KS5478', 1, NULL, '2019-07-18 06:33:30'),
('KM3568', 58260739, 'KS5478', 2, 'aktif', '2019-07-18 06:06:11'),
('KM6417', 58260739, 'KS6274', 2, NULL, '2019-07-18 06:32:35'),
('KM9784', 58260739, 'KS7502', 2, 'tidak', '2019-07-18 06:06:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kompetensi`
--
ALTER TABLE `tbl_kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
