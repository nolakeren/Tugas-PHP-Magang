CREATE DATABASE toko_buah;

USE toko_buah;

CREATE TABLE buah (
    id_buah INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_buah VARCHAR(40) NOT NULL,
    stock INT(10) NOT NULL,
    harga INT(10) NOT NULL,
    warna VARCHAR(40) NOT NULL
);