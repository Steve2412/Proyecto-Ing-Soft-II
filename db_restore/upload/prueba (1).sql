-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 11:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `ID_cur` varchar(11) NOT NULL,
  `nomb_cur` varchar(45) NOT NULL,
  `horar_cur` varchar(100) NOT NULL,
  `prec_cur` float(5,2) NOT NULL,
  `cupos_cur_min` int(11) NOT NULL,
  `cupos_cur_max` int(11) NOT NULL,
  `conte_text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`ID_cur`, `nomb_cur`, `horar_cur`, `prec_cur`, `cupos_cur_min`, `cupos_cur_max`, `conte_text`) VALUES
('Eng_I_A', 'Ingles I', 'Lunes a Viernes 08:00am a 10:00am', 10.00, 10, 40, '<h1 style=\"text-align: center;\"><span style=\"font-size: 24pt;\">Curso online de INGLES I</span></h1>\r\n<p><span style=\"font-size: 14pt;\">En este curso aprenderas los temas basicos de ingles, como pronombres, verbo to be, como crear oraciones, entre otras cosas.</span></p>\r\n<p>&nbsp;</p>\r\n<h2><span style=\"font-size: 18pt;\">Contenido Program&aacute;tico</span></h2>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 1:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Saludos y presentaciones: Formales e Informales.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Verbo to Be: Forma Interrogativa y afirmativa.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Palabras interrogativas: What/where/how/who.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Alfabeto</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Oficios,profesiones (ocupaciones).</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Pronombres personales sujeto</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Pa&iacute;ses, nacionalidades e idiomas.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">N&uacute;meros cardinales (0-100)</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Art&iacute;culos indefinidos (a / an)</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Adjetivos posesivos</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 2:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Imperativo: Forma afirmativa y negativa (instrucciones dentro del sal&oacute;n de clase).</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Expresiones dentro del sal&oacute;n de clase.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Vocabulario sobre objetos del sal&oacute;n de clase y personales.</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 3:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Verbo have</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Vocabulario relaciones interpersonales y la familia</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Caso posesivo (s)</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 4:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Preposiciones de lugar</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Sustantivos plurales regulares e irregulares.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Vocabulario de las partes y objetos de la casa. Adjetivos para describirla.</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Adjetivos demostrativos</span></li>\r\n<li style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\">Art&iacute;culo definido (the)</span></li>\r\n</ul>\r\n<div style=\"max-width: 650px;\" data-ephox-embed-iri=\"https://www.youtube.com/embed/9p-_NhWuuZQ\">\r\n<div style=\"left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;\"><iframe style=\"top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;\" src=\"https://www.youtube.com/embed/9p-_NhWuuZQ?rel=0\" scrolling=\"no\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div style=\"max-width: 650px;\" data-ephox-embed-iri=\"https://www.youtube.com/embed/f0IhZBb0BQg\">\r\n<div style=\"left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;\"><iframe style=\"top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;\" src=\"https://www.youtube.com/embed/f0IhZBb0BQg?rel=0\" scrolling=\"no\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n</div>'),
('IT_I_A', 'Italiano I', 'Sabado de 08:00am a 12:00pm', 15.00, 15, 20, '<h1 style=\"text-align: center;\"><span style=\"font-size: 24pt;\">Curso online de Italiano&nbsp;I</span></h1>\r\n<p><span style=\"font-size: 14pt;\">En este curso aprenderas los temas basicos de italiano, como pronombres, verbo to be, como crear oraciones, entre otras cosas</span></p>\r\n<h2><span style=\"font-size: 18pt;\">Contenido Program&aacute;tico</span></h2>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 1:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\">Presente de verbos de 1&ordf;, 2&ordf; y 3&ordf;</li>\r\n<li style=\"font-size: 18pt;\">conjugaci&oacute;n.</li>\r\n<li style=\"font-size: 18pt;\">Pret&eacute;rito Perfecto.</li>\r\n<li style=\"font-size: 18pt;\">Uso de los verbos auxiliares en el Pret&eacute;rito Perfecto.</li>\r\n<li style=\"font-size: 18pt;\">Verbos reflexivos en el Presente.</li>\r\n<li style=\"font-size: 18pt;\">Verbos modales.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 2:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\">Verbos irregulares: avere, essere, fare, andare, otros.</li>\r\n<li style=\"font-size: 18pt;\">Verbo essere + ci.&nbsp;</li>\r\n<li style=\"font-size: 18pt;\">Pronombres personales sujeto, objeto indirecto, objeto directo.</li>\r\n<li style=\"font-size: 18pt;\">Art&iacute;culos determinados e indeterminados, singulares y plurales.</li>\r\n<li style=\"font-size: 18pt;\">Art&iacute;culos partitivos.</li>\r\n</ul>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 3:</span></h3>\r\n<ul>\r\n<li><span style=\"font-size: 18pt;\">Pronombres y adjetivos posesivos.</span></li>\r\n<li><span style=\"font-size: 18pt;\">Preposiciones simples y articuladas.</span></li>\r\n<li><span style=\"font-size: 18pt;\">G&eacute;nero y n&uacute;mero de sustantivos y adjetivos regulares e irregulares m&aacute;s frecuentes. </span></li>\r\n<li><span style=\"font-size: 18pt;\">Expresiones que indican nociones de lugar y de tiempo. </span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>TEMA 4:</h3>\r\n<ul>\r\n<li>Superlativo relativo.</li>\r\n<li>Uso de da, fra y fa en las locuciones temporales.</li>\r\n<li>N&uacute;meros cardinales y ordinales.</li>\r\n</ul>'),
('Port_I_A', 'Portugues 1', 'Lunes a Viernes 08:00am a 10:00am', 15.00, 15, 20, '<h1 style=\"text-align: center;\"><span style=\"font-size: 24pt;\">Curso online de Portugues&nbsp;I</span></h1>\r\n<p><span style=\"font-size: 14pt;\">En este curso aprenderas los temas basicos de portugues, como pronombres, verbo to be, como crear oraciones, entre otras cosas</span></p>\r\n<h2><span style=\"font-size: 18pt;\">Contenido Program&aacute;tico</span></h2>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 1:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\">Art&iacute;culos determinados e indeterminados.</li>\r\n<li style=\"font-size: 18pt;\">Formas de tratamiento.</li>\r\n<li style=\"font-size: 18pt;\">Presente&nbsp;de indicativo (verbos regulares y verbos irregulares m&aacute;s frecuentes.)</li>\r\n<li style=\"font-size: 18pt;\">Contraste entre ser y estar</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 2:</span></h3>\r\n<ul>\r\n<li style=\"font-size: 18pt;\">Pronombres posesivos, demostrativos, indefinidos, interrogativos y exclamativos.</li>\r\n<li style=\"font-size: 18pt;\">Formaci&oacute;n del plural.</li>\r\n<li style=\"font-size: 18pt;\">Comparativos.</li>\r\n<li style=\"font-size: 18pt;\">Pret&eacute;rito&nbsp;perfecto de indicativo (verbos regulares y verbos irregulares m&aacute;s frecuentes)</li>\r\n</ul>\r\n<h3><span style=\"font-size: 18pt;\">TEMA 3:</span></h3>\r\n<ul>\r\n<li>Adverbios de lugar.</li>\r\n<li>Presente&nbsp;continuo: estar + gerundio.</li>\r\n<li>Ant&oacute;nimos usuales.</li>\r\n<li>Indefinidos&nbsp;de uso m&aacute;s frecuente (contraste entre tudo y todo.)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>TEMA 4:</h3>\r\n<ul>\r\n<li>Algunos conectores frecuentes (e, ou, mas, que, nem, porque, quando, ent&atilde;o.).</li>\r\n<li>Verbo haver impersonal.</li>\r\n<li>Expresi&oacute;n del futuro: per&iacute;frasis ir + infinitivo - Imperativo.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `foro`
--

CREATE TABLE `foro` (
  `id_foro` int(11) NOT NULL,
  `usuario_id_foro` varchar(11) DEFAULT NULL,
  `curso_id_foro` varchar(8) DEFAULT NULL,
  `mensaje_foro` longtext DEFAULT NULL,
  `fecha_mensaje_foro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foro`
--

INSERT INTO `foro` (`id_foro`, `usuario_id_foro`, `curso_id_foro`, `mensaje_foro`, `fecha_mensaje_foro`) VALUES
(5, 'V-8032002', 'Eng_I_A', 'Que prueba?', '2023-07-18 18:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `notifipago`
--

CREATE TABLE `notifipago` (
  `id_notifipago` int(11) NOT NULL,
  `monto_notifipago` float DEFAULT NULL,
  `banco_notifipago` varchar(30) DEFAULT NULL,
  `cedu_titular_notifipago` varchar(11) DEFAULT NULL,
  `fecha_notifipago` date DEFAULT NULL,
  `referencia_notifipago` int(11) DEFAULT NULL,
  `motivo_notifipago` text DEFAULT NULL,
  `usuario_notifipago` varchar(11) DEFAULT NULL,
  `estado_notifipago` enum('Pendiente','Procesado','Rechazado') NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifipago`
--

INSERT INTO `notifipago` (`id_notifipago`, `monto_notifipago`, `banco_notifipago`, `cedu_titular_notifipago`, `fecha_notifipago`, `referencia_notifipago`, `motivo_notifipago`, `usuario_notifipago`, `estado_notifipago`) VALUES
(1, 20, 'Venezolano de Credito', '26875009', '2023-07-12', 73473284, 'Pago Ingles I', 'V-28409157', 'Pendiente'),
(2, 15, 'Banesco', '26875009', '2023-07-19', 312312, 'Pago Ingles II', 'V-28409157', 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `ID_peri` varchar(8) NOT NULL,
  `nomb_peri` varchar(45) NOT NULL,
  `fech_ini_peri` date NOT NULL,
  `fech_fin_peri` date NOT NULL,
  `estado_peri` enum('Activo','Finalizado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periodo`
--

INSERT INTO `periodo` (`ID_peri`, `nomb_peri`, `fech_ini_peri`, `fech_fin_peri`, `estado_peri`) VALUES
('2020_1', 'Enero Abril 2022', '2001-01-09', '2001-04-09', 'Activo'),
('2023_2', 'Periodo Mayo Agosto 2023', '2023-05-01', '2023-08-01', 'Activo'),
('2023_3', 'Enero Abril 2023', '2023-01-09', '2023-04-15', 'Activo');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cedu_user` varchar(11) NOT NULL,
  `nomb_user` varchar(25) NOT NULL,
  `apelli_user` varchar(25) NOT NULL,
  `correo_user` varchar(45) NOT NULL,
  `contra_user` varchar(16) NOT NULL,
  `dirre_user` varchar(150) NOT NULL,
  `numer_user` varchar(15) NOT NULL,
  `fech_naci_user` date NOT NULL,
  `sexo_user` enum('M','F') NOT NULL,
  `estado_user` enum('Activo','Inactivo','Eliminado') NOT NULL DEFAULT 'Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedu_user`, `nomb_user`, `apelli_user`, `correo_user`, `contra_user`, `dirre_user`, `numer_user`, `fech_naci_user`, `sexo_user`, `estado_user`) VALUES
('V-10214983', 'Jaime', 'Acosta', 'JaimeAcosta@yahoo.es', 'Admin2023.', 'Campo Claro', '0416-7813428', '1990-07-04', 'M', 'Eliminado'),
('V-15241968', 'Delia', 'Rubio', 'DeliaRubio@gmail.com', 'Delia12345', 'Merida', '0412-6974158', '1982-04-05', 'F', 'Activo'),
('V-18146752', 'Placido ', 'Sacristan', 'PlacidoSacristan@gmail.com', 'Placido1234', 'Caracas', '0412-5874169', '1982-10-21', 'M', 'Activo'),
('V-28409157', 'Stefano', 'Casa', 'Stefano007Casa@hotmail.com', 'Prueba2001.', 'Palaima', '0414-9664100', '2001-12-24', 'M', 'Activo'),
('V-8032002', 'Jose', 'Rodriguez', 'JoseRodriguez@gmail.com', 'Profesor2001.', 'Bella Vista', '0412-6987425', '1983-04-13', 'M', 'Activo');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_has_cursos`
--

CREATE TABLE `usuario_has_cursos` (
  `Usuario_ID_user` varchar(11) NOT NULL,
  `Cursos_ID_cur` varchar(8) DEFAULT NULL,
  `Periodo_ID_peri` varchar(8) DEFAULT NULL,
  `calificacion_user` float DEFAULT 0,
  `Usuario_rol` enum('Profesor','Estudiante','Administrador') NOT NULL,
  `estado_usuario_has_cursos` enum('Activo','Finalizado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario_has_cursos`
--

INSERT INTO `usuario_has_cursos` (`Usuario_ID_user`, `Cursos_ID_cur`, `Periodo_ID_peri`, `calificacion_user`, `Usuario_rol`, `estado_usuario_has_cursos`) VALUES
('V-28409157', 'Eng_I_A', '2023_2', 20, 'Estudiante', 'Activo'),
('V-8032002', 'Eng_I_A', '2023_2', 0, 'Profesor', 'Activo'),
('V-10214983', NULL, NULL, 0, 'Administrador', NULL),
('V-15241968', 'IT_I_A', '2023_2', 0, 'Estudiante', 'Activo'),
('V-18146752', 'IT_I_A', '2023_2', 0, 'Profesor', 'Activo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_cur`);

--
-- Indexes for table `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id_foro`),
  ADD KEY `foro_ibfk_1` (`usuario_id_foro`),
  ADD KEY `foro_ibfk_2` (`curso_id_foro`);

--
-- Indexes for table `notifipago`
--
ALTER TABLE `notifipago`
  ADD PRIMARY KEY (`id_notifipago`),
  ADD KEY `notifipago_ibfk_1` (`usuario_notifipago`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`ID_peri`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedu_user`);

--
-- Indexes for table `usuario_has_cursos`
--
ALTER TABLE `usuario_has_cursos`
  ADD KEY `usuario_has_cursos_ibfk_1` (`Usuario_ID_user`),
  ADD KEY `usuario_has_cursos_ibfk_2` (`Cursos_ID_cur`),
  ADD KEY `usuario_has_cursos_ibfk_3` (`Periodo_ID_peri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foro`
--
ALTER TABLE `foro`
  MODIFY `id_foro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifipago`
--
ALTER TABLE `notifipago`
  MODIFY `id_notifipago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`usuario_id_foro`) REFERENCES `usuario` (`cedu_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foro_ibfk_2` FOREIGN KEY (`curso_id_foro`) REFERENCES `cursos` (`ID_cur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifipago`
--
ALTER TABLE `notifipago`
  ADD CONSTRAINT `notifipago_ibfk_1` FOREIGN KEY (`usuario_notifipago`) REFERENCES `usuario` (`cedu_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario_has_cursos`
--
ALTER TABLE `usuario_has_cursos`
  ADD CONSTRAINT `usuario_has_cursos_ibfk_1` FOREIGN KEY (`Usuario_ID_user`) REFERENCES `usuario` (`cedu_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_has_cursos_ibfk_2` FOREIGN KEY (`Cursos_ID_cur`) REFERENCES `cursos` (`ID_cur`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_has_cursos_ibfk_3` FOREIGN KEY (`Periodo_ID_peri`) REFERENCES `periodo` (`ID_peri`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
