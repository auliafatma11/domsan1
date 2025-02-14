-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.11.10-MariaDB - mariadb.org binary distribution
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

-- Dumping structure for table domsan.data_siswa
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `no_induk` varchar(50) NOT NULL DEFAULT '',
  `kelas` int(3) NOT NULL,
  `saldo` int(8) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domsan.data_siswa: ~96 rows (approximately)
REPLACE INTO `data_siswa` (`id_siswa`, `foto`, `nama_siswa`, `no_induk`, `kelas`, `saldo`) VALUES
	(1, NULL, 'Azkya Aulia Maghfirany', '308/022.39', 10, 0),
	(2, NULL, 'Cinta Ratih Martha Ningtyas', '309/023.39', 10, 0),
	(3, NULL, 'Devinda Amelia', '310/024.39', 10, 0),
	(4, NULL, 'Enti Imroatul Jalillah', '311/025.39', 10, 0),
	(5, NULL, 'Fairies Yefi Angelicha', '312/026.39', 10, 0),
	(6, NULL, 'Farel Gibran Al Ghozali', '313/027.39', 10, 0),
	(7, NULL, 'Kheisya fidinna Hanifah', '316/030.39', 10, 0),
	(8, NULL, 'Muhammad Abi Ya\'la', '317/031.39', 10, 0),
	(9, NULL, 'Muhamad Ilham', '318/032.39', 10, 0),
	(10, NULL, 'Nayla Fahma Maulida', '318/033.39', 10, 0),
	(11, NULL, 'Nindi Tri Rafiunchel', '320/033.39', 10, 0),
	(12, NULL, 'Putri Monica Dwi Rahayu', '321/035.39', 10, 0),
	(13, NULL, 'Rahma Dany Kashfi Sabrina', '322/036.39', 10, 0),
	(14, NULL, 'Sherly Felicia Anatasya', '323/037.39', 10, 0),
	(15, NULL, 'Syarif', '324/038.39', 10, 0),
	(16, NULL, 'Taufiq Ilham N', '325/039.39', 10, 0),
	(17, NULL, 'Veni Veliska', '328/042.39', 10, 0),
	(18, NULL, 'Vivi Tri Nur Andriana', '326/040.39', 10, 0),
	(19, NULL, 'Benni Yudha Tata Adhitama', '327/041.39', 10, 0),
	(20, NULL, 'Ahdiyana Fatwani Maulafia', '268/032.21', 10, 0),
	(21, NULL, 'Ahmad Akbar Taufiqurrohman', '269/032.21', 10, 0),
	(22, NULL, 'Ahmad Hadi Mahmud', '270/034.21', 10, 0),
	(23, NULL, 'Ahmad Syarifuddin', '271/035.21', 10, 0),
	(24, NULL, 'Aira Surya Pratama', '272/036.21', 10, 0),
	(25, NULL, 'Ambar Rohmah', '273/037.21', 10, 0),
	(26, NULL, 'Arifah Nuril Mursyidah', '274/038.21', 10, 0),
	(27, NULL, 'Azza Asyura Alhafizh Pramawa', '275/039.21', 10, 0),
	(28, NULL, 'Azzahra Salsa Bila Putri', '276/040.21', 10, 0),
	(29, NULL, 'Azzahratun Nur\'aini', '277/041.21', 10, 0),
	(30, NULL, 'Azzura Zahra', '278/042.21', 10, 0),
	(31, NULL, 'Enggar Kirana Ramadhani', '279/043.21', 10, 0),
	(32, NULL, 'Erlangga Alviant Pratama El-Badr', '280/044.21', 10, 0),
	(33, NULL, 'Fadhil Nur Faiz', '281/045.21', 10, 0),
	(34, NULL, 'Faizatul Alya', '282/046.21', 10, 0),
	(35, NULL, 'Izna Ayudestika Munawaroh', '283/047.21', 10, 0),
	(36, NULL, 'Luthfia Zalfa Ardisyaputri', '284/048.21', 10, 0),
	(37, NULL, 'Mega Alya Putri', '286/050.21', 10, 0),
	(38, NULL, 'Megananda Cristal Maliha ', '287/051.21', 10, 0),
	(39, NULL, 'Meytta Putri Nabila Gusti', '288/052.21', 10, 0),
	(40, NULL, 'Muflihatuddaroini', '089/053.21', 10, 0),
	(41, NULL, 'Muhammad Fathir Rizky', '290/054.21', 10, 0),
	(42, NULL, 'Muhammad Ilham Musyaffa\'', '291/055.21', 10, 0),
	(43, NULL, 'Muhammad Raihan Fuad', '292/056.21', 10, 0),
	(44, NULL, 'Muhammad Salman Alfarizzi', '293/057.21', 10, 0),
	(45, NULL, 'Nazhifah', '294/058.21', 10, 0),
	(46, NULL, 'Nur Fauziah Eli Melsy', '296/060.21', 10, 0),
	(47, NULL, 'Putri Agusti Nailaturrohamah', '297/061.21', 10, 0),
	(48, NULL, 'Reyfaldo Maulana Rosyid', '298/062.21', 10, 0),
	(49, NULL, 'Rizky Andriano', '299/063.21', 10, 0),
	(50, NULL, 'Shobibar Ridlwan', '300/064.21', 10, 0),
	(51, NULL, 'Siti Kholifah', '301/065.21', 10, 0),
	(52, NULL, 'Sukma Maulida Hidayati', '302/066.21', 10, 0),
	(53, NULL, 'Ulya Zumrotul Muwahidah', '303/067.21', 10, 0),
	(54, NULL, 'Yoshi Arwan Zullatatif', '306/070.21', 10, 0),
	(55, NULL, 'Yanuharti Widi', '305/069.21', 10, 0),
	(56, NULL, 'Abdillah Aziz', '247/001.39', 11, 0),
	(57, NULL, 'M. Davin Berliano', '285/049.21', 10, 0),
	(58, NULL, 'Alfina Tryanor Fandhini', ' 249/003.39', 11, 0),
	(59, NULL, 'Anggun Tyas Ayu Ramadhani', '250/004.39', 11, 0),
	(60, NULL, 'Aufa Ihabi', '251/005.39', 11, 0),
	(61, NULL, 'Aulia Rivya', '252/006.39', 11, 0),
	(62, NULL, 'Azizatun Nafi\'ah', '253/007.39', 11, 0),
	(63, NULL, 'Cantika Aulia Rahma', '254/008.39', 11, 0),
	(64, NULL, 'Delfinna Fitro Tuzzida', '255 /009.39', 11, 0),
	(65, NULL, 'Muhammad Rofiq Fatoni', '258/012.39', 11, 0),
	(66, NULL, 'Nadira Alif Fatul Kholifah', '259/013.39', 11, 0),
	(67, NULL, 'Rizka Syarifatul Maulida', ' 260/014.39', 11, 0),
	(68, NULL, 'Shofiana Salsabyla', '262/016.39', 11, 0),
	(69, NULL, 'Ulin Nihaayah', '263/017.39', 11, 0),
	(70, NULL, 'Vesta Lingga Loka', '263/017.39', 11, 0),
	(71, NULL, 'Ahmad Fathan Karim', '217/001.21', 11, 0),
	(72, NULL, 'Ahmad Jamal Manshur', '218/002.21', 11, 0),
	(73, NULL, 'Ahmad Riadi', '219/003.21', 11, 0),
	(74, NULL, 'Anggun Khowatim', '220/004.21', 11, 0),
	(75, NULL, 'Arif Nur Rahman', '221/005.21', 11, 0),
	(76, NULL, 'Asatidzal Hakim', '222/006.21', 11, 0),
	(77, NULL, 'Aulia Fatmawati', ' 223/007.21', 11, 0),
	(78, NULL, 'Dwi Hidayatul Khoiriyah', '226/010.21', 11, 0),
	(79, NULL, 'Elok Nuraini', '227/011.21', 11, 0),
	(80, NULL, 'Faathir Al-A\'Raaffi Arby', '228/012.21', 11, 0),
	(81, NULL, 'Faruq Arzaky Nuryandino', '229/013.21', 11, 0),
	(82, NULL, 'Indra Muhammad Waqhibul Qohar', ' 230/014.21', 11, 0),
	(83, NULL, 'Kevin Azriel Hartanto', '232/016.21', 11, 0),
	(84, NULL, 'Muhammad Fahrur Rozi', '233/017.21', 11, 0),
	(85, NULL, 'Muhammad Fauzi Afandi', ' 234/018.21', 11, 0),
	(86, NULL, 'Maulidah Fitri Khasanah', ' 235/019.21', 11, 0),
	(87, NULL, 'Mohammad Fadhil Al-Fakhri', '236/020.21', 11, 0),
	(88, NULL, 'Muhammad Dihya Al Qolbi ', '237/021.21', 11, 0),
	(89, NULL, 'Muhammad Fatih Fuady', '238/022.21', 11, 0),
	(90, NULL, 'Najma Faricha', '239/023.21', 11, 0),
	(91, NULL, 'Nata Dwi Rhama Sakti ', '240/024.21', 11, 0),
	(92, NULL, 'Nayla Azkiya', '241/025.21', 11, 0),
	(93, NULL, 'Raafi Hafidz Wardono', '242/026.21', 11, 0),
	(94, NULL, 'Rangga Aji Pratama', '243/027.21', 11, 0),
	(95, NULL, 'Rizky Alif Khoirul Anam', ' 244/028.21', 11, 0),
	(96, NULL, 'Sholihin Ilham Nur Ridhwan', '45/029.21', 11, 0);

-- Dumping structure for table domsan.login_admin
DROP TABLE IF EXISTS `login_admin`;
CREATE TABLE IF NOT EXISTS `login_admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- password  admin = admin/ select md5('admin');

-- Dumping data for table domsan.login_admin: ~1 rows (approximately)
REPLACE INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', '12345');

-- Dumping structure for table domsan.login_user
DROP TABLE IF EXISTS `login_user`;
CREATE TABLE IF NOT EXISTS `login_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kelas` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domsan.login_user: ~99 rows (approximately)
REPLACE INTO `login_user` (`id_user`, `nama_lengkap`, `username`, `password`, `kelas`) VALUES
	(1, 'Azkya Aulia Maghfirany', NULL, NULL, 10),
	(2, 'Cinta Ratih Martha Ningtyas', NULL, NULL, 10),
	(3, 'Devinda Amelia', NULL, NULL, 10),
	(4, 'Enti Imroatul Jalillah', NULL, NULL, 10),
	(5, 'Fairies Yefi Angelicha', NULL, NULL, 10),
	(6, 'Farel Gibran Al Ghozali', NULL, NULL, 10),
	(7, 'Kheisya fidinna Hanifah', NULL, NULL, 10),
	(8, 'Muhammad Abi Ya\'la', NULL, NULL, 10),
	(9, 'Muhamad Ilham', NULL, NULL, 10),
	(10, 'Nayla Fahma Maulida', NULL, NULL, 10),
	(11, 'Nindi Tri Rafiunchel', NULL, NULL, 10),
	(12, 'Putri Monica Dwi Rahayu', NULL, NULL, 10),
	(13, 'Rahma Dany Kashfi Sabrina', NULL, NULL, 10),
	(14, 'Sherly Felicia Anatasya', NULL, NULL, 10),
	(15, 'Syarif', NULL, NULL, 10),
	(16, 'Taufiq Ilham N', NULL, NULL, 10),
	(17, 'Veni Veliska\r\n\r\n', NULL, NULL, 10),
	(18, 'Vivi Tri Nur Andriana', NULL, NULL, 10),
	(19, ' Benni Yudha Tata Adhitama', NULL, NULL, 10),
	(20, 'Ahdiyana Fatwani Maulafia', NULL, NULL, 10),
	(21, 'Ahmad Akbar Taufiqurrohman', NULL, NULL, 10),
	(22, 'Ahmad Hadi Mahmud', NULL, NULL, 10),
	(23, 'Ahmad Syarifuddin', NULL, NULL, 10),
	(24, 'Aira Surya Pratama', NULL, NULL, 10),
	(25, 'Ambar Rohmah', NULL, NULL, 10),
	(26, 'Arifah Nuril Mursyidah', NULL, NULL, 10),
	(27, 'Azza Asyura Alhafizh Pramawa', NULL, NULL, 10),
	(28, 'Azzahra Salsa Bila Putri', NULL, NULL, 10),
	(29, 'Azzahratun Nur\'aini', NULL, NULL, 10),
	(30, 'Azzura Zahra', NULL, NULL, 10),
	(31, 'Enggar Kirana Ramadhani', NULL, NULL, 10),
	(32, 'Erlangga Alviant Pratama El-Badr', NULL, NULL, 10),
	(33, 'Fadhil Nur Faiz', NULL, NULL, 10),
	(34, 'Faizatul Alya', NULL, NULL, 10),
	(35, 'Izna Ayudestika Munawaroh', NULL, NULL, 10),
	(36, 'Luthfia Zalfa Ardisyaputri', NULL, NULL, 10),
	(37, 'Mega Alya Putri', NULL, NULL, 10),
	(38, 'Megananda Cristal Maliha Syisyoria S', NULL, NULL, 10),
	(39, 'Meytta Putri Nabila Gusti', NULL, NULL, 10),
	(40, 'Muflihatuddaroini', NULL, NULL, 10),
	(41, 'Muhammad Fathir Rizky Abdillah', NULL, NULL, 10),
	(42, 'Muhammad Ilham Musyaffa\'\r\n\r\n', NULL, NULL, 10),
	(43, 'Muhammad Raihan Fuad Fakhrurrozi', NULL, NULL, 10),
	(44, 'Muhammad Salman Alfarizzi', NULL, NULL, 10),
	(45, 'Nazhifah', NULL, NULL, 10),
	(46, 'Nur Fauziah Eli Melsy', NULL, NULL, 10),
	(47, 'Putri Agusti Nailaturrohamah', NULL, NULL, 10),
	(48, 'Reyfaldo Maulana Rosyid', NULL, NULL, 10),
	(49, 'Rizky Andriano', NULL, NULL, 10),
	(50, 'Shobibar Ridlwan', NULL, NULL, 10),
	(51, 'Siti Kholifah', NULL, NULL, 10),
	(52, 'Sukma Maulida Hidayati', NULL, NULL, 10),
	(53, 'Ulya Zumrotul Muwahidah', NULL, NULL, 10),
	(54, 'Yoshi Arwan Zullatatif', NULL, NULL, 10),
	(55, 'Yanuharti Widi', NULL, NULL, 10),
	(56, 'M. Davin Berliano', NULL, NULL, 10),
	(57, 'Abdillah Aziz', NULL, NULL, 11),
	(58, 'Alfina Tryanor Fandhini', NULL, NULL, 11),
	(59, 'Anggun Tyas Ayu Ramadhani', NULL, NULL, 11),
	(60, 'Aufa Ihabi', NULL, NULL, 11),
	(61, 'Aulia Rivya', NULL, NULL, 11),
	(62, 'Azizatun Nafi\'ah', NULL, NULL, 11),
	(63, 'Cantika Aulia Rahma', NULL, NULL, 11),
	(64, 'Delfinna Fitro Tuzzida', NULL, NULL, 11),
	(65, 'Muhammad Rofiq Fatoni', NULL, NULL, 11),
	(66, 'Nadira Alif Fatul Kholifah', NULL, NULL, 11),
	(67, 'Rizka Syarifatul Maulida', NULL, NULL, 11),
	(68, 'Shofiana Salsabyla', NULL, NULL, 11),
	(69, 'Ulin Nihaayah', NULL, NULL, 11),
	(70, 'Vesta Lingga Loka', NULL, NULL, 11),
	(71, 'Ahmad Fathan Karim', NULL, NULL, 11),
	(72, 'Ahmad Jamal Manshur', NULL, NULL, 11),
	(73, 'Ahmad Riadi', NULL, NULL, 11),
	(74, 'Anggun Khowatim', NULL, NULL, 11),
	(75, 'Arif Nur Rahman', NULL, NULL, 11),
	(76, 'Asatidzal Hakiim', NULL, NULL, 11),
	(77, 'Aulia Fatmawati', NULL, NULL, 11),
	(78, 'Dwi Hidayatul Khoiriyah', NULL, NULL, 11),
	(79, 'Elok Nuraini', NULL, NULL, 11),
	(80, 'Faathir Al-A\'Raaffi Arby', NULL, NULL, 11),
	(81, 'Faruq Arzaky Nuryandino', NULL, NULL, 11),
	(82, 'Indra Muhammad Waqhibul Qohar', NULL, NULL, 11),
	(83, 'Kevin Azriel Hartanto', NULL, NULL, 11),
	(84, 'Muhammad Fahrur Rozi', NULL, NULL, 11),
	(85, 'Muhammad Fauzi Afandi', NULL, NULL, 11),
	(86, 'Maulidah Fitri Khasanah', NULL, NULL, 11),
	(87, 'Mohammad Fadhil Al-Fakhri', NULL, NULL, 11),
	(88, 'Muhammad Dihya Al Qolbi ', NULL, NULL, 11),
	(89, 'Muhammad Fatih Fuady', NULL, NULL, 11),
	(90, 'Najma Faricha', NULL, NULL, 11),
	(91, 'Nata Dwi Rhama Sakti ', NULL, NULL, 11),
	(92, 'Nayla Azkiya', NULL, NULL, 11),
	(93, 'Raafi Hafidz Wardono', NULL, NULL, 11),
	(94, 'Rangga Aji Pratama', NULL, NULL, 11),
	(95, 'Rizky Alif Khoirul Anam', NULL, NULL, 11),
	(96, 'Sholihin Ilham Nur Ridhwan', NULL, NULL, 11),
	(97, 'Amalizatul Hammi', NULL, NULL, 11),
	(98, 'Sella Ayunia', NULL, NULL, 11),
	(99, 'Nur Mufidatul Hasanah', NULL, NULL, 11);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
