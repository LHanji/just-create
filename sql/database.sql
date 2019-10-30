create database just_create;

create table userdata(
    id int(22) primary key auto_increment,
    name varchar(20) not null,
    username varchar(20) not null,
    email varchar(50) not null,
    password varchar(16) not null
);

create table chardata(
    id int(22) primary key auto_increment,
    char_name varchar(20) not null,
    char_codename varchar(20),
    char_class varchar(20),
    char_race varchar(20),
    char_skills varchar(255),
    char_weapons varchar(255),
    char_origin varchar(20),
    char_story varchar(255)
);