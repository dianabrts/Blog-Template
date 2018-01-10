-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 23:39:15
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `fragmento` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `texto` text NOT NULL,
  `thumb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `fragmento`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Titulo del Primer Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi diam ex, laoreet sed porta ac, volutpat vitae quam. Maecenas fringilla velit et sagittis faucibus.', '2017-06-30 18:15:10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi diam ex, laoreet sed porta ac, volutpat vitae quam. Maecenas fringilla velit et sagittis faucibus. Proin sagittis, elit ac blandit tincidunt, metus purus eleifend felis, sit amet suscipit neque neque quis metus. Vivamus tempor eros ac magna sollicitudin sodales. Curabitur a justo luctus, varius justo vel, tristique massa. Maecenas facilisis venenatis vulputate. Vivamus ornare risus orci, cursus interdum neque interdum sollicitudin. Sed et sollicitudin libero. Suspendisse leo erat, congue id fermentum sed, egestas ornare leo. Fusce id velit et est viverra posuere eget ac felis. Phasellus non nisi lorem. Nulla sit amet tellus ut diam laoreet pretium ac non mauris.', '1.png'),
(2, 'Titulo del Segundo Post', 'Proin efficitur in eros vitae convallis. Fusce tempor arcu a mi suscipit, vitae maximus purus placerat. Sed a rhoncus tortor. Pellentesque ut tincidunt augue, ut elementum arcu.', '2017-06-30 18:15:10', 'Proin efficitur in eros vitae convallis. Fusce tempor arcu a mi suscipit, vitae maximus purus placerat. Sed a rhoncus tortor. Pellentesque ut tincidunt augue, ut elementum arcu. Vestibulum nisl erat, fringilla et malesuada a, malesuada quis ante. Aenean id massa eget massa vestibulum sagittis. Ut pellentesque tellus erat, ut efficitur odio congue nec. Sed vulputate purus risus, vitae rhoncus magna aliquet quis. Nam quis accumsan neque. Suspendisse imperdiet mauris ante, ut fermentum lorem gravida in. Curabitur eleifend lorem diam, eget ullamcorper nibh fringilla at. Integer a ligula in dui aliquet blandit pretium quis massa. In porta in leo congue semper. Suspendisse vulputate tempor tellus, vitae finibus metus blandit eget.', '2.png'),
(3, 'Titulo del Tercer Post', 'Praesent interdum pellentesque nisl, rhoncus imperdiet orci placerat et.', '2017-06-30 18:16:39', 'Praesent interdum pellentesque nisl, rhoncus imperdiet orci placerat et. Donec vitae diam nec nisl consectetur accumsan et nec elit. Nam vestibulum mi non feugiat molestie. Vivamus eget blandit tortor, sed elementum metus. Nam ut dignissim dolor. Ut mi leo, ullamcorper sed blandit vel, posuere scelerisque lacus. Nulla ut magna sed purus consectetur convallis.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices viverra eros, porttitor bibendum neque efficitur sit amet. Vestibulum a odio sed nisi volutpat venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique quam vitae quam tincidunt, id interdum massa eleifend. Vestibulum vehicula consequat libero, egestas scelerisque justo tincidunt at. Phasellus porta auctor ante a rutrum.', '3.png'),
(4, 'Titulo del Cuarto Post', 'Curabitur at cursus odio, sit amet mollis quam. Quisque sit amet accumsan sem, ut rutrum ante.', '2017-06-30 18:16:39', 'Curabitur at cursus odio, sit amet mollis quam. Quisque sit amet accumsan sem, ut rutrum ante. Ut erat odio, ultricies eu semper et, consectetur sit amet massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi a hendrerit libero. Sed elementum condimentum diam pellentesque blandit. Praesent a lorem eu nibh hendrerit aliquam ut in felis. Pellentesque viverra nunc quam, et malesuada nibh faucibus at.\r\n\r\nPraesent tempus neque nunc, sit amet rutrum risus ornare at. Morbi congue felis quis nunc malesuada, sed posuere sem lacinia. Morbi nisi leo, tincidunt vestibulum risus vel, viverra sollicitudin arcu. Nunc sodales mollis varius. Sed in ante lorem. Fusce at elementum elit. Ut quis scelerisque metus, non posuere neque.', '4.png'),
(5, 'Prueba', 'Prueba', '2017-07-02 02:28:39', 'Prueba\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quos, vero voluptatem earum amet rem natus labore laboriosam! Minus cum delectus dolorum officiis, accusamus veritatis odit similique sequi minima. Fugiat!', '4.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
