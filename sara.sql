-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 05:47 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sara`
--

-- --------------------------------------------------------

--
-- Table structure for table `alertas`
--

CREATE TABLE `alertas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `piso` int(11) NOT NULL,
  `aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `alertas`
--

INSERT INTO `alertas` (`id`, `tipo`, `hora`, `fecha`, `piso`, `aula`) VALUES
(1, 'iluminacion', '22:15:41', '2016-01-17', 1, 1),
(2, 'encendida', '22:16:03', '2016-01-17', 1, 1),
(3, 'equipo', '22:16:21', '2016-01-17', 1, 1),
(4, 'puerta', '22:16:40', '2016-01-17', 1, 1),
(5, 'aulaabierta', '22:16:53', '2016-01-17', 1, 1),
(6, 'iluminacion', '08:00:00', '2016-01-18', 1, 1),
(7, 'iluminacion', '06:00:00', '2016-01-17', 1, 1),
(9, 'equipo', '08:00:00', '2016-01-17', 1, 2),
(11, 'aulaabierta', '08:00:00', '2016-01-18', 1, 1),
(12, 'puerta', '13:49:00', '2016-01-18', 1, 3),
(13, 'puerta', '15:08:36', '2016-01-18', 1, 5),
(14, 'puerta', '15:08:57', '2016-01-18', 1, 5),
(15, 'puerta', '15:09:08', '2016-01-18', 1, 5),
(16, 'puerta', '15:09:23', '2016-01-18', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `estadoaulas`
--

CREATE TABLE `estadoaulas` (
  `id` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `alerta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `estadoaulas`
--

INSERT INTO `estadoaulas` (`id`, `piso`, `aula`, `estado`, `alerta`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 0, 0),
(3, 1, 3, 1, 0),
(4, 1, 4, 1, 0),
(5, 1, 5, 1, 0),
(6, 1, 6, 1, 0),
(7, 1, 7, 1, 0),
(8, 1, 8, 1, 0),
(9, 1, 9, 1, 0),
(10, 1, 10, 1, 0),
(11, 1, 11, 1, 0),
(12, 1, 12, 1, 0),
(13, 1, 13, 1, 0),
(14, 1, 14, 1, 0),
(15, 1, 15, 0, 0),
(16, 1, 16, 1, 0),
(17, 1, 17, 1, 0),
(18, 1, 18, 1, 0),
(19, 2, 1, 0, 0),
(20, 2, 2, 1, 0),
(21, 2, 3, 1, 0),
(22, 2, 4, 1, 0),
(23, 2, 5, 1, 0),
(24, 2, 6, 1, 0),
(25, 2, 7, 1, 0),
(26, 2, 8, 1, 0),
(27, 2, 9, 1, 0),
(28, 2, 10, 1, 0),
(29, 2, 11, 1, 0),
(30, 2, 12, 1, 0),
(31, 2, 13, 0, 0),
(32, 2, 14, 1, 0),
(33, 2, 15, 1, 0),
(34, 2, 16, 1, 0),
(35, 2, 17, 1, 0),
(36, 2, 18, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'profesor', 'General User'),
(3, 'invitado', ''),
(4, 'monitor', '');

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `reservado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_salida` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`id`, `piso`, `aula`, `reservado`, `nombre`, `curso`, `hora_inicio`, `hora_salida`, `fecha`) VALUES
(1, 1, 1, 'londojime@gmail.com', 'santi londo', 'jui', '06:00:00', '08:00:00', '2016-01-16'),
(2, 1, 1, 'londojime@gmail.com', 'santi londo', 'jui', '06:00:00', '08:00:00', '2016-01-17'),
(3, 1, 1, 'londojime@gmail.com', 'santi londo', 'bob', '08:00:00', '10:00:00', '2016-01-17'),
(4, 1, 1, 'londojime@gmail.com', 'santi londo', 'bob', '08:00:00', '10:00:00', '2016-02-17'),
(5, 1, 1, 'londojime@gmail.com', 'santi londo', 'chaz', '08:00:00', '10:00:00', '2016-02-16'),
(6, 1, 1, 'londojime@gmail.com', 'santi londo', 'ar', '06:00:00', '08:00:00', '2019-01-01'),
(7, 1, 1, 'londojime@gmail.com', 'santi londo', 'Matematicas', '06:00:00', '08:00:00', '2019-12-12'),
(8, 1, 1, 'londojime@gmail.com', 'santi londo', '', '06:00:00', '08:00:00', '2016-11-11'),
(9, 1, 11, 'carlos@udea.edu.co', 'c c', 'h', '06:00:00', '08:00:00', '2016-12-31'),
(10, 1, 11, 'carlos@udea.edu.co', 'c c', '', '06:00:00', '08:00:00', '2016-12-15'),
(11, 1, 1, 'londojime@gmail.com', 'santi londo', 'chaz', '10:00:00', '12:00:00', '2020-02-01'),
(12, 1, 1, 'pablo@gmail.com', 'Pablo Santana', 'fa', '18:00:00', '20:00:00', '2018-11-01'),
(14, 1, 1, 'londojime@gmail.com', 'santi londo', 'asfd', '10:00:00', '12:00:00', '2019-11-11'),
(15, 1, 1, 'londojime@gmail.com', 'santi londo', 'wer', '18:00:00', '20:00:00', '2016-11-11'),
(16, 1, 1, 'pablo@gmail.com', 'Pablo Santana', 'asdf', '14:00:00', '16:00:00', '2020-12-12'),
(17, 1, 1, 'pablo@gmail.com', 'Pablo Santana', 'lok', '06:00:00', '08:00:00', '2022-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `equipos` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `piso`, `aula`, `estado`, `equipos`, `descripcion`) VALUES
(1, 1, 1, 0, 3, 'Videobeam Epson'),
(2, 1, 2, 0, 3, 'Parlantes Sony'),
(3, 1, 3, 1, 4, 'Videobeam Epson'),
(4, 1, 4, 0, 2, 'Parlantes Sony'),
(5, 1, 5, 1, 4, 'Parlantes Sony'),
(6, 1, 6, 0, 4, 'Parlantes Sony'),
(7, 1, 7, 0, 2, 'Televisor Samsung'),
(8, 1, 8, 0, 2, 'Videobeam Epson'),
(9, 1, 9, 0, 2, 'Televisor Samsung'),
(10, 1, 10, 0, 2, 'Videobeam Epson'),
(11, 1, 11, 0, 1, 'Televisor Samsung'),
(12, 1, 12, 0, 2, 'PC Hewlett-Packard'),
(13, 1, 13, 0, 2, 'Televisor Samsung'),
(14, 1, 14, 0, 3, 'Televisor Samsung'),
(15, 1, 15, 0, 4, 'PC Hewlett-Packard'),
(16, 1, 16, 0, 2, 'PC Hewlett-Packard'),
(17, 1, 17, 0, 1, 'Televisor Samsung'),
(18, 1, 18, 0, 2, 'PC Hewlett-Packard'),
(19, 2, 1, 0, 2, 'PC Hewlett-Packard'),
(20, 2, 2, 0, 3, 'Televisor Samsung'),
(21, 2, 3, 0, 2, 'PC Hewlett-Packard'),
(22, 2, 4, 0, 3, 'Parlantes Sony'),
(23, 2, 5, 0, 3, 'Parlantes Sony'),
(24, 2, 6, 0, 1, 'Televisor Samsung'),
(25, 2, 7, 0, 2, 'Parlantes Sony'),
(26, 2, 8, 0, 1, 'Videobeam Epson'),
(27, 2, 9, 0, 1, 'Televisor Samsung'),
(28, 2, 10, 0, 4, 'Parlantes Sony'),
(29, 2, 11, 0, 2, 'Parlantes Sony'),
(30, 2, 12, 0, 2, 'Videobeam Epson'),
(31, 2, 13, 0, 3, 'Televisor Samsung'),
(32, 2, 14, 0, 1, 'Parlantes Sony'),
(33, 2, 15, 0, 2, 'Parlantes Sony'),
(34, 2, 16, 0, 1, 'Parlantes Sony'),
(35, 2, 17, 0, 4, 'PC Hewlett-Packard'),
(36, 2, 18, 0, 4, 'Parlantes Sony');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1453173281, 1, 'Admin', 'istrator', '8398891', '0'),
(2, '::1', NULL, '$2y$08$7Ep2FvR3OFVsfGYBG/l./OrFzlPkgnCd9JvuI0b90844v0akUoLfq', NULL, 'londojime@gmail.com', NULL, NULL, NULL, NULL, 1452725484, 1453154865, 1, 'santi', 'londo', '1152188641', '2526528'),
(3, '::1', NULL, '$2y$08$bjD4AsYIUFUhX2PA06wQ5.gAr4Gmuh.lrmV6dbwh8ZhKjcbIYhWeG', NULL, 'pablo@gmail.com', NULL, NULL, NULL, NULL, 1453069942, 1453146278, 1, 'Pablo', 'Santana', '43002152', '2521544'),
(4, '::1', NULL, '$2y$08$.e1tTpF1qTq/V9rtL8e4L.xMH4GStdm2J58u5oA8WsDSHxksQqFZK', NULL, 'john@gmail.com', NULL, NULL, NULL, NULL, 1453086497, 1453155215, 1, 'John', 'Doe', '71360321', '3154078'),
(6, '::1', NULL, '$2y$08$J1VwRkZNsPBJ3iVvDLu8iu96felqKEiwpDg7UHh0SWqKLF7D69JLq', NULL, 'carlos@udea.edu.co', NULL, NULL, NULL, NULL, 1453127731, 1453163867, 1, 'c', 'c', '1', '1'),
(7, '::1', NULL, '$2y$08$Wpp7KQe4Bk4.v9OeMXJu4uvR3NepeggU/789zPRR8oHkCmvl1JwD2', NULL, 'daniel@udea.edu.co', NULL, NULL, NULL, NULL, 1453128416, 1453130077, 1, 'y', 'y', '15', '12'),
(8, '::1', NULL, '$2y$08$.bKYwaSv71sFmdiFb/I3CO9WeGuaDq0bai0DURFhtd8K90ASLSZc.', NULL, 'juanca@udea.edu.co', NULL, NULL, NULL, NULL, 1453144483, 1453163889, 1, 'd', 'd', 'd', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1),
(6, 2, 2),
(8, 3, 2),
(9, 4, 3),
(19, 6, 2),
(20, 7, 4),
(21, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `serial` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `perfil`, `usuario`, `contrasena`, `correo`, `serial`) VALUES
(1, 'administrador', 'daniel', '3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f', 'daniel@udea.edu.co', '123daniel123'),
(2, 'profesor', 'juanca', '47732e97b4753c952ffa6f4eb51846c4e1308c79', 'juanca@udea.edu.co', '123juanca123'),
(3, 'monitor', 'carlos', 'ab5e2bca84933118bbc9d48ffaccce3bac4eeb64', 'carlos@udea.edu.co', '123carlos123'),
(4, 'invitado', 'londojime', '98b13d30182d60a8c4e77278b56c61ac042acd19', 'londojime@udea.edu.co', '123londojime123'),
(5, 'administrador', 'embebido', '3d37418a177358b5f50cb137daf58a4f257cab4d', '', '123embebido123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estadoaulas`
--
ALTER TABLE `estadoaulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `estadoaulas`
--
ALTER TABLE `estadoaulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
