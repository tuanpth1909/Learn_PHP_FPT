CREATE DATABASE publications;
USE publications;
CREATE TABLE classics(
  author varchar(128),
    title varchar(128),
    category varchar(16),
    year SMALLINT,
    isbn char(13),
    INDEX(author(20)),
    INDEX(title(20)),
    INDEX(category(4)),
    INDEX(year),
    PRIMARY key (isbn)) ENGINE InnoDB;

    ALTER TABLE classics ADD FULLTEXT(author, title);

    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Charles Dickens"," Little Dorrit", "Fiction", "1857","AD8F");
    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Mark Twain","The Adventures of Tom Sawyer", "Fiction", "1856","MT8F");
    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Jane Austen","Pride and Prejudice", "Fition", "1811","JP8F");
    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Charles Dickens","The Origin of Species", "Non-Fition", "1856","CT8F");
    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Wiliam Shakesspeare","Romeo and Juliet", "Play", "1594","WR5P");
    INSERT INTO classics(author, title, category, year, isbn)
    VALUES("Charles Dickens","The Old Curiosity Shop", "Fition", "1876","CO8F");

    CREATE TABLE customers(
        name varchar(128),
        id varchar(13),
        PRIMARY KEY (id)) ENGINE InnoDB;

        INSERT INTO customers(name, id)
        VALUES("Joe Bloggs","123");
        INSERT INTO customers(name, id)
        VALUES("Mary Smith","456");
        INSERT INTO customers(name, id)
        VALUES("Jack & Wilson","789");
