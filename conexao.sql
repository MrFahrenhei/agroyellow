-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `empresa` (
  `ID` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cnpj` int(11) NOT NULL,
  `E_email` varchar(100) NOT NULL,
  `E_telefone` varchar(15) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`ID`, `nome`, `cnpj`, `E_email`, `E_telefone`, `senha`) VALUES
(1, 'Yaguaru', 11111, 'alho@hotmail.com', '0', '123456789'),
(2, 'testao', 44444, 'dark@hotmail.com', '0', '123456789'),
(3, 'agora Cripto', 34353, 'arrombado@hotmail.com', '0', '25f9e794323b453885f5181f1b624d0b'),
(4, 'testando botao', 12334, 'john.bastard@hotmail.com', '0', '25f9e794323b453885f5181f1b624d0b'),
(5, 'phone teste', 34353, 'igor@hotmail.com', '(12) 45435-4345', '871af90af7d6b48e3d3c51b645d20ac6'),
(6, 'testando php', 34353, 'b@b.com', '(43) 23422-3456', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'testando path', 34235, 'alho@hotmail.com', '(34) 52234-4323', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'testando path 2', 21342, 'batemail@hotmail.com', '(43) 23422-3456', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `U_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `U_telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `senha` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `nome`, `cpf`, `U_email`, `U_telefone`, `senha`) VALUES
(1, 'demenor', 11465, 'alho@hotmail.com', '0', '123456789'),
(2, 'joazinho', 223233, 'dark@hotmail.com', '(23) 12332-1234', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'test', 2147483647, 'batemail@hotmail.com', '(23) 12332-1234', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
