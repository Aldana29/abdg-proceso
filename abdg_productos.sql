-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2019 a las 04:51:06
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
-- Base de datos: `abdg_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kits_imprimibles`
--

CREATE TABLE `kits_imprimibles` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `bajada` varchar(150) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` int(5) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `kits_imprimibles`
--

INSERT INTO `kits_imprimibles` (`id_producto`, `nombre`, `bajada`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Oso Aviador', 'Kit imprimible candy bar y deco', 'El kit incluye todo lo necesario para armar tu mesa de candy bar y decorar todos los rincones de tu casa o salón de fiestas.', 340, NULL),
(2, 'Corona Lima & Violeta', 'Kit imprimible candy bar y deco', 'El kit incluye todo lo necesario para armar tu mesa de candy bar y decorar todos los rincones de tu casa o salón de fiestas.', 340, NULL),
(3, 'Corazones vintage Románticos', 'Stickers decorativos para envase corazón', 'El kit incluye dos diseños de stickers con forma de corazón para que personalices tus souvenirs.', 120, NULL),
(4, 'Pajaritos y Flores', 'Invitaciones & Estampitas', 'Kit imprimible de invitaciones y estampitas  que te permite imprimir la cantidad que necesites. Ideales para bautismo y primera comunión.', 100, NULL),
(5, 'Angelito Celeste', 'Invitaciones & Estampitas', 'Kit imprimible de invitaciones y estampitas que te permite imprimir la cantidad que necesites. Ideales para bautismo y primera comunión.', 100, NULL),
(6, 'Spiderman', 'Kit imprimible candy bar y deco', 'El kit incluye todo lo necesario para armar tu mesa de candy bar y decorar todos los rincones de tu casa o salón de fiestas.', 340, NULL),
(7, 'Baby Animals', 'Láminas decorativas personalizadas', 'Lámina de bienvenida para tu bebé. Ideal para colgar en la clínica/sanatorio y después colocar en su habitación como un detalle especial.', 190, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `kits_imprimibles`
--
ALTER TABLE `kits_imprimibles`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `kits_imprimibles`
--
ALTER TABLE `kits_imprimibles`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
