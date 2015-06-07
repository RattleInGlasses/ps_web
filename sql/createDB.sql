USE Web;
DROP TABLE IF EXISTS survey;
CREATE TABLE survey
(
	survey_id INT(11) UNSIGNED AUTO_INCREMENT,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	age TINYINT(4),
	PRIMARY KEY (survey_id)
);
INSERT INTO survey 
	(survey_id, first_name, last_name, email, age) 
VALUES
	(1, 'Karlson', 'FromTheRoof', 'kr@lindgen.com', 25),
	(2, 'Древов', 'Михаил', 'dm@mail.ru', 51);

DROP TABLE IF EXISTS user_files;
CREATE TABLE user_files
(
	file_id INT(11) UNSIGNED AUTO_INCREMENT,
	file_extension VARCHAR(255),
	user_id INT(11) UNSIGNED,
	PRIMARY KEY (file_id),
	FOREIGN KEY (user_id) REFERENCES survey(survey_id)
		ON UPDATE CASCADE
		ON DELETE SET NULL
);
INSERT INTO user_files
	(file_id, file_extension, user_id)
VALUES
	(1, 'JPG', 1),
	(2, 'PNG', 2),
	(3, 'GIF', 1),
	(4, 'png', 2),
	(5, 'png', 2);