-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 12:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopmarankup`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(5) NOT NULL,
  `activity_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `activity_name`) VALUES
(1, 'olikophahaha'),
(3, 'seminar'),
(5, 'seminar kopma');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `access_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-11-18 07:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_du` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nak` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_du`, `name`, `nak`, `username`, `password`) VALUES
(1, 'Nur Haryani', '301111', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(3, 'Risang', '301000', 'risang', '4c573ac159e237660c643e9ca4aed53d'),
(4, 'Nuriskin', '1234567', 'nuri', ''),
(5, 'Dina', '78908', 'dina', 'e274648aed611371cf5c30a30bbe1d65');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id_point` int(5) NOT NULL,
  `point_total` int(3) NOT NULL,
  `id_du_fk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id_point`, `point_total`, `id_du_fk`) VALUES
(1, 15, 1),
(2, 15, 4),
(3, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(5) NOT NULL,
  `position_name` varchar(20) NOT NULL,
  `position_points` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `position_name`, `position_points`) VALUES
(1, 'ketua', 15),
(2, 'koordinator', 10),
(3, 'anggota', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id_user_activity` int(5) NOT NULL,
  `id_activity_fk` int(5) NOT NULL,
  `id_position_fk` int(5) NOT NULL,
  `id_du_fk` int(5) NOT NULL,
  `point` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id_user_activity`, `id_activity_fk`, `id_position_fk`, `id_du_fk`, `point`) VALUES
(1, 1, 1, 1, 15),
(2, 3, 1, 4, 0),
(3, 3, 1, 3, 0),
(4, 3, 3, 1, 5),
(9, 3, 2, 1, 10),
(10, 3, 1, 1, 15),
(11, 3, 2, 3, 0),
(12, 5, 1, 3, 0),
(13, 1, 2, 3, 15),
(14, 5, 1, 3, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_du`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id_point`),
  ADD KEY `id_du_fk` (`id_du_fk`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id_user_activity`),
  ADD KEY `id_activity_fk` (`id_activity_fk`),
  ADD KEY `id_position_fk` (`id_position_fk`),
  ADD KEY `id_du_fk` (`id_du_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_activity` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_du` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id_point` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id_user_activity` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_ibfk_1` FOREIGN KEY (`id_du_fk`) REFERENCES `data_user` (`id_du`);

--
-- Constraints for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD CONSTRAINT `user_activity_ibfk_1` FOREIGN KEY (`id_activity_fk`) REFERENCES `activity` (`id_activity`),
  ADD CONSTRAINT `user_activity_ibfk_2` FOREIGN KEY (`id_position_fk`) REFERENCES `position` (`id_position`),
  ADD CONSTRAINT `user_activity_ibfk_3` FOREIGN KEY (`id_du_fk`) REFERENCES `data_user` (`id_du`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
