CREATE DATABASE IF NOT EXISTS PRODUCTS;

USE PRODUCTS;

CREATE TABLE product (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(256) NOT NULL,
    mark NUMERIC(10, 5) NOT NULL,
    voters INTEGER NOT NULL
);

CREATE TABLE category (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL
);

CREATE TABLE product_category (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pid INTEGER NOT NULL, 
    cid INTEGER NOT NULL,
    FOREIGN KEY(pid) REFERENCES product(id),
    FOREIGN KEY(cid) REFERENCES category(id)
);

CREATE TABLE opinion (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pid INTEGER NOT NULL,
    login VARCHAR(64) NOT NULL,
    time DATE NOT NULL,
    text VARCHAR(512) NOT NULL,
    FOREIGN KEY(pid) REFERENCES product(id)
);


	

ALTER TABLE `product` CONVERT TO CHARACTER SET 'utf8';

ALTER TABLE `category` CONVERT TO CHARACTER SET 'utf8';

ALTER TABLE `product_category` CONVERT TO CHARACTER SET 'utf8';

ALTER TABLE `opinion` CONVERT TO CHARACTER SET 'utf8';

INSERT INTO product (id, name, description, mark, voters)
VALUES (1, 'тестовый продукт 1', 'описание1', 3.4, 8);

INSERT INTO opinion (id, pid, login, time, text)
VALUES (1, 1, 'me', SYSDATE(), 'nothing outstanding here');

INSERT INTO category(id, name)
VALUES (1, 'тестовая категория');

INSERT INTO product_category(id, pid, cid)
VALUES (1, 1, 1);

GRANT ALL ON PRODUCTS.* TO 'lab2'@localhost IDENTIFIED BY '16';
