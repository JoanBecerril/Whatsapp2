-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 23:39:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_whatsapp2`
--
CREATE DATABASE IF NOT EXISTS `db_whatsapp2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_whatsapp2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id_chat` int(11) NOT NULL,
  `usuario_chat` varchar(255) DEFAULT NULL,
  `mensaje_chat` text DEFAULT NULL,
  `fecha_chat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_chat`
--

INSERT INTO `tbl_chat` (`id_chat`, `usuario_chat`, `mensaje_chat`, `fecha_chat`) VALUES
(4, 'puigdemont', 'tete pasame los 20K', '2023-11-12 14:42:05'),
(7, 'puigdemont', 'duroo', '2023-11-12 16:44:49'),
(11, 'rajoy', 'dale', '2023-11-13 12:38:52'),
(12, 'puigdemont', 'dale don dale', '2023-11-13 12:39:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(75) NOT NULL,
  `conf_password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `surname`, `email`, `password`, `conf_password`) VALUES
(1, 'sanchez', 'pedro', 'quetevote@xapote.cat', '$2y$10$qVkXOKspvofhk8tj23YX6OaBRlixPFeBqYnh0Q8B./Gjo2K16L3.C', '$2y$10$1T.HAgogy9T8e0GUuFTJguB2vaxD8guIaWJzsPN0P7gikKMsDKHCK'),
(2, 'puigdemont', 'carles', 'puigdemont@arrobar.cat', '$2y$10$c8TB7A7DItGRw6lT2IiR5upZg5ysRZB1e1m2Pug3vFwB7yHKQWqFa', '$2y$10$CQd37pjZhEIVyzDNH1QZIeD0AE3azn/nxGJilBZ1xXazveW0FDZUK'),
(3, 'rajoy', 'mariano', 'rajoy@arrobar.esp', '$2y$10$WlLFyAvvcVxA1/.NN3pmROK7hcsG2sbfnO33Q1fB89S2Rh0KlN.Z2', '$2y$10$UOsQCTmGLZhM44uPknX5UewUzSIOE/OQ41vlu2UPhbY.xRXKT80.K'),
(4, 'rafa', 'lacoca', 'rafa.lacoca@traelaya.com', '$2y$10$smre4RUyXtd0aNc.2/9BhOi/pWcSBceTk7HEB3.zL/q4YQIs5Ty4e', '$2y$10$Wr/xNg8qsKRL9CLTomEot.7xe8bXw1vB./5jSYogvD03HVY6gahn.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
