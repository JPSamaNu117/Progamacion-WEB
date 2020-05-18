/*
  -- phpMyAdmin SQL Dump
  -- version 5.0.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1
  -- Generation Time: May 15, 2020 at 05:16 AM
  -- Server version: 10.4.11-MariaDB
  -- PHP Version: 7.4.5

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Database: `carzone`
  --

  /*
  CREATE DATABASE IF NOT EXISTS `carzone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
  USE `carzone`;

  -- --------------------------------------------------------

  --
  -- Table structure for table `carros`
  --

  DROP TABLE IF EXISTS `carros`;
  CREATE TABLE IF NOT EXISTS `carros` (
    `ID_Carro` bigint(20) NOT NULL AUTO_INCREMENT,
    `Nombre` varchar(25) NOT NULL,
    `Generacion` smallint(4) NOT NULL,
    `Cilindraje` tinyint(3) NOT NULL,
    `Motor` varchar(30) NOT NULL,
    `Traccion` varchar(20) NOT NULL,
    `Modelo` varchar(25) NOT NULL,
    `Aceleracion` varchar(25) NOT NULL,
    PRIMARY KEY (`ID_Carro`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  -- --------------------------------------------------------

  --
  -- Table structure for table `users`
  --

  DROP TABLE IF EXISTS `users`;
  CREATE TABLE IF NOT EXISTS `users` (
    `ID_Usuario` bigint(20) NOT NULL AUTO_INCREMENT,
    `Nombre` varchar(25) NOT NULL,
    `Apellido` varchar(50) NOT NULL,
    `Telefono` varchar(13) DEFAULT NULL,
    `Correo` varchar(50) NOT NULL,
    `Contra` varchar(32) NOT NULL,
    PRIMARY KEY (`ID_Usuario`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
