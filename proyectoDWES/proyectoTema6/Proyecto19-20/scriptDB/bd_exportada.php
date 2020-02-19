-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2020 a las 12:27:56
-- Versión del servidor: 5.7.27-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DAW2051920`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Articulos`
--

CREATE TABLE `Articulos` (
  `cod_articulo` int(10) NOT NULL,
  `titulo_articulo` varchar(130) NOT NULL,
  `descripcion_articulo` varchar(2000) NOT NULL,
  `imagen_articulo` varchar(80) NOT NULL,
  `fecha_articulo` date DEFAULT NULL,
  `visitas_articulo` int(11) DEFAULT '1',
  `cod_usuario` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Articulos`
--

INSERT INTO `Articulos` (`cod_articulo`, `titulo_articulo`, `descripcion_articulo`, `imagen_articulo`, `fecha_articulo`, `visitas_articulo`, `cod_usuario`) VALUES
(2, 'Mount Everest', 'As weâ€™ve already said, and as you already knew, Mount Everest is the worldâ€™s highest mountain. Its peak is an eye-watering 8,848 metres above sea level, making it well over eight times taller than the highest mountain in Wales (Snowdon, at 1,085 metres above sea level).\r\n\r\nEverest is situated on the border between Nepal and the autonomous region of Tibet. Officially speaking, the first successful Everest climbers were Sir Edmund Hillary and Tenzing Norgay in 1953. It is estimated that there is well over 200 dead bodies on Everest, all of them remarkably well-preserved because of the extremely cold temperatures.', 'Highest-Mountain-In-The-World.jpg', '2020-02-06', 26, 'usuario1'),
(3, 'K2', 'K2, <b>also</b> known officially as Mount Godwin-Austen or Chhogori, has a summit 8,611 metres above sea level. It is located on the border between China and Pakistan. The Chinese side of the mountain is widely considered to be the more difficult and hazardous side, so the summit is usually attempted from the Pakistan side.<br>\r\n\r\nBehind Annapurna, K2 has the second highest fatality rate of any mountain with a height over 8,000 metres. Approximately speaking, thereâ€™s one death for every four successful climbs; justifying its nickname as the â€œSavage Mountain.â€<br>\r\n\r\nUnlike many of the other 8,000 metre peaks, nobody has ascended K2 in winter â€“ although that could be set to change. It was recently announced that a winter expedition to K2 has been organised â€“ it will run from December 2019 to January 2020.', 'K2.jpg', '2020-02-06', 3, 'usuario1'),
(4, 'Kangchenjunga', 'Kangchenjunga is a mountain thatâ€™s impossible to pronounce after a full crate of beers. Itâ€™s also, perhaps more importantly than that, the third highest mountain in the world. It sits on the border between Nepal and India, and has an elevation of 8,586 metres.\r\n\r\nLocated approximately 125 kilometres from Everest, Kangchenjunga is the second highest mountain in the Himalayas (with K2 sitting in the neighbouring Karakorum). Up until 1852, it was assumed to be the worldâ€™s highest mountain. However after some clever calculating, and presumably some recalculating to make sure, it was announced that Everest was in fact the highest mountain in the world with Kangchenjunga having to settle for third place.\r\n\r\nThere is a tradition when ascending Kangchenjunga to stop just short of the summit. This dates back to the first successful climb of the mountain by Joe Brown and George Brand in 1955. Brown and Brand, who were part of a British expedition, made a promise to regional monarchs know as the Chogyal that the mountainâ€™s summit would remain pure. Every climber since then has followed the respectful example set by the first ascent.', 'Lhotse.jpg', '2020-02-06', 7, 'usuario1'),
(5, 'Lhotse', 'Just missing out on a medal, and a spot on the podium, is Lhotse. Lhotse, elevation â€“ 8,516 metres, is the fourth highest mountain in the world. It neighbours Mount Everest, and forms part of the Everest massif. The summit of Lhotse is on the border between the Khumbu region of Nepal and Tibet. It was first climbed to in 1956 when a Swiss team made up of Ernst Reiss and Fritz Luchsinger did the business.\r\n\r\nInterestingly, Lhotse Middle (a subsidary peak of Lhotse with an elevation of 8,410 metres) wasnâ€™t summited until 2001. The Middle was the final eight thousand metre peak to be summited and, despite being lower than the main Lhotse summit, is widely considered to be the most difficult climb over eight thousand metres in the world. This is, in large part, because of the intimidating tower-like shape on its upper reaches.\r\n\r\n2019 was a busy year for Himalayan ski descents. Not only did it feature the first ski descent of K2, it was also the year that gave us the first ski descent of Lhotse â€“ made by American duo Hilaree Nelson and Jim Morrison.', 'Third-Highest-Mountain-In-The-World.jpg', '2020-02-06', 1, 'usuario1'),
(6, 'Makalu', 'With an elevation of 8,485m, Makalu is officially the fifth highest mountain in the world. Situated 19km southeast of Everest, on the border between Nepal and China, Makalu is notable for its summitâ€™s iconic pyramid shape. Makalu was first summited in 1955 by Lionel Terray and Jean Couzy, who made up part of a French expedition.\r\n\r\nBecause of the mountainâ€™s isolated position, which leaves it exposed to the elements, and numerous knife-edge ridges and pant-filling steep sections, Makalu is viewed by many in the mountaineering community as one of the worldâ€™s most difficult climbs. The latter stages of the ascent, in particular, involve some extremely technical rock and ice climbing.', 'foto2.png', '2020-02-06', 1, 'usuario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Provincias`
--

CREATE TABLE `Provincias` (
  `Id` int(11) NOT NULL,
  `Id_Provincia` smallint(6) DEFAULT NULL,
  `Provincia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Provincias`
--

INSERT INTO `Provincias` (`Id`, `Id_Provincia`, `Provincia`) VALUES
(1, 2, 'Albacete'),
(2, 3, 'Alicante/Alacant'),
(3, 4, 'Almeria'),
(4, 1, 'Araba/Alava'),
(5, 33, 'Asturias'),
(6, 5, 'Avila'),
(7, 6, 'Badajoz'),
(8, 7, 'Balears, Illes'),
(9, 8, 'Barcelona'),
(10, 48, 'Bizkaia'),
(11, 9, 'Burgos'),
(12, 10, 'Caceres'),
(13, 11, 'Cadiz'),
(14, 39, 'Cantabria'),
(15, 12, 'Castellon/Castello'),
(16, 51, 'Ceuta'),
(17, 13, 'Ciudad Real'),
(18, 14, 'Cordoba'),
(19, 15, 'Coruna'),
(20, 16, 'Cuenca'),
(21, 20, 'Gipuzkoa'),
(22, 17, 'Girona'),
(23, 18, 'Granada'),
(24, 19, 'Guadalajara'),
(25, 21, 'Huelva'),
(26, 22, 'Huesca'),
(27, 23, 'Jaen'),
(28, 24, 'Leon'),
(29, 27, 'Lugo'),
(30, 25, 'Lleida'),
(31, 28, 'Madrid'),
(32, 29, 'Malaga'),
(33, 52, 'Melilla'),
(34, 30, 'Murcia'),
(35, 31, 'Navarra'),
(36, 32, 'Ourense'),
(37, 34, 'Palencia'),
(38, 35, 'Palmas, Las'),
(39, 36, 'Pontevedra'),
(40, 26, 'Rioja, La'),
(41, 37, 'Salamanca'),
(42, 38, 'Santa Cruz de Tenerife'),
(43, 40, 'Segovia'),
(44, 41, 'Sevilla'),
(45, 42, 'Soria'),
(46, 43, 'Tarragona'),
(47, 44, 'Teruel'),
(48, 45, 'Toledo'),
(49, 46, 'Valencia'),
(50, 47, 'Valladolid'),
(51, 49, 'Zamora'),
(52, 50, 'Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `cod_usuario` varchar(15) NOT NULL,
  `tipo_usuario` enum('admin','registrado') DEFAULT 'registrado',
  `nom_usuario` varchar(30) NOT NULL,
  `apell_usuario` varchar(60) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `pass_usuario` varchar(90) NOT NULL,
  `imagen_usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`cod_usuario`, `tipo_usuario`, `nom_usuario`, `apell_usuario`, `email_usuario`, `pass_usuario`, `imagen_usuario`) VALUES
('admin', 'admin', 'Nombre admin', 'Apellido admin', 'email@admin.local', 'd6ed7eb369f21acd3d3d66a96de946cc2b514e4279827bf8a7ca9d7005514b27', 'user.png'),
('usuario1', 'registrado', 'Usuario 1', 'Apellido 1', 'ejemplo1@gmail.com', '1a9ffd23145cc1a478f5ffab856ae6a2c44df74b4ae7e3698ccf295f2cb5bd55', 'user.png'),
('usuario2', 'registrado', 'Usuario 2', 'Apellido 2', 'ejemplo2@gmail.com', '0c14ba5bbf24fdde4454e10b8685a444963b25e5a40212e556f70ca12c80e9f6', 'user.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Articulos`
--
ALTER TABLE `Articulos`
  ADD PRIMARY KEY (`cod_articulo`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Indices de la tabla `Provincias`
--
ALTER TABLE `Provincias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Articulos`
--
ALTER TABLE `Articulos`
  MODIFY `cod_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `Provincias`
--
ALTER TABLE `Provincias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Articulos`
--
ALTER TABLE `Articulos`
  ADD CONSTRAINT `Articulos_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `Usuarios` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
