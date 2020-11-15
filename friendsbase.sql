-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 05:19:23
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
-- Base de datos: `friendsbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuario`
--

CREATE TABLE `datos_usuario` (
  `USERID` int(11) NOT NULL,
  `USERCURSO` char(30) NOT NULL,
  `USERNIVEL` int(11) NOT NULL,
  `USERFOTOGRAFIA` longblob DEFAULT NULL,
  `USERFECHANACIMIENTO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_usuario`
--

INSERT INTO `datos_usuario` (`USERID`, `USERCURSO`, `USERNIVEL`, `USERFOTOGRAFIA`, `USERFECHANACIMIENTO`) VALUES
(1, 'Ingeniería Sistemas', 6, '', '2000-09-15'),
(2, 'Ingeniería Sistemas', 8, '', '1998-01-20'),
(3, 'Ingeniería Sistemas', 6, '', '1998-07-18'),
(4, 'Ingeniería Sistemas', 6, '', '1998-04-25'),
(5, 'Ingeniería Sistemas', 6, '', '1998-07-27'),
(6, 'Ingeniería Sistemas', 6, '', '1998-07-30'),
(7, 'Ingeniería Sistemas', 6, '', '1998-09-01'),
(8, 'Ingeniería Sistemas', 6, '', '1998-01-14'),
(9, 'Ingeniería Sistemas', 6, '', '1998-06-28'),
(10, 'Ingeniería Sistemas', 6, '', '1998-11-05'),
(11, 'Ingeniería Sistemas', 6, '', '1998-07-23'),
(12, 'Ingeniería Sistemas', 6, '', '1998-01-01'),
(13, 'Ingeniería Sistemas', 6, '', '1998-10-10'),
(14, 'Ingeniería Sistemas', 6, '', '1999-10-23'),
(15, 'Ingeniería Sistemas', 6, '', '1999-05-13'),
(16, 'Ingeniería Sistemas', 6, '', '1999-08-20'),
(17, 'Ingeniería Sistemas', 6, '', '1999-08-28'),
(18, 'Ingeniería Sistemas', 6, '', '1999-10-14'),
(19, 'Ingeniería Sistemas', 6, '', '1999-09-09'),
(20, 'Ingeniería Sistemas', 6, '', '1999-09-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `GRUPOID` int(11) NOT NULL,
  `GRUPONOMBRE` char(30) NOT NULL,
  `GRUPODESC` varchar(400) DEFAULT NULL,
  `GRUPOFONDO` varchar(200) DEFAULT NULL,
  `GRUPONUEVO` tinyint(1) NOT NULL,
  `GRUPOEXISTENTE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`GRUPOID`, `GRUPONOMBRE`, `GRUPODESC`, `GRUPOFONDO`, `GRUPONUEVO`, `GRUPOEXISTENTE`) VALUES
(1, 'Amigos', 'Grupo de Amigos', 'fondo.jpg', 0, 1),
(2, 'Ingenieros', NULL, NULL, 1, 0),
(3, 'Redes', NULL, NULL, 1, 0),
(4, 'Los mejores', NULL, NULL, 1, 0),
(18, 'Otro grupo', 'Fua', 'fondo3.jpg', 0, 1),
(19, 'werty', 'qrty', '16d50c330ce23acf7e52145a25c9a4c0.jpg', 0, 1),
(20, 'los osos', 'en este grupo los osos se aman gracias', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_x_usuario`
--

CREATE TABLE `grupo_x_usuario` (
  `id` int(11) NOT NULL,
  `GRUPOID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `GXUSOLICITUD` tinyint(1) NOT NULL DEFAULT 0,
  `GXUROL` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_x_usuario`
--

INSERT INTO `grupo_x_usuario` (`id`, `GRUPOID`, `USERID`, `GXUSOLICITUD`, `GXUROL`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 3, 1, 0),
(3, 1, 4, 1, 0),
(4, 1, 5, 1, 0),
(5, 1, 22, 0, 0),
(6, 2, 2, 0, 0),
(7, 2, 6, 1, 1),
(8, 2, 7, 1, 0),
(9, 2, 8, 1, 0),
(10, 2, 9, 1, 0),
(11, 2, 10, 1, 0),
(12, 3, 2, 0, 0),
(13, 3, 11, 1, 1),
(14, 3, 12, 1, 0),
(15, 3, 13, 1, 0),
(16, 3, 14, 1, 0),
(17, 3, 15, 1, 0),
(18, 4, 2, 0, 0),
(19, 4, 16, 1, 1),
(20, 4, 17, 1, 0),
(21, 4, 18, 1, 0),
(22, 4, 19, 1, 0),
(23, 4, 20, 1, 0),
(26, 18, 1, 1, 0),
(27, 18, 22, 1, 1),
(28, 19, 2, 1, 1),
(43, 3, 22, 0, 0),
(44, 20, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `POSTID` int(11) NOT NULL,
  `GRUPOID` int(11) DEFAULT NULL,
  `USERID` bigint(20) UNSIGNED DEFAULT NULL,
  `POSTCONTENIDOMULTIMEDIA` varchar(250) DEFAULT NULL,
  `POSTTEXTO` text NOT NULL,
  `POSTFECHAPUBLICACION` datetime NOT NULL,
  `POSTCOMENTARIOS` tinyint(1) DEFAULT 0,
  `POSTADVERTENCIA` char(30) DEFAULT NULL,
  `POSTFECHAENTREGA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`POSTID`, `GRUPOID`, `USERID`, `POSTCONTENIDOMULTIMEDIA`, `POSTTEXTO`, `POSTFECHAPUBLICACION`, `POSTCOMENTARIOS`, `POSTADVERTENCIA`, `POSTFECHAENTREGA`) VALUES
(1, 3, 14, NULL, 'La feria de ingeniería se va a llevar a cabo el mes de Septiembre en las inmediaciones de la facultad. Habrá muchas actividades.', '2020-09-13 11:29:38', 1, '¡Atención!', '2020-09-15 17:11:03'),
(2, 4, 20, NULL, 'Muchachos, todos los días viernes vamos a tener reunión mediante zoom para aclarar cualquier duda y ver los avances del proyecto.', '2020-09-17 10:25:30', 1, '¡Atención!', '2020-09-19 15:07:21'),
(3, 4, 18, NULL, 'Este trabajo de investigación de operaciones va a ser realizada solo por dos integrantes del equipo, ya que, ellos dominan el tema.', '2020-09-16 07:36:14', 1, '¡Atención!', '2020-09-19 19:00:59'),
(4, 4, 16, NULL, 'Tener en cuenta el formato de las prácticas de laboratorio, para así tener la mejor nota posible.', '2020-09-14 02:59:23', 1, '¡Precaución!', '2020-09-15 03:39:45'),
(5, 3, 12, NULL, 'Está casi terminada la parte que se refiere al modelo de la base de datos, entonces proseguiremos con los demás temas del proyecto para así terminar lo antes posible.', '2020-09-15 02:24:02', 1, '¡Atención!', '2020-09-19 00:42:35'),
(6, 4, 20, NULL, 'Al marco teórico de este informe le falta más información, por favor corregir esa parte para yo seguir con las observaciones y conclusiones.', '2020-09-17 04:51:06', 1, '¡Atención!', '2020-09-19 08:04:57'),
(7, 3, 14, NULL, 'Mantener el formato con el que se ha ido trabajando y hacer las tablas correspondientes al modelo con el que se va a trabajar.', '2020-09-17 14:55:11', 1, 'El tiempo está por expirar', '2020-09-18 02:24:00'),
(8, 1, 1, NULL, 'La presentación del proyecto final de Ingeniería de Software se realizará de forma colaborativa.', '2020-09-17 05:26:11', 1, '¡Atención!', '2020-09-24 13:49:27'),
(9, 2, 7, NULL, 'Debido al feriado de navidad, la reunión del trabajo grupal queda pospuesto para el próximo año. Por favor seguir avanzando con lo acordado la última reunión.', '2020-09-16 12:30:02', 1, '¡Atención!', '2020-09-19 01:43:01'),
(10, 2, 6, NULL, 'Durante todo el semestre, los equipos de trabajo vamos a ir exponiendo los temas más esenciales, para así ir abarcando más temas.', '2020-09-17 17:46:06', 1, '¡Precaución!', '2020-09-18 09:27:03'),
(11, 1, 5, NULL, 'La profesora de Metodologías de Investigación va a hacer una tutoría en su oficina, para dar indicaciones generales de cómo se va a llevar a cabo la realización de los proyectos finales.', '2020-09-15 15:46:44', 1, '¡Atención!', '2020-09-20 17:46:30'),
(12, 1, 2, NULL, 'En la página de la Universidad se encuentran las indicaciones para realizar la inscripción al concurso de programación.', '2020-09-16 09:34:53', 1, 'El tiempo está por expirar', '2020-09-26 10:27:49'),
(13, 2, 6, NULL, 'La tarea de Inteligencia Artificial va muy retrasada, algún compañero especializado en el tema por favor se requiere de su ayuda de forma urgente.', '2020-09-16 01:51:38', 1, '¡Atención!', '2020-09-25 04:56:02'),
(14, 3, 11, NULL, 'Al momento no contamos con cables coaxiales para realizar la práctica de la materia de Redes. Si algún grupo tiene, se les agradecería.', '2020-09-15 06:49:43', 1, '¡Precaución!', '2020-09-17 16:42:14'),
(15, 4, 19, NULL, 'Muchachos he acabado el trabajo de redes, solo tendríamos que estudiar para la exposición y listo.', '2020-09-17 08:57:25', 1, '¡Precaución!', '2020-09-19 06:55:11'),
(16, 1, 3, NULL, 'El avance del proyecto de Redes lo debemos presentar hasta el jueves de la próxima semana.', '2020-09-18 00:34:35', 1, 'El tiempo está por expirar', '2020-09-20 15:46:37'),
(17, 2, 8, NULL, 'Por favor bajar al primer piso de la facultad de Ingeniería, en donde se va a llevar a cabo la charla acerca de las nuevas tecnologías que están dominando el mundo.', '2020-09-16 16:29:52', 1, 'El tiempo está por expirar', '2020-09-19 05:31:13'),
(18, 1, 4, NULL, 'Se requiere de dos personas especializadas en Bases de Datos para llevar el control de registros de los estudiantes de la Facultad de Ingeniería.', '2020-09-17 03:41:02', 1, 'El tiempo está por expirar', '2020-09-22 12:37:58'),
(19, 3, 11, NULL, 'La parte del backend del proyecto de nuevas técnicas de programación se va a presentar la próxima semana, por lo que esta semana ya debemos terminar todo.', '2020-09-15 00:00:00', 1, '¡Precaución!', '2020-09-20 11:45:25'),
(30, 1, 1, NULL, 'Nueva Publicación', '2020-10-16 04:10:37', 1, NULL, '2020-10-29 08:00:00'),
(36, 1, 2, NULL, 'hola oso', '2020-10-20 03:10:23', 1, NULL, '2020-10-23 00:00:00'),
(39, 18, 22, NULL, 'dfghjkl', '2020-10-20 11:10:34', 0, NULL, '2020-10-21 00:00:00'),
(40, 18, 22, NULL, 'hola mi osoo', '2020-10-20 11:10:20', 1, NULL, '2031-01-16 00:00:00'),
(41, 18, 1, NULL, 'hola oso2', '2020-10-20 11:10:51', 1, NULL, '2020-10-23 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion_x_usuario`
--

CREATE TABLE `publicacion_x_usuario` (
  `id` int(11) NOT NULL,
  `POSTID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `PXUSCOMENTARIO` text DEFAULT NULL,
  `PXUSAVANCE` int(11) NOT NULL DEFAULT 0,
  `PXUSCALIFICACION` int(11) DEFAULT NULL,
  `creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion_x_usuario`
--

INSERT INTO `publicacion_x_usuario` (`id`, `POSTID`, `USERID`, `PXUSCOMENTARIO`, `PXUSAVANCE`, `PXUSCALIFICACION`, `creacion`) VALUES
(1, 1, 8, 'Clases Mañana', 0, 5, '2020-10-18 22:50:57'),
(2, 2, 1, 'Actualizar base de datos', 0, 5, '2020-10-18 22:50:57'),
(3, 3, 10, 'Terminen El trabajo', 0, 5, '2020-10-18 22:50:57'),
(4, 4, 20, 'Entregar tarea ', 0, 5, '2020-10-18 22:50:57'),
(5, 7, 14, 'Disculpa', 0, 5, '2020-10-18 22:50:57'),
(6, 8, 19, 'Bienvenidos a todos', 10, 5, '2020-10-18 22:50:57'),
(7, 9, 15, 'Exposición', 0, 5, '2020-10-18 22:50:57'),
(8, 10, 16, 'Notas', 0, 5, '2020-10-18 22:50:57'),
(9, 11, 2, 'Recuperacion', 0, 5, '2020-10-18 22:50:57'),
(10, 12, 13, 'Trabajo de Redes', 0, 5, '2020-10-18 22:50:57'),
(11, 13, 5, 'Entregar tareas', 0, 5, '2020-10-18 22:50:57'),
(12, 14, 7, 'Crear Las Diapositivas', 0, 5, '2020-10-18 22:50:57'),
(13, 15, 4, 'Arreglar las diapositivas', 0, 5, '2020-10-18 22:50:57'),
(14, 16, 11, 'Acabar el proyecto', 0, 5, '2020-10-18 22:50:57'),
(15, 17, 18, 'Hojas de vida', 0, 5, '2020-10-18 22:50:57'),
(16, 18, 6, 'Importante', 0, 5, '2020-10-18 22:50:57'),
(17, 19, 9, 'Enviar Archivos', 0, 5, '2020-10-18 22:50:57'),
(20, 30, 1, NULL, 3, NULL, '2020-10-18 22:50:57'),
(21, 30, 1, 'Nuevo comentario', 10, 2, '2020-10-18 22:55:30'),
(26, 1, 1, 'Nuevo Comentario', 0, NULL, '2020-10-18 23:40:23'),
(41, 36, 2, NULL, 4, NULL, '2020-10-21 03:59:23'),
(42, 36, 2, 'holaaaaaaaaaaaaaaaa', 0, NULL, '2020-10-21 04:00:01'),
(43, 39, 22, NULL, 4, NULL, '2020-10-21 23:09:34'),
(44, 40, 22, NULL, 4, NULL, '2020-10-21 23:10:20'),
(45, 41, 1, NULL, 3, NULL, '2020-10-21 23:12:51'),
(46, 41, 1, 'pues yo te adoro mi oso', 0, NULL, '2020-10-21 23:13:08'),
(48, 40, 22, 'comentario 1', 0, NULL, '2020-10-21 23:18:43'),
(49, 40, 22, 'cometario2', 0, NULL, '2020-10-21 23:21:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` mediumint(9) DEFAULT NULL,
  `fotografia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `curso`, `nivel`, `fotografia`, `nacimiento`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo', 'ledachvi@hotmail.com', NULL, '$2y$10$lCk.f7YVXwU6/aaW02fxJu6oVe/iO67hkxbKBFY.qgLq6i0hPk1r.', 'Ingeniería en Sistemas', 6, 'user2.jpg', '2000-05-03', 1, NULL, '2020-10-15 21:03:00', '2020-10-17 21:02:05'),
(2, 'Anderson', 'anderson@hotmail.com', NULL, '$2y$10$lCk.f7YVXwU6/aaW02fxJu6oVe/iO67hkxbKBFY.qgLq6i0hPk1r.', 'Ingeniería en Sistemas', 6, 'user5.jpg', NULL, 1, NULL, NULL, '2020-10-21 08:51:06'),
(3, 'David', 'david@hotmail.com', NULL, 'OHGK4CL52BE0HKSJ9QHD', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(4, 'Luis', 'luis@hotmail.com', NULL, 'PINDDJ9345V01XA959SL', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(5, 'Adriana M', 'adriana@hotmail.com', NULL, 'P42UR63LR8KT2OCQ56LH', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(6, 'Maria', 'maria@hotmail.com', NULL, '$2y$10$lCk.f7YVXwU6/aaW02fxJu6oVe/iO67hkxbKBFY.qgLq6i0hPk1r.', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(7, 'Juan', 'juan@hotmail.com', NULL, '5AQMAIW37BJV23A3YPHD', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(8, 'Pedro', 'pedro@hotmail.com', NULL, 'OHUW2V6IJN73F6OOAENR', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(9, 'Camila', 'camila@hotmail.com', NULL, 'LFP8N 04XT1UQ6377RUN', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(10, 'Antonio', 'antonio@hotmail.com', NULL, '22JX22EX59NXQXSHW4NT', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(11, 'Oscar', 'oscar@hotmail.com', NULL, '$2y$10$lCk.f7YVXwU6/aaW02fxJu6oVe/iO67hkxbKBFY.qgLq6i0hPk1r.', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(12, 'Emilio', 'emilio@hotmail.com', NULL, 'OYKWOT3W8BQNGX1CQEVF', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(13, 'Paul', 'paul@hotmail.com', NULL, '9Q6931FL7B LTYEX73U', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(14, 'Domenica', 'domenica@hotmail.com', NULL, 'A2CUG67KJRGNNUBUTG0W', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(15, 'Jorge', 'jorge@hotmail.com', NULL, 'TYIHO5LWQT7KU9VG SKQ', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(16, 'Jaime', 'jaime@hotmail.com', NULL, '$2y$10$lCk.f7YVXwU6/aaW02fxJu6oVe/iO67hkxbKBFY.qgLq6i0hPk1r.', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(17, 'Alejandro', 'alejandro@hotmail.com', NULL, 'A07TRE37WG7M7Y82D IU', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(18, 'Carlos', 'carlos@hotmail.com', NULL, 'VOY1PN PPLUGLUT26I9R', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(19, 'Cristian', 'cristian@hotmail.com', NULL, 'OW7BWSX948G1EIS0 628', 'Ingeniería en Sistemas', 6, NULL, NULL, 1, NULL, NULL, NULL),
(20, 'Victor', 'victor@hotmail.com', NULL, 'UDRT1DW B30FIWI7NPTS', 'Ingeniería en Sistemas', 6, NULL, NULL, 0, NULL, NULL, NULL),
(21, 'Leonardo', 'leonardo@hotmail.com', NULL, '7RSDY26C9I9LPFVSMS7K', 'Ingeniería en Sistemas', 6, NULL, NULL, 0, NULL, NULL, NULL),
(22, 'Kaii', 'kaii@email.com', NULL, '$2y$10$Z.JuoLhXkGGDJZ2d2NGQj.r9ilP0zY1QsF3RTvA/pFGvHADjJA.qG', '9', NULL, 'user4.jpg', '1999-10-05', 1, NULL, '2020-10-16 01:28:44', '2020-10-22 04:02:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`USERID`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`GRUPOID`);

--
-- Indices de la tabla `grupo_x_usuario`
--
ALTER TABLE `grupo_x_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`POSTID`),
  ADD KEY `FK_TIENE` (`GRUPOID`),
  ADD KEY `FK_TIENE2` (`USERID`);

--
-- Indices de la tabla `publicacion_x_usuario`
--
ALTER TABLE `publicacion_x_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_publicacion` (`POSTID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `GRUPOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `grupo_x_usuario`
--
ALTER TABLE `grupo_x_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `POSTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `publicacion_x_usuario`
--
ALTER TABLE `publicacion_x_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`GRUPOID`) REFERENCES `grupo` (`GRUPOID`) ON DELETE CASCADE;

--
-- Filtros para la tabla `publicacion_x_usuario`
--
ALTER TABLE `publicacion_x_usuario`
  ADD CONSTRAINT `FK_publicacion_pxu` FOREIGN KEY (`POSTID`) REFERENCES `publicacion` (`POSTID`) ON DELETE CASCADE,
  ADD CONSTRAINT `p_publicacion` FOREIGN KEY (`POSTID`) REFERENCES `publicacion` (`POSTID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
