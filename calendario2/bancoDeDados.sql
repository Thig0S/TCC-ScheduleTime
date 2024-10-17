-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02/03/2024 às 12:27
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `obs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `user_id` int NOT NULL,
  `client_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `obs`, `user_id`, `client_id`) VALUES
(1, 'Tutorial 1G', '#FFD700', '2024-04-01 10:00:00', '2024-04-01 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 31),
(2, 'Tutorial 2C', '#FF4500', '2024-03-04 10:00:00', '2024-03-04 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 30),
(3, 'Tutorial 3K', '#228B22', '2024-03-05 10:00:00', '2024-03-05 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 29),
(4, 'Tutorial 4C', '#A020F0', '2024-03-06 10:00:00', '2024-03-06 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 28),
(5, 'Tutorial 5', '#40E0D0', '2024-03-07 10:00:00', '2024-03-07 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 27),
(6, 'Tutorial 6C', '#0071c5', '2024-03-08 10:00:00', '2024-03-08 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 26),
(7, 'Tutorial 7', '#A020F0', '2024-04-08 10:00:00', '2024-04-08 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 25),
(8, 'Tutorial 8', '#8B0000', '2024-03-11 10:00:00', '2024-03-11 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 24),
(9, 'Tutorial 9', '#FF4500', '2024-03-13 10:00:00', '2024-03-13 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 23),
(10, 'Tutorial 10', '#228B22', '2024-03-15 10:00:00', '2024-03-15 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 2, 22),
(11, 'Tutorial 11', '#8B4513', '2024-03-18 10:00:00', '2024-03-18 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 21),
(12, 'Tutorial 12', '#FFD700', '2024-03-20 10:00:00', '2024-03-20 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 20),
(13, 'Tutorial 13', '#40E0D0', '2024-03-22 10:00:00', '2024-03-22 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 3, 19),
(14, 'Tutorial 14', '#436EEE', '2024-03-25 10:00:00', '2024-03-25 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 18),
(15, 'Tutorial 15', '#1C1C1C', '2024-03-27 10:00:00', '2024-03-27 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 17),
(16, 'Tutorial 16', '#228B22', '2024-03-29 10:00:00', '2024-03-29 11:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae augue eget tortor finibus laoreet ut eget dui.', 1, 16),
(17, 'Tutorial 17', '#FF4500', '2024-02-17 10:30:00', '2024-02-17 11:00:00', 'In fringilla augue eu est porta mattis.', 5, 15),
(18, 'Tutorial 18', '#0071c5', '2024-02-18 10:00:00', '2024-02-18 11:00:00', '18 Quisque rutrum, quam eget aliquet laoreet, sem metus vulputate lorem, sit amet congue ipsum.', 1, 14),
(19, 'Tutorial 21', '#228B22', '2024-02-19 10:00:00', '2024-02-19 11:00:00', 'Donec non cursus dui. Etiam eu tellus pharetra, eleifend diam et, egestas ipsum. Nam non urna eget erat suscipit dapibus. ', 2, 13),
(20, 'Tutorial 19', '#8B0000', '2024-02-20 10:00:00', '2024-02-20 11:00:00', 'Aenean venenatis aliquam leo maximus lacinia.', 1, 12),
(21, 'Tutorial 22', '#FF4500', '2024-02-21 10:00:00', '2024-02-21 11:00:00', 'Tutorial 22', 3, 11),
(22, 'Tutorial 23', '#436EEE', '2024-02-22 10:00:00', '2024-02-22 11:00:00', 'Tutorial 23', 4, 10),
(23, 'Tutorial 20', '#A020F0', '2024-02-23 10:00:00', '2024-02-23 11:00:00', 'Tutorial 20', 4, 9),
(24, 'Evento 11', '#436EEE', '2024-02-24 10:00:00', '2024-02-24 11:00:00', 'Evento 11', 1, 8),
(26, 'Evento 31', '#FFD700', '2024-04-03 10:00:00', '2024-04-03 11:00:00', 'Evento 31', 3, 7),
(27, 'Evento 20', '#A020F0', '2024-01-05 10:00:00', '2024-01-05 11:00:00', 'Evento 20', 2, 5),
(28, 'Evento 21', '#A020F0', '2024-01-07 10:00:00', '2024-01-07 11:00:00', 'Evento 21', 2, 5),
(29, 'Evento 40', '#FF4500', '2024-01-04 10:00:00', '2024-01-04 11:00:00', 'Evento 40', 4, 5),
(30, 'Evento 41', '#FF4500', '2024-01-10 10:00:00', '2024-01-10 11:00:00', 'Evento 41', 4, 5),
(31, 'Evento 45', '#FF4500', '2024-01-17 10:00:00', '2024-01-17 11:00:00', 'Evento 45', 4, 5),
(35, 'Evento 30', '#FFD700', '2024-01-08 11:00:00', '2024-01-08 12:00:00', 'Evento 30', 3, 5),
(36, 'Evento 16', '#436EEE', '2024-01-02 10:00:00', '2024-01-02 11:00:00', 'Evento 16', 1, 5),
(37, 'Evento 49', '#FF4500', '2024-01-06 10:00:00', '2024-01-06 11:00:00', 'Evento 49', 4, 5),
(38, 'Evento 38A', '#8B0000', '2024-02-26 15:00:00', '2024-02-26 16:00:00', 'Evento 38A', 6, 19),
(40, 'Evento 40A', '#A020F0', '2024-04-05 10:30:00', '2024-04-05 11:00:00', 'Evento 40A', 2, 17);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `profissional` enum('S','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profissional`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', 'S'),
(2, 'Kelly', 'kelly@celke.com.br', 'S'),
(3, 'Jessica', 'jessica@celke.com.br', 'S'),
(4, 'Gabrielly', 'gabrielly@celke.com.br', 'S'),
(5, 'Jose', 'jose@celke.com.br', 'S'),
(6, 'Ana', 'ana@celke.com.br', 'S'),
(7, 'Elias', 'elias@celke.com.br', 'N'),
(8, 'Ezequiel', 'ezequiel@celke.com.br', 'N'),
(9, 'Fernando', 'fernando@celke.com.br', 'N'),
(10, 'Fabiano', 'fabiano@celke.com.br', 'N'),
(11, 'Eugênio', 'eugenio@celke.com.br', 'N'),
(12, 'Juliana', 'juliana@celke.com.br', 'N'),
(13, 'Emanoel', 'emanoel@celke.com.br', 'N'),
(14, 'Jackson', 'jackson@celke.com.br', 'N'),
(15, 'Cármen', 'carmen@celke.com.br', 'N'),
(16, 'Abgail', 'abgail@celke.com.br', 'N'),
(17, 'Thalissa', 'thalissa@celke.com.br', 'N'),
(18, 'Madalena', 'madalena@celke.com.br', 'N'),
(19, 'Eduardo', 'eduardo@celke.com.br', 'N'),
(20, 'Albano', 'albano@celke.com.br', 'N'),
(21, 'Luciana', 'luciana@celke.com.br', 'N'),
(22, 'Gilson', 'gilson@celke.com.br', 'N'),
(23, 'Jerônimo', 'jeronimo@celke.com.br', 'N'),
(24, 'Isadora', 'isadora@celke.com.br', 'N'),
(25, 'Matias', 'matias@celke.com.br', 'N'),
(26, 'Andrea', 'andrea@celke.com.br', 'N'),
(27, 'Breno', 'breno@celke.com.br', 'N'),
(28, 'Alessandre', 'alessandre@celke.com.br', 'N'),
(29, 'Rafaela', 'rafaela@celke.com.br', 'N'),
(30, 'Christopher', 'christopher@celke.com.br', 'N'),
(31, 'Santiago', 'santiago@celke.com.br', 'N');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
