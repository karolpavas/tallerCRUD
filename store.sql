-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 06:20:25
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

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
(20, 'Chunky Cachorros X 18 Kg', 'INGREDIENTES: Arroz, pollo, harina de pollo, maíz, salvado de trigo, yuca, aceite de pollo, hidrolizado de hígado de pollo, semilla de lino, cloruro de sodio, carbonato de calcio, fosfato dicálcico, cloruro de potasio, manano-oligosacáridos de la (no-GM) saccharomyces cerevisiae, cloruro de colina, hierro quelado, sulfato ferroso, hidroxicloruro de zinc, zinc quelado, beta-glucanos, selenio quelado, cobre básico cloruro, cobre quelado, yodato de calcio, hidroxicloruro de manganeso, manganeso quelado, selenito de sodio, vitamina E tocoferol acetato, vitamina B3 niacinamida, vitamina B5, vitamina A retinol, vitamina H biotina, vitamina B2 riboflavina, vitamina K3 menadiona, vitamina B12 cianocobalamina, vitamina B1 tiamina, vitamina B6 piridoxina, vitamina D3 colecalciferol, vitamina B9 ácido fólico, sales de ácido propiónico, tocoferoles, aceite de romero, ácido cítrico.                                                                ', 'uploads/1641778259.webp', 10000, 16850, 10),
(24, 'Revolution - Perros Y Gatos De Hasta 2.5 Kg.', 'Antiparasitario y Antipulgas para perros y gatos de hasta 2.5 Kg de peso que se aplica para prevenir y proteger al animal de las infestaciones con pulgas, garrapatas, dirofilariasis o gusano del corazón, parásitos intestinales y ácaros auriculares. ', 'uploads/1641788082_Revolution_-_Perros_Y_Gatos_De_Hasta_2.5_Kg..jpg', 27787, 29421, 25),
(25, 'Juguete Hurley', 'Juguete hurley azul, verde, naranja, este hueso clásico es una alternativa más segura a los palos de madera y es mejor para los perros a los que les encanta roer y jugar a buscar (especialmente en el agua). hecho de nuestro material zogoflex® hinchable y flotante, hurley es extremadamente duradero. el diseño clásico de hurley facilita que los perros lo lleven en la boca, mientras que sus colores brillantes hacen que hurley sea fácil de detectar en interiores o exteriores. ', 'uploads/1641788453_Juguete_Hurley.PNG', 36550, 43000, 100),
(26, 'Juguete Barril Treat Pod.', 'Juguete barril treat pod l, En este juguete se juntan tres distintas características: masticar, jugar y premiar. puedes ponerle algunos premios en el interior y dárselo, incentivando así su capacidad de resolución de problemas para que pueda descubrir la mejor y más sencilla manera de ganarse todos los premios jugando. ', 'uploads/1641788521_Juguete_Barril_Treat_Pod..png', 58000, 68000, 200),
(27, 'Kong - Sports Balls Pelota', 'Las KONG sports balls pelotas x 3 unidades, son mejores que una pelota de tenis, son más fuerte y seguras, rebota fácilmente para robustos juegos de buscar y recoger, sin chirriador. Lánzalas y mira cómo tu perro se vuelve loco con estas resistentes pelotas saltarinas. ', 'uploads/1641788578_Kong_-_Sports_Balls_Pelota.png', 16090, 19200, 300),
(28, 'Smartbones Mantequilla De Maní Mini X 8 Unidades', 'Smartbones mantequilla de maní mini x 8 unidades, Premio para perros en forma de hueso pequeño con sabor irresistible. contiene mantequilla de maní, pollo y verduras. ', 'uploads/1641788649_Smartbones_Mantequilla_De_Maní_Mini_X_8_Unidades.jpg', 11900, 14000, 1000),
(29, 'Smartsticks Mantequilla De Maní X 5 Unidades', 'Smartsticks mantequilla de maní x 5 unidades, Premio para perros en forma de hueso pequeño con sabor irresistible. contiene mantequilla de maní, pollo y verduras. ', 'uploads/1641788708_Smartsticks_Mantequilla_De_Maní_X_5_Unidades.jpg', 11390, 14000, 6580),
(30, 'Panchos Kitchen - Ragú De Carne , Hígado Y Remolacha.', 'Alimento 100% natural cocido parra perros ragú de carne , hígado y remolacha. Esta deliciosa mezcla de carne, corazón, hígado y remolacha cargado de antioxidantes y tiene altos niveles de proteína para tu perro. Esta receta ayuda a darle a su perro los nutrientes esenciales que necesita para combatir enfermedades, promover una función corporal saludable y mantener a su perro más saludable por más tiempo para todas razas de perros. La alimentación saludable mantiene a su mascota fuera del veterinario! (Lo siento doctor). ', 'uploads/1641788776_Panchos_Kitchen_-_Ragú_De_Carne_,_Hígado_Y_Remolacha..png', 12720, 14690, 100),
(31, 'Natural Toys Oreja de Cerdo', 'Oreja de Cerdo Deshidratada que conserva su sabor natural, son masticables, se van volviendo blandas a medida que la mascota las mastica. Suplemento alimenticio para suministrar a perros a partir de los 3 meses de edad, de todos los tamaños y de todas las razas. Ayuda al cuidado de sus dientes! ', 'uploads/1641788862_Natural_Toys_Oreja_de_Cerdo.jpg', 8041, 9500, 125329621),
(32, 'Ringo Premium', 'Ringo premium, Es un alimento crocante con excelente textura y sabor a carne que garantiza un adecuado consumo. ofrece beneficios como: un apropiado balance de ácidos grasos omega 3 y 6, piel y pelo sanos, prebióticos. ', 'uploads/1641788946_Ringo_Premium.png', 126500, 138956, 2147483647),
(34, 'Br For Dog Wild Adulto', 'Br for dog wild adulto, Es un alimento completo para perros adultos de todas las razas. ', 'uploads/1641789082_Br_For_Dog_Wild_Adulto.jpg', 60500, 71500, 5566),
(35, 'Equilibrio Razas Pequeñas Adulto', 'Equilibrio razas pequeñas adulto, Alimento completo para perros de razas pequeñas en la fase adulta. perros adultos a partir de 10 meses de vida. mejor absorción de los nutrientes perfecta combinación de ingredientes, mejor tránsito intestinal, provee prebióticos y probióticos activos, una vida más larga y saludable con la acción de antioxidantes naturales. ', 'uploads/1641789144_Equilibrio_Razas_Pequeñas_Adulto.jpg', 12000, 15800, 45632),
(36, 'DOGOURMET CACHORROS 3 CEREALES', 'DOGOURMET CACHORROS 3 CEREALES Deliciosa receta para los primeros 12 meses de tu cachorro ', 'uploads/1641789202_DOGOURMET_CACHORROS_3_CEREALES.png', 15800, 18000, 2147483647);

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`) VALUES
(5, 'karitol linda', 'karol@gmail.com', '$2y$10$w9OUeQe2HmBe3SnX6M4nKeMcYLjM/m1cB8IAtWG8ZquTVkqOhIlfK'),
(6, 'david pavas ', 'davidito@gmail.com', '$2y$10$0K2hkYuqx7XAFgLAMys.tePNXLi.iFjvdWNB2gZIr0HB2giMZNpdO');

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
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
