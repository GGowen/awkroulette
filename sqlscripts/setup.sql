DROP DATABASE awks;

CREATE DATABASE awks;

USE awks;

CREATE TABLE user (
	userID integer(8) NOT NULL PRIMARY KEY AUTO INCREMENT,
	username varchar(50),
	password varchar(50),
	phonenumber varchar(20),
	isSignedIn bit
);