-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 02:48:03
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `purchase_price` int(11) NOT NULL DEFAULT 0,
  `sale_price` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `image`, `purchase_price`, `sale_price`, `stock`) VALUES
(20, 'Chunky Cachorros X 18 Kg', 'INGREDIENTES: Arroz, pollo, harina de pollo, maíz, salvado de trigo, yuca, aceite de pollo, hidrolizado de hígado de pollo, semilla de lino, cloruro de sodio, carbonato de calcio, fosfato dicálcico, cloruro de potasio, manano-oligosacáridos de la (no-GM) saccharomyces cerevisiae, cloruro de colina, hierro quelado, sulfato ferroso, hidroxicloruro de zinc, zinc quelado, beta-glucanos, selenio quelado, cobre básico cloruro, cobre quelado, yodato de calcio, hidroxicloruro de manganeso, manganeso quelado, selenito de sodio, vitamina E tocoferol acetato, vitamina B3 niacinamida, vitamina B5, vitamina A retinol, vitamina H biotina, vitamina B2 riboflavina, vitamina K3 menadiona, vitamina B12 cianocobalamina, vitamina B1 tiamina, vitamina B6 piridoxina, vitamina D3 colecalciferol, vitamina B9 ácido fólico, sales de ácido propiónico, tocoferoles, aceite de romero, ácido cítrico.                                                                ', 'uploads/1641778259.webp', 135000, 160000, 10),
(21, 'Alimento para perro - Hills Canino K/D Estofado 12.5 Oz', 'filtrar residuos y toxinas de la sangre y mantener el equilibrio normal de líquidos y minerales en el cuerpo. A medida que las mascotas envejecen, puede dañar los tejidos del riñón. Este proceso es irreversible y conducirá a una mayor pérdida de la función renal. Los perros renales también pueden experimentar pérdida de apetito y su ingesta calórica puede disminuir, lo que puede conducir a la pérdida de masa muscular. Los nutricionistas y veterinarios de Hill desarrollaron Prescription Diet® k / d®, nutrición clínica para apoyar la salud de los riñones de su perro. De hecho, la nutrición de Prescription Diet® k / d® está clínicamente probada para mejorar y alargar la calidad de vida.', 'uploads/1641778250.png', 16300, 19300, 25),
(23, 'Prueba', '', 'uploads/1641778712_Prueba.png', 130000, 150000, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
