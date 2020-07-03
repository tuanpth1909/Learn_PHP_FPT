CREATE DATABASE login;
USE login;
CREATE TABLE register
(
    userid char(10) AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    email varchar(50),
    phone varchar(50),
    fullname varchar(100),
    PRIMARY KEY (userid)) ENGINE INNODB;