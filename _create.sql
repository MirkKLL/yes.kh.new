-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 10 2014 г., 11:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `yes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder` char(128) NOT NULL COMMENT 'folder with foto',
  `title` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `main_image` char(128) NOT NULL,
  `main_page` tinyint(4) DEFAULT '1',
  KEY `main` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='info about categories (title, descr, main foto etc.)' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `folder`, `title`, `description`, `main_image`, `main_page`) VALUES
(1, 'portrets', 'Портреты', 'Описание для портртеты в многа букф <br> с разметкой и другими <b>моментами</b> Nulla facilisi. Vivamus faucibus ut dui vel fringilla. Fusce ac fringilla odio. Sed nec sodales quam, a aliquet neque. Mauris sollicitudin enim vitae nunc egestas, a cursus risus dignissim. Duis ac mi dapibus, tincidunt dolor nec, mollis nunc. Praesent eu felis vitae ipsum luctus luctus. Phasellus in viverra nulla, et blandit urna. Mauris vitae pharetra eros, vel rhoncus lorem. Pellentesque suscipit neque in placerat facilisis. Proin nec enim at purus aliquet dapibus nec luctus urna. Aliquam mattis sodales lacus, malesuada accumsan orci egestas cursus.', '01.jpg', 1),
(2, 'love', 'Love Story', 'Описание истории любви Nulla in lorem tincidunt, ullamcorper leo a, vehicula tellus. Suspendisse pellentesque, orci et lobortis faucibus, quam felis eleifend erat, vel adipiscing augue elit non arcu. Integer ipsum risus, dapibus quis tellus vitae, pharetra interdum sem. Mauris vestibulum tempor mi, id eleifend tortor lacinia et. Vivamus a nibh urna. Vestibulum et tincidunt lectus. Quisque quis sapien vel diam ultrices vestibulum. Etiam laoreet nisi eu dictum ullamcorper. Cras ullamcorper sodales pulvinar. Pellentesque et mattis tellus.', '01.jpg', 1),
(3, 'natriy', 'Натрий и Подружайка', 'Ловстори типочков Nulla in lorem tincidunt, ullamcorper leo a, vehicula tellus. Suspendisse pellentesque, orci et lobortis faucibus, quam felis eleifend erat, vel adipiscing augue elit non arcu. Integer ipsum risus, dapibus quis tellus vitae, pharetra interdum sem. Mauris vestibulum tempor mi, id eleifend tortor lacinia et. Vivamus a nibh urna. Vestibulum et tincidunt lectus. Quisque quis sapien vel diam ultrices vestibulum. Etiam laoreet nisi eu dictum ullamcorper. Cras ullamcorper sodales pulvinar. Pellentesque et mattis tellus.', '01.jpg', 1);
