-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 05:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expenses_maintain`
--

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` int(100) NOT NULL,
  `earning_source` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `tenure` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `mode_of_payment` varchar(100) NOT NULL,
  `recieved_by` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `is_approved` varchar(10) NOT NULL DEFAULT 'No',
  `created_date` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `created_by` varchar(50) NOT NULL,
  `updated_date` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `updated_by` varchar(50) NOT NULL,
  `deleted_date` int(11) NOT NULL,
  `deleted_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `earning_source`, `amount`, `tenure`, `date`, `mode_of_payment`, `recieved_by`, `images`, `remarks`, `transaction_id`, `is_approved`, `created_date`, `created_by`, `updated_date`, `updated_by`, `deleted_date`, `deleted_by`) VALUES
(1, 'Self ', 10000, 'freehold', '2021-03-26', 'Cash', 'Anjali ', '', 'Recieved 10000 rupees. ', '', 'Yes', '2021-03-31 10:20:48.008962', '', '2021-03-31 10:20:48.008962', '', 0, ''),
(2, 'Self', 4000, 'Freehold', '2021-03-31', 'Online', 'Manish', '', 'Recieved 4000 rupees. ', '', 'Yes', '2021-03-31 11:54:28.855304', '', '2021-03-31 11:54:28.855304', '', 0, ''),
(4, 'Business', 7000, 'Freehold', '2021-03-31', 'Online', 'Nitesh', '', 'Received 7000 rupees through online.', '', 'Yes', NULL, '', NULL, '', 0, ''),
(5, 'Self', 10000, 'Freehold', '2021-03-31', 'Online', 'Nitesh', '', 'Received 10000 rupees through online.', '', 'Yes', '2021-03-31 12:13:46.772991', '', '2021-03-31 12:13:46.772991', '', 0, ''),
(9, 'Self ', 10000, 'freehold', '2021-04-01', 'Cash', 'Manish', '', 'Recieved 10000 rupees. ', '', 'Yes', '2021-04-01 13:04:32.884486', '', '2021-04-01 13:04:32.884486', '', 0, ''),
(12, 'Self ', 10000, 'freehold', '2021-04-01', 'Cash', 'Anjali ', 0x75706c6f6164732f, 'Recieved 10000 rupees. ', '', 'Yes', '2021-04-02 11:28:40.941333', '', '2021-04-02 11:28:40.941333', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rupees` int(255) NOT NULL,
  `tenure` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `mode_of_payment` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `paid_by` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `transaction_id` varchar(111) NOT NULL,
  `is_approved` varchar(11) NOT NULL DEFAULT 'No',
  `created_date` date DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_date` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `updated_by` varchar(255) NOT NULL,
  `deleted_date` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `deleted_by` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `rupees`, `tenure`, `date`, `mode_of_payment`, `images`, `paid_by`, `remarks`, `transaction_id`, `is_approved`, `created_date`, `created_by`, `updated_date`, `updated_by`, `deleted_date`, `deleted_by`, `is_active`) VALUES
(2, 'Nitesh ', 9000, 'freehold', '2021-03-24', 'Cash', 0x75706c6f6164732f, 'Nitesh', 'Paid 9000 rupees. ', '4567', 'Yes', '2021-03-25', 'Nitesh', '2021-04-03 14:08:41.938738', '', '2021-04-03 14:08:41.938738', '', 1),
(3, 'Anjali', 5000, 'freehold', '2021-03-25', 'Cash', 0x75706c6f6164732f, 'Anjali', 'Paid 5000 rupees. ', 'xyz', 'Yes', '2021-03-25', 'Manish', '2021-04-03 14:08:14.017241', '', '2021-04-03 14:08:14.017241', '', 1),
(4, 'Arvind', 2000, 'freehold', '2021-03-25', 'Cash', 0x75706c6f6164732f, 'Arvind', 'Paid 2000 rupees. ', 'ABC', 'Yes', '2021-03-25', 'Manish', '2021-04-03 14:08:18.504701', '', '2021-04-03 14:08:18.504701', '', 1),
(5, 'Manish', 10000, 'freehold', '2021-04-01', 'Cash', 0x75706c6f6164732f, 'Manish', 'Recieved 10000 rupees. ', '1234', 'Yes', NULL, 'Manish', '2021-04-03 14:52:40.712622', '', '2021-04-03 14:52:40.712622', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Created_by` varchar(100) NOT NULL,
  `updated_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_by` varchar(100) NOT NULL,
  `deleted_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `deleted_by` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `user_type`, `created_date`, `Created_by`, `updated_date`, `updated_by`, `deleted_date`, `deleted_by`, `is_active`) VALUES
(1, 'Nitesh', 'Sagar', '8076645020', 'sagarnitesh55@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', '2021-04-03 08:43:51.534808', '', '2021-03-24 08:19:29.003116', '', '2021-03-24 08:19:29.003116', '', 1),
(2, 'Manish', 'Pal', '8010133821', 'manishpal123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Employee', '2021-04-03 08:46:14.825902', '', '2021-03-24 08:19:29.003116', '', '2021-03-24 08:19:29.003116', '', 1),
(3, 'Kuldeep', 'Gupta', '8010133821', 'kuldeep@123', '827ccb0eea8a706c4c34a16891f84e7b', 'Employee', '2021-04-03 08:46:24.072683', '', '2021-03-24 08:19:29.003116', '', '2021-03-24 08:19:29.003116', '', 1),
(4, 'Manish', 'Singh', '9089769090', 'manishsingh123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Employee', '2021-04-03 08:46:27.783012', '', '2021-03-24 08:19:29.003116', '', '2021-03-24 08:19:29.003116', '', 1),
(13, 'Anjali', 'Sharma', '9089097867', 'anjalisharma12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Employee', '2021-04-03 08:46:32.738871', '', '2021-03-25 07:09:58.341743', '', '2021-03-25 07:09:58.341743', '', 1),
(14, 'Mukul', 'Sharma', '9089097867', 'mukul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Employee', '2021-04-03 08:46:36.679446', '', '2021-04-03 07:37:56.041219', '', '2021-04-03 07:37:56.041219', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(111) NOT NULL,
  `user_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'Admin'),
(2, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
