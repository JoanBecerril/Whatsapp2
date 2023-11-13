-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 23:31:08
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
(5, 'rajoy', 'dale tt', '2023-11-12 14:46:41'),
(6, 'rajoy', 'ogvycuhjginokplmjnhbvg', '2023-11-12 16:27:18'),
(7, 'puigdemont', 'duroo', '2023-11-12 16:44:49'),
(8, 'puigdemont', 'wdefrtg', '2023-11-12 16:49:27'),
(9, 'rajoy', 'fghyujik', '2023-11-12 22:49:42'),
(10, 'puigdemont', 'dsfgyh', '2023-11-12 22:50:36'),
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
(1, 'puigdemont', 'carles', 'puigdemont@arrobar.cat', 'qweQWE123', 'qweQWE123'),
(2, 'rajoy', 'mariano', 'rajoy@arrobar.esp', 'qweQWE123', 'qweQWE123'),
(23, 'rafa', 'lacoca', 'rafa.lacoca@traelaya.com', '$2y$10$kHY7BkZxW9u.aVjZAQ', '$2y$10$8rTxyxZBr0Ut9iuWS5'),
(24, 'newvision', 'freezing', 'juanca.joan23@fje.edu', '$2y$10$mxd.5Xj2Agimb/X416', '$2y$10$Itj9L2AAk0k5NrMSx3'),
(25, 'sanchez', 'pedro', 'quetevote@xapote.cat', '$2y$10$qVkXOKspvofhk8tj23YX6OaBRlixPFeBqYnh0Q8B./Gjo2K16L3.C', '$2y$10$1T.HAgogy9T8e0GUuFTJguB2vaxD8guIaWJzsPN0P7gikKMsDKHCK');

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
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
