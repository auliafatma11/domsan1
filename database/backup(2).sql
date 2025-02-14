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
DROP DATABASE IF EXISTS `domsan1`;
CREATE DATABASE IF NOT EXISTS `domsan1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `domsan1`;

-- Dumping structure for table domsan1.kelas
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `kelas` int DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.kelas: ~2 rows (approximately)
DELETE FROM `kelas`;
INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
	(1, 10),
	(2, 11),
	(3, 12);

-- Dumping structure for table domsan1.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int DEFAULT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `jenis` enum('debit','kredit') DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `user` (`id_siswa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.transaksi: ~2 rows (approximately)
DELETE FROM `transaksi`;
INSERT INTO `transaksi` (`id_transaksi`, `id_siswa`, `jumlah`, `tanggal`, `jenis`) VALUES
	(3, 20, 10000.00, '2025-02-14 10:04:54', 'kredit'),
	(4, 20, 100000.00, '2025-02-14 10:45:16', 'kredit');

-- Dumping structure for table domsan1.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT NULL,
  `id_kelas` int DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `no_induk` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.user: ~2 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id_siswa`, `nama`, `no_induk`, `foto`, `saldo`, `id_kelas`, `username`, `password`, `role`) VALUES
	(16, 'Arifah Nuril', '12345', '20250213042111-Arifah.jpg', 10.00, 1, '12345', 'nuril', '2'),
	(20, 'fatmawati', '12134', NULL, 0.00, 3, NULL, NULL, '2'),
	(21, 'admin', '-', NULL, 0.00, NULL, 'admin', 'admin', '1');

-- Dumping structure for trigger domsan1.update_saldo
DROP TRIGGER IF EXISTS `update_saldo`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `update_saldo` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
    IF NEW.jenis = 'debit' THEN
        UPDATE data_siswa 
        SET saldo = saldo + NEW.jumlah 
        WHERE id_siswa = NEW.id_siswa;
    ELSEIF NEW.jenis = 'kredit' THEN
        UPDATE data_siswa 
        SET saldo = saldo - NEW.jumlah 
        WHERE id_siswa = NEW.id_siswa;
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
