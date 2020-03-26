-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 12:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signatory`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Passwd` varchar(2000) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `Email`, `Passwd`, `Phone_No`, `Status`) VALUES
('Alex', 'alexngenzi94@gmail.com', '12345', 716786619, 'Business Development Manager'),
('Ngenzi', 'frankvalngenzi@gmail.com', '12345', 8775334, 'Project Manager'),
('Monica Peertech', 'monicapeertech@gmail.com', '12345', 718909192, 'Assistant Project Manager'),
('Fumba Tajiri Fumba', 'tajiribaba123@gmail.com', '12345', 718768696, 'Engineer'),
('Abdul waheed', 'waheed6300@gmail.com', '12345', 752043246, 'Accountant'),
('Yusufu Tajiri Fumba', 'yusufutajiri@gmail.com', '12345', 752043246, 'Manager Directory');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Order_Description` varchar(3000) NOT NULL,
  `Order_Amount` int(11) NOT NULL,
  `Order_Status` varchar(100) DEFAULT NULL,
  `Order_Review` varchar(100) DEFAULT NULL,
  `order_Review2` varchar(200) DEFAULT NULL,
  `Payed` varchar(100) DEFAULT NULL,
  `Order_Comment` varchar(3000) DEFAULT NULL,
  `Date_Before` date DEFAULT NULL,
  `Date_After` date DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Project_ID` int(11) DEFAULT NULL,
  `Attach` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Order_Description`, `Order_Amount`, `Order_Status`, `Order_Review`, `order_Review2`, `Payed`, `Order_Comment`, `Date_Before`, `Date_After`, `Email`, `Project_ID`, `Attach`) VALUES
(181, 'Router 2pc', 120000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-02-29', 'waheed6300@gmail.com', 71, NULL),
(184, 'wire shork', 12000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-03-01', 'waheed6300@gmail.com', 71, NULL),
(185, 'computer', 600000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-02-17', 'waheed6300@gmail.com', 71, NULL),
(186, 'wire', 100000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-02-17', 'waheed6300@gmail.com', 71, NULL),
(187, 'wireless router', 120000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-02-18', 'waheed6300@gmail.com', 71, NULL),
(188, 'wire', 12300, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-17', '2020-02-18', 'alexngenzi94@gmail.com', 71, NULL),
(189, 'computer', 4000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-18', '2020-02-18', 'alexngenzi94@gmail.com', 71, NULL),
(191, 'switch', 4000, 'Checked', 'acceptedMD', 'acceptedPM', 'Yes', 'No comment', '2020-02-18', '2020-02-18', 'waheed6300@gmail.com', 71, NULL),
(193, 'Installation materials', 100000, 'Checked', 'acceptedBDM', 'acceptedMD', 'Yes', 'No comment', '2020-02-18', '2020-02-18', 'frankvalngenzi@gmail.com', 76, NULL),
(195, 'computer', 50000, 'Checked', 'acceptedPM', 'acceptedBDM', 'Yes', 'No comment', '2020-02-20', '2020-05-20', 'waheed6300@gmail.com', 72, NULL),
(196, 'computer', 60000, 'Checked', 'acceptedPM', 'acceptedBDM', 'Yes', 'No comment', '2020-02-23', '2020-05-20', 'waheed6300@gmail.com', 77, NULL),
(198, 'computer', 6000, 'Checked', 'acceptedPM', 'acceptedBDM', 'Yes', 'No comment', '2020-05-20', '2020-05-20', 'waheed6300@gmail.com', 77, NULL),
(202, 'transportaion', 4000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-24', '2020-02-29', 'alexngenzi94@gmail.com', 77, NULL),
(203, 'ethernet', 120000, 'Checked', 'acceptedMD', 'Not accepted', 'No', 'Something wrong\r\n', '2020-02-29', NULL, 'frankvalngenzi@gmail.com', 90, NULL),
(204, 'access controll', 60000, 'Checked', 'acceptedPM', 'acceptedMD', 'Yes', 'No comment', '2020-02-29', '2020-02-29', 'tajiribaba123@gmail.com', 72, '13524080-frankvaaal.pdf'),
(210, '2pc', 2147483647, 'Checked', 'Not accepted', 'Not accepted', 'No', 'No comment', '2020-02-29', NULL, 'tajiribaba123@gmail.com', 85, '21229849-frankvaaal.pdf'),
(238, 'computer', 8000, 'checked', 'acceptedPM', 'acceptedMD', 'YES', 'No comment', '2020-03-01', NULL, 'monicapeertech@gmail.com', 76, '172287-frankvaaal.pdf'),
(239, 'pc', 400, 'checked', 'acceptedPM', 'acceptedMD', 'No', 'No comment', '2020-03-01', NULL, 'monicapeertech@gmail.com', 71, '1107414-k.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(11) NOT NULL,
  `Project_Name` varchar(500) NOT NULL,
  `Project_Location` varchar(500) DEFAULT NULL,
  `Client_Name` varchar(200) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Project_Desc` varchar(3000) DEFAULT NULL,
  `po` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Project_Name`, `Project_Location`, `Client_Name`, `Start_Date`, `End_Date`, `Project_Desc`, `po`, `Email`) VALUES
(71, 'TCB Moshi Lift Installation', 'Moshi', 'TCB', '2020-02-01', '2020-07-31', 'Lift installation', '8181717-k.pdf', 'waheed6300@gmail.com'),
(72, 'router installation ', 'moshi', 'TCB', '2020-02-05', '2020-02-29', 'installation', '8181717-k.pdf', 'yusufutajiri@gmail.com'),
(73, 'NMB Router installation', 'dar es salaam', 'NMB', '2020-02-13', '2020-04-16', 'Router installation', '8181717-k.pdf', 'yusufutajiri@gmail.com'),
(74, 'NMB SWITCHinstallation', 'DAR ES  SALAAM', 'NMB', '2020-02-20', '2020-05-22', 'NMB SWITCHinstallation', '8181717-k.pdf', 'yusufutajiri@gmail.com'),
(75, 'CRDB SWITCHinstallation', 'DODOMA', 'CRDB', '2020-02-20', '2020-03-20', 'SWITCHinstallation', '8181717-k.pdf', 'yusufutajiri@gmail.com'),
(76, 'Hotel Hyatt ZNZ BTS Upgrade', 'Zanzibar', 'Zantel', '2020-02-20', '2020-02-27', '2 sectors BTS upgrade at  Hyatt Zanzibar', '8181717-k.pdf', 'frankvalngenzi@gmail.com'),
(77, 'peertechmaintanance', 'dar es salaam', 'peertech', '2020-02-12', '2020-02-29', 'for buying maintainance material', '8181717-k.pdf', 'waheed6300@gmail.com'),
(79, 'witch installation', 'dar es salaam', 'peertech', '2020-02-02', '2020-03-28', 'switch instaalation in peertech', '74203135-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(80, 'Router configuration', 'Dizim', 'peertech', '2020-02-01', '2020-02-29', 'Configuration', '95222685-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(81, 'Puntch panel configuration', 'dar', 'peertech', '2020-02-08', '2020-02-18', 'Configuration', '96149886-k.pdf', 'frankvalngenzi@gmail.com'),
(82, 'SUGAR', 'PEERTECH', 'PEERTECH', '2020-02-13', '2020-02-14', 'PEERTECH', '23938911-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(83, 'peertech', 'dar es salaam', 'NMB', '2020-02-15', '2020-03-13', 'nmb', '4937408-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(84, 'nmb access control installation', 'dar es salaam', 'NMB', '2020-02-14', '2020-04-09', 'nmb access control installation', '35248638-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(85, 'router installation', 'dar es salaam', 'NMB', '2020-02-15', '2020-02-22', 'router installation', '86871530-frankvaaal.pdf', 'frankvalngenzi@gmail.com'),
(89, 'router configuration', 'Dar es salaam', 'NBC', '2020-03-01', '2020-03-31', 'installation of router for main branch', '8181717-k.pdf', 'waheed6300@gmail.com'),
(90, 'NBC router configuration', 'dar es salaam', 'NBC', '2020-03-01', '2020-04-30', 'router configuration of main branch', '8181717-k.pdf', 'waheed6300@gmail.com'),
(99, 'ROUTER installation', 'dom', 'NMB', '2020-03-18', '2020-03-12', 'computer', '66160666-k.pdf', 'alexngenzi94@gmail.com'),
(121, 'uu', 'uu', 'uu', '2020-03-07', '2020-03-25', 'uu', '8651965-frankvaaal.pdf', 'frankvalngenzi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `employee` (`Email`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `employee` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
