CREATE DATABASE IF NOT EXISTS ceban_db;
USE ceban_db;

CREATE TABLE IF NOT EXISTS sensor_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_sensor VARCHAR(100),
    roll FLOAT,
    pitch FLOAT,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
