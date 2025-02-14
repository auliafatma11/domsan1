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

-- Dumping structure for table domsan1.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.admin: ~1 rows (approximately)
REPLACE INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
	(2, 'Aulia', 'fatma', 'aul');

-- Dumping structure for table domsan1.data_siswa
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_induk` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT '0.00',
  `id_kelas` int DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `no_induk` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.data_siswa: ~1 rows (approximately)
REPLACE INTO `data_siswa` (`id_siswa`, `nama`, `no_induk`, `foto`, `saldo`, `id_kelas`, `username`, `password`, `role`) VALUES
	(16, 'Arifah Nuril', '12345', '20250213042111-Arifah.jpg', 10.00, 1, NULL, NULL, NULL),
	(20, 'fatmawati', '12134', NULL, 0.00, 3, NULL, NULL, NULL);

-- Dumping structure for table domsan1.jenis
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.jenis: ~2 rows (approximately)
REPLACE INTO `jenis` (`id_jenis`, `jenis`) VALUES
	(1, 'Debit'),
	(2, 'Kredit');

-- Dumping structure for table domsan1.kelas
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `kelas` int DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.kelas: ~2 rows (approximately)
REPLACE INTO `kelas` (`id_kelas`, `kelas`) VALUES
	(1, 10),
	(2, 11),
	(3, 12);

-- Dumping structure for table domsan1.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int DEFAULT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_jenis` int DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.transaksi: ~0 rows (approximately)

-- Dumping structure for table domsan1.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL,
  `nama_lengkap` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table domsan1.user: ~0 rows (approximately)
REPLACE INTO `user` (`id_user`, `username`, `password`, `role`, `nama_lengkap`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', NULL),
	(2, 'Aul', '950a5e3732fd173428154f84954a82b7', '2', 'Aulia Fatmawati'),
	(5, 'Fatmawati', 'patmaa', '2', NULL);

-- Dumping structure for trigger domsan1.insert_admin_to_user
DROP TRIGGER IF EXISTS `insert_admin_to_user`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_admin_to_user` AFTER INSERT ON `admin` FOR EACH ROW BEGIN
    INSERT INTO user (nama_lengkap, username, password)
    VALUES (NEW.nama_lengkap, NEW.username, NEW.password);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

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
