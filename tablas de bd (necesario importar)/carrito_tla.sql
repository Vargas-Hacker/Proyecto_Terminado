-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 18:00:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito_tla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

CREATE TABLE `comidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id`, `nombre`, `descripcion`, `img`, `precio`) VALUES
(1, 'Tacos', 'El favorito de todos son los deliciosos tacos que cuentan con una gran variedad de carnes y estilos.', 'tacos.jpg', 120),
(2, 'Flautas', 'Otro grande del restaurante. Son acompañadas con crema, queso, verduras y usted las acompaña con lo que guste.', 'flautas.jpg', 120),
(3, 'Gringas', 'Esto es llevar las quesadillas a otro nivel. Consiste en una simple tortilla de harina rellena con mucho queso y carne. ', 'gringa.jpg', 130);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas2`
--

CREATE TABLE `comidas2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidas2`
--

INSERT INTO `comidas2` (`id`, `nombre`, `descripcion`, `img`, `precio`) VALUES
(7, 'Mole', 'Sin duda alguna ninguno se puede negar a esta maravillosa combinación de sabores. Una gran porción de pollo con mole.', 'mole.jpg', 500),
(8, 'Chiles en Nogada', 'Un platillo bastante exótico que cuenta con un sin fin de ingredientes. Seria un pecado visitar el lugar y no dar una probadita de estos chiles.', 'chilesn.jpg', 345),
(9, 'Huaraches', 'Comida riquísima, el huarache va relleno de frijol. Totalmente un platillo sencillo pero sabroso que saciara tu hambre seguramente.', 'huarache.jpg', 420);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas3`
--

CREATE TABLE `comidas3` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidas3`
--

INSERT INTO `comidas3` (`id`, `nombre`, `descripcion`, `img`, `precio`) VALUES
(10, 'Hot Dogs', 'La estrella del establecimiento que a todo el mundo le encanta. Una explosión de sabores para tu paladar que vale la pena experimentar', 'hotdog.jpg', 90),
(11, 'Papas con Queso', 'Probablemente luzca como algo sencillo pero muy efectivo para combatir el hambre de sus clientes', 'papasq.jpg', 60),
(12, 'Nachos', 'Este es uno que todos se saben, funciona como un gran acompañante para tu gran platillo fuerte', 'nachos.png', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas4`
--

CREATE TABLE `comidas4` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidas4`
--

INSERT INTO `comidas4` (`id`, `nombre`, `descripcion`, `img`, `precio`) VALUES
(13, 'Tamales', 'Cuentan con ricos tamales calientitos; de rojo, de verde, rajas y dulce. Sin opciones no te vas a quedar (El precio establecido es por pieza).', 'tamal.jpg', 12),
(14, 'Menudo', 'Un gran plato de menudo calientito que esta bien acompañado con ricas piezas de pan tostado con mantequilla y especia.', 'menudo.jpg', 110),
(15, 'Desayuno', 'Por si no te quieres perder la comida mas importante del día, puedes disfrutar de unos ricos huevos, frijoles y unos cuantos extras.', 'desayuno.jpg', 80);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comidas2`
--
ALTER TABLE `comidas2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comidas3`
--
ALTER TABLE `comidas3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comidas4`
--
ALTER TABLE `comidas4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comidas`
--
ALTER TABLE `comidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comidas2`
--
ALTER TABLE `comidas2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comidas3`
--
ALTER TABLE `comidas3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comidas4`
--
ALTER TABLE `comidas4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
