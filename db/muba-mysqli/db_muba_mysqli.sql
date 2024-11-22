-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 08:38 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `db_muba_mysqli`
--

-- --------------------------------------------------------
--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(2) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (
    `id_akun`,
    `nama`,
    `username`,
    `email`,
    `password`,
    `level`
  )
VALUES (
    7,
    'admin',
    'admin',
    'admin@gmail.com',
    '$2y$10$tUOJw4cqmOhrBzcT1MVg0uxqOZwKWDAiqbu1Z1.rXqheS4bXevF5G',
    '1'
  ),
  (
    8,
    'om ahmad',
    'omahmad',
    'omahmad@gmail.com',
    '$2y$10$9fvQb9EI8b3zpQ3YZX4rcu/N719Kvszj5xFX.DIE3i/H2b0b9BsDq',
    '3'
  ),
  (
    9,
    'om abdul',
    'omabdul',
    'omabdul@gmail.com',
    '$2y$10$Y9FhzPcGbAdgBV940M2uDuIuYlqnY/HAAiFfQaZ1IPDcyE2RS7XkG',
    '3'
  ),
  (
    11,
    'ob ayu',
    'obayu',
    'obayu@gmail.com',
    '$2y$10$meVbAS/uAWS5AFXFRGF1MOKAihJU.6aqCfi9Yu4gZW1OAp540dmxC',
    '2'
  ),
  (
    12,
    'ob siti',
    'obsiti',
    'obsiti@gmail.com',
    '$2y$10$zzjA/8VeLYglKF38o4mqq.PJ4hjLw8gz.juALjM0HAZSgY9Q67WGi',
    '2'
  ),
  (
    13,
    'admin2',
    'admin2',
    'admin2@gmail.com',
    '$2y$10$wS/guM3jowJm/RASN.nSHesH/yOejpe781W0msHX2SwckEVAV/TtW',
    '1'
  );
-- --------------------------------------------------------
--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (
    `id_barang`,
    `nama`,
    `jumlah`,
    `harga`,
    `tanggal`
  )
VALUES (
    1,
    'Buku up',
    '10',
    '10000',
    '2024-11-21 23:38:35'
  ),
  (2, 'Pensil', '5', '5000', '2024-11-21 23:38:35'),
  (
    3,
    'Penghapus',
    '2',
    '2000',
    '2024-11-21 23:38:35'
  ),
  (
    4,
    'buku up',
    '100',
    '100000',
    '2024-11-22 00:32:35'
  ),
  (7, 'mouse', '10', '5000', '2024-11-22 17:52:15');
-- --------------------------------------------------------
--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (
    `id_mahasiswa`,
    `nama`,
    `prodi`,
    `jk`,
    `telepon`,
    `email`,
    `foto`
  )
VALUES (
    7,
    'ahamd',
    'Teknik Informatika',
    'Laki-laki',
    '11',
    'ahmad@gmail.com',
    '67406d3fed995.jpg'
  ),
  (
    8,
    'abdul up',
    'Teknik Komputer',
    'Laki-laki',
    '22',
    'abdul@gmail.com',
    '67406d51a6f70.jpg'
  ),
  (
    11,
    'ayu',
    'Teknik Komputer',
    'Perempuan',
    '44',
    'ayu@gmail.com',
    '6740c5a7c7db3.jpg'
  );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
ADD PRIMARY KEY (`id_akun`);
--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
ADD PRIMARY KEY (`id_barang`);
--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD PRIMARY KEY (`id_mahasiswa`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
MODIFY `id_akun` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id_barang` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;