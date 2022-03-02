-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Σεπ 2021 στις 19:37:01
-- Έκδοση διακομιστή: 10.4.20-MariaDB
-- Έκδοση PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `electricitydb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `clients`
--

CREATE TABLE `clients` (
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `clients`
--

INSERT INTO `clients` (`name`, `username`, `email`) VALUES
('Marios Andrew', 'marios123', 'maranw@test.com'),
('New One', 'new_user180', 'test@newtest.gr'),
('Sebastian Andrisan', 'seb123', 'seb@seb.ro');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `requests`
--

CREATE TABLE `requests` (
  `name` varchar(200) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `requests`
--

INSERT INTO `requests` (`name`, `phone_number`, `email`, `subject`, `message`) VALUES
('Sebastian Andrisan', 6987044121, 'sebyyyandr@gmail.com', 'Testing This Form', 'Lorem Epsum blah mkdsamkosadmkoasmkoddkasotsbnnsdfiopdfsnhi'),
('Romeo Mario', 1234567890, 'onemail@gmail.com', 'ayo', 'lesgodonee.123'),
('Petros Papas', 6942576966, 'petr@gmail.gr', 'Petros Problem', 'I have a problem.');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
