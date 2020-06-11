-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 05:16 PM
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
  `event_state` varchar(10) NOT NULL,
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
  `event_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `event_state`, `event_postcode`, `event_start_date`, `event_date`, `event_end_date`, `event_description`, `event_price`, `event_attendee`, `banner_img`, `event_img`, `host_id`, `host_name`, `host_contact`, `host_email`, `event_created_at`) VALUES
(11, 'test event', 'test venue', 'test state', '99999', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'test event description', 0, 50, '5ed7fc3808af7.jpg', '5ed7fc3809389.jpg', 3, 'test user', '9911006644', 'test@mail.com', '2020-06-03 19:38:32'),
(12, 'xyz', 'australia', 'australia', '456321', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'lorem lorem', 0, 50, '5ed89a6197bcb.jpg', '5ed89a6197e6c.jpg', 3, 'ashish', '9911006644', 'ashish@gmail.com', '2020-06-04 06:53:21'),
(13, '', '', '', '', '2020-06-18 00:00:00', '2020-06-18 00:00:00', '2020-06-26 00:00:00', '', 0, 0, '5ed8f0a75d3c9.jpg', '5ed8f0a75d8a0.jpg', 3, '', '', '', '2020-06-04 13:01:27'),
(14, 'a', '', '', '', '2020-06-19 13:08:00', '2020-06-11 04:10:00', '2020-06-18 13:11:00', '', 0, 0, '5ed90635605f1.jpg', '5ed9063560881.jpg', 3, '', '', '', '2020-06-04 14:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` date NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `modified`, `phone`) VALUES
(3, 'ashish kumar', 'ashish13101988@gmail.com', '$2y$10$JGzE2CRTj.BcQwD424Q8GeTH69fEEBbd7ZwODpx0LWlYqqLXmH.MK', '2020-05-29 01:47:53', '0000-00-00', ''),
(4, 'duplicate email', 'ashish@gmail.com', '12345678', '2020-05-29 01:47:53', '0000-00-00', ''),
(5, 'ninja coder', 'ninja@gmail.com', '$2y$10$JGzE2CRTj.BcQwD424Q8GeTH69fEEBbd7ZwODpx0LWlYqqLXmH.MK', '2020-05-29 18:21:40', '0000-00-00', 'NA'),
(6, 'new user', 'newUser@gmail.com', '$2y$10$qnNBpLFfzrky6CvR3wVeHe844Gl8STIjF4O1BclOC0sEJ34FcV9Qy', '2020-05-29 18:25:32', '0000-00-00', 'NA'),
(7, 'demo user', 'ashish1234@gmail.com', '$2y$10$EtXjdfNeLL/nTf63zQTQ1e2cjXDTYD6D55F6a/9qVvWVjL2rvTJW6', '2020-05-30 00:51:14', '0000-00-00', 'NA'),
(11, 'HELLO WORLD', 'HELLO@GMAIL.COM', '$2y$10$4CQAd3wcSVs7jFFOENOW3OSgmlTTV3pCt36IapO/0FNedMOyd9Hsy', '2020-06-04 15:10:51', '0000-00-00', 'NA'),
(12, 'SOME USER', 'SOME@USER.COM', '$2y$10$V7PzQeffXRfGzJG/1fgnme6wg3mhtHAFOMRf1XaIKjZDdt6jDmHGm', '2020-06-04 15:13:19', '0000-00-00', 'NA');

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
