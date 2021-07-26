drop database if exists saporitifire;
create database saporitifire;
use saporitifire;

create table subscribe (
  id int PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(250) UNIQUE
);

show tables;

describe subscribe;
