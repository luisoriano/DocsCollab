CREATE TABLE  `users` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`email` VARCHAR( 30 ) NOT NULL ,
	`password` VARCHAR( 32 ) NOT NULL COMMENT  'md5''ed String',
	`name` VARCHAR( 30 ) NOT NULL COMMENT  'Full Name',
	`type` TINYINT( 1 ) NOT NULL COMMENT  '0=OU, 1=SU',
	`interests` VARCHAR( 255 ) NOT NULL COMMENT  'Comma Separated',
	UNIQUE (
		`email`
	)
);

CREATE TABLE  `docs` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`title` VARCHAR( 30 ) NOT NULL ,
	`owner` INT UNSIGNED NOT NULL COMMENT  'Owner''s User ID',
	`locked` TINYINT( 1 ) NOT NULL COMMENT  '0=UNLOCKED, 1=LOCKED',
	`type` TINYINT( 1 ) NOT NULL COMMENT  '0=PRIVATE, 1=RESTRICTED, 2=PUBLIC',
	`users` INT UNSIGNED NOT NULL COMMENT  'e.g.: 6,13,8,'
);

CREATE TABLE  `docscollab`.`history` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`file` VARCHAR( 20 ) NOT NULL COMMENT  'Filename w/o Extension',
	`doc` INT UNSIGNED NOT NULL COMMENT  'Doc ID',
	`modtime` INT UNSIGNED NOT NULL COMMENT  'Modification Timestamp',
	`moduser` INT UNSIGNED NOT NULL COMMENT  'Modifier''s User ID',
	UNIQUE (
		`file`
	)
);
