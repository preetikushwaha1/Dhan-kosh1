-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 07:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhankosh`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `sr_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `account_number` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(11) NOT NULL,
  `confirm_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`sr_no`, `customer_id`, `account_type`, `bank_branch`, `ifsc_code`, `phone_no`, `email`, `opening_balance`, `pin`, `account_number`, `date`, `password`, `confirm_password`) VALUES
(3, 3, 'saving_account', 'haldwani', '12345', '9997122129', 'preeti@gmail.com', 500, 6741, '2147483647', '2021-03-12', '123', '123'),
(5, 5, 'saving_account', 'Delhi', '45678', '8394028035', 'ashu@gmail.com', 1000, 7521, '2147483643', '2021-03-13', '', ''),
(6, 6, 'saving_account', 'dehradun', '12345', '9877122129', 'ankit@gmail.com', 1200, 2623, '2147483644', '2021-03-16', '', ''),
(7, 7, 'saving_account', 'nainital', '12345', '1234567894', 'neetu@gmail.com', 10000, 6358, '2147483645', '2021-03-17', '', ''),
(8, 9, 'saving_account', 'bihar', '12345', '9837261204', 'surendra@gmail.com', 10000, 5380, '2147483646', '2021-03-17', '', ''),
(9, 8, 'saving_account', 'Delhi', '12345', '9997122129', 'preeti@GMAIL.COM', 1000, 6664, '2147483648', '2021-03-18', '', ''),
(10, 10, 'Saving account', 'haldwani', '12345', '7037135956', 'hema@gmail.com', 2000, 2547, '2147483649', '2021-03-18', '', ''),
(11, 11, 'Saving account', 'haldwani', '12345', '9997124023', 'purnima@gmail.com', 8000, 7755, '797656274133', '2021-03-19', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary1`
--

CREATE TABLE `beneficiary1` (
  `benef_id` int(9) NOT NULL,
  `benef_cust_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `account_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beneficiary1`
--

INSERT INTO `beneficiary1` (`benef_id`, `benef_cust_id`, `email`, `phone_no`, `account_no`) VALUES
(2, 2, 'kiran@gmail.com', '8394028035', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary2`
--

CREATE TABLE `beneficiary2` (
  `benef_id` int(9) NOT NULL,
  `benef_cust_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `account_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beneficiary2`
--

INSERT INTO `beneficiary2` (`benef_id`, `benef_cust_id`, `email`, `phone_no`, `account_no`) VALUES
(1, 1, 'preeti@gmail.com', '9997122129', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary3`
--

CREATE TABLE `beneficiary3` (
  `benef_id` int(9) NOT NULL,
  `benef_cust_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `account_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `aadhar_card` int(11) NOT NULL,
  `pan_card` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `opening_balance` int(20) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `first_name`, `last_name`, `gender`, `dob`, `aadhar_card`, `pan_card`, `address`, `state`, `city`, `pincode`, `phone_no`, `email`, `date`, `account_no`, `opening_balance`, `confirm_password`, `password`) VALUES
(1, 'Preeti ', 'Kumari', 'female', '1997-11-04', 1234567891, 'JPF12345KP', 'bk puram, bithoria no 1, laldath road nainital', 'UTTARAKHAND', 'Haldwani', 263139, '9997122129', 'preeti@gmail.com', '2021-04-12 09:08:23', '1000', 1000, '123', '123'),
(2, 'kiran', 'kumari', 'female', '1996-11-01', 1234567891, 'JPF12345pp', 'bk puram, bithoria no 1, laldath road nainital', 'UTTARAKHAND', 'Haldwani', 263139, '8394028035', 'kiran@gmail.com', '2021-04-11 00:00:00', '1001', 2000, '123', '123'),
(3, 'ashu', 'kushwaha', 'female', '2002-05-15', 1234567891, 'JPF12345KP', 'bk puram, bithoria no 1, laldath road nainital', 'UTTARAKHAND', 'Haldwani', 263139, '8630728329', 'ashu@gmail.com', '2021-04-12 09:19:01', '1002', 5000, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fund_transfer`
--

CREATE TABLE `fund_transfer` (
  `sr_no` int(11) NOT NULL,
  `account_number` int(11) NOT NULL,
  `re_enter_account_number` int(11) NOT NULL,
  `ifsc_code` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `recipient_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund_transfer`
--

INSERT INTO `fund_transfer` (`sr_no`, `account_number`, `re_enter_account_number`, `ifsc_code`, `date`, `amount`, `recipient_name`) VALUES
(1, 2147483647, 2147483647, 12345, '0000-00-00', 1000, 'kiran'),
(2, 2147483647, 2147483647, 12345, '2021-03-12', 1000, 'kiran'),
(3, 214748360, 214748360, 12345, '2021-03-14', 10, 'kiran'),
(4, 2147483647, 2147483647, 12345, '2021-03-15', 12300, 'kiran'),
(5, 2147483647, 2147483647, 12345, '2021-03-16', 1000, 'kiran');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_management`
--

CREATE TABLE `news_management` (
  `sr_no` int(11) NOT NULL,
  `news_headline` varchar(50) NOT NULL,
  `news` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_management`
--

INSERT INTO `news_management` (`sr_no`, `news_headline`, `news`, `date`, `time`) VALUES
(1, 'HOLIDAYS DECLARATION', 'Holidays are declared on all 2nd and 4th Saturdays', '2021-04-11', '00:00:00'),
(2, 'Notice', 'tomorrow bank remains open till 1:00pm', '2021-04-11', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `passbook1`
--

CREATE TABLE `passbook1` (
  `trans_id` int(9) NOT NULL,
  `trans_date` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passbook1`
--

INSERT INTO `passbook1` (`trans_id`, `trans_date`, `remarks`, `debit`, `credit`, `balance`) VALUES
(1, '2021-04-11 09:57:31', 'Opening Balance', 0, 1000, 1000),
(2, '2021-04-11 10:06:03', 'Sent to:kiran kumari, AC/no :  1001', 1000, 0, 0),
(3, '2021-04-11 10:58:19', 'Received From:kiran kumari, AC/no :  1001', 0, 100, 100),
(4, '2021-04-11 11:00:48', 'Received From:kiran kumari, AC/no :  1001', 0, 200, 300),
(5, '2021-04-12 09:58:43', 'Sent to : kiran kumari, AC/no :  1001', 50, 0, 250),
(6, '2021-04-12 09:58:59', 'Sent to : kiran kumari, AC/no :  1001', 1, 0, 249),
(7, '2021-04-12 10:13:17', 'Sent to : kiran kumari, AC/no :  1001', 2, 0, 247);

-- --------------------------------------------------------

--
-- Table structure for table `passbook2`
--

CREATE TABLE `passbook2` (
  `trans_id` int(9) NOT NULL,
  `trans_date` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passbook2`
--

INSERT INTO `passbook2` (`trans_id`, `trans_date`, `remarks`, `debit`, `credit`, `balance`) VALUES
(1, '2021-04-11 09:59:15', 'Opening Balance', 0, 2000, 2000),
(2, '2021-04-11 10:06:03', 'Received From:Preeti  Kumari, AC/no :  1000', 0, 1000, 3000),
(3, '2021-04-11 10:58:19', 'Sent to:Preeti  Kumari, AC/no :  1000', 100, 0, 2900),
(4, '2021-04-11 11:00:48', 'Sent to:Preeti  Kumari, AC/no :  1000', 200, 0, 2700),
(5, '2021-04-12 09:58:43', 'Received From : Preeti  Kumari, AC/no :  1000', 0, 50, 2750),
(6, '2021-04-12 09:58:59', 'Received From : Preeti  Kumari, AC/no :  1000', 0, 1, 2751),
(7, '2021-04-12 10:13:17', 'Received From : Preeti  Kumari, AC/no :  1000', 0, 2, 2753);

-- --------------------------------------------------------

--
-- Table structure for table `passbook3`
--

CREATE TABLE `passbook3` (
  `trans_id` int(9) NOT NULL,
  `trans_date` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passbook3`
--

INSERT INTO `passbook3` (`trans_id`, `trans_date`, `remarks`, `debit`, `credit`, `balance`) VALUES
(1, '2021-04-12 09:07:41', 'Opening Balance', 0, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `trans_date` datetime NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `account_number` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  ADD PRIMARY KEY (`benef_id`),
  ADD UNIQUE KEY `benef_cust_id` (`benef_cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `beneficiary2`
--
ALTER TABLE `beneficiary2`
  ADD PRIMARY KEY (`benef_id`),
  ADD UNIQUE KEY `benef_cust_id` (`benef_cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `beneficiary3`
--
ALTER TABLE `beneficiary3`
  ADD PRIMARY KEY (`benef_id`),
  ADD UNIQUE KEY `benef_cust_id` (`benef_cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `fund_transfer`
--
ALTER TABLE `fund_transfer`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_management`
--
ALTER TABLE `news_management`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `passbook1`
--
ALTER TABLE `passbook1`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `passbook2`
--
ALTER TABLE `passbook2`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `passbook3`
--
ALTER TABLE `passbook3`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  MODIFY `benef_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beneficiary2`
--
ALTER TABLE `beneficiary2`
  MODIFY `benef_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beneficiary3`
--
ALTER TABLE `beneficiary3`
  MODIFY `benef_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fund_transfer`
--
ALTER TABLE `fund_transfer`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_management`
--
ALTER TABLE `news_management`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passbook1`
--
ALTER TABLE `passbook1`
  MODIFY `trans_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passbook2`
--
ALTER TABLE `passbook2`
  MODIFY `trans_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passbook3`
--
ALTER TABLE `passbook3`
  MODIFY `trans_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
