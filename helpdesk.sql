-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20230103.7645611e8d
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 08:05 AM
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
-- Table structure for table `tblrequest_category`
--

CREATE TABLE `tblrequest_category` (
  `reqcategoryid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_category`
--

INSERT INTO `tblrequest_category` (`reqcategoryid`, `name`) VALUES
(1, 'ICT'),
(2, 'Maintenance');

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
(19, 140, NULL, NULL, '<p>ASDSADASDASDA</p>', 'TESASDA', 'LDN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 141, NULL, NULL, '<p>ASDSADASDASDA</p>', 'TESASDA', 'LDN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest_summary`
--

CREATE TABLE `tblrequest_summary` (
  `reqsummaryid` int(11) NOT NULL,
  `documentnumber` varchar(45) DEFAULT NULL,
  `requestcategory` varchar(45) DEFAULT NULL,
  `requestcode` varchar(45) DEFAULT NULL,
  `requestedby` int(11) DEFAULT NULL,
  `xstatus` varchar(45) DEFAULT 'Open',
  `is_resolved` tinyint(4) DEFAULT 0,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_summary`
--

INSERT INTO `tblrequest_summary` (`reqsummaryid`, `documentnumber`, `requestcategory`, `requestcode`, `requestedby`, `xstatus`, `is_resolved`, `date_created`) VALUES
(140, '2023-0001', 'ICT', 'ICTREP', 68, 'Open', 0, '2023-05-09 13:46:35'),
(141, '2023-0002', 'ICT', 'ICTREP', 68, 'Open', 0, '2023-05-09 13:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest_types`
--

CREATE TABLE `tblrequest_types` (
  `requesttypeid` int(11) NOT NULL,
  `requestcode` varchar(45) DEFAULT NULL,
  `requestcategory` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrequest_types`
--

INSERT INTO `tblrequest_types` (`requesttypeid`, `requestcode`, `requestcategory`, `name`) VALUES
(1, 'ICTREP', 'ICT', 'Repair/reformat of ICT Equipment (Printer, Computer, etc.)'),
(2, 'ICTCONN', 'ICT', 'Internet Connection Service'),
(3, 'ICTSYS', 'ICT', 'Internal Information Systems Access (TOMS, TRACE, etc.)'),
(4, 'NAMETAG', 'ICT', 'Name Tag Layout'),
(5, 'TECHSUPP', 'ICT', 'Technical Support for Events'),
(6, 'BIOREG', 'ICT', 'Biometrics Registration'),
(7, 'EMLCREA', 'ICT', 'Email Account Creation for Regulars and Units/Projects'),
(8, 'EMLSIG', 'ICT', 'Email Signature Creation'),
(9, 'ICTSETUP', 'ICT', 'Set up/Installation/Replacement of ICT Equipment or Software'),
(10, 'CONRM', 'ICT', 'Use of Conference Room ICT Equipment'),
(11, 'GRPHDES', 'ICT', 'Graphic Design and Video Production'),
(12, 'VRSREM', 'ICT', 'Virus removal'),
(13, 'PVCID', 'ICT', 'PVC ID Production (on hold)'),
(14, 'SYSBUG', 'ICT', 'System Bug Report'),
(15, 'OTHERS', 'ICT', 'Other Services Not Mentioned Therein'),
(16, 'ACCLN', 'Maintenance', 'Air conditioner Cleaning');

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
  `employeeid` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `suffix` varchar(45) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `divisioncode` varchar(45) DEFAULT NULL,
  `locationcode` varchar(45) DEFAULT NULL,
  `unitid` int(11) DEFAULT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `password` varchar(70) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `userlevel` int(2) NOT NULL DEFAULT 5,
  `is_active` int(2) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `employeeid`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `mobileno`, `position`, `divisioncode`, `locationcode`, `unitid`, `username`, `password`, `userlevel`, `is_active`) VALUES
(1, 'JRA0619', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jra', '$2y$10$W2qY3RkSRbgp3R2mj.sSxeN1FCzTLyAxYfIwXvPUfO99BPhK44rau', 5, 1),
(2, 'KLB0923', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'klb', '$2y$10$FjIRtrftvb7xI9dVR67DHOuaEMqoJMHGl.4gWiGHmcj95LsYYdqL2', 5, 1),
(3, 'JAHB0523', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jahb', '$2y$10$qhIf4Q.X1PS4caEfp6RECOQHAodZ3E6VfSp4KtvZw7KaxEOeA1CcO', 5, 1),
(4, 'JKRB1108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jkrb', '$2y$10$Z/ipR0jq2Y.iexom.Cshz.ejAuKq6WA3hEwTElXtEvj63Vv85RWeK', 5, 1),
(5, 'RVCB1022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rvcb', '$2y$10$8vYZ9Chr8zJLWFmH9tGHaOp9/1Up68rHehtge6XMWLRHpo.S/DTXy', 5, 1),
(6, 'HMB0414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hmb', '$2y$10$7yVBdX8l0ufYQFeSDavL4.56TrG9LEyFE2bXYmLEfErKWGmjuZ0nu', 5, 1),
(7, 'JVB0314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jvb', '$2y$10$xlVcotvpK.yaCpIWIgorFOxuurnm7C0nq60wrgm/vNTLAcCKyEIXy', 5, 1),
(8, 'RLB0827', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rlb', '$2y$10$0qULvoE6sq9WTeVxait9uuR6wjiC5GC8ampfbDsb2wiHoBHqBq5ZO', 5, 1),
(9, 'RCC1116', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rcc', '$2y$10$Fl9lw0abBM.PWfRUrGgeVOecs.SDUHq3OVr.PJiZXgYTDowLLLjl.', 5, 1),
(10, 'NBCC1129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nbcc', '$2y$10$4L3viquavsfK6GpMNR6WquHPVSZp/1l9cCeSQwr.Je7Y3kk4paIvS', 5, 1),
(11, 'JJCD0104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jjcd', '$2y$10$Qsw9PrlkFN2SL4lm.Frzmu9mvmqsyEYzkc/mhMcj/4xPkmtfz8n.i', 5, 1),
(12, 'GSDC0903', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gsdc', '$2y$10$eZvDHl1vH1e9F7M9dja4VOCrx3qj9zpGE8sT7J4K2aTkwbJ92avGG', 5, 1),
(13, 'SGPE1117', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sgpe', '$2y$10$jZe2HdXIUNt6HQOS.1cEjOoXIXAGH4VqWBGWhxarSVKAN/3L3Hewi', 5, 1),
(14, 'VMF0514', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vmf', '$2y$10$y3W33QSoXM/0zEVGlYGGde.r9cxhGwDs5cGJ5ugugYQqh2HkDglru', 5, 1),
(15, 'MATG0803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'matg', '$2y$10$Bps5GBkioC5GKxe8ADqkDurDCPnbD/7C9cRN1H4aZ2JpVcydttLne', 5, 1),
(16, 'LAG0905', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lag', '$2y$10$Pb5mTrplaZEF.nkhmzZOo.MUzKJY6dQiJDUU51t0eGv4zzyW9lIFC', 5, 1),
(17, 'RMLG0920', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rmlg', '$2y$10$f6sesZYAV6Jd.kIrFiiRAO8QS/FqG1IZs.WTTI0CKL9bT5xcTmgla', 5, 1),
(18, 'DRI0523', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dri', '$2y$10$frnfYwXimY2B0SAIlP1eHeQMvUQVla/pYwzmjKWWWYR3yYufml7sK', 5, 1),
(19, 'CSJ0424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'csj', '$2y$10$XZfcbNPvH5IqJ2OlRxI2PuFfoKVu1d9YipJx2kpM69HTjGX10Gm9S', 5, 1),
(20, 'WJAK0912', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wjak', '$2y$10$..Mambrbvunptf8OvMH2UOpEY8lEAYwmlP5YbCAaOYEaDZF5IiM3e', 1, 1),
(21, 'LAM0505', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lam', '$2y$10$pw5RVwomL9oF507qArTuW.OVV6YWtvhdCnxRjhkPifhWug9rv7XEO', 5, 1),
(22, 'PMM1002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pmm', '$2y$10$yLgVD797WO4PkYA8uL1ZROox20gI8yMD5K8Q0ANj0ePIKTXnO82IK', 5, 1),
(23, 'JSM0608', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jsm', '$2y$10$ki/aobdtnw9DPIyXtSv0W.Tn4.QnyUqK1snBuz3MAmjNLk9G52Nxm', 5, 1),
(24, 'BBM0714', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bbm', '$2y$10$lzFO7KFwOLC.dVPevTF4BeioPrIja1PWnW7Iq9Yp9iHDR/zfXkbiK', 5, 1),
(25, 'MBM0531', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mbm', '$2y$10$oR8g/t4qP6l5eHCYcuYMnuRyJM3ew.bT0rXuKlWf1nfMNLXbTD4gy', 5, 1),
(26, 'RAP1004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rap', '$2y$10$ptWVEO8nCyHOiJANtK8QK.Ug2uB1FTXlujRQATjQskUxYuIKaHzqi', 5, 1),
(27, 'GSMP1231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gsmp', '$2y$10$gZC3LFPiKSwcgdhkmKsd/OdID4if4mzCOs.T8TVV.d6Oxi2BPd0su', 5, 1),
(28, 'FBQ0327', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fbq', '$2y$10$P8pam8P7mnHgUfoOLyoxWuAc7OTrMmG56f5ifqoU88bRymlLQEmTW', 5, 1),
(29, 'RNR1017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rnr', '$2y$10$ZbFI7FI1bE09DHYMJe6V8ei4kezryjK1l1XLQC47pNU72t6P/pT4a', 5, 1),
(30, 'JGR0623', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jgr', '$2y$10$PvzsKq9LdFhzb1Y/iWuBh.ja1/Zu0dA.jcRxmTONUWvZ11VA3RSUa', 5, 1),
(31, 'JLBR0626', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jlbr', '$2y$10$ZwA2ijt3ORflTf3YnpZxxOYKF94mj0sOqQhUtjCuAG8XDefHbmj/O', 5, 1),
(32, 'CAS0113', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cas', '$2y$10$LYzrriY8wDvNQstQBhWIKOH8.uPlneSXt3ZiY6bsHnZTdtRqga1XC', 5, 1),
(33, 'NBS0302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nbs', '$2y$10$PTq1OPBByGVhnCrp14oyn.KCek1AMO0ZmvxFxQZT/JswPjpKtAz3a', 5, 1),
(34, 'EADS1020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eads', '$2y$10$967nCGKiCgDUfw3ruEggvOPRwSP3Qt8WciOllIBqWUlJmFUVs9mV6', 5, 1),
(35, 'LNU0908', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lnu', '$2y$10$J1Kb0NgkYAXC928906kdJ.9iiP3PChFRom.Sg3g.fXmbGLAa0ej6S', 5, 1),
(36, 'DMEY1227', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dmey', '$2y$10$ix8o4kPT.fxfYBnYBe.TyORnv1ddhPj3JfLKX/GMTvngGGyVLO./i', 5, 1),
(37, 'FVP0306', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fvp', '$2y$10$VLhaQmWXZJdlEss.v3DVMu/gWgM71iuNZXVlERAuXnGSaOH59ABN.', 5, 1),
(38, 'FSN1105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fsn', '$2y$10$f49.Bm76qDHg7v0DNpIyLOc2Su0oJ4.vkpzvp5bqKSlDTEvLh0oRW', 5, 1),
(39, 'DAMN0604', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'damn', '$2y$10$veNqlkEBJlDgt.Lc7Adyd.DLxrv2xlJFkVhm9V/7xbTq8n1E31g7m', 5, 1),
(40, 'GSO1109', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gso', '$2y$10$l3z9NkLOZ6qp/Q8tnn5U3.oNRmrBNSVbw/YYRPMWAJoDV5O36NcH.', 5, 1),
(41, 'JBO1008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jbo', '$2y$10$S9Kujh9rThJZxdO2Wt.hZue7YK0vT.z8xB9xuA7PNK4GgBMXzqW36', 5, 1),
(42, 'TAAO1021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'taao', '$2y$10$8VifxubG/nGEGMF5p9tjneflhPC.iO.ztl9wFauU8fGTK4kSu32i6', 5, 1),
(43, 'JMCO1103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jmco', '$2y$10$N9ac.fdgz8VsWtlONNtt1uU6QcIKK7tn26JQoHVaptSlAjq23zqfG', 5, 1),
(44, 'MEBO0911', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mebo', '$2y$10$EV9Mv9ETgGebG1QKel4N3Oz14wNAvHrd2BwTxGtx5Tm9u7eVhGAga', 5, 1),
(45, 'RMDEP0902', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rmdep', '$2y$10$0HX/lvyzNIELvy/eAWw5KeuG.V.bJquGwWJ3EHVgVC9K5O/5G/MoO', 5, 1),
(46, 'VLP0410', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vlp', '$2y$10$2LZ.hxzPhUEqNin9FKT04.1gxWgphwNoFuI9DkHnrzPjNE2D8Lkpa', 5, 1),
(47, 'JGP0422', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jgp', '$2y$10$.jelawLRRkhih79tbIWe/eDl81dygEy4bjTOqzZFAtSMiZdionMja', 5, 1),
(48, 'JOP0928', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jop', '$2y$10$eRlcRaFqhhvQbJaZaCJlYudmXR5Y43YM6ZguXxczZPT9wwMPJeIme', 5, 1),
(49, 'JCP0808', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jcp', '$2y$10$iwRn3Oa8fBMu2K81fXdBnediVZ/GXbs4rRQHMnMGUO6fyyhKU/awi', 5, 1),
(50, 'LVQ0412', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lvq', '$2y$10$6X3fYVTvo.79KR/iQq9yLOFAtQ8iiN.ED8DlzCs1RJReDVp71Sf1q', 5, 1),
(51, 'AMA0815', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ama', '$2y$10$i5scueHiOx7yIi7.5nbmdOCAEn.OfQ9eeSxdE2Kb/tI5FEI0pXKtK', 5, 1),
(52, 'PALA0423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pala', '$2y$10$3R4yBq3qTL2SwJGKhuy1BOB0sY3tvodIqbt/3azF.OTWSnkX9XjgG', 5, 1),
(53, 'GBA0218', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gba', '$2y$10$/mCGubPF.Na2pVfdG7W.vu/KaNOKSxqzesw5LvR1UBdY5tRqlzPqm', 5, 1),
(54, 'AASA0925', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aasa', '$2y$10$RDngs3iRsRdfhfoFjLOQZOWAAJQrZbSUP7Wy2WwEqGjQTvs7olz2u', 5, 1),
(55, 'SAA1102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'saa', '$2y$10$sHVoZM.gQW1eMsN/89ONpOfXHGkh6slC6.rhDxYilp0YTX9G9arGm', 5, 1),
(56, 'KRCA0105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'krca', '$2y$10$vliehMM.cJl0ZhyQxs4WUOUpIU2lgr0TCngHi9/6XP9TL95o2rhXC', 5, 1),
(57, 'JQA0416', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jqa', '$2y$10$Rmf.8hstBE7XMQrTxCUOPumwWI9/p1JMONw5NCU5.eOeuPlChPzH6', 5, 1),
(58, 'ADB0623', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adb', '$2y$10$ILnIWkXCVFsR92zi3belEOd7qUzJD40/le84Dhtct8i0UksGpudF2', 5, 1),
(59, 'JACB0712', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jacb', '$2y$10$y8hnjjp4WByW6s62Vx1JnO4R7dHJiB8V1qX1.G57sdFVKWV1Meuma', 5, 1),
(60, 'DFB1103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfb', '$2y$10$S6RteIRCV/dMhLIGbEJdAuqdf9584OLYeMjx5YdYW/lHo6J4MlcK6', 5, 1),
(61, 'DMBJ1221', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dmbj', '$2y$10$zXcWqKO1LN8Y0vwd1JutvOAC7O3RSRvLKFSGX4UnsMbRWh3ZbsmdG', 5, 1),
(62, 'HCB0830', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hcb', '$2y$10$T5FydFazwXzPgEi7bpnpY.2akZoXL8ONF66WXpv5ZpsVQf12.c/kG', 5, 1),
(63, 'JOB0527', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'job', '$2y$10$cWj9e3d2ejrsu.R5RlW9e.e/Zco2puO4yjJR25ucU9H8j6/94sbZG', 5, 1),
(64, 'RAPB0814', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rapb', '$2y$10$uL7gJfuf7hxSR.qofe6XUulTUOQlQVUjbncyKS39AyudcARYy5W66', 5, 1),
(65, 'EJAB1220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ejab', '$2y$10$PV04uf.LgwONn/d5ldMFn.5ozl.1jGuEDMddGfwHd1ttVrdZCmNNG', 5, 1),
(66, 'HTB0303', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'htb', '$2y$10$G5DWm1q3Cr1V/MhCsgT/6.3efS.W2O2inl39fOuCcpG6ZKjy5YOhy', 5, 1),
(67, 'ABB0621', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abb', '$2y$10$gJYcpnqttWEs8iwKYCthjOIIwzCg1fOY/MWjKqxWM9ENaFsODIKAa', 5, 1),
(68, 'ROCJ1010', 'Ruel', 'Ogao-ogao', 'Cabaluna', 'Jr', 'rocabalunajr@region10.dost.gov.ph', '09453182617', 'Project Technical Assistant II', 'TSD', 'RO', 17, 'rocj', '$2y$10$W35NVj2kPNfUrVQpynyqEu3QhoojVEFqzfOrPwfVq9h9WvJSIXm9y', 1, 1),
(69, 'GMBC1027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gmbc', '$2y$10$hFGId2rBZKdAUyXER3UHGekmkymn1D/jqK6FfkkIeEfgyd4gIMLaW', 5, 1),
(70, 'RMC0417', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rmc', '$2y$10$/Riiv4ut9jPL0HmrN4Zaxe.tkzObFbrOieuVhhniELfP/FU154jva', 5, 1),
(71, 'SMSC0126', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'smsc', '$2y$10$5MFa8V4bQNv.2.C6/Kv0zecf9wQ/kJ6C8Z8QsgM8RWgDvNnpvxsw.', 5, 1),
(72, 'GHC1105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ghc', '$2y$10$t7xjKSm5w.t/h8S12VBR3.gz0knttoNUIYxvq8SQzAVWq6ukCUa/O', 5, 1),
(73, 'RJSC0422', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rjsc', '$2y$10$euX0mTijfatMowkPMRzA9ebrHuVf62NmeTIT8wLDOj5mZqf6rSlkW', 5, 1),
(74, 'JMED0501', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jmed', '$2y$10$cVVhV2xkwcyUyFZNVVgFo.b7ikozF69Y0jYiBvy1QeqwQXIoPmRhm', 5, 1),
(75, 'MAPHD0606', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maphd', '$2y$10$rfo9zJGfQMZnh5e0MTGzjexBEi9A9fjdufEnEf/JLYnxkpLCvUUk2', 5, 1),
(76, 'NNBD1210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnbd', '$2y$10$3FqUKj07sRCBPN9R3RDR4uzcxNdTCPIIqzq2LXErFGvQJGnI6U0le', 5, 1),
(77, 'RTD0904', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rtd', '$2y$10$X2LJsneHC8po7bw93xlmFOISQd.HkTgFxK4l5yR4gt1oQc68P0dT.', 5, 1),
(78, 'MAHD0510', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahd', '$2y$10$X3k5VyJbSHbAHzgzSQDJM.t1iAD9wiCmHUnec6Q6vZbpWs0mt0JTC', 5, 1),
(79, 'JXFE0107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jxfe', '$2y$10$/S/iUQdY5g.vKRvUeVEdnO7kiHb294V79OAEMlezJ1TLzUu/jCxwW', 5, 1),
(80, 'RCG1007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rcg', '$2y$10$IopiZQ7a66EFUqfSh1ROwewMiAwbg0PYh1XOzC7Gq6FjcULKBQyoG', 5, 1),
(81, 'SYI1023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'syi', '$2y$10$6TduKVsuW0UNv.sbJV3W/uBVHcDJCkl3t6TdSAIeUjQr7ylaAh04e', 5, 1),
(82, 'RZJ1228', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rzj', '$2y$10$SaPS8ZlYWfz9R7zVmPMp0u5F2uGKJxCbyNHslmBksxC0d1B5Cep36', 5, 1),
(83, 'CCEL1207', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ccel', '$2y$10$Ginz/FHXF9VCvS3gR3PbiOflZR0Dua/ZLl..yP9ucWFyzoUM9VF/K', 5, 1),
(84, 'GBL0102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gbl', '$2y$10$vV/Ys0oKPkpnxtZHGbOo3uep8qYjYjCrNAvMIUXY24Iskc4D.2WJy', 5, 1),
(85, 'RPL0102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rpl', '$2y$10$7gCn516Ksy6GWrVAJxTmw.Kfa2jSrccNJ/bEy2GABwg9S0k6ZR4pm', 5, 1),
(86, 'SMPL0727', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'smpl', '$2y$10$aoorjANRcQ/qn7m9fMAeTu5P45TI3O2H6uxlqs5gYgDyOP2afWyDe', 5, 1),
(87, 'MOL0816', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mol', '$2y$10$LihPO3ukKT.4umPbyghTquCorwjDxewifkgwm6eqzSq2gWnvWq0Ze', 5, 1),
(88, 'CJL0508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cjl', '$2y$10$V1C6jM/58fAgcL98/uL6oODjHO5IZ4Sa6eJyZGRxQ5Bc2PW.e2qxW', 5, 1),
(89, 'JAL0129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jal', '$2y$10$OUPulBupHRgK/ZmJWlwx7.8wonPOfqJmeDPrOyHjSlQeh2Q1SDhW6', 5, 1),
(90, 'RAM1102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ram', '$2y$10$55m5b0xFHlz0DLh8xQSXje7Ha7MrJm0NUCZ/9SvSngfrlhm4qfazK', 5, 1),
(91, 'VCVM1014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vcvm', '$2y$10$Ogt1T93252txLPs7SjRvz.6rmNdMNI71MNA0YHLqgqcAlcJHJOpwO', 5, 1),
(92, 'LGM0102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lgm', '$2y$10$yOJFEZaBIdw5A5ySwyHAlOVsWfOD1MxvmjcaKNEDQTR1liSpuWG9y', 5, 1),
(93, 'KGM1116', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kgm', '$2y$10$5mGgyzKtQe1y5TEibIAVX.TLpmNsYpkhKZsG725Zz/28P3iCxVN8.', 5, 1),
(94, 'MRPM0729', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mrpm', '$2y$10$lHvXAxilCRACPHQ16GZ2G.Ph1/42m3ZAwkUlMiYEW5Cinx9PShM.W', 5, 1),
(95, 'PDM0511', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pdm', '$2y$10$sD60pJFzGt4l7M8brWSpEeTecVF8dEpJ3b35FVXMFBa2nrLsASVvi', 5, 1),
(96, 'EBN1115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ebn', '$2y$10$Xpf4GAtdkrYdFrtbgoj2ReFKK4oTVYmwqNxqZUkDhMM7Q1hawsaVm', 5, 1),
(97, 'MSAR0119', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'msar', '$2y$10$C5HEsk7PvbcRIKTFfF2oSegdZMWqyIcNz/pl6u8NNvy.Q2OxV5TH.', 5, 1),
(98, 'JNBR1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jnbr', '$2y$10$y48Alavsf9HhKIbEhf7pTO3dKtaY5F4ZIBkOfbtKRRuF6/UyVw4Mu', 5, 1),
(99, 'ADS0410', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ads', '$2y$10$JKU6tsRMzkBepstJtTOxguq0SYvWBCU1eqljcCLrYkhqiVIh/AvLK', 5, 1),
(100, 'JKMS0725', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jkms', '$2y$10$3rX4wXACvdIA5LQbSy4GFufRbiUexuMkXGGo8oZy4FI0kbIyfwjDq', 5, 1),
(101, 'JSS1107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jss', '$2y$10$UoZC3VQcYgx5sgrD9VZre.oCxaEXG5UwiuXkl4InD2JatIEqxe5K.', 5, 1),
(102, 'JMAS0910', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jmas', '$2y$10$5q36o3qxZhmGJsYaHh8c9.USqTZayQyBhWQA0294PGeZn3O6hyNlS', 5, 1),
(103, 'EAS0104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eas', '$2y$10$6Zb55TQBf89r2drr37jsi.Kx5X4dt/hi7rdgP.fZ1Mb1IjFO9jWHO', 5, 0),
(104, 'FFTJ0709', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fftj', '$2y$10$KHqJXhkTxWiqTt9UBSz/1.88aOP4xVUqu158b7FbbG5toYU3YHnsO', 5, 1),
(105, 'JPRT0224', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jprt', '$2y$10$6ehNb5eO8mtG4xPKh7PUfenIlbTkFNhyvKlz18SDW6pJ7hjMnepCm', 5, 1),
(106, 'KEY1007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'key', '$2y$10$Yoe5vnCeG5PppbntbyR3q./qRDRdFFQCv0w8K0zGDKjgTo1gX1qOG', 5, 1),
(107, 'JBZ1225', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jbz', '$2y$10$4PgPlUNyBjPObkzBV56s7uMXOmYVKevk9q4QIxFIyaiGOlT8pLuLq', 5, 1),
(108, 'RPSZ0917', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rpsz', '$2y$10$zVtE/fuAfv2rXubnSvelZ.6IfVFxqUZazDwpbf/AdL7XZnN8s0Xz2', 5, 1),
(109, 'GDA0529', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gda', '$2y$10$oBLonfQFMNWEAs/08VNmme0hSKRfeP8nVcb/ODL.127zXHOSR1Y5O', 5, 1);

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
-- Indexes for table `tblrequest_category`
--
ALTER TABLE `tblrequest_category`
  ADD PRIMARY KEY (`reqcategoryid`);

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
  ADD KEY `reqsumm_reqcode_fk_idx` (`requestcode`);

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
  ADD PRIMARY KEY (`userid`),
  ADD KEY `Emp_No` (`employeeid`);

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
-- AUTO_INCREMENT for table `tblrequest_category`
--
ALTER TABLE `tblrequest_category`
  MODIFY `reqcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrequest_details`
--
ALTER TABLE `tblrequest_details`
  MODIFY `reqdetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblrequest_summary`
--
ALTER TABLE `tblrequest_summary`
  MODIFY `reqsummaryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tblrequest_types`
--
ALTER TABLE `tblrequest_types`
  MODIFY `requesttypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `unitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

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
  ADD CONSTRAINT `reqsumm_reqcode_fk` FOREIGN KEY (`requestcode`) REFERENCES `tblrequest_types` (`requestcode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD CONSTRAINT `tblloc_divcode_fk` FOREIGN KEY (`divisioncode`) REFERENCES `tbldivision` (`divisioncode`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
