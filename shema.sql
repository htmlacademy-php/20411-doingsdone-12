CREATE DATABASE doings-db
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE doings-db;

CREATE TABLE users (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  email char(64) NOT NULL,
  password char(255) NOT NULL,
  name char(64) NOT NULL,
  date_registration TIMESTAMP(0) DEFAULT CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE projects (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  project_name char(128) DEFAULT NULL,
  FOREIGN KEY (user_id)  REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS tasks (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  project_id int(11) NOT NULL,
  date_creation TIMESTAMP(0) DEFAULT CURRENT_TIMESTAMP,
  status boolean NOT NULL DEFAULT 0,
  task_name char(64) NOT NULL,
  file_url varchar(255) DEFAULT NULL,
  date_of_task TIMESTAMP(0) DEFAULT NULL,
  FOREIGN KEY (project_id)  REFERENCES projects(id)
);
