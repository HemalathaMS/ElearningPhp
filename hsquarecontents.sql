-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 05:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsquarecontents`
--

-- --------------------------------------------------------

--
-- Table structure for table `attable`
--

CREATE TABLE `attable` (
  `fingerprint` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attable`
--

INSERT INTO `attable` (`fingerprint`) VALUES
('0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `address`, `subject`, `message`) VALUES
(1, 'Hemalatha M S', 'hemalathams24@gmail.com', 'suggestions', 'Can you add more courses, as you are doing good. '),
(2, 'Hema', 'hae@gmail.com', 'suggestions', 'dsgfdhafs');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `introduction` varchar(8000) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `chapter1a` varchar(8000) NOT NULL,
  `chapter1b` varchar(8000) NOT NULL,
  `chapter2a` varchar(8000) NOT NULL,
  `chapter2b` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `img`, `teacher_id`, `introduction`, `description`, `chapter1a`, `chapter1b`, `chapter2a`, `chapter2b`) VALUES
(4, 'HTML', 8000, 'images/html.jpg', 22, 'What is HTML?\r\n\r\nHTML is the standard markup language for creating Web pages.\r\n\r\n    HTML stands for Hyper Text Markup Language\r\n    HTML describes the structure of Web pages using markup\r\n    HTML elements are the building blocks of HTML pages\r\n    HTML elements are represented by tags\r\n    HTML tags label pieces of content such as \"heading\", \"paragraph\", \"table\", and so on\r\n    Browsers do not display the HTML tags, but use them to render the content of the page\r\n', 'HTML documents imply a structure of nested HTML elements. These are indicated in the document by HTML tags, enclosed in angle brackets thus: \r\nIn the simple, general case, the extent of an element is indicated by a pair of tags: a \"start tag\" and \"end tag\" . The text content of the element, if any, is placed between these tags.\r\n\r\nTags may also enclose further tag markup between the start and end, including a mixture of tags and text. This indicates further (nested) elements, as children of the parent element.\r\n\r\nThe start tag may also include attributes within the tag. These indicate other information, such as identifiers for sections within the document, identifiers used to bind style information to the presentation of the document, and for some tags such as the <img> used to embed images, the reference to the image resource.\r\n\r\nSome elements, such as the line break <br>, do not permit any embedded content, either text or further tags. These require only a single empty tag (akin to a start tag) and do not use an end tag. ', 'videos/html.webm', 'There are several common attributes that may appear in many elements :\r\n\r\n    The id attribute provides a document-wide unique identifier for an element. This is used to identify the element so that stylesheets can alter its presentational properties, and scripts may alter, animate or delete its contents or presentation. Appended to the URL of the page, it provides a globally unique identifier for the element, typically a sub-section of the page. For example, the ID \"Attributes\" in https://en.wikipedia.org/wiki/HTML#Attributes.\r\n    The class attribute provides a way of classifying similar elements. This can be used for semantic or presentation purposes. For example, an HTML document might semantically use the designation <class=\"notation\"> to indicate that all elements with this class value are subordinate to the main text of the document. In presentation, such elements might be gathered together and presented as footnotes on a page instead of appearing in the place where they occur in the HTML source. Class attributes are used semantically in microformats. Multiple class values may be specified; for example <class=\"notation important\"> puts the element into both the notation and the important classes.\r\n    An author may use the style attribute to assign presentational properties to a particular element. It is considered better practice to use an element\'s id or class attributes to select the element from within a stylesheet, though sometimes this can be too cumbersome for a simple, specific, or ad hoc styling.\r\n    The title attribute is used to attach subtextual explanation to an element. In most browsers this attribute is displayed as a tooltip.\r\n    The lang attribute identifies the natural language of the element\'s contents, which may be different from that of the rest of the document. For example, in an English-language document: ', 'videos/html2.webm', 'For example, <b>boldface</b> indicates that visual output devices should render \"boldface\" in bold text, but gives little indication what devices that are unable to do this (such as aural devices that read the text aloud) should do. In the case of both <b>bold</b> and <i>italic</i>, there are other elements that may have equivalent visual renderings but that are more semantic in nature, such as <strong>strong text</strong> and <em>emphasized text</em> respectively. It is easier to see how an aural user agent should interpret the latter two elements. However, they are not equivalent to their presentational counterparts: it would be undesirable for a screen-reader to emphasize the name of a book, for instance, but on a screen such a name would be italicized. Most presentational markup elements have become deprecated under the HTML 4.0 specification in favor of using CSS for styling.'),
(5, 'C++', 1000, 'uploads/images/1557082006.JPG', 22, 'C++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation. C++ is standardized by an ISO working group. C++ inherits most of C\'s syntax. C++ supports four types of memory management: static storage duration objects, thread storage duration objects, automatic storage duration objects, and dynamic storage duration objects. C++ introduces object-oriented programming (OOP) features to C. It offers classes, which provide the four features commonly present in OOP (and some non-OOP) languages: abstraction, encapsulation, inheritance, and polymorphism. One distinguishing feature of C++ classes compared to classes in other programming languages is support for deterministic destructors, which in turn provide support for the Resource Acquisition is Initialization (RAII) concept.', 'In this course of C++, the user will be able to know about tokens like constants, keywords, variables, data types etc in detail. With this basics, the user will be able to know basics of any other language also. C++ is a object oriented language. It becomes important for one to know what OOPs concept is and how to implement it in any one language at least. With the help of this course, the user can fully implement OOPs concept in C++ language. Modularity improves the efficiency of code. This can be brought with the help of functions. Memory management is important in any code. This can be managed with the help of constructors and destructors. Hence, with the help of this course, the user can learn from scratch what C++ is and also code to advance levels.', 'videos/c1.mp4', 'Constant, variable\r\nThis teaches about the different data types, memory usage, constants, memory storage pattern etc.\r\n', 'videos/c2.mp4', 'Oops\r\nThis video starts with differences between procedural programming and oops concept, how data and functions are stored, basic oops concept, coding tempelet, clases, access modifiers, etc.\r\n'),
(6, 'Bootstrap', 3000, 'images/bs.jpg', 22, 'Bootstrap is a free front-end framework for faster and easier web development. Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins. Bootstrap also gives you the ability to easily create responsive designs. Advantages of Bootstrap are- Easy to use, Responsive features, Mobile-first approach, Browser compatibility.', 'As we know, bootstrap is a front-end tool to design the pages more effectively. This is just the beginning. More focus should be given to know about the grid systems, grid classes, how bootstrap is to be set up, what exactly and how bootstrap works etc. All these, makes learning systematic and helps to learn how to proceed with other technologies further.', 'videos/bootstrap1.mp4', 'What is bootstrap\r\nThis says what exactly bootstrap is, advantages of bootstrap, what responsive web is, development time usage and consistency in programming, etc.\r\n', 'videos/bootstrap2.mp4', 'Bootstrap grid system\r\nThis says what bootstrap grid system is, change with bootstrap classes with devices, addition of stylesheets, etc. This demonstrates the concepts with programming examples which helps in getting clear with concepts.\r\n'),
(7, 'JAVA', 5000, 'images/java.jpg', 22, 'Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers \"write once, run anywhere\" (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture. Java is one of the most popular programming languages in use, particularly for client-server web applications.', 'In this course of java, the user will be able to know about tokens like constants, keywords, variables, data types etc in detail. With this basics, the user will be able to know basics of any other language also. Java is a object oriented language. It becomes important for one to know what OOPs concept is and how to implement it in any one language at least. With the help of this course, the user can fully implement OOPs concept in java language. This Java course starts with basics of java right from steps of installation, OOPs concept, programming and also about code conversion. This helps the user', 'videos/java1.mp4', 'Keywords\r\nThis starts with the basic java templet, knowledge about what constants, variables and data type is, variable naming strategies etc. Explaination about java code lifecycle is also give here. This also explains about compiling code in terminal. This helps the user to get to know about the terminal codes also. \r\n', 'videos/java2.mp4', 'Programming\r\nThis video teaches about what class is, creation of a main function, terminal commands like cd, javac etc. This teaches the student about the basic java templating.\r\n'),
(8, 'Python', 2000, 'images/my.jpg', 22, '', '', '', '', '', ''),
(11, 'PHP', 8000, 'images/php.JPG', 23, 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.\r\nPHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP code may also be executed with a command-line interface (CLI) and can be used to implement standalone graphical applications. PHP defines a large array of functions in the core language and many are also available in various extensions; these functions are well documented in the online PHP documentation. However, the built-in library has a wide variety of naming conventions and associated inconsistencies.\r\n', 'PHP is a popular server-side script used widely. It’s main advantage is that it can be combined with HTML. In order to accomplish this successfully, one has to know how to declare variables in this language, declare arrays, concatenation of strings using single quotes etc. All these topics will be covered in this course and help the user to create a server script successfully.', 'videos/php1.mp4', 'Variables\r\nThis video lecture helps to analyse what a variable is, how to declare and use them. This starts off, with how to create a php script, declaration of a variable and usage echo statement.\r\n', 'videos/php2.mp4', 'Array\r\nThis video lecture helps to create an array in different types, retrieval of elements of an array, commenting ways, etc. This also teaches, how to assign values to indices of an array, access them with different indexed value. print_r() functions usage is also explained here.\r\n'),
(13, 'Web Design', 10000, 'uploads/images/1555765991.jpg', 22, 'course intorsudbfddddddddddddddddddddddddddddddddddddddddd', 'dshdhdaghshfjddddddddddddddddddddddddddddddddddddddddddddddd', 'uploads/videos/1555765772.mp4', 'dgfsjgjaaDfddddddddddddddddddddddddddddddddddd', 'uploads/videos/3111531640.mp4', 'wagtfb dfrgfddddddddddddddddddddddddddddddddddddd'),
(14, 'My SQL', 1540, 'uploads/images/1557335408.png', 22, 'MySQL is an open-source relational database management system (RDBMS). MySQL is written in C and C++. Its SQL parser is written in yacc, but it uses a home-brewed lexical analyzer. When using some storage engines other than the default of InnoDB, MySQL does not comply with the full SQL standard for some of the implemented functionality, including foreign key references. MySQL can be built and installed manually from source code, but it is more commonly installed from a binary package unless special customizations are required. On most Linux distributions, the package management system can download and install MySQL with minimal effort, though further configuration is often required to adjust security and optimization settings. MySQL began as a low-end alternative to more powerful proprietary databases, it has gradually evolved to support higher-scale needs as well. It is still most commonly used in small to medium scale single-server deployments.', 'My SQL is a popular backend storage system. Knowing this, really adds value to the resume. The course begins with installation of the software. The basic knowledge starts with creating a database, entering data into it, retrival of data, search for a value. With this knowledge, one can crate a data, populate it, retrive data, search for it.', 'videos/sql1.mp4', 'Retrieving the data\r\nThis video starts with setting up or creating a database table, setting its variable type, primary key, foreign keys, populating with data, etc. This also deals with PHP code. In this part, the connection to the database code, error precautions, query executions, retrieval of data and printing of the same is demonstrated.\r\n', 'videos/sql2.mp4', 'Searching with php\r\nThis video starts with setting up or creating a database table, setting its variable type, primary key, foreign keys, populating with data, etc. This is followed by creating a template HTML page, demo of GET variable, logic behind searching for a keyword etc.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `phoneNumber` varchar(1000) NOT NULL,
  `isTeacher` int(100) NOT NULL DEFAULT '0',
  `fingerprint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `city`, `phoneNumber`, `isTeacher`, `fingerprint`) VALUES
(22, 'Hemalatha M S', 'hemalathams24@gmail.com', 'd21ecc6ea115eabccb7a5b8d0222b7c3', 'Bangalore', '9964580124', 1, '1'),
(23, 'hhh', 'hhhh@gmail.com', 'Hhhh1111*', 'Bangalore', '1234567890', 0, ''),
(24, 'Hema', 'hema@gmail.com', 'd21ecc6ea115eabccb7a5b8d0222b7c3', 'Bangalore', '9988008899', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(50, 23, 4, 'Billed'),
(51, 23, 8, 'Billed'),
(52, 23, 5, 'Billed'),
(53, 22, 4, 'Billed'),
(54, 22, 4, 'Billed'),
(55, 22, 6, 'Billed'),
(57, 22, 13, 'Billed'),
(58, 22, 5, 'Billed'),
(59, 22, 7, 'Billed'),
(60, 22, 8, 'Billed'),
(61, 22, 11, 'Billed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attable`
--
ALTER TABLE `attable`
  ADD PRIMARY KEY (`fingerprint`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
