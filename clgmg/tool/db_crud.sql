-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 10:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tdata`
--

CREATE TABLE `tdata` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdata`
--

INSERT INTO `tdata` (`id`, `title`, `description`, `dateTime`) VALUES
(1, 'PHP language', 'PHP is a server-side scripting language. It\'s very popular for web development.', '2019-02-21 17:27:33'),
(20, 'CodeIgniter', 'CodeIgniter is an Application Development Framework - a toolkit - for people\r\nwho build web sites using PHP. Its goal is to enable you to develop projects\r\nmuch faster than you could if you were writing code from scratch, by providing\r\na rich set of libraries for commonly needed tasks, as well as a simple\r\ninterface and logical structure to access these libraries. CodeIgniter lets\r\nyou creatively focus on your project by minimizing the amount of code needed\r\nfor a given task.', '2019-02-22 02:43:30'),
(21, 'Laravel', 'Laravel is a web application framework with an expressive, elegant syntax. ... Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.', '2019-02-22 03:24:02'),
(22, 'jQuery', 'jQuery is not a language, but it is a well-written JavaScript code. As quoted on the official jQuery website, \"it is a fast and concise JavaScript Library that simplifies HTML document traversing, event handling, animating, and Ajax interactions for rapid web development\".', '2019-02-22 03:24:50'),
(23, 'Json', 'JSON (JavaScript Object Notation) is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language, Standard ECMA-262 3rd Edition - December 1999.', '2019-02-22 03:25:31'),
(24, 'AJAX', 'AJAX = Asynchronous JavaScript and XML. AJAX is a technique for creating fast and dynamic web pages. AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.', '2019-02-22 03:26:47'),
(25, 'Node.js', 'Node.js is a platform built on Chrome&amp;#039;s JavaScript runtime for easily building fast and scalable network applications. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.', '2019-02-22 03:27:43'),
(26, 'Node.js', 'Node.js was developed viewing it as a back end scripting language only. Though it can also be used in the front-end but the popularity and ease of working in Angular.js and other front-end languages disapprove Node.js to be used in the front end. ... Nodejs is a runtime environment to execute JavaScript serverside.', '2019-02-22 03:29:03'),
(27, 'Is a server?', 'Node.js is a server-side environment that allows Node developers to build servers and network applications with JavaScript for the first time. This means entire sites can be run on a unified JavaScript stack—both the client-side software and the server-side software.', '2019-02-22 03:30:53'),
(28, 'PHP', 'PHP stands for Hypertext Preprocessor (no, the acronym doesn\'t follow the name). It\'s an open source, server-side, scripting language used for the development of web applications. By scripting language, we mean a program that is script-based (lines of code) written for the automation of tasks', '2019-02-22 03:31:38'),
(30, 'PHP/FI.', 'PHP, as it\'s known today, is actually the successor to a product named PHP/FI. Created in 1994 by Rasmus Lerdorf, the very first incarnation of PHP was a simple set of Common Gateway Interface (CGI) binaries written in the C programming language.', '2019-02-22 03:33:13'),
(31, 'Tahmid', 'A well-known software Engineer. Basically, develop the web application and work with API. \r\n\r\nWork with PHP framework and research with it.', '2019-02-22 03:37:13'),
(32, 'Git', 'Git is a Distributed Version Control tool that is used to store different versions of a file in a remote or local repository. It is used to track changes in the source code. It allows multiple developers to work together. A VCS allows you to keep every change you make in the code repository.', '2019-02-22 03:38:26'),
(33, 'gitHub', 'A famous web application for using git', '2019-02-22 03:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdata`
--
ALTER TABLE `tdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdata`
--
ALTER TABLE `tdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
