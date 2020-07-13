-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2020 a las 05:06:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alejandro_jimenez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `descripcion_categoria`) VALUES
(100, 'Escritorio'),
(101, 'Notebook'),
(102, 'Mouse'),
(103, 'Auriculares'),
(104, 'Teclado'),
(105, 'Monitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_mensaje` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  `archivado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_mensaje`, `nombre`, `apellido`, `telefono`, `email`, `asunto`, `mensaje`, `archivado`) VALUES
(2, 'Alejandro Andrés', 'Perales', 322500010, 'alejimpe@gmail.com', 'loque sea', 'esto es una demo', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio_costo` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO',
  `info` varchar(150) NOT NULL DEFAULT 'Ninguna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `categoria_id`, `imagen`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `eliminado`, `info`) VALUES
(1, 'Notebook HP 240 G7 14\" Core i3 7020U 4GB 1TB Free DOS', 101, 'assets/img/productos/FormasPago-01.jpg', 53000.00, 60000.00, 10, 5, 'SI', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(2, 'Notebook Lenovo IP S145 15.6\" Core i3-1005G1 4GB 1TB Win 10', 101, 'assets/img/productos/notebook-lenovo2.jpg', 56890.00, 60000.00, 10, 5, 'SI', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(6, 'Combo Thermaltake KNUCKER 4 IN 1 GAMING KIT', 104, 'assets/img/productos/KB-GCK-PLBLSP-01_Foto0.jpg', 4000.00, 7200.00, 0, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS)'),
(7, 'Combo de Teclado y Mouse Thermaltake Commander', 104, 'assets/img/productos/KB-CMC-PLBLUS-01_Foto0.jpg', 4000.00, 5300.00, 18, 3, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(8, 'Teclado Mecánico Gigabyte AORUS K7', 104, 'assets/img/productos/Gigabyte-AORUS-K7_Foto0.jpg', 9000.00, 13500.00, 40, 10, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(9, 'Auriculares con Micrófono Genius HS-610 - Rojo', 103, 'assets/img/productos/Genius-HS-610-Red_Foto0.jpg', 2000.00, 4410.00, 0, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(10, 'Auriculares con Micrófono Genius HS-935BT - Bluetooth - Blanco', 103, 'assets/img/productos/Genius-HS-935BT-Blanco_Foto0.', 3000.00, 4680.00, 5, 3, 'SI', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(11, 'Auriculares con Micrófono Genius HS-935BT - Bluetooth - Rojo', 103, 'assets/img/productos/foto1.jpg', 3500.00, 4680.00, 8, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(12, 'Auriculares con Micrófono Genius HS-935BT - Bluetooth - Blanco', 103, 'assets/img/productos/foto2.jpg', 3500.00, 4680.00, 10, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(13, 'Computadora Gamer CS Force i3', 100, 'assets/img/productos/CS-Apollo-i3_Foto0.jpg', 52300.00, 73350.00, 4, 2, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(14, 'Computadora Gamer CS Force i5', 100, 'assets/img/productos/CS-Apollo-i5_Foto0.jpg', 45990.00, 82260.00, 2, 1, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(15, 'Computadora Gamer CS Force i7', 100, 'assets/img/productos/CS-Artemis-i7_Foto0.jpg', 72990.00, 100350.00, 2, 1, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(16, 'Computadora Gamer CS Ares i5', 100, 'assets/img/productos/CS-Ares-i5_Foto0.jpg', 75990.00, 107550.00, 1, 1, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(18, 'Mouse Logitech Wireless M317 Negro', 102, 'assets/img/productos/Logitech-M317-Black_Foto0.jpg', 1000.00, 2070.00, 40, 10, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(19, 'Mouse Logitech Wireless M317 Cristal White', 102, 'assets/img/productos/Logitech-M317-White_Foto0.jpg', 1050.00, 2070.00, 20, 10, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(20, 'Mouse Logitech Wireless M185 Gris Oscuro', 102, 'assets/img/productos/Logitech-M185_Foto0.jpg', 1260.00, 799.00, 20, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(21, 'Mini Mouse Logitech Wireless M187 Negro', 102, 'assets/img/productos/Logitech-M187_Foto0.jpg', 1440.00, 799.00, 40, 10, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(22, 'Mouse Genius Mini Traveler para Notebook USB', 102, 'assets/img/productos/minitraveler_Foto0.jpg', 900.00, 399.00, 40, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(23, 'Mouse Genius XScroll Optico PS/2', 102, 'assets/img/productos/geniusxscroll_Foto0.jpg', 810.00, 599.00, 40, 10, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(24, 'demo', 102, 'assets/img/productos/geniusxscroll_Foto0.jpg', 1000.00, 2500.00, 250, 5, 'SI', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(25, 'Auriculares con Micrófono Genius TR-9BT - Bluetooth - Blanco', 103, 'assets/img/productos/Genius-HS-610-Red_Foto0.jpg', 5000.00, 7500.00, 6, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(26, 'Mouse Genius  Optico ', 102, 'assets/img/productos/Logitech-M317-Black_Foto0.jpg', 1000.00, 2500.00, 3, 5, 'NO', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(27, 'Escritorio', 100, 'assets/img/productos/Logitech-M317-Black_Foto0.jpg', 9000.00, 4680.00, 10, 20, 'SI', '-Compra en Cuotas Sin interés (Compra Segura con MERCADOPAGO).\r\n\r\n-Envíos Garantizados a Todo el País (MERCADO ENVIOS).'),
(29, 'demo', 100, 'assets/img/productos/foto2.jpg', 4000.00, 4680.00, 10, 2, 'SI', 'sdfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `username`, `password`, `perfil_id`, `baja`) VALUES
(1, 'alejandro', 'jimenez', 'alejimpe@gmail.com', 'alejimpe', 'Hola1234', 1, 'NO'),
(2, 'dayhanna marcela', 'jimenez Perales', 'damajipe@gmail.com', 'damajipe', 'Hola1234', 2, 'NO'),
(3, 'Giovanny ', 'Perales', 'giedjipe@gmail.com', 'giedjipe', 'Hola1234', 1, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id_venta` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id_venta`, `fecha`, `usuario_id`, `total_venta`) VALUES
(1, '2020-06-03', 1, 19700.00),
(2, '2020-06-03', 1, 19700.00),
(3, '2020-06-03', 1, 19700.00),
(4, '2020-06-03', 1, 4680.00),
(5, '2020-06-03', 1, 0.00),
(6, '2020-06-05', 1, 5300.00),
(7, '2020-06-05', 1, 2500.00),
(8, '2020-06-05', 1, 0.00),
(9, '2020-06-10', 2, 4680.00),
(10, '2020-06-10', 2, 7200.00),
(11, '2020-06-11', 1, 7200.00),
(12, '2020-06-11', 1, 0.00),
(13, '2020-06-11', 1, 0.00),
(14, '2020-06-11', 1, 0.00),
(15, '2020-06-11', 1, 0.00),
(16, '2020-06-11', 1, 0.00),
(17, '2020-06-11', 1, 0.00),
(18, '2020-06-11', 1, 0.00),
(19, '2020-06-11', 1, 0.00),
(20, '2020-06-11', 1, 0.00),
(21, '2020-06-11', 1, 0.00),
(22, '2020-06-11', 1, 0.00),
(23, '2020-06-11', 1, 0.00),
(24, '2020-06-11', 1, 0.00),
(25, '2020-06-11', 1, 4410.00),
(26, '2020-06-11', 1, 7200.00),
(27, '2020-06-22', 1, 36000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalles`
--

CREATE TABLE `ventas_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `precio` double(10,2) UNSIGNED NOT NULL,
  `total` double(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_detalles`
--

INSERT INTO `ventas_detalles` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(1, 3, 6, 2, 7200.00, 14400.00),
(2, 3, 7, 1, 5300.00, 5300.00),
(3, 4, 11, 1, 4680.00, 4680.00),
(4, 6, 7, 1, 5300.00, 5300.00),
(5, 7, 26, 1, 2500.00, 2500.00),
(6, 9, 11, 1, 4680.00, 4680.00),
(7, 10, 6, 1, 7200.00, 7200.00),
(8, 11, 6, 1, 7200.00, 7200.00),
(9, 25, 9, 1, 4410.00, 4410.00),
(10, 26, 6, 1, 7200.00, 7200.00),
(11, 27, 6, 5, 7200.00, 36000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `ventas_detalles`
--
ALTER TABLE `ventas_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_mensaje` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id_venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `ventas_detalles`
--
ALTER TABLE `ventas_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `ventas_detalles`
--
ALTER TABLE `ventas_detalles`
  ADD CONSTRAINT `ventas_detalles_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `ventas_detalles_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
