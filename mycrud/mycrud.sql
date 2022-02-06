-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 10:21 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `id18399551_mycrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE IF NOT EXISTS `tblstudent` (
  `stud_id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_name` varchar(30) NOT NULL,
  `stud_add` varchar(100) NOT NULL,
  `stud_class` varchar(50) NOT NULL,
  `stud_mobileno` varchar(15) NOT NULL,
  `stud_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`stud_id`, `stud_name`, `stud_add`, `stud_class`, `stud_mobileno`, `stud_status`) VALUES
(1, 'Rishabh Soni', 'B/82,Jalaram Nagar,Pandesara,Surat-394221', '1', '9016616305', 'Active'),
(2, 'Mehul Agarwal', '123,Laxmipura,Samta road,Gorwa', '2', '9408356478', 'Active'),
(5, 'Yashwant Singh Rathore', 'Ratlam,Madhya Pradesh', '2', '8521479635', 'Active'),
(6, 'Vikas Singh Thakore', 'Manjalpur,Vadodara', '1', '2541369874', 'Active'),
(7, 'Rahul Shah', 'New VIP Road,Vadodara', '1', '8521469872', 'Active'),
(8, 'Dwarik Shah', 'Bapod,Vadodara', '2', '2136547896', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblstud_class`
--

CREATE TABLE IF NOT EXISTS `tblstud_class` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblstud_class`
--

INSERT INTO `tblstud_class` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'Bsc(Maths)'),
(3, 'Bsc(Geology)'),
(4, 'Bsc(Computer Science)'),
(5, 'Bsc(IT)');