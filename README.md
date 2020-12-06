# TODO-List

Project created to complete the web programming course.

## To Create Database

### Database Settings
ServerName = localhost
UserName = root
Password = 
DataBase Name = to_do_list

To change settings access db_conn.php
Database MySQL 5.7.21

### Script to create Database
CREATE DATABASE IF NOT EXISTS `to_do_list` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `to_do_list`;

CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checked` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;