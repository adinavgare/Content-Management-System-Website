-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 05:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalsoft_technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `image`, `description`) VALUES
(1, 0x232043726561746520746865206d796e6574776f726b206e6574776f726b0a7265736f757263652022676f6f676c655f636f6d707574655f6e6574776f726b2220226d796e6574776f726b22207b0a20206e616d65203d20226d796e6574776f726b220a202023205245534f555243452070726f7065727469657320676f20686572650a20206175746f5f6372656174655f7375626e6574776f726b73203d202274727565220a7d0a23204164642061206669726577616c6c2072756c6520746f20616c6c6f7720485454502c205353482c2052445020616e642049434d502074726166666963206f6e206d796e6574776f726b0a7265736f757263652022676f6f676c655f636f6d707574655f6669726577616c6c2220226d796e6574776f726b2d616c6c6f772d687474702d7373682d7264702d69636d7022207b0a20206e616d65203d20226d796e6574776f726b2d616c6c6f772d687474702d7373682d7264702d69636d70220a202023205245534f555243452070726f7065727469657320676f20686572650a20206e6574776f726b203d20676f6f676c655f636f6d707574655f6e6574776f726b2e6d796e6574776f726b2e73656c665f6c696e6b0a2020616c6c6f77207b0a2020202070726f746f636f6c203d2022746370220a20202020706f727473202020203d205b223232222c20223830222c202233333839225d0a20207d0a2020616c6c6f77207b0a2020202070726f746f636f6c203d202269636d70220a20207d0a2020736f757263655f72616e676573203d205b22302e302e302e302f30225d0a7d0a232043726561746520746865206d796e65742d75732d766d20696e7374616e63650a6d6f64756c6520226d796e65742d75732d766d22207b0a2020736f7572636520202020202020202020203d20222e2f696e7374616e6365220a2020696e7374616e63655f6e616d65202020203d20226d796e65742d75732d766d220a2020696e7374616e63655f7a6f6e65202020203d202275732d63656e7472616c312d61220a2020696e7374616e63655f6e6574776f726b203d20676f6f676c655f636f6d707574655f6e6574776f726b2e6d796e6574776f726b2e73656c665f6c696e6b0a7d0a232043726561746520746865206d796e65742d65752d766d2220696e7374616e63650a6d6f64756c6520226d796e65742d65752d766d22207b0a2020736f7572636520202020202020202020203d20222e2f696e7374616e6365220a2020696e7374616e63655f6e616d65202020203d20226d796e65742d65752d766d220a2020696e7374616e63655f7a6f6e65202020203d20226575726f70652d77657374312d64220a2020696e7374616e63655f6e6574776f726b203d20676f6f676c655f636f6d707574655f6e6574776f726b2e6d796e6574776f726b2e73656c665f6c696e6b0a7d, 'mynetwork file.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_name` varchar(255) DEFAULT NULL,
  `Admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_name`, `Admin_password`) VALUES
('Aditya', '123'),
('Shraddha Shinde', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `image` varchar(205) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `resume` blob NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients_home`
--

CREATE TABLE `clients_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_home`
--

INSERT INTO `clients_home` (`id`, `title`, `image`, `ranking`) VALUES
(5, 'google_img', 'google.png', 1),
(6, 'akamai_img', 'imagesakamai.png', 2),
(7, 'autodesk_img', 'autodesk.png', 3),
(8, 'ebay_img', 'ebay.png', 4),
(9, 'gr_image', 'gr.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_home`
--

CREATE TABLE `footer_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_home`
--

INSERT INTO `footer_home` (`id`, `title`, `subtitle`, `link`, `logo`, `ranking`) VALUES
(1, 'footer', 'link', 'www.footer.com', 'Screenshot (53).png', 2),
(2, 'footer', '', '', '', 0),
(3, 'fy', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `Menu_name` varchar(255) DEFAULT NULL,
  `Created_date` date DEFAULT NULL,
  `Ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Menu_name`, `Created_date`, `Ranking`) VALUES
(22, 'About us', '2023-06-09', 1),
(23, 'Services', '2023-06-16', 2),
(24, 'Customers', '2023-06-24', 3),
(25, 'Careers', '2023-06-18', 4),
(26, 'Blogs', '2023-06-06', 5),
(27, 'Solutions', '2023-06-09', 6);

-- --------------------------------------------------------

--
-- Table structure for table `services_home`
--

CREATE TABLE `services_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_home`
--

INSERT INTO `services_home` (`id`, `title`, `subtitle`, `description`, `logo`, `ranking`, `date`) VALUES
(1, 'CRM', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'fa fa-mobile', 1, '2023-06-22'),
(2, 'Application Development', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fas fa-mail-bulk', 2, '2023-06-22'),
(3, 'Data Engineering/ Analytics', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fas fa-chart-line', 3, '2023-06-22'),
(4, 'SQA Services', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa fa-cogs', 4, '2023-06-22'),
(5, 'Staffing Service', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa fa-users', 5, '2023-06-22'),
(6, 'Cloud Service', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa fa-cloud', 6, '2023-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `slider_home`
--

CREATE TABLE `slider_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_home`
--

INSERT INTO `slider_home` (`id`, `title`, `image`, `ranking`) VALUES
(2, 'slider_img1', 'slide1.jpg', 1),
(3, 'slider_img2', 'slide2.jpg', 2),
(4, 'slider_img3', 'slide3.jpg', 3),
(6, 'slider_img4', 'slide4.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `solution_home`
--

CREATE TABLE `solution_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solution_home`
--

INSERT INTO `solution_home` (`id`, `title`, `subtitle`, `description`, `logo`, `ranking`, `date`) VALUES
(1, 'Web-Based', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa-solid fa-globe fa-beat-fade', 1, '2023-06-22'),
(2, 'Application Security', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fas fa-thin fa-key fa-beat-fade', 2, '2023-06-22'),
(3, 'Big Data Analytics', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa-solid fa-database fa-beat-fade', 3, '2023-06-22'),
(4, 'Digital banking sales and services', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fas fa-duotone fa-landmark fa-beat-fade', 4, '2023-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `submenu_name` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `menu_id`, `submenu_name`, `created_date`, `ranking`) VALUES
(4, 27, 'Big Data Analytics', '2023-06-22', 1),
(5, 27, 'Web-Based ', '2023-06-22', 2),
(6, 27, 'Digital Bank & Services', '2023-06-22', 3),
(7, 27, 'Application Security', '2023-06-22', 4),
(8, 27, 'ffff', '2023-06-22', 5),
(13, 0, 'add', '2023-06-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_home`
--
ALTER TABLE `clients_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_home`
--
ALTER TABLE `footer_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_home`
--
ALTER TABLE `services_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_home`
--
ALTER TABLE `slider_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_home`
--
ALTER TABLE `solution_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients_home`
--
ALTER TABLE `clients_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer_home`
--
ALTER TABLE `footer_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services_home`
--
ALTER TABLE `services_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_home`
--
ALTER TABLE `slider_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `solution_home`
--
ALTER TABLE `solution_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
