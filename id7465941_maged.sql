


CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_subject` varchar(50) DEFAULT NULL,
  `message_content` varchar(250) DEFAULT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `fk_message_user_idx` (`from_user_id`),
  KEY `fk_message_user1_idx` (`to_user_id`),
  CONSTRAINT `fk_message_user` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_message_user1` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


INSERT INTO message VALUES
("1","VJCzSMCaEzaPNtIARiuui+GnF4C+A80i0O3B8lwIoTE=","VJCzSMCaEzaPNtIARiuui+GnF4C+A80i0O3B8lwIoTE=","17","16","1","2018-10-19"),
("2","k43bcIOXqWcjDFn6UeV06KuU5eXJ9EZpjN79opD1Djs=","OG3bVBqISeZks07//9IunY8IJJoM26B2zVjbgDxrkDQ=","19","17","1","2018-10-19"),
("3","84XXFldVFjTTFIThD73csn1uBY8oNeisCdymFeGnMY4=","uq6naMk9iUJOzr/v0yh3f6K4naTunqHeMH5vCSJVPLM=","20","19","1","2018-10-20"),
("4","VJCzSMCaEzaPNtIARiuui+GnF4C+A80i0O3B8lwIoTE=","7XWrmAKgF8qp7vstQnmq6WxVeh+BAc0SsL9vK3BIi0Y=","16","19","1","2018-10-21"),
("5","C/NCPyJBnqy5Rwboft+c01RRJiX8kfLoKgs1XBBFW0g=","OG3bVBqISeZks07//9IunY8IJJoM26B2zVjbgDxrkDQ=","16","17","1","2018-10-21"),
("6","cPFsJwsKlwB2vFVDiYPMJ/FS8IXTIYe7yOOnz2WyoyY=","cPFsJwsKlwB2vFVDiYPMJ/FS8IXTIYe7yOOnz2WyoyY=","24","24","1","2018-10-21"),
("7","CCpTu71klQqH8BTL7MUeQPabBRZuSRfmmcXtW0HfByA=","CCpTu71klQqH8BTL7MUeQPabBRZuSRfmmcXtW0HfByA=","15","15","1","2018-10-22"),
("8","CCpTu71klQqH8BTL7MUeQPabBRZuSRfmmcXtW0HfByA=","CCpTu71klQqH8BTL7MUeQPabBRZuSRfmmcXtW0HfByA=","15","15","1","2018-10-22");




CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nickname` varchar(45) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_email` varchar(30) NOT NULL,
  `pin_hash` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;


INSERT INTO users VALUES
("15","ahmed","1","2E/5uS7lLQz2nLEKqUlzF8Jw04pVAtsJBr0uMFCQQjs=","mikrotikbackup193@gmail.com","sblO453v8IzVTR5t/rqs/dpBNLp0NEO8YLtpDCC4RhI="),
("16","Ahmed Khaled","Ahmed.Khaled","Ex9liD7OgkZwPrRJroEncYlMVVpDcwmm5kODNs9JxfY=","maged.emad.othman@outlook.com","iKkp2tCzJBw+zrZXkBztvgRiXXCJ/KNCd6vyAqFQ+bo="),
("17","Amr","Amr.Mohamed","SCPnGhdkFv6npJKV4OSk2JeMHXzoy0Bf4oMYNojdQaY=","magoaada_93@hotmail.com",""),
("18","123445","144677","SCPnGhdkFv6npJKV4OSk2JeMHXzoy0Bf4oMYNojdQaY=","magoaaaaaaada_93@hotmail.com",""),
("19","Sara","Sara.Sayed","SCPnGhdkFv6npJKV4OSk2JeMHXzoy0Bf4oMYNojdQaY=","magoda_93@hotmail.com",""),
("20","Sabry","Sabry","Ex9liD7OgkZwPrRJroEncYlMVVpDcwmm5kODNs9JxfY=","maged.emad@act.eg","fUk0qCryYmdX+1Vumj9xDDJiMrde8Vgdfh5OHtpWHVk="),
("21","Maged","Maged","Ex9liD7OgkZwPrRJroEncYlMVVpDcwmm5kODNs9JxfY=","maged.test@outlook.com","aa\n"),
("22","jkhlkljhkljhlkjhJKHLKJH8709897","jklhlkjhljkhjkhklh","2E/5uS7lLQz2nLEKqUlzF8Jw04pVAtsJBr0uMFCQQjs=","aaa@aaaa.com",""),
("23","M.Khaled","M.Khaled","Ex9liD7OgkZwPrRJroEncYlMVVpDcwmm5kODNs9JxfY=","maged.emad.osman@gmail.com",""),
("24","nelson","nelson","Jg2IjOy8z6z1nqzQh6NrSjGqwbPWZYOa8vCKfAT8XdU=","nelson@ocastudios.com","TGHiOK9+kH++vAvcWQQI0vgyeX48cXLfVOlcfYErxzw=");


