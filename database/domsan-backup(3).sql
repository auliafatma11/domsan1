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

-- Dumping structure for table domsan.data_siswa
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_induk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `kelas` int NOT NULL,
  `saldo` int NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domsan.data_siswa: ~99 rows (approximately)
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
	(96, NULL, 'Sholihin Ilham Nur Ridhwan', '45/029.21', 11, 0),
	(97, NULL, 'Sella Ayunia', '', 11, 0),
	(98, NULL, 'Amalizatul Hammi', '', 11, 0),
	(99, NULL, 'Nur Mufidatul', '', 11, 0);

-- Dumping structure for table domsan.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `debit` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kredit` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_siswa` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelas` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domsan.transaksi: ~1 rows (approximately)
REPLACE INTO `transaksi` (`id_transaksi`, `debit`, `kredit`, `keterangan`, `id_siswa`, `nama`, `kelas`) VALUES
	(2, '12.000', '-', 'Uang saku', 1, 'azkya', '10');

-- Dumping structure for table domsan.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` int DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domsan.user: ~100 rows (approximately)
REPLACE INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `role`) VALUES
	(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'Cinta Ratih Martha Ningtyas', 'cinta', 'c3653e4408832e6611f37dcd90544de8', 2),
	(3, 'Devinda Amelia', 'devinda', '8c37ffa178a7f9f8d238dee5f2298d03', 2),
	(4, 'Enti Imroatul Jalillah', 'enti', 'c46ffbd10c7515f2ea618632c11e44a5', 2),
	(5, 'Fairies Yefi Angelicha', 'fairies', 'd7b075b507087e895172582f2f62e83f', 2),
	(6, 'Farel Gibran Al Ghozali', 'farel', '5579a2166b5fc9c4185975045fc2fc35', 2),
	(7, 'Kheisya fidinna Hanifah', 'kheisya', '6890709118350ca117343b15d939415a', 2),
	(8, 'Muhammad Abi Ya\'la', 'ya\'la', '8f47dbb57c1cc47363f0c290f796748a', 2),
	(9, 'Muhamad Ilham', 'ilham', 'b63d204bf086017e34d8bd27ab969f28', 2),
	(10, 'Nayla Fahma Maulida', 'fahma', '456f3edd0dfdb08cf7385f6fd6d9ef8a', 2),
	(11, 'Nindi Tri Rafiunchel', 'nindi', 'c1689c1657c5946f292352e2b0188be4', 2),
	(12, 'Putri Monica Dwi Rahayu', 'monica', 'ff0d813dd5d2f64dd372c6c4b6aed086', 2),
	(13, 'Rahma Dany Kashfi Sabrina', 'kashfi', 'b536c0822d3d19c9ccc5e519d9ced5ed', 2),
	(14, 'Sherly Felicia Anatasya', 'sherly', '1c8b06358890d6c512859b21557315b4', 2),
	(15, 'Syarif', 'syarif', '8daa2f003d41f1ea865c1503b3d99d3d', 2),
	(16, 'Taufiq Ilham N', 'taufiq', 'f4eff635e6dfe584a1a536dbc7718f3d', 2),
	(17, 'Veni Veliska\r\n\r\n', 'veni', '7c29d35ea38818aec6d48841382bb5a8', 2),
	(18, 'Vivi Tri Nur Andriana', 'vivi', 'c3bb6f719742fd1e5768d6d1361cfb49', 2),
	(19, ' Benni Yudha Tata Adhitama', 'benni', 'e078b816c9d41b00d56466eb7e2cb316', 2),
	(20, 'Ahdiyana Fatwani Maulafia', 'ahdiyana', 'dffa779cf6b3956ce6edc171e6c7e885', 2),
	(21, 'Ahmad Akbar Taufiqurrohman', 'akbar', '4f033a0a2bf2fe0b68800a3079545cd1', 2),
	(22, 'Ahmad Hadi Mahmud', 'mahmud', 'e1aa6aa12922a1275c9c8f8e54bac8d6', 2),
	(23, 'Ahmad Syarifuddin', 'syarifuddin', '34326e4ca4bc00dd048a798acc167544', 2),
	(24, 'Aira Surya Pratama', 'surya', 'aff8fbcbf1363cd7edc85a1e11391173', 2),
	(25, 'Ambar Rohmah', 'ambar', 'd51a22ed45c4da9bd0dc10044da8cf60', 2),
	(26, 'Arifah Nuril Mursyidah', 'nuril', '53faeed828daab2c05ed25792dae48d2', 2),
	(27, 'Azza Asyura Alhafizh Pramawa', 'azza', '0439887ff5dafda6a33aa631d0e424ec', 2),
	(28, 'Azzahra Salsa Bila Putri', 'azzahra', '6865e32e44de689cc3cfbb2541f8884e', 2),
	(29, 'Azzahratun Nur\'aini', 'azzahratun', 'a720642690b7e76c2ce218146bf798c1', 2),
	(30, 'Azzura Zahra', 'azzura', 'f5a02dd480c1b6768d49b7345efacf73', 2),
	(31, 'Enggar Kirana Ramadhani', 'enggar', 'b83a9faad6b16c75178cb8dee215a155', 2),
	(32, 'Erlangga Alviant Pratama El-Badr', 'erlangga', '38d937d14aeaf973117ba32a51a09d97', 2),
	(33, 'Fadhil Nur Faiz', 'faiz', '9d4d4ab0dfdb72a54b895d78b90b09c7', 2),
	(34, 'Faizatul Alya', 'faizatul', '94c5d3b3997937015c1734d700cbc03a', 2),
	(35, 'Izna Ayudestika Munawaroh', 'izna', '160662c33e821be85e3f4ac282c8ec5c', 2),
	(36, 'Luthfia Zalfa Ardisyaputri', 'luthfia', 'e0cf5fd2a453a53ec8d773c01faaa455', 2),
	(37, 'Mega Alya Putri', 'mega', '91805ec00ad20b85226bec0bacf843d3', 2),
	(38, 'Megananda Cristal Maliha Syisyoria S', 'megananda', '29961d61b9126f85846fd0a80c5843b2', 2),
	(39, 'Meytta Putri Nabila Gusti', 'meytta', '9e3db4f64e8c2dee4405cebf600fbb8b', 2),
	(40, 'Muflihatuddaroini', 'muflihatuddaroini', 'c79cadc955227f6f298d25db1d6960e9', 2),
	(41, 'Muhammad Fathir Rizky Abdillah', 'fathirrizky', '0ffc40776446ab1b45f8e30448669878', 2),
	(42, 'Muhammad Ilham Musyaffa\'\r\n\r\n', 'musyaffa\'', 'e266a65e3d49130d9e3db158f411ba5e', 2),
	(43, 'Muhammad Raihan Fuad Fakhrurrozi', 'raihan', 'daa6b8d04ce72d953d5501adc53ddd82', 2),
	(44, 'Muhammad Salman Alfarizzi', 'salman', 'daa6b8d04ce72d953d5501adc53ddd82', 2),
	(45, 'Nazhifah', 'nazhifah', 'c2ad5ee2ab581883b7c0d82e5d4ed2a8', 2),
	(46, 'Nur Fauziah Eli Melsy', 'melsy', '5b20fc687fa44c7ed38a6ea789b417b0', 2),
	(47, 'Putri Agusti Nailaturrohamah', 'putriagusti', '468cf22eba0e2c01c1425e67fc9af552', 2),
	(48, 'Reyfaldo Maulana Rosyid', 'reyfaldo', 'e9c5b5b3f370a8abc64ffaf63ed9ca1c', 2),
	(49, 'Rizky Andriano', 'andriano', 'dc52fca6596ef269adba0b2f2ba2e438', 2),
	(50, 'Shobibar Ridlwan', 'shobibar', '75ca7aaeb39e8daed287e68ec32dd679', 2),
	(51, 'Siti Kholifah', 'kholifah', '5948c628077e6a02b9b7885bfd6b07b1', 2),
	(52, 'Sukma Maulida Hidayati', 'sukma', 'fcfce9432eb70d62ea41d979f1576b00', 2),
	(53, 'Ulya Zumrotul Muwahidah', 'ulya', '278704eef0c87e7426f40f51c95b375b', 2),
	(54, 'Yoshi Arwan Zullatatif', 'yoshi', '3d8829fefb8fe6f0df44a76f14c449d2', 2),
	(55, 'Yanuharti Widi', 'yanuharti', '3f6799e0d5294c581d8397e4f84cfb74', 2),
	(56, 'M. Davin Berliano', 'davin', '8b900377fc9a207bfcb21c0e4ee88cff', 2),
	(57, 'Abdillah Aziz', 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 2),
	(58, 'Alfina Tryanor Fandhini', 'alfina', 'a0eed44fc04e77ec2da2b0b526658728', 2),
	(59, 'Anggun Tyas Ayu Ramadhani', 'angguntyas', 'de8baf8bd66788163c50a68cdd78118e', 2),
	(60, 'Aufa Ihabi', 'aufaihabi', 'e625167168b03b3e931f3aba24bbf24e', 2),
	(61, 'Aulia Rivya', 'auliarivya', 'e47ee1f10628639958519925a3d35821', 2),
	(62, 'Azizatun Nafi\'ah', 'azizatun', '21c9eddeed5ae8edb557e7f638c7be30', 2),
	(63, 'Cantika Aulia Rahma', 'cantikaaulia', 'c67d98f5f9d2a63880c4e0dba28711f5', 2),
	(64, 'Delfinna Fitro Tuzzida', 'delfinna', '9b8a3788901ca59344706019dc072a69', 2),
	(65, 'Muhammad Rofiq Fatoni', 'rofiq', '412e17dc011ab47d95f7efc264b3fb49', 2),
	(66, 'Nadira Alif Fatul Kholifah', 'nadira', 'a32f7892ab14b322eb2a1a9132717efe', 2),
	(67, 'Rizka Syarifatul Maulida', 'rizka', 'aef2c231d5e776c0e0656eaf68767848', 2),
	(68, 'Shofiana Salsabyla', 'shofiana', 'fd23b7914049060dcf8146be5d4c2e11', 2),
	(69, 'Ulin Nihaayah', 'ulin', '256f401c494288d80229f2e039264b1b', 2),
	(70, 'Vesta Lingga Loka', 'vestalingga', 'd0e4c436bc16b736b25c63743ea05d59', 2),
	(71, 'Ahmad Fathan Karim', 'fathankarim', '9e39d835229f749179d46dae37449082', 2),
	(72, 'Ahmad Jamal Manshur', 'jamal', '74f56399c89f4bd03ff5e85b6bf4e85f', 2),
	(73, 'Ahmad Riadi', 'ahmadriadi', 'b98f50aac68435eef38945e1f9599e44', 2),
	(74, 'Anggun Khowatim', 'khowatim', '8e3e5b8698038e4e21aa2298a8e6d2fd', 2),
	(75, 'Arif Nur Rahman', 'arifnur', '2af55ace029c0dbd6c5a9be64e07e660', 2),
	(76, 'Asatidzal Hakiim', 'asatidzal', '69f53f6e7cb87c0d98a20cd8cb9b4ec9', 2),
	(77, 'Aulia Fatmawati', 'fatmawati', '59db7c7e3eff6a593c0bae82ad3666c7', 2),
	(78, 'Dwi Hidayatul Khoiriyah', 'dwihidayatul', '05edafb564fb0cae9546aef4abd48f72', 2),
	(79, 'Elok Nuraini', 'eloknur', 'df66b20c16709880fc885ccbf99467d8', 2),
	(80, 'Faathir Al-A\'Raaffi Arby', 'faathir', '71921ca716eb7c088e2191f197b99e1d', 2),
	(81, 'Faruq Arzaky Nuryandino', 'faruq', '8e9f4806d6cdc02e0a064110e8070571', 2),
	(82, 'Indra Muhammad Waqhibul Qohar', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 2),
	(83, 'Kevin Azriel Hartanto', 'kevinazriel', 'f3012ee1179ca42cc7c2a3009840f784', 2),
	(84, 'Muhammad Fahrur Rozi', 'fahrurrozi', 'a37f07563e49527e5e33bc72a3e3c832', 2),
	(85, 'Muhammad Fauzi Afandi', 'fauziafandi', 'a37f07563e49527e5e33bc72a3e3c832', 2),
	(86, 'Maulidah Fitri Khasanah', 'maulidah', 'd0670592f4e812e4e94990fe8bf1a587', 2),
	(87, 'Mohammad Fadhil Al-Fakhri', 'fadhil', 'fc646ab58bc3535f15cebaf9caa144e6', 2),
	(88, 'Muhammad Dihya Al Qolbi ', 'dihya', '8847021b23308cd0bce1b91d89f79654', 2),
	(89, 'Muhammad Fatih Fuady', 'fatihfuady', '1d109f492e1a2feacbf75cd42ed969be', 2),
	(90, 'Najma Faricha', 'najmafaricha', 'e5b9ae3ccaab55b2db823c165dbf5572', 2),
	(91, 'Nata Dwi Rhama Sakti ', 'natadwi', 'a110f0daa6400898b739a3cef62daf5e', 2),
	(92, 'Nayla Azkiya', 'naylaazkiya', '2fb6e9b174d912d21f1dce3405831969', 2),
	(93, 'Raafi Hafidz Wardono', 'raafi', '1d2d80398ac021d3817f1f4134b44f66', 2),
	(94, 'Rangga Aji Pratama', 'rangga', '863c2a4b6bff5e22294081e376fc1f51', 2),
	(95, 'Rizky Alif Khoirul Anam', 'rizkyalif', '911c69f979256dd3f2865fb32721ba19', 2),
	(96, 'Sholihin Ilham Nur Ridhwan', 'sholihin', '9767617d286835b82955486d86e338d8', 2),
	(97, 'Amalizatul Hammi', 'amalizatul', '81848b587a577678084cbc88b4dadf99', 2),
	(98, 'Sella Ayunia', 'sellaayunia', '5b76e58ebc70c0fb414ff87bb31be76d', 2),
	(99, 'Nur Mufidatul Hasanah', 'nurmufidatul', '820febc4b08961e730d6f21cecb99fc1', 2),
	(100, 'Azkya Aulia Maghfirany', 'azkya', '3380bcfa73972ca243326287c1ad5432', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
