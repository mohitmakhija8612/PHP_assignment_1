create database PHP_1;
use PHP_1;
CREATE TABLE entry (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pizzaname VARCHAR(255) NOT NULL,
  drinks VARCHAR(255) NOT NULL,
  quantity INT NOT NULL
);