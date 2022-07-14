-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2022 a las 19:55:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pifphp2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usrApellido` varchar(50) NOT NULL,
  `usrNombre` varchar(50) NOT NULL,
  `usrDNI` int(11) NOT NULL,
  `usrEmail` varchar(60) NOT NULL,
  `usrTelefono` varchar(80) NOT NULL,
  `usrSeniority` varchar(1) NOT NULL,
  `usrPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usrApellido`, `usrNombre`, `usrDNI`, `usrEmail`, `usrTelefono`, `usrSeniority`, `usrPassword`) VALUES
(11, 'Giardili', 'Lea', 21453885, 'lgiardili@jusneuquen.gov.ar', '154220529', '2', '2222'),
(12, 'Gomez', 'Sebastian', 45256897, 'sgomez@gmail.com', '156897412', '2', '123456'),
(13, 'Herrera', 'Hernan', 25568746, 'hherrera@gmail.com', '155623587', '1', '1234'),
(14, 'Uribe', 'Federico', 30256874, 'furibe@gmail.com', '156425871', '1', '123'),
(15, 'Giardili', 'Ezequiel', 25458746, 'ezegiardili@gmail.com', '156815314', '1', '12345'),
(16, 'Giardili', 'Agustin', 46583215, 'agus@gmail.com', '156815314', '1', '1234'),
(17, 'Giardili', 'Roberto', 4523875, 'rgiardili@yahoo.com.ar', '154879631', '3', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usrDNI` (`usrDNI`),
  ADD UNIQUE KEY `usrEmail` (`usrEmail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
