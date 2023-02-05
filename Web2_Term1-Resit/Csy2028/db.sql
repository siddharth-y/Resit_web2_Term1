-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `categoryId` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `publishDate` date NOT NULL,
  PRIMARY KEY (`categoryId`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `article` (`categoryId`, `title`, `content`, `publishDate`) VALUES
(1,	'Test',	'asnfoiasnfufnhapdsvjdvimjjfpojjevinxivnsvn',	'2022-10-10');

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `categoryID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `category` (`categoryID`, `title`) VALUES
(1,	'Sports'),
(3,	'Local News'),
(4,	'Technology'),
(5,	'Latest News');

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user_info` (`username`, `email`, `password`) VALUES
('admin',	'admin@admin.com',	'$2y$10$Ksp8.zUSQ/FtqZUHVD9iDuILDcEBLSF2bgOGs1.FosGQMrWjFIwcK'),
('user',	'user@user.com',	'$2y$10$0b3yZwRuzCAQA99nZEcgGesIKLDI1jlqICk5QQyDl8o7oF5JeJ9ou');

-- 2022-09-25 16:52:22
