-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 10:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_food`
--

CREATE TABLE `add_food` (
  `id` int(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_food`
--

INSERT INTO `add_food` (`id`, `food_name`, `description`, `category`, `price`, `image`) VALUES
(1, 'pizza', 'Cheese & Chiken pizza with pizza sause', 'pizza', '900.00', 'FB_1.jpg'),
(2, 'Egg roti', 'Spicy kochchi Egg roti with Dhal curry', 'main dishes', '300.00', 'FB_3.jpg'),
(3, 'Hamburger', '   Chili bacon spicy Cheese Burger', 'main dishes', '200.00', 'FB_4.jpg'),
(4, 'Pol Roti', 'Pol Roti with Chicken & Sinisambol', 'main dishes', '70.00', 'FB_7.jpg'),
(5, 'Biriyani', 'Biriyani with chicken ', 'today special', '1000.00', 'KL.jpg'),
(6, 'Koththu', 'Chicken  Koththu with dhal curry', 'main dishes', '400.00', 'FB_IMG_1582309181272.jpg'),
(7, 'parata', 'parata with chicken curry', 'main dishes', '200.00', 'KP.jpg'),
(8, ' cup cake', 'chocolate cup cake', 'desserts', '500.00', '1d76db033c6b01e5f609d48a42745034.jpg'),
(13, 'avocado juice', 'avocado juice with ice cream', 'drinks', '100.00', 'IMG-20200930-WA0054.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Buddini', 'Pathinayaka', 'Admin', 'c93ccd78b2076528346216b3b2f701e6', 'buddinikl1996@gmail.com', '0768861459 ');

-- --------------------------------------------------------

--
-- Table structure for table `appetizerstb`
--

CREATE TABLE `appetizerstb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appetizerstb`
--

INSERT INTO `appetizerstb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'chips with ice cram', 420, './upload/a1.jpg'),
(2, 'Fish bun & egg rolls', 200, './upload/a2.jpg'),
(3, 'chips & sandwiches', 680, './upload/a3.jpg'),
(4, 'Greek Chicken Wraps', 158, './upload/a4.jpg'),
(5, 'Samosa with sauce', 100, './upload/a5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Buddini', 'Pathinayaka', 'Buddini', '2f1e3c63cb399116e7f99ae852039c45', 'buddini@gmail.com', 915724930),
(2, 'Customer', 'Pathinayaka', 'Customer', 'f4ad231214cb99a985dff0f056a36242', 'devz.melbourne@gmail.com', 768861459),
(3, 'Kamal', 'Prasad', 'Kamal', '7f58341b9dceb1f1edca80dae10b92bc', 'kamal@gmail.com', 768861459),
(4, 'Suresh', 'Sameera', 'Suresh', 'e10adc3949ba59abbe56e057f20f883e', 'bubbletute@gmail.com', 775689665);

-- --------------------------------------------------------

--
-- Table structure for table `desserttb`
--

CREATE TABLE `desserttb` (
  `id` int(25) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desserttb`
--

INSERT INTO `desserttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Special various fruit Ice cream ', 450, './upload/d1.jpg'),
(2, 'waffle with choclote syrup', 320, './upload/d2.jpg'),
(3, 'Waffle with chocolate ice cream', 300, './upload/d3.jpg'),
(4, 'Dark choclate cheese cake', 520, './upload/d4.jpg'),
(5, 'Special  Ice cream', 650, './upload/d5.jpg'),
(6, 'Avacado Ice cream', 120, './upload/d6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drinkstb`
--

CREATE TABLE `drinkstb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinkstb`
--

INSERT INTO `drinkstb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'choclate milk shake', 309, './upload/d1.jpg'),
(2, 'Watermelon juice', 147, './upload/di2.jpg'),
(3, 'Mango milkshake', 459, './upload/d3.jpg'),
(4, 'Avacado milkshake', 308, './upload/d4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'buddini', 'buddinikl1996@gmail.com', 'KJLKJLKJ'),
(2, 'buddini', 'buddinikl1996@gmail.com', ',b,,'),
(3, 'kalhari', 'buddinikl1996@gmail.com', 'hi there'),
(4, 'buddini', 'pathinayaka.s.g@gmail.com', 'uvy;'),
(5, 'buddini', 'buddinikl1996@gmail.com', 'ugffk'),
(6, 'buddini', 'pathinayaka.s.g@gmail.com', 'uvy;'),
(7, 'KAMAL', 'buddinikl1996@gmail.com', 'This is great'),
(8, 'buddini', 'pathinayaka.s.g@gmail.com', 'hi jjhbbbhgf');

-- --------------------------------------------------------

--
-- Table structure for table `kidstb`
--

CREATE TABLE `kidstb` (
  `id` int(25) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidstb`
--

INSERT INTO `kidstb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'kids-special 1', 150, './upload/product1.jpg'),
(2, 'kids-special 2', 250, './upload/product2.jpg'),
(3, 'kids-special 3', 250, './upload/product3.jpg'),
(4, 'kids-special 4', 300, './upload/product4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pizzatb`
--

CREATE TABLE `pizzatb` (
  `id` int(25) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzatb`
--

INSERT INTO `pizzatb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Chiken susage cheesy pizza', 1450, './upload/p1.jpg'),
(2, 'Pineapple peporoni cheesy pizza', 1500, './upload/p2.jpg'),
(3, 'Chiken mushroom cheesy pizza', 1350, './upload/p3.jpg'),
(4, 'Chiken peparoni cheesy pizza', 1550, './upload/p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Peporoni pizza', 2000, './upload/food1.jpg'),
(2, 'Egg roti', 150, './upload/food2.jpg'),
(3, 'Hamburgur', 459, './upload/food3.jpg'),
(4, 'Pol roti with chicken', 350, './upload/food4.jpg'),
(5, 'Bread with cutlat', 200, './upload/food5.jpg'),
(6, 'Fried rice', 250, './upload/food6.jpg'),
(7, 'chnxjn', 0, 'FB_IMG_1570695684326.jpg'),
(8, 'chnxjn', 0, 'FB_IMG_1570695684326.jpg'),
(9, 'fdtgdt', 0, 'FB_IMG_1577955891053.jpg'),
(10, 'chnxjn', 0, '189549.jpg'),
(11, 'chnxjn', 0, '8314929977_28fd740070_b.jpg'),
(12, 'chnxjn', 0, '189549.jpg'),
(13, 'chnxjn', 0, '189549.jpg'),
(14, 'abd', 0, 'A-Discarded-Plant-9553113303.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(100) NOT NULL,
  `no_of_guest` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_res` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `suggestions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todaytb`
--

CREATE TABLE `todaytb` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaytb`
--

INSERT INTO `todaytb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Special Biriyani with chicken', 550, './upload/t1.jpg'),
(2, 'Pineapple Ginger mojito', 220, './upload/t2.png'),
(3, 'Parata with beef and eggs', 550, './upload/t3.jpg'),
(4, 'Chocolate coverd Strawberry cupcakes', 420, './upload/t4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `view_food`
--

CREATE TABLE `view_food` (
  `id` int(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `prize` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_food`
--
ALTER TABLE `add_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appetizerstb`
--
ALTER TABLE `appetizerstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desserttb`
--
ALTER TABLE `desserttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinkstb`
--
ALTER TABLE `drinkstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidstb`
--
ALTER TABLE `kidstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzatb`
--
ALTER TABLE `pizzatb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `todaytb`
--
ALTER TABLE `todaytb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_food`
--
ALTER TABLE `view_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_food`
--
ALTER TABLE `add_food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appetizerstb`
--
ALTER TABLE `appetizerstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `desserttb`
--
ALTER TABLE `desserttb`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drinkstb`
--
ALTER TABLE `drinkstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kidstb`
--
ALTER TABLE `kidstb`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pizzatb`
--
ALTER TABLE `pizzatb`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todaytb`
--
ALTER TABLE `todaytb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `view_food`
--
ALTER TABLE `view_food`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
