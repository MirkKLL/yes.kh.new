CREATE TABLE `categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`folder` CHAR(128) NOT NULL COMMENT 'folder with foto',
	`title` VARCHAR(512) NOT NULL,
	`description` TEXT NOT NULL,
	`main_image` CHAR(128) NOT NULL,
	INDEX `main` (`id`)
)
COMMENT='info about categories (title, descr, main foto etc.)'
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

