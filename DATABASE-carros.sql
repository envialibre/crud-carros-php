-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-03-2024 a las 18:28:27
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `year`, `price`) VALUES
(2, 'Toyota', 'Corolla', 2020, 25000000),
(3, 'Honda', 'Civic', 2019, 22000000),
(4, 'Ford', 'Mustang', 2021, 35000000),
(5, 'Chevrolet', 'Camaro', 2018, 30000000),
(6, 'Volkswagen', 'Golf', 2017, 18000000),
(7, 'BMW', 'Serie 3', 2022, 40000000),
(8, 'Mercedes-Benz', 'Clase C', 2019, 38000000),
(9, 'Audi', 'A4', 2020, 42000000),
(10, 'Nissan', 'Altima', 2018, 26000000),
(12, 'Kia', 'Optima', 2019, 23000000),
(13, 'Mazda', 'Mazda3', 2020, 24000000),
(14, 'Chevrolet', 'Captiva', 2022, 150000000),
(15, 'Mercedes Benz', 'AMG', 2424, 320000000),
(16, 'Mercedes Benz222', 'AMG', 2424, 320000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
