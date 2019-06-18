-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 20:52:41
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabiduriademisabuelos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendarcita`
--

CREATE TABLE `agendarcita` (
  `idcita` int(11) NOT NULL,
  `nombreyapellido` varchar(100) NOT NULL,
  `numerodocumento` varchar(30) NOT NULL,
  `fecha_hora` varchar(30) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agendarcita`
--

INSERT INTO `agendarcita` (`idcita`, `nombreyapellido`, `numerodocumento`, `fecha_hora`, `asunto`, `direccion`) VALUES
(1, 'jose vargas', '101010', '2018-08-03T14:40', '            general                            ', 'calle 1'),
(2, 'jose vargas', '555', '2018-08-03T14:40', '            general                            ', 'calle 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombrecompleto` varchar(30) NOT NULL,
  `tipodocumento` varchar(100) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `numerodocumento` varchar(30) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `rh` varchar(100) NOT NULL,
  `eps` varchar(100) NOT NULL,
  `areaprotegida` varchar(100) NOT NULL,
  `fechanacimiento` varchar(30) NOT NULL,
  `origen` varchar(100) NOT NULL,
  `estadocivil` varchar(30) NOT NULL,
  `fechaingreso` varchar(100) NOT NULL,
  `estrato` varchar(5) NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `diagnostico` varchar(100) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `nombreyapellido` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `parentesco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendarcita`
--
ALTER TABLE `agendarcita`
  ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendarcita`
--
ALTER TABLE `agendarcita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
