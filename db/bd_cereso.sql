-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 21:01:35
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesp`
--

CREATE TABLE `detallesp` (
  `idpreso` int(11) NOT NULL,
  `altura` varchar(111) NOT NULL,
  `compleccion` varchar(111) NOT NULL,
  `tes` varchar(111) NOT NULL,
  `peso` varchar(111) NOT NULL,
  `nombre` varchar(111) NOT NULL,
  `fechaN` date NOT NULL,
  `condena` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallesp`
--

INSERT INTO `detallesp` (`idpreso`, `altura`, `compleccion`, `tes`, `peso`, `nombre`, `fechaN`, `condena`) VALUES
(1, '1111', '111', '111', '111', '111', '1111-11-11', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prisioneros`
--

CREATE TABLE `tbl_prisioneros` (
  `idpreso` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaN` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `sexo` varchar(200) NOT NULL,
  `motEnc` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_prisioneros`
--

INSERT INTO `tbl_prisioneros` (`idpreso`, `nombre`, `fechaN`, `estado`, `direccion`, `sexo`, `motEnc`, `apellido`) VALUES
(24, '', '1111-11-11', ' Chihuahua', ' CHIHUAHUA', ' masculino', ' asesinato', 'Avitia'),
(25, '11', '0001-11-11', ' 1111111', ' 111', ' 1111', ' 1111', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sentencia`
--

CREATE TABLE `tbl_sentencia` (
  `idpreso` int(11) NOT NULL,
  `causasen` varchar(111) NOT NULL,
  `descripcion` varchar(111) NOT NULL,
  `noCaso` int(11) NOT NULL,
  `sentencia` varchar(111) NOT NULL,
  `tSentencia` varchar(111) NOT NULL,
  `fechaN` date NOT NULL,
  `noCelda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_sentencia`
--

INSERT INTO `tbl_sentencia` (`idpreso`, `causasen`, `descripcion`, `noCaso`, `sentencia`, `tSentencia`, `fechaN`, `noCelda`) VALUES
(3, '111', '11', 111, '111', '111', '1111-11-11', 111);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallesp`
--
ALTER TABLE `detallesp`
  ADD PRIMARY KEY (`idpreso`);

--
-- Indices de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  ADD PRIMARY KEY (`idpreso`);

--
-- Indices de la tabla `tbl_sentencia`
--
ALTER TABLE `tbl_sentencia`
  ADD PRIMARY KEY (`idpreso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallesp`
--
ALTER TABLE `detallesp`
  MODIFY `idpreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  MODIFY `idpreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_sentencia`
--
ALTER TABLE `tbl_sentencia`
  MODIFY `idpreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
