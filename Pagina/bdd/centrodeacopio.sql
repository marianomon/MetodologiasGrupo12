-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2021 a las 23:40:57
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centrodeacopio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_usuario` int(11) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_usuario`, `direccion`) VALUES
(1, '../CentroAcopio/Imagenes/60aff7b2ab34b.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `descripcion`) VALUES
(2, 'Cartón', 'Debe estar seco, limpias, apilado y sin cintas adhesivas pegadas.'),
(3, 'Envases Plasticos', 'Deben estar limpios y aplastados.'),
(4, 'Botellas de Vidrio', 'Deben estar secas y limpias.'),
(5, 'Latas de Aluminio y de Conserva', 'Deben estar secas, limpias y aplastadas.'),
(6, 'Tetrabrik', 'Deben estar limpios y aplastados.'),
(10, 'Papel', 'Debe estar seco, limpio y apilado. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialesrecogidos`
--

CREATE TABLE `materialesrecogidos` (
  `idMaterial` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `cantidad` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materialesrecogidos`
--

INSERT INTO `materialesrecogidos` (`idMaterial`, `idUsuario`, `cantidad`) VALUES
(2, 1, '300'),
(5, 31, '300'),
(4, 31, '300'),
(5, 31, '90'),
(5, 31, '68'),
(2, 31, '98'),
(4, 31, '999'),
(6, 9, '800'),
(2, 9, '700');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id_oferta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `zonaGeografica` text NOT NULL,
  `espacio` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `id_usuario`, `zonaGeografica`, `espacio`, `texto`) VALUES
(1, 1, 'Barrio terminal', 2, 'Estoy llevando cartones'),
(2, 8, 'Villa Italia', 3, 'por favor cajas limpias'),
(3, 31, 'Villa laza', 2, 'por favor cajas limpias'),
(4, 31, 'Barrio Golf', 4, 'por favor cajas'),
(5, 8, 'Barrio canada', 3, 'Cajas ordenandas'),
(6, 8, 'Barrio procrear', 3, 'Empaquetado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `volumen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `volumen`) VALUES
(75, 1, 3),
(76, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `idOferta` int(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
  `activo` tinyint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postulantes`
--

INSERT INTO `postulantes` (`idOferta`, `idUsuario`, `activo`) VALUES
(1, 8, 0),
(5, 1, 0),
(6, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(30) NOT NULL,
  `nombre` text NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(200) NOT NULL,
  `horarioPreferencia` int(200) NOT NULL,
  `vehiculo` text NOT NULL,
  `dni` int(200) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `apellido` text NOT NULL,
  `isAdm` int(200) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `contraseña`, `email`, `direccion`, `telefono`, `horarioPreferencia`, `vehiculo`, `dni`, `fechaNacimiento`, `apellido`, `isAdm`, `activo`) VALUES
(1, 'Mariano', '$2y$10$.8YcAbmR8ewzTu3s1ekctOdfFw82un.jfGMfIuOsTNiXlnvUq.jYi', 'marian@gmail.com', 'brasil 1982', 2147483647, 1, '', 0, '0000-00-00', 'montero', 0, 0),
(8, 'ivan', '$2y$10$L2NhaeAc8oAQ2o76dHGP7eOnjsdWVVmg32QXzxsyw29s3fSWLdVs6', 'ivan@gmail.com', 'Basilico 1740', 2147483647, 1, '', 0, '0000-00-00', 'Samudio', 0, 0),
(9, 'Lina', '$2y$10$d96ACd1aVIm4.Bs6XEj09O1diXIG3v7iqxqhNAShbTV9ihTOHMasq', 'secretaria@gmail.com', 'el paso 125', 257368989, 0, '', 12345678, '0000-00-00', 'lasecretaria', 1, 0),
(31, 'pepe', '$2y$10$n1A511vhdf1F09f5hBcyPuu7CSpH1iqtDXvNf39PnKd/4EHQzw.A2', '', 'Street 103', 0, 0, '', 87654321, '2000-01-30', 'Hernandez', -1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `materialesrecogidos`
--
ALTER TABLE `materialesrecogidos`
  ADD KEY `idMaterial` (`idMaterial`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  ADD KEY `idOferta` (`idOferta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materialesrecogidos`
--
ALTER TABLE `materialesrecogidos`
  ADD CONSTRAINT `materialesrecogidos_ibfk_1` FOREIGN KEY (`idMaterial`) REFERENCES `materiales` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materialesrecogidos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postulantes`
--
ALTER TABLE `postulantes`
  ADD CONSTRAINT `postulantes_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulantes_ibfk_2` FOREIGN KEY (`idOferta`) REFERENCES `oferta` (`id_oferta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
