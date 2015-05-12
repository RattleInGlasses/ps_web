DROP DATABASE IF EXISTS rental;
CREATE DATABASE rental;
USE rental;

CREATE TABLE dvd 
(
dvd_id INT(11) UNSIGNED AUTO_INCREMENT,
title VARCHAR(255),
production_year YEAR,
PRIMARY KEY (dvd_id)
);

CREATE TABLE customer 
(
customer_id INT(11) UNSIGNED AUTO_INCREMENT,
first_name VARCHAR(255),
last_name VARCHAR(255),
passport_code VARCHAR(255),
registration_date DATE,
PRIMARY KEY (customer_id)
);

CREATE TABLE offer 
(
offer_id INT(11) UNSIGNED AUTO_INCREMENT,
dvd_id INT(11) UNSIGNED,
customer_id INT(11) UNSIGNED,
offer_date DATE,
return_date DATE,
PRIMARY KEY (offer_id)
);

INSERT INTO dvd
(title, production_year)
VALUES
('Маска. Революция', '2010'),
('When the home is gone', '2010'),
('Нападение колобка', '1999');

INSERT INTO customer
(first_name, last_name, passport_code, registration_date)
VALUES
('Петр', 'Солодов', '11231123', '2012-12-12'),
('Марина', 'Клерк', '43214321', '1999-09-01'),
('Карлсон', 'Крышов', '22113344', '2003-11-22');

INSERT INTO offer
(dvd_id, customer_id, offer_date, return_date)
VALUES
('2', '1', '2015-04-12', '2015-04-17'),
('1', '2', '2015-04-13', '2015-04-21'),
('2', '3', '2015-04-27', '2015-05-05');

SELECT
  title
FROM
  dvd
WHERE
  production_year = 2010
ORDER BY
  title (ASC);
  
  
SELECT
  dvd.title
FROM
  dvd
  JOIN offer USING (dvd_id)
WHERE
  return_date > now();

  
SELECT
  customer.first_name, customer.last_name, dvd.title
FROM
  dvd
  JOIN offer USING (dvd_id)
  JOIN customer USING (customer_id)
WHERE
  YEAR(offer_date) = YEAR(now());