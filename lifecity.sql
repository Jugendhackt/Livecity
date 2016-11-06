-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Nov 2016 um 09:36
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lifecity`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text,
  `category` int(11) NOT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Aufgaben die der Spieler zu lösen hat.';

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `category`, `done`) VALUES
(1, 'Taschenträger', 'Wenn du jemandem siehst der gerade von einem Einkauf zurück kommt und  der viel schleppt,\r\n nimm doch ein/zwei taschen ab. (Wenn die person es zulässt)', 1, 1),
(2, 'Wegänderung', 'Nimm einen anderen Weg zu Schule oder zur Arbeit.', 1, 0),
(3, 'Bettler', 'Wenn du das nächste Mal eine Person siehst die um Geld bettelt, \r\ndann geh doch mal zu ihm hin und gib im einfach\r\nein bisschen Geld oder unterhalte dich mit ihm.', 2, 0),
(4, 'Mit Freunden in den Park', 'Geht doch mal mit Freunden die sich gegenseitig nicht kennen in den Park, wer weiß vielleicht werdet ihr alle \r\nbeste Freunde.', 3, 1),
(5, 'Mit Freunden einkaufen', 'Geh doch Mal mit deinen Freunden einkaufen', 3, 0),
(6, 'Mit Freunden sachen tauschen.', 'Tausch ein paar deiner Sachen gegen die eines Freundes, das macht Spaß und du lernst deine/n Freund/in besser \r\nkennen.', 3, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Daten über Benutzer';

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`username`, `pass`, `avatar`) VALUES
('testuser1', '123456', NULL),
('', '', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
