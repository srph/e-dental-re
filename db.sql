DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
	id INT(9) PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	first_name VARCHAR(255),
	middle_name VARCHAR(255),
	last_name VARCHAR(255),
	address VARCHAR(255),
	birthdate TIMESTAMP,
	is_admin BOOLEAN DEFAULT 0,
	created_at TIMESTAMP NOT NULL,
	updated_at TIMESTAMP NOT NULL,
	UNIQUE(username)
);

TRUNCATE TABLE `users`;
INSERT INTO `users`(username, password, first_name, middle_name, last_name, is_admin)
	VALUES('admin', '202cb962ac59075b964b07152d234b70', 'Jealian', 'Enriquez', 'Menor', 1);

INSERT INTO `users`(username, password, first_name, middle_name, last_name, is_admin)
	VALUES('admin2', '202cb962ac59075b964b07152d234b70', 'John', '', 'Doe', 1);

INSERT INTO `users`(username, password, first_name, middle_name, last_name)
	VALUES('admin3', '202cb962ac59075b964b07152d234b70', 'Lee', 'Min', 'Ho');

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules`(
	id	INT(9) PRIMARY KEY AUTO_INCREMENT,
	user_id INT(9) NOT NULL,
	appointed_at TIMESTAMP NOT NULL,
	created_at TIMESTAMP,
	updated_at TIMESTAMP
);

DROP TABLE IF EXISTS `records`;
CREATE TABLE `records`(
	id INT(9) PRIMARY KEY AUTO_INCREMENT,
	user_id INT(9) NOT NULL,
	service ENUM('orthodontic treatment', 'fluoride cleaning', 'braces') NOT NULL,
	created_at TIMESTAMP,
	updated_at TIMESTAMP,

	FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT
);

TRUNCATE TABLE `records`;
INSERT INTO `records`(user_id, service, created_at) VALUES(1, 'braces', NOW());