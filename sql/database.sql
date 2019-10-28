create database just_create;
create table userdata(
    id int(22) primary key auto_increment,
    name varchar(20) not null,
    username varchar(20) not null,
    email varchar(50) not null,
    password varchar(16) not null
);