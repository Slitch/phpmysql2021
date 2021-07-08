CREATE DATABASE rmpizza;

USE rmpizza;

CREATE TABLE users (
	user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(40) NOT NULL,
	email VARCHAR(60) NOT NULL,
	pass CHAR(128) NOT NULL,
	registration_date DATETIME NOT NULL,
	PRIMARY KEY (user_id)
);

CREATE TABLE pizza_place (
	pp_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	ad_place_name VARCHAR(70) NOT NULL,
	ad_street_name VARCHAR(35) NOT NULL,
	ad_street_num SMALLINT(4) UNSIGNED NOT NULL,
	ad_postcode SMALLINT(8) UNSIGNED NOT NULL,
	ad_country VARCHAR(35) NOT NULL,
	ad_state VARCHAR(35) NOT NULL,
	website VARCHAR(64) NOT NULL,
	rate_food TINYINT(1) NOT NULL,
	rate_service TINYINT(1) NOT NULL,
	rate_price TINYINT(1) NOT NULL,
	rate_atmosphere TINYINT(1) NOT NULL,
	rate_total TINYINT(1) NOT NULL,
	rate_reviews_total MEDIUMINT UNSIGNED NOT NULL,
	price_range_low TINYINT UNSIGNED NOT NULL,
	price_range_high SMALLINT NOT NULL,
	map_google_img VARCHAR(2083) NOT NULL,
	map_google_link VARCHAR(2083) NOT NULL,
	registration_date DATETIME NOT NULL,
	PRIMARY KEY (pp_id)
);

INSERT INTO


INSERT INTO users
(first_name, last_name, email, pass, registration_date)
VALUES ('Poul', 'Lynge Larsen', 'plarsen85@gmail.com', SHA2('buller', 512), NOW());

INSERT INTO users
(first_name, last_name, email, pass, registration_date)
VALUES ('Kathrine', 'Iversen', 'error@gmail.com', SHA2('bamse', 512), NOW());

INSERT INTO users
(first_name, last_name, email, pass, registration_date)
VALUES ('Fake', 'PussyRaker', 'pussyraker@gmail.com', SHA2('pussy', 512), NOW());

UPDATE users SET email='kathmus28@gmail.com' WHERE 


