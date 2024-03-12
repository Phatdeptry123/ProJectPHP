DROP database projectcongngheweb;
CREATE DATABASE ProJectCongNgheWeb;

USE ProJectCongNgheWeb;

DROP TABLE IF EXISTS nguoidung;
DROP TABLE IF EXISTS nguoidung;
CREATE TABLE nguoidung (
  id_user int(50) NOT NULL AUTO_INCREMENT,
  account varchar(50),
  ten_user VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  role tinyint,
  thoi_gian_dang_nhap DATETIME,
  PRIMARY KEY (id_user)
);
DROP TABLE IF EXISTS danhmuc;
create table danhmuc (
	id_danhmuc int(50) NOT NULL AUTO_INCREMENT,
    ten_danhmuc varchar(50),
    PRIMARY KEY (id_danhmuc)
);
CREATE TABLE login_log (
  id INT NOT NULL AUTO_INCREMENT,
  id_user INT,
  thoi_gian DATETIME,
  PRIMARY KEY (id)
);

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(17, 'Tiểu thuyết'),
(18, 'Kinh tế'),
(19, 'Tâm lý học'),
(20, 'Khoa học'),
(21, 'Thiếu nhi'),
(22, 'Hài hước'),
(23, 'Lịch sử');

DROP TABLE IF EXISTS book;
CREATE TABLE book (
  id_book INT(11) NOT NULL AUTO_INCREMENT,
  bookname VARCHAR(50) NOT NULL,
  mota TEXT,
  rating INT(11),
  nxb VARCHAR(50),
  author VARCHAR(50),
  price FLOAT(10,2),
  hinh VARCHAR(255),
  id_danhmuc int(50),
 FOREIGN KEY (id_danhmuc) REFERENCES danhmuc(id_danhmuc),
  PRIMARY KEY (id_book)
  
);





INSERT INTO nguoidung (id_user,account, ten_user, password, role) VALUES
			('1','taikhoan1','name mot', '123456',1),
            ('2','taikhoan2','name hai', '123456',0),
            ('3','taikhoan3','name ba', '123456',1),
            ('4','taikhoan4','name bon', '123456',0);
 
 
INSERT INTO book (id_book, id_danhmuc,bookname, mota, rating, nxb, author, price, hinh) VALUES
(1,17, 'Sapiens: A Brief History of Humankind', 'A fascinating account of the history of our species, from the emergence of Homo sapiens in Africa to the present day.', 4.5, 'Penguin Books', 'Yuval Noah Harari', 19.99, '1.jpg'),
(2,23, 'The Alchemist', 'A magical novel about following your dreams and discovering the true meaning of life.', 4.3, 'HarperOne', 'Paulo Coelho', 12.99, '2.jpg'),
(3,18, 'To Kill a Mockingbird', 'A powerful story about racism and injustice in the Deep South.', 4.8, 'Harper Perennial Modern Classics', 'Harper Lee', 9.99, '3.jpg'),
(4,19, 'The Great Gatsby', 'A classic novel about the American Dream and the excesses of the Roaring Twenties.', 4.2, 'Scribner', 'F. Scott Fitzgerald', 8.99, '4.jpg'),
(5,20, 'The Hobbit', 'An adventure story about hobbits, dwarves, wizards, and dragons, set in the fictional world of Middle-earth.', 4.7, 'Mariner Books', 'J.R.R. Tolkien', 14.99, '6.jpg'),
(6,21, 'Pride and Prejudice', 'A romantic novel about the trials and tribulations of love and marriage in Regency England.', 4.6, 'Penguin Classics', 'Jane Austen', 7.99, '5.jpg'),
(7,22, '1984', 'A dystopian novel about a totalitarian society where independent thought is outlawed and Big Brother is always watching.', 4.4, 'Signet Classics', 'George Orwell', 10.99, '1.jpg'),
(8,18, 'Brave New World', 'A dystopian novel about a future society where people are engineered to be happy and content, but at what cost?', 4.1, 'Harper Perennial Modern Classics', 'Aldous Huxley', 11.99, '2.jpg'),
(9,20,'The Catcher in the Rye', 'A coming-of-age novel about a teenage boy struggling to find his place in the world.', 4.0, 'Little, Brown and Company', 'J.D. Salinger', 9.99, '3.jpg'),
(10,23, 'The Lord of the Rings', 'An epic fantasy trilogy about a hobbit named Frodo Baggins and his quest to destroy the One Ring, which holds the power to enslave the world.', 4.9, 'Mariner Books', 'J.R.R. Tolkien', 29.99, '4.jpg');
            
	
select * from book;


delimiter $$
Drop procedure if exists usp_GetBooks $$
CREATE PROCEDURE usp_GetBooks (
    IN keyw VARCHAR(100),
    IN id_danhmuc_input VARCHAR(100)
)
BEGIN
    SELECT *
    FROM book
    WHERE id_danhmuc LIKE CONCAT('%', id_danhmuc_input, '%') and bookname LIKE CONCAT('%', keyw, '%')
    ORDER BY id_danhmuc DESC;
END

$$

 call usp_GetBooks('', 	'');$$


drop trigger if exists log_login_time;$$
CREATE TRIGGER log_login_time
AFTER UPDATE ON nguoidung FOR EACH ROW
BEGIN
  IF NEW.thoi_gian_dang_nhap <> OLD.thoi_gian_dang_nhap THEN
    INSERT INTO login_log (account, thoi_gian)
    VALUES (NEW.account, NOW());
  END IF;
END;
$$
Drop procedure if exists delete_danhmuc $$
CREATE PROCEDURE delete_danhmuc(IN id INT)
BEGIN
  START TRANSACTION;
  DELETE FROM book WHERE id_danhmuc = id;
  DELETE FROM danhmuc WHERE id_danhmuc = id;
  COMMIT;
END $$





