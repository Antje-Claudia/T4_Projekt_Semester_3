-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Erstellungszeit: 30. Dez 2022 um 15:08
-- Server-Version: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- PHP-Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `testDB`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `textcontent` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `title`, `textcontent`) VALUES
(1, 'Winter Wunderland', 'Bei meinem Urlaub in den Schweizer Alpen konnte ich die wunderschöne Alpinwelt erleben! Neben langen Winterwanderungen in den Bergen stand natürlich auch der Wintersport in Form von Snowboard oder Ski fahren auf dem Programm. Wirklich ein tolles Erlebnis in der Schweiz!'),
(2, 'Strandurlaub im Winter', 'Richtig gelesen: Auch im Winter kann so ein Urlaub am Meer wunderschön sein! Wie bei meinem (Winter-)Urlaub in Island. Die Temperatur waren zwar teilweise eisig, aber dafür war es ein tolles Erlebnis weit ab von Massentourismus. Also: Warm eingepackt und los gehts ins verschneite Island!'),
(3, 'Auf den Spuren der Polarlichter', 'Im letzten November habe ich mich auf den Weg gemacht die wunderschönen Polarlichter in Norwegen zu besuchen. Dieses Ziel stand schon lange auf meiner Bucket List und endlich konnte ich meine Traumreise verwirklichen. Wirklich so atemberaubend schön wie auf all den Fotos!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'blogowner@mail.de', 12345);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT für Tabelle `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
