CREATE DATABASE `duck_store` CHARACTER SET 'utf8'

CREATE TABLE `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT, 
	`title` varchar(255) NOT NULL,
	`description` text NOT NULL,
	`category_id` int(11) DEFAULT NULL,
	`price` decimal(10,2) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET='utf8'

CREATE TABLE `categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(255) NOT NULL,
	`description` text NOT NULL,
	PRIMARY KEY (`id`) 
) ENGINE=INNODB DEFAULT CHARSET='utf8'

CREATE TABLE `photos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`duck_id` int(11) NOT NULL,
	`photo` varchar(255) NOT NULL,
	PRIMARY KEY (`id`) 
) ENGINE=INNODB DEFAULT CHARSET='utf8'

INSERT INTO `categories` (`title`, `description`) VALUES ('Маленькие желтые уточки', 'Уточки, которые желтые и маленькие')

INSERT INTO `categories` (`title`, `description`) VALUES ('Средние желтые уточки', 'Уточки, которые желтые и средние'), ('Большие желтые уточки', 'Уточки, которые желтые и большие')

INSERT INTO `products` (`title`, `description`, `category_id`, `price`) 
	VALUES 
	('Желтая уточка', 'Обыкновенная желтая уточка', 1, 9.99),
	('Зеленая уточка', 'Обыкновенная зеленая уточка', 2, 15.49),
	('Черная уточка', 'Обыкновенная черная уточка', 3, 5.49)

UPDATE `products` SET `category_id` = 1 WHERE `id` = 2;

DELETE FROM `products` WHERE `id` = 3

SELECT * FROM `products` WHERE `id` = 1

SELECT `products`.`title`, `products`.`price` FROM `products` WHERE `id` = 1 ORDER BY `products`.`category_id` DESC

CREATE TABLE `orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user` varchar(255) NOT NULL,
	`address` text NOT NULL,
	PRIMARY KEY (`id`) 
) ENGINE=INNODB DEFAULT CHARSET='utf8'

CREATE TABLE `ordered_products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`order_id` int(11) NOT NULL,
	`product_id` int(11) NOT NULL,
	`quantity` int(11) NOT NULL,
	PRIMARY KEY (`id`) 
) ENGINE=INNODB DEFAULT CHARSET='utf8'
