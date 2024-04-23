-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
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


-- Dumping database structure for membercrud
CREATE DATABASE IF NOT EXISTS `membercrud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `membercrud`;

-- Dumping structure for table membercrud.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact` (`contact`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table membercrud.members: ~2 rows (approximately)
INSERT INTO `members` (`id`, `fullname`, `contact`, `address`, `email`, `stat`) VALUES
	(113, 'Yro Emz', '0910425638434', 'San Nicolas', 'tyrone@clearmindai.com', 0),
	(115, 'Tyrone Malocon', '09123172736', 'San Nicolas', 'tyronemalocon@gmail.com', 0);

-- Dumping structure for table membercrud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table membercrud.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
	(1, 'admin', 'admin', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
