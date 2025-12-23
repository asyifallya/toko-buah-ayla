CREATE DATABASE toko_buah;
USE toko_buah;

CREATE TABLE buah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    harga INT
);

INSERT INTO buah (nama, harga) VALUES
('Apel', 10000),
('Jeruk', 8000),
('Mangga', 12000),
('Pisang', 7000);
