-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 15:52:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clubes_escocia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `password`, `email`) VALUES
(1, '12345', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `division` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `division`) VALUES
(1, 'Premiership', 'Primera Division'),
(2, 'Championship', 'Segunda Division'),
(3, 'League One', 'Tercera Division'),
(4, 'League two', 'Cuarta Division');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubes`
--

CREATE TABLE `clubes` (
  `id_club` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ciudad` varchar(65) NOT NULL,
  `año_fundacion` int(11) DEFAULT NULL,
  `origenes` varchar(1000) DEFAULT NULL,
  `escudo` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clubes`
--

INSERT INTO `clubes` (`id_club`, `nombre`, `ciudad`, `año_fundacion`, `origenes`, `escudo`, `id_categoria`) VALUES
(1, 'Rangers FC', 'Glasgow', 1872, 'El club fue fundado en Marzo de 1872 por los hermanos Moses McNeil y Peter McNeil, Peter Campbell, y William McBeath en West End Park (ahora Kelvingrove Park). Los fundadores decidieron llamarlo Rangers por el nombre de un club de rugby inglés. Según algunos, sin embargo, la fecha real de la fundación de Rangers fue 1873, año en que se produjo la primera reunión anual del club y los primeros miembros fueron elegidos. El primer partido del equipo recién formado se jugó contra Callander Football Club y terminó 0-5.', 'rangers.png', 1),
(2, 'Celtic', 'Glasgow', 1888, 'El Celtic fue fundado formalmente en St. Marys Church Hall en East Rose Street (ahora Forbes Street), en Calton, Glasgow, por Andrew Kerins, el hermano Walfrid, un marista irlandés, el 6 de noviembre de 1887, con el propósito de aliviar la pobreza en el Este de Glasgow recaudando dinero para la organización benéfica que Walfrid había instituido, Poor Childrens Dinner Table.', 'celtic.png', 1),
(3, 'Hibernian FC', 'Edinburgh', 1875, 'El club fue fundado en 1875 por los irlandeses de la zona de Cowgate de Edimburgo. El nombre deriva de Hibernia, el nombre romano de Irlanda. James Connolly, el famoso líder republicano irlandés, era un fan de los Hibs, mientras que el club estaba \"muy identificado\" con el Movimiento de Autonomía irlandesa durante la década de 1880.', 'hibernian.png', 1),
(4, 'Aberdeen FC', 'Aberdeen', 1903, 'La Aberdeen F. C. actual se formó tras la fusión de tres clubes de la ciudad: el Aberdeen, el Victoria United y el Orion en 1903. El nuevo club jugó su primer partido el 15 de agosto de 1903, un empate 1-1 con el Stenhousemuir. Esa primera temporada se produjo una victoria en la Copa de Aberdeenshire, pero finalizó en tercer lugar en la Northern League. El club solicitó la adhesión de la Liga de Escocia la siguiente temporada, y se eligió a la segunda división, en lugar de la primera.', 'aberdeen.png', 1),
(7, 'Raith Rovers', 'Kirkcaldy', 1883, 'El Raith Rovers Football Club es un equipo profesional de fútbol de Escocia, con base en Kirkcaldy. Forman parte del Campeonato de Escocia, que es la segunda categoría de fútbol escocés; recién ascendido a esta categoría proveniente de la Liga Uno, de la cual fue campeón. Debido a las anteriores victorias, el Raith Rovers de convirtió en uno de los clubes con más seguidores de las categorías inferiores del fútbol escocés, atrayendo a su feudo una media de ms de 1500 aficionados.', 'raith.png', 2),
(8, 'Dunfermline Athletic FC', 'Dunfermline', 1903, 'Dunfermline ganó la Copa escocesa en 1961 y 1968 y fue un equipo habitual en la competiciones eueopeas en los años 60s y principios de los 70s. En la Recopa de Europa de 1960-61, al igual que en la temporada 1968-69, llegaron a la semifinal, perdiendo con la Fiorentina y el Slovan Bratislava respectivamente.', 'dunfermline.png', 2),
(9, 'Heart of Midlothian', 'Edinburgh', 1874, 'El club fue formado por un grupo de amigos del club de baile Heart of Midlothian. La historia tradicional de la formación fue que el grupo de amigos compraron un balón antes de jugar las reglas del fútbol local en Tron de donde fueron dirigidos por un policía local a los campos de juego. El club tomó su nombre de la cárcel Heart of Midlothian, que fue demolida en 1817, pero se mantiene fresca en la mente la novela de Walter Scott, The Heart of Midlothian', 'heart.png', 2),
(10, 'Greenock Morton FC', 'Greenock', 1979, 'El Greenock Morton Football Club es un club de fútbol escocés de la ciudad de Greenock. Fue fundado en 1874 y juega en la Primera División de Escocia.', 'greenock.png', 2),
(11, 'Cove Rangers', 'Cove bay', 1922, 'Fundado en 1922, estuvo jugando en ligas amateurs hasta que en 1986 fueron admitidos en la Highland Football League.En el 2001 ganaron su primer campeonato de la Highland Football League.En la temporada 2007-08, llegó a la cuarta ronda de la Copa de Escocia por primera vez.Esa misma temporada prepararon una solicitud para ingresar en la Scottish Football League, pero finalmente fue otorgada al Annan Athletic por poseer unas mejores instalaciones.', 'cove.png', 3),
(12, 'Falkirk FC', 'Falkirk', 1876, 'Nadie sabe la fecha exacta de la fundación del club, pero lo más probable es que haya sido en 1876 y dos años después se unió a la Asociación Escocesa de Fútbol, siendo ya un equipo que podía entrar en la única competición existente.', 'falkirk.png', 3),
(13, 'Queens Park FC', 'Glasgow', 1867, 'El Queens Park FC, también conocido como «los aros» y «las arañas», fue fundado el 9 de julio de 1867, y es el más antiguo en el fútbol escocés. El Queens Park desarrolló sus propias reglas para el fútbol. El club se ha resistido históricamente al profesionalismo en el juego; a antiguos jugadores profesionales de otros clubes no les permitieron jugar para el Queens Park y en 1890 el club rechazó afiliarse a la liga escocesa recién formada. ', 'queens.png', 4),
(14, 'Stirling Albion', '	Stirling', 1945, 'Albión fue fundada en 1945 después del Rey de equipo de fútbol anterior de la ciudad Parque F.C. había dejado de sobrevivir la Segunda Guerra Mundial. La tierra del Parque del Rey había sido dañada durante la guerra, que ha sido golpeada por la única bomba para caerse en la ciudad.', 'stirling.png', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id_club`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clubes`
--
ALTER TABLE `clubes`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clubes`
--
ALTER TABLE `clubes`
  ADD CONSTRAINT `clubes_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
