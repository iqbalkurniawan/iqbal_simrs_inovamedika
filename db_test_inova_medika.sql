/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.20-MariaDB : Database - db_test_inova_medika
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_test_inova_medika` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_test_inova_medika`;

/*Table structure for table `ms_dokter` */

DROP TABLE IF EXISTS `ms_dokter`;

CREATE TABLE `ms_dokter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomor_str` varchar(18) DEFAULT NULL,
  `nama_dokter` varchar(200) DEFAULT NULL,
  `poli_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_dokter` */

/*Table structure for table `ms_jabatan` */

DROP TABLE IF EXISTS `ms_jabatan`;

CREATE TABLE `ms_jabatan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_jabatan` */

insert  into `ms_jabatan`(`id`,`jabatan`,`created_at`,`updated_at`) values 
(1,'Direktur','2022-11-25 10:06:47',NULL),
(2,'Wakil Direktur','2022-11-25 10:06:51',NULL),
(3,'Kepala Bagian','2022-11-25 10:06:57',NULL),
(4,'Kepala Unit','2022-11-25 10:07:06',NULL),
(5,'Staff','2022-11-25 10:07:08',NULL),
(6,'Pendaftaran','2022-11-25 10:09:14',NULL),
(7,'Kasir','2022-11-25 10:09:17',NULL),
(8,'Apoteker','2022-11-25 10:09:22',NULL),
(9,'Rekam Medis','2022-11-25 10:09:30',NULL),
(10,'Perawat','2022-11-25 10:10:09',NULL);

/*Table structure for table `ms_obat` */

DROP TABLE IF EXISTS `ms_obat`;

CREATE TABLE `ms_obat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(200) DEFAULT NULL,
  `satuan` char(10) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_obat` */

insert  into `ms_obat`(`id`,`nama_obat`,`satuan`,`stok`,`created_at`,`updated_at`) values 
(1,'Amoxilin','kaplet',12,'2022-11-26 00:00:00','2022-11-26 00:00:00');

/*Table structure for table `ms_pasien` */

DROP TABLE IF EXISTS `ms_pasien`;

CREATE TABLE `ms_pasien` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_rekammedis` varchar(150) DEFAULT NULL,
  `nama_pasien` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telepon` char(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_pasien` */

/*Table structure for table `ms_pegawai` */

DROP TABLE IF EXISTS `ms_pegawai`;

CREATE TABLE `ms_pegawai` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `unitkerja_id` bigint(20) DEFAULT NULL,
  `jabatan_id` bigint(20) DEFAULT NULL,
  `no_telepon` char(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_pegawai` */

insert  into `ms_pegawai`(`id`,`nip`,`nama_pegawai`,`tanggal_lahir`,`alamat`,`unitkerja_id`,`jabatan_id`,`no_telepon`,`created_at`,`updated_at`) values 
(1,'200106200247','Iqbal Kurniawan','2001-06-20','Wonolopo',1,6,NULL,'2022-11-25 10:07:19',NULL),
(2,'200206210248','Bobi','2002-06-21','Jatingaleh	',1,7,NULL,'2022-11-25 10:11:34',NULL);

/*Table structure for table `ms_poli` */

DROP TABLE IF EXISTS `ms_poli`;

CREATE TABLE `ms_poli` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_poli` */

insert  into `ms_poli`(`id`,`nama_poli`,`created_at`,`updated_at`) values 
(1,'Umum','2022-11-25 10:21:26',NULL),
(2,'Umum IGD','2022-11-25 10:21:30',NULL),
(3,'Spesialis Rehabilitasi Medik','2022-11-25 10:21:34',NULL),
(4,'Spesialis Orthopedi','2022-11-25 10:21:36',NULL),
(5,'Spesialis Penyakit Dalam','2022-11-25 10:21:39',NULL),
(6,'Spesialis Mata','2022-11-25 10:21:52',NULL),
(7,'Spesialis THT','2022-11-25 10:21:55',NULL),
(8,'Spesialis Jiwa','2022-11-25 10:21:59',NULL),
(9,'Spesialis Obygn','2022-11-25 10:22:02',NULL),
(10,'Radiologi','2022-11-25 10:22:04',NULL),
(11,'Fisioterapi','2022-11-25 10:22:10',NULL);

/*Table structure for table `ms_tindakan` */

DROP TABLE IF EXISTS `ms_tindakan`;

CREATE TABLE `ms_tindakan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_tindakan` varchar(200) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_tindakan` */

insert  into `ms_tindakan`(`id`,`nama_tindakan`,`harga`,`created_at`,`updated_at`) values 
(1,'Jahit per simpul',10000,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `ms_unit_kerja` */

DROP TABLE IF EXISTS `ms_unit_kerja`;

CREATE TABLE `ms_unit_kerja` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `unit` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_unit_kerja` */

insert  into `ms_unit_kerja`(`id`,`unit`,`created_at`,`updated_at`) values 
(1,'Binfung','2022-11-25 10:06:07',NULL),
(2,'Apoteker','2022-11-25 10:06:09',NULL),
(3,'Yanmed/Dokpol Poli Umum','2022-11-25 10:06:12',NULL),
(4,'Spesialis','2022-11-25 10:06:14',NULL),
(5,'IGD','2022-11-25 10:06:16',NULL),
(6,'Rawat Inap','2022-11-25 10:06:19',NULL),
(7,'Janmedum','2022-11-25 10:06:26',NULL),
(8,'Renmin','2022-11-25 10:06:29',NULL);

/*Table structure for table `ms_user` */

DROP TABLE IF EXISTS `ms_user`;

CREATE TABLE `ms_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `pegawai_id` bigint(20) DEFAULT NULL,
  `dokter_id` bigint(20) DEFAULT NULL,
  `role_id` int(11) NOT NULL COMMENT '1=>pendaftan, 2=>farmasi, 3=> kasir, 4=> perawat, 5=> dokter (1-4 input ke pegawai_id),(5 input ke dokter_id)',
  `password` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms_user` */

insert  into `ms_user`(`id`,`username`,`pegawai_id`,`dokter_id`,`role_id`,`password`,`created_at`,`updated_at`) values 
(1,'admin',1,NULL,6,'202cb962ac59075b964b07152d234b70','2022-11-26 10:32:54',NULL),
(2,'masibal',1,NULL,1,'202cb962ac59075b964b07152d234b70','2022-11-26 10:32:54',NULL);

/*Table structure for table `tr_detail_rekammedis` */

DROP TABLE IF EXISTS `tr_detail_rekammedis`;

CREATE TABLE `tr_detail_rekammedis` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rekammedis_id` bigint(20) DEFAULT NULL,
  `tindakan_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_detail_rekammedis` */

/*Table structure for table `tr_farmasi` */

DROP TABLE IF EXISTS `tr_farmasi`;

CREATE TABLE `tr_farmasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rekammedis_id` bigint(20) DEFAULT NULL,
  `resep_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_farmasi` */

/*Table structure for table `tr_rekammedis` */

DROP TABLE IF EXISTS `tr_rekammedis`;

CREATE TABLE `tr_rekammedis` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pasien_id` bigint(20) DEFAULT NULL,
  `status_registrasi` char(5) DEFAULT NULL COMMENT '1=>rawat jalan, 2=>rawat inap',
  `diagnosa` text DEFAULT NULL,
  `tanggal_masuk` datetime DEFAULT NULL,
  `tanggal_keluar` datetime DEFAULT NULL,
  `kamar_id` bigint(20) DEFAULT NULL,
  `poli_id` bigint(20) DEFAULT NULL,
  `dokter_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_rekammedis` */

/*Table structure for table `tr_resep` */

DROP TABLE IF EXISTS `tr_resep`;

CREATE TABLE `tr_resep` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `resep_ke` varchar(150) DEFAULT NULL,
  `pasien_id` bigint(20) DEFAULT NULL,
  `obat_id` bigint(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `aturan_pakai` varchar(100) DEFAULT NULL,
  `satuan_resep` int(11) DEFAULT NULL,
  `status` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_resep` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
