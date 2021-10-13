-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 06:41:22
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emisora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_comentario` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `descripcion`, `fecha_comentario`) VALUES
(1, 'Este es un comentarioperron', '2021-10-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `asunto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'edyson leal', 'edyson@gmail.com', 'Convocatoria final', 'Los convoco perrito yo te elijo picacku', '2021-10-06'),
(2, 'edyson', 'edyson@gmail.com', 'prueba 2', 'Esta es una prueba perrito', '2021-10-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

CREATE TABLE `documentacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ruta_documento` varchar(400) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`id`, `titulo`, `ruta_documento`) VALUES
(1, 'Opiniones publicas', 'model/documentos/perrito'),
(2, 'Gastos publicos', 'model/documentos/holis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `ruta_imagen` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `link` varchar(400) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `ruta_imagen`, `imagen`, `titulo`, `descripcion`, `fecha`, `lugar`, `link`) VALUES
(1, 'Archivos/imagenes/noticia/25.jpg', '25.jpg', 'Se rueda una pelicula en labateca', 'El equipo de producción está compuesto, casi en su totalidad, por jóvenes oriundos de Labateca, Pamplona y Cúcuta. El proyecto está siendo financiado por el Fondo de Desarrollo Cinematográfico en la categroría de Estímulo de Relatos Regionales en 2019.', '2021-08-16', 'Labateca', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ruta_imagen` varchar(400) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `tipo_documento`, `documento`, `correo`, `contrasena`, `rol`, `imagen`, `ruta_imagen`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(1, 'edyson', 'leal', 1, '1234', 'edyson@gmail.com', '1234', 1, NULL, NULL, '2021-08-01', NULL, 1),
(13, 'Shadia', 'Ochoa', 1, '123', 'shadia@gmail.com', '123', 2, NULL, NULL, '2021-10-11', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`id`, `tipo`, `nombre`, `telefono`, `email`, `descripcion`, `estado`) VALUES
(1, 1, 'prueba', '333333', 'edysonleal3@gmail.com', 'Me obligaron a robar perros', 1),
(2, 2, 'ppppp', '333333', 'edyson@gmail.com', 'holis la pa tofo', 1),
(3, 1, 'edyson leal', '3508927334', 'edyson@gmail.com', 'prueba de pqrs', 1),
(4, 1, 'edyson leal', '109999', 'edyson@gmail.com', 'lkdkkdkd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`id`, `nombre`, `fecha_hora`) VALUES
(22, 'Amanecer perro', '2021-10-10 17:51:00'),
(23, 'Buenos dias sol', '2021-10-11 05:00:00'),
(24, 'hooa alkjsdklnaklcs', '2021-10-12 23:37:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Locutor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `identificacion`, `fecha`, `ip`) VALUES
(1, '1234', '2021-10-12 20:39:17', '::1'),
(2, '1234', '2021-10-12 22:18:31', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `descripcion`) VALUES
(1, 'Cedula de ciudadania'),
(4, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pqrs`
--

CREATE TABLE `tipo_pqrs` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_pqrs`
--

INSERT INTO `tipo_pqrs` (`id`, `descripcion`) VALUES
(1, 'Petición'),
(2, 'Queja'),
(3, 'Reclamo'),
(4, 'Sugerencia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_pqrs`
--
ALTER TABLE `tipo_pqrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_pqrs`
--
ALTER TABLE `tipo_pqrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`tipo_documento`) REFERENCES `tipo_documento` (`id`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD CONSTRAINT `pqrs_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_pqrs` (`id`);

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `sesion_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `persona` (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
