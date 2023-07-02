-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 
-- 伺服器版本： 5.7.21-log
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `projectdb`
--

CREATE DATABASE IF NOT EXISTS `ProjectDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ProjectDB`;
-- --------------------------------------------------------

--
-- 資料表結構 `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `A_ID` int(10) NOT NULL AUTO_INCREMENT,
  `A_Name` varchar(20) NOT NULL,
  `A_Email` varchar(255) NOT NULL,
  `A_Password` varchar(20) NOT NULL,
  `A_Phone` char(8) NOT NULL,
  PRIMARY KEY (`A_ID`,`A_Email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `admins`
--

INSERT INTO `admins` (`A_ID`, `A_Name`, `A_Email`, `A_Password`, `A_Phone`) VALUES
(1, 'Admin123', 'admin@gamil.com', 'Admin123', '64358537');

-- --------------------------------------------------------

--
-- 資料表結構 `booking_order`
--

DROP TABLE IF EXISTS `booking_order`;
CREATE TABLE IF NOT EXISTS `booking_order` (
  `Booking_ID` int(10) NOT NULL AUTO_INCREMENT,
  `U_ID` int(10) NOT NULL,
  `S_ID` int(10) NOT NULL,
  `A_ID` int(10) NOT NULL,
  `Booking_Date` datetime NOT NULL,
  `Booking_Status` varchar(20) NOT NULL COMMENT 'The Booking Orders should include 2 status:  \n1. “In Progress”  \n2. “Completed”',
  PRIMARY KEY (`Booking_ID`),
  KEY `Booking_Order_FK_UID` (`U_ID`),
  KEY `Booking_Order_FK_SID` (`S_ID`),
  KEY `Booking_Order_FK_AID` (`A_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `booking_order`
--

INSERT INTO `booking_order` (`Booking_ID`, `U_ID`, `S_ID`, `A_ID`, `Booking_Date`, `Booking_Status`) VALUES
(1, 1, 1, 1, '2021-04-11 11:11:11', 'In Progress'),
(8, 3, 1, 1, '2021-02-02 18:29:00', 'In Progress'),
(10, 5, 1, 1, '2021-02-10 13:51:00', 'In Progress');

-- --------------------------------------------------------

--
-- 資料表結構 `booking_orderlocation`
--

DROP TABLE IF EXISTS `booking_orderlocation`;
CREATE TABLE IF NOT EXISTS `booking_orderlocation` (
  `Order_Location_ID` int(10) NOT NULL AUTO_INCREMENT,
  `U_ID` int(10) NOT NULL,
  `Booking_ID` int(10) NOT NULL,
  `Location_ID` varchar(20) NOT NULL,
  PRIMARY KEY (`Order_Location_ID`),
  KEY `BookingOrderLocationFKBookingID` (`Booking_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `booking_orderlocation`
--

INSERT INTO `booking_orderlocation` (`Order_Location_ID`, `U_ID`, `Booking_ID`, `Location_ID`) VALUES
(1, 1, 1, '3'),
(7, 5, 10, '8'),
(8, 3, 8, '3');

-- --------------------------------------------------------

--
-- 資料表結構 `gift`
--

DROP TABLE IF EXISTS `gift`;
CREATE TABLE IF NOT EXISTS `gift` (
  `U_Email` varchar(255) NOT NULL,
  `gift_code` varchar(255) NOT NULL,
  `gift_name` varchar(100) NOT NULL,
  `U_ID` int(10) NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `gift`
--

INSERT INTO `gift` (`U_Email`, `gift_code`, `gift_name`, `U_ID`) VALUES
('User34256@ymail.com', 'A5TKJ8DRH48DT54HG', 'pen', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `location_detail`
--

DROP TABLE IF EXISTS `location_detail`;
CREATE TABLE IF NOT EXISTS `location_detail` (
  `Location_ID` varchar(20) NOT NULL,
  `Location_Name` varchar(255) NOT NULL,
  `Location_OpenTime` time(6) NOT NULL,
  `Location_CloseTime` time(6) NOT NULL,
  `Location_Description` varchar(255) NOT NULL,
  `Booking_Limit` varchar(255) NOT NULL DEFAULT '100',
  PRIMARY KEY (`Location_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `location_detail`
--

INSERT INTO `location_detail` (`Location_ID`, `Location_Name`, `Location_OpenTime`, `Location_CloseTime`, `Location_Description`, `Booking_Limit`) VALUES
('1', 'Quarry Bay Community Hall in Eastern District', '00:00:00.000000', '23:59:59.000000', 'Hong Kong', '100'),
('2', 'Leighton Hill Community Hall in Wan Chai', '10:00:00.000000', '18:00:00.000000', 'Hong Kong', '100'),
('3', 'Shek Tong Tsui Sports Centre in Central and Western', '00:00:00.000000', '23:59:59.000000', 'Hong Kong', '100'),
('4', 'Henry G Leong Yaumatei Community Centre', '10:00:00.000000', '18:00:00.000000', 'Kowloon', '100'),
('5', 'Yau Tong Community Hall', '10:00:00.000000', '18:00:00.000000', 'Kowloon', '100'),
('6', 'Pak Tin Community Hall in Sham Shui Po', '10:00:00.000000', '18:00:00.000000', 'Kowloon', '100'),
('7', 'Lek Yuen Community Hall in Sha Tin', '00:00:00.000000', '23:59:59.000000', 'New Territories', '100'),
('8', 'Hang Hau Community Hall', '00:00:00.000000', '23:59:59.000000', 'New Territories', '100');

-- --------------------------------------------------------

--
-- 資料表結構 `normal_user`
--

DROP TABLE IF EXISTS `normal_user`;
CREATE TABLE IF NOT EXISTS `normal_user` (
  `U_ID` int(10) NOT NULL AUTO_INCREMENT,
  `U_Name` varchar(20) NOT NULL,
  `U_DateofBirth` date NOT NULL,
  `U_Email` varchar(255) NOT NULL,
  `U_Password` varchar(20) NOT NULL,
  `U_HKID` varchar(8) NOT NULL,
  `U_Phone` char(8) NOT NULL,
  `U_Gender` tinyint(1) NOT NULL,
  `U_Address` varchar(255) NOT NULL,
  `U_Point` varchar(255) NOT NULL,
  PRIMARY KEY (`U_ID`,`U_Email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `normal_user`
--

INSERT INTO `normal_user` (`U_ID`, `U_Name`, `U_DateofBirth`, `U_Email`, `U_Password`, `U_HKID`, `U_Phone`, `U_Gender`, `U_Address`, `U_Point`) VALUES
(1, 'User34256', '1999-10-10', 'User34256@ymail.com', 'Y456835A', 'Y456835A', '51466454', 0, 'Flat D, 6/F, Golden Industrial Center, Block 4, 182-190 Tai Lin Pai Road, Kwai Chung, N.T., HONG KONG', '1148000'),
(3, 'Kree', '2021-01-15', 'tomwong9642@gmail.com', '123456', 'Y1234567', '12345678', 1, 'ASD123', '4998000'),
(4, 'asdas', '2021-01-08', 'tomwong8520@gmail.com', '123456', 'Y3692584', '25836412', 1, 'ASD3333', '0'),
(5, 'user', '2021-01-16', 'tomwong1000@gmail.com', '147258', 'Y3216548', '12345678', 0, 'ASD1', '0');

-- --------------------------------------------------------

--
-- 資料表結構 `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `Salary_ID` int(10) NOT NULL AUTO_INCREMENT,
  `S_ID` int(10) NOT NULL,
  `Working_Time` varchar(255) NOT NULL,
  `Total_Salary` varchar(255) NOT NULL,
  PRIMARY KEY (`Salary_ID`),
  KEY `Salary_ID_FK_SID` (`S_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `salary`
--

INSERT INTO `salary` (`Salary_ID`, `S_ID`, `Working_Time`, `Total_Salary`) VALUES
(28, 1, '45', '20760');

-- --------------------------------------------------------

--
-- 資料表結構 `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `S_ID` int(10) NOT NULL AUTO_INCREMENT,
  `S_Name` varchar(20) NOT NULL,
  `S_Email` varchar(255) NOT NULL,
  `S_Password` varchar(20) NOT NULL,
  `S_Phone` char(8) NOT NULL,
  `Working_Time` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`S_ID`,`S_Email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `staff`
--

INSERT INTO `staff` (`S_ID`, `S_Name`, `S_Email`, `S_Password`, `S_Phone`, `Working_Time`) VALUES
(1, 'Imstaff', 'Imstaff@qq.com', 'Imstaff', '53985337', '346'),
(2, 'asd12321312', 'qwe1231231213@gmail.com', '123456', '12365498', ''),
(3, 'ZXC ASD 123', '123123@gmail.com', '123456', '34127865', ''),
(4, 'Staff01', 'Imstaff01@qq.com', '123456', '12345678', '');

-- --------------------------------------------------------

--
-- 資料表結構 `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Hello!', 'User34256@ymail.com (user)', '2021-04-20 04:50:01');

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `booking_order`
--
ALTER TABLE `booking_order`
  ADD CONSTRAINT `Booking_Order_FK_AID` FOREIGN KEY (`A_ID`) REFERENCES `admins` (`A_ID`),
  ADD CONSTRAINT `Booking_Order_FK_SID` FOREIGN KEY (`S_ID`) REFERENCES `staff` (`S_ID`),
  ADD CONSTRAINT `Booking_Order_FK_UID` FOREIGN KEY (`U_ID`) REFERENCES `normal_user` (`U_ID`);

--
-- 資料表的限制式 `booking_orderlocation`
--
ALTER TABLE `booking_orderlocation`
  ADD CONSTRAINT `BookingOrderLocationFKBookingID` FOREIGN KEY (`Booking_ID`) REFERENCES `booking_order` (`Booking_ID`);

--
-- 資料表的限制式 `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `Salary_ID_FK_SID` FOREIGN KEY (`S_ID`) REFERENCES `staff` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
