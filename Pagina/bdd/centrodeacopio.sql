-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2021 a las 01:17:41
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
(6, 'Tetrabrik', 'Deben estar limpios y aplastados.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialesrecogidos`
--

CREATE TABLE `materialesrecogidos` (
  `idMaterial` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `cantidad` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(11, 'jesu', '$2y$10$fQJ83bSMpRaUqKhL3llVbOUwgRlwWqTZfzUiBdqg8liQq.VVZjAsG', '', 'venezuela', 0, 0, '', 0, '2000-07-22', 'locss', -1, 0),
(12, 'jesu', '$2y$10$vqpp58Jqhq8jpDIJLqkz/OC4tX9ZzUwYNRaHu9773zuprSZMLT84S', '', 'venezuela', 0, 0, '', 0, '2000-07-22', 'locss', -1, 0),
(13, 'jesu', '$2y$10$2tb9KE3zWGs6r4oo/7Ia.eL0Lh8yhjFT6icAhpJ6a2cwRWaT9ZbHO', '', 'venezuela', 0, 0, '', 41099436, '2000-07-22', 'locss', -1, 0);

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
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
