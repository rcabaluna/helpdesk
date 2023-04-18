-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20230103.7645611e8d
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2023 at 07:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldivision`
--

CREATE TABLE `tbldivision` (
  `divisionid` int(11) NOT NULL,
  `divisioncode` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldivision`
--

INSERT INTO `tbldivision` (`divisionid`, `divisioncode`, `name`) VALUES
(1, 'TSD', 'Technical Services Division'),
(2, 'FASD', 'Finance and Administrative Division'),
(3, 'ORD', 'Office of the Regional Director Division');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `locationid` int(11) NOT NULL,
  `locationcode` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`locationid`, `locationcode`, `name`) VALUES
(1, 'RO', 'Regional Office'),
(2, 'BUK', 'PSTO - Bukidnon'),
(3, 'CAM', 'PSTO - Camiguin'),
(4, 'LDN', 'PSTO - Lanao del Norte'),
(5, 'MOC', 'PSTO - Misamis Occidental'),
(6, 'MOR', 'PSTO - Misamis Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest_details`
--

CREATE TABLE `tblrequest_details` (
  `reqdetailsid` int(11) NOT NULL,
  `reqsummaryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest_types`
--

CREATE TABLE `tblrequest_types` (
  `requesttypeid` int(11) NOT NULL,
  `requestcode` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_types`
--

INSERT INTO `tblrequest_types` (`requesttypeid`, `requestcode`, `name`) VALUES
(1, 'ICTREP', 'Repair/reformat of ICT Equipment (Printer, Computer, etc.)'),
(2, 'ICTCONN', 'Internet Connection Service'),
(3, 'ICTSYS', 'Internal Information Systems Access (TOMS, TRACE, etc.)'),
(4, 'NAMETAG', 'Name Tag Layout'),
(5, 'TECHSUPP', 'Technical Support for Events'),
(6, 'BIOREG', 'Biometrics Registration'),
(7, 'EMLCREA', 'Email Account Creation for Regulars and Units/Projects'),
(8, 'EMLSIG', 'Email Signature Creation'),
(9, 'ICTSETUP', 'Set up/Installation/Replacement of ICT Equipment or Software'),
(10, 'CONRM', 'Use of Conference Room ICT Equipment'),
(11, 'GRPHDES', 'Graphic Design and Video Production'),
(12, 'VRSREM', 'Virus removal'),
(13, 'PVCID', 'PVC ID Production (on hold)'),
(14, 'SYSBUG', 'System Bug Report'),
(15, 'OTHERS', 'Other Services Not Mentioned Therein');

-- --------------------------------------------------------

--
-- Table structure for table `tblunit`
--

CREATE TABLE `tblunit` (
  `unitid` int(11) NOT NULL,
  `divisioncode` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblunit`
--

INSERT INTO `tblunit` (`unitid`, `divisioncode`, `name`) VALUES
(1, 'ORD', 'PMEQ'),
(2, 'ORD', 'GAD'),
(3, 'ORD', 'ORD');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tlbrequest_summary`
--

CREATE TABLE `tlbrequest_summary` (
  `reqsummaryid` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `divisionid` int(11) DEFAULT NULL,
  `unitid` int(11) DEFAULT NULL,
  `requesttypeid` int(11) DEFAULT NULL,
  `acknowledgedby` int(11) DEFAULT NULL,
  `resolvedby` int(11) DEFAULT NULL,
  `xstatus` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_acknowledged` datetime DEFAULT NULL,
  `date_resolved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldivision`
--
ALTER TABLE `tbldivision`
  ADD PRIMARY KEY (`divisionid`),
  ADD KEY `divisioncode` (`divisioncode`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexes for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  ADD PRIMARY KEY (`reqdetailsid`),
  ADD KEY `reqdet_reqsumm_fk_idx` (`reqsummaryid`);

--
-- Indexes for table `tblrequest_types`
--
ALTER TABLE `tblrequest_types`
  ADD PRIMARY KEY (`requesttypeid`);

--
-- Indexes for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD PRIMARY KEY (`unitid`),
  ADD KEY `tblloc_divcode_fk_idx` (`divisioncode`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tlbrequest_summary`
--
ALTER TABLE `tlbrequest_summary`
  ADD PRIMARY KEY (`reqsummaryid`),
  ADD KEY `reqsumm_divisionid_fk_idx` (`divisionid`),
  ADD KEY `reqsumm_unitid_fk_idx` (`unitid`),
  ADD KEY `reqsumm_reqtypeid_fk_idx` (`requesttypeid`),
  ADD KEY `reqsumm_resby_fk_idx` (`resolvedby`),
  ADD KEY `reqsumm_ackby_fk_idx` (`acknowledgedby`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldivision`
--
ALTER TABLE `tbldivision`
  MODIFY `divisionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `locationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  MODIFY `reqdetailsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblrequest_types`
--
ALTER TABLE `tblrequest_types`
  MODIFY `requesttypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `unitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tlbrequest_summary`
--
ALTER TABLE `tlbrequest_summary`
  MODIFY `reqsummaryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  ADD CONSTRAINT `reqdet_reqsumm_fk` FOREIGN KEY (`reqsummaryid`) REFERENCES `tlbrequest_summary` (`reqsummaryid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD CONSTRAINT `tblloc_divcode_fk` FOREIGN KEY (`divisioncode`) REFERENCES `tbldivision` (`divisioncode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tlbrequest_summary`
--
ALTER TABLE `tlbrequest_summary`
  ADD CONSTRAINT `reqsumm_ackby_fk` FOREIGN KEY (`acknowledgedby`) REFERENCES `tblusers` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_divisionid_fk` FOREIGN KEY (`divisionid`) REFERENCES `tbldivision` (`divisionid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_reqtypeid_fk` FOREIGN KEY (`requesttypeid`) REFERENCES `tblrequest_types` (`requesttypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_resby_fk` FOREIGN KEY (`resolvedby`) REFERENCES `tblusers` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_unitid_fk` FOREIGN KEY (`unitid`) REFERENCES `tblunit` (`unitid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
