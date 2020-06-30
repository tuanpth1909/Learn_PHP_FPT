CREATE DATABASE people;
USE people;

CREATE TABLE teacher(
    id varchar(10),
    name varchar(50),
    age int,
    address varchar(100),
    subject varchar(100),
    PRIMARY KEY (id)) ENGINE INNODB;

   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TT1V","Thinh",25,"Thai Nguyen","Vat Ly");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TP2A","Phuong",24,"Thai Nguyen","Tieng Anh");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TD3T","Do",30,"Ha Noi","Toan");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TD4S","Dung",27,"Thanh Hoa","Sinh Hoc");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TT5H","Trang",21,"Hung Yen","Hoa Hoc");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TH6V","Hue",23,"Bac Giang","Van");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TT7C","Trung",40,"Yen Bai","Cong Nghe");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TD8D","Dung",25,"Thai Nguyen","Dia Li");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TC9L","Cuong",28,"Tuyen Quang","Lich Su");
   INSERT INTO teacher(id, name, age, address, subject)
   VALUES ("TH10TD","Hoa",22,"Thai Nguyen","The Duc");


CREATE TABLE student(
    id varchar(10),
    name varchar(50),
    age int,
    address varchar(100),
    classification varchar(100),
    PRIMARY KEY (id)) ENGINE INNODB;

INSERT INTO student(id, name, age, address, classification)
VALUES ("PT20","Pham Tuan",20,"Thai Nguyen","limitless");
INSERT INTO student(id, name, age, address, classification)
VALUES ("LH37","Nguyen Dinh Hieu",25,"Nghe An","limitless");
INSERT INTO student(id, name, age, address, classification)
VALUES ("TT75","Truong Thanh Tu",24,"Hue","limitless");
INSERT INTO student(id, name, age, address, classification)
VALUES ("NH30","Nguyen Quagn Huy",20,"Ha Noi","limitless");