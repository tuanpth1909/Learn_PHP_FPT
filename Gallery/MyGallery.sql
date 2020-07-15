CREATE DATABASE gallery;
USE gallery;
CREATE TABLE mygallery
(
  idGallery int(11) AUTO_INCREMENT,
  titleGallery longtext CHARACTER SET latin1 NOT NULL,
  descGallety longtext CHARACTER SET latin1 NOT NULL,
  imgFullNameGallery longtext CHARACTER SET latin1 NOT NULL,
  orderGallery int(11),
    PRIMARY KEY (idGallery)) ENGINE INNODB;
