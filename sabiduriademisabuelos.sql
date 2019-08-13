-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2019 a las 23:49:25
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
(2, 'jose vargas', '555', '2018-08-03T14:40', '            general                            ', 'calle 1'),
(3, 'brayan', '12347|', '2019-06-04T16:30', '                                        qeqd', 'calller'),
(5, 'jhosen', '45678', '2019-07-19T15:00', 'tiene sueÃ±o y hambre                             ', 'calle 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula`
--

CREATE TABLE `formula` (
  `idformula` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idmedicamento` int(11) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `frecuencia` enum('diario','cada 8 horas','cada 12 horas','') NOT NULL,
  `observacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `idmedicamento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nombreyapellido` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `parentesco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombrecompleto`, `tipodocumento`, `sexo`, `numerodocumento`, `edad`, `rh`, `eps`, `areaprotegida`, `fechanacimiento`, `origen`, `estadocivil`, `fechaingreso`, `estrato`, `escolaridad`, `diagnostico`, `nombreyapellido`, `telefono`, `parentesco`) VALUES
(6, 'jhosen', 'T.I', 'F', '45678', '17', 'A+', 'nueva eps', 'medilaser', '2001-12-20', 'neiva', 'Soltero(a)', '2019-07-18T14:08', 'Uno', 'bachiller', 'arrechera                                                    ', 'miguel', '3204679176', 'mozo'),
(7, 'william hernandez', 'C.C', 'M', '67891', '18', 'O-', 'nueva eps', 'medilaser', '2001-01-25', 'caqueta', 'Divorciado(a)', '2018-08-04T15:05', 'Uno', 'bachiller', ' parquinson                                                   ', 'camacho', '3102085302', 'amigo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `contrasena`) VALUES
(1, 'LUCINDA QUINTERO', '2bcd65834689ce424be9733ea14cd074');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendarcita`
--
ALTER TABLE `agendarcita`
  ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`idformula`),
  ADD KEY `fk_usuario_formula` (`idusuario`),
  ADD KEY `fk_medicamento_formula` (`idmedicamento`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idmedicamento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendarcita`
--
ALTER TABLE `agendarcita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formula`
--
ALTER TABLE `formula`
  MODIFY `idformula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idmedicamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formula`
--
ALTER TABLE `formula`
  ADD CONSTRAINT `fk_medicamento_formula` FOREIGN KEY (`idmedicamento`) REFERENCES `medicamento` (`idmedicamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_formula` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
