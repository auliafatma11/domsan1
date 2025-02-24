-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for domsan1
CREATE DATABASE IF NOT EXISTS `domsan1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `domsan1`;

-- Dumping structure for table domsan1.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kode_tr` int DEFAULT NULL,
  `nominal` int DEFAULT NULL,
  `saldo_Awal` int DEFAULT NULL,
  `saldo_akhir` int DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `transaksi_ibfk_1` (`id_siswa`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `user` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.transaksi: ~2 rows (approximately)
DELETE FROM `transaksi`;
INSERT INTO `transaksi` (`id_transaksi`, `id_siswa`, `tanggal`, `keterangan`, `kode_tr`, `nominal`, `saldo_Awal`, `saldo_akhir`) VALUES
	(39, 82, '2025-02-22', 'Jajan', 1, 70000, 45000, 115000),
	(40, 82, '2025-02-07', 'uang beli telurrrr', 2, 50000, 115000, 65000);

-- Dumping structure for table domsan1.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_induk` int DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kelas` int DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `no_induk` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.user: ~7 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id_siswa`, `nama`, `no_induk`, `foto`, `saldo`, `username`, `password`, `role`, `kelas`) VALUES
	(21, 'admin', 12, NULL, 0.00, 'admin', 'admin', '1', NULL),
	(73, 'Putri agusti', 123, '20250218053944.jpg', 40000.00, '123', 'FRlZ3L', '2', 10),
	(79, 'Elok Nur\\\'aini', 678, '20250219052343.jpg', 2000000.00, '678', 'UQvJfB', '2', 11),
	(81, 'Azkya Aulia', 957, '', 35000.00, 'azkyaaulia', '957', '2', 10),
	(82, 'Dwi Hidayatul Khoiriyah', 490, '', 110000.00, 'dwihidayatulkhoiriyah', '490', '2', 11),
	(85, 'Aulia', 547, NULL, NULL, 'aul', '1234', '3', NULL);

-- Dumping structure for view domsan1.view_transaksi
DROP VIEW IF EXISTS `view_transaksi`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_transaksi` (
	`id_siswa` INT(10) NULL,
	`id_transaksi` INT(10) NOT NULL,
	`tanggal` DATE NULL,
	`kode_tr` INT(10) NULL,
	`nominal` INT(10) NULL,
	`saldo_awal` INT(10) NULL,
	`saldo_akhir` INT(10) NULL,
	`keterangan` VARCHAR(225) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`no_induk` INT(10) NULL,
	`foto` VARCHAR(255) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`saldo` DECIMAL(15,2) NULL,
	`username` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`password` VARCHAR(225) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`role` ENUM('1','2','3') NULL COLLATE 'utf8mb4_0900_ai_ci',
	`kelas` INT(10) NULL
) ENGINE=MyISAM;

-- Dumping structure for view domsan1.view_transaksi
DROP VIEW IF EXISTS `view_transaksi`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_transaksi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_transaksi` AS select `transaksi`.`id_siswa` AS `id_siswa`,`transaksi`.`id_transaksi` AS `id_transaksi`,`transaksi`.`tanggal` AS `tanggal`,`transaksi`.`kode_tr` AS `kode_tr`,`transaksi`.`nominal` AS `nominal`,`transaksi`.`saldo_Awal` AS `saldo_awal`,`transaksi`.`saldo_akhir` AS `saldo_akhir`,`transaksi`.`keterangan` AS `keterangan`,`user`.`nama` AS `nama`,`user`.`no_induk` AS `no_induk`,`user`.`foto` AS `foto`,`user`.`saldo` AS `saldo`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`role` AS `role`,`user`.`kelas` AS `kelas` from (`transaksi` join `user` on((`transaksi`.`id_siswa` = `user`.`id_siswa`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
