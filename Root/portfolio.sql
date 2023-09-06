-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 06 sep 2023 om 11:33
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Contact`
--

CREATE TABLE `Contact` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoonnummer` varchar(30) DEFAULT NULL,
  `bedrijfsnaam` varchar(255) DEFAULT NULL,
  `bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Contact`
--

INSERT INTO `Contact` (`ID`, `naam`, `email`, `telefoonnummer`, `bedrijfsnaam`, `bericht`) VALUES
(1, 'sdhasudh', 'sjaidjas@gmail.com', '29831298', '', 'dojaidjwa joshau merk ik ben eninej szware slaaf'),
(2, 'sdhasudh', 'sjaidjas@gmail.com', '29831298', '', 'dojaidjwa joshau merk ik ben eninej szware slaaf'),
(3, 'Joshua', 'joshua@fairytale.com', '2131231231', 'Joshua CO', 'Yo'),
(4, 'Joshua', 'joshua@fairytale.com', '2131231231', 'Joshua CO', 'Yo'),
(5, 'Testing', '123@gmail.com', '21312312', 'Jan', 'Test Nebi');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Login`
--

CREATE TABLE `Login` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Login`
--

INSERT INTO `Login` (`ID`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Projecten`
--

CREATE TABLE `Projecten` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `datum` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Projecten`
--

INSERT INTO `Projecten` (`ID`, `naam`, `image`, `datum`, `beschrijving`, `link`) VALUES
(27, 'Amsterdam Light Festival', 'https://cdn.discordapp.com/attachments/480048061893181442/1147131706218905661/image.png', '2022-12-21', 'In deze kleine maar mooie website (HTML/CSS) heb ik een website voor het Amsterdam Light Festival gemaakt in een hele korte periode tijd. De website bestaat uit 1 pagina maar heeft vele animaties.', 'https://90006.stu.sd-lab.nl/Amsterdam%20Light%20Festival%20Beroeps/HTML/index.html'),
(28, 'Villas Te Koop', 'https://cdn.discordapp.com/attachments/480048061893181442/1147132734599331991/image.png', '2023-05-31', 'In deze PHP, HTML, CSS en Javascript website hebben ik en iemand anders een pagina gemaakt waar je diverse villas kan bekijken en eventueel er een bod op kunt doen. Bevat een werkende contact pagina.', 'https://89667.stu.sd-lab.nl/Villa-Te-Koop/Frontend/index.php'),
(29, 'Bestel Je Maaltijd ', 'https://cdn.discordapp.com/attachments/480048061893181442/1147134827452182608/image.png', '2023-03-29', 'In deze pagina gemaakt in HTML, CSS en Javascript hebben ik en een groepje de taak gekregen om een website te recreëren. Ik heb de home, bestellen, header en footer gemaakt.', 'https://90006.stu.sd-lab.nl/Bestel-Je-Maaltijd/HTML/index.html'),
(30, 'Digital Signage Screenshower', 'https://cdn.discordapp.com/attachments/480048061893181442/1147137296060125224/Screenshot_2023-09-01_at_13.52.00.jpg', '2023-04-14', 'De website ziet er simpel uit maar heeft een specifiek doel. De website werkt goed op een DS stand waar in dit geval 4 verschillende videogames word getoond. HTML, CSS, JS - Heeft een screensaver.', 'https://90006.stu.sd-lab.nl/DigitalSignage%20Minor/screensaver.html'),
(31, 'MacMedia', 'https://cdn.discordapp.com/attachments/480048061893181442/1147255671159525376/image.png', '2023-06-02', 'Een 3 pagina PHP, Javascript en CSS gebaseerde website met een werkende bestelsysteem die goed zou werken voor een restaurant. Meer informatie over hoe deze in werking gaat hier:', 'http://localhost/intro_project/portfolio_intro/Root/PAGES/macmedia.php'),
(34, 'Ixmox Beauty', 'https://cdn.discordapp.com/attachments/480048061893181442/1147111910328778813/image.png', '2023-06-19', 'Een HTML, CSS en Javascript gebaseerde website gemaakt op aanvraag van een klant. De website bevat veel informatie over de verschillende massages en bedieningen.', 'https://ixmoxbeauty.nl/');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Projecten`
--
ALTER TABLE `Projecten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `Login`
--
ALTER TABLE `Login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `Projecten`
--
ALTER TABLE `Projecten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
