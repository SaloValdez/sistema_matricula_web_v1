/*
SQLyog Ultimate v9.63 
MySQL - 5.5.24-log : Database - dbmatricula
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbmatricula` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbmatricula`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `idApoderado` int(11) DEFAULT NULL,
  `apeAlumno` varchar(30) DEFAULT NULL,
  `nomAlumno` varchar(20) DEFAULT NULL,
  `dirAlumno` varchar(30) DEFAULT NULL,
  `telAlumno` char(30) DEFAULT NULL,
  `dniAlumno` char(30) DEFAULT NULL,
  `fnaAlumno` date DEFAULT NULL,
  `sexAlumno` char(10) DEFAULT NULL,
  `emailAlumno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idAlumno`),
  KEY `alumno_ibfk_1` (`idApoderado`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idApoderado`) REFERENCES `apoderado` (`idApoderado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `alumno` */

insert  into `alumno`(`idAlumno`,`idApoderado`,`apeAlumno`,`nomAlumno`,`dirAlumno`,`telAlumno`,`dniAlumno`,`fnaAlumno`,`sexAlumno`,`emailAlumno`) values (2,1,'MARTORELL','MARINNO','LAS MANGOLIAS','32445546','32453465','2017-08-01','MASCULINO','MARIANO@HOTMIAL.COM'),(6,1,'VALDEZ PACOHUANACO','MARINNO','LAS MANGOLIAS','MASCULINO','32423523','2017-08-09','MASCULINO','salovaldez.net@gmail'),(7,1,'ZABALA TORRES','RAQUEL','JORJE CHACÂ¿VEZ','32423523','34523523','2017-08-01','MASCULINO','@MARIELLA'),(10,1,'GGGGG','GGGGGG','GGGGGG','444444','4444444','2017-08-04','M','RYYREY'),(13,1,'GGGGG','GGGGGG','GGGGGG','444444','4444444','2017-08-04','M','RYYREY'),(14,1,'GGGGG','GGGGGG','GGGGGG','444444','4444444','2017-08-04','M','RYYREY'),(16,1,'GGGGG','GGGGGG','GGGGGG','444444','4444444','2017-08-04','M','RYYREY'),(17,1,'ASFAS','ASFASF','ASFASF','ASFASF','342342','2017-08-10','D','FSDFSDFDS'),(20,6,'','','','','','0000-00-00','',''),(21,7,'CHINO','GERMAN','LAS MANGOLIAS','888888888','88888888','2017-08-16','MASCULINO','888@88888'),(22,8,'CHINO','GERMAN','LAS MANGOLIAS','888888888','88888888','2017-08-16','MASCULINO','888@88888'),(23,9,'CHINO','GERMAN','LAS MANGOLIAS','888888888','88888888','2017-08-16','MASCULINO','888@88888'),(24,10,'FGDFGDF','FSDFGSDGFSDGG','SDGSDGSDG','435345','324234','2017-08-16','M','SDFSDFSD');

/*Table structure for table `apoderado` */

DROP TABLE IF EXISTS `apoderado`;

CREATE TABLE `apoderado` (
  `idApoderado` int(11) NOT NULL AUTO_INCREMENT,
  `nomApoderado` varchar(20) DEFAULT NULL,
  `apeApoderado` varchar(20) DEFAULT NULL,
  `traApoderado` varchar(20) DEFAULT NULL,
  `dniApoderado` char(8) DEFAULT NULL,
  `celApoderado` char(8) DEFAULT NULL,
  `dirApoderado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idApoderado`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `apoderado` */

insert  into `apoderado`(`idApoderado`,`nomApoderado`,`apeApoderado`,`traApoderado`,`dniApoderado`,`celApoderado`,`dirApoderado`) values (1,'MARIO JASU','VALDEZ PACOHUANACO','MEDICO','4569522','23423423','LOS MUELLES'),(2,'JUAN','MARTINEZ ZABALA1','CONTADOR','4568953','34235423','CIUDAD GRANDES'),(4,'SALOMON','VALDEZ PACOHUANACO','ADMINISTRADOR','46835582','46835582','LOS PINOS'),(5,'MIGUEL','MARTINEZ MARTINEZ','MEDICO CIRIJANO','99887675','89922996','LAS MASNGOLIAS'),(6,'','','','','',''),(7,'MIGUEL','MARTINEZ MARTINEZ','MEDICO CIRIJANO','99887675','89922996','LAS MASNGOLIAS'),(8,'MIGUEL','MARTINEZ MARTINEZ','MEDICO CIRIJANO','99887675','89922996','LAS MASNGOLIAS'),(9,'MIGUEL','MARTINEZ MARTINEZ','MEDICO CIRIJANO','99887675','89922996','LAS MASNGOLIAS'),(10,'','','','','','');

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `descCarrera` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `carrera` */

insert  into `carrera`(`idCarrera`,`descCarrera`) values (1,'COMPUTACION E INFOEMATICA'),(2,'CONTABILIDAD TRECNICA'),(3,'ADMINISTRACION'),(6,'DISEÃ‘O GRAFICO');

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nomCurso` varchar(20) DEFAULT NULL,
  `chorCurso` int(11) DEFAULT NULL,
  `descCurso` varchar(30) DEFAULT NULL,
  `idGrado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `idGrado` (`idGrado`),
  CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idGrado`) REFERENCES `grado` (`idGrado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `curso` */

insert  into `curso`(`idCurso`,`nomCurso`,`chorCurso`,`descCurso`,`idGrado`) values (1,'MATEMATICA',2,'MATEMATICA II',1),(2,'COMUNICACION',2,'COMUNICACION ',2),(3,'FISICA',3,'FISICA II',3);

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `apeEmpleado` varchar(20) DEFAULT NULL,
  `nomEnmpleado` varchar(20) DEFAULT NULL,
  `dirEmpleado` varchar(30) DEFAULT NULL,
  `telEmpleado` char(8) DEFAULT NULL,
  `carEmpleado` varchar(20) DEFAULT NULL,
  `dniEmpleado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

insert  into `empleado`(`idEmpleado`,`apeEmpleado`,`nomEnmpleado`,`dirEmpleado`,`telEmpleado`,`carEmpleado`,`dniEmpleado`) values (22,'VALDEZ','SALOMON','LAS MANGOLISAS','3453453','ADMINISTRADOR',NULL),(23,'facundos','dddddd','dddddd','ddddd','DDDDddd',NULL),(25,'SALAS ','MANUEL','LAS MANGOLIAS','345345','ADMINISTRADOR',NULL);

/*Table structure for table `grado` */

DROP TABLE IF EXISTS `grado`;

CREATE TABLE `grado` (
  `idGrado` int(11) NOT NULL AUTO_INCREMENT,
  `secGrado` char(10) DEFAULT NULL,
  PRIMARY KEY (`idGrado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `grado` */

insert  into `grado`(`idGrado`,`secGrado`) values (1,'GRADO 1RO'),(2,'GRADO 2DO'),(3,'GRADO 3RO'),(4,'GRADO 4TO'),(5,'GRADO 5TO'),(6,'GRADO 6TO');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `codigo` char(8) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlogin`),
  KEY `login_ibfk_1` (`idAlumno`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`idlogin`,`usuario`,`contrasena`,`codigo`,`idAlumno`) values (2,'ADMIN','123456','0005',2),(5,'STICH','123456','067777',7);

/*Table structure for table `matricula` */

DROP TABLE IF EXISTS `matricula`;

CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `idAlumno` int(11) DEFAULT NULL,
  `idGrado` int(11) DEFAULT NULL,
  `fecMatricula` date DEFAULT NULL,
  `horMatricula` datetime DEFAULT NULL,
  `costMatricula` int(11) DEFAULT NULL,
  `nivelMatricula` char(4) DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `idSeccion` int(11) DEFAULT NULL,
  `idCarrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMatricula`),
  KEY `matricula_ibfk_1` (`idAlumno`),
  KEY `matricula_ibfk_2` (`idGrado`),
  KEY `matricula_ibfk_3` (`idEmpleado`),
  KEY `idSeccion` (`idSeccion`),
  KEY `idCarrera` (`idCarrera`),
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idGrado`) REFERENCES `grado` (`idGrado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`idSeccion`) REFERENCES `seccion` (`idSeccion`),
  CONSTRAINT `matricula_ibfk_5` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `matricula` */

insert  into `matricula`(`idMatricula`,`idAlumno`,`idGrado`,`fecMatricula`,`horMatricula`,`costMatricula`,`nivelMatricula`,`idEmpleado`,`idSeccion`,`idCarrera`) values (1,17,3,'2017-08-16','0000-00-00 00:00:00',300,'INTE',25,3,2),(3,21,2,'2017-08-16','0000-00-00 00:00:00',300,'',25,1,2),(4,22,2,'2017-08-16','0000-00-00 00:00:00',300,'3RO',25,1,2),(5,23,2,'2017-08-16','0000-00-00 00:00:00',300,'3RO',25,1,2),(6,24,1,'2017-08-16','0000-00-00 00:00:00',300,'M',23,1,3);

/*Table structure for table `notas` */

DROP TABLE IF EXISTS `notas`;

CREATE TABLE `notas` (
  `idAlumno` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `n1` double DEFAULT NULL,
  `n2` double DEFAULT NULL,
  `n3` double DEFAULT NULL,
  `n4` double DEFAULT NULL,
  `n5` double DEFAULT NULL,
  `n6` double DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  `observacion` varchar(30) DEFAULT NULL,
  KEY `notas_ibfk_1` (`idAlumno`),
  KEY `notas_ibfk_2` (`idCurso`),
  CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notas` */

/*Table structure for table `seccion` */

DROP TABLE IF EXISTS `seccion`;

CREATE TABLE `seccion` (
  `idSeccion` int(11) NOT NULL AUTO_INCREMENT,
  `descSeccion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `seccion` */

insert  into `seccion`(`idSeccion`,`descSeccion`) values (1,'N-A'),(2,'N-B'),(3,'N-C'),(4,'M-A'),(5,'M-B'),(6,'M-C'),(7,'M-D'),(8,'M-E'),(9,'M-F'),(10,'M-G');

/* Procedure structure for procedure `listar_Alumno` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Alumno` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Alumno`()
select * FROM alumno */$$
DELIMITER ;

/* Procedure structure for procedure `listar_AlumnoApoderado` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_AlumnoApoderado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_AlumnoApoderado`()
select al.nomAlumno,al.apeAlumno,al.dniAlumno,apo.nomApoderado,apo.apeApoderado,apo.dniApoderado
from alumno al
inner join apoderado apo
on al.idApoderado = apo.idApoderado */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Apoderado` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Apoderado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Apoderado`()
SELECT * FROM apoderado */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Carrera` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Carrera` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Carrera`()
SELECT * FROM carrera */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Curso` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Curso` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Curso`()
SELECT * FROM curso */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Empleado` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Empleado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Empleado`()
SELECT * FROM empleado */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Grado` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Grado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Grado`()
SELECT * FROM grado */$$
DELIMITER ;

/* Procedure structure for procedure `listar_matricula` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_matricula` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_matricula`()
SELECT * FROM matricula */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Matricula_inner` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Matricula_inner` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Matricula_inner`()
SELECT  mat.idMatricula,mat.fecMatricula,mat.horMatricula,mat.costMatricula,mat.nivelMatricula,al.nomAlumno,al.apeAlumno,al.dniAlumno,emp.nomEmpleado,gra.secGrado
FROM matricula mat
INNER JOIN alumno al
ON mat.idAlumno = al.idAlumno
INNER JOIN empleado emp
on mat.idEmpleado = emp.idEmpleado
INNER JOIN grado gra
on mat.idGrado = gra.idGrado */$$
DELIMITER ;

/* Procedure structure for procedure `listar_Notas` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_Notas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_Notas`()
SELECT * FROM notas */$$
DELIMITER ;

/* Procedure structure for procedure `listar_seccion` */

/*!50003 DROP PROCEDURE IF EXISTS  `listar_seccion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_seccion`()
SELECT * FROM seccion */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
