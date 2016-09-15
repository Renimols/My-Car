-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 10:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycar`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` int(10) NOT NULL,
  `carmdel` varchar(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `city_highway-milage` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `enginedisplacement` varchar(1000) NOT NULL,
  `bhp` varchar(100) NOT NULL,
  `trque` varchar(100) NOT NULL,
  `garbage` varchar(100) NOT NULL,
  `steering_geer_type` varchar(100) NOT NULL,
  `PHT` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `carmdel`, `car_name`, `city_highway-milage`, `price`, `fueltype`, `enginedisplacement`, `bhp`, `trque`, `garbage`, `steering_geer_type`, `PHT`, `desc`, `city`) VALUES
(1, '	AUDI A3	\r\n', 'A3', '18.08 kmpl/20.38kmpl', 1000000.00, 'Diesel', '1968 cc\r\n', '143bhp@3500-4000rpm		\r\n', '320NM@1750-3000rpm		\r\n', '6 Speed\r\n', 'Rack & Pinion	\r\n', '1.jpg', '2.0 litre 143 bhp 16 V TDI Diesel Engine			\r\n', 'newyork'),
(2, 'BMW X1\r\n', 'x1', '16.6 kmpl/20.68 kmpl		\r\n', 3000000.00, 'deisel', '1995 cc		\r\n', '190bhp@4000rpm	\r\n', '400NM@1750-2500rpm		\r\n', '8speed', 'Rack &Pinion	\r\n', '2.jpg', '2.0 litre 190bhp 16 V Diesel Engine			\r\n', 'USA'),
(3, 'BMW X3\r\n', 'x3', '14.5 kmpl/18.56 kmpl	\r\n', 3500000.00, 'diesel', '1995cc', '190bhp@4000rpm	\r\n', '400NM@1750-2500rpm		\r\n', '8speed', 'Rack &Pinion	\r\n', '3.jpg', ' 2.0 litre 190bhp 16 V x Drive20 Diesel Engine				\r\n', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `pass`) VALUES
('admin', 'priya123');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE `fdbk` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`name`, `email`, `mesg`) VALUES
('anu', 'an@gmaill.com', 'hhfjkjhj'),
('xfvrfc', 'ccddvd', 'dvddd5'),
('anu', 'anu@gmail.com', 'good'),
('anu', 'anu@gmail.com', 'good'),
('an', 'anu@gmail.com', 'good'),
('an', 'anu@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `launched`
--

CREATE TABLE `launched` (
  `car_id` int(4) NOT NULL,
  `carmdel` varchar(10) NOT NULL,
  `price` double(10,3) NOT NULL,
  `d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launched`
--

INSERT INTO `launched` (`car_id`, `carmdel`, `price`, `d`) VALUES
(1, 'AUDI A3', 898989.900, '2016-06-05'),
(2, 'BMW X3', 764.090, '2016-09-21'),
(3, 'ALTO 800', 99999.999, '2016-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `most_popular`
--

CREATE TABLE `most_popular` (
  `name` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dateoflaunch` date NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `most_popular`
--

INSERT INTO `most_popular` (`name`, `brand_name`, `price`, `image`, `dateoflaunch`, `city`) VALUES
('A3', 'audi', 4000000.00, '1.jpg', '2016-09-13', 'newyork'),
('BMW X1', 'BMW', 4000000.00, '2.JPG', '2016-09-15', 'UK'),
('X3', 'BMW X3', 8900000.00, '3.JPG', '2016-09-20', 'BOMBAY');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `email`) VALUES
(1, 'anju', 'anu', 'anjanu@gmail.com'),
(2, '', '', ''),
(3, 'anju', '098', 'an@gmail.com'),
(4, 'rama', 'ramani', 'rama@gmail.cm'),
(5, 'athira tr', 'asdfghjkl', 'anjutr07@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `price` double(30,2) NOT NULL,
  `car_id` int(30) NOT NULL,
  `carmdel` varchar(30) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user`, `email`, `price`, `car_id`, `carmdel`, `car_name`, `city`) VALUES
('anju', '', 10000.00, 1, 'ssdwd', 'ewffwr', 'cweg'),
('anu', '', 12345.00, 2, 'regcx', 'verrgdvcx ', 'rgfvc '),
('gdfvfg', 'fgxcvcvf', 12345.99, 1, 'dffasdasd', 'sde5d', 'efwsdrd');

-- --------------------------------------------------------

--
-- Table structure for table `ppular`
--

CREATE TABLE `ppular` (
  `car_id` int(4) NOT NULL,
  `carmdel` varchar(10) NOT NULL,
  `price` double(10,3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppular`
--

INSERT INTO `ppular` (`car_id`, `carmdel`, `price`, `date`) VALUES
(1, 'FERARY', 123456.900, '2016-09-07'),
(2, 'ERTIGA', 123456.900, '2016-09-26'),
(3, 'VOLVO', 65478.090, '2017-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `ppular_rder`
--

CREATE TABLE `ppular_rder` (
  `user` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `price` double(10,2) NOT NULL,
  `car_id` int(4) NOT NULL,
  `carmdel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppular_rder`
--

INSERT INTO `ppular_rder` (`user`, `email`, `price`, `car_id`, `carmdel`) VALUES
('wsx', 'erf', 123456.90, 1, 'fee'),
('qazxswe', 'rfvbgt', 123456.90, 1, 'fee'),
('qazxswe', 'rfvbgt', 123456.90, 1, 'fee'),
('qazxswe', 'rfvbgt', 123456.90, 1, 'fee'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('aqwsed', 'cfder', 123456.90, 2, 'ffrtgbv'),
('abc', 'anjana', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee'),
('anchu', 'annu', 123456.90, 1, 'fee');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`title`, `fname`, `lname`, `gen`, `id`, `pass`, `phone`, `add`, `city`, `coun`, `dob`) VALUES
('Ms.', 'Anjutha', 'anju', 'female', 'a@gmail.com', '123456', '1234567890', 'Shanti Path Tilak Nagar', 'tirur', 'india', '03-04-1995'),
('Mr.', 'Ankur', 'gupta', 'male', 'ankur@gmail.com', 'ankur123', '9414279845', 'Shanti Path Tilak Nagar', 'Jaipur', 'India', '13-11-89'),
('Ms.', 'Priya', 'gupta', 'female', 'priya@gmail.com', 'priya123', '9460380893', 'Patrakar Colany Jawahar Nagar', 'Delhi', 'India', '30-03-91');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory` varchar(50) NOT NULL,
  `catg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory`, `catg`) VALUES
('Casual Shirts', ''),
('jeans', ''),
('T-shirts', ''),
('Footwear', ''),
('Shorts', ''),
('watches', ''),
('Dresses', ''),
('Churidar Suits', ''),
('Kurtas', ''),
('Sandals', ''),
('Office Wear', ''),
('Artificial Jewellery', ''),
('Baby Apparel', ''),
('Girls Apparel', ''),
('Boys Apparel', ''),
('Kids Toys', ''),
('Kurtas', '2'),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `catg` varchar(50) NOT NULL,
  `subcatg` varchar(50) NOT NULL,
  `img` varchar(60) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `dat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`catg`, `subcatg`, `img`, `itemno`, `price`, `desc`, `dat`) VALUES
('men', 'Casual Shirts', 'd:/wamp/tmpphp13A.tmp', 'cs1', 400, 'ahakaaajaj', '28-06-11 04-56-14'),
('', '', '', '', 0, '', '28-06-11 04-56-18'),
('men', 'Casual Shirts', 'd:/wamp/tmpphp15A.tmp', 'cs3', 500, 'haioaajalkaj', '28-06-11 04-57-11'),
('', '', '', '', 0, '', '28-06-11 04-57-18'),
('', '', '', '', 0, '', '28-06-11 04-57-51'),
('women', 'Dresses', 'c:/wamp/tmpphp15F.tmp', 'd1', 5700, 'ghsfshsshs', '28-06-11 05-00-46'),
('women', 'Dresses', 'c:/wamp/tmpphp160.tmp', 'd2', 45666, 'yrsysfysus', '28-06-11 05-00-46'),
('', '', '', '', 0, '', '28-06-11 05-00-50'),
('', '', '', '', 0, '', '28-06-11 05-00-50'),
('', '', '', '', 0, '', '28-06-11 05-02-08'),
('', '', '', '', 0, '', '28-06-11 05-02-08'),
('', '', '', '', 0, '', '28-06-11 05-03-25'),
('', '', '', '', 0, '', '28-06-11 05-03-25'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp166.tmp', 'cs1', 7635635, 'qtyqwtywrtyw', '28-06-11 05-06-40'),
('', '', '', '', 0, '', '28-06-11 05-07-04'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp168.tmp', 'cs2', 53674, 'deuyddydtg', '28-06-11 05-11-33'),
('', '', '', '', 0, '', '28-06-11 05-11-36'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp137.tmp', 'cs1', 355, 'sjksjs', '29-06-11 04-34-39'),
('', '', '', '', 0, '', '29-06-11 04-34-43'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp139.tmp', '33', 444, 'sxxddxd', '29-06-11 04-35-16'),
('', '', '', '', 0, '', '29-06-11 04-35-21'),
('', '', '', '', 0, '', '29-06-11 04-35-25'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp138.tmp', 'cs2', 3434, 'hdgdjgdjg', '29-06-11 04-35-30'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13B.tmp', '34', 0, 'ddddd', '29-06-11 04-42-31'),
('', '', '', '', 0, '', '29-06-11 04-42-34'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13C.tmp', '45', 0, 'xxxxxx', '29-06-11 04-43-02'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13D.tmp', 'cs1', 345, 'sssssssssssss', '29-06-11 04-43-02'),
('', '', '', '', 0, '', '29-06-11 04-43-08'),
('', '', '', '', 0, '', '29-06-11 04-43-08'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp177.tmp', '23', 2333, 'wwwwwwwwwwwwww', '30-06-11 04-56-19'),
('', '', '', '', 0, '', '30-06-11 04-56-21'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp176.tmp', 'cs1', 23, 'aaaaaaaaaaaaa', '30-06-11 04-56-52'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp178.tmp', '34', 0, 'wwwwwwwwwwwwww', '30-06-11 04-56-52'),
('', '', '', '', 0, '', '30-06-11 04-56-58'),
('', '', '', '', 0, '', '30-06-11 04-56-58');

-- --------------------------------------------------------

--
-- Table structure for table `upcming`
--

CREATE TABLE `upcming` (
  `car_id` int(10) NOT NULL,
  `carmdel` varchar(100) NOT NULL,
  `price` double(10,3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcming`
--

INSERT INTO `upcming` (`car_id`, `carmdel`, `price`, `date`) VALUES
(1, 'BMW', 1000.000, '2016-09-06'),
(2, 'MARUTHI', 100.990, '2016-09-06'),
(3, 'SUZUKI', 123456.900, '2016-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `upcming_rder`
--

CREATE TABLE `upcming_rder` (
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `price` double(10,3) NOT NULL,
  `car_id` int(4) NOT NULL,
  `carmdel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcming_rder`
--

INSERT INTO `upcming_rder` (`user`, `email`, `price`, `car_id`, `carmdel`) VALUES
('aaaaaaaaa', 'aaaaaaaaaa', 0.000, 0, ''),
('aaaaaaaaa', 'aaaaaaaaaa', 0.000, 0, ''),
('kjfhfhlfk', 'aaaaaaaaaa', 0.000, 0, ''),
('kjfhfhlfk', 'aaaaaaaaaa', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, ''),
('fguekjdh', '1qw23e4r', 0.000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `launched`
--
ALTER TABLE `launched`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ppular`
--
ALTER TABLE `ppular`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcming`
--
ALTER TABLE `upcming`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `launched`
--
ALTER TABLE `launched`
  MODIFY `car_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ppular`
--
ALTER TABLE `ppular`
  MODIFY `car_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upcming`
--
ALTER TABLE `upcming`
  MODIFY `car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
