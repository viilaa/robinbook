-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2021 a las 21:10:48
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `robinbook`
--

CREATE DATABASE IF NOT EXISTS `robinbook`;
USE `robinbook`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `age_classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustrations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `synopsis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `age_classification`, `cover_page`, `illustrations`, `pdf`, `release_date`, `synopsis`, `title`, `public_date`) VALUES
(1, 'TP', 'test1.jpg', '', 'test1.pdf', '2021-02-23', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Lavandera', NULL),
(2, 'TP', 'test2.jpg', '', 'test2.pdf', '2018-02-11', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'La ultima daga', NULL),
(3, 'TP', 'test3.jpg', '', 'test3.pdf', '2020-05-12', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'The arrivals', NULL),
(4, '+18', 'test4.jpg', '', 'test4.pdf', '2021-02-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Todas las hadas del reino', NULL),
(5, '+18', 'test5.jpg', '', 'test5.pdf', '2021-02-07', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'La jungla crece de nuevo.', NULL),
(6, '+18', 'test6.jpg', '', 'test6.pdf', '2020-03-08', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Asuntos de honor', NULL),
(7, '+18', 'test7.jpg', '', 'test7.pdf', '2021-02-26', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'La nostalgia del limonero', NULL),
(8, '+18', 'test8.jpg', '', 'test8.pdf', '2018-05-20', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Portadas de libros, la portada es el alma de la historia', NULL),
(9, '+18', 'test9.jpg', '', 'test9.pdf', '2017-01-25', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'El dia que se perdio la cordura.', NULL),
(10, '+18', 'test10.jpg', '', 'test10.pdf', '2017-11-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Los hombres del norte.', NULL),
(11, '+18', 'test11.jpg', '', 'test11.pdf', '2019-03-19', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'El condor de la pluma dorada.', NULL),
(12, '+18', 'test12.jpg', '', 'test12.pdf', '2019-08-31', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Inside out & back again.', NULL),
(13, '+18', 'test13.jpg', '', 'test13.pdf', '2019-07-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Red Queen.', NULL),
(14, '+18', 'test14.jpg', '', 'test14.pdf', '2019-07-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Me hago bolas con el amor.', NULL),
(15, 'TP', 'test15.jpg', '', 'test15.pdf', '2015-07-11', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Portal jumper.', NULL),
(16, 'TP', 'test16.jpg', '', 'test16.pdf', '2013-06-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Shield of hades.', NULL),
(17, 'TP', 'test17.jpg', '', 'test17.pdf', '2013-06-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Book title.', NULL),
(18, 'TP', 'test18.jpg', '', 'test18.pdf', '2013-02-13', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Girls of july.', NULL),
(19, 'TP', 'test19.jpg', '', 'test19.pdf', '2013-02-13', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Six of crows.', NULL),
(20, 'TP', 'test20.jpg', '', 'test20.pdf', '2013-06-10', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Angel mark.', NULL),
(21, 'TP', 'test21.jpg', '', 'test21.pdf', '2021-02-17', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', '\'Book title here.', NULL),
(22, 'TP', 'test22.jpg', '', 'test22.pdf', '2020-02-21', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'El libro de la jungla.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`) VALUES
(1, 3),
(2, 1),
(3, 1),
(4, 7),
(5, 4),
(6, 2),
(7, 6),
(8, 7),
(9, 7),
(10, 5),
(11, 1),
(12, 4),
(13, 2),
(14, 6),
(15, 1),
(16, 3),
(17, 2),
(18, 6),
(19, 5),
(20, 3),
(21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname1`, `surname2`, `email`, `message`) VALUES
(1, 'Carlos', 'Bartual', 'Molina', 'carlos@gmail.com', 'lorem '),
(2, 'Beatriz', 'Mollar', 'Puchalt', 'bmp@gmail.com', 'Es la mejor pagina de libros del mundo, me encanta. Enhorabuena. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210219090059', '2021-02-19 10:01:11', 7250),
('DoctrineMigrations\\Version20210219102219', '2021-02-19 11:22:25', 2444),
('DoctrineMigrations\\Version20210222112332', '2021-02-22 12:23:45', 2420);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `type_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genre`
--

INSERT INTO `genre` (`id`, `type_genre`) VALUES
(1, 'Adventure'),
(2, 'Science fiction'),
(3, 'Fantasy'),
(4, 'Erotic'),
(5, 'Romantic'),
(6, 'Police'),
(7, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `dni` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` datetime DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `surname2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `dni`, `email`, `name`, `surname1`, `password`, `release_date`, `date_of_birth`, `surname2`) VALUES
(1, 'xbb', '[]', '58432251X', 'Ximo@gmail.com', 'Ximo', 'Balbastre', '$2y$10$fcoMJwitZQCTYKayeJ/RZOjnYfa8ZR.Swb4MQ6ZNSbDozGdTOoxQ2', '2023-05-02 10:27:00', '2001-02-11 10:27:00', 'Bañuls'),
(2, 'bpm', '[]', '55442211A', 'bea@gmail.com', 'Beatriz', 'Mollar', '$2y$10$UgvtkkdFVnS9h578fKvRnuydl4hfQTbHkbpcgpLnRQsq.3pxBlzzS', '2001-02-21 10:27:20', '1980-02-14 10:27:20', 'Puchalt'),
(3, 'ods', '[]', '55852371A', 'omar@gmail.com', 'Omar', 'Doussas', '$2y$10$lPOp9MmaDXHh6ywO1V89/eSVrUki9ilTM5tOSjw.JXiZnnrDe2nDO', '2021-02-01 10:27:38', '2001-01-14 10:27:38', 'Sanchis'),
(4, 'jvo', '[]', '33221144B', 'jaume@gmail.com', 'Jaume', 'Vila', '$2y$10$gRjdMwc0pUY8nd.E3oFm6OLh.0faE50FCmM4SsrfHX2KJogs05CI.', '2021-02-03 10:29:13', '2000-09-27 10:29:13', 'Orquin'),
(5, 'vmg', '[]', '33887799C', 'Sento@gmail.com', 'Vicent', 'Miñana', '$2y$10$BfLkX9J1xGYcB/C3653JQuK.RTO8UBLXd8SvHbT0dVmylxQsauaw6', '2021-03-12 10:29:58', '2002-02-14 10:29:58', 'Gracia'),
(6, 'cbm', '[]', '58432251X', 'Ximo@gmail.com', 'Carlos', 'Bartual', '$2y$10$wdoVCua5Ift/W57y9pfu7O8VotwFEU//eEmKKZU3xhGP4gXZU6MAy', '2015-05-23 20:06:43', '2001-11-02 20:06:43', 'Molina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_book`
--

CREATE TABLE `user_book` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_book`
--

INSERT INTO `user_book` (`user_id`, `book_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 10),
(1, 14),
(1, 20),
(2, 1),
(2, 4),
(2, 10),
(2, 13),
(2, 15),
(2, 20),
(3, 1),
(3, 4),
(3, 5),
(3, 8),
(3, 10),
(3, 11),
(3, 16),
(3, 21),
(4, 3),
(4, 6),
(4, 8),
(4, 9),
(4, 10),
(4, 17),
(4, 18),
(4, 20),
(5, 1),
(5, 7),
(5, 9),
(5, 15),
(5, 16),
(5, 17);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`book_id`,`genre_id`),
  ADD KEY `IDX_8D92268116A2B381` (`book_id`),
  ADD KEY `IDX_8D9226814296D31F` (`genre_id`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- Indices de la tabla `user_book`
--
ALTER TABLE `user_book`
  ADD PRIMARY KEY (`user_id`,`book_id`),
  ADD KEY `IDX_B164EFF8A76ED395` (`user_id`),
  ADD KEY `IDX_B164EFF816A2B381` (`book_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `FK_8D92268116A2B381` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8D9226814296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_book`
--
ALTER TABLE `user_book`
  ADD CONSTRAINT `FK_B164EFF816A2B381` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B164EFF8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
