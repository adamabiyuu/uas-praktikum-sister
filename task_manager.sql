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


-- Dumping database structure for task_manager
CREATE DATABASE IF NOT EXISTS `task_manager` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `task_manager`;

-- Dumping structure for table task_manager.pekerja
CREATE TABLE IF NOT EXISTS `pekerja` (
  `id_pekerja` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `nama_pekerja` varchar(255) NOT NULL,
  `posisi_pekerja` varchar(100) DEFAULT NULL,
  `gaji_pekerja` decimal(10,2) DEFAULT NULL,
  `alamat_pekerja` text,
  PRIMARY KEY (`id_pekerja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table task_manager.pekerja: ~3 rows (approximately)
REPLACE INTO `pekerja` (`id_pekerja`, `nama_pekerja`, `posisi_pekerja`, `gaji_pekerja`, `alamat_pekerja`) VALUES
	('1', 'John Doe', 'Analyst', 60000.00, '123 Main St'),
	('2', 'Jane Smith', 'Developer', 70000.00, '456 Oak St'),
	('3', 'Bob Johnson', 'Designer', 65000.00, '789 Pine St');

-- Dumping structure for table task_manager.proyek
CREATE TABLE IF NOT EXISTS `proyek` (
  `id_proyek` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `nama_proyek` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status_proyek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table task_manager.proyek: ~3 rows (approximately)
REPLACE INTO `proyek` (`id_proyek`, `nama_proyek`, `tanggal_mulai`, `tanggal_selesai`, `status_proyek`) VALUES
	('1', 'Proyek A', '2023-01-01', '2023-12-14', 'On Progress'),
	('2', 'Proyek B', '2023-02-15', '2023-12-14', 'Pending'),
	('3', 'Proyek C', '2023-03-10', '2023-12-13', 'Completed');

-- Dumping structure for table task_manager.tugas
CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `id_proyek` varchar(50) DEFAULT NULL,
  `deskripsi_tugas` text NOT NULL,
  `tanggal_mulai_tugas` date NOT NULL,
  `tanggal_selesai_tugas` date DEFAULT NULL,
  `status_tugas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tugas`),
  KEY `FK_tugas_proyek` (`id_proyek`),
  CONSTRAINT `FK_tugas_proyek` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table task_manager.tugas: ~4 rows (approximately)
REPLACE INTO `tugas` (`id_tugas`, `id_proyek`, `deskripsi_tugas`, `tanggal_mulai_tugas`, `tanggal_selesai_tugas`, `status_tugas`) VALUES
	('1', '1', 'Tugas 1 Proyek A', '2023-01-02', NULL, 'In Progress'),
	('2', '1', 'Tugas 2 Proyek A', '2023-01-05', NULL, 'Completed'),
	('3', '2', 'Tugas 1 Proyek B', '2023-02-20', NULL, 'Pending'),
	('4', '3', 'Tugas 1 Proyek C', '2023-03-12', NULL, 'In Progress');

-- Dumping structure for table task_manager.tugas_pekerja
CREATE TABLE IF NOT EXISTS `tugas_pekerja` (
  `id_tugas` varchar(50) NOT NULL DEFAULT '',
  `id_pekerja` varchar(50) NOT NULL DEFAULT '',
  `id_tugas_pekerja` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  PRIMARY KEY (`id_tugas_pekerja`) USING BTREE,
  KEY `FK_tugas_pekerja_tugas` (`id_tugas`),
  KEY `FK_tugas_pekerja_pekerja` (`id_pekerja`),
  CONSTRAINT `FK_tugas_pekerja_pekerja` FOREIGN KEY (`id_pekerja`) REFERENCES `pekerja` (`id_pekerja`),
  CONSTRAINT `FK_tugas_pekerja_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table task_manager.tugas_pekerja: ~4 rows (approximately)
REPLACE INTO `tugas_pekerja` (`id_tugas`, `id_pekerja`, `id_tugas_pekerja`) VALUES
	('1', '1', '1'),
	('1', '2', '2'),
	('2', '2', '3'),
	('3', '3', '4');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
