-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 01:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `name`, `email`, `password`) VALUES
(1, 'bakir rizvi', 'bakirrizvi@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`) VALUES
(9, 'home', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,'),
(10, 'SPORT', 'h'),
(11, 'TECHNOLOGY', 'about technology'),
(12, 'POLITICS', 'about politics');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`, `admin`) VALUES
(1, 'Indian-Americans reported highest rates of voting, in 2020 presidential election.', 'The 1 quick, brown fox jumps over a lazy dog. The quick, brown fox jumps over a lazy dog. The quick, brown fox jumps over a lazy dog.        ', '2021-05-30', 'POLITICS', 'image1-1.jpg', 'bakirrizvi@gmail.com'),
(2, 'nimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis es', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla venenatis lacus eu sollicitudin. Sed placerat vitae leo vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean arcu nisi, viverra id luctus at, ultricies ut justo', '2021-05-31', 'home', 'image2.jpg', 'bakirrizvi@gmail.com'),
(3, ' WHO: Covid deaths 2 to 3 times higher..', ' The quick, brown fox jumps over a lazy dog.', '2021-05-29', 'home', 'image3.jpg', 'bakirrizvi@gmail.com'),
(4, 'A wonderful serenity has taken possession of my entire sou', 'A wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession   ', '2021-05-28', 'home', 'pg3 image5.jpg', 'bakirrizvi@gmail.com'),
(5, 'A wonderful serenity has taken possession of my entire sou', 'A wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession ', '2021-05-28', 'TECHNOLOGY', 'technology1.jpg', 'bakirrizvi@gmail.com'),
(6, 'last view back on the skyline of her hometown Bookmarksgrove, t', 'last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of he  ', '2021-05-28', 'POLITICS', 'image5.jpg', 'bakirrizvi@gmail.com'),
(7, 'ich roasted parts of sentences fly into your mouth. Even the all-powerful P', 'ich roasted parts of sentences fly into your mouth. Even the all-powerful Pich roasted parts of sent', '2021-05-31', 'home', 'pg2 image1.jpg', 'bakirrizvi@gmail.com'),
(8, 'But I must explain to you how all this mistaken idea of denouncing pleasure', 'But I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you ', '2021-05-31', 'SPORT', 'sport1.jpg', 'bakirrizvi@gmail.com'),
(9, 'pariatur? At vero eos et accusamus et iusto odio dignissimos ducim', 'pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusam ', '2021-05-31', 'TECHNOLOGY', 'technology2.jpg', 'bakirrizvi@gmail.com'),
(10, 'molestiae consequatur, vel illum qui dolorem eum fugiat quo volupta', 'molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae conseq ', '2021-05-31', 'POLITICS', 'politics2.jpg', 'bakirrizvi@gmail.com'),
(11, 'I neglect my talents. I should be incapable of drawing a single', 'I neglect my talents. I should be incapable of drawing a single I neglect my talents. I should be ', '2021-05-29', 'SPORT', 'sport2.jpg', 'bakirrizvi@gmail.com'),
(13, 'A wonderful serenity has taken possession of my entire sou', 'A wonderful serenity has taken possession of my entire sou A wonderful serenity has taken possession of my entire sou', '2021-06-02', 'SPORT', 'sport3.jpg', 'bakirrizvi@gmail.com'),
(14, 'A wonderful serenity has taken possession of my entire sou', 'A wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession of my entire sou', '2021-06-02', 'TECHNOLOGY', 'technology3.jpg', 'bakirrizvi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
