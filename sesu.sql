-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 21:26:48
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
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `libro_actas` tinyint(1) DEFAULT NULL,
  `cuaderno_visitas` tinyint(1) DEFAULT NULL,
  `planilla_asistencia_personal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE IF NOT EXISTS `ambiente` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `form_registro_asistencia` varchar(2) DEFAULT NULL,
  `horario_actividades` varchar(2) DEFAULT NULL,
  `planificacion_semanal_ejec` varchar(2) DEFAULT NULL,
  `centralizador_aprendizaje_semanal_ejec` varchar(2) DEFAULT NULL,
  `plan_educativo_comp` varchar(2) DEFAULT NULL,
  `ficha_visita_domiciliaria` varchar(2) DEFAULT NULL,
  `form_ref_contraref` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carpetaedus`
--

INSERT INTO `carpetaedus` (`id`, `sala_id`, `form_registro_asistencia`, `horario_actividades`, `planificacion_semanal_ejec`, `centralizador_aprendizaje_semanal_ejec`, `plan_educativo_comp`, `ficha_visita_domiciliaria`, `form_ref_contraref`) VALUES
(1, 291, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(2, 292, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI'),
(3, 293, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(4, 294, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(5, 295, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(6, 296, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(7, 313, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(8, 314, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(9, 315, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carpetaninos`
--

CREATE TABLE IF NOT EXISTS `carpetaninos` (
  `id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carpetaninos`
--

INSERT INTO `carpetaninos` (`id`, `sala_id`, `ficha_social`, `compromiso_pf`, `formulario_buentrato`, `ci_certificado`, `ci_pf`, `croquis_domicilio`, `facturas_servicios`, `extracto_afp_pf`, `pap`, `personas_autorizadas`, `ficha_psicologica`, `ficha_seguimiento_psicol`, `ficha_adaptacion_psicol`, `ficha_adaptacion_educ`, `formulario_ead`, `ead_llena_edad`, `ficha_diag_pedagogico`, `cuadro_monitoreo_grafico_ead`, `ficha_seg_pedagogico_men`, `centralizador_mensual`, `ficha_seg_patologias`, `csi_aldia`, `csi`, `hoja_evolucion_medica`, `monitoreo_nutricional`) VALUES
(1, 291, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI'),
(2, 292, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(3, 293, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI'),
(4, 294, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(5, 295, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(6, 296, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(7, 313, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(8, 314, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(9, 315, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroinfantil`
--

CREATE TABLE IF NOT EXISTS `centroinfantil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `administrador` varchar(45) DEFAULT NULL,
  `cobertura` varchar(45) DEFAULT NULL,
  `convenio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centroinfantil`
--

INSERT INTO `centroinfantil` (`id`, `nombre`, `tipo`, `administrador`, `cobertura`, `convenio`) VALUES
(1, '14 DE SEPTIEMBRE', NULL, 'PAOLA POZO', '30', NULL),
(2, '14 DE SEPTIEMBRE VENTILLA', NULL, 'PAOLA POZO', '30', NULL),
(3, '16 DE FEBRERO', NULL, 'PAMELA MAMANI', '30', NULL),
(4, '16 DE NOVIEMBRE', NULL, 'VICENTE FERNANDEZ', '60', NULL),
(5, '21 DE DICIEMBRE', NULL, 'PAMELA MAMANI', '30', NULL),
(6, '27 DE MAYO', NULL, 'VICENTE FERNANDEZ', '20', NULL),
(7, '27 DE MAYO WARAS', NULL, 'LEYDI CASAS', '20', NULL),
(8, 'ADONAI', NULL, 'VICENTE FERNANDEZ', '30', NULL),
(9, 'AGUA DE LA VIDA', NULL, 'LEYDI CASAS', '20', NULL),
(10, 'AMIG CHACO', NULL, 'FLAVIA CALCINA', '30', NULL),
(11, 'AMOR DE DIOS', NULL, 'MIRIAM CONDORI', '100', NULL),
(12, 'ANEXO 7 DE SEPTIEMBRE', NULL, 'PAOLA POZO', '30', NULL),
(13, 'ANGEL DE MI GUARDA', NULL, 'MAITE CONDORI', '60', NULL),
(14, 'APOSTOL SANTIAGO', NULL, 'MIRIAM CONDORI', '30', NULL),
(15, 'ARCO IRIS', NULL, 'MAITE CONDORI', '40', NULL),
(16, 'BAUTISTA SAAVEDRA', NULL, 'WILMA MAMANI', '70', NULL),
(17, 'BEATA PIEDAD DE LA CRUZ', NULL, 'FLAVIA CALCINA', '106', NULL),
(18, 'BRASIL LOS AZULITOS', NULL, 'PAMELA MAMANI', '60', NULL),
(19, 'CALAMA', NULL, 'FLAVIA CALCINA', '30', NULL),
(20, 'CAMPANITAS', NULL, 'ANGELA HURTADO', '40', NULL),
(21, 'CASA DE LOS NIÑOS', NULL, 'VICENTE FERNANDEZ', '60', NULL),
(22, 'CENTRO SOCIAL S.O.S.', NULL, 'SILVIA AQUIZE', '88', NULL),
(23, 'CHARAPAQUI II', NULL, 'FLAVIA CALCINA', '0', NULL),
(24, 'COMPLEMENTO YUNGUYO', NULL, 'LAURA PEREZ PATON', '30', NULL),
(25, 'COMUNITARIO BOLIVAR "D"', NULL, 'MAITE CONDORI', '40', NULL),
(26, 'CONCEPCION', NULL, 'VICENTE FERNANDEZ', '20', NULL),
(27, 'CRISTO DEL CONSUELO', NULL, 'VICENTE FERNANDEZ', '77', NULL),
(28, 'DOLORES I', NULL, 'SILVIA AQUIZE', '40', NULL),
(29, 'DON BOSCO SANTA ROSA', NULL, 'PAMELA MAMANI', '30', NULL),
(30, 'ESPECIAL MURURATA', NULL, 'PAOLA POZO', '20', NULL),
(31, 'GERMAN BUSCH BECERRA', NULL, 'WILMA MAMANI', '60', NULL),
(32, 'HORIZONTES I', NULL, 'PAMELA MAMANI', '30', NULL),
(33, 'HORIZONTES II', NULL, 'PAMELA MAMANI', '30', NULL),
(34, 'HUAYNA POTOSI CARITAS ALEGRES', NULL, 'PAOLA POZO', '60', NULL),
(35, 'INGAVI "B"', NULL, 'VICENTE FERNANDEZ', '30', NULL),
(36, 'JARDIN DE AMOR', NULL, 'PAMELA MAMANI', '40', NULL),
(37, 'JERUSALEN', NULL, 'PAOLA POZO', '60', NULL),
(38, 'JUNTHUMA', NULL, 'VICENTE FERNANDEZ', '20', NULL),
(39, 'KISWARAS', NULL, 'PAOLA POZO', '30', NULL),
(40, 'LA PAZ', NULL, 'WILMA MAMANI', '30', NULL),
(41, 'LOS ANGELES FUTECRA', NULL, 'WILMA MAMANI', '30', NULL),
(42, 'MACHAQ MARKA', NULL, 'MAITE CONDORI', '30', NULL),
(43, 'MARIA AUXILIADORA', NULL, 'LEYDI CASAS', '100', NULL),
(44, 'MENESIANO YURIÑANI', NULL, 'ANGELA HURTADO', '109', NULL),
(45, 'MERCEDES UV-G LUCERITO', NULL, 'MAITE CONDORI', '20', NULL),
(46, 'NUEVA ASUNCION', NULL, 'PAMELA MAMANI', '40', NULL),
(47, 'NUEVA CANAAN LUZ Y VIDA', NULL, 'SILVIA AQUIZE', '30', NULL),
(48, 'NUEVA MARKA', NULL, 'LEYDI CASAS', '132', NULL),
(49, 'ORO NEGRO', NULL, 'LEYDI CASAS', '40', NULL),
(50, 'PALLIRI', NULL, 'VICENTE FERNANDEZ', '20', NULL),
(51, 'POR UN MUNDO MEJOR', NULL, 'PAOLA POZO', '50', NULL),
(52, 'PORVENIR RAYITO DE SOL', NULL, 'MAITE CONDORI', '30', NULL),
(53, 'PULGARCITO', NULL, 'MAITE CONDORI', '30', NULL),
(54, 'RAYITO DE LUZ', NULL, 'WILMA MAMANI', '30', NULL),
(55, 'RINCONCITO', NULL, 'WILMA MAMANI', '36', NULL),
(56, 'ROSAS PAMPA', NULL, 'LEYDI CASAS', '20', NULL),
(57, 'SAGRADO CORAZON DE JESUS', NULL, 'JANNETT LUJAN', '197', NULL),
(58, 'SAN AGUSTIN', NULL, 'YOVANA PACHECO', '20', NULL),
(59, 'SAN FRANCISCO DE ASIS', NULL, 'FLAVIA CALCINA', '150', NULL),
(60, 'SAN JOSE DE CHARAPAQUI', NULL, 'PAOLA POZO', '30', NULL),
(61, 'SAN JOSE DE YUNGUYO', NULL, 'WILMA MAMANI', '20', NULL),
(62, 'SAN MARTIN', NULL, 'MAITE CONDORI', '60', NULL),
(63, 'SAN MIGUEL', NULL, 'SILVIA AQUIZE', '70', NULL),
(64, 'SAN PABLO', NULL, 'LEYDI CASAS', '20', NULL),
(65, 'SAN PEDRO', NULL, 'FLAVIA CALCINA', '20', NULL),
(66, 'SAN URBANO', NULL, 'SILVIA AQUIZE', '30', NULL),
(67, 'SANTA ROSA DE LIMA', NULL, 'SILVIA AQUIZE', '20', NULL),
(68, 'SANTIAGO II - 1', NULL, 'FLAVIA CALCINA', '80', NULL),
(69, 'SANTOS MAMANI', NULL, 'SILVIA AQUIZE', '30', NULL),
(70, 'TAHUANTINSUYO', NULL, 'WILMA MAMANI', '60', NULL),
(71, 'TUPAC KATARI "CAPULLITOS"', NULL, 'WILMA MAMANI', '30', NULL),
(72, 'VILLA ALEMANIA', NULL, 'MAITE CONDORI', '30', NULL),
(73, 'VILLA COOPERATIVA', NULL, 'LAURA PEREZ PATON', '30', NULL),
(74, 'VILLA INGENIO', NULL, 'PAMELA MAMANI', '60', NULL),
(75, 'VIRGEN DE LA FUENSANTA', NULL, 'FLAVIA CALCINA', '124', NULL),
(76, 'VIRGEN DEL ROSARIO', NULL, 'SILVIA AQUIZE', '30', NULL),
(77, 'VIRGEN NIÑA - EPDB', NULL, 'LEYDI CASAS', '100', NULL),
(78, 'WAWA UTA - SANTIAGO I', NULL, 'SILVIA AQUIZE', '30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobertura`
--

CREATE TABLE IF NOT EXISTS `cobertura` (
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `centroinfantil_id` int(11) DEFAULT NULL,
  `cantidad_prog` varchar(45) DEFAULT NULL,
  `inscritos` varchar(45) DEFAULT NULL,
  `educadoras` varchar(45) DEFAULT NULL,
  `ealimentos` varchar(45) DEFAULT NULL,
  `fechasupervision` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cobertura`
--

INSERT INTO `cobertura` (`id`, `sala_id`, `centroinfantil_id`, `cantidad_prog`, `inscritos`, `educadoras`, `ealimentos`, `fechasupervision`) VALUES
(1, 291, 2, '4', '3', '1', NULL, NULL),
(2, 292, 2, '10', '9', '1', NULL, NULL),
(3, 293, 2, '16', '15', '1', '1', NULL),
(4, 294, 3, '', '', '', NULL, NULL),
(5, 295, 3, '', '', '', NULL, NULL),
(6, 296, 3, '', '', '', '', NULL),
(7, 313, 10, '', '', '', NULL, NULL),
(8, 314, 10, '', '', '', NULL, NULL),
(9, 315, 10, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

CREATE TABLE IF NOT EXISTS `cocina` (
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `servicios_limpios` varchar(2) DEFAULT NULL,
  `cocina_limpia` varchar(2) DEFAULT NULL,
  `uso_adecuado_uniforme` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito`
--

CREATE TABLE IF NOT EXISTS `deposito` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `guia_orienta_ninos` varchar(2) DEFAULT NULL,
  `escucha_responde_ninos` varchar(2) DEFAULT NULL,
  `pendiente_ninos` varchar(2) DEFAULT NULL,
  `dirige_nino_nombre` varchar(2) DEFAULT NULL,
  `comunicacion_asertiva` varchar(2) DEFAULT NULL,
  `metodo_ludico` varchar(2) DEFAULT NULL,
  `apoyo_alimentacion` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eduinicial`
--

CREATE TABLE IF NOT EXISTS `eduinicial` (
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `planificacion_lugar_visible` varchar(2) DEFAULT NULL,
  `form_signos_vitales_visible` varchar(2) DEFAULT NULL,
  `centralizador_ev_aprendizaje` varchar(2) DEFAULT NULL,
  `cumple_horario_actividades` varchar(2) DEFAULT NULL,
  `actividades_relacion_planif` varchar(2) DEFAULT NULL,
  `material_educativo` varchar(2) DEFAULT NULL,
  `cuaderno_novedades` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eduinicial`
--

INSERT INTO `eduinicial` (`id`, `sala_id`, `planificacion_lugar_visible`, `form_signos_vitales_visible`, `centralizador_ev_aprendizaje`, `cumple_horario_actividades`, `actividades_relacion_planif`, `material_educativo`, `cuaderno_novedades`) VALUES
(1, 291, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(2, 292, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI'),
(3, 293, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(4, 294, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(5, 295, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(6, 296, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(7, 313, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(8, 314, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
(9, 315, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `higiene`
--

CREATE TABLE IF NOT EXISTS `higiene` (
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `unas_cortadas` varchar(2) DEFAULT NULL,
  `restos_nasales` varchar(2) DEFAULT NULL,
  `higiene_dental` varchar(2) DEFAULT NULL,
  `lavado_manos` varchar(2) DEFAULT NULL,
  `peinados` varchar(2) DEFAULT NULL,
  `ropa_adecuada_limpia` varchar(2) DEFAULT NULL,
  `unas_esmalte` varchar(2) DEFAULT NULL,
  `cabello_recogido` varchar(2) DEFAULT NULL,
  `sin_accesorios` varchar(2) DEFAULT NULL,
  `ropa_comoda` varchar(2) DEFAULT NULL,
  `unas_limpias` varchar(2) DEFAULT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `kardex_aldia` varchar(2) DEFAULT NULL,
  `saldos_aldia` varchar(2) DEFAULT NULL,
  `alimentos_relacion_menu` varchar(2) DEFAULT NULL,
  `medidas_estandar` varchar(2) DEFAULT NULL,
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
  `nombre` varchar(145) DEFAULT NULL,
  `fechasupervision` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=572 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `centroinfantil_id`, `nombre`, `fechasupervision`) VALUES
(288, 1, 'LACTANTES', '0000-00-00'),
(289, 1, 'INFANTE 1', '0000-00-00'),
(290, 1, 'INFANTE 2', '0000-00-00'),
(291, 2, 'LACTANTES', '0000-00-00'),
(292, 2, 'INFANTE 1', '0000-00-00'),
(293, 2, 'INFANTE 2', '0000-00-00'),
(294, 3, 'LACTANTES', '0000-00-00'),
(295, 3, 'INFANTE 1', '0000-00-00'),
(296, 3, 'INFANTE 2', '0000-00-00'),
(297, 4, 'LACTANTES', '0000-00-00'),
(298, 4, 'INFANTE 1', '0000-00-00'),
(299, 4, 'INFANTE 2A', '0000-00-00'),
(300, 4, 'INFANTE 2B', '0000-00-00'),
(301, 5, 'LACTANTES', '0000-00-00'),
(302, 5, 'INFANTE 1', '0000-00-00'),
(303, 5, 'INFANTE 2', '0000-00-00'),
(304, 6, 'INFANTE 1', '0000-00-00'),
(305, 6, 'INFANTE 2', '0000-00-00'),
(306, 7, 'INFANTE 1', '0000-00-00'),
(307, 7, 'INFANTE 2', '0000-00-00'),
(308, 8, 'LACTANTES', '0000-00-00'),
(309, 8, 'INFANTE 1', '0000-00-00'),
(310, 8, 'INFANTE 2', '0000-00-00'),
(311, 9, 'INFANTE 1', '0000-00-00'),
(312, 9, 'INFANTE 2', '0000-00-00'),
(313, 10, 'LACTANTES', '0000-00-00'),
(314, 10, 'INFANTE 1', '0000-00-00'),
(315, 10, 'INFANTE 2', '0000-00-00'),
(316, 11, 'LACTANTES', '0000-00-00'),
(317, 11, 'INFANTE 1', '0000-00-00'),
(318, 11, 'INFANTE 2A', '0000-00-00'),
(319, 11, 'INFANTE 2B', '0000-00-00'),
(320, 12, 'LACTANTES', '0000-00-00'),
(321, 12, 'INFANTE 1', '0000-00-00'),
(322, 12, 'INFANTE 2', '0000-00-00'),
(323, 13, 'LACTANTES', '0000-00-00'),
(324, 13, 'LACTANTES', '0000-00-00'),
(325, 13, 'INFANTE 1', '0000-00-00'),
(326, 13, 'INFANTE 2', '0000-00-00'),
(327, 14, 'LACTANTES', '0000-00-00'),
(328, 14, 'INFANTE 1', '0000-00-00'),
(329, 14, 'INFANTE 2', '0000-00-00'),
(330, 15, 'LACTANTES', '0000-00-00'),
(331, 15, 'INFANTE 1', '0000-00-00'),
(332, 15, 'INFANTE 2', '0000-00-00'),
(333, 16, 'LACTANTES', '0000-00-00'),
(334, 16, 'INFANTE 1', '0000-00-00'),
(335, 16, 'INFANTE 2A', '0000-00-00'),
(336, 16, 'INFANTE 2B', '0000-00-00'),
(337, 16, 'INFANTE 2C', '0000-00-00'),
(338, 17, 'LACTANTES', '0000-00-00'),
(339, 17, 'INFANTE 1', '0000-00-00'),
(340, 17, 'INFANTE 2A', '0000-00-00'),
(341, 17, 'INFANTE 2B', '0000-00-00'),
(342, 17, 'INFANTE 2C', '0000-00-00'),
(343, 17, '4 AÑOS A', '0000-00-00'),
(344, 17, '4 AÑOS B', '0000-00-00'),
(345, 18, 'LACTANTES', '0000-00-00'),
(346, 18, 'INFANTE 1', '0000-00-00'),
(347, 18, 'INFANTE 2', '0000-00-00'),
(348, 19, 'LACTANTES', '0000-00-00'),
(349, 19, 'INFANTE 1', '0000-00-00'),
(350, 19, 'INFANTE 2', '0000-00-00'),
(351, 20, 'LACTANTES', '0000-00-00'),
(352, 20, 'INFANTE 1', '0000-00-00'),
(353, 20, 'INFANTE 2A', '0000-00-00'),
(354, 20, 'INFANTE 2B', '0000-00-00'),
(355, 21, 'LACTANTES', '0000-00-00'),
(356, 21, 'INFANTE 1A', '0000-00-00'),
(357, 21, 'INFANTE 1B', '0000-00-00'),
(358, 21, 'INFANTE 2A', '0000-00-00'),
(359, 21, 'INFANTE 2B', '0000-00-00'),
(360, 22, 'LACTANTES', '0000-00-00'),
(361, 22, 'INFANTE 1A', '0000-00-00'),
(362, 22, 'INFANTE 1B', '0000-00-00'),
(363, 22, 'INFANTE 2A', '0000-00-00'),
(364, 22, 'INFANTE 2B', '0000-00-00'),
(365, 22, 'INFANTE 2C', '0000-00-00'),
(366, 24, 'LACTANTES', '0000-00-00'),
(367, 24, 'INFANTE 1', '0000-00-00'),
(368, 24, 'INFANTE 2', '0000-00-00'),
(369, 25, 'LACTANTES', '0000-00-00'),
(370, 25, 'INFANTE 1', '0000-00-00'),
(371, 25, 'INFANTE 2', '0000-00-00'),
(372, 26, 'INFANTE 1', '0000-00-00'),
(373, 26, 'INFANTE 2', '0000-00-00'),
(374, 27, 'LACTANTES', '0000-00-00'),
(375, 27, 'INFANTE 1', '0000-00-00'),
(376, 27, 'INFANTE 2A', '0000-00-00'),
(377, 27, 'INFANTE 2B', '0000-00-00'),
(378, 27, '4 AÑOS A', '0000-00-00'),
(379, 27, '4 AÑOS B', '0000-00-00'),
(380, 28, 'LACTANTES', '0000-00-00'),
(381, 28, 'INFANTE 1', '0000-00-00'),
(382, 28, 'INFANTE 2', '0000-00-00'),
(383, 29, 'LACTANTES', '0000-00-00'),
(384, 29, 'INFANTE 1', '0000-00-00'),
(385, 29, 'INFANTE 2', '0000-00-00'),
(386, 30, 'ESPECIALES PEQUEÑOS A', '0000-00-00'),
(387, 30, 'ESPECIALES PEQUEÑOS B', '0000-00-00'),
(388, 31, 'LACTANTES A', '0000-00-00'),
(389, 31, 'LACTANTES B', '0000-00-00'),
(390, 31, 'INFANTE 1A', '0000-00-00'),
(391, 31, 'INFANTE 1B', '0000-00-00'),
(392, 31, 'INFANTE 2A', '0000-00-00'),
(393, 31, 'INFANTE 2B', '0000-00-00'),
(394, 32, 'LACTANTES', '0000-00-00'),
(395, 32, 'INFANTE 1', '0000-00-00'),
(396, 32, 'INFANTE 2', '0000-00-00'),
(397, 33, 'LACTANTES', '0000-00-00'),
(398, 33, 'INFANTE 1', '0000-00-00'),
(399, 33, 'INFANTE 2', '0000-00-00'),
(400, 34, 'LACTANTES', '0000-00-00'),
(401, 34, 'INFANTE 1', '0000-00-00'),
(402, 34, 'INFANTE 2A', '0000-00-00'),
(403, 34, 'INFANTE 2B', '0000-00-00'),
(404, 35, 'LACTANTES', '0000-00-00'),
(405, 35, 'INFANTE 1', '0000-00-00'),
(406, 35, 'INFANTE 2', '0000-00-00'),
(407, 36, 'LACTANTES', '0000-00-00'),
(408, 36, 'INFANTE 1', '0000-00-00'),
(409, 36, 'INFANTE 2', '0000-00-00'),
(410, 37, 'LACTANTES', '0000-00-00'),
(411, 37, 'INFANTE 1', '0000-00-00'),
(412, 37, 'INFANTE 2', '0000-00-00'),
(413, 38, 'INFANTE 1', '0000-00-00'),
(414, 38, 'INFANTE 2', '0000-00-00'),
(415, 39, 'LACTANTES', '0000-00-00'),
(416, 39, 'INFANTE 1', '0000-00-00'),
(417, 39, 'INFANTE 2', '0000-00-00'),
(418, 40, 'LACTANTES', '0000-00-00'),
(419, 40, 'INFANTE 1', '0000-00-00'),
(420, 40, 'INFANTE 2', '0000-00-00'),
(421, 41, 'LACTANTES', '0000-00-00'),
(422, 41, 'INFANTE 1', '0000-00-00'),
(423, 41, 'INFANTE 2', '0000-00-00'),
(424, 42, 'LACTANTES', '0000-00-00'),
(425, 42, 'INFANTE 1', '0000-00-00'),
(426, 42, 'INFANTE 2', '0000-00-00'),
(427, 43, 'INFANTE 1', '0000-00-00'),
(428, 43, 'INFANTE 2A', '0000-00-00'),
(429, 43, 'INFANTE 2B', '0000-00-00'),
(430, 43, '4 AÑOS A', '0000-00-00'),
(431, 43, '4 AÑOS B', '0000-00-00'),
(432, 44, 'LACTANTES A', '0000-00-00'),
(433, 44, 'LACTANTES B', '0000-00-00'),
(434, 44, 'INFANTE 1A', '0000-00-00'),
(435, 44, 'INFANTE 1B', '0000-00-00'),
(436, 44, 'INFANTE 1C', '0000-00-00'),
(437, 44, 'INFANTE 2A', '0000-00-00'),
(438, 44, 'INFANTE 2B', '0000-00-00'),
(439, 44, 'INFANTE 2C', '0000-00-00'),
(440, 44, 'INFANTE 2D', '0000-00-00'),
(441, 45, 'INFANTE 1', '0000-00-00'),
(442, 45, 'INFANTE 2', '0000-00-00'),
(443, 46, 'LACTANTES', '0000-00-00'),
(444, 46, 'INFANTE 1', '0000-00-00'),
(445, 46, 'INFANTE 2', '0000-00-00'),
(446, 47, 'LACTANTES', '0000-00-00'),
(447, 47, 'INFANTE 1', '0000-00-00'),
(448, 47, 'INFANTE 2', '0000-00-00'),
(449, 48, 'LACTANTES', '0000-00-00'),
(450, 48, 'INFANTE 1A', '0000-00-00'),
(451, 48, 'INFANTE 1B', '0000-00-00'),
(452, 48, 'INFANTE 1C', '0000-00-00'),
(453, 48, 'INFANTE 2A', '0000-00-00'),
(454, 48, 'INFANTE 2B', '0000-00-00'),
(455, 48, '4 AÑOS A', '0000-00-00'),
(456, 48, '4 AÑOS B', '0000-00-00'),
(457, 49, 'LACTANTES', '0000-00-00'),
(458, 49, 'INFANTE 1', '0000-00-00'),
(459, 49, 'INFANTE 2', '0000-00-00'),
(460, 50, 'INFANTE 1', '0000-00-00'),
(461, 50, 'INFANTE 2', '0000-00-00'),
(462, 51, 'LACTANTES', '0000-00-00'),
(463, 51, 'INFANTE 1', '0000-00-00'),
(464, 51, 'INFANTE 2A', '0000-00-00'),
(465, 51, 'INFANTE 2B', '0000-00-00'),
(466, 52, 'LACTANTES', '0000-00-00'),
(467, 52, 'INFANTE 1', '0000-00-00'),
(468, 52, 'INFANTE 2', '0000-00-00'),
(469, 53, 'LACTANTES', '0000-00-00'),
(470, 53, 'INFANTE 1', '0000-00-00'),
(471, 53, 'INFANTE 2', '0000-00-00'),
(472, 54, 'LACTANTES', '0000-00-00'),
(473, 54, 'INFANTE 1', '0000-00-00'),
(474, 54, 'INFANTE 2', '0000-00-00'),
(475, 55, 'LACTANTES', '0000-00-00'),
(476, 55, 'INFANTE 1', '0000-00-00'),
(477, 55, 'INFANTE 2', '0000-00-00'),
(478, 55, '4 AÑOS', '0000-00-00'),
(479, 57, 'LACTANTES', '0000-00-00'),
(480, 57, 'INFANTE 1A', '0000-00-00'),
(481, 57, 'INFANTE 1B', '0000-00-00'),
(482, 57, 'INFANTE 2A', '0000-00-00'),
(483, 57, 'INFANTE 2B', '0000-00-00'),
(484, 57, 'INFANTE 2C', '0000-00-00'),
(485, 57, '4 AÑOS A', '0000-00-00'),
(486, 57, '4 AÑOS B', '0000-00-00'),
(487, 58, 'INFANTE 1', '0000-00-00'),
(488, 58, 'INFANTE 2', '0000-00-00'),
(489, 59, 'LACTANTES', '0000-00-00'),
(490, 59, 'INFANTE 1', '0000-00-00'),
(491, 59, 'INFANTE 2A', '0000-00-00'),
(492, 59, 'INFANTE 2B', '0000-00-00'),
(493, 59, '4 AÑOS A', '0000-00-00'),
(494, 59, '4 AÑOS B', '0000-00-00'),
(495, 59, 'ESPECIALES LEVE', '0000-00-00'),
(496, 59, 'ESPECIALES A', '0000-00-00'),
(497, 59, 'ESPECIALES B', '0000-00-00'),
(498, 59, 'ESPECIALES PEQUEÑOS', '0000-00-00'),
(499, 59, 'ESPECIALES PROFUNDOS', '0000-00-00'),
(500, 60, 'LACTANTES', '0000-00-00'),
(501, 60, 'INFANTE 1', '0000-00-00'),
(502, 60, 'INFANTE 2', '0000-00-00'),
(503, 61, 'INFANTE 1', '0000-00-00'),
(504, 61, 'INFANTE 2', '0000-00-00'),
(505, 62, 'LACTANTES', '0000-00-00'),
(506, 62, 'INFANTE 1', '0000-00-00'),
(507, 62, 'INFANTE 2', '0000-00-00'),
(508, 63, 'LACTANTES', '0000-00-00'),
(509, 63, 'INFANTE 1A', '0000-00-00'),
(510, 63, 'INFANTE 1B', '0000-00-00'),
(511, 63, 'INFANTE 1C', '0000-00-00'),
(512, 63, 'INFANTE 2A', '0000-00-00'),
(513, 63, 'INFANTE 2B', '0000-00-00'),
(514, 64, 'INFANTE 1', '0000-00-00'),
(515, 64, 'INFANTE 2', '0000-00-00'),
(516, 65, 'INFANTE 1', '0000-00-00'),
(517, 65, 'INFANTE 2', '0000-00-00'),
(518, 66, 'LACTANTES', '0000-00-00'),
(519, 66, 'INFANTE 1', '0000-00-00'),
(520, 66, 'INFANTE 2', '0000-00-00'),
(521, 67, 'INFANTE 1', '0000-00-00'),
(522, 67, 'INFANTE 2', '0000-00-00'),
(523, 68, 'LACTANTES A', '0000-00-00'),
(524, 68, 'LACTANTES B', '0000-00-00'),
(525, 68, 'INFANTE 1', '0000-00-00'),
(526, 68, 'INFANTE 2A', '0000-00-00'),
(527, 68, 'INFANTE 2B', '0000-00-00'),
(528, 69, 'LACTANTES', '0000-00-00'),
(529, 69, 'INFANTE 1', '0000-00-00'),
(530, 69, 'INFANTE 2', '0000-00-00'),
(531, 70, 'LACTANTES', '0000-00-00'),
(532, 70, 'INFANTE 1', '0000-00-00'),
(533, 70, 'INFANTE 2', '0000-00-00'),
(534, 71, 'LACTANTES', '0000-00-00'),
(535, 71, 'INFANTE 1', '0000-00-00'),
(536, 71, 'INFANTE 2', '0000-00-00'),
(537, 72, 'LACTANTES', '0000-00-00'),
(538, 72, 'INFANTE 1', '0000-00-00'),
(539, 72, 'INFANTE 2', '0000-00-00'),
(540, 73, 'LACTANTES', '0000-00-00'),
(541, 73, 'INFANTE 1', '0000-00-00'),
(542, 73, 'INFANTE 2', '0000-00-00'),
(543, 74, 'LACTANTES A', '0000-00-00'),
(544, 74, 'LACTANTES B', '0000-00-00'),
(545, 74, 'INFANTE 1A', '0000-00-00'),
(546, 74, 'INFANTE 1B', '0000-00-00'),
(547, 74, 'INFANTE 2', '0000-00-00'),
(548, 75, 'LACTANTES', '0000-00-00'),
(549, 75, 'INFANTE 1A', '0000-00-00'),
(550, 75, 'INFANTE 1B', '0000-00-00'),
(551, 75, 'INFANTE 2A', '0000-00-00'),
(552, 75, 'INFANTE 2B', '0000-00-00'),
(553, 75, 'INFANTE 2C', '0000-00-00'),
(554, 75, '4 AÑOS A', '0000-00-00'),
(555, 75, '4 AÑOS B', '0000-00-00'),
(556, 76, 'LACTANTES', '0000-00-00'),
(557, 76, 'INFANTE 1', '0000-00-00'),
(558, 76, 'INFANTE 2', '0000-00-00'),
(559, 77, 'LACTANTES A', '0000-00-00'),
(560, 77, 'LACTANTES B', '0000-00-00'),
(561, 77, 'INFANTE 1A', '0000-00-00'),
(562, 77, 'INFANTE 1B', '0000-00-00'),
(563, 77, 'INFANTE 1C', '0000-00-00'),
(564, 77, 'INFANTE 2A', '0000-00-00'),
(565, 77, 'INFANTE 2B', '0000-00-00'),
(566, 77, 'INFANTE 2C', '0000-00-00'),
(567, 77, 'INFANTE 2D', '0000-00-00'),
(568, 77, 'INFANTE 2E', '0000-00-00'),
(569, 78, 'LACTANTES', '0000-00-00'),
(570, 78, 'INFANTE 1', '0000-00-00'),
(571, 78, 'INFANTE 2', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE IF NOT EXISTS `salud` (
  `id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `coordinacion_centro_salud` varchar(2) DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_administrativo_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_ambiente_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `carpetaedus`
--
ALTER TABLE `carpetaedus`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_carpetaedus_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `carpetaninos`
--
ALTER TABLE `carpetaninos`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_carpetaninos_sala_idx` (`sala_id`);

--
-- Indices de la tabla `centroinfantil`
--
ALTER TABLE `centroinfantil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_cobertura_sala1_idx` (`sala_id`),
  ADD KEY `fk_cobertura_centroinfantil1_idx` (`centroinfantil_id`);

--
-- Indices de la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_cocina_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `deposito`
--
ALTER TABLE `deposito`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_deposito_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `educadoras`
--
ALTER TABLE `educadoras`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_educadoras_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `eduinicial`
--
ALTER TABLE `eduinicial`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_eduinicial_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `higiene`
--
ALTER TABLE `higiene`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_higiene_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_infraestructura_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_ninos_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `nutricion`
--
ALTER TABLE `nutricion`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_nutricion_sala1_idx` (`sala_id`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`,`centroinfantil_id`),
  ADD KEY `fk_sala_centroinfantil1_idx` (`centroinfantil_id`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`id`,`sala_id`),
  ADD KEY `fk_salud_sala1_idx` (`sala_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carpetaedus`
--
ALTER TABLE `carpetaedus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `carpetaninos`
--
ALTER TABLE `carpetaninos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `centroinfantil`
--
ALTER TABLE `centroinfantil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `cobertura`
--
ALTER TABLE `cobertura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cocina`
--
ALTER TABLE `cocina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `deposito`
--
ALTER TABLE `deposito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `educadoras`
--
ALTER TABLE `educadoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eduinicial`
--
ALTER TABLE `eduinicial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `higiene`
--
ALTER TABLE `higiene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nutricion`
--
ALTER TABLE `nutricion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=572;
--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `fk_administrativo_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `fk_ambiente_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `carpetaedus`
--
ALTER TABLE `carpetaedus`
  ADD CONSTRAINT `fk_carpetaedus_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `carpetaninos`
--
ALTER TABLE `carpetaninos`
  ADD CONSTRAINT `fk_carpetaninos_sala` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cobertura`
--
ALTER TABLE `cobertura`
  ADD CONSTRAINT `fk_cobertura_centroinfantil1` FOREIGN KEY (`centroinfantil_id`) REFERENCES `centroinfantil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cobertura_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD CONSTRAINT `fk_cocina_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `deposito`
--
ALTER TABLE `deposito`
  ADD CONSTRAINT `fk_deposito_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `educadoras`
--
ALTER TABLE `educadoras`
  ADD CONSTRAINT `fk_educadoras_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `eduinicial`
--
ALTER TABLE `eduinicial`
  ADD CONSTRAINT `fk_eduinicial_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `higiene`
--
ALTER TABLE `higiene`
  ADD CONSTRAINT `fk_higiene_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `infraestructura`
--
ALTER TABLE `infraestructura`
  ADD CONSTRAINT `fk_infraestructura_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD CONSTRAINT `fk_ninos_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nutricion`
--
ALTER TABLE `nutricion`
  ADD CONSTRAINT `fk_nutricion_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `fk_sala_centroinfantil1` FOREIGN KEY (`centroinfantil_id`) REFERENCES `centroinfantil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salud`
--
ALTER TABLE `salud`
  ADD CONSTRAINT `fk_salud_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
