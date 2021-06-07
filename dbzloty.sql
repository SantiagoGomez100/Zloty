-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2021 a las 02:54:28
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbzloty`
--
CREATE DATABASE IF NOT EXISTS `dbzloty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbzloty`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `TipoCategoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `TipoCategoria`) VALUES
(1, 'Juguetes'),
(2, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'Bueno'),
(2, 'Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionarproducto`
--

CREATE TABLE `gestionarproducto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionProducto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Existencias` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gestionarproducto`
--

INSERT INTO `gestionarproducto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `Existencias`, `idCategoria`, `idEstado`) VALUES
(132, 'juguete', 'Carro control remoto', 12, 2, 2),
(1842, 'Cajas', 'Buen Estado', 900, 2, 2),
(3123, 'Bicicleta', 'todo terreno', 10, 2, 2),
(12583, 'Regalos', 'Regalos para niños', 10, 1, 2),
(12584, 'Patineta', 'Patineta', 5, 1, 1),
(123456, 'adasd', 'adasdas', 12, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionfundacion`
--

CREATE TABLE `gestionfundacion` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `nick` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `numeroTelefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gestionfundacion`
--

INSERT INTO `gestionfundacion` (`idUsuario`, `nombre`, `apellido`, `nick`, `email`, `numeroTelefono`, `password`) VALUES
(1, 'Wilmer Andres', 'Perdomo', 'WilmerPB', 'wilmer.a.p@hotmail.com', '3043853865', '$2y$05$7qqdKqZQdLb3qLe7z8j/PeCrbeIr.a7188KY7gCs4X9Xsu2WGqgsK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionusuario`
--

CREATE TABLE `gestionusuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gestionusuario`
--

INSERT INTO `gestionusuario` (`idUsuario`, `nombre`, `apellido`, `email`, `telefono`, `ciudad`, `password`) VALUES
(5, 'Santiago', 'Manjarres', 'sm@gmail.com', '3041234567', 'Bogotá D.C', '$2y$05$M4X33oModJYaJlYJh/e3x.4W9hYwskYMPjbGQ729uXW2Qiuw0ft4y'),
(8, 'Adriana Geraldine', 'Romero', 'gr@gmail.com', '3157893215', 'Bogotá D.C', '$2y$05$cnpPdNqnF1RA/rF49nN.ieuCGoiBb3Ju4Ony80cVfcKwqSgQbAOSC'),
(9, 'Angelo', 'Fort', 'af@gmail.com', '3158173705', 'Bogotá D.C', '$2y$05$R4ZwwsIWX.neuneN0pmZn.qgmS6Yn0hf2qGWmM8iX.CabJR9lxbL.'),
(13, 'Jonathan', 'Sierra', 'js@gmail.com', '3225698548', 'Calí', '$2y$05$0h5OqxbejJz.dv6ivZG7HOcQHMCyQTe7Eu3rVRa.pMyrhlJsNW8Ba'),
(14, 'Kevin', 'Capera', 'kc@gmail.com', '3256987452', 'Manizales', '$2y$05$tKrEnpwDUFsqoW/ootk86eHbuO1RRb3quqeBGrZq5VHuzIHOWb/MG'),
(17, 'Wilmer Andres', 'Perdomo Bustamante', 'wilmerpb30@gmail.com', '3041234567', 'Neiva', '$2y$05$LT9YCUmU2EyzFwJOSbWb5eSRyrNByY.G8A0u3nU4l9Osjo5zkzESC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambio`
--

CREATE TABLE `intercambio` (
  `idIntercambio` int(11) NOT NULL,
  `idTipoIntercambio` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `intercambio`
--

INSERT INTO `intercambio` (`idIntercambio`, `idTipoIntercambio`, `idUsuario`, `idProducto`, `cantidad`) VALUES
(1, 2, 8, 1842, 100),
(3, 2, 17, 3123, 12),
(8, 2, 17, 132, 12),
(10, 2, 17, 123456, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `passwords`
--

INSERT INTO `passwords` (`id`, `email`, `token`, `codigo`, `fecha`) VALUES
(6, 'wilmerpb30@gmail.com', '8b01c41d2d', 66997, '2021-05-10 00:08:44'),
(7, 'wilmerpb30@gmail.com', 'be970fc646', 75600, '2021-05-10 00:40:29'),
(8, 'gr@gmail.com', '9ce0e05bbf', 81186, '2021-05-10 00:44:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipointercambio`
--

CREATE TABLE `tipointercambio` (
  `idTipoIntercambio` int(11) NOT NULL,
  `TipoIntercambio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipointercambio`
--

INSERT INTO `tipointercambio` (`idTipoIntercambio`, `TipoIntercambio`) VALUES
(1, 'Donacion'),
(2, 'Intercambio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `gestionarproducto`
--
ALTER TABLE `gestionarproducto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `gestionfundacion`
--
ALTER TABLE `gestionfundacion`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `gestionusuario`
--
ALTER TABLE `gestionusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  ADD PRIMARY KEY (`idIntercambio`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idTipoIntercambio` (`idTipoIntercambio`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipointercambio`
--
ALTER TABLE `tipointercambio`
  ADD PRIMARY KEY (`idTipoIntercambio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gestionarproducto`
--
ALTER TABLE `gestionarproducto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT de la tabla `gestionfundacion`
--
ALTER TABLE `gestionfundacion`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gestionusuario`
--
ALTER TABLE `gestionusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `intercambio`
--
ALTER TABLE `intercambio`
  MODIFY `idIntercambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipointercambio`
--
ALTER TABLE `tipointercambio`
  MODIFY `idTipoIntercambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gestionarproducto`
--
ALTER TABLE `gestionarproducto`
  ADD CONSTRAINT `gestionarproducto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gestionarproducto_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `intercambio`
--
ALTER TABLE `intercambio`
  ADD CONSTRAINT `intercambio_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `gestionusuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `intercambio_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `gestionarproducto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `intercambio_ibfk_3` FOREIGN KEY (`idTipoIntercambio`) REFERENCES `tipointercambio` (`idTipoIntercambio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
