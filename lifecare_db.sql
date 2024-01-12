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


-- Dumping database structure for lifecare_db
CREATE DATABASE IF NOT EXISTS `lifecare_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lifecare_db`;

-- Dumping structure for table lifecare_db.appointment
CREATE TABLE IF NOT EXISTS `appointment` (
  `id_appointment` int NOT NULL AUTO_INCREMENT,
  `date_and_time` datetime NOT NULL,
  `id_patient` int NOT NULL DEFAULT '0',
  `id_clinic` int NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_appointment`),
  KEY `patient_appointment` (`id_patient`),
  KEY `clinic_appointment` (`id_clinic`),
  CONSTRAINT `clinic_appointment` FOREIGN KEY (`id_clinic`) REFERENCES `clinic` (`id_clinic`),
  CONSTRAINT `patient_appointment` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` int NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_blog`),
  KEY `user_blog` (`user_id`),
  CONSTRAINT `user_blog` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.clinic
CREATE TABLE IF NOT EXISTS `clinic` (
  `id_clinic` int NOT NULL AUTO_INCREMENT,
  `name_clinic` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `address` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `email_clinic` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_clinic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `problem` varchar(255) NOT NULL DEFAULT '',
  `user_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_contact`) USING BTREE,
  KEY `user_contact` (`user_id`),
  CONSTRAINT `user_contact` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `name_patient` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `phone_number` varchar(100) NOT NULL DEFAULT '',
  `email_patient` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_patient`),
  KEY `user_patient` (`id_user`),
  CONSTRAINT `user_patient` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.session
CREATE TABLE IF NOT EXISTS `session` (
  `id_session` int NOT NULL AUTO_INCREMENT,
  `register_at` datetime NOT NULL,
  `id_user` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_session`) USING BTREE,
  KEY `user_session` (`id_user`),
  CONSTRAINT `user_session` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table lifecare_db.vaccine
CREATE TABLE IF NOT EXISTS `vaccine` (
  `id_vaccine` int NOT NULL AUTO_INCREMENT,
  `id_appointment` int NOT NULL,
  `name_vaccine` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `age` int NOT NULL DEFAULT '0',
  `dose_vaccine` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_vaccine`),
  KEY `appointment_vaccine` (`id_appointment`),
  CONSTRAINT `appointment_vaccine` FOREIGN KEY (`id_appointment`) REFERENCES `appointment` (`id_appointment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
