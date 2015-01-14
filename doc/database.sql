-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Jaan 14, 2015 kell 03:50 PM
-- Serveri versioon: 5.5.39
-- PHP versioon: 5.4.31

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Andmebaas: `atomic-ad`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
`client_id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `client_since` date NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
`project_id` int(10) unsigned NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_file` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(10) unsigned NOT NULL,
  `username` varchar(25) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Andmete tõmmistamine tabelile `user`
--

INSERT INTO `user` (`user_id`, `username`, `is_admin`, `password`, `active`, `email`, `deleted`) VALUES
(1, 'demo', 0, 'demo', 1, '', 0),
(2, 'admin', 1, 'krista779', 0, 'andrus@atomic.ee', 0),
(3, 'developer', 1, 'ahjaez3a', 0, 'meriliasu@gmail.com', 0);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`client_id`);

--
-- Indeksid tabelile `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`project_id`);

--
-- Indeksid tabelile `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `client`
--
ALTER TABLE `client`
MODIFY `client_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT tabelile `project`
--
ALTER TABLE `project`
MODIFY `project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT tabelile `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;SET FOREIGN_KEY_CHECKS=1;
