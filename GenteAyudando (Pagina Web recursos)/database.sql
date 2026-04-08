CREATE DATABASE IF NOT EXISTS gente_ayudando;
USE gente_ayudando;

CREATE TABLE voluntarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    disponibilidad VARCHAR(50) NOT NULL,
    mensaje TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre   VARCHAR(100) NOT NULL,
    email    VARCHAR(150) NOT NULL,
    asunto   VARCHAR(150) NOT NULL,
    mensaje  TEXT NOT NULL,
    fecha    DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL
);
CREATE TABLE donaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_donante VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefono VARCHAR(20),
    monto DECIMAL(10,2) NOT NULL,
    mensaje TEXT,
    fecha_donacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
