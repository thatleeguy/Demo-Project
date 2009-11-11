CREATE TABLE urls (
  id int(11) NOT NULL auto_increment,
  url text,
  checksum varchar(50) default NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY checksum (checksum)
) ENGINE=MyISAM CHARSET=utf8;



