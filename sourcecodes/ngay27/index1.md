# navicat
trong navicat 1 connection sẽ bao gồm nhiều cơ sở dữ liệu  
1 CSDL sẽ gồm nhiều table   
1 table sẽ gốm nhiều hàng  
## câu lệnh tạo 1 table 
``` 
CREATE TABLE `sample`.`ten_bang`  (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `student_birthday` date NULL,
  `student_note` text NULL,
  `student_gender` tinyint NULL,
  PRIMARY KEY (`student_id`)
);
```