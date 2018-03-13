/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 10.1.29-MariaDB : Database - markethub-cmsu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `marketplace_accounts` */

DROP TABLE IF EXISTS `marketplace_accounts`;

CREATE TABLE `marketplace_accounts` (
  `user_token` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `marketplace` varchar(100) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `marketplace_accounts` */

insert  into `marketplace_accounts`(`user_token`,`email`,`password`,`marketplace`,`status`) values 
('YWRtaW46YWRtaW4=','TesDeta','TesDeta','shopee','pending'),
('YWRtaW46YWRtaW4=',NULL,NULL,'bukalapak','pending'),
('YWRtaW46YWRtaW4=',NULL,NULL,'tokopedia','pending'),
('YWRtaW46YWRtaW4=','detautama11@gmail.com','deta123','bukalapak','pending'),
('YWRtaW46YWRtaW4=',NULL,NULL,'bukalapak','pending'),
('YWRtaW46YWRtaW4=','detaTp@gmail.com','tp','tokopedia','pending'),
('YWRtaW46YWRtaW4=','shopee@gmail.com','123123','shopee','pending'),
('YWRtaW46YWRtaW4=','tes','ts','bukalapak','pending'),
('YWRtaW46YWRtaW4=','wer','wer','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qweqew','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','r34234','234234','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qqweq','123123','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qweqw','qweqwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qweqw','qweqwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','wer','werwer','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qweqwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','24','234234234','bukalapak','pending'),
('YWRtaW46YWRtaW4=','wer','wer','bukalapak','pending'),
('YWRtaW46YWRtaW4=','wer','werwer','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qweqwe','bukalapak','pending'),
('YWRtaW46YWRtaW4=','qwe','qwe','bukalapak','pending');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(255) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `asuransi` tinyint(1) DEFAULT NULL,
  `minimum_order` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` text,
  `ctgi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id_produk`,`user_token`,`nama_produk`,`sku`,`asuransi`,`minimum_order`,`harga`,`berat`,`stok`,`deskripsi`,`ctgi`) values 
(4,'YWRtaW46YWRtaW4=','TesDeta 4','TesDeta 4444',0,10,5000,200,100,'THe best product in plant namec','bola naga 2'),
(5,'YWRtaW46YWRtaW4=','TesDeta 2','TesDeta 2',0,10,5000,200,100,'THe best product in plant namec','bola naga 2');

/*Table structure for table `produk_image` */

DROP TABLE IF EXISTS `produk_image`;

CREATE TABLE `produk_image` (
  `ID_PRODUK_IMAGE` varchar(255) DEFAULT NULL,
  `FK_PRODUK_KATEGORI` int(11) DEFAULT NULL,
  `FK_PRODUK_SUBKATEGORI` int(11) DEFAULT NULL,
  `NAMA_PRODUK_IMAGE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk_image` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TOKEN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`username`,`password`,`email`,`created_at`,`TOKEN`) values 
('admin','admin','admin@example.com','2018-03-05 17:10:36','YWRtaW46YWRtaW4='),
('deta','deta','deta@example.com','2018-03-11 21:09:06','ZGV0YTpkZXRh');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
