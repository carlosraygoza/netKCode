-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2017 a las 17:15:25
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netkompetenz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`) VALUES
(3, 'México', 2),
(4, 'España', 0),
(5, 'Alemania', 1),
(0, 'Holanda', 1),
(0, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `idEmployee` int(11) NOT NULL,
  `nameEmployee` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `idDirectSupervisor` char(10) NOT NULL,
  `namePicture` varchar(255) DEFAULT NULL,
  `typePicture` varchar(255) DEFAULT NULL,
  `sizePicture` varchar(255) DEFAULT NULL,
  `idLocation` char(5) NOT NULL,
  `businessUnit` varchar(10) NOT NULL,
  `discipline` varchar(45) NOT NULL,
  `idTeam` varchar(45) NOT NULL,
  `hiringDate` varchar(45) NOT NULL,
  `pdc` varchar(45) NOT NULL,
  `hide` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`idEmployee`, `nameEmployee`, `username`, `password`, `idDirectSupervisor`, `namePicture`, `typePicture`, `sizePicture`, `idLocation`, `businessUnit`, `discipline`, `idTeam`, `hiringDate`, `pdc`, `hide`) VALUES
(1, 'Development', '00000000', 'development', '1234', '0', '0', '0', 'BBN', '1234', '1234', 'SW', '12/12/12', '12', 0),
(32000042, 'MEJIA GONZALEZ JESUS DAVID', '32000042', '32000042', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32000058, 'SILVA BANUELOS LUIS ADAN', '32000058', '32000058', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32007656, 'ALCARAZ ZAMUDIO ALEJANDRO', '32007656', '32007656', '0', '0', '0', '0', 'GDN', '0', '0', 'CDS', '0', '0', 0),
(32007684, 'NAVARRO LIMON CARLOS EDUARDO', '32007684', '32007684', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32007895, 'OROZCO CHAVEZ JOSE', '32007895', '32007895', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32008179, 'PEREZ ESTEVES JOSUE', '', '32008179', '0', '0', '0', '0', 'GDN', '0', '0', 'CDH', '0', '0', 0),
(32008394, 'NILO RODRIGUEZ MARIELA', '32008394', '32008394', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32008397, 'ORTA CASTILLO DANIEL', '32008397', '32008397', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32008398, 'ALEJO ARTURO', '32008398', '32008398', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32008950, 'GARCIA ESPINOZA SERGIO', '32008950', '32008950', '0', '0', '0', '0', 'GDN', '0', '0', 'CDH', '0', '0', 0),
(32008951, 'GONZALEZ FERNANDEZ MAURICIO', '32008951', '32008951', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32008961, 'CAPISTRAN GARZA JIRASH MAURICIO', '32008961', '32008961', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32009189, 'LA VERDE RODRIGUEZ JOSE NORBERTO', '32009189', '32009189', '0', '0', '0', '0', 'GDN', '0', '0', 'CDS', '0', '0', 0),
(32009190, 'CORREA CHICA JUAN CAMILO', '32009190', '32009190', '0', '0', '0', '0', 'GDN', '0', '0', 'CDS', '0', '0', 0),
(32009476, 'TAPIA HERNANDEZ ALEJANDRO', '', '32009476', '0', '0', '0', '0', 'GDN', '0', '0', 'EE', '0', '0', 0),
(32009701, 'PRECUP TIBERIU', '', '32009701', '0', '0', '0', '0', 'GDN', '0', '0', 'CDS', '0', '0', 0),
(32009937, 'MORIMOTO SANDOVAL HIDEMI', '', '32009937', '0', '0', '0', '0', 'GDN', '0', '0', 'QA', '0', '0', 0),
(32009942, 'SILVA RODRIGUEZ WILFRIDO RIGOBERTO', '', '32009942', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32009947, 'ALVAREZ TEJEDA MIGUEL ANGEL', '', '32009947', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32009950, 'CHAPULA MENDOZA VICTOR RAMON', '', '32009950', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32009953, 'REYNOSO GARCIA OSVALDO JAVIER', '', '32009953', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32010152, 'MEDINA SOTELO SIMON', '', '32010152', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32010153, 'HERNANDEZ REVELES RICARDO', '', '32010153', '0', '0', '0', '0', 'GDN', '0', '0', 'EE', '0', '0', 0),
(32010154, 'LUNA GONZALEZ OSCAR', '', '32010154', '0', '0', '0', '0', 'GDN', '0', '0', 'CDS', '0', '0', 0),
(32010339, 'PAREDES CARDONA DAVID IVAN', '', '32010339', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32010340, 'AGUILAR GUZMAN VICTOR ISAI', '', '32010340', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32010342, 'BARBA ZUBIA JORGE ANTONIO', '', '32010342', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32010345, 'RAMIREZ CAMPOS JUAN SEBASTIAN', '', '32010345', '0', '0', '0', '0', 'GDN', '0', '0', 'CDM', '0', '0', 0),
(32010893, 'MOLINA GARATE PAUL', '', '32010893', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32010899, 'PRECIADO MARTINEZ ERIK FRANCISCO', '', '32010899', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32010903, 'MENDOZA DE LA TORRE ULISES', '', '32010903', '0', '0', '0', '0', 'GDN', '0', '0', 'CDM', '0', '0', 0),
(32011224, 'CONTRERAS GODOY JOSE ANGEL', '', '32011224', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32012247, 'RAMIREZ SANCHEZ EARL ORLANDO', '', '32012247', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32012706, 'QUINTERO CHAVEZ ERIK', '', '32012706', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32012739, 'GARCIA VILCHIS ROBERTO MIGUEL', '', '32012739', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32012812, 'HERNANDEZ TORRES JUAN PABLO', '', '32012812', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32013002, 'VACA PEREIRA GHIRGHI MARCELO', '', '32013002', '0', '0', '0', '0', 'GDN', '0', '0', 'ME', '0', '0', 0),
(32013287, 'COBOS HERNANDEZ ELI DE JESUS', '', '32013287', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32014117, 'ORTIZ MENDOZA ABRAHAM OSIRIS', '', '32014117', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32014119, 'OROZCO MICHEL MARCELA', '', '32014119', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32014120, 'ENCISO PONCE ANHUAR DANIEL', '', '32014120', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32014127, 'LOERA GONZALEZ CARMEN GABRIELA', '', '32014127', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32017688, 'AVALOS BUENO JORDAN ABEL', '', '32017688', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32017692, 'CAMPOS CHAVEZ CARLOS JESUS', '', '32017692', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32020309, 'JIMENEZ JIMENEZ ROSALBA', '', '32020309', '0', '0', '0', '0', 'GDN', '0', '0', 'HR', '0', '0', 0),
(32020939, 'GONZALEZ BARBA PRISCILA', '', '32020939', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32020942, 'RUEDA SANTOS JUAN ANTONIO', '', '32020942', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32021330, 'MERINO NAVARRO LUIS GERARDO', '', '32021330', '0', '0', '0', '0', 'GDN', '0', '0', 'FT', '0', '0', 0),
(32021331, 'MONTUFAR AGUILAR DAVID ISAIAS', '', '32021331', '0', '0', '0', '0', 'GDN', '0', '0', 'SE', '0', '0', 0),
(32022442, 'VALADEZ GARCIA MARTHA JANETT', '', '32022442', '0', '0', '0', '0', 'GDN', '0', '0', 'QA', '0', '0', 0),
(32411050, 'KORTRIGHT BARRERAS LUIS ALFONSO', '', '32411050', '0', '0', '0', '0', 'GDN', '0', '0', 'PM', '0', '0', 0),
(32411318, 'CARRANZA ANGELES ALEJANDRO', '', '32411318', '0', '0', '0', '0', 'GDN', '0', '0', 'SW', '0', '0', 0),
(32411351, 'DOMINGUEZ AGUILAR JORGE ALBERTO', '', '32411351', '0', '0', '0', '0', 'GDN', '0', '0', 'Mgmt', '0', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_has_role`
--

CREATE TABLE `employee_has_role` (
  `idEhr` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `isCurrent` int(11) NOT NULL,
  `startDate` varchar(45) NOT NULL,
  `endDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_has_skill`
--

CREATE TABLE `employee_has_skill` (
  `idEhs` int(11) NOT NULL,
  `idSkill` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `levelExpertise` int(11) NOT NULL,
  `levelInterest` int(11) NOT NULL,
  `IsTrainer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee_has_skill`
--

INSERT INTO `employee_has_skill` (`idEhs`, `idSkill`, `idEmployee`, `levelExpertise`, `levelInterest`, `IsTrainer`) VALUES
(1, 4, 1, 1, 1, 0),
(2, 5, 1, 1, 1, 0),
(3, 6, 1, 1, 2, 0),
(4, 3163, 1, 2, 2, 0),
(5, 3207, 1, 2, 1, 0),
(6, 4032, 1, 2, 3, 0),
(7, 4173, 1, 1, 1, 0),
(8, 4296, 1, 0, 0, 0),
(9, 4304, 1, 1, 1, 0),
(10, 1031, 32008394, 1, 2, 0),
(11, 2011, 32008394, 2, 3, 0),
(12, 2073, 32008394, 1, 2, 0),
(13, 2107, 32008394, 1, 3, 0),
(14, 3132, 32008394, 2, 0, 0),
(17, 5, 32008394, 2, 3, 0),
(18, 6, 32008394, 2, 3, 0),
(23, 4, 32008394, 3, 0, 1),
(24, 18, 32008394, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groupp`
--

CREATE TABLE `groupp` (
  `idGroup` int(11) NOT NULL,
  `nameGroup` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groupp`
--

INSERT INTO `groupp` (`idGroup`, `nameGroup`) VALUES
(1, 'El primer grupo HMI '),
(5, 'HMI 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `group_has_employee`
--

CREATE TABLE `group_has_employee` (
  `idGhe` int(11) NOT NULL,
  `idGroup` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `group_has_employee`
--

INSERT INTO `group_has_employee` (`idGhe`, `idGroup`, `idEmployee`, `isAdmin`) VALUES
(1, 1, 32008394, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `group_has_skill`
--

CREATE TABLE `group_has_skill` (
  `idGhs` int(11) NOT NULL,
  `idGroup` int(11) NOT NULL,
  `idSkill` int(11) NOT NULL,
  `importance` tinyint(4) NOT NULL,
  `levelRequired` int(11) NOT NULL,
  `peopleRequired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `group_has_skill`
--

INSERT INTO `group_has_skill` (`idGhs`, `idGroup`, `idSkill`, `importance`, `levelRequired`, `peopleRequired`) VALUES
(1, 1, 18, 2, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `location`
--

CREATE TABLE `location` (
  `idLocation` char(5) NOT NULL,
  `nameLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `location`
--

INSERT INTO `location` (`idLocation`, `nameLocation`) VALUES
('ABH', 'Aubun Hills'),
('BBN', 'Babenhausen'),
('BDN', 'Brandys'),
('CHN', 'Wuhu/Nanjing'),
('GDN', 'Guadalajara Periferico'),
('PNN', 'Penang'),
('SGP', 'Singapore'),
('TSR', 'Timisoara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `idLog` int(11) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(100) NOT NULL,
  `tableName` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `idEmployee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nameRole` varchar(255) NOT NULL,
  `informationRole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_skill`
--

CREATE TABLE `role_has_skill` (
  `idRole` int(11) NOT NULL,
  `idSkill` int(11) NOT NULL,
  `levelExpertise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `idSkill` int(11) NOT NULL,
  `nameSkill` varchar(45) NOT NULL,
  `descriptionSkill` varchar(255) NOT NULL,
  `complexity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`idSkill`, `nameSkill`, `descriptionSkill`, `complexity`) VALUES
(1, 'root', 'Main skills tree', '0'),
(2, 'zSandbox', 'Place to play around with creation and editing of skills', '0'),
(3, 'Automotive', 'Automotive', '0'),
(4, 'Branches & Professional Skills', 'Branches & Professional Skills', '0'),
(5, 'Certifications', 'Certifications', '0'),
(6, 'Competencies', 'Competencies', '0'),
(7, 'Computer Science', 'Computer Science', '0'),
(8, 'Electrical Engineering', 'Electrical Engineering', '0'),
(9, 'Engineering', 'Engineering', '0'),
(10, 'Industrial Automation', 'Industrial Automation', '0'),
(11, 'IT', 'IT', '0'),
(12, 'Languages', 'Languages', '0'),
(13, 'Math', 'Math', '0'),
(14, 'Mechanical Engineering', 'Mechanical Engineering', '0'),
(15, 'Project Management', 'Project Management', '0'),
(16, 'Software Engineering', 'Software Engineering', '0'),
(17, 'SW Applications', 'SW Applications', '0'),
(18, 'absolute origin', 'root', '0'),
(1001, 'Aerospace Engineering', 'Aerospace Engineering', '0'),
(1002, 'Articifical Intelligence', 'Articifical Intelligence', '0'),
(1003, 'Auto Parts', 'Auto Parts', '0'),
(1004, 'Automation Hardware', 'Automation Hardware', '0'),
(1005, 'Biological Engineering', 'Biological Engineering', '0'),
(1006, 'Bus-Systems & Protocols', 'Bus-Systems & Protocols', '0'),
(1007, 'Chinese', 'Chinese', '0'),
(1008, 'Computation Model', 'Computation Model', '0'),
(1009, 'Computer Aided Engineering (CAE)', 'Computer Aided Engineering (CAE)', '0'),
(1010, 'Computer Vision / Image Processing', 'Computer Vision / Image Processing', '0'),
(1011, 'Control engineering', 'Control engineering', '0'),
(1012, 'Czech', 'Czech', '0'),
(1013, 'Data Analysis & Modelling', 'Data Analysis & Modelling', '0'),
(1014, 'EE Basics', 'EE Basics', '0'),
(1015, 'EE Systems Development Life Cycle', 'EE Systems Development Life Cycle', '0'),
(1016, 'Electric Motors', 'Electric Motors', '0'),
(1017, 'Electromagnetism', 'Electromagnetism', '0'),
(1018, 'Electronics', 'Electronics', '0'),
(1019, 'Embedded System Software Components', 'Embedded System Software Components', '0'),
(1020, 'English', 'English', '0'),
(1021, 'Enterprise Resource Planning', 'Enterprise Resource Planning', '0'),
(1022, 'French', 'French', '0'),
(1023, 'Game theory, economics, social and behavioral', 'Game theory, economics, social and behavioral science', '0'),
(1024, 'German', 'German', '0'),
(1025, 'Graphics, Design, Modelling', 'Graphics, Design, Modelling', '0'),
(1026, 'IT Certification', 'IT Certification', '0'),
(1027, 'IT Hardware', 'IT Hardware', '0'),
(1028, 'IT Management & Administration', 'IT Management & Administration', '0'),
(1029, 'IT Strategy / Consulting', 'IT Strategy / Consulting', '0'),
(1030, 'Italian', 'Italian', '0'),
(1031, 'Japanese', 'Japanese', '0'),
(1032, 'Korean', 'Korean', '0'),
(1033, 'Machine Tools', 'Machine Tools', '0'),
(1034, 'Maintainance', 'Maintainance', '0'),
(1035, 'Manufacturers', 'Manufacturers', '0'),
(1036, 'Manufacturing & Logistics', 'Manufacturing & Logistics', '0'),
(1037, 'Materials', 'Materials', '0'),
(1038, 'Math Apps', 'Math Apps', '0'),
(1039, 'Mechanics', 'Mechanics', '0'),
(1040, 'Messaging - Application Communication & Data ', 'Messaging - Application Communication & Data Transfer', '0'),
(1041, 'Microsoft', 'Microsoft', '0'),
(1042, 'Modeling (and abstract mathematics)', 'Modeling (and abstract mathematics)', '0'),
(1043, 'Nanotechnology', 'Nanotechnology', '0'),
(1044, 'Network-attached storage (NAS)', 'Network-attached storage (NAS)', '0'),
(1045, 'Networks', 'Networks', '0'),
(1046, 'Numerics', 'Numerics', '0'),
(1047, 'Operating Systems', 'Operating Systems', '0'),
(1048, 'Optoelectronics', 'Optoelectronics', '0'),
(1049, 'Polish', 'Polish', '0'),
(1050, 'Power Engineering', 'Power Engineering', '0'),
(1051, 'Probability Theory and Stochastic Processes', 'Probability Theory and Stochastic Processes', '0'),
(1052, 'Production', 'Production', '0'),
(1053, 'Professional Skills', 'Professional Skills', '0'),
(1054, 'Project Management Certification', 'Project Management Certification', '0'),
(1055, 'Project Management SW', 'Project Management SW', '0'),
(1056, 'Russian', 'Russian', '0'),
(1057, 'SAP', 'SAP', '0'),
(1058, 'Security', 'Security', '0'),
(1059, 'Server Applications & Hosting', 'Server Applications & Hosting', '0'),
(1060, 'Signal Processing', 'Signal Processing', '0'),
(1061, 'Social Skill', 'Social Skill', '0'),
(1062, 'Software Development', 'Software Development', '0'),
(1063, 'Spanish', 'Spanish', '0'),
(1064, 'Statistics', 'Statistics', '0'),
(1065, 'Support', 'Support', '0'),
(1066, 'SW Standards', 'SW Standards', '0'),
(1067, 'Systems / Software Development Life Cycle', 'Systems / Software Development Life Cycle', '0'),
(1068, 'Systems Development Life Cycle', 'Systems Development Life Cycle', '0'),
(1069, 'Systems Engineering', 'Systems Engineering', '0'),
(1070, 'Telecommunication', 'Telecommunication', '0'),
(1071, 'Thermal Engineering', 'Thermal Engineering', '0'),
(2001, 'AC Motor', 'AC Motor', '0'),
(2002, 'Ansys', 'Ansys', '0'),
(2003, 'Application Protocol', 'Application Protocol', '0'),
(2004, 'Autodesk Moldflow', 'Autodesk Moldflow', '0'),
(2005, 'AutoSAR', 'AutoSAR', '0'),
(2006, 'AutoSAR CESSAR', 'AutoSAR CESSAR', '0'),
(2007, 'Biology', 'Biology', '0'),
(2008, 'BMW', 'BMW', '0'),
(2009, 'Business Intelligence & Reporting', 'Business Intelligence & Reporting', '0'),
(2010, 'Bus-Systems', 'Bus-Systems', '0'),
(2011, 'Capability Maturity Model Integration (CMMI)', 'Capability Maturity Model Integration (CMMI)', '0'),
(2012, 'Circuits', 'Circuits', '0'),
(2013, 'CISCO', 'CISCO', '0'),
(2014, 'CNC Machining', 'CNC Machining', '0'),
(2015, 'Communication & Collaboration', 'Communication & Collaboration', '0'),
(2016, 'Telecomunication Components', 'Telecomunication Components', '0'),
(2017, 'Computer', 'Computer', '0'),
(2018, 'Computer Aided Design (CAD)', 'Computer Aided Design (CAD)', '0'),
(2019, 'Computer Aided Manufacturing (CAM)', 'Computer Aided Manufacturing (CAM)', '0'),
(2020, 'Computer Algebra System (CAS)', 'Computer Algebra System (CAS)', '0'),
(2021, 'Computer Animation', 'Computer Animation', '0'),
(2022, 'Computer Fluid Dynamics (CFD)', 'Computer Fluid Dynamics (CFD)', '0'),
(2023, 'Computing Input /Output Devices', 'Computing Input /Output Devices', '0'),
(2024, 'Configuration Management', 'Configuration Management', '0'),
(2025, 'Conflict Management', 'Conflict Management', '0'),
(2026, 'Consulting skills', 'Consulting skills', '0'),
(2027, 'Control Applications', 'Control Applications', '0'),
(2028, 'Control Theory', 'Control Theory', '0'),
(2029, 'Controllers', 'Controllers', '0'),
(2030, 'Data', 'Data', '0'),
(2031, 'Data Mining', 'Data Mining', '0'),
(2032, 'Data Storage, Backup & Recovery', 'Data Storage, Backup & Recovery', '0'),
(2033, 'Data Transfer', 'Data Transfer', '0'),
(2034, 'Database', 'Database', '0'),
(2035, 'DC Motor', 'DC Motor', '0'),
(2036, 'Defect Prevention', 'Defect Prevention', '0'),
(2037, 'Design', 'Design', '0'),
(2038, 'Design of experiments', 'Design of experiments', '0'),
(2039, 'Desktop', 'Desktop', '0'),
(2040, 'Development Process (ASPICE)', 'Development Process (ASPICE)', '0'),
(2041, 'Diagnostics', 'Diagnostics', '0'),
(2042, 'Digital signal processing', 'Digital signal processing', '0'),
(2043, 'Electrical circuits', 'Electrical circuits', '0'),
(2044, 'Electrical element/Semiconductors', 'Electrical element/Semiconductors', '0'),
(2045, 'Electromagnetic spectrum', 'Electromagnetic spectrum', '0'),
(2046, 'Electronic Computer-Aided Design (ECAD)', 'Electronic Computer-Aided Design (ECAD)', '0'),
(2047, 'Electronic Parts', 'Electronic Parts', '0'),
(2048, 'Electrostatics', 'Electrostatics', '0'),
(2049, 'Embedded', 'Embedded', '0'),
(2050, 'Embedded Systems', 'Embedded Systems', '0'),
(2051, 'Encryption', 'Encryption', '0'),
(2052, 'Engineering Modelling', 'Engineering Modelling', '0'),
(2053, 'Enterprise Resource Planning (ERP)', 'Enterprise Resource Planning (ERP)', '0'),
(2054, 'Feature Detection', 'Feature Detection', '0'),
(2055, 'Fiat Chrysler', 'Fiat Chrysler', '0'),
(2056, 'Filtering', 'Filtering', '0'),
(2057, 'Finite-State Machine', 'Finite-State Machine', '0'),
(2058, 'Firewall', 'Firewall', '0'),
(2059, 'Fixed Networks', 'Fixed Networks', '0'),
(2060, 'Fluid Mechanics', 'Fluid Mechanics', '0'),
(2061, 'Ford', 'Ford', '0'),
(2062, 'General Motors (GM)', 'General Motors (GM)', '0'),
(2063, 'Raster Graphics', 'Rasters are dot-matrix data structures', '0'),
(2064, 'Hardware Components', 'Hardware Components', '0'),
(2065, 'Heating, Ventilation and Air Conditioning', 'Heating, Ventilation and Air Conditioning', '0'),
(2066, 'Human-Machine Interface (HMI)', 'Human-Machine Interface (HMI)', '0'),
(2067, 'Industrial Automation Applications', 'Industrial Automation Applications', '0'),
(2068, 'Inference from stochastic processes', 'Inference from stochastic processes', '0'),
(2069, 'Information Management System', 'Information Management System', '0'),
(2070, 'Installation', 'Installation', '0'),
(2071, 'Interior', 'Interior', '0'),
(2072, 'Internet of Things (IoT)', 'Internet of Things (IoT)', '0'),
(2073, 'Interviewing Skills', 'Interviewing Skills', '0'),
(2074, 'IT Support', 'IT Support', '0'),
(2075, 'Jira', 'Jira', '0'),
(2076, 'Kinematics', 'Kinematics', '0'),
(2077, 'Leadership', 'Leadership', '0'),
(2078, 'Machine Learning', 'Machine Learning', '0'),
(2079, 'Machine Vision', 'Machine Vision', '0'),
(2080, 'Machines', 'Machines', '0'),
(2081, 'Manufacturing Execution Systems (MES)', 'Manufacturing Execution Systems (MES)', '0'),
(2082, 'Mathematical finance', 'Mathematical finance', '0'),
(2083, 'Mathematical Modelling', 'Mathematical Modelling', '0'),
(2084, 'Microcontroller SW', 'Microcontroller SW', '0'),
(2085, 'Microsoft Certification', 'Microsoft Certification', '0'),
(2086, 'Microsoft Office Applications', 'Microsoft Office Applications', '0'),
(2087, 'MISRA', 'MISRA', '0'),
(2088, 'Mobile', 'Mobile', '0'),
(2089, 'Mobile Networks', 'Mobile Networks', '0'),
(2090, 'Model-Based Systems Engineering (MBSE)', 'Model-Based Systems Engineering (MBSE)', '0'),
(2091, 'Motor Controller', 'Motor Controller', '0'),
(2092, 'MS Project', 'MS Project', '0'),
(2093, 'Multibody system (MBD)', 'Multibody system (MBD)', '0'),
(2094, 'Multimeter', 'Multimeter', '0'),
(2095, 'Network Components', 'Network Components', '0'),
(2096, 'Nissan', 'Nissan', '0'),
(2097, 'Numerical linear algebra', 'Numerical linear algebra', '0'),
(2098, 'Operations', 'Operations', '0'),
(2099, 'Oscilloscope', 'Oscilloscope', '0'),
(2100, 'Out-of-band management', 'Out-of-band management', '0'),
(2101, 'Partial differential equations', 'Partial differential equations', '0'),
(2102, 'Physics', 'Physics', '0'),
(2103, 'Plastic', 'Plastic', '0'),
(2104, 'Platforms', 'Platforms', '0'),
(2105, 'PMI', 'PMI', '0'),
(2106, 'PMI Certified Associate in Project Management', 'PMI Certified Associate in Project Management (CAPM)', '0'),
(2107, 'PMI Project Management Professional (PMP)', 'PMI Project Management Professional (PMP)', '0'),
(2108, 'Power Generation', 'Power Generation', '0'),
(2109, 'Powertrain and Chassis', 'Powertrain and Chassis', '0'),
(2110, 'Processes', 'Processes', '0'),
(2111, 'Production & Quality Management', 'Production & Quality Management', '0'),
(2112, 'Production Process', 'Production Process', '0'),
(2113, 'Production Standards', 'Production Standards', '0'),
(2114, 'Production Technology', 'Production Technology', '0'),
(2115, 'Programming Languages & Frameworks', 'Programming Languages & Frameworks', '0'),
(2116, 'Project Risk Management', 'Project Risk Management', '0'),
(2117, 'Protocols', 'Protocols', '0'),
(2118, 'Quality Control', 'Quality Control', '0'),
(2119, 'Renault', 'Renault', '0'),
(2120, 'Robotics', 'Robotics', '0'),
(2121, 'SAP BASIS', 'SAP BASIS', '0'),
(2122, 'SAP Certification', 'SAP Certification', '0'),
(2123, 'SAP-Modules', 'SAP-Modules', '0'),
(2124, 'Satellite Communication / Positioning', 'Satellite Communication / Positioning', '0'),
(2125, 'Server', 'Server', '0'),
(2126, 'Server OS', 'Server OS', '0'),
(2127, 'Server Support', 'Server Support', '0'),
(2128, 'Simulation & Optimisation', 'Simulation & Optimisation', '0'),
(2129, 'Simulation & Testing', 'Simulation & Testing', '0'),
(2130, 'Six Sigma', 'Six Sigma', '0'),
(2131, 'SMK (Software Development Process)', 'SMK (Software Development Process)', '0'),
(2132, 'Softw.Integr.,Developm.& Interfaces', 'Softw.Integr.,Developm.& Interfaces', '0'),
(2133, 'Software Design Pattern', 'Software Design Pattern', '0'),
(2134, 'Soldering', 'Soldering', '0'),
(2135, 'Statistical Software', 'Statistical Software', '0'),
(2136, 'Strategy / Consulting', 'Strategy / Consulting', '0'),
(2137, 'Structural analysis', 'Structural analysis', '0'),
(2138, 'Structural Analysis SW', 'Structural Analysis SW', '0'),
(2139, 'Styles of Computing', 'Styles of Computing', '0'),
(2140, 'SW Testing', 'SW Testing', '0'),
(2141, 'System Properties', 'System Properties', '0'),
(2142, 'Tata', 'Tata', '0'),
(2143, 'Thermodynamics', 'Thermodynamics', '0'),
(2144, 'Tools (embedded software)', 'Tools (embedded software)', '0'),
(2145, 'Tools (software)', 'Tools (software)', '0'),
(2146, 'Tools and Programming', 'Tools and Programming', '0'),
(2147, 'Toyota', 'Toyota', '0'),
(2148, 'Transmission', 'Transmission', '0'),
(2149, 'Virtualisation', 'Virtualisation', '0'),
(2150, 'Volkswagen (VW)', 'Volkswagen (VW)', '0'),
(2151, 'Volvo', 'Volvo', '0'),
(2152, 'Webhosting - Operation & Systemprogr', 'Webhosting - Operation & Systemprogr', '0'),
(2153, 'Wireless Networks', 'Wireless Networks', '0'),
(2154, 'Work Management', 'Work Management', '0'),
(3001, '2D Modeling', '2D Modeling', '0'),
(3002, '3D Modeling', '3D Modeling', '0'),
(3003, 'Adobe Illustrator', 'Adobe Illustrator', '0'),
(3004, 'Adobe Lightroom', 'Adobe Lightroom', '0'),
(3005, 'Adobe Photoshop', 'Adobe Photoshop', '0'),
(3006, 'Agile Development', 'Agile Development', '0'),
(3007, 'Algorithms', 'Algorithms', '0'),
(3008, 'Altium Designer', 'Altium Designer', '0'),
(3009, 'Analog filter', 'Analog filter', '0'),
(3010, 'Android', 'Android', '0'),
(3011, 'ANSYS Fluent', 'ANSYS Fluent', '0'),
(3012, 'ANSYS Mechanical', 'ANSYS Mechanical', '0'),
(3013, 'Ansys Workbench', 'Ansys Workbench', '0'),
(3014, 'Antennas', 'Antennas', '0'),
(3015, 'Apache', 'Apache', '0'),
(3016, 'Application Lifecycle Management', 'Application Lifecycle Management', '0'),
(3017, 'Applications & Operating Systems', 'Applications & Operating Systems', '0'),
(3018, 'Assistance System', 'Assistance System', '0'),
(3019, 'AutoCAD', 'AutoCAD', '0'),
(3020, 'Autodesk Inventor', 'Autodesk Inventor', '0'),
(3021, 'Autodesk Maya', 'Autodesk Maya', '0'),
(3022, 'Automotive Buses', 'Automotive Buses', '0'),
(3023, 'Automotive Systems', 'Automotive Systems', '0'),
(3024, 'Backup/Restore/Archive Management', 'Backup/Restore/Archive Management', '0'),
(3025, 'Big Data', 'Big Data', '0'),
(3026, 'Blender', 'Blender', '0'),
(3027, 'Braking System', 'Braking System', '0'),
(3028, 'Cadence Allegro', 'Cadence Allegro', '0'),
(3029, 'Cadence Orcad', 'Cadence Orcad', '0'),
(3030, 'Calibration & Configuration', 'Calibration & Configuration', '0'),
(3031, 'CAMWorks', 'CAMWorks', '0'),
(3032, 'Car Seat', 'Car Seat', '0'),
(3033, 'Casting', 'Casting', '0'),
(3034, 'Certified Network Associate (CCNA)', 'Certified Network Associate (CCNA)', '0'),
(3035, 'Chrysler', 'Chrysler', '0'),
(3036, 'Circuit', 'Circuit', '0'),
(3037, 'Circuit Boards', 'Circuit Boards', '0'),
(3038, 'Cloud Computing', 'Cloud Computing', '0'),
(3039, 'Cockpit', 'Cockpit', '0'),
(3040, 'Cognex InSight', 'Cognex InSight', '0'),
(3041, 'Common-Languages', 'Common-Languages', '0'),
(3042, 'Continental Leadership Entry Program (LEP)', 'Continental Leadership Entry Program (LEP)', '0'),
(3043, 'Continuous Integration', 'Continuous Integration', '0'),
(3044, 'Cooling', 'Cooling', '0'),
(3045, 'CorelDRAW', 'CorelDRAW', '0'),
(3046, 'Corporate finance', 'Corporate finance', '0'),
(3047, 'Creo', 'Creo', '0'),
(3048, 'Dassault CATIA', 'Dassault CATIA', '0'),
(3049, 'Data Analytics', 'Data Analytics', '0'),
(3050, 'Data compression', 'Data compression', '0'),
(3051, 'Data Storage', 'Data Storage', '0'),
(3052, 'Design Data Management', 'Design Data Management', '0'),
(3053, 'Design for Production', 'Design for Production', '0'),
(3054, 'Digital image', 'Digital image', '0'),
(3055, 'Direct Memory Access||DMA||', 'Direct Memory Access||DMA||', '0'),
(3056, 'Displays', 'Displays', '0'),
(3057, 'Documentation', 'Documentation', '0'),
(3058, 'DTC', 'DTC', '0'),
(3059, 'EAGLE', 'EAGLE', '0'),
(3060, 'Electric charge', 'Electric charge', '0'),
(3061, 'Electrical Supply System', 'Electrical Supply System', '0'),
(3062, 'Electrical Testing', 'Electrical Testing', '0'),
(3063, 'Electronics Buses', 'Electronics Buses', '0'),
(3064, 'Embedded Linux', 'Embedded Linux', '0'),
(3065, 'Embedded Programming', 'Embedded Programming', '0'),
(3066, 'Emulators', 'Emulators', '0'),
(3067, 'Engine', 'Engine', '0'),
(3068, 'Engine Components and Parts', 'Engine Components and Parts', '0'),
(3069, 'Failure Analysis', 'Failure Analysis', '0'),
(3070, 'Fiat', 'Fiat', '0'),
(3071, 'Finite Element Method (FEA)', 'Finite Element Method (FEA)', '0'),
(3072, 'Flash (FLS)', 'Flash (FLS)', '0'),
(3073, 'Flexsim', 'Flexsim', '0'),
(3074, 'Forming', 'Forming', '0'),
(3075, 'FreeRTOS', 'FreeRTOS', '0'),
(3076, 'FTP Server', 'FTP Server', '0'),
(3077, 'Fuel Supply System', 'Fuel Supply System', '0'),
(3078, 'Game Engines', 'Game Engines', '0'),
(3079, 'Generic Programming', 'Generic Programming', '0'),
(3080, 'Geometric Dimensioning and Tolerancing (GD&T)', 'Geometric Dimensioning and Tolerancing (GD&T)', '0'),
(3081, 'GIMP (Gnu Image Manipulation Program)', 'GIMP (Gnu Image Manipulation Program)', '0'),
(3082, 'Gluing', 'Gluing', '0'),
(3083, 'Graphical User Interface (GUI)', 'Graphical User Interface (GUI)', '0'),
(3084, 'Graphics', 'Graphics', '0'),
(3085, 'Graphics Display Controller (GDC)', 'Graphics Display Controller (GDC)', '0'),
(3086, 'Graphics Virtualization', 'Graphics Virtualization', '0'),
(3087, 'Green Hills Multi IDE', 'Green Hills Multi IDE', '0'),
(3088, 'Heating', 'Heating', '0'),
(3089, 'Heating, Ventilation and Air Conditioning (HV', 'Heating, Ventilation and Air Conditioning (HVAC)', '0'),
(3090, 'HMI', 'HMI', '0'),
(3091, 'Hydraulics', 'Hydraulics', '0'),
(3092, 'IBM General Parallel File System (GPFS)', 'IBM General Parallel File System (GPFS)', '0'),
(3093, 'IBM AIX', 'IBM Operating System', '0'),
(3094, 'IBM z/OS', 'IBM z/OS', '0'),
(3095, 'Image Sensors', 'Image Sensors', '0'),
(3096, 'Impedance', 'Impedance', '0'),
(3097, 'Incident Management', 'Incident Management', '0'),
(3098, 'Industrial Automation Languages', 'Industrial Automation Languages', '0'),
(3099, 'Industry', 'Industry', '0'),
(3100, 'Integrated Circuits', 'Integrated Circuits', '0'),
(3101, 'Integrated Development Environment', 'Integrated Development Environment', '0'),
(3102, 'Integrated Development Environment (embedded)', 'Integrated Development Environment (embedded)', '0'),
(3103, 'Intel AMT', 'Intel AMT', '0'),
(3104, 'Inverter', 'Inverter', '0'),
(3105, 'iOS', 'iOS', '0'),
(3106, 'IT Service Management (ITSM)', 'IT Service Management (ITSM)', '0'),
(3107, 'Kalman Filter', 'Kalman Filter', '0'),
(3108, 'Laser', 'Laser', '0'),
(3109, 'Laser Marking', 'Laser Marking', '0'),
(3110, 'Law', 'Law', '0'),
(3111, 'Lean Manufacturing', 'Lean Manufacturing', '0'),
(3112, 'Light', 'Light', '0'),
(3113, 'Light-Emitting Diode (LED)', 'Light-Emitting Diode (LED)', '0'),
(3114, 'Lighting and Signaling System', 'Lighting and Signaling System', '0'),
(3115, 'Linux', 'Linux', '0'),
(3116, 'Linux - RedHat', 'Linux - RedHat', '0'),
(3117, 'Linux - Ubuntu', 'Linux - Ubuntu', '0'),
(3118, 'Local Interconnect Network (LIN)', 'Local Interconnect Network (LIN)', '0'),
(3119, 'logi.CAD', 'logi.CAD', '0'),
(3120, 'Lotus Notes', 'Lotus Notes', '0'),
(3121, 'Markov processes', 'Markov processes', '0'),
(3122, 'Master Data', 'Master Data', '0'),
(3123, 'MasterCAM', 'MasterCAM', '0'),
(3124, 'MathCAD', 'MathCAD', '0'),
(3125, 'Matlab', 'Matlab', '0'),
(3126, 'Memory / Storage', 'Memory / Storage', '0'),
(3127, 'Mentor Graphics Design Architect IC', 'Mentor Graphics Design Architect IC', '0'),
(3128, 'Mentor Graphics Xpedition', 'Mentor Graphics Xpedition', '0'),
(3129, 'Microcontroller', 'Microcontroller', '0'),
(3130, 'Microcontroller Abstraction Layer (MCAL)', 'Microcontroller Abstraction Layer (MCAL)', '0'),
(3131, 'Microprocessor', 'Microprocessor', '0'),
(3132, 'Microsoft Certified Professional', 'Microsoft Certified Professional', '0'),
(3133, 'Microsoft Certified Professional Developer (M', 'Microsoft Certified Professional Developer (MCPD)', '0'),
(3134, 'Mills', 'Mills', '0'),
(3135, 'Minitab', 'Minitab', '0'),
(3136, 'Mobile Apps', 'Mobile Apps', '0'),
(3137, 'Mobile Devices', 'Mobile Devices', '0'),
(3138, 'Model Based Development ', 'Model Based Development ', '0'),
(3139, 'Modulation', 'Modulation', '0'),
(3140, 'Molding', 'Molding', '0'),
(3141, 'Motion Sensing', 'Motion Sensing', '0'),
(3142, 'MS Excel', 'MS Excel', '0'),
(3143, 'MS Outlook', 'MS Outlook', '0'),
(3144, 'MS PowerPoint', 'MS PowerPoint', '0'),
(3145, 'MS Sharepoint', 'MS Sharepoint', '0'),
(3146, 'MS Visio', 'MS Visio', '0'),
(3147, 'MS Windows Server', 'MS Windows Server', '0'),
(3148, 'MS Windows Server 2008', 'MS Windows Server 2008', '0'),
(3149, 'MS Word', 'MS Word', '0'),
(3150, 'Multithreading', 'Multithreading', '0'),
(3151, 'National Instruments PXI', 'National Instruments PXI', '0'),
(3152, 'Navigation', 'Navigation', '0'),
(3153, 'Network Administration', 'Network Administration', '0'),
(3154, 'Neural Networks', 'Neural Networks', '0'),
(3155, 'No-SQL', 'No-SQL', '0'),
(3156, 'Numerical methods', 'Numerical methods', '0'),
(3157, 'Object Oriented Analysis and Design (OOPS)', 'Object Oriented Analysis and Design (OOPS)', '0'),
(3158, 'Object-oriented programming', 'Object-oriented programming', '0'),
(3159, 'Opel', 'Opel', '0'),
(3160, 'Optical fiber', 'Optical fiber', '0'),
(3161, 'Optical Simulation', 'Optical Simulation', '0'),
(3162, 'OrCAD EE Pspice', 'OrCAD EE Pspice', '0'),
(3163, 'OS X', 'OS X', '0'),
(3164, 'OSEK-OS', 'OSEK-OS', '0'),
(3165, 'Other Programming Languages', 'Other Programming Languages', '0'),
(3166, 'Parallel Programming', 'Parallel Programming', '0'),
(3167, 'Pattern Recognition', 'Pattern Recognition', '0'),
(3168, 'Peripherals', 'Peripherals', '0'),
(3169, 'Pneumatics', 'Pneumatics', '0'),
(3170, 'Positive feedback', 'Positive feedback', '0'),
(3171, 'Printing', 'Printing', '0'),
(3172, 'Production Part Approval Process (PPAP)', 'Production Part Approval Process (PPAP)', '0'),
(3173, 'Programmable Logic Device (PLD)', 'Programmable Logic Device (PLD)', '0'),
(3174, 'QNX', 'QNX', '0'),
(3175, 'Quality Management', 'Quality Management', '0'),
(3176, 'R', 'R', '0'),
(3177, 'Radio Frequency', 'Radio Frequency', '0'),
(3178, 'Raspberry Pi', 'Raspberry Pi', '0'),
(3179, 'Realtime Embedded Systems', 'Realtime Embedded Systems', '0'),
(3180, 'Realtime Operating System (RTOS)', 'Realtime Operating System (RTOS)', '0'),
(3181, 'Remote Desktop Protocol (RDP)', 'Remote Desktop Protocol (RDP)', '0'),
(3182, 'Rockwell RSLogix ', 'Rockwell RSLogix ', '0'),
(3183, 'Sampling', 'Sampling', '0'),
(3184, 'SAP NPP', 'SAP NPP', '0'),
(3185, 'SAP PDM (Product Data Managment)', 'SAP PDM (Product Data Managment)', '0'),
(3186, 'SAS', 'SAS', '0'),
(3187, 'Scanner', 'Scanner', '0'),
(3188, 'Scilab', 'Scilab', '0'),
(3189, 'Scripting', 'Scripting', '0'),
(3190, 'Sensor', 'Sensor', '0'),
(3191, 'Sensors', 'Sensors', '0'),
(3192, 'Siemens NX', 'Siemens NX', '0'),
(3193, 'Siemens Step 7 ', 'Siemens Step 7 ', '0'),
(3194, 'Simulation', 'Simulation', '0'),
(3195, 'Simulink', 'Simulink', '0'),
(3196, 'Software', 'Software', '0'),
(3197, 'Software Development Life Cycle', 'Software Development Life Cycle', '0'),
(3198, 'Solar Energy', 'Solar Energy', '0'),
(3199, 'SolidWorks', 'SolidWorks', '0'),
(3200, 'SQL', 'SQL', '0'),
(3201, 'SQLite', 'SQLite', '0'),
(3202, 'SSH (Secure Shell)', 'SSH (Secure Shell)', '0'),
(3203, 'Standards', 'Standards', '0'),
(3204, 'Statistical methods', 'Statistical methods', '0'),
(3205, 'Stepper Motor', 'Stepper Motor', '0'),
(3206, 'Storage Management', 'Storage Management', '0'),
(3207, 'Supply Chain', 'Supply Chain', '0'),
(3208, 'SW Requirements Engineering & Gathering', 'SW Requirements Engineering & Gathering', '0'),
(3209, 'System Design & Development', 'System Design & Development', '0'),
(3210, 'System on a Chip (SOC)', 'System on a Chip (SOC)', '0'),
(3211, 'Systems', 'Systems', '0'),
(3212, 'Test Management', 'Test Management', '0'),
(3213, 'Testing', 'Testing', '0'),
(3214, 'Testing & Verification, Debugging', 'Testing & Verification, Debugging', '0'),
(3215, 'Testing Methods', 'Testing Methods', '0'),
(3216, 'Thermal management', 'Thermal management', '0'),
(3217, 'Thermodynamics Basics', 'Thermodynamics Basics', '0'),
(3218, 'Tomcat', 'Tomcat', '0'),
(3219, 'Tools (SW testing)', 'Tools (SW testing)', '0'),
(3220, 'Tools and Development', 'Tools and Development', '0'),
(3221, 'Transceiver', 'Transceiver', '0'),
(3222, 'Transmission line', 'Transmission line', '0'),
(3223, 'Transport Layer', 'Transport Layer', '0'),
(3224, 'UML', 'UML', '0'),
(3225, 'Unigraphics', 'Unigraphics', '0'),
(3226, 'UNIX', 'UNIX', '0'),
(3227, 'UNIX / Linux', 'UNIX / Linux', '0'),
(3228, 'Utilities', 'Utilities', '0'),
(3229, 'Version Control & Configuration Management', 'Version Control & Configuration Management', '0'),
(3230, 'Video / Audio / Analog', 'Video / Audio / Analog', '0'),
(3231, 'VMWare', 'VMWare', '0'),
(3232, 'VMWare vSphere', 'VMWare vSphere', '0'),
(3233, 'VW', 'VW', '0'),
(3234, 'Watchdog (WDG)', 'Watchdog (WDG)', '0'),
(3235, 'Waveguide', 'Waveguide', '0'),
(3236, 'Web & Display', 'Web & Display', '0'),
(3237, 'Welding', 'Welding', '0'),
(3238, 'Wide Area Network (WAN)', 'Wide Area Network (WAN)', '0'),
(3239, 'Windows 2000', 'Windows 2000', '0'),
(3240, 'Windows 7', 'Windows 7', '0'),
(3241, 'Windows 8', 'Windows 8', '0'),
(3242, 'Windows Mobile', 'Windows Mobile', '0'),
(3243, 'Windows Vista', 'Windows Vista', '0'),
(3244, 'Windows XP', 'Windows XP', '0'),
(3245, 'X-RAY', 'X-RAY', '0'),
(3246, 'Zuken Visula', 'Zuken Visula', '0'),
(4001, '.NET', '.NET', '0'),
(4002, '3D Camera', '3D Camera', '0'),
(4003, '3D Printing', '3D Printing', '0'),
(4004, '3D Scanner', '3D Scanner', '0'),
(4005, 'ActionScript', 'ActionScript', '0'),
(4006, 'Actuator', 'Actuator', '0'),
(4007, 'Adobe Dreamweaver', 'Adobe Dreamweaver', '0'),
(4008, 'Adobe Flash', 'Adobe Flash', '0'),
(4009, 'Advanced Driver Assistance Systems (ADAS)', 'Advanced Driver Assistance Systems (ADAS)', '0'),
(4010, 'Advanced Encryption Standard (AES)', 'Advanced Encryption Standard (AES)', '0'),
(4011, 'Advanced Product Quality Planning (APQP)', 'Advanced Product Quality Planning (APQP)', '0'),
(4012, 'Agile Project and Portfolio Management', 'Agile Project and Portfolio Management', '0'),
(4013, 'Air Conditioning', 'Air Conditioning', '0'),
(4014, 'Airbag', 'Airbag', '0'),
(4015, 'AJAX', 'AJAX', '0'),
(4016, 'Analog-to-Digital Converter (AD Converter)', 'Analog-to-Digital Converter (AD Converter)', '0'),
(4017, 'Apache Hadoop', 'Apache Hadoop', '0'),
(4018, 'APIS IQ-RM', 'APIS IQ-RM', '0'),
(4019, 'App Programming', 'App Programming', '0'),
(4020, 'ARM 32-bit (Cortex M)', 'ARM 32-bit (Cortex M)', '0'),
(4021, 'ARM Architecture', 'ARM Architecture', '0'),
(4022, 'ARTEMMIS Framework', 'ARTEMMIS Framework', '0'),
(4023, 'ASP.NET', 'ASP.NET', '0'),
(4024, 'Assembler', 'Assembler', '0'),
(4025, 'ATM', 'ATM', '0'),
(4026, 'Atmel 8-bit', 'Atmel 8-bit', '0'),
(4027, 'Automated optical inspection (AOI)', 'Automated optical inspection (AOI)', '0'),
(4028, 'Backlight', 'Backlight', '0'),
(4029, 'Bash Script (Unix)', 'Bash Script (Unix)', '0'),
(4030, 'BIOS', 'BIOS', '0'),
(4031, 'Bluetooth', 'Bluetooth', '0'),
(4032, 'Body Control Module (BCM)', 'Body Control Module (BCM)', '0'),
(4033, 'Bootloader', 'Bootloader', '0'),
(4034, 'Brake Control System', 'Brake Control System', '0'),
(4035, 'C', 'C', '0'),
(4036, 'C#', 'C#', '0'),
(4037, 'C++', 'C++', '0'),
(4038, 'Camera', 'Camera', '0'),
(4039, 'CAN', 'CAN', '0'),
(4040, 'CAN Access Programming Language (CANCapl)', 'CAN Access Programming Language (CANCapl)', '0'),
(4041, 'Can calibration protocol (CCP)', 'Can calibration protocol (CCP)', '0'),
(4042, 'CANalyzer', 'CANalyzer', '0'),
(4043, 'CANdela Studio', 'CANdela Studio', '0'),
(4044, 'CANoe', 'CANoe', '0'),
(4045, 'Circuit Diagram', 'Circuit Diagram', '0'),
(4046, 'Circuit Simulation', 'Circuit Simulation', '0'),
(4047, 'Circuit Test', 'Circuit Test', '0'),
(4048, 'CNC Programming', 'CNC Programming', '0'),
(4049, 'Cobol', 'Cobol', '0'),
(4050, 'Code Composer Studio', 'Code Composer Studio', '0'),
(4051, 'CodeWarrior', 'CodeWarrior', '0'),
(4052, 'COM', 'COM', '0'),
(4053, 'Computer vision', 'Computer vision', '0'),
(4054, 'Configuration Management Tool', 'Configuration Management Tool', '0'),
(4055, 'Continental Industrial Sensors -SRR 20X Short', 'Continental Industrial Sensors -SRR 20X Short Range Radar Sensor', '0'),
(4056, 'Cryptography', 'Cryptography', '0'),
(4057, 'CSS', 'CSS', '0'),
(4058, 'Debugging', 'Debugging', '0'),
(4059, 'Defect Management', 'Defect Management', '0'),
(4060, 'Delphi', 'Delphi', '0'),
(4061, 'Design for Manufacturability (DFM)', 'Design for Manufacturability (DFM)', '0'),
(4062, 'Design-to-Cost (DTC)', 'Design-to-Cost (DTC)', '0'),
(4063, 'Die Casting', 'Die Casting', '0'),
(4064, 'Digital Image Processing', 'Digital Image Processing', '0'),
(4065, 'Digital signal processor (DSP)', 'Digital signal processor (DSP)', '0'),
(4066, 'Digital TV Compression', 'Digital TV Compression', '0'),
(4067, 'Doxygen', 'Doxygen', '0'),
(4068, 'DRAM', 'DRAM', '0'),
(4069, 'Drupal', 'Drupal', '0'),
(4070, 'Eclipse', 'Eclipse', '0'),
(4071, 'Electromagnetic Compatibility (EMC)', 'Electromagnetic Compatibility (EMC)', '0'),
(4072, 'Electromagnetic Interference (EMI)', 'Electromagnetic Interference (EMI)', '0'),
(4073, 'Electromagnetic Simulation', 'Electromagnetic Simulation', '0'),
(4074, 'Electronic Braking System (EBS)', 'Electronic Braking System (EBS)', '0'),
(4075, 'Electronic Stability Control (ESC)', 'Electronic Stability Control (ESC)', '0'),
(4076, 'Electrostatic Discharge (ESD)', 'Electrostatic Discharge (ESD)', '0'),
(4077, 'Embedded C', 'Embedded C', '0'),
(4078, 'EMBEDDED C++', 'EMBEDDED C++', '0'),
(4079, 'Embedded Programming Languages', 'Embedded Programming Languages', '0'),
(4080, 'Engine Control Unit (ECU)', 'Engine Control Unit (ECU)', '0'),
(4081, 'Engine System', 'Engine System', '0'),
(4082, 'EPSON Programming', 'EPSON Programming', '0'),
(4083, 'ETAS MDA (Measure Data Analyzer)', 'ETAS MDA (Measure Data Analyzer)', '0'),
(4084, 'Extract-Transform-Load (ETL) Technique', 'Extract-Transform-Load (ETL) Technique', '0'),
(4085, 'Failure Mode and Effect Analysis (FMEA)', 'Failure Mode and Effect Analysis (FMEA)', '0'),
(4086, 'Fiber Optic Communication', 'Fiber Optic Communication', '0'),
(4087, 'Freescale 16-bit (68HC12)', 'Freescale 16-bit (68HC12)', '0'),
(4088, 'Freescale 32-bit (i.MX)', 'Freescale 32-bit (i.MX)', '0'),
(4089, 'Freescale 32-bit (MPC55xx)', 'Freescale 32-bit (MPC55xx)', '0'),
(4090, 'Freescale 32-bit (MPC56xx)', 'Freescale 32-bit (MPC56xx)', '0'),
(4091, 'Freescale 8-bit (68HC08)', 'Freescale 8-bit (68HC08)', '0'),
(4092, 'Freescale MCU', 'Freescale MCU', '0'),
(4093, 'Fuel Pump', 'Fuel Pump', '0'),
(4094, 'Fujitsu 32bit (MB91F46x)', 'Fujitsu 32bit (MB91F46x)', '0'),
(4095, 'Fujitsu MB86R01', 'Fujitsu MB86R01', '0'),
(4096, 'Fujitsu MB88F332 (Indigo)', 'Fujitsu MB88F332 (Indigo)', '0'),
(4097, 'Fuzzy control', 'Fuzzy control', '0'),
(4099, 'Gauges', 'Gauges', '0'),
(4100, 'General Packet Radio Service (GPRS)', 'General Packet Radio Service (GPRS)', '0'),
(4101, 'General Purpose Interface Bus (GPIB)', 'General Purpose Interface Bus (GPIB)', '0'),
(4102, 'Geometric Tolerance Analysis', 'Geometric Tolerance Analysis', '0'),
(4103, 'git', 'git', '0'),
(4104, 'Global Positioning System (GPS)', 'Global Positioning System (GPS)', '0'),
(4105, 'Global System for Mobile Communications (GSM)', 'Global System for Mobile Communications (GSM)', '0'),
(4106, 'Gluing Technology', 'Gluing Technology', '0'),
(4107, 'Graphic Subsystem', 'Graphic Subsystem', '0'),
(4108, 'Green Hills Probe', 'Green Hills Probe', '0'),
(4109, 'Hardware Abstraction Layer (HAL)', 'Hardware Abstraction Layer (HAL)', '0'),
(4110, 'Hardware Testing', 'Hardware Testing', '0'),
(4111, 'Heat exchanger / Radiator', 'Heat exchanger / Radiator', '0'),
(4112, 'Heat Seat Control', 'Heat Seat Control', '0'),
(4113, 'Heat Staking', 'Heat Staking', '0'),
(4114, 'Heat Transfer', 'Heat Transfer', '0'),
(4115, 'Heating Control System', 'Heating Control System', '0'),
(4116, 'Hot Stamp', 'Hot Stamp', '0'),
(4117, 'HTML', 'HTML', '0'),
(4118, 'IAR Embedded Workbench', 'IAR Embedded Workbench', '0'),
(4119, 'IBM DB2', 'IBM DB2', '0'),
(4120, 'IBM Job Control Language (JCL)', 'IBM Job Control Language (JCL)', '0'),
(4121, 'IBM Mainframe', 'IBM Mainframe', '0'),
(4122, 'IBM Portable Application Solutions Environmen', 'IBM Portable Application Solutions Environment (PASE)', '0'),
(4123, 'IBM Rational ClearQuest', 'IBM Rational ClearQuest', '0'),
(4124, 'IBM Rational DOORS', 'IBM Rational DOORS', '0'),
(4125, 'IBM Rational Synergy', 'IBM Rational Synergy', '0'),
(4126, 'IBM Rational Team Concert', 'IBM Rational Team Concert', '0'),
(4127, 'IBM Rexx', 'IBM Rexx', '0'),
(4128, 'IBM Rhapsody', 'IBM Rhapsody', '0'),
(4129, 'IBM System x', 'IBM System x', '0'),
(4130, 'IBM System z', 'IBM System z', '0'),
(4131, 'Illumination', 'Illumination', '0'),
(4132, 'In-Circuit Test (ICT)', 'In-Circuit Test (ICT)', '0'),
(4133, 'Infrared', 'Infrared', '0'),
(4134, 'Injection Moulding', 'Injection Moulding', '0'),
(4135, 'Integrated Circuit Design (IC Design)', 'Integrated Circuit Design (IC Design)', '0'),
(4136, 'Integration Testing (I&T)', 'Integration Testing (I&T)', '0'),
(4137, 'Intel 8-bit (MCS-51)', 'Intel 8-bit (MCS-51)', '0'),
(4138, 'Intellectual Property (IP)', 'Intellectual Property (IP)', '0'),
(4139, 'Interactive System Productivity Facility (ISP', 'Interactive System Productivity Facility (ISPF)', '0'),
(4140, 'Inter-Integrated Circuit (I2C)', 'Inter-Integrated Circuit (I2C)', '0'),
(4141, 'International Software Testing Qualifications', 'International Software Testing Qualifications Board (ISTQB)', '0'),
(4142, 'IP / Ethernet', 'IP / Ethernet', '0'),
(4143, 'IPC7711 (Rework)', 'IPC7711 (Rework)', '0'),
(4144, 'IPC-A-610 (Acceptability of Electronic Assemb', 'IPC-A-610 (Acceptability of Electronic Assemblies)', '0'),
(4145, 'iPhone', 'iPhone', '0'),
(4146, 'ISO / IEC 17025', 'ISO / IEC 17025', '0'),
(4147, 'ISO / TS 16949', 'ISO / TS 16949', '0'),
(4148, 'ISO 14229 (UDS)', 'ISO 14229 (UDS)', '0'),
(4149, 'ISO 9001', 'ISO 9001', '0'),
(4150, 'IT Infrastructure Library (ITIL)', 'IT Infrastructure Library (ITIL)', '0'),
(4151, 'Java', 'Java', '0'),
(4152, 'Java - EE', 'Java - EE', '0'),
(4153, 'Java - JSP', 'Java - JSP', '0'),
(4154, 'Java - SE', 'Java - SE', '0'),
(4155, 'Java - Web Application', 'Java - Web Application', '0'),
(4156, 'Javascript', 'Javascript', '0'),
(4157, 'Jenkins', 'Jenkins', '0'),
(4158, 'JSON', 'JSON', '0'),
(4159, 'Kaizen', 'Kaizen', '0'),
(4160, 'Kanban', 'Kanban', '0'),
(4161, 'Keil uVision', 'Keil uVision', '0'),
(4162, 'Key-Word-Protokoll 2000 (KWP)', 'Key-Word-Protokoll 2000 (KWP)', '0'),
(4163, 'Kinect', 'Kinect', '0'),
(4164, 'LaTeX', 'LaTeX', '0'),
(4165, 'Lathe', 'Lathe', '0'),
(4166, 'Lean Management', 'Lean Management', '0'),
(4167, 'LIN-Bus', 'LIN-Bus', '0'),
(4168, 'Linux Kernel', 'Linux Kernel', '0'),
(4169, 'Linux Shell Scripting', 'Linux Shell Scripting', '0'),
(4170, 'Liquid-Crystal Display (LCD)', 'Liquid-Crystal Display (LCD)', '0'),
(4171, 'Low Voltage Differential Signaling (LVDS)', 'Low Voltage Differential Signaling (LVDS)', '0'),
(4172, 'Manufacturing Process', 'Manufacturing Process', '0'),
(4173, 'Material Life Cycle (MLC)', 'Material Life Cycle (MLC)', '0'),
(4174, 'Measurement system analysis (MSA)', 'Measurement system analysis (MSA)', '0'),
(4175, 'Mentor Graphics ModelSim', 'Mentor Graphics ModelSim', '0'),
(4176, 'Microchip Technology - PIC', 'Microchip Technology - PIC', '0'),
(4177, 'Microsoft SQL Server', 'Microsoft SQL Server', '0'),
(4178, 'Microsoft VC++', 'Microsoft VC++', '0'),
(4179, 'Microsoft Visual FoxPro', 'Microsoft Visual FoxPro', '0'),
(4180, 'Mobile DDR', 'Mobile DDR', '0'),
(4181, 'MODBUS', 'MODBUS', '0'),
(4182, 'Mold Design & Process', 'Mold Design & Process', '0'),
(4183, 'Molding Machine', 'Molding Machine', '0'),
(4184, 'MOST', 'MOST', '0'),
(4185, 'MPLAB', 'MPLAB', '0'),
(4186, 'MS Access', 'MS Access', '0'),
(4187, 'Multi2Sim', 'Multi2Sim', '0'),
(4188, 'MYSQL', 'MYSQL', '0'),
(4189, 'NAND', 'NAND', '0'),
(4190, 'NetBeans', 'NetBeans', '0'),
(4191, 'Network Protocol', 'Network Protocol', '0'),
(4192, 'NI LabVIEW', 'NI LabVIEW', '0'),
(4193, 'Non-volatile memory (NVM)', 'Non-volatile memory (NVM)', '0'),
(4194, 'Objective-C', 'Objective-C', '0'),
(4195, 'Object-Oriented Design', 'Object-Oriented Design', '0'),
(4196, 'Open Source Computer Vision (OpenCV)', 'Open Source Computer Vision (OpenCV)', '0'),
(4197, 'OpenGL', 'OpenGL', '0'),
(4198, 'Operational amplifier', 'Operational amplifier', '0'),
(4199, 'Optical Bonding', 'Optical Bonding', '0'),
(4200, 'ORACLE DB', 'ORACLE DB', '0'),
(4201, 'ORACLE PL/SQL', 'ORACLE PL/SQL', '0'),
(4202, 'Parking Break', 'Parking Break', '0'),
(4203, 'PCI Express', 'PCI Express', '0'),
(4204, 'Perl', 'Perl', '0'),
(4205, 'PHP', 'PHP', '0'),
(4206, 'Polyspace Static Analysis', 'Polyspace Static Analysis', '0'),
(4207, 'PostgreSQL', 'PostgreSQL', '0'),
(4208, 'Power Integrity', 'Power Integrity', '0'),
(4209, 'Power Management', 'Power Management', '0'),
(4210, 'Power Supply', 'Power Supply', '0'),
(4211, 'PPP - Link Control Protocol (LCP)', 'PPP - Link Control Protocol (LCP)', '0'),
(4212, 'Printed Circuit Boards (PCB)', 'Printed Circuit Boards (PCB)', '0'),
(4213, 'Product Data Management (PDM)', 'Product Data Management (PDM)', '0'),
(4214, 'Production Planning', 'Production Planning', '0'),
(4215, 'Programmable Logic Controller (PLC)', 'Programmable Logic Controller (PLC)', '0'),
(4216, 'Prototyping', 'Prototyping', '0'),
(4217, 'PTC Integrity', 'PTC Integrity', '0'),
(4218, 'Pulse Width Modulation (PWM)', 'Pulse Width Modulation (PWM)', '0'),
(4219, 'PVCS Version Manager', 'PVCS Version Manager', '0'),
(4220, 'Python', 'Python', '0'),
(4221, 'QT', 'QT', '0'),
(4222, 'Random-Access Memory (RAM)', 'Random-Access Memory (RAM)', '0'),
(4223, 'Realtime Field-Programmable Gate Arrays (FPGA', 'Realtime Field-Programmable Gate Arrays (FPGA)', '0'),
(4224, 'Relational Databases', 'Relational Databases', '0'),
(4225, 'Renesas 16-bit (V850)', 'Renesas 16-bit (V850)', '0'),
(4226, 'Renesas 32-bit (R32C)', 'Renesas 32-bit (R32C)', '0'),
(4227, 'Router', 'Router', '0'),
(4228, 'RS-232', 'RS-232', '0'),
(4229, 'Ruby ', 'Ruby ', '0'),
(4230, 'SAE J1939', 'SAE J1939', '0'),
(4231, 'SAP ABAP', 'SAP ABAP', '0'),
(4232, 'Scala', 'Scala', '0'),
(4233, 'SCONS', 'SCONS', '0'),
(4234, 'Scrum', 'Scrum', '0'),
(4235, 'Seat Control', 'Seat Control', '0'),
(4236, 'Sensor Fusion', 'Sensor Fusion', '0'),
(4237, 'Serial ATA (SATA)', 'Serial ATA (SATA)', '0'),
(4238, 'Signal Integrity', 'Signal Integrity', '0'),
(4239, 'Simulation Program with Integrated Circuit Em', 'Simulation Program with Integrated Circuit Emphasis (SPICE)', '0'),
(4240, 'Softune', 'Softune', '0'),
(4241, 'Software Architecture', 'Software Architecture', '0'),
(4242, 'Software Integration', 'Software Integration', '0'),
(4243, 'Software Testing', 'Software Testing', '0'),
(4244, 'Solidworks MBD', 'Solidworks MBD', '0'),
(4245, 'SPI', 'SPI', '0'),
(4246, 'SQL Server', 'SQL Server', '0'),
(4247, 'Standard Template Library (STL)', 'Standard Template Library (STL)', '0'),
(4248, 'Static Analysis', 'Static Analysis', '0'),
(4249, 'Statistical Process Control (SPC)', 'Statistical Process Control (SPC)', '0'),
(4250, 'STMicroelectronics 32-bit (STM32)', 'STMicroelectronics 32-bit (STM32)', '0'),
(4251, 'Structural Simulation Toolkit (SST)', 'Structural Simulation Toolkit (SST)', '0'),
(4252, 'Supervisory control (SCADA)', 'Supervisory control (SCADA)', '0'),
(4253, 'Surface Mount Technology (SMT)', 'Surface Mount Technology (SMT)', '0'),
(4254, 'svn', 'svn', '0'),
(4255, 'Systems Development Life-Cycle (SDLC)', 'Systems Development Life-Cycle (SDLC)', '0'),
(4256, 'TCP/IP', 'TCP/IP', '0'),
(4257, 'Technical Explanation', 'Technical Explanation', '0'),
(4258, 'Test Automation', 'Test Automation', '0'),
(4259, 'Test Design', 'Test Design', '0'),
(4260, 'Test-Driven Development (TDD)', 'Test-Driven Development (TDD)', '0'),
(4261, 'TestExec SL', 'TestExec SL', '0'),
(4262, 'Texas Instruments 16-bit (MSP430)', 'Texas Instruments 16-bit (MSP430)', '0'),
(4263, 'Texas Instruments 32-bit (C2000)', 'Texas Instruments 32-bit (C2000)', '0'),
(4264, 'The Eight Disciplines of Problem Solving (8D)', 'The Eight Disciplines of Problem Solving (8D)', '0'),
(4265, 'Thermal Analysis', 'Thermal Analysis', '0'),
(4266, 'Thermal Simulation', 'Thermal Simulation', '0'),
(4267, 'Tolerance Analysis', 'Tolerance Analysis', '0'),
(4268, 'Total Productive Maintenance (TPM)', 'Total Productive Maintenance (TPM)', '0'),
(4269, 'Touchscreen', 'Touchscreen', '0'),
(4270, 'UART', 'UART', '0'),
(4271, 'UDP (User Datagram Protocol)', 'UDP (User Datagram Protocol)', '0'),
(4272, 'Unity', 'Unity uses C# for development', '0'),
(4273, 'USB', 'USB', '0'),
(4274, 'VB.NET', 'VB.NET', '0'),
(4275, 'VBA', 'VBA', '0'),
(4276, 'Vector Tools', 'Vector Tools', '0'),
(4277, 'Verilog', 'Verilog', '0'),
(4278, 'VHDL', 'VHDL', '0'),
(4279, 'Video Codec H.264', 'Video Codec H.264', '0'),
(4280, 'Video Processing', 'Video Processing', '0'),
(4281, 'Virtual Memory', 'Virtual Memory', '0'),
(4282, 'Visual Basic', 'Visual Basic', '0'),
(4283, 'Visual Studio', 'Visual Studio', '0'),
(4284, 'VW Modularer Querbaukasten (MQB)', 'VW Modularer Querbaukasten (MQB)', '0'),
(4285, 'Water Heating', 'Water Heating', '0'),
(4286, 'Windows Presentation Foundation (WPF)', 'Windows Presentation Foundation (WPF)', '0'),
(4287, 'Wireless Sensor Network (WSN)', 'Wireless Sensor Network (WSN)', '0'),
(4288, 'WISE PDM', 'WISE PDM', '0'),
(4289, 'XHTML', 'XHTML', '0'),
(4290, 'Xilinx Hardware', 'Xilinx Hardware', '0'),
(4291, 'XML', 'XML', '0'),
(4292, 'XML - SOAP', 'XML - SOAP', '0'),
(4293, 'XML - XSL', 'XML - XSL', '0'),
(4294, 'ZigBee', 'ZigBee', '0'),
(4295, 'Zuken', 'Zuken', '0'),
(4296, 'test_skill', 'asdfasdfasdf', '0'),
(4297, 'Time Management', 'Time Management', '0'),
(4298, 'Work Management', 'Work Management', '0'),
(4299, 'FNOS', 'To be filled out by Miguel Aguayo', '0'),
(4300, 'Thinking Skill', 'Thinking Skill', '0'),
(4301, 'Work Management', 'Work Management', '0'),
(4302, 'Time Management', 'Time Management', '0'),
(4303, 'Emulators', 'Emulators', '0'),
(4304, 'prueba training 2', '0 asdfasdfasdfas', '0'),
(4305, 'Scrum Master', '', '0'),
(4306, 'Millenials Management', 'New generation management', '0'),
(4307, 'Scum Master', 'Scrum Master', '0'),
(4308, 'Scrum Product Owner', 'Product Owner', '0'),
(4309, 'test_skill', '', '0'),
(4310, 'hijo', '', '0'),
(4311, 'web technologies', '', '0'),
(4312, 'Ethernet', '', '0'),
(4313, 'Integrity', '', '0'),
(4314, 'AROS', '', '0'),
(4315, 'System Design', '', '0'),
(4316, 'Structured Programming', '', '0'),
(4317, 'PTC Integrity (IMS/MKS)', 'PTC Integrity Lifecycle Manager (former MKS Integrity)', '0'),
(4318, 'Risk Based Testing (RBT)', 'Risk Based Testing (RBT)', '0'),
(4320, 'Product Architecture', 'The Product Architect is responsible for the technical concept of the product. In cooperation with the subproject managers for electrical engineering, software and mechanics, the product architect creates the product architecture, assigning the product fu', '0'),
(4321, 'Product Integration', 'The Product Integrator is responsible for the technical coordination of the product integration. He ensures that the correct dataset versions from the individual disciplines are integrated and he is responsible for transferring this data to the production', '0'),
(4322, 'Requirements Engineering', 'The scope of the Requirements Engineer is to ensure that all requirements relevant for the product are collected, clarified and documented in the project.\r\nTypically he manages a team of analysts coming from the individual disciplines.', '0'),
(4323, 'Electromagnetic Compatibility', 'Expert in Electromagnetic compatibility for ID', '0'),
(4325, 'prueba 3', 'edicionasdñlkfjasñldfjasñldkf', '0'),
(4326, 'prueba de sub nodo', 'sin descripcion', '0'),
(4327, 'prueba3', '1 no sabe\r\n2 medio sabe\r\n3 cree que sabe\r\n4 mas o menos', '0'),
(4328, 'Vector Graphics', 'Vector graphics are images described by polygons instead of pixels', '0'),
(4329, 'Lua', 'Lua is designed primarily for embedded systems and clients. It is used by at least one HMI modelling tool.', '0'),
(4330, 'Unreal', 'Supports SW Development in C++ and MDD via \"Blueprints\"', '0'),
(4331, 'HMI Modelling', 'Tools for Model-based HMI development', '0'),
(4332, 'AMP3', 'ARTEMMIS Modelling Platform, version 3', '0'),
(4333, 'AMP4', 'ARTEMMIS Modelling Platform, version 4', '0'),
(4334, 'EB GUIDE', 'by Elektrobit', '0'),
(4335, 'Kanzi', 'by Rightware, used in Hyundai M3', '0'),
(4336, 'Altia', 'by Altia', '0'),
(4337, 'Memory Profiling', 'Find memory leaks and optimize memory usage', '0'),
(4338, 'Language Design', 'Design, implementation, analysis, characterization, and classification of programming languages. It is a core discipline of computer science, which depends on and affects math, software engineering and linguistics.', '0'),
(4339, 'Stack up tolerance analysis', '', '0'),
(4340, 'Mechanical Product Architecture', '', '0'),
(4341, 'CREO PTC', '', '0'),
(4342, 'CATIA', '', '0'),
(4343, 'Experience as mechanical engineer', '', '0'),
(4344, 'Finite Element Analysis (FEA)', '', '0'),
(4345, 'Material mechanical behavior', '', '0'),
(4346, 'Design Failure Mode and Effect Analysis (DFME', '', '0'),
(4347, 'Mechanical Design Guidelines', '', '0'),
(4348, 'Change Management', '', '0'),
(4349, 'Functional Tests', '', '0'),
(4350, 'Test Sequencer', 'Test Sequencer', '0'),
(4351, 'Requirements Management', '', '0'),
(4352, 'Innovation methods', '', '0'),
(4353, 'Education level', '', '0'),
(4354, 'DMAIC', '', '0'),
(4355, 'DFSS', '', '0'),
(4356, 'Estes es un subnodo', '', '0'),
(4358, 'Phyton', '', '0'),
(4359, 'uTAS 3', 'uTAS 3', '0'),
(4360, 'uTAS 5', '', '0'),
(4361, 'vTESTstudio', 'vTESTstudio', '0'),
(4362, 'MRDB (Modification Request Database)', '', '0'),
(4363, 'CANstress', '', '0'),
(4364, 'Framegrabber', 'Also know as Frame grabber', '0'),
(4365, '4PeP (For Product Engineering Process)', 'For Product Engineering Process', '0'),
(4366, 'PDMK (Product Development Method Kit)', '', '0'),
(4367, 'Other Testing Skills', '', '0'),
(4368, 'Continuous Testing', '', '0'),
(4369, 'In Vehicle Testing', '', '0'),
(4370, 'Model Based Testing', '', '0'),
(4371, 'RS-485', 'RS-485', '0'),
(4372, 'ISTQB (International Software Testing Qualifi', 'ISTQB (International Software Testing Qualifications Board)', '0'),
(4373, 'ISTQB Test Manager', '', '0'),
(4374, 'ISTQB Foundation Level', '', '0'),
(4375, 'ISTQB Technical Test Analyst', '', '0'),
(4376, 'ISTQB Test Analyst', '', '0'),
(4377, 'Product Test', '', '0'),
(4378, 'Test Execution', '', '0'),
(4379, 'Scrum Team', '', '0'),
(4381, 'JCP2016', '', '0'),
(4382, 'Pokemon Go', '', '0'),
(4383, 'PoGo', '', '0'),
(4385, 'CMVC', 'Configuration Management Version Control (CMVC) is a software package that serves as an object repository, and performs software version control, configuration management, and change management functions.', '0'),
(4386, 'Continental ID Platforms', 'HW/SW Developement platforms used in Contienental: JCP2005, JCP2011, JCP2016, etc', '0'),
(4387, 'LCP', 'Low Cost Platform', '0'),
(4388, 'Assembler', 'Assembler language', '0'),
(4389, 'root', 'new new', '1'),
(4390, 'root', 'new new', '1'),
(4391, 'new', 'description goes here', '1'),
(4392, 'new2', 'el new 2 para probar', '1'),
(4393, 'new3', 'new3 new 3 new3', '1'),
(4394, 'new4', 'new3 new 3 new3', '1'),
(4395, 'new5', 'new3 new 3 new3', '1'),
(4396, 'new6', 'new3 new 3 new3', '1'),
(4397, 'new7', 'new3 new 3 new3', '1'),
(4398, 'new7', 'new3 new 3 new3', '1'),
(4399, 'new7', 'new3 new 3 new3', '1'),
(4400, 'new8', 'lalala', '2'),
(4401, 'new9', 'lalala', '2'),
(4402, 'new9', 'lalala', '2'),
(4403, 'new9', 'lalala', '2'),
(4404, 'new9', 'lalala', '2'),
(4405, 'new9', 'lalala', '2'),
(4406, 'new9', 'lalala', '2'),
(4407, 'new9', 'lalala', '2'),
(4408, 'new9', 'lalala', '2'),
(4409, 'new9', 'lalala', '2'),
(4410, 'new9', 'lalala', '2'),
(4411, 'new10', 'lalala', '2'),
(4412, '1', '1', '1'),
(4413, '2', '1', '1'),
(4414, '3', '1', '1'),
(4415, '3', '43423425', '1'),
(4416, '3', '43423425', '1'),
(4417, 'this new skill new', 'this is a description', '1'),
(4418, 'this new skill new', 'this is a description', '1'),
(4419, 'last', 'lalala', '1'),
(4420, 'el nuevooo', 'El nuevo ', '1'),
(4421, '9', '9', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill_has_skill`
--

CREATE TABLE `skill_has_skill` (
  `idSkill_has_Skill` int(11) NOT NULL,
  `idSkill_parent` int(11) NOT NULL,
  `idSkill_child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `skill_has_skill`
--

INSERT INTO `skill_has_skill` (`idSkill_has_Skill`, `idSkill_parent`, `idSkill_child`) VALUES
(1, 18, 1),
(2, 18, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 3, 1003),
(19, 3, 1034),
(20, 4, 5),
(21, 4, 4415),
(22, 4415, 4418),
(23, 4391, 4419),
(24, 4391, 4420),
(25, 9, 4421);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill_has_training`
--

CREATE TABLE `skill_has_training` (
  `idSkill` int(11) NOT NULL,
  `idTraining` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'codigo', 'pass1', 'test1@example.com'),
(2, '2', '2', 'test2@example.com'),
(3, 'test3', 'pass3', 'test3@example.com'),
(4, 'test4', 'pass4', 'test4@example.com'),
(5, 'test5', 'pass5', 'test5@example.com'),
(6, 'test6', 'pass6', 'test6@example.com'),
(7, 'test7', 'pass7', 'test7@example.com'),
(8, 'test8', 'pass8', 'test8@example.com'),
(9, 'test9', 'pass9', 'test9@example.com'),
(11, 'test11', 'pass11', 'test11@example.com'),
(12, 'test12', 'pass12', 'test12@example.com'),
(13, 'test13', 'pass13', 'test13@example.com'),
(14, 'test14', 'pass14', 'test14@example.com'),
(15, 'test15', 'pass15', 'test15@example.com'),
(16, 'test16', 'pass16', 'test16@example.com'),
(17, 'test17', 'pass17', 'test17@example.com'),
(18, 'test18', 'pass18', 'test18@example.com'),
(19, 'test19', 'pass19', 'test19@example.com'),
(20, 'test20', 'pass20', 'test20@example.com'),
(21, 'test21', 'pass21', 'test21@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `idTeam` varchar(10) NOT NULL,
  `nameTeam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`idTeam`, `nameTeam`) VALUES
('CDH', 'Core EE'),
('CDM', 'Core ME'),
('CDS', 'Core SW'),
('EE', 'EE'),
('FT', 'FT'),
('HR', 'Human Resources'),
('ME', 'ME'),
('Mgmt', 'Mgmt'),
('PM', 'PM'),
('QA', 'QA'),
('SE', 'SE'),
('SW', 'SW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `training`
--

CREATE TABLE `training` (
  `idTraining` int(11) NOT NULL,
  `nameTraining` varchar(255) NOT NULL,
  `levelTraining` int(11) NOT NULL,
  `learningMode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idEmployee`),
  ADD KEY `fk_Employee_Location1_idx` (`idLocation`),
  ADD KEY `idTeam_idx` (`idTeam`);

--
-- Indices de la tabla `employee_has_role`
--
ALTER TABLE `employee_has_role`
  ADD PRIMARY KEY (`idEhr`),
  ADD KEY `idEmployee_idx` (`idEmployee`),
  ADD KEY `idRole_idx` (`idRole`);

--
-- Indices de la tabla `employee_has_skill`
--
ALTER TABLE `employee_has_skill`
  ADD PRIMARY KEY (`idEhs`),
  ADD KEY `fk_Employee_has_Skill_Employee1_idx` (`idEmployee`),
  ADD KEY `fk_Employee_has_Skill_Skill1_idx` (`idSkill`);

--
-- Indices de la tabla `groupp`
--
ALTER TABLE `groupp`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indices de la tabla `group_has_employee`
--
ALTER TABLE `group_has_employee`
  ADD PRIMARY KEY (`idGhe`),
  ADD KEY `fk_Group_has_Employee_Employee1_idx` (`idEmployee`),
  ADD KEY `fk_Group_has_Employee_Group1_idx` (`idGroup`);

--
-- Indices de la tabla `group_has_skill`
--
ALTER TABLE `group_has_skill`
  ADD PRIMARY KEY (`idGhs`),
  ADD KEY `fk_Group_has_Skill_Skill1_idx` (`idSkill`),
  ADD KEY `fk_Group_has_Skill_Group1_idx` (`idGroup`);

--
-- Indices de la tabla `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idLocation`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`),
  ADD KEY `fk_Log_Employee1_idx` (`idEmployee`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indices de la tabla `role_has_skill`
--
ALTER TABLE `role_has_skill`
  ADD KEY `fk_Role_has_Skill_Skill1_idx` (`idSkill`),
  ADD KEY `fk_Role_has_Skill_Role1_idx` (`idRole`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`idSkill`);

--
-- Indices de la tabla `skill_has_skill`
--
ALTER TABLE `skill_has_skill`
  ADD PRIMARY KEY (`idSkill_has_Skill`),
  ADD KEY `idSkill_parent_idx` (`idSkill_parent`),
  ADD KEY `idSkill_child_idx` (`idSkill_child`);

--
-- Indices de la tabla `skill_has_training`
--
ALTER TABLE `skill_has_training`
  ADD KEY `fk_Skill_has_Training_Training1_idx` (`idTraining`),
  ADD KEY `fk_Skill_has_Training_Skill1_idx` (`idSkill`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idTeam`);

--
-- Indices de la tabla `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`idTraining`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employee_has_role`
--
ALTER TABLE `employee_has_role`
  MODIFY `idEhr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `employee_has_skill`
--
ALTER TABLE `employee_has_skill`
  MODIFY `idEhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `groupp`
--
ALTER TABLE `groupp`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `group_has_employee`
--
ALTER TABLE `group_has_employee`
  MODIFY `idGhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `group_has_skill`
--
ALTER TABLE `group_has_skill`
  MODIFY `idGhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `idSkill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4422;
--
-- AUTO_INCREMENT de la tabla `skill_has_skill`
--
ALTER TABLE `skill_has_skill`
  MODIFY `idSkill_has_Skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `idLocation` FOREIGN KEY (`idLocation`) REFERENCES `location` (`idLocation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idTeam` FOREIGN KEY (`idTeam`) REFERENCES `team` (`idTeam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `employee_has_role`
--
ALTER TABLE `employee_has_role`
  ADD CONSTRAINT `fk_idEmployee` FOREIGN KEY (`idEmployee`) REFERENCES `employee` (`idEmployee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRole` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `employee_has_skill`
--
ALTER TABLE `employee_has_skill`
  ADD CONSTRAINT `fk_Employee_has_Skill_Employee1` FOREIGN KEY (`idEmployee`) REFERENCES `employee` (`idEmployee`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Employee_has_Skill_Skill1` FOREIGN KEY (`idSkill`) REFERENCES `skill` (`idSkill`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `group_has_employee`
--
ALTER TABLE `group_has_employee`
  ADD CONSTRAINT `fk_Group_has_Employee_Employee1` FOREIGN KEY (`idEmployee`) REFERENCES `employee` (`idEmployee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Group_has_Employee_Group1` FOREIGN KEY (`idGroup`) REFERENCES `groupp` (`idGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `group_has_skill`
--
ALTER TABLE `group_has_skill`
  ADD CONSTRAINT `fk_Group_has_Skill_Group1` FOREIGN KEY (`idGroup`) REFERENCES `groupp` (`idGroup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Group_has_Skill_Skill1` FOREIGN KEY (`idSkill`) REFERENCES `skill` (`idSkill`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_Log_Employee1` FOREIGN KEY (`idEmployee`) REFERENCES `employee` (`idEmployee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_skill`
--
ALTER TABLE `role_has_skill`
  ADD CONSTRAINT `fk_Role_has_Skill_Role1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Role_has_Skill_Skill1` FOREIGN KEY (`idSkill`) REFERENCES `skill` (`idSkill`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `skill_has_skill`
--
ALTER TABLE `skill_has_skill`
  ADD CONSTRAINT `idSkill_child` FOREIGN KEY (`idSkill_child`) REFERENCES `skill` (`idSkill`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idSkill_parent` FOREIGN KEY (`idSkill_parent`) REFERENCES `skill` (`idSkill`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `skill_has_training`
--
ALTER TABLE `skill_has_training`
  ADD CONSTRAINT `fk_Skill_has_Training_Skill1` FOREIGN KEY (`idSkill`) REFERENCES `skill` (`idSkill`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Skill_has_Training_Training1` FOREIGN KEY (`idTraining`) REFERENCES `training` (`idTraining`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
