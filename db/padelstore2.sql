-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 10:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padelstore2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `Id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`Id`, `nombre`) VALUES
(1, 'Palas'),
(2, 'Pelotas'),
(3, 'Ropa'),
(4, 'Accesorios');

-- --------------------------------------------------------

--
-- Table structure for table `comandas`
--

CREATE TABLE `comandas` (
  `Id` int(10) NOT NULL,
  `data` varchar(10) NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(10) NOT NULL,
  `importe_total` float(6,2) NOT NULL,
  `total_elementos` int(10) NOT NULL,
  `cerrada` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `linea_de_comandas`
--

CREATE TABLE `linea_de_comandas` (
  `Id` int(10) NOT NULL,
  `comanda_id` int(10) NOT NULL,
  `productos_id` int(10) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Id` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `categoria_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`Id`, `nombre`, `precio`, `descripcion`, `foto`, `categoria_id`) VALUES
(1, 'Pala Head', 149.99, 'Pala head de hombre', '/public/images/products/pala1.jpg', 1),
(2, 'Pelota head', 6.99, '3 pelotas head pro', '/public/images/products/PELOTASPADELPRO.png', 2),
(3, 'Camiseta wpt', 49.99, 'Camiseta head de los torenos wpt', '/public/images/products/camiseta1.jpg', 3),
(4, 'Muñequera', 12.99, 'Muñequera wilson', '/public/images/products/muñequera1.jpg', 4),
(5, 'Pala Babolat', 159.99, 'Pala babolat para hombre competicion', '/public/images/products/pala2.jpg', 1),
(6, 'Pala Bullpadel', 139.99, 'Pala bullpadel para mujer competicion', '/public/images/products/pala3.jpg', 1),
(7, 'Pala Wilson', 149.99, 'Pala wilson para  competicion', '/public/images/products/pala4.jpg', 1),
(8, 'Pala Z ultimate', 119.99, 'Pala Z ultimate', '/public/images/products/pala5.jpg', 1),
(9, 'Pala Z roja', 139.99, 'Pala wilson para  roja de competicion', '/public/images/products/pala6.jpg', 1),
(10, 'Pala Adidas', 199.99, 'Pala Adidas de competicion', '/public/images/products/pala7.jpg', 1),
(11, 'calcetines', 19.99, 'calcetines Adidas de competicion', '/public/images/products/calcetines1.jpg', 3),
(12, 'calcetines pack', 29.99, 'calcetines Adidas pack de 3 de competicion', '/public/images/products/calcetines2.jpg', 3),
(13, 'Zapatillas clasicas', 39.99, 'Zapatillas clasicas de competicion', '/public/images/products/zapatilla1.jpg', 3),
(14, 'Zapatillas clasicas modelo X', 59.99, 'Zapatillas clasicas de competicion modelo x', '/public/images/products/zapatilla2.jpg', 3),
(15, 'Zapatillas clasicas ultimate', 69.99, 'Zapatillas clasicas de competicion ultimate', '/public/images/products/zapatilla3.jpg', 3),
(16, 'Gorra negra sin capa', 19.99, 'Gorra negra sin capa verano', '/public/images/products/gorra1.jpg', 4),
(18, 'Gorra naranja', 29.99, 'Gorra naranja  verano', '/public/images/products/gorra2.jpg', 4),
(19, 'Pelota Wilson', 19.99, 'Pelotas wilson', '/public/images/products/pelota2.jpg', 2),
(20, 'Pelota Wilson rojas', 29.99, 'Pelotas wilson rojas', '/public/images/products/pelota3.jpg', 2),
(21, 'Pelota Wilson pack de 3', 39.99, 'Pelotas wilson paquete de 3', '/public/images/products/pelota4.jpg', 2),
(22, 'Pelota Wilson pack de 3 ultimate', 49.99, 'Pelotas wilson paquete de 3 ultimate', '/public/images/products/pelota5.jpg', 2),
(23, 'Protector basico', 9.99, 'Protector basico', '/public/images/products/protector1.jpg', 4),
(24, 'Protector basico de colores', 11.99, 'Protector basico de colores ', '/public/images/products/protector2.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `poblacion` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comandas`
--
ALTER TABLE `comandas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `comanda_usuario` (`usuario_id`);

--
-- Indexes for table `linea_de_comandas`
--
ALTER TABLE `linea_de_comandas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `lineacomanda_comanda` (`comanda_id`),
  ADD KEY `lineacomanda_productos` (`productos_id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `producto_categoria` (`categoria_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comandas`
--
ALTER TABLE `comandas`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `linea_de_comandas`
--
ALTER TABLE `linea_de_comandas`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comandas`
--
ALTER TABLE `comandas`
  ADD CONSTRAINT `comanda_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`Id`);

--
-- Constraints for table `linea_de_comandas`
--
ALTER TABLE `linea_de_comandas`
  ADD CONSTRAINT `linea_de_comandas_ibfk_1` FOREIGN KEY (`comanda_id`) REFERENCES `comandas` (`Id`) ON DELETE CASCADE;

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `productos` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
