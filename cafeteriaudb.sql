-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 01:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteriaudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estadopedido`
--

CREATE TABLE `estadopedido` (
  `IdEstadoPedido` int(11) NOT NULL,
  `tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `IdLocal` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `Horario` time DEFAULT NULL,
  `HoraCierre` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `IdPedido` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `esReserva` bit(1) NOT NULL DEFAULT b'0',
  `fechaPedido` date DEFAULT NULL,
  `horaPedido` time DEFAULT NULL,
  `IdEstadoPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `carnet` varchar(100) DEFAULT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `productos_disponibles` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombres`, `apellidos`, `carnet`, `fecha_reserva`, `productos_disponibles`) VALUES
(41, 'Cristian', 'Gonzalez', 'GG222955', '2024-04-28', 'Pollo con vegetales , Pasta de camarones, '),
(42, 'Dania', 'Campos', 'TC232020', '2024-04-28', 'Pollo con vegetales , Nuegados en miel, '),
(43, 'Zank', 'Azael', 'CM232140', '2024-04-28', 'Pasta de camarones, Waffles, '),
(44, 'Kathy', 'Avila', 'MC235698', '2024-04-28', 'Pasta de camarones, Ensalada Cesar, '),
(45, 'Ricardo', 'Gonzalez', 'GG264589', '2024-04-28', 'Pasta de camarones, Nuegados en miel, '),
(47, 'cristian', 'gonzalez', 'gg222955', '2024-05-04', 'Nuegados en miel, messi , ');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `imagen` decimal(10,4) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `descripcion` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `imagen`, `categoria`, `descripcion`, `precio`) VALUES
(25, 'Pollo con vegetales ', 'https://www.comedera.com/wp-content/uploads/2018/04/stir-fry-chicken-sweet-peppers-and-green-beans.jpg', 'Verduras', ': El pollo con vegetales es un plato versátil y saludable.', 3.25),
(26, 'Pasta de camarones', 'https://es.cravingsjournal.com/wp-content/uploads/2020/07/pasta-con-camarones-y-limo%CC%81n-3.jpg', 'Proteínas', 'La pasta de camarones se puede servir sola o acompañada', 3.50),
(27, 'Ensalada Cesar', 'https://veritable.cl/wp-content/uploads/2023/05/ensalada-cesar1.jpg', 'Verduras', 'plato clásico y sabroso que combina ingredientes frescos y sabrosos.', 2.50),
(28, 'Waffles', 'https://cravinghomecooked.com/wp-content/uploads/2019/02/easy-waffle-recipe-1-16.jpg', 'Frutas', 'Están hechos con una masa a base de harina, huevos, leche y mantequilla.', 1.25),
(29, 'Yogur con avena y frutas', 'https://i.blogs.es/bc846b/650_1000_177227310/450_1000.jpg', 'Frutas', 'El yogur con avena y frutas es una combinación deliciosa y nutritiva.', 1.00),
(30, 'Nuegados en miel', 'https://elclasificado.com/photos/5e/ce/5ece04bf84124f7bacff07f6a9412fe3/l.jpg', 'Snack', 'Antojito de la tarde echos de yuca molida frito.', 0.50),
(36, 'Pollo con vegetales ', 'https://www.comedera.com/wp-content/uploads/2018/04/stir-fry-chicken-sweet-peppers-and-green-beans.jpg', 'Frutas', 'sdfg', 4.25);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`IdRol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'docente'),
(3, 'estudiante');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `idRol` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `nombres`, `apellidos`, `correo`, `contrasenia`, `idRol`) VALUES
(1, 'administrador', 'admin', 'admin@admin.com', 'admin', 1),
(14, 'Profesor', 'Profesor', 'docente@docente.com', 'docente', 2),
(15, 'Cristian', 'Gonzalez', 'cristian@gmail.com', '1234', 3),
(16, 'Gorety', 'Campos', 'gorety@gmail.com', '1234', 3),
(17, 'Franly', 'Marroquin', 'franly@gmail.com', '1234', 3),
(18, 'Katy', 'Flores', 'katy@gmail.com', '1234', 3),
(19, 'Sergio', 'Monti', 'sergio@gmail.com', '1234', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`),
  ADD KEY `IdRol` (`IdRol`);

--
-- Indexes for table `estadopedido`
--
ALTER TABLE `estadopedido`
  ADD PRIMARY KEY (`IdEstadoPedido`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`IdLocal`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`IdPedido`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdProducto` (`IdProducto`),
  ADD KEY `IdEstadoPedido` (`IdEstadoPedido`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdLocal` (`categoria`),
  ADD KEY `IdCategoria` (`precio`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estadopedido`
--
ALTER TABLE `estadopedido`
  MODIFY `IdEstadoPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `IdLocal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `IdPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`);

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`Id`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`IdEstadoPedido`) REFERENCES `estadopedido` (`IdEstadoPedido`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `local` (`IdLocal`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`precio`) REFERENCES `categoria` (`IdCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
