CREATE TABLE `blog`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB; 

INSERT INTO `users` (`id`, `name`, `password`) VALUES (NULL, 'Admin', SHA1('123456'));

CREATE TABLE `blog`.`message` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`user` VARCHAR(255) NOT NULL ,
	`contenu` TEXT NOT NULL ,
	PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `blog`.`articleslabo` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `contenuArticles` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 