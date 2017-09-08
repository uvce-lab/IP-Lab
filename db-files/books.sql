create database books;

use books;

create table `book` (
    `id` int not null auto_increment,
    `title` text not null,
    `author` text not null,
    `edition` int not null,
    `isbn` text not null,
    `publication` text not null,
    primary key(`id`)
);