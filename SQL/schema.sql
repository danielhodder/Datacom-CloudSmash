drop database if exists datacom_cloudsmash;
create database datacom_cloudsmash;

drop table if exists user;
CREATE TABLE user (
  id int(11) not null auto_increment,
  username varchar(50) not null,
  password char(40) not null comment 'SHA1 hash of the password',
  primary key (`id`),
  key username (username)
) engine=innodb default charset=latin1 auto_increment=1 ;