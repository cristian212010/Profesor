-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2023 a las 03:33:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadisticas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campers`
--

CREATE TABLE `campers` (
  `id` int(11) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `promedio` int(11) NOT NULL,
  `nivelCAmpus` varchar(30) NOT NULL,
  `nivelIngles` varchar(30) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `ingles` float NOT NULL,
  `Ser` float NOT NULL,
  `Review` float NOT NULL,
  `Skills` float NOT NULL,
  `Asitencia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `campers`
--

INSERT INTO `campers` (`id`, `imagen`, `nombre`, `edad`, `promedio`, `nivelCAmpus`, `nivelIngles`, `especialidad`, `direccion`, `celular`, `ingles`, `Ser`, `Review`, `Skills`, `Asitencia`) VALUES
(1, 'rinconC.jpg', 'Andres Santiago Rincón Diaz', 19, 5, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 2.8, 3, 2.5, 3, 4.8),
(2, 'camper-anonimo2.jpg', 'Angela Gomez Lizarazo', 20, 4, 'intermedio', 'middle', 'backEnd', 'Calle 5 # 28-35', '3154317110', 1, 1, 1, 1, 1),
(3, 'camiloC.jpg', 'Camilo Andres Caballero', 22, 4, 'intermedio', 'advanced', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 4.8, 3.5, 4.5, 3.2, 3.2),
(4, 'Edwing.jpg', 'Edwing Stiven Mejia Saenz', 19, 4, 'intermedio', 'middle', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 4, 4, 4.5, 3.9, 4.8),
(5, 'esteban.jpeg', 'Esteban Dario Ruiz Paredes', 19, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 4.5, 3, 4.8, 3, 5),
(6, 'jairo.jpg', 'Jairo Alonso Cardenas Blanco', 17, 4, 'intermedio', 'advanced', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 3.2, 3.2, 4.5, 3, 4.8),
(7, 'javierAndresNunez.jpeg', 'Javier Andres Nuñez Sanchez', 17, 3, 'intermedio', 'advanced', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 4, 4.5, 3.8, 4.8),
(8, 'pabon.jpg', 'Jhon Fredy Pabon Bolaño', 19, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.2, 3.8, 4.5, 3.4, 4.8),
(9, 'joel.jpg', 'Joel Santiago Abril Gelvez', 18, 4, 'intermedio', 'beginner', 'fullStack', 'Calle 5 # 28-35', '3154317110', 3.8, 4.5, 5, 3.8, 5),
(10, 'camper-anonimo1.jpg', 'Johan Arley Florez Duran', 21, 3, 'intermedio', 'advanced', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.2, 3, 3.5, 3.2, 3.8),
(11, 'jose.jpeg', 'Jose Arley Pabon Celis', 22, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 4.5, 4, 3.5, 4.8, 3),
(12, 'sepulveda.jpg', 'Juan David Sepulveda Rojas', 18, 4, 'intermedio', 'middle', 'fullStack', 'Calle 5 # 28-35', '3154317110', 3, 3, 3.5, 4, 4.8),
(13, 'juan.jpeg', 'Juan Jose Lizarazo Lopez', 21, 4, 'intermedio', 'advanced', 'fullStack', 'Calle 5 # 28-35', '3154317110', 3.2, 3, 3.5, 3, 3),
(14, 'villamizar.jpg', 'Juan Jose Villamizar Santander', 23, 4, 'intermedio', 'beginner', 'fullStack', 'Calle 5 # 28-35', '3154317110', 3.8, 3, 2.5, 3.8, 4.8),
(15, 'julianV.jpg', 'Julian Vega Blanco', 16, 3, 'intermedio', 'middle', 'backEnd', 'Calle 5 # 28-35', '3154317110', 4.8, 3, 4.5, 4, 3.8),
(16, 'justin.jpg', 'Justin Andres Corredor Garcia', 24, 4, 'intermedio', 'advanced', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 3.5, 2.5, 3, 3),
(17, 'maicol.jpg', 'Maicol David Estrada León', 25, 5, 'intermedio', 'middle', 'fullStack', 'Calle 5 # 28-35', '3154317110', 2, 2, 3, 2.5, 5),
(18, 'marcela.jpg', 'Marcela Esperanza Betancourt Perenguez', 35, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 32 # 49-74', '3154317110', 3.8, 4.8, 4.5, 4, 3.8),
(19, 'camper-anonimo3.jpg', 'Mateo Gomez Sepulveda', 21, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 3, 2.5, 3.8, 2),
(20, 'camiloO.jpg', 'Neider Camilo Orozco Pereira', 25, 0, 'intermedio', 'advanced', 'fullStack', 'Calle 5 # 28-35', '3154317110', 3.8, 4.5, 4.5, 4, 4.8),
(21, 'machado.jpg', 'Nicolas Machado Capacho', 19, 4, 'intermedio', 'middle', 'backEnd', 'Calle 5 # 28-35', '3154317110', 4.9, 4.8, 4, 3.8, 4.8),
(22, 'costeño.jpg', 'Phidolly Isaias Ojeda Blanco', 17, 5, 'intermedio', 'advanced', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 4, 4.8, 4.5, 4.8),
(24, 'ricardo.jpg', 'Ricardo Andrés Franco Quintero', 17, 4, 'intermedio', 'middle', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 4.5, 4.5, 4.8, 4.5, 5),
(25, 'issac.jpg', 'Santiago Isaac Duran Alvarado', 17, 4, 'intermedio', 'beginner', 'backEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 3, 2.5, 3, 4.8),
(26, 'zuluaga.jpg', 'Sebastian Andres Zuluaga Salgado', 18, 4, 'intermedio', 'middle', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 4.8, 4, 4.5, 4, 4.8),
(28, 'sergio.jpg', 'Sergio Alejandro Rodriguez Prada', 19, 5, 'intermedio', 'advanced', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 3.8, 3.5, 4.8, 4, 4.8),
(29, 'valentinaN.jpg', 'Valentina Navarro Pacheco', 17, 5, 'intermedio', 'advanced', 'frontEnd', 'Calle 5 # 28-35', '3154317110', 5, 2, 3, 4, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campers`
--
ALTER TABLE `campers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
