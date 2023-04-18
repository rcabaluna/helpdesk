-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20230103.7645611e8d
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2023 at 10:32 AM
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
  `reqsummaryid` int(11) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `itemcode` varchar(45) DEFAULT NULL,
  `locationcode` varchar(45) DEFAULT NULL,
  `xdate` date DEFAULT NULL,
  `xtime` time DEFAULT NULL,
  `emailusername` varchar(100) DEFAULT NULL,
  `mobileno` varchar(100) DEFAULT NULL,
  `landlineno` varchar(100) DEFAULT NULL,
  `localcode` varchar(20) DEFAULT NULL,
  `eqptsftware` varchar(50) DEFAULT NULL,
  `confictrequested` varchar(50) DEFAULT NULL,
  `empaddress` text DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `bloodtype` varchar(10) DEFAULT NULL,
  `officeemail` varchar(100) DEFAULT NULL,
  `personalemail` varchar(100) DEFAULT NULL,
  `tin` varchar(45) DEFAULT NULL,
  `sssno` varchar(45) DEFAULT NULL,
  `gsisno` varchar(45) DEFAULT NULL,
  `hdmfno` varchar(45) DEFAULT NULL,
  `phicno` varchar(45) DEFAULT NULL,
  `guardianname` varchar(100) DEFAULT NULL,
  `guardianmobile` varchar(45) DEFAULT NULL,
  `guardianaddress` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_details`
--

INSERT INTO `tblrequest_details` (`reqdetailsid`, `reqsummaryid`, `nickname`, `birthdate`, `description`, `itemcode`, `locationcode`, `xdate`, `xtime`, `emailusername`, `mobileno`, `landlineno`, `localcode`, `eqptsftware`, `confictrequested`, `empaddress`, `sex`, `bloodtype`, `officeemail`, `personalemail`, `tin`, `sssno`, `gsisno`, `hdmfno`, `phicno`, `guardianname`, `guardianmobile`, `guardianaddress`) VALUES
(1, 108, NULL, NULL, '<p>SDFJSFJSFFJS</p><p><br></p><p>SDFJSDFJDSFJSD</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 115, NULL, NULL, '<p>broken lines when printing on pages</p>', 'SR6237234', 'RO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 116, NULL, NULL, '<p>STARBOOKS 2023</p>', NULL, NULL, '2023-04-19', '08:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 117, NULL, NULL, '<p>STARBOOKS 2023</p>', NULL, NULL, '2023-04-19', '23:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rocj@region10.dost.gov.ph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@region10.dost.gov.ph', '09453166236, 1569935492', '2394923, 232396239', '532', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Adobe Photoshop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Logitech Video Conference device', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Logitech Video Conference device', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Logitech Video Conference device', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Epson Projector', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Epson Projector, Logitech Video Conference device', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 129, NULL, NULL, '<p>ASDADAD</p><p><br></p><p>AS</p><p>DA</p><p>DA</p><p>DADASDAD</p><p>ASDASDADAD</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 134, NULL, '2023-04-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blk 11 lot 7, zone 1, punta', 'Male', 'B+', 'rocabalunajr@region10.dost.gov.ph', 'rcabalunajr@gmail.com', '603-736-054-000', '', '', '', '', 'Bie Ann Cabaluna', '09091879122', 'blk 11 lot 7, zone 1, punta'),
(17, 135, NULL, '2023-04-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blk 11 lot 7, zone 1, punta', 'Male', 'B+', 'rocabalunajr@region10.dost.gov.ph', 'rcabalunajr@gmail.com', '603-736-054-000', '08-0975964-6', '', '121187466936', '15-050-444521-8', 'Bie Ann Cabaluna', '09091879122', 'blk 11 lot 7, zone 1, punta'),
(18, 136, NULL, '2023-04-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blk 11 lot 7, zone 1, punta', 'Male', 'B+', 'rocabalunajr@region10.dost.gov.ph', 'rcabalunajr@gmail.com', '603-736-054-000', '08-0975964-6', '123456789', '121187466936', '15-050-444521-8', 'Bie Ann Cabaluna', '09091879122', 'blk 11 lot 7, zone 1, punta');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest_summary`
--

CREATE TABLE `tblrequest_summary` (
  `reqsummaryid` int(11) NOT NULL,
  `documentnumber` varchar(45) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `divisioncode` varchar(45) DEFAULT NULL,
  `locationcode` varchar(45) DEFAULT NULL,
  `unitid` int(11) DEFAULT NULL,
  `requestcode` varchar(45) DEFAULT NULL,
  `acknowledgedby` int(11) DEFAULT NULL,
  `resolvedby` int(11) DEFAULT NULL,
  `xstatus` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_acknowledged` datetime DEFAULT NULL,
  `date_resolved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_summary`
--

INSERT INTO `tblrequest_summary` (`reqsummaryid`, `documentnumber`, `fname`, `mname`, `lname`, `suffix`, `email`, `mobileno`, `position`, `divisioncode`, `locationcode`, `unitid`, `requestcode`, `acknowledgedby`, `resolvedby`, `xstatus`, `date_created`, `date_acknowledged`, `date_resolved`) VALUES
(108, '2023-0001', '', '', '', '', '', '', '', 'ORD', 'RO', 2, 'OTHERS', NULL, NULL, NULL, '2023-04-18 10:23:57', NULL, NULL),
(115, '2023-0002', '', '', '', '', '', '', '', 'ORD', 'RO', 3, 'ICTREP', NULL, NULL, NULL, '2023-04-18 10:46:23', NULL, NULL),
(116, '2023-0003', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'TECHSUPP', NULL, NULL, NULL, '2023-04-18 10:56:44', NULL, NULL),
(117, '2023-0004', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'TECHSUPP', NULL, NULL, NULL, '2023-04-18 10:57:08', NULL, NULL),
(118, '2023-0005', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'EMLCREA', NULL, NULL, NULL, '2023-04-18 11:01:30', NULL, NULL),
(119, '2023-0006', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'EMLSIG', NULL, NULL, NULL, '2023-04-18 11:12:47', NULL, NULL),
(120, '2023-0007', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'EMLSIG', NULL, NULL, NULL, '2023-04-18 11:12:56', NULL, NULL),
(121, '2023-0008', '', '', '', '', '', '', '', 'ORD', 'RO', 3, 'ICTSETUP', NULL, NULL, NULL, '2023-04-18 11:17:59', NULL, NULL),
(122, '2023-0009', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:26:56', NULL, NULL),
(123, '2023-0010', '', '', '', '', '', '', '', 'ORD', 'RO', 1, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:27:29', NULL, NULL),
(124, '2023-0011', '', '', '', '', '', '', '', 'ORD', 'RO', 2, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:28:15', NULL, NULL),
(125, '2023-0012', '', '', '', '', '', '', '', 'ORD', 'RO', 3, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:30:17', NULL, NULL),
(126, '2023-0013', '', '', '', '', '', '', '', 'ORD', 'RO', 3, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:30:20', NULL, NULL),
(127, '2023-0014', '', '', '', '', '', '', '', 'ORD', 'RO', 2, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:43:31', NULL, NULL),
(128, '2023-0015', '', '', '', '', '', '', '', 'ORD', 'RO', 2, 'CONRM', NULL, NULL, NULL, '2023-04-18 11:43:43', NULL, NULL),
(129, '2023-0016', '', '', '', '', '', '', '', 'ORD', 'RO', 3, 'GRPHDES', NULL, NULL, NULL, '2023-04-18 15:18:01', NULL, NULL),
(130, '2023-0017', '', '', '', '', '', '', '', 'TSD', 'CAM', 19, 'PVCID', NULL, NULL, NULL, '2023-04-18 15:46:56', NULL, NULL),
(131, '2023-0018', '', '', '', '', '', '', '', 'TSD', 'CAM', 19, 'PVCID', NULL, NULL, NULL, '2023-04-18 15:47:13', NULL, NULL),
(134, '2023-0019', '', '', '', '', '', '', '', 'TSD', 'RO', 17, 'PVCID', NULL, NULL, NULL, '2023-04-18 16:15:19', NULL, NULL),
(135, '2023-0020', '', '', '', '', '', '', '', 'TSD', 'RO', 17, 'PVCID', NULL, NULL, NULL, '2023-04-18 16:15:44', NULL, NULL),
(136, '2023-0021', '', '', '', '', '', '', '', 'TSD', 'RO', 17, 'PVCID', NULL, NULL, NULL, '2023-04-18 16:16:00', NULL, NULL);

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
(1, 'ORD', 'Planning, Evaluation, Monitoring, & QMS'),
(2, 'ORD', 'Gender and Development'),
(3, 'ORD', 'Office of the Regional Director'),
(4, 'FASD', 'Accounting'),
(5, 'FASD', 'Budget'),
(6, 'FASD', 'Cashier'),
(7, 'FASD', 'Supply'),
(8, 'FASD', 'Human Resource'),
(9, 'FASD', 'Scholarship'),
(10, 'FASD', 'General Services'),
(11, 'TSD', 'Consortia'),
(12, 'TSD ', 'DRDI'),
(13, 'TSD', 'Consultancy and Training'),
(14, 'TSD', 'FOB'),
(15, 'TSD', 'TransDI'),
(16, 'TSD', 'LGIA and CEST'),
(17, 'TSD', 'MIS'),
(18, 'TSD', 'RSTL'),
(19, 'TSD', 'SCCU'),
(20, 'TSD', 'iFWDPH'),
(21, 'TSD', 'SETUP'),
(22, 'TSD', 'SETUP 2.0'),
(23, 'TSD', 'Carrot'),
(24, 'TSD', 'Scicat'),
(25, 'ORD', 'iSTART');

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
  ADD PRIMARY KEY (`locationid`),
  ADD KEY `tblloc_loccode_idx` (`locationcode`);

--
-- Indexes for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  ADD PRIMARY KEY (`reqdetailsid`),
  ADD KEY `reqdet_reqsumm_fk_idx` (`reqsummaryid`);

--
-- Indexes for table `tblrequest_summary`
--
ALTER TABLE `tblrequest_summary`
  ADD PRIMARY KEY (`reqsummaryid`),
  ADD UNIQUE KEY `reqsumm_docnum` (`documentnumber`),
  ADD KEY `reqsumm_unitid_fk_idx` (`unitid`),
  ADD KEY `reqsumm_resby_fk_idx` (`resolvedby`),
  ADD KEY `reqsumm_ackby_fk_idx` (`acknowledgedby`),
  ADD KEY `reqsumm_reqcode_fk_idx` (`requestcode`),
  ADD KEY `reqsumm_divcode_fk_idx` (`divisioncode`),
  ADD KEY `reqsumm_loccode_fk_idx` (`locationcode`);

--
-- Indexes for table `tblrequest_types`
--
ALTER TABLE `tblrequest_types`
  ADD PRIMARY KEY (`requesttypeid`),
  ADD KEY `REQCODE` (`requestcode`);

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
  MODIFY `reqdetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblrequest_summary`
--
ALTER TABLE `tblrequest_summary`
  MODIFY `reqsummaryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tblrequest_types`
--
ALTER TABLE `tblrequest_types`
  MODIFY `requesttypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `unitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  ADD CONSTRAINT `reqdet_reqsumm_fk` FOREIGN KEY (`reqsummaryid`) REFERENCES `tblrequest_summary` (`reqsummaryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblrequest_summary`
--
ALTER TABLE `tblrequest_summary`
  ADD CONSTRAINT `reqsumm_ackby_fk` FOREIGN KEY (`acknowledgedby`) REFERENCES `tblusers` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_divcode_fk` FOREIGN KEY (`divisioncode`) REFERENCES `tbldivision` (`divisioncode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_loccode_fk` FOREIGN KEY (`locationcode`) REFERENCES `tbllocation` (`locationcode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_reqcode_fk` FOREIGN KEY (`requestcode`) REFERENCES `tblrequest_types` (`requestcode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_resby_fk` FOREIGN KEY (`resolvedby`) REFERENCES `tblusers` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reqsumm_unitid_fk` FOREIGN KEY (`unitid`) REFERENCES `tblunit` (`unitid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD CONSTRAINT `tblloc_divcode_fk` FOREIGN KEY (`divisioncode`) REFERENCES `tbldivision` (`divisioncode`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
