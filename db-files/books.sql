create database books;

use books;

create table `book` (
    `isbn` varchar(13) not null,
    `title` text not null,
    `author` text not null,
    `edition` int not null,
    `publication` text not null,
    primary key(`isbn`)
);