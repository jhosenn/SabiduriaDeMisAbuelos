-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 00:45:37
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
(9, 'MANUEL QUINTERO CALDERON', '12564789', '2019-10-30T09:00', 'Cita regulatoria para la salud del paciente       ', 'CARRERA 2'),
(10, 'MANUEL QUINTERO CALDERON', '67895', '2109-12-23T16:00', '                    NN.N                    ', 'CARRERA 5');

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

--
-- Volcado de datos para la tabla `formula`
--

INSERT INTO `formula` (`idformula`, `idusuario`, `idmedicamento`, `cantidad`, `frecuencia`, `observacion`) VALUES
(2, 9, 7, '1ml', 'cada 8 horas', 'Debe aplicar para poder controlar los niveles de azucar          '),
(3, 9, 7, '2', 'cada 12 horas', '          N.M');

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

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`idmedicamento`, `nombre`, `descripcion`, `estado`) VALUES
(7, 'Insulina', 'Necesaria para la diabetes', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `idnota` int(11) NOT NULL,
  `observacion` varchar(9999) DEFAULT NULL,
  `fecha_hora` datetime NOT NULL
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
(9, 'MANUEL QUINTERO CALDERON', 'C.C', 'M', '1678459', '65', 'O+', 'Medimás', 'SURA', '2000-06-13', 'Neiva', 'Viudo(a)', '2019-10-18T07:00', 'Dos', 'Ingeniero', 'Tiene Diabetes grado 4', 'JHOSEN HERNANDEZ', '3214587952', 'Bisnieto');

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
(1, 'LUCINDA QUINTERO', '8d4c2bd972d66de1fe86cc598a5312ba');

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
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`idnota`);

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
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `formula`
--
ALTER TABLE `formula`
  MODIFY `idformula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idmedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
