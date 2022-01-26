-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 02:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `controller_id` varchar(50) NOT NULL,
  `action_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `controller_id`, `action_id`, `name`) VALUES
(12, 'site', 'index', 'Index'),
(13, 'site', 'profile', 'Profile'),
(14, 'site', 'login', 'Login'),
(15, 'site', 'logout', 'Logout'),
(16, 'site', 'contact', 'Contact'),
(17, 'site', 'about', 'About'),
(18, 'menu', 'index', 'Index'),
(19, 'menu', 'view', 'View'),
(20, 'menu', 'create', 'Create'),
(21, 'menu', 'update', 'Update'),
(22, 'menu', 'delete', 'Delete'),
(23, 'role', 'index', 'Index'),
(24, 'role', 'view', 'View'),
(25, 'role', 'create', 'Create'),
(26, 'role', 'update', 'Update'),
(27, 'role', 'delete', 'Delete'),
(28, 'role', 'detail', 'Detail'),
(29, 'user', 'index', 'Index'),
(30, 'user', 'view', 'View'),
(31, 'user', 'create', 'Create'),
(32, 'user', 'update', 'Update'),
(33, 'user', 'delete', 'Delete'),
(34, 'site', 'register', 'Register');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL DEFAULT 'index',
  `icon` varchar(50) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `controller`, `action`, `icon`, `order`, `parent_id`) VALUES
(1, 'Home', 'site', 'index', 'fa fa-home', 1, NULL),
(2, 'Master', '', 'index', 'fa fa-database', 2, NULL),
(3, 'Menu', 'menu', 'index', 'fa fa-circle-o', 3, 2),
(4, 'Role', 'role', 'index', 'fa fa-circle-o', 4, 2),
(5, 'User', 'user', 'index', 'fa fa-circle-o', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Karyawan'),
(2, 'Administrator'),
(3, 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `role_action`
--

CREATE TABLE `role_action` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_action`
--

INSERT INTO `role_action` (`id`, `role_id`, `action_id`) VALUES
(33, 2, 12),
(34, 2, 13),
(35, 2, 14),
(36, 2, 15),
(37, 2, 16),
(38, 2, 17),
(39, 2, 18),
(40, 2, 19),
(41, 2, 20),
(42, 2, 21),
(43, 2, 22),
(44, 2, 23),
(45, 2, 24),
(46, 2, 25),
(47, 2, 26),
(48, 2, 27),
(49, 2, 28),
(50, 2, 29),
(51, 2, 30),
(52, 2, 31),
(53, 2, 32),
(54, 2, 33),
(98, 3, 12),
(99, 3, 13),
(100, 3, 14),
(101, 3, 15),
(102, 3, 16),
(103, 3, 17),
(104, 3, 18),
(105, 3, 19),
(106, 3, 20),
(107, 3, 21),
(108, 3, 22),
(109, 3, 23),
(110, 3, 24),
(111, 3, 25),
(112, 3, 26),
(113, 3, 27),
(114, 3, 28),
(115, 3, 29),
(116, 3, 30),
(117, 3, 31),
(118, 3, 32),
(119, 3, 33),
(141, 1, 12),
(142, 1, 13),
(143, 1, 34),
(144, 1, 14),
(145, 1, 15),
(146, 1, 16),
(147, 1, 17),
(148, 1, 18),
(149, 1, 19),
(150, 1, 20),
(151, 1, 21),
(152, 1, 22),
(153, 1, 23),
(154, 1, 24),
(155, 1, 25),
(156, 1, 26),
(157, 1, 27),
(158, 1, 28),
(159, 1, 29),
(160, 1, 30),
(161, 1, 31),
(162, 1, 32),
(163, 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`id`, `role_id`, `menu_id`) VALUES
(56, 2, 1),
(57, 2, 2),
(58, 2, 3),
(59, 2, 4),
(60, 2, 5),
(71, 3, 1),
(72, 3, 2),
(73, 3, 3),
(74, 3, 4),
(75, 3, 5),
(81, 1, 1),
(82, 1, 2),
(83, 1, 3),
(84, 1, 4),
(85, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `alamat` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `jenis_kelamin`, `alamat`, `role_id`, `photo_url`, `last_login`, `last_logout`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Perempuan', '', 1, 'ID6jM8Az7Yh_R6LR44Ezh02VECKTQ_Ya.png', '2022-01-25 15:20:09', '2022-01-25 14:19:38'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Regular User', 'Perempuan', '', 3, 'default.png', '2022-01-20 13:14:52', '2022-01-20 14:07:22'),
(7, 'budi123', '9c5fa085ce256c7c598f6710584ab25d', 'Budi', 'Laki-Laki', 'Jakarta', 3, NULL, '2022-01-22 08:13:18', '2022-01-22 08:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_action`
--
ALTER TABLE `role_action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_action`
--
ALTER TABLE `role_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `role_action`
--
ALTER TABLE `role_action`
  ADD CONSTRAINT `role_action_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `role_action_ibfk_2` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`);

--
-- Constraints for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD CONSTRAINT `role_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `role_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
