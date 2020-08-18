-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 03:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skynet`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_info`
--

CREATE TABLE `area_info` (
  `record_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `area_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area_info`
--

INSERT INTO `area_info` (`record_id`, `branch_id`, `service_type_id`, `area_name`) VALUES
(55, 9, 8, 'কালীগঞ্জ বাজার'),
(56, 9, 8, 'কালীগঞ্জ পুরাতন বাজার'),
(57, 9, 8, 'তালুক - ০১'),
(58, 9, 8, 'তালুক - ০২'),
(60, 9, 8, 'সাধুপাড়া/বটতলী/সাইড নালা'),
(61, 9, 8, 'খারিজা গোলনা উচ্চগ্রাম'),
(62, 9, 8, 'সাহেব পাড়া/চৌরাঙ্গী বাজার'),
(63, 9, 8, 'খচিমাদা/খেরকাটি ডাঙ্গা পাড়া');

-- --------------------------------------------------------

--
-- Table structure for table `bill_generate`
--

CREATE TABLE `bill_generate` (
  `record_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `client_reseller` varchar(500) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `reseller_id` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `generate_month` varchar(50) NOT NULL,
  `generate_year` varchar(50) NOT NULL,
  `head` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `partial_amount` int(11) NOT NULL,
  `invoice_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill_generate`
--

INSERT INTO `bill_generate` (`record_id`, `branch_id`, `service_type_id`, `area_id`, `client_reseller`, `client_id`, `reseller_id`, `mobile`, `address`, `generate_month`, `generate_year`, `head`, `amount`, `paid_status`, `partial_amount`, `invoice_code`) VALUES
(3948, 9, 8, 0, 'Client', '1', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3949, 9, 8, 0, 'Client', '2', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3950, 9, 8, 0, 'Client', '3', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3951, 9, 8, 0, 'Client', '4', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3952, 9, 8, 0, 'Client', '5', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3953, 9, 8, 0, 'Client', '6', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3954, 9, 8, 0, 'Client', '7', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3955, 9, 8, 0, 'Client', '8', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3956, 9, 8, 0, 'Client', '9', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3957, 9, 8, 0, 'Client', '10', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3958, 9, 8, 0, 'Client', '11', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3959, 9, 8, 0, 'Client', '12', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3960, 9, 8, 0, 'Client', '13', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3961, 9, 8, 0, 'Client', '14', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3962, 9, 8, 0, 'Client', '15', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3963, 9, 8, 0, 'Client', '16', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3964, 9, 8, 0, 'Client', '17', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3965, 9, 8, 0, 'Client', '18', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3966, 9, 8, 0, 'Client', '19', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3967, 9, 8, 0, 'Client', '20', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3968, 9, 8, 0, 'Client', '21', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3969, 9, 8, 0, 'Client', '22', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3970, 9, 8, 0, 'Client', '23', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3971, 9, 8, 0, 'Client', '24', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3972, 9, 8, 0, 'Client', '25', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3973, 9, 8, 0, 'Client', '26', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3974, 9, 8, 0, 'Client', '27', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3975, 9, 8, 0, 'Client', '28', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3976, 9, 8, 0, 'Client', '29', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3977, 9, 8, 0, 'Client', '30', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3978, 9, 8, 0, 'Client', '31', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3979, 9, 8, 0, 'Client', '32', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3980, 9, 8, 0, 'Client', '33', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3981, 9, 8, 0, 'Client', '34', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3982, 9, 8, 0, 'Client', '35', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3983, 9, 8, 0, 'Client', '36', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3984, 9, 8, 0, 'Client', '37', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3985, 9, 8, 0, 'Client', '38', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3986, 9, 8, 0, 'Client', '39', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3987, 9, 8, 0, 'Client', '40', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3988, 9, 8, 0, 'Client', '41', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3989, 9, 8, 0, 'Client', '42', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3990, 9, 8, 0, 'Client', '43', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3991, 9, 8, 0, 'Client', '44', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3992, 9, 8, 0, 'Client', '45', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3993, 9, 8, 0, 'Client', '46', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3994, 9, 8, 0, 'Client', '47', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3995, 9, 8, 0, 'Client', '48', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3996, 9, 8, 0, 'Client', '49', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3997, 9, 8, 0, 'Client', '50', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3998, 9, 8, 0, 'Client', '51', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(3999, 9, 8, 0, 'Client', '52', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4000, 9, 8, 0, 'Client', '53', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4001, 9, 8, 0, 'Client', '54', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4002, 9, 8, 0, 'Client', '55', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4003, 9, 8, 0, 'Client', '56', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4004, 9, 8, 0, 'Client', '57', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4005, 9, 8, 0, 'Client', '58', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4006, 9, 8, 0, 'Client', '59', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4007, 9, 8, 0, 'Client', '60', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4008, 9, 8, 0, 'Client', '61', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4009, 9, 8, 0, 'Client', '62', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4010, 9, 8, 0, 'Client', '63', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4011, 9, 8, 0, 'Client', '64', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4012, 9, 8, 0, 'Client', '65', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4013, 9, 15, 0, 'Client', '66', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4014, 9, 8, 0, 'Client', '67', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4015, 9, 8, 0, 'Client', '68', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4016, 9, 8, 0, 'Client', '69', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4017, 9, 8, 0, 'Client', '70', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4018, 9, 8, 0, 'Client', '71', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4019, 9, 8, 0, 'Client', '72', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4020, 9, 8, 0, 'Client', '73', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4021, 9, 8, 0, 'Client', '74', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4022, 9, 8, 0, 'Client', '75', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4023, 9, 8, 0, 'Client', '76', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4024, 9, 8, 0, 'Client', '77', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4025, 9, 8, 0, 'Client', '78', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4026, 9, 8, 0, 'Client', '79', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4027, 9, 8, 0, 'Client', '80', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4028, 9, 8, 0, 'Client', '81', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4029, 9, 8, 0, 'Client', '82', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4030, 9, 8, 0, 'Client', '83', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4031, 9, 8, 0, 'Client', '84', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4032, 9, 8, 0, 'Client', '85', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4033, 9, 8, 0, 'Client', '86', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4034, 9, 8, 0, 'Client', '87', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4035, 9, 8, 0, 'Client', '88', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4036, 9, 8, 0, 'Client', '89', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4037, 9, 8, 0, 'Client', '90', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4038, 9, 8, 0, 'Client', '91', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4039, 9, 8, 0, 'Client', '92', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4040, 9, 8, 0, 'Client', '93', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4041, 9, 8, 0, 'Client', '94', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4042, 9, 8, 0, 'Client', '95', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4043, 9, 8, 0, 'Client', '96', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4044, 9, 8, 0, 'Client', '97', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4045, 9, 8, 0, 'Client', '98', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4046, 9, 8, 0, 'Client', '99', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4053, 9, 8, 0, 'Client', '100', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4054, 9, 8, 0, 'Client', '101', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4055, 9, 8, 0, 'Client', '102', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0),
(4056, 9, 8, 0, 'Client', '103', '0', '', '', '', '', 'Connection Charge', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch_name`
--

CREATE TABLE `branch_name` (
  `record_id` int(11) NOT NULL,
  `branch_name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_name`
--

INSERT INTO `branch_name` (`record_id`, `branch_name`, `address`) VALUES
(9, 'Skynet Digital Vision', 'Mirpur-1, Dhaka-1216');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `record_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `area_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_price` int(11) NOT NULL,
  `connection_date` date NOT NULL,
  `connection_charge` int(11) NOT NULL,
  `status` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`record_id`, `branch_id`, `service_type_id`, `name`, `mobile`, `email`, `address`, `area_id`, `package_id`, `package_price`, `connection_date`, `connection_charge`, `status`, `image`, `nid`) VALUES
(1, 9, 8, 'আজারুল', '01735723043', '', 'কালীগঞ্জ বাজার পুর্ব পাড়া', 55, 21, 150, '2020-06-01', 0, 1, '01.jpg', ''),
(2, 9, 8, 'জব্বার', '01777189622', '', 'কালীগঞ্জ বাজার পুর্ব পাড়া', 55, 21, 100, '2020-01-01', 0, 1, '02.jpg', ''),
(3, 9, 8, 'আশা অফিস', '01738585601', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '03.jpg', ''),
(4, 9, 8, 'ফারুক ব্রাক', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '04.jpg', ''),
(5, 9, 8, 'শাহজাহান(টাওয়ার)', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '05.jpg', ''),
(6, 9, 8, 'রাশিদি', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-06-01', 0, 1, '06.jpg', ''),
(7, 9, 8, 'মনসুর আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '07.jpg', ''),
(8, 9, 8, 'আখতার ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '08.jpg', ''),
(9, 9, 8, 'রহমান', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '09.jpg', ''),
(10, 9, 8, 'শহিদ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 140, '2020-01-01', 0, 1, '10.jpg', ''),
(11, 9, 8, 'ওহাব', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '0000-00-00', 0, 1, '11.jpg', ''),
(12, 9, 8, 'সেবু', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '12.jpg', ''),
(13, 9, 8, 'কবির', '01755222903', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '13.jpg', ''),
(14, 9, 8, 'মানিক', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '14.jpg', ''),
(15, 9, 8, 'আইনুদ্দিন', '01728541051', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '15.jpg', ''),
(16, 9, 8, 'পংকু মেইল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '16.jpg', ''),
(17, 9, 8, 'শরিফুল(ব্রাক)', '01772940905', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '17.jpg', ''),
(18, 9, 8, 'জিয়াউল (আশা)', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '18.jpg', ''),
(19, 9, 8, 'ফরিদুল ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 200, '2020-01-01', 0, 1, '19.jpg', ''),
(20, 9, 8, 'সজল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '20.jpg', ''),
(21, 9, 8, 'নগেন চান্দিয়া', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '21.jpg', ''),
(22, 9, 8, 'শিরাজুল', '01717227020', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '22.jpg', ''),
(23, 9, 8, 'মিনাল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '23.jpg', ''),
(24, 9, 8, 'হরিপদ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '24.jpg', ''),
(25, 9, 8, 'নুর আমিন', '01723315331', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '25.jpg', ''),
(26, 9, 8, 'তাপস', '01745547176', '', 'কালীগঞ্জ বাজার', 55, 21, 130, '2020-01-01', 0, 1, '26.jpg', ''),
(27, 9, 8, 'মঞ্জুরুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '27.jpg', ''),
(28, 9, 8, 'আল-আমিন', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '28.jpg', ''),
(29, 9, 8, 'মানু', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '29.jpg', ''),
(30, 9, 8, 'হাসানুর', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '30.jpg', ''),
(31, 9, 8, 'আমিন', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '31.jpg', ''),
(32, 9, 8, 'লিটন', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '32.jpg', ''),
(33, 9, 8, 'লাল বাবু', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '33.jpg', ''),
(34, 9, 8, 'কুদ্দুস', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '34.jpg', ''),
(35, 9, 8, 'আলম', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '35.jpg', ''),
(36, 9, 8, 'আতিকুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 140, '2020-01-01', 0, 1, '36.jpg', ''),
(37, 9, 8, 'রবিউল নালা', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '37.jpg', ''),
(38, 9, 8, 'মোতালেব', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '38.jpg', ''),
(39, 9, 8, 'দুখু লোড', '01714655770', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '39.jpg', ''),
(40, 9, 8, 'রিপন-১', '01770713169', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '40.jpg', ''),
(41, 9, 8, 'সুসান্ত', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '41.jpg', ''),
(42, 9, 8, 'হেলাল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '42.jpg', ''),
(43, 9, 8, 'কামরুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 130, '2020-01-01', 0, 1, '43.jpg', ''),
(44, 9, 8, 'করিম', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '44.jpg', ''),
(45, 9, 8, 'উমর আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 130, '2020-01-01', 0, 1, '45.jpg', ''),
(46, 9, 8, 'ইউসুফ আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 140, '2020-01-01', 0, 1, '46.jpg', ''),
(47, 9, 8, 'মনসের দোকান', '', '', 'কালীগঞ্জ বাজার', 55, 21, 140, '2020-01-01', 0, 1, '47.jpg', ''),
(48, 9, 8, 'আবেদ আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 125, '2020-01-01', 0, 1, '48(Y).jpg', ''),
(49, 9, 8, 'ওয়াজ আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '49.jpg', ''),
(50, 9, 8, 'শফিকুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 130, '2020-01-01', 0, 1, '50.jpg', ''),
(51, 9, 8, 'আবু মালেক', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '51.jpg', ''),
(52, 9, 8, 'ময়নুদ্দী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '52.jpg', ''),
(53, 9, 8, 'আয়নাল ভাটিয়া', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '53.jpg', ''),
(54, 9, 8, 'হাছেন আলী', '01712369612', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '54.jpg', ''),
(55, 9, 8, 'কপিল ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 125, '2020-01-01', 0, 1, '55.jpg', ''),
(56, 9, 8, 'নুরুল প্রিঞ্চিপাল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '56.jpg', ''),
(57, 9, 8, 'সজীব', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '57.jpg', ''),
(58, 9, 8, 'মেডিকেল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '58.jpg', ''),
(59, 9, 8, 'রিপন - ০২', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '59.jpg', ''),
(60, 9, 8, 'শাহীন', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '60.jpg', ''),
(61, 9, 8, 'রিফাত', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '61.jpg', ''),
(62, 9, 8, 'বাছেদ আলী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '62.jpg', ''),
(63, 9, 8, 'আবু তালেব ', '01757061920', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '63.jpg', ''),
(64, 9, 8, 'সরু মেম্বার', '', '', 'কালীগঞ্জ বাজার', 55, 21, 100, '2020-01-01', 0, 1, '64.jpg', ''),
(65, 9, 8, 'খোরশেদ আলম', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '65.jpg', ''),
(66, 9, 15, 'নাজমুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 125, '2020-01-01', 0, 1, '66.jpg', ''),
(67, 9, 8, 'হানিফ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '67.jpg', ''),
(68, 9, 8, 'আকবর', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '68.jpg', ''),
(69, 9, 8, 'ওসমান - ০১', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '69.jpg', ''),
(70, 9, 8, 'হছুদ্দি', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '70.jpg', ''),
(71, 9, 8, 'কালাম', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '71.jpg', ''),
(72, 9, 8, 'মমিনুর', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '72.jpg', ''),
(73, 9, 8, 'ওসমান - ০২', '', '', 'কালীগঞ্জ বাজার', 55, 21, 120, '2020-01-01', 0, 1, '73.jpg', ''),
(74, 9, 8, 'চাঁদ মিয়া', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '74.jpg', ''),
(75, 9, 8, 'লেবার অফিস', '', '', 'কালীগঞ্জ বাজার', 55, 21, 140, '2020-01-01', 0, 1, '75.jpg', ''),
(76, 9, 8, 'ফাকু', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '76.jpg', ''),
(77, 9, 8, 'অলিউল্লাহ', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '77.jpg', ''),
(78, 9, 8, 'আফজাল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '78.jpg', ''),
(79, 9, 8, 'শহিদুল', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '79.jpg', ''),
(80, 9, 8, 'ইমন', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '80.jpg', ''),
(81, 9, 8, 'দুলাল আশা', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '81.jpg', ''),
(82, 9, 8, 'ইয়াকুব মাষ্টার', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '82.jpg', ''),
(83, 9, 8, 'মনছুর মিলেটারী', '', '', 'কালীগঞ্জ বাজার', 55, 21, 150, '2020-01-01', 0, 1, '83.jpg', ''),
(84, 9, 8, 'জহরুল দোকান', '', '', 'পুরাতন বাজার', 56, 21, 130, '2020-01-01', 0, 1, '84.jpg', ''),
(85, 9, 8, 'কালাম', '01763475970', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '85.jpg', ''),
(86, 9, 8, 'এরশাদ আলি', '01976466854', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '86.jpg', ''),
(87, 9, 8, 'ইদ্রিস আলী', '01713727959', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '87.jpg', ''),
(88, 9, 8, 'আলিম উদ্দীন', '0179625054', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '88.jpg', ''),
(89, 9, 8, 'শাহানুর', '01740951932', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '89.jpg', ''),
(90, 9, 8, 'সুজন ড্রাইভার', '01723508384', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '90.jpg', ''),
(91, 9, 8, 'বিমল লোড', '01711417287', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '91.jpg', ''),
(92, 9, 8, 'চান মিয়া - ০১', '01731438269', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '92.jpg', ''),
(93, 9, 8, 'আলমগীর', '01740963540', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '93.jpg', ''),
(94, 9, 8, 'রশিদুল দর্জি', '01762311390', '', 'পুরাতন বাজার', 56, 21, 120, '2020-01-01', 0, 1, '94.jpg', ''),
(95, 9, 8, 'কৃষ্ণ', '01737343595', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '95.jpg', ''),
(96, 9, 8, 'রিপন - ০১', '01749251885', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '96.jpg', ''),
(97, 9, 8, 'হ্যামনাল', '', '', 'পুরাতন বাজার', 56, 21, 140, '2020-01-01', 0, 1, '97.jpg', ''),
(98, 9, 8, 'রশিদুল - ০২', '', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '98.jpg', ''),
(99, 9, 8, 'মতিন', '', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '99.jpg', ''),
(100, 9, 8, 'এরশাদ', '01733524847', '', 'পুরাতন বাজার', 56, 21, 100, '2020-01-01', 0, 1, '100.jpg', ''),
(101, 9, 8, 'ক্ষিতিস', '01733889169', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '101.jpg', ''),
(102, 9, 8, 'রঞ্জিত', '01722746742', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '102.jpg', ''),
(103, 9, 8, 'প্রদীপ', '', '', 'পুরাতন বাজার', 56, 21, 150, '2020-01-01', 0, 1, '103.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `record_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` varchar(500) NOT NULL,
  `client_reseller` varchar(50) NOT NULL,
  `expense_head_id` int(11) NOT NULL,
  `amount` int(15) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `paid_by_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense_head`
--

CREATE TABLE `expense_head` (
  `record_id` int(11) NOT NULL,
  `head` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense_head`
--

INSERT INTO `expense_head` (`record_id`, `head`) VALUES
(1, 'Cable Purchase'),
(2, 'Electric Bill'),
(3, 'Office Rent'),
(6, 'Tape'),
(7, 'Loan'),
(8, 'Shop rent'),
(10, 'Connector'),
(11, 'Paper bill'),
(12, 'Dan'),
(13, 'Bank deposit Dish'),
(14, 'Bank deposit school '),
(15, 'Nasta'),
(16, 'Vara'),
(18, 'Electric Bill office'),
(19, 'Electric Bill control room '),
(20, 'Coupler '),
(21, 'Tv cord'),
(22, 'Dish splitter '),
(23, 'Internet splitter '),
(24, 'Nuo'),
(25, 'TG Box'),
(26, 'Bank deposit Internet'),
(27, 'Internet Line Cost (Subrato dada)'),
(28, 'Internet other cost'),
(29, 'Cable Joint (Internet)'),
(30, 'Cable Joint (Dish)'),
(31, 'Kafe Bhai'),
(32, 'Titu Salary'),
(33, 'Others Dish'),
(34, 'Others Internet'),
(35, 'Mobile Bill'),
(36, 'G.I wire'),
(38, 'Nobin'),
(39, 'Santo'),
(40, 'Mostafiz'),
(41, 'Repair'),
(42, 'Node');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `record_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` varchar(500) NOT NULL,
  `client_reseller` varchar(50) NOT NULL,
  `income_head_id` int(11) NOT NULL,
  `amount` int(15) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `paid_by_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `income_head`
--

CREATE TABLE `income_head` (
  `record_id` int(11) NOT NULL,
  `head` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `income_head`
--

INSERT INTO `income_head` (`record_id`, `head`) VALUES
(1, 'Cable Sales'),
(21, 'Tv cord'),
(22, 'Dish splitter '),
(23, 'Internet splitter '),
(25, 'TG Box'),
(29, 'Cable Joint (Internet)'),
(30, 'Cable Joint (Dish)'),
(36, 'G.I wire'),
(41, 'Repair');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_generate`
--

CREATE TABLE `invoice_generate` (
  `record_id` int(11) NOT NULL,
  `client_reseller` varchar(500) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `reseller_id` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `paid_date` date DEFAULT NULL,
  `due_mon_amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `collect_by` varchar(100) NOT NULL,
  `receipt_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_name`
--

CREATE TABLE `menu_name` (
  `record_id` int(11) NOT NULL,
  `menu_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_name`
--

INSERT INTO `menu_name` (`record_id`, `menu_name`) VALUES
(1, 'Branch Name'),
(2, 'Service Type'),
(3, 'Package Info'),
(4, 'Area Info'),
(5, 'Expense Head'),
(6, 'Client Info'),
(7, 'Reseller Info'),
(8, 'Staff Info'),
(9, 'Expense Entry'),
(10, 'Bill Generate'),
(11, 'Invoice Generate'),
(12, 'Balance Sheet'),
(13, 'Role Setting');

-- --------------------------------------------------------

--
-- Table structure for table `package_info`
--

CREATE TABLE `package_info` (
  `record_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `package_code` varchar(500) NOT NULL,
  `package_name` varchar(500) NOT NULL,
  `bandwidth` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_info`
--

INSERT INTO `package_info` (`record_id`, `branch_id`, `service_type_id`, `package_code`, `package_name`, `bandwidth`, `price`) VALUES
(21, 9, 8, '', 'ডিস ক্যাবল', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reseller_info`
--

CREATE TABLE `reseller_info` (
  `record_id` varchar(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `area_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_price` int(11) NOT NULL,
  `issue_pin` varchar(500) NOT NULL,
  `use_pin` varchar(500) NOT NULL,
  `connection_date` date NOT NULL,
  `connection_charge` int(11) NOT NULL,
  `card_no` varchar(200) NOT NULL,
  `validity_date` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_setting`
--

CREATE TABLE `role_setting` (
  `record_id` int(11) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `view_menu_id` varchar(500) NOT NULL,
  `insert_menu_id` varchar(500) NOT NULL,
  `edit_menu_id` varchar(500) NOT NULL,
  `delete_menu_id` varchar(500) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_setting`
--

INSERT INTO `role_setting` (`record_id`, `full_name`, `email`, `mobile`, `user_name`, `password`, `view_menu_id`, `insert_menu_id`, `edit_menu_id`, `delete_menu_id`, `status`) VALUES
(1, 'Admin', 'admin', '', 'admin', '123', 'all', 'all', 'all', 'all', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `record_id` int(11) NOT NULL,
  `service_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`record_id`, `service_type`) VALUES
(8, 'ডিস লাইন'),
(15, 'ISP');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `record_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `joining_date` date NOT NULL,
  `salary` varchar(500) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_info`
--
ALTER TABLE `area_info`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `bill_generate`
--
ALTER TABLE `bill_generate`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `branch_name`
--
ALTER TABLE `branch_name`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `expense_head`
--
ALTER TABLE `expense_head`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `income_head`
--
ALTER TABLE `income_head`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `invoice_generate`
--
ALTER TABLE `invoice_generate`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `menu_name`
--
ALTER TABLE `menu_name`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `package_info`
--
ALTER TABLE `package_info`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `reseller_info`
--
ALTER TABLE `reseller_info`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `role_setting`
--
ALTER TABLE `role_setting`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_info`
--
ALTER TABLE `area_info`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `bill_generate`
--
ALTER TABLE `bill_generate`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4057;

--
-- AUTO_INCREMENT for table `branch_name`
--
ALTER TABLE `branch_name`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `expense_head`
--
ALTER TABLE `expense_head`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income_head`
--
ALTER TABLE `income_head`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `menu_name`
--
ALTER TABLE `menu_name`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_info`
--
ALTER TABLE `package_info`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `role_setting`
--
ALTER TABLE `role_setting`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
