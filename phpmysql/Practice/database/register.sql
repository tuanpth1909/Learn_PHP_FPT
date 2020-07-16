CREATE DATABASE practice;
USE practice;
CREATE TABLE register (
  id int(11) NOT NULL,
  fullname varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  PRIMARY KEY(id)) ENGINE=InnoDB
  ALTER TABLE register
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;