CREATE DATABASE doings_bd
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE doings_bd;

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` char(64) NOT NULL,
  `password` char(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_registration` TIMESTAMP(0) DEFAULT CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE `projects` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
   FOREIGN KEY (user_id)  REFERENCES users(id)
);

CREATE TABLE `tasks` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `date_creation` TIMESTAMP(0) DEFAULT CURRENT_TIMESTAMP,
  `status` boolean NOT NULL DEFAULT 0,
  `task_name` varchar(255) NOT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `date_of_task` TIMESTAMP(0) DEFAULT NULL,
   FOREIGN KEY (project_id)  REFERENCES projects(id),
   FOREIGN KEY (user_id)  REFERENCES users(id)
);
