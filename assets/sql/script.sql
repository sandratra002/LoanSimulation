CREATE DATABASE `loan_simulation`;

USE `loan_simulation`;

CREATE TABLE `user` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `first_name` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL
);


INSERT INTO `user` (`name`, `first_name`, `password`, `email`) VALUES 
    ('Sandratra', 'Niaina', sha1('aina'), 'aina@gmail.com');