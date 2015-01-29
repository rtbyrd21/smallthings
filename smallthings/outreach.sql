CREATE DATABASE `smallthingsgreat` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `smallthingsgreat`;

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `story` text DEFAULT COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `stories` (`id`, `name`, `email`, `story`) VALUES(1, 'Tom', 'tom@gmail.com', 'hihn hihij hihih jijih');
INSERT INTO `stories` (`id`, `name`, `email`, `story`) VALUES(2, 'Bob', 'bob@gmail.com', 'bobbobobobbbobbbo');
