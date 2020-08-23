-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 05:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(150) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `event_state` varchar(10) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `event_postcode` varchar(10) NOT NULL,
  `event_start_date` datetime NOT NULL,
  `event_date` datetime NOT NULL,
  `event_end_date` datetime NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_price` int(5) NOT NULL DEFAULT '0',
  `event_attendee` int(5) DEFAULT NULL,
  `banner_img` varchar(20) NOT NULL,
  `event_img` varchar(20) NOT NULL,
  `host_id` int(11) NOT NULL,
  `host_name` varchar(25) NOT NULL,
  `host_contact` varchar(50) NOT NULL,
  `host_email` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `eventToken` varchar(255) NOT NULL,
  `event_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `address1`, `address2`, `event_state`, `suburb`, `event_postcode`, `event_start_date`, `event_date`, `event_end_date`, `event_description`, `event_price`, `event_attendee`, `banner_img`, `event_img`, `host_id`, `host_name`, `host_contact`, `host_email`, `status`, `eventToken`, `event_created_at`) VALUES
(11, 'test event', 'test venue', '', '', 'test state', '', '99999', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'test event description', 0, 50, '5ed7fc3808af7.jpg', '5ed7fc3809389.jpg', 3, 'test user', '9911006644', 'test@mail.com', 2, '', '2020-08-16 06:27:12'),
(12, 'xyz', 'australia', '', '', 'australia', '', '456321', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'lorem lorem', 0, 50, '5ed89a6197bcb.jpg', '5ed89a6197e6c.jpg', 3, 'ashish', '9911006644', 'ashish@gmail.com', 1, '', '2020-08-16 10:44:51'),
(16, 'NEW EVENT', 'somewhere in Australia ', 'yyyy', 'ssss', '123', 'qqq', '123', '2020-09-01 12:31:00', '2020-09-02 06:30:00', '2020-09-02 05:25:00', 'neew event neew event neew event neew event neew event', 0, 50, '5ed911ee80ca2.jpg', '5ed911ee80f4e.jpg', 17, 'some', '9910488178', 'someuser@mail.com', 0, '', '2020-08-15 09:20:57'),
(17, 'NEW EVENT', 'somewhere in Australia ', 'xys', 'sds', '123', 'wsx', '123', '2020-09-15 01:00:00', '2020-09-22 00:45:00', '2020-10-05 13:00:00', '<p><strong><span style=\"color:#e74c3c;\"><span style=\"background-color:#f39c12;\">neew event</span></span></strong></p>', 0, 50, '5ed911ee80ca2.jpg', '5ed911ee80f4e.jpg', 3, 'some', '9910488178', 'someuser@mail.com', 0, '', '2020-08-16 10:46:09'),
(18, 'dfdf', 'dfdf', 'df', '', 'adfdf', 'df', '1234', '2020-10-09 00:00:00', '2020-10-04 00:00:00', '2020-10-08 01:00:00', '<p>dfdf</p>', 0, 50, '', '', 3, 'dffa', '1234567890', 'ashish@gmail.com', 2, '', '2020-08-16 06:27:05'),
(19, 'new event', 'In austraila', 'xyz', 'xy2', 'melborney', 'hjll', '1238', '2020-09-24 02:00:00', '2020-09-28 01:05:00', '2020-09-24 12:05:00', '<p>new event</p>', 0, 20, '', '', 3, 'hostname', '9955226656', 'ashish@gmail.com', 0, '', '2020-08-16 10:40:04'),
(21, 'new event', 'australia', 'australia', '', 'australia', 'australia', '1236', '2020-08-17 18:00:00', '2020-08-31 18:00:00', '2020-08-28 00:00:00', '', 0, 20, '5f391ba59c153.jpg', '', 3, 'newt', '9966332255', 'newt@demomail.com', 1, '', '2020-08-16 11:42:29'),
(22, 'new event', 'australia', 'australia', '', 'australia', 'australia', '1236', '2020-08-17 18:00:00', '2020-08-31 18:00:00', '2020-08-28 00:00:00', '', 0, 20, '5f391bb313405.jpg', '', 3, 'newt', '9966332255', 'newt@demomail.com', 1, '', '2020-08-16 11:42:43'),
(23, 'new event', 'australia', 'australia', '', 'australia', 'australia', '1236', '2020-08-17 18:00:00', '2020-08-31 18:00:00', '2020-08-28 00:00:00', '', 0, 20, '5f391c4b6568b.jpg', '', 3, 'newt', '9966332255', 'newt@demomail.com', 1, '', '2020-08-16 11:45:15'),
(24, 'new event', 'australia', 'australia', '', 'australia', 'australia', '1236', '2020-08-17 18:00:00', '2020-08-31 18:00:00', '2020-08-28 00:00:00', '', 0, 20, '5f391c8b2d0db.jpg', '', 3, 'newt', '9966332255', 'newt@demomail.com', 1, '', '2020-08-16 11:46:19'),
(25, 'new event', 'australia', 'australia', '', 'australia', 'australia', '1236', '2020-08-17 18:00:00', '2020-08-31 18:00:00', '2020-08-28 00:00:00', '', 0, 20, '5f391db43b960.jpg', '', 3, 'newt', '9966332255', 'newt@demomail.com', 1, '', '2020-08-16 11:51:16'),
(26, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 11:53:10'),
(27, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 11:54:38'),
(28, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 12:00:05'),
(29, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 12:02:42'),
(30, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 12:04:53'),
(31, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 12:05:10'),
(32, 'lat', 'asdfa', 'sdf', 'df', 'dfdf', 'fdf', '2345', '2020-08-31 00:00:00', '2020-08-25 12:00:00', '2020-08-26 00:00:00', '<p>fsk</p>\r\n', 0, 34, '', '', 3, 'last', '1236547890', 'last@mail.com', 1, '', '2020-08-16 12:05:31'),
(33, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '', '2020-08-16 12:20:52'),
(34, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '7302c32210ff49949651b052b0b0b8ff48fb49c0c6fb4b838c', '2020-08-16 12:21:26'),
(35, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '859657360afceb5cc3be3037d0800769e5eda73aa751046138', '2020-08-16 12:21:40'),
(36, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '6495ada5fdf8f89fbffbe133fb196c1575795e375a6c377306', '2020-08-16 12:23:15'),
(37, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '2ed07bcc29895d75f32f2195cc182a04cded5656e08d9aaaef', '2020-08-16 12:24:54'),
(39, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, 'a9eaf39233795e84774cc109f325618f653da5e13f9587530c', '2020-08-16 12:26:01'),
(42, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '3cfbf63942acf33bf1a332e5383bded71dcec5bdcd4a8bdb4d', '2020-08-16 12:27:14'),
(48, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, 'd6d82095fc4e4a66c61bfcb2ce5be13b63a86a381203c089e6', '2020-08-16 13:09:44'),
(50, 'new event', 'sdfd', 'dfd', '', 'dfd', 'dfd', '1234', '2020-08-31 06:00:00', '2020-08-24 00:59:00', '2020-08-31 12:59:00', '<p>new event</p>\r\n', 0, 4, '', '', 3, 'new event', '9632587410', 'newt@demomail.com', 1, '4acf16e5db43e07b638d9d0c08b91b595993dc266104eb7935', '2020-08-16 13:11:32'),
(56, 'asds', 'asx', 'asf', '', 'asd', 'as', '1234', '2020-08-24 18:00:00', '2020-08-17 00:00:00', '2020-08-31 18:59:00', '<p>asds</p>\r\n', 0, 34, '', '', 3, 'sds', '8888888888', 'ashish@gmail.com', 1, '68e78d75d957e302ebfeae4b7da10b6b24f9a01b57edf55ebe', '2020-08-16 13:30:13'),
(57, 'asds', 'asx', 'asf', '', 'asd', 'as', '1234', '2020-08-24 18:00:00', '2020-08-17 00:00:00', '2020-08-31 18:59:00', '<p>asds</p>\r\n', 0, 34, '', '', 3, 'sds', '8888888888', 'ashish@gmail.com', 2, '', '2020-08-16 15:03:26'),
(58, 'asds', 'asx', 'asf', '', 'asd', 'as', '1234', '2020-08-24 18:00:00', '2020-08-17 00:00:00', '2020-08-31 18:59:00', '<p>asds</p>\r\n', 0, 34, '', '', 3, 'sds', '8888888888', 'ashish@gmail.com', 0, '', '2020-08-16 15:01:30'),
(59, 'asx', 'asdfa', 'asf', 'dfd', 'fdf', 'dfd', '1234', '2020-08-24 18:00:00', '2020-08-30 18:01:00', '2020-08-29 13:05:00', '<p>asd</p>\r\n', 0, 23, '', '', 3, 'asd', '1234567890', 'ashish@gmail.com', 2, '', '2020-08-16 14:53:47'),
(60, 'final event test', 'somewhere in Australia', 'jkjdfk', '', 'jfkdk', 'yeir', '1236', '2020-08-26 18:00:00', '2020-08-31 18:00:00', '2020-08-31 18:00:00', '<p>final event</p>\r\n', 0, 25, '5f394b36c845b.jpg', '', 3, 'final', '9999999999', 'final@gmail.com', 2, '', '2020-08-16 15:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` date NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_role`, `created_at`, `modified`, `phone`) VALUES
(3, 'ashish kumar', 'ashish13101988@gmail.com', '$2y$10$JGzE2CRTj.BcQwD424Q8GeTH69fEEBbd7ZwODpx0LWlYqqLXmH.MK', 1, '2020-05-29 01:47:53', '0000-00-00', ''),
(16, 'demo user', 'demo@gmail.com', '$2y$10$mYEzezqG/pZqxXcU3x8RGuX33nNM6mNsJ8FBj/CqZOE8mu8YY/PwW', 0, '2020-06-12 02:05:50', '0000-00-00', 'NA'),
(17, 'user demo', 'userdemo@mail.com', '$2y$10$LtmZP0tdDm7To..SYy82QOhXTFJLgIe93J0wMJbNdBE5CFBRRP.mi', 0, '2020-06-12 02:08:39', '0000-00-00', 'NA'),
(18, 'final user', 'finaluser@mail.com', '$2y$10$9kjhAS4WBOipNM2rOYjTzOL/bPDyNxFtkDipV9pqdUZSg3dqKhjle', 0, '2020-06-12 02:09:26', '0000-00-00', 'NA'),
(19, 'some user', 'someuser@gmail.com', '$2y$10$dOdltSc6P.96y4X0ao05dubpnnPUBDlgrBSucABuIUHAVUSVfmJji', 0, '2020-06-22 00:52:47', '0000-00-00', 'NA'),
(20, 'new user', 'newuser@mail.com', '$2y$10$KorDzYmpjYfiPSnvbPkZtOGNvllGPis41fIbSpS68V1dI1aF8ryWi', 0, '2020-07-20 00:59:11', '0000-00-00', 'NA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
