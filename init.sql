CREATE DATABASE IF NOT EXISTS demo_docker;
USE demo_docker;

CREATE TABLE IF NOT EXISTS students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Thêm thử 1 dòng dữ liệu mẫu để test
INSERT INTO students (fullname, email) VALUES ('Sinh Vien Mau', 'test@docker.local');