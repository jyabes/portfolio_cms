-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 05, 2024 at 08:13 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table media
--

CREATE TABLE media (
  id int(11) NOT NULL,
  project_id int(11) DEFAULT NULL,
  image_filename varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table media
--

INSERT INTO media (id, project_id, image_filename) VALUES
(1, 1, 'beer-main.webp'),
(2, 1, 'sports-main.webp'),
(3, 1, 'earbud-main.webp'),
(4, 2, 'elin-main.webp'),
(5, 2, 'fanshawe-main.webp'),
(6, 2, 'typography-main.webp'),
(7, 3, 'guardian2-main.webp'),
(8, 3, 'larry-main.webp'),
(9, 3, 'guardian1-main.webp'),
(10, 1, 'gym-main.webp'),
(11, 2, 'slazenger-main.webp'),
(12, 3, 'runbnb-main.webp');

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  description text,
  image_url varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, title, description, image_url) VALUES
(1, 'Billy Beer', 'Role: 3D Motion Designer\r\nFor: Motion Design 2 | Fanshawe College', 'beer-main.webp'),
(2, 'Sports Intro', 'Role: 3D Motion Designer\r\nFor: Motion Design 2 | Fanshawe College', 'sports-main.webp'),
(3, 'Sonicboom Earbuds', 'Role: 3D Motion Designer\r\nFor: Motion Design 2 | Fanshawe College', 'earbud-main.webp'),
(4, 'Elin Cosmetics', 'Role: Motion Designer | Video Editor\r\nFor: Electronic Image Production | Fanshawe College', 'elin-main.webp'),
(5, 'Fanshawe Industry Night', 'This project is a collaborative endeavour wherein students teamed up in groups of four in order to conceptualize, design, and develop a mobile-first, responsive website. The website’s main purpose is to serve as a dynamic platform to showcase the diverse talents and achievements of fellow students in preparation for the eagerly anticipated Industry Night event.', 'fanshawe-main.webp'),
(6, 'Typography', 'Role: 3D Motion Editor | Video Editor\r\nFor: Motion Design 2 | Fanshawe College', 'typography-main.webp'),
(7, 'Guardian Christmas', 'Role: Motion Editor | Video Editor\r\nFor: Filmmagik Studio, Singapore', 'guardian2-main.webp'),
(8, 'Larry Jewelry', 'Role: Motion Editor | Video Editor\r\nFor: Filmmagik Studio, Singapore', 'larry-main.webp'),
(9, 'Guardian CNY', 'Role: Motion Editor | Video Editor\r\nFor: Filmmagik Studio, Singapore', 'guardian1-main.webp'),
(10, 'Promotional Video', 'Role: Motion Editor | Video Editor\r\nFor: Manila Padel Club', 'gym-main.webp'),
(11, 'Slazenger', 'Role: Motion Editor | Video Editor\r\nFor: Manila Padel Club', 'slazenger-main.webprunbnb-main.webp'),
(12, 'RunBnb', 'Role: Motion Editor | Video Editor\r\nFor: RunBnb', 'runbnb-main.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (id),
  ADD KEY project_id (project_id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table media
--
ALTER TABLE media
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table media
--
ALTER TABLE media
  ADD CONSTRAINT media_ibfk_1 FOREIGN KEY (project_id) REFERENCES projects (id) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
