CREATE TABLE Property (
	id_property SMALLINT(7) UNSIGNED NOT NULL AUTO_INCREPMENT,
	name_property VARCHAR(40) NOT NULL,
	adress_line_1 VARCHAR(150) NOT NULL,
	adress_line_2 VARCHAR(150),
	postal_code_property VARCHAR(5) NOT NULL,
	city VARCHAR(150) NOT NULL,
	PRIMARY KEY (id_property)
	)
ENGINE=INNODB;