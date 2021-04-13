CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `tblproduct` (
  `prod_id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL UNIQUE KEY,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `payment` (
  `p_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
  `username` TEXT NOT NULL, 
  `paymethod` TEXT NOT NULL, 
  `address` TEXT NOT NULL,
  `qty` TEXT NOT NULL 
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `events` (
  `evt_id` int(30) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `title` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL,
  `location` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  `image` LONGBLOB NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tblproduct` (`name`, `code`, `image`, `price`) VALUES
('Donkey on a Horse', 'Art1', '/Project/static/images/majnubhai.jpg', 50000.00),
('The Fairy Gate', 'Art2', '/Project/static/images/home2.jpg', 7500.00),
('Cyberpunk', 'Art3', '/Project/static/images/home3.jpg', 24500.00),
('Whistling Woods', 'Art4', '/Project/static/images/home4.jpg', 19500.00),
('A Beautiful Sunrise', 'Art5', '/Project/static/images/home.jpg', 11500.00);

-- description for event table:
-- desc 3 = "The gallery nurtures the capacity for learning and experimentation in art. We guide students to develop their personal expression, to become visually literate citizens or to simply enjoy the process of creativity. We emphasize a collaborative learning environment across a wide range of disciplines." 
-- desc 2 = "The Art Studio's program encompasses a broad range of subjects designed to meet the needs of amateur, intermediate and advanced students and help them explore their artistic and creative potential to the fullest."
-- ​desc 1 = "Welcome to The Art Studio Mumbai! We are a small, independent art studio offering a range of art education programs for all age groups and skill levels."
