-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2020, 14:41
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `webquiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `pyt_id` int(11) NOT NULL,
  `poprawne` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `answers`
--

INSERT INTO `answers` (`id`, `pyt_id`, `poprawne`, `text`) VALUES
(1, 1, 0, '5'),
(2, 1, 0, '6'),
(3, 1, 1, '7'),
(4, 1, 0, '8'),
(5, 2, 1, 'Spokojny'),
(6, 2, 0, 'Indyjski'),
(7, 2, 0, 'Atlantycki'),
(8, 2, 0, 'Arktyczny'),
(9, 3, 0, 'Wostok'),
(10, 3, 1, 'Bajkał'),
(11, 3, 0, 'Hańcza'),
(12, 3, 0, 'Czad'),
(13, 4, 1, 'Ssaków'),
(14, 4, 0, 'Gadów'),
(15, 4, 0, 'Ptaków'),
(16, 4, 0, 'Płazów'),
(17, 5, 0, 'Kawę'),
(18, 5, 0, 'Sok'),
(19, 5, 1, 'Herbatę'),
(20, 5, 0, 'Mleko'),
(21, 6, 0, 'Finlandii'),
(22, 6, 0, 'Szwecji'),
(23, 6, 0, 'Danii'),
(24, 6, 1, 'Norwegii'),
(25, 7, 1, 'Nil'),
(26, 7, 0, 'Amazonka'),
(27, 7, 0, 'Huang He'),
(28, 7, 0, 'Kongo'),
(29, 8, 0, '80'),
(30, 8, 0, '1200'),
(31, 8, 1, '3600'),
(32, 8, 0, '60000');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `questions`
--

CREATE TABLE `questions` (
  `pyt_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `questions`
--

INSERT INTO `questions` (`pyt_id`, `text`) VALUES
(1, 'Z iloma państwami graniczy Polska?'),
(2, 'Który z wymienionych oceanów jest największy?'),
(3, 'Jak nazywa się najgłębsze jezioro świata?'),
(4, 'Do jakiej grupy zwierząt zaliczany jest dziobak?'),
(5, 'Co najczęściej piją Anglicy po południu?'),
(6, 'Oslo to stolica:'),
(7, 'Najdłuższą rzeką wynoszącą 6650 km długości jest:'),
(8, 'Ile godzina ma sekund?');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
