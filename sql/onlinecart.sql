-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 06:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `prize` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `prize`) VALUES
(1, 'Chocolate Chip Cookie', 'Sweet Baked Treat That Is Recognized By Its Butter Flavor And The Inclusion Of Chocolate Chips.', '3.jpg', 4.51),
(2, 'Short Bread Cookie', 'Cookies Can Look Similar But Sugar Cookies Usually Have Eggs And Leavening Agents Making Them Lighter And Sweeter.', '8.jpg', 9.51),
(3, 'Crinkle Cookie', 'Cake-Like Cookies Made With Unsweetened Cocoa Powder, Vegetable Oil, And A Handful Of Other Pantry Staple Ingredients. The Confectioners\' Sugar Coating Crinkles And Cracks As The Cookies Take Their Shape.', '2.jpg', 5.12),
(4, 'Gingersnap Cookie', 'Gingersnaps Cookie Are A Chewy Cookie Flavored With Powdered Ginger And A Variety Of Other Spices, Most Commonly Cinnamon, Molasses And Clove.', '4.jpg', 8.63),
(5, 'Peanut Butter Cookie', 'Peanut Butter Cookie Is A Flat, Crunchy Cookie Made With Peanut Butter As The Main Ingredient. It Is Characterized By A Strong Peanut Flavor, Crumbly Texture.', '6.jpg', 10.23),
(6, 'Classic Sugar Cookie', 'Sugar Cookie Is A Cookie With The Main Ingredients Being Sugar, Flour, Butter, Eggs, Vanilla, And Either Baking Powder Or Baking Soda.', '9.jpg', 15.12),
(7, 'Chocolate Sandwich Cookie', 'Cookie Made From Two Thin Cookies Or Medium Cookies With A Filling Between Them. Many Types Of Fillings Are Used, Such As Chocolate, Cream Cheese, Peanut Butter, Or Ice Cream.', '7.jpg', 9.32),
(8, 'Gluten Free Cookie', 'Gluten-Free Cookies Are Sweet, Flat Baked Pieces That Are Made With Gluten-Free Grains So That The Finished Product Contains Less Than 20 Ppm Gluten.', '5.jpg', 15.31),
(9, 'Mountain Cookies', 'Sweet Baked Treat That Is Recognized By Its Butter Flavor And The Inclusion Of Chocolate Chips Mountain', '1.jpeg', 31.42);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `quan` int(10) NOT NULL,
  `title` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `quan`, `title`, `email`) VALUES
(1, 'John', 12, 'Short Bread Cookie', 'johna@gmail.com'),
(2, 'daw', 32, 'Chocolate Chip Cookie', 'gaw12@gmail.com'),
(3, 'Moira', 12, 'Short Bread Cookie', 'moira@gmail.com'),
(4, 'Manny', 32, 'Chocolate Chip Cookie', 'man@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
