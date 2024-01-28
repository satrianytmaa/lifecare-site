-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2024 at 01:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifecare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` int(11) NOT NULL,
  `date_and_time` datetime NOT NULL,
  `id_user` int(64) NOT NULL,
  `id_clinic` int(11) NOT NULL DEFAULT 0,
  `id_vaccine` int(64) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `number` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `date_and_time`, `id_user`, `id_clinic`, `id_vaccine`, `status`, `number`) VALUES
(5, '2024-01-28 12:52:34', 26, 45, 10, 'Daftar', 'AP001');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id_clinic` int(11) NOT NULL,
  `name_clinic` varchar(225) NOT NULL DEFAULT '',
  `tag` varchar(64) NOT NULL,
  `address` varchar(225) NOT NULL DEFAULT '',
  `email_clinic` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id_clinic`, `name_clinic`, `tag`, `address`, `email_clinic`) VALUES
(45, 'City General Hospital', 'General', '123 Main St, City1', 'info@cityhospital.com'),
(46, 'Sunshine Medical Center', 'Medical Center', '456 Oak St, City2', 'contact@sunshinemedical.com'),
(47, 'Metro Health Clinic', 'Metro Health', '789 Elm St, City3', 'info@metrohealthclinic.com'),
(48, 'Central Family Clinic', 'Family Clinic', '101 Pine St, City4', 'info@centralfamilyclinic.com'),
(49, 'Downtown Wellness Center', 'Wellness Center', '202 Cedar St, City5', 'wellness@downtowncenter.com'),
(50, 'Unity Medical Services', 'Medical Services', '303 Maple St, City6', 'info@unitymedical.com'),
(51, 'Greenfield Healthcare', 'Healthcare', '404 Birch St, City7', 'contact@greenfieldhealthcare.com'),
(52, 'Harborview Clinic', 'Harborview', '505 Walnut St, City8', 'info@harborviewclinic.com'),
(53, 'Golden State Medical', 'Golden State', '606 Pine St, City9', 'info@goldenstatemedical.com'),
(54, 'Riverfront Health Center', 'Riverfront Health', '707 Oak St, City10', 'info@riverfronthealth.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `problem` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `email`, `subject`, `problem`, `user_id`) VALUES
(4, 'viktor@gmail.com', 'healthcare', 'I have backpain that I cannot solve', 26),
(5, 'viktor@gmail.com', 'healthcare', 'Hello World!', 26),
(6, 'viktor@gmail.com', 'consultation', 'Help!', 26);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_session` int(11) NOT NULL,
  `register_at` datetime NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id_session`, `register_at`, `id_user`) VALUES
(9, '2024-01-28 12:38:43', 25),
(10, '2024-01-28 12:39:34', 25),
(11, '2024-01-28 12:48:46', 26),
(12, '2024-01-28 12:50:27', 26),
(13, '2024-01-28 12:51:06', 26),
(14, '2024-01-28 12:56:49', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `full_name`, `address`, `email`, `phone_number`, `password`, `role`) VALUES
(25, 'Travis', 'Travis Scott', '789 Elm St, United Kingdom', 'travisscott@gmail.com', '3456789012', '7985139ae9b6efb45373e3e36e444224', 'admin'),
(26, 'Viktor', 'Viktor Caveliar', 'Paris, French', 'viktor@gmail.com', '56790654', '4e3c1f58d4ace2057d5e18f4a5a478fb', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id_vaccine` int(11) NOT NULL,
  `name_vaccine` varchar(128) NOT NULL,
  `manufacturer` varchar(128) NOT NULL,
  `dose_vaccine` varchar(128) NOT NULL,
  `id_clinic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id_vaccine`, `name_vaccine`, `manufacturer`, `dose_vaccine`, `id_clinic`) VALUES
(10, 'Pfizer-BioNTech', 'China', '2', 49),
(11, 'Sinovac', 'China', '4', 45),
(12, 'Astra-Zeneca', 'England', '2', 51);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `clinic_appointment` (`id_clinic`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_vaccine` (`id_vaccine`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `user_blog` (`user_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id_clinic`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`) USING BTREE,
  ADD KEY `user_contact` (`user_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_session`) USING BTREE,
  ADD KEY `user_session` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id_vaccine`),
  ADD KEY `fk_vaccine_clinic` (`id_clinic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id_clinic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id_vaccine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`id_vaccine`) REFERENCES `vaccine` (`id_vaccine`),
  ADD CONSTRAINT `clinic_appointment` FOREIGN KEY (`id_clinic`) REFERENCES `clinic` (`id_clinic`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `user_blog` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `user_contact` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `user_session` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD CONSTRAINT `fk_vaccine_clinic` FOREIGN KEY (`id_clinic`) REFERENCES `clinic` (`id_clinic`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
