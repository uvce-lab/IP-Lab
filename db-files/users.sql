create database users;

use users;

create table `user` (
    `id` int not null auto_increment,
    `age` int not null,
    `username` text not null,
    primary key(`id`)
);

-- insert into `user`(username, age) VALUES
-- ("Michael Stevens", 31),
-- ("Derek Muller", 34),
-- ("Rhett James McLaughlin", 39),
-- ("Link Neal", 39);