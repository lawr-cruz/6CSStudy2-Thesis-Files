﻿--
-- Script was generated by Devart dbForge Studio 2022 for MySQL, Version 9.1.21.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 18/08/2024 10:46:51 am
-- Server version: 8.0.30
-- Client version: 4.1
--

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

--
-- Set default database
--
USE quiz_app_db;

--
-- Drop table `activity_logs`
--
DROP TABLE IF EXISTS activity_logs;

--
-- Drop table `questions`
--
DROP TABLE IF EXISTS questions;

--
-- Drop table `quiz_history`
--
DROP TABLE IF EXISTS quiz_history;

--
-- Drop table `users`
--
DROP TABLE IF EXISTS users;

--
-- Drop table `user_question_answers`
--
DROP TABLE IF EXISTS user_question_answers;

--
-- Set default database
--
USE quiz_app_db;

--
-- Create table `user_question_answers`
--
CREATE TABLE user_question_answers (
  id int NOT NULL AUTO_INCREMENT,
  user_id int DEFAULT NULL,
  question_id int DEFAULT NULL,
  answer varchar(255) DEFAULT NULL,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 100,
AVG_ROW_LENGTH = 172,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `users`
--
CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  lrn varchar(255) DEFAULT NULL,
  username varchar(255) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  first_name varchar(255) DEFAULT NULL,
  middle_name varchar(255) DEFAULT NULL,
  last_name varchar(255) DEFAULT NULL,
  dob date DEFAULT NULL,
  gender varchar(255) DEFAULT NULL,
  contact_no varchar(255) DEFAULT NULL,
  address varchar(2000) DEFAULT NULL,
  role_id int DEFAULT NULL,
  is_activated tinyint DEFAULT 0,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 6,
AVG_ROW_LENGTH = 5461,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `quiz_history`
--
CREATE TABLE quiz_history (
  id int NOT NULL AUTO_INCREMENT,
  user_id int DEFAULT NULL,
  category_id int DEFAULT NULL,
  score decimal(11, 2) DEFAULT NULL,
  no_of_questions decimal(11, 2) DEFAULT NULL,
  remarks varchar(255) DEFAULT NULL,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 13,
AVG_ROW_LENGTH = 1489,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `questions`
--
CREATE TABLE questions (
  id int NOT NULL AUTO_INCREMENT,
  category_id int DEFAULT NULL,
  question varchar(2000) DEFAULT NULL,
  option_a varchar(2000) DEFAULT NULL,
  option_b varchar(2000) DEFAULT NULL,
  option_c varchar(2000) DEFAULT NULL,
  option_d varchar(2000) DEFAULT NULL,
  answer varchar(2000) DEFAULT NULL,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 32,
AVG_ROW_LENGTH = 2048,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `activity_logs`
--
CREATE TABLE activity_logs (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  action_taken varchar(4000) DEFAULT NULL,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 32,
AVG_ROW_LENGTH = 528,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

-- 
-- Dumping data for table user_question_answers
--
INSERT INTO user_question_answers VALUES
(1, 2, 1, '4/18', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(2, 2, 2, '5/6', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(3, 2, 3, '2/5', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(4, 2, 4, '11/2', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(5, 2, 5, '12/4', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(6, 2, 6, '21/5', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(7, 2, 7, '36/7', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(8, 2, 8, '8/6', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(9, 2, 9, '25', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(10, 2, 10, '6', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(11, 2, 11, '1/4', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(12, 2, 12, '2/7', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(13, 2, 13, '1/9', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(14, 2, 14, '1/12', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(15, 2, 15, '20', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(16, 2, 16, '14', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(17, 2, 17, '10/42', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(18, 2, 18, '21/32', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(19, 2, 19, '9/9', 2, '2024-08-10 19:24:27', NULL, NULL, NULL, NULL),
(20, 2, 1, '4/18', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(21, 2, 1, '12/6', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(22, 2, 1, '2/5', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(23, 2, 1, '14/2', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(24, 2, 1, '12/4', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(25, 2, 1, '15/5', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(26, 2, 1, '36/7', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(27, 2, 1, '8/6', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(28, 2, 1, '25', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(29, 2, 1, '8', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(30, 2, 1, '1/2', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(31, 2, 1, '8/35', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(32, 2, 1, '1/9', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(33, 2, 1, '3/12', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(34, 2, 1, '20', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(35, 2, 1, '14', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(36, 2, 1, '10/42', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(37, 2, 1, '21/32', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(38, 2, 1, '9/9', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(39, 2, 1, '4/9', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(40, 2, 1, '12/6', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(41, 2, 1, '2/5', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(42, 2, 1, '12/2', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(43, 2, 1, '6/4', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(44, 2, 1, '7/5', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(45, 2, 1, '36/7', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(46, 2, 1, '8/6', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(47, 2, 1, '5', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(48, 2, 1, '8', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(49, 2, 1, '1/4', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(50, 2, 1, '1/7', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(51, 2, 1, '1/9', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(52, 2, 1, '1/12', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(53, 2, 1, '10', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(54, 2, 1, '14', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(55, 2, 1, '10/42', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(56, 2, 1, '21/28', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(57, 2, 1, '9/9', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(58, 2, 27, '4/18', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(59, 2, 27, '5/6', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(60, 2, 27, '2/30', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(61, 2, 27, '7 4/9', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(62, 2, 27, '9 5/6', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(63, 2, 27, '4/9', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(64, 2, 27, '5/6', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(65, 2, 27, '1/5', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(66, 2, 27, '7 8/9', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(67, 2, 27, '9 5/6', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(68, 2, 27, '4/9', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(69, 2, 27, '5/6', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(70, 2, 27, '1/5', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(71, 2, 27, '7 8/9', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(72, 2, 27, '9 5/6', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(73, 2, 27, '4/9', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(74, 2, 28, '8/12', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(75, 2, 29, '2/30', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(76, 2, 30, '7 4/9', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(77, 2, 31, '9 5/6', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(78, 2, 27, '4/9', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(79, 2, 28, '5/6', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(80, 2, 29, '1/5', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(81, 2, 30, '7 8/9', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(82, 2, 31, '9 5/6', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(83, 5, 27, '4/18', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(84, 5, 28, '5/6', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(85, 5, 29, '2/30', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(86, 5, 30, '7 8/9', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(87, 5, 31, '9 5/6', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(88, 5, 27, '2/18', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(89, 5, 28, '2/12', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(90, 5, 29, '1/5', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(91, 5, 30, '7 7/9', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(92, 5, 31, '9 5/12', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(93, 5, 27, '4/9', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(94, 5, 28, '5/6', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(95, 5, 29, '1/5', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(96, 5, 30, '7 8/9', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(97, 5, 31, '9 5/6', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(98, 5, 23, '3/2', 5, '2024-08-11 11:27:47', NULL, NULL, NULL, NULL),
(99, 5, 24, '1/2', 5, '2024-08-11 11:27:47', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table users
--
INSERT INTO users VALUES
(1, '111-111', 'admin', '$2y$10$FvMxMZrntfgllNVl90tDbenxa6vPX.KKEfhtLo223tjIfEtQ/Yt42', 'ADMINISTRATOR', NULL, 'ADMINISTRATOR', '1998-07-30', 'MALE', '09614844561', 'MANILA', 1, 1, 1, '2024-08-10 20:24:31', NULL, NULL, NULL, NULL),
(2, '222-222', 'student1', '$2y$10$E4YsuQ/AL0.JF7/L5UscB.nqigcdpGpcExcGe.bfPNcK1n6NJVCWi', 'STUDENT', NULL, 'STUDENT', '2000-08-06', 'MALE', '09614844561', 'manila', 2, 1, 1, '2024-08-10 00:00:00', 2, '2024-08-10 20:21:19', NULL, NULL),
(4, NULL, 'STUDENT2', '$2y$10$RxQFN/rkz/QOgjMc9d6g7.zMd5lf34puWy3tXHhw2RPyKrT5LA4wK', 'STUDENT 2', NULL, 'STUDENT 2', '1998-07-29', 'MALE', '09614844561', 'MANILA', 2, 1, 1, '2024-08-10 20:36:22', NULL, NULL, NULL, NULL),
(5, NULL, 'student3', '$2y$10$b5TyE/DqsoSx08PD1YcpC.1fdtEcajynR1kNIXvGWXvRwYxb5cdLG', 'JUAN', NULL, 'DELA CRUZ', '2008-07-30', 'MALE', '09614844561', 'MANILA', 2, 1, 1, '2024-08-11 11:17:53', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table quiz_history
--
INSERT INTO quiz_history VALUES
(1, 2, 1, 0.00, 19.00, 'FAIL', 2, '2024-08-10 19:35:11', NULL, NULL, NULL, NULL),
(2, 2, 1, 1.00, 19.00, 'FAIL', 2, '2024-08-10 19:36:00', NULL, NULL, NULL, NULL),
(4, 2, 1, 0.00, 5.00, 'FAIL', 2, '2024-08-11 10:43:05', NULL, NULL, NULL, NULL),
(5, 2, 1, 1.00, 5.00, 'FAIL', 2, '2024-08-11 10:43:32', NULL, NULL, NULL, NULL),
(6, 2, 1, 1.00, 5.00, 'FAIL', 2, '2024-08-11 10:44:18', NULL, NULL, NULL, NULL),
(7, 2, 1, 2.00, 5.00, 'FAIL', 2, '2024-08-11 11:03:25', NULL, NULL, NULL, NULL),
(8, 2, 1, 5.00, 5.00, 'PASS', 2, '2024-08-11 11:04:02', NULL, NULL, NULL, NULL),
(9, 5, 1, 3.00, 5.00, 'PASS', 5, '2024-08-11 11:23:42', NULL, NULL, NULL, NULL),
(10, 5, 1, 1.00, 5.00, 'FAIL', 5, '2024-08-11 11:24:57', NULL, NULL, NULL, NULL),
(11, 5, 1, 5.00, 5.00, 'PASS', 5, '2024-08-11 11:27:28', NULL, NULL, NULL, NULL),
(12, 5, 2, 2.00, 2.00, 'PASS', 5, '2024-08-11 11:27:47', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table questions
--
INSERT INTO questions VALUES
(23, 2, 'What is 3/4 + 1/2?', '1', '5/4', '3/2', '7/4', '3/2', 1, '2024-08-11 10:34:07', NULL, NULL, NULL, NULL),
(24, 2, 'What is 5/6 - 1/3?', '1/2', '2/3', '1/3', '1/6', '1/2', 1, '2024-08-11 10:34:30', NULL, NULL, NULL, NULL),
(25, 3, 'Natalie is baking 2 different batches of cookies. One batch needs 3/4 cup of sugar and the other batch needs 2/4 cup of sugar. How much sugar is needed to bake both batches of cookies?', '1 1/4', '5/8', '1 2/4', '1 4/8', '1 1/4', 1, '2024-08-11 10:35:31', NULL, NULL, NULL, NULL),
(26, 3, 'Vita has a piece of ribbon that is 5 meters long. She cuts the ribbon into pieces that are each 1/3 meter long. How many pieces does she cut?', '15', '3', '5', '12', '15', 1, '2024-08-11 10:35:56', NULL, NULL, NULL, NULL),
(27, 1, 'What is the sum of 2/9 and 2/9?', '4/18', '4/9', '1/9', '2/18', '4/9', 1, '2024-08-11 10:39:37', NULL, NULL, NULL, NULL),
(28, 1, 'What is the sum of 2/12 and 8/12?', '8/12', '5/6', '12/6', '2/12', '5/6', 1, '2024-08-11 10:40:06', NULL, NULL, NULL, NULL),
(29, 1, 'What is the product of 3/10 and 2/3?', '2/30', '6/5', '1/30', '1/5', '1/5', 1, '2024-08-11 10:40:48', NULL, NULL, NULL, NULL),
(30, 1, 'What is the sum of 7 7/9 and 1/9?', '7 4/9', '7 8/9', '7 1/3', '7 7/9', '7 8/9', 1, '2024-08-11 10:41:50', NULL, NULL, NULL, NULL),
(31, 1, 'What is the sum of 9 2/6 and 3/6?', '9 5/6', '9 3/6', '9 2/12', '9 5/12', '9 5/6', 1, '2024-08-11 10:42:30', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table activity_logs
--
INSERT INTO activity_logs VALUES
(1, 'LOGIN', 2, '2024-08-10 17:40:33', NULL, NULL, NULL, NULL),
(2, 'LOGIN', 2, '2024-08-10 17:40:38', NULL, NULL, NULL, NULL),
(3, 'LOGIN', 2, '2024-08-10 17:40:40', NULL, NULL, NULL, NULL),
(4, 'LOGIN', 2, '2024-08-10 17:40:51', NULL, NULL, NULL, NULL),
(5, 'LOGOUT', 2, '2024-08-10 18:11:15', NULL, NULL, NULL, NULL),
(6, 'LOGIN', 2, '2024-08-10 18:11:37', NULL, NULL, NULL, NULL),
(7, 'LOGIN', 2, '2024-08-10 18:16:14', NULL, NULL, NULL, NULL),
(8, 'LOGOUT', 2, '2024-08-10 20:21:24', NULL, NULL, NULL, NULL),
(9, 'LOGIN', 1, '2024-08-10 20:25:11', NULL, NULL, NULL, NULL),
(10, 'LOGOUT', 1, '2024-08-10 21:04:45', NULL, NULL, NULL, NULL),
(11, 'LOGIN', 2, '2024-08-10 21:04:58', NULL, NULL, NULL, NULL),
(12, 'LOGIN', 2, '2024-08-10 21:15:15', NULL, NULL, NULL, NULL),
(13, 'LOGIN', 2, '2024-08-11 10:31:30', NULL, NULL, NULL, NULL),
(14, 'LOGOUT', 2, '2024-08-11 10:31:52', NULL, NULL, NULL, NULL),
(15, 'LOGIN', 1, '2024-08-11 10:31:58', NULL, NULL, NULL, NULL),
(16, 'LOGOUT', 1, '2024-08-11 10:36:05', NULL, NULL, NULL, NULL),
(17, 'LOGIN', 2, '2024-08-11 10:36:10', NULL, NULL, NULL, NULL),
(18, 'LOGOUT', 2, '2024-08-11 10:38:55', NULL, NULL, NULL, NULL),
(19, 'LOGIN', 1, '2024-08-11 10:38:58', NULL, NULL, NULL, NULL),
(20, 'LOGOUT', 1, '2024-08-11 10:42:36', NULL, NULL, NULL, NULL),
(21, 'LOGIN', 1, '2024-08-11 10:42:39', NULL, NULL, NULL, NULL),
(22, 'LOGOUT', 1, '2024-08-11 10:42:49', NULL, NULL, NULL, NULL),
(23, 'LOGIN', 2, '2024-08-11 10:42:55', NULL, NULL, NULL, NULL),
(24, 'LOGIN', 1, '2024-08-11 11:16:30', NULL, NULL, NULL, NULL),
(25, 'LOGOUT', 1, '2024-08-11 11:22:05', NULL, NULL, NULL, NULL),
(26, 'LOGIN', 5, '2024-08-11 11:22:14', NULL, NULL, NULL, NULL),
(27, 'LOGIN', 1, '2024-08-18 10:10:51', NULL, NULL, NULL, NULL),
(28, 'LOGOUT', 1, '2024-08-18 10:11:19', NULL, NULL, NULL, NULL),
(29, 'LOGIN', 1, '2024-08-18 10:11:42', NULL, NULL, NULL, NULL),
(30, 'LOGOUT', 1, '2024-08-18 10:11:59', NULL, NULL, NULL, NULL),
(31, 'LOGIN', 2, '2024-08-18 10:12:05', NULL, NULL, NULL, NULL);

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;