/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.1.32-MariaDB : Database - proyecto4geeks
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyecto4geeks` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyecto4geeks`;

/*Data for the table `productos` */

insert  into `productos`(`id`,`titulo`,`descripcion`,`costo`,`image`,`created_at`,`updated_at`) values (1,'Coctel pequeño','Pídelo con ron o vodka',850,'coctel_peq.jpg','2018-06-19 04:02:41','2018-06-19 04:02:41'),(2,'Carpaccio','Carpaccio de lomito con focaccia',3100,'carpaccio.jpg','2018-06-19 04:20:35','2018-06-19 04:20:35'),(3,'Pie de limon','Pie de limon de la casa',1300,'pie_limon.jpg','2018-06-19 04:22:53','2018-06-19 04:25:20'),(4,'Torta de Chocolate','Exquisito bizcocho cubierto de chocolate',1100,'torta.jpg','2018-06-19 04:23:48','2018-06-19 16:45:56'),(8,'Pizza chicago','Pizza al estilo Chicago',8500,'pizza_chicago.jpg','2018-06-20 00:03:53','2018-06-20 00:03:53'),(9,'Ensalada Copa Hatillana','Mezcla de lechuga y vegetales frescos',2800,'ensalada_copa.jpg','2018-06-20 00:07:06','2018-06-20 00:07:06');

/*Data for the table `servicios` */

insert  into `servicios`(`id`,`titulo`,`descripcion`,`icon`,`created_at`,`updated_at`) values (1,'Gente Felíz y comprometida','Más que un equipo de trabajo somos una familia que trabajamos para servirte','ti-face-smile',NULL,NULL),(2,'Amplia terraza','Nuestra terraza se ha convertido en el punto de encuentro perfecto para que compartas','ti-star',NULL,NULL),(3,'Musica en vivo','Diversas bandas se presentan en nuestros espacios para amenizar tus noches','ti-music-alt',NULL,NULL),(4,'Envios a domicilio','Contamos con servicio de entregas a domicilio','ti-truck',NULL,NULL),(5,'Creatividad culinaria','Nuestro menu posee una amplia gama de platos para que disfrutes tu momento ','ti-comments-smiley',NULL,NULL),(6,'Ambiente musical','Contamos con musica para amenizar tu momento','ti-microphone-alt',NULL,NULL);

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Daniel Gonzalez','daniel21g@hotmail.com','$2y$10$Tr5anI2v71gxEp6zRmG1lu0que10eNtOc6Q8jgybzyq3teZZG2oGW','yBV3rqWu2uz99K8fEZ49BL6LpsqtcEvBwE81NNsMaA5ry9apLUcATUyP3v86','2018-06-19 23:30:51','2018-06-19 23:30:51'),(2,'Jessica Gonzalez','jekaca23@gmail.com','$2y$10$6m21YdA0AqcBZHI9JGbREuphXDccNN8ZnBtjCCrLlD1NLSVQLfIQW','nIoAKbTCXIwflOrFQYmCCAOoJgTIjR5qEGOom30rmbuDLfn8LlXeVLfRKR9o','2018-06-20 03:33:14','2018-06-20 03:33:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
