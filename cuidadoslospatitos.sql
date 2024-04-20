-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2024 a las 15:46:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuidadoslospatitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Id`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialistas`
--

CREATE TABLE `especialistas` (
  `especialista_id` int(11) NOT NULL,
  `nombre_empleado` varchar(50) DEFAULT NULL,
  `numero_cedula` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `horario_puesto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialistas`
--

INSERT INTO `especialistas` (`especialista_id`, `nombre_empleado`, `numero_cedula`, `fecha_ingreso`, `horario`, `horario_puesto_id`) VALUES
(1, 'El cubano', '12345678', '2016-04-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `habitacion_id` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_limpieza` date DEFAULT NULL,
  `personal_limpieza` varchar(50) DEFAULT NULL,
  `mantenimiento_descripcion` varchar(50) DEFAULT NULL,
  `mobiliario_actualizado` varchar(50) DEFAULT NULL,
  `reparaciones_recomendadas` varchar(50) DEFAULT NULL,
  `estado_habitacion_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `mascota_id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dueño` varchar(50) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `veterinario` varchar(50) DEFAULT NULL,
  `cuidados_especiales_id` int(11) DEFAULT NULL,
  `nivel_asistencia_id` int(11) DEFAULT NULL,
  `paquetes_adicionales_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`mascota_id`, `nombre`, `dueño`, `cedula`, `fecha_ingreso`, `veterinario`, `cuidados_especiales_id`, `nivel_asistencia_id`, `paquetes_adicionales_id`) VALUES
(1, 'Nacho', 'Emilio Caballero', '503690579', '2024-04-15', 'Cuba', 3, 1, 1),
(2, 'Flecha', 'maria', '45678', '2024-04-20', 'El Cubano', 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitoreo`
--

CREATE TABLE `monitoreo` (
  `monitoreo_id` int(11) NOT NULL,
  `reserva_id` int(11) DEFAULT NULL,
  `acceso_permitido` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionescuidadosespeciales`
--

CREATE TABLE `opcionescuidadosespeciales` (
  `id` int(11) NOT NULL,
  `opcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionescuidadosespeciales`
--

INSERT INTO `opcionescuidadosespeciales` (`id`, `opcion`) VALUES
(1, 'Alergias'),
(2, 'Cambios de vendajes'),
(3, 'Dietas especiales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesestadohabitaciones`
--

CREATE TABLE `opcionesestadohabitaciones` (
  `id` int(11) NOT NULL,
  `estado_habitacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionesestadohabitaciones`
--

INSERT INTO `opcionesestadohabitaciones` (`id`, `estado_habitacion`) VALUES
(1, 'Disponible'),
(2, 'Reservadas'),
(3, 'En mantenimiento'),
(4, 'Cerradas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesestancia`
--

CREATE TABLE `opcionesestancia` (
  `id` int(11) NOT NULL,
  `estancia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionesestancia`
--

INSERT INTO `opcionesestancia` (`id`, `estancia`) VALUES
(1, 'Día 8 am – 5 pm'),
(2, 'Mañana de 8 am – 2 pm'),
(3, 'Tarde de 2 pm – 6 pm'),
(4, 'Full estancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcioneshorario`
--

CREATE TABLE `opcioneshorario` (
  `id` int(11) NOT NULL,
  `horario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcioneshorario`
--

INSERT INTO `opcioneshorario` (`id`, `horario`) VALUES
(1, 'Horario 1 de 6 am – 3 pm'),
(2, 'Horario 2 de 3 pm – 10 pm'),
(3, 'Horario 3 de 10 pm – 6 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesnivelasistencia`
--

CREATE TABLE `opcionesnivelasistencia` (
  `id` int(11) NOT NULL,
  `opcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionesnivelasistencia`
--

INSERT INTO `opcionesnivelasistencia` (`id`, `opcion`) VALUES
(1, 'Asistencia básica'),
(2, 'Asistencia para movilidad'),
(3, 'Asistencia para alimentación'),
(4, 'Asistencia para baño'),
(5, 'Asistencia completa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionespaquetesadicionales`
--

CREATE TABLE `opcionespaquetesadicionales` (
  `id` int(11) NOT NULL,
  `opcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionespaquetesadicionales`
--

INSERT INTO `opcionespaquetesadicionales` (`id`, `opcion`) VALUES
(1, 'Disfrute de juegos'),
(2, 'Paseos a sitios con acompañamiento'),
(3, 'Paseo a espacio con piscina'),
(4, 'Terapias en piscina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionestiempoestancia`
--

CREATE TABLE `opcionestiempoestancia` (
  `id` int(11) NOT NULL,
  `tiempo_estancia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionestiempoestancia`
--

INSERT INTO `opcionestiempoestancia` (`id`, `tiempo_estancia`) VALUES
(1, 'Fecha de inicio'),
(2, 'Fecha de fin'),
(3, 'Indefinido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionestipohabitacion`
--

CREATE TABLE `opcionestipohabitacion` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionestipohabitacion`
--

INSERT INTO `opcionestipohabitacion` (`id`, `tipo_habitacion`) VALUES
(1, 'Habitación individual'),
(2, 'Habitación individual con cámara'),
(3, 'Habitación de cuidados especiales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `reserva_id` int(11) NOT NULL,
  `mascota_id` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `tipo_estancia` varchar(50) DEFAULT NULL,
  `tipo_habitacion` varchar(50) DEFAULT NULL,
  `tiempo_estancia_id` int(11) DEFAULT NULL,
  `estancia_id` int(11) DEFAULT NULL,
  `tipo_habitacion_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`reserva_id`, `mascota_id`, `fecha_inicio`, `fecha_fin`, `tipo_estancia`, `tipo_habitacion`, `tiempo_estancia_id`, `estancia_id`, `tipo_habitacion_id`) VALUES
(1, 2, '2024-04-20', '2024-04-27', 'Hospedaje', 'nature', 2, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Contraseña` varchar(250) NOT NULL,
  `ID_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Correo`, `Contraseña`, `ID_cargo`) VALUES
(1, 'Emilio', 'Ecaballero@patitos.com', '12345', 1),
(2, 'Antonio', 'Toño@beagle.com', 'guau', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  ADD PRIMARY KEY (`especialista_id`),
  ADD KEY `FK_HorarioPuesto` (`horario_puesto_id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`habitacion_id`),
  ADD KEY `FK_EstadoHabitacion` (`estado_habitacion_id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`mascota_id`),
  ADD KEY `FK_CuidadosEspeciales` (`cuidados_especiales_id`),
  ADD KEY `FK_NivelAsistencia` (`nivel_asistencia_id`),
  ADD KEY `FK_PaquetesAdicionales` (`paquetes_adicionales_id`);

--
-- Indices de la tabla `monitoreo`
--
ALTER TABLE `monitoreo`
  ADD PRIMARY KEY (`monitoreo_id`),
  ADD KEY `reserva_id` (`reserva_id`);

--
-- Indices de la tabla `opcionescuidadosespeciales`
--
ALTER TABLE `opcionescuidadosespeciales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionesestadohabitaciones`
--
ALTER TABLE `opcionesestadohabitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionesestancia`
--
ALTER TABLE `opcionesestancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcioneshorario`
--
ALTER TABLE `opcioneshorario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionesnivelasistencia`
--
ALTER TABLE `opcionesnivelasistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionespaquetesadicionales`
--
ALTER TABLE `opcionespaquetesadicionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionestiempoestancia`
--
ALTER TABLE `opcionestiempoestancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionestipohabitacion`
--
ALTER TABLE `opcionestipohabitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`reserva_id`),
  ADD KEY `mascota_id` (`mascota_id`),
  ADD KEY `FK_TiempoEstancia` (`tiempo_estancia_id`),
  ADD KEY `FK_Estancia` (`estancia_id`),
  ADD KEY `FK_TipoHabitacion` (`tipo_habitacion_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ID_cargo` (`ID_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `mascota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `especialistas`
--
ALTER TABLE `especialistas`
  ADD CONSTRAINT `FK_HorarioPuesto` FOREIGN KEY (`horario_puesto_id`) REFERENCES `opcioneshorario` (`id`);

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `FK_EstadoHabitacion` FOREIGN KEY (`estado_habitacion_id`) REFERENCES `opcionesestadohabitaciones` (`id`);

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `FK_CuidadosEspeciales` FOREIGN KEY (`cuidados_especiales_id`) REFERENCES `opcionescuidadosespeciales` (`id`),
  ADD CONSTRAINT `FK_NivelAsistencia` FOREIGN KEY (`nivel_asistencia_id`) REFERENCES `opcionesnivelasistencia` (`id`),
  ADD CONSTRAINT `FK_PaquetesAdicionales` FOREIGN KEY (`paquetes_adicionales_id`) REFERENCES `opcionespaquetesadicionales` (`id`);

--
-- Filtros para la tabla `monitoreo`
--
ALTER TABLE `monitoreo`
  ADD CONSTRAINT `monitoreo_ibfk_1` FOREIGN KEY (`reserva_id`) REFERENCES `reservaciones` (`reserva_id`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `FK_Estancia` FOREIGN KEY (`estancia_id`) REFERENCES `opcionesestancia` (`id`),
  ADD CONSTRAINT `FK_TiempoEstancia` FOREIGN KEY (`tiempo_estancia_id`) REFERENCES `opcionestiempoestancia` (`id`),
  ADD CONSTRAINT `FK_TipoHabitacion` FOREIGN KEY (`tipo_habitacion_id`) REFERENCES `opcionestipohabitacion` (`id`),
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`mascota_id`) REFERENCES `mascotas` (`mascota_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_cargo`) REFERENCES `cargo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
