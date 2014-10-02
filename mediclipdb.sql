-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2014 a las 16:50:42
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mediclipdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `Especialidad_id` int(11) NOT NULL,
  `cmp` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `logo` (`logo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombres`, `apellidos`, `dni`, `email`, `Especialidad_id`, `cmp`, `direccion`, `telefono`, `celular`, `logo`) VALUES
(1, 'asd', 'asd', 'asdasd', 'asdasd', 1, 0, '', '', '', NULL),
(15, 'sdfsdfsdfsdfsdf', 'sdfsdf', '12345671', 'julioc_mw18@hotmail.com', 2, 0, '', '', '', NULL),
(19, 'Julio Cesar', 'Becerra Urbina', '98765455', 'julioc_m18@hotmail.com987', 1, 77844, 'mi casa', '9876543', '789456123', NULL),
(20, 'Julio', 'Becerra Urbina', '98765456', 'julioc_m18@hotmail.com4', 1, 987778, '', '', '', NULL),
(21, 'Miriam ', 'Marcelo Caballero', '98765411', 'julioc_111@hotmail.com', 2, 1111112222, '', '', '', NULL),
(22, 'Ricardo', 'Nunez Alvarado', '40900790', 'rnunez@hotmail.com', 1, 234565, '', '', '', NULL),
(23, 'Augusto', 'Cabada Alarco', '19470328', 'augustoeduardo@peru.com', 12, 75000123, '', '', '', NULL),
(24, 'sfsdf', 'sdfsdf', '22222222', 'sdf@asd.ccvffffdfsdf', 91, 2147483647, '', '', '', NULL),
(25, 'Julio Cesar', 'Becerra Urbina', '98765454', 'julioc_m18@hotmail.com', 96, 2147483647, 'Mi casa#12345', '45554', '213321321', NULL),
(26, 'Miriam Hayde', 'Marcelo Caballero', '98787766', 'miriam.n18@hotmail.com', 3, 87876, 'jhgjh', '7765765', '7657576576', NULL),
(27, 'Ricardo Caleb', 'Nunez Miranda', '78799000', 'rnunez@evolucionmedia.pe', 96, 1233456666, 'Av. Industrial 622 La Esperanza', '8978678888', '995073812', NULL),
(28, 'Augusto Eduardo', 'Cabada Alarco', '10470328', 'perutoons@hotmail.com', 1, 54321, '', '', '', NULL),
(29, 'asda asdasd', 'asd asd asd', '22222333', 'julioc_m18@hotmail.comdsdf', 4, 2147483647, '234ssdfsdf', '', '', 'logo_29.png'),
(30, '234234', '234234', '44564564', 'julioc_m18@hotmail.comsdfsdf456456', 83, 456456456, '', '', '', NULL),
(31, 'asda asdasd', 'Becerra Urbina', '12345673', 'sdf@asd.ccvwer', 3, 234234, '', '', '', NULL),
(32, 'sdfsdfs', 'werwerwer', '34534534', 'sdf@asd.ccv345345', 3, 345345, '', '', '', NULL),
(33, '345345', '3345345', '34555553', 'julioc_m18@hotmail.com4345345', 3, 345345345, '', '', '', NULL),
(34, '234234', '234234', '44444232', 'julioc_m18@hotmail.com4234234', 3, 234234234, '', '', '', NULL),
(35, '9789789', '789789', '78978978', 'sdf@asd.ccv345345789789', 3, 789789789, '', '', '', 'logo_35.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`) VALUES
(3, 'Alergología'),
(4, 'Anestesiología y reanimación'),
(5, 'Cardiología'),
(7, 'Endocrinología'),
(93, 'Estomatología'),
(6, 'Gastroenterología'),
(8, 'Geriatría'),
(9, 'Hematología y hemoterapia'),
(10, 'Hidrología médica'),
(11, 'Infectología'),
(96, 'Inmunología'),
(12, 'Medicina aeroespacial'),
(91, 'Medicina General'),
(83, 'Nefrología'),
(84, 'Neumología'),
(85, 'Neurología'),
(86, 'Nutriología'),
(87, 'Odontología'),
(2, 'Oftalmología'),
(94, 'Otorrinolaringología'),
(1, 'Pediatría'),
(88, 'Proctología'),
(89, 'Psiquiatría'),
(90, 'Reumatología'),
(92, 'Toxicología'),
(95, 'Urología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `talla` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `peso` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `presion` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `alergias` varchar(350) COLLATE utf8_persian_ci NOT NULL,
  `observaciones` varchar(350) COLLATE utf8_persian_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `sangre` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombres`, `talla`, `peso`, `presion`, `alergias`, `observaciones`, `sexo`, `fecha_nacimiento`, `email`, `sangre`) VALUES
(2, 'juilio', '1.71', '12.00', '12', 'asdasd', 'asdasd', 'Masculino', '2014-08-28', NULL, ''),
(4, 'asd', '0.99', '23.00', '12', '123', '123', 'Masculino', '2014-08-27', NULL, ''),
(5, 'asd', '0.99', '23.00', '12', '123', '123', 'Masculino', '2014-08-27', NULL, ''),
(6, '123', '0.99', '12.00', '12', '12', '12', 'Femenino', '2014-08-07', NULL, ''),
(7, 'juilio', '1.71', '12.00', '12', 'asdasd', 'asdasd', 'Masculino', '2014-08-28', NULL, ''),
(8, 'Ricardo Alvarado', '1.71', '12.00', '12', '123123', '123123', 'Masculino', '2014-08-12', 'julioc_m18@hotmail.com', 'sdfsdf'),
(9, 'juliano', '1.89', '12.00', '12', '123sd', 'dsfsdf', 'Masculino', '2014-08-04', '', ''),
(10, 'Ricardo Nuñez', '1.71', '12.00', '12', 'sdfsdf', 'sdfsdf', 'Masculino', '2014-08-27', '', ''),
(11, 'Ricardo Nuñez', '1.71', '12.00', '12', 'sdsdfsdf', 'sdfsdf', 'Masculino', '2014-08-07', 'julioc_m18@hotmail.com', ''),
(12, 'Jose Joaquin Nunez Huaman', '1.67', '50.00', '45', 'Frio', 'Accidente de transito en 2014.', 'Masculino', '1965-08-21', 'rnunez@evolucionmedia.pe', 'rh O positivo'),
(13, 'Ricardo Nunez Alvarado', '1.65', '75.00', '23', 'Alergia al frio', 'Roncha de nino', 'Masculino', '1981-02-14', 'rnunez@hotmail.com', 'RHOPositivo'),
(14, 'Fernando Cabada Alarco', '3.80', '92.50', '120', 'Ninguna', 'Presenta sobre peso y nerviosismo', 'Masculino', '1962-02-15', '', 'RH 45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `clave` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `Empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nick_UNIQUE` (`nick`),
  KEY `fk_Usuario_Empleado_idx` (`Empleado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `clave`, `Empleado_id`) VALUES
(1, 'ddfg', 'baa8ccd05d1e3fd67f7b532141aaa251', 15),
(4, 'julio', 'e10adc3949ba59abbe56e057f20f883e', 19),
(5, 'julio2', 'e10adc3949ba59abbe56e057f20f883e', 20),
(6, 'mia', 'e10adc3949ba59abbe56e057f20f883e', 21),
(7, 'rnunez1055', '33fd6231c666f476d10fbbda2fe26c45', 22),
(8, 'acabada', 'e10adc3949ba59abbe56e057f20f883e', 23),
(9, '123123123123', '101193d7181cc88340ae5b2b17bba8a1', 24),
(10, 'julioc', '226633e6e4e3a05fdf32c1764886ae6a', 25),
(11, 'mia18', 'e10adc3949ba59abbe56e057f20f883e', 26),
(12, 'caleb', 'e10adc3949ba59abbe56e057f20f883e', 27),
(13, 'Chapatin', '1c395a8dce135849bd73c6dba3b54809', 28),
(14, 'root', 'e10adc3949ba59abbe56e057f20f883e', 29),
(15, 'root456456', 'ad52ebc749e691016a99b4d5e6bc4bd5', 30),
(16, 'rootwsersdf', '73a90acaae2b1ccc0e969709665bc62f', 31),
(17, 'root345345', 'f0111585ccd190ba548c806a843f487a', 32),
(18, '123', 'e10adc3949ba59abbe56e057f20f883e', 33),
(19, '456', 'e10adc3949ba59abbe56e057f20f883e', 34),
(20, '987', 'e10adc3949ba59abbe56e057f20f883e', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE IF NOT EXISTS `visita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `descripcion_motivo` text COLLATE utf8_persian_ci NOT NULL,
  `diagnostico` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `descripcion_diagnostico` text COLLATE utf8_persian_ci NOT NULL,
  `receta` text COLLATE utf8_persian_ci NOT NULL,
  `indicaciones` text COLLATE utf8_persian_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `Paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_visita_Paciente1_idx` (`Paciente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`id`, `motivo`, `descripcion_motivo`, `diagnostico`, `descripcion_diagnostico`, `receta`, `indicaciones`, `fecha`, `Paciente_id`) VALUES
(2, 'sdf', 'sdf', '345', '345345', '<p>345345</p>', '<p>345345</p>', '2014-08-29 12:12:07', 2),
(3, '456', '456', '456', '456', '<p>456456</p>', '<p>456456</p>', '2014-08-29 12:14:26', 2),
(4, 'asd', 'asd', 'asd', 'asd', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\n<p style="text-align: center;"><strong>Especialidad Pediatr&iacute;a</strong></p>\n<p style="text-align: center;"><strong>CMP 2009</strong></p>', '<p>asdasd</p>', '2014-08-30 14:01:13', 2),
(5, '123', '123', '123', '123', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 14:26:41', 5),
(6, '131', '13', 's3', '13', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 14:27:53', 6),
(7, 'wer', 'wer', 'wer', 'wer', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 14:32:10', 2),
(8, 'asd', 'asd', 'asd', 'asd', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 14:42:25', 2),
(9, 'wer', 'wer', 'werw', 'werwer', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 14:52:58', 2),
(10, 'wer', 'wer', 'werw', 'werwer', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 15:01:47', 7),
(11, '12123', '123123', '123123', '123123', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><img title="asdasd" src="http://img1.mlstatic.com/lote-libros-medicina-enfermeria-ginecologia-cirugia_MLA-O-122598861_7864.jpg" alt="asd" width="295" height="295" /></p>\r\n<p>muchas cxosas poaer jacerrterter<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>muchas coasdasd asdji asid asd asd</p>\r\n<p><img title="sdfsdfsdfsdf" src="http://www.articulosweb.net/blog/wp-content/gallery/significado-del-simbolo-representativo-de-la-medicina/significado-del-simbolo-representativo-de-la-medicina-9.jpg" alt="sdfsdf" width="300" height="297" /></p>\r\n<p>sjdhfsudhf sjdfs df<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 15:04:11', 8),
(12, 'rtyu', 'rtytyrt', 'rtyrty', 'rtyrty', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>xzcjhsg cshdbfsdf</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br />fghfgh fghfghfghfgh</p>\r\n<p style="color: red;">esta receta no es confiable fgsin el sello y la firma del doctor</p>', '2014-08-30 15:10:11', 4),
(13, 'sdf', 'werwer', 'werwer', 'werw', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><img title="sdfsdf" src="http://3.bp.blogspot.com/-S4-ICPTdB4g/T1T47DHo59I/AAAAAAAAB4A/OiKyocCkXVE/s1600/medicina-mir.jpg" alt="sdf" width="300" height="245" /><br />sdfsdfsdfsdfsdfsdf</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><img title="sdfsdf" src="http://2.bp.blogspot.com/-63RSs0OMPrs/TZ0QBD8GtbI/AAAAAAAAALc/0S5iGJO9DQU/s1600/medicina.jpg" alt="sdfsdf" width="318" height="477" />sdfsdf</p>\r\n<p>sdfsdfsdfsdf</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 15:15:47', 9),
(14, 'DOlor de Huesos', 'sdfsdf', 'demasiadas horas en la computadora', 'asdasdasdasd', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>&nbsp;</p>\r\n<p><img title="asdasdasd" src="http://galeon.com/avancesdelacienciapt/index_archivos/esteto.jpg" alt="sd" width="369" height="380" /><br />Esta es una recera bla blasd sd sd</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><img title="asdasdasdasd" src="http://www.vivirmejor.com/images/stories/01-010/libros_medicina.jpg" alt="asdasd" width="448" height="320" /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 16:56:12', 8),
(15, 'sdf', 'sdfsdf', 'sdf', 'sdf', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>sdfsdfsdf<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>sdfsdf<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 16:57:56', 8),
(16, 'asd', 'asd', 'asd', 'asd', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:04:13', 9),
(17, 'df', 'dfgdfg', 'dfg', 'dfgdfg', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br />dfgdfgdfg</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p>dfgdfgdfg<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:05:00', 9),
(18, 'sdf', 'sdfsdf', 'sdf', 'sdfsdf', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:05:35', 8),
(19, 'sdsfd', 'sdfsdf', 'sdf', 'sdf', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 0</strong></p>\r\n<p><br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:07:11', 8),
(20, 'sdf', 'sdf', 'sdf', 'sdf', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '2014-08-30 17:07:36', 10),
(21, 'asd', 'asd', 'asd', 'asd', '<p style="text-align: center;"><strong>Dr. Miriam Marcelo Caballero</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Oftalmolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 13212</strong></p>\r\n<p><br />asdasd</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Miriam Marcelo Caballero</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Oftalmolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 13212</strong></p>\r\n<p><br />asdasd</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:12:11', 8),
(22, 'dfg', 'dfgdfg', 'dfg', 'dfgdfg', '<p style="text-align: center;"><strong>Dr. Miriam Marcelo Caballero</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Oftalmolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 13212</strong></p>\r\n<p><br />dfgdfgdfg</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Miriam Marcelo Caballero</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Oftalmolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 13212</strong></p>\r\n<p><br />dfgdfgdfg</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:14:05', 11),
(23, 'Dolor de pierna', 'Dolor de pierna', 'Hueso descalcificado', 'Hueso descalcificado', '<p style="text-align: center;"><strong>Dr. Ricardo Nunez Alvarado</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 234565</strong></p>\r\n<p>Panadol extra forte 26.65gm.<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Ricardo Nunez Alvarado</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 234565</strong></p>\r\n<p>Tomar 2 veces al dia despues de cada comida.<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:45:39', 12),
(24, 'Dolor de cabeza', 'Dolor de cabeza', 'Golpe', 'Golpe', '<p style="text-align: center;"><strong>Dr. Ricardo Nunez Alvarado</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><strong>CMP 234565</strong></p>\r\n<p>DOLOCOLDRALAN</p>\r\n<p>&nbsp;</p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><em><strong>Dr. Ricardo Nunez Alvarado</strong></em></p>\r\n<p style="text-align: center;"><strong>Especialidad Pediatria</strong></p>\r\n<p style="text-align: center;"><span style="text-decoration: underline;"><strong>CMP 234565</strong></span></p>\r\n<p>Tomar una despues de cada comida.<br /><br /></p>\r\n<p style="color: red;">esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-08-30 17:55:17', 12),
(25, 'consulta de rutina', 'tos, garraspera, fiebre', 'bronqitis leve', 'bacteriana', '<p style="text-align: center;"><strong>Dr. Augusto Cabada Alarco</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Medicina aeroespacial</strong></p>\r\n<p style="text-align: center;"><strong>CMP 75000123</strong></p>\r\n<p><br />PACIENTE: JOSE NUNEZ</p>\r\n<p>&nbsp;</p>\r\n<p>ANTALGINA GOTAS</p>\r\n<p>LEVOFERIN JARABE</p>\r\n<p>BACTRIN JBE</p>\r\n<p><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Augusto Cabada Alarco</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Medicina aeroespacial</strong></p>\r\n<p style="text-align: center;"><strong>CMP 75000123</strong></p>\r\n<p style="text-align: center;"><strong><br /></strong></p>\r\n<p style="text-align: left;"><strong>PACIENTE: JOSE NUNEZ</strong></p>\r\n<p style="text-align: left;"><strong><br /></strong></p>\r\n<p style="text-align: left;"><strong>ANTALGINA GOTASS: 1 GOTA X KG DE PESO 2 VECES POR DIA</strong></p>\r\n<p style="text-align: left;"><strong><br /></strong></p>\r\n<p style="text-align: left;"><strong>LEVOFERIN: 1 CUCHARADA 3 VECES DIA</strong></p>\r\n<p style="text-align: left;"><strong>BACTRIN: 1 CUCHARADA 2 VECES DIA CADA 12 HRAS</strong></p>\r\n<p style="text-align: center;"><strong><br /></strong></p>', '2014-08-30 19:53:27', 12),
(26, 'Dolor de brazo derecho', 'Dolor de brazo derecho', 'Bisura en el brazo izquierdo', 'Bisura en el brazo izquierdo', '<p style="text-align: center;"><strong>Dr. Ricardo Caleb Nunez Miranda</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 1233456666</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Av. Industrial 622 La Esperanza</strong></p>\r\n<p style="text-align: center;"><strong>Celular 995073812</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 8978678888</strong></p>\r\n<p><br /><br />Panadol Forte</p>\r\n<p>Daxmoticina</p>\r\n<p>Formula 44<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Ricardo Caleb Nunez Miranda</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 1233456666</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Av. Industrial 622 La Esperanza</strong></p>\r\n<p style="text-align: center;"><strong>Celular 995073812</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 8978678888</strong></p>\r\n<p><br /><br />Panadol Forte</p>\r\n<p>Daxmoticina</p>\r\n<p>Formula 44<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-09-06 20:22:54', 13),
(27, 'sdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 2147483647</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Mi casa#12345</strong></p>\r\n<p style="text-align: center;"><strong>Celular 213321321</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 45554</strong></p>\r\n<p><br /><br /><br /><br /><br /><br /><br />sdfsdfsdf<br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Julio Cesar Becerra Urbina</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 2147483647</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Mi casa#12345</strong></p>\r\n<p style="text-align: center;"><strong>Celular 213321321</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 45554</strong></p>\r\n<p><br /><br /><br /><br /><br /><br /><br />sdfsdfsdf<br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-09-06 22:50:16', 8),
(28, 'Dolor de muela', 'Dolor de muela', 'Muela con caries', 'Muela con caries', '<p style="text-align: center;"><strong>Dr. Ricardo Caleb Nunez Miranda</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 1233456666</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Av. Industrial 622 La Esperanza</strong></p>\r\n<p style="text-align: center;"><strong>Celular 995073812</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 8978678888</strong></p>\r\n<p><br /><br /><br />DOLOCORDRALAN FORTE X29<br /><br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;"><strong>Dr. Ricardo Caleb Nunez Miranda</strong></p>\r\n<p style="text-align: center;"><strong>Especialidad Inmunolog&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 1233456666</strong></p>\r\n<p style="text-align: center;"><strong>Direcci&oacute;n Av. Industrial 622 La Esperanza</strong></p>\r\n<p style="text-align: center;"><strong>Celular 995073812</strong></p>\r\n<p style="text-align: center;"><strong>Tel&eacute;fono 8978678888</strong></p>\r\n<p><br /><br /><br />DOLOCORDRALAN FORTE X29<br />Tomar 3 veces al dia despues de cada comida.<br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-09-06 23:59:35', 12),
(29, 'XXX', 'XXXX', 'Esquizofrenia ', 'Alucinaciones y paranoia\r\n', '<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><a class="irc_mutl" href="http://medicclip.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;frm=1&amp;source=images&amp;cd=&amp;cad=rja&amp;uact=8&amp;docid=biHM_UW_yHsuGM&amp;tbnid=x7wmL4Nvq1HIrM:&amp;ved=0CAUQjRw&amp;url=https%3A%2F%2Fwww.behance.net%2Fgallery%2F11108627%2FMdico-Cirujano-Logotipo-&amp;ei=PW8MVPzcN87CsATbu4HYDA&amp;bvm=bv.74649129,d.cWc&amp;psig=AFQjCNFkJilrFlaJI_B972F67QnClCzkzA&amp;ust=1410187434894518" data-ved="0CAUQjRw"><img class="irc_mut" style="margin-top: 102px;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSJ28vRZGuVj7cp1oRLkgjm5adMv9S7-hF8iCXSf0W1g8IZvYimpQ" alt="" width="72" height="72" /></a></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><span style="color: #0000ff;"><em><span style="font-family: arial black;"><strong>Dr. Augusto Eduardo Cabada Alarco</strong></span></em></span></p>\r\n<p style="text-align: center;"><strong>Pediatr&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 54321</strong></p>\r\n<p style="text-align: center;"><strong></strong>&nbsp;</p>\r\n<p style="text-align: left;"><strong></strong>NNNNNnn nnnnNnnn</p>\r\n<p style="text-align: left;">mkauuhriblaeukff b</p>\r\n<p style="text-align: left;">liukfbiwufvbhu</p>\r\n<p style="text-align: left;">iwluvbwievb&nbsp;</p>\r\n<p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><a class="irc_mutl" href="http://medicclip.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;frm=1&amp;source=images&amp;cd=&amp;cad=rja&amp;uact=8&amp;docid=biHM_UW_yHsuGM&amp;tbnid=x7wmL4Nvq1HIrM:&amp;ved=0CAUQjRw&amp;url=https%3A%2F%2Fwww.behance.net%2Fgallery%2F11108627%2FMdico-Cirujano-Logotipo-&amp;ei=PW8MVPzcN87CsATbu4HYDA&amp;bvm=bv.74649129,d.cWc&amp;psig=AFQjCNFkJilrFlaJI_B972F67QnClCzkzA&amp;ust=1410187434894518" data-ved="0CAUQjRw"><img class="irc_mut" style="margin-top: 102px;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSJ28vRZGuVj7cp1oRLkgjm5adMv9S7-hF8iCXSf0W1g8IZvYimpQ" alt="" width="72" height="72" /></a></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><span style="color: #0000ff;"><em><span style="font-family: arial black;"><strong>Dr. Augusto Eduardo Cabada Alarco</strong></span></em></span></p>\r\n<p style="text-align: center;"><strong>Pediatr&iacute;a</strong></p>\r\n<p style="text-align: center;"><strong>CMP 54321</strong></p>\r\n<p style="text-align: center;"><strong></strong>&nbsp;</p>\r\n<p style="text-align: left;"><strong></strong>NNNNNnn nnnnNnnn</p>\r\n<p style="text-align: left;">mkauuhriblaeukff b</p>\r\n<p style="text-align: left;">liukfbiwufvbhu</p>\r\n<p style="text-align: left;">iwluvbwievb&nbsp;</p>\r\n<p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>\r\n<p style="color: red;">Esta receta no es confiable sin el sello y la firma del doctor</p>', '2014-09-07 10:02:14', 14);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Empleado` FOREIGN KEY (`Empleado_id`) REFERENCES `empleado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `fk_visita_Paciente1` FOREIGN KEY (`Paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
