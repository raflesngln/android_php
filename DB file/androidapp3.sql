/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.26-MariaDB : Database - androidapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`androidapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `androidapp`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(12) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

/*Table structure for table `biodata` */

DROP TABLE IF EXISTS `biodata`;

CREATE TABLE `biodata` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `biodata` */

insert  into `biodata`(`id`,`nama`,`alamat`) values (1,'Rere','priok'),(2,'Rafles Nainggolan','jakarta barat'),(4,'budi','kaliderass'),(5,'Manto ajah','kaliderass'),(6,'Sandi kurnia','serang'),(8,'bub6h','uvubub'),(9,'inibij','ubuhuhh7h'),(10,'ububub','ubuh7h7h'),(11,'ihhu','ytytyt'),(12,'yeeeeeeee','yeeeeee');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`id`,`description`,`image`) values (10,'ererer','1510311537864.png'),(11,'My Image','1510311556182.jpg'),(12,'My Image','1510540979154.jpg');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `npm` varchar(12) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `sesi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`npm`,`nama`,`kelas`,`sesi`) values ('100','Rafles Nainggolan','IIAA','Siangs'),('101','Budi Saja','IIA','Siangs'),('102','Aldy Ja','8D','Siangs'),('103','mawar Jap','IIA','Siangs'),('104','Andi M','6BT','Siangs'),('105','Dere','FDD','Siangs'),('106','Rahmat','7B','Siang'),('107','Surya Sant','7F','Siangs'),('108','Herman Tegal Wangi','3B','Siangs'),('15121','Hehdhe','E3','Siangs');

/*Table structure for table `ms_user` */

DROP TABLE IF EXISTS `ms_user`;

CREATE TABLE `ms_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(111) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `ms_user` */

insert  into `ms_user`(`id`,`fullname`,`username`,`password`) values (1,'rafles nainggolan','rafles','12345'),(2,'ririn','ririn','123'),(4,'mira ajah','mira','1234'),(5,'jcjcu','fuf','cicic'),(6,'martha','martha','1122'),(7,'reren','rere','55555'),(13,'miranda','miranda','112233'),(14,'mawar','mawar','112233');

/*Table structure for table `pembeli` */

DROP TABLE IF EXISTS `pembeli`;

CREATE TABLE `pembeli` (
  `id_pembeli` int(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `api_key` varchar(100) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembeli` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`pid`,`name`,`price`,`description`,`created_at`,`updated_at`) values (1,'Raflesiannnnnnn',99999.00,'lorem ipsum ','2016-12-27 04:10:31','0000-00-00 00:00:00'),(2,'lorem ipsum',11487.00,'ysywh','2016-12-27 04:11:11','0000-00-00 00:00:00'),(3,'yyyt',52555.00,'gtttttt','2017-09-12 17:31:03','0000-00-00 00:00:00'),(6,'Raflesian',99999.00,'lorem ipsum ','2017-09-13 11:18:25','0000-00-00 00:00:00');

/*Table structure for table `studio` */

DROP TABLE IF EXISTS `studio`;

CREATE TABLE `studio` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jam` datetime DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `call` varchar(50) DEFAULT NULL,
  `alatmusik` varchar(200) DEFAULT NULL,
  `lastupdate` varchar(100) DEFAULT NULL,
  `ratingalamatmusik` float DEFAULT NULL,
  `ratingrecording` float DEFAULT NULL,
  `ratingtempat` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `studio` */

insert  into `studio`(`id`,`nama`,`gambar`,`alamat`,`harga`,`jam`,`latitude`,`longitude`,`call`,`alatmusik`,`lastupdate`,`ratingalamatmusik`,`ratingrecording`,`ratingtempat`) values ('12','studio satu','https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg','jakarta barat',5000,'2017-09-22 15:02:36',-64,351,'0374744','gitar,gendang','2017-09-10',5,4,3);

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pegawai` */

insert  into `tb_pegawai`(`id`,`nama`,`alamat`,`jabatan`,`status`) values ('','',NULL,NULL,'0'),('12344','aldy aj','IT','H','2'),('12345','Rere ajah','ewewewe','wewewe','1'),('544545334','ytytyty','rere','UG','0'),('8999999001933','Mawar','Jakarta Barat Cengkareng','HRD','2');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(10) DEFAULT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
