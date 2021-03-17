-- # Clear

-- ## Drop Tables


-- ## Remove Constraints


-- # Create database

CREATE DATABASE kpmweb_202103; 

-- # Create Tables

CREATE TABLE `users` (
	`user_id` INT NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`name` varchar(255),
	`role` INT(2) NOT NULL DEFAULT '1',
	`datecreated` DATETIME NOT NULL,
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `events` (
	`event_id` INT NOT NULL AUTO_INCREMENT,
	`stream_id` INT NOT NULL,
	`name` varchar(255),
	`date` DATETIME(255) NOT NULL,
	`starttime` TIME,
	`endtime` TIME,
	`description` varchar(255),
	`artists` varchar(255),
	`host` varchar(255),
	`sociallinks` varchar(255),
	`genre` varchar(255),
	`host_user` INT NOT NULL,
	`moderator_user` INT,
	`datecreated` DATETIME NOT NULL,
	PRIMARY KEY (`event_id`)
);

CREATE TABLE `streams` (
	`stream_id` INT NOT NULL AUTO_INCREMENT,
	`event_id` INT NOT NULL,
	`islive` BOOLEAN NOT NULL,
	`title` varchar(255) NOT NULL,
	`subtitle` varchar(255),
	`viewcount` INT,
	`audiencecount` INT,
	`connectionstatus` INT(2) NOT NULL DEFAULT '1',
	`timelive` TIME DEFAULT '0',
	`timeleft` INT(255),
	`datecreated` DATETIME(255) NOT NULL,
	PRIMARY KEY (`stream_id`)
);



-- # Constraints

ALTER TABLE `events` ADD CONSTRAINT `events_fk0` FOREIGN KEY (`stream_id`) REFERENCES `streams`(`stream_id`);

ALTER TABLE `events` ADD CONSTRAINT `events_fk1` FOREIGN KEY (`host_user`) REFERENCES `users`(`user_id`);

ALTER TABLE `events` ADD CONSTRAINT `events_fk2` FOREIGN KEY (`moderator_user`) REFERENCES `users`(`user_id`);

ALTER TABLE `streams` ADD CONSTRAINT `streams_fk0` FOREIGN KEY (`event_id`) REFERENCES `events`(`event_id`);

-- # Default Data

-- # Foodata

-- see foodata.sql