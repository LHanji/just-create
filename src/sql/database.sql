create database maluves;

use maluves;

create table userdata(
    id int(22) primary key auto_increment,
    name varchar(20) not null,
    username varchar(20) not null,
    email varchar(50) not null,
    password varchar(255) not null
);

create table chardata(
    id int primary key auto_increment,
    char_name varchar(20) not null,
    char_race varchar(20),
    char_skills varchar(255),
    char_story varchar(255)
);