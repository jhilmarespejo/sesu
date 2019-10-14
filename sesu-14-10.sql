-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 00:09:27
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sesu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE IF NOT EXISTS `administrativo` (
  `sala_id` int(11) NOT NULL,
  `libro_actas` tinyint(1) DEFAULT NULL,
  `cuaderno_visitas` tinyint(1) DEFAULT NULL,
  `planilla_asistencia_personal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrativo`
--

INSERT INTO `administrativo` (`sala_id`, `libro_actas`, `cuaderno_visitas`, `planilla_asistencia_personal`) VALUES
(0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE IF NOT EXISTS `ambiente` (
  `sala_id` int(11) NOT NULL,
  `distribucion_equipamiento` varchar(2) DEFAULT NULL,
  `material_educativo_actividades` varchar(2) DEFAULT NULL,
  `material_clasificado_alcance` varchar(2) DEFAULT NULL,
  `paredes_ilustradas` varchar(2) DEFAULT NULL,
  `exposicion_trabajos` varchar(2) DEFAULT NULL,
  `cuadro_monitoreo_dia` varchar(2) DEFAULT NULL,
  `material_limpieza_cautela` varchar(2) DEFAULT NULL,
  `material_riesgo_cautela` varchar(2) DEFAULT NULL,
  `enchufes_cubiertos` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carpetaedus`
--

CREATE TABLE IF NOT EXISTS `carpetaedus` (
  `sala_id` int(11) NOT NULL,
  `form_registro_asistencia` varchar(2) DEFAULT NULL,
  `horario_actividades` varchar(2) DEFAULT NULL,
  `planificacion_semanal_ejec` varchar(2) DEFAULT NULL,
  `centralizador_aprendizaje_semanal_ejec` varchar(2) DEFAULT NULL,
  `plan_educativo_comp` varchar(2) DEFAULT NULL,
  `ficha_visita_domiciliaria` varchar(2) DEFAULT NULL,
  `form_ref_contraref` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carpetaninos`
--

CREATE TABLE IF NOT EXISTS `carpetaninos` (
  `sala_id` int(11) NOT NULL,
  `ficha_social` varchar(2) DEFAULT NULL,
  `compromiso_pf` varchar(2) DEFAULT NULL,
  `formulario_buentrato` varchar(2) DEFAULT NULL,
  `ci_certificado` varchar(2) DEFAULT NULL,
  `ci_pf` varchar(2) DEFAULT NULL,
  `croquis_domicilio` varchar(2) DEFAULT NULL,
  `facturas_servicios` varchar(2) DEFAULT NULL,
  `extracto_afp_pf` varchar(2) DEFAULT NULL,
  `pap` varchar(2) DEFAULT NULL,
  `personas_autorizadas` varchar(2) DEFAULT NULL,
  `ficha_psicologica` varchar(2) DEFAULT NULL,
  `ficha_seguimiento_psicol` varchar(2) DEFAULT NULL,
  `ficha_adaptacion_psicol` varchar(2) DEFAULT NULL,
  `ficha_adaptacion_educ` varchar(2) DEFAULT NULL,
  `formulario_ead` varchar(2) DEFAULT NULL,
  `ead_llena_edad` varchar(2) DEFAULT NULL,
  `ficha_diag_pedagogico` varchar(2) DEFAULT NULL,
  `cuadro_monitoreo_grafico_ead` varchar(2) DEFAULT NULL,
  `ficha_seg_pedagogico_men` varchar(2) DEFAULT NULL,
  `centralizador_mensual` varchar(2) DEFAULT NULL,
  `ficha_seg_patologias` varchar(2) DEFAULT NULL,
  `csi_aldia` varchar(2) DEFAULT NULL,
  `csi` varchar(2) DEFAULT NULL,
  `hoja_evolucion_medica` varchar(2) DEFAULT NULL,
  `monitoreo_nutricional` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroinfantil`
--

CREATE TABLE IF NOT EXISTS `centroinfantil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `administrador` varchar(45) DEFAULT NULL,
  `cobertura` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centroinfantil`
--

INSERT INTO `centroinfantil` (`id`, `nombre`, `tipo`, `administrador`, `cobertura`) VALUES
(1, '14 DE SEPTIEMBRE', NULL, 'PAOLA POZO', '30'),
(2, '14 DE SEPTIEMBRE VENTILLA', NULL, 'PAOLA POZO', '30'),
(3, '16 DE FEBRERO', NULL, 'PAMELA MAMANI', '30'),
(4, '16 DE NOVIEMBRE', NULL, 'VICENTE FERNANDEZ', '60'),
(5, '21 DE DICIEMBRE', NULL, 'PAMELA MAMANI', '30'),
(6, '27 DE MAYO', NULL, 'VICENTE FERNANDEZ', '20'),
(7, '27 DE MAYO WARAS', NULL, 'LEYDI CASAS', '20'),
(8, 'ADONAI', NULL, 'VICENTE FERNANDEZ', '30'),
(9, 'AGUA DE LA VIDA', NULL, 'LEYDI CASAS', '20'),
(10, 'AMIG CHACO', NULL, 'FLAVIA CALCINA', '30'),
(11, 'AMOR DE DIOS', NULL, 'MIRIAM CONDORI', '100'),
(12, 'ANEXO 7 DE SEPTIEMBRE', NULL, 'PAOLA POZO', '30'),
(13, 'ANGEL DE MI GUARDA', NULL, 'MAITE CONDORI', '60'),
(14, 'APOSTOL SANTIAGO', NULL, 'MIRIAM CONDORI', '30'),
(15, 'ARCO IRIS', NULL, 'MAITE CONDORI', '40'),
(16, 'BAUTISTA SAAVEDRA', NULL, 'WILMA MAMANI', '70'),
(17, 'BEATA PIEDAD DE LA CRUZ', NULL, 'FLAVIA CALCINA', '106'),
(18, 'BRASIL LOS AZULITOS', NULL, 'PAMELA MAMANI', '60'),
(19, 'CALAMA', NULL, 'FLAVIA CALCINA', '30'),
(20, 'CAMPANITAS', NULL, 'ANGELA HURTADO', '40'),
(21, 'CASA DE LOS NIÑOS', NULL, 'VICENTE FERNANDEZ', '60'),
(22, 'CENTRO SOCIAL S.O.S.', NULL, 'SILVIA AQUIZE', '88'),
(23, 'CHARAPAQUI II', NULL, 'FLAVIA CALCINA', '0'),
(24, 'COMPLEMENTO YUNGUYO', NULL, 'LAURA PEREZ PATON', '30'),
(25, 'COMUNITARIO BOLIVAR "D"', NULL, 'MAITE CONDORI', '40'),
(26, 'CONCEPCION', NULL, 'VICENTE FERNANDEZ', '20'),
(27, 'CRISTO DEL CONSUELO', NULL, 'VICENTE FERNANDEZ', '77'),
(28, 'DOLORES I', NULL, 'SILVIA AQUIZE', '40'),
(29, 'DON BOSCO SANTA ROSA', NULL, 'PAMELA MAMANI', '30'),
(30, 'ESPECIAL MURURATA', NULL, 'PAOLA POZO', '20'),
(31, 'GERMAN BUSCH BECERRA', NULL, 'WILMA MAMANI', '60'),
(32, 'HORIZONTES I', NULL, 'PAMELA MAMANI', '30'),
(33, 'HORIZONTES II', NULL, 'PAMELA MAMANI', '30'),
(34, 'HUAYNA POTOSI CARITAS ALEGRES', NULL, 'PAOLA POZO', '60'),
(35, 'INGAVI "B"', NULL, 'VICENTE FERNANDEZ', '30'),
(36, 'JARDIN DE AMOR', NULL, 'PAMELA MAMANI', '40'),
(37, 'JERUSALEN', NULL, 'PAOLA POZO', '60'),
(38, 'JUNTHUMA', NULL, 'VICENTE FERNANDEZ', '20'),
(39, 'KISWARAS', NULL, 'PAOLA POZO', '30'),
(40, 'LA PAZ', NULL, 'WILMA MAMANI', '30'),
(41, 'LOS ANGELES FUTECRA', NULL, 'WILMA MAMANI', '30'),
(42, 'MACHAQ MARKA', NULL, 'MAITE CONDORI', '30'),
(43, 'MARIA AUXILIADORA', NULL, 'LEYDI CASAS', '100'),
(44, 'MENESIANO YURIÑANI', NULL, 'ANGELA HURTADO', '109'),
(45, 'MERCEDES UV-G LUCERITO', NULL, 'MAITE CONDORI', '20'),
(46, 'NUEVA ASUNCION', NULL, 'PAMELA MAMANI', '40'),
(47, 'NUEVA CANAAN LUZ Y VIDA', NULL, 'SILVIA AQUIZE', '30'),
(48, 'NUEVA MARKA', NULL, 'LEYDI CASAS', '132'),
(49, 'ORO NEGRO', NULL, 'LEYDI CASAS', '40'),
(50, 'PALLIRI', NULL, 'VICENTE FERNANDEZ', '20'),
(51, 'POR UN MUNDO MEJOR', NULL, 'PAOLA POZO', '50'),
(52, 'PORVENIR RAYITO DE SOL', NULL, 'MAITE CONDORI', '30'),
(53, 'PULGARCITO', NULL, 'MAITE CONDORI', '30'),
(54, 'RAYITO DE LUZ', NULL, 'WILMA MAMANI', '30'),
(55, 'RINCONCITO', NULL, 'WILMA MAMANI', '36'),
(56, 'ROSAS PAMPA', NULL, 'LEYDI CASAS', '20'),
(57, 'SAGRADO CORAZON DE JESUS', NULL, 'JANNETT LUJAN', '197'),
(58, 'SAN AGUSTIN', NULL, 'YOVANA PACHECO', '20'),
(59, 'SAN FRANCISCO DE ASIS', NULL, 'FLAVIA CALCINA', '150'),
(60, 'SAN JOSE DE CHARAPAQUI', NULL, 'PAOLA POZO', '30'),
(61, 'SAN JOSE DE YUNGUYO', NULL, 'WILMA MAMANI', '20'),
(62, 'SAN MARTIN', NULL, 'MAITE CONDORI', '60'),
(63, 'SAN MIGUEL', NULL, 'SILVIA AQUIZE', '70'),
(64, 'SAN PABLO', NULL, 'LEYDI CASAS', '20'),
(65, 'SAN PEDRO', NULL, 'FLAVIA CALCINA', '20'),
(66, 'SAN URBANO', NULL, 'SILVIA AQUIZE', '30'),
(67, 'SANTA ROSA DE LIMA', NULL, 'SILVIA AQUIZE', '20'),
(68, 'SANTIAGO II - 1', NULL, 'FLAVIA CALCINA', '80'),
(69, 'SANTOS MAMANI', NULL, 'SILVIA AQUIZE', '30'),
(70, 'TAHUANTINSUYO', NULL, 'WILMA MAMANI', '60'),
(71, 'TUPAC KATARI "CAPULLITOS"', NULL, 'WILMA MAMANI', '30'),
(72, 'VILLA ALEMANIA', NULL, 'MAITE CONDORI', '30'),
(73, 'VILLA COOPERATIVA', NULL, 'LAURA PEREZ PATON', '30'),
(74, 'VILLA INGENIO', NULL, 'PAMELA MAMANI', '60'),
(75, 'VIRGEN DE LA FUENSANTA', NULL, 'FLAVIA CALCINA', '124'),
(76, 'VIRGEN DEL ROSARIO', NULL, 'SILVIA AQUIZE', '30'),
(77, 'VIRGEN NIÑA - EPDB', NULL, 'LEYDI CASAS', '100'),
(78, 'WAWA UTA - SANTIAGO I', NULL, 'SILVIA AQUIZE', '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

CREATE TABLE IF NOT EXISTS `cocina` (
  `sala_id` int(11) NOT NULL,
  `servicios_limpios` varchar(2) DEFAULT NULL,
  `cocina_limpia` varchar(2) DEFAULT NULL,
  `uso_sdecuado_uniforme` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito`
--

CREATE TABLE IF NOT EXISTS `deposito` (
  `sala_id` int(11) NOT NULL,
  `tarimas` varchar(2) DEFAULT NULL,
  `estantes` varchar(2) DEFAULT NULL,
  `almacenamiento_adecuado` varchar(2) DEFAULT NULL,
  `sin_basura` varchar(2) DEFAULT NULL,
  `ordenado` varchar(2) DEFAULT NULL,
  `deposito_ventilado` varchar(2) DEFAULT NULL,
  `sin_humedad` varchar(2) DEFAULT NULL,
  `puertas_seguridad` varchar(2) DEFAULT NULL,
  `sin_roedores` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educadoras`
--

CREATE TABLE IF NOT EXISTS `educadoras` (
  `sala_id` int(11) NOT NULL,
  `guia_orienta_ninos` varchar(2) DEFAULT NULL,
  `escucha_responde_ninos` varchar(2) DEFAULT NULL,
  `pendiente_ninos` varchar(2) DEFAULT NULL,
  `dirige_nino_nombre` varchar(2) DEFAULT NULL,
  `comunicación_asertiva` varchar(2) DEFAULT NULL,
  `metodo_ludico` varchar(2) DEFAULT NULL,
  `apoyo_alimentacion` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eduinicial`
--

CREATE TABLE IF NOT EXISTS `eduinicial` (
  `sala_id` int(11) NOT NULL,
  `planificacion_lugar_visible` varchar(2) DEFAULT NULL,
  `form_signos_vitales_visible` varchar(2) DEFAULT NULL,
  `centralizador_ev_aprendizaje` varchar(2) DEFAULT NULL,
  `cumple_horario_actividades` varchar(2) DEFAULT NULL,
  `actividades_relacion_planif` varchar(2) DEFAULT NULL,
  `material_educativo` varchar(2) DEFAULT NULL,
  `cuaderno_novedades` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `higiene`
--

CREATE TABLE IF NOT EXISTS `higiene` (
  `sala_id` int(11) NOT NULL,
  `uñas_cortadas` varchar(2) DEFAULT NULL,
  `restos_nasales` varchar(2) DEFAULT NULL,
  `higiene_dental` varchar(2) DEFAULT NULL,
  `lavado_manos` varchar(2) DEFAULT NULL,
  `peinados` varchar(2) DEFAULT NULL,
  `ropa_adecuada_limpia` varchar(2) DEFAULT NULL,
  `uñas_esmalte` varchar(2) DEFAULT NULL,
  `cabello_recogido` varchar(2) DEFAULT NULL,
  `sin_accesorios` varchar(2) DEFAULT NULL,
  `ropa_comoda` varchar(2) DEFAULT NULL,
  `uñas_limpias` varchar(2) DEFAULT NULL,
  `indumentaria_adecuada` varchar(2) DEFAULT NULL,
  `sin_accesorios_riesgo` varchar(2) DEFAULT NULL,
  `sin_mal_olor` varchar(2) DEFAULT NULL,
  `bano_ventilado` varchar(2) DEFAULT NULL,
  `con_basurero` varchar(2) DEFAULT NULL,
  `bacines_limpios` varchar(2) DEFAULT NULL,
  `piso_seco` varchar(2) DEFAULT NULL,
  `basurero_cubierto` varchar(2) DEFAULT NULL,
  `juguetes_limpios` varchar(2) DEFAULT NULL,
  `colchones_limpios` varchar(2) DEFAULT NULL,
  `alfombras_limpias` varchar(2) DEFAULT NULL,
  `ambiente_ordenado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructura`
--

CREATE TABLE IF NOT EXISTS `infraestructura` (
  `sala_id` int(11) NOT NULL,
  `alcantarillado` varchar(2) DEFAULT NULL,
  `fosa_septica` varchar(2) DEFAULT NULL,
  `electricidad` varchar(2) DEFAULT NULL,
  `agua` varchar(2) DEFAULT NULL,
  `patio_limpio` varchar(2) DEFAULT NULL,
  `patio_puerta_segura` varchar(2) DEFAULT NULL,
  `patio_amurallado` varchar(2) DEFAULT NULL,
  `bano_iluminado` varchar(2) DEFAULT NULL,
  `bano_limpio` varchar(2) DEFAULT NULL,
  `bano_hinodoro_limpio` varchar(2) DEFAULT NULL,
  `bano_lavamanos_limpio` varchar(2) DEFAULT NULL,
  `bano_sin_fugas` varchar(2) DEFAULT NULL,
  `bano_diferenciado` varchar(2) DEFAULT NULL,
  `bano_personal` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE IF NOT EXISTS `ninos` (
  `sala_id` int(11) NOT NULL,
  `participacion_activa` varchar(2) DEFAULT NULL,
  `muestran_interes` varchar(2) DEFAULT NULL,
  `comunicacion_hablada` varchar(2) DEFAULT NULL,
  `comunicacion_jugando` varchar(2) DEFAULT NULL,
  `usan_materiales_didacticos` varchar(2) DEFAULT NULL,
  `alegria_afecto_curiosidad` varchar(2) DEFAULT NULL,
  `alimentan_solos` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nutricion`
--

CREATE TABLE IF NOT EXISTS `nutricion` (
  `sala_id` int(11) NOT NULL,
  `kardex_aldia` varchar(2) DEFAULT NULL,
  `saldos_aldia` varchar(2) DEFAULT NULL,
  `alimentos_relacion_menu` varchar(2) DEFAULT NULL,
  `medidas_estandas` varchar(2) DEFAULT NULL,
  `cumple_horarios` varchar(2) DEFAULT NULL,
  `menu_diferenciado` varchar(2) DEFAULT NULL,
  `menu_especial` varchar(2) DEFAULT NULL,
  `comida_sabrosa` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL,
  `centroinfantil_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `centroinfantil_id`, `nombre`) VALUES
(2, 17, '4 AÑOS'),
(3, 17, '4 AÑOS'),
(4, 57, '4 AÑOS'),
(5, 57, '4 AÑOS'),
(6, 59, '4 AÑOS'),
(7, 59, '4 AÑOS'),
(8, 75, '4 AÑOS'),
(9, 75, '4 AÑOS'),
(10, 59, 'ESPECIALES'),
(11, 59, 'ESPECIALES'),
(12, 59, 'ESPECIALES LEVE'),
(13, 30, 'ESPECIALES PEQUEÑOS'),
(14, 59, 'ESPECIALES PEQUEÑOS'),
(15, 59, 'ESPECIALES PROFUNDOS'),
(16, 1, 'INFANTE 1'),
(17, 2, 'INFANTE 1'),
(18, 3, 'INFANTE 1'),
(19, 4, 'INFANTE 1'),
(20, 5, 'INFANTE 1'),
(21, 6, 'INFANTE 1'),
(22, 7, 'INFANTE 1'),
(23, 8, 'INFANTE 1'),
(24, 9, 'INFANTE 1'),
(25, 10, 'INFANTE 1'),
(26, 12, 'INFANTE 1'),
(27, 13, 'INFANTE 1'),
(28, 14, 'INFANTE 1'),
(29, 15, 'INFANTE 1'),
(30, 16, 'INFANTE 1'),
(31, 18, 'INFANTE 1'),
(32, 19, 'INFANTE 1'),
(33, 20, 'INFANTE 1'),
(34, 24, 'INFANTE 1'),
(35, 25, 'INFANTE 1'),
(36, 26, 'INFANTE 1'),
(37, 28, 'INFANTE 1'),
(38, 31, 'INFANTE 1'),
(39, 31, 'INFANTE 1'),
(40, 32, 'INFANTE 1'),
(41, 33, 'INFANTE 1'),
(42, 34, 'INFANTE 1'),
(43, 35, 'INFANTE 1'),
(44, 36, 'INFANTE 1'),
(45, 37, 'INFANTE 1'),
(46, 38, 'INFANTE 1'),
(47, 39, 'INFANTE 1'),
(48, 40, 'INFANTE 1'),
(49, 41, 'INFANTE 1'),
(50, 42, 'INFANTE 1'),
(51, 45, 'INFANTE 1'),
(52, 46, 'INFANTE 1'),
(53, 47, 'INFANTE 1'),
(54, 49, 'INFANTE 1'),
(55, 51, 'INFANTE 1'),
(56, 52, 'INFANTE 1'),
(57, 53, 'INFANTE 1'),
(58, 54, 'INFANTE 1'),
(59, 58, 'INFANTE 1'),
(60, 60, 'INFANTE 1'),
(61, 61, 'INFANTE 1'),
(62, 62, 'INFANTE 1'),
(63, 64, 'INFANTE 1'),
(64, 65, 'INFANTE 1'),
(65, 66, 'INFANTE 1'),
(66, 67, 'INFANTE 1'),
(67, 68, 'INFANTE 1'),
(68, 69, 'INFANTE 1'),
(69, 70, 'INFANTE 1'),
(70, 71, 'INFANTE 1'),
(71, 72, 'INFANTE 1'),
(72, 73, 'INFANTE 1'),
(73, 74, 'INFANTE 1'),
(74, 74, 'INFANTE 1'),
(75, 76, 'INFANTE 1'),
(76, 77, 'INFANTE 1'),
(77, 77, 'INFANTE 1'),
(78, 77, 'INFANTE 1'),
(79, 78, 'INFANTE 1'),
(80, 21, 'INFANTE 1A'),
(81, 22, 'INFANTE 1A'),
(82, 63, 'INFANTE 1A'),
(83, 21, 'INFANTE 1B'),
(84, 22, 'INFANTE 1B'),
(85, 63, 'INFANTE 1B'),
(86, 63, 'INFANTE 1C'),
(87, 1, 'INFANTE 2'),
(88, 2, 'INFANTE 2'),
(89, 3, 'INFANTE 2'),
(90, 5, 'INFANTE 2'),
(91, 6, 'INFANTE 2'),
(92, 7, 'INFANTE 2'),
(93, 8, 'INFANTE 2'),
(94, 9, 'INFANTE 2'),
(95, 10, 'INFANTE 2'),
(96, 12, 'INFANTE 2'),
(97, 13, 'INFANTE 2'),
(98, 14, 'INFANTE 2'),
(99, 15, 'INFANTE 2'),
(100, 16, 'INFANTE 2'),
(101, 16, 'INFANTE 2'),
(102, 16, 'INFANTE 2'),
(103, 18, 'INFANTE 2'),
(104, 19, 'INFANTE 2'),
(105, 24, 'INFANTE 2'),
(106, 25, 'INFANTE 2'),
(107, 26, 'INFANTE 2'),
(108, 28, 'INFANTE 2'),
(109, 31, 'INFANTE 2'),
(110, 31, 'INFANTE 2'),
(111, 32, 'INFANTE 2'),
(112, 33, 'INFANTE 2'),
(113, 34, 'INFANTE 2'),
(114, 34, 'INFANTE 2'),
(115, 35, 'INFANTE 2'),
(116, 36, 'INFANTE 2'),
(117, 37, 'INFANTE 2'),
(118, 38, 'INFANTE 2'),
(119, 39, 'INFANTE 2'),
(120, 40, 'INFANTE 2'),
(121, 41, 'INFANTE 2'),
(122, 42, 'INFANTE 2'),
(123, 45, 'INFANTE 2'),
(124, 46, 'INFANTE 2'),
(125, 47, 'INFANTE 2'),
(126, 49, 'INFANTE 2'),
(127, 51, 'INFANTE 2'),
(128, 51, 'INFANTE 2'),
(129, 52, 'INFANTE 2'),
(130, 53, 'INFANTE 2'),
(131, 54, 'INFANTE 2'),
(132, 58, 'INFANTE 2'),
(133, 60, 'INFANTE 2'),
(134, 61, 'INFANTE 2'),
(135, 62, 'INFANTE 2'),
(136, 64, 'INFANTE 2'),
(137, 65, 'INFANTE 2'),
(138, 66, 'INFANTE 2'),
(139, 67, 'INFANTE 2'),
(140, 69, 'INFANTE 2'),
(141, 70, 'INFANTE 2'),
(142, 71, 'INFANTE 2'),
(143, 72, 'INFANTE 2'),
(144, 73, 'INFANTE 2'),
(145, 74, 'INFANTE 2'),
(146, 76, 'INFANTE 2'),
(147, 77, 'INFANTE 2'),
(148, 77, 'INFANTE 2'),
(149, 77, 'INFANTE 2'),
(150, 77, 'INFANTE 2'),
(151, 77, 'INFANTE 2'),
(152, 78, 'INFANTE 2'),
(153, 4, 'INFANTE 2A'),
(154, 20, 'INFANTE 2A'),
(155, 21, 'INFANTE 2A'),
(156, 22, 'INFANTE 2A'),
(157, 63, 'INFANTE 2A'),
(158, 68, 'INFANTE 2A'),
(159, 4, 'INFANTE 2B'),
(160, 20, 'INFANTE 2B'),
(161, 21, 'INFANTE 2B'),
(162, 22, 'INFANTE 2B'),
(163, 63, 'INFANTE 2B'),
(164, 68, 'INFANTE 2B'),
(165, 22, 'INFANTE 2C'),
(166, 11, 'INFANTES 1'),
(167, 17, 'INFANTES 1'),
(168, 27, 'INFANTES 1'),
(169, 29, 'INFANTES 1'),
(170, 43, 'INFANTES 1'),
(171, 44, 'INFANTES 1'),
(172, 44, 'INFANTES 1'),
(173, 44, 'INFANTES 1'),
(174, 48, 'INFANTES 1'),
(175, 48, 'INFANTES 1'),
(176, 48, 'INFANTES 1'),
(177, 50, 'INFANTES 1'),
(178, 55, 'INFANTES 1'),
(179, 57, 'INFANTES 1'),
(180, 57, 'INFANTES 1'),
(181, 59, 'INFANTES 1'),
(182, 75, 'INFANTES 1'),
(183, 75, 'INFANTES 1'),
(184, 17, 'INFANTES 2'),
(185, 17, 'INFANTES 2'),
(186, 17, 'INFANTES 2'),
(187, 27, 'INFANTES 2'),
(188, 27, 'INFANTES 2'),
(189, 29, 'INFANTES 2'),
(190, 43, 'INFANTES 2'),
(191, 43, 'INFANTES 2'),
(192, 44, 'INFANTES 2'),
(193, 44, 'INFANTES 2'),
(194, 44, 'INFANTES 2'),
(195, 44, 'INFANTES 2'),
(196, 48, 'INFANTES 2'),
(197, 48, 'INFANTES 2'),
(198, 50, 'INFANTES 2'),
(199, 55, 'INFANTES 2'),
(200, 57, 'INFANTES 2'),
(201, 57, 'INFANTES 2'),
(202, 57, 'INFANTES 2'),
(203, 59, 'INFANTES 2'),
(204, 59, 'INFANTES 2'),
(205, 75, 'INFANTES 2'),
(206, 75, 'INFANTES 2'),
(207, 75, 'INFANTES 2'),
(208, 11, 'INFANTES 2A'),
(209, 11, 'INFANTES 2B'),
(210, 1, 'LACTANTES'),
(211, 2, 'LACTANTES'),
(212, 3, 'LACTANTES'),
(213, 4, 'LACTANTES'),
(214, 5, 'LACTANTES'),
(215, 8, 'LACTANTES'),
(216, 10, 'LACTANTES'),
(217, 11, 'LACTANTES'),
(218, 12, 'LACTANTES'),
(219, 13, 'LACTANTES'),
(220, 13, 'LACTANTES'),
(221, 14, 'LACTANTES'),
(222, 15, 'LACTANTES'),
(223, 16, 'LACTANTES'),
(224, 17, 'LACTANTES'),
(225, 18, 'LACTANTES'),
(226, 19, 'LACTANTES'),
(227, 20, 'LACTANTES'),
(228, 21, 'LACTANTES'),
(229, 22, 'LACTANTES'),
(230, 24, 'LACTANTES'),
(231, 25, 'LACTANTES'),
(232, 27, 'LACTANTES'),
(233, 28, 'LACTANTES'),
(234, 29, 'LACTANTES'),
(235, 31, 'LACTANTES'),
(236, 31, 'LACTANTES'),
(237, 32, 'LACTANTES'),
(238, 33, 'LACTANTES'),
(239, 34, 'LACTANTES'),
(240, 35, 'LACTANTES'),
(241, 36, 'LACTANTES'),
(242, 37, 'LACTANTES'),
(243, 39, 'LACTANTES'),
(244, 40, 'LACTANTES'),
(245, 41, 'LACTANTES'),
(246, 42, 'LACTANTES'),
(247, 44, 'LACTANTES'),
(248, 44, 'LACTANTES'),
(249, 46, 'LACTANTES'),
(250, 47, 'LACTANTES'),
(251, 48, 'LACTANTES'),
(252, 49, 'LACTANTES'),
(253, 51, 'LACTANTES'),
(254, 52, 'LACTANTES'),
(255, 53, 'LACTANTES'),
(256, 54, 'LACTANTES'),
(257, 55, 'LACTANTES'),
(258, 57, 'LACTANTES'),
(259, 59, 'LACTANTES'),
(260, 60, 'LACTANTES'),
(261, 62, 'LACTANTES'),
(262, 63, 'LACTANTES'),
(263, 66, 'LACTANTES'),
(264, 68, 'LACTANTES'),
(265, 68, 'LACTANTES'),
(266, 69, 'LACTANTES'),
(267, 70, 'LACTANTES'),
(268, 71, 'LACTANTES'),
(269, 72, 'LACTANTES'),
(270, 73, 'LACTANTES'),
(271, 74, 'LACTANTES'),
(272, 74, 'LACTANTES'),
(273, 75, 'LACTANTES'),
(274, 76, 'LACTANTES'),
(275, 77, 'LACTANTES'),
(276, 77, 'LACTANTES'),
(277, 78, 'LACTANTES'),
(278, 27, '4 AÑOS'),
(279, 27, '4 AÑOS'),
(280, 43, '4 AÑOS'),
(281, 43, '4 AÑOS'),
(282, 48, '4 AÑOS'),
(283, 48, '4 AÑOS'),
(284, 55, '4 AÑOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE IF NOT EXISTS `salud` (
  `sala_id` int(11) NOT NULL,
  `coordinación_centro_salud` varchar(2) DEFAULT NULL,
  `botiquin_aceptable` varchar(2) DEFAULT NULL,
  `extintor_adecuado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`sala_id`),
  ADD KEY `fk_administrativo_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD KEY `fk_ambiente_Sala1_idx` (`sala_id`);

--
-- Indices de la tabla `carpetaedus`
--
ALTER TABLE `carpetaedus`
  ADD KEY `fk_carpetaedus_Sala1_idx` (`sala_id`);

--
-- Indices de la tabla `carpetaninos`
--
ALTER TABLE `carpetaninos`
  ADD KEY `fk_carpetninos_Sala1_idx` (`sala_id`);

--
-- Indices de la tabla `centroinfantil`
--
ALTER TABLE `centroinfantil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD KEY `fk_cocina_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `deposito`
--
ALTER TABLE `deposito`
  ADD KEY `fk_deposito_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `educadoras`
--
ALTER TABLE `educadoras`
  ADD KEY `fk_educadoras_Sala1_idx` (`sala_id`);

--
-- Indices de la tabla `eduinicial`
--
ALTER TABLE `eduinicial`
  ADD KEY `fk_eduinicial_Sala1_idx` (`sala_id`);

--
-- Indices de la tabla `higiene`
--
ALTER TABLE `higiene`
  ADD KEY `fk_higiene_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  ADD KEY `fk_infraestructura_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD KEY `fk_ninos_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `nutricion`
--
ALTER TABLE `nutricion`
  ADD KEY `fk_nutricion_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Sala_Centro Infantil_idx` (`centroinfantil_id`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD KEY `fk_salud_sala1_idx` (`sala_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centroinfantil`
--
ALTER TABLE `centroinfantil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=285;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
