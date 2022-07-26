CREATE TABLE `bookdb`.`books`  (
`book_id` int NOT NULL AUTO_INCREMENT,
`book_title` varchar(255) NULL COMMENT 'tieu de sach',
`book_price` decimal(10, 2) NULL COMMENT 'gia tien',
`book_intro` tinytext NULL COMMENT 'gioi thieu sach',
`book_content` text NULL COMMENT 'noi dung sach',
`book_created` timestamp NULL COMMENT 'thoi gian tao sach',
`book_author` int(11) NULL COMMENT 'tac gia sach',
PRIMARY KEY (`book_id`)
);

CREATE TABLE `bookdb`.`authors`  (
`author_id` int NOT NULL AUTO_INCREMENT,
`author_name` varchar(255) NULL COMMENT 'ten tac gia',
`author_email` varchar(255) NULL,
`author_phone` varchar(255) NULL,
PRIMARY KEY (`author_id`)
);