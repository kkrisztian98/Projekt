-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 03:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `file`
--

-- --------------------------------------------------------

--
-- Table structure for table `foglalas`
--

CREATE TABLE IF NOT EXISTS `foglalas` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nev` varchar(30) NOT NULL,
  `veznev` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  `ido` time NOT NULL,
  `termeknev` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `foglalas`
--

INSERT INTO `foglalas` (`id`, `nev`, `veznev`, `datum`, `ido`, `termeknev`) VALUES
(1, 'Krisztián', 'Kaszás', '2019-08-30', '08:20:00', 'Forma Ice Pro FLow'),
(2, 'Krisztian', 'Krisztian', '2019-08-29', '09:09:00', 'Forma Ice Pro FLow');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'kaszas', 'kaszas');

-- --------------------------------------------------------

--
-- Table structure for table `termek`
--

CREATE TABLE IF NOT EXISTS `termek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `termek` varchar(30) NOT NULL,
  `nev` varchar(70) NOT NULL,
  `gyarto` varchar(30) NOT NULL,
  `szin` varchar(30) NOT NULL,
  `leiras` text NOT NULL,
  `Ar` float NOT NULL,
  `kep` varchar(30) NOT NULL,
  `pont` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `termek`
--

INSERT INTO `termek` (`id`, `termek`, `nev`, `gyarto`, `szin`, `leiras`, `Ar`, `kep`, `pont`) VALUES
(1, 'Kesztyű ', 'Dane Staby 3 ', 'Dane', 'Fekete', 'nyári kesztyű bőr-GORE-TEX kombinációból,\r\nX-TRAFIT technológiával;\r\nütéstompító habbal és dupla anyag erősítéssel\r\na kritikus helyeken;\r\nvíz- és szennyeződés taszító polimer impregnálással;\r\n3M Scotchlite fényvisszaverő csíkkal;\r\nfényvisszaverő LUMIDEX szállal szőtt\r\nzónákkal;\r\nvelúr plexitörlő betéttel a mutatóujjon;\r\nSTORMCUFF rendszerhez passzoló kesztyűszárral;\r\nDANE CUFF LOCK, mely megakadályozza\r\nhogy a motoros dzsekijének ujja felcsússzon\r\n\r\nMéretek: XS-3XL ', 2000, 'dane_staby_3.jpg', 5),
(2, 'Sisak', 'Pista GP R Iannone', 'AGV', 'Kekete,FEher', 'Valentino Rossi a valaha élt legnépszerűbb motorversenyző a világon. Mindeddig 9 db világbajnoki címet gyűjtött be. A kezdetektől fogva AGV bukósisakban versenyez, a Pista GP fejlesztésében ő maga is részt vett, a tesztelést pedig saját maga végezte, mégpedig éles MotoGP versenyeken. A Pista GP bukósisak a SHARP minősítési rendszer töréstesztjén a legkiválóbb, 5*-os eredményt érte el.\r\n\r\nKarbon héjszerkezet\r\n4 különböző héjméret\r\npáramentes, zárható versenyplexi\r\nfém pleximechanika\r\nextra teljesítményű felső szellőzők\r\nkivehető, mosható vészfunkciós bélés\r\ndupla D-gyűrűs versenycsat\r\nbogárháló', 2500, 'PistaGPRIannone.jpg', 7),
(3, 'Nadrág', 'Macna Commuter ', 'Macan', 'feket', 'sport-túra bőrnadrág;\nkönnyen tisztítható dombornyomott marhabőr;\nlágyékon Dymanic stretch textil betétek;\nfix hálós bélés;\nCE térdprotektorok;\nprotektorzseb SAS-TEC csípőprotektor számára;\nrövid és hosszú összekötő cipzár dzsekihez;\nnadrágtartó előkészítés;', 20000, 'nadrag1.jpg', 6),
(4, 'Csizma', 'Forma Ice Pro FLow', 'Pro Flow', 'fehér, fekete', 'szellőzőkkel ellátott mikroszálas felsőrész\nduplasűrűségű, csúszásmentes, olajálló talp\nbokacsavarodás-gátló Flex Control System\nszellőzővel ellátott rozsdamentes acél koptató\nagresszív plasztik váltóerősítés és protektorok\nhátul pumpás-racsnis csattal záródik\ncipzáras / tépőzáras felsőrész belső bokapárnázással\nelöl patentos, elasztikus rögzítés\nplasztik sarokcsúcs extra erős műanyagból\n"emlékező" hab bélés, amely felveszi a láb formáját\nAPS levegő-áramoltató talpbetét', 10000, 'csizma1.jpg', 2),
(5, 'Kesztyű', 'Difi Force AX ', 'AX', 'feket', 'kopásálló kecske- és marhabőr kombinációjú kesztyű;\njobb fogás érzékenység, a külső és belső rétegek jobban illeszkednek a mcFit technológiának köszönhetően;\npárnázott keményprotektor csuklón;\nTPR bőrprotektorok az ujjakon és a hüvelykujjon,\nTPR erősítések a csuklón;\ndupla bőrréteg az ujjakon, a tenyéren, a hüvelykujjon és a tenyér külső részén;\nerősített, fedett varratok a nagyobb biztonságért;\nRace Grip: előre formázott és sima tenyérrész kecskebőrből a magasabb komfortért;\nkülső varrásos ujjak a nagyobb kényelemért;\nállítható csuklószélesség;\nszakadásbiztos tépőzáras állítópántok;\nszínek: fekete, fekete-fehér\nméretek: S-3XL', 5000, 'k1.jpg', 4),
(6, 'Sisak', 'AGV Veloce S ', 'AGV', 'fekete', 'A legjobb versenysisakok tulajdonságai utcai motorozáshoz. A héjszerkezet karbon-aramid-üvegszál összetételű, és az új belső kialakítása miatt jól passzol, és hosszútávon is kényelmes. A karcálló plexi Pinlock előkészítésű, és maximális látótérrel rendelkezik.\n\nCAAF karbon-aramid-üvegszál héjszerkezet\n4 különböző héjméret, 5 db különböző sűrűségű ütéselnyelő EPS réteggel\n5 nagy méretű első légbeömlő, és 2 hátsó szellőző\nA különlegesen elhelyezett homlokszellőző a lehető legjobb szellőzést biztosítja.\naz arcpárnák moshatók és antibakteriális bevonatot is kaptak, a nyakpárnák pedig ellenállnak egy elázásnak is\nállítható párnázás a fejtetőn, lágy tapintású Shalimar anyaggal\nkarcálló és páramentes, zárható versenyplexi Pinlock-kal\ntökéletesen záródó fém pleximechanika\ndupla D-gyűrűs versenycsat\nbogárháló', 40000, 's1.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `termekval`
--

CREATE TABLE IF NOT EXISTS `termekval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `termeknev` varchar(30) NOT NULL,
  `kepnev` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `termekval`
--

INSERT INTO `termekval` (`id`, `termeknev`, `kepnev`) VALUES
(1, 'Kesztyű', 'dane_staby_3.jpg'),
(2, 'Nadrág', 'dane_nyborg_pro.jpg'),
(4, 'Csizma', 'Csizma.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
