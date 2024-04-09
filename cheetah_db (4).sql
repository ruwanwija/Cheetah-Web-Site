-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheetah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_number` varchar(40) NOT NULL,
  `admin_nic` varchar(40) NOT NULL,
  `admin_address` varchar(40) NOT NULL,
  `admin_gender` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_number`, `admin_nic`, `admin_address`, `admin_gender`) VALUES
(1, 'ruwanwijayasundara@gmail.com', '1234', 'ruwan', '0705308262', '981572700v', 'Wijaya Osuhala,Rathna Hangamuwa,Rathnapu', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `tracking_no` int(11) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `parcel_type` varchar(40) NOT NULL,
  `parcel_description` varchar(40) NOT NULL,
  `parcel_receiver` varchar(40) NOT NULL,
  `parcel_contact_no` varchar(40) NOT NULL,
  `parcel_address` varchar(40) NOT NULL,
  `parcel_city` varchar(40) NOT NULL,
  `parcel_province` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`tracking_no`, `sender_name`, `parcel_type`, `parcel_description`, `parcel_receiver`, `parcel_contact_no`, `parcel_address`, `parcel_city`, `parcel_province`) VALUES
(1, 'ruwan', '1kg-5kg', 'foods', 'gayathri bandara', '0452050335', '1234 main street', 'mahragama', 'colombo'),
(2, '', '5kg-15kg', 'vegetables', 'Ranjith', '', '1234 main street,galkulama', 'puththalama', 'colombo'),
(3, '', '1kg', 'Document    ', 'Jane Doe', '0765432109', '456 Elm Avenue', 'Nugegoda', ''),
(4, '', '1kg-5kg', 'Clothing and accessories', 'Mark Johnson', '0701234567', '789 Pine Street', 'Panadura', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_no` int(11) NOT NULL,
  `parcel_length` int(40) NOT NULL,
  `parcel_width` int(40) NOT NULL,
  `parcel_height` int(40) NOT NULL,
  `sender_date` date NOT NULL,
  `sender_from` varchar(40) NOT NULL,
  `sender_to` varchar(40) NOT NULL,
  `receiver_date` date NOT NULL,
  `receiver_from` varchar(40) NOT NULL,
  `receiver_to` varchar(40) NOT NULL,
  `sender_street` varchar(40) NOT NULL,
  `sender_city` varchar(40) NOT NULL,
  `contact_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_no`, `parcel_length`, `parcel_width`, `parcel_height`, `sender_date`, `sender_from`, `sender_to`, `receiver_date`, `receiver_from`, `receiver_to`, `sender_street`, `sender_city`, `contact_no`) VALUES
(1, 12, 12, 12, '2023-07-06', '10.00 a.m', '11.00 a.m', '2023-07-13', '12.00 p.m', '1.00 p.m', 'Hangamuwa', 'Rathnapura', ' 0705308262');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_contact_no` varchar(40) NOT NULL,
  `user_nic` varchar(40) NOT NULL,
  `user_address` varchar(40) NOT NULL,
  `user_city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_contact_no`, `user_nic`, `user_address`, `user_city`) VALUES
(1, 'ruwanwijayasundara@gmail.com', '1234', 'ruwan', '0705308262', '981572700v', 'wijaya osuhala,rathna hangamuwa,rathnapu', 'rathnapura'),
(4, 'john@gmail.com', 'john123', 'John Doe       ', '0712345678  ', '960912345V', '123 Main Street', 'Colombo     '),
(5, 'sarah@gmail.com', 'sarah456', 'Sarah Smith', '0711234567  ', '982345678V ', '456 Park Lane', 'Galle       '),
(6, 'amanda@gmail.com', 'amanda789', 'Amanda Brown', '0721234567  ', '765432189V', '789 Oak Street           ', 'Kandy       '),
(7, 'chris@gmail.com', 'chris321', 'Chris Wilson', '0731234567  ', '876543219V', '234 Elm Road', 'Colombo     '),
(8, 'lisa@gmail.com', 'lisa654', 'Lisa Johnson   ', '0741234567  ', '789012345V', '345 Pine Lane ', 'Jaffna      ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`tracking_no`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `tracking_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
