-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.16


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema inscripcion
--

CREATE DATABASE IF NOT EXISTS inscripcion;
USE inscripcion;

--
-- Definition of table `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
CREATE TABLE `aspirantes` (
  `idaspirantes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vive_con` varchar(45) NOT NULL,
  `especifique_porque` varchar(45) NOT NULL,
  `numero_hermanos` varchar(45) NOT NULL,
  `lugar_ocupa` varchar(45) NOT NULL,
  `exfamiliar_estudiante` varchar(45) NOT NULL,
  `promocion` varchar(45) NOT NULL,
  `familiar_institucion` varchar(45) NOT NULL,
  `grado_curso` varchar(45) NOT NULL,
  `primera_comunicon` varchar(45) NOT NULL,
  `bautizado` varchar(45) NOT NULL,
  `huerfano` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `grado_va` varchar(45) NOT NULL,
  `personas_idpersonas` int(10) unsigned NOT NULL,
  `discapacidad` varchar(3) NOT NULL,
  `cual_capacidad` varchar(45) NOT NULL,
  `por_capacidad` varchar(45) NOT NULL,
  `institucion_viene` varchar(45) NOT NULL,
  PRIMARY KEY (`idaspirantes`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirantes`
--

/*!40000 ALTER TABLE `aspirantes` DISABLE KEYS */;
INSERT INTO `aspirantes` (`idaspirantes`,`vive_con`,`especifique_porque`,`numero_hermanos`,`lugar_ocupa`,`exfamiliar_estudiante`,`promocion`,`familiar_institucion`,`grado_curso`,`primera_comunicon`,`bautizado`,`huerfano`,`email`,`grado_va`,`personas_idpersonas`,`discapacidad`,`cual_capacidad`,`por_capacidad`,`institucion_viene`) VALUES 
 (1,'','','','','','','','','','','','','octavo',4,'','','','DDDDDD');
/*!40000 ALTER TABLE `aspirantes` ENABLE KEYS */;


--
-- Definition of table `aspirantes_has_representantes`
--

DROP TABLE IF EXISTS `aspirantes_has_representantes`;
CREATE TABLE `aspirantes_has_representantes` (
  `id_aspirantes_has` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aspirantes_idaspirante` int(10) unsigned NOT NULL,
  `representantes_idrepresentantes` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_aspirantes_has`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirantes_has_representantes`
--

/*!40000 ALTER TABLE `aspirantes_has_representantes` DISABLE KEYS */;
INSERT INTO `aspirantes_has_representantes` (`id_aspirantes_has`,`aspirantes_idaspirante`,`representantes_idrepresentantes`) VALUES 
 (1,1,2);
/*!40000 ALTER TABLE `aspirantes_has_representantes` ENABLE KEYS */;


--
-- Definition of table `canton`
--

DROP TABLE IF EXISTS `canton`;
CREATE TABLE `canton` (
  `idcanton` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `canton` varchar(45) NOT NULL,
  `provincia_idprovincia` varchar(45) NOT NULL,
  PRIMARY KEY (`idcanton`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canton`
--

/*!40000 ALTER TABLE `canton` DISABLE KEYS */;
/*!40000 ALTER TABLE `canton` ENABLE KEYS */;


--
-- Definition of table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `idciudad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) NOT NULL,
  PRIMARY KEY (`idciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciudad`
--

/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;


--
-- Definition of table `datos_nacimiento`
--

DROP TABLE IF EXISTS `datos_nacimiento`;
CREATE TABLE `datos_nacimiento` (
  `iddatos_nacimiento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barrio` varchar(45) NOT NULL,
  `provincia_idprovincia` int(10) unsigned NOT NULL,
  PRIMARY KEY (`iddatos_nacimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_nacimiento`
--

/*!40000 ALTER TABLE `datos_nacimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `datos_nacimiento` ENABLE KEYS */;


--
-- Definition of table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE `direccion` (
  `iddireccion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calle_principal` varchar(200) NOT NULL,
  `calle_secundaria` varchar(200) NOT NULL,
  PRIMARY KEY (`iddireccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direccion`
--

/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;


--
-- Definition of table `escolaridad`
--

DROP TABLE IF EXISTS `escolaridad`;
CREATE TABLE `escolaridad` (
  `idescolaridad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `años` varchar(45) NOT NULL,
  `causa_cambio` varchar(45) NOT NULL,
  `grados_cursados` varchar(45) NOT NULL,
  `ciudad_idciudad` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idescolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolaridad`
--

/*!40000 ALTER TABLE `escolaridad` DISABLE KEYS */;
/*!40000 ALTER TABLE `escolaridad` ENABLE KEYS */;


--
-- Definition of table `estado_civil`
--

DROP TABLE IF EXISTS `estado_civil`;
CREATE TABLE `estado_civil` (
  `idestado_civil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estado_civil` varchar(45) NOT NULL,
  PRIMARY KEY (`idestado_civil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado_civil`
--

/*!40000 ALTER TABLE `estado_civil` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_civil` ENABLE KEYS */;


--
-- Definition of table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
CREATE TABLE `institucion` (
  `idinstitucion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institucion` varchar(45) NOT NULL,
  `ciudad_idciudad` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idinstitucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institucion`
--

/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;


--
-- Definition of table `nivel_academico`
--

DROP TABLE IF EXISTS `nivel_academico`;
CREATE TABLE `nivel_academico` (
  `idnivel_academico` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivel_academico` varchar(45) NOT NULL,
  PRIMARY KEY (`idnivel_academico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nivel_academico`
--

/*!40000 ALTER TABLE `nivel_academico` DISABLE KEYS */;
/*!40000 ALTER TABLE `nivel_academico` ENABLE KEYS */;


--
-- Definition of table `parroquia`
--

DROP TABLE IF EXISTS `parroquia`;
CREATE TABLE `parroquia` (
  `idparroquia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parroquia` varchar(45) NOT NULL,
  `canton_idcanton` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idparroquia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parroquia`
--

/*!40000 ALTER TABLE `parroquia` DISABLE KEYS */;
/*!40000 ALTER TABLE `parroquia` ENABLE KEYS */;


--
-- Definition of table `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `idpersonas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_nacimiento` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `telf_convencional` varchar(45) NOT NULL,
  `direccion_iddireccion` int(10) unsigned NOT NULL,
  `datos_nacimiento_iddatos_nacimiento` int(10) unsigned NOT NULL,
  `foto` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  PRIMARY KEY (`idpersonas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personas`
--

/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`idpersonas`,`dni`,`apellidos`,`telefono`,`email`,`fecha_nacimiento`,`genero`,`telf_convencional`,`direccion_iddireccion`,`datos_nacimiento_iddatos_nacimiento`,`foto`,`nombres`) VALUES 
 (1,'1312881186','MOREIRA VILLAMAR','09857142654','','','MASCULINO','',0,0,'','ELVIS EDUARDO'),
 (2,'1310901705','VELECELA ARDILA','9999999','','','MASCULINO','',0,0,'','EFREN ANDRES'),
 (3,'1713488748','VELECELA ARDILA','99999999','','','FEMENINO','',0,0,'','KARINA'),
 (4,'1312881186','ELELELEL','444334','','','','',0,0,'','DDDDDD'),
 (5,'1311417658','SANDOVAL MERO','123456','','','MASCULINO','',0,0,'','JOSE ANTONIO');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;


--
-- Definition of table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `idprovincia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provincia` varchar(45) NOT NULL,
  PRIMARY KEY (`idprovincia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provincia`
--

/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;


--
-- Definition of table `representantes`
--

DROP TABLE IF EXISTS `representantes`;
CREATE TABLE `representantes` (
  `idrepresentantes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lugar_trabajo` varchar(45) NOT NULL,
  `actividad_trabajo` varchar(45) NOT NULL,
  `direccion_trabajo` varchar(45) NOT NULL,
  `telefono_trabajo` varchar(45) NOT NULL,
  `tipo_representante` varchar(45) NOT NULL,
  `autorizado` int(10) unsigned NOT NULL,
  `personas_idpersonas` int(10) unsigned NOT NULL,
  `estado_civil_idestado_civil` int(10) unsigned NOT NULL,
  `nivel_academico_idnivel_academico` int(10) unsigned NOT NULL,
  `razon_elige_institucion` varchar(45) NOT NULL,
  `parentesco` varchar(45) NOT NULL,
  PRIMARY KEY (`idrepresentantes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `representantes`
--

/*!40000 ALTER TABLE `representantes` DISABLE KEYS */;
INSERT INTO `representantes` (`idrepresentantes`,`lugar_trabajo`,`actividad_trabajo`,`direccion_trabajo`,`telefono_trabajo`,`tipo_representante`,`autorizado`,`personas_idpersonas`,`estado_civil_idestado_civil`,`nivel_academico_idnivel_academico`,`razon_elige_institucion`,`parentesco`) VALUES 
 (1,'','','','','',0,1,0,0,'','PADRE'),
 (2,'','','','','',0,2,0,0,'','TIO'),
 (3,'','','','','',0,3,0,0,'','MADRE'),
 (4,'','','','','',0,5,0,0,'','PAPA');
/*!40000 ALTER TABLE `representantes` ENABLE KEYS */;


--
-- Definition of table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `idtipo_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_usuario`
--

/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipousuario_idtipo_usuario` int(10) unsigned NOT NULL,
  `personas_idpersonas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`,`usuario`,`password`,`tipousuario_idtipo_usuario`,`personas_idpersonas`) VALUES 
 (1,'EMOREIRA681','1312881186',5,1),
 (2,'EVELECEL507','1310901705',5,2),
 (3,'KVELECEL847','1713488748',5,3),
 (4,'JSANDOV856','1311417658',5,5);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;


--
-- Definition of table `usuario_cristorey`
--

DROP TABLE IF EXISTS `usuario_cristorey`;
CREATE TABLE `usuario_cristorey` (
  `idusuario_cristorey` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `fecha_nacimiento` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `tipo_usuario_idtipo_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idusuario_cristorey`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_cristorey`
--

/*!40000 ALTER TABLE `usuario_cristorey` DISABLE KEYS */;
INSERT INTO `usuario_cristorey` (`idusuario_cristorey`,`usuario`,`password`,`apellidos`,`nombres`,`fecha_nacimiento`,`genero`,`foto`,`cedula`,`tipo_usuario_idtipo_usuario`) VALUES 
 (1,'apcede','apcede','CEDEÑO','ANA','11/03/1992','femenino','hola','1312881186',2);
/*!40000 ALTER TABLE `usuario_cristorey` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
