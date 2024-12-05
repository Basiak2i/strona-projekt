-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 26, 2024 at 12:05 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklep_z_butami`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kategorii` int(11) NOT NULL,
  `nazwa_kategorii` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`id_kategorii`, `nazwa_kategorii`) VALUES
(2, 'Damskie'),
(3, 'Dziecięce'),
(1, 'Męskie'),
(4, 'unisex');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  `miasto` varchar(255) DEFAULT NULL,
  `ulica` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `email`, `telefon`, `miasto`, `ulica`) VALUES
(1, 'Adam', 'Pyka', 'jan.beton@sigma.com', '123456789', 'Gliwice', 'ul. Skibidi 10'),
(2, 'Janusz', 'Dawid', 'sylwia.piekarz@sigma.com', '987654321', 'Pruszowo', 'ul. Lewandowski 9'),
(3, 'Marek', 'Biedron', 'biedron@.com', '6984598342', 'Warszawa', 'ul. Nowy Świat 10'),
(4, 'Bastian', 'Obsztyfikultykiewicz', 'bastian.obsztyfikultykiewicz@rudy.com', '997997997', 'Warszawa', 'ul. Grochowska 997');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_produktu` int(11) NOT NULL,
  `nazwa` varchar(100) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `ilosc_w_magazynie` int(11) DEFAULT NULL,
  `id_kategorii` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produktu`, `nazwa`, `opis`, `cena`, `ilosc_w_magazynie`, `id_kategorii`) VALUES
(1, 'Nike Air Max', 'Buty sportowe Nike Air Max', 499.99, 50, 1),
(2, 'Adidas Superstar', 'Buty sportowe Adidas Superstar', 399.99, 30, 1),
(3, 'Puma RS-X', 'Buty sportowe Puma RS-X', 459.99, 20, 1),
(4, 'Converse Chuck Taylor', 'Trampki Converse Chuck Taylor', 299.99, 60, 2),
(5, 'Vans Old Skool', 'Trampki Vans Old Skool', 249.99, 40, 2),
(6, 'Reebok Classic', 'Buty Reebok Classic', 349.99, 25, 1),
(7, 'Nike Jordan 1', 'Wysokie buty Nike Jordan 1', 699.99, 43, 4),
(8, 'Adidas Yeezy 350', 'Buty Kanye West Yeezy 350', 899.99, 12, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szczegółyzamówienia`
--

CREATE TABLE `szczegółyzamówienia` (
  `id_zamówienia` int(11) DEFAULT NULL,
  `id_produktu` int(11) DEFAULT NULL,
  `ilość` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `szczegółyzamówienia`
--

INSERT INTO `szczegółyzamówienia` (`id_zamówienia`, `id_produktu`, `ilość`) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 4, 2),
(3, 5, 2),
(3, 1, 3),
(4, 8, 1),
(4, 7, 1),
(2, 7, 2),
(2, 8, 1),
(1, 6, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `id_zamówienia` int(11) NOT NULL,
  `id_klienta` int(11) DEFAULT NULL,
  `data_zamówienia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamówienia`
--

INSERT INTO `zamówienia` (`id_zamówienia`, `id_klienta`, `data_zamówienia`) VALUES
(1, 1, '2024-11-10'),
(2, 2, '2024-11-11'),
(3, 3, '2022-11-09'),
(4, 4, '2024-09-02');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kategorii`),
  ADD UNIQUE KEY `nazwa_kategorii` (`nazwa_kategorii`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produktu`),
  ADD KEY `id_kategorii` (`id_kategorii`);

--
-- Indeksy dla tabeli `szczegółyzamówienia`
--
ALTER TABLE `szczegółyzamówienia`
  ADD KEY `id_zamówienia` (`id_zamówienia`),
  ADD KEY `id_produktu` (`id_produktu`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`id_zamówienia`),
  ADD KEY `id_klienta` (`id_klienta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kategorii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zamówienia`
--
ALTER TABLE `zamówienia`
  MODIFY `id_zamówienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_kategorii`) REFERENCES `kategorie` (`id_kategorii`);

--
-- Constraints for table `szczegółyzamówienia`
--
ALTER TABLE `szczegółyzamówienia`
  ADD CONSTRAINT `szczegółyzamówienia_ibfk_1` FOREIGN KEY (`id_zamówienia`) REFERENCES `zamówienia` (`id_zamówienia`),
  ADD CONSTRAINT `szczegółyzamówienia_ibfk_2` FOREIGN KEY (`id_produktu`) REFERENCES `produkty` (`id_produktu`);

--
-- Constraints for table `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD CONSTRAINT `zamówienia_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `klienci` (`id_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
