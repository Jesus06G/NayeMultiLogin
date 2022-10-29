-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2022 a las 18:39:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipoident` varchar(50) NOT NULL,
  `numid` int(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`nombre`, `apellido`, `tipoident`, `numid`, `telefono`, `direccion`, `email`, `id`) VALUES
('oigio', 'uuytyyft', '1', 2147483647, 499665465, '989898798', 'fhddf@tutr', 10),
('55555', '458', '1', 5489498, 2147483647, 'kjasbh', 'fhddf@tutr', 11),
('prueba', '49845', '1', 684646, 9698894, '98984984984', 'mdmejia65@misena.edu.co', 12),
('isai', '655654', '1', 65465465, 2147483647, '645465465', 'hfm@misena.edu.co', 13),
('hbjhv', '6565', '1', 44694654, 6546546, '6546549', 'mdmejia65@misena.edu.co', 14),
('hbjhv', '6565', '1', 44694654, 6546546, '6546549', 'mdmejia65@misena.edu.co', 15),
('989849', '98984984', '1', 9898498, 989898, '989898', 'fhddf@tutr', 16),
('989849', '98984984', '1', 9898498, 989898, '989898', 'fhddf@tutr', 17),
('PRUEBA11', '98984984', '1', 9898498, 989898, '989898', 'fhddf@tutr', 18),
('isai', '655654', '1', 65465465, 2147483647, '645465465', 'hfm@misena.edu.co', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mainlogin`
--

CREATE TABLE `mainlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `role` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `mainlogin`
--

INSERT INTO `mainlogin` (`id`, `username`, `email`, `password`, `role`) VALUES
(38, 'prueba10', 'nayelismejiabarranco9012015@gmail.com', '111111', 'personal'),
(40, 'danibdark1', 'demo@baulphp.com', '333333', 'personal'),
(42, 'freetzi', 'hfm@misena.edu.co', '0000000', 'usuarios'),
(44, 'hgghgh', 'mdmejia65@misena.edu.co', '123456', 'usuarios'),
(45, 'mmmm', 'andradeelkin123@gmail.com', '123456', 'personal'),
(46, 'prueba11', 'andradeelkina123@gmail.com', '1000', 'usuarios'),
(48, 'lucho2', 'andradeelkin123@gmail.com', '123456', 'usuarios'),
(49, 'Danibdark', 'danibdark@icloud.com', '333333', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mainlogin`
--
ALTER TABLE `mainlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `mainlogin`
--
ALTER TABLE `mainlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
