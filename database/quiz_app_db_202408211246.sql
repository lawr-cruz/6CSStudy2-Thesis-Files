﻿--
-- Script was generated by Devart dbForge Studio 2022 for MySQL, Version 9.1.21.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 21/08/2024 12:46:56 pm
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
AVG_ROW_LENGTH = 131,
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
  no_of_attempts decimal(11, 2) DEFAULT 0.00,
  created_by int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by int DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  deleted_by int DEFAULT NULL,
  deleted_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 2730,
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
AUTO_INCREMENT = 31,
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
AVG_ROW_LENGTH = 528,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

-- 
-- Dumping data for table user_question_answers
--
-- Table quiz_app_db.user_question_answers does not contain any data (it is empty)

-- 
-- Dumping data for table users
--
INSERT INTO users VALUES
(1, '111-111', 'admin', '$2y$10$FvMxMZrntfgllNVl90tDbenxa6vPX.KKEfhtLo223tjIfEtQ/Yt42', 'ADMINISTRATOR', NULL, 'ADMINISTRATOR', '1998-07-30', 'MALE', '09614844561', 'MANILA', 1, 1, 1, '2024-08-10 20:24:31', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table quiz_history
--
-- Table quiz_app_db.quiz_history does not contain any data (it is empty)

-- 
-- Dumping data for table questions
--
INSERT INTO questions VALUES
(1, 1, 'What is the sum of 2/9  and  2/9?', '4/18', '4/9', '1/9', '2/18', '4/9', 1, '2024-08-21 12:20:27', NULL, NULL, NULL, NULL),
(2, 1, 'What is the sum of  2/12  and  8/12?', '8/12', '5/6', '12/6', '2/12', '5/6', 1, '2024-08-21 12:20:52', NULL, NULL, NULL, NULL),
(3, 1, 'What is the product of  3/10  and  2/3?', '2/30', '6/5', '1/30', '1/5', '1/5', 1, '2024-08-21 12:21:37', NULL, NULL, NULL, NULL),
(4, 1, 'What is the sum of  7 7/9  and  1/9?', '7 4/9', '7 8/9', '7 1/3', '7 7/9', '7 8/9', 1, '2024-08-21 12:22:40', NULL, NULL, NULL, NULL),
(5, 1, 'What is the sum of  9 2/6  and  3/6?', '9 5/6', '9 3/6', '9 2/12', '9 5/12', '9 5/6', 1, '2024-08-21 12:23:45', NULL, NULL, NULL, NULL),
(6, 1, 'What is 7 multiplied by  4/8?', '3 1/2', '3 1/8', '7 1/3', '7 1/2', '3 1/2', 1, '2024-08-21 12:30:59', NULL, NULL, NULL, NULL),
(7, 1, 'What is 9 multiplied by  7/10?', '9 3/10', '6 3/10', '6 3/90', '6 1/90', '6 3/10', 1, '2024-08-21 12:31:49', NULL, NULL, NULL, NULL),
(8, 1, 'What is 8 multiplied by  3/10?', '8 2/5', '2 24/5', '2 2/5', '8 24/5', '2 2/5', 1, '2024-08-21 12:32:28', NULL, NULL, NULL, NULL),
(9, 1, 'What is 10 divided by  1/2?', '5', '2', '20', '10', '20', 1, '2024-08-21 12:32:56', NULL, NULL, NULL, NULL),
(10, 1, 'What is 8 divided by  1/2?', '4', '2', '8', '16', '8', 1, '2024-08-21 12:33:19', NULL, NULL, NULL, NULL),
(11, 2, 'What is 3/4 + 1/2?', '1', '5/4', '3/2', '7/4', '3/2', 1, '2024-08-21 12:34:34', NULL, NULL, NULL, NULL),
(12, 2, 'What is 5/6 - 1/3?', '1/2', '2/3', '1/3', '1/6', '1/2', 1, '2024-08-21 12:34:51', NULL, NULL, NULL, NULL),
(13, 2, 'What is 7/8 × 2/3?', '7/24', '14/24', '14/25', '7/12', '7/12', 1, '2024-08-21 12:35:09', NULL, NULL, NULL, NULL),
(14, 2, 'What is 5/9 ÷ 2/3?', '5/6', '15/18', '5/12', '15/9', '5/6', 1, '2024-08-21 12:35:30', NULL, NULL, NULL, NULL),
(15, 2, 'What is the simplified form of 8/12?', '2/3', '3/4', '4/6', '2/4', '2/3', 1, '2024-08-21 12:35:46', NULL, NULL, NULL, NULL),
(16, 2, 'What is 3/5 of 25?', '15', '10', '12', '20', '15', 1, '2024-08-21 12:36:01', NULL, NULL, NULL, NULL),
(17, 2, 'Which fraction is equivalent to 4/6?', '2/3', '1/3', '3/4', '1/2', '2/3', 1, '2024-08-21 12:36:17', NULL, NULL, NULL, NULL),
(18, 2, 'What is 5/8 + 3/16?', '8/24', '13/16', '5/16', '7/8', '13/16', 1, '2024-08-21 12:36:36', NULL, NULL, NULL, NULL),
(19, 2, 'What is the reciprocal of 7/9?', '9/7', '7/9', '1/7', '1/9', '9/7', 1, '2024-08-21 12:36:55', NULL, NULL, NULL, NULL),
(20, 2, 'What is 4 1/2 as an improper fraction?', '9/2', '5/2', '11/2', '8/2', '9/2', 1, '2024-08-21 12:37:16', NULL, NULL, NULL, NULL),
(21, 3, 'Natalie is baking 2 different batches of cookies. One batch needs  3/4  cup of sugar and the other batch needs  2/4  cup of sugar. How much sugar is needed to bake both batches of cookies?', '1 1/4', '5/8', '1 2/4', '1 4/8', '1 1/4', 1, '2024-08-21 12:38:22', NULL, NULL, NULL, NULL),
(22, 3, 'Vita has a piece of ribbon that is 5 meters long. She cuts the ribbon into pieces that are each 1/3 meter long. How many pieces does she cut?', '15', '3', '5', '12', '15', 1, '2024-08-21 12:38:42', NULL, NULL, NULL, NULL),
(23, 3, 'Maria spent 1/3 of the money her grandparents gave her on an adventure book.  She also spent 1/9  of the money on a bag of candy. What fraction of the payment has Maria spent?', '4/9', '3/9', '4/18', '3/18', '4/9', 1, '2024-08-21 12:39:06', NULL, NULL, NULL, NULL),
(24, 3, 'Sunita and Rehana want to make dresses for their dolls. Sunita has 3/4 m of cloth, and she gave 1/3 of it to Rehana. How much did Rehana have?', '4/12', '3/4', '3/12', '1/4', '1/4', 1, '2024-08-21 12:39:22', NULL, NULL, NULL, NULL),
(25, 3, 'Anuradha can do a piece of work in 6 hours. What part of the work can she do in 1 hour?', '1/6', '5/6', '1/5', '2/6', '1/6', 1, '2024-08-21 12:39:48', NULL, NULL, NULL, NULL),
(26, 3, 'Evan pours 4/5 of a liter of orange juice evenly among some cups. He put 1/10  of a liter into each cup. How many cups did Evan fill?', '2/25', '8', '9/10', '7', '8', 1, '2024-08-21 12:40:15', NULL, NULL, NULL, NULL),
(27, 3, 'Lila poured 11/12 cup of pineapple and 2/3 cup of mango juice in a bottle. How many cups of juice did she pour into the bottle altogether?', '1 7/12', '1/4', '11/8', '1 3/8', '1 7/12', 1, '2024-08-21 12:40:36', NULL, NULL, NULL, NULL),
(28, 3, 'Malia spent 5/6 of an hour studying for a math test. Then she spent  1/3   of an hour reading. How much longer did she spend studying for her math test than reading?', 'MALIA SPENT 1/2 OF AN HOUR LONGER STUDYING FOR HER MATH TEST THAN READING', 'MALIA SPENT 5/8 OF AN HOUR LONGER STUDYING FOR HER MATH TEST THAN READING', 'MALIA SPENT 1/2 OF AN HOUR LONGER READING FOR HER MATH TEST THAN STUDYING', 'MALIA SPENT 1 1/2 OF AN HOUR LONGER STUDYING FOR HER MATH TEST THAN READING', 'MALIA SPENT 1/2 OF AN HOUR LONGER STUDYING FOR HER MATH TEST THAN READING', 1, '2024-08-21 12:41:16', NULL, NULL, NULL, NULL),
(29, 3, 'Andre has 3/4 of a candy bar left. He gives 1/2  of the remaining bit of the candy bar to his sister. What fraction of the whole candy bar does Andre have left now?', '4/8', '1/4', '3/4', '3/8', '3/8', 1, '2024-08-21 12:41:42', NULL, NULL, NULL, NULL),
(30, 3, 'Henry bought 7/8pound of beef from the grocery store. He used 1/3 of a pound of beef to make a hamburger. How much of the beef does he have left?', '3/8', '1/8', '6/24', '13/24', '13/24', 1, '2024-08-21 12:42:02', NULL, NULL, NULL, NULL);

-- 
-- Dumping data for table activity_logs
--
-- Table quiz_app_db.activity_logs does not contain any data (it is empty)

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;