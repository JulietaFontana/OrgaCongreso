
CREATE DATABASE IF NOT EXISTS congreso;
USE congreso;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'ponente') NOT NULL
);

INSERT INTO usuarios (username, password, rol) VALUES
('admin', '$2y$10$gzY2MfhsNoCJlYwIKKjMYuKW1S6aJmixtvTF2OtCkeo5X8kp.6hYq', 'admin');
