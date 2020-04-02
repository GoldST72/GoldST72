-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2020 a las 01:38:54
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mateo`
--
CREATE DATABASE IF NOT EXISTS `mateo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mateo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_alumno`
--

CREATE TABLE `q_alumno` (
  `id_alumno` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  `curso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_alumno`
--

INSERT INTO `q_alumno` (`id_alumno`, `estado`, `persona_id`, `curso_id`) VALUES
(6, 'ACTIVO', 8, 1),
(7, 'ACTIVO', 8, 2),
(8, 'INACTIVO', 7, 2),
(9, 'ACTIVO', 4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_curso`
--

CREATE TABLE `q_curso` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `paralelo` varchar(12) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_curso`
--

INSERT INTO `q_curso` (`id_curso`, `curso`, `descripcion`, `paralelo`, `estado`) VALUES
(1, 'Tercero', 'sin descripcion', 'B', 'INACTIVO'),
(2, 'Cuarto', 'Ninguna', 'A', 'ACTIVO'),
(3, 'Quinto', 'Poo', '', 'ACTIVO'),
(4, 'Sexto', 'Base datos', '', 'ACTIVO'),
(5, '2', 'CURSO DE MATEMATICAS', '13', 'INACTIVO'),
(6, '5', 'CURSO DE PROGRAMACION', 'C', 'ACTIVO'),
(7, '6', 'CURSO DE BASE DATOS', 'E', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_curso_examenes`
--

CREATE TABLE `q_curso_examenes` (
  `id` int(11) NOT NULL,
  `examen_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_curso_examenes`
--

INSERT INTO `q_curso_examenes` (`id`, `examen_id`, `curso_id`) VALUES
(1, 1, 1),
(2, 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_examen`
--

CREATE TABLE `q_examen` (
  `id_examen` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_examen`
--

INSERT INTO `q_examen` (`id_examen`, `nombre`, `estado`, `materia`) VALUES
(1, 'estadistica', 'INACTIVO', 3),
(2, 'palabras', 'ACTIVO', 2),
(3, 'MEDIA ARITMETICA', NULL, 1),
(4, 'MODA', 'ACTIVO', 1),
(5, 'MATRICES', 'ACTIVO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_materia`
--

CREATE TABLE `q_materia` (
  `id_materia` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_materia`
--

INSERT INTO `q_materia` (`id_materia`, `descripcion`, `estado`) VALUES
(1, 'MATEMATICA', 'ACTIVO'),
(2, 'LENGUAGE', 'ACTIVO'),
(3, 'YA', 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_menu`
--

CREATE TABLE `q_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `url` varchar(60) NOT NULL,
  `menu_padre` int(11) DEFAULT NULL,
  `tipo_menu` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_menu`
--

INSERT INTO `q_menu` (`id_menu`, `nombre`, `estado`, `url`, `menu_padre`, `tipo_menu`) VALUES
(1, 'Seguridad', 'ACTIVO', '#', NULL, 'PADRE'),
(3, 'Usuarios', 'ACTIVO', 'seguridad:usuarios', 1, 'HIJO'),
(4, 'Permisos', 'ACTIVO', 'seguridad:permisos', 1, 'HIJO'),
(5, 'Personas', 'ACTIVO', 'seguridad:personas', 1, 'HIJO'),
(6, 'Sección Estudiante', 'ACTIVO', '#', NULL, 'PADRE'),
(7, 'Cursos', 'ACTIVO', 'asignacion:cursos', 8, 'HIJO'),
(8, 'Seccion profesor', 'ACTIVO', '#', NULL, 'PADRE'),
(9, 'Alumnos', 'ACTIVO', 'asignacion:alumnos', 8, 'HIJO'),
(10, 'Examenes', 'ACTIVO', '#', 8, 'HIJO'),
(12, 'Opciones', 'ACTIVO', '#', 8, 'HIJO'),
(13, 'Preguntas', 'ACTIVO', '#', 8, 'HIJO'),
(14, 'Asignar examenes', 'ACTIVO', '#', 8, 'HIJO'),
(15, 'Anexos', 'ACTIVO', 'evaluacion:anexos', 8, 'HIJO'),
(16, 'Evaluaciones', 'ACTIVO', '#', 6, 'HIJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_opciones`
--

CREATE TABLE `q_opciones` (
  `id_opcion` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `respuesta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_opciones`
--

INSERT INTO `q_opciones` (`id_opcion`, `descripcion`, `estado`, `respuesta`) VALUES
(1, '4', 'ACTIVO', 1),
(2, '5', 'ACTIVO', 0),
(3, 'po', 'ACTIVO', 0),
(9, 'cuatro', 'ACTIVO', 1),
(10, '5+5', 'ACTIVO', 0),
(11, '21', 'INACTIVO', 1),
(12, '1', 'INACTIVO', 1),
(13, 'pre-seleccion', 'ACTIVO', 1),
(15, '3', 'ACTIVO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_persona`
--

CREATE TABLE `q_persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_persona`
--

INSERT INTO `q_persona` (`id_persona`, `nombres`, `apellidos`, `cedula`, `estado`) VALUES
(4, 'Mauricio', 'Santillan', '0950596353', 'ACTIVO'),
(5, 'pedro', 'moncayo', '0950596344', 'INACTIVO'),
(6, 'Manuel', 'figueroa', '0950597842', 'INACTIVO'),
(7, 'Mateo', 'Hidalgo', '1724911217', 'ACTIVO'),
(8, 'PENE', 'MILENKO', '1234567825', 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_preguntas`
--

CREATE TABLE `q_preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` longtext NOT NULL,
  `id_examen` int(11) NOT NULL,
  `anexo` longtext,
  `id_opcion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_preguntas`
--

INSERT INTO `q_preguntas` (`id_pregunta`, `pregunta`, `id_examen`, `anexo`, `id_opcion`) VALUES
(1, '2 +2 ', 1, NULL, NULL),
(2, '¿cuanto es 2 + 2?', 1, 'www.xvideos.com', 1),
(3, '¿cuanto es 3 + 2?', 1, 'www.xvideos.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_rol`
--

CREATE TABLE `q_rol` (
  `id_rol` int(11) NOT NULL,
  `rol_nombre` varchar(45) NOT NULL,
  `rol_estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_rol`
--

INSERT INTO `q_rol` (`id_rol`, `rol_nombre`, `rol_estado`) VALUES
(2, 'ADMINISTRADOR', 'INACTIVO'),
(3, 'PROFESOR', 'ACTIVO'),
(4, 'ALUMNO', 'ACTIVO'),
(5, 'EMPLEADO ADMINITRATIVO', 'ACTIVO'),
(6, 'MANTENIMIENTO', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_usuario`
--

CREATE TABLE `q_usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `clave` varchar(45) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_persona` int(11) NOT NULL,
  `rol_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `q_usuario`
--

INSERT INTO `q_usuario` (`id_usuario`, `usuario`, `correo`, `clave`, `estado`, `id_persona`, `rol_usuario`) VALUES
(1, 'admin1', 'example@gmail.com', 'admin', 'INACTIVO', 4, 2),
(2, 'usuario', 'usuario@gmail.com', 'usuario', 'ACTIVO', 5, 4),
(3, 'DANKO', 'milenkonegrete@cocheo.com', '6969724', 'ACTIVO', 8, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `q_alumno`
--
ALTER TABLE `q_alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `alumno_persona_alumno_bc924863_fk_persona_id_persona` (`persona_id`),
  ADD KEY `alumno_curso_id_bd352814_fk_curso_id_curso` (`curso_id`);

--
-- Indices de la tabla `q_curso`
--
ALTER TABLE `q_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `q_curso_examenes`
--
ALTER TABLE `q_curso_examenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_examenes_curso_id_9afc9fd6_fk_curso_id_curso` (`curso_id`),
  ADD KEY `examen_id_idx` (`examen_id`);

--
-- Indices de la tabla `q_examen`
--
ALTER TABLE `q_examen`
  ADD PRIMARY KEY (`id_examen`),
  ADD KEY `examen_materia_d245d964_fk_materia_id_materia` (`materia`);

--
-- Indices de la tabla `q_materia`
--
ALTER TABLE `q_materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `q_menu`
--
ALTER TABLE `q_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD UNIQUE KEY `descripcion` (`nombre`),
  ADD KEY `menu_menu_padre_74321b51_fk_menu_id_menu` (`menu_padre`);

--
-- Indices de la tabla `q_opciones`
--
ALTER TABLE `q_opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD UNIQUE KEY `opciones_descripcion_849af30b_uniq` (`descripcion`);

--
-- Indices de la tabla `q_persona`
--
ALTER TABLE `q_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `persona_cedula_f74f5552_uniq` (`cedula`);

--
-- Indices de la tabla `q_preguntas`
--
ALTER TABLE `q_preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `preguntas_id_examen_6304a803_fk_examen_id_examen` (`id_examen`),
  ADD KEY `opcion_idx` (`id_opcion`);

--
-- Indices de la tabla `q_rol`
--
ALTER TABLE `q_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `q_usuario`
--
ALTER TABLE `q_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario_id_persona_dd575d1f_uniq` (`id_persona`),
  ADD KEY `usuario_rol_usuario_c54bbc57_fk_rol_id_rol` (`rol_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `q_alumno`
--
ALTER TABLE `q_alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `q_curso`
--
ALTER TABLE `q_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `q_curso_examenes`
--
ALTER TABLE `q_curso_examenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `q_examen`
--
ALTER TABLE `q_examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `q_materia`
--
ALTER TABLE `q_materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `q_menu`
--
ALTER TABLE `q_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `q_opciones`
--
ALTER TABLE `q_opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `q_persona`
--
ALTER TABLE `q_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `q_preguntas`
--
ALTER TABLE `q_preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `q_rol`
--
ALTER TABLE `q_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `q_usuario`
--
ALTER TABLE `q_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `q_alumno`
--
ALTER TABLE `q_alumno`
  ADD CONSTRAINT `alumno_curso_id_bd352814_fk_curso_id_curso` FOREIGN KEY (`curso_id`) REFERENCES `q_curso` (`id_curso`),
  ADD CONSTRAINT `alumno_persona_alumno_bc924863_fk_persona_id_persona` FOREIGN KEY (`persona_id`) REFERENCES `q_persona` (`id_persona`);

--
-- Filtros para la tabla `q_curso_examenes`
--
ALTER TABLE `q_curso_examenes`
  ADD CONSTRAINT `curso_examenes_curso_id_9afc9fd6_fk_curso_id_curso` FOREIGN KEY (`curso_id`) REFERENCES `q_curso` (`id_curso`),
  ADD CONSTRAINT `examen_id` FOREIGN KEY (`examen_id`) REFERENCES `q_examen` (`id_examen`);

--
-- Filtros para la tabla `q_examen`
--
ALTER TABLE `q_examen`
  ADD CONSTRAINT `examen_materia_d245d964_fk_materia_id_materia` FOREIGN KEY (`materia`) REFERENCES `q_materia` (`id_materia`);

--
-- Filtros para la tabla `q_preguntas`
--
ALTER TABLE `q_preguntas`
  ADD CONSTRAINT `opcion` FOREIGN KEY (`id_opcion`) REFERENCES `q_opciones` (`id_opcion`),
  ADD CONSTRAINT `preguntas_id_examen_6304a803_fk_examen_id_examen` FOREIGN KEY (`id_examen`) REFERENCES `q_examen` (`id_examen`);

--
-- Filtros para la tabla `q_usuario`
--
ALTER TABLE `q_usuario`
  ADD CONSTRAINT `usuario_id_persona_dd575d1f_fk_persona_id_persona` FOREIGN KEY (`id_persona`) REFERENCES `q_persona` (`id_persona`),
  ADD CONSTRAINT `usuario_rol_usuario_c54bbc57_fk_rol_id_rol` FOREIGN KEY (`rol_usuario`) REFERENCES `q_rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
