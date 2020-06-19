-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2020 at 07:24 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `vAYVZyoYeD`
--

CREATE TABLE `clientProfile` (
  `clientId` int(11) NOT NULL,
  `clientUser` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(9) NOT NULL,
  `firstQuote` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `fuelQuote` (
  `quoteId` int(11) NOT NULL,
  `quoteClient` int(11) NOT NULL,
  `gallons` int(11) NOT NULL,
  `date` date NOT NULL,
  `pricePerGallon` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `userCredentials` (
  `userId` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `clientProfile`
  ADD PRIMARY KEY (`clientId`);

ALTER TABLE `fuelQuote`
  ADD PRIMARY KEY (`quoteId`);

ALTER TABLE `userCredentials`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `clientProfile`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `fuelQuote`
  MODIFY `quoteId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `userCredentials`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

