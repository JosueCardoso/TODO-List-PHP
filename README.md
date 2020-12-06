# TODO-List

Project created to complete the web programming course.

## To Create Database

### Database Settings
ServerName = localhost <br/>
UserName = root <br/>
Password =  <br/>
DataBase Name = to_do_list <br/>

To change settings access db_conn.php <br/>
Database MySQL 5.7.21 <br/>

### Script to create Database
<code>CREATE DATABASE IF NOT EXISTS `to_do_list` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `to_do_list`;</code>

<code>CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checked` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;</code>