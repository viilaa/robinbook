-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 16:17:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
(1, 'TP', 'https://robinimg.s3.us-east-2.amazonaws.com/test1.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test1.pdf', '2021-02-23', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'Lavandera', NULL),
(2, 'TP', 'https://robinimg.s3.us-east-2.amazonaws.com/test2.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test2.pdf', '2021-02-26', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'La última daga.', NULL),
(3, 'TP', 'https://robinimg.s3.us-east-2.amazonaws.com/test3.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test3.pdf', '2020-05-12', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.\r\nLorem ipsum dolor sit, amet consecte', 'The arrivals.', NULL),
(4, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test4.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test4.pdf', '2021-02-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte.', 'Todas las hadas del reino.', NULL),
(5, 'TP', 'https://robinimg.s3.us-east-2.amazonaws.com/test5.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test5.pdf\r\n\r\n\r\n', '2021-02-07', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte. ', 'La jungla crece de nuevo.', NULL),
(6, 'TP', 'https://robinimg.s3.us-east-2.amazonaws.com/test6.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test6.pdf', '2020-03-08', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte.', 'Asuntos de honor.', NULL),
(7, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test7.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test7.pdf', '2021-02-26', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte.', 'La nostalgia del limonero.', NULL),
(8, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test8.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test8.pdf', '2018-05-20', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte.', 'Portadas de libros, la portada es el alma de la historia.', NULL),
(9, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test9.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test9.pdf', '2017-01-25', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'El dia que se perdio la cordura.', NULL),
(10, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test10.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test10.pdf', '2017-11-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Los hombres del norte.', NULL),
(11, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test11.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test11.pdf', '2019-03-19', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'El condor de la pluma dorada.', NULL),
(12, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test12.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test12.pdf', '2019-08-31', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Inside out & back again.', NULL),
(13, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test13.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test13.pdf', '2019-07-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Red Queen.', NULL),
(14, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test14.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test14.pdf', '2019-07-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Me hago bolas con el amor.', NULL),
(15, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test15.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test15.pdf', '2015-07-11', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Portal jumper.', NULL),
(16, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test16.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test16.pdf', '2015-07-11', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Shield of hades.', NULL),
(17, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test17.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test17.pdf', '2013-06-01', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Book title.', NULL),
(18, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test18.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test18.pdf', '2013-02-13', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Girls of july.', NULL),
(19, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test19.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test19.pdf', '2013-02-13', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Six of crows.', NULL),
(20, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test20.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test20.pdf', '2013-06-10', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Angel mark.', NULL),
(21, '+18', 'https://robinimg.s3.us-east-2.amazonaws.com/test21.jpg', '', 'https://robinimg.s3.us-east-2.amazonaws.com/pdfs_libros/test21.pdf', '2021-02-17', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto soluta esse quia. Dolor perferendis odio quasi accusamus quo obcaecati nobis assumenda tenetur vitae dicta, nam autem quos corporis illo doloremque.Lorem ipsum dolor sit, amet consecte', 'Book title here.', NULL);

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
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

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
('DoctrineMigrations\\Version20210208144828', '2021-02-08 15:48:48', 402),
('DoctrineMigrations\\Version20210208145439', '2021-02-08 15:54:50', 288),
('DoctrineMigrations\\Version20210208145933', '2021-02-08 16:00:00', 357),
('DoctrineMigrations\\Version20210209080957', '2021-02-09 09:10:07', 288),
('DoctrineMigrations\\Version20210209090008', '2021-02-09 10:00:19', 2798),
('DoctrineMigrations\\Version20210209091036', '2021-02-09 10:10:45', 3058),
('DoctrineMigrations\\Version20210209101650', '2021-02-09 11:17:00', 282),
('DoctrineMigrations\\Version20210211102459', '2021-02-11 11:25:09', 4483),
('DoctrineMigrations\\Version20210211105057', '2021-02-11 11:51:07', 218);

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
(1, 'Aventuras'),
(2, 'Ciencia Ficción'),
(3, 'Fantasía'),
(4, 'Eróticas'),
(5, 'Románticas'),
(6, 'Policíacas'),
(7, 'Terror'),
(8, 'comics');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realese_date` datetime NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `email`, `name`, `surname1`, `surname2`, `realese_date`, `rol`, `password`, `date_of_birth`) VALUES
(4, '55442211A', 'bea@gmail.com', 'Beatriz', 'Mollar', 'Puchalt', '2021-02-01 13:10:31', '', '', '1980-02-14'),
(5, '33221144B', 'jaume@gmail.com', 'Jaume', 'Vila', 'Orquin', '2021-02-03 13:11:41', '', '', '2000-09-27'),
(6, '33887799C', 'Sento@gmail.com', 'Vicent', 'Miñana', 'Gracia', '2021-02-03 13:11:41', '', '', '2001-02-02'),
(7, '55852371A', 'omar@gmail.com', 'Omar', 'Doussas', 'Sanchis', '2021-02-17 10:09:49', NULL, '1234', '2000-01-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_book`
--

CREATE TABLE `users_book` (
  `users_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_book`
--

INSERT INTO `users_book` (`users_id`, `book_id`) VALUES
(4, 1),
(5, 3),
(6, 3);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_book`
--
ALTER TABLE `users_book`
  ADD PRIMARY KEY (`users_id`,`book_id`),
  ADD KEY `IDX_46CED3F67B3B43D` (`users_id`),
  ADD KEY `IDX_46CED3F16A2B381` (`book_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Filtros para la tabla `users_book`
--
ALTER TABLE `users_book`
  ADD CONSTRAINT `FK_46CED3F16A2B381` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_46CED3F67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
