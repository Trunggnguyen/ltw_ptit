-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 05:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL AUTO_INCREMENT ,
  `tk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sdt` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` float DEFAULT NULL,
  `chucVu` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viTri` int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` ( `tk`, `mk`, `ten`, `dob`, `sdt`, `luong`, `chucVu`, `ban`, `viTri`) VALUES
( 'admin', 'admin', 'admin', '2000-07-05', '0374321900', 2000, 'Hà Đông', 'Quản lý', 1),
( 'emp1', 'emp', 'Doan ', '2000-07-05', '0111111111', 2000, 'Hoàn kiếm', 'Nhân viên', 2),
( 'emp2', 'emp', 'Xuan Luu', '2000-07-02', '0222222222', 2000, 'Hà Đông', 'Nhân viên', 2),
( 'emp3', 'emp', 'Anh ', '2000-07-05', '0333333333', 2000, 'Thanh xuân', 'Nhân viên', 2),
( 'emp4', 'emp', 'Nhat', '2021-11-14', '0444444444', 1242, 'Ba Đình', 'Nhân viên', 2),
( 'emp5', 'emp', 'An', '2021-11-01', '0777777777', 1242, 'Ba Đình', 'Nhân viên', 2),
( 'emp7', 'emp', 'nam', '2021-11-07', '0000000242', 2727, 'Ba Đình', 'Nhân viên', 2),
( 'emp8', 'emp', 'Long Xuan', '2021-11-11', '0532225252', 1242, 'Hà Đông', 'Nhân viên', 2),
( 'emp9', 'emp', 'Trinh lon', '2021-11-04', '015925299', 2222, 'Hà Đông', 'Nhân viên', 2),
( 'emp6', 'emp', 'Tran Duc ', '2021-11-13', '11199923', 2000, 'Hà Đông', 'Nhân viên', 2),
( 'emp10', 'emp', 'Hoang ', '2021-11-07', '125125126', 8888, 'Ba Đình', 'Nhân viên', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `thoiGian` time DEFAULT NULL,
   `madon` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `idAcc` int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` ( `thoiGian`,`madon`, `ngay`, `idAcc`) VALUES
( '08:50:00','123', '2021-11-29', 2),
( '09:50:00', '123','2021-11-30', 3),
( '09:13:45','123', '2021-11-29', 3),
( '16:20:13', '123','2021-11-29', 13),
( '20:27:10','123', '2021-11-29', 2),
( '20:34:40','123', '2021-11-29', 17),
( '21:46:35', '123','2021-11-29', 18),
( '07:34:01', '123','2021-11-30', 2),
( '07:57:33','123', '2021-11-30', 3),
( '09:36:07','123', '2021-11-30', 2),
('10:02:45', '123','2021-11-30', 2),
( '22:03:21', '123','2021-12-02', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tk` (`tk`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAcc` (`idAcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `oder_ibfk_1` FOREIGN KEY (`idAcc`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
