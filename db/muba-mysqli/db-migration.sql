-- buat secara manual, file ini tidak bisa dijalankan secara otomatis untuk import data
CREATE DATABASE db_muba_mysqli;
USE db_muba_mysqli;
CREATE TABLE barang (
    id_barang INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    jumlah VARCHAR(50),
    harga VARCHAR(50),
    tanggal TIMESTAMP
);
INSERT INTO barang (nama, jumlah, harga, tanggal)
VALUES ('Buku', '10', '10000', NOW()),
    ('Pensil', '5', '5000', NOW()),
    ('Penghapus', '2', '2000', NOW());
CREATE TABLE mahasiswa (
    id_mahasiswa INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    prodi VARCHAR(50),
    jk VARCHAR(10),
    telepon VARCHAR(30),
    email VARCHAR(30),
    foto VARCHAR(100)
);
INSERT INTO mahasiswa (nama, prodi, jk, telepon, email, foto)
VALUES (
        'Budi',
        'Teknik Informatika',
        'Laki-laki',
        '08123456789',
        'XjHtN@example.com',
        'budi.jpg'
    ),
    (
        'Andi',
        'Teknik Informatika',
        'Laki-laki',
        '08123456789',
        'XjHtN@example.com',
        'andi.jpg'
    ),
    (
        'Cindy',
        'Ilmu Komputer',
        'Perempuan',
        '08123456789',
        'XjHtN@example.com',
        'cindy.jpg'
    );
CREATE TABLE akun (
    id_akun INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    level VARCHAR(2)
);
INSERT INTO akun (nama, username, email, password, level)
VALUES (
        'Admin',
        'admin',
        'admin@gmail.com',
        'admin',
        '1'
    ),
    (
        'Andi',
        'andi',
        'andi@gmail.com',
        'andi',
        '2'
    ),
    (
        'Cindy',
        'cindy',
        'cinty@gmail.com',
        'cindy',
        '2'
    );