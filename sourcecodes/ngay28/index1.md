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

# lay ra tat ca thong tin cua cac cuon sach kem theo ten tac gia và phone
SELECT b.*, a.author_name, a.author_phone FROM books as b LEFT JOIN `authors` as a ON b.book_author = a.author_id

SELECT b.*, a.author_name, a.author_phone FROM books as b INNER JOIN `authors` as a ON b.book_author = a.author_id

# lay ra tat ca cac thong tin cua author kem theo ten sach và gia tien sach mà author đó xuất bản . bao gồm cả các author không viết 1 cuốn sách nào
SELECT b.*,a.author_id, a.author_name, a.author_phone FROM books as b RIGHT JOIN `authors` as a ON b.book_author = a.author_id

# lay ra cac tac gia khong viet 1 cuon sach nao 
select `authors`.*, books.book_id from `authors` LEFT JOIN books ON `authors`.author_id = books.book_author WHERE books.book_id IS NULL
ORDER BY `authors`.author_id

# lay ra cac tac gia bat buoc viet ít nhat 1 cuon sach 
select `authors`.*, books.book_id from `authors` LEFT JOIN books ON `authors`.author_id = books.book_author WHERE books.book_id IS NOT NULL
ORDER BY `authors`.author_id

CREATE TABLE `bookdb`.`category`  (
`category_id` int NOT NULL AUTO_INCREMENT,
`category_name` varchar(255) NULL,
`category_desc` text NULL,
`status` int(11) NULL COMMENT 'trang thai danh muc 1 la active 0 là deactive',
`parent_id` int NULL COMMENT 'id cha của danh mục',
PRIMARY KEY (`category_id`)
);
# -> left join
SELECT a.*,b.category_name as parent_name, b.`status` as parent_status FROM category as a LEFT JOIN category as b ON a.parent_id = b.category_id
order by a.category_id asc
# -> self join
SELECT a.*, b.category_name as parent_name,b.`status` as parent_status
FROM category as a, category as b
WHERE a.category_id <> b.category_id
AND a.parent_id = b.category_id
ORDER BY a.category_id asc





