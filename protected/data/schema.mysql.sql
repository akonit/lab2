CREATE DATABASE IF NOT EXISTS PRODUCTS;

USE PRODUCTS;

CREATE TABLE product (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(256) NOT NULL,
    mark INTEGER NOT NULL,
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