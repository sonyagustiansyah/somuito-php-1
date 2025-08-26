CREATE DATABASE somuito;

USE somuito;

-- Tabel untuk Brake Pads Premium
CREATE TABLE brake_pads_premium (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand_mobil VARCHAR(100),
    nama_mobil VARCHAR(100),
    description TEXT,
    genuine_number VARCHAR(100),
    posisi ENUM('Front', 'Rear')
);

-- Tabel untuk Brake Shoes Premium
CREATE TABLE brake_shoes_premium (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand_mobil VARCHAR(100),
    nama_mobil VARCHAR(100),
    description TEXT,
    genuine_number VARCHAR(100),
    posisi ENUM('Front', 'Rear')
);