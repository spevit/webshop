-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 nov 2017 om 14:00
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_gaming_cards`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `wachtwoord_bevestigen` varchar(50) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `telefoonnummer` int(15) DEFAULT NULL,
  `mobielnummer` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email_bevestigen` varchar(50) DEFAULT NULL,
  `actief` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikelen`
--

CREATE TABLE `artikelen` (
  `artikel_id` int(11) NOT NULL,
  `artikelnaam` varchar(30) NOT NULL,
  `prijs` float NOT NULL,
  `korting` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `betalingen`
--

CREATE TABLE `betalingen` (
  `betaling_id` int(11) NOT NULL,
  `winkelwagen_id` int(11) NOT NULL,
  `betalingsmethode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkelwagen`
--

CREATE TABLE `winkelwagen` (
  `winkelwagen_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `aantal` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`);

--
-- Indexen voor tabel `artikelen`
--
ALTER TABLE `artikelen`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexen voor tabel `betalingen`
--
ALTER TABLE `betalingen`
  ADD PRIMARY KEY (`betaling_id`),
  ADD KEY `winkelwagen_id` (`winkelwagen_id`);

--
-- Indexen voor tabel `winkelwagen`
--
ALTER TABLE `winkelwagen`
  ADD PRIMARY KEY (`winkelwagen_id`),
  ADD KEY `artikel_id` (`artikel_id`),
  ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `artikelen`
--
ALTER TABLE `artikelen`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `betalingen`
--
ALTER TABLE `betalingen`
  MODIFY `betaling_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `winkelwagen`
--
ALTER TABLE `winkelwagen`
  MODIFY `winkelwagen_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
