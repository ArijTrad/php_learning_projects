-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 01:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(256) NOT NULL,
  `prix` float NOT NULL,
  `qte` int(11) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `promo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `des`, `image`, `promo`) VALUES
(1, 'aus i7 1 To', 2500, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, vero! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aperiam cum minus, deleniti quaerat error natus adipisci nam enim? Dignissimos veniam at voluptas dolorem, fugit eveniet adipisci quasi enim sunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat animi delectus sint quaerat vitae debitis eos tempore quasi illum, sapiente deleniti nihil inventore. Nam cum vel iusto, architecto eos libero?', 'https://picsum.photos/200/300\r\n', 0),
(2, 'aus i7 1 To', 2500, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, vero! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aperiam cum minus, deleniti quaerat error natus adipisci nam enim? Dignissimos veniam at voluptas dolorem, fugit eveniet adipisci quasi enim sunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat animi delectus sint quaerat vitae debitis eos tempore quasi illum, sapiente deleniti nihil inventore. Nam cum vel iusto, architecto eos libero?', 'https://picsum.photos/200/300\r\n', 0),
(3, 'aus i5 512 Go', 2000, 36, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Conste deleniti nihil inventore. Nam cum vel iusto, architecto eos libero?', 'https://picsum.photos/200/300\r\n', 0),
(4, 'cable hdmi', 20, 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Conste deleniti nihil inventore. Nam cum vel iusto, architecto eos libero?', 'https://picsum.photos/200/300\r\n', 0),
(5, 'machine a laver', 1800, 41, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Conste deleniti nihil inventore. Nam cum vel iusto, architecto eos libero?', 'https://picsum.photos/200/300\r\n', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
