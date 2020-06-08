-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2020 a las 05:27:35
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domingo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `idContenido` int(11) NOT NULL,
  `idPelicula` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tarjeta` bigint(20) NOT NULL,
  `fechaEx` date NOT NULL,
  `contrasenia` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idCuenta` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `Titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` longblob NOT NULL,
  `Duracion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `idGenero` int(11) NOT NULL,
  `Clasificacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Sinopsis` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idioma` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `idContenido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `idSerie` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Temporada` int(11) NOT NULL,
  `Capitulo` int(11) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Clasificacion` varchar(10) NOT NULL,
  `sinopsis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`idSerie`, `Titulo`, `Imagen`, `Temporada`, `Capitulo`, `Genero`, `idCategoria`, `Clasificacion`, `sinopsis`) VALUES
(1, 'After Life', 'after_life.jpg', 5, 7, 'accion', 1, 'B', 'Después de un terrible accidente, una mujer despierta para descubrir que el director de una funerari'),
(2, 'Mavel: Agents of shield', 'agents_shield.jpg', 6, 11, 'Accion', 1, 'B', 'Después del ataque de los Chitauri a la Tierra, el resucitado agente Phil Coulson forma un equipo de'),
(3, 'Altered Carbon', 'altered_carbon.jpg', 2, 4, 'Drama', 3, 'C', 'Muestra una visión distópica del futuro, en el que grandes avances tecnológicos'),
(4, 'Billions', 'billions.jpg', 5, 8, 'Drama', 3, 'C', 'En el mundo de las altas finanzas, nada es lo que parece.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`idContenido`),
  ADD KEY `fk_contenido_pelicula1_idx` (`idPelicula`),
  ADD KEY `fk_contenido_serie1_idx` (`idSerie`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `fk_perfil_cuenta_idx` (`idCuenta`),
  ADD KEY `fk_perfil_contenido1_idx` (`idContenido`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`idSerie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `idContenido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `fk_contenido_pelicula1` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`idPelicula`),
  ADD CONSTRAINT `fk_contenido_serie1` FOREIGN KEY (`idSerie`) REFERENCES `serie` (`idSerie`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `fk_perfil_contenido1` FOREIGN KEY (`idContenido`) REFERENCES `contenido` (`idContenido`),
  ADD CONSTRAINT `fk_perfil_cuenta` FOREIGN KEY (`idCuenta`) REFERENCES `cuenta` (`idCuenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
