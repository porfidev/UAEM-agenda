-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2010 a las 03:13:46
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre`) VALUES
(0, 'nana'),
(69, 'weqw'),
(69, 'eqwewq'),
(377, 'sdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_profe`
--

CREATE TABLE IF NOT EXISTS `catalogo_profe` (
  `id_catalogo` int(30) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `catalogo_profe`
--

INSERT INTO `catalogo_profe` (`id_catalogo`, `nombre`) VALUES
(1, 'lic.en sitemas y comunicaciones'),
(2, 'lic.Acturaria'),
(3, 'lic.Contaduria'),
(4, 'lic.informatica administrativa'),
(5, 'lic.en Derecho'),
(6, 'Ing. Agropecuario'),
(7, 'Ing.Civil'),
(8, 'Ing.Quimico Bilogico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE IF NOT EXISTS `celular` (
  `cod_celular` int(20) NOT NULL,
  `numero` int(20) NOT NULL,
  `compa` varchar(20) NOT NULL,
  KEY `cod_celular` (`cod_celular`),
  KEY `cod_celular_2` (`cod_celular`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `celular`
--

INSERT INTO `celular` (`cod_celular`, `numero`, `compa`) VALUES
(12, 0, '0'),
(12, 0, '0'),
(377, 345646, 'Movistar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `cod_club` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `actividad` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `club`
--

INSERT INTO `club` (`cod_club`, `nombre`, `actividad`) VALUES
(69, 'ewew', 'SELECCIONE'),
(44, '12321', 'SELECCIONE'),
(44, 'weqw', 'SELECCIONE'),
(715, 'ewe', 'SELECCIONE'),
(715, 'weqw', 'SELECCIONE'),
(377, '', ''),
(377, '', ''),
(377, '', ''),
(377, '456546', 'BASQUETBOOL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conyuge`
--

CREATE TABLE IF NOT EXISTS `conyuge` (
  `id_conyuge` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido_p` varchar(250) NOT NULL,
  `apellido_m` varchar(250) NOT NULL,
  `telefono` int(50) NOT NULL,
  PRIMARY KEY (`id_conyuge`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `conyuge`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depedencia`
--

CREATE TABLE IF NOT EXISTS `depedencia` (
  `cod_depencia` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `giro_social` varchar(250) NOT NULL,
  `cod_cargo` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `depedencia`
--

INSERT INTO `depedencia` (`cod_depencia`, `nombre`, `giro_social`, `cod_cargo`) VALUES
(12, 'a', 'a', 12),
(12, 'aa', 'aa', 12),
(12, 'sdas', 'das', 12),
(69, 'dsads', '32321', 69),
(69, 'ewqew', 'dsad', 69),
(377, 'sdfs', 'sdfsdf', 377),
(377, 'fdg', 'dfgfdg', 377),
(377, '', '', 377);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_off`
--

CREATE TABLE IF NOT EXISTS `domicilio_off` (
  `cod_dom` int(11) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `numero` int(30) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `domicilio_off`
--

INSERT INTO `domicilio_off` (`cod_dom`, `calle`, `numero`, `colonia`, `municipio`, `estado`, `pais`) VALUES
(51, 'sdfas', 31231, 'dasdas', 'dasda', '0', 'MÃ©xico'),
(51, 'dasdqweq', 3123, 'dasda', 'dasdsa', '0', 'MÃ©xico'),
(12, 'dsa', 0, 'dasd', 'dsads', '0', 'MÃ©xico'),
(12, 'dsada', 1, 'asda', 'dsad', '0', 'MÃ©xico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_par`
--

CREATE TABLE IF NOT EXISTS `domicilio_par` (
  `cod_part` int(50) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `numero` int(50) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `domicilio_par`
--

INSERT INTO `domicilio_par` (`cod_part`, `calle`, `numero`, `colonia`, `municipio`, `estado`, `pais`) VALUES
(69, 'sdas', 1232, 'dsdsa', 'dasdsa', '0', 'MÃ©xico'),
(69, 'ewe', 322, 'eqweq', 'ddsa', '0', 'MÃ©xico'),
(377, 'Larali', 5, 'laralu', 'Nicolas', 'Veracruz', 'El Salvador'),
(377, 'zds', 0, 'sdfsdf', 'sdf', '0', 'MÃ©xico'),
(377, 'dfg', 0, 'dfg', 'dfgdfg', '0', 'MÃ©xico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `cod_contacto` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_p` varchar(250) NOT NULL,
  `apellido_m` varchar(250) NOT NULL,
  `trato` varchar(250) NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `trabaja` varchar(50) NOT NULL,
  `mes` varchar(250) NOT NULL,
  `dia` int(10) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `SKI` int(50) NOT NULL,
  PRIMARY KEY (`cod_contacto`),
  UNIQUE KEY `SKI` (`SKI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `persona`
--

INSERT INTO `persona` (`cod_contacto`, `nombre`, `apellido_p`, `apellido_m`, `trato`, `estado_civil`, `trabaja`, `mes`, `dia`, `sexo`, `mail`, `fecha`, `SKI`) VALUES
(37, 'juanito', 'velez', 'sanchez', '0', '', '', 'JULIO', 10, '0', 'mimail@yomail.com', '0000-00-00', 656645646),
(377, 'Roberto', 'Jordan', 'Velazquez', 'Tu', 'casado', 'si', 'MARZO', 3, 'MASCULINO', '456456456', '0000-00-00', 25654);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profecion`
--

CREATE TABLE IF NOT EXISTS `profecion` (
  `cod_pro` int(20) NOT NULL,
  `profecion` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `profecion`
--

INSERT INTO `profecion` (`cod_pro`, `profecion`) VALUES
(44, 'lic.en sitemas y comunicacione'),
(44, 'lic.en sitemas y comunicacione'),
(44, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(76, 'lic.en sitemas y comunicacione'),
(377, 'lic.informatica administrativa'),
(377, 'lic.en sitemas y comunicacione'),
(377, 'lic.en sitemas y comunicacione'),
(377, 'lic.en sitemas y comunicacione'),
(377, 'lic.Contaduria'),
(377, 'Ing. Agropecuario'),
(945, 'lic.en sitemas y comunicacione');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `cod_per` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido_p` varchar(250) NOT NULL,
  `apellido_m` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `representante`
--

INSERT INTO `representante` (`cod_per`, `nombre`, `apellido_p`, `apellido_m`) VALUES
(69, '123213', 'ewewq', 'dsw'),
(69, 'ewqw', 'eqwe', 'eqwweq'),
(377, 'ghasdf', 'asfafs', 'fasfasdfaf'),
(377, '', '', ''),
(377, 'sfg', 'sdfgsg', 'sdfgsg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante_off`
--

CREATE TABLE IF NOT EXISTS `representante_off` (
  `id_representante` int(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido_p` varchar(250) NOT NULL,
  `apelido_m` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `representante_off`
--

INSERT INTO `representante_off` (`id_representante`, `nombre`, `apellido_p`, `apelido_m`) VALUES
(51, 'dsadas', 'dasd', 'sadas'),
(51, 'dasd', 'dasdas', 'das'),
(51, 'dsadas', 'sdas', 'das'),
(51, 'dasdsa', 'dasd', 'dsads'),
(12, 'dasdsa', 'dsad', 'dsa'),
(12, 'dasdsa', 'dasd', 'dasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skitel`
--

CREATE TABLE IF NOT EXISTS `skitel` (
  `cod_skitel` int(50) NOT NULL,
  `numero` int(50) NOT NULL,
  PRIMARY KEY (`cod_skitel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `skitel`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `cod_telefono` int(50) NOT NULL,
  `numero` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`cod_telefono`, `numero`) VALUES
(39, 0),
(39, 3434),
(69, 32121),
(69, 332),
(377, 55201789),
(377, 2147483647),
(377, 2147483647),
(377, 456456456),
(377, 0),
(377, 0),
(377, 0),
(377, 0),
(377, 56464);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_off`
--

CREATE TABLE IF NOT EXISTS `telefono_off` (
  `cod_tel` int(50) NOT NULL,
  `numero` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `telefono_off`
--

INSERT INTO `telefono_off` (`cod_tel`, `numero`) VALUES
(51, '4242'),
(51, '13221'),
(12, '213123'),
(12, 'e312321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_bd`
--

CREATE TABLE IF NOT EXISTS `usuarios_bd` (
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuarios_bd`
--

INSERT INTO `usuarios_bd` (`nombre`, `pass`, `tipo`, `id`) VALUES
('antonio', '123456', 'admin', 1),
('usuario', 'usuario', 'usuario', 2);
