#File:	feedback.sql

#Create table named users

CREATE TABLE if not exists users
(
	name varchar(50) not null ,
  email varchar(50) primary key,
  password varchar(30) not null,
	postcode varchar(4) not null

); 

#End users.sql
