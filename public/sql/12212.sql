DROP database projectquantridulieu;
CREATE DATABASE projectquantridulieu;

USE projectquantridulieu;

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
INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(17, 'Miền Bắc'),
(18, 'Miền Nam'),
(19, 'Miền Trung'),
(20, 'Biển Đảo'),
(21, 'Châu ÂU'),
(22, 'Châu Á'),
(23, 'Đông Nam Á');

DROP TABLE IF EXISTS tour;
CREATE TABLE tour (
  id_tour INT(50) NOT NULL AUTO_INCREMENT,
  tourname VARCHAR(255) NOT NULL,
  mota TEXT,
  rating INT(11),
  tourguide VARCHAR(50),
  price FLOAT(10,2),
  hinh VARCHAR(255),
  soluong int(50),
  id_danhmuc int(50),
 FOREIGN KEY (id_danhmuc) REFERENCES danhmuc(id_danhmuc),
  PRIMARY KEY (id_tour)
);

CREATE TABLE login_log (
  id INT NOT NULL AUTO_INCREMENT,
  id_user INT,
  account varchar(50),
  thoi_gian DATETIME,
  PRIMARY KEY (id)
);



INSERT INTO nguoidung (id_user, account, ten_user, password, role) VALUES
			('1','taikhoan1','name mot', '123456',1),
            ('2','taikhoan2','name hai', '123456',0),
            ('3','taikhoan3','name ba', '123456',1),
            ('4','taikhoan4','name bon', '123456',0);
 
 

INSERT INTO tour (tourname, mota, rating, tourguide, price, hinh, id_danhmuc, soluong)
VALUES 
('Tour Hàn Quốc 7 ngày 6 đêm', 'Tour Hàn Quốc 7 ngày 6 đêm là chuyến hành trình thú vị khám phá đất nước sơn cước với những điểm đến hấp dẫn như Seoul, Jeju, Busan. Du khách sẽ được đắm mình trong không gian ẩm thực đậm chất Hàn Quốc, tham quan những địa danh nổi tiếng và trải nghiệm nhiều hoạt động thú vị. Hãy cùng chúng tôi khám phá xứ sở kim chi đầy sức hút!', 4, 'Huong Tran', 1200.50, 'hanquoc.jpg', 17, 10),
('Tour Nhật Bản 10 ngày 9 đêm', 'Tour Nhật Bản 10 ngày 9 đêm là chuyến hành trình đầy màu sắc khám phá xứ sở hoa anh đào với những địa danh nổi tiếng như Kyoto, Tokyo, Osaka. Du khách sẽ được tham quan các di sản văn hóa, tận hưởng không gian thiên nhiên tuyệt đẹp và trải nghiệm ẩm thực đặc trưng của Nhật Bản. Hãy đặt chân đến đất nước Phù Tang để cảm nhận những giá trị tuyệt vời nhất!', 5, 'Nguyen Van A', 2500.00, 'nhatban.jpg', 18, 10),
('Tour Châu Âu 15 ngày 14 đêm', 'Tour Châu Âu 15 ngày 14 đêm là chuyến hành trình thú vị đưa du khách khám phá các thành phố đẹp nhất châu Âu như Pháp, Italy, Tây Ban Nha. Du khách sẽ được đắm mình trong không gian kiến trúc, tận hưởng ẩm thực đặc trưng của từng quốc gia và trải nghiệm nhiều hoạt động thú vị. Hãy cùng chúng tôi khám phá châu lục giàu sắc màu này!', 4, 'Tran Thi B', 3500.00, 'chauau.jpg', 21, 10),
('Tour New Zealand 12 ngày 11 đêm', 'Tour New Zealand 12 ngày 11 đêm là chuyến hành trình thú vị đưa du khách khám phá đất nước của những kỳ quan thiên nhiên với những địa danh nổi tiếng như Queenstown, Auckland, Rotorua. Du khách sẽ được tham quan các điểm du lịch, trải nghiệm các hoạt động thú vị và tận hưởng không gian trong lành của thiên nhiên New Zealand. Hãy đặt chân đến xứ sở này để trải nghiệm những điều tuyệt vời nhất!', 5, 'Nguyen Van B', 5000.00, 'newzealand.jpg', 20, 10),
('Tour Hội An - Huế 5 ngày 4 đêm', 'Tour Hội An - Huế 5 ngày 4 đêm là chuyến hành trình đưa du khách khám phá các điểm du lịch nổi tiếng ở miền Trung Việt Nam như Cố đô Huế, Phố cổ Hội An, Bà Nà Hills. Du khách sẽ được trải nghiệm văn hóa, ẩm thực đặc trưng của miền Trung và tận hưởng không gian thiên nhiên tuyệt đẹp. Hãy đặt chân đến miền Trung để trải nghiệm những điều thú vị nhất!', 4, 'Le Thi C', 800.00, 'hoianhue.jpg', '19', 10),
('Tour Malaysia - Singapore 8 ngày 7 đêm', 'Tour Malaysia - Singapore 8 ngày 7 đêm là chuyến hành trình đưa du khách khám phá những điểm đến nổi tiếng của hai đất nước Malaysia và Singapore như Kuala Lumpur, Malacca, Sentosa, Garden by the Bay. Du khách sẽ được tận hưởng không gian đô thị hiện đại, trải nghiệm văn hóa đa dạng và thưởng ngoạn cảnh quan thiên nhiên tuyệt đẹp. Hãy đặt chân đến đất nước Đông Nam Á này để khám phá những điều thú vị nhất!', 4, 'Tran Van A', 1500.00, 'malaysia_singapore.jpg', 23, 10),
('Tour Đà Lạt - Nha Trang 4 ngày 3 đêm', 'Tour Đà Lạt - Nha Trang 4 ngày 3 đêm là chuyến hành trình đưa du khách khám phá các điểm đến du lịch nổi tiếng của miền Trung Việt Nam như Thành phố hoa Đà Lạt, vịnh Nha Trang. Du khách sẽ được tận hưởng không gian thiên nhiên tươi đẹp, tham gia các hoạt động vui chơi giải trí và trải nghiệm ẩm thực đặc trưng của vùng đất này. Hãy đặt chân đến miền Trung Việt Nam để tận hưởng những giây phút tuyệt vời cùng chúng tôi!', 3, 'Pham Thi D', 350.00, 'dalatnhatrang.jpg', 19, 10),
('Tour Bali 6 ngày 5 đêm', 'Tour Bali 6 ngày 5 đêm là chuyến hành trình đưa du khách khám phá đảo Bali - một trong những điểm đến hàng đầu của Indonesia với những cảnh quan đẹp như tranh vẽ, các ngôi đền, ngôi làng cổ truyền, bãi biển tuyệt đẹp. Du khách sẽ được trải nghiệm văn hóa độc đáo của người Bali và thưởng ngoạn những danh lam thắng cảnh nổi tiếng. Hãy đặt chân đến đảo Bali để trải nghiệm những điều tuyệt vời nhất!', 4, 'Nguyen Van C', 1200.00, 'bali.jpg', 20, 10);

	
select * from tour;


delimiter $$
Drop procedure if exists usp_GetTours $$
CREATE PROCEDURE usp_GetTours (
    IN keyw VARCHAR(100),
    IN id_danhmuc_input VARCHAR(100)
)
BEGIN
    SELECT *
    FROM tour
    WHERE id_danhmuc LIKE CONCAT('%', id_danhmuc_input, '%') and tourname LIKE CONCAT('%', keyw, '%')
    ORDER BY id_danhmuc DESC;
END

$$
call usp_Gettours('T', '');$$
 call usp_GetTours('', 	'');$$

drop trigger if exists log_login_time;$$
CREATE TRIGGER log_login_time
AFTER UPDATE ON nguoidung FOR EACH ROW
BEGIN
  IF NEW.thoi_gian_dang_nhap <> OLD.thoi_gian_dang_nhap THEN
    INSERT INTO login_log (id_user, thoi_gian)
    VALUES (NEW.id_user, NOW());
  END IF;
END;$$


UPDATE nguoidung SET thoi_gian_dang_nhap = NOW() WHERE id_user = 1 ;$$

$$
Drop procedure if exists delete_danhmuc $$
CREATE PROCEDURE delete_danhmuc(IN id INT)
BEGIN
  START TRANSACTION;
  DELETE FROM tour WHERE id_danhmuc = id;
  DELETE FROM danhmuc WHERE id_danhmuc = id;
  COMMIT;
END $$




