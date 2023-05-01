CREATE SCHEMA `istrike` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `istrike`.`user` (
  `email` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `password` VARCHAR(900) NULL,
  PRIMARY KEY (`email`));
  
  SELECT * FROM user;
  
  ALTER TABLE `istrike`.`user` ADD INDEX `email` (`email` ASC);
  
  CREATE TABLE `istrike`.`user_opinion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  `opinion` VARCHAR(1000) NULL,
  PRIMARY KEY (`id`),
  INDEX `email_idx` (`email` ASC),
  CONSTRAINT `email`
    FOREIGN KEY (`email`)
    REFERENCES `istrike`.`user` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

  SELECT * FROM user_opinion;
	SELECT * FROM user;